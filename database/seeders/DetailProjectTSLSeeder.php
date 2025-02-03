<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class DetailProjectTSLSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        Schema::disableForeignKeyConstraints();

        $KIEROWNIK_DZIAŁU_LOGISTYKI = [
            [
                "id" => 18921,
                "name" => json_encode([
                    "pl" => "Planowanie i optymalizacja procesów logistycznych w firmie",
                    "en" => "Planning and optimizing logistics processes in the company.",
                    "ar" => "تخطيط وتحسين العمليات اللوجستية في الشركة",
                    "pt" => "Planejamento e otimização de processos logísticos na empresa",
                    "fr" => "Planification et optimisation des processus logistiques dans l'entreprise",
                    "am" => "የሎጂስቲክስ ሂደቶችን ማቀድ እና ማመቻቸት በኩባንያው ውስጥ",
                    "es" => "Planificación y optimización de procesos logísticos en la empresa",
                    "nl" => "Planning en optimalisatie van logistieke processen in het bedrijf",
                    "ps" => "د شرکت په داخل کې د لاجستیک پروسو پلان جوړونه او ښه کول",
                    "hy" => "Լոգիստիկ գործընթացների պլանավորում և օպտիմալացում ընկերությունում",
                    "az" => "Şirkətdə logistika proseslərinin planlaşdırılması və optimallaşdırılması",
                    "bn" => "কোম্পানিতে লজিস্টিক প্রক্রিয়া পরিকল্পনা এবং অপ্টিমাইজেশন",
                    "dz" => "ཁྱིམ་ཚང་གི་ནང་དུ་ལོ་ཇིས་ཊིཀས་བྱེད་སྒྲིག་དང་བཟོ་སྒྲིག་བྱེད་པ།",
                    "ms" => "Perancangan dan pengoptimuman proses logistik dalam syarikat",
                    "zh" => "公司物流流程的规划和优化",
                    "ka" => "კომპანიაში ლოგისტიკური პროცესების დაგეგმვა და ოპტიმიზაცია",
                    "hi" => "कंपनी में लॉजिस्टिक प्रक्रियाओं की योजना और अनुकूलन",
                    "id" => "Perencanaan dan pengoptimalan proses logistik di perusahaan",
                    "fa" => "برنامه‌ریزی و بهینه‌سازی فرآیندهای لجستیک در شرکت",
                    "he" => "תכנון ואופטימיזציה של תהליכים לוגיסטיים בחברה",
                    "ja" => "会社内の物流プロセスの計画と最適化",
                    "km" => "ការរៀបចំផែនការ និងបង្កើនប្រសិទ្ធភាពដំណើរការឡូជីខ្ទិចក្នុងក្រុមហ៊ុន",
                    "ru" => "Планирование и оптимизация логистических процессов в компании",
                    "ko" => "회사 내 물류 프로세스 계획 및 최적화",
                    "lo" => "ການວາງແຜນ ແລະ ປັບປຸງຂະບວນການຂົນສົ່ງໃນບໍລິສັດ",
                    "dv" => "ކޮންޕަނީގެ ލޮޖިސްޓިކް ޕްރޮސެސް ޕްލޭނިންގ އަދި އޮޕޓިމައިޒޭޝަން",
                    "my" => "ကုမ္ပဏီအတွင်း လောဂျစ်တစ်လုပ်ငန်းစဉ်များ စီစဉ်ခြင်းနှင့် အကောင်းဆုံးဖြစ်အောင် ပြုလုပ်ခြင်း",
                    "mn" => "Компанид логистикийн үйл явцыг төлөвлөх, оновчтой болгох",
                    "ne" => "कम्पनीमा लजिस्टिक प्रक्रिया योजना र अनुकूलन",
                    "si" => "සමාගම තුළ භාණ්ඩ ප්රවාහන ක්රියාවලිය සැලසුම් කිරීම සහ ප්රශස්ත කිරීම",
                    "tg" => "Ҳамоҳангсозии равандҳои логистикӣ дар ширкат",
                    "th" => "การวางแผนและปรับปรุงกระบวนการโลจิสติกส์ในบริษัท",
                    "tk" => "Kompaniýada logistik proseslerini meýilleşdirmek we optimallaşdyrmak",
                    "uz" => "Kompaniyada logistik jarayonlarni rejalashtirish va optimallashtirish",
                    "vi" => "Lập kế hoạch và tối ưu hóa quy trình hậu cần trong công ty",
                    "sq" => "Planifikimi dhe optimizimi i proceseve logjistike në kompani",
                    "ca" => "Planificació i optimització de processos logístics a l'empresa",
                    "de" => "Planung und Optimierung von Logistikprozessen im Unternehmen",
                    "be" => "Планаванне і аптымізацыя лагістычных працэсаў у кампаніі",
                    "bs" => "Planiranje i optimizacija logističkih procesa u kompaniji",
                    "bg" => "Планиране и оптимизиране на логистичните процеси в компанията",
                    "hr" => "Planiranje i optimizacija logističkih procesa u tvrtki",
                    "el" => "Σχεδιασμός και βελτιστοποίηση των λογιστικών διαδικασιών στην εταιρεία",
                    "me" => "Planiranje i optimizacija logističkih procesa u kompaniji",
                    "cs" => "Plánování a optimalizace logistických procesů ve společnosti",
                    "da" => "Planlægning og optimering af logistikprocesser i virksomheden",
                    "et" => "Logistikaprotsesside planeerimine ja optimeerimine ettevõttes",
                    "fi" => "Logistiikkaprosessien suunnittelu ja optimointi yrityksessä",
                    "is" => "Áætlun og hagræðing á flutningaferlum í fyrirtækinu",
                    "lt" => "Logistikos procesų planavimas ir optimizavimas įmonėje",
                    "lb" => "Plangung an Optimiséierung vu Logistikprozesser am Unternehmen",
                    "lv" => "Loģistikas procesu plānošana un optimizēšana uzņēmumā",
                    "mk" => "Планирање и оптимизација на логистичките процеси во компанијата",
                    "ro" => "Planificarea și optimizarea proceselor logistice în companie",
                    "it" => "Pianificazione e ottimizzazione dei processi logistici in azienda",
                    "sr" => "Планирање и оптимизација логистичких процеса у компанији",
                    "sk" => "Plánovanie a optimalizácia logistických procesov v spoločnosti",
                    "sl" => "Načrtovanje in optimizacija logističnih procesov v podjetju",
                    "no" => "Planlegging og optimalisering av logistikkprosesser i bedriften",
                    "sv" => "Planering och optimering av logistikprocesser i företaget",
                    "tr" => "Şirkette lojistik süreçlerin planlanması ve optimizasyonu",
                    "uk" => "Планування та оптимізація логістичних процесів у компанії",
                    "hu" => "Logisztikai folyamatok tervezése és optimalizálása a vállalatnál"
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18922,
                "name" => json_encode([
                    "pl" => "Zarządzanie zespołem pracowników logistyki oraz delegowanie zadań",
                    "en" => "Managing logistics team and delegating tasks.",
                    "ar" => "إدارة فريق اللوجستيات وتفويض المهام",
                    "pt" => "Gerenciamento da equipe de logística e delegação de tarefas",
                    "fr" => "Gestion de l'équipe logistique et délégation des tâches",
                    "am" => "የሎጂስቲክስ ቡድን አስተዳደር እና ተግባራት መድረስ",
                    "es" => "Gestión del equipo de logística y delegación de tareas",
                    "nl" => "Beheer van het logistieke team en delegeren van taken",
                    "ps" => "د لاجستیک ټیم مدیریت او د دندو تفویض",
                    "hy" => "Լոգիստիկայի թիմի կառավարում և առաջադրանքների հանձնարարում",
                    "az" => "Logistika komandasının idarə edilməsi və tapşırıqların həvalə edilməsi",
                    "bn" => "লজিস্টিক দল পরিচালনা এবং কাজ অর্পণ",
                    "dz" => "ལོ་ཇིས་ཊིཀས་ཚོགས་པ་དང་ལས་འགན་སྤྲོད་པ།",
                    "ms" => "Pengurusan pasukan logistik dan pendelegasian tugas",
                    "zh" => "管理物流团队并委派任务",
                    "ka" => "ლოგისტიკის გუნდის მართვა და დავალებების გადანაწილება",
                    "hi" => "लॉजिस्टिक टीम का प्रबंधन और कार्य सौंपना",
                    "id" => "Mengelola tim logistik dan mendelegasikan tugas",
                    "fa" => "مدیریت تیم لجستیک و واگذاری وظایف",
                    "he" => "ניהול צוות הלוגיסטיקה והאצלת משימות",
                    "ja" => "物流チームの管理とタスクの委任",
                    "km" => "ការគ្រប់គ្រងក្រុមឡូជីខ្ទិច និងការប្រគល់កិច្ចការ",
                    "ru" => "Управление логистической командой и делегирование задач",
                    "ko" => "물류 팀 관리 및 작업 위임",
                    "lo" => "ການຈັດການທີມງານຂົນສົ່ງ ແລະ ມອບໝາຍວຽກ",
                    "dv" => "ލޮޖިސްޓިކް ޓީމް މެނޭޖްމަންޓް އަދި ޓާސްކް ޑެލިގޭޝަން",
                    "my" => "လောဂျစ်တစ်အဖွဲ့ကို စီမံခန့်ခွဲခြင်းနှင့် တာဝန်များခွဲဝေခြင်း",
                    "mn" => "Логистикийн багийг удирдах, даалгавар хуваарилах",
                    "ne" => "लजिस्टिक टोली प्रबन्धन र कार्यहरू प्रत्यायोजन",
                    "si" => "ලොජිස්ටික් කණ්ඩායම කළමනාකරණය කිරීම සහ කාර්යයන් පැවරීම",
                    "tg" => "Идоракунии дастаи логистикӣ ва супоридани вазифаҳо",
                    "th" => "การจัดการทีมโลจิสติกส์และมอบหมายงาน",
                    "tk" => "Logistika toparyny dolandyrmak we işleri tabşyrmak",
                    "uz" => "Logistika jamoasini boshqarish va vazifalarni topshirish",
                    "vi" => "Quản lý nhóm hậu cần và phân công nhiệm vụ",
                    "sq" => "Menaxhimi i ekipit të logjistikës dhe delegimi i detyrave",
                    "ca" => "Gestió de l'equip de logística i delegació de tasques",
                    "de" => "Verwaltung des Logistikteams und Delegieren von Aufgaben",
                    "be" => "Кіраванне лагістычнай камандай і дэлегаванне задач",
                    "bs" => "Upravljanje logističkim timom i delegiranje zadataka",
                    "bg" => "Управление на логистичния екип и делегиране на задачи",
                    "hr" => "Upravljanje logističkim timom i delegiranje zadataka",
                    "el" => "Διαχείριση της ομάδας logistics και ανάθεση εργασιών",
                    "me" => "Upravljanje logističkim timom i delegiranje zadataka",
                    "cs" => "Řízení logistického týmu a delegování úkolů",
                    "da" => "Ledelse af logistikteam og delegering af opgaver",
                    "et" => "Logistikatiimi juhtimine ja ülesannete delegeerimine",
                    "fi" => "Logistiikkatiimin hallinta ja tehtävien delegointi",
                    "is" => "Stjórnun á flutningateymi og úthlutun verkefna",
                    "lt" => "Logistikos komandos valdymas ir užduočių delegavimas",
                    "lb" => "Gestioun vum Logistikteam an Delegéiere vun Aufgaben",
                    "lv" => "Loģistikas komandas vadīšana un uzdevumu deleģēšana",
                    "mk" => "Управување со логистичкиот тим и делегирање на задачи",
                    "ro" => "Managementul echipei de logistică și delegarea sarcinilor",
                    "it" => "Gestione del team di logistica e delega dei compiti",
                    "sr" => "Управљање логистичким тимом и делегирање задатака",
                    "sk" => "Riadenie logistického tímu a delegovanie úloh",
                    "sl" => "Upravljanje logistične ekipe in delegiranje nalog",
                    "no" => "Ledelse av logistikklaget og delegere oppgaver",
                    "sv" => "Hantering av logistikteam och delegering av uppgifter",
                    "tr" => "Lojistik ekibinin yönetimi ve görevlerin devri",
                    "uk" => "Управління логістичною командою та делегування завдань",
                    "hu" => "Logisztikai csapat irányítása és feladatok delegálása"
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [ "id" => 18923,
                "name" => json_encode([
                    "pl" => "Koordynacja transportu, magazynowania i dystrybucji towarów",
                    "en" => "Coordinating transportation, storage, and goods distribution."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [ "id" => 18924,
                "name" => json_encode([
                    "pl" => "Nadzór nad realizacją zamówień i kontrola terminowości dostaw",
                    "en" => "Supervising order fulfillment and ensuring timely deliveries."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [ "id" => 18925,
                "name" => json_encode([
                    "pl" => "Współpraca z działem zakupów i produkcji w celu optymalizacji procesów",
                    "en" => "Collaborating with procurement and production departments to optimize processes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [ "id" => 18926,
                "name" => json_encode([
                    "pl" => "Tworzenie raportów i analiza efektywności procesów logistycznych",
                    "en" => "Creating reports and analyzing the efficiency of logistics processes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $KIEROWNIK_DZIAŁU_TRANSPORTU = [
            [ "id" => 18927,
                "name" => json_encode([
                    "pl" => "Planowanie i koordynacja tras transportowych",
                    "en" => "Planning and coordinating transport routes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [ "id" => 18928,
                "name" => json_encode([
                    "pl" => "Zarządzanie flotą pojazdów i nadzór nad ich stanem technicznym",
                    "en" => "Managing the vehicle fleet and supervising its technical condition."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [ "id" => 18929,
                "name" => json_encode([
                    "pl" => "Organizowanie załadunku i rozładunku towarów",
                    "en" => "Organizing loading and unloading of goods."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [ "id" => 18930,
                "name" => json_encode([
                    "pl" => "Współpraca z przewoźnikami i podwykonawcami transportowymi",
                    "en" => "Collaborating with carriers and transport subcontractors."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [ "id" => 18931,
                "name" => json_encode([
                    "pl" => "Nadzór nad przestrzeganiem przepisów bezpieczeństwa i regulacji prawnych",
                    "en" => "Supervising compliance with safety regulations and legal standards."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [ "id" => 18932,
                "name" => json_encode([
                    "pl" => "Optymalizacja kosztów transportu oraz analiza wydajności",
                    "en" => "Optimizing transport costs and analyzing efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $KIEROWNIK_DZIAŁU_ZAKUPÓW = [
            [ "id" => 18933,
                "name" => json_encode([
                    "pl" => "Zarządzanie procesem zakupów towarów i materiałów",
                    "en" => "Managing the procurement of goods and materials."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [ "id" => 18934,
                "name" => json_encode([
                    "pl" => "Negocjowanie warunków współpracy i cen z dostawcami",
                    "en" => "Negotiating terms and prices with suppliers."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [ "id" => 18935,
                "name" => json_encode([
                    "pl" => "Monitorowanie zapasów i optymalizacja poziomu zaopatrzenia",
                    "en" => "Monitoring inventory levels and optimizing procurement."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [ "id" => 18936,
                "name" => json_encode([
                    "pl" => "Współpraca z działami produkcji i logistyki w zakresie dostaw",
                    "en" => "Collaborating with production and logistics departments for deliveries."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [ "id" => 18937,
                "name" => json_encode([
                    "pl" => "Analiza rynku i poszukiwanie nowych dostawców",
                    "en" => "Analyzing the market and searching for new suppliers."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [ "id" => 18938,
                "name" => json_encode([
                    "pl" => "Tworzenie raportów dotyczących kosztów i jakości zakupów",
                    "en" => "Preparing reports on procurement costs and quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $KIEROWNIK_MAGAZYNU = [
            [ "id" => 18939,
                "name" => json_encode([
                    "pl" => "Nadzór nad pracą magazynierów oraz organizacja działań magazynowych",
                    "en" => "Supervising warehouse workers and organizing warehouse operations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [ "id" => 18940,
                "name" => json_encode([
                    "pl" => "Kontrola stanów magazynowych oraz nadzór nad przepływem towarów",
                    "en" => "Controlling inventory levels and supervising goods flow."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [ "id" => 18941,
                "name" => json_encode([
                    "pl" => "Zapewnienie zgodności procesów magazynowych z normami bezpieczeństwa",
                    "en" => "Ensuring warehouse processes comply with safety standards."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [ "id" => 18942,
                "name" => json_encode([
                    "pl" => "Optymalizacja przestrzeni magazynowej i organizacja składowania towarów",
                    "en" => "Optimizing warehouse space and organizing goods storage."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [ "id" => 18943,
                "name" => json_encode([
                    "pl" => "Monitorowanie stanów zapasów i współpraca z działem zakupów",
                    "en" => "Monitoring inventory levels and collaborating with the procurement department."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [ "id" => 18944,
                "name" => json_encode([
                    "pl" => "Przygotowywanie raportów dotyczących gospodarki magazynowej",
                    "en" => "Preparing reports on warehouse operations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $KIEROWNIK_PRZEDSIĘBIORSTWA_SPEDYCYJNEGO = [
            [ "id" => 18945,
                "name" => json_encode([
                    "pl" => "Zarządzanie procesami spedycyjnymi i logistycznymi",
                    "en" => "Managing forwarding and logistics processes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [ "id" => 18946,
                "name" => json_encode([
                    "pl" => "Koordynacja pracy spedytorów oraz nadzór nad realizacją zleceń",
                    "en" => "Coordinating freight forwarders and supervising order fulfillment."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [ "id" => 18947,
                "name" => json_encode([
                    "pl" => "Współpraca z klientami oraz podwykonawcami w zakresie przewozu towarów",
                    "en" => "Collaborating with clients and subcontractors in freight transport."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [ "id" => 18948,
                "name" => json_encode([
                    "pl" => "Negocjowanie warunków współpracy i umów z kontrahentami",
                    "en" => "Negotiating terms and agreements with contractors."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [ "id" => 18949,
                "name" => json_encode([
                    "pl" => "Optymalizacja kosztów spedycyjnych i monitorowanie wydajności procesów",
                    "en" => "Optimizing forwarding costs and monitoring process efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [ "id" => 18950,
                "name" => json_encode([
                    "pl" => "Przestrzeganie przepisów i regulacji dotyczących transportu towarów",
                    "en" => "Ensuring compliance with regulations regarding goods transport."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $KIEROWNIK_PRZEDSIĘBIORSTWA_TRANSPORTOWEGO = [
            [ "id" => 18951,
                "name" => json_encode([
                    "pl" => "Zarządzanie działalnością operacyjną firmy transportowej",
                    "en" => "Managing the operational activities of a transport company."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [ "id" => 18952,
                "name" => json_encode([
                    "pl" => "Planowanie strategii rozwoju firmy oraz pozyskiwanie nowych klientów",
                    "en" => "Planning the company's development strategy and acquiring new clients."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [ "id" => 18953,
                "name" => json_encode([
                    "pl" => "Organizacja floty pojazdów i nadzór nad ich stanem technicznym",
                    "en" => "Organizing vehicle fleets and supervising their technical condition."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [ "id" => 18954,
                "name" => json_encode([
                    "pl" => "Monitorowanie i optymalizacja kosztów operacyjnych",
                    "en" => "Monitoring and optimizing operational costs."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [ "id" => 18955,
                "name" => json_encode([
                    "pl" => "Przestrzeganie przepisów i standardów bezpieczeństwa transportu",
                    "en" => "Adhering to transportation regulations and safety standards."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [ "id" => 18956,
                "name" => json_encode([
                    "pl" => "Koordynacja działań zespołu pracowników transportu",
                    "en" => "Coordinating the activities of the transport team."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $KIEROWNIK_PUNKTU_SKUPU = [
            [ "id" => 18957,
                "name" => json_encode([
                    "pl" => "Organizacja i nadzór nad przyjmowaniem towarów do punktu skupu",
                    "en" => "Organizing and supervising goods reception at the collection point."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [ "id" => 18958,
                "name" => json_encode([
                    "pl" => "Kontrola jakości przyjmowanych surowców i materiałów",
                    "en" => "Quality control of received raw materials and goods."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [ "id" => 18959,
                "name" => json_encode([
                    "pl" => "Współpraca z dostawcami oraz negocjowanie warunków współpracy",
                    "en" => "Collaborating with suppliers and negotiating terms of cooperation."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [ "id" => 18960,
                "name" => json_encode([
                    "pl" => "Zarządzanie zespołem pracowników punktu skupu",
                    "en" => "Managing the team of employees at the collection point."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [ "id" => 18961,
                "name" => json_encode([
                    "pl" => "Monitorowanie zapasów i ewidencjonowanie przyjęć towaru",
                    "en" => "Monitoring inventory levels and recording goods receipts."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [ "id" => 18962,
                "name" => json_encode([
                    "pl" => "Sporządzanie raportów dotyczących działalności punktu skupu",
                    "en" => "Preparing reports on the activities of the collection point."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $INŻYNIER_ZAOPATRZENIA_TRANSPORTU_I_MAGAZYNOWANIA = [
            [ "id" => 18963,
                "name" => json_encode([
                    "pl" => "Opracowywanie strategii zaopatrzenia oraz zarządzanie procesem logistycznym",
                    "en" => "Developing procurement strategies and managing logistics processes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [ "id" => 18964,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesów transportu i magazynowania",
                    "en" => "Optimizing transportation and storage processes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [ "id" => 18965,
                "name" => json_encode([
                    "pl" => "Analiza wydajności i kosztów oraz poszukiwanie rozwiązań oszczędnościowych",
                    "en" => "Analyzing efficiency and costs and seeking cost-saving solutions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [ "id" => 18966,
                "name" => json_encode([
                    "pl" => "Nadzór nad zgodnością procesów z przepisami bezpieczeństwa i jakości",
                    "en" => "Ensuring process compliance with safety and quality regulations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [ "id" => 18967,
                "name" => json_encode([
                    "pl" => "Współpraca z działem produkcji oraz dostawcami w zakresie zaopatrzenia",
                    "en" => "Collaborating with the production department and suppliers in procurement."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [ "id" => 18968,
                "name" => json_encode([
                    "pl" => "Dokumentowanie procesów i przygotowywanie raportów efektywności",
                    "en" => "Documenting processes and preparing efficiency reports."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $SPEDYTORZY_I_POKREWNI = [
            [ "id" => 18969,
                "name" => json_encode([
                    "pl" => "Organizacja przewozów i planowanie tras dla towarów",
                    "en" => "Organizing transportation and planning routes for goods."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [ "id" => 18970,
                "name" => json_encode([
                    "pl" => "Współpraca z przewoźnikami, klientami i podwykonawcami",
                    "en" => "Collaborating with carriers, clients, and subcontractors."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [ "id" => 18971,
                "name" => json_encode([
                    "pl" => "Nadzór nad realizacją zleceń spedycyjnych i terminowością dostaw",
                    "en" => "Supervising freight forwarding orders and ensuring timely deliveries."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [ "id" => 18972,
                "name" => json_encode([
                    "pl" => "Monitorowanie dokumentacji transportowej i celnej",
                    "en" => "Monitoring transport and customs documentation."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [ "id" => 18973,
                "name" => json_encode([
                    "pl" => "Negocjowanie warunków i kosztów transportu z kontrahentami",
                    "en" => "Negotiating transport terms and costs with contractors."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [ "id" => 18974,
                "name" => json_encode([
                    "pl" => "Przestrzeganie przepisów związanych z międzynarodowym przewozem towarów",
                    "en" => "Complying with regulations related to international freight transport."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $SPECJALISTA_DO_SPRAW_LOGISTYKI = [
            [ "id" => 18975,
                "name" => json_encode([
                    "pl" => "Analiza i optymalizacja procesów logistycznych w organizacji",
                    "en" => "Analyzing and optimizing logistics processes in the organization."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [ "id" => 18976,
                "name" => json_encode([
                    "pl" => "Planowanie zaopatrzenia i zarządzanie zapasami",
                    "en" => "Planning procurement and managing inventory."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [ "id" => 18977,
                "name" => json_encode([
                    "pl" => "Współpraca z dostawcami, przewoźnikami oraz innymi działami",
                    "en" => "Collaborating with suppliers, carriers, and other departments."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [ "id" => 18978,
                "name" => json_encode([
                    "pl" => "Monitorowanie terminowości dostaw i kontrola realizacji zamówień",
                    "en" => "Monitoring delivery timeliness and ensuring order fulfillment."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [ "id" => 18979,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie analiz kosztowych i raportowanie efektywności procesów",
                    "en" => "Conducting cost analyses and reporting process efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [ "id" => 18980,
                "name" => json_encode([
                    "pl" => "Wdrażanie nowoczesnych rozwiązań w logistyce i monitorowanie ich efektywności",
                    "en" => "Implementing modern logistics solutions and monitoring their efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $SPECJALISTA_DO_SPRAW_ORGANIZACJI_I_ROZWOJU_TRANSPORTU = [
            [ "id" => 18981,
                "name" => json_encode([
                    "pl" => "Opracowywanie strategii rozwoju infrastruktury transportowej",
                    "en" => "Developing strategies for transport infrastructure development."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [ "id" => 18982,
                "name" => json_encode([
                    "pl" => "Planowanie i organizacja procesów związanych z transportem",
                    "en" => "Planning and organizing transport-related processes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [ "id" => 18983,
                "name" => json_encode([
                    "pl" => "Monitorowanie i analiza rynku transportowego",
                    "en" => "Monitoring and analyzing the transport market."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [ "id" => 18984,
                "name" => json_encode([
                    "pl" => "Optymalizacja tras oraz analiza efektywności kosztów transportu",
                    "en" => "Optimizing routes and analyzing transport cost efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [ "id" => 18985,
                "name" => json_encode([
                    "pl" => "Wdrażanie innowacyjnych rozwiązań w logistyce i transporcie",
                    "en" => "Implementing innovative solutions in logistics and transportation."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [ "id" => 18986,
                "name" => json_encode([
                    "pl" => "Przestrzeganie przepisów i norm związanych z transportem publicznym",
                    "en" => "Ensuring compliance with regulations and standards for public transport."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $INŻYNIER_RUCHU_DROGOWEGO = [
            [ "id" => 18987,
                "name" => json_encode([
                    "pl" => "Projektowanie i optymalizacja organizacji ruchu drogowego",
                    "en" => "Designing and optimizing road traffic management."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [ "id" => 18988,
                "name" => json_encode([
                    "pl" => "Monitorowanie i analiza natężenia ruchu na drogach",
                    "en" => "Monitoring and analyzing traffic volume on roads."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [ "id" => 18989,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie analiz bezpieczeństwa i wdrażanie rozwiązań poprawiających bezpieczeństwo",
                    "en" => "Conducting safety analyses and implementing solutions to improve safety."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [ "id" => 18990,
                "name" => json_encode([
                    "pl" => "Opracowywanie planów sygnalizacji świetlnej oraz oznakowania dróg",
                    "en" => "Developing traffic light and road signage plans."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [ "id" => 18991,
                "name" => json_encode([
                    "pl" => "Współpraca z władzami lokalnymi oraz policją w zakresie bezpieczeństwa ruchu",
                    "en" => "Collaborating with local authorities and police on traffic safety."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [ "id" => 18992,
                "name" => json_encode([
                    "pl" => "Dokumentowanie i raportowanie wyników analiz oraz wdrożonych zmian",
                    "en" => "Documenting and reporting analysis results and implemented changes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $INŻYNIER_RUCHU_KOLEJOWEGO = [
            [ "id" => 18993,
                "name" => json_encode([
                    "pl" => "Planowanie i optymalizacja ruchu kolejowego",
                    "en" => "Planning and optimizing railway traffic."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [ "id" => 18994,
                "name" => json_encode([
                    "pl" => "Monitorowanie efektywności operacyjnej kolei i eliminowanie wąskich gardeł",
                    "en" => "Monitoring railway operational efficiency and eliminating bottlenecks."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [ "id" => 18995,
                "name" => json_encode([
                    "pl" => "Opracowywanie i wdrażanie rozkładów jazdy dla pociągów",
                    "en" => "Developing and implementing train schedules."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [ "id" => 18996,
                "name" => json_encode([
                    "pl" => "Analiza bezpieczeństwa ruchu kolejowego i wdrażanie środków zapobiegawczych",
                    "en" => "Analyzing railway safety and implementing preventive measures."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [ "id" => 18997,
                "name" => json_encode([
                    "pl" => "Współpraca z operatorami kolejowymi i zarządem infrastruktury kolejowej",
                    "en" => "Collaborating with railway operators and infrastructure management."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [ "id" => 18998,
                "name" => json_encode([
                    "pl" => "Dokumentowanie działań i tworzenie raportów z zakresu zarządzania ruchem",
                    "en" => "Documenting activities and creating reports on traffic management."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $ZAOPATRZENIOWCY = [
            [ "id" => 18999,
                "name" => json_encode([
                    "pl" => "Realizacja zamówień oraz organizacja dostaw towarów i materiałów",
                    "en" => "Processing orders and organizing goods and materials delivery."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [ "id" => 19000,
                "name" => json_encode([
                    "pl" => "Monitorowanie poziomów zapasów i uzupełnianie braków",
                    "en" => "Monitoring inventory levels and replenishing shortages."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [ "id" => 19001,
                "name" => json_encode([
                    "pl" => "Współpraca z dostawcami i negocjowanie warunków zakupu",
                    "en" => "Collaborating with suppliers and negotiating purchase terms."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [ "id" => 19002,
                "name" => json_encode([
                    "pl" => "Kontrola jakości i zgodności dostaw z zamówieniami",
                    "en" => "Inspecting the quality and compliance of deliveries with orders."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [ "id" => 19003,
                "name" => json_encode([
                    "pl" => "Prowadzenie dokumentacji zakupowej i ewidencjonowanie stanów magazynowych",
                    "en" => "Maintaining purchase documentation and inventory records."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [ "id" => 19004,
                "name" => json_encode([
                    "pl" => "Współpraca z działem produkcji w celu zapewnienia ciągłości zaopatrzenia",
                    "en" => "Collaborating with the production department to ensure supply continuity."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $KIEROWCY_MOTOCYKLI = [
            [ "id" => 19005,
                "name" => json_encode([
                    "pl" => "Realizacja zleceń przewozowych na motocyklu, np. dostawy towarów lub dokumentów",
                    "en" => "Carrying out delivery orders on a motorcycle, such as goods or document delivery."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [ "id" => 19006,
                "name" => json_encode([
                    "pl" => "Przestrzeganie przepisów ruchu drogowego i dbanie o bezpieczeństwo",
                    "en" => "Complying with traffic rules and ensuring safety."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [ "id" => 19007,
                "name" => json_encode([
                    "pl" => "Utrzymywanie motocykla w dobrym stanie technicznym i dbanie o jego konserwację",
                    "en" => "Maintaining the motorcycle in good technical condition and ensuring its upkeep."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [ "id" => 19008,
                "name" => json_encode([
                    "pl" => "Monitorowanie zleceń i terminowa realizacja dostaw",
                    "en" => "Tracking orders and ensuring timely deliveries."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [ "id" => 19009,
                "name" => json_encode([
                    "pl" => "Dbanie o odpowiednie zabezpieczenie przewożonego ładunku",
                    "en" => "Ensuring proper security of transported goods."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [ "id" => 19010,
                "name" => json_encode([
                    "pl" => "Komunikacja z klientami i raportowanie wykonanych zleceń",
                    "en" => "Communicating with clients and reporting completed tasks."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $KIEROWCA_SAMOCHODU_DOSTAWCZEGO = [
            [ "id" => 19011,
                "name" => json_encode([
                    "pl" => "Realizacja dostaw towarów do klientów zgodnie z harmonogramem",
                    "en" => "Delivering goods to clients according to the schedule."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [ "id" => 19012,
                "name" => json_encode([
                    "pl" => "Bezpieczne prowadzenie i obsługa samochodu dostawczego",
                    "en" => "Safely operating and handling the delivery vehicle."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [ "id" => 19013,
                "name" => json_encode([
                    "pl" => "Załadunek i rozładunek towarów oraz dbanie o ich odpowiednie zabezpieczenie",
                    "en" => "Loading and unloading goods and ensuring their proper security."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [ "id" => 19014,
                "name" => json_encode([
                    "pl" => "Przestrzeganie przepisów ruchu drogowego i standardów bezpieczeństwa",
                    "en" => "Complying with traffic laws and safety standards."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [ "id" => 19015,
                "name" => json_encode([
                    "pl" => "Prowadzenie dokumentacji dostaw i raportowanie ewentualnych problemów",
                    "en" => "Maintaining delivery documentation and reporting any issues."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [ "id" => 19016,
                "name" => json_encode([
                    "pl" => "Dbanie o stan techniczny pojazdu i zgłaszanie usterek",
                    "en" => "Ensuring the vehicle's technical condition and reporting faults."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $DOSTAWCA_POTRAW = [
            [ "id" => 19017,
                "name" => json_encode([
                    "pl" => "Dostarczanie zamówionych potraw do klientów na czas",
                    "en" => "Delivering ordered meals to clients on time."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [ "id" => 19018,
                "name" => json_encode([
                    "pl" => "Zapewnienie odpowiednich warunków transportu, aby potrawy dotarły świeże i gorące",
                    "en" => "Ensuring appropriate transport conditions for meals to arrive fresh and hot."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [ "id" => 19019,
                "name" => json_encode([
                    "pl" => "Przestrzeganie zasad higieny oraz dbanie o estetykę dostarczanych posiłków",
                    "en" => "Following hygiene rules and maintaining the aesthetics of delivered meals."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [ "id" => 19020,
                "name" => json_encode([
                    "pl" => "Obsługa płatności i zapewnienie odpowiedniej komunikacji z klientami",
                    "en" => "Handling payments and ensuring proper communication with clients."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [ "id" => 19021,
                "name" => json_encode([
                    "pl" => "Przestrzeganie przepisów ruchu drogowego podczas dostaw",
                    "en" => "Complying with traffic laws during deliveries."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [ "id" => 19022,
                "name" => json_encode([
                    "pl" => "Dbanie o stan techniczny pojazdu i jego czystość",
                    "en" => "Maintaining the vehicle's technical condition and cleanliness."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $GONIEC = [
            [ "id" => 19023,
                "name" => json_encode([
                    "pl" => "Przekazywanie dokumentów i drobnych przesyłek między biurami lub firmami",
                    "en" => "Delivering documents and small parcels between offices or companies."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [ "id" => 19024,
                "name" => json_encode([
                    "pl" => "Dbanie o terminowość dostarczania dokumentów i materiałów",
                    "en" => "Ensuring timely delivery of documents and materials."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [ "id" => 19025,
                "name" => json_encode([
                    "pl" => "Przestrzeganie zasad poufności, szczególnie przy przewożeniu ważnych dokumentów",
                    "en" => "Maintaining confidentiality, especially when handling important documents."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [ "id" => 19026,
                "name" => json_encode([
                    "pl" => "Dbałość o poprawność i kompletność dostarczanych materiałów",
                    "en" => "Ensuring the accuracy and completeness of delivered materials."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [ "id" => 19027,
                "name" => json_encode([
                    "pl" => "Prowadzenie ewidencji dostarczonych przesyłek i dokumentów",
                    "en" => "Maintaining records of delivered parcels and documents."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [ "id" => 19028,
                "name" => json_encode([
                    "pl" => "Komunikacja z pracownikami i odbiorcami przesyłek",
                    "en" => "Communicating with employees and recipients of parcels."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $MAGAZYNIERZY_I_POKREWNI = [
            [ "id" => 19029,
                "name" => json_encode([
                    "pl" => "Przyjmowanie towarów do magazynu i sprawdzanie ich zgodności z dokumentami",
                    "en" => "Receiving goods into the warehouse and verifying them against documentation."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [ "id" => 19030,
                "name" => json_encode([
                    "pl" => "Układanie i organizacja produktów w magazynie oraz dbanie o porządek",
                    "en" => "Organizing products in the warehouse and maintaining order."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [ "id" => 19031,
                "name" => json_encode([
                    "pl" => "Kompletacja zamówień oraz przygotowywanie towarów do wysyłki",
                    "en" => "Picking and preparing goods for shipment."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [ "id" => 19032,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie inwentaryzacji oraz monitorowanie stanów magazynowych",
                    "en" => "Conducting inventory checks and monitoring stock levels."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [ "id" => 19033,
                "name" => json_encode([
                    "pl" => "Obsługa wózków widłowych i innych urządzeń magazynowych (jeśli wymagane)",
                    "en" => "Operating forklifts and other warehouse equipment (if required)."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [ "id" => 19034,
                "name" => json_encode([
                    "pl" => "Przestrzeganie zasad BHP i dbałość o bezpieczeństwo pracy w magazynie",
                    "en" => "Adhering to health and safety regulations in the warehouse."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $INTENDENT = [
            [ "id" => 19035,
                "name" => json_encode([
                    "pl" => "Planowanie i nadzorowanie zaopatrzenia oraz gospodarki materiałowej",
                    "en" => "Planning and supervising procurement and material management."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [ "id" => 19036,
                "name" => json_encode([
                    "pl" => "Ustalanie zapotrzebowania na produkty i monitorowanie zapasów",
                    "en" => "Determining product demand and monitoring inventory levels."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [ "id" => 19037,
                "name" => json_encode([
                    "pl" => "Współpraca z dostawcami i negocjowanie warunków zakupów",
                    "en" => "Collaborating with suppliers and negotiating purchase terms."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [ "id" => 19038,
                "name" => json_encode([
                    "pl" => "Kontrola jakości przyjmowanych produktów i zgodności z zamówieniami",
                    "en" => "Inspecting the quality and compliance of received products with orders."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [ "id" => 19039,
                "name" => json_encode([
                    "pl" => "Organizacja transportu i rozdzielanie produktów do różnych działów",
                    "en" => "Organizing transportation and distributing products to various departments."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [ "id" => 19040,
                "name" => json_encode([
                    "pl" => "Prowadzenie dokumentacji zakupowej oraz sporządzanie raportów",
                    "en" => "Maintaining procurement documentation and preparing reports."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $POMOC_APTECZNA = [
            [ "id" => 19041,
                "name" => json_encode([
                    "pl" => "Utrzymanie porządku i czystości w aptece",
                    "en" => "Maintaining cleanliness and order in the pharmacy."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [ "id" => 19042,
                "name" => json_encode([
                    "pl" => "Uzupełnianie towarów na półkach oraz dbanie o ich odpowiednie oznakowanie",
                    "en" => "Restocking shelves and ensuring proper labeling of products."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [ "id" => 19043,
                "name" => json_encode([
                    "pl" => "Pomoc farmaceutom w obsłudze klientów i organizacji pracy apteki",
                    "en" => "Assisting pharmacists with customer service and pharmacy operations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [ "id" => 19044,
                "name" => json_encode([
                    "pl" => "Przyjmowanie dostaw i ewidencjonowanie leków oraz produktów medycznych",
                    "en" => "Receiving deliveries and inventorying medicines and medical products."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [ "id" => 19045,
                "name" => json_encode([
                    "pl" => "Przestrzeganie zasad higieny oraz regulacji dotyczących produktów farmaceutycznych",
                    "en" => "Following hygiene rules and regulations regarding pharmaceutical products."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [ "id" => 19046,
                "name" => json_encode([
                    "pl" => "Monitorowanie terminów ważności produktów i usuwanie przeterminowanych leków",
                    "en" => "Monitoring product expiration dates and removing expired medicines."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $KURIER = [
            [ "id" => 19047,
                "name" => json_encode([
                    "pl" => "Dostarczanie przesyłek do klientów zgodnie z harmonogramem i trasą",
                    "en" => "Delivering parcels to customers according to the schedule and route."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [ "id" => 19048,
                "name" => json_encode([
                    "pl" => "Zapewnienie bezpieczeństwa i integralności przewożonych paczek",
                    "en" => "Ensuring the safety and integrity of transported parcels."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [ "id" => 19049,
                "name" => json_encode([
                    "pl" => "Przestrzeganie przepisów drogowych i zasad bezpieczeństwa podczas dostaw",
                    "en" => "Following traffic regulations and safety rules during deliveries."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [ "id" => 19050,
                "name" => json_encode([
                    "pl" => "Obsługa systemów elektronicznych do śledzenia przesyłek i podpisywania odbioru",
                    "en" => "Using electronic systems for tracking shipments and obtaining signatures."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [ "id" => 19051,
                "name" => json_encode([
                    "pl" => "Prowadzenie dokumentacji dostaw oraz raportowanie ewentualnych problemów",
                    "en" => "Maintaining delivery records and reporting any issues."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [ "id" => 19052,
                "name" => json_encode([
                    "pl" => "Komunikacja z klientami w przypadku opóźnień lub pytań",
                    "en" => "Communicating with clients in case of delays or questions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $LISTONOSZ = [
            [ "id" => 19053,
                "name" => json_encode([
                    "pl" => "Dostarczanie przesyłek listowych, paczek i dokumentów do adresatów",
                    "en" => "Delivering mail, parcels, and documents to recipients."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [ "id" => 19054,
                "name" => json_encode([
                    "pl" => "Przestrzeganie wyznaczonej trasy oraz terminowe doręczanie przesyłek",
                    "en" => "Following designated routes and delivering parcels on time."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [ "id" => 19055,
                "name" => json_encode([
                    "pl" => "Obsługa przesyłek poleconych i dokumentowanie ich odbioru",
                    "en" => "Handling registered mail and documenting their receipt."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [ "id" => 19056,
                "name" => json_encode([
                    "pl" => "Współpraca z pocztą i odbiorcami w zakresie odbioru i doręczania przesyłek",
                    "en" => "Collaborating with the post office and recipients for mail handling."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [ "id" => 19057,
                "name" => json_encode([
                    "pl" => "Dbanie o poufność dostarczanych dokumentów i przesyłek",
                    "en" => "Ensuring the confidentiality of delivered documents and parcels."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [ "id" => 19058,
                "name" => json_encode([
                    "pl" => "Prowadzenie rejestrów doręczonych przesyłek oraz raportowanie problemów",
                    "en" => "Maintaining delivery records and reporting issues."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $EKSPEDIENT_POCZTOWY = [
            [ "id" => 19059,
                "name" => json_encode([
                    "pl" => "Obsługa klientów w punkcie pocztowym, przyjmowanie i wydawanie przesyłek",
                    "en" => "Serving customers at the postal counter, receiving, and handing out parcels."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [ "id" => 19060,
                "name" => json_encode([
                    "pl" => "Realizacja transakcji finansowych, takich jak opłaty rachunków i przekazy pieniężne",
                    "en" => "Handling financial transactions, including bill payments and money transfers."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [ "id" => 19061,
                "name" => json_encode([
                    "pl" => "Doradzanie klientom w zakresie usług pocztowych i kurierskich",
                    "en" => "Advising customers on postal and courier services."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [ "id" => 19062,
                "name" => json_encode([
                    "pl" => "Przyjmowanie reklamacji i udzielanie informacji na temat przesyłek",
                    "en" => "Accepting complaints and providing information about parcels."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [ "id" => 19063,
                "name" => json_encode([
                    "pl" => "Przestrzeganie zasad bezpieczeństwa finansowego i obsługi dokumentów",
                    "en" => "Following financial security rules and document handling protocols."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [ "id" => 19064,
                "name" => json_encode([
                    "pl" => "Prowadzenie dokumentacji oraz rozliczanie operacji finansowych",
                    "en" => "Maintaining documentation and accounting for financial transactions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $KONTROLER_POCZTOWY = [
            [ "id" => 19065,
                "name" => json_encode([
                    "pl" => "Monitorowanie jakości usług pocztowych oraz zgodności z procedurami",
                    "en" => "Monitoring the quality of postal services and compliance with procedures."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [ "id" => 19066,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie kontroli przesyłek oraz ocena ich zgodności z przepisami",
                    "en" => "Inspecting parcels and assessing their compliance with regulations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [ "id" => 19067,
                "name" => json_encode([
                    "pl" => "Weryfikacja poprawności dokumentacji i przestrzegania procedur przez pracowników poczty",
                    "en" => "Verifying documentation accuracy and adherence to procedures by postal staff."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [ "id" => 19068,
                "name" => json_encode([
                    "pl" => "Identyfikacja nieprawidłowości i podejmowanie działań naprawczych",
                    "en" => "Identifying irregularities and implementing corrective actions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [ "id" => 19069,
                "name" => json_encode([
                    "pl" => "Sporządzanie raportów i dokumentowanie wyników kontroli",
                    "en" => "Preparing reports and documenting control findings."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [ "id" => 19070,
                "name" => json_encode([
                    "pl" => "Współpraca z kierownictwem w celu poprawy jakości obsługi klienta",
                    "en" => "Collaborating with management to improve customer service quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $KIEROWCA_AUTOBUSU = [
            [ "id" => 19071,
                "name" => json_encode([
                    "pl" => "Przewożenie pasażerów na wyznaczonych trasach zgodnie z rozkładem jazdy",
                    "en" => "Transporting passengers on designated routes according to the schedule."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [ "id" => 19072,
                "name" => json_encode([
                    "pl" => "Przestrzeganie przepisów ruchu drogowego oraz zasad bezpieczeństwa pasażerów",
                    "en" => "Adhering to traffic regulations and ensuring passenger safety."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [ "id" => 19073,
                "name" => json_encode([
                    "pl" => "Obsługa biletów i udzielanie informacji pasażerom",
                    "en" => "Handling tickets and providing information to passengers."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [ "id" => 19074,
                "name" => json_encode([
                    "pl" => "Dbanie o czystość i stan techniczny autobusu, zgłaszanie usterek",
                    "en" => "Maintaining the bus's cleanliness and technical condition, reporting faults."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [ "id" => 19075,
                "name" => json_encode([
                    "pl" => "Monitorowanie zachowania pasażerów i zapewnienie porządku w pojeździe",
                    "en" => "Monitoring passenger behavior and ensuring order in the vehicle."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [ "id" => 19076,
                "name" => json_encode([
                    "pl" => "Przestrzeganie zasad bezpiecznego przewozu pasażerów",
                    "en" => "Complying with rules for the safe transportation of passengers."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $KIEROWCA_TROLEJBUSU = [
            [ "id" => 19077,
                "name" => json_encode([
                    "pl" => "Prowadzenie trolejbusu na trasach miejskich zgodnie z rozkładem jazdy",
                    "en" => "Operating a trolleybus on city routes according to the schedule."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [ "id" => 19078,
                "name" => json_encode([
                    "pl" => "Zapewnienie bezpieczeństwa pasażerom oraz monitorowanie ich zachowania",
                    "en" => "Ensuring passenger safety and monitoring their behavior."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [ "id" => 19079,
                "name" => json_encode([
                    "pl" => "Obsługa biletów oraz udzielanie informacji dotyczących trasy i przystanków",
                    "en" => "Handling tickets and providing information about routes and stops."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [ "id" => 19080,
                "name" => json_encode([
                    "pl" => "Dbanie o stan techniczny trolejbusu oraz jego czystość",
                    "en" => "Maintaining the trolleybus's technical condition and cleanliness."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [ "id" => 19081,
                "name" => json_encode([
                    "pl" => "Przestrzeganie przepisów ruchu drogowego i zasad korzystania z sieci trakcyjnej",
                    "en" => "Adhering to traffic regulations and rules for using the traction network."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [ "id" => 19082,
                "name" => json_encode([
                    "pl" => "Zgłaszanie usterek oraz dbanie o terminową obsługę pojazdu",
                    "en" => "Reporting faults and ensuring timely vehicle servicing."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $KIEROWCY_SAMOCHODÓW_CIĘŻAROWYCH = [
            [ "id" => 19083,
                "name" => json_encode([
                    "pl" => "Przewożenie towarów na krótkich lub długich trasach",
                    "en" => "Transporting goods on short or long routes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [ "id" => 19084,
                "name" => json_encode([
                    "pl" => "Załadunek, zabezpieczanie i rozładunek towarów",
                    "en" => "Loading, securing, and unloading goods."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [ "id" => 19085,
                "name" => json_encode([
                    "pl" => "Prowadzenie dokumentacji przewozowej i dbanie o jej zgodność z przepisami",
                    "en" => "Maintaining transport documentation and ensuring compliance with regulations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [ "id" => 19086,
                "name" => json_encode([
                    "pl" => "Przestrzeganie przepisów drogowych, w tym norm czasu pracy kierowców",
                    "en" => "Adhering to traffic regulations, including driver working hours rules."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [ "id" => 19087,
                "name" => json_encode([
                    "pl" => "Monitorowanie stanu technicznego pojazdu oraz zgłaszanie usterek",
                    "en" => "Monitoring the vehicle's technical condition and reporting faults."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [ "id" => 19088,
                "name" => json_encode([
                    "pl" => "Dbanie o bezpieczeństwo przewożonych towarów",
                    "en" => "Ensuring the safety of transported goods."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $KIEROWCA_MECHANIK = [
            [ "id" => 19089,
                "name" => json_encode([
                    "pl" => "Prowadzenie pojazdu oraz bieżąca obsługa i konserwacja techniczna",
                    "en" => "Driving vehicles and performing routine maintenance and technical servicing."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [ "id" => 19090,
                "name" => json_encode([
                    "pl" => "Wykonywanie drobnych napraw i diagnostyki usterek podczas podróży",
                    "en" => "Performing minor repairs and diagnosing issues during travel."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [ "id" => 19091,
                "name" => json_encode([
                    "pl" => "Monitorowanie stanu technicznego pojazdu i dbanie o jego sprawność",
                    "en" => "Monitoring the vehicle's condition and ensuring its functionality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [ "id" => 19092,
                "name" => json_encode([
                    "pl" => "Prowadzenie dokumentacji przewozowej i czasu pracy kierowcy",
                    "en" => "Maintaining transport documentation and driver working hours logs."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [ "id" => 19093,
                "name" => json_encode([
                    "pl" => "Załadunek i zabezpieczanie przewożonego ładunku",
                    "en" => "Loading and securing transported cargo."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [ "id" => 19094,
                "name" => json_encode([
                    "pl" => "Przestrzeganie przepisów ruchu drogowego i norm bezpieczeństwa",
                    "en" => "Adhering to traffic regulations and safety standards."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $KIEROWCA_SAMOCHODU_OSOBOWEGO = [
            [ "id" => 19095,
                "name" => json_encode([
                    "pl" => "Przewożenie pasażerów lub towarów samochodem osobowym",
                    "en" => "Transporting passengers or goods by car."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [ "id" => 19096,
                "name" => json_encode([
                    "pl" => "Zapewnienie bezpieczeństwa podczas transportu i przestrzeganie przepisów drogowych",
                    "en" => "Ensuring safety during transport and following traffic regulations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [ "id" => 19097,
                "name" => json_encode([
                    "pl" => "Dbanie o komfort i obsługa pasażerów (np. udzielanie informacji)",
                    "en" => "Providing passenger comfort and service (e.g., offering information)."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [ "id" => 19098,
                "name" => json_encode([
                    "pl" => "Dbałość o stan techniczny i czystość pojazdu",
                    "en" => "Maintaining the vehicle's technical condition and cleanliness."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [ "id" => 19099,
                "name" => json_encode([
                    "pl" => "Monitorowanie harmonogramu jazd i punktualność dostaw lub odbiorów",
                    "en" => "Monitoring schedules and ensuring punctual deliveries or pickups."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [ "id" => 19100,
                "name" => json_encode([
                    "pl" => "Prowadzenie dokumentacji podróży i raportowanie ewentualnych problemów",
                    "en" => "Maintaining travel documentation and reporting any issues."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $PRZEWOŹNIK_OSÓB = [
            [ "id" => 19101,
                "name" => json_encode([
                    "pl" => "Organizacja przewozów osób zgodnie z wyznaczonym harmonogramem",
                    "en" => "Organizing passenger transport according to the set schedule."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [ "id" => 19102,
                "name" => json_encode([
                    "pl" => "Zapewnienie bezpieczeństwa i komfortu pasażerów podczas podróży",
                    "en" => "Ensuring passenger safety and comfort during travel."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [ "id" => 19103,
                "name" => json_encode([
                    "pl" => "Przestrzeganie przepisów ruchu drogowego oraz standardów przewozowych",
                    "en" => "Complying with traffic regulations and transport standards."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [ "id" => 19104,
                "name" => json_encode([
                    "pl" => "Utrzymywanie pojazdu w odpowiednim stanie technicznym i dbanie o jego czystość",
                    "en" => "Maintaining the vehicle's technical condition and cleanliness."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [ "id" => 19105,
                "name" => json_encode([
                    "pl" => "Prowadzenie dokumentacji podróży i rozliczeń finansowych",
                    "en" => "Maintaining travel documentation and financial records."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [ "id" => 19106,
                "name" => json_encode([
                    "pl" => "Obsługa pasażerów i udzielanie informacji dotyczących trasy oraz przystanków",
                    "en" => "Assisting passengers and providing route and stop information."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $TAKSÓWKARZ = [
            [ "id" => 19107,
                "name" => json_encode([
                    "pl" => "Przewożenie pasażerów zgodnie z ustalonymi lokalnymi przepisami",
                    "en" => "Transporting passengers in accordance with local regulations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [ "id" => 19108,
                "name" => json_encode([
                    "pl" => "Zapewnienie komfortu oraz bezpieczeństwa pasażerom podczas podróży",
                    "en" => "Ensuring passenger comfort and safety during the ride."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [ "id" => 19109,
                "name" => json_encode([
                    "pl" => "Utrzymanie taksówki w czystości i dbanie o jej sprawność techniczną",
                    "en" => "Keeping the taxi clean and in good technical condition."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [ "id" => 19110,
                "name" => json_encode([
                    "pl" => "Obsługa terminali płatniczych oraz rozliczanie opłat za przejazdy",
                    "en" => "Handling payment terminals and processing ride payments."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [ "id" => 19111,
                "name" => json_encode([
                    "pl" => "Znajomość lokalnych tras i miejsc docelowych",
                    "en" => "Knowing local routes and destinations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [ "id" => 19112,
                "name" => json_encode([
                    "pl" => "Utrzymywanie profesjonalnej komunikacji z pasażerami oraz dbanie o ich potrzeby",
                    "en" => "Maintaining professional communication with passengers and addressing their needs."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $KIEROWCA_POJAZDU_UPRZYWILEJOWANEGO = [
            [ "id" => 19113,
                "name" => json_encode([
                    "pl" => "Prowadzenie pojazdu uprzywilejowanego (np. karetki, straży pożarnej, radiowozu) zgodnie z przepisami",
                    "en" => "Driving an emergency vehicle (e.g., ambulance, fire truck, police car) according to regulations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [ "id" => 19114,
                "name" => json_encode([
                    "pl" => "Zapewnienie szybkiego i bezpiecznego dotarcia do celu",
                    "en" => "Ensuring quick and safe arrival at the destination."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [ "id" => 19115,
                "name" => json_encode([
                    "pl" => "Obsługa sygnalizacji dźwiękowej i świetlnej podczas jazdy",
                    "en" => "Operating sound and light signals during driving."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [ "id" => 19116,
                "name" => json_encode([
                    "pl" => "Współpraca z zespołem ratowniczym lub innymi służbami w miejscu zdarzenia",
                    "en" => "Collaborating with rescue teams or other services at the incident site."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [ "id" => 19117,
                "name" => json_encode([
                    "pl" => "Utrzymanie pojazdu w stanie gotowości operacyjnej",
                    "en" => "Maintaining the vehicle in operational readiness."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [ "id" => 19118,
                "name" => json_encode([
                    "pl" => "Przestrzeganie procedur bezpieczeństwa i zasad pierwszej pomocy",
                    "en" => "Adhering to safety procedures and first aid principles."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $MASZYNIŚCI_I_OPERATORZY_MASZYN_I_URZĄDZEŃ_DŹWIGOWO_TRANSPORTOWYCH_I_POKREWNI = [
            [ "id" => 19119,
                "name" => json_encode([
                    "pl" => "Obsługa i kontrola maszyn dźwigowych, takich jak dźwigi, żurawie, podnośniki",
                    "en" => "Operating and inspecting lifting machines such as cranes, hoists, and lifts."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [ "id" => 19120,
                "name" => json_encode([
                    "pl" => "Przestrzeganie przepisów BHP i procedur bezpieczeństwa podczas operacji dźwigowych",
                    "en" => "Following occupational health and safety regulations during lifting operations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [ "id" => 19121,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie regularnych przeglądów i konserwacji maszyn",
                    "en" => "Performing regular inspections and maintenance of machines."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [ "id" => 19122,
                "name" => json_encode([
                    "pl" => "Współpraca z innymi pracownikami na placu budowy w celu bezpiecznego przemieszczania ładunków",
                    "en" => "Collaborating with other construction site workers for safe load movement."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [ "id" => 19123,
                "name" => json_encode([
                    "pl" => "Dokumentowanie przebiegu pracy oraz zgłaszanie usterek",
                    "en" => "Documenting work processes and reporting malfunctions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [ "id" => 19124,
                "name" => json_encode([
                    "pl" => "Dbanie o dokładność i precyzję w obsłudze urządzeń",
                    "en" => "Ensuring accuracy and precision in equipment operation."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $KONDUKTORZY_I_POKREWNI = [
            [ "id" => 19125,
                "name" => json_encode([
                    "pl" => "Obsługa pasażerów w pociągach, w tym sprawdzanie biletów i udzielanie informacji",
                    "en" => "Assisting train passengers, including ticket checking and providing information."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [ "id" => 19126,
                "name" => json_encode([
                    "pl" => "Monitorowanie bezpieczeństwa pasażerów podczas podróży",
                    "en" => "Monitoring passenger safety during travel."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [ "id" => 19127,
                "name" => json_encode([
                    "pl" => "Zapewnienie zgodności podróży z regulaminem przewoźnika",
                    "en" => "Ensuring travel complies with carrier regulations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [ "id" => 19128,
                "name" => json_encode([
                    "pl" => "Obsługa systemów komunikacyjnych i alarmowych w pociągu",
                    "en" => "Operating communication and alarm systems on the train."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [ "id" => 19129,
                "name" => json_encode([
                    "pl" => "Współpraca z maszynistą oraz innymi pracownikami kolejowymi",
                    "en" => "Collaborating with the train driver and other railway staff."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [ "id" => 19130,
                "name" => json_encode([
                    "pl" => "Raportowanie incydentów oraz prowadzenie dokumentacji podróży",
                    "en" => "Reporting incidents and maintaining travel documentation."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $DYŻURNI_RUCHU_MANEWROWI_I_POKREWNI = [
            [ "id" => 19131,
                "name" => json_encode([
                    "pl" => "Koordynacja i nadzór nad ruchem kolejowym w stacji lub na szlaku",
                    "en" => "Coordinating and supervising railway traffic at stations or on tracks."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [ "id" => 19132,
                "name" => json_encode([
                    "pl" => "Sterowanie ruchem pociągów oraz odpowiedzialność za ich bezpieczne przemieszczanie",
                    "en" => "Managing train traffic and ensuring their safe movement."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [ "id" => 19133,
                "name" => json_encode([
                    "pl" => "Wydawanie sygnałów i poleceń maszynistom oraz manewrowym",
                    "en" => "Issuing signals and instructions to train drivers and shunting operators."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [ "id" => 19134,
                "name" => json_encode([
                    "pl" => "Monitorowanie harmonogramów pociągów i koordynowanie ich przepływu",
                    "en" => "Monitoring train schedules and coordinating their flow."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [ "id" => 19135,
                "name" => json_encode([
                    "pl" => "Przestrzeganie procedur bezpieczeństwa i zarządzanie sytuacjami awaryjnymi",
                    "en" => "Following safety procedures and managing emergency situations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [ "id" => 19136,
                "name" => json_encode([
                    "pl" => "Dokumentowanie operacji ruchu oraz prowadzenie dziennika stacyjnego",
                    "en" => "Documenting traffic operations and maintaining station logs."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $ZAWIADOWCA_STACJI = [
            [ "id" => 19137,
                "name" => json_encode([
                    "pl" => "Zarządzanie operacjami kolejowymi na stacji oraz nadzór nad pracownikami",
                    "en" => "Managing railway operations at the station and supervising staff."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [ "id" => 19138,
                "name" => json_encode([
                    "pl" => "Odpowiedzialność za bezpieczny ruch pociągów oraz sprawne manewrowanie",
                    "en" => "Ensuring safe train movements and efficient shunting operations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [ "id" => 19139,
                "name" => json_encode([
                    "pl" => "Koordynacja załadunku, rozładunku oraz odprawy pociągów",
                    "en" => "Coordinating train loading, unloading, and dispatch."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [ "id" => 19140,
                "name" => json_encode([
                    "pl" => "Współpraca z dyżurnymi ruchu i kontrolerami kolejowymi",
                    "en" => "Collaborating with train dispatchers and railway controllers."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [ "id" => 19141,
                "name" => json_encode([
                    "pl" => "Przestrzeganie procedur bezpieczeństwa i zarządzanie sytuacjami kryzysowymi",
                    "en" => "Following safety procedures and managing crisis situations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [ "id" => 19142,
                "name" => json_encode([
                    "pl" => "Prowadzenie dokumentacji operacyjnej i sporządzanie raportów",
                    "en" => "Maintaining operational documentation and preparing reports."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $KONTROLER_KOLEJOWY = [
            [ "id" => 19143,
                "name" => json_encode([
                    "pl" => "Monitorowanie i nadzorowanie ruchu pociągów w wyznaczonym obszarze",
                    "en" => "Monitoring and supervising train traffic in a designated area."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [ "id" => 19144,
                "name" => json_encode([
                    "pl" => "Kontrola zgodności tras pociągów z harmonogramami i przepisami",
                    "en" => "Ensuring train routes comply with schedules and regulations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [ "id" => 19145,
                "name" => json_encode([
                    "pl" => "Przestrzeganie zasad bezpieczeństwa i natychmiastowe reagowanie na zakłócenia",
                    "en" => "Adhering to safety rules and promptly responding to disruptions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [ "id" => 19146,
                "name" => json_encode([
                    "pl" => "Współpraca z dyżurnymi ruchu i zawiadowcami stacji",
                    "en" => "Collaborating with train dispatchers and station managers."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [ "id" => 19147,
                "name" => json_encode([
                    "pl" => "Dokumentowanie incydentów oraz prowadzenie dziennika operacyjnego",
                    "en" => "Documenting incidents and maintaining an operational log."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [ "id" => 19148,
                "name" => json_encode([
                    "pl" => "Wydawanie instrukcji dla maszynistów i personelu kolejowego",
                    "en" => "Issuing instructions to train drivers and railway personnel."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $MECHANIK_TABORU_KOLEJOWEGO = [
            [ "id" => 19149,
                "name" => json_encode([
                    "pl" => "Przeglądy, konserwacja i naprawa pojazdów kolejowych",
                    "en" => "Inspecting, maintaining, and repairing railway vehicles."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [ "id" => 19150,
                "name" => json_encode([
                    "pl" => "Diagnostyka usterek oraz wymiana zużytych części taboru",
                    "en" => "Diagnosing faults and replacing worn-out train components."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [ "id" => 19151,
                "name" => json_encode([
                    "pl" => "Kalibracja i regulacja systemów hamulcowych, elektrycznych i mechanicznych",
                    "en" => "Calibrating and adjusting brake, electrical, and mechanical systems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [ "id" => 19152,
                "name" => json_encode([
                    "pl" => "Prowadzenie dokumentacji serwisowej i raportowanie usterek",
                    "en" => "Maintaining service documentation and reporting faults."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [ "id" => 19153,
                "name" => json_encode([
                    "pl" => "Współpraca z maszynistami i dyżurnymi ruchu w zakresie napraw i przeglądów",
                    "en" => "Collaborating with train drivers and dispatchers on repairs and inspections."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [ "id" => 19154,
                "name" => json_encode([
                    "pl" => "Przestrzeganie standardów bezpieczeństwa i procedur serwisowych",
                    "en" => "Adhering to safety standards and service procedures."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $MASZYNIŚCI_KOLEJOWI_I_METRA = [
            [ "id" => 19155,
                "name" => json_encode([
                    "pl" => "Prowadzenie pociągów zgodnie z harmonogramem i zasadami bezpieczeństwa",
                    "en" => "Operating trains according to schedules and safety rules."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [ "id" => 19156,
                "name" => json_encode([
                    "pl" => "Obsługa i monitorowanie systemów sterowania pojazdów kolejowych i metra",
                    "en" => "Operating and monitoring control systems of trains and metro vehicles."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [ "id" => 19157,
                "name" => json_encode([
                    "pl" => "Przestrzeganie sygnałów oraz instrukcji od dyżurnych ruchu",
                    "en" => "Following signals and instructions from traffic controllers."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [ "id" => 19158,
                "name" => json_encode([
                    "pl" => "Zapewnienie komfortu i bezpieczeństwa pasażerów",
                    "en" => "Ensuring passenger comfort and safety."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [ "id" => 19159,
                "name" => json_encode([
                    "pl" => "Współpraca z kontrolerami kolejowymi i konserwatorami taboru",
                    "en" => "Collaborating with railway controllers and train maintenance personnel."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [ "id" => 19160,
                "name" => json_encode([
                    "pl" => "Dokumentowanie podróży oraz zgłaszanie usterek technicznych",
                    "en" => "Documenting journeys and reporting technical issues."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $KIERUJĄCY_TRAMWAJEM_MOTORNICZY = [
            [ "id" => 19161,
                "name" => json_encode([
                    "pl" => "Prowadzenie tramwaju zgodnie z rozkładem jazdy i przepisami ruchu drogowego",
                    "en" => "Operating a tram according to the schedule and traffic regulations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [ "id" => 19162,
                "name" => json_encode([
                    "pl" => "Zapewnienie bezpieczeństwa pasażerom oraz przestrzeganie procedur przewozowych",
                    "en" => "Ensuring passenger safety and following transport procedures."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [ "id" => 19163,
                "name" => json_encode([
                    "pl" => "Obsługa systemów komunikacyjnych i sygnalizacji w tramwaju",
                    "en" => "Operating communication and signaling systems in the tram."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [ "id" => 19164,
                "name" => json_encode([
                    "pl" => "Monitorowanie stanu technicznego tramwaju i zgłaszanie usterek",
                    "en" => "Monitoring the tram's technical condition and reporting faults."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [ "id" => 19165,
                "name" => json_encode([
                    "pl" => "Informowanie pasażerów o trasie i przystankach",
                    "en" => "Informing passengers about the route and stops."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [ "id" => 19166,
                "name" => json_encode([
                    "pl" => "Przestrzeganie procedur związanych z bezpiecznym przewozem pasażerów",
                    "en" => "Adhering to procedures for the safe transportation of passengers."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $PRACOWNICY_SŁUŻB_TECHNICZNYCH_ŻEGLUGI = [
            [ "id" => 19167,
                "name" => json_encode([
                    "pl" => "Utrzymanie sprawności technicznej statków, w tym przeglądy i naprawy",
                    "en" => "Maintaining the technical condition of ships, including inspections and repairs."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [ "id" => 19168,
                "name" => json_encode([
                    "pl" => "Obsługa i konserwacja systemów napędowych i mechanicznych na statkach",
                    "en" => "Operating and maintaining propulsion and mechanical systems on ships."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [ "id" => 19169,
                "name" => json_encode([
                    "pl" => "Współpraca z kapitanem oraz załogą w zakresie bezpieczeństwa technicznego",
                    "en" => "Collaborating with the captain and crew on technical safety matters."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [ "id" => 19170,
                "name" => json_encode([
                    "pl" => "Diagnostyka usterek oraz prowadzenie dokumentacji technicznej",
                    "en" => "Diagnosing faults and maintaining technical documentation."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [ "id" => 19171,
                "name" => json_encode([
                    "pl" => "Przestrzeganie norm bezpieczeństwa i procedur żeglugowych",
                    "en" => "Adhering to safety standards and maritime procedures."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [ "id" => 19172,
                "name" => json_encode([
                    "pl" => "Dbanie o oszczędność paliwa i sprawność techniczną sprzętu na statku",
                    "en" => "Ensuring fuel efficiency and the technical condition of ship equipment."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $MARYNARZE_I_POKREWNI = [
            [ "id" => 19173,
                "name" => json_encode([
                    "pl" => "Udział w pracach pokładowych oraz konserwacja statku",
                    "en" => "Participating in deck operations and ship maintenance."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [ "id" => 19174,
                "name" => json_encode([
                    "pl" => "Obsługa sprzętu i narzędzi wykorzystywanych na statku",
                    "en" => "Operating equipment and tools used on the ship."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [ "id" => 19175,
                "name" => json_encode([
                    "pl" => "Pomoc w manewrach oraz załadunku i rozładunku towarów",
                    "en" => "Assisting in maneuvers and loading/unloading goods."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [ "id" => 19176,
                "name" => json_encode([
                    "pl" => "Przestrzeganie procedur bezpieczeństwa na statku i podczas prac na pokładzie",
                    "en" => "Following safety procedures on the ship and during deck operations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [ "id" => 19177,
                "name" => json_encode([
                    "pl" => "Współpraca z załogą w celu zapewnienia sprawnego działania statku",
                    "en" => "Collaborating with the crew to ensure smooth ship operations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [ "id" => 19178,
                "name" => json_encode([
                    "pl" => "Dokumentowanie prac pokładowych i udział w alarmach ćwiczebnych",
                    "en" => "Documenting deck operations and participating in drill alarms."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $STEWARD_STATKU_MORSKIEGO = [
            [ "id" => 19179,
                "name" => json_encode([
                    "pl" => "Zapewnienie komfortu pasażerom na statku (np. serwowanie posiłków, sprzątanie kabin)",
                    "en" => "Providing passenger comfort on the ship (e.g., serving meals, cleaning cabins)."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [ "id" => 19180,
                "name" => json_encode([
                    "pl" => "Obsługa pasażerów oraz udzielanie informacji na temat podróży",
                    "en" => "Serving passengers and providing information about the journey."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [ "id" => 19181,
                "name" => json_encode([
                    "pl" => "Dbanie o porządek i czystość na pokładzie oraz w kabinach",
                    "en" => "Maintaining cleanliness and order on the deck and in cabins."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [ "id" => 19182,
                "name" => json_encode([
                    "pl" => "Współpraca z kuchnią oraz innymi działami obsługi pasażerskiej",
                    "en" => "Collaborating with the kitchen and other passenger service departments."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [ "id" => 19183,
                "name" => json_encode([
                    "pl" => "Przestrzeganie procedur sanitarnych oraz zasad BHP na pokładzie",
                    "en" => "Following sanitary procedures and health and safety rules on board."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [ "id" => 19184,
                "name" => json_encode([
                    "pl" => "Pomoc w sytuacjach awaryjnych i przestrzeganie procedur bezpieczeństwa",
                    "en" => "Assisting in emergencies and following safety procedures."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $BOSMAN_PORTU = [
            [ "id" => 19185,
                "name" => json_encode([
                    "pl" => "Nadzór nad operacjami portowymi oraz ruchem statków w porcie",
                    "en" => "Supervising port operations and managing ship traffic within the port."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [ "id" => 19186,
                "name" => json_encode([
                    "pl" => "Koordynacja manewrów wejścia i wyjścia statków z portu",
                    "en" => "Coordinating ship entry and exit maneuvers within the port."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [ "id" => 19187,
                "name" => json_encode([
                    "pl" => "Przestrzeganie zasad bezpieczeństwa w zakresie cumowania i operacji portowych",
                    "en" => "Ensuring safety compliance during mooring and port operations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [ "id" => 19188,
                "name" => json_encode([
                    "pl" => "Współpraca z kapitanami statków, pracownikami portu i służbami technicznymi",
                    "en" => "Collaborating with ship captains, port staff, and technical services."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [ "id" => 19189,
                "name" => json_encode([
                    "pl" => "Inspekcja infrastruktury portowej i zgłaszanie potrzeb serwisowych",
                    "en" => "Inspecting port infrastructure and reporting maintenance needs."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [ "id" => 19190,
                "name" => json_encode([
                    "pl" => "Prowadzenie dokumentacji operacyjnej oraz raportowanie przebiegu działań",
                    "en" => "Maintaining operational records and reporting on activities."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $KAPITAN_STATKU_MORSKIEGO = [
            [ "id" => 19191,
                "name" => json_encode([
                    "pl" => "Dowodzenie i zarządzanie całą załogą na statku",
                    "en" => "Commanding and managing the entire crew aboard the ship."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [ "id" => 19192,
                "name" => json_encode([
                    "pl" => "Odpowiedzialność za bezpieczne prowadzenie statku oraz załadowane towary lub pasażerów",
                    "en" => "Ensuring the safe navigation of the ship and the security of cargo or passengers."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [ "id" => 19193,
                "name" => json_encode([
                    "pl" => "Planowanie trasy i nawigacja statku zgodnie z przepisami morskimi",
                    "en" => "Planning the route and navigating the ship in compliance with maritime laws."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [ "id" => 19194,
                "name" => json_encode([
                    "pl" => "Monitorowanie warunków pogodowych oraz dostosowanie kursu do sytuacji na morzu",
                    "en" => "Monitoring weather conditions and adjusting the course as needed."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [ "id" => 19195,
                "name" => json_encode([
                    "pl" => "Nadzór nad bezpieczeństwem oraz przeprowadzanie ćwiczeń alarmowych",
                    "en" => "Overseeing safety protocols and conducting emergency drills."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [ "id" => 19196,
                "name" => json_encode([
                    "pl" => "Utrzymywanie dokumentacji podróży i kontakt z portami oraz władzami morskimi",
                    "en" => "Maintaining voyage records and liaising with ports and maritime authorities."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $PILOT_MORSKI = [
            [ "id" => 19197,
                "name" => json_encode([
                    "pl" => "Asysta przy wprowadzaniu i wyprowadzaniu statków z portów i wód przybrzeżnych",
                    "en" => "Assisting in guiding ships into and out of ports and coastal waters."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [ "id" => 19198,
                "name" => json_encode([
                    "pl" => "Przekazywanie kapitanowi informacji o lokalnych warunkach i przepisach nawigacyjnych",
                    "en" => "Providing captains with information about local conditions and navigation regulations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [ "id" => 19199,
                "name" => json_encode([
                    "pl" => "Doradzanie i planowanie trasy wejścia i wyjścia z portu",
                    "en" => "Advising and planning entry and exit routes for ports."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [ "id" => 19200,
                "name" => json_encode([
                    "pl" => "Zapewnienie bezpieczeństwa nawigacji w trudnych i wąskich wodach",
                    "en" => "Ensuring safe navigation in challenging and narrow waters."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [ "id" => 19201,
                "name" => json_encode([
                    "pl" => "Monitorowanie warunków pogodowych i reagowanie na nagłe zmiany",
                    "en" => "Monitoring weather conditions and responding to sudden changes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [ "id" => 19202,
                "name" => json_encode([
                    "pl" => "Utrzymywanie kontaktu z wieżą kontrolną i służbami portowymi",
                    "en" => "Maintaining communication with control towers and port services."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $MECHANIK_OKRĘTOWY = [
            [ "id" => 19203,
                "name" => json_encode([
                    "pl" => "Obsługa i konserwacja maszyn oraz urządzeń mechanicznych na statku",
                    "en" => "Operating and maintaining machinery and mechanical equipment on the ship."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [ "id" => 19204,
                "name" => json_encode([
                    "pl" => "Diagnozowanie i naprawa usterek w silnikach, systemach hydraulicznych i elektrycznych",
                    "en" => "Diagnosing and repairing faults in engines, hydraulic systems, and electrical systems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [ "id" => 19205,
                "name" => json_encode([
                    "pl" => "Monitorowanie pracy urządzeń i prowadzenie dokumentacji serwisowej",
                    "en" => "Monitoring equipment operation and maintaining service records."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [ "id" => 19206,
                "name" => json_encode([
                    "pl" => "Nadzór nad paliwem, smarowaniem oraz systemami chłodzenia maszyn",
                    "en" => "Overseeing fuel, lubrication, and cooling systems for machinery."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [ "id" => 19207,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie regularnych przeglądów technicznych i testów sprawności",
                    "en" => "Conducting regular technical inspections and efficiency tests."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [ "id" => 19208,
                "name" => json_encode([
                    "pl" => "Przestrzeganie procedur bezpieczeństwa technicznego i raportowanie problemów",
                    "en" => "Adhering to technical safety procedures and reporting issues."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $MOTORZYSTA_WACHTOWY = [
            [ "id" => 19209,
                "name" => json_encode([
                    "pl" => "Asystowanie mechanikom okrętowym w codziennej obsłudze maszyn statku",
                    "en" => "Assisting marine engineers in daily machinery operations on the ship."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [ "id" => 19210,
                "name" => json_encode([
                    "pl" => "Monitorowanie pracy silników i urządzeń mechanicznych na wachcie",
                    "en" => "Monitoring engine and mechanical equipment operation during watch duty."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [ "id" => 19211,
                "name" => json_encode([
                    "pl" => "Pomoc przy konserwacji i drobnych naprawach maszyn i urządzeń statku",
                    "en" => "Assisting with maintenance and minor repairs of ship machinery and equipment."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [ "id" => 19212,
                "name" => json_encode([
                    "pl" => "Utrzymywanie czystości i porządku w maszynowni",
                    "en" => "Maintaining cleanliness and order in the engine room."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [ "id" => 19213,
                "name" => json_encode([
                    "pl" => "Dokumentowanie parametrów pracy urządzeń oraz ewidencja zużycia paliwa i olejów",
                    "en" => "Recording equipment performance parameters and tracking fuel and oil consumption."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [ "id" => 19214,
                "name" => json_encode([
                    "pl" => "Przestrzeganie zasad bezpieczeństwa podczas pracy z maszynami",
                    "en" => "Following safety guidelines while working with machinery."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $KONTROLERZY_RUCHU_LOTNICZEGO_I_PERSONEL_POKREWNY = [
            [ "id" => 19215,
                "name" => json_encode([
                    "pl" => "Monitorowanie i kierowanie ruchem samolotów w przestrzeni powietrznej oraz na lotnisku",
                    "en" => "Monitoring and directing aircraft movement in airspace and at airports."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [ "id" => 19216,
                "name" => json_encode([
                    "pl" => "Wydawanie poleceń i wskazówek pilotom w celu zapewnienia bezpiecznego ruchu",
                    "en" => "Issuing commands and guidance to pilots to ensure safe traffic."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [ "id" => 19217,
                "name" => json_encode([
                    "pl" => "Utrzymywanie łączności radiowej z załogami oraz innymi jednostkami kontroli ruchu",
                    "en" => "Maintaining radio communication with crews and other traffic control units."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [ "id" => 19218,
                "name" => json_encode([
                    "pl" => "Zarządzanie separacją między samolotami w przestrzeni powietrznej",
                    "en" => "Managing separation between aircraft in airspace."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [ "id" => 19219,
                "name" => json_encode([
                    "pl" => "Obsługa systemów radarowych i nawigacyjnych",
                    "en" => "Operating radar and navigation systems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [ "id" => 19220,
                "name" => json_encode([
                    "pl" => "Koordynacja działań w sytuacjach awaryjnych i zarządzanie zmianami kursów",
                    "en" => "Coordinating actions during emergencies and managing course adjustments."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $STEWARDESA_STEWARD = [
            [ "id" => 19221,
                "name" => json_encode([
                    "pl" => "Zapewnienie komfortu i bezpieczeństwa pasażerom na pokładzie samolotu",
                    "en" => "Ensuring passenger comfort and safety on board the aircraft."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [ "id" => 19222,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie demonstracji zasad bezpieczeństwa przed startem",
                    "en" => "Conducting safety demonstrations before takeoff."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [ "id" => 19223,
                "name" => json_encode([
                    "pl" => "Serwowanie posiłków oraz napojów pasażerom",
                    "en" => "Serving meals and beverages to passengers."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [ "id" => 19224,
                "name" => json_encode([
                    "pl" => "Obsługa pasażerów i udzielanie informacji na temat podróży",
                    "en" => "Assisting passengers and providing information about the journey."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [ "id" => 19225,
                "name" => json_encode([
                    "pl" => "Przestrzeganie procedur bezpieczeństwa oraz reagowanie w sytuacjach awaryjnych",
                    "en" => "Following safety procedures and responding to emergencies."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [ "id" => 19226,
                "name" => json_encode([
                    "pl" => "Utrzymywanie porządku na pokładzie i dbałość o potrzeby pasażerów",
                    "en" => "Maintaining order on board and attending to passenger needs."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $NAWIGATOR_LOTNICZY = [
            [ "id" => 19227,
                "name" => json_encode([
                    "pl" => "Planowanie i wyznaczanie trasy lotu przy użyciu specjalistycznych systemów nawigacyjnych",
                    "en" => "Planning and determining flight routes using specialized navigation systems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [ "id" => 19228,
                "name" => json_encode([
                    "pl" => "Monitorowanie parametrów lotu i nawigowanie za pomocą urządzeń pokładowych",
                    "en" => "Monitoring flight parameters and navigating using onboard instruments."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [ "id" => 19229,
                "name" => json_encode([
                    "pl" => "Przestrzeganie przepisów lotniczych i dostosowywanie trasy do warunków pogodowych",
                    "en" => "Adhering to aviation regulations and adjusting routes for weather conditions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [ "id" => 19230,
                "name" => json_encode([
                    "pl" => "Utrzymywanie kontaktu z kontrolą ruchu lotniczego i przekazywanie informacji pilotowi",
                    "en" => "Maintaining communication with air traffic control and relaying information to the pilot."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [ "id" => 19231,
                "name" => json_encode([
                    "pl" => "Przygotowanie dokumentacji lotu oraz raportowanie przebiegu lotu",
                    "en" => "Preparing flight documentation and reporting on flight progress."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [ "id" => 19232,
                "name" => json_encode([
                    "pl" => "Reagowanie na zmiany w trasie oraz koordynacja alternatywnych planów lotu",
                    "en" => "Responding to route changes and coordinating alternative flight plans."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $PILOT = [
            [ "id" => 19233,
                "name" => json_encode([
                    "pl" => "Prowadzenie samolotu zgodnie z planem lotu i przepisami lotniczymi",
                    "en" => "Flying the aircraft according to the flight plan and aviation regulations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [ "id" => 19234,
                "name" => json_encode([
                    "pl" => "Monitorowanie warunków pogodowych oraz dostosowywanie kursu i wysokości lotu",
                    "en" => "Monitoring weather conditions and adjusting course and altitude as needed."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [ "id" => 19235,
                "name" => json_encode([
                    "pl" => "Współpraca z kontrolą ruchu lotniczego i przestrzeganie wydawanych poleceń",
                    "en" => "Cooperating with air traffic control and following issued instructions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [ "id" => 19236,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie procedur startu, lądowania i wznoszenia samolotu",
                    "en" => "Performing takeoff, landing, and climb procedures for the aircraft."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [ "id" => 19237,
                "name" => json_encode([
                    "pl" => "Odpowiedzialność za bezpieczeństwo pasażerów i załogi podczas lotu",
                    "en" => "Ensuring the safety of passengers and crew during the flight."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [ "id" => 19238,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie przedlotowych i powrotowych kontroli samolotu oraz raportowanie usterek",
                    "en" => "Conducting pre-flight and post-flight checks and reporting faults."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];

        DB::table('detail_projects')->insert(array_merge(
            $KIEROWNIK_DZIAŁU_LOGISTYKI,
            $KIEROWNIK_DZIAŁU_TRANSPORTU,
            $KIEROWNIK_DZIAŁU_ZAKUPÓW,
            $KIEROWNIK_MAGAZYNU,
            $KIEROWNIK_PRZEDSIĘBIORSTWA_SPEDYCYJNEGO,
            $KIEROWNIK_PRZEDSIĘBIORSTWA_TRANSPORTOWEGO,
            $KIEROWNIK_PUNKTU_SKUPU,
            $INŻYNIER_ZAOPATRZENIA_TRANSPORTU_I_MAGAZYNOWANIA,
            $SPEDYTORZY_I_POKREWNI,
            $SPECJALISTA_DO_SPRAW_LOGISTYKI,
            $SPECJALISTA_DO_SPRAW_ORGANIZACJI_I_ROZWOJU_TRANSPORTU,
            $INŻYNIER_RUCHU_DROGOWEGO,
            $INŻYNIER_RUCHU_KOLEJOWEGO,
            $ZAOPATRZENIOWCY,
            $KIEROWCY_MOTOCYKLI,
            $KIEROWCA_SAMOCHODU_DOSTAWCZEGO,
            $DOSTAWCA_POTRAW,
            $GONIEC,
            $MAGAZYNIERZY_I_POKREWNI,
            $INTENDENT,
            $POMOC_APTECZNA,
            $KURIER,
            $LISTONOSZ,
            $EKSPEDIENT_POCZTOWY,
            $KONTROLER_POCZTOWY,
            $KIEROWCA_AUTOBUSU,
            $KIEROWCA_TROLEJBUSU,
            $KIEROWCY_SAMOCHODÓW_CIĘŻAROWYCH,
            $KIEROWCA_MECHANIK,
            $KIEROWCA_SAMOCHODU_OSOBOWEGO,
            $PRZEWOŹNIK_OSÓB,
            $TAKSÓWKARZ,
            $KIEROWCA_POJAZDU_UPRZYWILEJOWANEGO,
            $MASZYNIŚCI_I_OPERATORZY_MASZYN_I_URZĄDZEŃ_DŹWIGOWO_TRANSPORTOWYCH_I_POKREWNI,
            $KONDUKTORZY_I_POKREWNI,
            $DYŻURNI_RUCHU_MANEWROWI_I_POKREWNI,
            $ZAWIADOWCA_STACJI,
            $KONTROLER_KOLEJOWY,
            $MECHANIK_TABORU_KOLEJOWEGO,
            $MASZYNIŚCI_KOLEJOWI_I_METRA,
            $KIERUJĄCY_TRAMWAJEM_MOTORNICZY,
            $PRACOWNICY_SŁUŻB_TECHNICZNYCH_ŻEGLUGI,
            $MARYNARZE_I_POKREWNI,
            $STEWARD_STATKU_MORSKIEGO,
            $BOSMAN_PORTU,
            $KAPITAN_STATKU_MORSKIEGO,
            $PILOT_MORSKI,
            $MECHANIK_OKRĘTOWY,
            $MOTORZYSTA_WACHTOWY,
            $KONTROLERZY_RUCHU_LOTNICZEGO_I_PERSONEL_POKREWNY,
            $STEWARDESA_STEWARD,
            $NAWIGATOR_LOTNICZY,
            $PILOT

        ));
        Category::whereId('1587')->first()->detailprojects()->attach(collect($KIEROWNIK_DZIAŁU_LOGISTYKI)->pluck('id')->toArray());
        Category::whereId('1588')->first()->detailprojects()->attach(collect($KIEROWNIK_DZIAŁU_TRANSPORTU)->pluck('id')->toArray());
        Category::whereId('1589')->first()->detailprojects()->attach(collect($KIEROWNIK_DZIAŁU_ZAKUPÓW)->pluck('id')->toArray());
        Category::whereId('1590')->first()->detailprojects()->attach(collect($KIEROWNIK_MAGAZYNU)->pluck('id')->toArray());
        Category::whereId('1591')->first()->detailprojects()->attach(collect($KIEROWNIK_PRZEDSIĘBIORSTWA_SPEDYCYJNEGO)->pluck('id')->toArray());
        Category::whereId('1592')->first()->detailprojects()->attach(collect($KIEROWNIK_PRZEDSIĘBIORSTWA_TRANSPORTOWEGO)->pluck('id')->toArray());
        Category::whereId('1593')->first()->detailprojects()->attach(collect($KIEROWNIK_PUNKTU_SKUPU)->pluck('id')->toArray());
        Category::whereId('1600')->first()->detailprojects()->attach(collect($INŻYNIER_ZAOPATRZENIA_TRANSPORTU_I_MAGAZYNOWANIA)->pluck('id')->toArray());
        Category::whereId('1601')->first()->detailprojects()->attach(collect($SPEDYTORZY_I_POKREWNI)->pluck('id')->toArray());
        Category::whereId('1613')->first()->detailprojects()->attach(collect($SPECJALISTA_DO_SPRAW_LOGISTYKI)->pluck('id')->toArray());
        Category::whereId('1614')->first()->detailprojects()->attach(collect($SPECJALISTA_DO_SPRAW_ORGANIZACJI_I_ROZWOJU_TRANSPORTU)->pluck('id')->toArray());

        Category::whereId('1618')->first()->detailprojects()->attach(collect($INŻYNIER_RUCHU_DROGOWEGO)->pluck('id')->toArray());
        Category::whereId('1619')->first()->detailprojects()->attach(collect($INŻYNIER_RUCHU_KOLEJOWEGO)->pluck('id')->toArray());
        Category::whereId('1628')->first()->detailprojects()->attach(collect($ZAOPATRZENIOWCY)->pluck('id')->toArray());

        Category::whereId('1632')->first()->detailprojects()->attach(collect($KIEROWCY_MOTOCYKLI)->pluck('id')->toArray());
        Category::whereId('1635')->first()->detailprojects()->attach(collect($KIEROWCA_SAMOCHODU_DOSTAWCZEGO)->pluck('id')->toArray());
        Category::whereId('1636')->first()->detailprojects()->attach(collect($DOSTAWCA_POTRAW)->pluck('id')->toArray());

        Category::whereId('1637')->first()->detailprojects()->attach(collect($GONIEC)->pluck('id')->toArray());
        Category::whereId('1639')->first()->detailprojects()->attach(collect($MAGAZYNIERZY_I_POKREWNI)->pluck('id')->toArray());
        Category::whereId('1647')->first()->detailprojects()->attach(collect($INTENDENT)->pluck('id')->toArray());

        Category::whereId('1649')->first()->detailprojects()->attach(collect($POMOC_APTECZNA)->pluck('id')->toArray());
        Category::whereId('1651')->first()->detailprojects()->attach(collect($KURIER)->pluck('id')->toArray());

        Category::whereId('1652')->first()->detailprojects()->attach(collect($LISTONOSZ)->pluck('id')->toArray());
        Category::whereId('1657')->first()->detailprojects()->attach(collect($EKSPEDIENT_POCZTOWY)->pluck('id')->toArray());
        Category::whereId('1658')->first()->detailprojects()->attach(collect($KONTROLER_POCZTOWY)->pluck('id')->toArray());

        Category::whereId('1660')->first()->detailprojects()->attach(collect($KIEROWCA_AUTOBUSU)->pluck('id')->toArray());
        Category::whereId('1661')->first()->detailprojects()->attach(collect($KIEROWCA_TROLEJBUSU)->pluck('id')->toArray());
        Category::whereId('1663')->first()->detailprojects()->attach(collect($KIEROWCY_SAMOCHODÓW_CIĘŻAROWYCH)->pluck('id')->toArray());

        Category::whereId('1668')->first()->detailprojects()->attach(collect($KIEROWCA_MECHANIK)->pluck('id')->toArray());
        Category::whereId('1670')->first()->detailprojects()->attach(collect($KIEROWCA_SAMOCHODU_OSOBOWEGO)->pluck('id')->toArray());
        Category::whereId('1671')->first()->detailprojects()->attach(collect($PRZEWOŹNIK_OSÓB)->pluck('id')->toArray());
        Category::whereId('1672')->first()->detailprojects()->attach(collect($TAKSÓWKARZ)->pluck('id')->toArray());

        Category::whereId('1673')->first()->detailprojects()->attach(collect($KIEROWCA_POJAZDU_UPRZYWILEJOWANEGO)->pluck('id')->toArray());
        Category::whereId('1675')->first()->detailprojects()->attach(collect($MASZYNIŚCI_I_OPERATORZY_MASZYN_I_URZĄDZEŃ_DŹWIGOWO_TRANSPORTOWYCH_I_POKREWNI)->pluck('id')->toArray());
        Category::whereId('1695')->first()->detailprojects()->attach(collect($KONDUKTORZY_I_POKREWNI)->pluck('id')->toArray());

        Category::whereId('1719')->first()->detailprojects()->attach(collect($ZAWIADOWCA_STACJI)->pluck('id')->toArray());
        Category::whereId('1720')->first()->detailprojects()->attach(collect($KONTROLER_KOLEJOWY)->pluck('id')->toArray());
        Category::whereId('1726')->first()->detailprojects()->attach(collect($MECHANIK_TABORU_KOLEJOWEGO)->pluck('id')->toArray());
        Category::whereId('1730')->first()->detailprojects()->attach(collect($MASZYNIŚCI_KOLEJOWI_I_METRA)->pluck('id')->toArray());
        Category::whereId('1738')->first()->detailprojects()->attach(collect($KIERUJĄCY_TRAMWAJEM_MOTORNICZY)->pluck('id')->toArray());


        Category::whereId('1740')->first()->detailprojects()->attach(collect($PRACOWNICY_SŁUŻB_TECHNICZNYCH_ŻEGLUGI)->pluck('id')->toArray());
        Category::whereId('1747')->first()->detailprojects()->attach(collect($MARYNARZE_I_POKREWNI)->pluck('id')->toArray());
        Category::whereId('1756')->first()->detailprojects()->attach(collect($STEWARD_STATKU_MORSKIEGO)->pluck('id')->toArray());

        Category::whereId('1757')->first()->detailprojects()->attach(collect($BOSMAN_PORTU)->pluck('id')->toArray());
        Category::whereId('1760')->first()->detailprojects()->attach(collect($KAPITAN_STATKU_MORSKIEGO)->pluck('id')->toArray());
        Category::whereId('1766')->first()->detailprojects()->attach(collect($PILOT_MORSKI)->pluck('id')->toArray());



        Category::whereId('1772')->first()->detailprojects()->attach(collect($MECHANIK_OKRĘTOWY)->pluck('id')->toArray());
        Category::whereId('1773')->first()->detailprojects()->attach(collect($MOTORZYSTA_WACHTOWY)->pluck('id')->toArray());
        Category::whereId('1776')->first()->detailprojects()->attach(collect($KONTROLERZY_RUCHU_LOTNICZEGO_I_PERSONEL_POKREWNY)->pluck('id')->toArray());

        Category::whereId('1784')->first()->detailprojects()->attach(collect($STEWARDESA_STEWARD)->pluck('id')->toArray());
        Category::whereId('1789')->first()->detailprojects()->attach(collect($NAWIGATOR_LOTNICZY)->pluck('id')->toArray());
        Category::whereId('1791')->first()->detailprojects()->attach(collect($PILOT)->pluck('id')->toArray());
        Category::whereId('1792')->first()->detailprojects()->attach(collect($PILOT)->pluck('id')->toArray());
        Category::whereId('1793')->first()->detailprojects()->attach(collect($PILOT)->pluck('id')->toArray());
        Category::whereId('1794')->first()->detailprojects()->attach(collect($PILOT)->pluck('id')->toArray());
        Category::whereId('1795')->first()->detailprojects()->attach(collect($PILOT)->pluck('id')->toArray());
        Category::whereId('1796')->first()->detailprojects()->attach(collect($PILOT)->pluck('id')->toArray());


    }
}

