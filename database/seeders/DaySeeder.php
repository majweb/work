<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class DaySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Schema::disableForeignKeyConstraints();

        DB::table('days')->truncate();

        $days = [
            [
                'id' => 1,
                'name' => json_encode([
                    'am' => 'ሰኞ', // Amharski
                    'ar' => 'الاثنين', // Arabski
                    'az' => 'Bazar ertəsi', // Azerski
                    'be' => 'панядзелак', // Białoruski
                    'bg' => 'Понеделник', // Bułgarski
                    'bn' => 'সোমবার', // Bengalski
                    'bs' => 'Ponedjeljak', // Bośniacki
                    'ca' => 'Dilluns', // Kataloński
                    'cs' => 'Pondělí', // Czeski
                    'da' => 'Mandag', // Duński
                    'de' => 'Montag', // Niemiecki
                    'dv' => 'ހޯމަދު', // Divehi (Malediwy)
                    'dz' => 'གཟའ་ཟླ་བ་', // Dzongkha (Bhutan)
                    'el' => 'Δευτέρα', // Grecki
                    'en' => 'Monday', // Angielski
                    'es' => 'Lunes', // Hiszpański
                    'et' => 'Esmaspäev', // Estoński
                    'fa' => 'دوشنبه', // Perski
                    'fi' => 'Maanantai', // Fiński
                    'fr' => 'Lundi', // Francuski
                    'he' => 'יום שני', // Hebrajski
                    'hi' => 'सोमवार', // Hindi
                    'hr' => 'Ponedjeljak', // Chorwacki
                    'hu' => 'Hétfő', // Węgierski
                    'hy' => 'Երկուշաբթի', // Ormiański
                    'id' => 'Senin', // Indonezyjski
                    'is' => 'Mánudagur', // Islandzki
                    'it' => 'Lunedì', // Włoski
                    'ja' => '月曜日', // Japoński
                    'ka' => 'ორშაბათი', // Gruziński
                    'km' => 'ច័ន្ទ', // Khmerski
                    'ko' => '월요일', // Koreański
                    'lb' => 'Méindeg', // Luksemburski
                    'lo' => 'ວັນຈັນ', // Laotański
                    'lt' => 'Pirmadienis', // Litewski
                    'lv' => 'Pirmdiena', // Łotewski
                    'me' => 'Ponedjeljak', // Czarnogórski
                    'mk' => 'Понеделник', // Macedoński
                    'mn' => 'Даваа гараг', // Mongołski
                    'ms' => 'Isnin', // Malajski
                    'my' => 'တနင်္လာနေ့', // Birmański
                    'ne' => 'सोमबार', // Nepalski
                    'nl' => 'Maandag', // Holenderski
                    'no' => 'Mandag', // Norweski
                    'pl' => 'Poniedziałek', // Polski
                    'ps' => 'دوشنبه', // Paszto
                    'pt' => 'Segunda-feira', // Portugalski
                    'ro' => 'Luni', // Rumuński
                    'ru' => 'Понедельник', // Rosyjski
                    'si' => 'සඳුදා', // Syngaleski
                    'sk' => 'Pondelok', // Słowacki
                    'sl' => 'Ponedeljek', // Słoweński
                    'sq' => 'E hënë', // Albański
                    'sr' => 'Понедељак', // Serbski
                    'sv' => 'Måndag', // Szwedzki
                    'tg' => 'Душанбе', // Tadżycki
                    'th' => 'วันจันทร์', // Tajski
                    'tk' => 'Duşenbe', // Turkmeński
                    'tr' => 'Pazartesi', // Turecki
                    'uk' => 'Понеділок', // Ukraiński
                    'uz' => 'Dushanba', // Uzbecki
                    'vi' => 'Thứ hai', // Wietnamski
                    'zh' => '星期一' // Chiński
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],[
                'id' => 2,
                'name' => json_encode([
                    'am' => 'ማክሰኞ', // Amharski
                    'ar' => 'الثلاثاء', // Arabski
                    'az' => 'Çərşənbə axşamı', // Azerski
                    'be' => 'аўторак', // Białoruski
                    'bg' => 'Вторник', // Bułgarski
                    'bn' => 'মঙ্গলবার', // Bengalski
                    'bs' => 'Utorak', // Bośniacki
                    'ca' => 'Dimarts', // Kataloński
                    'cs' => 'Úterý', // Czeski
                    'da' => 'Tirsdag', // Duński
                    'de' => 'Dienstag', // Niemiecki
                    'dv' => 'އަންގާރައްޖެ', // Divehi (Malediwy)
                    'dz' => 'གཟའ་མིག་དམར་', // Dzongkha (Bhutan)
                    'el' => 'Τρίτη', // Grecki
                    'en' => 'Tuesday', // Angielski
                    'es' => 'Martes', // Hiszpański
                    'et' => 'Teisipäev', // Estoński
                    'fa' => 'سه‌شنبه', // Perski
                    'fi' => 'Tiistai', // Fiński
                    'fr' => 'Mardi', // Francuski
                    'he' => 'יום שלישי', // Hebrajski
                    'hi' => 'मंगलवार', // Hindi
                    'hr' => 'Utorak', // Chorwacki
                    'hu' => 'Kedd', // Węgierski
                    'hy' => 'Երեքշաբթի', // Ormiański
                    'id' => 'Selasa', // Indonezyjski
                    'is' => 'Þriðjudagur', // Islandzki
                    'it' => 'Martedì', // Włoski
                    'ja' => '火曜日', // Japoński
                    'ka' => 'სამშაბათი', // Gruziński
                    'km' => 'អង្គារ', // Khmerski
                    'ko' => '화요일', // Koreański
                    'lb' => 'Dënschdeg', // Luksemburski
                    'lo' => 'ວັນອັງຄານ', // Laotański
                    'lt' => 'Antradienis', // Litewski
                    'lv' => 'Otrdiena', // Łotewski
                    'me' => 'Utorak', // Czarnogórski
                    'mk' => 'Вторник', // Macedoński
                    'mn' => 'Мягмар гараг', // Mongołski
                    'ms' => 'Selasa', // Malajski
                    'my' => 'အင်္ဂါနေ့', // Birmański
                    'ne' => 'मंगलबार', // Nepalski
                    'nl' => 'Dinsdag', // Holenderski
                    'no' => 'Tirsdag', // Norweski
                    'pl' => 'Wtorek', // Polski
                    'ps' => 'سې شنبه', // Paszto
                    'pt' => 'Terça-feira', // Portugalski
                    'ro' => 'Marți', // Rumuński
                    'ru' => 'Вторник', // Rosyjski
                    'si' => 'අඟහරුවාදා', // Syngaleski
                    'sk' => 'Utorok', // Słowacki
                    'sl' => 'Torek', // Słoweński
                    'sq' => 'E martë', // Albański
                    'sr' => 'Уторак', // Serbski
                    'sv' => 'Tisdag', // Szwedzki
                    'tg' => 'Сешанбе', // Tadżycki
                    'th' => 'วันอังคาร', // Tajski
                    'tk' => 'Sişenbe', // Turkmeński
                    'tr' => 'Salı', // Turecki
                    'uk' => 'Вівторок', // Ukraiński
                    'uz' => 'Seshanba', // Uzbecki
                    'vi' => 'Thứ ba', // Wietnamski
                    'zh' => '星期二' // Chiński
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],[
                'id' => 3,
                'name' => json_encode([
                    'am' => 'ረቡዕ', // Amharski
                    'ar' => 'الأربعاء', // Arabski
                    'az' => 'Çərşənbə', // Azerski
                    'be' => 'серада', // Białoruski
                    'bg' => 'Сряда', // Bułgarski
                    'bn' => 'বুধবার', // Bengalski
                    'bs' => 'Srijeda', // Bośniacki
                    'ca' => 'Dimecres', // Kataloński
                    'cs' => 'Středa', // Czeski
                    'da' => 'Onsdag', // Duński
                    'de' => 'Mittwoch', // Niemiecki
                    'dv' => 'ބުދަ', // Divehi (Malediwy)
                    'dz' => 'གཟའ་ལྷག་པ་', // Dzongkha (Bhutan)
                    'el' => 'Τετάρτη', // Grecki
                    'en' => 'Wednesday', // Angielski
                    'es' => 'Miércoles', // Hiszpański
                    'et' => 'Kolmapäev', // Estoński
                    'fa' => 'چهارشنبه', // Perski
                    'fi' => 'Keskiviikko', // Fiński
                    'fr' => 'Mercredi', // Francuski
                    'he' => 'יום רביעי', // Hebrajski
                    'hi' => 'बुधवार', // Hindi
                    'hr' => 'Srijeda', // Chorwacki
                    'hu' => 'Szerda', // Węgierski
                    'hy' => 'Չորեքշաբթի', // Ormiański
                    'id' => 'Rabu', // Indonezyjski
                    'is' => 'Miðvikudagur', // Islandzki
                    'it' => 'Mercoledì', // Włoski
                    'ja' => '水曜日', // Japoński
                    'ka' => 'ოთხშაბათი', // Gruziński
                    'km' => 'ពុធ', // Khmerski
                    'ko' => '수요일', // Koreański
                    'lb' => 'Mëttwoch', // Luksemburski
                    'lo' => 'ວັນພຸດ', // Laotański
                    'lt' => 'Trečiadienis', // Litewski
                    'lv' => 'Trešdiena', // Łotewski
                    'me' => 'Srijeda', // Czarnogórski
                    'mk' => 'Среда', // Macedoński
                    'mn' => 'Лхагва гараг', // Mongołski
                    'ms' => 'Rabu', // Malajski
                    'my' => 'ဗုဒ္ဓဟူးနေ့', // Birmański
                    'ne' => 'बुधबार', // Nepalski
                    'nl' => 'Woensdag', // Holenderski
                    'no' => 'Onsdag', // Norweski
                    'pl' => 'Środa', // Polski
                    'ps' => 'چهارشنبه', // Paszto
                    'pt' => 'Quarta-feira', // Portugalski
                    'ro' => 'Miercuri', // Rumuński
                    'ru' => 'Среда', // Rosyjski
                    'si' => 'බදාදා', // Syngaleski
                    'sk' => 'Streda', // Słowacki
                    'sl' => 'Sreda', // Słoweński
                    'sq' => 'E mërkurë', // Albański
                    'sr' => 'Среда', // Serbski
                    'sv' => 'Onsdag', // Szwedzki
                    'tg' => 'Чоршанбе', // Tadżycki
                    'th' => 'วันพุธ', // Tajski
                    'tk' => 'Çarşenbe', // Turkmeński
                    'tr' => 'Çarşamba', // Turecki
                    'uk' => 'Середа', // Ukraiński
                    'uz' => 'Chorshanba', // Uzbecki
                    'vi' => 'Thứ tư', // Wietnamski
                    'zh' => '星期三' // Chiński
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 4,
                'name' => json_encode([
                    'am' => 'ሃሙስ', // Amharski
                    'ar' => 'الخميس', // Arabski
                    'az' => 'Cümə axşamı', // Azerski
                    'be' => 'чацвер', // Białoruski
                    'bg' => 'Четвъртък', // Bułgarski
                    'bn' => 'বৃহস্পতিবার', // Bengalski
                    'bs' => 'Četvrtak', // Bośniacki
                    'ca' => 'Dijous', // Kataloński
                    'cs' => 'Čtvrtek', // Czeski
                    'da' => 'Torsdag', // Duński
                    'de' => 'Donnerstag', // Niemiecki
                    'dv' => 'ބުރާސްފަތި', // Divehi (Malediwy)
                    'dz' => 'གཟའ་ཕུར་བུ་', // Dzongkha (Bhutan)
                    'el' => 'Πέμπτη', // Grecki
                    'en' => 'Thursday', // Angielski
                    'es' => 'Jueves', // Hiszpański
                    'et' => 'Neljapäev', // Estoński
                    'fa' => 'پنج‌شنبه', // Perski
                    'fi' => 'Torstai', // Fiński
                    'fr' => 'Jeudi', // Francuski
                    'he' => 'יום חמישי', // Hebrajski
                    'hi' => 'गुरुवार', // Hindi
                    'hr' => 'Četvrtak', // Chorwacki
                    'hu' => 'Csütörtök', // Węgierski
                    'hy' => 'Հինգշաբթի', // Ormiański
                    'id' => 'Kamis', // Indonezyjski
                    'is' => 'Fimmtudagur', // Islandzki
                    'it' => 'Giovedì', // Włoski
                    'ja' => '木曜日', // Japoński
                    'ka' => 'ხუთშაბათი', // Gruziński
                    'km' => 'ព្រហស្បតិ៍', // Khmerski
                    'ko' => '목요일', // Koreański
                    'lb' => 'Donneschdeg', // Luksemburski
                    'lo' => 'ວັນພະຫັດ', // Laotański
                    'lt' => 'Ketvirtadienis', // Litewski
                    'lv' => 'Ceturtdiena', // Łotewski
                    'me' => 'Četvrtak', // Czarnogórski
                    'mk' => 'Четврток', // Macedoński
                    'mn' => 'Пүрэв гараг', // Mongołski
                    'ms' => 'Khamis', // Malajski
                    'my' => 'ကြာသပတေးနေ့', // Birmański
                    'ne' => 'बिहीबार', // Nepalski
                    'nl' => 'Donderdag', // Holenderski
                    'no' => 'Torsdag', // Norweski
                    'pl' => 'Czwartek', // Polski
                    'ps' => 'پنجشنبه', // Paszto
                    'pt' => 'Quinta-feira', // Portugalski
                    'ro' => 'Joi', // Rumuński
                    'ru' => 'Четверг', // Rosyjski
                    'si' => 'පිඟිදා', // Syngaleski
                    'sk' => 'Štvrtok', // Słowacki
                    'sl' => 'Četrtek', // Słoweński
                    'sq' => 'E enjte', // Albański
                    'sr' => 'Четвртак', // Serbski
                    'sv' => 'Torsdag', // Szwedzki
                    'tg' => 'Панҷшанбе', // Tadżycki
                    'th' => 'วันพฤหัสบดี', // Tajski
                    'tk' => 'Penşenbe', // Turkmeński
                    'tr' => 'Perşembe', // Turecki
                    'uk' => 'Четвер', // Ukraiński
                    'uz' => 'Payshanba', // Uzbecki
                    'vi' => 'Thứ năm', // Wietnamski
                    'zh' => '星期四' // Chiński
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 5,
                'name' => json_encode([
                    'am' => 'ዓርብ', // Amharski
                    'ar' => 'الجمعة', // Arabski
                    'az' => 'Cümə', // Azerski
                    'be' => 'пятніца', // Białoruski
                    'bg' => 'Петък', // Bułgarski
                    'bn' => 'শুক্রবার', // Bengalski
                    'bs' => 'Petak', // Bośniacki
                    'ca' => 'Divendres', // Kataloński
                    'cs' => 'Pátek', // Czeski
                    'da' => 'Fredag', // Duński
                    'de' => 'Freitag', // Niemiecki
                    'dv' => 'ހުކުރު', // Divehi (Malediwy)
                    'dz' => 'གཟའ་པ་སངས་', // Dzongkha (Bhutan)
                    'el' => 'Παρασκευή', // Grecki
                    'en' => 'Friday', // Angielski
                    'es' => 'Viernes', // Hiszpański
                    'et' => 'Reede', // Estoński
                    'fa' => 'جمعه', // Perski
                    'fi' => 'Perjantai', // Fiński
                    'fr' => 'Vendredi', // Francuski
                    'he' => 'יום שישי', // Hebrajski
                    'hi' => 'शुक्रवार', // Hindi
                    'hr' => 'Petak', // Chorwacki
                    'hu' => 'Péntek', // Węgierski
                    'hy' => 'Ուրբաթ', // Ormiański
                    'id' => 'Jumat', // Indonezyjski
                    'is' => 'Föstudagur', // Islandzki
                    'it' => 'Venerdì', // Włoski
                    'ja' => '金曜日', // Japoński
                    'ka' => 'პარასკევი', // Gruziński
                    'km' => 'សុក្រ', // Khmerski
                    'ko' => '금요일', // Koreański
                    'lb' => 'Freideg', // Luksemburski
                    'lo' => 'ວັນສຸກ', // Laotański
                    'lt' => 'Penktadienis', // Litewski
                    'lv' => 'Piektdiena', // Łotewski
                    'me' => 'Petak', // Czarnogórski
                    'mk' => 'Петок', // Macedoński
                    'mn' => 'Баасан гараг', // Mongołski
                    'ms' => 'Jumaat', // Malajski
                    'my' => 'သောကြာနေ့', // Birmański
                    'ne' => 'शुक्रबार', // Nepalski
                    'nl' => 'Vrijdag', // Holenderski
                    'no' => 'Fredag', // Norweski
                    'pl' => 'Piątek', // Polski
                    'ps' => 'جمعه', // Paszto
                    'pt' => 'Sexta-feira', // Portugalski
                    'ro' => 'Vineri', // Rumuński
                    'ru' => 'Пятница', // Rosyjski
                    'si' => 'සිකුරාදා', // Syngaleski
                    'sk' => 'Piatok', // Słowacki
                    'sl' => 'Petek', // Słoweński
                    'sq' => 'E premte', // Albański
                    'sr' => 'Петак', // Serbski
                    'sv' => 'Fredag', // Szwedzki
                    'tg' => 'Ҷумъа', // Tadżycki
                    'th' => 'วันศุกร์', // Tajski
                    'tk' => 'Anna', // Turkmeński
                    'tr' => 'Cuma', // Turecki
                    'uk' => 'П’ятниця', // Ukraiński
                    'uz' => 'Juma', // Uzbecki
                    'vi' => 'Thứ sáu', // Wietnamski
                    'zh' => '星期五' // Chiński
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],[
                'id' => 6,
                'name' => json_encode([
                    'am' => 'ቅዳሜ', // Amharski
                    'ar' => 'السبت', // Arabski
                    'az' => 'Şənbə', // Azerski
                    'be' => 'субота', // Białoruski
                    'bg' => 'Събота', // Bułgarski
                    'bn' => 'শনিবার', // Bengalski
                    'bs' => 'Subota', // Bośniacki
                    'ca' => 'Dissabte', // Kataloński
                    'cs' => 'Sobota', // Czeski
                    'da' => 'Lørdag', // Duński
                    'de' => 'Samstag', // Niemiecki
                    'dv' => 'ހޮނިހިރު', // Divehi (Malediwy)
                    'dz' => 'གཟའ་སྤེན་པ་', // Dzongkha (Bhutan)
                    'el' => 'Σάββατο', // Grecki
                    'en' => 'Saturday', // Angielski
                    'es' => 'Sábado', // Hiszpański
                    'et' => 'Laupäev', // Estoński
                    'fa' => 'شنبه', // Perski
                    'fi' => 'Lauantai', // Fiński
                    'fr' => 'Samedi', // Francuski
                    'he' => 'שבת', // Hebrajski
                    'hi' => 'शनिवार', // Hindi
                    'hr' => 'Subota', // Chorwacki
                    'hu' => 'Szombat', // Węgierski
                    'hy' => 'Շաբաթ', // Ormiański
                    'id' => 'Sabtu', // Indonezyjski
                    'is' => 'Laugardagur', // Islandzki
                    'it' => 'Sabato', // Włoski
                    'ja' => '土曜日', // Japoński
                    'ka' => 'შაბათი', // Gruziński
                    'km' => 'សៅរ៍', // Khmerski
                    'ko' => '토요일', // Koreański
                    'lb' => 'Samschdeg', // Luksemburski
                    'lo' => 'ວັນເສົາ', // Laotański
                    'lt' => 'Šeštadienis', // Litewski
                    'lv' => 'Sestdiena', // Łotewski
                    'me' => 'Subota', // Czarnogórski
                    'mk' => 'Сабота', // Macedoński
                    'mn' => 'Бямба гараг', // Mongołski
                    'ms' => 'Sabtu', // Malajski
                    'my' => 'စနေနေ့', // Birmański
                    'ne' => 'शनिबार', // Nepalski
                    'nl' => 'Zaterdag', // Holenderski
                    'no' => 'Lørdag', // Norweski
                    'pl' => 'Sobota', // Polski
                    'ps' => 'شنبه', // Paszto
                    'pt' => 'Sábado', // Portugalski
                    'ro' => 'Sâmbătă', // Rumuński
                    'ru' => 'Суббота', // Rosyjski
                    'si' => 'සෙනසුරාදා', // Syngaleski
                    'sk' => 'Sobota', // Słowacki
                    'sl' => 'Sobota', // Słoweński
                    'sq' => 'E shtunë', // Albański
                    'sr' => 'Субота', // Serbski
                    'sv' => 'Lördag', // Szwedzki
                    'tg' => 'Шанбе', // Tadżycki
                    'th' => 'วันเสาร์', // Tajski
                    'tk' => 'Şenbe', // Turkmeński
                    'tr' => 'Cumartesi', // Turecki
                    'uk' => 'Субота', // Ukraiński
                    'uz' => 'Shanba', // Uzbecki
                    'vi' => 'Thứ bảy', // Wietnamski
                    'zh' => '星期六' // Chiński
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7,
                'name' => json_encode([
                    'am' => 'እሑድ', // Amharski
                    'ar' => 'الأحد', // Arabski
                    'az' => 'Bazar', // Azerski
                    'be' => 'нядзеля', // Białoruski
                    'bg' => 'Неделя', // Bułgarski
                    'bn' => 'রবিবার', // Bengalski
                    'bs' => 'Nedjelja', // Bośniacki
                    'ca' => 'Diumenge', // Kataloński
                    'cs' => 'Neděle', // Czeski
                    'da' => 'Søndag', // Duński
                    'de' => 'Sonntag', // Niemiecki
                    'dv' => 'އާދީއްތަ', // Divehi (Malediwy)
                    'dz' => 'གཟའ་ཉི་མ་', // Dzongkha (Bhutan)
                    'el' => 'Κυριακή', // Grecki
                    'en' => 'Sunday', // Angielski
                    'es' => 'Domingo', // Hiszpański
                    'et' => 'Pühapäev', // Estoński
                    'fa' => 'یک‌شنبه', // Perski
                    'fi' => 'Sunnuntai', // Fiński
                    'fr' => 'Dimanche', // Francuski
                    'he' => 'יום ראשון', // Hebrajski
                    'hi' => 'रविवार', // Hindi
                    'hr' => 'Nedjelja', // Chorwacki
                    'hu' => 'Vasárnap', // Węgierski
                    'hy' => 'Կիրակի', // Ormiański
                    'id' => 'Minggu', // Indonezyjski
                    'is' => 'Sunnudagur', // Islandzki
                    'it' => 'Domenica', // Włoski
                    'ja' => '日曜日', // Japoński
                    'ka' => 'კვირა', // Gruziński
                    'km' => 'អាទិត្យ', // Khmerski
                    'ko' => '일요일', // Koreański
                    'lb' => 'Sonndeg', // Luksemburski
                    'lo' => 'ວັນອາທິດ', // Laotański
                    'lt' => 'Sekmadienis', // Litewski
                    'lv' => 'Svētdiena', // Łotewski
                    'me' => 'Nedjelja', // Czarnogórski
                    'mk' => 'Недела', // Macedoński
                    'mn' => 'Ням гараг', // Mongołski
                    'ms' => 'Ahad', // Malajski
                    'my' => 'တနင်္ဂနွေနေ့', // Birmański
                    'ne' => 'आइतबार', // Nepalski
                    'nl' => 'Zondag', // Holenderski
                    'no' => 'Søndag', // Norweski
                    'pl' => 'Niedziela', // Polski
                    'ps' => 'یکشنبې', // Paszto
                    'pt' => 'Domingo', // Portugalski
                    'ro' => 'Duminică', // Rumuński
                    'ru' => 'Воскресенье', // Rosyjski
                    'si' => 'ඉරිදා', // Syngaleski
                    'sk' => 'Nedeľa', // Słowacki
                    'sl' => 'Nedelja', // Słoweński
                    'sq' => 'E diel', // Albański
                    'sr' => 'Недеља', // Serbski
                    'sv' => 'Söndag', // Szwedzki
                    'tg' => 'Якшанбе', // Tadżycki
                    'th' => 'วันอาทิตย์', // Tajski
                    'tk' => 'Ýekşenbe', // Turkmeński
                    'tr' => 'Pazar', // Turecki
                    'uk' => 'Неділя', // Ukraiński
                    'uz' => 'Yakshanba', // Uzbecki
                    'vi' => 'Chủ nhật', // Wietnamski
                    'zh' => '星期日' // Chiński
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ]
        ];
        DB::table('days')->insert($days);
    }
}
