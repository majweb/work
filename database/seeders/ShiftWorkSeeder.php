<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class ShiftWorkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Schema::disableForeignKeyConstraints();

        DB::table('shift_works')->truncate();

        $shift_works = [
            [
                'id' => 1,
                'name' => json_encode([
                    'am' => 'አዎ', // Amharski
                    'ar' => 'نعم', // Arabski
                    'az' => 'Bəli', // Azerski
                    'be' => 'Так', // Białoruski
                    'bg' => 'Да', // Bułgarski
                    'bn' => 'হ্যাঁ', // Bengalski
                    'bs' => 'Da', // Bośniacki
                    'ca' => 'Sí', // Kataloński
                    'cs' => 'Ano', // Czeski
                    'da' => 'Ja', // Duński
                    'de' => 'Ja', // Niemiecki
                    'dv' => 'އެއްގިއަކީ', // Divehi
                    'dz' => 'ཨེ་', // Dzongkha
                    'el' => 'Ναι', // Grecki
                    'en' => 'Yes', // Angielski
                    'es' => 'Sí', // Hiszpański
                    'et' => 'Jah', // Estoński
                    'fa' => 'بله', // Perski
                    'fi' => 'Kyllä', // Fiński
                    'fr' => 'Oui', // Francuski
                    'he' => 'כן', // Hebrajski
                    'hi' => 'हाँ', // Hindi
                    'hr' => 'Da', // Chorwacki
                    'hu' => 'Igen', // Węgierski
                    'hy' => 'Այո', // Ormiański
                    'id' => 'Ya', // Indonezyjski
                    'is' => 'Já', // Islandzki
                    'it' => 'Sì', // Włoski
                    'ja' => 'はい', // Japoński
                    'ka' => 'დიახ', // Gruziński
                    'km' => 'បាទ/ចា៎', // Khmerski
                    'ko' => '네', // Koreański
                    'lb' => 'Jo', // Luksemburski
                    'lo' => 'ແມ່ນ', // Laotański
                    'lt' => 'Taip', // Litewski
                    'lv' => 'Jā', // Łotewski
                    'me' => 'Da', // Czarnogórski
                    'mk' => 'Да', // Macedoński
                    'mn' => 'Тийм', // Mongołski
                    'ms' => 'Ya', // Malajski
                    'my' => 'ဟုတ်ကဲ့', // Birmański
                    'ne' => 'हो', // Nepalski
                    'nl' => 'Ja', // Holenderski
                    'no' => 'Ja', // Norweski
                    'pl' => 'Tak', // Polski
                    'ps' => 'هو', // Paszto
                    'pt' => 'Sim', // Portugalski
                    'ro' => 'Da', // Rumuński
                    'ru' => 'Да', // Rosyjski
                    'si' => 'ඔව්', // Syngaleski
                    'sk' => 'Áno', // Słowacki
                    'sl' => 'Da', // Słoweński
                    'sq' => 'Po', // Albański
                    'sr' => 'Да', // Serbski
                    'sv' => 'Ja', // Szwedzki
                    'tg' => 'Бале', // Tadżycki
                    'th' => 'ใช่', // Tajski
                    'tk' => 'Hawa', // Turkmeński
                    'tr' => 'Evet', // Turecki
                    'uk' => 'Так', // Ukraiński
                    'uz' => 'Ha', // Uzbecki
                    'vi' => 'Vâng', // Wietnamski
                    'zh' => '是', // Chiński
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],[
                'id' => 2,
                'name' => json_encode([
                    'am' => 'አይ', // Amharski
                    'ar' => 'لا', // Arabski
                    'az' => 'Xeyr', // Azerski
                    'be' => 'Не', // Białoruski
                    'bg' => 'Не', // Bułgarski
                    'bn' => 'না', // Bengalski
                    'bs' => 'Ne', // Bośniacki
                    'ca' => 'No', // Kataloński
                    'cs' => 'Ne', // Czeski
                    'da' => 'Nej', // Duński
                    'de' => 'Nein', // Niemiecki
                    'dv' => 'ނޫން', // Divehi
                    'dz' => 'མེད་', // Dzongkha
                    'el' => 'Όχι', // Grecki
                    'en' => 'No', // Angielski
                    'es' => 'No', // Hiszpański
                    'et' => 'Ei', // Estoński
                    'fa' => 'نه', // Perski
                    'fi' => 'Ei', // Fiński
                    'fr' => 'Non', // Francuski
                    'he' => 'לא', // Hebrajski
                    'hi' => 'नहीं', // Hindi
                    'hr' => 'Ne', // Chorwacki
                    'hu' => 'Nem', // Węgierski
                    'hy' => 'Ոչ', // Ormiański
                    'id' => 'Tidak', // Indonezyjski
                    'is' => 'Nei', // Islandzki
                    'it' => 'No', // Włoski
                    'ja' => 'いいえ', // Japoński
                    'ka' => 'არა', // Gruziński
                    'km' => 'ទេ', // Khmerski
                    'ko' => '아니요', // Koreański
                    'lb' => 'Nee', // Luksemburski
                    'lo' => 'ບໍ່', // Laotański
                    'lt' => 'Ne', // Litewski
                    'lv' => 'Nē', // Łotewski
                    'me' => 'Ne', // Czarnogórski
                    'mk' => 'Не', // Macedoński
                    'mn' => 'Үгүй', // Mongołski
                    'ms' => 'Tidak', // Malajski
                    'my' => 'မဟုတ်ဘူး', // Birmański
                    'ne' => 'होइन', // Nepalski
                    'nl' => 'Nee', // Holenderski
                    'no' => 'Nei', // Norweski
                    'pl' => 'Nie', // Polski
                    'ps' => 'نه', // Paszto
                    'pt' => 'Não', // Portugalski
                    'ro' => 'Nu', // Rumuński
                    'ru' => 'Нет', // Rosyjski
                    'si' => 'නැත', // Syngaleski
                    'sk' => 'Nie', // Słowacki
                    'sl' => 'Ne', // Słoweński
                    'sq' => 'Jo', // Albański
                    'sr' => 'Не', // Serbski
                    'sv' => 'Nej', // Szwedzki
                    'tg' => 'Не', // Tadżycki
                    'th' => 'ไม่', // Tajski
                    'tk' => 'Ýok', // Turkmeński
                    'tr' => 'Hayır', // Turecki
                    'uk' => 'Ні', // Ukraiński
                    'uz' => 'Yo‘q', // Uzbecki
                    'vi' => 'Không', // Wietnamski
                    'zh' => '否', // Chiński
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ]
            ];

        DB::table('shift_works')->insert($shift_works);
    }
}
