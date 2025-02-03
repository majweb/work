<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class WorkLoadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Schema::disableForeignKeyConstraints();

        DB::table('work_loads')->truncate();

        $work_loads = [
            [
                'id' => 1,
                'name' => json_encode([
                    'am' => 'ሙሉ', // Amharski
                    'ar' => 'كامل', // Arabski
                    'az' => 'Tam', // Azerski
                    'be' => 'поўны', // Białoruski
                    'bg' => 'Пълен', // Bułgarski
                    'bn' => 'সম্পূর্ণ', // Bengalski
                    'bs' => 'Potpun', // Bośniacki
                    'ca' => 'Ple', // Kataloński
                    'cs' => 'Plný', // Czeski
                    'da' => 'Fuld', // Duński
                    'de' => 'Voll', // Niemiecki
                    'dv' => 'ނަމަށްކަމަކު', // Divehi (Malediwy)
                    'dz' => 'མང་པོ་', // Dzongkha (Bhutan)
                    'el' => 'Πλήρης', // Grecki
                    'en' => 'Full', // Angielski
                    'es' => 'Completo', // Hiszpański
                    'et' => 'Täis', // Estoński
                    'fa' => 'کامل', // Perski
                    'fi' => 'Täysi', // Fiński
                    'fr' => 'Complet', // Francuski
                    'he' => 'מלא', // Hebrajski
                    'hi' => 'पूर्ण', // Hindi
                    'hr' => 'Pun', // Chorwacki
                    'hu' => 'Teljes', // Węgierski
                    'hy' => 'Լիարժեք', // Ormiański
                    'id' => 'Penuh', // Indonezyjski
                    'is' => 'Fullur', // Islandzki
                    'it' => 'Pieno', // Włoski
                    'ja' => '満たす', // Japoński
                    'ka' => 'სრული', // Gruziński
                    'km' => 'ពេញលេញ', // Khmerski
                    'ko' => '가득', // Koreański
                    'lb' => 'Voll', // Luksemburski
                    'lo' => 'ເຕັມ', // Laotański
                    'lt' => 'Pilnas', // Litewski
                    'lv' => 'Pilns', // Łotewski
                    'me' => 'Pun', // Czarnogórski
                    'mk' => 'Целосен', // Macedoński
                    'mn' => 'Бүтэн', // Mongołski
                    'ms' => 'Penuh', // Malajski
                    'my' => 'ပြည့်စုံ', // Birmański
                    'ne' => 'पूर्ण', // Nepalski
                    'nl' => 'Vol', // Holenderski
                    'no' => 'Full', // Norweski
                    'pl' => 'Pełny', // Polski
                    'ps' => 'بشپړ', // Paszto
                    'pt' => 'Cheio', // Portugalski
                    'ro' => 'Plin', // Rumuński
                    'ru' => 'Полный', // Rosyjski
                    'si' => 'සම්පූර්ණ', // Syngaleski
                    'sk' => 'Plný', // Słowacki
                    'sl' => 'Poln', // Słoweński
                    'sq' => 'Plotë', // Albański
                    'sr' => 'Пун', // Serbski
                    'sv' => 'Full', // Szwedzki
                    'tg' => 'Пурра', // Tadżycki
                    'th' => 'เต็ม', // Tajski
                    'tk' => 'Doly', // Turkmeński
                    'tr' => 'Tam', // Turecki
                    'uk' => 'Повний', // Ukraiński
                    'uz' => 'To‘liq', // Uzbecki
                    'vi' => 'Đầy', // Wietnamski
                    'zh' => '满' // Chiński
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],[
                'id' => 2,
                'name' => json_encode([
                    'am' => '1/2', // Amharski
                    'ar' => '١/٢', // Arabski
                    'az' => '1/2', // Azerski
                    'be' => '1/2', // Białoruski
                    'bg' => '1/2', // Bułgarski
                    'bn' => '১/২', // Bengalski
                    'bs' => '1/2', // Bośniacki
                    'ca' => '1/2', // Kataloński
                    'cs' => '1/2', // Czeski
                    'da' => '1/2', // Duński
                    'de' => '1/2', // Niemiecki
                    'dv' => '1/2', // Divehi (Malediwy)
                    'dz' => '1/2', // Dzongkha (Bhutan)
                    'el' => '1/2', // Grecki
                    'en' => '1/2', // Angielski
                    'es' => '1/2', // Hiszpański
                    'et' => '1/2', // Estoński
                    'fa' => '۱/۲', // Perski
                    'fi' => '1/2', // Fiński
                    'fr' => '1/2', // Francuski
                    'he' => '½', // Hebrajski (często używa się znaku połowy)
                    'hi' => '1/2', // Hindi
                    'hr' => '1/2', // Chorwacki
                    'hu' => '1/2', // Węgierski
                    'hy' => '1/2', // Ormiański
                    'id' => '1/2', // Indonezyjski
                    'is' => '1/2', // Islandzki
                    'it' => '1/2', // Włoski
                    'ja' => '1/2', // Japoński
                    'ka' => '1/2', // Gruziński
                    'km' => '1/2', // Khmerski
                    'ko' => '1/2', // Koreański
                    'lb' => '1/2', // Luksemburski
                    'lo' => '1/2', // Laotański
                    'lt' => '1/2', // Litewski
                    'lv' => '1/2', // Łotewski
                    'me' => '1/2', // Czarnogórski
                    'mk' => '1/2', // Macedoński
                    'mn' => '1/2', // Mongołski
                    'ms' => '1/2', // Malajski
                    'my' => '1/2', // Birmański
                    'ne' => '1/2', // Nepalski
                    'nl' => '1/2', // Holenderski
                    'no' => '1/2', // Norweski
                    'pl' => '1/2', // Polski
                    'ps' => '1/2', // Paszto
                    'pt' => '1/2', // Portugalski
                    'ro' => '1/2', // Rumuński
                    'ru' => '1/2', // Rosyjski
                    'si' => '1/2', // Syngaleski
                    'sk' => '1/2', // Słowacki
                    'sl' => '1/2', // Słoweński
                    'sq' => '1/2', // Albański
                    'sr' => '1/2', // Serbski
                    'sv' => '1/2', // Szwedzki
                    'tg' => '1/2', // Tadżycki
                    'th' => '1/2', // Tajski
                    'tk' => '1/2', // Turkmeński
                    'tr' => '1/2', // Turecki
                    'uk' => '1/2', // Ukraiński
                    'uz' => '1/2', // Uzbecki
                    'vi' => '1/2', // Wietnamski
                    'zh' => '1/2' // Chiński
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],[
                'id' => 3,
                'name' => json_encode([
                    'am' => '1/4', // Amharski
                    'ar' => '١/٤', // Arabski
                    'az' => '1/4', // Azerski
                    'be' => '1/4', // Białoruski
                    'bg' => '1/4', // Bułgarski
                    'bn' => '১/৪', // Bengalski
                    'bs' => '1/4', // Bośniacki
                    'ca' => '1/4', // Kataloński
                    'cs' => '1/4', // Czeski
                    'da' => '1/4', // Duński
                    'de' => '1/4', // Niemiecki
                    'dv' => '1/4', // Divehi (Malediwy)
                    'dz' => '1/4', // Dzongkha (Bhutan)
                    'el' => '1/4', // Grecki
                    'en' => '1/4', // Angielski
                    'es' => '1/4', // Hiszpański
                    'et' => '1/4', // Estoński
                    'fa' => '۱/۴', // Perski
                    'fi' => '1/4', // Fiński
                    'fr' => '1/4', // Francuski
                    'he' => '¼', // Hebrajski (często używa się znaku ćwiartki)
                    'hi' => '1/4', // Hindi
                    'hr' => '1/4', // Chorwacki
                    'hu' => '1/4', // Węgierski
                    'hy' => '1/4', // Ormiański
                    'id' => '1/4', // Indonezyjski
                    'is' => '1/4', // Islandzki
                    'it' => '1/4', // Włoski
                    'ja' => '1/4', // Japoński
                    'ka' => '1/4', // Gruziński
                    'km' => '1/4', // Khmerski
                    'ko' => '1/4', // Koreański
                    'lb' => '1/4', // Luksemburski
                    'lo' => '1/4', // Laotański
                    'lt' => '1/4', // Litewski
                    'lv' => '1/4', // Łotewski
                    'me' => '1/4', // Czarnogórski
                    'mk' => '1/4', // Macedoński
                    'mn' => '1/4', // Mongołski
                    'ms' => '1/4', // Malajski
                    'my' => '1/4', // Birmański
                    'ne' => '1/4', // Nepalski
                    'nl' => '1/4', // Holenderski
                    'no' => '1/4', // Norweski
                    'pl' => '1/4', // Polski
                    'ps' => '1/4', // Paszto
                    'pt' => '1/4', // Portugalski
                    'ro' => '1/4', // Rumuński
                    'ru' => '1/4', // Rosyjski
                    'si' => '1/4', // Syngaleski
                    'sk' => '1/4', // Słowacki
                    'sl' => '1/4', // Słoweński
                    'sq' => '1/4', // Albański
                    'sr' => '1/4', // Serbski
                    'sv' => '1/4', // Szwedzki
                    'tg' => '1/4', // Tadżycki
                    'th' => '1/4', // Tajski
                    'tk' => '1/4', // Turkmeński
                    'tr' => '1/4', // Turecki
                    'uk' => '1/4', // Ukraiński
                    'uz' => '1/4', // Uzbecki
                    'vi' => '1/4', // Wietnamski
                    'zh' => '1/4' // Chiński
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],[
                'id' => 4,
                'name' => json_encode([
                    'am' => '3/4', // Amharski
                    'ar' => '٣/٤', // Arabski
                    'az' => '3/4', // Azerski
                    'be' => '3/4', // Białoruski
                    'bg' => '3/4', // Bułgarski
                    'bn' => '৩/৪', // Bengalski
                    'bs' => '3/4', // Bośniacki
                    'ca' => '3/4', // Kataloński
                    'cs' => '3/4', // Czeski
                    'da' => '3/4', // Duński
                    'de' => '3/4', // Niemiecki
                    'dv' => '3/4', // Divehi (Malediwy)
                    'dz' => '3/4', // Dzongkha (Bhutan)
                    'el' => '3/4', // Grecki
                    'en' => '3/4', // Angielski
                    'es' => '3/4', // Hiszpański
                    'et' => '3/4', // Estoński
                    'fa' => '۳/۴', // Perski
                    'fi' => '3/4', // Fiński
                    'fr' => '3/4', // Francuski
                    'he' => '¾', // Hebrajski (często używa się znaku trzy czwarte)
                    'hi' => '3/4', // Hindi
                    'hr' => '3/4', // Chorwacki
                    'hu' => '3/4', // Węgierski
                    'hy' => '3/4', // Ormiański
                    'id' => '3/4', // Indonezyjski
                    'is' => '3/4', // Islandzki
                    'it' => '3/4', // Włoski
                    'ja' => '3/4', // Japoński
                    'ka' => '3/4', // Gruziński
                    'km' => '3/4', // Khmerski
                    'ko' => '3/4', // Koreański
                    'lb' => '3/4', // Luksemburski
                    'lo' => '3/4', // Laotański
                    'lt' => '3/4', // Litewski
                    'lv' => '3/4', // Łotewski
                    'me' => '3/4', // Czarnogórski
                    'mk' => '3/4', // Macedoński
                    'mn' => '3/4', // Mongołski
                    'ms' => '3/4', // Malajski
                    'my' => '3/4', // Birmański
                    'ne' => '3/4', // Nepalski
                    'nl' => '3/4', // Holenderski
                    'no' => '3/4', // Norweski
                    'pl' => '3/4', // Polski
                    'ps' => '3/4', // Paszto
                    'pt' => '3/4', // Portugalski
                    'ro' => '3/4', // Rumuński
                    'ru' => '3/4', // Rosyjski
                    'si' => '3/4', // Syngaleski
                    'sk' => '3/4', // Słowacki
                    'sl' => '3/4', // Słoweński
                    'sq' => '3/4', // Albański
                    'sr' => '3/4', // Serbski
                    'sv' => '3/4', // Szwedzki
                    'tg' => '3/4', // Tadżycki
                    'th' => '3/4', // Tajski
                    'tk' => '3/4', // Turkmeński
                    'tr' => '3/4', // Turecki
                    'uk' => '3/4', // Ukraiński
                    'uz' => '3/4', // Uzbecki
                    'vi' => '3/4', // Wietnamski
                    'zh' => '3/4' // Chiński
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 5,
                'name' => json_encode([
                    'am' => 'ለመወሰን ነው', // Amharski
                    'ar' => 'للتحديد', // Arabski
                    'az' => 'Müəyyənləşdiriləcək', // Azerski
                    'be' => 'Каб вызначыць', // Białoruski
                    'bg' => 'Да се определи', // Bułgarski
                    'bn' => 'নির্ধারণ করতে হবে', // Bengalski
                    'bs' => 'Za utvrđivanje', // Bośniacki
                    'ca' => 'Per determinar', // Kataloński
                    'cs' => 'K určení', // Czeski
                    'da' => 'Skal fastlægges', // Duński
                    'de' => 'Zu bestimmen', // Niemiecki
                    'dv' => 'ތަންޖެހެއްވުން', // Divehi (Malediwy)
                    'dz' => 'ངེས་འཛིན་བྱ་དགོས་པ།', // Dzongkha (Bhutan)
                    'el' => 'Προς καθορισμό', // Grecki
                    'en' => 'To be determined', // Angielski
                    'es' => 'Por determinar', // Hiszpański
                    'et' => 'Määrata', // Estoński
                    'fa' => 'برای تعیین', // Perski
                    'fi' => 'Määritettävä', // Fiński
                    'fr' => 'À déterminer', // Francuski
                    'he' => 'כדי לקבוע', // Hebrajski
                    'hi' => 'निर्धारित किया जाना है', // Hindi
                    'hr' => 'Za utvrditi', // Chorwacki
                    'hu' => 'Meghatározandó', // Węgierski
                    'hy' => 'Որոշելու համար', // Ormiański
                    'id' => 'Untuk ditentukan', // Indonezyjski
                    'is' => 'Ákveða þarf', // Islandzki
                    'it' => 'Da determinare', // Włoski
                    'ja' => '未定', // Japoński
                    'ka' => 'საკითხავია', // Gruziński
                    'km' => 'ត្រូវកំណត់', // Khmerski
                    'ko' => '결정해야 함', // Koreański
                    'lb' => 'Ze bestëmmen', // Luksemburski
                    'lo' => 'ຕ້ອງກໍານົດ', // Laotański
                    'lt' => 'Nustatyti', // Litewski
                    'lv' => 'Lai noteiktu', // Łotewski
                    'me' => 'Da se utvrdi', // Czarnogórski
                    'mk' => 'Да се утврди', // Macedoński
                    'mn' => 'Тодорхойлох', // Mongołski
                    'ms' => 'Untuk ditentukan', // Malajski
                    'my' => 'ဆုံးဖြတ်ရန်', // Birmański
                    'ne' => 'तोक्न बाँकी', // Nepalski
                    'nl' => 'Te bepalen', // Holenderski
                    'no' => 'Å bestemme', // Norweski
                    'pl' => 'Do ustalenia', // Polski
                    'ps' => 'د ټاکلو لپاره', // Paszto
                    'pt' => 'A determinar', // Portugalski
                    'ro' => 'De stabilit', // Rumuński
                    'ru' => 'Для определения', // Rosyjski
                    'si' => 'තීරණය කිරීමට', // Syngaleski
                    'sk' => 'Na určenie', // Słowacki
                    'sl' => 'Za določitev', // Słoweński
                    'sq' => 'Për t’u përcaktuar', // Albański
                    'sr' => 'Да се утврди', // Serbski
                    'sv' => 'Att fastställas', // Szwedzki
                    'tg' => 'Барои муайян кардан', // Tadżycki
                    'th' => 'ยังไม่กำหนด', // Tajski
                    'tk' => 'Kesgitlenmeli', // Turkmeński
                    'tr' => 'Belirlenecek', // Turecki
                    'uk' => 'Щоб визначити', // Ukraiński
                    'uz' => 'Aniqlanishi kerak', // Uzbecki
                    'vi' => 'Chưa xác định', // Wietnamski
                    'zh' => '待定' // Chiński
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
        ];

        DB::table('work_loads')->insert($work_loads);
    }
}
