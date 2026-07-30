<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class SalaryPeriodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Schema::disableForeignKeyConstraints();

        DB::table('salary_periods')->truncate();

        $salary_periods = [
            [
                'id' => 1,
                'name' => json_encode([
                    'am' => 'በሰዓት', // Amharski
                    'ar' => 'بالساعة', // Arabski
                    'az' => 'Saatlıq', // Azerski
                    'be' => 'Пагадзінная', // Białoruski
                    'bg' => 'Почасово', // Bułgarski
                    'bn' => 'প্রতি ঘণ্টা', // Bengalski
                    'bs' => 'Po satu', // Bośniacki
                    'ca' => 'Per hora', // Kataloński
                    'cs' => 'Hodinová', // Czeski
                    'da' => 'Timelønnet', // Duński
                    'de' => 'Stundenlohn', // Niemiecki
                    'dv' => 'ގަޑިއިރުން', // Divehi
                    'dz' => 'ཆུ་ཚོད་རེར།', // Dzongkha
                    'el' => 'Ωρομίσθιο', // Grecki
                    'en' => 'Hourly', // Angielski
                    'es' => 'Por hora', // Hiszpański
                    'et' => 'Tunnitasu', // Estoński
                    'fa' => 'ساعتی', // Perski
                    'fi' => 'Tuntipalkka', // Fiński
                    'fr' => 'Horaire', // Francuski
                    'he' => 'לפי שעה', // Hebrajski
                    'hi' => 'प्रति घंटा', // Hindi
                    'hr' => 'Po satu', // Chorwacki
                    'hu' => 'Órabér', // Węgierski
                    'hy' => 'Ժամավճար', // Ormiański
                    'id' => 'Per jam', // Indonezyjski
                    'is' => 'Á klukkustund', // Islandzki
                    'it' => 'Orario', // Włoski
                    'ja' => '時給', // Japoński
                    'ka' => 'საათობრივი', // Gruziński
                    'km' => 'តាមម៉ោង', // Khmerski
                    'ko' => '시급', // Koreański
                    'lb' => 'Stonneloun', // Luksemburski
                    'lo' => 'ຕໍ່ຊົ່ວໂມງ', // Laotański
                    'lt' => 'Valandinis', // Litewski
                    'lv' => 'Stundas likme', // Łotewski
                    'me' => 'Po satu', // Czarnogórski
                    'mk' => 'По час', // Macedoński
                    'mn' => 'Цагийн', // Mongołski
                    'ms' => 'Setiap jam', // Malajski
                    'my' => 'တစ်နာရီလျှင်', // Birmański
                    'ne' => 'प्रति घण्टा', // Nepalski
                    'nl' => 'Per uur', // Holenderski
                    'no' => 'Timelønn', // Norweski
                    'pl' => 'Godzinowa', // Polski
                    'ps' => 'په ساعت', // Paszto
                    'pt' => 'Por hora', // Portugalski
                    'ro' => 'Pe oră', // Rumuński
                    'ru' => 'Почасовая', // Rosyjski
                    'si' => 'පැයකට', // Syngaleski
                    'sk' => 'Hodinová', // Słowacki
                    'sl' => 'Urna', // Słoweński
                    'sq' => 'Me orë', // Albański
                    'sr' => 'По сату', // Serbski
                    'sv' => 'Timlön', // Szwedzki
                    'tg' => 'Соатбайъ', // Tadżycki
                    'th' => 'รายชั่วโมง', // Tajski
                    'tk' => 'Sagatlyk', // Turkmeński
                    'tr' => 'Saatlik', // Turecki
                    'uk' => 'Погодинна', // Ukraiński
                    'uz' => 'Soatbay', // Uzbecki
                    'vi' => 'Theo giờ', // Wietnamski
                    'zh' => '时薪', // Chiński
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id' => 2,
                'name' => json_encode([
                    'am' => 'በሳምንት', // Amharski
                    'ar' => 'أسبوعي', // Arabski
                    'az' => 'Həftəlik', // Azerski
                    'be' => 'Тыднёвая', // Białoruski
                    'bg' => 'Седмична', // Bułgarski
                    'bn' => 'সাপ্তাহিক', // Bengalski
                    'bs' => 'Sedmična', // Bośniacki
                    'ca' => 'Setmanal', // Kataloński
                    'cs' => 'Týdenní', // Czeski
                    'da' => 'Ugentlig', // Duński
                    'de' => 'Wöchentlich', // Niemiecki
                    'dv' => 'ހަފްތާއަކަށް', // Divehi
                    'dz' => 'བདུན་ཕྲག་རེར།', // Dzongkha
                    'el' => 'Εβδομαδιαία', // Grecki
                    'en' => 'Weekly', // Angielski
                    'es' => 'Semanal', // Hiszpański
                    'et' => 'Nädalane', // Estoński
                    'fa' => 'هفتگی', // Perski
                    'fi' => 'Viikoittainen', // Fiński
                    'fr' => 'Hebdomadaire', // Francuski
                    'he' => 'שבועי', // Hebrajski
                    'hi' => 'साप्ताहिक', // Hindi
                    'hr' => 'Tjedna', // Chorwacki
                    'hu' => 'Heti', // Węgierski
                    'hy' => 'Շաբաթական', // Ormiański
                    'id' => 'Mingguan', // Indonezyjski
                    'is' => 'Vikulegt', // Islandzki
                    'it' => 'Settimanale', // Włoski
                    'ja' => '週給', // Japoński
                    'ka' => 'კვირეული', // Gruziński
                    'km' => 'ប្រចាំសប្ដាហ៍', // Khmerski
                    'ko' => '주급', // Koreański
                    'lb' => 'Wëchentlech', // Luksemburski
                    'lo' => 'ລາຍອາທິດ', // Laotański
                    'lt' => 'Savaitinis', // Litewski
                    'lv' => 'Nedēļas', // Łotewski
                    'me' => 'Sedmična', // Czarnogórski
                    'mk' => 'Неделна', // Macedoński
                    'mn' => 'Долоо хоногийн', // Mongołski
                    'ms' => 'Mingguan', // Malajski
                    'my' => 'အပတ်စဉ်', // Birmański
                    'ne' => 'साप्ताहिक', // Nepalski
                    'nl' => 'Wekelijks', // Holenderski
                    'no' => 'Ukentlig', // Norweski
                    'pl' => 'Tygodniowa', // Polski
                    'ps' => 'اونیز', // Paszto
                    'pt' => 'Semanal', // Portugalski
                    'ro' => 'Săptămânal', // Rumuński
                    'ru' => 'Еженедельная', // Rosyjski
                    'si' => 'සතිපතා', // Syngaleski
                    'sk' => 'Týždenná', // Słowacki
                    'sl' => 'Tedenska', // Słoweński
                    'sq' => 'Javore', // Albański
                    'sr' => 'Недељна', // Serbski
                    'sv' => 'Veckovis', // Szwedzki
                    'tg' => 'Ҳафтаина', // Tadżycki
                    'th' => 'รายสัปดาห์', // Tajski
                    'tk' => 'Hepdelik', // Turkmeński
                    'tr' => 'Haftalık', // Turecki
                    'uk' => 'Щотижнева', // Ukraiński
                    'uz' => 'Haftalik', // Uzbecki
                    'vi' => 'Hàng tuần', // Wietnamski
                    'zh' => '周薪', // Chiński
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id' => 3,
                'name' => json_encode([
                    'am' => 'በወር', // Amharski
                    'ar' => 'شهري', // Arabski
                    'az' => 'Aylıq', // Azerski
                    'be' => 'Штомесячная', // Białoruski
                    'bg' => 'Месечна', // Bułgarski
                    'bn' => 'মাসিক', // Bengalski
                    'bs' => 'Mjesečna', // Bośniacki
                    'ca' => 'Mensual', // Kataloński
                    'cs' => 'Měsíční', // Czeski
                    'da' => 'Månedlig', // Duński
                    'de' => 'Monatlich', // Niemiecki
                    'dv' => 'މަހުން', // Divehi
                    'dz' => 'ཟླ་རེར།', // Dzongkha
                    'el' => 'Μηνιαία', // Grecki
                    'en' => 'Monthly', // Angielski
                    'es' => 'Mensual', // Hiszpański
                    'et' => 'Igakuine', // Estoński
                    'fa' => 'ماهانه', // Perski
                    'fi' => 'Kuukausittainen', // Fiński
                    'fr' => 'Mensuel', // Francuski
                    'he' => 'חודשי', // Hebrajski
                    'hi' => 'मासिक', // Hindi
                    'hr' => 'Mjesečna', // Chorwacki
                    'hu' => 'Havi', // Węgierski
                    'hy' => 'Ամսական', // Ormiański
                    'id' => 'Bulanan', // Indonezyjski
                    'is' => 'Mánaðarlegt', // Islandzki
                    'it' => 'Mensile', // Włoski
                    'ja' => '月給', // Japoński
                    'ka' => 'ყოველთვიური', // Gruziński
                    'km' => 'ប្រចាំខែ', // Khmerski
                    'ko' => '월급', // Koreański
                    'lb' => 'Monatlech', // Luksemburski
                    'lo' => 'ລາຍເດືອນ', // Laotański
                    'lt' => 'Mėnesinis', // Litewski
                    'lv' => 'Mēneša', // Łotewski
                    'me' => 'Mjesečna', // Czarnogórski
                    'mk' => 'Месечна', // Macedoński
                    'mn' => 'Сарын', // Mongołski
                    'ms' => 'Bulanan', // Malajski
                    'my' => 'လစဉ်', // Birmański
                    'ne' => 'मासिक', // Nepalski
                    'nl' => 'Maandelijks', // Holenderski
                    'no' => 'Månedlig', // Norweski
                    'pl' => 'Miesięczna', // Polski
                    'ps' => 'میاشتنی', // Paszto
                    'pt' => 'Mensal', // Portugalski
                    'ro' => 'Lunar', // Rumuński
                    'ru' => 'Ежемесячная', // Rosyjski
                    'si' => 'මාසික', // Syngaleski
                    'sk' => 'Mesačná', // Słowacki
                    'sl' => 'Mesečna', // Słoweński
                    'sq' => 'Mujore', // Albański
                    'sr' => 'Месечна', // Serbski
                    'sv' => 'Månatlig', // Szwedzki
                    'tg' => 'Моҳона', // Tadżycki
                    'th' => 'รายเดือน', // Tajski
                    'tk' => 'Aýlyk', // Turkmeński
                    'tr' => 'Aylık', // Turecki
                    'uk' => 'Щомісячна', // Ukraiński
                    'uz' => 'Oylik', // Uzbecki
                    'vi' => 'Hàng tháng', // Wietnamski
                    'zh' => '月薪', // Chiński
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
        ];

        DB::table('salary_periods')->insert($salary_periods);
    }
}
