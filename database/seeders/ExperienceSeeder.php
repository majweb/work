<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class ExperienceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Schema::disableForeignKeyConstraints();

        DB::table('experiences')->truncate();

        $experiences = [
            [
                'id' => 1,
                'name' => json_encode([
                    'am' => 'ያስፈልጋል', // Amharski
                    'ar' => 'مطلوب', // Arabski
                    'az' => 'Tələb olunur', // Azerski
                    'be' => 'Патрабуецца', // Białoruski
                    'bg' => 'Изисква се', // Bułgarski
                    'bn' => 'প্রয়োজন', // Bengalski
                    'bs' => 'Potrebno', // Bośniacki
                    'ca' => 'Requerit', // Kataloński
                    'cs' => 'Požadováno', // Czeski
                    'da' => 'Påkrævet', // Duński
                    'de' => 'Erforderlich', // Niemiecki
                    'dv' => 'ހަމަޖެހޭ', // Divehi
                    'dz' => 'དགོས་མཁོ།', // Dzongkha
                    'el' => 'Απαιτείται', // Grecki
                    'en' => 'Required', // Angielski
                    'es' => 'Requerido', // Hiszpański
                    'et' => 'Nõutav', // Estoński
                    'fa' => 'لازم است', // Perski
                    'fi' => 'Vaaditaan', // Fiński
                    'fr' => 'Requis', // Francuski
                    'he' => 'נדרש', // Hebrajski
                    'hi' => 'आवश्यक', // Hindi
                    'hr' => 'Potrebno', // Chorwacki
                    'hu' => 'Szükséges', // Węgierski
                    'hy' => 'Պահանջվում է', // Ormiański
                    'id' => 'Diperlukan', // Indonezyjski
                    'is' => 'Krafist', // Islandzki
                    'it' => 'Richiesto', // Włoski
                    'ja' => '必須', // Japoński
                    'ka' => 'საჭიროა', // Gruziński
                    'km' => 'ត្រូវការ', // Khmerski
                    'ko' => '필수', // Koreański
                    'lb' => 'Erfuerdert', // Luksemburski
                    'lo' => 'ຈຳເປັນ', // Laotański
                    'lt' => 'Reikalinga', // Litewski
                    'lv' => 'Nepieciešams', // Łotewski
                    'me' => 'Potrebno', // Czarnogórski
                    'mk' => 'Потребно', // Macedoński
                    'mn' => 'Шаардлагатай', // Mongołski
                    'ms' => 'Diperlukan', // Malajski
                    'my' => 'လိုအပ်သည်', // Birmański
                    'ne' => 'आवश्यक छ', // Nepalski
                    'nl' => 'Vereist', // Holenderski
                    'no' => 'Påkrevd', // Norweski
                    'pl' => 'Wymagane', // Polski
                    'ps' => 'ضروري', // Paszto
                    'pt' => 'Necessário', // Portugalski
                    'ro' => 'Necesar', // Rumuński
                    'ru' => 'Требуется', // Rosyjski
                    'si' => 'අවශ්‍යය', // Syngaleski
                    'sk' => 'Vyžaduje sa', // Słowacki
                    'sl' => 'Potrebno', // Słoweński
                    'sq' => 'E nevojshme', // Albański
                    'sr' => 'Потребно', // Serbski
                    'sv' => 'Krävs', // Szwedzki
                    'tg' => 'Талаб карда мешавад', // Tadżycki
                    'th' => 'จำเป็น', // Tajski
                    'tk' => 'Gerekli', // Turkmeński
                    'tr' => 'Gerekli', // Turecki
                    'uk' => 'Потрібно', // Ukraiński
                    'uz' => 'Talab qilinadi', // Uzbecki
                    'vi' => 'Bắt buộc', // Wietnamski
                    'zh' => '必需的' // Chiński
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],[
                'id' => 2,
                'name' => json_encode([
                    'am' => 'አልተጠየቀም', // Amharski
                    'ar' => 'غير مطلوب', // Arabski
                    'az' => 'Tələb olunmur', // Azerski
                    'be' => 'Не патрабуецца', // Białoruski
                    'bg' => 'Не се изисква', // Bułgarski
                    'bn' => 'প্রয়োজন নেই', // Bengalski
                    'bs' => 'Nije potrebno', // Bośniacki
                    'ca' => 'No requerit', // Kataloński
                    'cs' => 'Není požadováno', // Czeski
                    'da' => 'Ikke påkrævet', // Duński
                    'de' => 'Nicht erforderlich', // Niemiecki
                    'dv' => 'އެބަސްކުރެވޭނެއެއްނެތް', // Divehi
                    'dz' => 'མེད་པའི་དོ་དམ།', // Dzongkha
                    'el' => 'Δεν απαιτείται', // Grecki
                    'en' => 'Not required', // Angielski
                    'es' => 'No requerido', // Hiszpański
                    'et' => 'Pole nõutav', // Estoński
                    'fa' => 'لازم نیست', // Perski
                    'fi' => 'Ei vaadita', // Fiński
                    'fr' => 'Non requis', // Francuski
                    'he' => 'לא נדרש', // Hebrajski
                    'hi' => 'आवश्यक नहीं', // Hindi
                    'hr' => 'Nije potrebno', // Chorwacki
                    'hu' => 'Nem szükséges', // Węgierski
                    'hy' => 'Պահանջվող չէ', // Ormiański
                    'id' => 'Tidak diperlukan', // Indonezyjski
                    'is' => 'Ekki krafist', // Islandzki
                    'it' => 'Non richiesto', // Włoski
                    'ja' => '不要', // Japoński
                    'ka' => 'არ არის საჭირო', // Gruziński
                    'km' => 'មិនត្រូវការ', // Khmerski
                    'ko' => '필요하지 않음', // Koreański
                    'lb' => 'Net erfuerdert', // Luksemburski
                    'lo' => 'ບໍ່ຈຳເປັນ', // Laotański
                    'lt' => 'Nebūtina', // Litewski
                    'lv' => 'Nav nepieciešams', // Łotewski
                    'me' => 'Nije potrebno', // Czarnogórski
                    'mk' => 'Не е потребно', // Macedoński
                    'mn' => 'Шаардлагагүй', // Mongołski
                    'ms' => 'Tidak diperlukan', // Malajski
                    'my' => 'မလိုအပ်ပါ', // Birmański
                    'ne' => 'आवश्यक छैन', // Nepalski
                    'nl' => 'Niet vereist', // Holenderski
                    'no' => 'Ikke påkrevd', // Norweski
                    'pl' => 'Niewymagane', // Polski
                    'ps' => 'ضرورت نشته', // Paszto
                    'pt' => 'Não necessário', // Portugalski
                    'ro' => 'Nu este necesar', // Rumuński
                    'ru' => 'Не требуется', // Rosyjski
                    'si' => 'අවශ්‍ය නැත', // Syngaleski
                    'sk' => 'Nie je potrebné', // Słowacki
                    'sl' => 'Ni potrebno', // Słoweński
                    'sq' => 'Nuk kërkohet', // Albański
                    'sr' => 'Није потребно', // Serbski
                    'sv' => 'Inte nödvändigt', // Szwedzki
                    'tg' => 'Талаб карда намешавад', // Tadżycki
                    'th' => 'ไม่จำเป็น', // Tajski
                    'tk' => 'Gerekli däl', // Turkmeński
                    'tr' => 'Gerekli değil', // Turecki
                    'uk' => 'Не потрібно', // Ukraiński
                    'uz' => 'Kerak emas', // Uzbecki
                    'vi' => 'Không yêu cầu', // Wietnamski
                    'zh' => '不需要' // Chiński
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ]
        ];
        DB::table('experiences')->insert($experiences);
    }
}
