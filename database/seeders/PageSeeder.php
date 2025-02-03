<?php

namespace Database\Seeders;

use App\Models\Page;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class PageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Schema::disableForeignKeyConstraints();

        DB::table('pages')->truncate();

        Page::create([
            'title' => [
                'am' => 'መነሻ ገጽ', // Amharski
                'ar' => 'الصفحة الرئيسية', // Arabski
                'az' => 'Ana səhifə', // Azerski
                'be' => 'Галоўная старонка', // Białoruski
                'bg' => 'Начална страница', // Bułgarski
                'bn' => 'হোম পেজ', // Bengalski
                'bs' => 'Početna stranica', // Bośniacki
                'ca' => 'Pàgina principal', // Kataloński
                'cs' => 'Hlavní stránka', // Czeski
                'da' => 'Hjemmeside', // Duński
                'de' => 'Startseite', // Niemiecki
                'dv' => 'މައްސަލަ ޞަފްޙާ', // Divehi
                'dz' => 'གདོང་ཤོག', // Dzongkha
                'el' => 'Αρχική σελίδα', // Grecki
                'en' => 'Homepage', // Angielski
                'es' => 'Página principal', // Hiszpański
                'et' => 'Avaleht', // Estoński
                'fa' => 'صفحه اصلی', // Perski
                'fi' => 'Etusivu', // Fiński
                'fr' => 'Page d\'accueil', // Francuski
                'he' => 'דף הבית', // Hebrajski
                'hi' => 'मुखपृष्ठ', // Hindi
                'hr' => 'Početna stranica', // Chorwacki
                'hu' => 'Kezdőlap', // Węgierski
                'hy' => 'Գլխավոր էջ', // Ormiański
                'id' => 'Halaman utama', // Indonezyjski
                'is' => 'Heimasíða', // Islandzki
                'it' => 'Pagina principale', // Włoski
                'ja' => 'ホームページ', // Japoński
                'ka' => 'მთავარი გვერდი', // Gruziński
                'km' => 'ទំព័រដើម', // Khmerski
                'ko' => '홈페이지', // Koreański
                'lb' => 'Haaptsäit', // Luksemburski
                'lo' => 'ໜ້າທຳອິດ', // Laotański
                'lt' => 'Pagrindinis puslapis', // Litewski
                'lv' => 'Sākumlapa', // Łotewski
                'me' => 'Početna stranica', // Czarnogórski
                'mk' => 'Почетна страница', // Macedoński
                'mn' => 'Эхлэл хуудас', // Mongołski
                'ms' => 'Halaman utama', // Malajski
                'my' => 'ပင်မစာမျက်နှာ', // Birmański
                'ne' => 'मुख्य पृष्ठ', // Nepalski
                'nl' => 'Startpagina', // Holenderski
                'no' => 'Hjemmeside', // Norweski
                'pl' => 'Strona główna', // Polski
                'ps' => 'اصلي پاڼه', // Paszto
                'pt' => 'Página inicial', // Portugalski
                'ro' => 'Pagina principală', // Rumuński
                'ru' => 'Главная страница', // Rosyjski
                'si' => 'මුල් පිටුව', // Syngaleski
                'sk' => 'Hlavná stránka', // Słowacki
                'sl' => 'Domača stran', // Słoweński
                'sq' => 'Faqja kryesore', // Albański
                'sr' => 'Почетна страна', // Serbski
                'sv' => 'Hemsida', // Szwedzki
                'tg' => 'Саҳифаи асосӣ', // Tadżycki
                'th' => 'โฮมเพจ', // Tajski
                'tk' => 'Baş sahypa', // Turkmeński
                'tr' => 'Ana sayfa', // Turecki
                'uk' => 'Головна сторінка', // Ukraiński
                'uz' => 'Bosh sahifa', // Uzbecki
                'vi' => 'Trang chủ', // Wietnamski
                'zh' => '主页' // Chiński
            ],
            'image' => [
                'pl' => 'pages/front_fb.jpg',
                'en' => 'pages/front_fb.jpg'
            ],
            'description' => [
                'am' => 'በፖሊሽ መግለጫ', // Amharski
                'ar' => 'وصف باللغة البولندية', // Arabski
                'az' => 'Polşa dilində təsvir', // Azerski
                'be' => 'Апісанне на польскай', // Białoruski
                'bg' => 'Описание на полски', // Bułgarski
                'bn' => 'পোলিশ ভাষায় বিবরণ', // Bengalski
                'bs' => 'Opis na poljskom', // Bośniacki
                'ca' => 'Descripció en polonès', // Kataloński
                'cs' => 'Popis v polštině', // Czeski
                'da' => 'Beskrivelse på polsk', // Duński
                'de' => 'Beschreibung auf Polnisch', // Niemiecki
                'dv' => 'ޕޮލިޝު ދަރިވަސް މަޢުލޫމު', // Divehi
                'dz' => 'ཕོལ་ལིཤ་སྐད་ལུ་འགྲེམས་བཤད།', // Dzongkha
                'el' => 'Περιγραφή στα πολωνικά', // Grecki
                'en' => 'Description in Polish', // Angielski
                'es' => 'Descripción en polaco', // Hiszpański
                'et' => 'Kirjeldus poola keeles', // Estoński
                'fa' => 'توضیحات به زبان لهستانی', // Perski
                'fi' => 'Kuvaus puolaksi', // Fiński
                'fr' => 'Description en polonais', // Francuski
                'he' => 'תיאור בפולנית', // Hebrajski
                'hi' => 'पोलिश में विवरण', // Hindi
                'hr' => 'Opis na poljskom', // Chorwacki
                'hu' => 'Leírás lengyelül', // Węgierski
                'hy' => 'Նկարագրություն լեհերենով', // Ormiański
                'id' => 'Deskripsi dalam bahasa Polandia', // Indonezyjski
                'is' => 'Lýsing á pólsku', // Islandzki
                'it' => 'Descrizione in polacco', // Włoski
                'ja' => 'ポーランド語での説明', // Japoński
                'ka' => 'აღწერა პოლონურად', // Gruziński
                'km' => 'ការពិពណ៌នាជាភាសាប៉ូឡូញ', // Khmerski
                'ko' => '폴란드어로 설명', // Koreański
                'lb' => 'Beschreiwung op Polnesch', // Luksemburski
                'lo' => 'ຄຳອະທິບາຍໃນພາສາໂປໂລນ', // Laotański
                'lt' => 'Aprašymas lenkų kalba', // Litewski
                'lv' => 'Apraksts poļu valodā', // Łotewski
                'me' => 'Opis na poljskom', // Czarnogórski
                'mk' => 'Опис на полски', // Macedoński
                'mn' => 'Польш хэл дээр тайлбар', // Mongołski
                'ms' => 'Penerangan dalam bahasa Poland', // Malajski
                'my' => 'ပိုလန်ဘာသာဖြင့် ဖော်ပြချက်', // Birmański
                'ne' => 'पोलिश भाषामा विवरण', // Nepalski
                'nl' => 'Beschrijving in het Pools', // Holenderski
                'no' => 'Beskrivelse på polsk', // Norweski
                'pl' => 'Opis po polsku', // Polski
                'ps' => 'په پولنډۍ کې توضیحات', // Paszto
                'pt' => 'Descrição em polonês', // Portugalski
                'ro' => 'Descriere în poloneză', // Rumuński
                'ru' => 'Описание на польском', // Rosyjski
                'si' => 'පෝලිෂ් භාෂාවෙන් විස්තරය', // Syngaleski
                'sk' => 'Opis v poľštine', // Słowacki
                'sl' => 'Opis v poljščini', // Słoweński
                'sq' => 'Përshkrimi në polonisht', // Albański
                'sr' => 'Опис на пољском', // Serbski
                'sv' => 'Beskrivning på polska', // Szwedzki
                'tg' => 'Тавсиф бо забони лаҳистонӣ', // Tadżycki
                'th' => 'คำอธิบายเป็นภาษาโปแลนด์', // Tajski
                'tk' => 'Polýakça beýany', // Turkmeński
                'tr' => 'Lehçe açıklama', // Turecki
                'uk' => 'Опис польською', // Ukraiński
                'uz' => 'Polyak tilida ta\'rif', // Uzbecki
                'vi' => 'Mô tả bằng tiếng Ba Lan', // Wietnamski
                'zh' => '波兰语描述' // Chiński
            ],
            'keywords' => [
                'am' => 'ቁልፍ ቃላት', // Amharski
                'ar' => 'الكلمات الرئيسية', // Arabski
                'az' => 'Açar sözlər', // Azerski
                'be' => 'Ключавыя словы', // Białoruski
                'bg' => 'Ключови думи', // Bułgarski
                'bn' => 'কীওয়ার্ড', // Bengalski
                'bs' => 'Ključne riječi', // Bośniacki
                'ca' => 'Paraules clau', // Kataloński
                'cs' => 'Klíčová slova', // Czeski
                'da' => 'Nøgleord', // Duński
                'de' => 'Schlüsselwörter', // Niemiecki
                'dv' => 'ކީވަރޑު', // Divehi
                'dz' => 'མན་ཚིག', // Dzongkha
                'el' => 'Λέξεις-κλειδιά', // Grecki
                'en' => 'Keywords', // Angielski
                'es' => 'Palabras clave', // Hiszpański
                'et' => 'Märksõnad', // Estoński
                'fa' => 'کلمات کلیدی', // Perski
                'fi' => 'Avainsanat', // Fiński
                'fr' => 'Mots-clés', // Francuski
                'he' => 'מילות מפתח', // Hebrajski
                'hi' => 'कीवर्ड', // Hindi
                'hr' => 'Ključne riječi', // Chorwacki
                'hu' => 'Kulcsszavak', // Węgierski
                'hy' => 'Հիմնական բառեր', // Ormiański
                'id' => 'Kata kunci', // Indonezyjski
                'is' => 'Lykilorð', // Islandzki
                'it' => 'Parole chiave', // Włoski
                'ja' => 'キーワード', // Japoński
                'ka' => 'საკვანძო სიტყვები', // Gruziński
                'km' => 'ពាក្យគន្លឹះ', // Khmerski
                'ko' => '키워드', // Koreański
                'lb' => 'Schlësselwierder', // Luksemburski
                'lo' => 'ຄຳສຳຄັນ', // Laotański
                'lt' => 'Raktiniai žodžiai', // Litewski
                'lv' => 'Atslēgvārdi', // Łotewski
                'me' => 'Ključne riječi', // Czarnogórski
                'mk' => 'Клучни зборови', // Macedoński
                'mn' => 'Түлхүүр үгс', // Mongołski
                'ms' => 'Kata kunci', // Malajski
                'my' => 'အဓိက စကားလုံးများ', // Birmański
                'ne' => 'मुख्यशब्दहरू', // Nepalski
                'nl' => 'Trefwoorden', // Holenderski
                'no' => 'Nøkkelord', // Norweski
                'pl' => 'Słowa kluczowe', // Polski
                'ps' => 'کلیدي ټکي', // Paszto
                'pt' => 'Palavras-chave', // Portugalski
                'ro' => 'Cuvinte cheie', // Rumuński
                'ru' => 'Ключевые слова', // Rosyjski
                'si' => 'මූලික වචන', // Syngaleski
                'sk' => 'Kľúčové slová', // Słowacki
                'sl' => 'Ključne besede', // Słoweński
                'sq' => 'Fjalë kyçe', // Albański
                'sr' => 'Кључне речи', // Serbski
                'sv' => 'Nyckelord', // Szwedzki
                'tg' => 'Калимаҳои калидӣ', // Tadżycki
                'th' => 'คำสำคัญ', // Tajski
                'tk' => 'Açar sözler', // Turkmeński
                'tr' => 'Anahtar kelimeler', // Turecki
                'uk' => 'Ключові слова', // Ukraiński
                'uz' => 'Kalit so‘zlar', // Uzbecki
                'vi' => 'Từ khóa', // Wietnamski
                'zh' => '关键词' // Chiński
            ],
        ]);
    }
}
