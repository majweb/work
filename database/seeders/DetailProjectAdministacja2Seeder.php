<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class DetailProjectAdministacja2Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Schema::disableForeignKeyConstraints();

        $inspektor_ochrony_danych = [
            [
                'id' => 7078,
                'name' => json_encode([
                    'pl' => 'Zapewnienie zgodności działalności organizacji z przepisami RODO oraz krajowymi regulacjami dotyczącymi ochrony danych osobowych.',
                    'en' => 'Ensuring the organization’s compliance with GDPR and national data protection regulations.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7079,
                'name' => json_encode([
                    'pl' => 'Systematyczna ocena procesów przetwarzania danych pod kątem zgodności z wymaganiami prawnymi.',
                    'en' => 'Regular assessment of data processing activities for legal compliance.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7080,
                'name' => json_encode([
                    'pl' => 'Identyfikowanie obszarów wymagających dostosowania i proponowanie zmian w procedurach przetwarzania danych.',
                    'en' => 'Identifying areas for adjustment and suggesting changes to data processing procedures.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7081,
                'name' => json_encode([
                    'pl' => 'Doradztwo dla kierownictwa i pracowników organizacji w zakresie ich obowiązków wynikających z przepisów ochrony danych.',
                    'en' => 'Providing guidance to management and staff on their obligations under data protection laws.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7082,
                'name' => json_encode([
                    'pl' => 'Udzielanie zaleceń dotyczących stosowania polityk i procedur przetwarzania danych.',
                    'en' => 'Advising on the application of data processing policies and procedures.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7083,
                'name' => json_encode([
                    'pl' => 'Informowanie o obowiązkach związanych z ochroną prywatności w codziennej działalności organizacji.',
                    'en' => 'Informing about privacy-related duties in the daily operations of the organization.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7084,
                'name' => json_encode([
                    'pl' => 'Organizowanie szkoleń dla pracowników na temat zasad ochrony danych osobowych, w tym najlepszych praktyk i obowiązków wynikających z RODO.',
                    'en' => 'Organizing training for staff on data protection principles, best practices, and GDPR obligations.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7085,
                'name' => json_encode([
                    'pl' => 'Podnoszenie świadomości wśród personelu na temat ryzyka naruszeń ochrony danych oraz konieczności zachowania poufności.',
                    'en' => 'Raising awareness among personnel about data breach risks and the importance of confidentiality.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7086,
                'name' => json_encode([
                    'pl' => 'Tworzenie materiałów edukacyjnych, takich jak broszury, poradniki i e-learning.',
                    'en' => 'Creating educational materials such as brochures, guides, and e-learning resources.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7087,
                'name' => json_encode([
                    'pl' => 'Regularne audyty procesów przetwarzania danych w celu zapewnienia ich zgodności z przepisami i politykami ochrony danych.',
                    'en' => 'Regular audits of data processing procedures to ensure compliance with regulations and data protection policies.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7088,
                'name' => json_encode([
                    'pl' => 'Przeprowadzanie ocen skutków dla ochrony danych (Data Protection Impact Assessment – DPIA) przy przetwarzaniach mogących naruszać prawa i wolności osób.',
                    'en' => 'Conducting Data Protection Impact Assessments (DPIA) for processing activities that may affect individuals’ rights and freedoms.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7089,
                'name' => json_encode([
                    'pl' => 'Dokumentowanie wyników audytów i ocen skutków oraz rekomendowanie działań naprawczych.',
                    'en' => 'Documenting audit and impact assessment results and recommending corrective actions.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7090,
                'name' => json_encode([
                    'pl' => 'Tworzenie wewnętrznych polityk i procedur dotyczących przetwarzania i ochrony danych osobowych, takich jak polityka prywatności i polityka bezpieczeństwa informacji.',
                    'en' => 'Creating internal policies and procedures for data processing and protection, such as privacy policies and information security policies.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7091,
                'name' => json_encode([
                    'pl' => 'Wdrażanie procedur reagowania na naruszenia ochrony danych oraz zarządzania danymi osobowymi.',
                    'en' => 'Implementing data breach response procedures and personal data management.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7092,
                'name' => json_encode([
                    'pl' => 'Aktualizacja polityk i procedur w miarę zmian w przepisach oraz potrzeb organizacji.',
                    'en' => 'Updating policies and procedures as regulations and organizational needs change.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7093,
                'name' => json_encode([
                    'pl' => 'Monitorowanie incydentów dotyczących bezpieczeństwa danych oraz wdrażanie procedur reagowania na naruszenia.',
                    'en' => 'Monitoring data security incidents and implementing breach response procedures.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7094,
                'name' => json_encode([
                    'pl' => 'Koordynowanie działań związanych z raportowaniem naruszeń do organu nadzorczego w ciągu 72 godzin, jeśli to wymagane.',
                    'en' => 'Coordinating data breach reporting to the supervisory authority within 72 hours, if required.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7095,
                'name' => json_encode([
                    'pl' => 'Prowadzenie dokumentacji naruszeń ochrony danych, analizowanie ich przyczyn oraz opracowywanie planów zapobiegania ich ponownemu wystąpieniu.',
                    'en' => 'Documenting data breaches, analyzing their causes, and developing prevention plans.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7096,
                'name' => json_encode([
                    'pl' => 'Obsługa zapytań oraz skarg dotyczących przetwarzania danych osobowych, w tym wniosków osób fizycznych o realizację ich praw wynikających z RODO.',
                    'en' => 'Handling inquiries and complaints related to data processing, including requests by individuals to exercise their GDPR rights.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7097,
                'name' => json_encode([
                    'pl' => 'Zapewnienie, że organizacja reaguje na żądania dostępu, sprostowania, usunięcia lub ograniczenia przetwarzania danych w odpowiednim czasie.',
                    'en' => 'Ensuring the organization responds to requests for access, rectification, deletion, or restriction of data processing in a timely manner.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7098,
                'name' => json_encode([
                    'pl' => 'Współpraca z działem prawnym w celu rozpatrywania skarg i zapytań.',
                    'en' => 'Collaborating with the legal department to address complaints and inquiries.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7099,
                'name' => json_encode([
                    'pl' => 'Działanie jako punkt kontaktowy dla organu nadzorczego ds. ochrony danych, takiego jak Prezes Urzędu Ochrony Danych Osobowych (PUODO).',
                    'en' => 'Acting as the contact point for the data protection supervisory authority, such as the President of the Personal Data Protection Office (PUODO).'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7100,
                'name' => json_encode([
                    'pl' => 'Współpraca z organem nadzorczym w trakcie kontroli oraz raportowanie naruszeń ochrony danych, jeśli to wymagane.',
                    'en' => 'Cooperating with the supervisory authority during inspections and reporting data breaches when required.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7101,
                'name' => json_encode([
                    'pl' => 'Udzielanie odpowiedzi na pytania organu nadzorczego oraz przekazywanie dokumentacji wymaganej do przeprowadzenia audytu.',
                    'en' => 'Responding to inquiries from the supervisory authority and providing documentation needed for audits.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7102,
                'name' => json_encode([
                    'pl' => 'Prowadzenie rejestru czynności przetwarzania danych osobowych w organizacji, zgodnie z wymaganiami RODO.',
                    'en' => 'Maintaining a record of processing activities within the organization, as required by GDPR.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7103,
                'name' => json_encode([
                    'pl' => 'Aktualizowanie rejestru przetwarzania danych przy każdej zmianie procesów lub wprowadzeniu nowych działań.',
                    'en' => 'Updating the processing activities record with each process change or new activity.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7104,
                'name' => json_encode([
                    'pl' => 'Dokumentowanie celów przetwarzania, kategorii danych, odbiorców danych oraz planowanych terminów ich przechowywania.',
                    'en' => 'Documenting processing purposes, data categories, data recipients, and planned retention periods.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7105,
                'name' => json_encode([
                    'pl' => 'Weryfikacja zgodności nowych systemów informatycznych, aplikacji lub narzędzi przetwarzających dane osobowe z przepisami ochrony danych.',
                    'en' => 'Verifying compliance of new IT systems, applications, or tools processing personal data with data protection regulations.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7106,
                'name' => json_encode([
                    'pl' => 'Ocena ryzyka dla prywatności przy wprowadzaniu nowych technologii oraz wdrażanie zasad ochrony prywatności w fazie projektowania (Privacy by Design).',
                    'en' => 'Assessing privacy risks when implementing new technologies and applying Privacy by Design principles.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7107,
                'name' => json_encode([
                    'pl' => 'Rekomendowanie rozwiązań technicznych i organizacyjnych mających na celu minimalizację ryzyka naruszeń danych.',
                    'en' => 'Recommending technical and organizational solutions to minimize data breach risks.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7108,
                'name' => json_encode([
                    'pl' => 'Przygotowywanie umów o powierzenie przetwarzania danych osobowych, które regulują przekazywanie danych między organizacją a podmiotami przetwarzającymi.',
                    'en' => 'Drafting data processing agreements that govern data transfers between the organization and data processors.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7109,
                'name' => json_encode([
                    'pl' => 'Ustalanie warunków przetwarzania danych przez zewnętrznych dostawców i podwykonawców, zgodnie z RODO.',
                    'en' => 'Setting data processing terms for external suppliers and contractors in line with GDPR.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7110,
                'name' => json_encode([
                    'pl' => 'Monitorowanie zgodności dostawców z wymaganiami RODO i organizacji w zakresie przetwarzania danych.',
                    'en' => 'Monitoring suppliers’ compliance with GDPR and organizational data processing requirements.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7111,
                'name' => json_encode([
                    'pl' => 'Sporządzanie okresowych raportów na temat stanu ochrony danych osobowych w organizacji.',
                    'en' => 'Preparing periodic reports on the state of personal data protection within the organization.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7112,
                'name' => json_encode([
                    'pl' => 'Przygotowywanie zestawień dotyczących realizacji wniosków osób fizycznych oraz zgłoszeń naruszeń ochrony danych.',
                    'en' => 'Compiling reports on data subject requests and data breach notifications.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7113,
                'name' => json_encode([
                    'pl' => 'Przekazywanie raportów zarządowi i przełożonym, wraz z rekomendacjami dotyczącymi działań poprawczych.',
                    'en' => 'Providing reports to management with recommendations for corrective actions.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7114,
                'name' => json_encode([
                    'pl' => 'Współpraca z działem IT w zakresie stosowania technicznych zabezpieczeń danych, takich jak szyfrowanie, kontrola dostępu, monitorowanie.',
                    'en' => 'Collaborating with the IT department on technical data security measures such as encryption, access control, and monitoring.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7115,
                'name' => json_encode([
                    'pl' => 'Udział w opracowywaniu i wdrażaniu procedur bezpieczeństwa informacji oraz zarządzania dostępem do danych osobowych.',
                    'en' => 'Participating in the development and implementation of information security procedures and data access management.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7116,
                'name' => json_encode([
                    'pl' => 'Wspieranie działań związanych z zapobieganiem cyberzagrożeniom, takim jak ataki phishingowe, malware czy nieautoryzowane wycieki danych.',
                    'en' => 'Supporting efforts to prevent cyber threats such as phishing attacks, malware, and unauthorized data leaks.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7117,
                'name' => json_encode([
                    'pl' => 'Opracowywanie szczegółowych procedur wewnętrznych, takich jak polityka retencji danych, procedury dostępu do danych, protokoły reagowania na incydenty.',
                    'en' => 'Developing detailed internal procedures such as data retention policies, data access protocols, and incident response protocols.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7118,
                'name' => json_encode([
                    'pl' => 'Aktualizowanie dokumentacji w miarę zmian w przepisach prawa oraz wytycznych organów nadzorczych.',
                    'en' => 'Updating documentation in response to changes in legal requirements and supervisory authorities’ guidelines.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7119,
                'name' => json_encode([
                    'pl' => 'Utrzymywanie dokumentacji, która jest dostępna dla audytorów, organu nadzorczego oraz innych odpowiednich podmiotów.',
                    'en' => 'Maintaining documentation that is accessible to auditors, supervisory authorities, and other relevant entities.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7120,
                'name' => json_encode([
                    'pl' => 'Monitorowanie przestrzegania zasad minimalizacji danych, aby organizacja przetwarzała jedynie dane niezbędne do realizacji określonych celów.',
                    'en' => 'Monitoring compliance with data minimization principles to ensure the organization processes only data necessary for specific purposes.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7121,
                'name' => json_encode([
                    'pl' => 'Przestrzeganie zasady ograniczenia przechowywania danych, aby były one przetwarzane tylko przez okres konieczny do realizacji celu.',
                    'en' => 'Adhering to data retention limitation principles to ensure data is processed only for the duration necessary to fulfill its purpose.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7122,
                'name' => json_encode([
                    'pl' => 'Weryfikacja, czy wprowadzone w organizacji procesy wspierają minimalizację zbieranych danych i ograniczenie czasu ich przechowywania.',
                    'en' => 'Verifying that organizational processes support data minimization and retention limitation.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7123,
                'name' => json_encode([
                    'pl' => 'Regularne uczestnictwo w szkoleniach dotyczących przepisów ochrony danych, RODO, cyberbezpieczeństwa oraz najlepszych praktyk branżowych.',
                    'en' => 'Regularly participating in training on data protection regulations, GDPR, cybersecurity, and industry best practices.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7124,
                'name' => json_encode([
                    'pl' => 'Aktualizowanie wiedzy na temat nowych regulacji, wytycznych organów nadzorczych oraz technologii związanych z ochroną danych.',
                    'en' => 'Staying updated on new regulations, supervisory authority guidelines, and technologies related to data protection.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7125,
                'name' => json_encode([
                    'pl' => 'Współpraca z innymi inspektorami ochrony danych w celu wymiany doświadczeń i podnoszenia standardów pracy.',
                    'en' => 'Collaborating with other data protection officers to share experiences and raise work standards.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ]

        ];
        $inspektor_obrotu_leki = [
            [
                'id' => 7126,
                'name' => json_encode([
                    'pl' => 'Nadzór nad działalnością hurtowni farmaceutycznych w zakresie przestrzegania przepisów dotyczących obrotu hurtowego lekami.',
                    'en' => 'Supervision of pharmaceutical wholesalers to ensure compliance with regulations on wholesale trade in medicines.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7127,
                'name' => json_encode([
                    'pl' => 'Upewnienie się, że procesy dystrybucji, magazynowania i transportu leków są zgodne z przepisami krajowymi i międzynarodowymi.',
                    'en' => 'Ensuring that distribution, storage, and transportation processes of medicines comply with national and international regulations.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7128,
                'name' => json_encode([
                    'pl' => 'Przeprowadzanie inspekcji w celu oceny zgodności działalności hurtowni z wymaganiami prawnymi i zasadami Dobrej Praktyki Dystrybucyjnej (DPD).',
                    'en' => 'Conducting inspections to assess the compliance of wholesalers with legal requirements and Good Distribution Practice (GDP) standards.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7129,
                'name' => json_encode([
                    'pl' => 'Kontrola, czy leki są przechowywane w odpowiednich warunkach, zgodnych z wymogami producentów, takimi jak temperatura, wilgotność i zabezpieczenia.',
                    'en' => 'Checking that medicines are stored in appropriate conditions as required by manufacturers, including temperature, humidity, and security.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7130,
                'name' => json_encode([
                    'pl' => 'Nadzór nad procedurami transportu leków, w tym utrzymanie stabilnych warunków transportu wrażliwych produktów.',
                    'en' => 'Supervising drug transportation procedures, including maintaining stable conditions for sensitive products during transit.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7131,
                'name' => json_encode([
                    'pl' => 'Sprawdzanie, czy hurtownie posiadają odpowiednie systemy monitorowania warunków środowiskowych, takie jak systemy alarmowe i kontrola temperatury.',
                    'en' => 'Ensuring that wholesalers have appropriate environmental monitoring systems in place, such as alarm systems and temperature control.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7132,
                'name' => json_encode([
                    'pl' => 'Przeprowadzanie audytów zgodności z zasadami DPD, które obejmują wymagania dotyczące przechowywania, transportu, dokumentacji i kontroli jakości leków.',
                    'en' => 'Conducting audits for compliance with GDP standards, covering requirements for storage, transport, documentation, and quality control of medicines.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7133,
                'name' => json_encode([
                    'pl' => 'Identyfikowanie niezgodności oraz monitorowanie działań korygujących podejmowanych przez hurtownie.',
                    'en' => 'Identifying non-compliance and monitoring corrective actions taken by wholesalers.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7134,
                'name' => json_encode([
                    'pl' => 'Wydawanie zaleceń dotyczących zmian w procedurach operacyjnych hurtowni w celu poprawy zgodności z DPD.',
                    'en' => 'Issuing recommendations for changes in wholesalers\' operational procedures to improve compliance with GDP.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7135,
                'name' => json_encode([
                    'pl' => 'Upewnienie się, że hurtownie posiadają odpowiednie procedury kontrolne, w tym sprawdzanie jakości, integralności opakowań oraz dat ważności produktów.',
                    'en' => 'Ensuring that wholesalers have adequate control procedures, including checking product quality, packaging integrity, and expiry dates.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7136,
                'name' => json_encode([
                    'pl' => 'Monitorowanie zasad przyjęcia i wydania leków oraz przeprowadzanie okresowych przeglądów ich zgodności z wymaganiami jakościowymi.',
                    'en' => 'Monitoring drug receipt and issuance protocols and conducting periodic reviews of their quality compliance.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7137,
                'name' => json_encode([
                    'pl' => 'Kontrola wdrożenia procedur przeciwdziałania wprowadzeniu do obrotu produktów sfałszowanych lub uszkodzonych.',
                    'en' => 'Monitoring the implementation of procedures to prevent the introduction of counterfeit or damaged products into the market.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7138,
                'name' => json_encode([
                    'pl' => 'Weryfikacja, czy hurtownie posiadają i stosują odpowiednie procedury operacyjne związane z dystrybucją, przechowywaniem i transportem leków.',
                    'en' => 'Ensuring wholesalers have and implement adequate operational procedures related to drug distribution, storage, and transport.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7139,
                'name' => json_encode([
                    'pl' => 'Upewnienie się, że polityki zarządzania ryzykiem oraz plany awaryjne są zgodne z wymogami prawnymi.',
                    'en' => 'Ensuring that risk management policies and contingency plans comply with legal requirements.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7140,
                'name' => json_encode([
                    'pl' => 'Kontrola przestrzegania procedur przy przyjęciu leków oraz podczas ich wydawania.',
                    'en' => 'Monitoring adherence to procedures for drug receipt and issuance.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7141,
                'name' => json_encode([
                    'pl' => 'Sprawdzanie, czy hurtownie prowadzą pełną ewidencję przyjęcia, przechowywania, wydawania i transportu leków.',
                    'en' => 'Ensuring that wholesalers maintain complete records of drug receipt, storage, issuance, and transport.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7142,
                'name' => json_encode([
                    'pl' => 'Kontrola dokumentacji, w tym faktur, kart przyjęcia i wydania oraz certyfikatów jakości, aby zapewnić pełną identyfikowalność produktów.',
                    'en' => 'Reviewing documentation, including invoices, receipt and issuance logs, and quality certificates, to ensure full product traceability.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7143,
                'name' => json_encode([
                    'pl' => 'Monitorowanie okresów przechowywania i terminów ważności oraz kontrola dokumentów dotyczących zwrotów i utylizacji leków.',
                    'en' => 'Monitoring storage durations and expiry dates, and reviewing records related to drug returns and disposal.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7144,
                'name' => json_encode([
                    'pl' => 'Przeprowadzanie regularnych inspekcji w hurtowniach farmaceutycznych w celu sprawdzenia, czy ich działalność jest zgodna z przepisami i standardami jakości.',
                    'en' => 'Conducting regular inspections in pharmaceutical wholesalers to verify compliance with regulations and quality standards.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7145,
                'name' => json_encode([
                    'pl' => 'Dokumentowanie wyników inspekcji oraz sporządzanie raportów zawierających informacje o stwierdzonych nieprawidłowościach.',
                    'en' => 'Documenting inspection results and preparing reports with information on identified non-compliance issues.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7146,
                'name' => json_encode([
                    'pl' => 'Przekazywanie wyników inspekcji kierownictwu hurtowni oraz monitorowanie realizacji zaleceń pokontrolnych.',
                    'en' => 'Sharing inspection results with wholesaler management and monitoring the implementation of post-inspection recommendations.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7147,
                'name' => json_encode([
                    'pl' => 'Sprawdzanie, czy hurtownie współpracują wyłącznie z zarejestrowanymi i licencjonowanymi dostawcami oraz kontrahentami.',
                    'en' => 'Verifying that wholesalers collaborate only with registered and licensed suppliers and contractors.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7148,
                'name' => json_encode([
                    'pl' => 'Kontrola, czy hurtownie farmaceutyczne przeprowadzają audyty dostawców, aby upewnić się, że przestrzegają oni przepisów dotyczących obrotu lekami.',
                    'en' => 'Checking if pharmaceutical wholesalers audit their suppliers to ensure compliance with drug trading regulations.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7149,
                'name' => json_encode([
                    'pl' => 'Weryfikacja procedur związanych z zawieraniem i monitorowaniem umów z dostawcami i kontrahentami.',
                    'en' => 'Verifying procedures related to concluding and monitoring contracts with suppliers and contractors.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7150,
                'name' => json_encode([
                    'pl' => 'Kontrola procedur wycofywania leków z obrotu w przypadku wykrycia wad jakościowych, zagrożeń dla zdrowia lub decyzji producenta.',
                    'en' => 'Monitoring drug withdrawal procedures in case of quality defects, health risks, or manufacturer decisions.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7151,
                'name' => json_encode([
                    'pl' => 'Upewnienie się, że wycofane leki są odpowiednio oznaczone, przechowywane w oddzielnym miejscu i zniszczone lub zwrócone do producenta.',
                    'en' => 'Ensuring that withdrawn drugs are appropriately marked, stored separately, and destroyed or returned to the manufacturer.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7152,
                'name' => json_encode([
                    'pl' => 'Monitorowanie pełnej identyfikowalności leków, aby zapewnić skuteczność procesu wycofania.',
                    'en' => 'Monitoring the full traceability of drugs to ensure the effectiveness of the recall process.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7153,
                'name' => json_encode([
                    'pl' => 'Dokumentowanie wszelkich nieprawidłowości lub nadużyć stwierdzonych podczas kontroli i inspekcji hurtowni.',
                    'en' => 'Documenting any irregularities or abuses identified during warehouse audits and inspections.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7154,
                'name' => json_encode([
                    'pl' => 'Zgłaszanie poważnych niezgodności, takich jak wprowadzenie do obrotu produktów sfałszowanych lub niezgodnych z przepisami, do odpowiednich organów nadzorczych.',
                    'en' => 'Reporting major non-compliance issues, such as the distribution of counterfeit or non-compliant products, to relevant regulatory authorities.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7155,
                'name' => json_encode([
                    'pl' => 'Współpraca z organami ścigania i służbami nadzorczymi w zakresie wykrywania i zapobiegania nielegalnemu obrotowi lekami.',
                    'en' => 'Collaborating with law enforcement and supervisory bodies in detecting and preventing illegal drug trading.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7156,
                'name' => json_encode([
                    'pl' => 'Organizowanie szkoleń dla pracowników hurtowni na temat zasad DPD, bezpieczeństwa przechowywania i transportu leków oraz procedur wycofywania leków.',
                    'en' => 'Organizing training sessions for warehouse staff on GDP principles, drug storage and transport safety, and drug recall procedures.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7157,
                'name' => json_encode([
                    'pl' => 'Informowanie pracowników o zmianach w przepisach i wytycznych dotyczących obrotu lekami.',
                    'en' => 'Informing staff about changes in regulations and guidelines related to drug distribution.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7158,
                'name' => json_encode([
                    'pl' => 'Podnoszenie świadomości personelu hurtowni na temat zapobiegania nadużyciom oraz fałszowaniu produktów.',
                    'en' => 'Raising staff awareness about preventing abuse and product counterfeiting.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7159,
                'name' => json_encode([
                    'pl' => 'Koordynacja działań z innymi organami nadzoru farmaceutycznego, takimi jak inspekcja sanitarna, policja oraz agencje regulacyjne.',
                    'en' => 'Coordinating activities with other pharmaceutical regulatory bodies, such as sanitary inspection, police, and regulatory agencies.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7160,
                'name' => json_encode([
                    'pl' => 'Współpraca z innymi instytucjami w celu wymiany informacji o zagrożeniach i niezgodnościach związanych z obrotem hurtowym lekami.',
                    'en' => 'Collaborating with other institutions to exchange information about risks and non-compliance in wholesale drug distribution.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7161,
                'name' => json_encode([
                    'pl' => 'Udział w międzyinstytucjonalnych projektach i programach mających na celu poprawę bezpieczeństwa obrotu lekami.',
                    'en' => 'Participating in inter-institutional projects and programs aimed at improving drug distribution safety.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7162,
                'name' => json_encode([
                    'pl' => 'Sporządzanie raportów po inspekcjach i kontrolach przeprowadzonych w hurtowniach farmaceutycznych.',
                    'en' => 'Preparing reports after inspections and audits conducted in pharmaceutical wholesalers.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7163,
                'name' => json_encode([
                    'pl' => 'Dokumentowanie stwierdzonych niezgodności oraz zaleceń dotyczących działań naprawczych i korygujących.',
                    'en' => 'Documenting identified non-compliance issues and recommendations for corrective and preventive actions.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7164,
                'name' => json_encode([
                    'pl' => 'Przekazywanie raportów do kierownictwa hurtowni oraz organów nadzoru farmaceutycznego.',
                    'en' => 'Submitting reports to warehouse management and pharmaceutical regulatory authorities.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7165,
                'name' => json_encode([
                    'pl' => 'Monitorowanie informacji o lekach wycofanych z rynku oraz kontrola dokumentacji dotyczącej ich zwrotu do producenta lub utylizacji.',
                    'en' => 'Monitoring information on drugs recalled from the market and reviewing records regarding their return to the manufacturer or disposal.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7166,
                'name' => json_encode([
                    'pl' => 'Przechowywanie pełnej dokumentacji dotyczącej wycofanych leków oraz ich dalszego przeznaczenia.',
                    'en' => 'Keeping complete documentation regarding withdrawn drugs and their subsequent handling.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7167,
                'name' => json_encode([
                    'pl' => 'Sporządzanie zestawień na temat wycofań, zwrotów i utylizacji leków na potrzeby raportowania i analiz.',
                    'en' => 'Compiling summaries on drug recalls, returns, and disposals for reporting and analysis purposes.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7168,
                'name' => json_encode([
                    'pl' => 'Identyfikacja i ocena ryzyka związanego z przechowywaniem, transportem i dystrybucją leków w hurtowniach farmaceutycznych.',
                    'en' => 'Identifying and assessing risks related to the storage, transport, and distribution of drugs in pharmaceutical warehouses.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7169,
                'name' => json_encode([
                    'pl' => 'Wdrażanie strategii zarządzania ryzykiem, aby zminimalizować możliwość wystąpienia zagrożeń dla jakości i bezpieczeństwa leków.',
                    'en' => 'Implementing risk management strategies to minimize the likelihood of threats to the quality and safety of drugs.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7170,
                'name' => json_encode([
                    'pl' => 'Monitorowanie realizacji procedur zarządzania ryzykiem oraz ich regularna aktualizacja w odpowiedzi na nowe zagrożenia.',
                    'en' => 'Monitoring the implementation of risk management procedures and regularly updating them in response to new threats.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7171,
                'name' => json_encode([
                    'pl' => 'Regularne uczestnictwo w szkoleniach i kursach dotyczących przepisów prawa farmaceutycznego, zasad Dobrej Praktyki Dystrybucyjnej oraz zarządzania ryzykiem.',
                    'en' => 'Participating regularly in training and courses on pharmaceutical law, Good Distribution Practice (GDP) principles, and risk management.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7172,
                'name' => json_encode([
                    'pl' => 'Aktualizowanie wiedzy na temat nowych regulacji, technologii oraz wytycznych związanych z obrotem hurtowym lekami.',
                    'en' => 'Keeping knowledge updated on new regulations, technologies, and guidelines related to wholesale drug distribution.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7173,
                'name' => json_encode([
                    'pl' => 'Współpraca z innymi inspektorami w celu wymiany doświadczeń oraz podnoszenia standardów kontroli i nadzoru.',
                    'en' => 'Collaborating with other inspectors to exchange experiences and raise control and supervision standards.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ]
        ];
        $SPECJALISTA_DO_SPRAW_BEZPIECZEŃSTWA_WEWNĘTRZNEGO = [
            [
                'id' => 7174,
                'name' => json_encode([
                    'pl' => 'Identyfikacja potencjalnych zagrożeń, takich jak kradzieże, oszustwa, cyberataki, przestępstwa gospodarcze oraz incydenty wewnętrzne.',
                    'en' => 'Identification of potential threats, such as theft, fraud, cyberattacks, economic crimes, and internal incidents.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7175,
                'name' => json_encode([
                    'pl' => 'Przeprowadzanie analizy ryzyka oraz oceny wpływu potencjalnych zagrożeń na organizację.',
                    'en' => 'Conducting risk analysis and assessing the potential impact of threats on the organization.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7176,
                'name' => json_encode([
                    'pl' => 'Tworzenie raportów na temat zidentyfikowanych zagrożeń i proponowanie środków zaradczych.',
                    'en' => 'Creating reports on identified threats and proposing corrective measures.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7177,
                'name' => json_encode([
                    'pl' => 'Tworzenie i aktualizacja polityk bezpieczeństwa wewnętrznego, procedur oraz wytycznych dla pracowników.',
                    'en' => 'Developing and updating internal security policies, procedures, and guidelines for employees.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7178,
                'name' => json_encode([
                    'pl' => 'Opracowywanie strategii zabezpieczeń fizycznych, technicznych i proceduralnych, aby zapewnić ochronę danych, mienia i pracowników.',
                    'en' => 'Developing strategies for physical, technical, and procedural security to protect data, assets, and employees.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7179,
                'name' => json_encode([
                    'pl' => 'Zapewnienie, że polityki bezpieczeństwa są zgodne z przepisami prawa oraz regulacjami branżowymi.',
                    'en' => 'Ensuring that security policies comply with legal requirements and industry regulations.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7180,
                'name' => json_encode([
                    'pl' => 'Opracowywanie szczegółowych planów działania na wypadek incydentów, takich jak włamania, naruszenia bezpieczeństwa danych oraz cyberataki.',
                    'en' => 'Developing detailed action plans for incidents such as break-ins, data security breaches, and cyberattacks.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7181,
                'name' => json_encode([
                    'pl' => 'Definiowanie ról i odpowiedzialności pracowników w ramach procedur reagowania na incydenty.',
                    'en' => 'Defining roles and responsibilities of employees within incident response procedures.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7182,
                'name' => json_encode([
                    'pl' => 'Zapewnienie, że plany są aktualne i dostosowane do specyfiki organizacji oraz zidentyfikowanych zagrożeń.',
                    'en' => 'Ensuring that plans are up-to-date and tailored to the organization\'s specifics and identified threats.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7183,
                'name' => json_encode([
                    'pl' => 'Nadzorowanie zgodności działań pracowników i procedur z politykami bezpieczeństwa organizacji.',
                    'en' => 'Overseeing the compliance of employee actions and procedures with organizational security policies.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7184,
                'name' => json_encode([
                    'pl' => 'Przeprowadzanie kontroli przestrzegania procedur bezpieczeństwa w miejscach pracy.',
                    'en' => 'Conducting security procedure compliance checks at workplaces.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7185,
                'name' => json_encode([
                    'pl' => 'Dokumentowanie wyników kontroli oraz wdrażanie działań korygujących w przypadku stwierdzenia niezgodności.',
                    'en' => 'Documenting inspection results and implementing corrective actions in case of non-compliance.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7186,
                'name' => json_encode([
                    'pl' => 'Organizowanie i przeprowadzanie regularnych audytów bezpieczeństwa wewnętrznego w celu oceny skuteczności istniejących środków zabezpieczających.',
                    'en' => 'Organizing and conducting regular internal security audits to assess the effectiveness of existing security measures.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7187,
                'name' => json_encode([
                    'pl' => 'Współpraca z audytorami zewnętrznymi, jeśli jest to wymagane, w celu przeprowadzenia niezależnych ocen.',
                    'en' => 'Collaborating with external auditors, if required, to conduct independent assessments.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7188,
                'name' => json_encode([
                    'pl' => 'Dokumentowanie wyników audytów oraz opracowywanie planów poprawy w obszarach wymagających udoskonalenia.',
                    'en' => 'Documenting audit results and developing improvement plans for areas needing enhancement.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7189,
                'name' => json_encode([
                    'pl' => 'Nadzór nad politykami ochrony danych, w tym procedurami dostępu do danych i ochrony prywatności.',
                    'en' => 'Supervising data protection policies, including data access and privacy protection procedures.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7190,
                'name' => json_encode([
                    'pl' => 'Współpraca z działem IT w zakresie wdrażania zabezpieczeń, takich jak kontrola dostępu, szyfrowanie, ochrona przed wyciekiem danych.',
                    'en' => 'Collaborating with IT to implement security measures, such as access control, encryption, and data leakage protection.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7191,
                'name' => json_encode([
                    'pl' => 'Prowadzenie okresowych przeglądów zabezpieczeń danych i proponowanie ulepszeń.',
                    'en' => 'Conducting periodic data security reviews and suggesting improvements.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7192,
                'name' => json_encode([
                    'pl' => 'Koordynacja działań z działem IT, aby chronić organizację przed cyberatakami, phishingiem, malware oraz innymi zagrożeniami cyfrowymi.',
                    'en' => 'Coordinating with IT to protect the organization from cyberattacks, phishing, malware, and other digital threats.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7193,
                'name' => json_encode([
                    'pl' => 'Udział w opracowywaniu i wdrażaniu polityk zabezpieczeń sieciowych, monitoringu systemów oraz reagowania na incydenty cyberbezpieczeństwa.',
                    'en' => 'Participating in the development and implementation of network security policies, system monitoring, and cybersecurity incident response.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7194,
                'name' => json_encode([
                    'pl' => 'Organizowanie symulacji ataków (np. testy penetracyjne) w celu sprawdzenia skuteczności zabezpieczeń IT.',
                    'en' => 'Organizing attack simulations (e.g., penetration testing) to verify the effectiveness of IT security.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7195,
                'name' => json_encode([
                    'pl' => 'Opracowywanie i wdrażanie procedur związanych z ochroną fizyczną mienia i osób, w tym dostępem do budynków, kontrolą wejść i wyjść oraz ochroną infrastruktury krytycznej.',
                    'en' => 'Developing and implementing procedures related to the physical protection of assets and people, including building access, entry and exit control, and critical infrastructure protection.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7196,
                'name' => json_encode([
                    'pl' => 'Monitorowanie funkcjonowania systemów ochrony fizycznej, takich jak monitoring wizyjny (CCTV), systemy alarmowe oraz kontrole dostępu.',
                    'en' => 'Monitoring the operation of physical security systems, such as CCTV, alarm systems, and access control.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7197,
                'name' => json_encode([
                    'pl' => 'Regularne przeglądy zabezpieczeń fizycznych i aktualizacja systemów ochrony w odpowiedzi na nowe zagrożenia.',
                    'en' => 'Conducting regular reviews of physical security and updating protection systems in response to new threats.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7198,
                'name' => json_encode([
                    'pl' => 'Organizowanie szkoleń dla pracowników dotyczących bezpieczeństwa wewnętrznego, w tym zasad ochrony danych, reagowania na zagrożenia i zachowania w sytuacjach awaryjnych.',
                    'en' => 'Organizing training for employees on internal security, including data protection principles, threat response, and behavior in emergency situations.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7199,
                'name' => json_encode([
                    'pl' => 'Opracowywanie materiałów edukacyjnych, takich jak broszury, ulotki i e-learning, w celu zwiększenia świadomości pracowników.',
                    'en' => 'Developing educational materials such as brochures, leaflets, and e-learning courses to raise employee awareness.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7200,
                'name' => json_encode([
                    'pl' => 'Przeprowadzanie symulacji incydentów i ćwiczeń ewakuacyjnych, aby sprawdzić gotowość personelu na różne sytuacje kryzysowe.',
                    'en' => 'Conducting incident simulations and evacuation drills to test staff readiness for various crisis situations.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7201,
                'name' => json_encode([
                    'pl' => 'Koordynowanie działań organizacji w sytuacjach kryzysowych, takich jak naruszenie bezpieczeństwa danych, atak fizyczny lub sytuacja awaryjna.',
                    'en' => 'Coordinating organizational actions in crisis situations, such as data security breaches, physical attacks, or emergency situations.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7202,
                'name' => json_encode([
                    'pl' => 'Opracowywanie raportów z incydentów, dokumentowanie przyczyn oraz wdrażanie działań korygujących.',
                    'en' => 'Preparing incident reports, documenting causes, and implementing corrective actions.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7203,
                'name' => json_encode([
                    'pl' => 'Monitorowanie, czy podejmowane działania są zgodne z procedurami i planami reagowania na incydenty.',
                    'en' => 'Monitoring if actions taken comply with procedures and incident response plans.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7204,
                'name' => json_encode([
                    'pl' => 'Nadzór nad systemami kontroli dostępu do kluczowych obszarów organizacji, takich jak serwerownie, archiwa, magazyny itp.',
                    'en' => 'Supervising access control systems to key organizational areas, such as server rooms, archives, warehouses, etc.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7205,
                'name' => json_encode([
                    'pl' => 'Określanie poziomów dostępu dla różnych grup pracowników oraz monitorowanie przestrzegania zasad dostępu.',
                    'en' => 'Determining access levels for different employee groups and monitoring adherence to access rules.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7206,
                'name' => json_encode([
                    'pl' => 'Regularne przeglądy uprawnień dostępu oraz weryfikacja, czy dostęp mają jedynie uprawnione osoby.',
                    'en' => 'Conducting regular access reviews and verifying that only authorized individuals have access.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7207,
                'name' => json_encode([
                    'pl' => 'Wdrażanie procedur mających na celu zapobieganie oszustwom wewnętrznym i nadużyciom finansowym.',
                    'en' => 'Implementing procedures aimed at preventing internal fraud and financial abuse.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7208,
                'name' => json_encode([
                    'pl' => 'Monitorowanie procesów finansowych, zakupowych i innych krytycznych obszarów organizacji w celu minimalizacji ryzyka nieprawidłowości.',
                    'en' => 'Monitoring financial, purchasing, and other critical organizational processes to minimize the risk of irregularities.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7209,
                'name' => json_encode([
                    'pl' => 'Współpraca z działem prawnym i compliance w celu wykrywania i reagowania na podejrzane działania.',
                    'en' => 'Collaborating with the legal and compliance departments to detect and respond to suspicious activities.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7210,
                'name' => json_encode([
                    'pl' => 'Sporządzanie raportów dotyczących stanu bezpieczeństwa wewnętrznego, działań podjętych w związku z incydentami oraz wdrożonych zabezpieczeń.',
                    'en' => 'Preparing reports on the internal security status, actions taken in connection with incidents, and implemented safeguards.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7211,
                'name' => json_encode([
                    'pl' => 'Przekazywanie raportów kierownictwu oraz organom nadzoru, jeśli jest to wymagane.',
                    'en' => 'Submitting reports to management and regulatory authorities if required.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7212,
                'name' => json_encode([
                    'pl' => 'Tworzenie zestawień dotyczących liczby incydentów, wyników audytów i ocen ryzyka.',
                    'en' => 'Creating summaries on the number of incidents, audit results, and risk assessments.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7213,
                'name' => json_encode([
                    'pl' => 'Koordynacja działań z policją, strażą pożarną, służbami ratowniczymi i innymi organami odpowiedzialnymi za bezpieczeństwo publiczne.',
                    'en' => 'Coordinating actions with the police, fire brigade, rescue services, and other public safety authorities.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7214,
                'name' => json_encode([
                    'pl' => 'Informowanie służb zewnętrznych o potencjalnych zagrożeniach oraz incydentach wymagających ich interwencji.',
                    'en' => 'Informing external services about potential threats and incidents requiring their intervention.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7215,
                'name' => json_encode([
                    'pl' => 'Współpraca z firmami ochroniarskimi, jeżeli organizacja korzysta z usług zewnętrznych ochrony.',
                    'en' => 'Collaborating with security companies if the organization uses external security services.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7216,
                'name' => json_encode([
                    'pl' => 'Określanie zasobów finansowych i materiałowych potrzebnych do realizacji planów bezpieczeństwa.',
                    'en' => 'Determining financial and material resources needed for the implementation of security plans.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7217,
                'name' => json_encode([
                    'pl' => 'Zarządzanie budżetem przeznaczonym na systemy ochrony fizycznej, cyberbezpieczeństwa, szkoleń oraz zabezpieczeń infrastruktury.',
                    'en' => 'Managing the budget for physical protection systems, cybersecurity, training, and infrastructure security.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7218,
                'name' => json_encode([
                    'pl' => 'Monitorowanie wydatków związanych z bezpieczeństwem oraz proponowanie działań optymalizujących koszty.',
                    'en' => 'Monitoring security-related expenses and proposing cost-optimization measures.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7219,
                'name' => json_encode([
                    'pl' => 'Regularne uczestnictwo w szkoleniach dotyczących bezpieczeństwa wewnętrznego, zarządzania kryzysowego, ochrony danych oraz cyberbezpieczeństwa.',
                    'en' => 'Regularly participating in training on internal security, crisis management, data protection, and cybersecurity.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7220,
                'name' => json_encode([
                    'pl' => 'Aktualizowanie wiedzy na temat nowych zagrożeń i technologii oraz wdrażanie najlepszych praktyk w obszarze bezpieczeństwa.',
                    'en' => 'Updating knowledge on new threats and technologies and implementing best practices in security.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7221,
                'name' => json_encode([
                    'pl' => 'Współpraca z innymi specjalistami ds. bezpieczeństwa w celu wymiany doświadczeń oraz podnoszenia standardów w organizacji.',
                    'en' => 'Collaborating with other security specialists to exchange experiences and raise organizational standards.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ]
        ];
        $SPECJALISTA_DO_SPRAW_CUDZOZIEMCÓW = [
            [
                'id' => 7222,
                'name' => json_encode([
                    'pl' => 'Informowanie cudzoziemców o wymaganiach i procedurach uzyskania zezwoleń na pobyt czasowy, stały lub rezydenta długoterminowego.',
                    'en' => 'Informing foreigners about the requirements and procedures for obtaining temporary, permanent, or long-term resident permits.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7223,
                'name' => json_encode([
                    'pl' => 'Pomoc w przygotowaniu niezbędnej dokumentacji, w tym wypełnianiu wniosków i kompletowaniu załączników.',
                    'en' => 'Assisting in the preparation of necessary documentation, including completing applications and gathering attachments.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7224,
                'name' => json_encode([
                    'pl' => 'Monitorowanie postępów wniosków i przekazywanie informacji o ich statusie.',
                    'en' => 'Monitoring the progress of applications and providing information about their status.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7225,
                'name' => json_encode([
                    'pl' => 'Weryfikacja kompletności i zgodności dokumentów składanych przez cudzoziemców z przepisami prawa.',
                    'en' => 'Verifying the completeness and compliance of documents submitted by foreigners with legal requirements.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7226,
                'name' => json_encode([
                    'pl' => 'Sprawdzanie ważności paszportów, wiz, dokumentów potwierdzających miejsce zamieszkania oraz innych wymaganych zaświadczeń.',
                    'en' => 'Checking the validity of passports, visas, residence certificates, and other required documents.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7227,
                'name' => json_encode([
                    'pl' => 'Współpraca z urzędami w celu potwierdzenia autentyczności dokumentów i spełnienia wymagań formalnych.',
                    'en' => 'Collaborating with offices to confirm the authenticity of documents and meet formal requirements.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7228,
                'name' => json_encode([
                    'pl' => 'Pomoc cudzoziemcom w procesie uzyskania numeru PESEL, jeśli jest wymagany.',
                    'en' => 'Assisting foreigners in obtaining a PESEL number if required.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7229,
                'name' => json_encode([
                    'pl' => 'Informowanie o procedurach meldunkowych i udzielanie wsparcia przy zgłaszaniu miejsca pobytu czasowego lub stałego.',
                    'en' => 'Providing information on registration procedures and supporting temporary or permanent residence declarations.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7230,
                'name' => json_encode([
                    'pl' => 'Zapewnienie informacji o obowiązkach meldunkowych oraz pomoc w ich realizacji.',
                    'en' => 'Providing information on registration obligations and assisting in their implementation.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7231,
                'name' => json_encode([
                    'pl' => 'Udzielanie informacji dotyczących praw i obowiązków cudzoziemców, w tym dostępu do świadczeń zdrowotnych, edukacji i innych usług publicznych.',
                    'en' => 'Providing information on the rights and obligations of foreigners, including access to healthcare, education, and other public services.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7232,
                'name' => json_encode([
                    'pl' => 'Wyjaśnianie przepisów dotyczących zatrudnienia, zakładania działalności gospodarczej, opodatkowania oraz ubezpieczeń społecznych.',
                    'en' => 'Explaining regulations regarding employment, business creation, taxation, and social insurance.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7233,
                'name' => json_encode([
                    'pl' => 'Pomoc w rozwiązywaniu problemów administracyjnych i prawnych, takich jak procedury odwoławcze.',
                    'en' => 'Assisting in resolving administrative and legal issues, such as appeal procedures.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7234,
                'name' => json_encode([
                    'pl' => 'Organizowanie programów integracyjnych dla cudzoziemców, w tym warsztatów z języka polskiego, kursów kulturowych oraz szkoleń dotyczących życia w Polsce.',
                    'en' => 'Organizing integration programs for foreigners, including Polish language workshops, cultural courses, and training on life in Poland.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7235,
                'name' => json_encode([
                    'pl' => 'Prowadzenie zajęć, które pomagają w adaptacji, zrozumieniu kultury oraz poznaniu polskiego systemu prawnego i administracyjnego.',
                    'en' => 'Conducting classes that help with adaptation, cultural understanding, and familiarization with the Polish legal and administrative system.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7236,
                'name' => json_encode([
                    'pl' => 'Tworzenie materiałów edukacyjnych, takich jak broszury, ulotki oraz poradniki, aby ułatwić cudzoziemcom adaptację.',
                    'en' => 'Creating educational materials, such as brochures, leaflets, and guides, to facilitate adaptation for foreigners.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7237,
                'name' => json_encode([
                    'pl' => 'Pomoc w adaptacji cudzoziemców do życia w nowym kraju, w tym wsparcie w poszukiwaniu mieszkania, placówek edukacyjnych oraz opieki zdrowotnej.',
                    'en' => 'Assisting foreigners in adapting to life in a new country, including support in finding housing, educational institutions, and healthcare facilities.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7238,
                'name' => json_encode([
                    'pl' => 'Wsparcie w organizowaniu dostępu do podstawowych usług, takich jak bankowość, transport publiczny, ubezpieczenia.',
                    'en' => 'Assisting in organizing access to basic services, such as banking, public transportation, and insurance.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7239,
                'name' => json_encode([
                    'pl' => 'Informowanie o możliwościach korzystania z lokalnych inicjatyw wspierających integrację i adaptację obcokrajowców.',
                    'en' => 'Informing about local initiatives that support the integration and adaptation of foreigners.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7240,
                'name' => json_encode([
                    'pl' => 'Pomoc cudzoziemcom i pracodawcom w przygotowaniu dokumentów potrzebnych do uzyskania zezwoleń na pracę.',
                    'en' => 'Assisting foreigners and employers in preparing documents needed for obtaining work permits.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7241,
                'name' => json_encode([
                    'pl' => 'Weryfikacja poprawności dokumentacji składanej przez pracodawców oraz współpraca z urzędami pracy i instytucjami odpowiedzialnymi za wydawanie zezwoleń.',
                    'en' => 'Verifying the accuracy of documentation submitted by employers and cooperating with labor offices and institutions responsible for issuing permits.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7242,
                'name' => json_encode([
                    'pl' => 'Informowanie pracodawców o obowiązkach zatrudniania cudzoziemców oraz wymaganiach prawnych w tym zakresie.',
                    'en' => 'Informing employers about the obligations of employing foreigners and the legal requirements in this regard.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7243,
                'name' => json_encode([
                    'pl' => 'Udzielanie informacji na temat możliwości edukacyjnych, takich jak kursy języka polskiego, szkolenia zawodowe oraz studia wyższe.',
                    'en' => 'Providing information on educational opportunities, such as Polish language courses, vocational training, and higher education.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7244,
                'name' => json_encode([
                    'pl' => 'Pomoc w przygotowaniu aplikacji do szkół i uczelni oraz doradztwo w zakresie uznawania kwalifikacji zawodowych i dyplomów.',
                    'en' => 'Assisting with applications to schools and universities and providing advice on the recognition of professional qualifications and diplomas.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7245,
                'name' => json_encode([
                    'pl' => 'Organizowanie spotkań i wydarzeń networkingowych, które pomagają cudzoziemcom nawiązać kontakty zawodowe.',
                    'en' => 'Organizing networking meetings and events that help foreigners establish professional contacts.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7246,
                'name' => json_encode([
                    'pl' => 'Prowadzenie dokumentacji i ewidencji dotyczącej cudzoziemców obsługiwanych przez organizację lub jednostkę.',
                    'en' => 'Maintaining documentation and records related to foreigners served by the organization or unit.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7247,
                'name' => json_encode([
                    'pl' => 'Zapewnienie zgodności przetwarzania danych osobowych z przepisami o ochronie danych, w tym RODO.',
                    'en' => 'Ensuring compliance of personal data processing with data protection regulations, including GDPR.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7248,
                'name' => json_encode([
                    'pl' => 'Przechowywanie dokumentów i informacji o cudzoziemcach zgodnie z wymogami prawa.',
                    'en' => 'Storing documents and information about foreigners in compliance with legal requirements.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7249,
                'name' => json_encode([
                    'pl' => 'Pomoc cudzoziemcom w uzyskaniu przedłużenia pobytu oraz w innych formalnościach związanych z przedłużeniem wiz lub zezwoleń.',
                    'en' => 'Assisting foreigners in obtaining residence extensions and other formalities related to visa or permit renewals.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7250,
                'name' => json_encode([
                    'pl' => 'Informowanie o przepisach dotyczących legalizacji pobytu, takich jak konieczność posiadania ubezpieczenia zdrowotnego i źródła dochodu.',
                    'en' => 'Providing information on residency legalization regulations, such as the requirement for health insurance and a source of income.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7251,
                'name' => json_encode([
                    'pl' => 'Wsparcie w przejściu przez procedury odwoławcze w przypadku odmowy przedłużenia pobytu.',
                    'en' => 'Providing support in navigating appeal procedures in case of residence extension denial.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7252,
                'name' => json_encode([
                    'pl' => 'Koordynacja działań z urzędami wojewódzkimi, placówkami dyplomatycznymi, służbami granicznymi oraz organizacjami pozarządowymi.',
                    'en' => 'Coordinating activities with voivodeship offices, diplomatic missions, border services, and non-governmental organizations.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7253,
                'name' => json_encode([
                    'pl' => 'Współpraca z instytucjami rządowymi i samorządowymi odpowiedzialnymi za integrację cudzoziemców i pomoc w ich adaptacji.',
                    'en' => 'Collaborating with government and local institutions responsible for the integration of foreigners and assistance in their adaptation.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7254,
                'name' => json_encode([
                    'pl' => 'Udzielanie informacji innym instytucjom oraz jednostkom współpracującym o dostępnych zasobach i programach dla cudzoziemców.',
                    'en' => 'Providing information to other institutions and cooperating entities about available resources and programs for foreigners.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7255,
                'name' => json_encode([
                    'pl' => 'Informowanie cudzoziemców o zasadach dostępu do polskiego systemu opieki zdrowotnej, w tym rejestracja w Narodowym Funduszu Zdrowia (NFZ).',
                    'en' => 'Informing foreigners about access to the Polish healthcare system, including registration in the National Health Fund (NFZ).'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7256,
                'name' => json_encode([
                    'pl' => 'Udzielanie wsparcia w kwestiach socjalnych, takich jak dostęp do świadczeń socjalnych, pomoc społeczna oraz wsparcie w sytuacjach kryzysowych.',
                    'en' => 'Providing support on social matters, such as access to social benefits, social assistance, and crisis support.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7257,
                'name' => json_encode([
                    'pl' => 'Organizowanie spotkań informacyjnych na temat opieki zdrowotnej, dostępnych programów wsparcia i zasad korzystania z pomocy społecznej.',
                    'en' => 'Organizing informational meetings on healthcare, available support programs, and guidelines for accessing social assistance.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7258,
                'name' => json_encode([
                    'pl' => 'Informowanie cudzoziemców o ich prawach, takich jak prawo do opieki zdrowotnej, dostęp do edukacji, prawo do pracy.',
                    'en' => 'Informing foreigners about their rights, such as the right to healthcare, access to education, and the right to work.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7259,
                'name' => json_encode([
                    'pl' => 'Wyjaśnianie obowiązków, które cudzoziemcy muszą spełniać, takich jak obowiązek meldunkowy, konieczność legalizacji pobytu i przestrzeganie polskich przepisów.',
                    'en' => 'Explaining obligations that foreigners must meet, such as the registration requirement, the need for residency legalization, and adherence to Polish regulations.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7260,
                'name' => json_encode([
                    'pl' => 'Tworzenie materiałów informacyjnych, takich jak broszury i poradniki, na temat życia i pracy w Polsce.',
                    'en' => 'Creating informational materials, such as brochures and guides, about living and working in Poland.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7261,
                'name' => json_encode([
                    'pl' => 'Pomoc cudzoziemcom w składaniu odwołań od decyzji urzędów administracyjnych w sprawach dotyczących pobytu i pracy.',
                    'en' => 'Assisting foreigners in filing appeals against administrative decisions regarding residence and employment.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7262,
                'name' => json_encode([
                    'pl' => 'Reprezentowanie cudzoziemców przed instytucjami, jeśli jest to wymagane, w sprawach związanych z legalizacją pobytu i zezwoleń na pracę.',
                    'en' => 'Representing foreigners before institutions, if required, in matters related to residence legalization and work permits.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7263,
                'name' => json_encode([
                    'pl' => 'Doradztwo prawne w zakresie możliwości i procedur odwoławczych oraz współpraca z prawnikiem, jeśli jest to konieczne.',
                    'en' => 'Providing legal advice on appeal options and procedures, and working with a lawyer if necessary.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7264,
                'name' => json_encode([
                    'pl' => 'Sporządzanie raportów i zestawień dotyczących liczby obsługiwanych cudzoziemców, liczby wydanych zezwoleń i złożonych wniosków.',
                    'en' => 'Preparing reports and summaries regarding the number of foreigners served, permits issued, and applications submitted.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7265,
                'name' => json_encode([
                    'pl' => 'Analiza trendów związanych z imigracją, integracją i adaptacją cudzoziemców na podstawie zebranych danych.',
                    'en' => 'Analyzing trends related to immigration, integration, and adaptation of foreigners based on collected data.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7266,
                'name' => json_encode([
                    'pl' => 'Przekazywanie raportów do kierownictwa i innych instytucji zajmujących się sprawami cudzoziemców.',
                    'en' => 'Forwarding reports to management and other institutions dealing with foreigner affairs.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7267,
                'name' => json_encode([
                    'pl' => 'Regularne uczestnictwo w szkoleniach dotyczących prawa imigracyjnego, integracji społecznej oraz przepisów związanych z zatrudnianiem cudzoziemców.',
                    'en' => 'Regular participation in training on immigration law, social integration, and regulations related to employing foreigners.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7268,
                'name' => json_encode([
                    'pl' => 'Aktualizowanie wiedzy na temat zmieniających się przepisów prawnych i procedur administracyjnych dotyczących cudzoziemców.',
                    'en' => 'Updating knowledge on changing legal regulations and administrative procedures concerning foreigners.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7269,
                'name' => json_encode([
                    'pl' => 'Współpraca z innymi specjalistami ds. cudzoziemców w celu wymiany doświadczeń oraz podnoszenia standardów obsługi.',
                    'en' => 'Collaborating with other foreigner affairs specialists to exchange experiences and raise service standards.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ]

        ];
        $SPECJALISTA_DO_SPRAW_OBSLUGI_PROJEKTOW_I_PROGRAMOW = [
            [
                'id' => 7270,
                'name' => json_encode([
                    'pl' => 'Tworzenie harmonogramów dla poszczególnych projektów i programów, uwzględniając kluczowe etapy, kamienie milowe oraz terminy realizacji.',
                    'en' => 'Creating schedules for specific projects and programs, taking into account key stages, milestones, and deadlines.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7271,
                'name' => json_encode([
                    'pl' => 'Opracowywanie szczegółowych planów działania oraz wyznaczanie odpowiedzialności dla członków zespołu projektowego.',
                    'en' => 'Developing detailed action plans and assigning responsibilities to project team members.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7272,
                'name' => json_encode([
                    'pl' => 'Regularna aktualizacja harmonogramów i planów w odpowiedzi na zmiany lub nowe wymagania projektowe.',
                    'en' => 'Regularly updating schedules and plans in response to changes or new project requirements.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7273,
                'name' => json_encode([
                    'pl' => 'Monitorowanie budżetów projektów, w tym wydatków i kosztów, aby zapewnić realizację w ramach ustalonych środków finansowych.',
                    'en' => 'Monitoring project budgets, including expenditures and costs, to ensure execution within the allocated funds.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7274,
                'name' => json_encode([
                    'pl' => 'Tworzenie prognoz finansowych i analizowanie ewentualnych odchyleń od planu budżetowego.',
                    'en' => 'Creating financial forecasts and analyzing potential deviations from the budget plan.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7275,
                'name' => json_encode([
                    'pl' => 'Przekazywanie informacji o statusie budżetu kierownictwu oraz podejmowanie działań w przypadku ryzyka przekroczenia budżetu.',
                    'en' => 'Communicating budget status to management and taking action in case of potential budget overruns.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7276,
                'name' => json_encode([
                    'pl' => 'Współpraca z członkami zespołu projektowego, przydzielanie zadań oraz monitorowanie ich realizacji.',
                    'en' => 'Collaborating with project team members, assigning tasks, and monitoring their execution.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7277,
                'name' => json_encode([
                    'pl' => 'Motywowanie zespołu do osiągania wyznaczonych celów i zapewnienie, że każdy rozumie swoje obowiązki i oczekiwania.',
                    'en' => 'Motivating the team to achieve set goals and ensuring everyone understands their responsibilities and expectations.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7278,
                'name' => json_encode([
                    'pl' => 'Organizowanie regularnych spotkań zespołu w celu omówienia postępów, rozwiązywania problemów i podejmowania kluczowych decyzji.',
                    'en' => 'Organizing regular team meetings to discuss progress, resolve issues, and make key decisions.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7279,
                'name' => json_encode([
                    'pl' => 'Śledzenie postępów projektów względem harmonogramu, budżetu oraz zakresu działań.',
                    'en' => 'Tracking project progress relative to the schedule, budget, and scope of activities.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7280,
                'name' => json_encode([
                    'pl' => 'Przeprowadzanie regularnych przeglądów statusu projektów i identyfikowanie potencjalnych opóźnień lub problemów.',
                    'en' => 'Conducting regular project status reviews and identifying potential delays or issues.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7281,
                'name' => json_encode([
                    'pl' => 'Sporządzanie raportów z postępów i przekazywanie ich do kierownictwa oraz innych zainteresowanych stron.',
                    'en' => 'Preparing progress reports and sharing them with management and other stakeholders.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7282,
                'name' => json_encode([
                    'pl' => 'Przeprowadzanie analizy ryzyka dla każdego projektu, w tym identyfikacja potencjalnych zagrożeń oraz opracowanie planów zapobiegania i reagowania.',
                    'en' => 'Conducting risk analysis for each project, identifying potential threats, and developing prevention and response plans.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7283,
                'name' => json_encode([
                    'pl' => 'Monitorowanie ryzyk w trakcie trwania projektu i podejmowanie działań naprawczych w przypadku pojawienia się nowych zagrożeń.',
                    'en' => 'Monitoring risks during the project and taking corrective actions if new threats arise.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7284,
                'name' => json_encode([
                    'pl' => 'Dokumentowanie ryzyk oraz działań podejmowanych w celu ich minimalizacji.',
                    'en' => 'Documenting risks and actions taken to minimize them.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7285,
                'name' => json_encode([
                    'pl' => 'Upewnienie się, że projekty są zgodne z celami strategicznymi organizacji oraz spełniają wymagania wewnętrznych procedur i standardów.',
                    'en' => 'Ensuring that projects align with the organization\'s strategic goals and meet internal procedures and standards.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7286,
                'name' => json_encode([
                    'pl' => 'Weryfikacja, czy projekty realizowane są zgodnie z politykami organizacji, przepisami prawa i normami branżowymi.',
                    'en' => 'Verifying that projects comply with organizational policies, legal regulations, and industry standards.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7287,
                'name' => json_encode([
                    'pl' => 'Przeprowadzanie regularnych kontroli jakości i przestrzegania standardów w realizacji projektów.',
                    'en' => 'Conducting regular quality checks and ensuring compliance with standards in project execution.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7288,
                'name' => json_encode([
                    'pl' => 'Utrzymywanie stałej komunikacji z interesariuszami projektów, takimi jak zarząd, klient, partnerzy oraz zespół projektowy.',
                    'en' => 'Maintaining regular communication with project stakeholders, such as management, clients, partners, and the project team.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7289,
                'name' => json_encode([
                    'pl' => 'Przekazywanie informacji o kluczowych aspektach realizacji projektów, w tym postępach, ryzykach oraz decyzjach strategicznych.',
                    'en' => 'Communicating key aspects of project execution, including progress, risks, and strategic decisions.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7290,
                'name' => json_encode([
                    'pl' => 'Organizowanie spotkań i konsultacji z interesariuszami w celu zebrania feedbacku oraz zapewnienia ich zaangażowania.',
                    'en' => 'Organizing meetings and consultations with stakeholders to gather feedback and ensure their engagement.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7291,
                'name' => json_encode([
                    'pl' => 'Opracowywanie i aktualizowanie dokumentacji projektowej, takiej jak plany projektowe, harmonogramy, raporty postępu oraz analizy budżetowe.',
                    'en' => 'Developing and updating project documentation, including project plans, schedules, progress reports, and budget analyses.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7292,
                'name' => json_encode([
                    'pl' => 'Tworzenie raportów końcowych po zakończeniu projektów, które podsumowują osiągnięcia, wnioski i rekomendacje na przyszłość.',
                    'en' => 'Creating final reports after project completion, summarizing achievements, insights, and recommendations for the future.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7293,
                'name' => json_encode([
                    'pl' => 'Zapewnienie dostępności dokumentacji dla zespołu projektowego oraz kierownictwa.',
                    'en' => 'Ensuring documentation availability for the project team and management.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7294,
                'name' => json_encode([
                    'pl' => 'Przeprowadzanie analizy wyników projektów w odniesieniu do założonych celów, budżetu i harmonogramu.',
                    'en' => 'Conducting project result analysis concerning the set objectives, budget, and timeline.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7295,
                'name' => json_encode([
                    'pl' => 'Ocenianie efektywności działań i identyfikowanie obszarów wymagających poprawy.',
                    'en' => 'Evaluating activity effectiveness and identifying areas for improvement.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7296,
                'name' => json_encode([
                    'pl' => 'Opracowywanie raportów z wynikami analizy oraz przekazywanie wniosków zarządowi.',
                    'en' => 'Preparing analysis reports and submitting insights to management.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7297,
                'name' => json_encode([
                    'pl' => 'Korzystanie z narzędzi i oprogramowania do zarządzania projektami (np. MS Project, Trello, Asana) w celu monitorowania postępów i efektywnego zarządzania zespołem.',
                    'en' => 'Utilizing project management tools (e.g., MS Project, Trello, Asana) to monitor progress and manage the team effectively.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7298,
                'name' => json_encode([
                    'pl' => 'Wprowadzanie danych dotyczących projektów, harmonogramów i wyników oraz generowanie raportów.',
                    'en' => 'Entering project data, schedules, and outcomes and generating reports.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7299,
                'name' => json_encode([
                    'pl' => 'Wdrażanie nowych narzędzi i systemów, które mogą usprawnić zarządzanie projektami.',
                    'en' => 'Implementing new tools and systems to streamline project management.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7300,
                'name' => json_encode([
                    'pl' => 'Analiza zakończonych projektów i identyfikacja najlepszych praktyk oraz obszarów do poprawy.',
                    'en' => 'Analyzing completed projects and identifying best practices and areas for improvement.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7301,
                'name' => json_encode([
                    'pl' => 'Opracowywanie i wdrażanie usprawnień do procesów projektowych, aby zwiększyć ich efektywność i zgodność z celami organizacyjnymi.',
                    'en' => 'Developing and implementing process improvements to increase project efficiency and alignment with organizational goals.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7302,
                'name' => json_encode([
                    'pl' => 'Przeprowadzanie przeglądów i wprowadzanie zmian do procedur projektowych w odpowiedzi na zmieniające się potrzeby.',
                    'en' => 'Conducting reviews and updating project procedures to meet changing needs.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7303,
                'name' => json_encode([
                    'pl' => 'Planowanie i alokacja zasobów niezbędnych do realizacji projektów, w tym pracowników, materiałów oraz technologii.',
                    'en' => 'Planning and allocating resources needed for project execution, including personnel, materials, and technology.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7304,
                'name' => json_encode([
                    'pl' => 'Monitorowanie dostępności zasobów oraz identyfikowanie ewentualnych braków lub nadmiaru zasobów.',
                    'en' => 'Monitoring resource availability and identifying any shortages or excess resources.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7305,
                'name' => json_encode([
                    'pl' => 'Współpraca z działem kadr i innymi jednostkami w celu zapewnienia zasobów do realizacji projektów.',
                    'en' => 'Collaborating with HR and other departments to ensure resources for project execution.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7306,
                'name' => json_encode([
                    'pl' => 'Współpraca z innymi działami organizacji, takimi jak finanse, marketing, IT, aby zapewnić spójność działań w ramach projektów.',
                    'en' => 'Collaborating with other departments, such as finance, marketing, and IT, to ensure alignment of project activities.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7307,
                'name' => json_encode([
                    'pl' => 'Koordynowanie pracy zespołów międzydziałowych oraz rozwiązywanie problemów wynikających ze współpracy między działami.',
                    'en' => 'Coordinating work among cross-departmental teams and resolving issues arising from inter-departmental collaboration.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7308,
                'name' => json_encode([
                    'pl' => 'Organizowanie spotkań i konsultacji z przedstawicielami innych działów w celu synchronizacji działań.',
                    'en' => 'Organizing meetings and consultations with representatives from other departments to synchronize activities.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7309,
                'name' => json_encode([
                    'pl' => 'Opracowywanie planów awaryjnych na wypadek nieprzewidzianych zdarzeń lub opóźnień w realizacji projektów.',
                    'en' => 'Developing contingency plans for unforeseen events or delays in project execution.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7310,
                'name' => json_encode([
                    'pl' => 'Elastyczne reagowanie na zmiany w harmonogramie, budżecie lub zakresie projektu oraz informowanie interesariuszy o wprowadzonych modyfikacjach.',
                    'en' => 'Adapting flexibly to changes in the schedule, budget, or scope of the project and informing stakeholders of modifications.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7311,
                'name' => json_encode([
                    'pl' => 'Dokumentowanie zmian oraz aktualizacja planów projektowych w odpowiedzi na nowe potrzeby i okoliczności.',
                    'en' => 'Documenting changes and updating project plans to respond to new needs and circumstances.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7312,
                'name' => json_encode([
                    'pl' => 'Weryfikacja, czy wszystkie działania projektowe spełniają standardy jakości oraz wymagania klienta i organizacji.',
                    'en' => 'Ensuring all project activities meet quality standards and the requirements of both the client and organization.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7313,
                'name' => json_encode([
                    'pl' => 'Przeprowadzanie regularnych kontroli jakości oraz wprowadzanie działań korygujących w przypadku stwierdzenia niezgodności.',
                    'en' => 'Conducting regular quality checks and implementing corrective actions if non-compliance is found.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7314,
                'name' => json_encode([
                    'pl' => 'Opracowywanie standardów jakości projektów oraz monitorowanie ich wdrażania.',
                    'en' => 'Developing quality standards for projects and monitoring their implementation.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7315,
                'name' => json_encode([
                    'pl' => 'Regularne uczestnictwo w szkoleniach dotyczących zarządzania projektami, technik planowania, analizy ryzyka oraz narzędzi do zarządzania projektami.',
                    'en' => 'Regularly participating in training on project management, planning techniques, risk analysis, and project management tools.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7316,
                'name' => json_encode([
                    'pl' => 'Aktualizowanie wiedzy na temat nowych trendów i metodologii w zarządzaniu projektami, takich jak Agile, Lean, Scrum.',
                    'en' => 'Updating knowledge on new trends and methodologies in project management, such as Agile, Lean, and Scrum.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7317,
                'name' => json_encode([
                    'pl' => 'Współpraca z innymi specjalistami ds. projektów w celu wymiany doświadczeń i podnoszenia standardów pracy.',
                    'en' => 'Collaborating with other project specialists to share experiences and raise work standards.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ]
        ];
        $SPECJALISTA_DO_SPRAW_ZARZĄDZANIA = [
            [
                'id' => 7318,
                'name' => json_encode([
                    'pl' => 'Identyfikacja i analiza kluczowych procesów wewnętrznych w organizacji w celu poprawy ich efektywności.',
                    'en' => 'Identification and analysis of key internal processes within the organization to improve their efficiency.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7319,
                'name' => json_encode([
                    'pl' => 'Mapowanie procesów i identyfikowanie obszarów wymagających optymalizacji lub automatyzacji.',
                    'en' => 'Mapping processes and identifying areas that require optimization or automation.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7320,
                'name' => json_encode([
                    'pl' => 'Przeprowadzanie audytów wewnętrznych i raportowanie wyników oraz zaleceń dotyczących ulepszeń.',
                    'en' => 'Conducting internal audits and reporting findings and recommendations for improvements.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7321,
                'name' => json_encode([
                    'pl' => 'Współpraca z kierownictwem przy opracowywaniu strategii i celów długoterminowych organizacji.',
                    'en' => 'Collaborating with management in developing organizational strategies and long-term goals.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7322,
                'name' => json_encode([
                    'pl' => 'Tworzenie planów wdrożeniowych dla strategii, monitorowanie postępów i raportowanie wyników.',
                    'en' => 'Developing implementation plans for strategies, monitoring progress, and reporting results.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7323,
                'name' => json_encode([
                    'pl' => 'Zapewnienie, że działania są zgodne z założonymi celami strategicznymi i wartościami organizacji.',
                    'en' => 'Ensuring that activities align with the organization\'s strategic goals and values.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7324,
                'name' => json_encode([
                    'pl' => 'Analiza bieżących operacji organizacyjnych w celu identyfikacji nieefektywności i obszarów wymagających poprawy.',
                    'en' => 'Analyzing current organizational operations to identify inefficiencies and areas for improvement.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7325,
                'name' => json_encode([
                    'pl' => 'Opracowywanie i wdrażanie usprawnień operacyjnych, które zwiększają wydajność i obniżają koszty.',
                    'en' => 'Developing and implementing operational improvements to increase efficiency and reduce costs.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7326,
                'name' => json_encode([
                    'pl' => 'Wdrażanie zasad lean management i innych technik optymalizacyjnych.',
                    'en' => 'Implementing lean management principles and other optimization techniques.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7327,
                'name' => json_encode([
                    'pl' => 'Planowanie i realizacja projektów mających na celu rozwój i poprawę funkcjonowania organizacji.',
                    'en' => 'Planning and executing projects aimed at organizational development and operational improvement.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7328,
                'name' => json_encode([
                    'pl' => 'Monitorowanie harmonogramu, budżetu oraz realizacji zadań projektowych.',
                    'en' => 'Monitoring project schedules, budgets, and task completion.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7329,
                'name' => json_encode([
                    'pl' => 'Komunikacja z zespołami projektowymi i interesariuszami oraz zapewnienie, że projekty są realizowane zgodnie z założeniami.',
                    'en' => 'Communicating with project teams and stakeholders to ensure projects are executed as planned.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7330,
                'name' => json_encode([
                    'pl' => 'Opracowywanie i wdrażanie planów zarządzania zmianą w organizacji.',
                    'en' => 'Developing and implementing change management plans within the organization.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7331,
                'name' => json_encode([
                    'pl' => 'Przekazywanie pracownikom informacji o zmianach oraz zapewnianie wsparcia w adaptacji do nowych procesów.',
                    'en' => 'Communicating changes to employees and supporting them in adapting to new processes.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7332,
                'name' => json_encode([
                    'pl' => 'Monitorowanie skuteczności wdrożonych zmian i dokonywanie ewentualnych korekt.',
                    'en' => 'Monitoring the effectiveness of implemented changes and making adjustments if necessary.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7333,
                'name' => json_encode([
                    'pl' => 'Opracowywanie procedur i polityk organizacyjnych w celu standaryzacji procesów.',
                    'en' => 'Developing organizational procedures and policies to standardize processes.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7334,
                'name' => json_encode([
                    'pl' => 'Zapewnienie zgodności z przepisami prawa i wewnętrznymi regulacjami.',
                    'en' => 'Ensuring compliance with legal regulations and internal policies.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7335,
                'name' => json_encode([
                    'pl' => 'Szkolenie pracowników w zakresie nowych procedur i monitorowanie ich przestrzegania.',
                    'en' => 'Training employees on new procedures and monitoring their compliance.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7336,
                'name' => json_encode([
                    'pl' => 'Zbieranie i analiza danych operacyjnych, finansowych i efektywnościowych w celu podejmowania decyzji opartych na faktach.',
                    'en' => 'Collecting and analyzing operational, financial, and performance data to make evidence-based decisions.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7337,
                'name' => json_encode([
                    'pl' => 'Opracowywanie raportów dla kierownictwa dotyczących kluczowych wskaźników wydajności (KPI) oraz proponowanie działań usprawniających.',
                    'en' => 'Preparing reports for management on key performance indicators (KPIs) and recommending improvements.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7338,
                'name' => json_encode([
                    'pl' => 'Współpraca z działem analitycznym i finansowym w zakresie raportowania.',
                    'en' => 'Collaborating with analytics and finance departments in reporting processes.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7339,
                'name' => json_encode([
                    'pl' => 'Współpraca z działem HR przy planowaniu zasobów kadrowych oraz wdrażaniu programów rozwojowych dla pracowników.',
                    'en' => 'Working with HR to plan staffing resources and implement employee development programs.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7340,
                'name' => json_encode([
                    'pl' => 'Identyfikowanie potrzeb szkoleniowych i organizowanie szkoleń, które mają na celu zwiększenie kompetencji pracowników.',
                    'en' => 'Identifying training needs and organizing sessions to enhance employee competencies.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7341,
                'name' => json_encode([
                    'pl' => 'Monitorowanie efektywności działań pracowników i wspieranie ich rozwoju zawodowego.',
                    'en' => 'Monitoring employee performance and supporting their professional growth.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7342,
                'name' => json_encode([
                    'pl' => 'Dobór i wdrażanie narzędzi informatycznych wspierających zarządzanie procesami, np. systemów ERP, CRM.',
                    'en' => 'Selecting and implementing IT tools to support process management, e.g., ERP, CRM systems.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7343,
                'name' => json_encode([
                    'pl' => 'Ustalanie standardów pracy z wykorzystaniem systemów zarządzania oraz szkolenie pracowników z zakresu ich obsługi.',
                    'en' => 'Establishing work standards using management systems and training employees in their use.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7344,
                'name' => json_encode([
                    'pl' => 'Monitorowanie wydajności narzędzi i systemów oraz podejmowanie działań w celu ich ulepszania.',
                    'en' => 'Monitoring the efficiency of tools and systems and taking action to improve them.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7345,
                'name' => json_encode([
                    'pl' => 'Przeprowadzanie analizy ryzyka operacyjnego i tworzenie strategii minimalizowania zagrożeń dla organizacji.',
                    'en' => 'Conducting operational risk analysis and creating strategies to minimize threats to the organization.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7346,
                'name' => json_encode([
                    'pl' => 'Wdrażanie procedur zarządzania ryzykiem i monitorowanie ich skuteczności.',
                    'en' => 'Implementing risk management procedures and monitoring their effectiveness.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7347,
                'name' => json_encode([
                    'pl' => 'Raportowanie o zagrożeniach oraz podejmowanie działań zapobiegawczych.',
                    'en' => 'Reporting on risks and taking preventive actions.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7348,
                'name' => json_encode([
                    'pl' => 'Współpraca z działem finansowym przy opracowywaniu budżetu oraz monitorowanie jego realizacji.',
                    'en' => 'Collaborating with the finance department to develop the budget and monitor its implementation.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7349,
                'name' => json_encode([
                    'pl' => 'Identyfikacja obszarów wymagających oszczędności oraz rekomendowanie działań optymalizacyjnych.',
                    'en' => 'Identifying areas requiring savings and recommending optimization actions.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7350,
                'name' => json_encode([
                    'pl' => 'Analiza kosztów operacyjnych oraz proponowanie zmian mających na celu poprawę rentowności organizacji.',
                    'en' => 'Analyzing operational costs and proposing changes to improve the organization\'s profitability.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7351,
                'name' => json_encode([
                    'pl' => 'Monitorowanie zmian w przepisach prawa oraz dostosowywanie działań organizacji do nowych wymagań.',
                    'en' => 'Monitoring changes in legal regulations and adjusting the organization\'s actions to new requirements.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7352,
                'name' => json_encode([
                    'pl' => 'Tworzenie polityk zapewniających zgodność z regulacjami branżowymi i prawnymi.',
                    'en' => 'Creating policies to ensure compliance with industry and legal regulations.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7353,
                'name' => json_encode([
                    'pl' => 'Współpraca z działem prawnym w zakresie analizy zgodności operacyjnej i implementacji nowych regulacji.',
                    'en' => 'Collaborating with the legal department for operational compliance analysis and implementing new regulations.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7354,
                'name' => json_encode([
                    'pl' => 'Monitorowanie jakości realizacji procesów i zgodności działań z normami jakości.',
                    'en' => 'Monitoring the quality of process execution and compliance with quality standards.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7355,
                'name' => json_encode([
                    'pl' => 'Opracowywanie standardów jakości i procedur monitorowania jakości w organizacji.',
                    'en' => 'Developing quality standards and monitoring procedures within the organization.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7356,
                'name' => json_encode([
                    'pl' => 'Identyfikacja i rozwiązywanie problemów związanych z jakością oraz rekomendowanie działań naprawczych.',
                    'en' => 'Identifying and resolving quality-related issues and recommending corrective actions.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7357,
                'name' => json_encode([
                    'pl' => 'Utrzymywanie relacji z kluczowymi interesariuszami organizacji, takimi jak klienci, dostawcy, partnerzy i pracownicy.',
                    'en' => 'Maintaining relationships with key stakeholders in the organization, such as clients, suppliers, partners, and employees.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7358,
                'name' => json_encode([
                    'pl' => 'Rozwiązywanie konfliktów i negocjowanie warunków współpracy w imieniu organizacji.',
                    'en' => 'Resolving conflicts and negotiating terms of cooperation on behalf of the organization.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7359,
                'name' => json_encode([
                    'pl' => 'Monitorowanie satysfakcji interesariuszy i podejmowanie działań mających na celu jej poprawę.',
                    'en' => 'Monitoring stakeholder satisfaction and taking actions to improve it.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7360,
                'name' => json_encode([
                    'pl' => 'Tworzenie analiz rynku, konkurencji i trendów branżowych, które wspierają procesy decyzyjne w organizacji.',
                    'en' => 'Creating analyses of market, competition, and industry trends that support decision-making processes in the organization.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7361,
                'name' => json_encode([
                    'pl' => 'Opracowywanie długoterminowych prognoz oraz strategii opartych na analizie danych.',
                    'en' => 'Developing long-term forecasts and strategies based on data analysis.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7362,
                'name' => json_encode([
                    'pl' => 'Prezentowanie wyników analiz kierownictwu oraz rekomendowanie działań strategicznych.',
                    'en' => 'Presenting analysis results to management and recommending strategic actions.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7363,
                'name' => json_encode([
                    'pl' => 'Regularne uczestnictwo w szkoleniach, konferencjach i kursach z zakresu zarządzania, optymalizacji procesów oraz nowoczesnych metod zarządzania.',
                    'en' => 'Regularly attending training sessions, conferences, and courses in management, process optimization, and modern management methodologies.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7364,
                'name' => json_encode([
                    'pl' => 'Aktualizowanie wiedzy na temat nowych trendów i narzędzi zarządzania oraz wdrażanie ich w organizacji.',
                    'en' => 'Updating knowledge of new management trends and tools and implementing them in the organization.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7365,
                'name' => json_encode([
                    'pl' => 'Współpraca z innymi specjalistami ds. zarządzania w celu wymiany doświadczeń oraz podnoszenia standardów pracy.',
                    'en' => 'Collaborating with other management specialists to exchange experiences and raise work standards.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ]

        ];


        DB::table('detail_projects')->insert(array_merge(
            $inspektor_ochrony_danych,
            $inspektor_obrotu_leki,
            $SPECJALISTA_DO_SPRAW_BEZPIECZEŃSTWA_WEWNĘTRZNEGO,
            $SPECJALISTA_DO_SPRAW_CUDZOZIEMCÓW,
            $SPECJALISTA_DO_SPRAW_OBSLUGI_PROJEKTOW_I_PROGRAMOW,
            $SPECJALISTA_DO_SPRAW_ZARZĄDZANIA
            ));

        Category::whereId('233')->first()->detailprojects()->attach(collect($inspektor_ochrony_danych)->pluck('id')->toArray());
        Category::whereId('234')->first()->detailprojects()->attach(collect($inspektor_obrotu_leki)->pluck('id')->toArray());
        Category::whereId('235')->first()->detailprojects()->attach(collect($SPECJALISTA_DO_SPRAW_BEZPIECZEŃSTWA_WEWNĘTRZNEGO)->pluck('id')->toArray());
        Category::whereId('236')->first()->detailprojects()->attach(collect($SPECJALISTA_DO_SPRAW_CUDZOZIEMCÓW)->pluck('id')->toArray());
        Category::whereId('237')->first()->detailprojects()->attach(collect($SPECJALISTA_DO_SPRAW_OBSLUGI_PROJEKTOW_I_PROGRAMOW)->pluck('id')->toArray());
        Category::whereId('238')->first()->detailprojects()->attach(collect($SPECJALISTA_DO_SPRAW_ZARZĄDZANIA)->pluck('id')->toArray());

    }
}
