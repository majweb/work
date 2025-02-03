<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class TypeOfContractSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Schema::disableForeignKeyConstraints();

        DB::table('type_of_contracts')->truncate();

        $types = [
            [
                'id' => 1,
                'name' => json_encode([
                    'am' => 'የሥራ ውል', // Amharski
                    'ar' => 'عقد العمل', // Arabski
                    'az' => 'Əmək müqaviləsi', // Azerski
                    'be' => 'Працоўны дагавор', // Białoruski
                    'bg' => 'Трудов договор', // Bułgarski
                    'bn' => 'কর্মসংস্থান চুক্তি', // Bengalski
                    'bs' => 'Ugovor o radu', // Bośniacki
                    'ca' => 'Contracte laboral', // Kataloński
                    'cs' => 'Pracovní smlouva', // Czeski
                    'da' => 'Ansættelseskontrakt', // Duński
                    'de' => 'Arbeitsvertrag', // Niemiecki
                    'dv' => 'މައްކަދަކަށްދަންނަ ބޭއްވިދަނދަކީ', // Divehi
                    'dz' => 'ལས་ཀར་མཐུན་འབྲེལ།', // Dzongkha
                    'el' => 'Σύμβαση εργασίας', // Grecki
                    'en' => 'Employment contract', // Angielski
                    'es' => 'Contrato de trabajo', // Hiszpański
                    'et' => 'Tööleping', // Estoński
                    'fa' => 'قرارداد کار', // Perski
                    'fi' => 'Työsopimus', // Fiński
                    'fr' => 'Contrat de travail', // Francuski
                    'he' => 'חוזה עבודה', // Hebrajski
                    'hi' => 'रोजगार अनुबंध', // Hindi
                    'hr' => 'Ugovor o radu', // Chorwacki
                    'hu' => 'Munkaszerződés', // Węgierski
                    'hy' => 'Աշխատանքային պայմանագիր', // Ormiański
                    'id' => 'Kontrak kerja', // Indonezyjski
                    'is' => 'Atvinnusamningur', // Islandzki
                    'it' => 'Contratto di lavoro', // Włoski
                    'ja' => '雇用契約', // Japoński
                    'ka' => 'შრომის ხელშეკრულება', // Gruziński
                    'km' => 'កិច្ចសន្យាការងារ', // Khmerski
                    'ko' => '고용 계약', // Koreański
                    'lb' => 'Aarbechtsvertrag', // Luksemburski
                    'lo' => 'ສັນຍາຈ້າງວຽກ', // Laotański
                    'lt' => 'Darbo sutartis', // Litewski
                    'lv' => 'Darba līgums', // Łotewski
                    'me' => 'Ugovor o radu', // Czarnogórski
                    'mk' => 'Договор за вработување', // Macedoński
                    'mn' => 'Хөдөлмөрийн гэрээ', // Mongołski
                    'ms' => 'Kontrak pekerjaan', // Malajski
                    'my' => 'အလုပ်အမှုဆောင်စာချုပ်', // Birmański
                    'ne' => 'रोजगारी सम्झौता', // Nepalski
                    'nl' => 'Arbeidsovereenkomst', // Holenderski
                    'no' => 'Arbeidsavtale', // Norweski
                    'pl' => 'Umowa o pracę', // Polski
                    'ps' => 'د کار قرارداد', // Paszto
                    'pt' => 'Contrato de trabalho', // Portugalski
                    'ro' => 'Contract de muncă', // Rumuński
                    'ru' => 'Трудовой договор', // Rosyjski
                    'si' => 'රැකියා ගිවිසුම', // Syngaleski
                    'sk' => 'Pracovná zmluva', // Słowacki
                    'sl' => 'Pogodba o zaposlitvi', // Słoweński
                    'sq' => 'Kontratë pune', // Albański
                    'sr' => 'Уговор о раду', // Serbski
                    'sv' => 'Anställningsavtal', // Szwedzki
                    'tg' => 'Шартномаи меҳнатӣ', // Tadżycki
                    'th' => 'สัญญาการจ้างงาน', // Tajski
                    'tk' => 'Iş şertnamasy', // Turkmeński
                    'tr' => 'İş sözleşmesi', // Turecki
                    'uk' => 'Трудовий договір', // Ukraiński
                    'uz' => 'Mehnat shartnomasi', // Uzbecki
                    'vi' => 'Hợp đồng lao động', // Wietnamski
                    'zh' => '劳动合同' // Chiński
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],[
                'id' => 2,
                'name' => json_encode([
                    'am' => 'የግል እንቅስቃሴ ውል', // Amharski
                    'ar' => 'عقد المهمة', // Arabski
                    'az' => 'Tapşırıq müqaviləsi', // Azerski
                    'be' => 'Дагавор даручэння', // Białoruski
                    'bg' => 'Договор за поръчка', // Bułgarski
                    'bn' => 'আউটসোর্সিং চুক্তি', // Bengalski
                    'bs' => 'Ugovor o zadatku', // Bośniacki
                    'ca' => 'Contracte d’encàrrec', // Kataloński
                    'cs' => 'Dohoda o provedení práce', // Czeski
                    'da' => 'Opdragsaftale', // Duński
                    'de' => 'Dienstleistungsvertrag', // Niemiecki
                    'dv' => 'ދިސްޓްލީއާންސްވިސްޓްސްކްރަކްޓް', // Divehi
                    'dz' => 'མགོན་ཡོངས་བསྡུས་དོན་ཚུ', // Dzongkha
                    'el' => 'Σύμβαση εντολής', // Grecki
                    'en' => 'Contract of mandate', // Angielski
                    'es' => 'Contrato de mandato', // Hiszpański
                    'et' => 'Lepingu ülesanne', // Estoński
                    'fa' => 'قرارداد وظیفه', // Perski
                    'fi' => 'Mandaatinsopimus', // Fiński
                    'fr' => 'Contrat de mandat', // Francuski
                    'he' => 'חוזה משימה', // Hebrajski
                    'hi' => 'आदेश अनुबंध', // Hindi
                    'hr' => 'Ugovor o zadatku', // Chorwacki
                    'hu' => 'Munkaszerződés', // Węgierski
                    'hy' => 'Պատվերի պայմանագիր', // Ormiański
                    'id' => 'Kontrak mandat', // Indonezyjski
                    'is' => 'Samningsskuldbinding', // Islandzki
                    'it' => 'Contratto di mandato', // Włoski
                    'ja' => '委託契約', // Japoński
                    'ka' => 'მანდატის კონტრაქტი', // Gruziński
                    'km' => 'កិច្ចសន្យាប្រគល់ភារកិច្ច', // Khmerski
                    'ko' => '위임 계약', // Koreański
                    'lb' => 'Optragvertrag', // Luksemburski
                    'lo' => 'ສັນຍາພະຍຸດສັງຂະ', // Laotański
                    'lt' => 'Įgaliojimo sutartis', // Litewski
                    'lv' => 'Pilnvarojuma līgums', // Łotewski
                    'me' => 'Ugovor o zadatku', // Czarnogórski
                    'mk' => 'Договор за мандат', // Macedoński
                    'mn' => 'Мандатын гэрээ', // Mongołski
                    'ms' => 'Kontrak mandat', // Malajski
                    'my' => 'အမိန့်စာချုပ်', // Birmański
                    'ne' => 'आदेश सम्झौता', // Nepalski
                    'nl' => 'Mandaatcontract', // Holenderski
                    'no' => 'Mandatkontrakt', // Norweski
                    'pl' => 'Umowa zlecenie', // Polski
                    'ps' => 'دنده تړون', // Paszto
                    'pt' => 'Contrato de mandato', // Portugalski
                    'ro' => 'Contract de mandat', // Rumuński
                    'ru' => 'Договор поручения', // Rosyjski
                    'si' => 'මෙහෙවර ගිවිසුම', // Syngaleski
                    'sk' => 'Mandátna zmluva', // Słowacki
                    'sl' => 'Pogodba o nalogi', // Słoweński
                    'sq' => 'Kontratë mandati', // Albański
                    'sr' => 'Уговор о налогу', // Serbski
                    'sv' => 'Uppdragsavtal', // Szwedzki
                    'tg' => 'Шартномаи супориш', // Tadżycki
                    'th' => 'สัญญาว่าจ้าง', // Tajski
                    'tk' => 'Tabşyryk şertnamasy', // Turkmeński
                    'tr' => 'Görev sözleşmesi', // Turecki
                    'uk' => 'Договір доручення', // Ukraiński
                    'uz' => 'Vakolatnoma shartnomasi', // Uzbecki
                    'vi' => 'Hợp đồng ủy nhiệm', // Wietnamski
                    'zh' => '委托合同' // Chiński
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],[
                'id' => 3,
                'name' => json_encode([
                    'pl' => 'Umowa o dzieło',
                    'am' => 'የሥራ ፈጣሪነት ውል', // Amharski
                    'ar' => 'عقد العمل المحدد', // Arabski
                    'az' => 'Əsər müqaviləsi', // Azerski
                    'be' => 'Дагавор на выкананне працы', // Białoruski
                    'bg' => 'Договор за изработка', // Bułgarski
                    'bn' => 'কর্ম সম্পাদন চুক্তি', // Bengalski
                    'bs' => 'Ugovor o djelu', // Bośniacki
                    'ca' => 'Contracte d’obra', // Kataloński
                    'cs' => 'Smlouva o dílo', // Czeski
                    'da' => 'Aftale om arbejde', // Duński
                    'de' => 'Werkvertrag', // Niemiecki
                    'dv' => 'ހައްތަށްގައިވިއްތަށް އެހީއްތަށް ބޭއްވިދަންނަ', // Divehi
                    'dz' => 'མི་མཐུན་ཚིག་དོན་མཁོ་རྒྱུ་སྲིད།', // Dzongkha
                    'el' => 'Σύμβαση έργου', // Grecki
                    'en' => 'Contract for specific work', // Angielski
                    'es' => 'Contrato por obra', // Hiszpański
                    'et' => 'Tööleping kindla töö jaoks', // Estoński
                    'fa' => 'قرارداد کار معین', // Perski
                    'fi' => 'Työsopimus tiettyä työtä varten', // Fiński
                    'fr' => 'Contrat d’ouvrage', // Francuski
                    'he' => 'חוזה עבודה עבור יצירה', // Hebrajski
                    'hi' => 'विशिष्ट कार्य अनुबंध', // Hindi
                    'hr' => 'Ugovor o djelu', // Chorwacki
                    'hu' => 'Műszerződés', // Węgierski
                    'hy' => 'Աշխատանքի պայմանագիր ստեղծագործության համար', // Ormiański
                    'id' => 'Kontrak kerja untuk pekerjaan tertentu', // Indonezyjski
                    'is' => 'Verksamningarsamningur', // Islandzki
                    'it' => 'Contratto d’opera', // Włoski
                    'ja' => '特定の仕事の契約', // Japoński
                    'ka' => 'შეკვეთის ხელშეკრულება', // Gruziński
                    'km' => 'កិច្ចសន្យាសម្រាប់ស្នាដៃជាក់លាក់', // Khmerski
                    'ko' => '특정 작업 계약', // Koreański
                    'lb' => 'Vertrag fir e spezifescht Wierk', // Luksemburski
                    'lo' => 'ສັນຍາສໍາລັບວຽກສ້າງສັນພິເສດ', // Laotański
                    'lt' => 'Sutartis dėl konkretaus darbo', // Litewski
                    'lv' => 'Līgums par konkrētu darbu', // Łotewski
                    'me' => 'Ugovor o djelu', // Czarnogórski
                    'mk' => 'Договор за дело', // Macedoński
                    'mn' => 'Онцгой ажлын гэрээ', // Mongołski
                    'ms' => 'Kontrak kerja untuk kerja tertentu', // Malajski
                    'my' => 'အတိအကျလုပ်ငန်းများအတွက်စာချုပ်', // Birmański
                    'ne' => 'विशिष्ट कामका लागि सम्झौता', // Nepalski
                    'nl' => 'Overeenkomst voor specifiek werk', // Holenderski
                    'no' => 'Kontrakt for spesifikt arbeid', // Norweski
                    'pl' => 'Umowa o dzieło', // Polski
                    'ps' => 'د ځانګړي کار لپاره تړون', // Paszto
                    'pt' => 'Contrato por obra certa', // Portugalski
                    'ro' => 'Contract de prestări servicii', // Rumuński
                    'ru' => 'Договор на выполнение работы', // Rosyjski
                    'si' => 'විශේෂිත කටයුත්තක් සඳහා ගිවිසුම', // Syngaleski
                    'sk' => 'Zmluva o diele', // Słowacki
                    'sl' => 'Pogodba za delo', // Słoweński
                    'sq' => 'Kontratë pune për vepër specifike', // Albański
                    'sr' => 'Уговор о делу', // Serbski
                    'sv' => 'Avtal om specifikt arbete', // Szwedzki
                    'tg' => 'Шартномаи барои кори мушаххас', // Tadżycki
                    'th' => 'สัญญาการทำงานเฉพาะ', // Tajski
                    'tk' => 'Belli iş şertnamasy', // Turkmeński
                    'tr' => 'Belirli bir iş için sözleşme', // Turecki
                    'uk' => 'Договір на виконання робіт', // Ukraiński
                    'uz' => 'Muayyan ish uchun shartnoma', // Uzbecki
                    'vi' => 'Hợp đồng lao động cho công việc cụ thể', // Wietnamski
                    'zh' => '特定工作的合同' // Chiński
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 4,
                'name' => json_encode([
                    'am' => 'ንግድ ወደ ንግድ (B2B)', // Amharski
                    'ar' => 'الأعمال التجارية بين الشركات (B2B)', // Arabski
                    'az' => 'Biznesdən biznesə (B2B)', // Azerski
                    'be' => 'Бізнес для бізнесу (B2B)', // Białoruski
                    'bg' => 'Бизнес към бизнес (B2B)', // Bułgarski
                    'bn' => 'বিজনেস টু বিজনেস (B2B)', // Bengalski
                    'bs' => 'Posao prema poslu (B2B)', // Bośniacki
                    'ca' => 'Negoci a negoci (B2B)', // Kataloński
                    'cs' => 'Obchod mezi firmami (B2B)', // Czeski
                    'da' => 'Forretning til forretning (B2B)', // Duński
                    'de' => 'Geschäft zu Geschäft (B2B)', // Niemiecki
                    'dv' => 'ބައިޒެންސް ދައްކަން ބައިޒެން (B2B)', // Divehi
                    'dz' => 'ཚོང་ལས་ལས་ཀའི་གནས་ཚུ (B2B)', // Dzongkha
                    'el' => 'Επιχείρηση προς επιχείρηση (B2B)', // Grecki
                    'en' => 'Business-to-Business (B2B)', // Angielski
                    'es' => 'Negocio a negocio (B2B)', // Hiszpański
                    'et' => 'Ettevõttelt ettevõttele (B2B)', // Estoński
                    'fa' => 'کسب و کار به کسب و کار (B2B)', // Perski
                    'fi' => 'Yritykseltä yritykselle (B2B)', // Fiński
                    'fr' => 'Entreprise à entreprise (B2B)', // Francuski
                    'he' => 'עסק לעסק (B2B)', // Hebrajski
                    'hi' => 'बिजनेस टू बिजनेस (B2B)', // Hindi
                    'hr' => 'Poslovanje s poslovanjem (B2B)', // Chorwacki
                    'hu' => 'Üzlet üzlethez (B2B)', // Węgierski
                    'hy' => 'Բիզնեսից բիզնես (B2B)', // Ormiański
                    'id' => 'Bisnis ke bisnis (B2B)', // Indonezyjski
                    'is' => 'Fyrirtæki til fyrirtækja (B2B)', // Islandzki
                    'it' => 'Business-to-Business (B2B)', // Włoski
                    'ja' => '企業間取引 (B2B)', // Japoński
                    'ka' => 'ბიზნესი ბიზნესთან (B2B)', // Gruziński
                    'km' => 'អាជីវកម្មទៅអាជីវកម្ម (B2B)', // Khmerski
                    'ko' => '기업 간 거래 (B2B)', // Koreański
                    'lb' => 'Geschäft zu Geschäft (B2B)', // Luksemburski
                    'lo' => 'ທຸລະກິດຕໍ່ທຸລະກິດ (B2B)', // Laotański
                    'lt' => 'Verslas verslui (B2B)', // Litewski
                    'lv' => 'Uzņēmums uzņēmumam (B2B)', // Łotewski
                    'me' => 'Posao sa poslom (B2B)', // Czarnogórski
                    'mk' => 'Бизнис со бизнис (B2B)', // Macedoński
                    'mn' => 'Бизнесээс бизнес рүү (B2B)', // Mongołski
                    'ms' => 'Perniagaan ke perniagaan (B2B)', // Malajski
                    'my' => 'စီးပွားရေးမှစီးပွားရေး (B2B)', // Birmański
                    'ne' => 'व्यापारदेखि व्यापार (B2B)', // Nepalski
                    'nl' => 'Business-to-Business (B2B)', // Holenderski
                    'no' => 'Forretning til forretning (B2B)', // Norweski
                    'pl' => 'B2B (Business-to-Business)', // Polski
                    'ps' => 'له سوداګرۍ څخه سوداګرۍ (B2B)', // Paszto
                    'pt' => 'Negócio para negócio (B2B)', // Portugalski
                    'ro' => 'Afacere către afacere (B2B)', // Rumuński
                    'ru' => 'Бизнес для бизнеса (B2B)', // Rosyjski
                    'si' => 'ව්‍යාපාරය වෙත ව්‍යාපාරය (B2B)', // Syngaleski
                    'sk' => 'Biznis pre biznis (B2B)', // Słowacki
                    'sl' => 'Posel na posel (B2B)', // Słoweński
                    'sq' => 'Biznes me biznes (B2B)', // Albański
                    'sr' => 'Бизнис са бизнисом (B2B)', // Serbski
                    'sv' => 'Företag till företag (B2B)', // Szwedzki
                    'tg' => 'Бизнес ба бизнес (B2B)', // Tadżycki
                    'th' => 'ธุรกิจกับธุรกิจ (B2B)', // Tajski
                    'tk' => 'Biznesden biznese (B2B)', // Turkmeński
                    'tr' => 'İşletmeden işletmeye (B2B)', // Turecki
                    'uk' => 'Бізнес для бізнесу (B2B)', // Ukraiński
                    'uz' => 'Biznesdan biznesga (B2B)', // Uzbecki
                    'vi' => 'Doanh nghiệp với doanh nghiệp (B2B)', // Wietnamski
                    'zh' => '企业对企业 (B2B)' // Chiński
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 5,
                'name' => json_encode([
                    'am' => 'ውል', // Amharski
                    'ar' => 'عقد', // Arabski
                    'az' => 'Müqavilə', // Azerski
                    'be' => 'Кантракт', // Białoruski
                    'bg' => 'Договор', // Bułgarski
                    'bn' => 'চুক্তি', // Bengalski
                    'bs' => 'Ugovor', // Bośniacki
                    'ca' => 'Contracte', // Kataloński
                    'cs' => 'Kontrakt', // Czeski
                    'da' => 'Kontrakt', // Duński
                    'de' => 'Vertrag', // Niemiecki
                    'dv' => 'ސަރަކަކާއެކްއިން', // Divehi
                    'dz' => 'མིང་འབྲེལ་སྲིད་དོན་གྱི་སྤྱོད།', // Dzongkha
                    'el' => 'Συμβόλαιο', // Grecki
                    'en' => 'Contract', // Angielski
                    'es' => 'Contrato', // Hiszpański
                    'et' => 'Leping', // Estoński
                    'fa' => 'قرارداد', // Perski
                    'fi' => 'Sopimus', // Fiński
                    'fr' => 'Contrat', // Francuski
                    'he' => 'חוזה', // Hebrajski
                    'hi' => 'अनुबंध', // Hindi
                    'hr' => 'Ugovor', // Chorwacki
                    'hu' => 'Szerződés', // Węgierski
                    'hy' => 'Պայմանագիր', // Ormiański
                    'id' => 'Kontrak', // Indonezyjski
                    'is' => 'Samningur', // Islandzki
                    'it' => 'Contratto', // Włoski
                    'ja' => '契約', // Japoński
                    'ka' => 'კონტრაქტი', // Gruziński
                    'km' => 'កិច្ចសន្យា', // Khmerski
                    'ko' => '계약', // Koreański
                    'lb' => 'Kontrakt', // Luksemburski
                    'lo' => 'ສັນຍາ', // Laotański
                    'lt' => 'Sutartis', // Litewski
                    'lv' => 'Līgums', // Łotewski
                    'me' => 'Ugovor', // Czarnogórski
                    'mk' => 'Договор', // Macedoński
                    'mn' => 'Гэрээ', // Mongołski
                    'ms' => 'Kontrak', // Malajski
                    'my' => 'စာချုပ်', // Birmański
                    'ne' => 'सम्झौता', // Nepalski
                    'nl' => 'Contract', // Holenderski
                    'no' => 'Kontrakt', // Norweski
                    'pl' => 'Kontrakt', // Polski
                    'ps' => 'قرارداد', // Paszto
                    'pt' => 'Contrato', // Portugalski
                    'ro' => 'Contract', // Rumuński
                    'ru' => 'Контракт', // Rosyjski
                    'si' => 'කොන්ත්‍රාත් ගිවිසුම', // Syngaleski
                    'sk' => 'Kontrakt', // Słowacki
                    'sl' => 'Pogodba', // Słoweński
                    'sq' => 'Kontratë', // Albański
                    'sr' => 'Уговор', // Serbski
                    'sv' => 'Kontrakt', // Szwedzki
                    'tg' => 'Шартнома', // Tadżycki
                    'th' => 'สัญญา', // Tajski
                    'tk' => 'Şertnama', // Turkmeński
                    'tr' => 'Kontrat', // Turecki
                    'uk' => 'Контракт', // Ukraiński
                    'uz' => 'Shartnoma', // Uzbecki
                    'vi' => 'Hợp đồng', // Wietnamski
                    'zh' => '合同' // Chiński
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ]
        ];
        DB::table('type_of_contracts')->insert($types);
    }
}
