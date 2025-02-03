<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Schema::disableForeignKeyConstraints();

        Role::truncate();
        Permission::truncate();
        Role::create(['name' => 'firm']);
        $recruit = Role::create(['name' => 'recruit']);
        Role::create(['name' => 'worker']);
        Role::create(['name' => 'admin']);

        Permission::create(['name' => 'show offerts','trans'=>json_encode([
            'am' => 'ማታያያት አቅርቦት', // Amharski
            'ar' => 'عرض العروض', // Arabski
            'az' => 'Təklifləri göstərin', // Azerski
            'be' => 'Пакажыце прапановы', // Białoruski
            'bg' => 'Покажи офертите', // Bułgarski
            'bn' => 'অফারগুলি দেখান', // Bengalski
            'bs' => 'Prikaži ponude', // Bośniacki
            'ca' => 'Mostra les ofertes', // Kataloński
            'cs' => 'Zobrazit nabídky', // Czeski
            'da' => 'Vis tilbud', // Duński
            'de' => 'Angebote anzeigen', // Niemiecki
            'dv' => 'އިންސަލާ ދައްކަން', // Divehi
            'dz' => 'གནས་ཚུ་བསྟན་ནི།', // Dzongkha
            'el' => 'Δείξε προσφορές', // Grecki
            'en' => 'Show offers', // Angielski
            'es' => 'Mostrar ofertas', // Hiszpański
            'et' => 'Näita pakkumisi', // Estoński
            'fa' => 'نمایش پیشنهادات', // Perski
            'fi' => 'Näytä tarjoukset', // Fiński
            'fr' => 'Afficher les offres', // Francuski
            'he' => 'הצג הצעות', // Hebrajski
            'hi' => 'ऑफ़र दिखाएं', // Hindi
            'hr' => 'Prikaži ponude', // Chorwacki
            'hu' => 'Ajánlatok megjelenítése', // Węgierski
            'hy' => 'Ցույց տալ առաջարկները', // Ormiański
            'id' => 'Tampilkan penawaran', // Indonezyjski
            'is' => 'Sýna tilboð', // Islandzki
            'it' => 'Mostra le offerte', // Włoski
            'ja' => 'オファーを表示', // Japoński
            'ka' => 'აჩვენეთ შეთავაზებები', // Gruziński
            'km' => 'បង្ហាញការផ្ដល់ជូន', // Khmerski
            'ko' => '제안을 표시하다', // Koreański
            'lb' => 'Offeren weisen', // Luksemburski
            'lo' => 'ສະແດງຂໍ້ສະເຫນີ', // Laotański
            'lt' => 'Rodyti pasiūlymus', // Litewski
            'lv' => 'Rādīt piedāvājumus', // Łotewski
            'me' => 'Prikaži ponude', // Czarnogórski
            'mk' => 'Покажи понуди', // Macedoński
            'mn' => 'Санал харуулах', // Mongołski
            'ms' => 'Tunjukkan tawaran', // Malajski
            'my' => 'အဆိုပြုချက်များကိုပြပါ', // Birmański
            'ne' => 'प्रस्तावहरू देखाउनुहोस्', // Nepalski
            'nl' => 'Toon aanbiedingen', // Holenderski
            'no' => 'Vis tilbud', // Norweski
            'pl' => 'Pokaż oferty', // Polski
            'ps' => 'وړاندیزونه ښکاره کړئ', // Paszto
            'pt' => 'Mostrar ofertas', // Portugalski
            'ro' => 'Afișează oferte', // Rumuński
            'ru' => 'Показать предложения', // Rosyjski
            'si' => 'ඉදිරිපත් කිරීම පෙන්වන්න', // Syngaleski
            'sk' => 'Zobraziť ponuky', // Słowacki
            'sl' => 'Prikaži ponudbe', // Słoweński
            'sq' => 'Trego ofertat', // Albański
            'sr' => 'Прикажи понуде', // Serbski
            'sv' => 'Visa erbjudanden', // Szwedzki
            'tg' => 'Пешниҳодҳоро нишон диҳед', // Tadżycki
            'th' => 'แสดงข้อเสนอ', // Tajski
            'tk' => 'Teklipleri görkez', // Turkmeński
            'tr' => 'Teklifleri göster', // Turecki
            'uk' => 'Показати пропозиції', // Ukraiński
            'uz' => 'Takliflarni ko‘rsatish', // Uzbecki
            'vi' => 'Hiển thị ưu đãi', // Wietnamski
            'zh' => '显示优惠' // Chiński
        ])]);
        Permission::create(['name' => 'show apps','trans'=>json_encode([
            'am' => 'መተግበሪያዎችን አሳይ', // Amharski
            'ar' => 'عرض التطبيقات', // Arabski
            'az' => 'Tətbiqləri göstərin', // Azerski
            'be' => 'Пакажыце прыкладанні', // Białoruski
            'bg' => 'Покажи приложенията', // Bułgarski
            'bn' => 'অ্যাপ্লিকেশনগুলি দেখান', // Bengalski
            'bs' => 'Prikaži aplikacije', // Bośniacki
            'ca' => 'Mostra les aplicacions', // Kataloński
            'cs' => 'Zobrazit aplikace', // Czeski
            'da' => 'Vis apps', // Duński
            'de' => 'Apps anzeigen', // Niemiecki
            'dv' => 'އެޕްލިކޭޝަންތައް ދައްކަން', // Divehi
            'dz' => 'རིགས་མཐུན་བཀོད་ཆུང་བའི་སྤྱོད།', // Dzongkha
            'el' => 'Εμφάνιση εφαρμογών', // Grecki
            'en' => 'Show applications', // Angielski
            'es' => 'Mostrar aplicaciones', // Hiszpański
            'et' => 'Näita rakendusi', // Estoński
            'fa' => 'نمایش برنامه‌ها', // Perski
            'fi' => 'Näytä sovellukset', // Fiński
            'fr' => 'Afficher les applications', // Francuski
            'he' => 'הצג יישומים', // Hebrajski
            'hi' => 'एप्लिकेशन दिखाएं', // Hindi
            'hr' => 'Prikaži aplikacije', // Chorwacki
            'hu' => 'Alkalmazások megjelenítése', // Węgierski
            'hy' => 'Ցույց տալ հավելվածները', // Ormiański
            'id' => 'Tampilkan aplikasi', // Indonezyjski
            'is' => 'Sýna forrit', // Islandzki
            'it' => 'Mostra le applicazioni', // Włoski
            'ja' => 'アプリケーションを表示', // Japoński
            'ka' => 'აჩვენეთ აპლიკაციები', // Gruziński
            'km' => 'បង្ហាញកម្មវិធី', // Khmerski
            'ko' => '애플리케이션 표시', // Koreański
            'lb' => 'Weist Uwendungen', // Luksemburski
            'lo' => 'ສະແດງແອັບພລິເຄຊັນ', // Laotański
            'lt' => 'Rodyti programas', // Litewski
            'lv' => 'Rādīt lietotnes', // Łotewski
            'me' => 'Prikaži aplikacije', // Czarnogórski
            'mk' => 'Покажи апликации', // Macedoński
            'mn' => 'Програмуудыг харуулах', // Mongołski
            'ms' => 'Tunjukkan aplikasi', // Malajski
            'my' => 'အပလီကေးရှင်းများကို ပြပါ', // Birmański
            'ne' => 'अनुप्रयोगहरू देखाउनुहोस्', // Nepalski
            'nl' => 'Toon applicaties', // Holenderski
            'no' => 'Vis applikasjoner', // Norweski
            'pl' => 'Pokaż aplikacje', // Polski
            'ps' => 'درخواستونه ښکاره کړئ', // Paszto
            'pt' => 'Mostrar aplicativos', // Portugalski
            'ro' => 'Afișează aplicații', // Rumuński
            'ru' => 'Показать приложения', // Rosyjski
            'si' => 'අයදුම්පත් පෙන්වන්න', // Syngaleski
            'sk' => 'Zobraziť aplikácie', // Słowacki
            'sl' => 'Prikaži aplikacije', // Słoweński
            'sq' => 'Trego aplikacionet', // Albański
            'sr' => 'Прикажи апликације', // Serbski
            'sv' => 'Visa applikationer', // Szwedzki
            'tg' => 'Барномаҳо нишон диҳед', // Tadżycki
            'th' => 'แสดงแอปพลิเคชัน', // Tajski
            'tk' => 'Programmalary görkez', // Turkmeński
            'tr' => 'Uygulamaları göster', // Turecki
            'uk' => 'Показати програми', // Ukraiński
            'uz' => 'Ilovalarni ko‘rsatish', // Uzbecki
            'vi' => 'Hiển thị ứng dụng', // Wietnamski
            'zh' => '显示应用程序' // Chiński
        ])]);
        Permission::create(['name' => 'transport video','trans'=>json_encode([
            'am' => 'ትራንስፖርት ቪዲዮ', // Amharski
            'ar' => 'فيديو النقل', // Arabski
            'az' => 'Nəqliyyat video', // Azerski
            'be' => 'Транспартнае відэа', // Białoruski
            'bg' => 'Транспортно видео', // Bułgarski
            'bn' => 'পরিবহন ভিডিও', // Bengalski
            'bs' => 'Transport video', // Bośniacki
            'ca' => 'Vídeo de transport', // Kataloński
            'cs' => 'Doprava video', // Czeski
            'da' => 'Transportvideo', // Duński
            'de' => 'Transportvideo', // Niemiecki
            'dv' => 'ތަންނެބްނެ ވިދިޯ', // Divehi
            'dz' => 'ལས་གཞིའི ቪዲዮ', // Dzongkha
            'el' => 'Βίντεο μεταφοράς', // Grecki
            'en' => 'Transport video', // Angielski
            'es' => 'Video de transporte', // Hiszpański
            'et' => 'Transportvideo', // Estoński
            'fa' => 'ویدیو حمل و نقل', // Perski
            'fi' => 'Kuljetusvideo', // Fiński
            'fr' => 'Vidéo de transport', // Francuski
            'he' => 'וידאו תחבורה', // Hebrajski
            'hi' => 'परिवहन वीडियो', // Hindi
            'hr' => 'Transport video', // Chorwacki
            'hu' => 'Szállítási videó', // Węgierski
            'hy' => 'Տրանսպորտի վիդեո', // Ormiański
            'id' => 'Video transportasi', // Indonezyjski
            'is' => 'Flutningsmyndband', // Islandzki
            'it' => 'Video di trasporto', // Włoski
            'ja' => '輸送ビデオ', // Japoński
            'ka' => 'ტრანსპორტის ვიდეო', // Gruziński
            'km' => 'វីដេអូដឹកជញ្ជូន', // Khmerski
            'ko' => '운송 비디오', // Koreański
            'lb' => 'Transportvideo', // Luksemburski
            'lo' => 'ວີດີໂອການຂົນສົ່ງ', // Laotański
            'lt' => 'Transporto vaizdo įrašas', // Litewski
            'lv' => 'Transporta video', // Łotewski
            'me' => 'Transport video', // Czarnogórski
            'mk' => 'Транспорт видео', // Macedoński
            'mn' => 'Тээвэр видео', // Mongołski
            'ms' => 'Video pengangkutan', // Malajski
            'my' => 'ဗီဒီယို ကူးယူမှု', // Birmański
            'ne' => 'परिवहन भिडियो', // Nepalski
            'nl' => 'Transport video', // Holenderski
            'no' => 'Transportvideo', // Norweski
            'pl' => 'Transport video', // Polski
            'ps' => 'د ترانسپورت ویدیو', // Paszto
            'pt' => 'Vídeo de transporte', // Portugalski
            'ro' => 'Video de transport', // Rumuński
            'ru' => 'Транспортное видео', // Rosyjski
            'si' => 'පාරිභෝගික වීඩියෝ', // Syngaleski
            'sk' => 'Doprava video', // Słowacki
            'sl' => 'Transport video', // Słoweński
            'sq' => 'Video transporti', // Albański
            'sr' => 'Транспортно видео', // Serbski
            'sv' => 'Transportvideo', // Szwedzki
            'tg' => 'Видеои интиқол', // Tadżycki
            'th' => 'วิดีโอการขนส่ง', // Tajski
            'tk' => 'Transport wideo', // Turkmeński
            'tr' => 'Taşıma videosu', // Turecki
            'uk' => 'Транспортне відео', // Ukraiński
            'uz' => 'Transport video', // Uzbecki
            'vi' => 'Video vận chuyển', // Wietnamski
            'zh' => '运输视频' // Chiński
        ])]);
//
//        $recruit->givePermissionTo($offerts);
//        $recruit->givePermissionTo($apps);
//        $recruit->givePermissionTo($transport);

        Schema::enableForeignKeyConstraints();
    }
}
