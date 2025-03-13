<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CvTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Schema::disableForeignKeyConstraints();

        DB::table('cv_types')->truncate();
        $cv_types = [
            [
                'id' => 1,
                'name' => json_encode([
                    'am' => 'የባህል ሲቪ', // Amharski
                    'ar' => 'السيرة الذاتية الكلاسيكية', // Arabski
                    'az' => 'Klassik CV', // Azerski
                    'be' => 'Класічнае рэзюмэ', // Białoruski
                    'bg' => 'Класическо CV', // Bułgarski
                    'bn' => 'ক্লাসিক সিভি', // Bengalski
                    'bs' => 'Klasični CV', // Bośniacki
                    'ca' => 'CV clàssic', // Kataloński
                    'cs' => 'Klasické CV', // Czeski
                    'da' => 'Klassisk CV', // Duński
                    'de' => 'Klassischer Lebenslauf', // Niemiecki
                    'dv' => 'ކްލެސިކަލް ސީވީ', // Divehi (Malediwy)
                    'dz' => 'རིམ་ལུགས་ཀྱི་ངོས་འཛིན་', // Dzongkha (Bhutan)
                    'el' => 'Κλασικό Βιογραφικό', // Grecki
                    'en' => 'Classic CV', // Angielski
                    'es' => 'CV clásico', // Hiszpański
                    'et' => 'Klassikaline CV', // Estoński
                    'fa' => 'رزومه کلاسیک', // Perski
                    'fi' => 'Klassinen CV', // Fiński
                    'fr' => 'CV classique', // Francuski
                    'he' => 'קורות חיים קלאסיים', // Hebrajski
                    'hi' => 'क्लासिक सीवी', // Hindi
                    'hr' => 'Klasični životopis', // Chorwacki
                    'hu' => 'Klasszikus önéletrajz', // Węgierski
                    'hy' => 'Դասական ինքնակենսագրություն', // Ormiański
                    'id' => 'CV Klasik', // Indonezyjski
                    'is' => 'Klassískt ferilskrá', // Islandzki
                    'it' => 'CV classico', // Włoski
                    'ja' => 'クラシックな履歴書', // Japoński
                    'ka' => 'კლასიკური CV', // Gruziński
                    'km' => 'ប្រវត្តិរូបបុរាណ', // Khmerski
                    'ko' => '고전적인 이력서', // Koreański
                    'lb' => 'Klassesche CV', // Luksemburski
                    'lo' => 'ປະຫວັດສ່ວນຕົວແບບດັ້ງເດີມ', // Laotański
                    'lt' => 'Klasikinis CV', // Litewski
                    'lv' => 'Klasisks CV', // Łotewski
                    'me' => 'Klasični CV', // Czarnogórski
                    'mk' => 'Класично CV', // Macedoński
                    'mn' => 'Сонгодог намтар', // Mongołski
                    'ms' => 'CV Klasik', // Malajski
                    'my' => 'ရိုးရာ CV', // Birmański
                    'ne' => 'शास्त्रीय CV', // Nepalski
                    'nl' => 'Klassiek CV', // Holenderski
                    'no' => 'Klassisk CV', // Norweski
                    'pl' => 'Klasyczne CV', // Polski
                    'ps' => 'کلاسیک سی وی', // Paszto
                    'pt' => 'CV clássico', // Portugalski
                    'ro' => 'CV clasic', // Rumuński
                    'ru' => 'Классическое резюме', // Rosyjski
                    'si' => 'සම්භාව්‍ය ජීව දත්ත', // Syngaleski
                    'sk' => 'Klasické CV', // Słowacki
                    'sl' => 'Klasični življenjepis', // Słoweński
                    'sq' => 'CV klasike', // Albański
                    'sr' => 'Класични CV', // Serbski
                    'sv' => 'Klassiskt CV', // Szwedzki
                    'tg' => 'Резюмеи классикӣ', // Tadżycki
                    'th' => 'เรซูเม่แบบคลาสสิก', // Tajski
                    'tk' => 'Klassikiýa CV', // Turkmeński
                    'tr' => 'Klasik CV', // Turecki
                    'uk' => 'Класичне резюме', // Ukraiński
                    'uz' => 'Klassik CV', // Uzbecki
                    'vi' => 'CV cổ điển', // Wietnamski
                    'zh' => '经典简历' // Chiński
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 2,
                'name' => json_encode([
                    'am' => 'ቪድዮ ሪኮርቲንግ', // Amharic
                    'ar' => 'فيديو التوظيف', // Arabic
                    'az' => 'İşə qəbul video', // Azerbaijani
                    'be' => 'Рэкрутынгавы відэа', // Belarusian
                    'bg' => 'Видео за подбор на персонал', // Bulgarian
                    'bn' => 'নিয়োগ ভিডিও', // Bengali
                    'bs' => 'Rekruutacijski video', // Bosnian
                    'ca' => 'Vídeo de reclutament', // Catalan
                    'cs' => 'Rekreační video', // Czech
                    'da' => 'Rekrutteringsvideo', // Danish
                    'de' => 'Rekrutierungsvideo', // German
                    'dv' => 'ރިކުރައިންގަ ވިދިޔަ', // Divehi
                    'dz' => 'འབྲུག་པའི་བརྙན་འཛིན་', // Dzongkha
                    'el' => 'Βίντεο πρόσληψης', // Greek
                    'en' => 'Recruitment Video', // English
                    'es' => 'Video de contratación', // Spanish
                    'et' => 'Värbamisvideo', // Estonian
                    'fa' => 'ویدیو استخدام', // Persian
                    'fi' => 'Rekrytointivideo', // Finnish
                    'fr' => 'Vidéo de recrutement', // French
                    'he' => 'וידאו גיוס', // Hebrew
                    'hi' => 'भर्ती वीडियो', // Hindi
                    'hr' => 'Rekruutacijski video', // Croatian
                    'hu' => 'Toborzó videó', // Hungarian
                    'hy' => 'Ռեկրուտավորման տեսանյութ', // Armenian
                    'id' => 'Video rekrutmen', // Indonesian
                    'is' => 'Ráðningarmyndband', // Icelandic
                    'it' => 'Video di reclutamento', // Italian
                    'ja' => '採用ビデオ', // Japanese
                    'ka' => 'დასაქმების ვიდეო', // Georgian
                    'km' => 'វីដេអូបញ្ជូន', // Khmer
                    'ko' => '채용 비디오', // Korean
                    'lb' => 'Rekrutéierungsvideo', // Luxembourgish
                    'lo' => 'ວິດີໂອການສະເຫີີງ', // Lao
                    'lt' => 'Įdarbinimo vaizdo įrašas', // Lithuanian
                    'lv' => 'Nodarbināšanas video', // Latvian
                    'me' => 'Rekruterski video', // Montenegrin
                    'mk' => 'Видео за вработување', // Macedonian
                    'mn' => 'Ажлын видео', // Mongolian
                    'ms' => 'Video pengambilan', // Malay
                    'my' => 'ဗွီဒီယိုအလုပ်လျောက်', // Burmese
                    'ne' => 'रोजगारी भिडियो', // Nepali
                    'nl' => 'Wervingsvideo', // Dutch
                    'no' => 'Rekrutteringsvideo', // Norwegian
                    'pl' => 'Wideo rekrutacyjne', // Polish
                    'ps' => 'د ګمارنې ویډیو', // Pashto
                    'pt' => 'Vídeo de recrutamento', // Portuguese
                    'ro' => 'Video de recrutare', // Romanian
                    'ru' => 'Видео для набора персонала', // Russian
                    'si' => 'ඉල්ලුම් කිරීමේ වීඩියෝව', // Sinhala
                    'sk' => 'Náborové video', // Slovak
                    'sl' => 'Zaposlitveni video', // Slovenian
                    'sq' => 'Video rekrutimi', // Albanian
                    'sr' => 'Видео за запошљавање', // Serbian
                    'sv' => 'Rekryteringsvideo', // Swedish
                    'tg' => 'Видео на пази яку', // Tajik
                    'th' => 'วิดีโอการสรรหา', // Thai
                    'tk' => 'Işe kabul wideo', // Turkmen
                    'tr' => 'İşe alım videosu', // Turkish
                    'uk' => 'Відео для набору персоналу', // Ukrainian
                    'uz' => 'Ishga qabul videosi', // Uzbek
                    'vi' => 'Video tuyển dụng', // Vietnamese
                    'zh' => '招聘视频' // Chinese
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 3,
                'name' => json_encode([
                    'am' => 'ድምፅ ሪኮርቲንግ', // Amharic
                    'ar' => 'فيديو التوظيف الصوتي', // Arabic
                    'az' => 'Audio işə qəbul', // Azerbaijani
                    'be' => 'Аўдыё рэкрутмент', // Belarusian
                    'bg' => 'Аудио за подбор на персонал', // Bulgarian
                    'bn' => 'অডিও নিয়োগ', // Bengali
                    'bs' => 'Audio rekruting', // Bosnian
                    'ca' => 'Áudio de reclutament', // Catalan
                    'cs' => 'Audio nábor', // Czech
                    'da' => 'Rekrutteringslyd', // Danish
                    'de' => 'Rekrutierungsaudio', // German
                    'dv' => 'ރިކުރައިންގަ މިދިޔަ', // Divehi
                    'dz' => 'འབྲུག་པའི་བརྙན་འཛིན་', // Dzongkha
                    'el' => 'Ακουστική πρόσληψη', // Greek
                    'en' => 'Audio Recruitment', // English
                    'es' => 'Audio de contratación', // Spanish
                    'et' => 'Heli värbamis', // Estonian
                    'fa' => 'صوتی استخدام', // Persian
                    'fi' => 'Rekrytointiaudio', // Finnish
                    'fr' => 'Audio de recrutement', // French
                    'he' => 'האזנה לגיוס', // Hebrew
                    'hi' => 'ऑडियो भर्ती', // Hindi
                    'hr' => 'Audio regrutacija', // Croatian
                    'hu' => 'Toborzó hanganyag', // Hungarian
                    'hy' => 'Ակուստիկ ռեկրուտավորում', // Armenian
                    'id' => 'Rekrutmen audio', // Indonesian
                    'is' => 'Ráðningarljóð', // Icelandic
                    'it' => 'Audio di reclutamento', // Italian
                    'ja' => '採用音声', // Japanese
                    'ka' => 'დასაქმების ხმა', // Georgian
                    'km' => 'អូឌីអូការជ្រើសរើស', // Khmer
                    'ko' => '오디오 채용', // Korean
                    'lb' => 'Rekrutéierungsaudio', // Luxembourgish
                    'lo' => 'ສຽງການສະເຫີີງ', // Lao
                    'lt' => 'Įdarbinimo garso įrašas', // Lithuanian
                    'lv' => 'Nodarbināšanas audio', // Latvian
                    'me' => 'Audio za zapošljavanje', // Montenegrin
                    'mk' => 'Аудио за вработување', // Macedonian
                    'mn' => 'Ажлын аудио', // Mongolian
                    'ms' => 'Audio pengambilan', // Malay
                    'my' => 'အလုပ်ခေါ်စာအသံ', // Burmese
                    'ne' => 'अडियो भर्ती', // Nepali
                    'nl' => 'Wervingsaudio', // Dutch
                    'no' => 'Rekrutteringslyd', // Norwegian
                    'pl' => 'Audio rekrutacyjne', // Polish
                    'ps' => 'د ګمارنې غږ', // Pashto
                    'pt' => 'Áudio de recrutamento', // Portuguese
                    'ro' => 'Audio de recrutare', // Romanian
                    'ru' => 'Аудио для набора персонала', // Russian
                    'si' => 'ඉල්ලුම් කිරීමේ ශබ්ද', // Sinhala
                    'sk' => 'Audio nábor', // Slovak
                    'sl' => 'Zaposlitveni zvok', // Slovenian
                    'sq' => 'Audio rekrutimi', // Albanian
                    'sr' => 'Аудио за запошљавање', // Serbian
                    'sv' => 'Rekryteringsljud', // Swedish
                    'tg' => 'Аудио на пази яку', // Tajik
                    'th' => 'เสียงการสรรหา', // Thai
                    'tk' => 'Işe kabul sesli', // Turkmen
                    'tr' => 'İşe alım ses kaydı', // Turkish
                    'uk' => 'Аудіо для набору персоналу', // Ukrainian
                    'uz' => 'Ishga qabul ovozi', // Uzbek
                    'vi' => 'Âm thanh tuyển dụng', // Vietnamese
                    'zh' => '招聘音频' // Chinese
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 4,
                'name' => json_encode([
                    'am' => 'ፕሮባ', // Amharic
                    'ar' => 'اختبار التوظيف', // Arabic
                    'az' => 'İşə qəbul testi', // Azerbaijani
                    'be' => 'Рэкрутынгавы тэст', // Belarusian
                    'bg' => 'Тест за подбор на персонал', // Bulgarian
                    'bn' => 'নিয়োগ পরীক্ষা', // Bengali
                    'bs' => 'Test za regrutaciju', // Bosnian
                    'ca' => 'Prova de selecció', // Catalan
                    'cs' => 'Náborový test', // Czech
                    'da' => 'Rekrutteringsprøve', // Danish
                    'de' => 'Rekrutierungstest', // German
                    'dv' => 'ރިކުރައިންގަ ޓެސްޓް', // Divehi
                    'dz' => 'འབྲུག་པའི་བསྡུར་བསྐྱོད་', // Dzongkha
                    'el' => 'Δοκιμή πρόσληψης', // Greek
                    'en' => 'Recruitment Test', // English
                    'es' => 'Prueba de reclutamiento', // Spanish
                    'et' => 'Värbamiseksam', // Estonian
                    'fa' => 'آزمون استخدام', // Persian
                    'fi' => 'Rekrytointitesti', // Finnish
                    'fr' => 'Test de recrutement', // French
                    'he' => 'מבחן גיוס', // Hebrew
                    'hi' => 'भर्ती परीक्षा', // Hindi
                    'hr' => 'Test za regrutaciju', // Croatian
                    'hu' => 'Toborzó teszt', // Hungarian
                    'hy' => 'Ռեկրուտավորման թեստ', // Armenian
                    'id' => 'Tes rekrutmen', // Indonesian
                    'is' => 'Ráðningartest', // Icelandic
                    'it' => 'Test di reclutamento', // Italian
                    'ja' => '採用テスト', // Japanese
                    'ka' => 'დასაქმების ტესტი', // Georgian
                    'km' => 'តេស្តការជ្រើសរើស', // Khmer
                    'ko' => '채용 시험', // Korean
                    'lb' => 'Rekrutéierungstest', // Luxembourgish
                    'lo' => 'ການທົດສອບການສະເຫີີງ', // Lao
                    'lt' => 'Įdarbinimo testas', // Lithuanian
                    'lv' => 'Nodarbināšanas tests', // Latvian
                    'me' => 'Test za zapošljavanje', // Montenegrin
                    'mk' => 'Тест за вработување', // Macedonian
                    'mn' => 'Ажлын шалгалт', // Mongolian
                    'ms' => 'Ujian pengambilan', // Malay
                    'my' => 'အလုပ်ခေါ်စာ စမ်းသပ်ခြင်း', // Burmese
                    'ne' => 'भर्ती परीक्षा', // Nepali
                    'nl' => 'Wervings test', // Dutch
                    'no' => 'Rekrutteringstest', // Norwegian
                    'pl' => 'Test rekrutacyjny', // Polish
                    'ps' => 'د ګمارنې ازموینه', // Pashto
                    'pt' => 'Teste de recrutamento', // Portuguese
                    'ro' => 'Test de recrutare', // Romanian
                    'ru' => 'Тест для набора персонала', // Russian
                    'si' => 'ගිවුම් පරීක්ෂණය', // Sinhala
                    'sk' => 'Test náboru', // Slovak
                    'sl' => 'Zaposlitveni test', // Slovenian
                    'sq' => 'Testi i rekrutimit', // Albanian
                    'sr' => 'Тест за запошљавање', // Serbian
                    'sv' => 'Rekryteringstest', // Swedish
                    'tg' => 'Тести на пази яку', // Tajik
                    'th' => 'การทดสอบการสรรหา', // Thai
                    'tk' => 'Işe alım testi', // Turkmen
                    'tr' => 'İşe alım testi', // Turkish
                    'uk' => 'Тест для набору персоналу', // Ukrainian
                    'uz' => 'Ishga qabul testi', // Uzbek
                    'vi' => 'Bài kiểm tra tuyển dụng', // Vietnamese
                    'zh' => '招聘测试' // Chinese
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
        ];
        DB::table('cv_types')->insert($cv_types);
    }
}
