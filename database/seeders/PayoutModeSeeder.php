<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class PayoutModeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Schema::disableForeignKeyConstraints();

        DB::table('payout_modes')->truncate();

        $payout_modes = [
            [
                'id' => 1,
                'name' => json_encode([
                    'am' => 'ወርሃዊ', // Amharski
                    'ar' => 'شهري', // Arabski
                    'az' => 'Aylıq', // Azerski
                    'be' => 'Штомесячны', // Białoruski
                    'bg' => 'Месечен', // Bułgarski
                    'bn' => 'মাসিক', // Bengalski
                    'bs' => 'Mjesečni', // Bośniacki
                    'ca' => 'Mensual', // Kataloński
                    'cs' => 'Měsíční', // Czeski
                    'da' => 'Månedlig', // Duński
                    'de' => 'Monatlich', // Niemiecki
                    'dv' => 'މަހުގަދައި', // Divehi
                    'dz' => 'ཟླ་གཅིག་ཀ་གཡོག', // Dzongkha
                    'el' => 'Μηνιαίος', // Grecki
                    'en' => 'Monthly', // Angielski
                    'es' => 'Mensual', // Hiszpański
                    'et' => 'Igakuine', // Estoński
                    'fa' => 'ماهانه', // Perski
                    'fi' => 'Kuukausittainen', // Fiński
                    'fr' => 'Mensuel', // Francuski
                    'he' => 'חודשי', // Hebrajski
                    'hi' => 'मासिक', // Hindi
                    'hr' => 'Mjesečni', // Chorwacki
                    'hu' => 'Havi', // Węgierski
                    'hy' => 'Ամսական', // Ormiański
                    'id' => 'Bulanan', // Indonezyjski
                    'is' => 'Mánaðarlega', // Islandzki
                    'it' => 'Mensile', // Włoski
                    'ja' => '毎月', // Japoński
                    'ka' => 'თვიური', // Gruziński
                    'km' => 'ប្រចាំខែ', // Khmerski
                    'ko' => '월간', // Koreański
                    'lb' => 'Monatlech', // Luksemburski
                    'lo' => 'ປະຈຳເດືອນ', // Laotański
                    'lt' => 'Mėnesinis', // Litewski
                    'lv' => 'Mēneša', // Łotewski
                    'me' => 'Mjesečni', // Czarnogórski
                    'mk' => 'Месечен', // Macedoński
                    'mn' => 'Сар бүрийн', // Mongołski
                    'ms' => 'Bulanan', // Malajski
                    'my' => 'လစဉ်', // Birmański
                    'ne' => 'मासिक', // Nepalski
                    'nl' => 'Maandelijks', // Holenderski
                    'no' => 'Månedlig', // Norweski
                    'pl' => 'Miesięczny', // Polski
                    'ps' => 'میاشتنی', // Paszto
                    'pt' => 'Mensal', // Portugalski
                    'ro' => 'Lunar', // Rumuński
                    'ru' => 'Ежемесячный', // Rosyjski
                    'si' => 'මාසික', // Syngaleski
                    'sk' => 'Mesačný', // Słowacki
                    'sl' => 'Mesečni', // Słoweński
                    'sq' => 'Mujore', // Albański
                    'sr' => 'Месечни', // Serbski
                    'sv' => 'Månadsvis', // Szwedzki
                    'tg' => 'Ҳармоҳа', // Tadżycki
                    'th' => 'รายเดือน', // Tajski
                    'tk' => 'Aýlyk', // Turkmeński
                    'tr' => 'Aylık', // Turecki
                    'uk' => 'Щомісячний', // Ukraiński
                    'uz' => 'Oylik', // Uzbecki
                    'vi' => 'Hàng tháng', // Wietnamski
                    'zh' => '每月' // Chiński
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],[
                'id' => 2,
                'name' => json_encode([
                    'am' => 'ሳምንታዊ', // Amharski
                    'ar' => 'أسبوعي', // Arabski
                    'az' => 'Həftəlik', // Azerski
                    'be' => 'Штотыднёвы', // Białoruski
                    'bg' => 'Седмичен', // Bułgarski
                    'bn' => 'সাপ্তাহিক', // Bengalski
                    'bs' => 'Sedmični', // Bośniacki
                    'ca' => 'Setmanal', // Kataloński
                    'cs' => 'Týdenní', // Czeski
                    'da' => 'Ugentlig', // Duński
                    'de' => 'Wöchentlich', // Niemiecki
                    'dv' => 'ހަފުތައިގެ', // Divehi
                    'dz' => 'བདུན་འཁོར་རྩོམ།', // Dzongkha
                    'el' => 'Εβδομαδιαίος', // Grecki
                    'en' => 'Weekly', // Angielski
                    'es' => 'Semanal', // Hiszpański
                    'et' => 'Iganädalane', // Estoński
                    'fa' => 'هفتگی', // Perski
                    'fi' => 'Viikoittainen', // Fiński
                    'fr' => 'Hebdomadaire', // Francuski
                    'he' => 'שבועי', // Hebrajski
                    'hi' => 'साप्ताहिक', // Hindi
                    'hr' => 'Tjedni', // Chorwacki
                    'hu' => 'Heti', // Węgierski
                    'hy' => 'Շաբաթական', // Ormiański
                    'id' => 'Mingguan', // Indonezyjski
                    'is' => 'Vikulega', // Islandzki
                    'it' => 'Settimanale', // Włoski
                    'ja' => '毎週の', // Japoński
                    'ka' => 'ყოველკვირეული', // Gruziński
                    'km' => 'ប្រចាំសប្ដាហ៍', // Khmerski
                    'ko' => '주간', // Koreański
                    'lb' => 'Wöchentlech', // Luksemburski
                    'lo' => 'ປະຈຳອາທິດ', // Laotański
                    'lt' => 'Savaitinis', // Litewski
                    'lv' => 'Nedēļas', // Łotewski
                    'me' => 'Sedmični', // Czarnogórski
                    'mk' => 'Неделен', // Macedoński
                    'mn' => 'Долоо хоног тутмын', // Mongołski
                    'ms' => 'Mingguan', // Malajski
                    'my' => 'အပတ်စဉ်', // Birmański
                    'ne' => 'साप्ताहिक', // Nepalski
                    'nl' => 'Wekelijks', // Holenderski
                    'no' => 'Ukentlig', // Norweski
                    'pl' => 'Tygodniowy', // Polski
                    'ps' => 'اونيز', // Paszto
                    'pt' => 'Semanal', // Portugalski
                    'ro' => 'Săptămânal', // Rumuński
                    'ru' => 'Еженедельный', // Rosyjski
                    'si' => 'සතිපතා', // Syngaleski
                    'sk' => 'Týždenný', // Słowacki
                    'sl' => 'Tedenski', // Słoweński
                    'sq' => 'Javor', // Albański
                    'sr' => 'Недељни', // Serbski
                    'sv' => 'Veckovis', // Szwedzki
                    'tg' => 'Ҳафтаина', // Tadżycki
                    'th' => 'รายสัปดาห์', // Tajski
                    'tk' => 'Hepdelik', // Turkmeński
                    'tr' => 'Haftalık', // Turecki
                    'uk' => 'Щотижневий', // Ukraiński
                    'uz' => 'Haftalik', // Uzbecki
                    'vi' => 'Hàng tuần', // Wietnamski
                    'zh' => '每周的' // Chiński
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],[
                'id' => 3,
                'name' => json_encode([
                    'am' => 'በዕለት', // Amharski
                    'ar' => 'يومي', // Arabski
                    'az' => 'Gündəlik', // Azerski
                    'be' => 'Штодзённы', // Białoruski
                    'bg' => 'Дневен', // Bułgarski
                    'bn' => 'দৈনিক', // Bengalski
                    'bs' => 'Dnevni', // Bośniacki
                    'ca' => 'Diari', // Kataloński
                    'cs' => 'Denní', // Czeski
                    'da' => 'Daglig', // Duński
                    'de' => 'Täglich', // Niemiecki
                    'dv' => 'ދުވަހެއްގެ', // Divehi
                    'dz' => 'ཉིན་གྱི།', // Dzongkha
                    'el' => 'Ημερήσιος', // Grecki
                    'en' => 'Daily', // Angielski
                    'es' => 'Diario', // Hiszpański
                    'et' => 'Igapäevane', // Estoński
                    'fa' => 'روزانه', // Perski
                    'fi' => 'Päivittäinen', // Fiński
                    'fr' => 'Quotidien', // Francuski
                    'he' => 'יומי', // Hebrajski
                    'hi' => 'दैनिक', // Hindi
                    'hr' => 'Dnevni', // Chorwacki
                    'hu' => 'Napi', // Węgierski
                    'hy' => 'Օրական', // Ormiański
                    'id' => 'Harian', // Indonezyjski
                    'is' => 'Daglega', // Islandzki
                    'it' => 'Giornaliero', // Włoski
                    'ja' => '毎日の', // Japoński
                    'ka' => 'ყოველდღიური', // Gruziński
                    'km' => 'ប្រចាំថ្ងៃ', // Khmerski
                    'ko' => '매일의', // Koreański
                    'lb' => 'Dages', // Luksemburski
                    'lo' => 'ປະຈຳມື້', // Laotański
                    'lt' => 'Dieninis', // Litewski
                    'lv' => 'Dienas', // Łotewski
                    'me' => 'Dnevni', // Czarnogórski
                    'mk' => 'Дневен', // Macedoński
                    'mn' => 'Өдөр тутмын', // Mongołski
                    'ms' => 'Harian', // Malajski
                    'my' => 'နေ့စဉ်', // Birmański
                    'ne' => 'दैनिक', // Nepalski
                    'nl' => 'Dagelijks', // Holenderski
                    'no' => 'Daglig', // Norweski
                    'pl' => 'Dzienny', // Polski
                    'ps' => 'ورځنی', // Paszto
                    'pt' => 'Diário', // Portugalski
                    'ro' => 'Zilnic', // Rumuński
                    'ru' => 'Ежедневный', // Rosyjski
                    'si' => 'දෛනික', // Syngaleski
                    'sk' => 'Denný', // Słowacki
                    'sl' => 'Dnevni', // Słoweński
                    'sq' => 'Ditor', // Albański
                    'sr' => 'Дневни', // Serbski
                    'sv' => 'Daglig', // Szwedzki
                    'tg' => 'Ҳаррӯза', // Tadżycki
                    'th' => 'รายวัน', // Tajski
                    'tk' => 'Gündelik', // Turkmeński
                    'tr' => 'Günlük', // Turecki
                    'uk' => 'Щоденний', // Ukraiński
                    'uz' => 'Kunlik', // Uzbecki
                    'vi' => 'Hàng ngày', // Wietnamski
                    'zh' => '每日' // Chiński
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 4,
                'name' => json_encode([
                    'am' => 'ለማስተካከል', // Amharski
                    'ar' => 'قابل للتفاوض', // Arabski
                    'az' => 'Razılaşmaq üçün', // Azerski
                    'be' => 'Дамоўленасць', // Białoruski
                    'bg' => 'По договаряне', // Bułgarski
                    'bn' => 'আলোচনা সাপেক্ষে', // Bengalski
                    'bs' => 'Za dogovor', // Bośniacki
                    'ca' => 'A convenir', // Kataloński
                    'cs' => 'K jednání', // Czeski
                    'da' => 'Efter aftale', // Duński
                    'de' => 'Zu vereinbaren', // Niemiecki
                    'dv' => 'ބަދަލުކުރެވިފައިވާ', // Divehi
                    'dz' => 'འཆར་གཞིའི་དོ་དམག', // Dzongkha
                    'el' => 'Προς συμφωνία', // Grecki
                    'en' => 'To be determined', // Angielski
                    'es' => 'A convenir', // Hiszpański
                    'et' => 'Kokkuleppel', // Estoński
                    'fa' => 'قابل توافق', // Perski
                    'fi' => 'Sovittavissa', // Fiński
                    'fr' => 'À déterminer', // Francuski
                    'he' => 'נתון למשא ומתן', // Hebrajski
                    'hi' => 'तय करने के लिए', // Hindi
                    'hr' => 'Po dogovoru', // Chorwacki
                    'hu' => 'Megállapodás szerint', // Węgierski
                    'hy' => 'Համաձայնեցման ենթակա', // Ormiański
                    'id' => 'Untuk dinegosiasikan', // Indonezyjski
                    'is' => 'Til að ákvarða', // Islandzki
                    'it' => 'Da stabilire', // Włoski
                    'ja' => '要相談', // Japoński
                    'ka' => 'შეთანხმებით', // Gruziński
                    'km' => 'ត្រូវសម្រេច', // Khmerski
                    'ko' => '결정 예정', // Koreański
                    'lb' => 'Ze bestëmmen', // Luksemburski
                    'lo' => 'ຕ້ອງກຳນົດ', // Laotański
                    'lt' => 'Derinama', // Litewski
                    'lv' => 'Vienojoties', // Łotewski
                    'me' => 'Po dogovoru', // Czarnogórski
                    'mk' => 'За договор', // Macedoński
                    'mn' => 'Тодорхойлох ёстой', // Mongołski
                    'ms' => 'Untuk ditentukan', // Malajski
                    'my' => 'ဆုံးဖြတ်ရန်', // Birmański
                    'ne' => 'निर्धारण गर्न', // Nepalski
                    'nl' => 'Af te spreken', // Holenderski
                    'no' => 'Avtales', // Norweski
                    'pl' => 'Do ustalenia', // Polski
                    'ps' => 'د ټاکلو لپاره', // Paszto
                    'pt' => 'A determinar', // Portugalski
                    'ro' => 'De stabilit', // Rumuński
                    'ru' => 'Для определения', // Rosyjski
                    'si' => 'තීරණය කිරීමට', // Syngaleski
                    'sk' => 'K dohodnutiu', // Słowacki
                    'sl' => 'Po dogovoru', // Słoweński
                    'sq' => 'Për t\'u përcaktuar', // Albański
                    'sr' => 'Да се договоримо', // Serbski
                    'sv' => 'Att fastställas', // Szwedzki
                    'tg' => 'Барои муайян кардан', // Tadżycki
                    'th' => 'ต้องกำหนด', // Tajski
                    'tk' => 'Kesgitlenmeli', // Turkmeński
                    'tr' => 'Belirlenecek', // Turecki
                    'uk' => 'Для визначення', // Ukraiński
                    'uz' => 'Aniqlanishi kerak', // Uzbecki
                    'vi' => 'Để được xác định', // Wietnamski
                    'zh' => '待确定' // Chiński
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
        ];

        DB::table('payout_modes')->insert($payout_modes);
    }
}
