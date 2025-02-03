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
        $SEKRETARKA_W_KANCELARII_PRAWNEJ = [
            [
                'id' => 7366,
                'name' => json_encode([
                    'pl' => 'Witanie klientów i gości kancelarii, udzielanie podstawowych informacji i kierowanie ich do odpowiednich osób.',
                    'en' => 'Greeting clients and guests of the law firm, providing basic information, and directing them to the appropriate staff.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7367,
                'name' => json_encode([
                    'pl' => 'Odbieranie i przekazywanie telefonów oraz wiadomości, zapewniając sprawny przepływ informacji.',
                    'en' => 'Answering and transferring calls and messages, ensuring a smooth flow of information.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7368,
                'name' => json_encode([
                    'pl' => 'Utrzymywanie profesjonalnego wizerunku kancelarii w kontakcie z klientami i interesariuszami.',
                    'en' => 'Maintaining a professional image of the firm in interactions with clients and stakeholders.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7369,
                'name' => json_encode([
                    'pl' => 'Organizowanie i zarządzanie kalendarzem spotkań prawników, w tym planowanie i potwierdzanie terminów spotkań z klientami oraz stronami postępowania.',
                    'en' => 'Organizing and managing the lawyers’ meeting calendar, including planning and confirming appointments with clients and parties involved.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7370,
                'name' => json_encode([
                    'pl' => 'Koordynacja spotkań wewnętrznych oraz zapewnienie dostępności sal konferencyjnych.',
                    'en' => 'Coordinating internal meetings and ensuring the availability of conference rooms.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7371,
                'name' => json_encode([
                    'pl' => 'Przypominanie prawnikom o nadchodzących spotkaniach, terminach sądowych i innych ważnych wydarzeniach.',
                    'en' => 'Reminding lawyers of upcoming meetings, court dates, and other important events.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7372,
                'name' => json_encode([
                    'pl' => 'Przyjmowanie, segregowanie i dystrybucja poczty przychodzącej i wychodzącej, zarówno tradycyjnej, jak i elektronicznej.',
                    'en' => 'Receiving, sorting, and distributing incoming and outgoing mail, both traditional and electronic.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7373,
                'name' => json_encode([
                    'pl' => 'Redagowanie, formatowanie i wysyłanie korespondencji zgodnie ze standardami kancelarii.',
                    'en' => 'Drafting, formatting, and sending correspondence in line with firm standards.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7374,
                'name' => json_encode([
                    'pl' => 'Organizowanie wysyłek kurierskich oraz przesyłek specjalnych zgodnie z potrzebami kancelarii.',
                    'en' => 'Organizing courier shipments and special deliveries according to the firm’s needs.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7375,
                'name' => json_encode([
                    'pl' => 'Przygotowywanie dokumentów takich jak pozwy, umowy, wnioski, pełnomocnictwa i inne pisma prawne zgodnie z wytycznymi prawników.',
                    'en' => 'Preparing documents such as lawsuits, contracts, applications, powers of attorney, and other legal documents as instructed by lawyers.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7376,
                'name' => json_encode([
                    'pl' => 'Formatowanie dokumentów zgodnie ze standardami kancelarii, dbając o ich czytelność i profesjonalny wygląd.',
                    'en' => 'Formatting documents according to firm standards, ensuring readability and a professional appearance.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7377,
                'name' => json_encode([
                    'pl' => 'Edytowanie i korygowanie dokumentów, w tym sprawdzanie ich pod kątem poprawności językowej.',
                    'en' => 'Editing and proofreading documents, including checking for linguistic accuracy.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7378,
                'name' => json_encode([
                    'pl' => 'Prowadzenie, przechowywanie i archiwizacja dokumentacji prawnej, akt spraw oraz korespondencji.',
                    'en' => 'Managing, storing, and archiving legal documentation, case files, and correspondence.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7379,
                'name' => json_encode([
                    'pl' => 'Tworzenie i aktualizacja systemów organizacji dokumentacji, takich jak bazy danych i rejestry spraw.',
                    'en' => 'Creating and updating document organization systems, such as databases and case registers.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7380,
                'name' => json_encode([
                    'pl' => 'Dbanie o porządek w dokumentacji, zabezpieczenie dokumentów i przestrzeganie zasad poufności.',
                    'en' => 'Maintaining order in documentation, securing documents, and following confidentiality guidelines.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7381,
                'name' => json_encode([
                    'pl' => 'Przygotowywanie kompletów dokumentów na potrzeby spraw sądowych, w tym organizacja akt i porządkowanie dokumentacji.',
                    'en' => 'Preparing document sets for court cases, including organizing files and arranging documentation.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7382,
                'name' => json_encode([
                    'pl' => 'Pomoc prawnikom w przygotowaniu dokumentów dowodowych, zestawień, raportów i innych materiałów.',
                    'en' => 'Assisting lawyers in preparing evidence documents, summaries, reports, and other materials.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7383,
                'name' => json_encode([
                    'pl' => 'Utrzymywanie bieżącego kontaktu z instytucjami sądowymi i innymi podmiotami w celu ustalenia szczegółów postępowań.',
                    'en' => 'Maintaining ongoing communication with court institutions and other entities to clarify case details.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7384,
                'name' => json_encode([
                    'pl' => 'Umawianie spotkań z klientami oraz przygotowywanie sali konferencyjnej do spotkań, w tym dbanie o niezbędne materiały.',
                    'en' => 'Scheduling meetings with clients and preparing the conference room, including arranging necessary materials.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7385,
                'name' => json_encode([
                    'pl' => 'Przekazywanie informacji o stanie sprawy klientom, jeśli zostało to powierzone przez prawników.',
                    'en' => 'Conveying case status information to clients when delegated by lawyers.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7386,
                'name' => json_encode([
                    'pl' => 'Utrzymywanie kontaktu z klientami w celu dostarczenia potrzebnych dokumentów i materiałów.',
                    'en' => 'Keeping in touch with clients to provide necessary documents and materials.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7387,
                'name' => json_encode([
                    'pl' => 'Korzystanie z oprogramowania prawniczego i baz danych do rejestrowania spraw, wyszukiwania informacji i aktualizacji danych.',
                    'en' => 'Using legal software and databases to register cases, search for information, and update data.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7388,
                'name' => json_encode([
                    'pl' => 'Wprowadzanie danych dotyczących klientów i prowadzonych spraw do systemów kancelarii.',
                    'en' => 'Entering client and case-related data into the firm’s systems.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7389,
                'name' => json_encode([
                    'pl' => 'Przestrzeganie zasad ochrony danych osobowych i zabezpieczenie danych klientów przed nieautoryzowanym dostępem.',
                    'en' => 'Adhering to data protection regulations and securing client data from unauthorized access.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7390,
                'name' => json_encode([
                    'pl' => 'Monitorowanie zapasów materiałów biurowych, takich jak papier, tusz do drukarek, teczki, koperty, i dbanie o ich regularne uzupełnianie.',
                    'en' => 'Monitoring office supplies, such as paper, printer ink, folders, and envelopes, ensuring regular replenishment.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7391,
                'name' => json_encode([
                    'pl' => 'Składanie zamówień na materiały biurowe oraz kontrola ich dostaw.',
                    'en' => 'Placing orders for office supplies and tracking their deliveries.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7392,
                'name' => json_encode([
                    'pl' => 'Dbanie o porządek w przestrzeni biurowej i utrzymanie przyjaznego środowiska pracy.',
                    'en' => 'Maintaining order in the office space and fostering a friendly work environment.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7393,
                'name' => json_encode([
                    'pl' => 'Organizowanie podróży służbowych prawników, w tym rezerwowanie biletów, hoteli oraz transportu.',
                    'en' => 'Arranging business trips for lawyers, including booking tickets, hotels, and transportation.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7394,
                'name' => json_encode([
                    'pl' => 'Przygotowywanie harmonogramów podróży oraz kompletowanie niezbędnych dokumentów i informacji.',
                    'en' => 'Preparing travel itineraries and compiling necessary documents and information.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7395,
                'name' => json_encode([
                    'pl' => 'Weryfikacja kosztów podróży oraz przygotowywanie raportów wydatków.',
                    'en' => 'Verifying travel costs and preparing expense reports.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7396,
                'name' => json_encode([
                    'pl' => 'Współpraca z działem marketingu lub agencjami zewnętrznymi przy tworzeniu materiałów promocyjnych kancelarii.',
                    'en' => 'Collaborating with the marketing department or external agencies in creating the firm’s promotional materials.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7397,
                'name' => json_encode([
                    'pl' => 'Przygotowywanie treści na potrzeby strony internetowej, broszur, ulotek oraz materiałów prasowych.',
                    'en' => 'Preparing content for the website, brochures, leaflets, and press materials.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7398,
                'name' => json_encode([
                    'pl' => 'Aktualizowanie treści strony internetowej kancelarii w porozumieniu z odpowiedzialnymi osobami.',
                    'en' => 'Updating the firm’s website content in consultation with responsible individuals.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7399,
                'name' => json_encode([
                    'pl' => 'Pomoc w organizacji wydarzeń kancelarii, takich jak seminaria, konferencje czy spotkania z klientami.',
                    'en' => 'Assisting in organizing firm events, such as seminars, conferences, or client meetings.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7400,
                'name' => json_encode([
                    'pl' => 'Koordynacja działań logistycznych, w tym rezerwacje sal, zamawianie cateringu, przygotowanie materiałów.',
                    'en' => 'Coordinating logistical activities, including room reservations, catering orders, and material preparation.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7401,
                'name' => json_encode([
                    'pl' => 'Wspieranie działań promocyjnych wydarzeń oraz pomoc w przygotowywaniu materiałów reklamowych.',
                    'en' => 'Supporting promotional activities for events and assisting in the preparation of marketing materials.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7402,
                'name' => json_encode([
                    'pl' => 'Sporządzanie zestawień dokumentacji oraz statystyk dotyczących prowadzonych spraw na potrzeby prawników i zarządu.',
                    'en' => 'Preparing documentation summaries and statistics on ongoing cases for lawyers and management.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7403,
                'name' => json_encode([
                    'pl' => 'Przygotowywanie okresowych raportów o stanie spraw i wydajności biura.',
                    'en' => 'Preparing periodic reports on case status and office efficiency.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7404,
                'name' => json_encode([
                    'pl' => 'Tworzenie zestawień finansowych na potrzeby kancelarii, takich jak raporty o kosztach operacyjnych i budżetach projektów.',
                    'en' => 'Creating financial summaries for the firm, including reports on operational costs and project budgets.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7405,
                'name' => json_encode([
                    'pl' => 'Organizowanie spotkań wewnętrznych oraz przygotowywanie notatek i sprawozdań z narad.',
                    'en' => 'Organizing internal meetings and preparing notes and minutes from discussions.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7406,
                'name' => json_encode([
                    'pl' => 'Wspieranie zespołu prawników w bieżących zadaniach administracyjnych i zapewnianie sprawnego funkcjonowania biura.',
                    'en' => 'Supporting the legal team with ongoing administrative tasks and ensuring smooth office operations.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7407,
                'name' => json_encode([
                    'pl' => 'Przestrzeganie zasad poufności i bezpieczeństwa informacji, zwłaszcza w zakresie ochrony danych klientów.',
                    'en' => 'Maintaining confidentiality and information security, particularly regarding client data protection.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7408,
                'name' => json_encode([
                    'pl' => 'Dbanie o ciągłość działań biura, w tym organizowanie zastępstw, jeśli wymaga tego sytuacja.',
                    'en' => 'Ensuring office continuity, including arranging substitutes as needed.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7409,
                'name' => json_encode([
                    'pl' => 'Monitorowanie terminarzy i przypominanie o ważnych terminach, w tym terminach przedawnienia i postępowań sądowych.',
                    'en' => 'Monitoring schedules and reminding about important dates, including deadlines and court proceedings.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7410,
                'name' => json_encode([
                    'pl' => 'Wspieranie pracy zespołu prawników, zapewniając im niezbędne zasoby i informacje do skutecznego prowadzenia spraw.',
                    'en' => 'Supporting the work of the legal team by providing necessary resources and information for effective case management.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7411,
                'name' => json_encode([
                    'pl' => 'Regularne uczestnictwo w szkoleniach dotyczących obsługi biura prawniczego, edytorów tekstu, zasad pisania dokumentów prawnych.',
                    'en' => 'Regularly attending training on law office operations, text editors, and legal document standards.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7412,
                'name' => json_encode([
                    'pl' => 'Doskonalenie umiejętności interpersonalnych, obsługi klienta oraz zarządzania czasem.',
                    'en' => 'Improving interpersonal, client service, and time management skills.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7413,
                'name' => json_encode([
                    'pl' => 'Aktualizowanie wiedzy na temat nowych narzędzi biurowych oraz procedur w pracy kancelarii.',
                    'en' => 'Updating knowledge on new office tools and procedures within the firm.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ]


        ];
        $POZOSTALI_SEKRETARZE_PRAWNI = [
            [
                'id' => 7414,
                'name' => json_encode([
                    'pl' => 'Pomoc w organizowaniu pracy zespołów prawników, w tym zarządzanie kalendarzami, organizacja spotkań oraz koordynacja terminów procesowych.',
                    'en' => 'Assisting in organizing the work of legal teams, including managing calendars, organizing meetings, and coordinating court deadlines.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7415,
                'name' => json_encode([
                    'pl' => 'Pomoc w ustalaniu priorytetów i przypominanie o kluczowych zadaniach i terminach w sprawach prowadzonych przez poszczególnych prawników.',
                    'en' => 'Helping set priorities and reminding of key tasks and deadlines in cases handled by individual lawyers.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7416,
                'name' => json_encode([
                    'pl' => 'Współpraca z asystentami prawników w celu zapewnienia sprawnej realizacji zadań biura.',
                    'en' => 'Collaborating with legal assistants to ensure smooth execution of office tasks.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7417,
                'name' => json_encode([
                    'pl' => 'Redagowanie, edytowanie i formatowanie pism procesowych, pozwów, wniosków oraz umów.',
                    'en' => 'Drafting, editing, and formatting legal documents, lawsuits, applications, and contracts.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7418,
                'name' => json_encode([
                    'pl' => 'Przygotowywanie projektów dokumentów na podstawie wskazówek prawnika i dbanie o ich zgodność z wytycznymi kancelarii.',
                    'en' => 'Preparing document drafts based on lawyer instructions and ensuring compliance with firm guidelines.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7419,
                'name' => json_encode([
                    'pl' => 'Zapewnienie poprawności językowej, stylistycznej i zgodności dokumentów z przepisami formalnymi.',
                    'en' => 'Ensuring linguistic, stylistic accuracy and formal compliance in documents.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7420,
                'name' => json_encode([
                    'pl' => 'Prowadzenie korespondencji między kancelarią a sądami, instytucjami publicznymi oraz klientami.',
                    'en' => 'Handling correspondence between the firm, courts, public institutions, and clients.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7421,
                'name' => json_encode([
                    'pl' => 'Ustalanie szczegółów formalnych dotyczących składania dokumentów i ich odbioru, w tym wysyłek kurierskich oraz terminów przesyłek.',
                    'en' => 'Arranging formal details for document submission and collection, including courier shipments and deadlines.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7422,
                'name' => json_encode([
                    'pl' => 'Odpowiadanie na e-maile, odbieranie telefonów oraz przekazywanie informacji pomiędzy prawnikami a stronami trzecimi.',
                    'en' => 'Responding to emails, answering calls, and relaying information between lawyers and third parties.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7423,
                'name' => json_encode([
                    'pl' => 'Przygotowywanie kompletnych zestawów dokumentów na potrzeby spraw sądowych i administracyjnych, w tym zarządzanie dowodami i dokumentacją.',
                    'en' => 'Preparing complete sets of documents for court and administrative cases, including managing evidence and documentation.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7424,
                'name' => json_encode([
                    'pl' => 'Upewnienie się, że wszystkie dokumenty są kompletne, prawidłowo ułożone i gotowe do przedstawienia w sądzie.',
                    'en' => 'Ensuring all documents are complete, properly arranged, and ready for court presentation.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7425,
                'name' => json_encode([
                    'pl' => 'Ścisła współpraca z prawnikami w celu zebrania wszystkich niezbędnych materiałów dowodowych i formalnych.',
                    'en' => 'Collaborating closely with lawyers to gather all necessary evidence and formal materials.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7426,
                'name' => json_encode([
                    'pl' => 'Prowadzenie archiwum kancelarii, dbanie o porządek i zgodność przechowywanych dokumentów z wymogami prawnymi i kancelaryjnymi.',
                    'en' => 'Maintaining the firm’s archive, ensuring order and compliance with legal and office standards.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7427,
                'name' => json_encode([
                    'pl' => 'Aktualizowanie baz danych oraz systemów ewidencyjnych dokumentacji, rejestrów akt i korespondencji.',
                    'en' => 'Updating databases and registry systems for documentation, case records, and correspondence.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7428,
                'name' => json_encode([
                    'pl' => 'Zapewnienie bezpiecznego przechowywania dokumentów, przestrzegając zasad poufności i ochrony danych osobowych.',
                    'en' => 'Ensuring safe document storage, adhering to confidentiality and personal data protection standards.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7429,
                'name' => json_encode([
                    'pl' => 'Wspieranie prawników w tworzeniu analiz oraz raportów, w tym przeszukiwanie dokumentacji i przygotowywanie zestawień.',
                    'en' => 'Supporting lawyers in creating analyses and reports, including document searches and preparing summaries.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7430,
                'name' => json_encode([
                    'pl' => 'Pomoc w przygotowywaniu materiałów na spotkania, rozprawy oraz zebrania z klientami.',
                    'en' => 'Assisting in preparing materials for meetings, court hearings, and client gatherings.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7431,
                'name' => json_encode([
                    'pl' => 'Tworzenie raportów z postępów w sprawach na potrzeby klientów oraz kierownictwa kancelarii.',
                    'en' => 'Creating progress reports for clients and firm management on cases.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7432,
                'name' => json_encode([
                    'pl' => 'Wprowadzanie danych dotyczących spraw, klientów i dokumentacji do systemów kancelarii i bieżące aktualizowanie tych informacji.',
                    'en' => 'Entering case, client, and documentation data into the firm’s systems and regularly updating this information.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7433,
                'name' => json_encode([
                    'pl' => 'Wykorzystywanie oprogramowania specjalistycznego (np. systemów do zarządzania dokumentacją prawną) oraz zapewnienie ich aktualności i prawidłowego działania.',
                    'en' => 'Using specialized software (e.g., legal document management systems) and ensuring they are up-to-date and functioning properly.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7434,
                'name' => json_encode([
                    'pl' => 'Ścisła współpraca z działem IT w celu zapewnienia bezpieczeństwa danych i ich ochrony przed nieuprawnionym dostępem.',
                    'en' => 'Close collaboration with the IT department to ensure data security and protection against unauthorized access.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7435,
                'name' => json_encode([
                    'pl' => 'Obsługa bieżących potrzeb prawników, w tym drukowanie dokumentów, przygotowywanie materiałów do spotkań i wykonywanie drobnych zadań organizacyjnych.',
                    'en' => 'Handling the daily needs of lawyers, including printing documents, preparing materials for meetings, and performing minor organizational tasks.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7436,
                'name' => json_encode([
                    'pl' => 'Pomoc w realizacji codziennych zadań biurowych, takich jak kopiowanie, skanowanie i dystrybucja dokumentów.',
                    'en' => 'Assisting in daily office tasks such as copying, scanning, and distributing documents.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7437,
                'name' => json_encode([
                    'pl' => 'Zgłaszanie zapotrzebowania na zasoby biurowe i dbanie o ich regularne uzupełnianie.',
                    'en' => 'Reporting needs for office supplies and ensuring their regular replenishment.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7438,
                'name' => json_encode([
                    'pl' => 'Sporządzanie i wysyłanie faktur do klientów zgodnie z ustaleniami z działem księgowości.',
                    'en' => 'Preparing and sending invoices to clients according to arrangements with the accounting department.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7439,
                'name' => json_encode([
                    'pl' => 'Monitorowanie płatności od klientów i przypominanie o zaległych opłatach, jeśli to konieczne.',
                    'en' => 'Monitoring client payments and issuing reminders about overdue fees if necessary.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7440,
                'name' => json_encode([
                    'pl' => 'Wsparcie w sporządzaniu raportów kosztowych oraz rozliczeń na potrzeby prawników i kierownictwa.',
                    'en' => 'Supporting the preparation of cost reports and settlements for lawyers and management.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7441,
                'name' => json_encode([
                    'pl' => 'Umawianie spotkań z klientami oraz stronami postępowań, a także przygotowanie odpowiednich sal i materiałów na spotkania.',
                    'en' => 'Scheduling meetings with clients and parties to proceedings and preparing the appropriate rooms and materials for meetings.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7442,
                'name' => json_encode([
                    'pl' => 'Koordynacja terminów spotkań z uwzględnieniem dostępności prawników oraz przygotowanie niezbędnej dokumentacji.',
                    'en' => 'Coordinating meeting schedules considering lawyer availability and preparing necessary documentation.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7443,
                'name' => json_encode([
                    'pl' => 'Przyjmowanie gości kancelarii oraz zapewnienie im wsparcia podczas wizyt w biurze.',
                    'en' => 'Welcoming firm visitors and providing them with support during their visit.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7444,
                'name' => json_encode([
                    'pl' => 'Organizowanie podróży służbowych prawników, w tym rezerwacja hoteli, biletów oraz planowanie transportu.',
                    'en' => 'Organizing business trips for lawyers, including hotel reservations, tickets, and planning transportation.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7445,
                'name' => json_encode([
                    'pl' => 'Przygotowywanie harmonogramów podróży oraz dostarczanie prawnikom informacji i dokumentów niezbędnych na wyjazdy.',
                    'en' => 'Preparing travel schedules and providing lawyers with essential information and documents for trips.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7446,
                'name' => json_encode([
                    'pl' => 'Zarządzanie wydatkami podróży oraz przygotowanie raportów z podróży służbowych.',
                    'en' => 'Managing travel expenses and preparing business trip reports.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7447,
                'name' => json_encode([
                    'pl' => 'Regularne uczestnictwo w szkoleniach z zakresu administracji biurowej, obsługi klienta oraz oprogramowania prawniczego.',
                    'en' => 'Regularly attending training in office administration, customer service, and legal software.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7448,
                'name' => json_encode([
                    'pl' => 'Aktualizowanie wiedzy na temat nowych przepisów oraz procedur biurowych, które mogą wpływać na pracę kancelarii.',
                    'en' => 'Keeping updated on new regulations and office procedures that may affect the firm’s operations.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7449,
                'name' => json_encode([
                    'pl' => 'Wymiana doświadczeń i najlepszych praktyk z innymi sekretarzami prawnymi oraz doskonalenie umiejętności organizacyjnych.',
                    'en' => 'Exchanging experiences and best practices with other legal secretaries and enhancing organizational skills.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7450,
                'name' => json_encode([
                    'pl' => 'Monitorowanie harmonogramów spraw sądowych oraz terminów składania dokumentów w sądach i urzędach.',
                    'en' => 'Monitoring court case schedules and document submission deadlines at courts and offices.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7451,
                'name' => json_encode([
                    'pl' => 'Zapewnienie, że niezbędne dokumenty są dostarczane na czas oraz odbierane zgodnie z harmonogramem procesowym.',
                    'en' => 'Ensuring that necessary documents are delivered on time and collected according to the procedural schedule.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7452,
                'name' => json_encode([
                    'pl' => 'Utrzymywanie kontaktu z sądami i urzędami, aby koordynować przesyłki dokumentów i uzyskiwać potwierdzenia dostarczenia.',
                    'en' => 'Maintaining contact with courts and offices to coordinate document shipments and obtain delivery confirmations.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7453,
                'name' => json_encode([
                    'pl' => 'Koordynowanie współpracy z firmami kurierskimi, usługodawcami IT oraz dostawcami materiałów biurowych.',
                    'en' => 'Coordinating with courier companies, IT service providers, and office supplies suppliers.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7454,
                'name' => json_encode([
                    'pl' => 'Składanie zamówień na potrzebne zasoby i usługi, kontrola jakości dostarczanych produktów oraz terminowości realizacji.',
                    'en' => 'Placing orders for necessary resources and services, and checking the quality and timeliness of deliveries.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7455,
                'name' => json_encode([
                    'pl' => 'Prowadzenie rejestru wydatków związanych z obsługą biura i organizacją dostaw.',
                    'en' => 'Maintaining a record of office operating expenses and supply organization costs.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7456,
                'name' => json_encode([
                    'pl' => 'Pomoc w opracowywaniu i dystrybucji materiałów promocyjnych kancelarii, takich jak ulotki, broszury oraz artykuły informacyjne.',
                    'en' => 'Assisting in the development and distribution of the firm’s promotional materials, such as leaflets, brochures, and informational articles.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7457,
                'name' => json_encode([
                    'pl' => 'Wsparcie w organizacji wydarzeń promocyjnych, takich jak konferencje, szkolenia, dni otwarte oraz inne wydarzenia branżowe.',
                    'en' => 'Supporting the organization of promotional events, such as conferences, training sessions, open days, and other industry events.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7458,
                'name' => json_encode([
                    'pl' => 'Aktualizacja treści strony internetowej kancelarii w zakresie zmian kontaktowych i aktualnych wydarzeń.',
                    'en' => 'Updating the law firm’s website content to reflect contact changes and current events.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7459,
                'name' => json_encode([
                    'pl' => 'Przestrzeganie standardów kancelarii w zakresie ochrony danych klientów i przestrzegania zasad poufności.',
                    'en' => 'Adhering to the firm’s standards for client data protection and confidentiality rules.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7460,
                'name' => json_encode([
                    'pl' => 'Przestrzeganie przepisów RODO oraz polityki ochrony danych w kancelarii, dbanie o bezpieczeństwo dokumentacji.',
                    'en' => 'Complying with GDPR regulations and the firm’s data protection policy, ensuring document security.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7461,
                'name' => json_encode([
                    'pl' => 'Szkolenie innych pracowników w zakresie zasad ochrony danych, jeśli jest to wymagane.',
                    'en' => 'Training other employees in data protection principles when required.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ]


        ];
        $AKREDYTOWANY_ASYSTENT_PARLAMENTARNY = [
            [
                'id' => 7462,
                'name' => json_encode([
                    'pl' => 'Analiza projektów ustaw, poprawek i innych dokumentów legislacyjnych oraz przygotowywanie streszczeń dla parlamentarzysty.',
                    'en' => 'Analyzing bills, amendments, and other legislative documents and preparing summaries for the parliamentarian.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7463,
                'name' => json_encode([
                    'pl' => 'Przygotowywanie opinii i analiz dotyczących zmian w prawie oraz skutków proponowanych regulacji.',
                    'en' => 'Preparing opinions and analyses on changes in law and the effects of proposed regulations.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7464,
                'name' => json_encode([
                    'pl' => 'Pomoc w opracowywaniu poprawek i stanowisk w sprawach legislacyjnych oraz współpraca z innymi asystentami przy opracowywaniu projektów.',
                    'en' => 'Assisting in drafting amendments and positions on legislative issues and collaborating with other assistants on project development.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7465,
                'name' => json_encode([
                    'pl' => 'Opracowywanie notatek i streszczeń na potrzeby spotkań, komisji oraz sesji parlamentarnych.',
                    'en' => 'Preparing notes and summaries for meetings, committees, and parliamentary sessions.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7466,
                'name' => json_encode([
                    'pl' => 'Tworzenie raportów z posiedzeń, debat i konferencji, w których uczestniczy poseł, oraz przekazywanie kluczowych informacji parlamentarzyście.',
                    'en' => 'Preparing reports from meetings, debates, and conferences attended by the parliamentarian and relaying key information.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7467,
                'name' => json_encode([
                    'pl' => 'Przygotowywanie materiałów prasowych i informacyjnych, które mogą być przydatne podczas wystąpień publicznych lub debat.',
                    'en' => 'Preparing press and informational materials useful for public appearances or debates.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7468,
                'name' => json_encode([
                    'pl' => 'Odbieranie, sortowanie i odpowiadanie na korespondencję przychodzącą, w tym listy od wyborców, organizacji oraz instytucji.',
                    'en' => 'Receiving, sorting, and responding to incoming correspondence, including letters from voters, organizations, and institutions.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7469,
                'name' => json_encode([
                    'pl' => 'Redagowanie oficjalnych odpowiedzi i przekazywanie informacji do posła w przypadku pilnych zapytań.',
                    'en' => 'Drafting official responses and relaying information to the parliamentarian in urgent cases.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7470,
                'name' => json_encode([
                    'pl' => 'Utrzymywanie bieżącego kontaktu z osobami, które kontaktują się z biurem poselskim, oraz zarządzanie korespondencją e-mailową.',
                    'en' => 'Maintaining contact with individuals who reach out to the parliamentary office and managing email correspondence.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7471,
                'name' => json_encode([
                    'pl' => 'Organizacja i zarządzanie kalendarzem spotkań posła, planowanie wizyt i koordynacja terminów.',
                    'en' => 'Organizing and managing the parliamentarian’s meeting calendar, planning visits, and coordinating appointments.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7472,
                'name' => json_encode([
                    'pl' => 'Umawianie spotkań z wyborcami, przedstawicielami organizacji pozarządowych, lobbystami, ekspertami i przedstawicielami mediów.',
                    'en' => 'Scheduling meetings with voters, NGO representatives, lobbyists, experts, and media representatives.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7473,
                'name' => json_encode([
                    'pl' => 'Zapewnienie dostępności sal konferencyjnych, materiałów i przygotowanie harmonogramów na potrzeby posła.',
                    'en' => 'Ensuring the availability of conference rooms, materials, and preparing schedules for the parliamentarian’s needs.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7474,
                'name' => json_encode([
                    'pl' => 'Redagowanie tekstów przemówień, wystąpień i oświadczeń posła na sesjach parlamentarnych, konferencjach oraz innych wydarzeniach publicznych.',
                    'en' => 'Drafting speeches, statements, and declarations for the parliamentarian at parliamentary sessions, conferences, and other public events.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7475,
                'name' => json_encode([
                    'pl' => 'Opracowywanie punktów głównych i argumentów merytorycznych w oparciu o stanowisko posła oraz analizę problemu.',
                    'en' => 'Developing key points and substantive arguments based on the parliamentarian’s position and issue analysis.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7476,
                'name' => json_encode([
                    'pl' => 'Konsultacja treści wystąpień z posłem oraz uwzględnienie bieżących wydarzeń i oczekiwań wyborców.',
                    'en' => 'Consulting speech content with the parliamentarian and considering current events and voter expectations.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7477,
                'name' => json_encode([
                    'pl' => 'Zarządzanie pracą biura poselskiego, w tym organizacja pracy pozostałych pracowników i stażystów.',
                    'en' => 'Managing the parliamentary office’s work, including organizing tasks for other staff members and interns.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7478,
                'name' => json_encode([
                    'pl' => 'Prowadzenie ewidencji dokumentów, archiwizacja materiałów oraz dbanie o porządek w biurze.',
                    'en' => 'Maintaining document records, archiving materials, and ensuring order in the office.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7479,
                'name' => json_encode([
                    'pl' => 'Koordynowanie działań logistycznych, takich jak zamawianie materiałów biurowych, sprzętu i dbanie o sprawność funkcjonowania biura.',
                    'en' => 'Coordinating logistical activities, such as ordering office supplies, equipment, and ensuring smooth office operations.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7480,
                'name' => json_encode([
                    'pl' => 'Śledzenie bieżących wydarzeń politycznych, społecznych i gospodarczych oraz dostarczanie informacji posłowi.',
                    'en' => 'Monitoring current political, social, and economic events and providing information to the parliamentarian.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7481,
                'name' => json_encode([
                    'pl' => 'Monitorowanie mediów oraz przygotowywanie codziennych raportów informacyjnych, które mogą mieć wpływ na działania posła.',
                    'en' => 'Monitoring media and preparing daily informational reports that may impact the parliamentarian’s actions.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7482,
                'name' => json_encode([
                    'pl' => 'Zapewnienie posłowi dostępu do kluczowych informacji i analiz dotyczących jego obszarów zainteresowania.',
                    'en' => 'Providing the parliamentarian with access to key information and analyses relevant to their areas of interest.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7483,
                'name' => json_encode([
                    'pl' => 'Koordynowanie działań z innymi asystentami posłów oraz przedstawicielami instytucji rządowych, organizacji pozarządowych i unijnych.',
                    'en' => 'Coordinating activities with other parliamentary assistants and representatives of government, NGOs, and EU institutions.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7484,
                'name' => json_encode([
                    'pl' => 'Współpraca z innymi biurami w celu uzgadniania wspólnych inicjatyw, opinii i działań legislacyjnych.',
                    'en' => 'Collaborating with other offices to align on joint initiatives, opinions, and legislative actions.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7485,
                'name' => json_encode([
                    'pl' => 'Utrzymywanie kontaktów z urzędnikami i instytucjami UE oraz organizowanie spotkań roboczych z przedstawicielami sektora publicznego.',
                    'en' => 'Maintaining contact with EU officials and institutions and organizing working meetings with public sector representatives.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7486,
                'name' => json_encode([
                    'pl' => 'Zarządzanie profilami posła w mediach społecznościowych, publikowanie postów oraz odpowiadanie na komentarze.',
                    'en' => 'Managing the parliamentarian’s social media profiles, posting updates, and responding to comments.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7487,
                'name' => json_encode([
                    'pl' => 'Przygotowywanie treści na stronę internetową posła, w tym aktualności, artykułów i komunikatów prasowych.',
                    'en' => 'Preparing content for the parliamentarian’s website, including news, articles, and press releases.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7488,
                'name' => json_encode([
                    'pl' => 'Współpraca z mediami, organizowanie wywiadów oraz dbanie o pozytywny wizerunek posła w mediach.',
                    'en' => 'Collaborating with media, organizing interviews, and maintaining the parliamentarian’s positive image in media.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7489,
                'name' => json_encode([
                    'pl' => 'Organizowanie podróży służbowych, rezerwacja biletów, hoteli oraz organizacja transportu.',
                    'en' => 'Organizing business trips, booking tickets, hotels, and arranging transportation.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7490,
                'name' => json_encode([
                    'pl' => 'Przygotowywanie harmonogramów wizyt oraz zapewnienie, że poseł ma wszystkie potrzebne dokumenty i informacje.',
                    'en' => 'Preparing visit schedules and ensuring the parliamentarian has all necessary documents and information.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7491,
                'name' => json_encode([
                    'pl' => 'Zapewnienie sprawnej organizacji spotkań w ramach podróży służbowych, zarówno w kraju, jak i za granicą.',
                    'en' => 'Ensuring efficient organization of meetings during business trips, both domestically and internationally.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7492,
                'name' => json_encode([
                    'pl' => 'Organizowanie i koordynowanie spotkań z wyborcami, zarówno w biurze, jak i podczas wyjazdów poselskich.',
                    'en' => 'Organizing and coordinating meetings with voters, both at the office and during parliamentary trips.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7493,
                'name' => json_encode([
                    'pl' => 'Udzielanie odpowiedzi na pytania i zapytania od wyborców oraz zbieranie informacji o ich potrzebach i problemach.',
                    'en' => 'Responding to questions and inquiries from voters and gathering information on their needs and issues.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7494,
                'name' => json_encode([
                    'pl' => 'Przygotowywanie sprawozdań z dyżurów poselskich oraz rekomendacji dla posła na temat działań mogących wesprzeć wyborców.',
                    'en' => 'Preparing reports from parliamentary duty sessions and making recommendations for actions to support voters.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7495,
                'name' => json_encode([
                    'pl' => 'Wsparcie posła w analizie projektów politycznych i programów w zakresie zgodnym z jego działalnością.',
                    'en' => 'Supporting the parliamentarian in analyzing political projects and programs relevant to their work.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7496,
                'name' => json_encode([
                    'pl' => 'Przygotowywanie propozycji inicjatyw ustawodawczych oraz strategii politycznych.',
                    'en' => 'Preparing proposals for legislative initiatives and political strategies.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7497,
                'name' => json_encode([
                    'pl' => 'Doradzanie w zakresie politycznych konsekwencji decyzji oraz współpraca przy tworzeniu strategii komunikacyjnej posła.',
                    'en' => 'Advising on the political implications of decisions and collaborating on the parliamentarian’s communication strategy.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7498,
                'name' => json_encode([
                    'pl' => 'Nadzór nad pracą innych asystentów i stażystów, przydzielanie im zadań oraz monitorowanie ich realizacji.',
                    'en' => 'Supervising the work of other assistants and interns, assigning tasks, and monitoring their progress.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7499,
                'name' => json_encode([
                    'pl' => 'Organizowanie wewnętrznych spotkań zespołu, omawianie bieżących działań i koordynacja pracy nad projektami.',
                    'en' => 'Organizing internal team meetings, discussing ongoing activities, and coordinating work on projects.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7500,
                'name' => json_encode([
                    'pl' => 'Zapewnienie wsparcia i szkoleń dla nowych pracowników oraz stażystów w biurze poselskim.',
                    'en' => 'Providing support and training for new employees and interns in the parliamentary office.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7501,
                'name' => json_encode([
                    'pl' => 'Planowanie i kontrola wydatków biura, dbanie o zgodność z budżetem oraz przepisy dotyczącymi finansowania biura.',
                    'en' => 'Planning and controlling office expenses, ensuring budget compliance, and adhering to office funding regulations.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7502,
                'name' => json_encode([
                    'pl' => 'Sporządzanie raportów finansowych oraz analiza kosztów i wydatków na potrzeby biura poselskiego.',
                    'en' => 'Preparing financial reports and analyzing costs and expenses for the parliamentary office.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7503,
                'name' => json_encode([
                    'pl' => 'Monitorowanie i optymalizacja budżetu w celu efektywnego zarządzania środkami przeznaczonymi na funkcjonowanie biura.',
                    'en' => 'Monitoring and optimizing the budget for effective management of funds allocated to office operations.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7504,
                'name' => json_encode([
                    'pl' => 'Pomoc posłowi w przygotowaniu się do posiedzeń komisji parlamentarnych, analiza dokumentów oraz przygotowanie materiałów.',
                    'en' => 'Assisting the parliamentarian in preparing for parliamentary committee meetings, analyzing documents, and preparing materials.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7505,
                'name' => json_encode([
                    'pl' => 'Przegląd i opracowanie notatek na temat omawianych tematów oraz dostarczanie posłowi niezbędnych danych.',
                    'en' => 'Reviewing and preparing notes on discussed topics and providing the parliamentarian with essential data.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7506,
                'name' => json_encode([
                    'pl' => 'Reprezentowanie posła na posiedzeniach komisji, jeśli jest to konieczne, oraz sporządzanie raportów z takich spotkań.',
                    'en' => 'Representing the parliamentarian at committee meetings when necessary and preparing reports on such meetings.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7507,
                'name' => json_encode([
                    'pl' => 'Regularne uczestnictwo w szkoleniach związanych z pracą parlamentarną, komunikacją, legislacją oraz analizą prawną.',
                    'en' => 'Regularly participating in training related to parliamentary work, communication, legislation, and legal analysis.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7508,
                'name' => json_encode([
                    'pl' => 'Aktualizowanie wiedzy na temat procedur parlamentarnych, polityk unijnych oraz przepisów prawa.',
                    'en' => 'Updating knowledge of parliamentary procedures, EU policies, and legal regulations.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7509,
                'name' => json_encode([
                    'pl' => 'Doskonalenie umiejętności interpersonalnych, negocjacyjnych i analitycznych, aby lepiej wspierać posła w realizacji jego zadań.',
                    'en' => 'Improving interpersonal, negotiation, and analytical skills to better support the parliamentarian in their duties.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ]


        ];
        $ASYSTENT_DYREKTORA = [
            [
                'id' => 7510,
                'name' => json_encode([
                    'pl' => 'Organizowanie i zarządzanie kalendarzem dyrektora, planowanie spotkań, wydarzeń i terminów.',
                    'en' => 'Organizing and managing the director’s calendar, scheduling meetings, events, and deadlines.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7511,
                'name' => json_encode([
                    'pl' => 'Przypominanie dyrektorowi o nadchodzących spotkaniach i ważnych terminach.',
                    'en' => 'Reminding the director of upcoming meetings and important deadlines.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7512,
                'name' => json_encode([
                    'pl' => 'Koordynowanie kalendarza z harmonogramem działań innych członków zespołu oraz interesariuszy.',
                    'en' => 'Coordinating the calendar with the schedules of other team members and stakeholders.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7513,
                'name' => json_encode([
                    'pl' => 'Przygotowywanie agendy spotkań oraz dbanie o jej terminowe dostarczenie uczestnikom.',
                    'en' => 'Preparing meeting agendas and ensuring timely delivery to participants.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7514,
                'name' => json_encode([
                    'pl' => 'Organizacja i przygotowanie sali konferencyjnej, zapewnienie niezbędnych materiałów, takich jak notatki, prezentacje, sprzęt.',
                    'en' => 'Organizing and preparing the conference room, ensuring necessary materials such as notes, presentations, and equipment.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7515,
                'name' => json_encode([
                    'pl' => 'Sporządzanie notatek ze spotkań oraz dystrybucja protokołów i ustaleń do odpowiednich osób.',
                    'en' => 'Taking meeting notes and distributing minutes and agreements to relevant parties.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7516,
                'name' => json_encode([
                    'pl' => 'Odbieranie i segregowanie korespondencji przychodzącej i wychodzącej, w tym poczty elektronicznej i tradycyjnej.',
                    'en' => 'Receiving and sorting incoming and outgoing correspondence, including email and traditional mail.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7517,
                'name' => json_encode([
                    'pl' => 'Redagowanie odpowiedzi na zapytania oraz przygotowywanie korespondencji służbowej w imieniu dyrektora.',
                    'en' => 'Drafting responses to inquiries and preparing business correspondence on behalf of the director.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7518,
                'name' => json_encode([
                    'pl' => 'Przekazywanie ważnych informacji do odpowiednich działów i osób.',
                    'en' => 'Relaying important information to relevant departments and individuals.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7519,
                'name' => json_encode([
                    'pl' => 'Opracowywanie prezentacji na potrzeby spotkań, konferencji i raportów.',
                    'en' => 'Preparing presentations for meetings, conferences, and reports.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7520,
                'name' => json_encode([
                    'pl' => 'Gromadzenie i analizowanie danych potrzebnych do przygotowania materiałów informacyjnych.',
                    'en' => 'Gathering and analyzing data needed to prepare informational materials.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7521,
                'name' => json_encode([
                    'pl' => 'Tworzenie profesjonalnych, czytelnych i spójnych materiałów, takich jak raporty, wykresy i infografiki.',
                    'en' => 'Creating professional, readable, and consistent materials such as reports, charts, and infographics.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7522,
                'name' => json_encode([
                    'pl' => 'Utrzymywanie kontaktów z interesariuszami wewnętrznymi i zewnętrznymi, w tym klientami, partnerami, dostawcami.',
                    'en' => 'Maintaining contact with internal and external stakeholders, including clients, partners, and suppliers.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7523,
                'name' => json_encode([
                    'pl' => 'Odpowiadanie na pytania i zapytania skierowane do dyrektora lub kierowanie ich do odpowiednich osób.',
                    'en' => 'Responding to questions and inquiries directed to the director or routing them to the appropriate individuals.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7524,
                'name' => json_encode([
                    'pl' => 'Dbanie o pozytywny wizerunek firmy i zapewnienie wysokiej jakości komunikacji.',
                    'en' => 'Maintaining a positive company image and ensuring high-quality communication.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7525,
                'name' => json_encode([
                    'pl' => 'Prowadzenie i archiwizacja dokumentacji biurowej, umów, raportów i innych dokumentów.',
                    'en' => 'Managing and archiving office documentation, contracts, reports, and other documents.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7526,
                'name' => json_encode([
                    'pl' => 'Tworzenie systemów organizacji dokumentacji oraz zapewnienie ich dostępności dla upoważnionych osób.',
                    'en' => 'Creating document organization systems and ensuring accessibility for authorized individuals.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7527,
                'name' => json_encode([
                    'pl' => 'Dbanie o zgodność dokumentacji z przepisami dotyczącymi ochrony danych oraz bezpieczeństwa informacji.',
                    'en' => 'Ensuring compliance of documentation with data protection and information security regulations.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7528,
                'name' => json_encode([
                    'pl' => 'Koordynacja działań związanych z projektami dyrektora, monitorowanie ich postępów oraz raportowanie statusu.',
                    'en' => 'Coordinating director-related project activities, monitoring progress, and reporting status.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7529,
                'name' => json_encode([
                    'pl' => 'Pomoc w identyfikacji priorytetów i organizacja działań w celu efektywnej realizacji zadań projektowych.',
                    'en' => 'Assisting in prioritization and organizing activities for effective project task completion.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7530,
                'name' => json_encode([
                    'pl' => 'Gromadzenie i analizowanie danych projektowych oraz przygotowywanie raportów postępów.',
                    'en' => 'Collecting and analyzing project data and preparing progress reports.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7531,
                'name' => json_encode([
                    'pl' => 'Planowanie i organizowanie podróży służbowych, w tym rezerwacja biletów, hoteli, transportu.',
                    'en' => 'Planning and organizing business trips, including booking tickets, hotels, and transportation.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7532,
                'name' => json_encode([
                    'pl' => 'Przygotowywanie harmonogramu wyjazdu oraz zapewnienie niezbędnych informacji i dokumentów.',
                    'en' => 'Preparing travel schedules and ensuring necessary information and documents are provided.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7533,
                'name' => json_encode([
                    'pl' => 'Obsługa rozliczeń kosztów podróży i monitorowanie wydatków.',
                    'en' => 'Managing travel expense settlements and monitoring expenditures.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7534,
                'name' => json_encode([
                    'pl' => 'Sporządzanie regularnych raportów na temat wyników, kosztów i innych kluczowych wskaźników.',
                    'en' => 'Preparing regular reports on performance, costs, and other key indicators.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7535,
                'name' => json_encode([
                    'pl' => 'Analiza i przetwarzanie danych finansowych, operacyjnych i statystycznych.',
                    'en' => 'Analyzing and processing financial, operational, and statistical data.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7536,
                'name' => json_encode([
                    'pl' => 'Tworzenie zestawień, które pomagają dyrektorowi w podejmowaniu strategicznych decyzji.',
                    'en' => 'Creating summaries that assist the director in making strategic decisions.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7537,
                'name' => json_encode([
                    'pl' => 'Monitorowanie zaopatrzenia biurowego oraz dbanie o regularne uzupełnianie zapasów.',
                    'en' => 'Monitoring office supplies and ensuring regular replenishment of stock.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7538,
                'name' => json_encode([
                    'pl' => 'Zamawianie materiałów biurowych, drukarek, papieru, materiałów promocyjnych i innych potrzebnych zasobów.',
                    'en' => 'Ordering office supplies, printers, paper, promotional materials, and other necessary resources.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7539,
                'name' => json_encode([
                    'pl' => 'Zapewnienie sprawnego funkcjonowania biura i współpraca z działem IT oraz logistyką.',
                    'en' => 'Ensuring smooth office operations and coordinating with the IT and logistics departments.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7540,
                'name' => json_encode([
                    'pl' => 'Pomoc w przygotowywaniu budżetów operacyjnych oraz monitorowanie wydatków biura.',
                    'en' => 'Assisting in preparing operational budgets and monitoring office expenses.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7541,
                'name' => json_encode([
                    'pl' => 'Rozliczanie faktur, kontrola wydatków służbowych, w tym wydatków podróży.',
                    'en' => 'Processing invoices, managing business expenses, including travel costs.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7542,
                'name' => json_encode([
                    'pl' => 'Sporządzanie miesięcznych i kwartalnych raportów z wydatków na potrzeby dyrektora i działu finansowego.',
                    'en' => 'Preparing monthly and quarterly expense reports for the director and finance department.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7543,
                'name' => json_encode([
                    'pl' => 'Koordynowanie działań zespołu, przydzielanie zadań oraz monitorowanie ich realizacji.',
                    'en' => 'Coordinating team activities, assigning tasks, and monitoring their completion.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7544,
                'name' => json_encode([
                    'pl' => 'Ułatwianie komunikacji wewnętrznej oraz wspieranie dyrektora w rozwiązywaniu bieżących problemów zespołowych.',
                    'en' => 'Facilitating internal communication and supporting the director in addressing ongoing team issues.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7545,
                'name' => json_encode([
                    'pl' => 'Organizowanie szkoleń, spotkań integracyjnych i dbanie o pozytywną atmosferę w zespole.',
                    'en' => 'Organizing training, team-building events, and fostering a positive atmosphere within the team.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7546,
                'name' => json_encode([
                    'pl' => 'Koordynacja i organizacja wydarzeń takich jak konferencje, seminaria, spotkania z klientami.',
                    'en' => 'Coordinating and organizing events such as conferences, seminars, and client meetings.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7547,
                'name' => json_encode([
                    'pl' => 'Zapewnienie logistyki, w tym rezerwacja sal, zamówienia cateringu, przygotowanie materiałów.',
                    'en' => 'Ensuring logistics, including room reservations, catering orders, and preparation of materials.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7548,
                'name' => json_encode([
                    'pl' => 'Pomoc przy organizacji firmowych wydarzeń integracyjnych i spotkań jubileuszowych.',
                    'en' => 'Assisting in organizing company team-building events and anniversary meetings.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7549,
                'name' => json_encode([
                    'pl' => 'Opracowywanie i wdrażanie procedur administracyjnych i operacyjnych w biurze.',
                    'en' => 'Developing and implementing administrative and operational procedures in the office.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7550,
                'name' => json_encode([
                    'pl' => 'Przestrzeganie polityk firmy oraz dostosowanie procedur do wymogów bezpieczeństwa i zgodności.',
                    'en' => 'Adhering to company policies and adjusting procedures to meet security and compliance requirements.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7551,
                'name' => json_encode([
                    'pl' => 'Wspieranie dyrektora w realizacji polityki biurowej i procedur korporacyjnych.',
                    'en' => 'Supporting the director in implementing office policy and corporate procedures.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7552,
                'name' => json_encode([
                    'pl' => 'Zapewnienie, że dokumenty i procedury biura są zgodne z obowiązującymi przepisami o ochronie danych osobowych (np. RODO).',
                    'en' => 'Ensuring that office documents and procedures comply with current data protection regulations (e.g., GDPR).'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7553,
                'name' => json_encode([
                    'pl' => 'Wdrażanie polityk ochrony danych i nadzorowanie przestrzegania wytycznych.',
                    'en' => 'Implementing data protection policies and overseeing adherence to guidelines.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7554,
                'name' => json_encode([
                    'pl' => 'Informowanie dyrektora o wszelkich zmianach prawnych mających wpływ na działalność biura.',
                    'en' => 'Informing the director of any legal changes affecting office operations.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7555,
                'name' => json_encode([
                    'pl' => 'Regularne uczestnictwo w szkoleniach i kursach, które pomagają w rozwijaniu kompetencji związanych z zarządzaniem biurem i wspieraniem dyrektora.',
                    'en' => 'Regularly attending training and courses to enhance skills related to office management and supporting the director.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7556,
                'name' => json_encode([
                    'pl' => 'Aktualizowanie wiedzy na temat nowych narzędzi biurowych, oprogramowania i technik zarządzania czasem.',
                    'en' => 'Updating knowledge of new office tools, software, and time management techniques.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7557,
                'name' => json_encode([
                    'pl' => 'Wymiana doświadczeń z innymi asystentami w celu podnoszenia standardów pracy.',
                    'en' => 'Exchanging experiences with other assistants to improve work standards.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ]


        ];
        $ASYSTENT_PARLAMENTARNY = [
            [
                'id' => 7558,
                'name' => json_encode([
                    'pl' => 'Analiza projektów ustaw, poprawek i dokumentów legislacyjnych oraz przygotowywanie ich streszczeń.',
                    'en' => 'Analyzing bills, amendments, and legislative documents and preparing summaries.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7559,
                'name' => json_encode([
                    'pl' => 'Pomoc w opracowywaniu poprawek i stanowisk parlamentarzysty dotyczących ustaw oraz innych działań legislacyjnych.',
                    'en' => 'Assisting in drafting amendments and positions on legislation and other parliamentary actions.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7560,
                'name' => json_encode([
                    'pl' => 'Przygotowywanie raportów i opinii dotyczących bieżących spraw legislacyjnych oraz ich potencjalnych skutków.',
                    'en' => 'Preparing reports and opinions on current legislative issues and their potential impacts.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7561,
                'name' => json_encode([
                    'pl' => 'Opracowywanie materiałów przygotowujących parlamentarzystę do posiedzeń, komisji oraz spotkań z interesariuszami.',
                    'en' => 'Preparing materials for the parliamentarian’s meetings, committees, and stakeholder engagements.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7562,
                'name' => json_encode([
                    'pl' => 'Sporządzanie raportów z posiedzeń, debat i wydarzeń oraz przekazywanie kluczowych informacji parlamentarzyście.',
                    'en' => 'Creating reports from meetings, debates, and events and relaying key information to the parliamentarian.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7563,
                'name' => json_encode([
                    'pl' => 'Przygotowywanie materiałów prasowych i informacyjnych na potrzeby biura poselskiego.',
                    'en' => 'Preparing press and informational materials for the parliamentary office.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7564,
                'name' => json_encode([
                    'pl' => 'Przyjmowanie, sortowanie i odpowiadanie na korespondencję, w tym listy od wyborców, organizacji i instytucji.',
                    'en' => 'Receiving, sorting, and responding to correspondence, including letters from voters, organizations, and institutions.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7565,
                'name' => json_encode([
                    'pl' => 'Redagowanie odpowiedzi i raportowanie najważniejszych zapytań parlamentarzyście.',
                    'en' => 'Drafting responses and reporting key inquiries to the parliamentarian.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7566,
                'name' => json_encode([
                    'pl' => 'Utrzymywanie kontaktu z osobami i instytucjami kontaktującymi się z biurem poselskim.',
                    'en' => 'Maintaining contact with individuals and institutions reaching out to the parliamentary office.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7567,
                'name' => json_encode([
                    'pl' => 'Organizacja i zarządzanie kalendarzem posła lub europosła, w tym planowanie spotkań, wizyt oraz harmonogramów posiedzeń.',
                    'en' => 'Organizing and managing the schedule of the MP or MEP, including planning meetings, visits, and session schedules.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7568,
                'name' => json_encode([
                    'pl' => 'Umawianie spotkań z wyborcami, przedstawicielami organizacji, lobbystami, ekspertami i mediami.',
                    'en' => 'Scheduling meetings with voters, organization representatives, lobbyists, experts, and media.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7569,
                'name' => json_encode([
                    'pl' => 'Zapewnienie dostępności materiałów i sal konferencyjnych na spotkania parlamentarzysty.',
                    'en' => 'Ensuring the availability of materials and conference rooms for the parliamentarian’s meetings.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7570,
                'name' => json_encode([
                    'pl' => 'Pisanie przemówień i oświadczeń na potrzeby sesji parlamentarnych, konferencji i innych wydarzeń.',
                    'en' => 'Drafting speeches and statements for parliamentary sessions, conferences, and other events.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7571,
                'name' => json_encode([
                    'pl' => 'Przygotowywanie głównych punktów i argumentów w oparciu o stanowisko parlamentarzysty oraz analizę tematu.',
                    'en' => 'Preparing main points and arguments based on the parliamentarian’s stance and topic analysis.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7572,
                'name' => json_encode([
                    'pl' => 'Konsultacja treści wystąpień z posłem oraz dostosowanie ich do bieżących potrzeb i sytuacji.',
                    'en' => 'Consulting speech content with the MP and tailoring it to current needs and circumstances.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7573,
                'name' => json_encode([
                    'pl' => 'Zarządzanie dokumentacją biura, prowadzenie rejestru korespondencji, umów i innych dokumentów.',
                    'en' => 'Managing office documentation, maintaining records of correspondence, contracts, and other documents.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7574,
                'name' => json_encode([
                    'pl' => 'Organizowanie i archiwizacja dokumentacji poszczególnych spraw oraz zapewnienie jej dostępności.',
                    'en' => 'Organizing and archiving case documentation and ensuring its accessibility.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7575,
                'name' => json_encode([
                    'pl' => 'Przestrzeganie zasad ochrony danych osobowych i bezpieczeństwa informacji w zarządzaniu dokumentacją.',
                    'en' => 'Adhering to personal data protection and information security principles in documentation management.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7576,
                'name' => json_encode([
                    'pl' => 'Śledzenie bieżących wydarzeń politycznych, społecznych i gospodarczych istotnych dla parlamentarzysty.',
                    'en' => 'Monitoring current political, social, and economic events relevant to the parliamentarian.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7577,
                'name' => json_encode([
                    'pl' => 'Monitorowanie mediów i przygotowywanie raportów z informacjami mogącymi mieć wpływ na działania parlamentarzysty.',
                    'en' => 'Monitoring media and preparing reports with information that may impact the parliamentarian’s actions.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7578,
                'name' => json_encode([
                    'pl' => 'Zapewnienie parlamentarzyście dostępu do aktualnych analiz dotyczących jego obszarów zainteresowania.',
                    'en' => 'Providing the parliamentarian with access to up-to-date analyses in their areas of interest.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7579,
                'name' => json_encode([
                    'pl' => 'Koordynacja działań z innymi asystentami i biurami poselskimi, a także z instytucjami rządowymi, organizacjami pozarządowymi i europejskimi.',
                    'en' => 'Coordinating actions with other assistants, parliamentary offices, and government, NGO, and EU institutions.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7580,
                'name' => json_encode([
                    'pl' => 'Współpraca z przedstawicielami instytucji UE w celu uzgadniania wspólnych stanowisk i działań.',
                    'en' => 'Collaborating with EU institution representatives to agree on joint positions and actions.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7581,
                'name' => json_encode([
                    'pl' => 'Organizowanie spotkań roboczych z przedstawicielami sektora publicznego i organizacji pozarządowych.',
                    'en' => 'Organizing working meetings with representatives from the public sector and NGOs.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7582,
                'name' => json_encode([
                    'pl' => 'Obsługa profili parlamentarzysty w mediach społecznościowych, publikowanie postów oraz odpowiadanie na komentarze.',
                    'en' => 'Managing the parliamentarian’s social media profiles, posting updates, and responding to comments.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7583,
                'name' => json_encode([
                    'pl' => 'Przygotowywanie treści na stronę internetową parlamentarzysty oraz komunikatów prasowych.',
                    'en' => 'Preparing content for the parliamentarian’s website and press releases.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7584,
                'name' => json_encode([
                    'pl' => 'Organizowanie wywiadów i współpraca z mediami, dbanie o spójny wizerunek parlamentarzysty.',
                    'en' => 'Organizing interviews and collaborating with media, ensuring a consistent image of the parliamentarian.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7585,
                'name' => json_encode([
                    'pl' => 'Planowanie i organizacja podróży służbowych, w tym rezerwacja biletów, hoteli oraz logistyka transportu.',
                    'en' => 'Planning and organizing business trips, including ticket booking, hotel reservations, and transport logistics.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7586,
                'name' => json_encode([
                    'pl' => 'Przygotowywanie harmonogramów podróży oraz zapewnienie niezbędnych dokumentów i informacji.',
                    'en' => 'Preparing travel schedules and ensuring necessary documents and information are available.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7587,
                'name' => json_encode([
                    'pl' => 'Organizacja spotkań w ramach podróży służbowych i zapewnienie sprawnego przebiegu wizyt.',
                    'en' => 'Organizing meetings during business trips and ensuring smooth visits.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7588,
                'name' => json_encode([
                    'pl' => 'Organizowanie spotkań z wyborcami w biurze poselskim oraz podczas wyjazdów poselskich.',
                    'en' => 'Organizing meetings with voters in the parliamentary office and during constituency visits.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7589,
                'name' => json_encode([
                    'pl' => 'Udzielanie odpowiedzi na pytania i zapytania wyborców oraz zbieranie informacji o ich potrzebach i problemach.',
                    'en' => 'Responding to voter questions and inquiries and gathering information on their needs and concerns.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7590,
                'name' => json_encode([
                    'pl' => 'Sporządzanie raportów z dyżurów poselskich oraz rekomendacji dla parlamentarzysty na temat dalszych działań.',
                    'en' => 'Preparing reports from parliamentary duty sessions and recommending further actions for the parliamentarian.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7591,
                'name' => json_encode([
                    'pl' => 'Wspieranie parlamentarzysty w analizie projektów politycznych i programów zgodnie z jego obszarem działania.',
                    'en' => 'Supporting the parliamentarian in analyzing political projects and programs relevant to their field of action.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7592,
                'name' => json_encode([
                    'pl' => 'Przygotowywanie propozycji inicjatyw ustawodawczych oraz doradztwo w zakresie politycznych konsekwencji decyzji.',
                    'en' => 'Preparing proposals for legislative initiatives and advising on the political implications of decisions.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7593,
                'name' => json_encode([
                    'pl' => 'Tworzenie i wdrażanie strategii politycznej oraz komunikacyjnej parlamentarzysty.',
                    'en' => 'Creating and implementing the parliamentarian’s political and communication strategy.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7594,
                'name' => json_encode([
                    'pl' => 'Nadzór nad pracą innych asystentów i stażystów, przydzielanie zadań oraz monitorowanie ich realizacji.',
                    'en' => 'Supervising other assistants and interns, assigning tasks, and monitoring their completion.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7595,
                'name' => json_encode([
                    'pl' => 'Organizowanie spotkań wewnętrznych zespołu oraz omawianie bieżących działań i projektów.',
                    'en' => 'Organizing internal team meetings and discussing ongoing activities and projects.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7596,
                'name' => json_encode([
                    'pl' => 'Zapewnienie wsparcia i szkoleń dla nowych członków zespołu oraz dbałość o atmosferę współpracy.',
                    'en' => 'Providing support and training for new team members and fostering a collaborative atmosphere.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7597,
                'name' => json_encode([
                    'pl' => 'Planowanie i monitorowanie wydatków biura oraz dbanie o zgodność z budżetem.',
                    'en' => 'Planning and monitoring office expenses and ensuring budget compliance.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7598,
                'name' => json_encode([
                    'pl' => 'Sporządzanie raportów finansowych oraz kontrola wydatków i kosztów operacyjnych biura.',
                    'en' => 'Preparing financial reports and monitoring office expenses and operational costs.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7599,
                'name' => json_encode([
                    'pl' => 'Optymalizacja budżetu i przygotowywanie zestawień wydatków na potrzeby parlamentarzysty i organów nadzorczych.',
                    'en' => 'Optimizing the budget and preparing expense summaries for the parliamentarian and oversight bodies.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7600,
                'name' => json_encode([
                    'pl' => 'Pomoc parlamentarzyście w przygotowaniu się do posiedzeń komisji parlamentarnych, analiza dokumentów i przygotowanie materiałów.',
                    'en' => 'Assisting the parliamentarian in preparing for committee meetings, analyzing documents, and preparing materials.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7601,
                'name' => json_encode([
                    'pl' => 'Sporządzanie notatek i dostarczanie kluczowych informacji o omawianych tematach.',
                    'en' => 'Taking notes and providing key information on discussed topics.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7602,
                'name' => json_encode([
                    'pl' => 'Reprezentowanie parlamentarzysty na spotkaniach, jeśli to konieczne, oraz sporządzanie raportów z takich spotkań.',
                    'en' => 'Representing the parliamentarian at meetings when necessary and preparing reports on such meetings.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7603,
                'name' => json_encode([
                    'pl' => 'Udział w szkoleniach związanych z pracą parlamentarną, komunikacją, analizą prawną i legislacyjną.',
                    'en' => 'Participating in training related to parliamentary work, communication, legal analysis, and legislation.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7604,
                'name' => json_encode([
                    'pl' => 'Aktualizowanie wiedzy na temat procedur parlamentarnych, polityk europejskich oraz nowoczesnych narzędzi biurowych.',
                    'en' => 'Updating knowledge of parliamentary procedures, EU policies, and modern office tools.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7605,
                'name' => json_encode([
                    'pl' => 'Wymiana doświadczeń z innymi asystentami parlamentarnymi oraz doskonalenie kompetencji.',
                    'en' => 'Exchanging experiences with other parliamentary assistants and enhancing competencies.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ]
        ];
        $ASYSTENT_ZARZĄDU = [
            [
                'id' => 7606,
                'name' => json_encode([
                    'pl' => 'Organizacja i zarządzanie kalendarzem spotkań członków zarządu, w tym planowanie wydarzeń, spotkań i terminów.',
                    'en' => 'Organizing and managing the board members’ meeting schedules, including planning events, meetings, and deadlines.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7607,
                'name' => json_encode([
                    'pl' => 'Przypominanie o nadchodzących spotkaniach i kluczowych terminach oraz koordynacja harmonogramu działań zarządu.',
                    'en' => 'Reminding about upcoming meetings and key deadlines and coordinating the board’s activity schedule.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7608,
                'name' => json_encode([
                    'pl' => 'Rezerwacja sal konferencyjnych i zapewnienie dostępności niezbędnych zasobów na spotkania.',
                    'en' => 'Booking conference rooms and ensuring availability of necessary resources for meetings.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7609,
                'name' => json_encode([
                    'pl' => 'Przygotowywanie agendy oraz materiałów informacyjnych na spotkania zarządu i rady nadzorczej.',
                    'en' => 'Preparing the agenda and informational materials for board and supervisory board meetings.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7610,
                'name' => json_encode([
                    'pl' => 'Organizacja spotkań, w tym dbanie o logistykę, zamówienie cateringu, przygotowanie sprzętu i materiałów.',
                    'en' => 'Organizing meetings, including logistics, catering, and preparing equipment and materials.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7611,
                'name' => json_encode([
                    'pl' => 'Sporządzanie notatek i protokołów ze spotkań, przekazywanie ich członkom zarządu oraz monitorowanie realizacji ustaleń.',
                    'en' => 'Taking notes and minutes from meetings, distributing them to board members, and monitoring follow-ups.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7612,
                'name' => json_encode([
                    'pl' => 'Przyjmowanie, segregowanie i zarządzanie korespondencją przychodzącą i wychodzącą dla zarządu.',
                    'en' => 'Receiving, sorting, and managing incoming and outgoing correspondence for the board.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7613,
                'name' => json_encode([
                    'pl' => 'Redagowanie odpowiedzi i przygotowywanie korespondencji służbowej w imieniu członków zarządu.',
                    'en' => 'Drafting responses and preparing business correspondence on behalf of board members.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7614,
                'name' => json_encode([
                    'pl' => 'Zapewnienie, że wszystkie dokumenty są odpowiednio przechowywane i archiwizowane.',
                    'en' => 'Ensuring that all documents are properly stored and archived.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7615,
                'name' => json_encode([
                    'pl' => 'Sporządzanie raportów dotyczących wyników operacyjnych, finansowych oraz wskaźników KPI na potrzeby zarządu.',
                    'en' => 'Preparing reports on operational and financial performance and KPIs for the board.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7616,
                'name' => json_encode([
                    'pl' => 'Tworzenie zestawień i analiz w oparciu o dane dostarczone przez różne działy firmy.',
                    'en' => 'Creating summaries and analyses based on data provided by various departments.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7617,
                'name' => json_encode([
                    'pl' => 'Przygotowywanie prezentacji oraz materiałów informacyjnych dla zarządu i rady nadzorczej.',
                    'en' => 'Preparing presentations and informational materials for the board and supervisory board.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7618,
                'name' => json_encode([
                    'pl' => 'Utrzymywanie kontaktu z kluczowymi interesariuszami firmy, w tym klientami, partnerami biznesowymi, dostawcami i pracownikami.',
                    'en' => 'Maintaining contact with key company stakeholders, including clients, business partners, suppliers, and employees.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7619,
                'name' => json_encode([
                    'pl' => 'Organizacja spotkań i negocjacji z interesariuszami oraz odpowiadanie na zapytania skierowane do zarządu.',
                    'en' => 'Organizing meetings and negotiations with stakeholders and responding to inquiries directed at the board.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7620,
                'name' => json_encode([
                    'pl' => 'Wspieranie działań PR-owych zarządu oraz dbanie o pozytywny wizerunek firmy.',
                    'en' => 'Supporting the board’s PR activities and ensuring a positive company image.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7621,
                'name' => json_encode([
                    'pl' => 'Planowanie i organizacja podróży służbowych, w tym rezerwacja biletów, hoteli, wynajem samochodów oraz innych środków transportu.',
                    'en' => 'Planning and organizing business trips, including booking tickets, hotels, car rentals, and other transportation.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7622,
                'name' => json_encode([
                    'pl' => 'Przygotowywanie harmonogramu wyjazdu oraz dostarczanie niezbędnych dokumentów, takich jak bilety, rezerwacje, informacje o spotkaniach.',
                    'en' => 'Preparing travel schedules and providing necessary documents such as tickets, reservations, and meeting details.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7623,
                'name' => json_encode([
                    'pl' => 'Rozliczanie kosztów podróży służbowych oraz monitorowanie wydatków.',
                    'en' => 'Processing travel expenses and monitoring expenditures.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7624,
                'name' => json_encode([
                    'pl' => 'Opracowywanie profesjonalnych prezentacji, wykresów, infografik i innych materiałów wizualnych na potrzeby zarządu.',
                    'en' => 'Developing professional presentations, charts, infographics, and other visual materials for the board.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7625,
                'name' => json_encode([
                    'pl' => 'Gromadzenie i analiza danych z różnych źródeł w celu przygotowania dokładnych i aktualnych materiałów.',
                    'en' => 'Gathering and analyzing data from various sources to prepare accurate and up-to-date materials.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7626,
                'name' => json_encode([
                    'pl' => 'Zapewnienie spójności graficznej i merytorycznej materiałów.',
                    'en' => 'Ensuring graphical and content consistency of materials.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7627,
                'name' => json_encode([
                    'pl' => 'Pomoc w realizacji projektów nadzorowanych przez zarząd, monitorowanie ich postępów oraz raportowanie statusu.',
                    'en' => 'Assisting in board-supervised projects, monitoring their progress, and reporting status.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7628,
                'name' => json_encode([
                    'pl' => 'Wspieranie działań zarządu w zakresie priorytetyzacji projektów i zadań w firmie.',
                    'en' => 'Supporting the board in prioritizing projects and tasks within the company.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7629,
                'name' => json_encode([
                    'pl' => 'Gromadzenie i analizowanie danych projektowych oraz sporządzanie raportów dotyczących realizacji projektów.',
                    'en' => 'Collecting and analyzing project data and preparing reports on project progress.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7630,
                'name' => json_encode([
                    'pl' => 'Zarządzanie dokumentacją, archiwizacja umów, aktów prawnych oraz innych ważnych dokumentów.',
                    'en' => 'Managing documentation, archiving contracts, legal acts, and other important documents.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7631,
                'name' => json_encode([
                    'pl' => 'Prowadzenie ewidencji dokumentów i dbanie o zgodność przechowywanych materiałów z wymaganiami prawnymi i wewnętrznymi.',
                    'en' => 'Maintaining records and ensuring stored materials comply with legal and internal requirements.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7632,
                'name' => json_encode([
                    'pl' => 'Monitorowanie zaopatrzenia biura zarządu oraz składanie zamówień na materiały biurowe i niezbędne zasoby.',
                    'en' => 'Monitoring office supplies for the board’s office and placing orders for necessary resources.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7633,
                'name' => json_encode([
                    'pl' => 'Monitorowanie budżetu operacyjnego biura zarządu i dbanie o zgodność z założeniami budżetowymi.',
                    'en' => 'Monitoring the operational budget of the board’s office and ensuring budget compliance.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7634,
                'name' => json_encode([
                    'pl' => 'Wspieranie zarządu w sporządzaniu raportów kosztowych oraz analizie wydatków.',
                    'en' => 'Supporting the board in preparing cost reports and analyzing expenses.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7635,
                'name' => json_encode([
                    'pl' => 'Rozliczanie faktur, kontrola wydatków służbowych oraz przygotowanie miesięcznych zestawień finansowych.',
                    'en' => 'Processing invoices, managing business expenses, and preparing monthly financial statements.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7636,
                'name' => json_encode([
                    'pl' => 'Opracowywanie i wdrażanie standardów oraz procedur administracyjnych dla biura zarządu.',
                    'en' => 'Developing and implementing administrative standards and procedures for the board’s office.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7637,
                'name' => json_encode([
                    'pl' => 'Przestrzeganie polityk firmy oraz dbanie o zgodność działań z przepisami wewnętrznymi.',
                    'en' => 'Adhering to company policies and ensuring compliance with internal regulations.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7638,
                'name' => json_encode([
                    'pl' => 'Aktualizacja procedur w zależności od zmian organizacyjnych i wymogów prawnych.',
                    'en' => 'Updating procedures in response to organizational and legal changes.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7639,
                'name' => json_encode([
                    'pl' => 'Zapewnienie zgodności z przepisami dotyczącymi ochrony danych osobowych i regulacjami prawnymi.',
                    'en' => 'Ensuring compliance with personal data protection regulations and legal requirements.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7640,
                'name' => json_encode([
                    'pl' => 'Wdrażanie polityk ochrony danych oraz monitorowanie ich przestrzegania.',
                    'en' => 'Implementing data protection policies and monitoring compliance.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7641,
                'name' => json_encode([
                    'pl' => 'Informowanie zarządu o zmianach prawnych mogących mieć wpływ na działalność firmy.',
                    'en' => 'Informing the board of legal changes that may impact company operations.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7642,
                'name' => json_encode([
                    'pl' => 'Wspieranie komunikacji między działami i zarządem w celu zapewnienia spójności działań.',
                    'en' => 'Supporting communication between departments and the board to ensure consistent actions.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7643,
                'name' => json_encode([
                    'pl' => 'Przydzielanie zadań oraz monitorowanie ich realizacji, a także pomoc w rozwiązywaniu problemów zespołowych.',
                    'en' => 'Assigning tasks, monitoring their completion, and assisting in resolving team issues.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7644,
                'name' => json_encode([
                    'pl' => 'Koordynacja współpracy zarządu z kluczowymi działami, takimi jak finanse, HR, marketing.',
                    'en' => 'Coordinating the board’s collaboration with key departments such as finance, HR, and marketing.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7645,
                'name' => json_encode([
                    'pl' => 'Organizacja i koordynacja wydarzeń, takich jak konferencje, seminaria, spotkania z klientami i partnerami.',
                    'en' => 'Organizing and coordinating events such as conferences, seminars, and meetings with clients and partners.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7646,
                'name' => json_encode([
                    'pl' => 'Zapewnienie logistyki, cateringu, przygotowanie materiałów oraz dbanie o sprawny przebieg wydarzeń.',
                    'en' => 'Ensuring logistics, catering, and preparation of materials, and overseeing smooth event execution.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7647,
                'name' => json_encode([
                    'pl' => 'Współpraca przy organizacji eventów integracyjnych i spotkań firmowych.',
                    'en' => 'Collaborating in organizing team-building events and company meetings.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7648,
                'name' => json_encode([
                    'pl' => 'Ochrona poufnych informacji oraz dokumentacji zarządu, w tym umów, decyzji strategicznych i danych osobowych.',
                    'en' => 'Protecting confidential information and board documentation, including contracts, strategic decisions, and personal data.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7649,
                'name' => json_encode([
                    'pl' => 'Przestrzeganie wewnętrznych procedur bezpieczeństwa informacji oraz monitorowanie ich przestrzegania.',
                    'en' => 'Adhering to internal information security procedures and monitoring compliance.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7650,
                'name' => json_encode([
                    'pl' => 'Zachowanie najwyższych standardów etycznych i ochrony danych w pracy z dokumentami i informacjami.',
                    'en' => 'Maintaining the highest ethical standards and data protection in handling documents and information.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7651,
                'name' => json_encode([
                    'pl' => 'Uczestnictwo w szkoleniach, konferencjach i kursach rozwijających umiejętności związane z zarządzaniem biurem i obsługą zarządu.',
                    'en' => 'Participating in training, conferences, and courses to enhance office management and board support skills.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7652,
                'name' => json_encode([
                    'pl' => 'Aktualizowanie wiedzy na temat nowych narzędzi administracyjnych, oprogramowania i technik zarządzania czasem.',
                    'en' => 'Updating knowledge of new administrative tools, software, and time management techniques.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7653,
                'name' => json_encode([
                    'pl' => 'Wymiana doświadczeń z innymi asystentami zarządu w celu podnoszenia standardów pracy.',
                    'en' => 'Exchanging experiences with other board assistants to improve work standards.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ]
        ];
        $SEKRETARZ_KONSULARNY = [
            [
                'id' => 7654,
                'name' => json_encode([
                    'pl' => 'Przyjmowanie wniosków wizowych i paszportowych oraz weryfikacja kompletności dokumentacji.',
                    'en' => 'Receiving visa and passport applications and verifying document completeness.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7655,
                'name' => json_encode([
                    'pl' => 'Wydawanie wiz i paszportów zgodnie z procedurami oraz przekazywanie ich osobom zainteresowanym.',
                    'en' => 'Issuing visas and passports according to procedures and handing them to relevant individuals.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7656,
                'name' => json_encode([
                    'pl' => 'Informowanie obywateli o wymogach wizowych oraz udzielanie wsparcia w wypełnianiu wniosków.',
                    'en' => 'Informing citizens about visa requirements and providing support in completing applications.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7657,
                'name' => json_encode([
                    'pl' => 'Udzielanie pomocy obywatelom kraju w sytuacjach nadzwyczajnych, takich jak kradzież dokumentów, wypadki, hospitalizacje czy aresztowania.',
                    'en' => 'Assisting citizens in emergencies, such as document theft, accidents, hospitalizations, or arrests.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7658,
                'name' => json_encode([
                    'pl' => 'Wsparcie w organizacji powrotu do kraju w sytuacjach awaryjnych oraz pomoc w zapewnieniu podstawowych potrzeb.',
                    'en' => 'Supporting repatriation efforts during emergencies and assisting with essential needs.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7659,
                'name' => json_encode([
                    'pl' => 'Współpraca z lokalnymi władzami i służbami ratunkowymi w przypadku zagrożenia życia lub zdrowia obywateli.',
                    'en' => 'Cooperating with local authorities and emergency services in cases of threats to citizens’ life or health.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7660,
                'name' => json_encode([
                    'pl' => 'Rejestrowanie obywateli przebywających na terenie obcego państwa oraz prowadzenie rejestru ich danych.',
                    'en' => 'Registering citizens residing in a foreign country and maintaining their data records.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7661,
                'name' => json_encode([
                    'pl' => 'Informowanie obywateli o możliwościach rejestracji oraz jej zaletach, takich jak ułatwienie pomocy konsularnej.',
                    'en' => 'Informing citizens about registration opportunities and benefits, such as ease of consular assistance.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7662,
                'name' => json_encode([
                    'pl' => 'Aktualizacja bazy danych obywateli oraz dbanie o zgodność rejestru z przepisami ochrony danych osobowych.',
                    'en' => 'Updating the citizens’ database and ensuring data registry compliance with data protection laws.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7663,
                'name' => json_encode([
                    'pl' => 'Przygotowywanie zaświadczeń konsularnych, np. potwierdzeń zameldowania, stanu cywilnego, poświadczeń notarialnych.',
                    'en' => 'Preparing consular certificates, e.g., proof of residence, marital status, notarial certifications.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7664,
                'name' => json_encode([
                    'pl' => 'Legalizacja dokumentów urzędowych dla obywateli i firm, aby mogły być uznane za ważne w kraju.',
                    'en' => 'Legalizing official documents for citizens and companies to be recognized as valid in the home country.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7665,
                'name' => json_encode([
                    'pl' => 'Współpraca z miejscowymi instytucjami w zakresie potwierdzania autentyczności dokumentów.',
                    'en' => 'Cooperating with local institutions to verify the authenticity of documents.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7666,
                'name' => json_encode([
                    'pl' => 'Informowanie obywateli o ich prawach i obowiązkach wynikających z przepisów lokalnego prawa oraz przepisów kraju ojczystego.',
                    'en' => 'Informing citizens about their rights and obligations under local laws and the home country’s regulations.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7667,
                'name' => json_encode([
                    'pl' => 'Współpraca z lokalnymi prawnikami i organizacjami pozarządowymi w zakresie pomocy prawnej dla obywateli.',
                    'en' => 'Collaborating with local lawyers and NGOs to provide legal assistance to citizens.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7668,
                'name' => json_encode([
                    'pl' => 'Pomoc w załatwianiu formalności prawnych, np. dotyczących aktów stanu cywilnego, dokumentów tożsamości i ubezpieczeń.',
                    'en' => 'Assisting in legal formalities, e.g., regarding civil status records, identification documents, and insurance.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7669,
                'name' => json_encode([
                    'pl' => 'Wydawanie dokumentów tymczasowych w sytuacji zagubienia lub kradzieży paszportu, np. dokumentu umożliwiającego powrót do kraju.',
                    'en' => 'Issuing temporary documents, such as emergency travel documents, in cases of lost or stolen passports.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7670,
                'name' => json_encode([
                    'pl' => 'Współpraca z lokalnymi służbami w zakresie zgłoszenia kradzieży oraz organizacja pomocy obywatelom w takich sytuacjach.',
                    'en' => 'Coordinating with local services on theft reports and organizing assistance for citizens in such cases.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7671,
                'name' => json_encode([
                    'pl' => 'Przeprowadzanie weryfikacji tożsamości obywatela w przypadku wydawania dokumentu tymczasowego.',
                    'en' => 'Conducting identity verification when issuing temporary documents.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7672,
                'name' => json_encode([
                    'pl' => 'Pomoc obywatelom w sprawach rodzinnych, takich jak rejestracja narodzin, małżeństw i rozwodów.',
                    'en' => 'Assisting citizens in family matters, such as registering births, marriages, and divorces.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7673,
                'name' => json_encode([
                    'pl' => 'Udzielanie wsparcia w przypadku problemów opiekuńczych, np. gdy rodzic pozostaje bez opieki nad dzieckiem na terenie obcego kraju.',
                    'en' => 'Providing support in custodial issues, such as when a parent lacks care arrangements for a child abroad.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7674,
                'name' => json_encode([
                    'pl' => 'Współpraca z lokalnymi instytucjami w zakresie spraw związanych z ochroną praw dzieci i osób potrzebujących opieki.',
                    'en' => 'Collaborating with local institutions on issues related to protecting the rights of children and individuals in need of care.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7675,
                'name' => json_encode([
                    'pl' => 'Rejestrowanie narodzin, ślubów, rozwodów i zgonów obywateli przebywających za granicą.',
                    'en' => 'Registering births, marriages, divorces, and deaths of citizens abroad.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7676,
                'name' => json_encode([
                    'pl' => 'Wydawanie odpisów aktów stanu cywilnego i innych dokumentów potrzebnych obywatelom.',
                    'en' => 'Issuing copies of civil status records and other necessary documents for citizens.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7677,
                'name' => json_encode([
                    'pl' => 'Przekazywanie kopii aktów stanu cywilnego do odpowiednich instytucji w kraju.',
                    'en' => 'Transmitting copies of civil status records to relevant institutions in the home country.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7678,
                'name' => json_encode([
                    'pl' => 'Sporządzanie raportów konsularnych dotyczących liczby obywateli przebywających w danym kraju oraz ich sytuacji.',
                    'en' => 'Preparing consular reports on the number of citizens in a given country and their circumstances.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7679,
                'name' => json_encode([
                    'pl' => 'Przygotowywanie analiz i raportów na potrzeby instytucji krajowych, takich jak MSZ.',
                    'en' => 'Preparing analyses and reports for national institutions, such as the Ministry of Foreign Affairs.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7680,
                'name' => json_encode([
                    'pl' => 'Dokumentowanie działań konsulatu, szczególnie w przypadku sytuacji kryzysowych lub incydentów.',
                    'en' => 'Documenting consulate activities, particularly during crises or incidents.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7681,
                'name' => json_encode([
                    'pl' => 'Organizacja punktów wyborczych w placówkach konsularnych oraz zapewnienie możliwości głosowania dla obywateli przebywających za granicą.',
                    'en' => 'Organizing polling stations in consular offices and facilitating voting for citizens abroad.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7682,
                'name' => json_encode([
                    'pl' => 'Udzielanie informacji na temat procedur wyborczych oraz możliwości głosowania w kraju i za granicą.',
                    'en' => 'Providing information on voting procedures and opportunities to vote in-country and abroad.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7683,
                'name' => json_encode([
                    'pl' => 'Prowadzenie ewidencji osób zgłaszających chęć udziału w wyborach i zapewnienie zgodności z przepisami wyborczymi.',
                    'en' => 'Keeping records of individuals registering to vote and ensuring compliance with electoral regulations.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7684,
                'name' => json_encode([
                    'pl' => 'Publikowanie aktualnych informacji o przepisach prawnych i procedurach obowiązujących w kraju pobytu.',
                    'en' => 'Publishing updated information on legal regulations and procedures in the country of residence.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7685,
                'name' => json_encode([
                    'pl' => 'Opracowywanie i dystrybucja materiałów informacyjnych, np. poradników dotyczących życia i pracy za granicą.',
                    'en' => 'Creating and distributing informational materials, such as guides on living and working abroad.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7686,
                'name' => json_encode([
                    'pl' => 'Udzielanie informacji o możliwościach korzystania z lokalnych usług oraz o instytucjach pomocowych.',
                    'en' => 'Providing information on local service options and assistance institutions.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7687,
                'name' => json_encode([
                    'pl' => 'Udzielanie wsparcia obywatelom, którzy zostali deportowani lub repatriowani do kraju.',
                    'en' => 'Providing support to citizens who have been deported or repatriated.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7688,
                'name' => json_encode([
                    'pl' => 'Koordynacja działań związanych z powrotem obywateli do kraju, w tym transportu oraz pomocy prawnej.',
                    'en' => 'Coordinating actions related to citizens’ return to the country, including transport and legal assistance.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7689,
                'name' => json_encode([
                    'pl' => 'Współpraca z lokalnymi służbami w zakresie ochrony praw obywateli w procesie deportacji.',
                    'en' => 'Collaborating with local services to protect citizens’ rights during the deportation process.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7690,
                'name' => json_encode([
                    'pl' => 'Wspieranie działań kulturalnych promujących kraj w miejscu pobytu, w tym organizacja wydarzeń i wystaw.',
                    'en' => 'Supporting cultural activities promoting the home country abroad, including organizing events and exhibitions.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7691,
                'name' => json_encode([
                    'pl' => 'Udzielanie informacji na temat programów współpracy międzynarodowej i kulturalnej.',
                    'en' => 'Providing information on international cooperation and cultural programs.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7692,
                'name' => json_encode([
                    'pl' => 'Współpraca z lokalnymi instytucjami kulturalnymi i edukacyjnymi oraz wsparcie inicjatyw polonijnych.',
                    'en' => 'Collaborating with local cultural and educational institutions and supporting Polish community initiatives.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7693,
                'name' => json_encode([
                    'pl' => 'Koordynowanie wizyt krajowych delegacji i przedstawicieli rządowych w konsulacie oraz w miejscowych instytucjach.',
                    'en' => 'Coordinating visits of national delegations and government representatives at the consulate and local institutions.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7694,
                'name' => json_encode([
                    'pl' => 'Zapewnienie wsparcia logistycznego i organizacyjnego dla delegacji oraz dbanie o ich bezpieczny pobyt.',
                    'en' => 'Providing logistical and organizational support to delegations and ensuring their safe stay.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7695,
                'name' => json_encode([
                    'pl' => 'Przygotowywanie harmonogramów spotkań i wizyt oraz zapewnienie niezbędnych zasobów.',
                    'en' => 'Preparing meeting and visit schedules and ensuring necessary resources.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7696,
                'name' => json_encode([
                    'pl' => 'Ochrona poufnych informacji oraz przestrzeganie zasad ochrony danych osobowych obywateli.',
                    'en' => 'Protecting confidential information and adhering to citizen data protection regulations.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7697,
                'name' => json_encode([
                    'pl' => 'Zapewnienie, że wszystkie działania konsularne są zgodne z krajowymi przepisami o ochronie danych.',
                    'en' => 'Ensuring all consular actions comply with national data protection laws.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7698,
                'name' => json_encode([
                    'pl' => 'Przestrzeganie standardów etycznych oraz dbałość o bezpieczeństwo przetwarzanych informacji.',
                    'en' => 'Upholding ethical standards and ensuring the security of processed information.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7699,
                'name' => json_encode([
                    'pl' => 'Uczestnictwo w szkoleniach i kursach dotyczących pracy konsularnej, prawa międzynarodowego, ochrony obywateli.',
                    'en' => 'Attending training and courses on consular work, international law, and citizen protection.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7700,
                'name' => json_encode([
                    'pl' => 'Aktualizowanie wiedzy na temat przepisów wizowych, konsularnych oraz przepisów obowiązujących w kraju pobytu.',
                    'en' => 'Updating knowledge of visa, consular, and local regulations in the host country.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7701,
                'name' => json_encode([
                    'pl' => 'Dążenie do rozwoju kompetencji zawodowych oraz wymiana doświadczeń z innymi pracownikami konsulatu.',
                    'en' => 'Pursuing professional development and exchanging experiences with other consulate staff.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ]


        ];
        $SEKRETARKA_NOTARIALNA = [
            [
                'id' => 7702,
                'name' => json_encode([
                    'pl' => 'Witanie klientów, udzielanie podstawowych informacji o procedurach notarialnych oraz kierowanie ich do odpowiednich osób.',
                    'en' => 'Welcoming clients, providing basic information on notarial procedures, and directing them to the appropriate persons.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7703,
                'name' => json_encode([
                    'pl' => 'Pomoc klientom w przygotowaniu niezbędnej dokumentacji i informowanie ich o wymaganych formalnościach.',
                    'en' => 'Assisting clients in preparing necessary documentation and informing them of required formalities.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7704,
                'name' => json_encode([
                    'pl' => 'Udzielanie odpowiedzi na zapytania telefoniczne i e-mailowe od klientów kancelarii.',
                    'en' => 'Responding to phone and email inquiries from clients of the notary office.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7705,
                'name' => json_encode([
                    'pl' => 'Przygotowywanie i redagowanie dokumentów notarialnych, takich jak akty notarialne, pełnomocnictwa, poświadczenia i testamenty.',
                    'en' => 'Preparing and editing notarial documents, such as deeds, powers of attorney, certifications, and wills.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7706,
                'name' => json_encode([
                    'pl' => 'Wprowadzanie danych do dokumentów notarialnych zgodnie z wytycznymi notariusza i obowiązującymi przepisami.',
                    'en' => 'Entering data into notarial documents following the notary’s guidelines and legal regulations.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7707,
                'name' => json_encode([
                    'pl' => 'Formatowanie i edytowanie dokumentów, dbając o ich poprawność językową oraz formalną.',
                    'en' => 'Formatting and editing documents, ensuring linguistic and formal accuracy.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7708,
                'name' => json_encode([
                    'pl' => 'Organizacja i zarządzanie terminami spotkań notariusza, w tym planowanie wizyt i ich potwierdzanie.',
                    'en' => 'Organizing and managing the notary’s meeting schedule, including planning and confirming visits.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7709,
                'name' => json_encode([
                    'pl' => 'Koordynowanie harmonogramu pracy, tak aby zapewnić maksymalną efektywność działań kancelarii.',
                    'en' => 'Coordinating the work schedule to ensure maximum office efficiency.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7710,
                'name' => json_encode([
                    'pl' => 'Przypominanie notariuszowi i klientom o nadchodzących spotkaniach i terminach.',
                    'en' => 'Reminding the notary and clients about upcoming meetings and deadlines.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7711,
                'name' => json_encode([
                    'pl' => 'Prowadzenie i archiwizacja dokumentacji notarialnej, aktów notarialnych oraz korespondencji związanej z obsługą klientów.',
                    'en' => 'Maintaining and archiving notarial documentation, deeds, and correspondence related to client services.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7712,
                'name' => json_encode([
                    'pl' => 'Tworzenie i utrzymywanie systemu ewidencji dokumentów, który zapewnia szybki dostęp do potrzebnych akt.',
                    'en' => 'Creating and maintaining a document registry system to ensure quick access to necessary files.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7713,
                'name' => json_encode([
                    'pl' => 'Dbanie o zgodność archiwizacji z przepisami o ochronie danych oraz zasadami poufności.',
                    'en' => 'Ensuring archiving compliance with data protection regulations and confidentiality principles.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7714,
                'name' => json_encode([
                    'pl' => 'Przyjmowanie i wysyłanie korespondencji przychodzącej i wychodzącej, w tym dokumentów sądowych, listów poleconych i przesyłek kurierskich.',
                    'en' => 'Receiving and sending incoming and outgoing correspondence, including court documents, registered letters, and courier shipments.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7715,
                'name' => json_encode([
                    'pl' => 'Redagowanie i wysyłanie pism urzędowych, wezwania stron do uzupełnienia dokumentacji oraz informowanie klientów o zakończeniu spraw.',
                    'en' => 'Drafting and sending official letters, requesting parties to complete documentation, and informing clients about case completion.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7716,
                'name' => json_encode([
                    'pl' => 'Dokumentowanie wysyłek i dbanie o terminowość przesyłania ważnych dokumentów.',
                    'en' => 'Documenting shipments and ensuring timely dispatch of important documents.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7717,
                'name' => json_encode([
                    'pl' => 'Przekazywanie dokumentów i informacji do sądów, urzędów skarbowych, ksiąg wieczystych oraz innych instytucji w zależności od potrzeb klienta.',
                    'en' => 'Transmitting documents and information to courts, tax offices, land registers, and other institutions as per client needs.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7718,
                'name' => json_encode([
                    'pl' => 'Wsparcie w procesie przesyłania dokumentów wymagających zatwierdzenia lub zarejestrowania w odpowiednich rejestrach.',
                    'en' => 'Supporting the process of transmitting documents requiring approval or registration in relevant registries.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7719,
                'name' => json_encode([
                    'pl' => 'Kontrola nad terminami i procedurami wymaganymi przez instytucje zewnętrzne.',
                    'en' => 'Monitoring deadlines and procedures required by external institutions.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7720,
                'name' => json_encode([
                    'pl' => 'Gromadzenie i organizowanie dokumentacji potrzebnej do sporządzenia aktu notarialnego oraz innych czynności notarialnych.',
                    'en' => 'Collecting and organizing documentation needed for drafting notarial deeds and other notarial activities.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7721,
                'name' => json_encode([
                    'pl' => 'Weryfikacja poprawności i kompletności dokumentów przed spotkaniem z klientem.',
                    'en' => 'Verifying the correctness and completeness of documents before meeting with the client.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7722,
                'name' => json_encode([
                    'pl' => 'Przygotowywanie umów, pełnomocnictw i innych niezbędnych dokumentów na potrzeby spotkań notarialnych.',
                    'en' => 'Preparing contracts, powers of attorney, and other necessary documents for notarial meetings.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7723,
                'name' => json_encode([
                    'pl' => 'Prowadzenie ewidencji aktów notarialnych, rejestrów poświadczeń oraz innych dokumentów, zgodnie z wymogami prawnymi.',
                    'en' => 'Maintaining records of notarial deeds, certification registers, and other documents in accordance with legal requirements.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7724,
                'name' => json_encode([
                    'pl' => 'Tworzenie i aktualizacja rejestrów dokumentów w formie elektronicznej i papierowej.',
                    'en' => 'Creating and updating document registers in electronic and paper form.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7725,
                'name' => json_encode([
                    'pl' => 'Sporządzanie miesięcznych i rocznych zestawień oraz przekazywanie ich do odpowiednich instytucji, jeśli wymagają tego przepisy.',
                    'en' => 'Preparing monthly and annual summaries and submitting them to relevant institutions if required by regulations.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7726,
                'name' => json_encode([
                    'pl' => 'Przestrzeganie przepisów dotyczących ochrony danych osobowych i zasad poufności obowiązujących w kancelarii notarialnej.',
                    'en' => 'Complying with data protection regulations and confidentiality principles required in the notary office.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7727,
                'name' => json_encode([
                    'pl' => 'Zapewnienie, że wszystkie informacje i dokumenty klientów są odpowiednio zabezpieczone i chronione przed nieuprawnionym dostępem.',
                    'en' => 'Ensuring that all client information and documents are securely protected from unauthorized access.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7728,
                'name' => json_encode([
                    'pl' => 'Przechowywanie dokumentacji zgodnie z obowiązującymi przepisami i polityką kancelarii.',
                    'en' => 'Storing documentation in compliance with applicable regulations and office policy.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7729,
                'name' => json_encode([
                    'pl' => 'Zamawianie materiałów biurowych, obsługa urządzeń biurowych (drukarki, skanery) oraz dbanie o porządek w biurze.',
                    'en' => 'Ordering office supplies, handling office equipment (printers, scanners), and maintaining office cleanliness.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7730,
                'name' => json_encode([
                    'pl' => 'Prowadzenie rozliczeń kosztów biurowych oraz przygotowywanie dokumentów finansowych na potrzeby rozliczeń kancelarii.',
                    'en' => 'Managing office expense settlements and preparing financial documents for office accounting purposes.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7731,
                'name' => json_encode([
                    'pl' => 'Wspieranie notariusza w zadaniach administracyjnych, takich jak przygotowanie faktur oraz obsługa rozliczeń z klientami.',
                    'en' => 'Assisting the notary in administrative tasks, such as preparing invoices and handling client settlements.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7732,
                'name' => json_encode([
                    'pl' => 'Regularne uczestnictwo w szkoleniach i kursach związanych z pracą w kancelarii notarialnej, w tym szkoleniach prawnych i administracyjnych.',
                    'en' => 'Regularly attending training and courses related to notarial work, including legal and administrative training.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7733,
                'name' => json_encode([
                    'pl' => 'Aktualizowanie wiedzy na temat przepisów prawnych i regulacji dotyczących pracy notarialnej.',
                    'en' => 'Updating knowledge on legal regulations related to notarial work.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7734,
                'name' => json_encode([
                    'pl' => 'Wymiana doświadczeń i najlepszych praktyk z innymi pracownikami kancelarii.',
                    'en' => 'Exchanging experiences and best practices with other office staff.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7735,
                'name' => json_encode([
                    'pl' => 'Pomoc klientom w sporządzaniu i uzupełnianiu dokumentacji potrzebnej do czynności notarialnych.',
                    'en' => 'Assisting clients in preparing and completing documentation required for notarial activities.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7736,
                'name' => json_encode([
                    'pl' => 'Informowanie klientów o wymaganiach prawnych oraz wyjaśnianie, jak przebiega proces przygotowania aktów notarialnych.',
                    'en' => 'Informing clients of legal requirements and explaining the process of preparing notarial deeds.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7737,
                'name' => json_encode([
                    'pl' => 'Udzielanie informacji o opłatach, terminach realizacji oraz dodatkowych formalnościach związanych z czynnościami notarialnymi.',
                    'en' => 'Providing information on fees, turnaround times, and additional formalities for notarial services.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7738,
                'name' => json_encode([
                    'pl' => 'Wsparcie notariusza przy organizacji czynności notarialnych, które wymagają przeprowadzenia ich poza kancelarią (np. w szpitalach, domach opieki).',
                    'en' => 'Supporting the notary in organizing notarial activities outside the office (e.g., in hospitals, care homes).'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7739,
                'name' => json_encode([
                    'pl' => 'Zapewnienie dostępności niezbędnych dokumentów i sprzętu potrzebnego do przeprowadzenia czynności notarialnych w terenie.',
                    'en' => 'Ensuring availability of necessary documents and equipment for conducting notarial activities on-site.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7740,
                'name' => json_encode([
                    'pl' => 'Koordynacja logistyczna związana z realizacją usług notarialnych poza kancelarią.',
                    'en' => 'Logistical coordination related to providing notarial services outside the office.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7741,
                'name' => json_encode([
                    'pl' => 'Wprowadzanie danych klientów oraz informacji o sprawach do systemu kancelarii.',
                    'en' => 'Entering client data and case information into the office system.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7742,
                'name' => json_encode([
                    'pl' => 'Aktualizacja bazy danych klientów w przypadku zmiany danych kontaktowych lub statusu sprawy.',
                    'en' => 'Updating client database in case of changes in contact information or case status.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7743,
                'name' => json_encode([
                    'pl' => 'Przestrzeganie zasad ochrony danych osobowych w zarządzaniu bazą danych klientów.',
                    'en' => 'Adhering to data protection rules in managing the client database.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7744,
                'name' => json_encode([
                    'pl' => 'Monitorowanie obiegu dokumentów pomiędzy kancelarią a instytucjami zewnętrznymi, takimi jak sądy i urzędy.',
                    'en' => 'Monitoring document flow between the office and external institutions, such as courts and government offices.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7745,
                'name' => json_encode([
                    'pl' => 'Sprawdzanie, czy wszystkie dokumenty są odpowiednio zatwierdzone, podpisane i kompletne przed ich wysyłką.',
                    'en' => 'Ensuring all documents are properly approved, signed, and complete before dispatch.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7746,
                'name' => json_encode([
                    'pl' => 'Upewnianie się, że terminy składania dokumentów są dotrzymywane oraz że dokumenty wracają do kancelarii we właściwej formie.',
                    'en' => 'Ensuring document submission deadlines are met and documents return to the office in proper form.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7747,
                'name' => json_encode([
                    'pl' => 'Przygotowywanie faktur oraz rozliczeń związanych z usługami świadczonymi przez kancelarię.',
                    'en' => 'Preparing invoices and settlements related to services provided by the office.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7748,
                'name' => json_encode([
                    'pl' => 'Informowanie klientów o kosztach czynności notarialnych oraz przyjmowanie płatności w kancelarii.',
                    'en' => 'Informing clients about notarial fees and accepting payments at the office.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7749,
                'name' => json_encode([
                    'pl' => 'Prowadzenie rejestru opłat oraz dbałość o terminowe uiszczanie opłat przez klientów.',
                    'en' => 'Maintaining a payment register and ensuring timely payment by clients.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ]

        ];
        $SEKRETARKI_OGOLNE = [
            [
                'id' => 7750,
                'name' => json_encode([
                    'pl' => 'Witanie gości, udzielanie podstawowych informacji i kierowanie ich do odpowiednich osób lub działów.',
                    'en' => 'Welcoming guests, providing basic information, and directing them to the appropriate persons or departments.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7751,
                'name' => json_encode([
                    'pl' => 'Odbieranie telefonów i przekazywanie wiadomości oraz obsługa zapytań e-mailowych.',
                    'en' => 'Answering calls, forwarding messages, and handling email inquiries.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7752,
                'name' => json_encode([
                    'pl' => 'Dbaniu o profesjonalny wizerunek firmy w kontakcie z klientami, gośćmi i interesariuszami.',
                    'en' => 'Maintaining a professional image of the company when interacting with clients, guests, and stakeholders.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7753,
                'name' => json_encode([
                    'pl' => 'Organizacja i zarządzanie kalendarzem przełożonych, w tym planowanie spotkań, wizyt oraz innych wydarzeń.',
                    'en' => 'Organizing and managing superiors’ calendars, including scheduling meetings, visits, and other events.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7754,
                'name' => json_encode([
                    'pl' => 'Koordynacja harmonogramu z innymi pracownikami i przypominanie o kluczowych terminach.',
                    'en' => 'Coordinating schedules with other employees and reminding about key deadlines.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7755,
                'name' => json_encode([
                    'pl' => 'Rezerwacja sal konferencyjnych oraz przygotowanie harmonogramu działań, aby zapewnić sprawny przebieg spotkań.',
                    'en' => 'Booking conference rooms and preparing schedules to ensure smooth meeting flow.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7756,
                'name' => json_encode([
                    'pl' => 'Przygotowywanie agendy spotkań oraz zapewnienie dostępności materiałów, takich jak prezentacje, notatki i raporty.',
                    'en' => 'Preparing meeting agendas and ensuring the availability of materials such as presentations, notes, and reports.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7757,
                'name' => json_encode([
                    'pl' => 'Sporządzanie protokołów ze spotkań oraz przekazywanie ustaleń do odpowiednich osób.',
                    'en' => 'Taking meeting minutes and conveying decisions to the appropriate individuals.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7758,
                'name' => json_encode([
                    'pl' => 'Organizacja spotkań zewnętrznych i wewnętrznych, dbanie o zaplecze techniczne i logistyczne (np. zamówienie cateringu, sprzętu).',
                    'en' => 'Organizing external and internal meetings, ensuring technical and logistical support (e.g., catering, equipment).'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7759,
                'name' => json_encode([
                    'pl' => 'Przyjmowanie, sortowanie i wysyłanie korespondencji przychodzącej i wychodzącej.',
                    'en' => 'Receiving, sorting, and sending incoming and outgoing correspondence.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7760,
                'name' => json_encode([
                    'pl' => 'Redagowanie pism, odpowiedzi oraz przygotowywanie dokumentów do wysyłki, w tym przesyłek kurierskich.',
                    'en' => 'Drafting letters, replies, and preparing documents for dispatch, including courier shipments.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7761,
                'name' => json_encode([
                    'pl' => 'Archiwizacja korespondencji oraz dbanie o jej odpowiednie zabezpieczenie i poufność.',
                    'en' => 'Archiving correspondence and ensuring its proper security and confidentiality.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7762,
                'name' => json_encode([
                    'pl' => 'Tworzenie dokumentów, takich jak raporty, zestawienia, notatki służbowe oraz prezentacje.',
                    'en' => 'Creating documents such as reports, summaries, memos, and presentations.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7763,
                'name' => json_encode([
                    'pl' => 'Formatowanie dokumentów zgodnie ze standardami firmy oraz dbałość o poprawność językową i stylistyczną.',
                    'en' => 'Formatting documents according to company standards and ensuring linguistic and stylistic accuracy.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7764,
                'name' => json_encode([
                    'pl' => 'Wspieranie innych działów w przygotowywaniu i weryfikacji dokumentacji.',
                    'en' => 'Supporting other departments in preparing and verifying documentation.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7765,
                'name' => json_encode([
                    'pl' => 'Organizowanie i archiwizacja dokumentów biurowych oraz tworzenie systemu ewidencji dokumentacji.',
                    'en' => 'Organizing and archiving office documents and creating a documentation tracking system.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7766,
                'name' => json_encode([
                    'pl' => 'Zapewnienie zgodności archiwizacji z przepisami dotyczącymi ochrony danych oraz polityką firmy.',
                    'en' => 'Ensuring archiving compliance with data protection regulations and company policy.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7767,
                'name' => json_encode([
                    'pl' => 'Ułatwienie dostępu do dokumentów dla upoważnionych osób i dbanie o porządek w archiwum.',
                    'en' => 'Facilitating document access for authorized personnel and maintaining order in the archive.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7768,
                'name' => json_encode([
                    'pl' => 'Wsparcie w realizacji bieżących zadań administracyjnych, takich jak kopiowanie, skanowanie, przygotowanie materiałów.',
                    'en' => 'Assisting in current administrative tasks, such as copying, scanning, and preparing materials.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7769,
                'name' => json_encode([
                    'pl' => 'Udzielanie informacji pracownikom i gościom, dbanie o zaopatrzenie w materiały biurowe i utrzymanie porządku w biurze.',
                    'en' => 'Providing information to employees and guests, maintaining office supplies, and keeping the office organized.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7770,
                'name' => json_encode([
                    'pl' => 'Obsługa urządzeń biurowych (drukarki, kopiarki, skanery) oraz dbałość o ich sprawne funkcjonowanie.',
                    'en' => 'Operating office equipment (printers, copiers, scanners) and ensuring they function properly.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7771,
                'name' => json_encode([
                    'pl' => 'Monitorowanie zapasów materiałów biurowych i składanie zamówień w celu zapewnienia ich ciągłości.',
                    'en' => 'Monitoring office supplies and placing orders to ensure their continuity.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7772,
                'name' => json_encode([
                    'pl' => 'Współpraca z dostawcami oraz kontrola dostaw i faktur za zamówione materiały.',
                    'en' => 'Collaborating with suppliers and checking deliveries and invoices for ordered materials.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7773,
                'name' => json_encode([
                    'pl' => 'Dbanie o porządek w biurze i ułatwienie dostępu do niezbędnych materiałów.',
                    'en' => 'Maintaining order in the office and ensuring easy access to necessary materials.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7774,
                'name' => json_encode([
                    'pl' => 'Przygotowywanie i ewidencja dokumentów finansowych, takich jak faktury, rachunki, rozliczenia delegacji.',
                    'en' => 'Preparing and recording financial documents, such as invoices, receipts, and delegation settlements.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7775,
                'name' => json_encode([
                    'pl' => 'Monitorowanie wydatków biurowych oraz dbanie o ich zgodność z budżetem.',
                    'en' => 'Monitoring office expenses and ensuring budget compliance.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7776,
                'name' => json_encode([
                    'pl' => 'Współpraca z działem księgowości oraz sporządzanie zestawień kosztowych.',
                    'en' => 'Collaborating with the accounting department and preparing cost summaries.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7777,
                'name' => json_encode([
                    'pl' => 'Rezerwacja biletów, hoteli oraz organizacja transportu na potrzeby podróży służbowych.',
                    'en' => 'Booking tickets, hotels, and organizing transportation for business trips.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7778,
                'name' => json_encode([
                    'pl' => 'Przygotowywanie harmonogramu wyjazdów oraz gromadzenie niezbędnych dokumentów i informacji.',
                    'en' => 'Preparing travel schedules and gathering necessary documents and information.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7779,
                'name' => json_encode([
                    'pl' => 'Rozliczanie wydatków służbowych oraz monitorowanie ich zgodności z zasadami firmy.',
                    'en' => 'Reconciling business expenses and ensuring their compliance with company policies.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7780,
                'name' => json_encode([
                    'pl' => 'Współpraca z działem marketingu przy tworzeniu materiałów promocyjnych, broszur, ulotek oraz treści na stronę internetową.',
                    'en' => 'Collaborating with the marketing department to create promotional materials, brochures, leaflets, and website content.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7781,
                'name' => json_encode([
                    'pl' => 'Pomoc w organizacji wydarzeń firmowych, konferencji oraz spotkań promocyjnych.',
                    'en' => 'Assisting in organizing company events, conferences, and promotional meetings.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7782,
                'name' => json_encode([
                    'pl' => 'Aktualizacja strony internetowej oraz profili firmy w mediach społecznościowych.',
                    'en' => 'Updating the website and company profiles on social media.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7783,
                'name' => json_encode([
                    'pl' => 'Opracowywanie i aktualizacja procedur biurowych oraz standardów pracy administracyjnej.',
                    'en' => 'Developing and updating office procedures and administrative work standards.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7784,
                'name' => json_encode([
                    'pl' => 'Dbanie o zgodność działań biura z politykami firmy i obowiązującymi przepisami.',
                    'en' => 'Ensuring office activities comply with company policies and applicable regulations.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7785,
                'name' => json_encode([
                    'pl' => 'Udział w wdrażaniu nowych systemów i narzędzi, które mogą usprawnić działania biura.',
                    'en' => 'Participating in implementing new systems and tools to streamline office operations.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7786,
                'name' => json_encode([
                    'pl' => 'Monitorowanie obiegu dokumentów między działami, kontrola nad ich terminowością i zgodnością z procedurami.',
                    'en' => 'Monitoring document flow between departments, ensuring timeliness and procedural compliance.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7787,
                'name' => json_encode([
                    'pl' => 'Sprawdzanie poprawności i kompletności dokumentów przed ich wysyłką lub archiwizacją.',
                    'en' => 'Checking the accuracy and completeness of documents before sending or archiving.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7788,
                'name' => json_encode([
                    'pl' => 'Wspieranie płynnego przepływu informacji i dokumentacji wewnątrz organizacji.',
                    'en' => 'Supporting smooth information and documentation flow within the organization.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7789,
                'name' => json_encode([
                    'pl' => 'Przestrzeganie zasad ochrony danych osobowych oraz zapewnienie poufności przechowywanych dokumentów.',
                    'en' => 'Adhering to data protection regulations and ensuring confidentiality of stored documents.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7790,
                'name' => json_encode([
                    'pl' => 'Stosowanie się do zasad polityki prywatności oraz zapewnienie bezpieczeństwa danych biurowych.',
                    'en' => 'Complying with privacy policy guidelines and ensuring office data security.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7791,
                'name' => json_encode([
                    'pl' => 'Przestrzeganie polityki poufności, szczególnie przy obsłudze dokumentów wrażliwych.',
                    'en' => 'Following confidentiality policy, especially when handling sensitive documents.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7792,
                'name' => json_encode([
                    'pl' => 'Pomoc w organizacji i obsłudze procesów rekrutacyjnych, takich jak umawianie spotkań rekrutacyjnych, organizowanie szkoleń wstępnych.',
                    'en' => 'Assisting in organizing and managing recruitment processes, including scheduling interviews and organizing onboarding training.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7793,
                'name' => json_encode([
                    'pl' => 'Współpraca z działem kadr w zakresie ewidencji czasu pracy, monitorowania obecności i nieobecności pracowników.',
                    'en' => 'Collaborating with the HR department to manage attendance records and monitor employee presence and absences.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7794,
                'name' => json_encode([
                    'pl' => 'Przygotowywanie dokumentacji kadrowej oraz aktualizacja danych pracowników.',
                    'en' => 'Preparing HR documentation and updating employee data.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7795,
                'name' => json_encode([
                    'pl' => 'Regularne uczestnictwo w szkoleniach z zakresu obsługi biura, oprogramowania oraz efektywności pracy.',
                    'en' => 'Regularly participating in training on office management, software, and work efficiency.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7796,
                'name' => json_encode([
                    'pl' => 'Aktualizowanie wiedzy na temat nowych przepisów, technik administracyjnych i narzędzi biurowych.',
                    'en' => 'Updating knowledge on new regulations, administrative techniques, and office tools.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7797,
                'name' => json_encode([
                    'pl' => 'Wymiana doświadczeń z innymi pracownikami biura oraz stałe doskonalenie kompetencji zawodowych.',
                    'en' => 'Exchanging experiences with other office staff and continuously improving professional skills.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ]
        ];
        $ASYSTENT_OSOBISTY_CONCIERGE = [
            [
                'id' => 7798,
                'name' => json_encode([
                    'pl' => 'Planowanie codziennych zadań i terminów, koordynacja kalendarza klienta.',
                    'en' => 'Planning daily tasks and appointments, coordinating the client’s calendar.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7799,
                'name' => json_encode([
                    'pl' => 'Rezerwacja spotkań i przypominanie o kluczowych terminach.',
                    'en' => 'Booking appointments and reminding of key dates.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7800,
                'name' => json_encode([
                    'pl' => 'Dostosowywanie harmonogramu do zmieniających się potrzeb i nagłych sytuacji.',
                    'en' => 'Adjusting schedule to meet changing needs and emergencies.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7801,
                'name' => json_encode([
                    'pl' => 'Planowanie i rezerwacja podróży, w tym lotów, transportu i zakwaterowania.',
                    'en' => 'Planning and booking travel, including flights, transportation, and accommodations.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7802,
                'name' => json_encode([
                    'pl' => 'Przygotowywanie harmonogramów podróży, dostarczanie biletów, potwierdzeń rezerwacji i niezbędnych dokumentów.',
                    'en' => 'Preparing travel itineraries, providing tickets, booking confirmations, and necessary documents.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7803,
                'name' => json_encode([
                    'pl' => 'Organizowanie dodatkowych usług, takich jak transfery z lotniska, wynajem samochodów, usługi VIP i inne specjalne potrzeby podczas podróży.',
                    'en' => 'Arranging additional services, such as airport transfers, car rentals, VIP services, and other special travel needs.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7804,
                'name' => json_encode([
                    'pl' => 'Rezerwacja stolików w restauracjach, biletów na wydarzenia kulturalne i sportowe, spa, itp.',
                    'en' => 'Booking restaurant tables, tickets to cultural and sporting events, spa appointments, etc.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7805,
                'name' => json_encode([
                    'pl' => 'Organizacja specjalnych okazji, takich jak rocznice, urodziny, kolacje lub spotkania rodzinne.',
                    'en' => 'Organizing special occasions, such as anniversaries, birthdays, dinners, or family gatherings.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7806,
                'name' => json_encode([
                    'pl' => 'Znajdowanie i rezerwowanie wyjątkowych miejsc na życzenie klienta, zapewniając dostęp do ekskluzywnych wydarzeń i miejsc.',
                    'en' => 'Finding and booking exclusive locations upon client’s request, providing access to exclusive events and places.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7807,
                'name' => json_encode([
                    'pl' => 'Realizacja zakupów codziennych i specjalnych, np. produktów luksusowych, prezentów lub przedmiotów kolekcjonerskich.',
                    'en' => 'Handling everyday and special purchases, e.g., luxury goods, gifts, or collectibles.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7808,
                'name' => json_encode([
                    'pl' => 'Pomoc w zarządzaniu listą zakupów, porównywanie ofert oraz negocjowanie cen, gdy jest to możliwe.',
                    'en' => 'Assisting in managing shopping lists, comparing offers, and negotiating prices when possible.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7809,
                'name' => json_encode([
                    'pl' => 'Organizowanie dostaw, montażu lub instalacji, dbając o terminowość dostaw.',
                    'en' => 'Arranging deliveries, installations, or setups, ensuring timely deliveries.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7810,
                'name' => json_encode([
                    'pl' => 'Organizacja spotkań biznesowych, kolacji, bankietów i przyjęć okolicznościowych na potrzeby klienta.',
                    'en' => 'Organizing business meetings, dinners, banquets, and private events for the client.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7811,
                'name' => json_encode([
                    'pl' => 'Rezerwacja miejsca, cateringu, dekoracji i personelu pomocniczego na wydarzenia.',
                    'en' => 'Booking venues, catering, decorations, and support staff for events.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7812,
                'name' => json_encode([
                    'pl' => 'Zapewnienie rozrywki, np. muzyki na żywo, pokazów i atrakcji specjalnych na życzenie klienta.',
                    'en' => 'Providing entertainment, such as live music, shows, and special attractions, upon client’s request.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7813,
                'name' => json_encode([
                    'pl' => 'Koordynacja usług związanych z utrzymaniem nieruchomości, takich jak sprzątanie, konserwacja, naprawy.',
                    'en' => 'Coordinating property maintenance services, such as cleaning, maintenance, and repairs.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7814,
                'name' => json_encode([
                    'pl' => 'Organizowanie usług ogrodniczych, basenowych, ochrony i nadzoru technicznego.',
                    'en' => 'Arranging gardening, pool services, security, and technical oversight.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7815,
                'name' => json_encode([
                    'pl' => 'Prowadzenie harmonogramu przeglądów i dbanie o bieżące potrzeby domowe klienta.',
                    'en' => 'Maintaining a schedule of inspections and managing the client’s ongoing domestic needs.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7816,
                'name' => json_encode([
                    'pl' => 'Odbieranie, nadawanie i organizacja przesyłek oraz ważnej korespondencji.',
                    'en' => 'Receiving, sending, and organizing shipments and important correspondence.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7817,
                'name' => json_encode([
                    'pl' => 'Organizowanie przesyłek kurierskich, zapewnienie dostępu do usług ekspresowych i śledzenie statusu przesyłek.',
                    'en' => 'Arranging courier services, providing access to express services, and tracking shipment status.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7818,
                'name' => json_encode([
                    'pl' => 'Zapewnienie bezpieczeństwa poufnych dokumentów i danych oraz ich dostarczenie w odpowiednie miejsce.',
                    'en' => 'Ensuring the security of confidential documents and data and delivering them to the appropriate location.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7819,
                'name' => json_encode([
                    'pl' => 'Doradzanie w zakresie zakupów modowych, organizowanie zakupów odzieży, akcesoriów, wyposażenia domu.',
                    'en' => 'Advising on fashion purchases, organizing shopping for clothing, accessories, and home furnishings.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7820,
                'name' => json_encode([
                    'pl' => 'Organizowanie zakupów luksusowych, takich jak biżuteria, zegarki, samochody czy dzieła sztuki.',
                    'en' => 'Arranging luxury purchases, such as jewelry, watches, cars, and artwork.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7821,
                'name' => json_encode([
                    'pl' => 'Zapewnienie indywidualnych konsultacji z ekspertami (np. stylistami, doradcami zakupowymi) na życzenie klienta.',
                    'en' => 'Providing individual consultations with experts (e.g., stylists, shopping advisors) upon the client’s request.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7822,
                'name' => json_encode([
                    'pl' => 'Wsparcie w organizacji budżetu na potrzeby codziennego funkcjonowania, takie jak zakupy, podróże, opłaty.',
                    'en' => 'Assisting in organizing a budget for daily needs, such as shopping, travel, and expenses.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7823,
                'name' => json_encode([
                    'pl' => 'Pomoc w kontrolowaniu kosztów związanych z prowadzeniem domu i osobistymi wydatkami klienta.',
                    'en' => 'Helping control expenses related to household management and the client’s personal expenses.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7824,
                'name' => json_encode([
                    'pl' => 'Tworzenie i monitorowanie budżetów na specjalne wydarzenia lub projekty.',
                    'en' => 'Creating and monitoring budgets for special events or projects.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7825,
                'name' => json_encode([
                    'pl' => 'Organizowanie wizyt u lekarzy, specjalistów, dentystów i innych usług medycznych.',
                    'en' => 'Scheduling visits with doctors, specialists, dentists, and other medical services.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7826,
                'name' => json_encode([
                    'pl' => 'Zapewnienie dostępności usług medycznych na życzenie, takich jak opieka w domu, w tym fizjoterapia czy pielęgniarska.',
                    'en' => 'Providing access to medical services on request, such as home care, including physical therapy or nursing.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7827,
                'name' => json_encode([
                    'pl' => 'Przypominanie o terminach wizyt oraz koordynacja w zakresie badań, odbioru leków lub recept.',
                    'en' => 'Reminding of appointment dates and coordinating tests, medication pickups, or prescriptions.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7828,
                'name' => json_encode([
                    'pl' => 'Organizowanie rezerwacji w SPA, masaży, sesji fitness oraz usług beauty (np. fryzjer, kosmetyczka).',
                    'en' => 'Organizing bookings for spa, massages, fitness sessions, and beauty services (e.g., hairdresser, beautician).'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7829,
                'name' => json_encode([
                    'pl' => 'Organizacja programów zdrowotnych, takich jak sesje jogi, medytacji czy treningi personalne.',
                    'en' => 'Organizing health programs, such as yoga, meditation, or personal training sessions.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7830,
                'name' => json_encode([
                    'pl' => 'Zapewnienie dostępu do wyjątkowych usług wellness, np. ekskluzywnych sesji relaksacyjnych, dietetyków lub trenerów personalnych.',
                    'en' => 'Providing access to exclusive wellness services, such as luxurious relaxation sessions, nutritionists, or personal trainers.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7831,
                'name' => json_encode([
                    'pl' => 'Pomoc w organizacji dokumentacji i wypełnianiu formularzy do celów urzędowych.',
                    'en' => 'Assisting with documentation and form completion for official purposes.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7832,
                'name' => json_encode([
                    'pl' => 'Przypominanie o terminach płatności rachunków, podatków i składek oraz zapewnienie, że wszystkie formalności są terminowo załatwiane.',
                    'en' => 'Reminding of bill, tax, and fee payment deadlines and ensuring all formalities are handled on time.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7833,
                'name' => json_encode([
                    'pl' => 'Koordynacja z urzędami lub prawnikami w sprawach wymagających konsultacji prawnej.',
                    'en' => 'Coordinating with authorities or lawyers on matters requiring legal consultation.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7834,
                'name' => json_encode([
                    'pl' => 'Planowanie codziennych zadań, przypominanie o priorytetach i ważnych terminach.',
                    'en' => 'Planning daily tasks, reminding of priorities and important deadlines.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7835,
                'name' => json_encode([
                    'pl' => 'Organizowanie dodatkowego wsparcia, np. wynajęcie pomocy domowej, korepetytora dla dzieci lub trenera.',
                    'en' => 'Arranging additional support, such as hiring household help, a tutor for children, or a trainer.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7836,
                'name' => json_encode([
                    'pl' => 'Przypominanie o kluczowych datach, np. urodzinach bliskich, rocznicach i innych wydarzeniach prywatnych.',
                    'en' => 'Reminding of key dates, such as family birthdays, anniversaries, and other private events.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7837,
                'name' => json_encode([
                    'pl' => 'Znajdowanie rekomendowanych fachowców, takich jak hydraulicy, elektrycy, projektanci wnętrz, adwokaci.',
                    'en' => 'Finding recommended professionals, such as plumbers, electricians, interior designers, and lawyers.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7838,
                'name' => json_encode([
                    'pl' => 'Organizacja konsultacji i spotkań ze specjalistami, których klient potrzebuje w krótkim czasie.',
                    'en' => 'Organizing consultations and meetings with specialists that the client needs on short notice.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7839,
                'name' => json_encode([
                    'pl' => 'Weryfikowanie reputacji usługodawców oraz zapewnienie najwyższej jakości usług.',
                    'en' => 'Verifying provider reputations and ensuring the highest quality of services.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7840,
                'name' => json_encode([
                    'pl' => 'Zapewnienie najwyższej poufności informacji dotyczących klienta oraz stosowanie się do standardów ochrony danych.',
                    'en' => 'Ensuring the highest confidentiality of client information and adhering to data protection standards.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7841,
                'name' => json_encode([
                    'pl' => 'Dbanie o to, by prywatne dane i dokumenty klienta były odpowiednio zabezpieczone.',
                    'en' => 'Ensuring private client data and documents are properly secured.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7842,
                'name' => json_encode([
                    'pl' => 'Przestrzeganie zasad etyki zawodowej i budowanie relacji opartej na zaufaniu i dyskrecji.',
                    'en' => 'Adhering to professional ethics and building a relationship based on trust and discretion.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7843,
                'name' => json_encode([
                    'pl' => 'Regularne proponowanie klientowi nowych usług, miejsc, rozwiązań organizacyjnych i technologicznych, które mogą usprawnić jego codzienne życie.',
                    'en' => 'Regularly suggesting new services, places, organizational, and technological solutions that can improve the client’s daily life.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7844,
                'name' => json_encode([
                    'pl' => 'Śledzenie trendów w zakresie usług concierge i doradzanie w kwestiach dotyczących stylu życia.',
                    'en' => 'Following trends in concierge services and advising on lifestyle matters.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7845,
                'name' => json_encode([
                    'pl' => 'Znajdowanie sposobów na optymalizację czasu klienta i redukcję jego stresu.',
                    'en' => 'Finding ways to optimize the client’s time and reduce stress.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ]

        ];
        $ASYSTENT_KIEROWNIKA_PRODUKCJI = [
            [
                'id' => 7846,
                'name' => json_encode([
                    'pl' => 'Pomoc w opracowywaniu szczegółowego harmonogramu zdjęć, planu działań oraz terminarza produkcji.',
                    'en' => 'Assisting in the development of a detailed shooting schedule, action plan, and production timeline.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7847,
                'name' => json_encode([
                    'pl' => 'Koordynowanie zmian w harmonogramie i informowanie ekipy o nowych ustaleniach.',
                    'en' => 'Coordinating schedule changes and informing the crew of new arrangements.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7848,
                'name' => json_encode([
                    'pl' => 'Monitorowanie realizacji planu i zgłaszanie ewentualnych opóźnień lub problemów.',
                    'en' => 'Monitoring the execution of the plan and reporting any delays or issues.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7849,
                'name' => json_encode([
                    'pl' => 'Zarządzanie transportem dla ekipy, sprzętu, aktorów i rekwizytów na plan filmowy.',
                    'en' => 'Managing transportation for the crew, equipment, actors, and props to the set.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7850,
                'name' => json_encode([
                    'pl' => 'Zapewnienie dostępności niezbędnych zasobów, takich jak wyposażenie, rekwizyty, kostiumy oraz catering.',
                    'en' => 'Ensuring the availability of essential resources, such as equipment, props, costumes, and catering.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7851,
                'name' => json_encode([
                    'pl' => 'Organizowanie zakwaterowania dla ekipy i aktorów w przypadku realizacji wyjazdowej.',
                    'en' => 'Arranging accommodations for the crew and actors for out-of-town shoots.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7852,
                'name' => json_encode([
                    'pl' => 'Przekazywanie informacji pomiędzy kierownikiem produkcji, reżyserem, operatorami, aktorami i pozostałą ekipą.',
                    'en' => 'Facilitating communication between the production manager, director, operators, actors, and other crew members.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7853,
                'name' => json_encode([
                    'pl' => 'Organizowanie spotkań produkcyjnych i zapewnianie ich sprawnego przebiegu.',
                    'en' => 'Organizing production meetings and ensuring their smooth conduct.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7854,
                'name' => json_encode([
                    'pl' => 'Zapewnienie sprawnej komunikacji i dostępu do informacji wszystkim członkom ekipy.',
                    'en' => 'Ensuring efficient communication and access to information for all crew members.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7855,
                'name' => json_encode([
                    'pl' => 'Tworzenie i aktualizacja dokumentacji produkcyjnej, takiej jak listy kontrolne, harmonogramy, listy kontaktowe.',
                    'en' => 'Creating and updating production documentation, such as checklists, schedules, and contact lists.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7856,
                'name' => json_encode([
                    'pl' => 'Przygotowywanie umów, zezwoleń na kręcenie w lokacjach oraz innych dokumentów formalnych.',
                    'en' => 'Preparing contracts, location permits, and other formal documents.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7857,
                'name' => json_encode([
                    'pl' => 'Dbanie o porządek w dokumentacji, archiwizacja dokumentów oraz ich udostępnianie na żądanie.',
                    'en' => 'Maintaining order in documentation, archiving documents, and providing access upon request.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7858,
                'name' => json_encode([
                    'pl' => 'Monitorowanie wydatków produkcyjnych i sporządzanie zestawień kosztów na potrzeby kierownika produkcji.',
                    'en' => 'Monitoring production expenses and preparing cost summaries for the production manager.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7859,
                'name' => json_encode([
                    'pl' => 'Organizowanie płatności dla podwykonawców, statystów, dostawców i innych osób zaangażowanych w produkcję.',
                    'en' => 'Arranging payments for subcontractors, extras, suppliers, and other involved personnel.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7860,
                'name' => json_encode([
                    'pl' => 'Kontrola nad budżetem i informowanie kierownika produkcji o ewentualnych przekroczeniach kosztów.',
                    'en' => 'Budget control and informing the production manager of any cost overruns.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7861,
                'name' => json_encode([
                    'pl' => 'Pomoc w poszukiwaniu i zatrudnianiu statystów, asystentów planu, techników i innych członków ekipy pomocniczej.',
                    'en' => 'Assisting in recruiting and hiring extras, assistants, technicians, and other auxiliary crew members.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7862,
                'name' => json_encode([
                    'pl' => 'Organizacja harmonogramu pracy statystów i personelu, dbanie o ich obecność na planie.',
                    'en' => 'Organizing the schedule for extras and staff, ensuring their presence on set.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7863,
                'name' => json_encode([
                    'pl' => 'Zapewnienie, że wszyscy statyści i członkowie personelu pomocniczego otrzymują potrzebne informacje i wyposażenie.',
                    'en' => 'Ensuring that all extras and support staff receive necessary information and equipment.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7864,
                'name' => json_encode([
                    'pl' => 'Tworzenie planów dnia dla każdego dnia zdjęciowego, uwzględniając godziny rozpoczęcia, lokalizacje, wymagane zasoby.',
                    'en' => 'Creating daily plans for each shooting day, including start times, locations, and required resources.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7865,
                'name' => json_encode([
                    'pl' => 'Rozesłanie planów dnia do członków ekipy i aktorów oraz aktualizacja planów w przypadku zmian.',
                    'en' => 'Distributing daily plans to crew and actors and updating plans as needed.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7866,
                'name' => json_encode([
                    'pl' => 'Upewnienie się, że wszyscy członkowie ekipy są poinformowani o kluczowych szczegółach każdego dnia zdjęciowego.',
                    'en' => 'Ensuring all crew members are informed of key details for each shooting day.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7867,
                'name' => json_encode([
                    'pl' => 'Organizowanie niezbędnych pozwoleń na kręcenie w lokacjach zewnętrznych lub publicznych.',
                    'en' => 'Arranging necessary permits for filming in external or public locations.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7868,
                'name' => json_encode([
                    'pl' => 'Weryfikacja zgodności działań produkcji z lokalnymi przepisami i regulacjami.',
                    'en' => 'Verifying production activities comply with local laws and regulations.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7869,
                'name' => json_encode([
                    'pl' => 'Utrzymywanie kontaktu z instytucjami i urzędami, które odpowiadają za wydawanie pozwoleń.',
                    'en' => 'Maintaining contact with institutions and offices responsible for issuing permits.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7870,
                'name' => json_encode([
                    'pl' => 'Koordynacja działań związanych z zapewnieniem bezpieczeństwa na planie, w tym organizacja ochrony i ubezpieczeń.',
                    'en' => 'Coordinating actions to ensure safety on set, including arranging security and insurance.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7871,
                'name' => json_encode([
                    'pl' => 'Przestrzeganie zasad BHP oraz zapewnienie dostępności sprzętu ratunkowego, apteczek i gaśnic.',
                    'en' => 'Adhering to health and safety regulations and ensuring availability of emergency equipment, first aid kits, and fire extinguishers.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7872,
                'name' => json_encode([
                    'pl' => 'Upewnienie się, że wszyscy członkowie ekipy są poinformowani o zasadach bezpieczeństwa i ich przestrzegają.',
                    'en' => 'Ensuring all crew members are informed of and adhere to safety rules.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7873,
                'name' => json_encode([
                    'pl' => 'Organizowanie dostaw i odbioru sprzętu niezbędnego do realizacji zdjęć, takiego jak kamery, oświetlenie, dźwięk.',
                    'en' => 'Organizing delivery and pickup of equipment needed for shooting, such as cameras, lighting, and sound.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7874,
                'name' => json_encode([
                    'pl' => 'Monitorowanie wypożyczeń sprzętu oraz dbanie o jego sprawność i terminowy zwrot do dostawców.',
                    'en' => 'Monitoring equipment rentals and ensuring its functionality and timely return to suppliers.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7875,
                'name' => json_encode([
                    'pl' => 'Współpraca z technikami i operatorami, aby zapewnić dostępność sprzętu na każdym etapie produkcji.',
                    'en' => 'Collaborating with technicians and operators to ensure equipment availability at every production stage.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7876,
                'name' => json_encode([
                    'pl' => 'Organizowanie posiłków i przekąsek dla ekipy na planie, dbanie o różnorodność posiłków i ich dostępność.',
                    'en' => 'Arranging meals and snacks for the crew on set, ensuring meal variety and availability.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7877,
                'name' => json_encode([
                    'pl' => 'Koordynowanie harmonogramu posiłków zgodnie z planem dnia zdjęciowego.',
                    'en' => 'Coordinating meal schedule according to the daily shooting plan.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7878,
                'name' => json_encode([
                    'pl' => 'Utrzymywanie kontaktu z dostawcami cateringu oraz dostosowywanie zamówień do potrzeb ekipy.',
                    'en' => 'Maintaining contact with catering suppliers and adjusting orders to meet crew needs.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7879,
                'name' => json_encode([
                    'pl' => 'Koordynacja działań scenograficznych, monitorowanie przygotowania dekoracji, ustawienia rekwizytów.',
                    'en' => 'Coordinating set design activities, monitoring decoration setup, and arranging props.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7880,
                'name' => json_encode([
                    'pl' => 'Zapewnienie, że wszystkie potrzebne rekwizyty są dostępne i gotowe na czas.',
                    'en' => 'Ensuring all necessary props are available and ready on time.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7881,
                'name' => json_encode([
                    'pl' => 'Współpraca z działem scenografii i działem artystycznym w celu realizacji wizji reżysera.',
                    'en' => 'Collaborating with the set design and art departments to fulfill the director’s vision.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7882,
                'name' => json_encode([
                    'pl' => 'Monitorowanie postępu prac na planie, kontrola nad czasem realizacji poszczególnych zadań.',
                    'en' => 'Monitoring work progress on set and controlling task completion times.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7883,
                'name' => json_encode([
                    'pl' => 'Informowanie kierownika produkcji o ewentualnych opóźnieniach i proponowanie rozwiązań.',
                    'en' => 'Informing the production manager of any delays and suggesting solutions.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7884,
                'name' => json_encode([
                    'pl' => 'Współpraca z reżyserem, aby zapewnić efektywną realizację scen zgodnie z planem produkcji.',
                    'en' => 'Collaborating with the director to ensure efficient scene execution in line with the production plan.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7885,
                'name' => json_encode([
                    'pl' => 'Utrzymywanie kontaktów z firmami wypożyczającymi sprzęt, dostawcami usług oraz podwykonawcami.',
                    'en' => 'Maintaining contact with equipment rental companies, service providers, and subcontractors.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7886,
                'name' => json_encode([
                    'pl' => 'Organizowanie spotkań i konsultacji z lokalnymi urzędami oraz właścicielami lokacji.',
                    'en' => 'Organizing meetings and consultations with local authorities and location owners.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7887,
                'name' => json_encode([
                    'pl' => 'Zapewnienie płynnej współpracy z podmiotami zewnętrznymi oraz rozwiązywanie ewentualnych konfliktów.',
                    'en' => 'Ensuring smooth collaboration with external entities and resolving potential conflicts.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7888,
                'name' => json_encode([
                    'pl' => 'Wspieranie działań promocyjnych związanych z produkcją, takich jak tworzenie materiałów na media społecznościowe.',
                    'en' => 'Supporting promotional activities related to the production, such as creating social media content.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7889,
                'name' => json_encode([
                    'pl' => 'Organizowanie sesji zdjęciowych na planie, przygotowywanie materiałów prasowych.',
                    'en' => 'Organizing on-set photoshoots and preparing press materials.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7890,
                'name' => json_encode([
                    'pl' => 'Koordynacja działań PR-owych, jeśli jest to częścią strategii promocji produkcji.',
                    'en' => 'Coordinating PR activities if it is part of the production’s promotional strategy.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7891,
                'name' => json_encode([
                    'pl' => 'Sporządzanie codziennych raportów z postępów produkcji, takich jak raporty z planu zdjęciowego.',
                    'en' => 'Preparing daily production progress reports, such as shooting day reports.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7892,
                'name' => json_encode([
                    'pl' => 'Przygotowywanie raportów końcowych dotyczących budżetu, realizacji planu oraz osiągniętych wyników.',
                    'en' => 'Preparing final reports on budget, plan execution, and achieved results.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7893,
                'name' => json_encode([
                    'pl' => 'Dostarczanie informacji zwrotnych kierownikowi produkcji i pomoc w wyciąganiu wniosków na przyszłość.',
                    'en' => 'Providing feedback to the production manager and assisting in drawing conclusions for future projects.'
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
            $SPECJALISTA_DO_SPRAW_ZARZĄDZANIA,
            $SEKRETARKA_W_KANCELARII_PRAWNEJ,
            $POZOSTALI_SEKRETARZE_PRAWNI,
            $AKREDYTOWANY_ASYSTENT_PARLAMENTARNY,
            $ASYSTENT_DYREKTORA,
            $ASYSTENT_PARLAMENTARNY,
            $ASYSTENT_ZARZĄDU,
            $SEKRETARZ_KONSULARNY,
            $SEKRETARKA_NOTARIALNA,
            $SEKRETARKI_OGOLNE,
            $ASYSTENT_OSOBISTY_CONCIERGE,
            $ASYSTENT_KIEROWNIKA_PRODUKCJI
            ));

        Category::whereId('233')->first()->detailprojects()->attach(collect($inspektor_ochrony_danych)->pluck('id')->toArray());
        Category::whereId('234')->first()->detailprojects()->attach(collect($inspektor_obrotu_leki)->pluck('id')->toArray());
        Category::whereId('235')->first()->detailprojects()->attach(collect($SPECJALISTA_DO_SPRAW_BEZPIECZEŃSTWA_WEWNĘTRZNEGO)->pluck('id')->toArray());
        Category::whereId('236')->first()->detailprojects()->attach(collect($SPECJALISTA_DO_SPRAW_CUDZOZIEMCÓW)->pluck('id')->toArray());
        Category::whereId('237')->first()->detailprojects()->attach(collect($SPECJALISTA_DO_SPRAW_OBSLUGI_PROJEKTOW_I_PROGRAMOW)->pluck('id')->toArray());
        Category::whereId('238')->first()->detailprojects()->attach(collect($SPECJALISTA_DO_SPRAW_ZARZĄDZANIA)->pluck('id')->toArray());
        Category::whereId('241')->first()->detailprojects()->attach(collect($SEKRETARKA_W_KANCELARII_PRAWNEJ)->pluck('id')->toArray());
        Category::whereId('242')->first()->detailprojects()->attach(collect($POZOSTALI_SEKRETARZE_PRAWNI)->pluck('id')->toArray());
        Category::whereId('243')->first()->detailprojects()->attach(collect($AKREDYTOWANY_ASYSTENT_PARLAMENTARNY)->pluck('id')->toArray());
        Category::whereId('244')->first()->detailprojects()->attach(collect($ASYSTENT_DYREKTORA)->pluck('id')->toArray());
        Category::whereId('245')->first()->detailprojects()->attach(collect($ASYSTENT_PARLAMENTARNY)->pluck('id')->toArray());
        Category::whereId('246')->first()->detailprojects()->attach(collect($ASYSTENT_ZARZĄDU)->pluck('id')->toArray());
        Category::whereId('247')->first()->detailprojects()->attach(collect($SEKRETARZ_KONSULARNY)->pluck('id')->toArray());
        Category::whereId('248')->first()->detailprojects()->attach(collect($SEKRETARKA_NOTARIALNA)->pluck('id')->toArray());
        Category::whereId('249')->first()->detailprojects()->attach(collect($SEKRETARKI_OGOLNE)->pluck('id')->toArray());
        Category::whereId('250')->first()->detailprojects()->attach(collect($ASYSTENT_OSOBISTY_CONCIERGE)->pluck('id')->toArray());
        Category::whereId('251')->first()->detailprojects()->attach(collect($ASYSTENT_KIEROWNIKA_PRODUKCJI)->pluck('id')->toArray());
    }
}
