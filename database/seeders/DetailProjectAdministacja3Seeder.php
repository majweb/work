<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class DetailProjectAdministacja3Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Schema::disableForeignKeyConstraints();

        $PRACOWNIK_DO_SPRAW_EWIDENCJI_LUDNOŚCI = [
            [
                'id' => 7894,
                'name' => json_encode([
                    'pl' => 'Rejestrowanie nowo zameldowanych osób oraz aktualizacja danych osób zmieniających miejsce zamieszkania.',
                    'en' => 'Registering newly registered individuals and updating data for those changing their place of residence.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7895,
                'name' => json_encode([
                    'pl' => 'Wprowadzanie zmian w danych osobowych, takich jak nazwisko, stan cywilny, adres zamieszkania.',
                    'en' => 'Entering changes in personal data, such as surname, marital status, and residence address.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7896,
                'name' => json_encode([
                    'pl' => 'Przeprowadzanie aktualizacji danych mieszkańców na podstawie dostarczonych dokumentów lub informacji z innych instytucji.',
                    'en' => 'Updating residents\' data based on provided documents or information from other institutions.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7897,
                'name' => json_encode([
                    'pl' => 'Prowadzenie i zarządzanie bazą danych dotyczących mieszkańców danej jednostki administracyjnej.',
                    'en' => 'Maintaining and managing the database concerning the residents of a given administrative unit.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7898,
                'name' => json_encode([
                    'pl' => 'Tworzenie i utrzymywanie rejestrów mieszkańców zgodnie z przepisami dotyczącymi ewidencji ludności.',
                    'en' => 'Creating and maintaining resident registers in accordance with population registration regulations.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7899,
                'name' => json_encode([
                    'pl' => 'Regularne aktualizowanie bazy danych na podstawie nowych zgłoszeń i zmian wprowadzanych przez mieszkańców.',
                    'en' => 'Regularly updating the database based on new registrations and changes made by residents.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7900,
                'name' => json_encode([
                    'pl' => 'Przygotowywanie i wydawanie zaświadczeń dotyczących zameldowania, liczby osób zameldowanych pod danym adresem, potwierdzenia danych osobowych itp.',
                    'en' => 'Preparing and issuing certificates regarding registration, the number of individuals registered at a given address, confirmation of personal data, etc.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7901,
                'name' => json_encode([
                    'pl' => 'Wydawanie zaświadczeń o zameldowaniu dla osób ubiegających się o dowód osobisty, prawo jazdy lub inne dokumenty wymagające potwierdzenia miejsca zamieszkania.',
                    'en' => 'Issuing registration certificates for individuals applying for ID cards, driving licenses, or other documents requiring proof of residence.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7902,
                'name' => json_encode([
                    'pl' => 'Obsługa wniosków o wydanie zaświadczeń oraz weryfikacja danych wnioskodawców.',
                    'en' => 'Handling requests for certificates and verifying the data of applicants.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7903,
                'name' => json_encode([
                    'pl' => 'Obsługa zgłoszeń o zameldowaniu na pobyt stały lub czasowy oraz wymeldowaniu z miejsca zamieszkania.',
                    'en' => 'Handling notifications of permanent or temporary residence registration and deregistration from a place of residence.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7904,
                'name' => json_encode([
                    'pl' => 'Weryfikacja dokumentów i danych dostarczonych przez mieszkańców oraz wprowadzanie ich do rejestru ewidencji ludności.',
                    'en' => 'Verifying documents and data provided by residents and entering them into the population register.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7905,
                'name' => json_encode([
                    'pl' => 'Wyjaśnianie procedur i wymogów związanych z zameldowaniem i wymeldowaniem.',
                    'en' => 'Explaining the procedures and requirements related to registration and deregistration.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7906,
                'name' => json_encode([
                    'pl' => 'Przekazywanie informacji dotyczących ewidencji ludności do instytucji, takich jak policja, sądy, urzędy skarbowe i inne organy państwowe.',
                    'en' => 'Transmitting information regarding population registration to institutions such as the police, courts, tax offices, and other state authorities.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7907,
                'name' => json_encode([
                    'pl' => 'Współpraca z instytucjami rządowymi i samorządowymi w zakresie udostępniania danych ewidencyjnych w zgodzie z przepisami prawa.',
                    'en' => 'Cooperating with government and local authorities regarding the provision of population registration data in accordance with legal regulations.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7908,
                'name' => json_encode([
                    'pl' => 'Wymiana informacji z urzędami stanu cywilnego w sprawach dotyczących zmian danych osobowych, takich jak urodzenia, śluby, rozwody czy zgony.',
                    'en' => 'Exchanging information with civil registry offices regarding changes in personal data such as births, marriages, divorces, or deaths.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7909,
                'name' => json_encode([
                    'pl' => 'Korzystanie z systemów informatycznych, takich jak PESEL czy systemy gminne, do wprowadzania, aktualizowania i przetwarzania danych mieszkańców.',
                    'en' => 'Using IT systems such as PESEL or municipal systems for entering, updating, and processing resident data.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7910,
                'name' => json_encode([
                    'pl' => 'Wprowadzanie informacji o zameldowaniach, wymeldowaniach, zmianach danych osobowych i innych zdarzeniach dotyczących ewidencji ludności.',
                    'en' => 'Entering information about registrations, deregistrations, changes in personal data, and other events related to population registration.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7911,
                'name' => json_encode([
                    'pl' => 'Aktualizowanie danych i monitorowanie ich poprawności w systemach ewidencyjnych.',
                    'en' => 'Updating data and monitoring its accuracy in registration systems.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7912,
                'name' => json_encode([
                    'pl' => 'Przestrzeganie zasad RODO oraz innych przepisów dotyczących ochrony danych osobowych w zakresie przetwarzania danych mieszkańców.',
                    'en' => 'Adhering to the principles of GDPR and other regulations regarding the protection of personal data in processing residents\' data.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7913,
                'name' => json_encode([
                    'pl' => 'Ochrona prywatności i poufności informacji osobowych przetwarzanych w ramach ewidencji ludności.',
                    'en' => 'Protecting the privacy and confidentiality of personal information processed within population registration.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7914,
                'name' => json_encode([
                    'pl' => 'Przestrzeganie wewnętrznych regulacji i polityk ochrony danych w jednostce administracyjnej.',
                    'en' => 'Complying with internal regulations and data protection policies in the administrative unit.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7915,
                'name' => json_encode([
                    'pl' => 'Sporządzanie okresowych raportów i zestawień dotyczących liczby mieszkańców, struktury demograficznej, migracji i innych danych statystycznych.',
                    'en' => 'Preparing periodic reports and summaries regarding the number of residents, demographic structure, migration, and other statistical data.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7916,
                'name' => json_encode([
                    'pl' => 'Tworzenie zestawień na potrzeby urzędów, instytucji i organizacji wymagających danych dotyczących populacji lokalnej.',
                    'en' => 'Creating summaries for offices, institutions, and organizations requiring data about the local population.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7917,
                'name' => json_encode([
                    'pl' => 'Przekazywanie raportów kierownictwu oraz współpraca z działami odpowiedzialnymi za analizy statystyczne.',
                    'en' => 'Submitting reports to management and collaborating with departments responsible for statistical analyses.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7918,
                'name' => json_encode([
                    'pl' => 'Udzielanie informacji dotyczących procedur zameldowania, wymeldowania, zmiany danych osobowych oraz innych spraw związanych z ewidencją ludności.',
                    'en' => 'Providing information about the procedures for registration, deregistration, changing personal data, and other matters related to population registration.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7919,
                'name' => json_encode([
                    'pl' => 'Wyjaśnianie procedur administracyjnych oraz wymaganych dokumentów osobom kontaktującym się z urzędem.',
                    'en' => 'Explaining administrative procedures and required documents to individuals contacting the office.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7920,
                'name' => json_encode([
                    'pl' => 'Odpowiadanie na pytania i wątpliwości mieszkańców dotyczące przepisów ewidencyjnych.',
                    'en' => 'Responding to residents\' questions and concerns regarding registration regulations.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7921,
                'name' => json_encode([
                    'pl' => 'Sprawdzanie poprawności i kompletności danych osobowych wprowadzanych do systemu ewidencyjnego.',
                    'en' => 'Checking the accuracy and completeness of personal data entered into the registration system.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7922,
                'name' => json_encode([
                    'pl' => 'Korygowanie błędów w danych osobowych i adresowych oraz wprowadzanie poprawek na podstawie zgłoszeń mieszkańców.',
                    'en' => 'Correcting errors in personal and address data and making amendments based on residents\' reports.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7923,
                'name' => json_encode([
                    'pl' => 'Przeprowadzanie kontroli jakości danych i eliminowanie nieścisłości.',
                    'en' => 'Conducting data quality checks and eliminating discrepancies.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7924,
                'name' => json_encode([
                    'pl' => 'Przyjmowanie, wysyłanie i archiwizacja korespondencji dotyczącej spraw związanych z ewidencją ludności.',
                    'en' => 'Receiving, sending, and archiving correspondence related to matters concerning population registration.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7925,
                'name' => json_encode([
                    'pl' => 'Przygotowywanie odpowiedzi na zapytania instytucji, organizacji i osób prywatnych dotyczące danych ewidencyjnych.',
                    'en' => 'Preparing responses to inquiries from institutions, organizations, and private individuals regarding registration data.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7926,
                'name' => json_encode([
                    'pl' => 'Dokumentowanie korespondencji oraz dbanie o zgodność z polityką ochrony danych.',
                    'en' => 'Documenting correspondence and ensuring compliance with data protection policies.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7927,
                'name' => json_encode([
                    'pl' => 'Regularne uczestnictwo w szkoleniach dotyczących ewidencji ludności, ochrony danych osobowych oraz przepisów administracyjnych.',
                    'en' => 'Regularly participating in training related to population registration, data protection, and administrative regulations.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7928,
                'name' => json_encode([
                    'pl' => 'Aktualizowanie wiedzy na temat zmieniających się przepisów prawa dotyczących ewidencji ludności.',
                    'en' => 'Updating knowledge about changing laws regarding population registration.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7929,
                'name' => json_encode([
                    'pl' => 'Dostosowanie procedur pracy do nowych przepisów i zmian w zakresie ochrony danych osobowych.',
                    'en' => 'Adapting work procedures to new regulations and changes in data protection.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7930,
                'name' => json_encode([
                    'pl' => 'Prowadzenie archiwum dokumentacji związanej z ewidencją ludności, w tym zgłoszeń meldunkowych, wniosków o zaświadczenia, korespondencji.',
                    'en' => 'Maintaining an archive of documentation related to population registration, including registration notifications, requests for certificates, and correspondence.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7931,
                'name' => json_encode([
                    'pl' => 'Przestrzeganie terminów archiwizacji i dbanie o zgodność z przepisami dotyczącymi przechowywania dokumentów.',
                    'en' => 'Adhering to archiving deadlines and ensuring compliance with regulations regarding document retention.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7932,
                'name' => json_encode([
                    'pl' => 'Przekazywanie dokumentów do archiwum oraz dbanie o porządek i dostępność dokumentacji.',
                    'en' => 'Transferring documents to the archive and ensuring the order and accessibility of documentation.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7933,
                'name' => json_encode([
                    'pl' => 'Przekazywanie i odbieranie informacji dotyczących zmian stanu cywilnego mieszkańców (urodzenia, zgony, śluby).',
                    'en' => 'Transmitting and receiving information regarding changes in residents\' civil status (births, deaths, marriages).'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7934,
                'name' => json_encode([
                    'pl' => 'Aktualizowanie rejestrów ewidencji ludności na podstawie dokumentów z urzędów stanu cywilnego.',
                    'en' => 'Updating population registers based on documents from civil registry offices.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7935,
                'name' => json_encode([
                    'pl' => 'Współpraca z urzędem stanu cywilnego w zakresie potwierdzania i weryfikacji danych osobowych.',
                    'en' => 'Cooperating with civil registry offices regarding the confirmation and verification of personal data.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7936,
                'name' => json_encode([
                    'pl' => 'Sporządzanie rejestrów wyborców na podstawie danych ewidencji ludności.',
                    'en' => 'Preparing voter registers based on population registration data.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7937,
                'name' => json_encode([
                    'pl' => 'Przygotowywanie i aktualizowanie spisów wyborców zgodnie z procedurami wyborczymi.',
                    'en' => 'Preparing and updating voter lists in accordance with electoral procedures.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7938,
                'name' => json_encode([
                    'pl' => 'Współpraca z komisjami wyborczymi oraz innymi organami odpowiedzialnymi za organizację wyborów.',
                    'en' => 'Cooperating with electoral commissions and other bodies responsible for organizing elections.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
        ];
        $PRACOWNIK_BIUROWY = [
            [
                'id' => 7939,
                'name' => json_encode([
                    'pl' => 'Przyjmowanie, sortowanie i przechowywanie dokumentów, dbając o ich odpowiednią organizację i dostępność.',
                    'en' => 'Receiving, sorting, and storing documents, ensuring their proper organization and accessibility.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7940,
                'name' => json_encode([
                    'pl' => 'Tworzenie systemu ewidencji dokumentacji i dbanie o porządek w archiwum.',
                    'en' => 'Creating a documentation registry system and maintaining order in the archive.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7941,
                'name' => json_encode([
                    'pl' => 'Przestrzeganie przepisów dotyczących ochrony danych osobowych i przechowywania dokumentów.',
                    'en' => 'Complying with regulations regarding personal data protection and document storage.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7942,
                'name' => json_encode([
                    'pl' => 'Odbieranie, segregowanie i wysyłanie korespondencji przychodzącej i wychodzącej.',
                    'en' => 'Receiving, sorting, and sending incoming and outgoing correspondence.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7943,
                'name' => json_encode([
                    'pl' => 'Przygotowywanie dokumentów do wysyłki, w tym listów, paczek i przesyłek kurierskich.',
                    'en' => 'Preparing documents for dispatch, including letters, packages, and courier shipments.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7944,
                'name' => json_encode([
                    'pl' => 'Rejestrowanie korespondencji oraz dbanie o jej archiwizację i zgodność z procedurami biurowymi.',
                    'en' => 'Registering correspondence and ensuring its archiving and compliance with office procedures.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7945,
                'name' => json_encode([
                    'pl' => 'Sporządzanie dokumentów biurowych, takich jak raporty, zestawienia, notatki służbowe oraz listy kontrolne.',
                    'en' => 'Preparing office documents, such as reports, summaries, memos, and checklists.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7946,
                'name' => json_encode([
                    'pl' => 'Redagowanie pism urzędowych i firmowych oraz dbanie o ich poprawność językową i formalną.',
                    'en' => 'Editing official and company letters, ensuring their linguistic and formal correctness.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7947,
                'name' => json_encode([
                    'pl' => 'Tworzenie i edycja prezentacji, tabel oraz dokumentów niezbędnych dla innych działów firmy.',
                    'en' => 'Creating and editing presentations, tables, and documents necessary for other departments in the company.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7948,
                'name' => json_encode([
                    'pl' => 'Witanie gości, udzielanie podstawowych informacji o działalności firmy oraz kierowanie ich do odpowiednich działów.',
                    'en' => 'Welcoming guests, providing basic information about the company’s activities, and directing them to the appropriate departments.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7949,
                'name' => json_encode([
                    'pl' => 'Odbieranie telefonów, przekazywanie wiadomości i odpowiadanie na zapytania e-mailowe.',
                    'en' => 'Answering phone calls, relaying messages, and responding to email inquiries.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7950,
                'name' => json_encode([
                    'pl' => 'Dbanie o profesjonalny wizerunek firmy w kontaktach z klientami, dostawcami i innymi interesariuszami.',
                    'en' => 'Maintaining a professional image of the company in dealings with clients, suppliers, and other stakeholders.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7951,
                'name' => json_encode([
                    'pl' => 'Organizacja harmonogramu spotkań, w tym rezerwacja sal konferencyjnych i zapewnienie ich dostępności.',
                    'en' => 'Organizing the meeting schedule, including reserving conference rooms and ensuring their availability.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7952,
                'name' => json_encode([
                    'pl' => 'Koordynowanie terminów i przypominanie o nadchodzących spotkaniach, wydarzeniach i ważnych terminach.',
                    'en' => 'Coordinating dates and reminding about upcoming meetings, events, and important deadlines.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7953,
                'name' => json_encode([
                    'pl' => 'Współpraca z działami w celu synchronizacji terminów i działań.',
                    'en' => 'Cooperating with departments to synchronize schedules and activities.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7954,
                'name' => json_encode([
                    'pl' => 'Przygotowywanie materiałów na spotkania, w tym agend, raportów i notatek.',
                    'en' => 'Preparing materials for meetings, including agendas, reports, and notes.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7955,
                'name' => json_encode([
                    'pl' => 'Obsługa spotkań, dbanie o niezbędne wyposażenie, np. sprzęt multimedialny, catering itp.',
                    'en' => 'Managing meetings, ensuring necessary equipment, e.g., multimedia equipment, catering, etc.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7956,
                'name' => json_encode([
                    'pl' => 'Sporządzanie protokołów i rozsyłanie ustaleń ze spotkań do uczestników.',
                    'en' => 'Drafting minutes and distributing meeting decisions to participants.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7957,
                'name' => json_encode([
                    'pl' => 'Współpraca z działem księgowości, HR, marketingu i innymi działami w zakresie bieżących zadań administracyjnych.',
                    'en' => 'Cooperating with the accounting, HR, marketing, and other departments on ongoing administrative tasks.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7958,
                'name' => json_encode([
                    'pl' => 'Pomoc w sporządzaniu dokumentacji kadrowej, przygotowywanie raportów i zestawień na potrzeby innych działów.',
                    'en' => 'Assisting in preparing HR documentation, preparing reports and summaries for other departments.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7959,
                'name' => json_encode([
                    'pl' => 'Wspieranie kierownictwa w organizacji zadań biurowych i realizacji bieżących projektów.',
                    'en' => 'Supporting management in organizing office tasks and executing ongoing projects.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7960,
                'name' => json_encode([
                    'pl' => 'Obsługa drukarek, kserokopiarek, skanerów oraz innych urządzeń biurowych.',
                    'en' => 'Operating printers, copiers, scanners, and other office equipment.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7961,
                'name' => json_encode([
                    'pl' => 'Rozwiązywanie drobnych problemów technicznych oraz zgłaszanie usterek do działu IT lub serwisu technicznego.',
                    'en' => 'Resolving minor technical issues and reporting malfunctions to the IT department or technical service.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7962,
                'name' => json_encode([
                    'pl' => 'Dbanie o odpowiednią ilość materiałów eksploatacyjnych, takich jak toner, papier itp.',
                    'en' => 'Ensuring an adequate supply of consumables, such as toner, paper, etc.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7963,
                'name' => json_encode([
                    'pl' => 'Monitorowanie zapasów materiałów biurowych i składanie zamówień, aby zapewnić ich ciągłość.',
                    'en' => 'Monitoring supplies of office materials and placing orders to ensure their continuity.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7964,
                'name' => json_encode([
                    'pl' => 'Współpraca z dostawcami materiałów biurowych, negocjowanie warunków i kontrola dostaw.',
                    'en' => 'Cooperating with suppliers of office materials, negotiating terms, and monitoring deliveries.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7965,
                'name' => json_encode([
                    'pl' => 'Dbanie o porządek w biurze, zapewnienie dostępu do niezbędnych zasobów i dbanie o estetykę przestrzeni biurowej.',
                    'en' => 'Maintaining order in the office, ensuring access to necessary resources, and taking care of the aesthetics of the office space.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7966,
                'name' => json_encode([
                    'pl' => 'Pomoc w ewidencji wydatków biurowych i przygotowywanie zestawień finansowych na potrzeby rozliczeń.',
                    'en' => 'Assisting in the recording of office expenses and preparing financial summaries for settlements.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7967,
                'name' => json_encode([
                    'pl' => 'Organizacja dokumentów finansowych, takich jak faktury, rachunki i rozliczenia delegacji.',
                    'en' => 'Organizing financial documents, such as invoices, receipts, and travel expense reports.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7968,
                'name' => json_encode([
                    'pl' => 'Współpraca z działem księgowości w zakresie codziennych zadań finansowych.',
                    'en' => 'Collaborating with the accounting department on daily financial tasks.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7969,
                'name' => json_encode([
                    'pl' => 'Pomoc w organizacji szkoleń, konferencji, wyjazdów integracyjnych oraz innych wydarzeń firmowych.',
                    'en' => 'Assisting in organizing training sessions, conferences, team-building trips, and other corporate events.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7970,
                'name' => json_encode([
                    'pl' => 'Współpraca z zewnętrznymi firmami w zakresie rezerwacji miejsc, cateringu i innych usług eventowych.',
                    'en' => 'Cooperating with external companies for reservations, catering, and other event services.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7971,
                'name' => json_encode([
                    'pl' => 'Koordynacja harmonogramu wydarzeń oraz informowanie uczestników o szczegółach organizacyjnych.',
                    'en' => 'Coordinating the event schedule and informing participants about organizational details.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7972,
                'name' => json_encode([
                    'pl' => 'Udzielanie informacji dotyczących polityki firmy, procedur wewnętrznych oraz ogólnych zasad pracy w biurze.',
                    'en' => 'Providing information regarding company policy, internal procedures, and general office work principles.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7973,
                'name' => json_encode([
                    'pl' => 'Pomoc nowym pracownikom w adaptacji do środowiska pracy, przedstawianie zasad działania biura.',
                    'en' => 'Assisting new employees in adapting to the work environment by presenting office procedures.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7974,
                'name' => json_encode([
                    'pl' => 'Koordynacja działań między zespołami i zapewnienie, że wszyscy pracownicy mają dostęp do niezbędnych informacji.',
                    'en' => 'Coordinating actions between teams and ensuring that all employees have access to necessary information.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7975,
                'name' => json_encode([
                    'pl' => 'Przestrzeganie przepisów dotyczących ochrony danych osobowych (RODO) i zasad poufności w zakresie dokumentacji.',
                    'en' => 'Complying with regulations regarding personal data protection (GDPR) and confidentiality principles regarding documentation.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7976,
                'name' => json_encode([
                    'pl' => 'Odpowiednie przechowywanie dokumentów wrażliwych i dbanie o ich bezpieczeństwo.',
                    'en' => 'Properly storing sensitive documents and ensuring their security.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7977,
                'name' => json_encode([
                    'pl' => 'Przestrzeganie zasad polityki prywatności i ochrona poufnych informacji firmy oraz klientów.',
                    'en' => 'Adhering to privacy policy and protecting confidential information of the company and clients.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7978,
                'name' => json_encode([
                    'pl' => 'Opracowywanie i aktualizacja procedur biurowych i standardów działania.',
                    'en' => 'Developing and updating office procedures and operating standards.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7979,
                'name' => json_encode([
                    'pl' => 'Przestrzeganie polityk firmy i dbanie o zgodność działań administracyjnych z obowiązującymi przepisami.',
                    'en' => 'Following company policies and ensuring compliance of administrative activities with applicable regulations.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7980,
                'name' => json_encode([
                    'pl' => 'Udział w wdrażaniu nowych procedur administracyjnych i szkolenie pracowników z zakresu ich stosowania.',
                    'en' => 'Participating in the implementation of new administrative procedures and training employees in their application.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7981,
                'name' => json_encode([
                    'pl' => 'Monitorowanie obiegu dokumentów w firmie oraz ich przekazywanie do odpowiednich działów.',
                    'en' => 'Monitoring the flow of documents in the company and forwarding them to the relevant departments.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7982,
                'name' => json_encode([
                    'pl' => 'Kontrola nad zgodnością dokumentacji z procedurami firmy i dbałość o terminowość.',
                    'en' => 'Monitoring compliance of documentation with company procedures and ensuring timeliness.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7983,
                'name' => json_encode([
                    'pl' => 'Ułatwianie przepływu informacji wewnątrz organizacji i koordynacja między działami.',
                    'en' => 'Facilitating the flow of information within the organization and coordinating between departments.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7984,
                'name' => json_encode([
                    'pl' => 'Regularne uczestnictwo w szkoleniach i kursach z zakresu obsługi biura, oprogramowania, ochrony danych oraz efektywności pracy.',
                    'en' => 'Regular participation in training and courses in office management, software, data protection, and work efficiency.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7985,
                'name' => json_encode([
                    'pl' => 'Aktualizowanie wiedzy na temat nowych narzędzi biurowych, przepisów i procedur administracyjnych.',
                    'en' => 'Updating knowledge about new office tools, regulations, and administrative procedures.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7986,
                'name' => json_encode([
                    'pl' => 'Stałe doskonalenie swoich umiejętności zawodowych oraz wymiana doświadczeń z innymi pracownikami biurowymi.',
                    'en' => 'Constantly improving professional skills and exchanging experiences with other office staff.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
        ];
        $TECHNIK_PRAC_BIUROWYCH = [
            [
                'id' => 7987,
                'name' => json_encode([
                    'pl' => 'Prowadzenie rejestrów dokumentacji, segregowanie i przechowywanie dokumentów w sposób uporządkowany.',
                    'en' => 'Maintaining records of documentation, sorting and storing documents in an organized manner.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7988,
                'name' => json_encode([
                    'pl' => 'Tworzenie systemów archiwizacji, które zapewniają łatwy dostęp do dokumentów dla pracowników.',
                    'en' => 'Creating archiving systems that ensure easy access to documents for employees.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7989,
                'name' => json_encode([
                    'pl' => 'Zapewnienie zgodności archiwizacji z przepisami dotyczącymi ochrony danych i wewnętrznymi procedurami.',
                    'en' => 'Ensuring compliance of archiving with data protection regulations and internal procedures.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7990,
                'name' => json_encode([
                    'pl' => 'Przyjmowanie, sortowanie i wysyłanie korespondencji przychodzącej i wychodzącej.',
                    'en' => 'Receiving, sorting, and sending incoming and outgoing correspondence.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7991,
                'name' => json_encode([
                    'pl' => 'Obsługa przesyłek kurierskich, listów oraz paczek, w tym przygotowanie dokumentów do wysyłki.',
                    'en' => 'Handling courier shipments, letters, and packages, including preparing documents for shipping.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7992,
                'name' => json_encode([
                    'pl' => 'Rejestrowanie korespondencji i dbanie o jej terminowe dostarczanie do odpowiednich działów lub osób.',
                    'en' => 'Registering correspondence and ensuring its timely delivery to the appropriate departments or individuals.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7993,
                'name' => json_encode([
                    'pl' => 'Sporządzanie dokumentów, takich jak raporty, notatki, zestawienia oraz dokumenty wewnętrzne.',
                    'en' => 'Preparing documents such as reports, notes, summaries, and internal documents.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7994,
                'name' => json_encode([
                    'pl' => 'Redagowanie pism urzędowych i służbowych, dbając o poprawność językową i formalną.',
                    'en' => 'Editing official and business letters, ensuring linguistic and formal correctness.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7995,
                'name' => json_encode([
                    'pl' => 'Współpraca z innymi działami w zakresie tworzenia dokumentów i uzupełniania danych.',
                    'en' => 'Collaborating with other departments in creating documents and supplementing data.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7996,
                'name' => json_encode([
                    'pl' => 'Obsługa drukarek, kserokopiarek, skanerów, telefonów oraz innych urządzeń biurowych.',
                    'en' => 'Operating printers, copiers, scanners, phones, and other office equipment.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7997,
                'name' => json_encode([
                    'pl' => 'Rozwiązywanie drobnych problemów technicznych z urządzeniami oraz zgłaszanie usterek.',
                    'en' => 'Resolving minor technical issues with devices and reporting malfunctions.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7998,
                'name' => json_encode([
                    'pl' => 'Utrzymywanie urządzeń biurowych w dobrym stanie i uzupełnianie materiałów eksploatacyjnych, takich jak toner, papier.',
                    'en' => 'Maintaining office equipment in good condition and replenishing consumables such as toner and paper.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7999,
                'name' => json_encode([
                    'pl' => 'Organizacja harmonogramu spotkań, rezerwacja sal konferencyjnych i dbanie o dostępność zasobów.',
                    'en' => 'Organizing the meeting schedule, booking conference rooms, and ensuring resource availability.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8000,
                'name' => json_encode([
                    'pl' => 'Koordynowanie terminów spotkań i przypominanie o kluczowych wydarzeniach.',
                    'en' => 'Coordinating meeting schedules and reminding about key events.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8001,
                'name' => json_encode([
                    'pl' => 'Ustalanie terminów wizyt, konferencji i innych wydarzeń zgodnie z potrzebami biura.',
                    'en' => 'Setting dates for visits, conferences, and other events according to the office’s needs.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8002,
                'name' => json_encode([
                    'pl' => 'Witanie gości biura, udzielanie podstawowych informacji i kierowanie ich do odpowiednich działów.',
                    'en' => 'Welcoming office guests, providing basic information, and directing them to appropriate departments.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8003,
                'name' => json_encode([
                    'pl' => 'Odbieranie telefonów i przekazywanie wiadomości oraz obsługa zapytań e-mailowych.',
                    'en' => 'Answering phones and forwarding messages as well as handling email inquiries.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8004,
                'name' => json_encode([
                    'pl' => 'Dbanie o profesjonalny wizerunek biura w kontakcie z interesariuszami i klientami.',
                    'en' => 'Maintaining a professional image of the office in contact with stakeholders and clients.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8005,
                'name' => json_encode([
                    'pl' => 'Monitorowanie i kontrola obiegu dokumentów pomiędzy działami, dbając o ich terminowe dostarczanie.',
                    'en' => 'Monitoring and controlling the flow of documents between departments, ensuring their timely delivery.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8006,
                'name' => json_encode([
                    'pl' => 'Przekazywanie dokumentów do odpowiednich osób oraz archiwizacja po ich zakończeniu.',
                    'en' => 'Forwarding documents to the appropriate persons and archiving them after completion.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8007,
                'name' => json_encode([
                    'pl' => 'Współpraca z innymi działami, aby zapewnić efektywny przepływ dokumentacji.',
                    'en' => 'Collaborating with other departments to ensure effective documentation flow.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8008,
                'name' => json_encode([
                    'pl' => 'Monitorowanie stanu zapasów biurowych, takich jak papier, długopisy, teczki, oraz składanie zamówień.',
                    'en' => 'Monitoring the stock of office supplies such as paper, pens, folders, and placing orders.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8009,
                'name' => json_encode([
                    'pl' => 'Współpraca z dostawcami, negocjowanie cen i warunków dostaw materiałów biurowych.',
                    'en' => 'Collaborating with suppliers, negotiating prices and terms of delivery of office supplies.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8010,
                'name' => json_encode([
                    'pl' => 'Dbanie o porządek w biurze oraz ułatwienie dostępu do potrzebnych materiałów pracownikom.',
                    'en' => 'Maintaining order in the office and facilitating employees’ access to necessary materials.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8011,
                'name' => json_encode([
                    'pl' => 'Tworzenie podstawowych prezentacji, dokumentów informacyjnych i raportów na potrzeby biura.',
                    'en' => 'Creating basic presentations, informational documents, and reports for the office’s needs.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8012,
                'name' => json_encode([
                    'pl' => 'Uzupełnianie materiałów w oparciu o dostarczone informacje oraz współpraca z zespołem w celu ich przygotowania.',
                    'en' => 'Supplementing materials based on provided information and collaborating with the team to prepare them.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8013,
                'name' => json_encode([
                    'pl' => 'Dbanie o estetykę i spójność wizualną materiałów informacyjnych.',
                    'en' => 'Ensuring the aesthetics and visual consistency of informational materials.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8014,
                'name' => json_encode([
                    'pl' => 'Organizowanie przestrzeni na potrzeby spotkań, zapewnienie potrzebnego wyposażenia oraz cateringu.',
                    'en' => 'Organizing space for meetings, providing necessary equipment and catering.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8015,
                'name' => json_encode([
                    'pl' => 'Koordynacja harmonogramu spotkań i dbanie o dostępność sal konferencyjnych.',
                    'en' => 'Coordinating the meeting schedule and ensuring the availability of conference rooms.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8016,
                'name' => json_encode([
                    'pl' => 'Sporządzanie notatek ze spotkań oraz dystrybucja protokołów do uczestników.',
                    'en' => 'Taking notes during meetings and distributing minutes to participants.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8017,
                'name' => json_encode([
                    'pl' => 'Ewidencjonowanie faktur, rachunków oraz dokumentów związanych z codziennymi wydatkami biurowymi.',
                    'en' => 'Recording invoices, bills, and documents related to daily office expenses.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8018,
                'name' => json_encode([
                    'pl' => 'Pomoc w przygotowywaniu zestawień kosztowych na potrzeby działu finansowego.',
                    'en' => 'Assisting in preparing cost reports for the finance department.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8019,
                'name' => json_encode([
                    'pl' => 'Współpraca z działem księgowości w zakresie rozliczeń i codziennych operacji finansowych biura.',
                    'en' => 'Cooperating with the accounting department in the settlement and daily financial operations of the office.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8020,
                'name' => json_encode([
                    'pl' => 'Przestrzeganie zasad RODO oraz innych przepisów dotyczących ochrony danych osobowych w zakresie dokumentacji biurowej.',
                    'en' => 'Adhering to RODO principles and other regulations regarding the protection of personal data in office documentation.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8021,
                'name' => json_encode([
                    'pl' => 'Odpowiednie przechowywanie dokumentów zawierających dane wrażliwe i dbanie o ich bezpieczeństwo.',
                    'en' => 'Properly storing documents containing sensitive data and ensuring their security.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8022,
                'name' => json_encode([
                    'pl' => 'Utrzymywanie poufności informacji oraz dbanie o ich bezpieczny obieg i archiwizację.',
                    'en' => 'Maintaining confidentiality of information and ensuring their secure circulation and archiving.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8023,
                'name' => json_encode([
                    'pl' => 'Pomoc w opracowywaniu i aktualizowaniu procedur dotyczących działań administracyjnych w biurze.',
                    'en' => 'Assisting in developing and updating procedures related to administrative activities in the office.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8024,
                'name' => json_encode([
                    'pl' => 'Przestrzeganie polityk biurowych i dbanie o zgodność z wewnętrznymi regulacjami firmy.',
                    'en' => 'Adhering to office policies and ensuring compliance with the company’s internal regulations.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8025,
                'name' => json_encode([
                    'pl' => 'Uczestnictwo w szkoleniach i wdrażaniu nowych standardów pracy biurowej.',
                    'en' => 'Participating in training and implementing new standards of office work.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8026,
                'name' => json_encode([
                    'pl' => 'Pomoc w organizacji procesów rekrutacyjnych, takich jak umawianie spotkań rekrutacyjnych i przeglądanie dokumentów kandydatów.',
                    'en' => 'Assisting in organizing recruitment processes, such as scheduling recruitment meetings and reviewing candidates’ documents.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8027,
                'name' => json_encode([
                    'pl' => 'Wsparcie działu kadr w tworzeniu i aktualizacji akt osobowych oraz rejestracji czasu pracy.',
                    'en' => 'Supporting the HR department in creating and updating personnel files and recording working time.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8028,
                'name' => json_encode([
                    'pl' => 'Przygotowywanie podstawowej dokumentacji kadrowej, takiej jak wnioski o urlop czy zwolnienia lekarskie.',
                    'en' => 'Preparing basic personnel documentation, such as leave requests or medical leave.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8029,
                'name' => json_encode([
                    'pl' => 'Dbanie o estetykę biura, organizowanie przestrzeni wspólnych i dbałość o ich porządek.',
                    'en' => 'Taking care of the office aesthetics, organizing common spaces, and maintaining their order.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8030,
                'name' => json_encode([
                    'pl' => 'Monitorowanie pracy firm sprzątających i zgłaszanie ewentualnych uwag dotyczących czystości.',
                    'en' => 'Monitoring the work of cleaning companies and reporting any cleanliness-related comments.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8031,
                'name' => json_encode([
                    'pl' => 'Wspieranie działań mających na celu poprawę ergonomii i komfortu pracy w biurze.',
                    'en' => 'Supporting activities aimed at improving ergonomics and comfort in the office.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8032,
                'name' => json_encode([
                    'pl' => 'Regularne uczestnictwo w szkoleniach z zakresu obsługi biura, oprogramowania biurowego oraz ochrony danych.',
                    'en' => 'Regularly participating in training in office management, office software, and data protection.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8033,
                'name' => json_encode([
                    'pl' => 'Aktualizowanie wiedzy na temat nowych technologii biurowych i przepisów administracyjnych.',
                    'en' => 'Updating knowledge on new office technologies and administrative regulations.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8034,
                'name' => json_encode([
                    'pl' => 'Stałe doskonalenie umiejętności organizacyjnych i administracyjnych oraz wymiana doświadczeń z innymi pracownikami biurowymi.',
                    'en' => 'Continuously improving organizational and administrative skills and sharing experiences with other office staff.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
        ];
        $POZOSTALI_PRACOWNICY_OBSŁUGI_BIUROWEJ = [
            [
                'id' => 8035,
                'name' => json_encode([
                    'pl' => 'Przyjmowanie, sortowanie i wysyłanie korespondencji biurowej oraz obsługa przesyłek kurierskich.',
                    'en' => 'Receiving, sorting, and sending office correspondence and handling courier shipments.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8036,
                'name' => json_encode([
                    'pl' => 'Odbieranie telefonów, przekazywanie wiadomości oraz obsługa zapytań e-mailowych.',
                    'en' => 'Answering phones, relaying messages, and handling email inquiries.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8037,
                'name' => json_encode([
                    'pl' => 'Witanie gości, udzielanie podstawowych informacji i kierowanie ich do odpowiednich osób lub działów.',
                    'en' => 'Welcoming guests, providing basic information, and directing them to the appropriate persons or departments.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8038,
                'name' => json_encode([
                    'pl' => 'Prowadzenie rejestrów dokumentów, archiwizacja dokumentacji zgodnie z procedurami wewnętrznymi.',
                    'en' => 'Maintaining document logs, archiving documentation in accordance with internal procedures.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8039,
                'name' => json_encode([
                    'pl' => 'Tworzenie i utrzymywanie systemu ewidencji dokumentów zapewniającego łatwy dostęp do akt.',
                    'en' => 'Creating and maintaining a document tracking system that ensures easy access to records.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8040,
                'name' => json_encode([
                    'pl' => 'Weryfikacja kompletności i poprawności dokumentów, a także dbanie o ich odpowiednie przechowywanie.',
                    'en' => 'Verifying the completeness and accuracy of documents, as well as ensuring their proper storage.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8041,
                'name' => json_encode([
                    'pl' => 'Tworzenie dokumentów takich jak pisma służbowe, raporty, notatki, zestawienia i prezentacje.',
                    'en' => 'Creating documents such as official letters, reports, notes, summaries, and presentations.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8042,
                'name' => json_encode([
                    'pl' => 'Redagowanie pism oraz dbanie o ich poprawność językową i estetykę.',
                    'en' => 'Editing letters and ensuring their linguistic correctness and aesthetics.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8043,
                'name' => json_encode([
                    'pl' => 'Współpraca z innymi działami w zakresie przygotowywania i edycji dokumentów biurowych.',
                    'en' => 'Collaborating with other departments in preparing and editing office documents.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8044,
                'name' => json_encode([
                    'pl' => 'Monitorowanie zapasów materiałów biurowych i zamawianie niezbędnych zasobów.',
                    'en' => 'Monitoring stock levels of office supplies and ordering necessary resources.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8045,
                'name' => json_encode([
                    'pl' => 'Współpraca z dostawcami materiałów biurowych, kontrola dostaw i negocjowanie cen.',
                    'en' => 'Cooperating with suppliers of office supplies, controlling deliveries, and negotiating prices.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8046,
                'name' => json_encode([
                    'pl' => 'Utrzymywanie porządku w biurze, zapewnienie dostępności materiałów i organizacja przestrzeni roboczej.',
                    'en' => 'Maintaining order in the office, ensuring material availability, and organizing the workspace.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8047,
                'name' => json_encode([
                    'pl' => 'Obsługa drukarek, kserokopiarek, skanerów, telefonów oraz innych urządzeń biurowych.',
                    'en' => 'Operating printers, copiers, scanners, telephones, and other office equipment.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8048,
                'name' => json_encode([
                    'pl' => 'Rozwiązywanie drobnych problemów technicznych oraz zgłaszanie usterek.',
                    'en' => 'Resolving minor technical issues and reporting faults.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8049,
                'name' => json_encode([
                    'pl' => 'Dbanie o zaopatrzenie w materiały eksploatacyjne, np. papier, tonery.',
                    'en' => 'Ensuring supply of consumables such as paper, toners.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8050,
                'name' => json_encode([
                    'pl' => 'Rezerwacja sal konferencyjnych, przygotowanie sprzętu i materiałów na potrzeby spotkań.',
                    'en' => 'Booking conference rooms, preparing equipment and materials for meetings.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8051,
                'name' => json_encode([
                    'pl' => 'Organizacja i obsługa wydarzeń biurowych, np. szkoleń, warsztatów, spotkań firmowych.',
                    'en' => 'Organizing and managing office events, e.g. training sessions, workshops, corporate meetings.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8052,
                'name' => json_encode([
                    'pl' => 'Pomoc w przygotowywaniu materiałów informacyjnych, cateringów i harmonogramów spotkań.',
                    'en' => 'Assisting in preparing informational materials, catering, and meeting schedules.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8053,
                'name' => json_encode([
                    'pl' => 'Koordynacja kalendarzy spotkań i rezerwacja przestrzeni biurowych.',
                    'en' => 'Coordinating meeting calendars and reserving office spaces.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8054,
                'name' => json_encode([
                    'pl' => 'Przypominanie o ważnych terminach, spotkaniach oraz koordynowanie terminarzy poszczególnych pracowników.',
                    'en' => 'Reminding about important deadlines, meetings, and coordinating individual employees’ schedules.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8055,
                'name' => json_encode([
                    'pl' => 'Ustalanie harmonogramów wizyt, konferencji i spotkań.',
                    'en' => 'Scheduling visits, conferences, and meetings.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8056,
                'name' => json_encode([
                    'pl' => 'Ewidencja wydatków biurowych, faktur i innych dokumentów związanych z codziennymi wydatkami biurowymi.',
                    'en' => 'Recording office expenses, invoices, and other documents related to daily office expenditures.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8057,
                'name' => json_encode([
                    'pl' => 'Pomoc w przygotowywaniu zestawień finansowych oraz dokumentacji rozliczeniowej.',
                    'en' => 'Assisting in preparing financial summaries and settlement documentation.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8058,
                'name' => json_encode([
                    'pl' => 'Współpraca z działem księgowości w zakresie codziennych operacji finansowych.',
                    'en' => 'Cooperating with the accounting department in daily financial operations.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8059,
                'name' => json_encode([
                    'pl' => 'Pomoc w tworzeniu dokumentów, raportów oraz materiałów na potrzeby różnych działów.',
                    'en' => 'Assisting in creating documents, reports, and materials for various departments.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8060,
                'name' => json_encode([
                    'pl' => 'Wspieranie działu HR, księgowości i innych działów w zadaniach administracyjnych.',
                    'en' => 'Supporting the HR, accounting, and other departments in administrative tasks.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8061,
                'name' => json_encode([
                    'pl' => 'Przekazywanie i koordynacja dokumentacji między działami.',
                    'en' => 'Transmitting and coordinating documentation between departments.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8062,
                'name' => json_encode([
                    'pl' => 'Przestrzeganie przepisów o ochronie danych osobowych (RODO) i polityki prywatności firmy.',
                    'en' => 'Adhering to personal data protection regulations (GDPR) and the company’s privacy policies.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8063,
                'name' => json_encode([
                    'pl' => 'Dbanie o bezpieczeństwo dokumentów wrażliwych oraz poufnych informacji.',
                    'en' => 'Ensuring the security of sensitive documents and confidential information.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8064,
                'name' => json_encode([
                    'pl' => 'Odpowiednie przechowywanie i zabezpieczanie dokumentów zawierających dane osobowe.',
                    'en' => 'Properly storing and securing documents containing personal data.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8065,
                'name' => json_encode([
                    'pl' => 'Udział w opracowywaniu procedur dotyczących funkcjonowania biura oraz ich wdrażanie.',
                    'en' => 'Participating in developing office operation procedures and implementing them.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8066,
                'name' => json_encode([
                    'pl' => 'Przestrzeganie i egzekwowanie polityk biurowych oraz regulacji wewnętrznych.',
                    'en' => 'Enforcing office policies and internal regulations.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8067,
                'name' => json_encode([
                    'pl' => 'Przeprowadzanie szkoleń dla nowych pracowników z zakresu zasad funkcjonowania biura.',
                    'en' => 'Conducting training for new employees on office operation principles.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8068,
                'name' => json_encode([
                    'pl' => 'Pomoc pracownikom w kwestiach związanych z obsługą biura i dostępem do zasobów.',
                    'en' => 'Assisting employees with office operations and resource access.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8069,
                'name' => json_encode([
                    'pl' => 'Odpowiadanie na pytania dotyczące procedur wewnętrznych oraz rozwiązywanie bieżących problemów administracyjnych.',
                    'en' => 'Answering questions regarding internal procedures and resolving ongoing administrative issues.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8070,
                'name' => json_encode([
                    'pl' => 'Pomoc nowym pracownikom w adaptacji do biura oraz przedstawianie zasad funkcjonowania w firmie.',
                    'en' => 'Assisting new employees in adapting to the office and introducing them to the company’s operational rules.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8071,
                'name' => json_encode([
                    'pl' => 'Organizacja spotkań rekrutacyjnych, przygotowywanie materiałów informacyjnych dla kandydatów.',
                    'en' => 'Organizing recruitment meetings and preparing informational materials for candidates.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8072,
                'name' => json_encode([
                    'pl' => 'Współpraca z działem HR w organizacji szkoleń i warsztatów dla pracowników.',
                    'en' => 'Collaborating with the HR department to organize training and workshops for employees.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8073,
                'name' => json_encode([
                    'pl' => 'Koordynacja działań związanych z onboardingiem nowych pracowników.',
                    'en' => 'Coordinating activities related to the onboarding of new employees.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8074,
                'name' => json_encode([
                    'pl' => 'Monitorowanie obiegu dokumentów wewnątrz biura, dbanie o ich terminowe dostarczenie.',
                    'en' => 'Monitoring the circulation of documents within the office, ensuring their timely delivery.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8075,
                'name' => json_encode([
                    'pl' => 'Koordynacja przepływu informacji i dokumentacji między działami.',
                    'en' => 'Coordinating the flow of information and documentation between departments.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8076,
                'name' => json_encode([
                    'pl' => 'Przekazywanie dokumentów do odpowiednich działów i dbanie o ich archiwizację.',
                    'en' => 'Transferring documents to the appropriate departments and ensuring their archiving.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8077,
                'name' => json_encode([
                    'pl' => 'Utrzymywanie estetycznego wyglądu przestrzeni biurowej i porządku w miejscach wspólnych.',
                    'en' => 'Maintaining the aesthetic appearance of the office space and order in common areas.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8078,
                'name' => json_encode([
                    'pl' => 'Monitorowanie pracy firm sprzątających oraz zgłaszanie ewentualnych uwag dotyczących czystości.',
                    'en' => 'Monitoring the work of cleaning companies and reporting any comments regarding cleanliness.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8079,
                'name' => json_encode([
                    'pl' => 'Dbanie o odpowiednie wyposażenie biura, np. ozdoby, materiały marketingowe, czasopisma.',
                    'en' => 'Ensuring the office is properly furnished, e.g. decorations, marketing materials, magazines.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8080,
                'name' => json_encode([
                    'pl' => 'Regularne uczestnictwo w szkoleniach z zakresu obsługi biura, oprogramowania, ochrony danych.',
                    'en' => 'Regularly participating in training on office management, software, and data protection.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8081,
                'name' => json_encode([
                    'pl' => 'Stałe doskonalenie umiejętności administracyjnych i organizacyjnych oraz wymiana doświadczeń z zespołem.',
                    'en' => 'Continuous improvement of administrative and organizational skills and sharing experiences with the team.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8082,
                'name' => json_encode([
                    'pl' => 'Aktualizacja wiedzy na temat przepisów i nowych narzędzi biurowych.',
                    'en' => 'Updating knowledge about regulations and new office tools.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
        ];
        $PRACOWNIK_KANCELARII_TAJNEJ = [
            [
                'id' => 8083,
                'name' => json_encode([
                    'pl' => 'Przyjmowanie dokumentów niejawnych (np. "tajnych", "ściśle tajnych", "poufnych") i ich rejestrowanie zgodnie z procedurami.',
                    'en' => 'Receiving classified documents (e.g., "secret", "top secret", "confidential") and registering them according to procedures.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8084,
                'name' => json_encode([
                    'pl' => 'Wprowadzanie dokumentów do rejestru kancelarii tajnej oraz nadawanie im unikalnych numerów ewidencyjnych.',
                    'en' => 'Entering documents into the secret office register and assigning them unique registration numbers.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8085,
                'name' => json_encode([
                    'pl' => 'Weryfikacja kompletności i poprawności dokumentacji przed jej przyjęciem do kancelarii.',
                    'en' => 'Verifying the completeness and accuracy of documentation before accepting it into the secret office.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8086,
                'name' => json_encode([
                    'pl' => 'Przechowywanie dokumentów niejawnych w zabezpieczonych szafach lub sejfach, zgodnie z przepisami o ochronie danych niejawnych.',
                    'en' => 'Storing classified documents in secured cabinets or safes, in accordance with regulations on the protection of classified information.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8087,
                'name' => json_encode([
                    'pl' => 'Dbanie o to, aby dokumenty były przechowywane w sposób uniemożliwiający nieuprawniony dostęp.',
                    'en' => 'Ensuring that documents are stored in a manner that prevents unauthorized access.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8088,
                'name' => json_encode([
                    'pl' => 'Regularne sprawdzanie zabezpieczeń pomieszczenia oraz szaf, aby upewnić się, że przechowywane informacje są odpowiednio chronione.',
                    'en' => 'Regularly checking the security of the room and cabinets to ensure that stored information is adequately protected.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8089,
                'name' => json_encode([
                    'pl' => 'Kontrolowanie dostępu do dokumentów i danych niejawnych oraz udostępnianie ich jedynie upoważnionym osobom.',
                    'en' => 'Controlling access to classified documents and data, providing them only to authorized personnel.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8090,
                'name' => json_encode([
                    'pl' => 'Sprawdzanie uprawnień osób, które mają dostęp do dokumentów niejawnych, oraz monitorowanie ich aktywności w kancelarii.',
                    'en' => 'Checking the authorizations of individuals who have access to classified documents and monitoring their activity in the office.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8091,
                'name' => json_encode([
                    'pl' => 'Zapewnienie, że wszystkie osoby korzystające z dokumentów niejawnych spełniają wymagania dotyczące ochrony danych niejawnych.',
                    'en' => 'Ensuring that all individuals using classified documents meet the requirements for protecting classified information.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8092,
                'name' => json_encode([
                    'pl' => 'Prowadzenie szczegółowej ewidencji dokumentów niejawnych, w tym ich obiegu pomiędzy różnymi osobami i działami.',
                    'en' => 'Maintaining a detailed record of classified documents, including their circulation between different individuals and departments.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8093,
                'name' => json_encode([
                    'pl' => 'Dokumentowanie ruchu dokumentów oraz zapewnienie pełnej ścieżki audytowej ich przemieszczeń.',
                    'en' => 'Documenting the movement of documents and ensuring a complete audit trail of their transfers.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8094,
                'name' => json_encode([
                    'pl' => 'Aktualizowanie ewidencji oraz śledzenie, czy dokumenty są zwracane do kancelarii tajnej w wyznaczonym czasie.',
                    'en' => 'Updating the records and tracking whether documents are returned to the secret office within the designated time.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8095,
                'name' => json_encode([
                    'pl' => 'Niszczenie dokumentów niejawnych, które straciły swoją ważność, zgodnie z obowiązującymi przepisami i procedurami.',
                    'en' => 'Destroying classified documents that have lost their validity in accordance with applicable regulations and procedures.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8096,
                'name' => json_encode([
                    'pl' => 'Przeprowadzanie procesu niszczenia dokumentów w sposób uniemożliwiający ich odtworzenie lub odczytanie.',
                    'en' => 'Conducting the destruction of documents in a way that prevents their recovery or reading.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8097,
                'name' => json_encode([
                    'pl' => 'Tworzenie protokołów niszczenia oraz zgłaszanie tej czynności przełożonym lub instytucjom nadzorującym.',
                    'en' => 'Creating destruction protocols and reporting this activity to supervisors or overseeing institutions.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8098,
                'name' => json_encode([
                    'pl' => 'Dbanie o zabezpieczenie pomieszczenia kancelarii tajnej, w tym zamknięcie drzwi, stosowanie zamków, alarmów i innych systemów ochrony.',
                    'en' => 'Ensuring the security of the secret office room, including closing doors, using locks, alarms, and other security systems.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8099,
                'name' => json_encode([
                    'pl' => 'Regularne kontrole stanu zabezpieczeń oraz raportowanie wszelkich nieprawidłowości w zakresie bezpieczeństwa fizycznego kancelarii.',
                    'en' => 'Regular security checks of the office and reporting any irregularities in physical security.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8100,
                'name' => json_encode([
                    'pl' => 'Zapewnienie, że kancelaria tajna jest dostępna tylko dla uprawnionych pracowników i w wyznaczonych godzinach.',
                    'en' => 'Ensuring that the secret office is accessible only to authorized personnel and during designated hours.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8101,
                'name' => json_encode([
                    'pl' => 'Sporządzanie raportów o stanie bezpieczeństwa kancelarii tajnej, takich jak raporty o ruchu dokumentów i incydentach.',
                    'en' => 'Preparing reports on the security status of the secret office, such as reports on document movements and incidents.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8102,
                'name' => json_encode([
                    'pl' => 'Przygotowywanie sprawozdań dla przełożonych oraz instytucji nadzorujących w zakresie ochrony danych niejawnych.',
                    'en' => 'Preparing reports for supervisors and overseeing institutions regarding the protection of classified data.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8103,
                'name' => json_encode([
                    'pl' => 'Dokumentowanie czynności związanych z bezpieczeństwem kancelarii, aby zapewnić zgodność z przepisami.',
                    'en' => 'Documenting security-related activities of the office to ensure compliance with regulations.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8104,
                'name' => json_encode([
                    'pl' => 'Regularna inwentaryzacja dokumentów przechowywanych w kancelarii tajnej w celu sprawdzenia ich zgodności z ewidencją.',
                    'en' => 'Regular inventory of documents stored in the secret office to check their compliance with records.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8105,
                'name' => json_encode([
                    'pl' => 'Weryfikacja, czy wszystkie dokumenty są na właściwych miejscach i czy są w odpowiednim stanie.',
                    'en' => 'Verifying that all documents are in the right places and in appropriate condition.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8106,
                'name' => json_encode([
                    'pl' => 'Raportowanie wyników inwentaryzacji oraz zgłaszanie braków lub niezgodności.',
                    'en' => 'Reporting the results of inventory and reporting any shortages or discrepancies.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8107,
                'name' => json_encode([
                    'pl' => 'Przestrzeganie krajowych i wewnętrznych przepisów dotyczących ochrony informacji niejawnych oraz procedur bezpieczeństwa.',
                    'en' => 'Complying with national and internal regulations regarding the protection of classified information and security procedures.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8108,
                'name' => json_encode([
                    'pl' => 'Dbałość o zgodność działań z ustawą o ochronie informacji niejawnych i innymi regulacjami.',
                    'en' => 'Ensuring that actions comply with the Act on the Protection of Classified Information and other regulations.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8109,
                'name' => json_encode([
                    'pl' => 'Informowanie przełożonych o wszelkich naruszeniach przepisów dotyczących ochrony informacji.',
                    'en' => 'Notifying supervisors of any violations of regulations regarding the protection of information.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8110,
                'name' => json_encode([
                    'pl' => 'Przeprowadzanie szkoleń dla pracowników mających dostęp do informacji niejawnych, aby zapoznać ich z zasadami ochrony.',
                    'en' => 'Conducting training for employees with access to classified information to familiarize them with protection principles.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8111,
                'name' => json_encode([
                    'pl' => 'Informowanie pracowników o procedurach, zasadach bezpieczeństwa i nowych przepisach dotyczących ochrony danych.',
                    'en' => 'Informing employees about procedures, security rules, and new regulations regarding data protection.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8112,
                'name' => json_encode([
                    'pl' => 'Weryfikacja, czy pracownicy rozumieją zasady pracy z dokumentami niejawnymi i czy przestrzegają procedur.',
                    'en' => 'Verifying whether employees understand the principles of working with classified documents and whether they comply with procedures.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8113,
                'name' => json_encode([
                    'pl' => 'Nadzór nad pracownikami mającymi dostęp do kancelarii tajnej, monitorowanie ich działań oraz zgłaszanie ewentualnych naruszeń.',
                    'en' => 'Supervising employees with access to the secret office, monitoring their actions, and reporting any violations.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8114,
                'name' => json_encode([
                    'pl' => 'Kontrolowanie, czy pracownicy przestrzegają procedur dotyczących przechowywania, transportu i niszczenia dokumentów niejawnych.',
                    'en' => 'Controlling whether employees comply with procedures regarding the storage, transport, and destruction of classified documents.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8115,
                'name' => json_encode([
                    'pl' => 'Współpraca z pracownikami w zakresie ochrony danych i ich poufności.',
                    'en' => 'Cooperating with employees on data protection and confidentiality.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8116,
                'name' => json_encode([
                    'pl' => 'Współpraca z instytucjami odpowiedzialnymi za ochronę informacji niejawnych, takimi jak ABW, Służba Kontrwywiadu Wojskowego.',
                    'en' => 'Cooperating with institutions responsible for the protection of classified information, such as the Internal Security Agency and the Military Counterintelligence Service.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8117,
                'name' => json_encode([
                    'pl' => 'Przekazywanie raportów, sprawozdań oraz informacji na potrzeby audytów i kontroli.',
                    'en' => 'Submitting reports, statements, and information for audits and inspections.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8118,
                'name' => json_encode([
                    'pl' => 'Przekazywanie danych i dokumentów na potrzeby dochodzeń lub inspekcji dotyczących naruszeń zasad bezpieczeństwa.',
                    'en' => 'Providing data and documents for investigations or inspections related to security violations.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8119,
                'name' => json_encode([
                    'pl' => 'Korzystanie z dedykowanych systemów informatycznych do ewidencjonowania, archiwizowania i monitorowania dokumentów niejawnych.',
                    'en' => 'Using dedicated information systems to record, archive, and monitor classified documents.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8120,
                'name' => json_encode([
                    'pl' => 'Dbanie o bezpieczeństwo systemów informatycznych oraz regularne zmiany haseł i kontrola dostępu do systemu.',
                    'en' => 'Ensuring the security of information systems and regularly changing passwords and controlling access to the system.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8121,
                'name' => json_encode([
                    'pl' => 'Przestrzeganie procedur związanych z elektronicznym obiegiem dokumentów niejawnych, jeśli dotyczy.',
                    'en' => 'Complying with procedures related to the electronic circulation of classified documents, if applicable.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8122,
                'name' => json_encode([
                    'pl' => 'Tworzenie i aktualizacja procedur wewnętrznych dotyczących ochrony dokumentów niejawnych oraz kontroli ich obiegu.',
                    'en' => 'Creating and updating internal procedures regarding the protection of classified documents and controlling their circulation.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8123,
                'name' => json_encode([
                    'pl' => 'Opracowywanie procedur na wypadek incydentów związanych z naruszeniem ochrony informacji niejawnych.',
                    'en' => 'Developing procedures for incidents involving breaches of classified information protection.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8124,
                'name' => json_encode([
                    'pl' => 'Regularne przeglądy procedur, aby upewnić się, że są one zgodne z najnowszymi przepisami i wymaganiami.',
                    'en' => 'Regular reviews of procedures to ensure they comply with the latest regulations and requirements.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8125,
                'name' => json_encode([
                    'pl' => 'Natychmiastowe zgłaszanie wszelkich incydentów, takich jak zgubienie dokumentu, nieuprawniony dostęp, do przełożonych lub jednostek nadzorczych.',
                    'en' => 'Immediately reporting any incidents, such as lost documents or unauthorized access, to supervisors or oversight bodies.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8126,
                'name' => json_encode([
                    'pl' => 'Sporządzanie raportów z incydentów oraz podejmowanie działań naprawczych w celu minimalizacji ryzyka.',
                    'en' => 'Creating reports on incidents and taking corrective actions to minimize risks.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8127,
                'name' => json_encode([
                    'pl' => 'Współpraca z instytucjami w zakresie dochodzeń i wyciągania wniosków z incydentów.',
                    'en' => 'Cooperating with institutions regarding investigations and drawing conclusions from incidents.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8128,
                'name' => json_encode([
                    'pl' => 'Regularne uczestnictwo w szkoleniach i kursach dotyczących ochrony danych niejawnych oraz przepisów bezpieczeństwa.',
                    'en' => 'Regularly participating in training and courses related to the protection of classified data and security regulations.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8129,
                'name' => json_encode([
                    'pl' => 'Aktualizowanie wiedzy na temat nowych przepisów, technologii i metod ochrony informacji.',
                    'en' => 'Updating knowledge about new regulations, technologies, and methods of protecting information.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8130,
                'name' => json_encode([
                    'pl' => 'Wymiana doświadczeń z innymi pracownikami kancelarii tajnych oraz ciągłe doskonalenie kompetencji zawodowych.',
                    'en' => 'Sharing experiences with other employees of secret offices and continuously improving professional competencies.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],

        ];
        $ASYSTENT_PRZETWARZANIA_DANYCH = [
            [
                'id' => 8131,
                'name' => json_encode([
                    'pl' => 'Zbieranie danych z różnych źródeł, takich jak dokumentacja, raporty, systemy informatyczne czy ankiety.',
                    'en' => 'Collecting data from various sources, such as documentation, reports, IT systems, or surveys.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8132,
                'name' => json_encode([
                    'pl' => 'Weryfikowanie źródeł danych i zapewnienie, że są one kompletne i zgodne z wymaganiami organizacji.',
                    'en' => 'Verifying data sources and ensuring they are complete and comply with the organization’s requirements.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8133,
                'name' => json_encode([
                    'pl' => 'Identyfikacja brakujących danych i zgłaszanie braków zespołom odpowiedzialnym za ich dostarczenie.',
                    'en' => 'Identifying missing data and reporting gaps to teams responsible for providing it.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8134,
                'name' => json_encode([
                    'pl' => 'Wprowadzanie danych do baz danych, arkuszy kalkulacyjnych lub specjalistycznych systemów przetwarzania danych.',
                    'en' => 'Entering data into databases, spreadsheets, or specialized data processing systems.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8135,
                'name' => json_encode([
                    'pl' => 'Upewnienie się, że dane są wpisywane zgodnie z przyjętymi standardami i formatami.',
                    'en' => 'Ensuring data is entered according to accepted standards and formats.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8136,
                'name' => json_encode([
                    'pl' => 'Korygowanie ewentualnych błędów podczas wprowadzania danych i zapewnienie ich zgodności z wymaganiami.',
                    'en' => 'Correcting any errors during data entry and ensuring compliance with requirements.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8137,
                'name' => json_encode([
                    'pl' => 'Sprawdzanie poprawności i dokładności danych, w tym identyfikacja błędów lub niezgodności.',
                    'en' => 'Checking the correctness and accuracy of data, including identifying errors or discrepancies.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8138,
                'name' => json_encode([
                    'pl' => 'Walidacja danych, aby upewnić się, że spełniają one określone kryteria jakościowe.',
                    'en' => 'Validating data to ensure it meets specified quality criteria.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8139,
                'name' => json_encode([
                    'pl' => 'Współpraca z zespołami odpowiedzialnymi za dostarczanie danych, aby wyjaśnić wszelkie rozbieżności.',
                    'en' => 'Collaborating with teams responsible for data provision to clarify any discrepancies.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8140,
                'name' => json_encode([
                    'pl' => 'Zakładanie nowych baz danych oraz ich regularna aktualizacja w oparciu o dostarczane informacje.',
                    'en' => 'Establishing new databases and regularly updating them based on provided information.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8141,
                'name' => json_encode([
                    'pl' => 'Organizacja struktury baz danych, aby były czytelne i łatwo dostępne dla uprawnionych pracowników.',
                    'en' => 'Organizing the database structure for readability and easy access for authorized employees.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8142,
                'name' => json_encode([
                    'pl' => 'Monitorowanie spójności danych w bazach oraz wykonywanie działań porządkowych.',
                    'en' => 'Monitoring data consistency in databases and performing cleanup actions.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8143,
                'name' => json_encode([
                    'pl' => 'Przekształcanie danych surowych w formaty dostosowane do dalszej analizy i obróbki.',
                    'en' => 'Transforming raw data into formats suitable for further analysis and processing.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8144,
                'name' => json_encode([
                    'pl' => 'Przygotowywanie danych do raportów i zestawień, aby mogły być analizowane przez zespoły analityczne.',
                    'en' => 'Preparing data for reports and summaries so they can be analyzed by analytical teams.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8145,
                'name' => json_encode([
                    'pl' => 'Tworzenie wstępnych analiz danych, takich jak podsumowania, statystyki, czy porównania.',
                    'en' => 'Creating preliminary data analyses such as summaries, statistics, or comparisons.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8146,
                'name' => json_encode([
                    'pl' => 'Generowanie raportów i zestawień na podstawie zebranych i przetworzonych danych.',
                    'en' => 'Generating reports and summaries based on collected and processed data.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8147,
                'name' => json_encode([
                    'pl' => 'Opracowywanie czytelnych wykresów, tabel i innych narzędzi wizualizacji danych.',
                    'en' => 'Developing clear charts, tables, and other data visualization tools.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8148,
                'name' => json_encode([
                    'pl' => 'Przekazywanie raportów do odpowiednich zespołów i działów w organizacji.',
                    'en' => 'Delivering reports to relevant teams and departments in the organization.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8149,
                'name' => json_encode([
                    'pl' => 'Pomoc w automatyzacji procesów przetwarzania danych, np. poprzez tworzenie makr w Excelu lub skryptów.',
                    'en' => 'Assisting in automating data processing processes, such as creating Excel macros or scripts.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8150,
                'name' => json_encode([
                    'pl' => 'Współpraca z działem IT w zakresie wdrażania nowych narzędzi i systemów automatyzujących przetwarzanie danych.',
                    'en' => 'Collaborating with the IT department to implement new tools and systems that automate data processing.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8151,
                'name' => json_encode([
                    'pl' => 'Testowanie automatycznych procesów przetwarzania danych i zgłaszanie sugestii dotyczących ich poprawy.',
                    'en' => 'Testing automated data processing processes and reporting suggestions for their improvement.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8152,
                'name' => json_encode([
                    'pl' => 'Regularne sprawdzanie jakości danych, identyfikacja błędów, braków i niezgodności.',
                    'en' => 'Regularly checking data quality, identifying errors, gaps, and discrepancies.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8153,
                'name' => json_encode([
                    'pl' => 'Przeprowadzanie audytów danych w celu zapewnienia ich aktualności i spójności.',
                    'en' => 'Conducting data audits to ensure their timeliness and consistency.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8154,
                'name' => json_encode([
                    'pl' => 'Zgłaszanie problemów związanych z jakością danych do zespołów odpowiedzialnych za ich korektę.',
                    'en' => 'Reporting data quality issues to the teams responsible for their correction.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8155,
                'name' => json_encode([
                    'pl' => 'Prowadzenie dokumentacji związanej z danymi, ich źródłem, sposobem przetwarzania i strukturą.',
                    'en' => 'Maintaining documentation related to data, its source, processing method, and structure.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8156,
                'name' => json_encode([
                    'pl' => 'Przechowywanie dokumentacji w sposób zgodny z wewnętrznymi standardami i polityką bezpieczeństwa.',
                    'en' => 'Storing documentation in accordance with internal standards and security policy.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8157,
                'name' => json_encode([
                    'pl' => 'Aktualizacja dokumentacji na bieżąco, tak aby odpowiadała bieżącemu stanowi baz danych.',
                    'en' => 'Regularly updating documentation to reflect the current state of databases.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8158,
                'name' => json_encode([
                    'pl' => 'Przestrzeganie zasad ochrony danych osobowych i polityki prywatności w organizacji.',
                    'en' => 'Adhering to data protection principles and privacy policies within the organization.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8159,
                'name' => json_encode([
                    'pl' => 'Stosowanie środków zabezpieczających dane przed nieuprawnionym dostępem, modyfikacją lub utratą.',
                    'en' => 'Implementing measures to protect data from unauthorized access, modification, or loss.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8160,
                'name' => json_encode([
                    'pl' => 'Przestrzeganie procedur dotyczących bezpieczeństwa danych, takich jak regularna zmiana haseł i zasady dostępu.',
                    'en' => 'Following procedures related to data security, such as regular password changes and access rules.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8161,
                'name' => json_encode([
                    'pl' => 'Przeprowadzanie wstępnej analizy i interpretacji danych, aby dostarczyć podstawowych informacji zespołom analitycznym.',
                    'en' => 'Conducting preliminary analysis and interpretation of data to provide basic information to analytical teams.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8162,
                'name' => json_encode([
                    'pl' => 'Identyfikacja trendów, anomalii i wzorców w danych na potrzeby raportów i analiz.',
                    'en' => 'Identifying trends, anomalies, and patterns in data for reporting and analysis purposes.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8163,
                'name' => json_encode([
                    'pl' => 'Sporządzanie podstawowych wniosków i rekomendacji na podstawie przetworzonych danych.',
                    'en' => 'Formulating basic conclusions and recommendations based on processed data.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8164,
                'name' => json_encode([
                    'pl' => 'Wspieranie zespołów, które potrzebują danych do podejmowania decyzji i realizacji projektów.',
                    'en' => 'Supporting teams that need data for decision-making and project execution.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8165,
                'name' => json_encode([
                    'pl' => 'Pomoc w interpretacji raportów i danych dla pracowników innych działów.',
                    'en' => 'Assisting in the interpretation of reports and data for employees of other departments.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8166,
                'name' => json_encode([
                    'pl' => 'Dostosowywanie raportów i zestawień do potrzeb działów, które wymagają szczegółowych informacji.',
                    'en' => 'Customizing reports and summaries to meet the needs of departments requiring detailed information.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8167,
                'name' => json_encode([
                    'pl' => 'Opracowywanie i aktualizacja procedur przetwarzania danych w organizacji.',
                    'en' => 'Developing and updating data processing procedures within the organization.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8168,
                'name' => json_encode([
                    'pl' => 'Przestrzeganie wewnętrznych standardów przetwarzania i zarządzania danymi.',
                    'en' => 'Adhering to internal standards for data processing and management.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8169,
                'name' => json_encode([
                    'pl' => 'Udział w szkoleniach i wdrażaniu nowych pracowników w zakresie przetwarzania danych.',
                    'en' => 'Participating in training and onboarding new employees regarding data processing.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8170,
                'name' => json_encode([
                    'pl' => 'Koordynacja działań z zespołem IT w zakresie obsługi systemów do przetwarzania i przechowywania danych.',
                    'en' => 'Coordinating activities with the IT team regarding the operation of systems for data processing and storage.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8171,
                'name' => json_encode([
                    'pl' => 'Współpraca z analitykami danych w celu dostarczenia przetworzonych danych niezbędnych do analiz i raportów.',
                    'en' => 'Collaborating with data analysts to provide processed data necessary for analyses and reports.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8172,
                'name' => json_encode([
                    'pl' => 'Przekazywanie sugestii dotyczących optymalizacji pracy z danymi na potrzeby organizacji.',
                    'en' => 'Providing suggestions for optimizing data handling processes for the organization.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8173,
                'name' => json_encode([
                    'pl' => 'Udział w szkoleniach związanych z przetwarzaniem danych, zarządzaniem bazami danych i narzędziami analitycznymi.',
                    'en' => 'Participating in training related to data processing, database management, and analytical tools.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8174,
                'name' => json_encode([
                    'pl' => 'Aktualizowanie wiedzy na temat nowych technologii i metod przetwarzania danych.',
                    'en' => 'Updating knowledge about new technologies and methods of data processing.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8175,
                'name' => json_encode([
                    'pl' => 'Ciągłe doskonalenie umiejętności, aby zapewnić wysoką jakość i efektywność pracy.',
                    'en' => 'Continuously improving skills to ensure high quality and efficiency of work.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8176,
                'name' => json_encode([
                    'pl' => 'Przestrzeganie wewnętrznych i zewnętrznych standardów etycznych związanych z pracą z danymi.',
                    'en' => 'Adhering to internal and external ethical standards related to data handling.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8177,
                'name' => json_encode([
                    'pl' => 'Zapewnienie zgodności działań z przepisami dotyczącymi ochrony danych i prywatności, np. RODO.',
                    'en' => 'Ensuring compliance with regulations regarding data protection and privacy, e.g., GDPR.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8178,
                'name' => json_encode([
                    'pl' => 'Informowanie przełożonych o wszelkich nieprawidłowościach i naruszeniach polityki prywatności.',
                    'en' => 'Informing superiors of any irregularities and violations of privacy policies.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ]
        ];
        $POZOSTAŁY_ŚREDNI_PERSONEL_DO_SPRAW_STATYSTYKI_I_DZIEDZIN_POKREWNYCH = [
            [
                'id' => 8179,
                'name' => json_encode([
                    'pl' => 'Gromadzenie danych z wewnętrznych i zewnętrznych źródeł, takich jak raporty, ankiety, bazy danych.',
                    'en' => 'Collecting data from internal and external sources, such as reports, surveys, and databases.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8180,
                'name' => json_encode([
                    'pl' => 'Organizacja procesów zbierania danych, w tym przygotowywanie formularzy, kwestionariuszy i narzędzi ankietowych.',
                    'en' => 'Organizing data collection processes, including preparing forms, questionnaires, and survey tools.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8181,
                'name' => json_encode([
                    'pl' => 'Upewnianie się, że zebrane dane są kompletne i zgodne z wymaganiami projektu.',
                    'en' => 'Ensuring that collected data is complete and meets project requirements.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8182,
                'name' => json_encode([
                    'pl' => 'Wprowadzanie danych do systemów i baz danych, dbając o ich dokładność i spójność.',
                    'en' => 'Entering data into systems and databases, ensuring accuracy and consistency.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8183,
                'name' => json_encode([
                    'pl' => 'Walidacja danych w celu wykrycia błędów lub niezgodności oraz ich korekta.',
                    'en' => 'Validating data to detect errors or inconsistencies and correcting them.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8184,
                'name' => json_encode([
                    'pl' => 'Monitorowanie jakości danych i eliminowanie duplikatów lub braków.',
                    'en' => 'Monitoring data quality and eliminating duplicates or gaps.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8185,
                'name' => json_encode([
                    'pl' => 'Zakładanie, organizacja i aktualizacja baz danych na potrzeby analiz.',
                    'en' => 'Setting up, organizing, and updating databases for analysis purposes.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8186,
                'name' => json_encode([
                    'pl' => 'Przechowywanie danych w sposób umożliwiający ich łatwy dostęp i dalszą analizę.',
                    'en' => 'Storing data in a way that allows easy access and further analysis.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8187,
                'name' => json_encode([
                    'pl' => 'Zapewnienie spójności i porządku w danych, aby były czytelne dla innych użytkowników.',
                    'en' => 'Ensuring consistency and order in data to make it readable for other users.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8188,
                'name' => json_encode([
                    'pl' => 'Przeprowadzanie wstępnych analiz, takich jak liczenie średnich, odchyleń standardowych, procentów, korelacji itp.',
                    'en' => 'Conducting preliminary analyses, such as calculating averages, standard deviations, percentages, correlations, etc.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8189,
                'name' => json_encode([
                    'pl' => 'Wykorzystywanie arkuszy kalkulacyjnych i podstawowych narzędzi statystycznych do obliczeń.',
                    'en' => 'Using spreadsheets and basic statistical tools for calculations.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8190,
                'name' => json_encode([
                    'pl' => 'Prezentowanie wyników analiz w formie tabel i wykresów.',
                    'en' => 'Presenting analysis results in the form of tables and graphs.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8191,
                'name' => json_encode([
                    'pl' => 'Przygotowywanie raportów z zebranych i przetworzonych danych, które służą do dalszej analizy.',
                    'en' => 'Preparing reports from collected and processed data that serve for further analysis.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8192,
                'name' => json_encode([
                    'pl' => 'Tworzenie zestawień na potrzeby różnych działów i zespołów, dostosowanych do ich specyficznych wymagań.',
                    'en' => 'Creating summaries for various departments and teams tailored to their specific requirements.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8193,
                'name' => json_encode([
                    'pl' => 'Przekazywanie raportów w czytelnej formie, wykorzystując tabele, wykresy i infografiki.',
                    'en' => 'Delivering reports in a readable format using tables, charts, and infographics.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8194,
                'name' => json_encode([
                    'pl' => 'Pomoc w identyfikowaniu wzorców, trendów i korelacji na podstawie zebranych danych.',
                    'en' => 'Assisting in identifying patterns, trends, and correlations based on collected data.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8195,
                'name' => json_encode([
                    'pl' => 'Wykonywanie prostych prognoz na podstawie historycznych danych i trendów.',
                    'en' => 'Making simple forecasts based on historical data and trends.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8196,
                'name' => json_encode([
                    'pl' => 'Przekazywanie wyników prognoz zespołom strategicznym i planistycznym.',
                    'en' => 'Delivering forecast results to strategic and planning teams.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8197,
                'name' => json_encode([
                    'pl' => 'Tworzenie wizualizacji danych, takich jak wykresy, mapy, diagramy na potrzeby raportów i prezentacji.',
                    'en' => 'Creating data visualizations such as charts, maps, and diagrams for reports and presentations.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8198,
                'name' => json_encode([
                    'pl' => 'Współpraca z działem graficznym lub specjalistami od wizualizacji, aby zapewnić atrakcyjność i czytelność danych.',
                    'en' => 'Collaborating with the graphic department or visualization specialists to ensure the attractiveness and readability of the data.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8199,
                'name' => json_encode([
                    'pl' => 'Dostosowywanie formy prezentacji wyników do potrzeb odbiorców, aby ułatwić ich zrozumienie.',
                    'en' => 'Adjusting the form of presenting results to the needs of recipients to facilitate their understanding.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8200,
                'name' => json_encode([
                    'pl' => 'Udział w projektach badawczych, przygotowanie i organizacja danych potrzebnych do analiz.',
                    'en' => 'Participating in research projects, preparing and organizing data needed for analysis.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8201,
                'name' => json_encode([
                    'pl' => 'Wsparcie w przygotowaniu dokumentacji badawczej i narzędzi pomiarowych.',
                    'en' => 'Assisting in preparing research documentation and measurement tools.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8202,
                'name' => json_encode([
                    'pl' => 'Pomoc w analizie wyników badań, tworzenie wniosków i interpretacja danych.',
                    'en' => 'Assisting in analyzing research results, drawing conclusions, and interpreting data.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8203,
                'name' => json_encode([
                    'pl' => 'Prowadzenie dokumentacji dotyczącej zbierania, przetwarzania i analizy danych.',
                    'en' => 'Maintaining documentation related to data collection, processing, and analysis.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8204,
                'name' => json_encode([
                    'pl' => 'Archiwizacja wyników analiz, raportów i innych dokumentów w sposób zgodny z polityką firmy.',
                    'en' => 'Archiving analysis results, reports, and other documents in accordance with company policy.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8205,
                'name' => json_encode([
                    'pl' => 'Utrzymywanie porządku w dokumentacji, aby była łatwo dostępna dla innych pracowników.',
                    'en' => 'Keeping documentation organized so that it is easily accessible to other employees.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8206,
                'name' => json_encode([
                    'pl' => 'Przestrzeganie przepisów dotyczących ochrony danych osobowych i wewnętrznych zasad bezpieczeństwa informacji.',
                    'en' => 'Complying with regulations regarding personal data protection and internal information security policies.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8207,
                'name' => json_encode([
                    'pl' => 'Dbanie o to, aby dane były przechowywane w sposób zabezpieczony przed nieuprawnionym dostępem.',
                    'en' => 'Ensuring that data is stored securely against unauthorized access.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8208,
                'name' => json_encode([
                    'pl' => 'Zapewnienie, że wszystkie operacje na danych są zgodne z regulacjami dotyczącymi prywatności.',
                    'en' => 'Ensuring that all operations on data comply with privacy regulations.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8209,
                'name' => json_encode([
                    'pl' => 'Wspieranie działów takich jak marketing, sprzedaż, HR w dostarczaniu analiz i danych statystycznych.',
                    'en' => 'Supporting departments such as marketing, sales, and HR in providing analyses and statistical data.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8210,
                'name' => json_encode([
                    'pl' => 'Współpraca z zespołami badawczymi, analitycznymi oraz technologicznymi w celu realizacji projektów.',
                    'en' => 'Collaborating with research, analytical, and technology teams to execute projects.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8211,
                'name' => json_encode([
                    'pl' => 'Odpowiadanie na pytania i dostarczanie wsparcia pracownikom korzystającym z danych.',
                    'en' => 'Responding to inquiries and providing support to employees using the data.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8212,
                'name' => json_encode([
                    'pl' => 'Pomoc przy implementacji narzędzi automatyzujących proces zbierania, przetwarzania i analizowania danych.',
                    'en' => 'Assisting in the implementation of tools that automate data collection, processing, and analysis.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8213,
                'name' => json_encode([
                    'pl' => 'Tworzenie makr lub prostych skryptów w Excelu lub innych narzędziach w celu usprawnienia pracy z danymi.',
                    'en' => 'Creating macros or simple scripts in Excel or other tools to streamline data handling.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8214,
                'name' => json_encode([
                    'pl' => 'Testowanie automatycznych procesów i zgłaszanie sugestii dotyczących ich optymalizacji.',
                    'en' => 'Testing automated processes and providing suggestions for their optimization.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8215,
                'name' => json_encode([
                    'pl' => 'Udział w szkoleniach i kursach związanych ze statystyką, analizą danych i wykorzystaniem narzędzi statystycznych.',
                    'en' => 'Participating in training and courses related to statistics, data analysis, and the use of statistical tools.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8216,
                'name' => json_encode([
                    'pl' => 'Aktualizowanie wiedzy na temat nowych metod analizy i narzędzi wspierających przetwarzanie danych.',
                    'en' => 'Updating knowledge on new analysis methods and tools that support data processing.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8217,
                'name' => json_encode([
                    'pl' => 'Ciągłe doskonalenie umiejętności, aby sprostać wymaganiom nowych projektów i technologii.',
                    'en' => 'Continuously improving skills to meet the demands of new projects and technologies.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8218,
                'name' => json_encode([
                    'pl' => 'Opracowywanie procedur dotyczących przetwarzania i analizy danych zgodnych z polityką organizacji.',
                    'en' => 'Developing procedures for processing and analyzing data in line with organizational policy.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8219,
                'name' => json_encode([
                    'pl' => 'Przestrzeganie standardów organizacji i dbanie o jakość oraz zgodność przetwarzanych danych.',
                    'en' => 'Adhering to organizational standards and ensuring the quality and compliance of processed data.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8220,
                'name' => json_encode([
                    'pl' => 'Wdrażanie procedur w zespole i instruowanie współpracowników w zakresie najlepszych praktyk.',
                    'en' => 'Implementing procedures within the team and instructing colleagues on best practices.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8221,
                'name' => json_encode([
                    'pl' => 'Przygotowywanie danych i raportów do publikacji zewnętrznych, np. raportów rocznych, materiałów marketingowych.',
                    'en' => 'Preparing data and reports for external publication, such as annual reports and marketing materials.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8222,
                'name' => json_encode([
                    'pl' => 'Przekazywanie danych w formie odpowiedniej do publikacji, zgodnie z wymaganiami jakości i prezentacji.',
                    'en' => 'Delivering data in a format suitable for publication, according to quality and presentation requirements.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8223,
                'name' => json_encode([
                    'pl' => 'Sprawdzanie danych przed publikacją pod kątem dokładności, zgodności z wytycznymi i przejrzystości.',
                    'en' => 'Checking data prior to publication for accuracy, compliance with guidelines, and clarity.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8224,
                'name' => json_encode([
                    'pl' => 'Pomoc w interpretacji wyników analiz i wyjaśnianie ich znaczenia dla osób z innych działów.',
                    'en' => 'Assisting in interpreting analysis results and explaining their significance to people from other departments.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8225,
                'name' => json_encode([
                    'pl' => 'Tworzenie materiałów ułatwiających zrozumienie wyników, np. prostych raportów, prezentacji czy zestawień.',
                    'en' => 'Creating materials that facilitate understanding of results, such as simple reports, presentations, or summaries.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8226,
                'name' => json_encode([
                    'pl' => 'Przekazywanie zrozumiałych wniosków i rekomendacji na podstawie wyników analiz.',
                    'en' => 'Delivering clear conclusions and recommendations based on analysis results.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ]
        ];
        $ASYSTENT_DO_SPRAW_STATYSTYKI = [
            [
                'id' => 8227,
                'name' => json_encode([
                    'pl' => 'Zbieranie danych z różnych źródeł, takich jak raporty, ankiety, bazy danych oraz dokumentacja wewnętrzna.',
                    'en' => 'Collecting data from various sources, such as reports, surveys, databases, and internal documentation.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8228,
                'name' => json_encode([
                    'pl' => 'Przeprowadzanie ankiet i zbieranie wyników badań na potrzeby analiz statystycznych.',
                    'en' => 'Conducting surveys and collecting research results for statistical analysis.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8229,
                'name' => json_encode([
                    'pl' => 'Weryfikacja wiarygodności i aktualności zbieranych danych.',
                    'en' => 'Verifying the reliability and timeliness of collected data.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8230,
                'name' => json_encode([
                    'pl' => 'Tworzenie i aktualizowanie baz danych w programach statystycznych i arkuszach kalkulacyjnych.',
                    'en' => 'Creating and updating databases in statistical programs and spreadsheets.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8231,
                'name' => json_encode([
                    'pl' => 'Organizacja i uporządkowanie danych, aby ułatwić ich analizę i przetwarzanie.',
                    'en' => 'Organizing and structuring data to facilitate analysis and processing.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8232,
                'name' => json_encode([
                    'pl' => 'Weryfikacja poprawności wprowadzanych danych i eliminowanie duplikatów oraz błędów.',
                    'en' => 'Verifying the accuracy of entered data and eliminating duplicates and errors.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8233,
                'name' => json_encode([
                    'pl' => 'Wykonywanie podstawowych obliczeń statystycznych, takich jak średnia, mediana, odchylenie standardowe itp.',
                    'en' => 'Performing basic statistical calculations, such as mean, median, standard deviation, etc.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8234,
                'name' => json_encode([
                    'pl' => 'Przetwarzanie danych za pomocą specjalistycznych programów statystycznych, takich jak SPSS, SAS, R czy Excel.',
                    'en' => 'Processing data using specialized statistical programs, such as SPSS, SAS, R, or Excel.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8235,
                'name' => json_encode([
                    'pl' => 'Analiza danych na podstawie założonych kryteriów oraz identyfikowanie wzorców i trendów.',
                    'en' => 'Analyzing data based on established criteria and identifying patterns and trends.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8236,
                'name' => json_encode([
                    'pl' => 'Sporządzanie raportów i zestawień przedstawiających wyniki analiz w formie tabel, wykresów i infografik.',
                    'en' => 'Preparing reports and summaries presenting analysis results in the form of tables, charts, and infographics.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8237,
                'name' => json_encode([
                    'pl' => 'Opracowywanie wniosków na podstawie analiz danych i prezentowanie ich w zrozumiały sposób.',
                    'en' => 'Developing conclusions based on data analysis and presenting them clearly.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8238,
                'name' => json_encode([
                    'pl' => 'Przygotowywanie raportów okresowych, miesięcznych, kwartalnych lub rocznych na potrzeby różnych działów.',
                    'en' => 'Preparing periodic, monthly, quarterly, or annual reports for various departments.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8239,
                'name' => json_encode([
                    'pl' => 'Tworzenie czytelnych i estetycznych wizualizacji, takich jak wykresy, tabele, mapy ciepła.',
                    'en' => 'Creating clear and aesthetically pleasing visualizations, such as charts, tables, and heat maps.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8240,
                'name' => json_encode([
                    'pl' => 'Używanie narzędzi do wizualizacji danych, takich jak Tableau, Power BI lub programy graficzne.',
                    'en' => 'Using data visualization tools such as Tableau, Power BI, or graphic programs.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8241,
                'name' => json_encode([
                    'pl' => 'Dostosowywanie formy prezentacji wyników do odbiorców, aby ułatwić zrozumienie wyników analizy.',
                    'en' => 'Adjusting the form of presenting results to the needs of recipients to facilitate their understanding.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8242,
                'name' => json_encode([
                    'pl' => 'Śledzenie i analizowanie trendów w danych, identyfikowanie zmian i odchyleń.',
                    'en' => 'Tracking and analyzing trends in the data, identifying changes and deviations.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8243,
                'name' => json_encode([
                    'pl' => 'Wsparcie w przygotowywaniu prognoz na podstawie historycznych danych oraz obecnych trendów.',
                    'en' => 'Assisting in preparing forecasts based on historical data and current trends.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8244,
                'name' => json_encode([
                    'pl' => 'Sporządzanie prognoz i analiz na potrzeby długoterminowego planowania organizacji.',
                    'en' => 'Creating forecasts and analyses for the long-term planning of the organization.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8245,
                'name' => json_encode([
                    'pl' => 'Udział w planowaniu i realizacji badań statystycznych oraz analiz dla różnych projektów.',
                    'en' => 'Participating in the planning and implementation of statistical studies and analyses for various projects.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8246,
                'name' => json_encode([
                    'pl' => 'Pomoc w opracowywaniu metodologii badań, doborze próby i tworzeniu narzędzi badawczych.',
                    'en' => 'Assisting in developing research methodologies, sample selection, and creating research tools.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8247,
                'name' => json_encode([
                    'pl' => 'Analiza wyników badań oraz przygotowywanie raportów zawierających interpretację danych.',
                    'en' => 'Analyzing research results and preparing reports containing data interpretation.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8248,
                'name' => json_encode([
                    'pl' => 'Weryfikacja i przygotowanie danych do publikacji zewnętrznych, takich jak raporty publiczne, artykuły naukowe czy prezentacje konferencyjne.',
                    'en' => 'Verifying and preparing data for external publications, such as public reports, scientific articles, or conference presentations.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8249,
                'name' => json_encode([
                    'pl' => 'Dostosowanie danych do wymagań publikacji, w tym zapewnienie ich czytelności i atrakcyjności wizualnej.',
                    'en' => 'Adjusting data to the publication requirements, including ensuring their readability and visual attractiveness.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8250,
                'name' => json_encode([
                    'pl' => 'Przestrzeganie zasad etyki i dokładności przy publikacji danych statystycznych.',
                    'en' => 'Observing ethics and accuracy when publishing statistical data.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8251,
                'name' => json_encode([
                    'pl' => 'Weryfikowanie danych pod kątem zgodności z ustalonymi standardami i wytycznymi organizacji.',
                    'en' => 'Verifying data for compliance with established standards and guidelines of the organization.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8252,
                'name' => json_encode([
                    'pl' => 'Identyfikowanie i korygowanie błędów oraz eliminowanie niezgodności w zbiorach danych.',
                    'en' => 'Identifying and correcting errors and eliminating inconsistencies in data sets.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8253,
                'name' => json_encode([
                    'pl' => 'Stosowanie zasad walidacji danych, aby zapewnić ich wiarygodność i rzetelność.',
                    'en' => 'Applying data validation principles to ensure their reliability and accuracy.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8254,
                'name' => json_encode([
                    'pl' => 'Pomoc w tworzeniu i wdrażaniu narzędzi automatyzujących proces analizy danych, takich jak makra w Excelu lub skrypty w Pythonie.',
                    'en' => 'Assisting in creating and implementing tools that automate data analysis processes, such as Excel macros or Python scripts.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8255,
                'name' => json_encode([
                    'pl' => 'Współpraca z zespołem IT w celu implementacji rozwiązań ułatwiających zbieranie i analizę danych.',
                    'en' => 'Cooperating with the IT team to implement solutions facilitating data collection and analysis.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8256,
                'name' => json_encode([
                    'pl' => 'Utrzymywanie aktualności narzędzi i metod stosowanych w analizie danych oraz ich usprawnianie.',
                    'en' => 'Keeping tools and methods used in data analysis up-to-date and improving them.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8257,
                'name' => json_encode([
                    'pl' => 'Przestrzeganie przepisów dotyczących ochrony danych osobowych i poufności informacji.',
                    'en' => 'Complying with regulations concerning personal data protection and information confidentiality.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8258,
                'name' => json_encode([
                    'pl' => 'Dbanie o zgodność działań z polityką prywatności i przepisami dotyczącymi danych osobowych, np. RODO.',
                    'en' => 'Ensuring that actions comply with privacy policies and regulations concerning personal data, e.g., GDPR.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8259,
                'name' => json_encode([
                    'pl' => 'Przechowywanie danych w sposób zabezpieczony i zgodny z wytycznymi organizacji.',
                    'en' => 'Storing data securely and in accordance with organizational guidelines.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8260,
                'name' => json_encode([
                    'pl' => 'Tworzenie instrukcji i dokumentacji dotyczącej procesów analitycznych oraz narzędzi statystycznych.',
                    'en' => 'Creating instructions and documentation regarding analytical processes and statistical tools.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8261,
                'name' => json_encode([
                    'pl' => 'Opracowywanie procedur pracy z danymi, aby ułatwić ich przetwarzanie i analizę.',
                    'en' => 'Developing procedures for working with data to facilitate their processing and analysis.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8262,
                'name' => json_encode([
                    'pl' => 'Dokumentowanie kroków analitycznych w celu zapewnienia transparentności i łatwego odtworzenia analiz.',
                    'en' => 'Documenting analytical steps to ensure transparency and easy replication of analyses.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8263,
                'name' => json_encode([
                    'pl' => 'Utrzymywanie kontaktów z różnymi działami firmy, aby pozyskiwać dane i informacje na potrzeby analiz.',
                    'en' => 'Maintaining contacts with various departments of the company to obtain data and information for analyses.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8264,
                'name' => json_encode([
                    'pl' => 'Wspieranie innych zespołów w interpretacji wyników analiz oraz dostarczanie im wyników statystycznych.',
                    'en' => 'Supporting other teams in interpreting analysis results and providing them with statistical findings.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8265,
                'name' => json_encode([
                    'pl' => 'Koordynacja pracy z zespołami marketingu, sprzedaży, logistyki i innymi działami wymagającymi wsparcia statystycznego.',
                    'en' => 'Coordinating work with marketing, sales, logistics, and other teams requiring statistical support.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8266,
                'name' => json_encode([
                    'pl' => 'Regularne uczestnictwo w szkoleniach z zakresu statystyki, analizy danych i nowoczesnych narzędzi analitycznych.',
                    'en' => 'Regularly participating in training in statistics, data analysis, and modern analytical tools.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8267,
                'name' => json_encode([
                    'pl' => 'Aktualizowanie wiedzy na temat nowych technik analitycznych, narzędzi statystycznych i trendów w dziedzinie analizy danych.',
                    'en' => 'Updating knowledge of new analytical techniques, statistical tools, and trends in data analysis.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8268,
                'name' => json_encode([
                    'pl' => 'Praktyczne doskonalenie swoich umiejętności poprzez udział w projektach i pracę z rzeczywistymi danymi.',
                    'en' => 'Practically improving skills by participating in projects and working with real data.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8269,
                'name' => json_encode([
                    'pl' => 'Opracowywanie i analizowanie wyników ankiet, w tym wstępne przetwarzanie danych ankietowych.',
                    'en' => 'Developing and analyzing survey results, including preliminary processing of survey data.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8270,
                'name' => json_encode([
                    'pl' => 'Tworzenie narzędzi do zbierania danych ankietowych oraz wsparcie w ich rozesłaniu i monitorowaniu odpowiedzi.',
                    'en' => 'Creating tools for collecting survey data and assisting in distributing and monitoring responses.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8271,
                'name' => json_encode([
                    'pl' => 'Analiza wyników ankiet oraz sporządzanie raportów na ich podstawie.',
                    'en' => 'Analyzing survey results and preparing reports based on them.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8272,
                'name' => json_encode([
                    'pl' => 'Pomoc w opracowywaniu metod i technik badawczych odpowiednich do analizowanego zagadnienia.',
                    'en' => 'Assisting in developing research methods and techniques appropriate for the analyzed issue.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8273,
                'name' => json_encode([
                    'pl' => 'Dobór odpowiednich metod statystycznych do charakterystyki zbieranych danych.',
                    'en' => 'Selecting appropriate statistical methods for characterizing collected data.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8274,
                'name' => json_encode([
                    'pl' => 'Współpraca z zespołem badawczym w celu przeprowadzenia kompleksowych analiz.',
                    'en' => 'Collaborating with the research team to conduct comprehensive analyses.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
        ];
        $TECHNIK_ADMINISTRACJI = [
            [
                'id' => 8275,
                'name' => json_encode([
                    'pl' => 'Przyjmowanie, sortowanie i dystrybucja korespondencji przychodzącej i wychodzącej.',
                    'en' => 'Receiving, sorting, and distributing incoming and outgoing correspondence.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8276,
                'name' => json_encode([
                    'pl' => 'Przygotowywanie dokumentów do wysyłki, w tym listów, paczek i przesyłek kurierskich.',
                    'en' => 'Preparing documents for shipment, including letters, packages, and courier deliveries.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8277,
                'name' => json_encode([
                    'pl' => 'Rejestrowanie korespondencji w systemie oraz dbanie o jej terminowe dostarczanie do odpowiednich osób.',
                    'en' => 'Registering correspondence in the system and ensuring its timely delivery to the appropriate individuals.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8278,
                'name' => json_encode([
                    'pl' => 'Prowadzenie rejestrów dokumentów, ich archiwizacja oraz odpowiednie przechowywanie w formie papierowej lub elektronicznej.',
                    'en' => 'Maintaining document registers, archiving them, and ensuring proper storage in either paper or electronic form.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8279,
                'name' => json_encode([
                    'pl' => 'Organizowanie dokumentów zgodnie z polityką firmy, aby były łatwo dostępne dla uprawnionych osób.',
                    'en' => 'Organizing documents according to company policy to ensure easy access for authorized personnel.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8280,
                'name' => json_encode([
                    'pl' => 'Dbanie o zgodność dokumentacji z przepisami dotyczącymi ochrony danych osobowych.',
                    'en' => 'Ensuring that documentation complies with regulations concerning personal data protection.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8281,
                'name' => json_encode([
                    'pl' => 'Sporządzanie dokumentów biurowych, takich jak raporty, zestawienia, notatki i pisma służbowe.',
                    'en' => 'Preparing office documents such as reports, summaries, notes, and official correspondence.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8282,
                'name' => json_encode([
                    'pl' => 'Tworzenie prostych dokumentów finansowych, np. zestawień kosztów lub raportów wydatków.',
                    'en' => 'Creating simple financial documents, e.g., cost summaries or expense reports.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8283,
                'name' => json_encode([
                    'pl' => 'Edytowanie i formatowanie dokumentów zgodnie z wewnętrznymi standardami organizacji.',
                    'en' => 'Editing and formatting documents according to the organization’s internal standards.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8284,
                'name' => json_encode([
                    'pl' => 'Obsługa sprzętu biurowego, takiego jak drukarki, kopiarki, skanery, faksy i inne.',
                    'en' => 'Operating office equipment such as printers, copiers, scanners, faxes, and others.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8285,
                'name' => json_encode([
                    'pl' => 'Rozwiązywanie drobnych problemów technicznych oraz zgłaszanie awarii do działu IT lub serwisu.',
                    'en' => 'Resolving minor technical issues and reporting malfunctions to the IT department or service provider.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8286,
                'name' => json_encode([
                    'pl' => 'Dbanie o dostępność materiałów eksploatacyjnych, takich jak papier, tonery i inne niezbędne akcesoria.',
                    'en' => 'Ensuring the availability of consumables such as paper, toners, and other necessary supplies.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8287,
                'name' => json_encode([
                    'pl' => 'Witanie gości, udzielanie podstawowych informacji i kierowanie ich do odpowiednich osób lub działów.',
                    'en' => 'Welcoming guests, providing basic information, and directing them to the appropriate individuals or departments.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8288,
                'name' => json_encode([
                    'pl' => 'Odbieranie telefonów, przekazywanie wiadomości oraz odpowiadanie na zapytania e-mailowe.',
                    'en' => 'Answering phones, passing messages, and responding to email inquiries.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8289,
                'name' => json_encode([
                    'pl' => 'Dbanie o profesjonalny wizerunek organizacji w kontaktach z klientami, interesantami i innymi odwiedzającymi.',
                    'en' => 'Maintaining a professional image of the organization in interactions with clients, visitors, and other stakeholders.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8290,
                'name' => json_encode([
                    'pl' => 'Organizacja kalendarza spotkań, planowanie terminów i rezerwacja sal konferencyjnych.',
                    'en' => 'Organizing the calendar of meetings, planning dates, and reserving conference rooms.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8291,
                'name' => json_encode([
                    'pl' => 'Przypominanie o nadchodzących spotkaniach oraz dbanie o dostępność zasobów biurowych potrzebnych na spotkania.',
                    'en' => 'Reminding about upcoming meetings and ensuring the availability of office resources needed for meetings.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8292,
                'name' => json_encode([
                    'pl' => 'Przygotowywanie sal do spotkań, w tym ustawianie sprzętu, dokumentów oraz zamówienie cateringu, jeśli jest wymagany.',
                    'en' => 'Preparing rooms for meetings, including setting up equipment, documents, and ordering catering if required.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8293,
                'name' => json_encode([
                    'pl' => 'Wspieranie działów, takich jak HR, księgowość, marketing, w wykonywaniu codziennych zadań administracyjnych.',
                    'en' => 'Supporting departments such as HR, accounting, marketing in performing daily administrative tasks.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8294,
                'name' => json_encode([
                    'pl' => 'Przygotowywanie i uzupełnianie dokumentów potrzebnych do realizacji zadań poszczególnych działów.',
                    'en' => 'Preparing and completing documents needed for the execution of tasks by various departments.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8295,
                'name' => json_encode([
                    'pl' => 'Współpraca z innymi pracownikami w celu realizacji projektów i zadań administracyjnych.',
                    'en' => 'Cooperating with other employees to execute projects and administrative tasks.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8296,
                'name' => json_encode([
                    'pl' => 'Monitorowanie zapasów materiałów biurowych, zamawianie niezbędnych materiałów oraz ich dystrybucja.',
                    'en' => 'Monitoring supplies of office materials, ordering necessary supplies, and distributing them.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8297,
                'name' => json_encode([
                    'pl' => 'Współpraca z dostawcami w celu zapewnienia terminowych dostaw materiałów biurowych.',
                    'en' => 'Cooperating with suppliers to ensure timely delivery of office materials.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8298,
                'name' => json_encode([
                    'pl' => 'Dbanie o porządek w biurze oraz dostępność materiałów dla pracowników.',
                    'en' => 'Maintaining order in the office and ensuring the availability of supplies for employees.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8299,
                'name' => json_encode([
                    'pl' => 'Pomoc w opracowywaniu i aktualizacji procedur biurowych i administracyjnych.',
                    'en' => 'Assisting in the development and updating of office and administrative procedures.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8300,
                'name' => json_encode([
                    'pl' => 'Przestrzeganie wewnętrznych standardów organizacji oraz dbanie o ich zgodność z obowiązującymi przepisami.',
                    'en' => 'Adhering to the internal standards of the organization and ensuring compliance with applicable regulations.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8301,
                'name' => json_encode([
                    'pl' => 'Instruowanie nowych pracowników w zakresie obowiązujących procedur oraz zasad pracy w biurze.',
                    'en' => 'Instructing new employees on current procedures and workplace rules in the office.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8302,
                'name' => json_encode([
                    'pl' => 'Współpraca z działem księgowości przy sporządzaniu podstawowych dokumentów finansowych, takich jak faktury i rachunki.',
                    'en' => 'Collaborating with the accounting department to prepare basic financial documents such as invoices and receipts.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8303,
                'name' => json_encode([
                    'pl' => 'Ewidencjonowanie wydatków biurowych i przygotowywanie zestawień finansowych na potrzeby rozliczeń.',
                    'en' => 'Recording office expenses and preparing financial summaries for settlement purposes.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8304,
                'name' => json_encode([
                    'pl' => 'Pomoc w rozliczaniu delegacji i wydatków służbowych pracowników.',
                    'en' => 'Assisting in settling employee travel expenses and business expenses.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8305,
                'name' => json_encode([
                    'pl' => 'Monitorowanie obiegu dokumentów w firmie, dbanie o ich terminowe dostarczenie do odpowiednich działów.',
                    'en' => 'Monitoring the circulation of documents in the company, ensuring their timely delivery to the appropriate departments.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8306,
                'name' => json_encode([
                    'pl' => 'Kontrola nad zgodnością dokumentacji z procedurami firmy oraz utrzymywanie porządku w dokumentacji.',
                    'en' => 'Ensuring compliance of documentation with company procedures and maintaining order in documentation.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8307,
                'name' => json_encode([
                    'pl' => 'Koordynacja obiegu dokumentów między działami oraz współpraca z innymi pracownikami w zakresie ich przekazywania.',
                    'en' => 'Coordinating the circulation of documents between departments and collaborating with other employees in this regard.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8308,
                'name' => json_encode([
                    'pl' => 'Przestrzeganie zasad ochrony danych osobowych, w tym RODO, w codziennej pracy z dokumentacją.',
                    'en' => 'Adhering to personal data protection regulations, including GDPR, in daily work with documentation.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8309,
                'name' => json_encode([
                    'pl' => 'Zapewnienie bezpieczeństwa danych przechowywanych w dokumentacji papierowej i elektronicznej.',
                    'en' => 'Ensuring the security of data stored in paper and electronic documentation.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8310,
                'name' => json_encode([
                    'pl' => 'Zgłaszanie wszelkich naruszeń zasad ochrony danych przełożonym.',
                    'en' => 'Reporting any breaches of data protection rules to superiors.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8311,
                'name' => json_encode([
                    'pl' => 'Pomoc w organizacji szkoleń, warsztatów, konferencji oraz wydarzeń firmowych.',
                    'en' => 'Assisting in organizing training, workshops, conferences, and corporate events.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8312,
                'name' => json_encode([
                    'pl' => 'Koordynacja działań związanych z przygotowaniem sal, sprzętu, materiałów edukacyjnych oraz cateringu.',
                    'en' => 'Coordinating activities related to preparing rooms, equipment, educational materials, and catering.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8313,
                'name' => json_encode([
                    'pl' => 'Współpraca z działem HR lub innymi działami przy organizacji wydarzeń firmowych.',
                    'en' => 'Cooperating with the HR department or other departments in organizing corporate events.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8314,
                'name' => json_encode([
                    'pl' => 'Wsparcie działu IT w podstawowych czynnościach administracyjnych, np. zgłaszanie awarii sprzętu lub zamówień na nowe urządzenia.',
                    'en' => 'Supporting the IT department in basic administrative tasks, e.g., reporting equipment failures or orders for new devices.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8315,
                'name' => json_encode([
                    'pl' => 'Utrzymywanie porządku w dokumentacji związanej ze sprzętem biurowym i systemami informatycznymi.',
                    'en' => 'Maintaining order in documentation related to office equipment and IT systems.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8316,
                'name' => json_encode([
                    'pl' => 'Koordynacja działań związanych z wymianą sprzętu biurowego lub jego naprawą.',
                    'en' => 'Coordinating activities related to the replacement of office equipment or its repair.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8317,
                'name' => json_encode([
                    'pl' => 'Odpowiadanie na pytania pracowników dotyczące procedur biurowych, zasad organizacyjnych oraz polityki firmy.',
                    'en' => 'Responding to employee inquiries regarding office procedures, organizational rules, and company policies.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8318,
                'name' => json_encode([
                    'pl' => 'Pomoc w rozwiązywaniu problemów administracyjnych i logistycznych związanych z codzienną pracą.',
                    'en' => 'Assisting in resolving administrative and logistical issues related to daily operations.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8319,
                'name' => json_encode([
                    'pl' => 'Wsparcie nowych pracowników w procesie wdrożenia i adaptacji do pracy biurowej.',
                    'en' => 'Supporting new employees in the onboarding process and adapting to office work.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8320,
                'name' => json_encode([
                    'pl' => 'Uczestnictwo w szkoleniach i kursach z zakresu administracji biurowej, ochrony danych osobowych, obsługi klienta i innych wymaganych umiejętności.',
                    'en' => 'Participating in training and courses related to office administration, data protection, customer service, and other required skills.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8321,
                'name' => json_encode([
                    'pl' => 'Aktualizowanie wiedzy na temat nowych procedur, przepisów i narzędzi administracyjnych.',
                    'en' => 'Updating knowledge about new procedures, regulations, and administrative tools.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8322,
                'name' => json_encode([
                    'pl' => 'Stałe doskonalenie umiejętności, aby sprostać bieżącym wymaganiom organizacyjnym i administracyjnym.',
                    'en' => 'Continuous improvement of skills to meet current organizational and administrative requirements.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ]
        ];
        $STENOGRAF_PROTOKOLANT = [
            [
                'id' => 8323,
                'name' => json_encode([
                    'pl' => 'Sporządzanie stenogramów z przebiegu rozpraw sądowych, posiedzeń organów administracyjnych, konferencji czy spotkań formalnych.',
                    'en' => 'Preparing transcripts from court hearings, administrative body meetings, conferences, or formal gatherings.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8324,
                'name' => json_encode([
                    'pl' => 'Zapisywanie treści wypowiedzi uczestników spotkań z możliwie największą dokładnością.',
                    'en' => 'Recording the content of participants\' statements at meetings with as much accuracy as possible.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8325,
                'name' => json_encode([
                    'pl' => 'Dostosowanie prędkości zapisu do tempa mówienia, aby uchwycić wszystkie istotne informacje.',
                    'en' => 'Adjusting the recording speed to the speaking pace to capture all relevant information.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8326,
                'name' => json_encode([
                    'pl' => 'Redagowanie protokołów na podstawie stenogramów lub bezpośrednio z zapisu rozprawy lub spotkania.',
                    'en' => 'Editing minutes based on transcripts or directly from the record of the hearing or meeting.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8327,
                'name' => json_encode([
                    'pl' => 'Zachowanie dokładności i precyzji podczas przepisywania treści rozmów, uwzględniając wszelkie istotne szczegóły.',
                    'en' => 'Maintaining accuracy and precision while transcribing conversations, including all essential details.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8328,
                'name' => json_encode([
                    'pl' => 'Dbanie o czytelność, strukturę i spójność sporządzanych protokołów.',
                    'en' => 'Ensuring the readability, structure, and coherence of the minutes prepared.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8329,
                'name' => json_encode([
                    'pl' => 'Korzystanie z urządzeń nagrywających, takich jak mikrofony i dyktafony, aby wesprzeć proces zapisu.',
                    'en' => 'Using recording devices such as microphones and dictaphones to support the recording process.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8330,
                'name' => json_encode([
                    'pl' => 'Monitorowanie pracy urządzeń w celu zapewnienia wysokiej jakości nagrań dźwiękowych.',
                    'en' => 'Monitoring the operation of devices to ensure high-quality audio recordings.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8331,
                'name' => json_encode([
                    'pl' => 'Archiwizowanie nagrań w sposób umożliwiający ich późniejsze odsłuchanie lub użycie do transkrypcji.',
                    'en' => 'Archiving recordings in a way that allows for later playback or use for transcription.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8332,
                'name' => json_encode([
                    'pl' => 'Korzystanie ze stenografii lub innych metod szybkiego zapisu, aby dokładnie zanotować słowa mówców.',
                    'en' => 'Using shorthand or other fast recording methods to accurately note the speakers\' words.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8333,
                'name' => json_encode([
                    'pl' => 'Stosowanie skrótów i znaków stenograficznych, które umożliwiają szybki zapis rozmów.',
                    'en' => 'Using abbreviations and shorthand symbols that enable quick recording of conversations.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8334,
                'name' => json_encode([
                    'pl' => 'Doskonalenie technik szybkiego pisania i stenografii, aby nadążyć za tempem mówców.',
                    'en' => 'Improving fast writing and shorthand techniques to keep up with the speakers\' pace.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8335,
                'name' => json_encode([
                    'pl' => 'Przepisywanie nagrań dźwiękowych na tekst, dbając o pełną zgodność z nagraną treścią.',
                    'en' => 'Transcribing audio recordings into text, ensuring full compliance with the recorded content.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8336,
                'name' => json_encode([
                    'pl' => 'Poprawianie błędów i nieścisłości podczas transkrypcji, aby zapewnić spójność i zrozumiałość tekstu.',
                    'en' => 'Correcting errors and inconsistencies during transcription to ensure coherence and clarity of the text.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8337,
                'name' => json_encode([
                    'pl' => 'Dbanie o formatowanie i poprawność językową przepisanego tekstu.',
                    'en' => 'Ensuring the formatting and language correctness of the transcribed text.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8338,
                'name' => json_encode([
                    'pl' => 'Rzetelne dokumentowanie wypowiedzi bez osobistych interpretacji czy komentarzy.',
                    'en' => 'Accurately documenting statements without personal interpretations or comments.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8339,
                'name' => json_encode([
                    'pl' => 'Unikanie parafrazowania lub wprowadzania zmian, które mogłyby zniekształcić treść wypowiedzi.',
                    'en' => 'Avoiding paraphrasing or making changes that could distort the content of the statements.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8340,
                'name' => json_encode([
                    'pl' => 'Wierność zapisu w odniesieniu do mówionego słowa oraz intencji mówców.',
                    'en' => 'Fidelity of the record to the spoken word and the speakers\' intentions.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8341,
                'name' => json_encode([
                    'pl' => 'Przechowywanie sporządzonych protokołów i stenogramów w sposób umożliwiający ich łatwy dostęp.',
                    'en' => 'Storing prepared minutes and transcripts in a way that allows for easy access.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8342,
                'name' => json_encode([
                    'pl' => 'Organizowanie archiwum zgodnie z zasadami ochrony dokumentacji i danych.',
                    'en' => 'Organizing the archive according to the principles of document and data protection.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8343,
                'name' => json_encode([
                    'pl' => 'Dbanie o zgodność archiwizacji z przepisami o ochronie danych osobowych i poufności.',
                    'en' => 'Ensuring that archiving complies with regulations on the protection of personal data and confidentiality.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8344,
                'name' => json_encode([
                    'pl' => 'Ochrona danych osobowych i treści poufnych zapisów zgodnie z obowiązującymi przepisami.',
                    'en' => 'Protecting personal data and confidential content of records in accordance with applicable regulations.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8345,
                'name' => json_encode([
                    'pl' => 'Zapewnienie, że dokumenty są dostępne tylko dla osób upoważnionych i zabezpieczone przed nieuprawnionym dostępem.',
                    'en' => 'Ensuring that documents are accessible only to authorized persons and secured against unauthorized access.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8346,
                'name' => json_encode([
                    'pl' => 'Przestrzeganie zasad etyki zawodowej i poufności w stosunku do treści zapisywanych rozmów.',
                    'en' => 'Adhering to professional ethics and confidentiality regarding the recorded conversations.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8347,
                'name' => json_encode([
                    'pl' => 'Dokonywanie korekt i poprawek w protokołach przed ich oficjalnym zatwierdzeniem.',
                    'en' => 'Making corrections and revisions to the minutes before their official approval.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8348,
                'name' => json_encode([
                    'pl' => 'Ujednolicanie stylistyki dokumentów, poprawa błędów językowych i formatowanie tekstu.',
                    'en' => 'Standardizing the style of documents, correcting language errors, and formatting the text.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8349,
                'name' => json_encode([
                    'pl' => 'Sprawdzanie protokołów pod kątem zgodności z zasadami gramatyki, ortografii i interpunkcji.',
                    'en' => 'Checking minutes for compliance with grammar, spelling, and punctuation rules.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8350,
                'name' => json_encode([
                    'pl' => 'Ścisła współpraca z sędziami, prawnikami, administracją sądową i innymi urzędnikami w zakresie sporządzania protokołów.',
                    'en' => 'Close cooperation with judges, lawyers, court administration, and other officials in preparing minutes.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8351,
                'name' => json_encode([
                    'pl' => 'Dostosowywanie pracy do wymagań organów sądowych i administracyjnych dotyczących dokumentacji procesowej.',
                    'en' => 'Adjusting work to the requirements of judicial and administrative bodies regarding procedural documentation.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8352,
                'name' => json_encode([
                    'pl' => 'Udzielanie informacji na temat procedur sporządzania protokołów, jeśli jest to wymagane przez inne strony.',
                    'en' => 'Providing information about the procedures for preparing minutes if required by other parties.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8353,
                'name' => json_encode([
                    'pl' => 'Aktywny udział w posiedzeniach, rozprawach i innych formalnych spotkaniach w celu bezpośredniego zapisu ich przebiegu.',
                    'en' => 'Actively participating in meetings, hearings, and other formal gatherings for direct recording of their course.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8354,
                'name' => json_encode([
                    'pl' => 'Wspieranie pracy przewodniczących posiedzeń oraz informowanie uczestników o zasadach protokołowania.',
                    'en' => 'Supporting the work of chairpersons and informing participants about the rules of minute-taking.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8355,
                'name' => json_encode([
                    'pl' => 'Przestrzeganie zasad i protokołów dotyczących zachowania oraz zapisu na posiedzeniach.',
                    'en' => 'Adhering to the rules and protocols regarding conduct and recording at meetings.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8356,
                'name' => json_encode([
                    'pl' => 'Prowadzenie ewidencji dotyczącej uczestników, dat, tematów i wyników poszczególnych rozpraw i spotkań.',
                    'en' => 'Keeping records of participants, dates, topics, and outcomes of individual hearings and meetings.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8357,
                'name' => json_encode([
                    'pl' => 'Przechowywanie dokumentacji w sposób pozwalający na jej szybkie odnalezienie w przypadku potrzeby.',
                    'en' => 'Storing documentation in a manner that allows for quick retrieval when needed.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8358,
                'name' => json_encode([
                    'pl' => 'Dbanie o zgodność rejestrów z przepisami dotyczącymi dokumentacji urzędowej.',
                    'en' => 'Ensuring compliance of records with regulations regarding official documentation.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8359,
                'name' => json_encode([
                    'pl' => 'Przedkładanie sporządzonych protokołów i stenogramów organom, które zleciły ich wykonanie.',
                    'en' => 'Submitting prepared minutes and transcripts to the authorities that commissioned them.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8360,
                'name' => json_encode([
                    'pl' => 'Dostosowywanie materiałów do wymogów formalnych sądu lub instytucji zlecającej.',
                    'en' => 'Adjusting materials to the formal requirements of the court or commissioning institution.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8361,
                'name' => json_encode([
                    'pl' => 'Weryfikowanie kompletności i zgodności dokumentów przed ich przekazaniem.',
                    'en' => 'Verifying the completeness and compliance of documents before their submission.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8362,
                'name' => json_encode([
                    'pl' => 'Regularne uczestnictwo w szkoleniach z zakresu stenografii, protokołowania oraz ochrony danych osobowych.',
                    'en' => 'Regularly participating in training on stenography, minute-taking, and data protection.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8363,
                'name' => json_encode([
                    'pl' => 'Aktualizowanie wiedzy o nowych przepisach, technologiach i metodach rejestracji rozmów.',
                    'en' => 'Updating knowledge of new regulations, technologies, and methods of recording conversations.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8364,
                'name' => json_encode([
                    'pl' => 'Ciągłe doskonalenie technik stenograficznych i szybkiego pisania.',
                    'en' => 'Continuously improving shorthand techniques and fast writing.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8365,
                'name' => json_encode([
                    'pl' => 'Sporządzanie dokumentacji zgodnie z wymogami formalnymi dotyczącymi protokołowania w sądach lub innych instytucjach.',
                    'en' => 'Preparing documentation in accordance with the formal requirements for minute-taking in courts or other institutions.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8366,
                'name' => json_encode([
                    'pl' => 'Przestrzeganie zasad, takich jak zachowanie chronologii, wskazywanie osób mówiących i zapisywanie ważnych informacji.',
                    'en' => 'Adhering to rules such as maintaining chronology, indicating speakers, and recording important information.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8367,
                'name' => json_encode([
                    'pl' => 'Dostosowywanie zapisu do wymagań przełożonych lub standardów obowiązujących w danej instytucji.',
                    'en' => 'Adjusting the record to the requirements of superiors or standards applicable in a given institution.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8368,
                'name' => json_encode([
                    'pl' => 'Korzystanie z elektronicznych narzędzi i oprogramowania do protokołowania oraz ich obsługa.',
                    'en' => 'Using electronic tools and software for minute-taking and managing them.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8369,
                'name' => json_encode([
                    'pl' => 'Stosowanie systemów do zarządzania dokumentacją, takich jak archiwa cyfrowe, w celu przechowywania protokołów.',
                    'en' => 'Using document management systems, such as digital archives, to store minutes.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8370,
                'name' => json_encode([
                    'pl' => 'Weryfikacja poprawności działania narzędzi elektronicznych i zgłaszanie problemów technicznych.',
                    'en' => 'Verifying the proper functioning of electronic tools and reporting technical issues.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ]
        ];
        $POZOSTALI_PRACOWNICY_ADMINISTRACYJNI_SEKRETARZE_BIURA_ZARZĄDU = [
            [
                'id' => 8371,
                'name' => json_encode([
                    'pl' => 'Organizowanie harmonogramu spotkań, konferencji i podróży służbowych członków zarządu.',
                    'en' => 'Organizing the schedule of meetings, conferences, and business trips for board members.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8372,
                'name' => json_encode([
                    'pl' => 'Koordynacja terminów i rezerwacja sal konferencyjnych oraz dbanie o ich dostępność.',
                    'en' => 'Coordinating dates and reserving conference rooms, ensuring their availability.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8373,
                'name' => json_encode([
                    'pl' => 'Przypominanie zarządowi o nadchodzących spotkaniach oraz zapewnienie niezbędnych materiałów na spotkania.',
                    'en' => 'Reminding the board about upcoming meetings and providing necessary materials for the meetings.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8374,
                'name' => json_encode([
                    'pl' => 'Sporządzanie agendy spotkań oraz dbanie o ich przebieg zgodnie z harmonogramem.',
                    'en' => 'Preparing the agenda for meetings and ensuring they proceed according to schedule.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8375,
                'name' => json_encode([
                    'pl' => 'Przygotowywanie i udostępnianie dokumentów, prezentacji oraz innych materiałów potrzebnych na spotkania.',
                    'en' => 'Preparing and distributing documents, presentations, and other materials needed for meetings.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8376,
                'name' => json_encode([
                    'pl' => 'Sporządzanie protokołów i notatek ze spotkań oraz przekazywanie ich uczestnikom.',
                    'en' => 'Taking minutes and notes during meetings and distributing them to participants.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8377,
                'name' => json_encode([
                    'pl' => 'Przyjmowanie, sortowanie, wysyłanie oraz archiwizacja korespondencji przychodzącej i wychodzącej.',
                    'en' => 'Receiving, sorting, sending, and archiving incoming and outgoing correspondence.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8378,
                'name' => json_encode([
                    'pl' => 'Obsługa zapytań telefonicznych, e-mailowych oraz kontaktów z klientami i partnerami biznesowymi.',
                    'en' => 'Handling phone inquiries, emails, and contacts with clients and business partners.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8379,
                'name' => json_encode([
                    'pl' => 'Rejestrowanie korespondencji w systemie oraz zapewnienie, że jest ona dostarczana do odpowiednich osób.',
                    'en' => 'Logging correspondence in the system and ensuring it is delivered to the appropriate persons.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8380,
                'name' => json_encode([
                    'pl' => 'Sporządzanie dokumentów, raportów, notatek i prezentacji na potrzeby zarządu.',
                    'en' => 'Preparing documents, reports, notes, and presentations for the board.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8381,
                'name' => json_encode([
                    'pl' => 'Redagowanie i edytowanie dokumentów, dbając o ich poprawność językową oraz estetykę.',
                    'en' => 'Editing and proofreading documents, ensuring their linguistic correctness and aesthetics.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8382,
                'name' => json_encode([
                    'pl' => 'Opracowywanie zestawień, analiz i raportów zgodnie z wymaganiami zarządu.',
                    'en' => 'Developing summaries, analyses, and reports according to the board’s requirements.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8383,
                'name' => json_encode([
                    'pl' => 'Organizowanie i przechowywanie dokumentów w sposób uporządkowany, zgodnie z polityką firmy.',
                    'en' => 'Organizing and storing documents in an orderly manner according to company policy.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8384,
                'name' => json_encode([
                    'pl' => 'Przechowywanie dokumentacji w formie papierowej lub cyfrowej oraz dbanie o jej bezpieczeństwo.',
                    'en' => 'Storing documentation in paper or digital form and ensuring its security.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8385,
                'name' => json_encode([
                    'pl' => 'Tworzenie i aktualizacja rejestrów dokumentów, aby były one łatwo dostępne dla uprawnionych pracowników.',
                    'en' => 'Creating and updating document registers to ensure easy access for authorized employees.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8386,
                'name' => json_encode([
                    'pl' => 'Witanie gości, udzielanie informacji oraz kierowanie ich do odpowiednich osób w firmie.',
                    'en' => 'Welcoming guests, providing information, and directing them to the appropriate persons in the company.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8387,
                'name' => json_encode([
                    'pl' => 'Dbanie o profesjonalny wizerunek firmy w kontakcie z interesantami, klientami oraz partnerami biznesowymi.',
                    'en' => 'Maintaining a professional image of the company in contact with stakeholders, clients, and business partners.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8388,
                'name' => json_encode([
                    'pl' => 'Organizacja obsługi gości, w tym zapewnienie odpowiednich warunków podczas ich pobytu (np. napoje, dostęp do internetu).',
                    'en' => 'Organizing guest services, ensuring appropriate conditions during their stay (e.g., drinks, internet access).'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8389,
                'name' => json_encode([
                    'pl' => 'Monitorowanie zapasów materiałów biurowych oraz składanie zamówień w razie potrzeby.',
                    'en' => 'Monitoring office supply inventories and placing orders as needed.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8390,
                'name' => json_encode([
                    'pl' => 'Współpraca z dostawcami, negocjowanie warunków dostaw oraz dbanie o terminowość dostaw.',
                    'en' => 'Cooperating with suppliers, negotiating delivery terms, and ensuring timely deliveries.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8391,
                'name' => json_encode([
                    'pl' => 'Utrzymywanie porządku w biurze zarządu i zapewnienie dostępności niezbędnych materiałów.',
                    'en' => 'Maintaining order in the management office and ensuring the availability of necessary materials.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8392,
                'name' => json_encode([
                    'pl' => 'Rezerwacja biletów lotniczych, kolejowych, hoteli oraz organizacja transportu na potrzeby podróży zarządu.',
                    'en' => 'Booking airline tickets, train tickets, hotels, and organizing transportation for board travel.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8393,
                'name' => json_encode([
                    'pl' => 'Przygotowywanie harmonogramu podróży oraz dbanie o niezbędne dokumenty, np. bilety, rezerwacje.',
                    'en' => 'Preparing travel itineraries and ensuring necessary documents such as tickets and reservations.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8394,
                'name' => json_encode([
                    'pl' => 'Koordynacja rozliczeń wydatków związanych z podróżami służbowymi członków zarządu.',
                    'en' => 'Coordinating the settlement of expenses related to board members’ business trips.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8395,
                'name' => json_encode([
                    'pl' => 'Przygotowywanie dokumentacji finansowej, np. faktur, rachunków, raportów kosztowych.',
                    'en' => 'Preparing financial documentation such as invoices, bills, and expense reports.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8396,
                'name' => json_encode([
                    'pl' => 'Ewidencja wydatków zarządu oraz przygotowywanie zestawień finansowych na potrzeby rozliczeń.',
                    'en' => 'Recording board expenses and preparing financial summaries for settlements.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8397,
                'name' => json_encode([
                    'pl' => 'Współpraca z działem księgowości w zakresie rozliczeń i codziennych operacji finansowych.',
                    'en' => 'Collaborating with the accounting department on settlements and daily financial operations.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8398,
                'name' => json_encode([
                    'pl' => 'Dbanie o ochronę danych osobowych oraz zachowanie poufności informacji dotyczących zarządu i firmy.',
                    'en' => 'Ensuring the protection of personal data and confidentiality of information regarding the board and the company.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8399,
                'name' => json_encode([
                    'pl' => 'Przestrzeganie wewnętrznych procedur ochrony informacji i danych osobowych.',
                    'en' => 'Adhering to internal procedures for the protection of information and personal data.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8400,
                'name' => json_encode([
                    'pl' => 'Przechowywanie poufnych dokumentów w bezpieczny sposób oraz zapewnienie, że są dostępne tylko dla uprawnionych osób.',
                    'en' => 'Storing confidential documents securely and ensuring they are only accessible to authorized individuals.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8401,
                'name' => json_encode([
                    'pl' => 'Wspieranie działów, które bezpośrednio współpracują z zarządem, w realizacji codziennych zadań administracyjnych.',
                    'en' => 'Supporting departments that work directly with the board in performing daily administrative tasks.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8402,
                'name' => json_encode([
                    'pl' => 'Pomoc w przygotowywaniu dokumentów, prezentacji oraz innych materiałów potrzebnych do realizacji projektów.',
                    'en' => 'Assisting in preparing documents, presentations, and other materials needed for project implementation.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8403,
                'name' => json_encode([
                    'pl' => 'Współpraca z innymi działami w celu zapewnienia sprawnego przepływu informacji i dokumentacji.',
                    'en' => 'Cooperating with other departments to ensure smooth information and documentation flow.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8404,
                'name' => json_encode([
                    'pl' => 'Pomoc w opracowywaniu i aktualizacji procedur administracyjnych obowiązujących w biurze zarządu.',
                    'en' => 'Assisting in the development and updating of administrative procedures in the management office.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8405,
                'name' => json_encode([
                    'pl' => 'Przestrzeganie zasad i polityki firmy oraz zapewnienie ich zgodności z obowiązującymi przepisami.',
                    'en' => 'Adhering to the company’s rules and policies and ensuring compliance with applicable regulations.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8406,
                'name' => json_encode([
                    'pl' => 'Szkolenie nowych pracowników w zakresie zasad pracy administracyjnej oraz polityki poufności firmy.',
                    'en' => 'Training new employees on administrative work principles and the company’s confidentiality policy.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8407,
                'name' => json_encode([
                    'pl' => 'Pomoc w organizacji wewnętrznych wydarzeń, takich jak konferencje, szkolenia, spotkania integracyjne.',
                    'en' => 'Assisting in organizing internal events such as conferences, training sessions, and integration meetings.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8408,
                'name' => json_encode([
                    'pl' => 'Koordynacja działań związanych z rezerwacją sal, sprzętu, cateringu oraz zapewnienie potrzebnych materiałów.',
                    'en' => 'Coordinating activities related to booking rooms, equipment, catering, and ensuring necessary materials.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8409,
                'name' => json_encode([
                    'pl' => 'Współpraca z zespołem HR lub innymi działami przy organizacji wydarzeń firmowych.',
                    'en' => 'Collaborating with the HR team or other departments in organizing corporate events.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8410,
                'name' => json_encode([
                    'pl' => 'Przygotowywanie prezentacji multimedialnych, infografik oraz innych materiałów na potrzeby zarządu.',
                    'en' => 'Preparing multimedia presentations, infographics, and other materials for the board.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8411,
                'name' => json_encode([
                    'pl' => 'Tworzenie materiałów marketingowych i informacyjnych do komunikacji wewnętrznej i zewnętrznej.',
                    'en' => 'Creating marketing and informational materials for internal and external communication.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8412,
                'name' => json_encode([
                    'pl' => 'Dbanie o spójność wizualną materiałów i zgodność z identyfikacją wizualną firmy.',
                    'en' => 'Ensuring visual consistency of materials and compliance with the company’s visual identity.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8413,
                'name' => json_encode([
                    'pl' => 'Monitorowanie obiegu dokumentów pomiędzy działami i zarządem, dbając o terminowość i zgodność z procedurami.',
                    'en' => 'Monitoring the flow of documents between departments and the board, ensuring timeliness and compliance with procedures.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8414,
                'name' => json_encode([
                    'pl' => 'Koordynacja obiegu dokumentów i dbanie o ich archiwizację zgodnie z polityką firmy.',
                    'en' => 'Coordinating the flow of documents and ensuring their archiving in accordance with company policy.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8415,
                'name' => json_encode([
                    'pl' => 'Współpraca z innymi działami, aby zapewnić efektywny przepływ informacji i dokumentacji.',
                    'en' => 'Collaborating with other departments to ensure efficient flow of information and documentation.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8416,
                'name' => json_encode([
                    'pl' => 'Regularne uczestnictwo w szkoleniach z zakresu obsługi biura zarządu, ochrony danych, komunikacji i organizacji pracy.',
                    'en' => 'Regularly participating in training on managing the board’s office, data protection, communication, and work organization.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8417,
                'name' => json_encode([
                    'pl' => 'Doskonalenie umiejętności interpersonalnych, organizacyjnych oraz znajomości procedur administracyjnych.',
                    'en' => 'Improving interpersonal and organizational skills, as well as knowledge of administrative procedures.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8418,
                'name' => json_encode([
                    'pl' => 'Aktualizowanie wiedzy na temat nowych narzędzi biurowych, przepisów oraz trendów w zakresie zarządzania biurem.',
                    'en' => 'Updating knowledge of new office tools, regulations, and trends in office management.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8419,
                'name' => json_encode([
                    'pl' => 'Pomoc w organizacji pracy innych pracowników administracyjnych i sekretarzy.',
                    'en' => 'Assisting in organizing the work of other administrative staff and secretaries.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8420,
                'name' => json_encode([
                    'pl' => 'Ustalanie priorytetów zadań biurowych i administracyjnych w porozumieniu z zarządem.',
                    'en' => 'Establishing priorities for office and administrative tasks in agreement with the board.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8421,
                'name' => json_encode([
                    'pl' => 'Delegowanie zadań w razie potrzeby, aby zapewnić terminowe i sprawne wykonanie wszystkich obowiązków.',
                    'en' => 'Delegating tasks as needed to ensure timely and efficient completion of all duties.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ]
        ];
        $SEKRETARKA_MEDYCZNA = [
            [
                'id' => 8422,
                'name' => json_encode([
                    'pl' => 'Witanie pacjentów, udzielanie podstawowych informacji i kierowanie ich do odpowiednich gabinetów.',
                    'en' => 'Welcoming patients, providing basic information, and directing them to the appropriate offices.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8423,
                'name' => json_encode([
                    'pl' => 'Rejestrowanie pacjentów na wizyty, zarządzanie kolejką oraz przypominanie o terminach.',
                    'en' => 'Registering patients for appointments, managing queues, and reminding them of dates.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8424,
                'name' => json_encode([
                    'pl' => 'Aktualizacja danych pacjentów w systemie oraz dbałość o ich zgodność i kompletność.',
                    'en' => 'Updating patient data in the system and ensuring its accuracy and completeness.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8425,
                'name' => json_encode([
                    'pl' => 'Zakładanie i aktualizowanie kartotek pacjentów, dbając o ich kompletność i aktualność.',
                    'en' => 'Creating and updating patient records, ensuring their completeness and currency.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8426,
                'name' => json_encode([
                    'pl' => 'Archiwizowanie dokumentacji medycznej, takiej jak wyniki badań, historie chorób, karty pacjentów.',
                    'en' => 'Archiving medical documentation, such as test results, medical histories, and patient cards.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8427,
                'name' => json_encode([
                    'pl' => 'Zapewnienie bezpieczeństwa i poufności dokumentacji medycznej zgodnie z przepisami o ochronie danych osobowych.',
                    'en' => 'Ensuring the security and confidentiality of medical documentation in accordance with personal data protection regulations.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8428,
                'name' => json_encode([
                    'pl' => 'Koordynowanie terminarza lekarzy, planowanie wizyt pacjentów oraz zarządzanie zmianami w harmonogramie.',
                    'en' => 'Coordinating doctors’ schedules, planning patient visits, and managing changes to the schedule.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8429,
                'name' => json_encode([
                    'pl' => 'Informowanie pacjentów o dostępnych terminach oraz przypominanie o wizytach.',
                    'en' => 'Informing patients about available appointments and reminding them of visits.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8430,
                'name' => json_encode([
                    'pl' => 'Rezerwacja dodatkowego czasu dla pacjentów wymagających dłuższych konsultacji lub procedur medycznych.',
                    'en' => 'Reserving additional time for patients requiring longer consultations or medical procedures.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8431,
                'name' => json_encode([
                    'pl' => 'Odbieranie telefonów, udzielanie informacji dotyczących godzin przyjęć, procedur oraz dostępnych usług.',
                    'en' => 'Answering phone calls, providing information about office hours, procedures, and available services.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8432,
                'name' => json_encode([
                    'pl' => 'Rejestrowanie zapytań telefonicznych i przekazywanie wiadomości lekarzom lub odpowiednim działom.',
                    'en' => 'Recording phone inquiries and forwarding messages to doctors or relevant departments.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8433,
                'name' => json_encode([
                    'pl' => 'Przyjmowanie i wysyłanie korespondencji związanej z dokumentacją medyczną, wynikami badań i skierowaniami.',
                    'en' => 'Receiving and sending correspondence related to medical documentation, test results, and referrals.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8434,
                'name' => json_encode([
                    'pl' => 'Pomoc pacjentom w wypełnianiu formularzy, dokumentów zgłoszeniowych oraz skierowań na badania.',
                    'en' => 'Assisting patients in filling out forms, registration documents, and referrals for tests.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8435,
                'name' => json_encode([
                    'pl' => 'Informowanie pacjentów o wymaganych dokumentach oraz odpowiadanie na pytania dotyczące procedur.',
                    'en' => 'Informing patients about required documents and answering questions about procedures.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8436,
                'name' => json_encode([
                    'pl' => 'Wsparcie pacjentów w procesie uzyskiwania dokumentacji medycznej, takiej jak wyniki badań czy zaświadczenia lekarskie.',
                    'en' => 'Supporting patients in obtaining medical documentation such as test results or medical certificates.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8437,
                'name' => json_encode([
                    'pl' => 'Przechowywanie dokumentacji zgodnie z przepisami dotyczących ochrony danych osobowych (RODO).',
                    'en' => 'Storing documentation in accordance with personal data protection regulations (GDPR).'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8438,
                'name' => json_encode([
                    'pl' => 'Archiwizacja kartotek pacjentów, wyników badań, historii chorób oraz innych dokumentów medycznych.',
                    'en' => 'Archiving patient files, test results, medical histories, and other medical documents.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8439,
                'name' => json_encode([
                    'pl' => 'Usuwanie dokumentacji po upływie okresu przechowywania, zgodnie z wymogami prawnymi.',
                    'en' => 'Removing documentation after the retention period has expired, in accordance with legal requirements.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8440,
                'name' => json_encode([
                    'pl' => 'Wprowadzanie danych pacjentów, wyników badań oraz innych informacji medycznych do systemu komputerowego.',
                    'en' => 'Entering patient data, test results, and other medical information into the computer system.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8441,
                'name' => json_encode([
                    'pl' => 'Obsługa elektronicznych systemów zarządzania dokumentacją, takich jak EDM (Elektroniczna Dokumentacja Medyczna).',
                    'en' => 'Operating electronic document management systems, such as EDM (Electronic Medical Documentation).'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8442,
                'name' => json_encode([
                    'pl' => 'Uaktualnianie danych pacjentów w systemie oraz monitorowanie zgodności z dokumentacją papierową.',
                    'en' => 'Updating patient data in the system and monitoring its consistency with paper documentation.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8443,
                'name' => json_encode([
                    'pl' => 'Obsługa drukarek, skanerów, kserokopiarek oraz innych urządzeń biurowych używanych w placówce medycznej.',
                    'en' => 'Operating printers, scanners, copiers, and other office equipment used in the medical facility.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8444,
                'name' => json_encode([
                    'pl' => 'Przygotowywanie sprzętu biurowego do codziennej pracy oraz zgłaszanie usterek i problemów technicznych.',
                    'en' => 'Preparing office equipment for daily use and reporting faults and technical issues.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8445,
                'name' => json_encode([
                    'pl' => 'Obsługa systemów informatycznych służących do zarządzania wizytami, rejestracją i dokumentacją.',
                    'en' => 'Handling information systems used for managing appointments, registration, and documentation.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8446,
                'name' => json_encode([
                    'pl' => 'Przygotowywanie dokumentów, takich jak skierowania, zaświadczenia lekarskie, wyniki badań.',
                    'en' => 'Preparing documents such as referrals, medical certificates, and test results.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8447,
                'name' => json_encode([
                    'pl' => 'Sporządzanie list pacjentów oczekujących na wizyty oraz harmonogramów na potrzeby lekarzy.',
                    'en' => 'Creating lists of patients waiting for appointments and schedules for doctors.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8448,
                'name' => json_encode([
                    'pl' => 'Pomoc lekarzom w przygotowywaniu dokumentacji medycznej do dalszej diagnostyki lub leczenia.',
                    'en' => 'Assisting doctors in preparing medical documentation for further diagnosis or treatment.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8449,
                'name' => json_encode([
                    'pl' => 'Pomoc lekarzom i pielęgniarkom w prowadzeniu dokumentacji pacjentów i sporządzaniu raportów.',
                    'en' => 'Assisting doctors and nurses in maintaining patient documentation and preparing reports.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8450,
                'name' => json_encode([
                    'pl' => 'Organizowanie i przygotowywanie gabinetów na wizyty lekarskie, w tym dostępność dokumentów pacjentów.',
                    'en' => 'Organizing and preparing offices for medical visits, including the availability of patient documents.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8451,
                'name' => json_encode([
                    'pl' => 'Ułatwianie dostępu do dokumentacji pacjentów podczas konsultacji i zabiegów.',
                    'en' => 'Facilitating access to patient documentation during consultations and procedures.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8452,
                'name' => json_encode([
                    'pl' => 'Przestrzeganie przepisów o ochronie danych osobowych, dbanie o poufność dokumentacji medycznej.',
                    'en' => 'Complying with personal data protection regulations, ensuring the confidentiality of medical documentation.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8453,
                'name' => json_encode([
                    'pl' => 'Odpowiednie przechowywanie i archiwizacja dokumentów w sposób zgodny z zasadami RODO.',
                    'en' => 'Proper storage and archiving of documents in accordance with GDPR principles.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8454,
                'name' => json_encode([
                    'pl' => 'Przekazywanie dokumentacji medycznej tylko uprawnionym osobom oraz ochrona informacji pacjentów.',
                    'en' => 'Transferring medical documentation only to authorized persons and protecting patient information.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8455,
                'name' => json_encode([
                    'pl' => 'Informowanie pacjentów o dostępnych usługach, procedurach diagnostycznych oraz zabiegach.',
                    'en' => 'Informing patients about available services, diagnostic procedures, and treatments.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8456,
                'name' => json_encode([
                    'pl' => 'Udzielanie podstawowych informacji o kosztach usług medycznych oraz dostępnych terminach.',
                    'en' => 'Providing basic information about the costs of medical services and available appointments.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8457,
                'name' => json_encode([
                    'pl' => 'Kierowanie pacjentów do odpowiednich specjalistów lub działów w placówce.',
                    'en' => 'Directing patients to the appropriate specialists or departments in the facility.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8458,
                'name' => json_encode([
                    'pl' => 'Monitorowanie zapasów materiałów biurowych i medycznych, składanie zamówień w razie potrzeby.',
                    'en' => 'Monitoring the inventory of office and medical supplies, placing orders as needed.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8459,
                'name' => json_encode([
                    'pl' => 'Współpraca z dostawcami oraz dbanie o terminowe dostawy materiałów niezbędnych do pracy placówki.',
                    'en' => 'Collaborating with suppliers and ensuring timely delivery of materials needed for the facility.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8460,
                'name' => json_encode([
                    'pl' => 'Utrzymywanie porządku w biurze oraz organizowanie przestrzeni roboczej.',
                    'en' => 'Maintaining order in the office and organizing the workspace.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8461,
                'name' => json_encode([
                    'pl' => 'Opracowywanie i wdrażanie procedur biurowych oraz wytycznych dotyczących obsługi pacjentów.',
                    'en' => 'Developing and implementing office procedures and guidelines regarding patient service.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8462,
                'name' => json_encode([
                    'pl' => 'Przestrzeganie standardów i polityki placówki medycznej oraz zapewnienie zgodności z przepisami.',
                    'en' => 'Adhering to the standards and policies of the medical facility and ensuring compliance with regulations.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8463,
                'name' => json_encode([
                    'pl' => 'Udział w szkoleniach z zakresu obsługi pacjenta oraz procedur administracyjnych obowiązujących w placówce.',
                    'en' => 'Participating in training on patient service and administrative procedures in the facility.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8464,
                'name' => json_encode([
                    'pl' => 'Wsparcie organizacyjne przy realizacji warsztatów, szkoleń zdrowotnych i innych działań edukacyjnych.',
                    'en' => 'Providing organizational support for workshops, health training, and other educational activities.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8465,
                'name' => json_encode([
                    'pl' => 'Przygotowywanie materiałów informacyjnych i ulotek dla pacjentów uczestniczących w wydarzeniach.',
                    'en' => 'Preparing informational materials and brochures for patients participating in events.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8466,
                'name' => json_encode([
                    'pl' => 'Koordynacja list uczestników oraz pomoc w przygotowywaniu przestrzeni na potrzeby wydarzeń.',
                    'en' => 'Coordinating participant lists and assisting in preparing space for events.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8467,
                'name' => json_encode([
                    'pl' => 'Regularne uczestnictwo w szkoleniach z zakresu ochrony danych, obsługi pacjenta i procedur administracyjnych.',
                    'en' => 'Regularly participating in training on data protection, patient service, and administrative procedures.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8468,
                'name' => json_encode([
                    'pl' => 'Aktualizowanie wiedzy na temat nowych systemów do zarządzania dokumentacją i rejestracją medyczną.',
                    'en' => 'Updating knowledge about new systems for managing documentation and medical registration.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8469,
                'name' => json_encode([
                    'pl' => 'Ciągłe doskonalenie umiejętności komunikacyjnych, organizacyjnych i technicznych w pracy z pacjentami.',
                    'en' => 'Continuously improving communication, organizational, and technical skills in working with patients.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ]
        ];
        $POZOSTALI_SEKRETARZE_MEDYCZNI_I_POKREWNI = [
            [
                'id' => 8470,
                'name' => json_encode([
                    'pl' => 'Rejestrowanie pacjentów na wizyty oraz udzielanie im informacji dotyczących harmonogramu przyjęć.',
                    'en' => 'Registering patients for appointments and providing them with information about the appointment schedule.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8471,
                'name' => json_encode([
                    'pl' => 'Przyjmowanie pacjentów, witanie ich i kierowanie do odpowiednich gabinetów.',
                    'en' => 'Welcoming patients, guiding them to the appropriate offices.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8472,
                'name' => json_encode([
                    'pl' => 'Udzielanie pacjentom podstawowych informacji o procedurach medycznych i zasadach funkcjonowania placówki.',
                    'en' => 'Providing patients with basic information about medical procedures and the operational rules of the facility.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8473,
                'name' => json_encode([
                    'pl' => 'Zakładanie i prowadzenie kartotek pacjentów, dbając o ich aktualność i kompletność.',
                    'en' => 'Establishing and maintaining patient records, ensuring their accuracy and completeness.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8474,
                'name' => json_encode([
                    'pl' => 'Archiwizacja dokumentów medycznych zgodnie z obowiązującymi przepisami i zasadami ochrony danych osobowych.',
                    'en' => 'Archiving medical documents in accordance with applicable regulations and data protection principles.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8475,
                'name' => json_encode([
                    'pl' => 'Wspieranie personelu medycznego w uzyskiwaniu i przetwarzaniu dokumentacji pacjentów.',
                    'en' => 'Assisting medical staff in obtaining and processing patient documentation.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8476,
                'name' => json_encode([
                    'pl' => 'Wprowadzanie i aktualizacja danych pacjentów w systemach komputerowych.',
                    'en' => 'Entering and updating patient data in computer systems.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8477,
                'name' => json_encode([
                    'pl' => 'Obsługa systemów zarządzania dokumentacją elektroniczną (np. EDM) oraz dbanie o ich zgodność z wersją papierową.',
                    'en' => 'Operating electronic document management systems (e.g., EDM) and ensuring their consistency with paper versions.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8478,
                'name' => json_encode([
                    'pl' => 'Monitorowanie jakości i poprawności danych oraz ich zgodności z danymi w dokumentacji papierowej.',
                    'en' => 'Monitoring the quality and accuracy of data and its consistency with paper documentation.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8479,
                'name' => json_encode([
                    'pl' => 'Planowanie i koordynowanie harmonogramu wizyt pacjentów zgodnie z dostępnością lekarzy.',
                    'en' => 'Planning and coordinating the schedule of patient visits according to doctors’ availability.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8480,
                'name' => json_encode([
                    'pl' => 'Informowanie pacjentów o terminach wizyt i przypominanie o nadchodzących spotkaniach.',
                    'en' => 'Informing patients about appointment dates and reminding them of upcoming meetings.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8481,
                'name' => json_encode([
                    'pl' => 'Dostosowywanie harmonogramu wizyt w zależności od potrzeb pacjentów i lekarzy.',
                    'en' => 'Adjusting the appointment schedule according to the needs of patients and doctors.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8482,
                'name' => json_encode([
                    'pl' => 'Odbieranie telefonów, odpowiadanie na pytania pacjentów dotyczące godzin przyjęć i dostępnych usług.',
                    'en' => 'Answering phones and responding to patients’ questions about appointment times and available services.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8483,
                'name' => json_encode([
                    'pl' => 'Obsługa korespondencji przychodzącej i wychodzącej, w tym związanej z wynikami badań i skierowaniami.',
                    'en' => 'Handling incoming and outgoing correspondence, including results and referrals.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8484,
                'name' => json_encode([
                    'pl' => 'Przekazywanie wiadomości lekarzom i innym członkom personelu medycznego.',
                    'en' => 'Passing messages to doctors and other medical staff.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8485,
                'name' => json_encode([
                    'pl' => 'Wsparcie pacjentów w wypełnianiu formularzy zgłoszeniowych, skierowań na badania oraz innych dokumentów.',
                    'en' => 'Assisting patients in filling out application forms, referral forms, and other documents.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8486,
                'name' => json_encode([
                    'pl' => 'Informowanie pacjentów o wymaganych dokumentach oraz wyjaśnianie procedur medycznych.',
                    'en' => 'Informing patients about required documents and explaining medical procedures.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8487,
                'name' => json_encode([
                    'pl' => 'Udzielanie pomocy pacjentom w uzyskiwaniu dokumentacji medycznej, takich jak wyniki badań i zaświadczenia.',
                    'en' => 'Assisting patients in obtaining medical documentation, such as test results and certificates.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8488,
                'name' => json_encode([
                    'pl' => 'Przygotowywanie zestawień dotyczących liczby pacjentów, raportów z wizyt i innych danych potrzebnych do statystyk medycznych.',
                    'en' => 'Preparing statistics regarding patient numbers, visit reports, and other data needed for medical statistics.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8489,
                'name' => json_encode([
                    'pl' => 'Sporządzanie prostych analiz i zestawień na potrzeby administracyjne placówki medycznej.',
                    'en' => 'Creating simple analyses and summaries for administrative purposes of the medical facility.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8490,
                'name' => json_encode([
                    'pl' => 'Przekazywanie raportów odpowiednim działom i pracownikom placówki.',
                    'en' => 'Delivering reports to the appropriate departments and staff of the facility.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8491,
                'name' => json_encode([
                    'pl' => 'Organizowanie i przechowywanie dokumentacji pacjentów zgodnie z przepisami dotyczącymi ochrony danych.',
                    'en' => 'Organizing and storing patient documentation in accordance with data protection regulations.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8492,
                'name' => json_encode([
                    'pl' => 'Archiwizacja dokumentów w sposób umożliwiający ich łatwe wyszukiwanie i dostępność.',
                    'en' => 'Archiving documents in a way that allows for easy searching and accessibility.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8493,
                'name' => json_encode([
                    'pl' => 'Przekazywanie dokumentacji do archiwum lub niszczenie dokumentów zgodnie z procedurami po upływie okresu przechowywania.',
                    'en' => 'Transferring documentation to the archive or destroying documents in accordance with procedures after the retention period expires.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8494,
                'name' => json_encode([
                    'pl' => 'Obsługa urządzeń biurowych, takich jak drukarki, skanery, kserokopiarki, faks i inne sprzęty.',
                    'en' => 'Operating office equipment such as printers, scanners, copiers, faxes, and other devices.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8495,
                'name' => json_encode([
                    'pl' => 'Regularne kontrolowanie stanu technicznego urządzeń i zgłaszanie ewentualnych usterek.',
                    'en' => 'Regularly checking the technical condition of devices and reporting any faults.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8496,
                'name' => json_encode([
                    'pl' => 'Dbanie o zaopatrzenie w materiały eksploatacyjne (np. papier, tonery) oraz organizacja przestrzeni roboczej.',
                    'en' => 'Ensuring supply of consumables (e.g., paper, toners) and organizing the workspace.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8497,
                'name' => json_encode([
                    'pl' => 'Monitorowanie i zamawianie materiałów biurowych oraz medycznych, takich jak opatrunki, rękawiczki, artykuły higieniczne.',
                    'en' => 'Monitoring and ordering office and medical supplies, such as dressings, gloves, and hygiene products.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8498,
                'name' => json_encode([
                    'pl' => 'Współpraca z dostawcami oraz dbanie o terminowe dostawy niezbędnych produktów.',
                    'en' => 'Cooperating with suppliers and ensuring timely delivery of necessary products.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8499,
                'name' => json_encode([
                    'pl' => 'Organizowanie i utrzymywanie porządku w magazynie materiałów biurowych i medycznych.',
                    'en' => 'Organizing and maintaining order in the storage of office and medical supplies.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8500,
                'name' => json_encode([
                    'pl' => 'Informowanie pacjentów o usługach świadczonych przez placówkę oraz dostępnych procedurach medycznych.',
                    'en' => 'Informing patients about services provided by the facility and available medical procedures.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8501,
                'name' => json_encode([
                    'pl' => 'Udzielanie podstawowych informacji na temat warunków płatności, kosztów usług oraz wymaganych dokumentów.',
                    'en' => 'Providing basic information about payment terms, costs of services, and required documents.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8502,
                'name' => json_encode([
                    'pl' => 'Przekierowywanie pacjentów do odpowiednich specjalistów lub działów.',
                    'en' => 'Redirecting patients to the appropriate specialists or departments.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8503,
                'name' => json_encode([
                    'pl' => 'Pomoc lekarzom i pielęgniarkom w obsłudze dokumentacji pacjentów i prowadzeniu kartotek.',
                    'en' => 'Assisting doctors and nurses in handling patient documentation and maintaining records.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8504,
                'name' => json_encode([
                    'pl' => 'Przygotowywanie dokumentacji do konsultacji, diagnostyki lub dalszego leczenia.',
                    'en' => 'Preparing documentation for consultations, diagnostics, or further treatment.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8505,
                'name' => json_encode([
                    'pl' => 'Dbanie o dostępność dokumentacji medycznej podczas zabiegów lub wizyt.',
                    'en' => 'Ensuring the availability of medical documentation during procedures or visits.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8506,
                'name' => json_encode([
                    'pl' => 'Zapewnienie bezpieczeństwa dokumentacji i danych pacjentów, zgodnie z przepisami o ochronie danych osobowych (RODO).',
                    'en' => 'Ensuring the security of documentation and patient data in accordance with personal data protection regulations (GDPR).'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8507,
                'name' => json_encode([
                    'pl' => 'Odpowiednie przechowywanie dokumentów zawierających dane wrażliwe oraz dbanie o ich poufność.',
                    'en' => 'Properly storing documents containing sensitive data and ensuring their confidentiality.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8508,
                'name' => json_encode([
                    'pl' => 'Przekazywanie informacji wyłącznie uprawnionym osobom oraz przestrzeganie procedur ochrony informacji.',
                    'en' => 'Providing information only to authorized persons and adhering to information protection procedures.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8509,
                'name' => json_encode([
                    'pl' => 'Przygotowywanie broszur, ulotek i materiałów informacyjnych dotyczących profilaktyki i zdrowego stylu życia.',
                    'en' => 'Preparing brochures, leaflets, and informational materials related to prevention and healthy lifestyle.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8510,
                'name' => json_encode([
                    'pl' => 'Organizowanie materiałów informacyjnych dostępnych dla pacjentów w recepcji lub poczekalni.',
                    'en' => 'Organizing informational materials available for patients in the reception area or waiting room.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8511,
                'name' => json_encode([
                    'pl' => 'Wspieranie działań profilaktycznych placówki poprzez przygotowanie i dystrybucję materiałów edukacyjnych.',
                    'en' => 'Supporting the facility’s preventive activities by preparing and distributing educational materials.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8512,
                'name' => json_encode([
                    'pl' => 'Pomoc przy organizacji dni otwartych, warsztatów zdrowotnych, akcji profilaktycznych i innych wydarzeń.',
                    'en' => 'Assisting in organizing open days, health workshops, preventive actions, and other events.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8513,
                'name' => json_encode([
                    'pl' => 'Koordynacja zapisów uczestników oraz przygotowywanie przestrzeni i materiałów informacyjnych.',
                    'en' => 'Coordinating participant registrations and preparing spaces and informational materials.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8514,
                'name' => json_encode([
                    'pl' => 'Współpraca z personelem medycznym w organizacji i przeprowadzeniu wydarzeń.',
                    'en' => 'Cooperating with medical staff in organizing and conducting events.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8515,
                'name' => json_encode([
                    'pl' => 'Wdrażanie procedur administracyjnych zgodnych z przepisami i polityką placówki.',
                    'en' => 'Implementing administrative procedures in accordance with regulations and facility policies.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8516,
                'name' => json_encode([
                    'pl' => 'Przestrzeganie wewnętrznych zasad i wytycznych dotyczących obsługi pacjenta oraz ochrony danych osobowych.',
                    'en' => 'Adhering to internal rules and guidelines regarding patient service and personal data protection.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8517,
                'name' => json_encode([
                    'pl' => 'Przekazywanie nowych procedur i zasad pracy pozostałym pracownikom administracyjnym.',
                    'en' => 'Communicating new procedures and work rules to other administrative staff.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8518,
                'name' => json_encode([
                    'pl' => 'Regularne uczestnictwo w szkoleniach z zakresu ochrony danych, obsługi pacjenta oraz administracji medycznej.',
                    'en' => 'Regularly participating in training on data protection, patient service, and medical administration.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8519,
                'name' => json_encode([
                    'pl' => 'Aktualizowanie wiedzy o systemach zarządzania dokumentacją medyczną i nowych przepisach.',
                    'en' => 'Updating knowledge of medical documentation management systems and new regulations.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8520,
                'name' => json_encode([
                    'pl' => 'Doskonalenie umiejętności komunikacyjnych, technicznych oraz związanych z obsługą urządzeń biurowych.',
                    'en' => 'Improving communication, technical, and office equipment handling skills.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ]
        ];
        $SEKRETARZ_SĄDOWY = [
            [
                'id' => 8521,
                'name' => json_encode([
                    'pl' => 'Zakładanie akt spraw sądowych oraz ich aktualizacja i archiwizacja zgodnie z obowiązującymi przepisami.',
                    'en' => 'Creating court case files and updating and archiving them in accordance with applicable regulations.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8522,
                'name' => json_encode([
                    'pl' => 'Organizowanie dokumentacji w sposób uporządkowany, aby była łatwo dostępna dla uprawnionych pracowników sądu.',
                    'en' => 'Organizing documentation in an orderly manner to ensure easy access for authorized court personnel.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8523,
                'name' => json_encode([
                    'pl' => 'Przechowywanie i archiwizacja akt sądowych po zakończeniu sprawy, zgodnie z przepisami dotyczącymi ochrony danych osobowych.',
                    'en' => 'Storing and archiving court records after the case is concluded, in accordance with data protection regulations.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8524,
                'name' => json_encode([
                    'pl' => 'Sporządzanie list uczestników rozprawy oraz listy świadków i biegłych.',
                    'en' => 'Preparing lists of participants in the hearings, as well as lists of witnesses and experts.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8525,
                'name' => json_encode([
                    'pl' => 'Organizowanie harmonogramu rozpraw i posiedzeń oraz przygotowanie sali sądowej.',
                    'en' => 'Organizing the schedule of hearings and meetings, and preparing the courtroom.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8526,
                'name' => json_encode([
                    'pl' => 'Informowanie stron o terminach rozpraw, doręczanie wezwania, zawiadomienia oraz dokumentów sądowych.',
                    'en' => 'Informing parties about hearing dates, delivering summonses, notifications, and court documents.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8527,
                'name' => json_encode([
                    'pl' => 'Odbieranie, sortowanie i rejestrowanie korespondencji przychodzącej i wychodzącej.',
                    'en' => 'Receiving, sorting, and registering incoming and outgoing correspondence.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8528,
                'name' => json_encode([
                    'pl' => 'Przygotowywanie dokumentów sądowych do wysyłki, w tym wezwań, zawiadomień, postanowień i wyroków.',
                    'en' => 'Preparing court documents for dispatch, including summonses, notifications, rulings, and judgments.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8529,
                'name' => json_encode([
                    'pl' => 'Monitorowanie terminów na odpowiedzi w korespondencji oraz przekazywanie wiadomości i dokumentów odpowiednim osobom.',
                    'en' => 'Monitoring response deadlines in correspondence and forwarding messages and documents to the appropriate persons.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8530,
                'name' => json_encode([
                    'pl' => 'Wprowadzanie nowych spraw do rejestrów sądowych oraz ich aktualizacja w systemie informatycznym.',
                    'en' => 'Entering new cases into court records and updating them in the information system.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8531,
                'name' => json_encode([
                    'pl' => 'Monitorowanie przebiegu spraw sądowych i dbanie o ich terminowe zakończenie.',
                    'en' => 'Monitoring the progress of court cases and ensuring their timely conclusion.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8532,
                'name' => json_encode([
                    'pl' => 'Ustalanie terminów rozpraw, posiedzeń i innych działań sądowych w systemie ewidencyjnym.',
                    'en' => 'Establishing dates for hearings, meetings, and other court activities in the registry system.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8533,
                'name' => json_encode([
                    'pl' => 'Dokumentowanie przebiegu rozprawy poprzez sporządzanie protokołów sądowych zgodnie z zasadami formalnymi.',
                    'en' => 'Documenting the course of the hearing by preparing court minutes according to formal rules.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8534,
                'name' => json_encode([
                    'pl' => 'Wykonywanie zapisu stenograficznego lub korzystanie z narzędzi do rejestracji dźwięku, jeśli wymaga tego sytuacja.',
                    'en' => 'Performing a stenographic record or using sound recording tools if required.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8535,
                'name' => json_encode([
                    'pl' => 'Przekazywanie protokołów do dalszej archiwizacji i udostępnianie ich zainteresowanym stronom na żądanie.',
                    'en' => 'Forwarding minutes for further archiving and making them available to interested parties upon request.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8536,
                'name' => json_encode([
                    'pl' => 'Wspieranie sędziów w przygotowywaniu dokumentacji niezbędnej do przeprowadzenia rozpraw.',
                    'en' => 'Supporting judges in preparing documentation necessary for conducting hearings.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8537,
                'name' => json_encode([
                    'pl' => 'Współpraca z innymi pracownikami sądu, takimi jak biegli, protokolanci, kuratorzy oraz adwokaci.',
                    'en' => 'Cooperating with other court staff, such as experts, reporters, guardians, and lawyers.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8538,
                'name' => json_encode([
                    'pl' => 'Zapewnienie niezbędnych materiałów i dokumentów na potrzeby sędziów oraz innych uczestników procesu sądowego.',
                    'en' => 'Providing necessary materials and documents for judges and other participants in the court process.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8539,
                'name' => json_encode([
                    'pl' => 'Monitorowanie obiegu dokumentów między wydziałami sądu oraz dbanie o ich terminowe dostarczanie.',
                    'en' => 'Monitoring the circulation of documents between court departments and ensuring their timely delivery.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8540,
                'name' => json_encode([
                    'pl' => 'Zapewnienie, że wszystkie dokumenty są prawidłowo przekazywane i archiwizowane po zakończeniu postępowań.',
                    'en' => 'Ensuring that all documents are correctly forwarded and archived after the proceedings are concluded.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8541,
                'name' => json_encode([
                    'pl' => 'Współpraca z innymi wydziałami sądowymi w zakresie dokumentacji spraw i obiegu informacji.',
                    'en' => 'Cooperating with other court departments regarding case documentation and information flow.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8542,
                'name' => json_encode([
                    'pl' => 'Wprowadzanie i aktualizacja danych w systemach informatycznych służących do zarządzania sprawami sądowymi.',
                    'en' => 'Entering and updating data in the information systems used to manage court cases.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8543,
                'name' => json_encode([
                    'pl' => 'Korzystanie z systemów elektronicznego obiegu dokumentów oraz baz danych dotyczących spraw sądowych.',
                    'en' => 'Utilizing electronic document circulation systems and databases related to court cases.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8544,
                'name' => json_encode([
                    'pl' => 'Przestrzeganie procedur związanych z elektroniczną archiwizacją dokumentów i ich bezpieczeństwem.',
                    'en' => 'Adhering to procedures related to electronic archiving of documents and their security.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8545,
                'name' => json_encode([
                    'pl' => 'Wystawianie odpisów i kopii dokumentów sądowych na wniosek stron lub uprawnionych instytucji.',
                    'en' => 'Issuing copies and excerpts of court documents upon request from parties or authorized institutions.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8546,
                'name' => json_encode([
                    'pl' => 'Wydawanie zaświadczeń dotyczących postępowania sądowego, stanu spraw lub statusu dokumentów.',
                    'en' => 'Issuing certificates regarding court proceedings, the status of cases, or the status of documents.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8547,
                'name' => json_encode([
                    'pl' => 'Kontrola nad zgodnością odpisów i kopii z oryginałami oraz dbanie o ich poprawność formalną.',
                    'en' => 'Controlling the compliance of copies and excerpts with originals and ensuring their formal correctness.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8548,
                'name' => json_encode([
                    'pl' => 'Przestrzeganie przepisów dotyczących ochrony danych osobowych (RODO) oraz zasad poufności informacji sądowych.',
                    'en' => 'Adhering to regulations concerning personal data protection (GDPR) and the confidentiality of court information.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8549,
                'name' => json_encode([
                    'pl' => 'Zapewnienie, że dokumenty są przechowywane w sposób zabezpieczony przed nieuprawnionym dostępem.',
                    'en' => 'Ensuring that documents are stored securely against unauthorized access.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8550,
                'name' => json_encode([
                    'pl' => 'Przekazywanie informacji o sprawach sądowych wyłącznie osobom uprawnionym i zgodnie z przepisami.',
                    'en' => 'Providing information about court cases only to authorized individuals and in accordance with regulations.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8551,
                'name' => json_encode([
                    'pl' => 'Udzielanie informacji stronom, pełnomocnikom i innym zainteresowanym osobom na temat stanu sprawy i przebiegu postępowania.',
                    'en' => 'Providing information to parties, attorneys, and other interested individuals about the status of the case and the course of proceedings.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8552,
                'name' => json_encode([
                    'pl' => 'Odpowiadanie na pytania dotyczące procedur sądowych oraz kierowanie interesantów do odpowiednich pracowników.',
                    'en' => 'Answering questions regarding court procedures and directing visitors to the appropriate staff members.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8553,
                'name' => json_encode([
                    'pl' => 'Zapewnienie profesjonalnej obsługi interesantów zgodnie z zasadami etykiety sądowej.',
                    'en' => 'Providing professional service to clients in accordance with court etiquette.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8554,
                'name' => json_encode([
                    'pl' => 'Współpraca z kuratorami, prokuraturą, policją, adwokatami i innymi instytucjami, które uczestniczą w procesach sądowych.',
                    'en' => "Cooperating with guardians, the prosecutor's office, the police, lawyers, and other institutions involved in court proceedings."
        ]),
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
    ],
    [
        'id' => 8555,
        'name' => json_encode([
            'pl' => 'Przekazywanie dokumentów i informacji niezbędnych do realizacji obowiązków wynikających z postępowań sądowych.',
            'en' => 'Transmitting documents and information necessary for fulfilling obligations arising from court proceedings.'
        ]),
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
    ],
    [
        'id' => 8556,
        'name' => json_encode([
            'pl' => 'Utrzymywanie kontaktów z zewnętrznymi instytucjami i dbanie o terminowe dostarczanie informacji.',
            'en' => 'Maintaining contacts with external institutions and ensuring timely delivery of information.'
        ]),
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
    ],
    [
        'id' => 8557,
        'name' => json_encode([
            'pl' => 'Przechowywanie i archiwizacja akt zgodnie z przepisami oraz wewnętrznymi zasadami organizacji sądów.',
            'en' => 'Storing and archiving files in accordance with regulations and internal rules of court organizations.'
        ]),
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
    ],
    [
        'id' => 8558,
        'name' => json_encode([
            'pl' => 'Tworzenie rejestru dokumentów archiwalnych, aby były one łatwo dostępne na potrzeby przyszłych postępowań.',
            'en' => 'Creating a registry of archival documents to ensure easy access for future proceedings.'
        ]),
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
    ],
    [
        'id' => 8559,
        'name' => json_encode([
            'pl' => 'Usuwanie dokumentów zgodnie z procedurami po upływie okresu archiwizacji, dbając o ich bezpieczne zniszczenie.',
            'en' => 'Removing documents in accordance with procedures after the archival period has expired, ensuring their safe destruction.'
        ]),
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
    ],
    [
        'id' => 8560,
        'name' => json_encode([
            'pl' => 'Przygotowywanie zestawień, raportów oraz innych dokumentów administracyjnych na potrzeby sądu.',
            'en' => 'Preparing summaries, reports, and other administrative documents for court purposes.'
        ]),
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
    ],
    [
        'id' => 8561,
        'name' => json_encode([
            'pl' => 'Wspieranie kierownictwa sądu w monitorowaniu postępów w realizacji spraw i wydajności pracowników.',
            'en' => 'Supporting court management in monitoring the progress of case resolutions and employee performance.'
        ]),
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
    ],
    [
        'id' => 8562,
        'name' => json_encode([
            'pl' => 'Przekazywanie wyników raportów oraz zestawień sędziom i innym zainteresowanym osobom.',
            'en' => 'Transmitting the results of reports and summaries to judges and other interested parties.'
        ]),
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
    ],
    [
        'id' => 8563,
        'name' => json_encode([
            'pl' => 'Przygotowywanie dokumentów dotyczących postępowań egzekucyjnych, np. nakazów egzekucyjnych.',
            'en' => 'Preparing documents related to enforcement proceedings, such as enforcement orders.'
        ]),
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
    ],
    [
        'id' => 8564,
        'name' => json_encode([
            'pl' => 'Współpraca z komornikami i innymi organami egzekucyjnymi w zakresie przekazywania niezbędnych informacji.',
            'en' => 'Cooperating with bailiffs and other enforcement authorities to provide necessary information.'
        ]),
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
    ],
    [
        'id' => 8565,
        'name' => json_encode([
            'pl' => 'Monitorowanie działań związanych z egzekucją oraz przekazywanie dokumentów komornikom.',
            'en' => 'Monitoring enforcement actions and forwarding documents to bailiffs.'
        ]),
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
    ],
    [
        'id' => 8566,
        'name' => json_encode([
            'pl' => 'Regularne uczestnictwo w szkoleniach i kursach związanych z prawem, administracją sądową oraz obsługą systemów informatycznych.',
            'en' => 'Regular participation in training and courses related to law, court administration, and handling information systems.'
        ]),
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
    ],
    [
        'id' => 8567,
        'name' => json_encode([
            'pl' => 'Aktualizowanie wiedzy na temat nowych przepisów i zmian w procedurach sądowych.',
            'en' => 'Updating knowledge about new regulations and changes in court procedures.'
        ]),
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
    ],
    [
        'id' => 8568,
        'name' => json_encode([
            'pl' => 'Doskonalenie umiejętności technicznych, organizacyjnych oraz komunikacyjnych niezbędnych w pracy sekretarza sądowego.',
            'en' => 'Improving technical, organizational, and communication skills essential for the work of a court secretary.'
        ]),
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
    ],
    [
        'id' => 8569,
        'name' => json_encode([
            'pl' => 'Przestrzeganie wewnętrznych procedur sądowych, dbanie o ich zgodność z przepisami prawa.',
            'en' => 'Adhering to internal court procedures and ensuring compliance with legal regulations.'
        ]),
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
    ],
    [
        'id' => 8570,
        'name' => json_encode([
            'pl' => 'Wdrażanie nowych procedur administracyjnych i nadzór nad ich przestrzeganiem przez pracowników sądu.',
            'en' => 'Implementing new administrative procedures and supervising their compliance by court staff.'
        ]),
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
    ],
    [
        'id' => 8571,
        'name' => json_encode([
            'pl' => 'Zapewnienie, że wszystkie czynności administracyjne są wykonywane zgodnie z zasadami funkcjonowania sądu.',
            'en' => 'Ensuring that all administrative actions are performed in accordance with the court’s operational principles.'
        ]),
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
    ]
];
        $POZOSTAŁY_ŚREDNI_PERSONEL_Z_DZIEDZINY_PRAWA_POKREWNY = [
            [
                'id' => 8572,
                'name' => json_encode([
                    'pl' => 'Zakładanie, aktualizacja i archiwizacja akt spraw prowadzonych przez prawników, sądy lub kancelarie.',
                    'en' => 'Establishing, updating, and archiving case files handled by lawyers, courts, or law offices.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8573,
                'name' => json_encode([
                    'pl' => 'Dbanie o porządek i organizację dokumentów, aby były łatwo dostępne dla uprawnionych osób.',
                    'en' => 'Maintaining order and organization of documents to ensure easy access for authorized personnel.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8574,
                'name' => json_encode([
                    'pl' => 'Przechowywanie akt zgodnie z przepisami dotyczącymi ochrony danych osobowych i poufności.',
                    'en' => 'Storing records in accordance with regulations on personal data protection and confidentiality.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8575,
                'name' => json_encode([
                    'pl' => 'Sporządzanie podstawowych dokumentów prawnych, takich jak wezwania, zawiadomienia, wnioski i protokoły.',
                    'en' => 'Preparing basic legal documents such as summonses, notifications, applications, and protocols.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8576,
                'name' => json_encode([
                    'pl' => 'Przygotowywanie projektów pism procesowych i formalnych na podstawie wytycznych prawnika lub sędziego.',
                    'en' => "Drafting procedural and formal letters based on the lawyer or judge's instructions."
        ]),
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
    ],
    [
        'id' => 8577,
        'name' => json_encode([
            'pl' => 'Weryfikacja poprawności formalnej i kompletności przygotowanych dokumentów.',
            'en' => 'Verifying the formal correctness and completeness of prepared documents.'
        ]),
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
    ],
    [
        'id' => 8578,
        'name' => json_encode([
            'pl' => 'Wprowadzanie nowych spraw do systemów ewidencyjnych oraz ich bieżąca aktualizacja.',
            'en' => 'Entering new cases into the registries and continuously updating them.'
        ]),
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
    ],
    [
        'id' => 8579,
        'name' => json_encode([
            'pl' => 'Monitorowanie terminów, śledzenie postępu spraw oraz dbanie o ich terminowe zakończenie.',
            'en' => 'Monitoring deadlines, tracking the progress of cases, and ensuring their timely conclusion.'
        ]),
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
    ],
    [
        'id' => 8580,
        'name' => json_encode([
            'pl' => 'Przypominanie prawnikom lub sędziom o kluczowych terminach oraz nadchodzących rozprawach i spotkaniach.',
            'en' => 'Reminding lawyers or judges of key deadlines and upcoming hearings and meetings.'
        ]),
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
    ],
    [
        'id' => 8581,
        'name' => json_encode([
            'pl' => 'Przyjmowanie, rejestrowanie oraz dystrybucja korespondencji przychodzącej i wychodzącej.',
            'en' => 'Receiving, registering, and distributing incoming and outgoing correspondence.'
        ]),
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
    ],
    [
        'id' => 8582,
        'name' => json_encode([
            'pl' => 'Przygotowywanie dokumentów do wysyłki, w tym pism, postanowień, zawiadomień i odpowiedzi na zapytania.',
            'en' => 'Preparing documents for dispatch, including letters, decisions, notifications, and responses to inquiries.'
        ]),
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
    ],
    [
        'id' => 8583,
        'name' => json_encode([
            'pl' => 'Monitorowanie terminów odpowiedzi w korespondencji oraz dbanie o ich terminowe przekazanie adresatom.',
            'en' => 'Monitoring response deadlines in correspondence and ensuring their timely delivery to recipients.'
        ]),
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
    ],
    [
        'id' => 8584,
        'name' => json_encode([
            'pl' => 'Dokumentowanie przebiegu posiedzeń, rozpraw, spotkań oraz innych wydarzeń o charakterze prawnym.',
            'en' => 'Documenting the proceedings of sessions, hearings, meetings, and other legal events.'
        ]),
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
    ],
    [
        'id' => 8585,
        'name' => json_encode([
            'pl' => 'Sporządzanie protokołów i notatek zgodnie z zasadami formalnymi, zapewniając ich spójność i dokładność.',
            'en' => 'Drafting minutes and notes according to formal rules, ensuring their consistency and accuracy.'
        ]),
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
    ],
    [
        'id' => 8586,
        'name' => json_encode([
            'pl' => 'Udostępnianie protokołów stronom oraz archiwizowanie ich w systemach dokumentacji.',
            'en' => 'Distributing minutes to the parties and archiving them in documentation systems.'
        ]),
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
    ],
    [
        'id' => 8587,
        'name' => json_encode([
            'pl' => 'Udzielanie informacji interesantom, stronom i pełnomocnikom na temat stanu sprawy oraz procedur.',
            'en' => 'Providing information to interested parties, parties, and attorneys about the status of the case and procedures.'
        ]),
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
    ],
    [
        'id' => 8588,
        'name' => json_encode([
            'pl' => 'Kierowanie interesantów do odpowiednich pracowników lub działów zgodnie z zakresem ich spraw.',
            'en' => 'Directing visitors to the appropriate staff or departments based on the scope of their cases.'
        ]),
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
    ],
    [
        'id' => 8589,
        'name' => json_encode([
            'pl' => 'Przestrzeganie zasad poufności i etyki zawodowej w kontaktach z interesantami.',
            'en' => 'Adhering to confidentiality and professional ethics in interactions with clients.'
        ]),
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
    ],
    [
        'id' => 8590,
        'name' => json_encode([
            'pl' => 'Przygotowywanie faktur, rachunków i zestawień wydatków związanych z prowadzonymi sprawami.',
            'en' => 'Preparing invoices, bills, and expense reports related to ongoing cases.'
        ]),
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
    ],
    [
        'id' => 8591,
        'name' => json_encode([
            'pl' => 'Wsparcie przy rozliczeniach kosztów sądowych, opłat administracyjnych i innych wydatków związanych z postępowaniem.',
            'en' => 'Assisting with the settlement of court costs, administrative fees, and other expenses related to the proceedings.'
        ]),
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
    ],
    [
        'id' => 8592,
        'name' => json_encode([
            'pl' => 'Współpraca z działem księgowości w zakresie bieżących rozliczeń finansowych.',
            'en' => 'Cooperating with the accounting department regarding ongoing financial settlements.'
        ]),
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
    ],
    [
        'id' => 8593,
        'name' => json_encode([
            'pl' => 'Organizacja harmonogramu spotkań i rozpraw oraz zapewnienie odpowiednich pomieszczeń i wyposażenia.',
            'en' => 'Organizing the schedule of meetings and hearings and ensuring appropriate rooms and equipment are available.'
        ]),
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
    ],
    [
        'id' => 8594,
        'name' => json_encode([
            'pl' => 'Przygotowywanie agend i materiałów na spotkania, w tym dokumentacji spraw.',
            'en' => 'Preparing agendas and materials for meetings, including case documentation.'
        ]),
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
    ],
    [
        'id' => 8595,
        'name' => json_encode([
            'pl' => 'Wspieranie prawników i sędziów w organizacji wydarzeń związanych z prowadzonymi sprawami.',
            'en' => 'Assisting lawyers and judges in organizing events related to ongoing cases.'
        ]),
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
    ],
    [
        'id' => 8596,
        'name' => json_encode([
            'pl' => 'Archiwizacja zamkniętych spraw zgodnie z obowiązującymi przepisami prawnymi i wewnętrznymi procedurami.',
            'en' => 'Archiving closed cases in accordance with applicable legal regulations and internal procedures.'
        ]),
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
    ],
    [
        'id' => 8597,
        'name' => json_encode([
            'pl' => 'Tworzenie systemów ewidencji dla przechowywanych akt, aby były one łatwo dostępne.',
            'en' => 'Creating record systems for stored files to ensure easy access.'
        ]),
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
    ],
    [
        'id' => 8598,
        'name' => json_encode([
            'pl' => 'Przekazywanie akt do archiwum po zakończeniu postępowań lub niszczenie ich zgodnie z procedurami.',
            'en' => 'Transferring files to archives upon the completion of proceedings or destroying them according to procedures.'
        ]),
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
    ],
    [
        'id' => 8599,
        'name' => json_encode([
            'pl' => 'Wystawianie odpisów i kopii dokumentów sądowych na wniosek stron lub innych uprawnionych osób.',
            'en' => 'Issuing copies of court documents at the request of parties or other authorized individuals.'
        ]),
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
    ],
    [
        'id' => 8600,
        'name' => json_encode([
            'pl' => 'Przygotowywanie zaświadczeń dotyczących przebiegu postępowania, stanu sprawy lub statusu dokumentów.',
            'en' => 'Preparing certificates regarding the course of proceedings, the status of a case, or the status of documents.'
        ]),
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
    ],
    [
        'id' => 8601,
        'name' => json_encode([
            'pl' => 'Kontrola nad zgodnością odpisów i kopii z oryginalnymi dokumentami.',
            'en' => 'Monitoring the compliance of copies and transcripts with original documents.'
        ]),
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
    ],
    [
        'id' => 8602,
        'name' => json_encode([
            'pl' => 'Wprowadzanie danych do elektronicznych systemów ewidencji spraw oraz ich bieżąca aktualizacja.',
            'en' => 'Entering data into electronic case management systems and keeping them up to date.'
        ]),
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
    ],
    [
        'id' => 8603,
        'name' => json_encode([
            'pl' => 'Korzystanie z systemów elektronicznego obiegu dokumentów oraz baz danych dotyczących spraw sądowych.',
            'en' => 'Utilizing electronic document circulation systems and databases concerning court cases.'
        ]),
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
    ],
    [
        'id' => 8604,
        'name' => json_encode([
            'pl' => 'Zapewnienie bezpieczeństwa i ochrony danych w systemach informatycznych.',
            'en' => 'Ensuring the security and protection of data in information systems.'
        ]),
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
    ],
    [
        'id' => 8605,
        'name' => json_encode([
            'pl' => 'Przestrzeganie przepisów dotyczących ochrony danych osobowych (RODO) oraz zasad poufności dokumentacji prawnej.',
            'en' => 'Complying with regulations regarding personal data protection (GDPR) and confidentiality of legal documentation.'
        ]),
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
    ],
    [
        'id' => 8606,
        'name' => json_encode([
            'pl' => 'Przechowywanie dokumentacji w sposób zabezpieczony przed dostępem osób nieuprawnionych.',
            'en' => 'Storing documentation securely to prevent unauthorized access.'
        ]),
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
    ],
    [
        'id' => 8607,
        'name' => json_encode([
            'pl' => 'Przekazywanie informacji o sprawach tylko uprawnionym osobom, zgodnie z wewnętrznymi procedurami.',
            'en' => 'Providing information about cases only to authorized individuals, in accordance with internal procedures.'
        ]),
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
    ],
    [
        'id' => 8608,
        'name' => json_encode([
            'pl' => 'Tworzenie raportów i zestawień dotyczących liczby spraw, ich stanu, kosztów postępowań i innych danych statystycznych.',
            'en' => 'Creating reports and summaries concerning the number of cases, their status, costs of proceedings, and other statistical data.'
        ]),
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
    ],
    [
        'id' => 8609,
        'name' => json_encode([
            'pl' => 'Opracowywanie zestawień na potrzeby analiz wewnętrznych, raportowania oraz dla celów administracyjnych.',
            'en' => 'Preparing summaries for internal analyses, reporting, and administrative purposes.'
        ]),
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
    ],
    [
        'id' => 8610,
        'name' => json_encode([
            'pl' => 'Przekazywanie wyników analiz sędziom, prawnikom lub kierownictwu instytucji.',
            'en' => 'Providing the results of analyses to judges, lawyers, or management of the institution.'
        ]),
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
    ],
    [
        'id' => 8611,
        'name' => json_encode([
            'pl' => 'Przekazywanie informacji i dokumentów niezbędnych do realizacji obowiązków wynikających z postępowań prawnych.',
            'en' => 'Providing information and documents necessary to fulfill obligations arising from legal proceedings.'
        ]),
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
    ],
    [
        'id' => 8612,
        'name' => json_encode([
            'pl' => 'Utrzymywanie kontaktów z kuratorami, komornikami, prokuratorami i innymi urzędnikami publicznymi.',
            'en' => 'Maintaining contacts with guardians, bailiffs, prosecutors, and other public officials.'
        ]),
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
    ],
    [
        'id' => 8613,
        'name' => json_encode([
            'pl' => 'Monitorowanie postępu działań związanych z egzekucją lub innymi działaniami zewnętrznymi.',
            'en' => 'Monitoring the progress of enforcement actions or other external activities.'
        ]),
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
    ],
    [
        'id' => 8614,
        'name' => json_encode([
            'pl' => 'Pomoc przy organizacji naboru pracowników do zespołów prawnych i administracyjnych.',
            'en' => 'Assisting in the recruitment of staff for legal and administrative teams.'
        ]),
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
    ],
    [
        'id' => 8615,
        'name' => json_encode([
            'pl' => 'Udział w przygotowywaniu dokumentacji kadrowej oraz ewidencji czasu pracy pracowników.',
            'en' => 'Participating in the preparation of personnel documentation and employee time records.'
        ]),
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
    ],
    [
        'id' => 8616,
        'name' => json_encode([
            'pl' => 'Obsługa dokumentacji pracowniczej związanej z procedurami kadrowymi.',
            'en' => 'Managing employee documentation related to personnel procedures.'
        ]),
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
    ],
    [
        'id' => 8617,
        'name' => json_encode([
            'pl' => 'Regularne uczestnictwo w szkoleniach i kursach związanych z prawem, administracją oraz obsługą systemów informatycznych.',
            'en' => 'Regular participation in training and courses related to law, administration, and handling information systems.'
        ]),
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
    ],
    [
        'id' => 8618,
        'name' => json_encode([
            'pl' => 'Aktualizowanie wiedzy na temat zmian w przepisach prawa, procedur sądowych i zasad ochrony danych.',
            'en' => 'Updating knowledge about changes in legal regulations, court procedures, and data protection principles.'
        ]),
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
    ],
    [
        'id' => 8619,
        'name' => json_encode([
            'pl' => 'Doskonalenie umiejętności organizacyjnych, komunikacyjnych oraz technicznych niezbędnych w pracy.',
            'en' => 'Improving organizational, communication, and technical skills necessary for the job.'
        ]),
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
    ],
    [
        'id' => 8620,
        'name' => json_encode([
            'pl' => 'Udzielanie podstawowych informacji dotyczących stanu sprawy oraz procedur sądowych, zgodnie z zakresem uprawnień.',
            'en' => 'Providing basic information regarding the status of the case and court procedures, within the scope of authority.'
        ]),
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
    ],
    [
        'id' => 8621,
        'name' => json_encode([
            'pl' => 'Przekazywanie petentom informacji na temat dostępnych możliwości kontaktu z prawnikami oraz terminów rozpraw.',
            'en' => 'Providing clients with information about available contact options with lawyers and hearing dates.'
        ]),
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
    ],
    [
        'id' => 8622,
        'name' => json_encode([
            'pl' => 'Wspieranie osób poszukujących informacji prawnej, jednocześnie dbając o przestrzeganie przepisów dotyczących poufności.',
            'en' => 'Assisting individuals seeking legal information while ensuring compliance with confidentiality regulations.'
        ]),
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
    ],
    [
        'id' => 8623,
        'name' => json_encode([
            'pl' => 'Przygotowywanie dokumentów egzekucyjnych, takich jak nakazy egzekucyjne, wezwania do zapłaty.',
            'en' => 'Preparing enforcement documents such as enforcement orders and payment requests.'
        ]),
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
    ],
    [
        'id' => 8624,
        'name' => json_encode([
            'pl' => 'Współpraca z komornikami i innymi organami egzekucyjnymi, przekazując informacje i dokumenty.',
            'en' => 'Collaborating with bailiffs and other enforcement authorities by providing information and documents.'
        ]),
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
    ],
    [
        'id' => 8625,
        'name' => json_encode([
            'pl' => 'Monitorowanie postępu działań egzekucyjnych i informowanie o ich przebiegu prawników oraz sędziów.',
            'en' => 'Monitoring the progress of enforcement actions and informing lawyers and judges about their progress.'
        ]),
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
    ],
];
        $OPERATORZY_WPROWADZANIA_DANYCH = [
            [
                'id' => 8626,
                'name' => json_encode([
                    'pl' => 'Precyzyjne i terminowe wprowadzanie danych z dokumentów papierowych, elektronicznych lub innych źródeł do baz danych lub systemów.',
                    'en' => 'Accurate and timely input of data from paper documents, electronic sources, or other sources into databases or systems.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8627,
                'name' => json_encode([
                    'pl' => 'Praca z różnymi typami danych, takimi jak informacje osobowe, finansowe, techniczne czy statystyczne.',
                    'en' => 'Working with various types of data, such as personal, financial, technical, or statistical information.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8628,
                'name' => json_encode([
                    'pl' => 'Przestrzeganie standardów formatowania i procedur wprowadzania danych obowiązujących w organizacji.',
                    'en' => 'Adhering to formatting standards and data entry procedures in force within the organization.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8629,
                'name' => json_encode([
                    'pl' => 'Sprawdzanie zgodności wprowadzanych danych z oryginalnymi dokumentami w celu zapewnienia ich dokładności.',
                    'en' => 'Checking the compliance of entered data with original documents to ensure their accuracy.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8630,
                'name' => json_encode([
                    'pl' => 'Weryfikacja i korygowanie błędów, które mogłyby wpłynąć na jakość danych.',
                    'en' => 'Verifying and correcting errors that could affect data quality.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8631,
                'name' => json_encode([
                    'pl' => 'Monitorowanie danych pod kątem braków lub niezgodności i zgłaszanie problemów do przełożonych.',
                    'en' => 'Monitoring data for gaps or inconsistencies and reporting issues to supervisors.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8632,
                'name' => json_encode([
                    'pl' => 'Wprowadzanie zmian lub uzupełnień do już istniejących danych w bazach, gdy zajdzie taka potrzeba.',
                    'en' => 'Entering changes or supplements to existing data in databases as needed.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8633,
                'name' => json_encode([
                    'pl' => 'Edytowanie i poprawianie danych zgodnie z wytycznymi oraz aktualizacja informacji w przypadku ich zmiany.',
                    'en' => 'Editing and correcting data according to guidelines and updating information when it changes.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8634,
                'name' => json_encode([
                    'pl' => 'Usuwanie nieaktualnych lub błędnych danych zgodnie z polityką organizacji.',
                    'en' => 'Removing outdated or incorrect data according to organizational policy.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8635,
                'name' => json_encode([
                    'pl' => 'Organizowanie i przechowywanie dokumentów źródłowych, takich jak formularze, wnioski, raporty.',
                    'en' => 'Organizing and storing source documents such as forms, applications, and reports.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8636,
                'name' => json_encode([
                    'pl' => 'Archiwizacja dokumentacji zgodnie z wytycznymi, aby była łatwo dostępna do późniejszego wglądu lub audytu.',
                    'en' => 'Archiving documentation according to guidelines for easy access for future reference or audits.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8637,
                'name' => json_encode([
                    'pl' => 'Przestrzeganie przepisów i polityk dotyczących archiwizacji, aby zachować spójność i dostępność dokumentacji.',
                    'en' => 'Adhering to regulations and policies regarding archiving to maintain the consistency and availability of documentation.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8638,
                'name' => json_encode([
                    'pl' => 'Przestrzeganie przepisów dotyczących ochrony danych osobowych (np. RODO) podczas przetwarzania danych wrażliwych.',
                    'en' => 'Complying with regulations on the protection of personal data (e.g., GDPR) when processing sensitive data.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8639,
                'name' => json_encode([
                    'pl' => 'Zapewnienie poufności danych poprzez odpowiednie zabezpieczenie dokumentów papierowych i elektronicznych.',
                    'en' => 'Ensuring the confidentiality of data by appropriately securing paper and electronic documents.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8640,
                'name' => json_encode([
                    'pl' => 'Informowanie przełożonych o naruszeniach zasad ochrony danych lub bezpieczeństwa informacji.',
                    'en' => 'Notifying supervisors of violations of data protection principles or information security.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8641,
                'name' => json_encode([
                    'pl' => 'Współpraca z działami, które dostarczają dane do wprowadzenia lub potrzebują dostępu do informacji z bazy danych.',
                    'en' => 'Cooperating with departments that provide data for input or require access to database information.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8642,
                'name' => json_encode([
                    'pl' => 'Udzielanie wsparcia w zakresie dostępu do danych i informacji na potrzeby innych pracowników.',
                    'en' => 'Providing support for data and information access for other employees.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8643,
                'name' => json_encode([
                    'pl' => 'Przekazywanie raportów i zestawień na podstawie wprowadzonych danych dla innych działów.',
                    'en' => 'Providing reports and summaries based on entered data for other departments.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8644,
                'name' => json_encode([
                    'pl' => 'Generowanie podstawowych raportów i zestawień na podstawie wprowadzonych danych, takich jak podsumowania, statystyki lub zestawienia.',
                    'en' => 'Generating basic reports and summaries based on entered data, such as summaries, statistics, or compilations.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8645,
                'name' => json_encode([
                    'pl' => 'Przygotowywanie zestawień na potrzeby analiz biznesowych, finansowych lub operacyjnych.',
                    'en' => 'Preparing summaries for business, financial, or operational analyses.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8646,
                'name' => json_encode([
                    'pl' => 'Dostarczanie raportów do działów lub osób odpowiedzialnych za analizę danych.',
                    'en' => 'Delivering reports to departments or individuals responsible for data analysis.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8647,
                'name' => json_encode([
                    'pl' => 'Korzystanie z drukarek, skanerów i kserokopiarek do przygotowania dokumentów i materiałów niezbędnych do wprowadzenia danych.',
                    'en' => 'Using printers, scanners, and copiers to prepare documents and materials needed for data entry.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8648,
                'name' => json_encode([
                    'pl' => 'Skanowanie dokumentów źródłowych i wprowadzanie ich do systemu w formie elektronicznej.',
                    'en' => 'Scanning source documents and entering them into the system in electronic form.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8649,
                'name' => json_encode([
                    'pl' => 'Dbanie o stan techniczny sprzętu i zgłaszanie usterek w przypadku awarii.',
                    'en' => 'Maintaining the technical condition of equipment and reporting faults in case of malfunctions.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8650,
                'name' => json_encode([
                    'pl' => 'Regularne sprawdzanie poprawności wprowadzanych danych pod kątem błędów lub nieścisłości.',
                    'en' => 'Regularly checking the accuracy of entered data for errors or discrepancies.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8651,
                'name' => json_encode([
                    'pl' => 'Stosowanie narzędzi do kontroli jakości, takich jak reguły walidacji lub automatyczne kontrole błędów.',
                    'en' => 'Using quality control tools such as validation rules or automated error checks.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8652,
                'name' => json_encode([
                    'pl' => 'Zgłaszanie zauważonych problemów oraz współpraca z przełożonymi w celu ich rozwiązania.',
                    'en' => 'Reporting noticed issues and collaborating with supervisors to resolve them.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8653,
                'name' => json_encode([
                    'pl' => 'Regularne uczestnictwo w szkoleniach z zakresu wprowadzania danych, obsługi systemów oraz ochrony danych osobowych.',
                    'en' => 'Regular participation in training on data entry, system operation, and data protection.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8654,
                'name' => json_encode([
                    'pl' => 'Aktualizowanie wiedzy na temat nowych technologii, procedur i narzędzi związanych z wprowadzaniem i przetwarzaniem danych.',
                    'en' => 'Updating knowledge about new technologies, procedures, and tools related to data entry and processing.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8655,
                'name' => json_encode([
                    'pl' => 'Ciągłe doskonalenie umiejętności technicznych i organizacyjnych w celu poprawy jakości pracy.',
                    'en' => 'Continuously improving technical and organizational skills to enhance work quality.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8656,
                'name' => json_encode([
                    'pl' => 'Proponowanie usprawnień i narzędzi, które mogą automatyzować proces wprowadzania danych.',
                    'en' => 'Suggesting improvements and tools that can automate the data entry process.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8657,
                'name' => json_encode([
                    'pl' => 'Współpraca z działem IT w zakresie wdrażania narzędzi automatyzujących procesy oraz testowanie ich działania.',
                    'en' => 'Cooperating with the IT department to implement tools that automate processes and testing their functionality.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8658,
                'name' => json_encode([
                    'pl' => 'Wykorzystanie makr i funkcji automatyzujących w arkuszach kalkulacyjnych i bazach danych.',
                    'en' => 'Using macros and automation functions in spreadsheets and databases.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8659,
                'name' => json_encode([
                    'pl' => 'Zgłaszanie problemów technicznych lub błędów systemowych, które mogą wpływać na jakość i szybkość pracy.',
                    'en' => 'Reporting technical issues or system errors that may affect the quality and speed of work.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8660,
                'name' => json_encode([
                    'pl' => 'Rozwiązywanie drobnych problemów związanych z obsługą systemów do wprowadzania danych.',
                    'en' => 'Resolving minor issues related to the operation of data entry systems.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8661,
                'name' => json_encode([
                    'pl' => 'Współpraca z działem IT w celu rozwiązywania problemów z oprogramowaniem lub sprzętem.',
                    'en' => 'Collaborating with the IT department to resolve software or hardware issues.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8662,
                'name' => json_encode([
                    'pl' => 'Dokumentowanie procedur związanych z wprowadzaniem danych, w tym standardów pracy i wytycznych dotyczących jakości.',
                    'en' => 'Documenting procedures related to data entry, including work standards and quality guidelines.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8663,
                'name' => json_encode([
                    'pl' => 'Aktualizacja procedur wprowadzania danych w celu zapewnienia zgodności z polityką organizacji.',
                    'en' => 'Updating data entry procedures to ensure compliance with the organization\'s policy.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8664,
                'name' => json_encode([
                    'pl' => 'Przekazywanie procedur i wytycznych nowym pracownikom oraz ich instruowanie w zakresie procesów wprowadzania danych.',
                    'en' => 'Transmitting procedures and guidelines to new employees and instructing them on data entry processes.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8665,
                'name' => json_encode([
                    'pl' => 'Dbanie o zachowanie poufności danych osobowych i innych wrażliwych informacji.',
                    'en' => 'Ensuring the confidentiality of personal and other sensitive data.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8666,
                'name' => json_encode([
                    'pl' => 'Stosowanie haseł, środków bezpieczeństwa i zabezpieczeń, aby zapobiec nieautoryzowanemu dostępowi do danych.',
                    'en' => 'Implementing passwords, security measures, and safeguards to prevent unauthorized access to data.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8667,
                'name' => json_encode([
                    'pl' => 'Informowanie o incydentach związanych z bezpieczeństwem danych lub podejrzeniem naruszenia zasad poufności.',
                    'en' => 'Reporting incidents related to data security or suspected violations of confidentiality principles.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8668,
                'name' => json_encode([
                    'pl' => 'Wprowadzanie danych w formie umożliwiającej ich łatwą analizę i obróbkę przez analityków i specjalistów.',
                    'en' => 'Entering data in a format that allows easy analysis and processing by analysts and specialists.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8669,
                'name' => json_encode([
                    'pl' => 'Przekształcanie danych na potrzeby raportów lub analiz, np. poprzez sortowanie, filtrowanie lub grupowanie.',
                    'en' => 'Transforming data for reports or analyses, e.g., by sorting, filtering, or grouping.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8670,
                'name' => json_encode([
                    'pl' => 'Wspieranie zespołów analitycznych w pozyskiwaniu danych w odpowiednim formacie.',
                    'en' => 'Supporting analytical teams in acquiring data in the appropriate format.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8671,
                'name' => json_encode([
                    'pl' => 'Tworzenie kopii zapasowych wprowadzanych danych w celu zabezpieczenia przed ich utratą.',
                    'en' => 'Creating backups of entered data to protect against loss.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8672,
                'name' => json_encode([
                    'pl' => 'Współpraca z działem IT w zakresie przywracania danych w przypadku ich usunięcia lub awarii systemu.',
                    'en' => 'Cooperating with the IT department to restore data in case of deletion or system failure.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8673,
                'name' => json_encode([
                    'pl' => 'Przechowywanie kopii zapasowych w miejscach zabezpieczonych i zgodnych z polityką organizacji.',
                    'en' => 'Storing backups in secure locations that comply with organizational policy.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8674,
                'name' => json_encode([
                    'pl' => 'Regularna kontrola baz danych w celu zapewnienia spójności i zgodności między różnymi systemami.',
                    'en' => 'Regularly checking databases to ensure consistency and compliance between different systems.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8675,
                'name' => json_encode([
                    'pl' => 'Korekta niezgodności i duplikatów, które mogą wpływać na wyniki analiz lub działanie systemów.',
                    'en' => 'Correcting inconsistencies and duplicates that may affect analysis results or system performance.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8676,
                'name' => json_encode([
                    'pl' => 'Zgłaszanie problemów ze spójnością danych do przełożonych lub działu IT.',
                    'en' => 'Reporting data consistency issues to supervisors or the IT department.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
        ];
        $PRACOWNIK_DO_SPRAW_STATYSTYKI = [
            [
                'id' => 8677,
                'name' => json_encode([
                    'pl' => 'Gromadzenie danych z wewnętrznych systemów organizacji oraz zewnętrznych źródeł, takich jak raporty, ankiety, bazy danych.',
                    'en' => 'Collecting data from internal organization systems and external sources such as reports, surveys, and databases.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8678,
                'name' => json_encode([
                    'pl' => 'Projektowanie i prowadzenie badań statystycznych oraz gromadzenie danych w terenie, jeśli jest to konieczne.',
                    'en' => 'Designing and conducting statistical research and collecting data in the field if necessary.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8679,
                'name' => json_encode([
                    'pl' => 'Weryfikacja jakości i kompletności zebranych danych oraz dbanie o ich aktualność.',
                    'en' => 'Verifying the quality and completeness of collected data and ensuring their currency.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8680,
                'name' => json_encode([
                    'pl' => 'Tworzenie oraz aktualizowanie baz danych, aby były one uporządkowane i łatwo dostępne do analiz.',
                    'en' => 'Creating and updating databases to ensure they are organized and easily accessible for analysis.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8681,
                'name' => json_encode([
                    'pl' => 'Przetwarzanie danych z różnych źródeł, tak aby można je było wprowadzić do systemów analitycznych.',
                    'en' => 'Processing data from various sources so they can be entered into analytical systems.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8682,
                'name' => json_encode([
                    'pl' => 'Oczyszczanie danych z błędów, duplikatów i nieprawidłowości w celu zapewnienia ich spójności.',
                    'en' => 'Cleaning data of errors, duplicates, and inconsistencies to ensure their consistency.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8683,
                'name' => json_encode([
                    'pl' => 'Wykonywanie analiz statystycznych na podstawie zebranych danych przy użyciu odpowiednich metod statystycznych, takich jak regresja, analiza wariancji czy testy istotności.',
                    'en' => 'Conducting statistical analyses based on collected data using appropriate statistical methods such as regression, ANOVA, or significance tests.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8684,
                'name' => json_encode([
                    'pl' => 'Przeprowadzanie wnioskowania statystycznego, aby wyciągnąć istotne informacje i odpowiedzieć na konkretne pytania badawcze.',
                    'en' => 'Performing statistical inference to draw significant insights and answer specific research questions.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8685,
                'name' => json_encode([
                    'pl' => 'Praca z narzędziami statystycznymi, takimi jak R, Python, SPSS, SAS, Excel czy inne oprogramowanie analityczne.',
                    'en' => 'Working with statistical tools such as R, Python, SPSS, SAS, Excel, or other analytical software.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8686,
                'name' => json_encode([
                    'pl' => 'Opracowywanie raportów prezentujących wyniki analiz, w tym wykresów, tabel i infografik, które ułatwiają interpretację danych.',
                    'en' => 'Developing reports presenting analysis results, including charts, tables, and infographics that facilitate data interpretation.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8687,
                'name' => json_encode([
                    'pl' => 'Przygotowywanie wniosków na podstawie wyników analizy, które wspierają procesy decyzyjne w organizacji.',
                    'en' => 'Preparing conclusions based on analysis results that support decision-making processes in the organization.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8688,
                'name' => json_encode([
                    'pl' => 'Sporządzanie raportów miesięcznych, kwartalnych i rocznych na potrzeby wewnętrznych i zewnętrznych odbiorców.',
                    'en' => 'Preparing monthly, quarterly, and annual reports for internal and external recipients.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8689,
                'name' => json_encode([
                    'pl' => 'Tworzenie atrakcyjnych wizualizacji danych, takich jak wykresy, diagramy, mapy, które pomagają w łatwiejszym zrozumieniu wyników.',
                    'en' => 'Creating attractive data visualizations, such as charts, diagrams, and maps that help in better understanding results.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8690,
                'name' => json_encode([
                    'pl' => 'Wykorzystywanie narzędzi do wizualizacji danych, takich jak Tableau, Power BI, Excel, aby przygotować przejrzyste prezentacje.',
                    'en' => 'Utilizing data visualization tools such as Tableau, Power BI, Excel to create clear presentations.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8691,
                'name' => json_encode([
                    'pl' => 'Dopasowanie formy wizualizacji do grupy docelowej, aby ułatwić interpretację wyników.',
                    'en' => 'Adjusting the form of visualization to the target group to facilitate interpretation of results.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8692,
                'name' => json_encode([
                    'pl' => 'Analiza trendów na podstawie danych historycznych oraz przewidywanie przyszłych wartości na ich podstawie.',
                    'en' => 'Analyzing trends based on historical data and predicting future values based on them.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8693,
                'name' => json_encode([
                    'pl' => 'Wykonywanie prognoz przy użyciu modeli statystycznych, np. modeli czasowych, które wspierają planowanie w organizacji.',
                    'en' => 'Making forecasts using statistical models, such as time series models, that support planning in the organization.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8694,
                'name' => json_encode([
                    'pl' => 'Przekazywanie wyników prognoz i analiz trendów działom operacyjnym, finansowym i zarządowi.',
                    'en' => 'Delivering the results of forecasts and trend analyses to operational, financial departments, and management.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8695,
                'name' => json_encode([
                    'pl' => 'Opracowywanie ankiet, kwestionariuszy i formularzy do zbierania danych, dbając o ich poprawność i przydatność.',
                    'en' => 'Developing surveys, questionnaires, and forms for data collection, ensuring their accuracy and usefulness.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8696,
                'name' => json_encode([
                    'pl' => 'Dobór odpowiednich metod badawczych i technik zbierania danych dla potrzeb organizacji lub projektu.',
                    'en' => 'Selecting appropriate research methods and data collection techniques for organizational or project needs.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8697,
                'name' => json_encode([
                    'pl' => 'Współpraca z zespołami badawczymi i analitycznymi w celu przeprowadzania badań terenowych lub wywiadów.',
                    'en' => 'Cooperating with research and analytical teams to conduct field research or interviews.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8698,
                'name' => json_encode([
                    'pl' => 'Kontrola jakości danych, aby zapewnić ich spójność i dokładność przed przystąpieniem do analizy.',
                    'en' => 'Quality control of data to ensure its consistency and accuracy before analysis.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8699,
                'name' => json_encode([
                    'pl' => 'Identyfikacja braków w danych, niezgodności oraz ich korekta, jeśli to możliwe.',
                    'en' => 'Identifying data gaps, inconsistencies, and correcting them if possible.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8700,
                'name' => json_encode([
                    'pl' => 'Regularne przeprowadzanie audytów danych, aby zachować wysoką jakość i wiarygodność informacji.',
                    'en' => 'Regularly conducting data audits to maintain high quality and reliability of information.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8701,
                'name' => json_encode([
                    'pl' => 'Budowanie modeli statystycznych i ekonometrycznych, które pozwalają na analizę zależności pomiędzy zmiennymi.',
                    'en' => 'Building statistical and econometric models that allow for analyzing relationships between variables.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8702,
                'name' => json_encode([
                    'pl' => 'Testowanie modeli oraz ich kalibracja w celu uzyskania jak największej dokładności wyników.',
                    'en' => 'Testing models and calibrating them to achieve the highest possible accuracy of results.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8703,
                'name' => json_encode([
                    'pl' => 'Użycie wyników z modeli do podejmowania rekomendacji dla organizacji lub wspierania strategii biznesowych.',
                    'en' => 'Using results from models to make recommendations for the organization or support business strategies.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8704,
                'name' => json_encode([
                    'pl' => 'Dokumentowanie procesu analitycznego, od zebrania danych po końcowe wyniki, aby można było odtworzyć analizę.',
                    'en' => 'Documenting the analytical process, from data collection to final results, so that the analysis can be reproduced.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8705,
                'name' => json_encode([
                    'pl' => 'Tworzenie procedur analitycznych i instrukcji obsługi dla innych pracowników zespołu lub organizacji.',
                    'en' => 'Creating analytical procedures and user manuals for other team members or the organization.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8706,
                'name' => json_encode([
                    'pl' => 'Przechowywanie dokumentacji analitycznej w sposób zgodny z polityką organizacji oraz ochroną danych osobowych.',
                    'en' => 'Storing analytical documentation in accordance with organizational policy and data protection regulations.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8707,
                'name' => json_encode([
                    'pl' => 'Przestrzeganie przepisów dotyczących ochrony danych osobowych (np. RODO) oraz dbanie o ich poufność.',
                    'en' => 'Complying with data protection regulations (e.g., GDPR) and ensuring confidentiality.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8708,
                'name' => json_encode([
                    'pl' => 'Zapewnienie, że dane są przechowywane i przetwarzane zgodnie z zasadami ochrony prywatności.',
                    'en' => 'Ensuring that data is stored and processed in accordance with privacy protection principles.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8709,
                'name' => json_encode([
                    'pl' => 'Informowanie przełożonych o naruszeniach zasad ochrony danych oraz wprowadzanie odpowiednich zabezpieczeń.',
                    'en' => 'Reporting violations of data protection rules to superiors and implementing appropriate safeguards.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8710,
                'name' => json_encode([
                    'pl' => 'Współpraca z działami finansowymi, marketingowymi, HR oraz operacyjnymi, aby dostarczać im potrzebnych analiz i raportów.',
                    'en' => 'Cooperating with financial, marketing, HR, and operational departments to provide them with necessary analyses and reports.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8711,
                'name' => json_encode([
                    'pl' => 'Konsultowanie wymagań analitycznych z menedżerami i osobami decyzyjnymi, aby jak najlepiej dostosować analizy do ich potrzeb.',
                    'en' => 'Consulting analytical requirements with managers and decision-makers to best tailor analyses to their needs.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8712,
                'name' => json_encode([
                    'pl' => 'Wsparcie zespołów projektowych w interpretacji wyników analiz i wdrażaniu rekomendacji opartych na danych.',
                    'en' => 'Supporting project teams in interpreting analysis results and implementing data-driven recommendations.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8713,
                'name' => json_encode([
                    'pl' => 'Tworzenie skryptów i makr, które automatyzują zbieranie, przetwarzanie oraz analizę danych.',
                    'en' => 'Creating scripts and macros that automate data collection, processing, and analysis.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8714,
                'name' => json_encode([
                    'pl' => 'Współpraca z działem IT w zakresie wdrażania narzędzi automatyzujących procesy analityczne.',
                    'en' => 'Collaborating with the IT department to implement tools that automate analytical processes.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8715,
                'name' => json_encode([
                    'pl' => 'Monitorowanie wdrożonych rozwiązań oraz ich usprawnianie, aby zwiększyć wydajność analiz.',
                    'en' => 'Monitoring implemented solutions and improving them to increase analysis efficiency.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8716,
                'name' => json_encode([
                    'pl' => 'Przeprowadzanie szkoleń z obsługi narzędzi statystycznych i analitycznych dla innych pracowników.',
                    'en' => 'Conducting training on the use of statistical and analytical tools for other employees.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8717,
                'name' => json_encode([
                    'pl' => 'Udzielanie wsparcia merytorycznego w zakresie interpretacji danych i wyników analiz.',
                    'en' => 'Providing substantive support in data interpretation and analysis results.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8718,
                'name' => json_encode([
                    'pl' => 'Wdrażanie nowych pracowników do procesów analitycznych obowiązujących w organizacji.',
                    'en' => 'Integrating new employees into the analytical processes in place within the organization.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8719,
                'name' => json_encode([
                    'pl' => 'Opracowywanie danych w sposób, który pozwala na ich publikację w raportach, artykułach lub prezentacjach.',
                    'en' => 'Processing data in a manner that allows for its publication in reports, articles, or presentations.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8720,
                'name' => json_encode([
                    'pl' => 'Zapewnienie przejrzystości i zrozumiałości wyników, aby były one atrakcyjne dla szerokiego grona odbiorców.',
                    'en' => 'Ensuring the transparency and clarity of results so they are appealing to a wide audience.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8721,
                'name' => json_encode([
                    'pl' => 'Dostosowanie wyników analiz do standardów publikacji organizacji lub wymogów zewnętrznych, takich jak publikacje naukowe.',
                    'en' => 'Adapting analysis results to the publication standards of the organization or external requirements, such as scientific publications.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8722,
                'name' => json_encode([
                    'pl' => 'Wykonywanie analiz danych rynkowych, wyników badań konsumenckich i ankiet.',
                    'en' => 'Conducting analyses of market data, consumer survey results, and questionnaires.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8723,
                'name' => json_encode([
                    'pl' => 'Interpretacja wyników pod kątem aktualnych trendów oraz ich wpływu na działalność organizacji.',
                    'en' => 'Interpreting results in light of current trends and their impact on organizational operations.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8724,
                'name' => json_encode([
                    'pl' => 'Przekazywanie rekomendacji na podstawie wyników badań działowi marketingu, sprzedaży i zarządowi.',
                    'en' => 'Delivering recommendations based on research results to the marketing, sales, and management departments.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8725,
                'name' => json_encode([
                    'pl' => 'Regularne uczestnictwo w szkoleniach i kursach z zakresu statystyki, analizy danych oraz nowych narzędzi analitycznych.',
                    'en' => 'Regularly participating in training and courses in statistics, data analysis, and new analytical tools.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8726,
                'name' => json_encode([
                    'pl' => 'Aktualizowanie wiedzy na temat nowych technik analitycznych i oprogramowania.',
                    'en' => 'Updating knowledge on new analytical techniques and software.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8727,
                'name' => json_encode([
                    'pl' => 'Ciągłe doskonalenie swoich umiejętności, aby utrzymać wysoką jakość pracy i dostosować się do zmian technologicznych.',
                    'en' => 'Continuously improving skills to maintain high work quality and adapt to technological changes.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
        ];
        $PRACOWNIK_W_BIURZE_MAKLERSKIM = [
            [
                'id' => 8728,
                'name' => json_encode([
                    'pl' => 'Kontakt z klientami, udzielanie informacji na temat dostępnych instrumentów finansowych oraz ich charakterystyki.',
                    'en' => 'Contacting clients, providing information about available financial instruments and their characteristics.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8729,
                'name' => json_encode([
                    'pl' => 'Udzielanie podstawowego doradztwa inwestycyjnego w ramach dostępnych usług biura maklerskiego.',
                    'en' => 'Providing basic investment advice within the available services of the brokerage office.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8730,
                'name' => json_encode([
                    'pl' => 'Pomoc klientom w wyborze produktów inwestycyjnych dostosowanych do ich celów i tolerancji ryzyka.',
                    'en' => 'Assisting clients in choosing investment products tailored to their goals and risk tolerance.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8731,
                'name' => json_encode([
                    'pl' => 'Przyjmowanie zleceń kupna i sprzedaży instrumentów finansowych od klientów oraz ich przekazywanie do realizacji.',
                    'en' => 'Receiving buy and sell orders for financial instruments from clients and forwarding them for execution.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8732,
                'name' => json_encode([
                    'pl' => 'Monitorowanie realizacji zleceń giełdowych i informowanie klientów o statusie transakcji.',
                    'en' => 'Monitoring the execution of stock orders and informing clients about the status of transactions.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8733,
                'name' => json_encode([
                    'pl' => 'Zapewnienie zgodności działań z obowiązującymi procedurami oraz polityką biura maklerskiego.',
                    'en' => 'Ensuring that actions comply with applicable procedures and the brokerage office’s policy.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8734,
                'name' => json_encode([
                    'pl' => 'Śledzenie zmian na rynku kapitałowym, analizowanie cen akcji, obligacji, funduszy i innych instrumentów.',
                    'en' => 'Tracking changes in the capital market, analyzing stock, bond, fund, and other instrument prices.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8735,
                'name' => json_encode([
                    'pl' => 'Przygotowywanie raportów i analiz rynkowych na potrzeby wewnętrzne i dla klientów biura maklerskiego.',
                    'en' => 'Preparing reports and market analyses for internal purposes and for brokerage office clients.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8736,
                'name' => json_encode([
                    'pl' => 'Informowanie klientów o istotnych wydarzeniach rynkowych, które mogą wpłynąć na ich portfele inwestycyjne.',
                    'en' => 'Informing clients about significant market events that may affect their investment portfolios.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8737,
                'name' => json_encode([
                    'pl' => 'Współpraca z zespołem doradczym w zakresie tworzenia strategii inwestycyjnych dla klientów.',
                    'en' => 'Collaborating with the advisory team in developing investment strategies for clients.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8738,
                'name' => json_encode([
                    'pl' => 'Analizowanie portfeli klientów i rekomendowanie zmian w zależności od sytuacji rynkowej.',
                    'en' => 'Analyzing client portfolios and recommending changes based on market conditions.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8739,
                'name' => json_encode([
                    'pl' => 'Wsparcie w dostosowywaniu strategii do indywidualnych potrzeb i profilu ryzyka klientów.',
                    'en' => 'Supporting the adjustment of strategies to the individual needs and risk profiles of clients.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8740,
                'name' => json_encode([
                    'pl' => 'Prowadzenie dokumentacji związanej z realizowanymi zleceniami oraz transakcjami finansowymi.',
                    'en' => 'Maintaining documentation related to executed orders and financial transactions.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8741,
                'name' => json_encode([
                    'pl' => 'Archiwizacja dokumentów w sposób zgodny z przepisami dotyczącymi ochrony danych osobowych i regulacjami branżowymi.',
                    'en' => 'Archiving documents in accordance with data protection regulations and industry regulations.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8742,
                'name' => json_encode([
                    'pl' => 'Aktualizacja rejestrów zleceń i transakcji oraz dbanie o ich zgodność z polityką biura maklerskiego.',
                    'en' => 'Updating order and transaction records and ensuring compliance with brokerage office policy.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8743,
                'name' => json_encode([
                    'pl' => 'Przestrzeganie przepisów dotyczących rynku kapitałowego oraz zasad obowiązujących w biurze maklerskim.',
                    'en' => 'Complying with capital market regulations and rules applicable in the brokerage office.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8744,
                'name' => json_encode([
                    'pl' => 'Monitorowanie działań biura maklerskiego pod kątem zgodności z regulacjami KNF, ESMA i innych organów nadzorczych.',
                    'en' => "Monitoring the brokerage office's activities for compliance with KNF, ESMA, and other supervisory bodies regulations."
        ]),
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
    ],
    [
        'id' => 8745,
        'name' => json_encode([
            'pl' => 'Informowanie przełożonych o nieprawidłowościach i wprowadzanie działań naprawczych w przypadku wykrycia niezgodności.',
            'en' => 'Informing supervisors about irregularities and implementing corrective actions when discrepancies are detected.'
        ]),
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
    ],
    [
        'id' => 8746,
        'name' => json_encode([
            'pl' => 'Przygotowywanie okresowych raportów z wykonanych transakcji i zleceń dla klientów oraz na potrzeby wewnętrzne.',
            'en' => 'Preparing periodic reports of executed transactions and orders for clients and for internal purposes.'
        ]),
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
    ],
    [
        'id' => 8747,
        'name' => json_encode([
            'pl' => 'Generowanie zestawień, które pokazują wyniki inwestycyjne, strukturę portfeli oraz ich zmiany.',
            'en' => 'Generating summaries that show investment results, portfolio structure, and their changes.'
        ]),
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
    ],
    [
        'id' => 8748,
        'name' => json_encode([
            'pl' => 'Przekazywanie raportów klientom oraz zespołowi analitycznemu w celu oceny wyników i podejmowania decyzji.',
            'en' => 'Delivering reports to clients and the analytical team for performance evaluation and decision-making.'
        ]),
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
    ],
    [
        'id' => 8749,
        'name' => json_encode([
            'pl' => 'Korzystanie z systemów informatycznych do zarządzania zleceniami, ewidencją transakcji i analizą danych rynkowych.',
            'en' => 'Using IT systems to manage orders, record transactions, and analyze market data.'
        ]),
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
    ],
    [
        'id' => 8750,
        'name' => json_encode([
            'pl' => 'Monitorowanie poprawności działania systemów maklerskich i zgłaszanie problemów technicznych działowi IT.',
            'en' => 'Monitoring the correct operation of brokerage systems and reporting technical problems to the IT department.'
        ]),
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
    ],
    [
        'id' => 8751,
        'name' => json_encode([
            'pl' => 'Aktualizowanie informacji o transakcjach oraz wyników inwestycyjnych w systemach.',
            'en' => 'Updating information about transactions and investment results in systems.'
        ]),
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
    ],
    [
        'id' => 8752,
        'name' => json_encode([
            'pl' => 'Zachowanie poufności danych finansowych klientów oraz stosowanie zabezpieczeń w celu ochrony ich informacji.',
            'en' => 'Maintaining the confidentiality of client financial data and implementing safeguards to protect their information.'
        ]),
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
    ],
    [
        'id' => 8753,
        'name' => json_encode([
            'pl' => 'Przestrzeganie zasad etyki zawodowej i unikanie konfliktu interesów w relacjach z klientami.',
            'en' => 'Adhering to professional ethics and avoiding conflicts of interest in client relations.'
        ]),
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
    ],
    [
        'id' => 8754,
        'name' => json_encode([
            'pl' => 'Przekazywanie informacji o działaniach klientów wyłącznie osobom upoważnionym.',
            'en' => 'Passing information about client activities only to authorized personnel.'
        ]),
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
    ],
    [
        'id' => 8755,
        'name' => json_encode([
            'pl' => 'Pomoc w zakładaniu kont maklerskich oraz przeprowadzaniu procedur identyfikacyjnych klientów.',
            'en' => 'Assisting in opening brokerage accounts and conducting client identification procedures.'
        ]),
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
    ],
    [
        'id' => 8756,
        'name' => json_encode([
            'pl' => 'Informowanie klientów o procedurach prawnych i podatkowych związanych z inwestycjami oraz pomaganie w ich realizacji.',
            'en' => 'Informing clients about legal and tax procedures related to investments and assisting in their implementation.'
        ]),
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
    ],
    [
        'id' => 8757,
        'name' => json_encode([
            'pl' => 'Wyjaśnianie klientom obowiązujących regulacji i wymagań formalnych.',
            'en' => 'Explaining to clients the applicable regulations and formal requirements.'
        ]),
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
    ],
    [
        'id' => 8758,
        'name' => json_encode([
            'pl' => 'Ewidencjonowanie operacji finansowych w systemach rachunkowych biura maklerskiego.',
            'en' => 'Recording financial operations in the brokerage office accounting systems.'
        ]),
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
    ],
    [
        'id' => 8759,
        'name' => json_encode([
            'pl' => 'Sporządzanie raportów finansowych na potrzeby rozliczeń i raportowania do instytucji nadzorczych.',
            'en' => 'Preparing financial reports for settlements and reporting to regulatory authorities.'
        ]),
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
    ],
    [
        'id' => 8760,
        'name' => json_encode([
            'pl' => 'Monitorowanie zmian wartości portfeli klientów oraz sporządzanie analiz wyników finansowych.',
            'en' => 'Monitoring changes in clients’ portfolios and preparing analyses of financial results.'
        ]),
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
    ],
    [
        'id' => 8761,
        'name' => json_encode([
            'pl' => 'Organizowanie szkoleń i webinarów dla klientów, aby zwiększyć ich świadomość inwestycyjną.',
            'en' => 'Organizing training sessions and webinars for clients to increase their investment awareness.'
        ]),
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
    ],
    [
        'id' => 8762,
        'name' => json_encode([
            'pl' => 'Udzielanie odpowiedzi na pytania klientów dotyczące rynków kapitałowych i produktów inwestycyjnych.',
            'en' => 'Responding to clients’ inquiries regarding capital markets and investment products.'
        ]),
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
    ],
    [
        'id' => 8763,
        'name' => json_encode([
            'pl' => 'Pomoc klientom w interpretacji raportów finansowych oraz rekomendacji inwestycyjnych.',
            'en' => 'Assisting clients in interpreting financial reports and investment recommendations.'
        ]),
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
    ],
    [
        'id' => 8764,
        'name' => json_encode([
            'pl' => 'Śledzenie poziomu ryzyka w portfelach klientów oraz identyfikowanie potencjalnych zagrożeń rynkowych.',
            'en' => 'Monitoring the risk level in clients’ portfolios and identifying potential market threats.'
        ]),
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
    ],
    [
        'id' => 8765,
        'name' => json_encode([
            'pl' => 'Informowanie klientów o zmianach w poziomie ryzyka związanym z poszczególnymi aktywami.',
            'en' => 'Informing clients about changes in risk levels associated with individual assets.'
        ]),
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
    ],
    [
        'id' => 8766,
        'name' => json_encode([
            'pl' => 'Współpraca z zespołem zarządzania ryzykiem w celu ochrony klientów przed niekontrolowanymi stratami.',
            'en' => 'Collaborating with the risk management team to protect clients from uncontrolled losses.'
        ]),
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
    ],
    [
        'id' => 8767,
        'name' => json_encode([
            'pl' => 'Budowanie długoterminowych relacji z klientami opartych na zaufaniu i profesjonalizmie.',
            'en' => 'Building long-term relationships with clients based on trust and professionalism.'
        ]),
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
    ],
    [
        'id' => 8768,
        'name' => json_encode([
            'pl' => 'Regularny kontakt z klientami, informowanie ich o stanie konta i bieżących wynikach portfela.',
            'en' => 'Regular contact with clients, informing them about their account status and current portfolio performance.'
        ]),
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
    ],
    [
        'id' => 8769,
        'name' => json_encode([
            'pl' => 'Reagowanie na potrzeby klientów i dostosowanie strategii do ich indywidualnych preferencji.',
            'en' => 'Responding to clients’ needs and adjusting strategies to their individual preferences.'
        ]),
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
    ],
    [
        'id' => 8770,
        'name' => json_encode([
            'pl' => 'Regularne uczestnictwo w szkoleniach z zakresu rynków kapitałowych, produktów finansowych oraz etyki zawodowej.',
            'en' => 'Regularly participating in training on capital markets, financial products, and professional ethics.'
        ]),
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
    ],
    [
        'id' => 8771,
        'name' => json_encode([
            'pl' => 'Aktualizowanie wiedzy na temat nowych instrumentów finansowych, regulacji oraz trendów rynkowych.',
            'en' => 'Updating knowledge of new financial instruments, regulations, and market trends.'
        ]),
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
    ],
    [
        'id' => 8772,
        'name' => json_encode([
            'pl' => 'Zdobywanie certyfikatów i uprawnień, które są wymagane do pracy w biurze maklerskim.',
            'en' => 'Obtaining certifications and licenses required to work in a brokerage office.'
        ]),
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
    ],
    [
        'id' => 8773,
        'name' => json_encode([
            'pl' => 'Zgłaszanie problemów technicznych w systemach transakcyjnych oraz współpraca z działem IT w celu ich naprawy.',
            'en' => 'Reporting technical issues in trading systems and collaborating with IT to resolve them.'
        ]),
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
    ],
    [
        'id' => 8774,
        'name' => json_encode([
            'pl' => 'Rozwiązywanie problemów związanych z błędami transakcyjnymi, zleceniami klientów lub zmianami w regulacjach.',
            'en' => 'Resolving issues related to transaction errors, client orders, or regulatory changes.'
        ]),
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
    ],
    [
        'id' => 8775,
        'name' => json_encode([
            'pl' => 'Dbanie o sprawne funkcjonowanie narzędzi oraz systemów maklerskich wykorzystywanych w codziennej pracy.',
            'en' => 'Ensuring the smooth functioning of brokerage tools and systems used in daily operations.'
        ]),
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
    ],
    [
        'id' => 8776,
        'name' => json_encode([
            'pl' => 'Przestrzeganie procedur związanych z przeciwdziałaniem praniu pieniędzy oraz finansowaniu terroryzmu (AML/CFT).',
            'en' => 'Complying with procedures related to anti-money laundering and counter-terrorism financing (AML/CFT).'
        ]),
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
    ],
    [
        'id' => 8777,
        'name' => json_encode([
            'pl' => 'Identyfikacja klientów i monitorowanie transakcji pod kątem podejrzanych działań.',
            'en' => 'Identifying clients and monitoring transactions for suspicious activities.'
        ]),
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
    ],
    [
        'id' => 8778,
        'name' => json_encode([
            'pl' => 'Współpraca z działem compliance w celu spełniania wymogów regulacyjnych i minimalizowania ryzyka.',
            'en' => 'Collaborating with the compliance department to meet regulatory requirements and minimize risk.'
        ]),
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
    ],
    [
        'id' => 8779,
        'name' => json_encode([
            'pl' => 'Współpraca z działem marketingu w zakresie dostarczania analiz i raportów na potrzeby kampanii promocyjnych.',
            'en' => 'Collaborating with the marketing department to provide analyses and reports for promotional campaigns.'
        ]),
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
    ],
    [
        'id' => 8780,
        'name' => json_encode([
            'pl' => 'Przygotowywanie materiałów informacyjnych dla klientów, które prezentują ofertę i wyniki biura maklerskiego.',
            'en' => 'Preparing informational materials for clients that present the brokerage office’s offer and results.'
        ]),
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
    ],
    [
        'id' => 8781,
        'name' => json_encode([
            'pl' => 'Dbanie o spójność komunikacji z klientami oraz dostarczanie im regularnych aktualizacji rynkowych.',
            'en' => 'Ensuring consistent communication with clients and providing them with regular market updates.'
        ]),
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
    ],
];
        $POZOSTALI_PRACOWNICY_DO_SPRAW_STATYSTYKI_FINANSÓW_UBEZPIECZEŃ = [
            [
                'id' => 8782,
                'name' => json_encode([
                    'pl' => 'Gromadzenie danych z różnych źródeł, takich jak systemy wewnętrzne, raporty, ankiety oraz bazy danych.',
                    'en' => 'Collecting data from various sources such as internal systems, reports, surveys, and databases.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8783,
                'name' => json_encode([
                    'pl' => 'Wprowadzanie i przetwarzanie danych w systemach analitycznych oraz dbałość o ich poprawność i aktualność.',
                    'en' => 'Entering and processing data in analytical systems and ensuring their accuracy and currency.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8784,
                'name' => json_encode([
                    'pl' => 'Weryfikacja spójności i kompletności danych oraz identyfikacja błędów i niezgodności.',
                    'en' => 'Verifying the consistency and completeness of data and identifying errors and discrepancies.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8785,
                'name' => json_encode([
                    'pl' => 'Tworzenie raportów statystycznych oraz finansowych na podstawie zebranych danych, w tym wykresów, tabel i zestawień.',
                    'en' => 'Creating statistical and financial reports based on collected data, including charts, tables, and summaries.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8786,
                'name' => json_encode([
                    'pl' => 'Analizowanie trendów i wskaźników na potrzeby wewnętrznych działów oraz klientów.',
                    'en' => 'Analyzing trends and indicators for internal departments and clients.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8787,
                'name' => json_encode([
                    'pl' => 'Przekazywanie wyników analiz menedżerom i innym zespołom w organizacji w celu wsparcia ich działań.',
                    'en' => 'Delivering analysis results to managers and other teams in the organization to support their actions.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8788,
                'name' => json_encode([
                    'pl' => 'Współpraca z analitykami przy ocenie ryzyka inwestycji oraz projektów finansowych.',
                    'en' => 'Collaborating with analysts to assess investment risks and financial projects.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8789,
                'name' => json_encode([
                    'pl' => 'Analiza portfeli inwestycyjnych i ocena potencjalnych zagrożeń oraz ich wpływu na wyniki finansowe.',
                    'en' => 'Analyzing investment portfolios and assessing potential risks and their impact on financial results.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8790,
                'name' => json_encode([
                    'pl' => 'Wspieranie zespołu zarządzania ryzykiem w rekomendowaniu działań ograniczających ryzyko.',
                    'en' => 'Supporting the risk management team in recommending actions to mitigate risk.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8791,
                'name' => json_encode([
                    'pl' => 'Prowadzenie dokumentacji związanej z transakcjami finansowymi, polisami ubezpieczeniowymi oraz innymi operacjami.',
                    'en' => 'Maintaining documentation related to financial transactions, insurance policies, and other operations.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8792,
                'name' => json_encode([
                    'pl' => 'Archiwizacja dokumentów zgodnie z polityką organizacji oraz przepisami dotyczącymi ochrony danych osobowych.',
                    'en' => 'Archiving documents according to the organization’s policy and regulations regarding personal data protection.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8793,
                'name' => json_encode([
                    'pl' => 'Aktualizacja i przechowywanie dokumentacji tak, aby była dostępna dla uprawnionych osób w organizacji.',
                    'en' => 'Updating and storing documentation so that it is accessible to authorized persons in the organization.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8794,
                'name' => json_encode([
                    'pl' => 'Sporządzanie raportów dotyczących wyników finansowych, analiz budżetowych oraz kosztów na potrzeby działów finansowych.',
                    'en' => 'Preparing reports on financial performance, budget analyses, and costs for financial departments.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8795,
                'name' => json_encode([
                    'pl' => 'Tworzenie zestawień wydatków, przychodów, sald i innych wskaźników finansowych.',
                    'en' => 'Creating summaries of expenses, revenues, balances, and other financial indicators.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8796,
                'name' => json_encode([
                    'pl' => 'Pomoc w tworzeniu budżetów i monitorowanie ich realizacji w organizacji.',
                    'en' => 'Assisting in budget creation and monitoring its implementation within the organization.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8797,
                'name' => json_encode([
                    'pl' => 'Opracowywanie analiz dotyczących ubezpieczeń i rynku finansowego, takich jak wskaźniki ryzyka, szkód, oraz rezerw ubezpieczeniowych.',
                    'en' => 'Preparing analyses related to insurance and the financial market, such as risk indicators, damages, and insurance reserves.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8798,
                'name' => json_encode([
                    'pl' => 'Przygotowywanie prognoz dotyczących przyszłych wyników oraz ocena ryzyka ubezpieczeniowego.',
                    'en' => 'Preparing forecasts regarding future performance and assessing insurance risk.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8799,
                'name' => json_encode([
                    'pl' => 'Przekazywanie wyników analiz menedżerom i innym zespołom w celu wspierania ich działań.',
                    'en' => 'Delivering analysis results to managers and other teams to support their activities.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8800,
                'name' => json_encode([
                    'pl' => 'Opracowywanie przejrzystych wizualizacji danych, takich jak wykresy, infografiki, które pomagają zrozumieć wyniki analiz.',
                    'en' => 'Creating clear data visualizations, such as charts and infographics, that help to understand the results of analyses.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8801,
                'name' => json_encode([
                    'pl' => 'Korzystanie z narzędzi wizualizacyjnych, takich jak Excel, Tableau, Power BI, w celu prezentacji wyników.',
                    'en' => 'Utilizing visualization tools such as Excel, Tableau, Power BI for presenting results.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8802,
                'name' => json_encode([
                    'pl' => 'Przygotowywanie materiałów na potrzeby wewnętrznych i zewnętrznych prezentacji, raportów i spotkań.',
                    'en' => 'Preparing materials for internal and external presentations, reports, and meetings.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8803,
                'name' => json_encode([
                    'pl' => 'Regularna kontrola jakości danych oraz dbanie o ich zgodność z danymi w systemach finansowych i statystycznych.',
                    'en' => 'Regularly checking data quality and ensuring consistency with data in financial and statistical systems.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8804,
                'name' => json_encode([
                    'pl' => 'Usuwanie błędów, duplikatów i nieprawidłowości, które mogą wpływać na wyniki analiz lub raportów.',
                    'en' => 'Removing errors, duplicates, and inconsistencies that may affect analysis or report results.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8805,
                'name' => json_encode([
                    'pl' => 'Informowanie zespołów odpowiedzialnych za zarządzanie danymi o konieczności korekt.',
                    'en' => 'Informing teams responsible for data management of necessary corrections.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8806,
                'name' => json_encode([
                    'pl' => 'Zapewnienie bezpieczeństwa danych wrażliwych oraz przestrzeganie przepisów, takich jak RODO.',
                    'en' => 'Ensuring the security of sensitive data and complying with regulations such as GDPR.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8807,
                'name' => json_encode([
                    'pl' => 'Przechowywanie danych zgodnie z polityką bezpieczeństwa organizacji i zabezpieczanie ich przed dostępem osób nieupoważnionych.',
                    'en' => 'Storing data according to the organization’s security policy and securing it against unauthorized access.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8808,
                'name' => json_encode([
                    'pl' => 'Informowanie przełożonych o naruszeniach lub podejrzeniach naruszenia zasad ochrony danych.',
                    'en' => 'Informing supervisors of violations or suspicions of violations of data protection rules.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8809,
                'name' => json_encode([
                    'pl' => 'Wspieranie działów operacyjnych, finansowych, marketingowych i ubezpieczeniowych w zakresie interpretacji wyników analiz.',
                    'en' => 'Supporting operational, financial, marketing, and insurance departments in interpreting analysis results.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8810,
                'name' => json_encode([
                    'pl' => 'Udzielanie wyjaśnień dotyczących wniosków z analiz oraz udostępnianie danych do dalszej obróbki.',
                    'en' => 'Providing explanations of the conclusions from analyses and making data available for further processing.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8811,
                'name' => json_encode([
                    'pl' => 'Konsultowanie zleceń i wymagań z menedżerami w celu dostosowania analiz do potrzeb organizacji.',
                    'en' => 'Consulting on requests and requirements with managers to tailor analyses to organizational needs.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8812,
                'name' => json_encode([
                    'pl' => 'Tworzenie skryptów i makr automatyzujących procesy zbierania, przetwarzania oraz analizy danych.',
                    'en' => 'Creating scripts and macros that automate data collection, processing, and analysis processes.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8813,
                'name' => json_encode([
                    'pl' => 'Współpraca z działem IT w zakresie wdrażania narzędzi automatyzujących, aby usprawnić raportowanie i analizę danych.',
                    'en' => 'Collaborating with the IT department to implement automation tools to streamline reporting and data analysis.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8814,
                'name' => json_encode([
                    'pl' => 'Testowanie nowych rozwiązań i ich dostosowanie do potrzeb organizacyjnych.',
                    'en' => 'Testing new solutions and adjusting them to organizational needs.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8815,
                'name' => json_encode([
                    'pl' => 'Kontakt z klientami, udzielanie wyjaśnień dotyczących wyników analiz, raportów oraz oferty finansowej i ubezpieczeniowej.',
                    'en' => 'Contacting clients, providing explanations regarding analysis results, reports, and financial and insurance offers.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8816,
                'name' => json_encode([
                    'pl' => 'Pomoc klientom w rozwiązywaniu problemów oraz odpowiadanie na pytania dotyczące produktów ubezpieczeniowych i finansowych.',
                    'en' => 'Assisting clients in problem-solving and answering questions regarding insurance and financial products.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8817,
                'name' => json_encode([
                    'pl' => 'Informowanie klientów o wynikach analiz oraz proponowanie działań mających na celu poprawę wyników finansowych.',
                    'en' => 'Informing clients about analysis results and suggesting actions to improve financial performance.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8818,
                'name' => json_encode([
                    'pl' => 'Opracowywanie procedur i instrukcji dotyczących przetwarzania danych oraz tworzenia raportów.',
                    'en' => 'Developing procedures and instructions regarding data processing and report creation.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8819,
                'name' => json_encode([
                    'pl' => 'Tworzenie dokumentacji operacyjnej dla nowych rozwiązań analitycznych i automatyzujących.',
                    'en' => 'Creating operational documentation for new analytical and automation solutions.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8820,
                'name' => json_encode([
                    'pl' => 'Wdrażanie pracowników w procedury obowiązujące w zakresie obsługi dokumentacji finansowej i statystycznej.',
                    'en' => 'Training employees in procedures related to handling financial and statistical documentation.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8821,
                'name' => json_encode([
                    'pl' => 'Badanie trendów na rynku finansowym i ubezpieczeniowym oraz ich wpływu na organizację.',
                    'en' => 'Researching trends in the financial and insurance markets and their impact on the organization.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8822,
                'name' => json_encode([
                    'pl' => 'Przygotowywanie raportów i rekomendacji dotyczących zmian rynkowych oraz ich wpływu na działalność organizacji.',
                    'en' => 'Preparing reports and recommendations regarding market changes and their impact on organizational activities.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8823,
                'name' => json_encode([
                    'pl' => 'Informowanie menedżerów o wynikach badań i wnioskach, które mogą pomóc w podejmowaniu decyzji strategicznych.',
                    'en' => 'Informing managers about research results and conclusions that can assist in strategic decision-making.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8824,
                'name' => json_encode([
                    'pl' => 'Udział w szkoleniach związanych ze statystyką, finansami, ubezpieczeniami oraz ochroną danych.',
                    'en' => 'Participating in training related to statistics, finance, insurance, and data protection.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8825,
                'name' => json_encode([
                    'pl' => 'Aktualizowanie wiedzy na temat nowych metod analitycznych, technologii oraz trendów w branży finansowej i ubezpieczeniowej.',
                    'en' => 'Updating knowledge on new analytical methods, technologies, and trends in the financial and insurance industry.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8826,
                'name' => json_encode([
                    'pl' => 'Doskonalenie umiejętności technicznych i analitycznych w celu podniesienia jakości pracy.',
                    'en' => 'Improving technical and analytical skills to enhance work quality.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8827,
                'name' => json_encode([
                    'pl' => 'Przestrzeganie wewnętrznych polityk i procedur zgodności z przepisami prawnymi, np. dotyczącymi finansów i ubezpieczeń.',
                    'en' => 'Adhering to internal policies and compliance procedures with legal regulations, e.g., regarding finance and insurance.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8828,
                'name' => json_encode([
                    'pl' => 'Monitorowanie działań organizacji pod kątem zgodności z regulacjami KNF, GIODO i innymi wymogami branżowymi.',
                    'en' => 'Monitoring the organization’s activities for compliance with KNF, GIODO regulations, and other industry requirements.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8829,
                'name' => json_encode([
                    'pl' => 'Raportowanie o naruszeniach i podejmowanie działań naprawczych w razie potrzeby.',
                    'en' => 'Reporting violations and taking corrective actions as necessary.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8830,
                'name' => json_encode([
                    'pl' => 'Praca z systemami do zarządzania danymi statystycznymi, finansowymi i ubezpieczeniowymi.',
                    'en' => 'Working with systems for managing statistical, financial, and insurance data.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8831,
                'name' => json_encode([
                    'pl' => 'Utrzymywanie baz danych, systemów ewidencji oraz narzędzi analitycznych, takich jak Excel, SPSS, R, Python czy systemy ERP.',
                    'en' => 'Maintaining databases, registration systems, and analytical tools such as Excel, SPSS, R, Python, or ERP systems.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8832,
                'name' => json_encode([
                    'pl' => 'Monitorowanie sprawności i zgodności działania systemów analitycznych oraz zgłaszanie ewentualnych problemów.',
                    'en' => 'Monitoring the efficiency and compliance of analytical systems and reporting any problems.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8833,
                'name' => json_encode([
                    'pl' => 'Przygotowywanie broszur, ulotek i materiałów informacyjnych dotyczących produktów ubezpieczeniowych i finansowych.',
                    'en' => 'Preparing brochures, leaflets, and informational materials regarding insurance and financial products.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8834,
                'name' => json_encode([
                    'pl' => 'Prowadzenie szkoleń i webinariów dla klientów na temat zarządzania finansami i ubezpieczeniami.',
                    'en' => 'Conducting training and webinars for clients on financial and insurance management.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8835,
                'name' => json_encode([
                    'pl' => 'Pomoc w edukowaniu klientów w zakresie korzyści oraz ryzyka związanego z różnymi produktami.',
                    'en' => 'Assisting in educating clients on the benefits and risks associated with various products.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
        ];
        $KODOWACZ_KODER = [
            [
                'id' => 8836,
                'name' => json_encode([
                    'pl' => 'Przekształcanie danych surowych do ustalonego formatu kodowego, np. kodów ICD-10 w przypadku dokumentacji medycznej.',
                    'en' => 'Transforming raw data into established coding formats, e.g., ICD-10 codes for medical documentation.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8837,
                'name' => json_encode([
                    'pl' => 'Przydzielanie odpowiednich kodów do danych w oparciu o obowiązujące wytyczne lub standardy.',
                    'en' => 'Assigning appropriate codes to data based on applicable guidelines or standards.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8838,
                'name' => json_encode([
                    'pl' => 'Upewnianie się, że kodowanie jest spójne i zgodne z polityką organizacji oraz standardami branżowymi.',
                    'en' => 'Ensuring that coding is consistent and complies with organizational policies and industry standards.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8839,
                'name' => json_encode([
                    'pl' => 'Sprawdzanie dokładności wprowadzonych kodów oraz identyfikowanie błędów w kodowaniu.',
                    'en' => 'Checking the accuracy of entered codes and identifying coding errors.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8840,
                'name' => json_encode([
                    'pl' => 'Korekta błędnych kodów, aby zapewnić zgodność z wytycznymi.',
                    'en' => 'Correcting erroneous codes to ensure compliance with guidelines.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8841,
                'name' => json_encode([
                    'pl' => 'Dbanie o zachowanie spójności kodowania w całej dokumentacji.',
                    'en' => 'Maintaining consistency in coding throughout the documentation.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8842,
                'name' => json_encode([
                    'pl' => 'Tworzenie raportów na podstawie zakodowanych danych, które są niezbędne do dalszej analizy lub raportowania.',
                    'en' => 'Creating reports based on coded data, necessary for further analysis or reporting.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8843,
                'name' => json_encode([
                    'pl' => 'Generowanie zestawień kodów na potrzeby działów statystycznych, analitycznych lub administracyjnych.',
                    'en' => 'Generating code summaries for statistical, analytical, or administrative departments.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8844,
                'name' => json_encode([
                    'pl' => 'Współpraca z zespołem analitycznym, dostarczając dane w formie zgodnej z ich potrzebami.',
                    'en' => 'Collaborating with the analytical team by providing data in a format that meets their needs.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8845,
                'name' => json_encode([
                    'pl' => 'Utrzymywanie i aktualizacja słowników kodów używanych w danej organizacji, np. kodów procedur medycznych, statystycznych czy finansowych.',
                    'en' => 'Maintaining and updating code dictionaries used in the organization, e.g., codes for medical, statistical, or financial procedures.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8846,
                'name' => json_encode([
                    'pl' => 'Dodawanie nowych kodów do słowników oraz ich usuwanie lub modyfikacja, gdy jest to wymagane.',
                    'en' => 'Adding new codes to dictionaries and removing or modifying them as required.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8847,
                'name' => json_encode([
                    'pl' => 'Dostosowywanie słowników kodowych do zmieniających się wymogów lub standardów branżowych.',
                    'en' => 'Adjusting coding dictionaries to changing requirements or industry standards.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8848,
                'name' => json_encode([
                    'pl' => 'Odczytywanie surowych danych i określanie, jakie kody należy przypisać.',
                    'en' => 'Reading raw data and determining which codes to assign.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8849,
                'name' => json_encode([
                    'pl' => 'Interpretacja danych zgodnie z wytycznymi kodowania, np. w przypadku dokumentacji medycznej lub ankiet.',
                    'en' => 'Interpreting data according to coding guidelines, e.g., in the case of medical documentation or surveys.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8850,
                'name' => json_encode([
                    'pl' => 'Współpraca z innymi specjalistami w celu zrozumienia kontekstu danych i ich właściwego zakodowania.',
                    'en' => 'Collaborating with other specialists to understand the context of the data and code it correctly.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8851,
                'name' => json_encode([
                    'pl' => 'Korzystanie z oprogramowania przeznaczonego do kodowania danych oraz wprowadzania kodów do systemów.',
                    'en' => 'Using software designed for data coding and entering codes into systems.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8852,
                'name' => json_encode([
                    'pl' => 'Monitorowanie poprawności działania systemów i zgłaszanie problemów technicznych działowi IT.',
                    'en' => 'Monitoring the proper functioning of systems and reporting technical issues to the IT department.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8853,
                'name' => json_encode([
                    'pl' => 'Wdrażanie aktualizacji i nowych wersji narzędzi do kodowania danych.',
                    'en' => 'Implementing updates and new versions of data coding tools.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8854,
                'name' => json_encode([
                    'pl' => 'Przestrzeganie przepisów dotyczących ochrony danych osobowych (np. RODO) i zasad poufności.',
                    'en' => 'Complying with regulations regarding personal data protection (e.g., GDPR) and confidentiality rules.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8855,
                'name' => json_encode([
                    'pl' => 'Przetwarzanie i przechowywanie danych wrażliwych w sposób zgodny z polityką bezpieczeństwa organizacji.',
                    'en' => 'Processing and storing sensitive data in accordance with the organization’s security policy.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8856,
                'name' => json_encode([
                    'pl' => 'Zabezpieczanie danych przed dostępem osób nieupoważnionych oraz dbanie o ich poufność podczas pracy.',
                    'en' => 'Securing data from unauthorized access and ensuring their confidentiality during work.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8857,
                'name' => json_encode([
                    'pl' => 'Wsparcie zespołów analitycznych poprzez dostarczanie im dokładnych danych kodowanych.',
                    'en' => 'Supporting analytical teams by providing them with accurate coded data.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8858,
                'name' => json_encode([
                    'pl' => 'Współpraca z lekarzami i specjalistami w celu doprecyzowania kodów przy dokumentacji medycznej.',
                    'en' => 'Collaborating with doctors and specialists to clarify codes for medical documentation.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8859,
                'name' => json_encode([
                    'pl' => 'Udzielanie informacji na temat wybranych kodów oraz wyjaśnianie zasad kodowania innym pracownikom.',
                    'en' => 'Providing information on selected codes and explaining coding rules to other staff members.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8860,
                'name' => json_encode([
                    'pl' => 'Regularna kontrola jakości kodowania, w tym zgodności z wytycznymi oraz poprawności kodów.',
                    'en' => 'Regular quality control of coding, including compliance with guidelines and accuracy of codes.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8861,
                'name' => json_encode([
                    'pl' => 'Identyfikacja obszarów do poprawy oraz wprowadzanie działań korygujących.',
                    'en' => 'Identifying areas for improvement and implementing corrective actions.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8862,
                'name' => json_encode([
                    'pl' => 'Sporządzanie raportów z wyników audytów i przekazywanie ich kierownictwu.',
                    'en' => 'Preparing audit result reports and submitting them to management.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8863,
                'name' => json_encode([
                    'pl' => 'Opracowywanie wytycznych i procedur kodowania na potrzeby organizacji.',
                    'en' => 'Developing coding guidelines and procedures for the organization.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8864,
                'name' => json_encode([
                    'pl' => 'Tworzenie instrukcji dla nowych pracowników oraz materiałów edukacyjnych dotyczących poprawnego kodowania.',
                    'en' => 'Creating instructions for new employees and educational materials regarding proper coding.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8865,
                'name' => json_encode([
                    'pl' => 'Aktualizacja dokumentacji kodowej, aby była zgodna z bieżącymi standardami i wymogami branżowymi.',
                    'en' => 'Updating coding documentation to ensure it aligns with current standards and industry requirements.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8866,
                'name' => json_encode([
                    'pl' => 'Regularne uczestnictwo w szkoleniach dotyczących kodowania, standardów oraz narzędzi do kodowania danych.',
                    'en' => 'Regular participation in training related to coding, standards, and tools for data coding.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8867,
                'name' => json_encode([
                    'pl' => 'Aktualizowanie wiedzy na temat nowych zasad i standardów kodowania w swojej dziedzinie.',
                    'en' => 'Updating knowledge on new coding rules and standards in your field.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8868,
                'name' => json_encode([
                    'pl' => 'Doskonalenie umiejętności technicznych i analitycznych w celu utrzymania wysokiej jakości kodowania.',
                    'en' => 'Improving technical and analytical skills to maintain high-quality coding.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8869,
                'name' => json_encode([
                    'pl' => 'Proponowanie i wdrażanie usprawnień w procesie kodowania, aby poprawić jego efektywność.',
                    'en' => 'Proposing and implementing improvements in the coding process to enhance its efficiency.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8870,
                'name' => json_encode([
                    'pl' => 'Automatyzacja powtarzalnych zadań kodowych, np. przez tworzenie makr lub współpracę z działem IT.',
                    'en' => 'Automating repetitive coding tasks, e.g., by creating macros or collaborating with the IT department.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8871,
                'name' => json_encode([
                    'pl' => 'Testowanie nowych rozwiązań w zakresie kodowania, aby zwiększyć wydajność i jakość danych.',
                    'en' => 'Testing new solutions in coding to enhance the efficiency and quality of data.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8872,
                'name' => json_encode([
                    'pl' => 'Kodowanie danych w taki sposób, aby były gotowe do analizy statystycznej lub raportowania.',
                    'en' => 'Coding data in a way that it is ready for statistical analysis or reporting.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8873,
                'name' => json_encode([
                    'pl' => 'Zapewnienie, że dane są spójne i kompatybilne z narzędziami analitycznymi używanymi w organizacji.',
                    'en' => 'Ensuring that data is consistent and compatible with analytical tools used in the organization.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8874,
                'name' => json_encode([
                    'pl' => 'Współpraca z zespołem statystycznym przy przygotowywaniu danych do raportów lub badań.',
                    'en' => 'Collaborating with the statistical team in preparing data for reports or research.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8875,
                'name' => json_encode([
                    'pl' => 'Analizowanie i kodowanie danych, które mogą być trudniejsze do przetworzenia, np. danych tekstowych.',
                    'en' => 'Analyzing and coding data that may be more challenging to process, such as textual data.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8876,
                'name' => json_encode([
                    'pl' => 'Przekształcanie nieustrukturyzowanych informacji w spójny system kodowy.',
                    'en' => 'Transforming unstructured information into a coherent coding system.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8877,
                'name' => json_encode([
                    'pl' => 'Współpraca z innymi działami przy pracy nad danymi wymagającymi specjalistycznego kodowania.',
                    'en' => 'Collaborating with other departments on data requiring specialized coding.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8878,
                'name' => json_encode([
                    'pl' => 'Tworzenie materiałów edukacyjnych z zakresu kodowania i ich udostępnianie pracownikom.',
                    'en' => 'Creating educational materials on coding and sharing them with employees.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8879,
                'name' => json_encode([
                    'pl' => 'Przeprowadzanie szkoleń i wdrożeń dla nowych pracowników oraz pracowników z innych działów.',
                    'en' => 'Conducting training and onboarding for new employees and staff from other departments.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8880,
                'name' => json_encode([
                    'pl' => 'Informowanie innych zespołów o zmianach w zasadach kodowania i ich znaczeniu dla pracy organizacji.',
                    'en' => 'Informing other teams about changes in coding rules and their implications for organizational work.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8881,
                'name' => json_encode([
                    'pl' => 'Aktualizowanie wiedzy o zmieniających się standardach i zasadach kodowania, np. w przypadku medycznych kodów ICD.',
                    'en' => 'Updating knowledge on changing standards and coding rules, e.g., for medical ICD codes.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8882,
                'name' => json_encode([
                    'pl' => 'Dostosowywanie istniejących procesów kodowania do nowych wymogów branżowych lub regulacyjnych.',
                    'en' => 'Adjusting existing coding processes to new industry or regulatory requirements.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8883,
                'name' => json_encode([
                    'pl' => 'Wdrażanie aktualizacji w procedurach kodowania zgodnie z wymogami branży.',
                    'en' => 'Implementing updates to coding procedures according to industry requirements.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
        ];
        $ASYSTENT_DO_SPRAW_WYDAWNICZYCH = [
            [
                'id' => 8884,
                'name' => json_encode([
                    'pl' => 'Koordynacja przepływu materiałów między autorami, redakcją i działem produkcji.',
                    'en' => 'Coordinating the flow of materials between authors, editorial, and production department.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8885,
                'name' => json_encode([
                    'pl' => 'Weryfikacja przygotowanych materiałów pod kątem zgodności z wytycznymi wydawniczymi.',
                    'en' => 'Verifying prepared materials for compliance with publishing guidelines.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8886,
                'name' => json_encode([
                    'pl' => 'Przygotowywanie plików do druku oraz sprawdzanie ich poprawności przed ostatecznym przesłaniem do drukarni.',
                    'en' => 'Preparing files for print and checking their accuracy before final submission to the printer.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8887,
                'name' => json_encode([
                    'pl' => 'Wstępna redakcja tekstów, w tym poprawianie błędów gramatycznych, stylistycznych i interpunkcyjnych.',
                    'en' => 'Initial editing of texts, including correcting grammatical, stylistic, and punctuation errors.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8888,
                'name' => json_encode([
                    'pl' => 'Korekta materiałów zgodnie z wytycznymi redakcyjnymi i standardami językowymi wydawnictwa.',
                    'en' => "Proofreading materials according to editorial guidelines and the publishing house's language standards."
        ]),
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
    ],
    [
        'id' => 8889,
        'name' => json_encode([
            'pl' => 'Współpraca z redaktorami oraz korektorami w celu zapewnienia spójności i wysokiej jakości publikacji.',
            'en' => 'Collaborating with editors and proofreaders to ensure the consistency and high quality of publications.'
        ]),
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
    ],
    [
        'id' => 8890,
        'name' => json_encode([
            'pl' => 'Monitorowanie harmonogramu pracy nad publikacją, w tym terminów przesyłania materiałów i etapów produkcji.',
            'en' => 'Monitoring the publication work schedule, including deadlines for material submission and production stages.'
        ]),
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
    ],
    [
        'id' => 8891,
        'name' => json_encode([
            'pl' => 'Przypominanie autorom, redaktorom i korektorom o terminach oraz koordynacja działań w celu dotrzymania terminów wydawniczych.',
            'en' => 'Reminding authors, editors, and proofreaders of deadlines and coordinating actions to meet publishing deadlines.'
        ]),
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
    ],
    [
        'id' => 8892,
        'name' => json_encode([
            'pl' => 'Informowanie zespołu o postępach prac i ewentualnych opóźnieniach w harmonogramie.',
            'en' => 'Informing the team about progress and any delays in the schedule.'
        ]),
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
    ],
    [
        'id' => 8893,
        'name' => json_encode([
            'pl' => 'Utrzymywanie kontaktu z autorami, odpowiadanie na pytania oraz udzielanie informacji dotyczących procesu wydawniczego.',
            'en' => 'Maintaining contact with authors, answering questions, and providing information about the publishing process.'
        ]),
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
    ],
    [
        'id' => 8894,
        'name' => json_encode([
            'pl' => 'Informowanie autorów o postępach pracy nad ich publikacją oraz przekazywanie informacji o zmianach.',
            'en' => 'Informing authors about the progress of their publication and conveying information about changes.'
        ]),
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
    ],
    [
        'id' => 8895,
        'name' => json_encode([
            'pl' => 'Przekazywanie uwag redakcyjnych autorom i pomoc w wprowadzaniu korekt oraz poprawek.',
            'en' => 'Providing editorial feedback to authors and assisting in implementing corrections and amendments.'
        ]),
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
    ],
    [
        'id' => 8896,
        'name' => json_encode([
            'pl' => 'Przygotowywanie umów wydawniczych i praw autorskich z autorami i współpracownikami zewnętrznymi.',
            'en' => 'Preparing publishing contracts and copyright agreements with authors and external collaborators.'
        ]),
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
    ],
    [
        'id' => 8897,
        'name' => json_encode([
            'pl' => 'Archiwizacja dokumentacji, w tym umów, licencji, pozwoleń na korzystanie z materiałów, zgodnie z polityką wydawnictwa.',
            'en' => 'Archiving documentation, including contracts, licenses, permissions for the use of materials, according to the publishing policy.'
        ]),
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
    ],
    [
        'id' => 8898,
        'name' => json_encode([
            'pl' => 'Dbanie o zgodność dokumentacji z przepisami prawa autorskiego oraz standardami wewnętrznymi.',
            'en' => 'Ensuring compliance of documentation with copyright regulations and internal standards.'
        ]),
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
    ],
    [
        'id' => 8899,
        'name' => json_encode([
            'pl' => 'Przygotowywanie materiałów promujących publikacje, takich jak opisy książek, notki prasowe, posty na media społecznościowe.',
            'en' => 'Preparing promotional materials for publications, such as book descriptions, press releases, social media posts.'
        ]),
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
    ],
    [
        'id' => 8900,
        'name' => json_encode([
            'pl' => 'Współpraca z działem marketingu przy tworzeniu materiałów reklamowych i kampanii promocyjnych.',
            'en' => 'Collaborating with the marketing department in creating promotional materials and campaigns.'
        ]),
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
    ],
    [
        'id' => 8901,
        'name' => json_encode([
            'pl' => 'Korekta i redakcja materiałów promocyjnych, aby były zgodne z stylem i wizerunkiem wydawnictwa.',
            'en' => 'Proofreading and editing promotional materials to align with the style and image of the publishing house.'
        ]),
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
    ],
    [
        'id' => 8902,
        'name' => json_encode([
            'pl' => 'Sprawdzanie, czy wszystkie użyte ilustracje, zdjęcia i cytaty są zgodne z prawami autorskimi i licencjami.',
            'en' => 'Checking that all illustrations, photos, and quotes used comply with copyright and licenses.'
        ]),
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
    ],
    [
        'id' => 8903,
        'name' => json_encode([
            'pl' => 'Uzyskiwanie pozwoleń na korzystanie z materiałów chronionych prawem autorskim oraz prowadzenie dokumentacji licencyjnej.',
            'en' => 'Obtaining permissions for the use of copyright-protected materials and maintaining licensing documentation.'
        ]),
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
    ],
    [
        'id' => 8904,
        'name' => json_encode([
            'pl' => 'Współpraca z autorami i grafikami w celu zapewnienia zgodności materiałów z przepisami prawa.',
            'en' => 'Collaborating with authors and graphic designers to ensure compliance of materials with legal regulations.'
        ]),
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
    ],
    [
        'id' => 8905,
        'name' => json_encode([
            'pl' => 'Przygotowywanie agend i materiałów na spotkania zespołu redakcyjnego oraz innych działów wydawniczych.',
            'en' => 'Preparing agendas and materials for editorial team meetings and other publishing department meetings.'
        ]),
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
    ],
    [
        'id' => 8906,
        'name' => json_encode([
            'pl' => 'Prowadzenie notatek ze spotkań i przekazywanie informacji zespołowi, aby każdy znał aktualne ustalenia.',
            'en' => 'Taking notes during meetings and conveying information to the team so that everyone is aware of current decisions.'
        ]),
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
    ],
    [
        'id' => 8907,
        'name' => json_encode([
            'pl' => 'Przypominanie o ustalonych zadaniach i ich realizacji po spotkaniach.',
            'en' => 'Reminding of established tasks and their implementation after meetings.'
        ]),
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
    ],
    [
        'id' => 8908,
        'name' => json_encode([
            'pl' => 'Korzystanie z oprogramowania do zarządzania projektami wydawniczymi oraz narzędzi do edycji tekstu i projektowania graficznego.',
            'en' => 'Using software to manage publishing projects and tools for text editing and graphic design.'
        ]),
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
    ],
    [
        'id' => 8909,
        'name' => json_encode([
            'pl' => 'Aktualizowanie informacji o stanie publikacji w systemach wydawniczych i zarządzanie bazą danych.',
            'en' => 'Updating information about the status of publications in publishing systems and managing the database.'
        ]),
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
    ],
    [
        'id' => 8910,
        'name' => json_encode([
            'pl' => 'Współpraca z działem IT w razie problemów technicznych lub potrzeby wdrożenia nowych rozwiązań.',
            'en' => 'Collaborating with the IT department in case of technical issues or the need to implement new solutions.'
        ]),
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
    ],
    [
        'id' => 8911,
        'name' => json_encode([
            'pl' => 'Formatowanie i dostosowywanie tekstów do standardów e-booków lub innych cyfrowych formatów publikacji.',
            'en' => 'Formatting and adjusting texts to the standards of e-books or other digital publication formats.'
        ]),
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
    ],
    [
        'id' => 8912,
        'name' => json_encode([
            'pl' => 'Konwersja plików do odpowiednich formatów cyfrowych, takich jak EPUB czy PDF.',
            'en' => 'Converting files to appropriate digital formats, such as EPUB or PDF.'
        ]),
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
    ],
    [
        'id' => 8913,
        'name' => json_encode([
            'pl' => 'Weryfikacja zgodności plików z wymogami platform dystrybucyjnych, np. Kindle, Google Books.',
            'en' => 'Verifying that files meet the requirements of distribution platforms, such as Kindle, Google Books.'
        ]),
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
    ],
    [
        'id' => 8914,
        'name' => json_encode([
            'pl' => 'Kontakt z drukarnią w celu uzgadniania szczegółów dotyczących drukowania publikacji, np. rodzaju papieru, oprawy.',
            'en' => 'Contacting the printing house to negotiate details related to the printing of publications, such as paper type, binding.'
        ]),
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
    ],
    [
        'id' => 8915,
        'name' => json_encode([
            'pl' => 'Monitorowanie procesu druku i dbanie o terminową realizację zamówień.',
            'en' => 'Monitoring the printing process and ensuring timely order fulfillment.'
        ]),
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
    ],
    [
        'id' => 8916,
        'name' => json_encode([
            'pl' => 'Weryfikacja jakości wydruku oraz rozwiązywanie problemów w przypadku ewentualnych usterek.',
            'en' => 'Verifying the quality of printing and troubleshooting any issues that may arise.'
        ]),
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
    ],
    [
        'id' => 8917,
        'name' => json_encode([
            'pl' => 'Przeprowadzanie finalnej kontroli jakości przed przekazaniem publikacji do druku lub dystrybucji cyfrowej.',
            'en' => 'Conducting final quality checks before handing over publications for printing or digital distribution.'
        ]),
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
    ],
    [
        'id' => 8918,
        'name' => json_encode([
            'pl' => 'Sprawdzanie spójności wszystkich elementów publikacji, takich jak paginacja, przypisy, indeksy.',
            'en' => 'Checking the consistency of all elements of the publication, such as pagination, footnotes, indexes.'
        ]),
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
    ],
    [
        'id' => 8919,
        'name' => json_encode([
            'pl' => 'Upewnienie się, że publikacja spełnia standardy jakości wydawnictwa.',
            'en' => 'Ensuring that the publication meets the quality standards of the publishing house.'
        ]),
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
    ],
    [
        'id' => 8920,
        'name' => json_encode([
            'pl' => 'Koordynacja dystrybucji gotowych publikacji do księgarń, partnerów i klientów.',
            'en' => 'Coordinating the distribution of finished publications to bookstores, partners, and customers.'
        ]),
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
    ],
    [
        'id' => 8921,
        'name' => json_encode([
            'pl' => 'Przekazywanie zamówień do działu sprzedaży lub dystrybucji oraz monitorowanie dostaw.',
            'en' => 'Forwarding orders to the sales or distribution department and monitoring deliveries.'
        ]),
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
    ],
    [
        'id' => 8922,
        'name' => json_encode([
            'pl' => 'Obsługa zamówień bezpośrednich od klientów, jeśli wydawnictwo prowadzi sprzedaż bezpośrednią.',
            'en' => 'Handling direct orders from customers if the publishing house engages in direct sales.'
        ]),
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
    ],
    [
        'id' => 8923,
        'name' => json_encode([
            'pl' => 'Współorganizowanie wydarzeń takich jak premiery książek, spotkania autorskie, konferencje.',
            'en' => 'Co-organizing events such as book launches, author meetings, and conferences.'
        ]),
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
    ],
    [
        'id' => 8924,
        'name' => json_encode([
            'pl' => 'Przygotowywanie materiałów promocyjnych na wydarzenia i współpraca z działem marketingu.',
            'en' => 'Preparing promotional materials for events and collaborating with the marketing department.'
        ]),
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
    ],
    [
        'id' => 8925,
        'name' => json_encode([
            'pl' => 'Obsługa gości i dbanie o przebieg wydarzeń zgodnie z planem.',
            'en' => 'Welcoming guests and ensuring the smooth running of events according to plan.'
        ]),
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
    ],
    [
        'id' => 8926,
        'name' => json_encode([
            'pl' => 'Tworzenie i prowadzenie bazy kontaktów z autorami, recenzentami, grafikami oraz innymi współpracownikami.',
            'en' => 'Creating and maintaining a database of contacts with authors, reviewers, graphic designers, and other collaborators.'
        ]),
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
    ],
    [
        'id' => 8927,
        'name' => json_encode([
            'pl' => 'Regularna aktualizacja bazy danych kontaktów oraz dbanie o ich zgodność z przepisami o ochronie danych osobowych.',
            'en' => 'Regularly updating the contacts database and ensuring compliance with personal data protection regulations.'
        ]),
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
    ],
    [
        'id' => 8928,
        'name' => json_encode([
            'pl' => 'Wykorzystanie bazy danych do kontaktów z partnerami i organizowania promocji.',
            'en' => 'Utilizing the database for contacts with partners and organizing promotions.'
        ]),
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
    ],
    [
        'id' => 8929,
        'name' => json_encode([
            'pl' => 'Dbanie o etyczne podejście do pracy wydawniczej, m.in. w zakresie przestrzegania praw autorskich.',
            'en' => 'Ensuring an ethical approach to publishing work, including adherence to copyright laws.'
        ]),
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
    ],
    [
        'id' => 8930,
        'name' => json_encode([
            'pl' => 'Weryfikacja, czy publikowane materiały nie naruszają etyki lub standardów obowiązujących w wydawnictwie.',
            'en' => 'Verifying that published materials do not violate ethics or standards applicable in the publishing house.'
        ]),
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
    ],
    [
        'id' => 8931,
        'name' => json_encode([
            'pl' => 'Przestrzeganie zasad dotyczących rzetelności, prawdziwości i transparentności publikowanych treści.',
            'en' => 'Adhering to principles of accuracy, truthfulness, and transparency in published content.'
        ]),
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
    ],
    [
        'id' => 8932,
        'name' => json_encode([
            'pl' => 'Udział w szkoleniach z zakresu edytorstwa, korekty tekstów, prawa autorskiego i nowych technologii wydawniczych.',
            'en' => 'Participating in training on editing, proofreading, copyright law, and new publishing technologies.'
        ]),
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
    ],
    [
        'id' => 8933,
        'name' => json_encode([
            'pl' => 'Aktualizowanie wiedzy o trendach w branży wydawniczej oraz narzędziach do zarządzania procesem wydawniczym.',
            'en' => 'Updating knowledge of trends in the publishing industry and tools for managing the publishing process.'
        ]),
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
    ],
    [
        'id' => 8934,
        'name' => json_encode([
            'pl' => 'Doskonalenie umiejętności redakcyjnych, językowych i organizacyjnych.',
            'en' => 'Improving editorial, language, and organizational skills.'
        ]),
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
    ]
];
        $POZOSTALI_PRACOWNICY_OBSŁUGI_BIURA_GDZIE_INDZIEJ_NIESKLASYFIKOWANI = [
            [
                'id' => 8935,
                'name' => json_encode([
                    'pl' => 'Witanie gości i interesantów, udzielanie podstawowych informacji oraz kierowanie ich do odpowiednich osób lub działów.',
                    'en' => 'Welcoming guests and visitors, providing basic information, and directing them to the appropriate people or departments.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8936,
                'name' => json_encode([
                    'pl' => 'Odbieranie telefonów, obsługa zapytań telefonicznych oraz przekazywanie wiadomości pracownikom.',
                    'en' => 'Answering phones, handling phone inquiries, and relaying messages to employees.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8937,
                'name' => json_encode([
                    'pl' => 'Obsługa korespondencji przychodzącej i wychodzącej, w tym e-maili, paczek i przesyłek kurierskich.',
                    'en' => 'Handling incoming and outgoing correspondence, including emails, packages, and courier shipments.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8938,
                'name' => json_encode([
                    'pl' => 'Prowadzenie rejestrów dokumentów oraz ich archiwizacja zgodnie z polityką firmy.',
                    'en' => 'Maintaining document records and archiving them according to company policy.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8939,
                'name' => json_encode([
                    'pl' => 'Organizowanie dokumentów w sposób umożliwiający łatwy dostęp dla pracowników.',
                    'en' => 'Organizing documents to allow easy access for employees.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8940,
                'name' => json_encode([
                    'pl' => 'Zapewnienie zgodności przechowywania dokumentów z zasadami ochrony danych osobowych.',
                    'en' => 'Ensuring that document storage complies with personal data protection regulations.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8941,
                'name' => json_encode([
                    'pl' => 'Pomoc pracownikom w organizacji ich codziennych obowiązków, w tym przy zarządzaniu dokumentami i sprzętem.',
                    'en' => 'Assisting employees in organizing their daily tasks, including managing documents and equipment.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8942,
                'name' => json_encode([
                    'pl' => 'Przekazywanie informacji dotyczących polityk biura i procedur administracyjnych.',
                    'en' => 'Conveying information regarding office policies and administrative procedures.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8943,
                'name' => json_encode([
                    'pl' => 'Pomoc w przygotowywaniu dokumentów, raportów i notatek służbowych na potrzeby innych działów.',
                    'en' => 'Assisting in preparing documents, reports, and official notes for other departments.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8944,
                'name' => json_encode([
                    'pl' => 'Obsługa sprzętu biurowego, takiego jak drukarki, kopiarki, skanery i faksy.',
                    'en' => 'Operating office equipment such as printers, copiers, scanners, and fax machines.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8945,
                'name' => json_encode([
                    'pl' => 'Rozwiązywanie drobnych problemów technicznych oraz zgłaszanie usterek do działu IT lub serwisu.',
                    'en' => 'Resolving minor technical issues and reporting malfunctions to the IT department or service.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8946,
                'name' => json_encode([
                    'pl' => 'Monitorowanie zapasów materiałów eksploatacyjnych (papier, tonery) oraz ich zamawianie w razie potrzeby.',
                    'en' => 'Monitoring the inventory of supplies (paper, toner) and ordering them when necessary.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8947,
                'name' => json_encode([
                    'pl' => 'Organizowanie kalendarza spotkań, zarządzanie rezerwacjami sal konferencyjnych oraz dbanie o ich dostępność.',
                    'en' => 'Organizing the meeting calendar, managing reservations for conference rooms, and ensuring their availability.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8948,
                'name' => json_encode([
                    'pl' => 'Przygotowywanie sal do spotkań, w tym ustawianie sprzętu, dokumentów oraz zapewnienie napojów.',
                    'en' => 'Preparing meeting rooms, including setting up equipment, documents, and providing refreshments.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8949,
                'name' => json_encode([
                    'pl' => 'Przypominanie pracownikom o nadchodzących spotkaniach oraz zapewnienie ich sprawnego przebiegu.',
                    'en' => 'Reminding employees of upcoming meetings and ensuring their smooth conduct.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8950,
                'name' => json_encode([
                    'pl' => 'Współpraca z dostawcami w celu zapewnienia terminowych dostaw i najlepszych cen.',
                    'en' => 'Cooperating with suppliers to ensure timely deliveries and the best prices.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8951,
                'name' => json_encode([
                    'pl' => 'Przechowywanie zapasów w porządku i dbanie o odpowiednią dostępność materiałów dla pracowników.',
                    'en' => 'Keeping stock organized and ensuring the appropriate availability of materials for employees.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8952,
                'name' => json_encode([
                    'pl' => 'Przygotowywanie dokumentów, zestawień, raportów i prezentacji na potrzeby biura.',
                    'en' => 'Preparing documents, summaries, reports, and presentations for the office.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8953,
                'name' => json_encode([
                    'pl' => 'Edytowanie i formatowanie dokumentów zgodnie z wewnętrznymi standardami organizacji.',
                    'en' => 'Editing and formatting documents according to the internal standards of the organization.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8954,
                'name' => json_encode([
                    'pl' => 'Sporządzanie prostych dokumentów finansowych, takich jak zestawienia kosztów lub faktury.',
                    'en' => 'Preparing simple financial documents such as cost summaries or invoices.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8955,
                'name' => json_encode([
                    'pl' => 'Dbanie o porządek w biurze, np. utrzymywanie czystości w kuchni, salach konferencyjnych i recepcji.',
                    'en' => 'Keeping the office tidy, e.g. maintaining cleanliness in the kitchen, conference rooms, and reception area.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8956,
                'name' => json_encode([
                    'pl' => 'Organizowanie przestrzeni wspólnej, aby była schludna i estetyczna.',
                    'en' => 'Organizing common areas to keep them neat and aesthetically pleasing.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8957,
                'name' => json_encode([
                    'pl' => 'Informowanie działu odpowiedzialnego za sprzątanie o konieczności dodatkowych prac porządkowych.',
                    'en' => 'Informing the cleaning department about the need for additional cleaning tasks.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8958,
                'name' => json_encode([
                    'pl' => 'Zgłaszanie problemów technicznych do działu IT oraz współpraca przy ich rozwiązywaniu.',
                    'en' => 'Reporting technical issues to the IT department and cooperating with them to resolve them.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8959,
                'name' => json_encode([
                    'pl' => 'Obsługa prostych zadań związanych z IT, takich jak resetowanie haseł, podłączanie sprzętu czy konfiguracja drukarek.',
                    'en' => 'Handling simple IT tasks such as resetting passwords, connecting equipment, or configuring printers.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8960,
                'name' => json_encode([
                    'pl' => 'Koordynacja wymiany lub naprawy sprzętu biurowego oraz wsparcie przy wdrożeniu nowych rozwiązań.',
                    'en' => 'Coordinating the replacement or repair of office equipment and supporting the implementation of new solutions.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8961,
                'name' => json_encode([
                    'pl' => 'Wspieranie działu HR lub innych zespołów przy organizacji szkoleń, konferencji i spotkań integracyjnych.',
                    'en' => 'Supporting the HR department or other teams in organizing training, conferences, and team-building events.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8962,
                'name' => json_encode([
                    'pl' => 'Przygotowywanie materiałów szkoleniowych i dbanie o logistykę wydarzeń, w tym zamówienie cateringu i zapewnienie sprzętu.',
                    'en' => 'Preparing training materials and managing event logistics, including catering and equipment.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8963,
                'name' => json_encode([
                    'pl' => 'Pomoc przy obsłudze wydarzeń, rejestracja uczestników oraz dbanie o ich komfort podczas spotkań.',
                    'en' => 'Assisting with event management, registering participants, and ensuring their comfort during meetings.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8964,
                'name' => json_encode([
                    'pl' => 'Pomoc w rozliczaniu delegacji i wydatków służbowych pracowników.',
                    'en' => 'Assisting with the settlement of employee business trips and expenses.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8965,
                'name' => json_encode([
                    'pl' => 'Sporządzanie i ewidencja prostych dokumentów finansowych, np. faktur i rachunków.',
                    'en' => 'Preparing and recording simple financial documents, such as invoices and receipts.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8966,
                'name' => json_encode([
                    'pl' => 'Współpraca z działem księgowości w zakresie obsługi finansowej biura.',
                    'en' => 'Cooperating with the accounting department for the office’s financial management.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8967,
                'name' => json_encode([
                    'pl' => 'Przestrzeganie przepisów dotyczących ochrony danych osobowych (RODO) w codziennej pracy z dokumentacją.',
                    'en' => 'Complying with personal data protection regulations (GDPR) in daily work with documentation.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8968,
                'name' => json_encode([
                    'pl' => 'Informowanie pracowników o zasadach ochrony danych oraz monitorowanie zgodności z przepisami.',
                    'en' => 'Informing employees about data protection rules and monitoring compliance with regulations.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8969,
                'name' => json_encode([
                    'pl' => 'Zgłaszanie incydentów lub nieprawidłowości związanych z ochroną danych do odpowiedniego działu.',
                    'en' => 'Reporting incidents or irregularities related to data protection to the appropriate department.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8970,
                'name' => json_encode([
                    'pl' => 'Wdrażanie procedur administracyjnych w biurze i dbanie o ich przestrzeganie przez pracowników.',
                    'en' => 'Implementing administrative procedures in the office and ensuring compliance by employees.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8971,
                'name' => json_encode([
                    'pl' => 'Opracowywanie wytycznych dotyczących obsługi biura, np. korzystania z sal konferencyjnych czy przyjmowania gości.',
                    'en' => 'Developing guidelines for office management, such as the use of conference rooms and welcoming guests.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8972,
                'name' => json_encode([
                    'pl' => 'Szkolenie nowych pracowników w zakresie obowiązujących procedur oraz zasad pracy w biurze.',
                    'en' => 'Training new employees on applicable procedures and office work principles.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8973,
                'name' => json_encode([
                    'pl' => 'Rezerwacja biletów lotniczych, kolejowych oraz hoteli na potrzeby podróży służbowych pracowników.',
                    'en' => 'Booking airline, train tickets, and hotels for employee business trips.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8974,
                'name' => json_encode([
                    'pl' => 'Przygotowywanie harmonogramu podróży oraz dostarczanie niezbędnych dokumentów, np. biletów i rezerwacji.',
                    'en' => 'Preparing travel schedules and providing necessary documents, such as tickets and reservations.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8975,
                'name' => json_encode([
                    'pl' => 'Koordynacja rozliczeń związanych z podróżami oraz ewidencjonowanie kosztów.',
                    'en' => 'Coordinating travel settlements and recording expenses.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8976,
                'name' => json_encode([
                    'pl' => 'Dbanie o bezpieczeństwo pracy w biurze oraz informowanie pracowników o obowiązujących zasadach.',
                    'en' => 'Ensuring workplace safety in the office and informing employees of applicable regulations.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8977,
                'name' => json_encode([
                    'pl' => 'Przeprowadzanie regularnych kontroli pod kątem zgodności z przepisami BHP i PPOŻ.',
                    'en' => 'Conducting regular inspections for compliance with health and safety regulations and fire protection.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8978,
                'name' => json_encode([
                    'pl' => 'Zgłaszanie potencjalnych zagrożeń lub nieprawidłowości związanych z bezpieczeństwem do odpowiednich służb.',
                    'en' => 'Reporting potential hazards or irregularities related to safety to the appropriate services.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8979,
                'name' => json_encode([
                    'pl' => 'Wsparcie innych pracowników w codziennych zadaniach, takich jak organizacja spotkań czy przygotowanie materiałów.',
                    'en' => 'Supporting other employees with daily tasks, such as organizing meetings or preparing materials.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8980,
                'name' => json_encode([
                    'pl' => 'Współpraca z kierownictwem biura w realizacji bieżących potrzeb administracyjnych.',
                    'en' => 'Collaborating with office management to address ongoing administrative needs.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8981,
                'name' => json_encode([
                    'pl' => 'Dbanie o ogólną sprawność organizacyjną biura i szybkie rozwiązywanie bieżących problemów.',
                    'en' => 'Ensuring the overall organizational efficiency of the office and quickly resolving ongoing issues.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8982,
                'name' => json_encode([
                    'pl' => 'Uczestnictwo w szkoleniach z zakresu obsługi biura, ochrony danych osobowych, komunikacji i organizacji pracy.',
                    'en' => 'Participating in training on office management, data protection, communication, and work organization.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8983,
                'name' => json_encode([
                    'pl' => 'Aktualizowanie wiedzy o procedurach administracyjnych, nowych technologiach oraz standardach biurowych.',
                    'en' => 'Updating knowledge of administrative procedures, new technologies, and office standards.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8984,
                'name' => json_encode([
                    'pl' => 'Doskonalenie umiejętności interpersonalnych i organizacyjnych, aby efektywnie wspierać funkcjonowanie biura.',
                    'en' => 'Improving interpersonal and organizational skills to effectively support the functioning of the office.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
        ];
        $OPERATOR_EDYTORÓW_TEKSTU = [
            [
                'id' => 8985,
                'name' => json_encode([
                    'pl' => 'Przygotowywanie nowych dokumentów tekstowych na podstawie dostarczonych informacji lub szkiców.',
                    'en' => 'Preparing new text documents based on provided information or drafts.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8986,
                'name' => json_encode([
                    'pl' => 'Edytowanie istniejących dokumentów, wprowadzanie poprawek oraz aktualizowanie treści zgodnie z wytycznymi.',
                    'en' => 'Editing existing documents, making corrections, and updating content according to guidelines.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8987,
                'name' => json_encode([
                    'pl' => 'Dopasowywanie treści do odpowiednich formatów publikacji, takich jak raporty, prezentacje, broszury.',
                    'en' => 'Adjusting content to appropriate publication formats, such as reports, presentations, brochures.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8988,
                'name' => json_encode([
                    'pl' => 'Stosowanie odpowiednich stylów, nagłówków, czcionek, kolorów i układów zgodnie z wymaganiami firmy lub wydawnictwa.',
                    'en' => 'Applying appropriate styles, headings, fonts, colors, and layouts according to company or publishing requirements.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8989,
                'name' => json_encode([
                    'pl' => 'Wyrównywanie tekstu, paginacja, wstawianie wcięć, odstępów oraz tworzenie spisów treści.',
                    'en' => 'Justifying text, pagination, inserting indents, spacing, and creating tables of contents.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8990,
                'name' => json_encode([
                    'pl' => 'Zapewnienie estetycznego i czytelnego układu tekstu, który ułatwia odbiór informacji przez czytelników.',
                    'en' => 'Ensuring an aesthetic and readable layout of the text that facilitates information reception by readers.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8991,
                'name' => json_encode([
                    'pl' => 'Sprawdzanie tekstu pod kątem błędów gramatycznych, ortograficznych, interpunkcyjnych i stylistycznych.',
                    'en' => 'Checking the text for grammatical, spelling, punctuation, and stylistic errors.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8992,
                'name' => json_encode([
                    'pl' => 'Korygowanie błędów oraz dbanie o zgodność tekstu z obowiązującymi normami językowymi.',
                    'en' => 'Correcting errors and ensuring that the text complies with current language standards.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8993,
                'name' => json_encode([
                    'pl' => 'Współpraca z korektorami i redaktorami w celu zapewnienia wysokiej jakości językowej dokumentu.',
                    'en' => 'Collaborating with proofreaders and editors to ensure high linguistic quality of the document.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8994,
                'name' => json_encode([
                    'pl' => 'Przyjmowanie uwag i poprawek od autorów, działu redakcji, menedżerów lub klientów.',
                    'en' => 'Receiving comments and corrections from authors, the editorial department, managers, or clients.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8995,
                'name' => json_encode([
                    'pl' => 'Wprowadzanie zmian w dokumentach zgodnie z otrzymanymi wytycznymi oraz sprawdzanie, czy wszystkie korekty zostały prawidłowo naniesione.',
                    'en' => 'Implementing changes in documents according to received guidelines and checking whether all corrections have been properly made.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8996,
                'name' => json_encode([
                    'pl' => 'Komunikowanie się z zespołem w celu uzyskania wyjaśnień dotyczących poprawek lub ewentualnych zmian w treści.',
                    'en' => 'Communicating with the team to clarify corrections or any changes in the content.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8997,
                'name' => json_encode([
                    'pl' => 'Projektowanie i tworzenie szablonów dla różnych typów dokumentów, takich jak umowy, raporty, formularze.',
                    'en' => 'Designing and creating templates for various types of documents, such as contracts, reports, forms.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8998,
                'name' => json_encode([
                    'pl' => 'Zastosowanie standardów organizacyjnych do tworzenia szablonów ułatwiających pracę innym użytkownikom.',
                    'en' => 'Applying organizational standards to create templates that facilitate work for other users.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8999,
                'name' => json_encode([
                    'pl' => 'Aktualizowanie i optymalizowanie istniejących szablonów zgodnie z wymaganiami organizacji.',
                    'en' => 'Updating and optimizing existing templates according to the organization’s requirements.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9000,
                'name' => json_encode([
                    'pl' => 'Umieszczanie w dokumentach tabel, wykresów, grafik, zdjęć oraz innych elementów wspierających treść.',
                    'en' => 'Inserting tables, charts, graphics, images, and other elements supporting the content in documents.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9001,
                'name' => json_encode([
                    'pl' => 'Formatowanie i dopasowanie elementów wizualnych do układu dokumentu, aby były czytelne i estetyczne.',
                    'en' => 'Formatting and adjusting visual elements to the document layout to ensure they are readable and aesthetic.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9002,
                'name' => json_encode([
                    'pl' => 'Dbają o spójność wizualną dokumentu i zgodność z wytycznymi organizacji lub wydawnictwa.',
                    'en' => 'Ensuring visual consistency of the document and compliance with the organization’s or publisher’s guidelines.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9003,
                'name' => json_encode([
                    'pl' => 'Wykorzystywanie zaawansowanych funkcji programów takich jak Microsoft Word, Google Docs, Adobe InDesign, aby tworzyć i edytować dokumenty.',
                    'en' => 'Utilizing advanced features of programs such as Microsoft Word, Google Docs, Adobe InDesign to create and edit documents.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9004,
                'name' => json_encode([
                    'pl' => 'Korzystanie z funkcji śledzenia zmian, komentarzy, narzędzi korekty i stylów w oprogramowaniu edytorskim.',
                    'en' => 'Using change tracking, comments, proofreading tools, and styles in editing software.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9005,
                'name' => json_encode([
                    'pl' => 'Aktualizowanie znajomości narzędzi i oprogramowania w celu zwiększenia efektywności pracy.',
                    'en' => 'Updating knowledge of tools and software to enhance work efficiency.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9006,
                'name' => json_encode([
                    'pl' => 'Formatowanie dokumentów pod kątem publikacji cyfrowej lub drukowanej, aby były zgodne ze standardami jakości.',
                    'en' => 'Formatting documents for digital or print publication to comply with quality standards.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9007,
                'name' => json_encode([
                    'pl' => 'Konwersja plików do formatów takich jak PDF, EPUB, DOCX, które są odpowiednie dla różnych kanałów dystrybucji.',
                    'en' => 'Converting files to formats such as PDF, EPUB, DOCX that are suitable for various distribution channels.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9008,
                'name' => json_encode([
                    'pl' => 'Współpraca z działem produkcji lub drukarnią, aby dokumenty spełniały wymagania techniczne.',
                    'en' => 'Collaborating with the production department or printing house to ensure documents meet technical requirements.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9009,
                'name' => json_encode([
                    'pl' => 'Przygotowywanie dokumentów do tłumaczenia, w tym dbanie o spójność układu i formatowania.',
                    'en' => 'Preparing documents for translation, ensuring layout and formatting consistency.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9010,
                'name' => json_encode([
                    'pl' => 'Wprowadzanie tłumaczeń do istniejących dokumentów i ich formatowanie zgodnie z oryginałem.',
                    'en' => 'Inserting translations into existing documents and formatting them according to the original.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9011,
                'name' => json_encode([
                    'pl' => 'Weryfikacja spójności i układu tekstu po tłumaczeniu, aby zachować zgodność z wersją źródłową.',
                    'en' => 'Verifying the consistency and layout of the text after translation to maintain compatibility with the source version.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9012,
                'name' => json_encode([
                    'pl' => 'Przeprowadzanie ostatecznej kontroli dokumentu przed przesłaniem do publikacji, drukarni lub klienta.',
                    'en' => 'Conducting final checks of the document before sending it for publication, printing, or to the client.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9013,
                'name' => json_encode([
                    'pl' => 'Sprawdzanie, czy dokument jest zgodny z wytycznymi oraz czy wszystkie elementy są na miejscu.',
                    'en' => 'Checking if the document complies with guidelines and whether all elements are in place.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9014,
                'name' => json_encode([
                    'pl' => 'Usuwanie błędów, niezgodności i drobnych uchybień, aby zapewnić wysoką jakość publikacji.',
                    'en' => 'Removing errors, discrepancies, and minor omissions to ensure high publication quality.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9015,
                'name' => json_encode([
                    'pl' => 'Prowadzenie ewidencji wersji dokumentów, aby mieć dostęp do poprzednich wersji i zmian.',
                    'en' => 'Maintaining a version record of documents to have access to previous versions and changes.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9016,
                'name' => json_encode([
                    'pl' => 'Przechowywanie kopii zapasowych i odpowiednie oznaczanie wersji dokumentów, aby uniknąć błędów.',
                    'en' => 'Storing backups and properly labeling document versions to avoid errors.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9017,
                'name' => json_encode([
                    'pl' => 'Używanie narzędzi do kontroli wersji, które ułatwiają śledzenie zmian i współpracę z innymi osobami.',
                    'en' => 'Using version control tools that facilitate tracking changes and collaborating with others.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9018,
                'name' => json_encode([
                    'pl' => 'Przestrzeganie zasad ochrony danych osobowych i poufnych informacji zawartych w dokumentach.',
                    'en' => 'Adhering to the rules of personal data protection and confidentiality of information contained in documents.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9019,
                'name' => json_encode([
                    'pl' => 'Stosowanie haseł i zabezpieczeń do dokumentów przeznaczonych do wewnętrznego użytku.',
                    'en' => 'Applying passwords and security measures to documents intended for internal use.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9020,
                'name' => json_encode([
                    'pl' => 'Dbanie o to, by dokumenty nie były udostępniane osobom nieupoważnionym.',
                    'en' => 'Ensuring that documents are not shared with unauthorized individuals.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9021,
                'name' => json_encode([
                    'pl' => 'Opracowywanie dokumentów z wytycznymi i procedurami dotyczącymi tworzenia i edycji dokumentów.',
                    'en' => 'Developing documents with guidelines and procedures for creating and editing documents.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9022,
                'name' => json_encode([
                    'pl' => 'Aktualizowanie wytycznych w oparciu o nowe zasady i standardy organizacyjne.',
                    'en' => 'Updating guidelines based on new rules and organizational standards.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9023,
                'name' => json_encode([
                    'pl' => 'Wdrażanie nowych pracowników w procesy edycyjne oraz obsługę narzędzi wykorzystywanych do edycji.',
                    'en' => 'Onboarding new employees in editing processes and the use of tools utilized for editing.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9024,
                'name' => json_encode([
                    'pl' => 'Wsparcie innych działów organizacji w przygotowywaniu i edytowaniu ich dokumentacji.',
                    'en' => 'Supporting other departments in preparing and editing their documentation.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9025,
                'name' => json_encode([
                    'pl' => 'Udzielanie pomocy w zakresie formatowania, korekty oraz organizacji treści w dokumentach.',
                    'en' => 'Providing assistance in formatting, proofreading, and organizing content in documents.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9026,
                'name' => json_encode([
                    'pl' => 'Konsultowanie się z działami, aby zrozumieć ich potrzeby dotyczące treści i sposobu ich prezentacji.',
                    'en' => 'Consulting with departments to understand their needs regarding content and its presentation.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9027,
                'name' => json_encode([
                    'pl' => 'Projektowanie prostych grafik, ikon, tabel i elementów wizualnych wspierających treść dokumentu.',
                    'en' => 'Designing simple graphics, icons, tables, and visual elements supporting the content of the document.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9028,
                'name' => json_encode([
                    'pl' => 'Wykorzystanie narzędzi do tworzenia prostych grafik, takich jak Canva czy PowerPoint.',
                    'en' => 'Using tools for creating simple graphics, such as Canva or PowerPoint.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9029,
                'name' => json_encode([
                    'pl' => 'Upewnienie się, że wszystkie grafiki są spójne z układem dokumentu i z marką organizacji.',
                    'en' => 'Ensuring that all graphics are consistent with the document layout and the organization’s brand.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9030,
                'name' => json_encode([
                    'pl' => 'Uczestnictwo w szkoleniach dotyczących obsługi edytorów tekstu oraz nowych funkcji programów edycyjnych.',
                    'en' => 'Participating in training on using text editors and new features of editing programs.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9031,
                'name' => json_encode([
                    'pl' => 'Aktualizowanie wiedzy o zmianach w zasadach edytorskich oraz narzędziach wykorzystywanych do tworzenia dokumentów.',
                    'en' => 'Updating knowledge about changes in editorial standards and tools used for creating documents.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9032,
                'name' => json_encode([
                    'pl' => 'Doskonalenie technik pisania, redagowania i formatowania dokumentów.',
                    'en' => 'Improving writing, editing, and formatting techniques for documents.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
        ];
        $POZOSTALI_OPERATORZY_EDYTORÓW_TEKSTU = [
            [
                'id' => 9033,
                'name' => json_encode([
                    'pl' => 'Wprowadzanie treści oraz edytowanie dokumentów zgodnie z wytycznymi organizacji.',
                    'en' => 'Entering content and editing documents according to the organization’s guidelines.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9034,
                'name' => json_encode([
                    'pl' => 'Dostosowywanie dokumentów do wymagań klienta lub działu, dla którego są przygotowywane.',
                    'en' => 'Adjusting documents to meet the requirements of the client or department for which they are prepared.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9035,
                'name' => json_encode([
                    'pl' => 'Redagowanie tekstów pod kątem ich poprawności językowej, stylistycznej i technicznej.',
                    'en' => 'Editing texts for language, stylistic, and technical correctness.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9036,
                'name' => json_encode([
                    'pl' => 'Sprawdzanie dokumentów pod kątem błędów gramatycznych, ortograficznych, interpunkcyjnych i stylistycznych.',
                    'en' => 'Checking documents for grammatical, spelling, punctuation, and stylistic errors.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9037,
                'name' => json_encode([
                    'pl' => 'Poprawianie błędów językowych oraz dbanie o spójność stylistyczną dokumentu.',
                    'en' => 'Correcting language errors and maintaining the stylistic consistency of the document.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9038,
                'name' => json_encode([
                    'pl' => 'Współpraca z korektorami i redaktorami, aby zapewnić wysoką jakość tekstu.',
                    'en' => 'Collaborating with proofreaders and editors to ensure high text quality.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9039,
                'name' => json_encode([
                    'pl' => 'Stosowanie określonych stylów i formatów, w tym czcionek, nagłówków, wyrównania, wcięć i numeracji stron.',
                    'en' => 'Applying specified styles and formats, including fonts, headings, alignment, indents, and page numbering.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9040,
                'name' => json_encode([
                    'pl' => 'Wstawianie spisów treści, list punktowanych i numerowanych, a także tworzenie podziału na sekcje.',
                    'en' => 'Inserting tables of contents, bullet points, and numbered lists, as well as creating section divisions.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9041,
                'name' => json_encode([
                    'pl' => 'Dbanie o przejrzysty i estetyczny układ dokumentu, zgodny z wymaganiami organizacji lub standardami publikacyjnymi.',
                    'en' => 'Ensuring a clear and aesthetic layout of the document, in accordance with organizational requirements or publishing standards.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9042,
                'name' => json_encode([
                    'pl' => 'Wykorzystanie programów edytorskich, takich jak Microsoft Word, Google Docs czy inne specjalistyczne narzędzia do edycji.',
                    'en' => 'Utilizing editing software such as Microsoft Word, Google Docs, or other specialized editing tools.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9043,
                'name' => json_encode([
                    'pl' => 'Korzystanie z zaawansowanych funkcji edytorów tekstu, takich jak śledzenie zmian, komentarze i wstawianie przypisów.',
                    'en' => 'Using advanced features of text editors, such as change tracking, comments, and footnotes insertion.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9044,
                'name' => json_encode([
                    'pl' => 'Aktualizowanie znajomości narzędzi oraz umiejętności pracy z edytorami tekstu w celu zwiększenia efektywności.',
                    'en' => 'Updating knowledge of tools and skills in using text editors to increase efficiency.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9045,
                'name' => json_encode([
                    'pl' => 'Prowadzenie ewidencji wersji dokumentów oraz dbanie o to, by były one właściwie oznaczone.',
                    'en' => 'Maintaining a record of document versions and ensuring they are properly labeled.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9046,
                'name' => json_encode([
                    'pl' => 'Przechowywanie kopii zapasowych dokumentów i zabezpieczanie ich przed przypadkowym nadpisaniem.',
                    'en' => 'Storing backups of documents and securing them from accidental overwriting.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9047,
                'name' => json_encode([
                    'pl' => 'Weryfikacja, czy wprowadzone zmiany są zgodne z wcześniejszymi wersjami i zatwierdzonymi korektami.',
                    'en' => 'Verifying that introduced changes are consistent with previous versions and approved corrections.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9048,
                'name' => json_encode([
                    'pl' => 'Wstawianie i formatowanie grafik, tabel oraz diagramów w dokumentach tekstowych.',
                    'en' => 'Inserting and formatting graphics, tables, and diagrams in text documents.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9049,
                'name' => json_encode([
                    'pl' => 'Dostosowanie elementów wizualnych do układu dokumentu i dbanie o ich spójność z treścią.',
                    'en' => 'Adjusting visual elements to the document layout and ensuring their consistency with the content.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9050,
                'name' => json_encode([
                    'pl' => 'Tworzenie prostych grafik, np. w PowerPoint czy Canva, które uatrakcyjniają wizualnie dokumenty.',
                    'en' => 'Creating simple graphics, e.g., in PowerPoint or Canva, that enhance the visual appeal of documents.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9051,
                'name' => json_encode([
                    'pl' => 'Przygotowywanie dokumentów takich jak pisma urzędowe, raporty, protokoły i notatki służbowe.',
                    'en' => 'Preparing documents such as official letters, reports, protocols, and memos.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9052,
                'name' => json_encode([
                    'pl' => 'Redagowanie oficjalnych dokumentów i ich formatowanie zgodnie ze standardami organizacji.',
                    'en' => 'Editing official documents and formatting them according to the organization’s standards.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9053,
                'name' => json_encode([
                    'pl' => 'Współpraca z działem administracyjnym lub sekretariatem w zakresie obsługi dokumentacji biurowej.',
                    'en' => 'Collaborating with the administrative department or secretariat in handling office documentation.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9054,
                'name' => json_encode([
                    'pl' => 'Przyjmowanie uwag i poprawek od zespołów lub klientów oraz ich wprowadzanie do dokumentów.',
                    'en' => 'Receiving feedback and corrections from teams or clients and incorporating them into documents.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9055,
                'name' => json_encode([
                    'pl' => 'Sprawdzanie, czy wszystkie zgłoszone zmiany zostały prawidłowo naniesione.',
                    'en' => 'Checking that all reported changes have been correctly implemented.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9056,
                'name' => json_encode([
                    'pl' => 'Koordynacja procesu wprowadzania zmian w dokumentach, aby zapewnić ich spójność.',
                    'en' => 'Coordinating the process of implementing changes in documents to ensure consistency.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9057,
                'name' => json_encode([
                    'pl' => 'Opracowywanie szablonów i wzorców dokumentów, które mogą być wielokrotnie używane w organizacji.',
                    'en' => 'Developing templates and document patterns that can be reused in the organization.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9058,
                'name' => json_encode([
                    'pl' => 'Aktualizacja istniejących szablonów, aby były zgodne z aktualnymi standardami i wymogami organizacji.',
                    'en' => 'Updating existing templates to ensure compliance with current standards and requirements of the organization.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9059,
                'name' => json_encode([
                    'pl' => 'Uspójnienie wyglądu dokumentów tworzonych przez pracowników, ułatwiając ich redakcję i tworzenie.',
                    'en' => 'Standardizing the appearance of documents created by employees, facilitating their editing and creation.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9060,
                'name' => json_encode([
                    'pl' => 'Formatowanie dokumentów zgodnie z wymogami dla wersji drukowanej lub cyfrowej (np. PDF, EPUB).',
                    'en' => 'Formatting documents according to the requirements for printed or digital versions (e.g., PDF, EPUB).'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9061,
                'name' => json_encode([
                    'pl' => 'Przekształcanie dokumentów do formatów takich jak PDF lub EPUB, odpowiednich do dystrybucji cyfrowej.',
                    'en' => 'Converting documents to formats such as PDF or EPUB suitable for digital distribution.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9062,
                'name' => json_encode([
                    'pl' => 'Współpraca z działem produkcji, aby zapewnić, że dokumenty spełniają wymagania techniczne publikacji.',
                    'en' => 'Collaborating with the production department to ensure that documents meet publication technical requirements.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9063,
                'name' => json_encode([
                    'pl' => 'Przestrzeganie zasad ochrony danych osobowych i poufności przy pracy z dokumentacją zawierającą dane wrażliwe.',
                    'en' => 'Complying with personal data protection and confidentiality rules when working with documentation containing sensitive data.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9064,
                'name' => json_encode([
                    'pl' => 'Stosowanie zabezpieczeń, takich jak hasła lub szyfrowanie plików, aby chronić poufne dokumenty.',
                    'en' => 'Implementing safeguards such as passwords or file encryption to protect confidential documents.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9065,
                'name' => json_encode([
                    'pl' => 'Informowanie zespołu o zasadach ochrony danych oraz ich przestrzeganie.',
                    'en' => 'Informing the team about data protection rules and ensuring compliance.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9066,
                'name' => json_encode([
                    'pl' => 'Wsparcie działów marketingu, sprzedaży, HR lub finansów przy tworzeniu i redakcji dokumentów.',
                    'en' => 'Supporting marketing, sales, HR, or finance departments in creating and editing documents.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9067,
                'name' => json_encode([
                    'pl' => 'Konsultowanie i przyjmowanie wytycznych od innych działów, aby dostosować dokumenty do ich potrzeb.',
                    'en' => 'Consulting and receiving guidelines from other departments to tailor documents to their needs.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9068,
                'name' => json_encode([
                    'pl' => 'Informowanie o statusie prac nad dokumentami i koordynacja procesu ich edycji.',
                    'en' => 'Informing about the status of work on documents and coordinating the editing process.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9069,
                'name' => json_encode([
                    'pl' => 'Tworzenie dokumentów z instrukcjami i wytycznymi dotyczącymi obsługi edytorów tekstu i formatowania.',
                    'en' => 'Creating documents with instructions and guidelines for using text editors and formatting.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9070,
                'name' => json_encode([
                    'pl' => 'Aktualizacja istniejących wytycznych i ich dostosowywanie do nowych standardów w organizacji.',
                    'en' => 'Updating existing guidelines and adapting them to new standards within the organization.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9071,
                'name' => json_encode([
                    'pl' => 'Wdrażanie nowych pracowników do pracy z edytorami tekstu oraz procesów związanych z dokumentacją.',
                    'en' => 'Onboarding new employees to work with text editors and processes related to documentation.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9072,
                'name' => json_encode([
                    'pl' => 'Tworzenie podręczników, instrukcji i prezentacji na potrzeby wewnętrznych szkoleń organizacyjnych.',
                    'en' => 'Creating manuals, instructions, and presentations for internal organizational training.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9073,
                'name' => json_encode([
                    'pl' => 'Redagowanie materiałów edukacyjnych i ich dostosowanie do standardów wizualnych i językowych organizacji.',
                    'en' => 'Editing educational materials and adapting them to the visual and linguistic standards of the organization.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9074,
                'name' => json_encode([
                    'pl' => 'Współpraca z zespołem szkoleniowym lub działem HR w zakresie przygotowywania dokumentacji szkoleniowej.',
                    'en' => 'Collaborating with the training team or HR department to prepare training documentation.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9075,
                'name' => json_encode([
                    'pl' => 'Prowadzenie ewidencji dokumentów oraz dbanie o ich archiwizację zgodnie z zasadami organizacji.',
                    'en' => 'Keeping a record of documents and ensuring their archiving according to the organization’s policies.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9076,
                'name' => json_encode([
                    'pl' => 'Organizowanie dokumentacji w sposób umożliwiający łatwy dostęp i szybkie wyszukiwanie treści.',
                    'en' => 'Organizing documentation for easy access and quick content retrieval.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9077,
                'name' => json_encode([
                    'pl' => 'Przestrzeganie wewnętrznych zasad przechowywania i usuwania dokumentów.',
                    'en' => 'Complying with internal rules for storing and disposing of documents.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9078,
                'name' => json_encode([
                    'pl' => 'Udział w szkoleniach z zakresu edycji tekstu, obsługi narzędzi do przetwarzania tekstu i redagowania dokumentów.',
                    'en' => 'Participating in training on text editing, using text processing tools, and document editing.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9079,
                'name' => json_encode([
                    'pl' => 'Aktualizacja wiedzy na temat nowych funkcji edytorów tekstu i trendów związanych z dokumentacją biurową.',
                    'en' => 'Updating knowledge of new features of text editors and trends related to office documentation.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9080,
                'name' => json_encode([
                    'pl' => 'Doskonalenie umiejętności językowych i technicznych w celu poprawy jakości edytowanych dokumentów.',
                    'en' => 'Improving language and technical skills to enhance the quality of edited documents.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ]
        ];
        $obowiazki_recepcjonisty = [
            [
                'id' => 9081,
                'name' => json_encode([
                    'pl' => 'Rejestrowanie gości przy ich przyjeździe oraz sprawdzanie dokumentów tożsamości.',
                    'en' => 'Registering guests upon their arrival and verifying identity documents.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9082,
                'name' => json_encode([
                    'pl' => 'Przekazywanie informacji o pokojach, wyposażeniu oraz usługach dostępnych w hotelu.',
                    'en' => 'Providing information about rooms, amenities, and services available at the hotel.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9083,
                'name' => json_encode([
                    'pl' => 'Przekazywanie kluczy lub kart dostępowych oraz wyjaśnianie, jak korzystać z udogodnień hotelowych.',
                    'en' => 'Issuing keys or access cards and explaining how to use hotel amenities.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9084,
                'name' => json_encode([
                    'pl' => 'Przyjmowanie rezerwacji telefonicznych, online i bezpośrednich oraz ich wprowadzanie do systemu hotelowego.',
                    'en' => 'Taking telephone, online, and walk-in reservations and entering them into the hotel system.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9085,
                'name' => json_encode([
                    'pl' => 'Sprawdzanie dostępności pokoi i wprowadzanie zleceń rezerwacji w systemie.',
                    'en' => 'Checking room availability and entering reservation requests into the system.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9086,
                'name' => json_encode([
                    'pl' => 'Potwierdzanie rezerwacji oraz informowanie gości o szczegółach dotyczących ich pobytu.',
                    'en' => 'Confirming reservations and informing guests about details of their stay.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9087,
                'name' => json_encode([
                    'pl' => 'Obsługa płatności przy zameldowaniu oraz przy wymeldowaniu, w tym przyjmowanie płatności gotówkowych i kart kredytowych.',
                    'en' => 'Processing payments during check-in and check-out, including cash and credit card payments.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9088,
                'name' => json_encode([
                    'pl' => 'Wystawianie faktur i rachunków oraz rozliczanie dodatkowych usług, takich jak mini bar, parking, posiłki.',
                    'en' => 'Issuing invoices and bills and settling additional services such as the minibar, parking, and meals.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9089,
                'name' => json_encode([
                    'pl' => 'Dbanie o zgodność rozliczeń i współpraca z działem księgowości w celu wyjaśniania ewentualnych niezgodności.',
                    'en' => 'Ensuring the accuracy of settlements and cooperating with the accounting department to resolve any discrepancies.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9090,
                'name' => json_encode([
                    'pl' => 'Sprawdzanie rachunku gości przed wymeldowaniem oraz pobieranie opłat za wszelkie dodatkowe usługi.',
                    'en' => 'Verifying guests’ bills before check-out and collecting charges for any additional services.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9091,
                'name' => json_encode([
                    'pl' => 'Przekazywanie informacji o procedurze wymeldowania oraz odbiór kart dostępowych lub kluczy.',
                    'en' => 'Providing information on the check-out procedure and collecting access cards or keys.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9092,
                'name' => json_encode([
                    'pl' => 'Wysyłanie podziękowań za pobyt i zapraszanie do ponownego odwiedzenia hotelu.',
                    'en' => 'Sending thank-you notes for the stay and inviting guests to return to the hotel.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9093,
                'name' => json_encode([
                    'pl' => 'Korzystanie z systemów do zarządzania rezerwacjami, ewidencją gości oraz płatnościami.',
                    'en' => 'Using systems to manage reservations, guest records, and payments.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9094,
                'name' => json_encode([
                    'pl' => 'Wprowadzanie i aktualizacja danych gości, rezerwacji oraz płatności w systemach.',
                    'en' => 'Entering and updating guest data, reservations, and payments in the systems.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9095,
                'name' => json_encode([
                    'pl' => 'Rozwiązywanie drobnych problemów technicznych lub kontakt z działem IT w razie potrzeby.',
                    'en' => 'Resolving minor technical issues or contacting the IT department when necessary.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9096,
                'name' => json_encode([
                    'pl' => 'Odpowiadanie na pytania gości dotyczące usług hotelowych, atrakcji turystycznych, lokalnych restauracji i środków transportu.',
                    'en' => 'Answering guests’ questions about hotel services, tourist attractions, local restaurants, and transportation.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9097,
                'name' => json_encode([
                    'pl' => 'Informowanie gości o zasadach hotelu, takich jak godziny zameldowania, wymeldowania, zasady korzystania z obiektów rekreacyjnych.',
                    'en' => 'Informing guests about hotel policies, such as check-in/check-out times and rules for using recreational facilities.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9098,
                'name' => json_encode([
                    'pl' => 'Pomoc w organizacji wycieczek, wynajmu samochodów i udzielanie informacji o dostępnych atrakcjach w okolicy.',
                    'en' => 'Assisting in organizing tours, car rentals, and providing information about available attractions in the area.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9099,
                'name' => json_encode([
                    'pl' => 'Wydawanie i odbieranie kluczy lub kart dostępowych do pokoi oraz dbanie o ich bezpieczeństwo.',
                    'en' => 'Issuing and collecting keys or access cards to rooms and ensuring their security.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9100,
                'name' => json_encode([
                    'pl' => 'Monitorowanie dostępu do pomieszczeń oraz zapewnienie odpowiednich środków bezpieczeństwa.',
                    'en' => 'Monitoring access to premises and ensuring appropriate security measures.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9101,
                'name' => json_encode([
                    'pl' => 'Informowanie o zagubionych kluczach lub kartach dostępowych i ich wymiana.',
                    'en' => 'Reporting lost keys or access cards and coordinating their replacement.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9102,
                'name' => json_encode([
                    'pl' => 'Przyjmowanie skarg i reklamacji od gości oraz szybkie podejmowanie działań naprawczych.',
                    'en' => 'Receiving complaints and claims from guests and promptly taking corrective actions.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9103,
                'name' => json_encode([
                    'pl' => 'Kontakt z odpowiednimi działami (np. housekeeping, technicznym) w celu rozwiązania problemów gości.',
                    'en' => 'Contacting relevant departments (e.g., housekeeping, maintenance) to resolve guest issues.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9104,
                'name' => json_encode([
                    'pl' => 'Informowanie menedżera o skomplikowanych sytuacjach, które wymagają szczególnej uwagi.',
                    'en' => 'Informing the manager about complicated situations that require special attention.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9105,
                'name' => json_encode([
                    'pl' => 'Współpraca z działem housekeeping w zakresie przygotowania pokoi oraz zgłaszania potrzeb gości.',
                    'en' => 'Cooperating with the housekeeping department regarding room preparations and reporting guest needs.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9106,
                'name' => json_encode([
                    'pl' => 'Przekazywanie informacji działowi technicznemu w przypadku awarii i potrzeby naprawy w pokojach gości.',
                    'en' => 'Passing information to the maintenance department in case of breakdowns and repairs needed in guest rooms.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9107,
                'name' => json_encode([
                    'pl' => 'Informowanie personelu restauracji lub spa o wymaganiach specjalnych gości lub rezerwacjach.',
                    'en' => 'Informing restaurant or spa staff about special guest requests or reservations.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9108,
                'name' => json_encode([
                    'pl' => 'Ewidencjonowanie danych gości, w tym szczegółów zameldowania, długości pobytu oraz preferencji.',
                    'en' => 'Recording guest data, including check-in details, length of stay, and preferences.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9109,
                'name' => json_encode([
                    'pl' => 'Tworzenie raportów dobowych dotyczących obłożenia, przyjazdów i wyjazdów gości oraz usług dodatkowych.',
                    'en' => 'Creating daily reports on occupancy, guest arrivals and departures, and additional services.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9110,
                'name' => json_encode([
                    'pl' => 'Archiwizacja dokumentów hotelowych zgodnie z zasadami ochrony danych osobowych.',
                    'en' => 'Archiving hotel documents according to data protection regulations.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9111,
                'name' => json_encode([
                    'pl' => 'Odbieranie połączeń przychodzących i przekazywanie ich do odpowiednich działów lub osób.',
                    'en' => 'Answering incoming calls and transferring them to the appropriate departments or individuals.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9112,
                'name' => json_encode([
                    'pl' => 'Udzielanie podstawowych informacji gościom, którzy kontaktują się telefonicznie, oraz odbieranie wiadomości.',
                    'en' => 'Providing basic information to guests contacting by phone and taking messages.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9113,
                'name' => json_encode([
                    'pl' => 'Informowanie gości o wewnętrznych numerach telefonów i zasadach korzystania z centrali hotelowej.',
                    'en' => 'Informing guests about internal phone numbers and rules for using the hotel switchboard.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9114,
                'name' => json_encode([
                    'pl' => 'Znajomość procedur ewakuacyjnych oraz zasad bezpieczeństwa obowiązujących w hotelu.',
                    'en' => 'Knowledge of evacuation procedures and safety rules in force at the hotel.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9115,
                'name' => json_encode([
                    'pl' => 'Informowanie gości o zasadach bezpieczeństwa oraz udzielanie informacji na temat drogi ewakuacyjnej.',
                    'en' => 'Informing guests about safety rules and providing information about the evacuation route.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9116,
                'name' => json_encode([
                    'pl' => 'Zgłaszanie wszelkich sytuacji awaryjnych, problemów technicznych lub zagrożeń bezpieczeństwa odpowiednim służbom.',
                    'en' => 'Reporting any emergencies, technical problems, or security threats to the appropriate services.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9117,
                'name' => json_encode([
                    'pl' => 'Rejestrowanie gości w programie lojalnościowym hotelu oraz udzielanie informacji o przywilejach członkowskich.',
                    'en' => 'Registering guests in the hotel loyalty program and providing information about membership benefits.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9118,
                'name' => json_encode([
                    'pl' => 'Przekazywanie informacji o dostępnych promocjach i korzyściach wynikających z udziału w programie.',
                    'en' => 'Providing information about available promotions and benefits of participating in the program.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9119,
                'name' => json_encode([
                    'pl' => 'Pomoc gościom w zarządzaniu ich kontem lojalnościowym oraz naliczanie punktów za pobyt.',
                    'en' => 'Assisting guests in managing their loyalty accounts and accruing points for their stay.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9120,
                'name' => json_encode([
                    'pl' => 'Sporządzanie codziennych raportów dotyczących liczby gości, obłożenia pokoi, przychodów oraz wydatków.',
                    'en' => 'Preparing daily reports on the number of guests, room occupancy, revenues, and expenses.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9121,
                'name' => json_encode([
                    'pl' => 'Przekazywanie raportów kierownictwu oraz wskazywanie ewentualnych problemów wymagających interwencji.',
                    'en' => 'Submitting reports to management and identifying any issues requiring intervention.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9122,
                'name' => json_encode([
                    'pl' => 'Analiza danych dotyczących przyjazdów, wyjazdów i rezerwacji, aby zapewnić efektywne zarządzanie obłożeniem.',
                    'en' => 'Analyzing data regarding arrivals, departures, and reservations to ensure efficient occupancy management.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9123,
                'name' => json_encode([
                    'pl' => 'Dostarczanie materiałów takich jak mapki, broszury informacyjne i przewodniki po okolicy.',
                    'en' => 'Providing materials such as maps, informational brochures, and guides to the area.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9124,
                'name' => json_encode([
                    'pl' => 'Przygotowanie informacji o wydarzeniach lokalnych, dostępnych atrakcjach i usługach dodatkowych.',
                    'en' => 'Preparing information about local events, available attractions, and additional services.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9125,
                'name' => json_encode([
                    'pl' => 'Dbanie o dostępność aktualnych materiałów w recepcji oraz informowanie gości o dostępnych usługach.',
                    'en' => 'Ensuring the availability of current materials at the reception and informing guests about available services.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9126,
                'name' => json_encode([
                    'pl' => 'Organizowanie dodatkowych usług na życzenie gości, takich jak zamówienia taxi, budzenie, opieka nad bagażem.',
                    'en' => 'Organizing additional services upon guests’ requests, such as taxi orders, wake-up calls, and luggage assistance.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9127,
                'name' => json_encode([
                    'pl' => 'Udzielanie informacji o usługach hotelowych, takich jak spa, siłownia, restauracja, sale konferencyjne.',
                    'en' => 'Providing information about hotel services, such as the spa, gym, restaurant, and conference rooms.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9128,
                'name' => json_encode([
                    'pl' => 'Obsługa zamówień gości na usługi specjalne oraz koordynowanie z odpowiednimi działami hotelu.',
                    'en' => 'Handling guest orders for special services and coordinating with relevant hotel departments.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9129,
                'name' => json_encode([
                    'pl' => 'Wprowadzanie nowych pracowników w procedury recepcyjne oraz obsługę systemów hotelowych.',
                    'en' => 'Onboarding new employees in reception procedures and hotel systems.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9130,
                'name' => json_encode([
                    'pl' => 'Przekazywanie zasad obsługi gości oraz procedur rozwiązywania problemów i reklamacji.',
                    'en' => 'Providing guidelines for guest service and procedures for resolving issues and complaints.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9131,
                'name' => json_encode([
                    'pl' => 'Udzielanie wskazówek oraz monitorowanie pracy nowych pracowników w celu zapewnienia odpowiedniego standardu obsługi.',
                    'en' => 'Providing guidance and monitoring the work of new employees to ensure proper service standards.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9132,
                'name' => json_encode([
                    'pl' => 'Dbanie o wysoki standard obsługi, uprzejmość i profesjonalizm w kontakcie z gośćmi.',
                    'en' => 'Maintaining high service standards, courtesy, and professionalism in guest interactions.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9133,
                'name' => json_encode([
                    'pl' => 'Przestrzeganie zasad etyki zawodowej i dbanie o dobre imię hotelu.',
                    'en' => 'Adhering to professional ethics and maintaining the good reputation of the hotel.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9134,
                'name' => json_encode([
                    'pl' => 'Zapewnienie przyjaznej atmosfery oraz gotowość do pomocy gościom w każdej sytuacji.',
                    'en' => 'Creating a friendly atmosphere and being ready to assist guests in any situation.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ]
        ];
        $PRACOWNIK_BIURA_PRZEPUSTEK = [
            [
                'id' => 9135,
                'name' => json_encode([
                    'pl' => 'Przyjmowanie wniosków o wydanie przepustek stałych i jednorazowych dla pracowników, gości oraz kontrahentów.',
                    'en' => 'Accepting applications for the issuance of permanent and temporary passes for employees, guests, and contractors.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9136,
                'name' => json_encode([
                    'pl' => 'Wprowadzanie danych do systemu przepustek oraz przypisywanie identyfikatorów osobom upoważnionym do wejścia.',
                    'en' => 'Entering data into the pass system and assigning identifiers to individuals authorized to enter.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9137,
                'name' => json_encode([
                    'pl' => 'Wydawanie i odbieranie przepustek tymczasowych od osób wchodzących na teren obiektu.',
                    'en' => 'Issuing and collecting temporary passes from individuals entering the premises.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9138,
                'name' => json_encode([
                    'pl' => 'Prowadzenie rejestru osób odwiedzających, w tym godzin przybycia i wyjścia z obiektu.',
                    'en' => 'Maintaining a register of visitors, including arrival and departure times.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9139,
                'name' => json_encode([
                    'pl' => 'Sprawdzanie dokumentów tożsamości osób wchodzących na teren oraz zgodności z danymi w przepustce.',
                    'en' => 'Verifying the identity documents of individuals entering the premises and ensuring they match the information on the pass.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9140,
                'name' => json_encode([
                    'pl' => 'Zapewnienie, że osoby przebywające na terenie są zgodne z wymaganiami organizacji dotyczącymi dostępu.',
                    'en' => 'Ensuring that individuals present on the premises comply with the organization’s access requirements.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9141,
                'name' => json_encode([
                    'pl' => 'Weryfikowanie, czy osoby wchodzące na teren mają odpowiednie uprawnienia do przebywania w budynku.',
                    'en' => 'Verifying whether individuals entering the premises have the appropriate authorization to be in the building.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9142,
                'name' => json_encode([
                    'pl' => 'Monitorowanie wejść i wyjść oraz współpraca z działem ochrony w celu zapewnienia bezpieczeństwa na obiekcie.',
                    'en' => 'Monitoring entrances and exits and collaborating with the security department to ensure safety on the premises.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9143,
                'name' => json_encode([
                    'pl' => 'Odmawianie dostępu osobom nieposiadającym odpowiednich uprawnień oraz informowanie ich o zasadach wstępu.',
                    'en' => 'Denying access to individuals without the proper authorization and informing them of entry regulations.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9144,
                'name' => json_encode([
                    'pl' => 'Korzystanie z systemów informatycznych do zarządzania przepustkami i kontrolą dostępu.',
                    'en' => 'Utilizing information systems to manage passes and control access.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9145,
                'name' => json_encode([
                    'pl' => 'Rejestrowanie danych w systemie kontroli dostępu oraz monitorowanie zgodności z zasadami organizacji.',
                    'en' => 'Recording data in the access control system and monitoring compliance with organizational rules.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9146,
                'name' => json_encode([
                    'pl' => 'Aktualizowanie i przetwarzanie informacji o dostępie do poszczególnych stref na terenie obiektu.',
                    'en' => 'Updating and processing information about access to specific zones on the premises.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9147,
                'name' => json_encode([
                    'pl' => 'Informowanie gości o procedurach wstępu, zasadach bezpieczeństwa oraz regulaminie obiektu.',
                    'en' => 'Informing guests about entry procedures, safety rules, and the facility’s regulations.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9148,
                'name' => json_encode([
                    'pl' => 'Przekazywanie informacji na temat lokalizacji biur, działów oraz osób, do których przychodzą goście.',
                    'en' => 'Providing information about the locations of offices, departments, and individuals that guests are visiting.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9149,
                'name' => json_encode([
                    'pl' => 'Udzielanie informacji o zasadach uzyskania przepustek stałych i jednorazowych.',
                    'en' => 'Providing information on the rules for obtaining permanent and temporary passes.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9150,
                'name' => json_encode([
                    'pl' => 'Przegląd i aktualizacja uprawnień dostępowych pracowników, kontrahentów oraz gości.',
                    'en' => 'Reviewing and updating access permissions for employees, contractors, and guests.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9151,
                'name' => json_encode([
                    'pl' => 'Współpraca z działem HR i ochrony w celu utrzymania aktualnych informacji o uprawnieniach dostępowych.',
                    'en' => 'Collaborating with the HR and security departments to maintain current access permission information.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9152,
                'name' => json_encode([
                    'pl' => 'Blokowanie przepustek osób, które nie są już uprawnione do przebywania na terenie obiektu.',
                    'en' => 'Blocking passes for individuals who are no longer authorized to be on the premises.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9153,
                'name' => json_encode([
                    'pl' => 'Weryfikowanie przedmiotów wnoszonych i wynoszonych z obiektu, szczególnie sprzętu i materiałów organizacyjnych.',
                    'en' => 'Verifying items brought in and taken out of the premises, especially equipment and organizational materials.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9154,
                'name' => json_encode([
                    'pl' => 'Prowadzenie rejestru wydawanych przedmiotów oraz zgłaszanie nieprawidłowości do działu ochrony.',
                    'en' => 'Maintaining a register of issued items and reporting discrepancies to the security department.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9155,
                'name' => json_encode([
                    'pl' => 'Współpraca z ochroną w zakresie kontroli przedmiotów i zapobiegania kradzieżom.',
                    'en' => 'Collaborating with security to control items and prevent theft.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9156,
                'name' => json_encode([
                    'pl' => 'Prowadzenie ewidencji przepustek stałych i jednorazowych oraz ich aktualizacja w systemie.',
                    'en' => 'Maintaining a record of permanent and temporary passes and updating them in the system.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9157,
                'name' => json_encode([
                    'pl' => 'Sporządzanie raportów dotyczących liczby wydanych przepustek, osób odwiedzających oraz incydentów związanych z dostępem.',
                    'en' => 'Preparing reports on the number of passes issued, visitors, and access-related incidents.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9158,
                'name' => json_encode([
                    'pl' => 'Archiwizacja dokumentacji przepustek zgodnie z polityką ochrony danych osobowych.',
                    'en' => 'Archiving pass documentation in accordance with personal data protection policies.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9159,
                'name' => json_encode([
                    'pl' => 'Informowanie osób przebywających na terenie o zasadach ewakuacyjnych i procedurach awaryjnych.',
                    'en' => 'Informing individuals on the premises about evacuation rules and emergency procedures.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9160,
                'name' => json_encode([
                    'pl' => 'Kontrola, czy osoby posiadające przepustki przestrzegają regulaminu obiektu oraz zasad poruszania się po strefach.',
                    'en' => 'Monitoring compliance with the facility’s regulations and movement rules by pass holders.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9161,
                'name' => json_encode([
                    'pl' => 'Współpraca z zespołem ochrony przy zapewnianiu bezpieczeństwa oraz zapobieganiu naruszeniom.',
                    'en' => 'Collaborating with the security team to ensure safety and prevent violations.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9162,
                'name' => json_encode([
                    'pl' => 'Monitorowanie systemów alarmowych oraz zgłaszanie nieprawidłowości do działu technicznego lub ochrony.',
                    'en' => 'Monitoring alarm systems and reporting discrepancies to the technical or security department.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9163,
                'name' => json_encode([
                    'pl' => 'Sprawdzanie, czy systemy nadzoru działają poprawnie oraz reagowanie na alarmy i sygnały ostrzegawcze.',
                    'en' => 'Checking that surveillance systems are functioning properly and responding to alarms and warning signals.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9164,
                'name' => json_encode([
                    'pl' => 'Informowanie działu ochrony o wszelkich podejrzanych zachowaniach lub incydentach na terenie obiektu.',
                    'en' => 'Informing the security department of any suspicious behavior or incidents on the premises.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9165,
                'name' => json_encode([
                    'pl' => 'Koordynacja działań z pracownikami ochrony w celu zapewnienia bezpieczeństwa na terenie obiektu.',
                    'en' => 'Coordinating actions with security personnel to ensure safety on the premises.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9166,
                'name' => json_encode([
                    'pl' => 'Współpraca z administracją budynku w zakresie aktualizacji uprawnień oraz kontroli dostępu.',
                    'en' => 'Collaborating with building administration on updates to permissions and access control.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9167,
                'name' => json_encode([
                    'pl' => 'Informowanie działu ochrony o nietypowych sytuacjach i pomoc w rozwiązywaniu problemów związanych z dostępem.',
                    'en' => 'Informing the security department of unusual situations and assisting in resolving access-related issues.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9168,
                'name' => json_encode([
                    'pl' => 'Pomoc pracownikom i gościom w przypadku problemów z dostępem do pomieszczeń lub budynku.',
                    'en' => 'Assisting employees and guests with access issues to rooms or the building.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9169,
                'name' => json_encode([
                    'pl' => 'Informowanie o zasadach postępowania w przypadku zgubienia przepustki lub problemów technicznych.',
                    'en' => 'Informing about the procedures in case of lost passes or technical issues.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9170,
                'name' => json_encode([
                    'pl' => 'Współpraca z działem IT w przypadku problemów z systemem kontroli dostępu.',
                    'en' => 'Collaborating with the IT department in case of issues with the access control system.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9171,
                'name' => json_encode([
                    'pl' => 'Wdrażanie nowych pracowników w procedury wydawania przepustek i kontroli dostępu.',
                    'en' => 'Training new employees on the procedures for issuing passes and access control.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9172,
                'name' => json_encode([
                    'pl' => 'Przekazywanie wytycznych dotyczących pracy z systemami i zasad postępowania z osobami odwiedzającymi.',
                    'en' => 'Providing guidelines for working with systems and procedures for interacting with visitors.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9173,
                'name' => json_encode([
                    'pl' => 'Udzielanie wskazówek dotyczących reagowania na sytuacje awaryjne oraz współpracy z ochroną.',
                    'en' => 'Offering guidance on responding to emergencies and cooperating with security.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9174,
                'name' => json_encode([
                    'pl' => 'Rejestrowanie incydentów związanych z naruszeniem zasad dostępu lub bezpieczeństwa.',
                    'en' => 'Documenting incidents related to violations of access or safety rules.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9175,
                'name' => json_encode([
                    'pl' => 'Informowanie działu ochrony o przypadkach nieuprawnionego dostępu lub naruszenia regulaminu.',
                    'en' => 'Informing the security department of unauthorized access cases or violations of regulations.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9176,
                'name' => json_encode([
                    'pl' => 'Dokumentowanie sytuacji awaryjnych oraz podejmowanie odpowiednich działań zgodnie z procedurami.',
                    'en' => 'Documenting emergency situations and taking appropriate actions in accordance with procedures.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9177,
                'name' => json_encode([
                    'pl' => 'Przetwarzanie danych osobowych gości i pracowników zgodnie z przepisami dotyczącymi ochrony danych osobowych (np. RODO).',
                    'en' => 'Processing personal data of guests and employees in accordance with data protection regulations (e.g., GDPR).'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9178,
                'name' => json_encode([
                    'pl' => 'Zapewnienie odpowiedniego przechowywania dokumentacji przepustek i ochrony danych wrażliwych.',
                    'en' => 'Ensuring proper storage of pass documentation and protection of sensitive data.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9179,
                'name' => json_encode([
                    'pl' => 'Usuwanie danych osób, które zakończyły współpracę z organizacją lub nie są już uprawnione do dostępu.',
                    'en' => 'Deleting data of individuals who have ended their cooperation with the organization or are no longer authorized to access.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9180,
                'name' => json_encode([
                    'pl' => 'Obserwacja okolicy biura przepustek w celu identyfikacji nieautoryzowanych osób lub podejrzanych działań.',
                    'en' => 'Observing the area around the pass office to identify unauthorized individuals or suspicious activities.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9181,
                'name' => json_encode([
                    'pl' => 'Informowanie działu ochrony o osobach podejrzanie zachowujących się lub przebywających bez przepustki.',
                    'en' => 'Informing the security department about individuals behaving suspiciously or present without a pass.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9182,
                'name' => json_encode([
                    'pl' => 'Utrzymywanie kontaktu z ochroną w zakresie podejmowania szybkich działań prewencyjnych.',
                    'en' => 'Maintaining contact with security for taking quick preventive actions.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9183,
                'name' => json_encode([
                    'pl' => 'Pomoc w organizacji ewakuacji oraz informowanie osób przebywających na terenie o drodze ewakuacyjnej.',
                    'en' => 'Assisting in organizing evacuations and informing individuals on the premises about the evacuation route.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9184,
                'name' => json_encode([
                    'pl' => 'Współpraca z działem ochrony oraz innymi służbami w razie konieczności interwencji.',
                    'en' => 'Cooperating with the security department and other services in case of necessary interventions.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9185,
                'name' => json_encode([
                    'pl' => 'Informowanie odpowiednich służb o przebiegu ewakuacji oraz zapewnienie wsparcia w sytuacjach kryzysowych.',
                    'en' => 'Informing relevant services about the evacuation process and providing support in crisis situations.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ]
        ];
        $RECEPCJONISTA = [
            [
                'id' => 9186,
                'name' => json_encode([
                    'pl' => 'Witanie gości, udzielanie podstawowych informacji oraz kierowanie ich do odpowiednich osób lub działów.',
                    'en' => 'Greeting guests, providing basic information, and directing them to the appropriate persons or departments.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9187,
                'name' => json_encode([
                    'pl' => 'Zapewnienie przyjaznej atmosfery oraz odpowiadanie na pytania związane z działalnością firmy.',
                    'en' => 'Ensuring a friendly atmosphere and answering questions related to the company\'s activities.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9188,
                'name' => json_encode([
                    'pl' => 'Informowanie pracowników o przybyciu gości oraz organizowanie ich spotkań.',
                    'en' => 'Informing employees about the arrival of guests and organizing their meetings.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9189,
                'name' => json_encode([
                    'pl' => 'Obsługa centrali telefonicznej, odbieranie telefonów oraz kierowanie połączeń do odpowiednich pracowników.',
                    'en' => 'Operating the telephone switchboard, answering calls, and directing them to the appropriate employees.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9190,
                'name' => json_encode([
                    'pl' => 'Udzielanie informacji telefonicznych dotyczących firmy, jej produktów lub usług.',
                    'en' => 'Providing telephone information regarding the company, its products, or services.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9191,
                'name' => json_encode([
                    'pl' => 'Rejestrowanie i przekazywanie wiadomości telefonicznych osobom, których nie ma w biurze.',
                    'en' => 'Registering and relaying telephone messages to those who are not in the office.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9192,
                'name' => json_encode([
                    'pl' => 'Przyjmowanie, segregowanie i dystrybucja poczty oraz przesyłek kurierskich przychodzących do firmy.',
                    'en' => 'Receiving, sorting, and distributing incoming mail and courier shipments to the company.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9193,
                'name' => json_encode([
                    'pl' => 'Przygotowywanie i wysyłanie korespondencji wychodzącej, w tym listów i paczek.',
                    'en' => 'Preparing and sending outgoing correspondence, including letters and packages.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9194,
                'name' => json_encode([
                    'pl' => 'Prowadzenie rejestru korespondencji oraz dbanie o jej terminowe dostarczanie do odbiorców.',
                    'en' => 'Maintaining a record of correspondence and ensuring timely delivery to recipients.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9195,
                'name' => json_encode([
                    'pl' => 'Rezerwacja sal konferencyjnych na spotkania wewnętrzne oraz zewnętrzne.',
                    'en' => 'Reserving conference rooms for internal and external meetings.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9196,
                'name' => json_encode([
                    'pl' => 'Przygotowywanie sal przed spotkaniami, dbanie o wyposażenie, napoje oraz materiały biurowe.',
                    'en' => 'Preparing rooms before meetings, ensuring equipment, drinks, and office supplies are available.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9197,
                'name' => json_encode([
                    'pl' => 'Informowanie uczestników o harmonogramie spotkań i przypominanie o rezerwacjach.',
                    'en' => 'Informing participants about the meeting schedule and reminding them of reservations.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9198,
                'name' => json_encode([
                    'pl' => 'Prowadzenie dokumentacji biurowej, w tym rejestrów korespondencji, faktur, listy gości.',
                    'en' => 'Maintaining office documentation, including records of correspondence, invoices, and guest lists.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9199,
                'name' => json_encode([
                    'pl' => 'Archiwizacja dokumentów zgodnie z procedurami firmy i przepisami dotyczącymi ochrony danych osobowych.',
                    'en' => 'Archiving documents according to company procedures and regulations regarding personal data protection.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9200,
                'name' => json_encode([
                    'pl' => 'Współpraca z działem administracyjnym przy obsłudze dokumentacji firmowej.',
                    'en' => 'Cooperating with the administrative department in managing corporate documentation.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9201,
                'name' => json_encode([
                    'pl' => 'Monitorowanie zapasów materiałów biurowych oraz ich regularne zamawianie.',
                    'en' => 'Monitoring office supply inventory and regularly ordering supplies.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9202,
                'name' => json_encode([
                    'pl' => 'Utrzymywanie porządku w magazynie materiałów oraz zapewnienie ich dostępności dla pracowników.',
                    'en' => 'Maintaining order in the supply room and ensuring materials are available for employees.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9203,
                'name' => json_encode([
                    'pl' => 'Współpraca z dostawcami oraz prowadzenie rejestru zamówień i wydatków biurowych.',
                    'en' => 'Collaborating with suppliers and maintaining a record of orders and office expenses.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9204,
                'name' => json_encode([
                    'pl' => 'Weryfikacja tożsamości osób odwiedzających oraz rejestrowanie ich w systemie.',
                    'en' => 'Verifying the identity of visitors and recording them in the system.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9205,
                'name' => json_encode([
                    'pl' => 'Wydawanie przepustek lub identyfikatorów osobom odwiedzającym, w tym kontrahentom, klientom czy gościom.',
                    'en' => 'Issuing passes or identification badges to visitors, including contractors, clients, or guests.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9206,
                'name' => json_encode([
                    'pl' => 'Kierowanie interesantów do odpowiednich działów lub osób, z którymi mają zaplanowane spotkanie.',
                    'en' => 'Directing visitors to the appropriate departments or individuals with whom they have scheduled meetings.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9207,
                'name' => json_encode([
                    'pl' => 'Utrzymanie w dobrym stanie sprzętu biurowego, takiego jak drukarki, skanery, kopiarki i faksy.',
                    'en' => 'Maintaining office equipment such as printers, scanners, copiers, and faxes in good condition.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9208,
                'name' => json_encode([
                    'pl' => 'Rozwiązywanie drobnych problemów technicznych oraz zgłaszanie usterek do działu IT lub serwisu.',
                    'en' => 'Resolving minor technical issues and reporting faults to IT or service departments.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9209,
                'name' => json_encode([
                    'pl' => 'Obsługa systemu telefonicznego oraz programów biurowych używanych w codziennej pracy.',
                    'en' => 'Operating the telephone system and office programs used in daily work.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9210,
                'name' => json_encode([
                    'pl' => 'Rezerwacja biletów lotniczych, kolejowych oraz miejsc noclegowych dla pracowników udających się w delegację.',
                    'en' => 'Booking airline tickets, train tickets, and accommodation for employees going on business trips.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9211,
                'name' => json_encode([
                    'pl' => 'Przygotowywanie harmonogramu podróży oraz dostarczanie pracownikom niezbędnych dokumentów.',
                    'en' => 'Preparing travel itineraries and providing employees with necessary documents.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9212,
                'name' => json_encode([
                    'pl' => 'Organizacja logistyki podróży oraz kontakt z firmami transportowymi.',
                    'en' => 'Organizing travel logistics and liaising with transportation companies.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9213,
                'name' => json_encode([
                    'pl' => 'Pomoc w przygotowywaniu raportów kosztów podróży oraz rozliczeń delegacyjnych.',
                    'en' => 'Assisting in preparing travel cost reports and expense reconciliations.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9214,
                'name' => json_encode([
                    'pl' => 'Zbieranie i archiwizacja faktur oraz rachunków związanych z podróżami służbowymi.',
                    'en' => 'Collecting and archiving invoices and bills related to business trips.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9215,
                'name' => json_encode([
                    'pl' => 'Współpraca z działem księgowości w zakresie rozliczeń finansowych.',
                    'en' => 'Cooperating with the accounting department on financial reconciliations.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9216,
                'name' => json_encode([
                    'pl' => 'Zarządzanie kalendarzem spotkań wewnętrznych i zewnętrznych w firmie.',
                    'en' => 'Managing the calendar for internal and external meetings within the company.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9217,
                'name' => json_encode([
                    'pl' => 'Przypominanie pracownikom o nadchodzących spotkaniach oraz planowanie ich harmonogramu.',
                    'en' => 'Reminding employees about upcoming meetings and scheduling them.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9218,
                'name' => json_encode([
                    'pl' => 'Współpraca z zespołem administracyjnym w celu koordynacji kalendarza.',
                    'en' => 'Cooperating with the administrative team to coordinate the calendar.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9219,
                'name' => json_encode([
                    'pl' => 'Wydawanie przepustek i identyfikatorów nowym pracownikom oraz gościom.',
                    'en' => 'Issuing passes and identification badges to new employees and guests.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9220,
                'name' => json_encode([
                    'pl' => 'Ewidencjonowanie przepustek oraz dbanie o ich zgodność z zasadami bezpieczeństwa.',
                    'en' => 'Registering passes and ensuring their compliance with security regulations.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9221,
                'name' => json_encode([
                    'pl' => 'Odbiór identyfikatorów od osób, które zakończyły współpracę z firmą.',
                    'en' => 'Collecting identification badges from individuals who have ended their cooperation with the company.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9222,
                'name' => json_encode([
                    'pl' => 'Odpowiadanie na zapytania dotyczące firmy, jej produktów lub usług.',
                    'en' => 'Answering inquiries about the company, its products, or services.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9223,
                'name' => json_encode([
                    'pl' => 'Udzielanie podstawowych informacji o działalności firmy oraz kontaktach do działów.',
                    'en' => 'Providing basic information about the company\'s operations and contacts for departments.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9224,
                'name' => json_encode([
                    'pl' => 'Pomoc gościom w poruszaniu się po budynku i udzielanie wskazówek.',
                    'en' => 'Assisting guests in navigating the building and providing directions.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9225,
                'name' => json_encode([
                    'pl' => 'Prowadzenie ewidencji materiałów promocyjnych oraz dbanie o ich odpowiednie magazynowanie.',
                    'en' => 'Maintaining a record of promotional materials and ensuring their proper storage.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9226,
                'name' => json_encode([
                    'pl' => 'Przygotowywanie i wydawanie materiałów promocyjnych, takich jak broszury, ulotki i katalogi.',
                    'en' => 'Preparing and distributing promotional materials, such as brochures, flyers, and catalogs.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9227,
                'name' => json_encode([
                    'pl' => 'Współpraca z działem marketingu w zakresie przygotowywania materiałów dla klientów i gości.',
                    'en' => 'Collaborating with the marketing department to prepare materials for clients and guests.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9228,
                'name' => json_encode([
                    'pl' => 'Znajomość procedur bezpieczeństwa obowiązujących w firmie, w tym zasad ewakuacyjnych.',
                    'en' => 'Knowledge of the security procedures in place at the company, including evacuation rules.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9229,
                'name' => json_encode([
                    'pl' => 'Informowanie gości o zasadach bezpieczeństwa oraz udzielanie wskazówek dotyczących drogi ewakuacyjnej.',
                    'en' => 'Informing guests about safety rules and providing directions for evacuation routes.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9230,
                'name' => json_encode([
                    'pl' => 'Współpraca z działem ochrony i służbami porządkowymi w sytuacjach awaryjnych.',
                    'en' => 'Collaborating with security personnel and emergency services in emergency situations.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9231,
                'name' => json_encode([
                    'pl' => 'Utrzymanie recepcji w czystości i porządku, w tym dbanie o estetyczne ułożenie materiałów informacyjnych.',
                    'en' => 'Keeping the reception area clean and tidy, including maintaining an aesthetically pleasing arrangement of informational materials.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9232,
                'name' => json_encode([
                    'pl' => 'Monitorowanie stanu recepcji oraz dbałość o pozytywny wizerunek firmy.',
                    'en' => 'Monitoring the reception area and ensuring a positive image of the company.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9233,
                'name' => json_encode([
                    'pl' => 'Informowanie działu sprzątającego o konieczności dodatkowych prac porządkowych.',
                    'en' => 'Informing the cleaning department of the need for additional cleaning tasks.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9234,
                'name' => json_encode([
                    'pl' => 'Sporządzanie zestawień dotyczących odwiedzin, przesyłek oraz połączeń telefonicznych.',
                    'en' => 'Compiling reports on visits, shipments, and telephone calls.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9235,
                'name' => json_encode([
                    'pl' => 'Przygotowywanie raportów dotyczących wykorzystania sal konferencyjnych i innych zasobów biurowych.',
                    'en' => 'Preparing reports on the use of conference rooms and other office resources.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9236,
                'name' => json_encode([
                    'pl' => 'Współpraca z działem administracyjnym przy tworzeniu raportów na potrzeby zarządu.',
                    'en' => 'Collaborating with the administrative department to create reports for management.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9237,
                'name' => json_encode([
                    'pl' => 'Korzystanie z oprogramowania do zarządzania korespondencją, kalendarzem i rezerwacjami.',
                    'en' => 'Using software to manage correspondence, calendars, and reservations.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9238,
                'name' => json_encode([
                    'pl' => 'Obsługa wewnętrznych systemów do rejestracji gości oraz ewidencji dokumentów.',
                    'en' => 'Operating internal systems for guest registration and document tracking.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9239,
                'name' => json_encode([
                    'pl' => 'Aktualizacja wiedzy o systemach i programach biurowych używanych w recepcji.',
                    'en' => 'Updating knowledge of systems and office programs used at the reception.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9240,
                'name' => json_encode([
                    'pl' => 'Koordynacja działań z działem HR, administracyjnym, IT oraz innymi działami firmy.',
                    'en' => 'Coordinating actions with HR, administrative, IT, and other departments of the company.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9241,
                'name' => json_encode([
                    'pl' => 'Informowanie pracowników o nowych procedurach i wytycznych dotyczących obsługi biura.',
                    'en' => 'Informing employees about new procedures and guidelines regarding office operations.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9242,
                'name' => json_encode([
                    'pl' => 'Wsparcie innych zespołów w bieżących zadaniach administracyjnych.',
                    'en' => 'Supporting other teams in ongoing administrative tasks.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9243,
                'name' => json_encode([
                    'pl' => 'Przestrzeganie przepisów dotyczących ochrony danych osobowych (RODO) w codziennej pracy.',
                    'en' => 'Adhering to regulations regarding personal data protection (GDPR) in daily operations.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9244,
                'name' => json_encode([
                    'pl' => 'Zapewnienie, że dane gości i pracowników są przechowywane i przetwarzane zgodnie z zasadami bezpieczeństwa.',
                    'en' => 'Ensuring that guest and employee data is stored and processed according to security principles.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9245,
                'name' => json_encode([
                    'pl' => 'Unikanie udostępniania danych osobowych osobom nieupoważnionym oraz stosowanie zabezpieczeń dokumentacji.',
                    'en' => 'Avoiding the sharing of personal data with unauthorized persons and applying document security measures.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
        ];
        $REJESTRATORKA_MEDYCZNA = [
            [
                'id' => 9246,
                'name' => json_encode([
                    'pl' => 'Przyjmowanie zgłoszeń pacjentów na wizyty, zarówno telefonicznie, online, jak i osobiście.',
                    'en' => 'Receiving patient appointments for visits, both by phone, online, and in person.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9247,
                'name' => json_encode([
                    'pl' => 'Wprowadzanie wizyt do systemu rejestracyjnego oraz przydzielanie terminów zgodnie z grafikiem lekarzy.',
                    'en' => 'Entering appointments into the registration system and assigning dates according to the doctors\' schedules.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9248,
                'name' => json_encode([
                    'pl' => 'Informowanie pacjentów o dostępnych terminach, godzinach pracy oraz wymaganych dokumentach.',
                    'en' => 'Informing patients about available dates, working hours, and required documents.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9249,
                'name' => json_encode([
                    'pl' => 'Kontaktowanie się z pacjentami w celu potwierdzenia zaplanowanych wizyt.',
                    'en' => 'Contacting patients to confirm scheduled appointments.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9250,
                'name' => json_encode([
                    'pl' => 'Przyjmowanie zgłoszeń o odwołaniu lub zmianie terminu wizyty oraz ich aktualizacja w systemie.',
                    'en' => 'Receiving requests for cancellations or changes to appointment dates and updating them in the system.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9251,
                'name' => json_encode([
                    'pl' => 'Informowanie pacjentów o odwołanych wizytach z przyczyn losowych i proponowanie nowych terminów.',
                    'en' => 'Informing patients about canceled appointments due to unforeseen circumstances and suggesting new dates.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9252,
                'name' => json_encode([
                    'pl' => 'Witanie pacjentów i udzielanie informacji o kolejnych krokach, takich jak wypełnienie dokumentów lub oczekiwanie na wizytę.',
                    'en' => 'Greeting patients and providing information about the next steps, such as filling out forms or waiting for their appointment.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9253,
                'name' => json_encode([
                    'pl' => 'Pomoc pacjentom w wypełnieniu niezbędnych formularzy i udzielanie informacji o wymaganych dokumentach.',
                    'en' => 'Assisting patients in filling out necessary forms and providing information about required documents.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9254,
                'name' => json_encode([
                    'pl' => 'Kierowanie pacjentów do odpowiednich gabinetów lub jednostek diagnostycznych w placówce.',
                    'en' => 'Directing patients to the appropriate offices or diagnostic units within the facility.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9255,
                'name' => json_encode([
                    'pl' => 'Prowadzenie dokumentacji medycznej pacjentów oraz dbanie o jej aktualność i zgodność z obowiązującymi przepisami.',
                    'en' => 'Maintaining patient medical records and ensuring their accuracy and compliance with applicable regulations.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9256,
                'name' => json_encode([
                    'pl' => 'Archiwizacja dokumentów zgodnie z zasadami ochrony danych osobowych oraz polityką placówki medycznej.',
                    'en' => 'Archiving documents in accordance with data protection regulations and the policy of the medical facility.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9257,
                'name' => json_encode([
                    'pl' => 'Wydawanie i odbieranie dokumentacji na prośbę pacjentów lub lekarzy zgodnie z wewnętrznymi procedurami.',
                    'en' => 'Issuing and receiving documentation at the request of patients or doctors according to internal procedures.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9258,
                'name' => json_encode([
                    'pl' => 'Korzystanie z systemów informatycznych służących do rejestracji wizyt, ewidencji pacjentów oraz obsługi dokumentacji.',
                    'en' => 'Using IT systems for appointment registration, patient records, and documentation management.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9259,
                'name' => json_encode([
                    'pl' => 'Wprowadzanie i aktualizowanie danych pacjentów, terminów wizyt i wyników badań w systemie.',
                    'en' => 'Entering and updating patient data, appointment dates, and test results in the system.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9260,
                'name' => json_encode([
                    'pl' => 'Ścisła współpraca z działem IT w przypadku problemów technicznych lub potrzeby aktualizacji systemu.',
                    'en' => 'Close cooperation with the IT department in case of technical issues or system updates.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9261,
                'name' => json_encode([
                    'pl' => 'Udzielanie pacjentom informacji o procedurach medycznych, np. wymaganych przygotowaniach do badań.',
                    'en' => 'Providing patients with information about medical procedures, such as required preparations for tests.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9262,
                'name' => json_encode([
                    'pl' => 'Wyjaśnianie pacjentom zasad, jakie obowiązują w placówce, oraz odpowiadanie na ich pytania dotyczące leczenia i diagnostyki.',
                    'en' => 'Explaining to patients the rules in place at the facility and answering their questions about treatment and diagnostics.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9263,
                'name' => json_encode([
                    'pl' => 'Wspieranie pacjentów w zrozumieniu procesu leczenia oraz kierowanie ich do odpowiednich specjalistów w razie potrzeby.',
                    'en' => 'Supporting patients in understanding the treatment process and directing them to appropriate specialists if needed.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9264,
                'name' => json_encode([
                    'pl' => 'Przyjmowanie płatności za usługi medyczne, takie jak wizyty, badania diagnostyczne i zabiegi.',
                    'en' => 'Accepting payments for medical services, such as visits, diagnostic tests, and procedures.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9265,
                'name' => json_encode([
                    'pl' => 'Wystawianie rachunków, faktur oraz ich rozliczanie w systemie finansowym placówki.',
                    'en' => 'Issuing invoices and settling them in the facility\'s financial system.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9266,
                'name' => json_encode([
                    'pl' => 'Informowanie pacjentów o kosztach poszczególnych usług oraz dostępnych metodach płatności.',
                    'en' => 'Informing patients about the costs of individual services and available payment methods.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9267,
                'name' => json_encode([
                    'pl' => 'Przestrzeganie zasad archiwizacji dokumentów zgodnie z wytycznymi dotyczącymi dokumentacji medycznej.',
                    'en' => 'Adhering to document archiving principles in accordance with medical documentation guidelines.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9268,
                'name' => json_encode([
                    'pl' => 'Regularne porządkowanie dokumentacji pacjentów oraz przekazywanie jej do archiwum.',
                    'en' => 'Regularly organizing patient documentation and transferring it to the archive.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9269,
                'name' => json_encode([
                    'pl' => 'Współpraca z innymi działami w zakresie archiwizacji i ewentualnego udostępniania dokumentacji.',
                    'en' => 'Cooperating with other departments regarding archiving and possible sharing of documentation.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9270,
                'name' => json_encode([
                    'pl' => 'Dbanie o zachowanie poufności i bezpieczeństwa danych pacjentów zgodnie z przepisami RODO.',
                    'en' => 'Ensuring confidentiality and security of patient data in accordance with GDPR regulations.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9271,
                'name' => json_encode([
                    'pl' => 'Stosowanie zabezpieczeń systemów komputerowych i dokumentacji papierowej, aby zapobiec nieuprawnionemu dostępowi.',
                    'en' => 'Implementing security measures for computer systems and paper documentation to prevent unauthorized access.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9272,
                'name' => json_encode([
                    'pl' => 'Informowanie pacjentów o zasadach przetwarzania ich danych osobowych i udzielanie wyjaśnień w tym zakresie.',
                    'en' => 'Informing patients about the rules for processing their personal data and providing explanations in this regard.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9273,
                'name' => json_encode([
                    'pl' => 'Współpraca z lekarzami i pielęgniarkami w zakresie organizacji wizyt oraz planowania grafików.',
                    'en' => 'Collaborating with doctors and nurses to organize appointments and plan schedules.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9274,
                'name' => json_encode([
                    'pl' => 'Informowanie personelu medycznego o bieżącej sytuacji na recepcji oraz zmianach w harmonogramie wizyt.',
                    'en' => 'Informing medical staff about the current situation at the reception and changes in appointment schedules.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9275,
                'name' => json_encode([
                    'pl' => 'Przekazywanie lekarzom informacji o pacjentach, takich jak specjalne potrzeby lub dodatkowe wymagania.',
                    'en' => 'Providing doctors with information about patients, such as special needs or additional requirements.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9276,
                'name' => json_encode([
                    'pl' => 'Informowanie pacjentów o oferowanych przez placówkę usługach, takich jak diagnostyka, zabiegi i konsultacje.',
                    'en' => 'Informing patients about the services offered by the facility, such as diagnostics, procedures, and consultations.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9277,
                'name' => json_encode([
                    'pl' => 'Przekazywanie informacji na temat nowych usług i promocji w ofercie placówki.',
                    'en' => 'Providing information about new services and promotions in the facility\'s offerings.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9278,
                'name' => json_encode([
                    'pl' => 'Doradzanie pacjentom w wyborze odpowiednich usług medycznych na podstawie ich potrzeb.',
                    'en' => 'Advising patients on choosing appropriate medical services based on their needs.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9279,
                'name' => json_encode([
                    'pl' => 'Sporządzanie dokumentacji medycznej do wysyłki dla pacjentów, którzy nie mogą odebrać jej osobiście.',
                    'en' => 'Preparing medical documentation for mailing to patients who cannot pick it up in person.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9280,
                'name' => json_encode([
                    'pl' => 'Zapewnienie, że dokumentacja jest odpowiednio zabezpieczona oraz przygotowana do wysyłki pocztą lub kurierem.',
                    'en' => 'Ensuring that the documentation is properly secured and prepared for mailing by post or courier.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9281,
                'name' => json_encode([
                    'pl' => 'Informowanie pacjentów o statusie wysyłki dokumentów oraz przekazywanie niezbędnych informacji kontaktowych.',
                    'en' => 'Informing patients about the status of document shipments and providing necessary contact information.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9282,
                'name' => json_encode([
                    'pl' => 'Informowanie pacjentów o wymaganiach ubezpieczeniowych i procedurach związanych z refundacją usług.',
                    'en' => 'Informing patients about insurance requirements and procedures related to the reimbursement of services.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9283,
                'name' => json_encode([
                    'pl' => 'Weryfikacja uprawnień pacjentów do korzystania z usług refundowanych przez ubezpieczycieli.',
                    'en' => 'Verifying patients\' eligibility to use services reimbursed by insurers.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9284,
                'name' => json_encode([
                    'pl' => 'Współpraca z działem finansowym i ubezpieczycielami w zakresie rozliczeń usług medycznych.',
                    'en' => 'Cooperating with the financial department and insurers regarding the settlement of medical services.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9285,
                'name' => json_encode([
                    'pl' => 'Ustalanie harmonogramu pracy lekarzy oraz jego aktualizacja w systemie rejestracyjnym.',
                    'en' => 'Establishing the work schedule for doctors and updating it in the registration system.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9286,
                'name' => json_encode([
                    'pl' => 'Koordynacja terminów wizyt, tak aby zapewnić równomierne obciążenie lekarzy i personelu medycznego.',
                    'en' => 'Coordinating appointment dates to ensure an even workload for doctors and medical staff.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9287,
                'name' => json_encode([
                    'pl' => 'Informowanie lekarzy o aktualizacjach ich grafików oraz wprowadzaniu ewentualnych zmian.',
                    'en' => 'Informing doctors about updates to their schedules and implementing any changes.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9288,
                'name' => json_encode([
                    'pl' => 'Zapewnienie sprawnego funkcjonowania recepcji poprzez odpowiednie planowanie zadań i terminów wizyt.',
                    'en' => 'Ensuring the smooth operation of the reception by appropriately planning tasks and appointment dates.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9289,
                'name' => json_encode([
                    'pl' => 'Dbanie o porządek w recepcji oraz estetykę przestrzeni, aby była przyjazna dla pacjentów.',
                    'en' => 'Maintaining order at the reception and the aesthetic of the space to be patient-friendly.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9290,
                'name' => json_encode([
                    'pl' => 'Monitorowanie pracy recepcji oraz zgłaszanie ewentualnych potrzeb kadrowych lub materiałowych do kierownictwa.',
                    'en' => 'Monitoring the reception\'s work and reporting any staffing or material needs to management.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9291,
                'name' => json_encode([
                    'pl' => 'Przyjmowanie i rozpatrywanie reklamacji pacjentów dotyczących świadczonych usług medycznych.',
                    'en' => 'Receiving and addressing patient complaints regarding provided medical services.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9292,
                'name' => json_encode([
                    'pl' => 'Rozwiązywanie problemów pacjentów i udzielanie wyjaśnień w sytuacjach konfliktowych.',
                    'en' => 'Resolving patient issues and providing explanations in conflict situations.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9293,
                'name' => json_encode([
                    'pl' => 'Informowanie kierownictwa o trudnych sytuacjach i reklamacjach wymagających interwencji.',
                    'en' => 'Informing management about difficult situations and complaints requiring intervention.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9294,
                'name' => json_encode([
                    'pl' => 'Organizowanie transportu medycznego dla pacjentów wymagających przewozu do innych placówek.',
                    'en' => 'Organizing medical transport for patients requiring transport to other facilities.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9295,
                'name' => json_encode([
                    'pl' => 'Ustalanie szczegółów transportu i informowanie pacjentów o planowanych godzinach wyjazdu.',
                    'en' => 'Determining transport details and informing patients about planned departure times.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9296,
                'name' => json_encode([
                    'pl' => 'Współpraca z firmami transportowymi oraz monitorowanie, czy transport przebiega zgodnie z planem.',
                    'en' => 'Cooperating with transport companies and monitoring whether the transport is proceeding as planned.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9297,
                'name' => json_encode([
                    'pl' => 'Regularne uczestnictwo w szkoleniach dotyczących obsługi pacjenta, systemów medycznych oraz procedur.',
                    'en' => 'Regularly participating in training related to patient service, medical systems, and procedures.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9298,
                'name' => json_encode([
                    'pl' => 'Aktualizowanie wiedzy o przepisach ochrony danych osobowych i nowych standardach obsługi medycznej.',
                    'en' => 'Updating knowledge about data protection regulations and new standards in medical service.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9299,
                'name' => json_encode([
                    'pl' => 'Rozwijanie umiejętności komunikacyjnych i organizacyjnych, aby lepiej odpowiadać na potrzeby pacjentów.',
                    'en' => 'Developing communication and organizational skills to better meet patients\' needs.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9300,
                'name' => json_encode([
                    'pl' => 'Udzielanie pacjentom informacji o dostępnych promocjach oraz nowych usługach medycznych.',
                    'en' => 'Providing patients with information about available promotions and new medical services.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9301,
                'name' => json_encode([
                    'pl' => 'Przekazywanie materiałów informacyjnych i ulotek dotyczących kampanii profilaktycznych.',
                    'en' => 'Distributing informational materials and brochures regarding preventive campaigns.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9302,
                'name' => json_encode([
                    'pl' => 'Współpraca z działem marketingu w zakresie aktualizacji materiałów promocyjnych na recepcji.',
                    'en' => 'Cooperating with the marketing department to update promotional materials at the reception.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9303,
                'name' => json_encode([
                    'pl' => 'Znajomość procedur bezpieczeństwa i ewakuacji obowiązujących w placówce.',
                    'en' => 'Familiarity with safety and evacuation procedures in the facility.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9304,
                'name' => json_encode([
                    'pl' => 'Informowanie pacjentów o zasadach higieny i bezpieczeństwa w placówce medycznej.',
                    'en' => 'Informing patients about hygiene and safety rules in the medical facility.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9305,
                'name' => json_encode([
                    'pl' => 'Zgłaszanie potencjalnych zagrożeń w zakresie BHP oraz dbanie o przestrzeganie zasad higieny w recepcji.',
                    'en' => 'Reporting potential hazards in terms of occupational health and safety and ensuring compliance with hygiene standards at the reception.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ]
        ];
        $POZOSTALI_RECEPCJONISCI = [
            [
                'id' => 9306,
                'name' => json_encode([
                    'pl' => 'Witanie i udzielanie podstawowych informacji gościom oraz kierowanie ich do odpowiednich działów lub pracowników.',
                    'en' => 'Greeting and providing basic information to guests, directing them to the appropriate departments or staff.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9307,
                'name' => json_encode([
                    'pl' => 'Weryfikacja tożsamości osób odwiedzających oraz rejestrowanie ich w systemie.',
                    'en' => 'Verifying the identity of visitors and registering them in the system.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9308,
                'name' => json_encode([
                    'pl' => 'Przekazywanie identyfikatorów lub przepustek oraz informowanie o zasadach poruszania się po obiekcie.',
                    'en' => 'Issuing badges or passes and informing about the rules of movement within the premises.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9309,
                'name' => json_encode([
                    'pl' => 'Obsługa centrali telefonicznej, odbieranie telefonów oraz przekierowywanie połączeń do odpowiednich osób.',
                    'en' => 'Operating the phone switchboard, answering calls, and redirecting calls to the appropriate persons.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9310,
                'name' => json_encode([
                    'pl' => 'Udzielanie informacji telefonicznych na temat działalności organizacji, godzin pracy oraz usług.',
                    'en' => 'Providing telephone information about the organization\'s activities, working hours, and services.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9311,
                'name' => json_encode([
                    'pl' => 'Rejestrowanie wiadomości telefonicznych i przekazywanie ich do odpowiednich pracowników.',
                    'en' => 'Recording telephone messages and forwarding them to the appropriate employees.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9312,
                'name' => json_encode([
                    'pl' => 'Przyjmowanie, segregowanie i dystrybucja poczty oraz przesyłek kurierskich przychodzących do organizacji.',
                    'en' => 'Receiving, sorting, and distributing mail and courier deliveries to the organization.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9313,
                'name' => json_encode([
                    'pl' => 'Przygotowywanie przesyłek wychodzących oraz obsługa korespondencji.',
                    'en' => 'Preparing outgoing shipments and handling correspondence.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9314,
                'name' => json_encode([
                    'pl' => 'Prowadzenie rejestru korespondencji i przesyłek oraz ich archiwizacja zgodnie z wewnętrznymi procedurami.',
                    'en' => 'Maintaining a record of correspondence and deliveries and archiving them according to internal procedures.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9315,
                'name' => json_encode([
                    'pl' => 'Zarządzanie rezerwacjami sal konferencyjnych na potrzeby spotkań wewnętrznych i zewnętrznych.',
                    'en' => 'Managing conference room bookings for internal and external meetings.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9316,
                'name' => json_encode([
                    'pl' => 'Przygotowywanie sal, w tym dbanie o dostępność sprzętu, materiałów biurowych oraz napojów.',
                    'en' => 'Preparing rooms, ensuring availability of equipment, office supplies, and refreshments.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9317,
                'name' => json_encode([
                    'pl' => 'Informowanie uczestników spotkań o harmonogramie oraz przypominanie o rezerwacjach.',
                    'en' => 'Informing meeting participants about the schedule and reminding them of reservations.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9318,
                'name' => json_encode([
                    'pl' => 'Prowadzenie i archiwizacja dokumentacji biurowej, w tym ewidencji gości, faktur, listów i przesyłek.',
                    'en' => 'Maintaining and archiving office documentation, including guest registers, invoices, letters, and parcels.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9319,
                'name' => json_encode([
                    'pl' => 'Organizowanie dokumentów zgodnie z zasadami ochrony danych osobowych i polityką firmy.',
                    'en' => 'Organizing documents according to personal data protection regulations and company policy.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9320,
                'name' => json_encode([
                    'pl' => 'Współpraca z działem administracyjnym w zakresie zarządzania dokumentacją i rejestrami.',
                    'en' => 'Cooperating with the administrative department in managing documentation and registers.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9321,
                'name' => json_encode([
                    'pl' => 'Monitorowanie zapasów materiałów biurowych, takich jak papier, długopisy, tonery, oraz składanie zamówień.',
                    'en' => 'Monitoring stock of office supplies such as paper, pens, toners, and placing orders.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9322,
                'name' => json_encode([
                    'pl' => 'Prowadzenie rejestru zamówień i wydatków związanych z materiałami biurowymi.',
                    'en' => 'Keeping a record of orders and expenses related to office supplies.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9323,
                'name' => json_encode([
                    'pl' => 'Przechowywanie materiałów biurowych i dbanie o ich dostępność dla pracowników.',
                    'en' => 'Storing office supplies and ensuring their availability for employees.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9324,
                'name' => json_encode([
                    'pl' => 'Prowadzenie kalendarza spotkań i harmonogramu dla przełożonych oraz informowanie pracowników o zbliżających się wydarzeniach.',
                    'en' => 'Maintaining the meeting calendar and schedule for superiors and informing employees about upcoming events.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9325,
                'name' => json_encode([
                    'pl' => 'Koordynacja wizyt i spotkań zewnętrznych, takich jak spotkania z klientami, partnerami i interesantami.',
                    'en' => 'Coordinating external visits and meetings, such as meetings with clients, partners, and stakeholders.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9326,
                'name' => json_encode([
                    'pl' => 'Przypominanie o zaplanowanych spotkaniach i udostępnianie niezbędnych informacji organizacyjnych.',
                    'en' => 'Reminding about scheduled meetings and providing necessary organizational information.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9327,
                'name' => json_encode([
                    'pl' => 'Rezerwacja biletów lotniczych, kolejowych oraz hoteli dla pracowników udających się w podróże służbowe.',
                    'en' => 'Booking flight, train tickets, and hotels for employees going on business trips.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9328,
                'name' => json_encode([
                    'pl' => 'Przygotowywanie dokumentacji podróży oraz dbanie o logistykę wyjazdów.',
                    'en' => 'Preparing travel documentation and ensuring travel logistics.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9329,
                'name' => json_encode([
                    'pl' => 'Współpraca z działem finansowym w zakresie rozliczeń delegacji i wydatków służbowych.',
                    'en' => 'Cooperating with the finance department in settling travel expenses and business expenditures.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9330,
                'name' => json_encode([
                    'pl' => 'Przyjmowanie płatności za usługi organizacji (np. w recepcjach obiektów sportowych, placówkach medycznych).',
                    'en' => 'Accepting payments for the organization\'s services (e.g., at sports facilities, medical institutions).'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9331,
                'name' => json_encode([
                    'pl' => 'Wystawianie rachunków i faktur oraz ich rozliczanie zgodnie z procedurami finansowymi.',
                    'en' => 'Issuing invoices and receipts and settling them according to financial procedures.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9332,
                'name' => json_encode([
                    'pl' => 'Informowanie interesantów o kosztach usług i dostępnych metodach płatności.',
                    'en' => 'Informing clients about service costs and available payment methods.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9333,
                'name' => json_encode([
                    'pl' => 'Odpowiadanie na pytania interesantów dotyczące oferty, godzin otwarcia, regulaminu obiektu i dostępnych usług.',
                    'en' => 'Answering inquiries from clients regarding the offer, opening hours, regulations, and available services.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9334,
                'name' => json_encode([
                    'pl' => 'Informowanie klientów o nowych usługach, promocjach oraz zasadach korzystania z oferty organizacji.',
                    'en' => 'Informing clients about new services, promotions, and rules for using the organization\'s offerings.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9335,
                'name' => json_encode([
                    'pl' => 'Przekazywanie informacji o wydarzeniach, szkoleniach, konferencjach lub kursach organizowanych w firmie.',
                    'en' => 'Conveying information about events, training sessions, conferences, or courses organized by the company.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9336,
                'name' => json_encode([
                    'pl' => 'Przygotowywanie broszur, ulotek i materiałów promocyjnych dostępnych w recepcji.',
                    'en' => 'Preparing brochures, leaflets, and promotional materials available at the reception.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9337,
                'name' => json_encode([
                    'pl' => 'Utrzymywanie aktualnych materiałów informacyjnych i przekazywanie ich interesantom.',
                    'en' => 'Maintaining up-to-date informational materials and providing them to visitors.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9338,
                'name' => json_encode([
                    'pl' => 'Współpraca z działem marketingu przy organizacji materiałów promocyjnych i informacyjnych.',
                    'en' => 'Collaborating with the marketing department in organizing promotional and informational materials.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9339,
                'name' => json_encode([
                    'pl' => 'Utrzymanie w dobrym stanie sprzętu biurowego, np. drukarek, skanerów, faksów oraz rozwiązywanie drobnych problemów technicznych.',
                    'en' => 'Maintaining office equipment, such as printers, scanners, faxes, and resolving minor technical issues.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9340,
                'name' => json_encode([
                    'pl' => 'Zgłaszanie usterek do działu IT lub serwisu oraz współpraca przy ich usuwaniu.',
                    'en' => 'Reporting malfunctions to the IT department or service and cooperating in their resolution.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9341,
                'name' => json_encode([
                    'pl' => 'Obsługa systemu telefonicznego oraz programów biurowych.',
                    'en' => 'Handling the telephone system and office software.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9342,
                'name' => json_encode([
                    'pl' => 'Wydawanie przepustek i identyfikatorów gościom oraz ich odbiór po zakończonej wizycie.',
                    'en' => 'Issuing passes and identification badges to guests and collecting them after their visit.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9343,
                'name' => json_encode([
                    'pl' => 'Ewidencjonowanie wydawanych przepustek oraz monitorowanie dostępu do budynku.',
                    'en' => 'Recording issued passes and monitoring access to the building.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9344,
                'name' => json_encode([
                    'pl' => 'Zapewnienie zgodności procedur bezpieczeństwa i zasad poruszania się po obiekcie.',
                    'en' => 'Ensuring compliance with security procedures and rules for moving around the premises.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9345,
                'name' => json_encode([
                    'pl' => 'Pomoc przy organizacji wewnętrznych wydarzeń, takich jak spotkania integracyjne, szkolenia czy konferencje.',
                    'en' => 'Assisting in the organization of internal events such as team-building meetings, training sessions, or conferences.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9346,
                'name' => json_encode([
                    'pl' => 'Przygotowywanie materiałów oraz dbanie o logistykę wydarzeń, np. zapewnienie cateringu, sprzętu.',
                    'en' => 'Preparing materials and ensuring the logistics of events, such as providing catering and equipment.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9347,
                'name' => json_encode([
                    'pl' => 'Obsługa gości podczas wydarzeń i dbanie o ich komfort.',
                    'en' => 'Serving guests during events and ensuring their comfort.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9348,
                'name' => json_encode([
                    'pl' => 'Dbanie o ochronę danych osobowych w dokumentacji i systemach recepcji.',
                    'en' => 'Ensuring the protection of personal data in documentation and reception systems.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9349,
                'name' => json_encode([
                    'pl' => 'Informowanie gości o zasadach przetwarzania danych i zabezpieczanie danych przed dostępem osób nieupoważnionych.',
                    'en' => 'Informing guests about data processing rules and securing data against unauthorized access.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9350,
                'name' => json_encode([
                    'pl' => 'Przechowywanie i archiwizacja dokumentów zgodnie z zasadami ochrony danych.',
                    'en' => 'Storing and archiving documents in accordance with data protection principles.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9351,
                'name' => json_encode([
                    'pl' => 'Znajomość i przestrzeganie zasad bezpieczeństwa i ewakuacji obowiązujących w organizacji.',
                    'en' => 'Knowledge and adherence to safety and evacuation procedures in the organization.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9352,
                'name' => json_encode([
                    'pl' => 'Informowanie gości o procedurach bezpieczeństwa oraz zapewnienie, że znają drogi ewakuacyjne.',
                    'en' => 'Informing guests about safety procedures and ensuring they know the evacuation routes.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9353,
                'name' => json_encode([
                    'pl' => 'Współpraca z ochroną oraz służbami bezpieczeństwa w sytuacjach awaryjnych.',
                    'en' => 'Cooperating with security and safety services in emergency situations.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9354,
                'name' => json_encode([
                    'pl' => 'Sporządzanie raportów dotyczących liczby gości, odwiedzin, przesyłek, rozmów telefonicznych itp.',
                    'en' => 'Compiling reports on the number of guests, visits, deliveries, phone calls, etc.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9355,
                'name' => json_encode([
                    'pl' => 'Przygotowywanie zestawień dotyczących wykorzystania sal konferencyjnych oraz innych zasobów.',
                    'en' => 'Preparing summaries on the utilization of conference rooms and other resources.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9356,
                'name' => json_encode([
                    'pl' => 'Przekazywanie raportów kierownictwu oraz informowanie o ewentualnych problemach wymagających interwencji.',
                    'en' => 'Providing reports to management and informing about any issues requiring intervention.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9357,
                'name' => json_encode([
                    'pl' => 'Współpraca z działem administracyjnym, HR, IT oraz innymi zespołami w codziennych zadaniach.',
                    'en' => 'Collaborating with the administrative department, HR, IT, and other teams in daily tasks.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9358,
                'name' => json_encode([
                    'pl' => 'Pomoc w organizacji i zarządzaniu dokumentacją oraz komunikacja z pracownikami innych działów.',
                    'en' => 'Assisting in organizing and managing documentation and communicating with employees from other departments.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9359,
                'name' => json_encode([
                    'pl' => 'Informowanie pracowników o nowych procedurach i regulaminach obowiązujących w organizacji.',
                    'en' => 'Informing employees about new procedures and regulations in the organization.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9360,
                'name' => json_encode([
                    'pl' => 'Utrzymywanie recepcji w czystości i porządku, dbanie o estetykę przestrzeni recepcyjnej.',
                    'en' => 'Keeping the reception clean and orderly, ensuring the aesthetic appeal of the reception area.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9361,
                'name' => json_encode([
                    'pl' => 'Organizowanie materiałów informacyjnych i promocyjnych w sposób atrakcyjny dla interesantów.',
                    'en' => 'Organizing informational and promotional materials in an attractive manner for visitors.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9362,
                'name' => json_encode([
                    'pl' => 'Informowanie działu sprzątającego o konieczności dodatkowych prac porządkowych.',
                    'en' => 'Informing the cleaning department about the need for additional cleaning tasks.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9363,
                'name' => json_encode([
                    'pl' => 'Regularne uczestnictwo w szkoleniach dotyczących obsługi klienta, ochrony danych osobowych, systemów biurowych.',
                    'en' => 'Regular participation in training sessions related to customer service, personal data protection, and office systems.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9364,
                'name' => json_encode([
                    'pl' => 'Aktualizowanie wiedzy na temat procedur i regulacji obowiązujących w firmie.',
                    'en' => 'Updating knowledge about procedures and regulations in the company.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9365,
                'name' => json_encode([
                    'pl' => 'Rozwijanie umiejętności komunikacyjnych i organizacyjnych, aby zapewnić wysoką jakość obsługi interesantów.',
                    'en' => 'Developing communication and organizational skills to ensure high-quality service for visitors.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
        ];


        DB::table('detail_projects')->insert(array_merge(
            $PRACOWNIK_DO_SPRAW_EWIDENCJI_LUDNOŚCI,
            $PRACOWNIK_BIUROWY,
            $TECHNIK_PRAC_BIUROWYCH,
            $POZOSTALI_PRACOWNICY_OBSŁUGI_BIUROWEJ,
            $PRACOWNIK_KANCELARII_TAJNEJ,
            $ASYSTENT_PRZETWARZANIA_DANYCH,
            $POZOSTAŁY_ŚREDNI_PERSONEL_DO_SPRAW_STATYSTYKI_I_DZIEDZIN_POKREWNYCH,
            $ASYSTENT_DO_SPRAW_STATYSTYKI,
            $TECHNIK_ADMINISTRACJI,
            $STENOGRAF_PROTOKOLANT,
            $POZOSTALI_PRACOWNICY_ADMINISTRACYJNI_SEKRETARZE_BIURA_ZARZĄDU,
            $SEKRETARKA_MEDYCZNA,
            $POZOSTALI_SEKRETARZE_MEDYCZNI_I_POKREWNI,
            $SEKRETARZ_SĄDOWY,
            $POZOSTAŁY_ŚREDNI_PERSONEL_Z_DZIEDZINY_PRAWA_POKREWNY,
            $OPERATORZY_WPROWADZANIA_DANYCH,
            $PRACOWNIK_DO_SPRAW_STATYSTYKI,
            $PRACOWNIK_W_BIURZE_MAKLERSKIM,
            $POZOSTALI_PRACOWNICY_DO_SPRAW_STATYSTYKI_FINANSÓW_UBEZPIECZEŃ,
            $KODOWACZ_KODER,
            $ASYSTENT_DO_SPRAW_WYDAWNICZYCH,
            $POZOSTALI_PRACOWNICY_OBSŁUGI_BIURA_GDZIE_INDZIEJ_NIESKLASYFIKOWANI,
            $OPERATOR_EDYTORÓW_TEKSTU,
            $POZOSTALI_OPERATORZY_EDYTORÓW_TEKSTU,
            $obowiazki_recepcjonisty,
            $PRACOWNIK_BIURA_PRZEPUSTEK,
            $RECEPCJONISTA,
            $REJESTRATORKA_MEDYCZNA,
            $POZOSTALI_RECEPCJONISCI
            ));

        Category::whereId('254')->first()->detailprojects()->attach(collect($PRACOWNIK_DO_SPRAW_EWIDENCJI_LUDNOŚCI)->pluck('id')->toArray());
        Category::whereId('255')->first()->detailprojects()->attach(collect($PRACOWNIK_BIUROWY)->pluck('id')->toArray());
        Category::whereId('256')->first()->detailprojects()->attach(collect($TECHNIK_PRAC_BIUROWYCH)->pluck('id')->toArray());
        Category::whereId('257')->first()->detailprojects()->attach(collect($POZOSTALI_PRACOWNICY_OBSŁUGI_BIUROWEJ)->pluck('id')->toArray());
        Category::whereId('258')->first()->detailprojects()->attach(collect($PRACOWNIK_KANCELARII_TAJNEJ)->pluck('id')->toArray());
        Category::whereId('260')->first()->detailprojects()->attach(collect($ASYSTENT_PRZETWARZANIA_DANYCH)->pluck('id')->toArray());
        Category::whereId('261')->first()->detailprojects()->attach(collect($POZOSTAŁY_ŚREDNI_PERSONEL_DO_SPRAW_STATYSTYKI_I_DZIEDZIN_POKREWNYCH)->pluck('id')->toArray());
        Category::whereId('259')->first()->detailprojects()->attach(collect($ASYSTENT_DO_SPRAW_STATYSTYKI)->pluck('id')->toArray());
        Category::whereId('262')->first()->detailprojects()->attach(collect($TECHNIK_ADMINISTRACJI)->pluck('id')->toArray());
        Category::whereId('263')->first()->detailprojects()->attach(collect($STENOGRAF_PROTOKOLANT)->pluck('id')->toArray());
        Category::whereId('264')->first()->detailprojects()->attach(collect($POZOSTALI_PRACOWNICY_ADMINISTRACYJNI_SEKRETARZE_BIURA_ZARZĄDU)->pluck('id')->toArray());
        Category::whereId('265')->first()->detailprojects()->attach(collect($SEKRETARKA_MEDYCZNA)->pluck('id')->toArray());
        Category::whereId('266')->first()->detailprojects()->attach(collect($POZOSTALI_SEKRETARZE_MEDYCZNI_I_POKREWNI)->pluck('id')->toArray());
        Category::whereId('267')->first()->detailprojects()->attach(collect($SEKRETARZ_SĄDOWY)->pluck('id')->toArray());
        Category::whereId('268')->first()->detailprojects()->attach(collect($POZOSTAŁY_ŚREDNI_PERSONEL_Z_DZIEDZINY_PRAWA_POKREWNY)->pluck('id')->toArray());
        Category::whereId('269')->first()->detailprojects()->attach(collect($OPERATORZY_WPROWADZANIA_DANYCH)->pluck('id')->toArray());
        Category::whereId('270')->first()->detailprojects()->attach(collect($PRACOWNIK_DO_SPRAW_STATYSTYKI)->pluck('id')->toArray());
        Category::whereId('271')->first()->detailprojects()->attach(collect($PRACOWNIK_W_BIURZE_MAKLERSKIM)->pluck('id')->toArray());
        Category::whereId('272')->first()->detailprojects()->attach(collect($POZOSTALI_PRACOWNICY_DO_SPRAW_STATYSTYKI_FINANSÓW_UBEZPIECZEŃ)->pluck('id')->toArray());
        Category::whereId('273')->first()->detailprojects()->attach(collect($KODOWACZ_KODER)->pluck('id')->toArray());
        Category::whereId('275')->first()->detailprojects()->attach(collect($ASYSTENT_DO_SPRAW_WYDAWNICZYCH)->pluck('id')->toArray());
        Category::whereId('276')->first()->detailprojects()->attach(collect($POZOSTALI_PRACOWNICY_OBSŁUGI_BIURA_GDZIE_INDZIEJ_NIESKLASYFIKOWANI)->pluck('id')->toArray());
        Category::whereId('277')->first()->detailprojects()->attach(collect($OPERATOR_EDYTORÓW_TEKSTU)->pluck('id')->toArray());
        Category::whereId('278')->first()->detailprojects()->attach(collect($POZOSTALI_OPERATORZY_EDYTORÓW_TEKSTU)->pluck('id')->toArray());
        Category::whereId('280')->first()->detailprojects()->attach(collect($obowiazki_recepcjonisty)->pluck('id')->toArray());
        Category::whereId('282')->first()->detailprojects()->attach(collect($PRACOWNIK_BIURA_PRZEPUSTEK)->pluck('id')->toArray());
        Category::whereId('283')->first()->detailprojects()->attach(collect($RECEPCJONISTA)->pluck('id')->toArray());
        Category::whereId('284')->first()->detailprojects()->attach(collect($REJESTRATORKA_MEDYCZNA)->pluck('id')->toArray());
        Category::whereId('285')->first()->detailprojects()->attach(collect($POZOSTALI_RECEPCJONISCI)->pluck('id')->toArray());
    }
}
