<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class DetailProjectEdukacjaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Schema::disableForeignKeyConstraints();

        $specjalista_ds_wychowania_malego_dziecka = [
            [
                "id" => 14599,
                "name" => json_encode([
                    "pl" => "Opracowanie programów wychowawczych dostosowanych do wieku i potrzeb rozwojowych dzieci, które wspierają ich rozwój poznawczy, emocjonalny, społeczny i fizyczny.",
                    "en" => "Developing educational programs tailored to the age and developmental needs of children, supporting their cognitive, emotional, social, and physical growth."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 14600,
                "name" => json_encode([
                    "pl" => "Dostosowanie działań edukacyjnych do indywidualnych cech i możliwości każdego dziecka.",
                    "en" => "Adapting educational activities to each child's individual characteristics and abilities."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 14601,
                "name" => json_encode([
                    "pl" => "Organizowanie zajęć wspierających rozwój motoryki, języka, umiejętności poznawczych oraz umiejętności społecznych.",
                    "en" => "Organizing activities that support the development of motor skills, language, cognitive skills, and social abilities."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 14602,
                "name" => json_encode([
                    "pl" => "Wprowadzanie zabaw edukacyjnych, ćwiczeń ruchowych i sensorycznych, które rozwijają wyobraźnię, kreatywność i zdolności poznawcze.",
                    "en" => "Introducing educational games, physical and sensory exercises that enhance imagination, creativity, and cognitive skills."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 14603,
                "name" => json_encode([
                    "pl" => "Obserwacja dzieci pod kątem ich postępów w rozwoju oraz identyfikacja ewentualnych opóźnień lub trudności.",
                    "en" => "Observing children for developmental progress and identifying any delays or difficulties."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 14604,
                "name" => json_encode([
                    "pl" => "Prowadzenie dokumentacji dotyczącej rozwoju każdego dziecka, co pozwala śledzić postępy oraz dostosowywać działania do jego potrzeb.",
                    "en" => "Maintaining records of each child's development, allowing progress tracking and adapting actions to their needs."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 14605,
                "name" => json_encode([
                    "pl" => "Pomoc dzieciom w nauce kontrolowania emocji, rozpoznawania i wyrażania swoich uczuć w bezpieczny sposób.",
                    "en" => "Helping children learn to control emotions, recognize, and express their feelings safely."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 14606,
                "name" => json_encode([
                    "pl" => "Uczenie dzieci umiejętności społecznych, takich jak współpraca, dzielenie się, rozwiązywanie konfliktów i budowanie relacji z rówieśnikami.",
                    "en" => "Teaching social skills, such as cooperation, sharing, conflict resolution, and building relationships with peers."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 14607,
                "name" => json_encode([
                    "pl" => "Nauczanie dzieci podstawowych zasad higieny osobistej, takich jak mycie rąk, zębów i dbanie o czystość.",
                    "en" => "Teaching children basic personal hygiene practices, such as hand washing, brushing teeth, and cleanliness."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 14608,
                "name" => json_encode([
                    "pl" => "Wspieranie zdrowych nawyków, takich jak aktywność fizyczna i zdrowe odżywianie, które są fundamentem dla zdrowego rozwoju.",
                    "en" => "Promoting healthy habits like physical activity and balanced nutrition, essential for healthy development."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 14609,
                "name" => json_encode([
                    "pl" => "Wprowadzanie i utrzymywanie rutyn, które pomagają dzieciom poczuć się bezpiecznie, np. rutyny snu, posiłków, czasu na zabawę i naukę.",
                    "en" => "Establishing routines that help children feel secure, such as sleep, meals, play, and learning times."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 14610,
                "name" => json_encode([
                    "pl" => "Pomoc dzieciom w rozwijaniu samodzielności i nawyków odpowiednich dla ich wieku, takich jak sprzątanie po sobie, ubieranie się i jedzenie.",
                    "en" => "Helping children develop age-appropriate independence and habits, such as tidying up, dressing, and eating."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 14611,
                "name" => json_encode([
                    "pl" => "Dbanie o bezpieczeństwo fizyczne i emocjonalne dzieci w środowisku edukacyjnym i wychowawczym.",
                    "en" => "Ensuring the physical and emotional safety of children in the educational and caregiving environment."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 14612,
                "name" => json_encode([
                    "pl" => "Zapewnienie miejsca, które sprzyja eksploracji, swobodnej zabawie oraz rozwojowi dziecka.",
                    "en" => "Providing an environment that encourages exploration, free play, and child development."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 14613,
                "name" => json_encode([
                    "pl" => "Rozpoznawanie indywidualnych potrzeb i możliwości dzieci oraz dostosowywanie metod pracy do ich poziomu rozwoju.",
                    "en" => "Recognizing each child's needs and abilities and adapting methods to their developmental level."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 14614,
                "name" => json_encode([
                    "pl" => "Tworzenie indywidualnych planów wsparcia dla dzieci z trudnościami w rozwoju lub szczególnymi potrzebami.",
                    "en" => "Creating individualized support plans for children with developmental challenges or special needs."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 14615,
                "name" => json_encode([
                    "pl" => "Wprowadzanie ćwiczeń i zabaw, które stymulują rozwój mowy i komunikacji, takich jak czytanie, śpiewanie, powtarzanie dźwięków i słów.",
                    "en" => "Introducing exercises and games that stimulate speech and communication, such as reading, singing, and repeating sounds and words."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 14616,
                "name" => json_encode([
                    "pl" => "Zachęcanie do aktywnego słuchania, zadawania pytań oraz prowadzenia rozmów, które wspierają rozwój umiejętności językowych.",
                    "en" => "Encouraging active listening, asking questions, and engaging in conversations to support language development."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 14617,
                "name" => json_encode([
                    "pl" => "Organizowanie zajęć plastycznych, muzycznych, teatralnych, które rozwijają wyobraźnię i twórcze myślenie dzieci.",
                    "en" => "Organizing art, music, and theater activities to develop children's imagination and creative thinking."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 14618,
                "name" => json_encode([
                    "pl" => "Wprowadzanie zabaw tematycznych, które pomagają dzieciom rozwijać wyobraźnię i zdolności twórcze.",
                    "en" => "Introducing themed games that help children develop imagination and creativity."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 14619,
                "name" => json_encode([
                    "pl" => "Regularny kontakt z rodzicami w celu informowania ich o postępach dziecka, jego zachowaniu i rozwoju.",
                    "en" => "Maintaining regular communication with parents to inform them about the child's progress, behavior, and development."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 14620,
                "name" => json_encode([
                    "pl" => "Udzielanie wskazówek i porad wychowawczych, które pomagają rodzicom wspierać rozwój dziecka również w domu.",
                    "en" => "Providing guidance and parenting advice to help parents support their child's development at home."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 14621,
                "name" => json_encode([
                    "pl" => "Organizowanie regularnych spotkań, na których omawiane są postępy dziecka, jego potrzeby oraz cele wychowawcze.",
                    "en" => "Organizing regular meetings to discuss the child's progress, needs, and educational goals."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 14622,
                "name" => json_encode([
                    "pl" => "Konsultowanie się z rodzicami w przypadku trudności wychowawczych lub specjalnych potrzeb dziecka.",
                    "en" => "Consulting with parents in cases of behavioral challenges or special needs."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 14623,
                "name" => json_encode([
                    "pl" => "Obserwacja i identyfikacja dzieci z trudnościami rozwojowymi, które mogą wymagać wsparcia specjalistycznego.",
                    "en" => "Observing and identifying children with developmental difficulties that may require specialist support."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 14624,
                "name" => json_encode([
                    "pl" => "Współpraca z psychologami, logopedami, terapeutami oraz innymi specjalistami w celu zapewnienia kompleksowej opieki i wsparcia.",
                    "en" => "Collaborating with psychologists, speech therapists, and other specialists to ensure comprehensive care and support."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 14625,
                "name" => json_encode([
                    "pl" => "Prowadzenie dzienników, arkuszy obserwacji i raportów, które dokumentują rozwój, postępy i ewentualne trudności dziecka.",
                    "en" => "Maintaining journals, observation sheets, and reports documenting the child's development, progress, and any difficulties."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 14626,
                "name" => json_encode([
                    "pl" => "Regularne monitorowanie postępów oraz analiza rozwoju dziecka na różnych etapach.",
                    "en" => "Regularly monitoring progress and analyzing the child's development at various stages."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 14627,
                "name" => json_encode([
                    "pl" => "Planowanie zajęć, które wspierają rozwój motoryczny i koordynację ruchową, takich jak zabawy ruchowe, ćwiczenia gimnastyczne, zajęcia na świeżym powietrzu.",
                    "en" => "Planning activities that support motor skills and coordination, such as movement games, gymnastics, and outdoor activities."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 14628,
                "name" => json_encode([
                    "pl" => "Zachęcanie dzieci do regularnej aktywności fizycznej oraz dbanie o ich sprawność ruchową.",
                    "en" => "Encouraging children to engage in regular physical activity and maintaining their physical fitness."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 14629,
                "name" => json_encode([
                    "pl" => "Organizowanie zabaw grupowych, które sprzyjają integracji i uczą współpracy, dzielenia się oraz rozwiązywania konfliktów.",
                    "en" => "Organizing group games that promote integration and teach cooperation, sharing, and conflict resolution."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 14630,
                "name" => json_encode([
                    "pl" => "Pomaganie dzieciom w rozwijaniu relacji z rówieśnikami i wspieranie ich w budowaniu przyjaźni.",
                    "en" => "Helping children develop relationships with peers and supporting them in building friendships."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 14631,
                "name" => json_encode([
                    "pl" => "Zachęcanie dzieci do podejmowania samodzielnych działań, takich jak sprzątanie po sobie, dbanie o własne rzeczy i pomaganie innym.",
                    "en" => "Encouraging children to take independent actions, such as tidying up, caring for their belongings, and helping others."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 14632,
                "name" => json_encode([
                    "pl" => "Rozwijanie poczucia odpowiedzialności oraz uczenie podejmowania prostych decyzji, które wspierają ich niezależność.",
                    "en" => "Developing a sense of responsibility and teaching them to make simple decisions that support independence."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 14633,
                "name" => json_encode([
                    "pl" => "Wprowadzanie ćwiczeń, które rozwijają umiejętności myślenia logicznego, koncentracji, pamięci i rozwiązywania problemów.",
                    "en" => "Introducing exercises that develop logical thinking, concentration, memory, and problem-solving skills."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 14634,
                "name" => json_encode([
                    "pl" => "Stosowanie zabaw edukacyjnych, które uczą dzieci planowania, analizowania i podejmowania decyzji.",
                    "en" => "Using educational games that teach planning, analysis, and decision-making."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 14635,
                "name" => json_encode([
                    "pl" => "Organizowanie zabaw i ćwiczeń sensorycznych, które wspierają rozwój zmysłów dzieci, takich jak dotyk, wzrok, słuch i równowaga.",
                    "en" => "Organizing sensory games and exercises that support sensory development, such as touch, sight, hearing, and balance."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 14636,
                "name" => json_encode([
                    "pl" => "Wprowadzanie materiałów sensorycznych, takich jak piasek, woda, klocki i masa plastyczna, które wspierają poznanie świata za pomocą zmysłów.",
                    "en" => "Introducing sensory materials, such as sand, water, blocks, and clay, that support sensory exploration of the world."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 14637,
                "name" => json_encode([
                    "pl" => "Udział w szkoleniach, warsztatach i kursach, które pomagają poszerzać wiedzę na temat rozwoju dziecka, metod wychowawczych i nowych trendów edukacyjnych.",
                    "en" => "Participating in training, workshops, and courses to expand knowledge about child development, parenting methods, and new educational trends."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 14638,
                "name" => json_encode([
                    "pl" => "Śledzenie aktualnych badań i zaleceń dotyczących wychowania i edukacji małych dzieci.",
                    "en" => "Keeping up with current research and recommendations on early childhood education and parenting."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $nauczyciel_edukacji_wczesnoszkolnej = [
            [
                "id" => 14639,
                "name" => json_encode([
                    "pl" => "Tworzenie i realizowanie programów nauczania zgodnych z podstawą programową dla edukacji wczesnoszkolnej.",
                    "en" => "Creating and implementing curricula aligned with the primary education framework."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 14640,
                "name" => json_encode([
                    "pl" => "Dostosowanie materiału do wieku, poziomu umiejętności oraz indywidualnych potrzeb uczniów.",
                    "en" => "Adapting materials to the age, skill level, and individual needs of students."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 14641,
                "name" => json_encode([
                    "pl" => "Nauczanie podstawowych przedmiotów, takich jak język polski, matematyka, przyroda, edukacja artystyczna i muzyczna.",
                    "en" => "Teaching core subjects such as Polish language, math, nature studies, art, and music education."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 14642,
                "name" => json_encode([
                    "pl" => "Stosowanie różnych metod i technik, które ułatwiają dzieciom przyswajanie wiedzy i rozwijają ich umiejętności.",
                    "en" => "Applying various methods and techniques that facilitate knowledge acquisition and skill development."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 14643,
                "name" => json_encode([
                    "pl" => "Wprowadzanie podstawowych umiejętności, takich jak czytanie, pisanie, liczenie, rozpoznawanie liter, cyfr i podstawowych pojęć matematycznych.",
                    "en" => "Introducing basic skills such as reading, writing, counting, and recognizing letters, numbers, and basic math concepts."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 14644,
                "name" => json_encode([
                    "pl" => "Praca nad poprawnością ortograficzną, gramatyczną oraz rozwijanie umiejętności językowych.",
                    "en" => "Focusing on spelling, grammar, and language skills development."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 14645,
                "name" => json_encode([
                    "pl" => "Uczenie dzieci współpracy, komunikacji, rozwiązywania konfliktów oraz budowania pozytywnych relacji z rówieśnikami.",
                    "en" => "Teaching cooperation, communication, conflict resolution, and building positive peer relationships."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 14646,
                "name" => json_encode([
                    "pl" => "Przekazywanie zasad funkcjonowania w grupie oraz odpowiednich postaw społecznych.",
                    "en" => "Instilling principles of group dynamics and appropriate social attitudes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 14647,
                "name" => json_encode([
                    "pl" => "Zapewnienie bezpiecznej, wspierającej atmosfery, która sprzyja rozwojowi uczniów i zachęca ich do wyrażania siebie.",
                    "en" => "Ensuring a safe, supportive environment that promotes student development and encourages self-expression."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 14648,
                "name" => json_encode([
                    "pl" => "Dbanie o pozytywne relacje między uczniami oraz o klimat sprzyjający nauce.",
                    "en" => "Maintaining positive relationships among students and fostering a learning-conducive atmosphere."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 14649,
                "name" => json_encode([
                    "pl" => "Dostosowanie metod i form nauczania do indywidualnych potrzeb i możliwości uczniów, w tym dzieci z trudnościami w nauce lub specjalnymi potrzebami edukacyjnymi.",
                    "en" => "Adjusting teaching methods and formats to individual student needs, including those with learning difficulties or special educational needs."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 14650,
                "name" => json_encode([
                    "pl" => "Opracowanie indywidualnych planów pracy dla uczniów wymagających dodatkowego wsparcia.",
                    "en" => "Creating individual work plans for students who need additional support."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 14651,
                "name" => json_encode([
                    "pl" => "Systematyczna ocena postępów i rozwoju uczniów, identyfikacja ich mocnych stron oraz obszarów wymagających pracy.",
                    "en" => "Systematic assessment of student progress, identifying strengths and areas needing improvement."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 14652,
                "name" => json_encode([
                    "pl" => "Prowadzenie dokumentacji i raportów, które pozwalają na śledzenie postępów uczniów oraz dostosowanie działań do ich potrzeb.",
                    "en" => "Maintaining documentation and reports that track student progress and adjust actions to their needs."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 14653,
                "name" => json_encode([
                    "pl" => "Wprowadzanie aktywności artystycznych, muzycznych, teatralnych, które wspierają twórcze myślenie i rozwój wyobraźni dzieci.",
                    "en" => "Introducing artistic, musical, and theatrical activities to support creative thinking and imagination development."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 14654,
                "name" => json_encode([
                    "pl" => "Praca nad projektami plastycznymi, technicznymi i muzycznymi, które rozwijają zdolności manualne i artystyczne.",
                    "en" => "Working on art, technical, and musical projects that develop manual and artistic skills."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 14655,
                "name" => json_encode([
                    "pl" => "Nauczanie dzieci rozpoznawania liter, składania wyrazów oraz pisania prostych zdań.",
                    "en" => "Teaching children to recognize letters, form words, and write simple sentences."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 14656,
                "name" => json_encode([
                    "pl" => "Wspieranie rozwoju umiejętności czytania ze zrozumieniem oraz poprawnej pisowni.",
                    "en" => "Supporting the development of reading comprehension and correct spelling skills."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 14657,
                "name" => json_encode([
                    "pl" => "Uczenie dzieci odpowiedzialności za własną naukę oraz rozwijanie umiejętności samodzielnej pracy.",
                    "en" => "Teaching children responsibility for their own learning and developing independent work skills."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 14658,
                "name" => json_encode([
                    "pl" => "Wprowadzanie zadań zespołowych, które uczą współpracy, dzielenia się oraz wzajemnej pomocy.",
                    "en" => "Introducing team tasks that teach cooperation, sharing, and mutual assistance."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 14659,
                "name" => json_encode([
                    "pl" => "Nauczanie podstaw matematyki, takich jak liczenie, dodawanie, odejmowanie, rozpoznawanie figur geometrycznych i proste zadania logiczne.",
                    "en" => "Teaching basic math, including counting, addition, subtraction, recognizing geometric shapes, and simple logic tasks."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 14660,
                "name" => json_encode([
                    "pl" => "Wprowadzanie gier i zabaw, które rozwijają logiczne myślenie oraz umiejętności matematyczne.",
                    "en" => "Introducing games and activities that develop logical thinking and math skills."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 14661,
                "name" => json_encode([
                    "pl" => "Nauczanie dzieci zasad higieny osobistej, zdrowego odżywiania oraz dbania o swoje zdrowie.",
                    "en" => "Teaching children personal hygiene, healthy eating, and self-care."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 14662,
                "name" => json_encode([
                    "pl" => "Przekazywanie wiedzy na temat podstawowych zasad bezpieczeństwa i higieny w szkole i poza nią.",
                    "en" => "Providing knowledge on basic safety and hygiene rules in and outside of school."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 14663,
                "name" => json_encode([
                    "pl" => "Regularny kontakt z rodzicami, informowanie ich o postępach dziecka, zachowaniu oraz potrzebach edukacyjnych.",
                    "en" => "Maintaining regular contact with parents to inform them about the child's progress, behavior, and educational needs."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 14664,
                "name" => json_encode([
                    "pl" => "Organizowanie spotkań, konsultacji i zebrań, które wspierają współpracę między nauczycielem a rodzicami.",
                    "en" => "Organizing meetings, consultations, and gatherings to foster teacher-parent cooperation."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 14665,
                "name" => json_encode([
                    "pl" => "Organizowanie spotkań, na których omawiane są postępy w nauce, zachowanie oraz ewentualne trudności uczniów.",
                    "en" => "Holding meetings to discuss academic progress, behavior, and any challenges students may face."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 14666,
                "name" => json_encode([
                    "pl" => "Konsultowanie się z rodzicami w sprawach dotyczących indywidualnych potrzeb edukacyjnych dziecka.",
                    "en" => "Consulting with parents on matters related to the child's individual educational needs."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 14667,
                "name" => json_encode([
                    "pl" => "Obserwacja i diagnoza dzieci, które mogą mieć trudności w nauce lub specjalne potrzeby edukacyjne.",
                    "en" => "Observing and diagnosing children who may have learning difficulties or special educational needs."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 14668,
                "name" => json_encode([
                    "pl" => "Współpraca z psychologiem szkolnym, pedagogiem lub terapeutą, aby zapewnić dzieciom odpowiednie wsparcie.",
                    "en" => "Collaborating with school psychologists, pedagogues, or therapists to provide children with appropriate support."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 14669,
                "name" => json_encode([
                    "pl" => "Wprowadzenie ćwiczeń, gier i zabaw ruchowych, które wspierają rozwój fizyczny, koordynację oraz sprawność dzieci.",
                    "en" => "Introducing exercises, games, and movement activities that support physical development, coordination, and agility."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 14670,
                "name" => json_encode([
                    "pl" => "Zachęcanie dzieci do aktywności fizycznej oraz dbanie o ich zdrowie fizyczne.",
                    "en" => "Encouraging children to engage in physical activities and care for their physical health."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 14671,
                "name" => json_encode([
                    "pl" => "Uczenie podstawowych umiejętności, które przygotowują dzieci do dalszej nauki w starszych klasach.",
                    "en" => "Teaching fundamental skills that prepare children for further learning in higher grades."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 14672,
                "name" => json_encode([
                    "pl" => "Wspieranie rozwoju emocjonalnego i społecznego, które ułatwia adaptację w wyższych poziomach edukacyjnych.",
                    "en" => "Supporting emotional and social development to ease adaptation to higher educational levels."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 14673,
                "name" => json_encode([
                    "pl" => "Uczenie zasad bezpieczeństwa, zarówno w szkole, jak i poza nią, np. zasady ruchu drogowego, bezpiecznego korzystania z internetu.",
                    "en" => "Teaching safety rules, both at school and beyond, such as traffic rules and safe internet use."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 14674,
                "name" => json_encode([
                    "pl" => "Wspieranie dzieci w rozumieniu sytuacji niebezpiecznych i odpowiednich reakcji na nie.",
                    "en" => "Helping children understand dangerous situations and appropriate responses to them."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 14675,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników i postępów uczniów, co pozwala monitorować ich rozwój i planować dalsze działania edukacyjne.",
                    "en" => "Documenting student results and progress, allowing for monitoring development and planning further educational actions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 14676,
                "name" => json_encode([
                    "pl" => "Prowadzenie dzienników, raportów i ocen, które są niezbędne do pracy wychowawczej i dydaktycznej.",
                    "en" => "Maintaining journals, reports, and evaluations essential for educational and didactic work."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 14677,
                "name" => json_encode([
                    "pl" => "Udział w kursach, szkoleniach i warsztatach, które pomagają poszerzać wiedzę z zakresu pedagogiki i metod pracy z dziećmi.",
                    "en" => "Participating in courses, training, and workshops that expand knowledge in pedagogy and child-focused methods."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 14678,
                "name" => json_encode([
                    "pl" => "Aktualizowanie wiedzy na temat nowoczesnych metod nauczania i podejść edukacyjnych.",
                    "en" => "Updating knowledge on modern teaching methods and educational approaches."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 14679,
                "name" => json_encode([
                    "pl" => "Nauczanie dzieci o szacunku do środowiska naturalnego, dbaniu o otoczenie, recyklingu i ekologii.",
                    "en" => "Teaching children about respect for the natural environment, caring for surroundings, recycling, and ecology."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 14680,
                "name" => json_encode([
                    "pl" => "Wprowadzanie zagadnień związanych z odpowiedzialnością społeczną oraz zasadami współżycia w społeczeństwie.",
                    "en" => "Introducing topics related to social responsibility and principles of coexistence in society."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 14681,
                "name" => json_encode([
                    "pl" => "Dbanie o dobro, bezpieczeństwo i rozwój każdego ucznia.",
                    "en" => "Ensuring the well-being, safety, and development of each student."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 14682,
                "name" => json_encode([
                    "pl" => "Przestrzeganie zasad etyki zawodowej, rzetelność w pracy oraz szacunek wobec uczniów i ich rodzin.",
                    "en" => "Adhering to professional ethics, integrity in work, and respect towards students and their families."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 14683,
                "name" => json_encode([
                    "pl" => "Wspieranie dzieci w dążeniu do postępów, motywowanie do podejmowania wyzwań i pokonywania trudności.",
                    "en" => "Supporting children in their pursuit of progress, motivating them to take on challenges and overcome difficulties."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 14684,
                "name" => json_encode([
                    "pl" => "Zachęcanie do samodzielności i rozwijanie wiary we własne możliwości.",
                    "en" => "Encouraging independence and fostering self-belief."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 14685,
                "name" => json_encode([
                    "pl" => "Planowanie i realizacja wyjść edukacyjnych, wycieczek oraz innych aktywności, które wzbogacają edukację i poszerzają horyzonty dzieci.",
                    "en" => "Planning and conducting educational outings, trips, and other activities that enrich education and broaden children’s horizons."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 14686,
                "name" => json_encode([
                    "pl" => "Dbanie o bezpieczeństwo i organizację tych wydarzeń oraz ich zgodność z programem nauczania.",
                    "en" => "Ensuring safety and organization of events, in alignment with the curriculum."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $nauczyciele_szkol_ponadpodstawowych = [
            [
                "id" => 14687,
                "name" => json_encode([
                    "pl" => "Tworzenie planów zajęć zgodnych z podstawą programową oraz dostosowanie ich do poziomu zaawansowania i potrzeb klasy.",
                    "en" => "Creating lesson plans aligned with the core curriculum and adapting them to the class's skill level and needs."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 14688,
                "name" => json_encode([
                    "pl" => "Wybór materiałów i metod nauczania, które najlepiej rozwijają wiedzę i umiejętności uczniów w danej dziedzinie.",
                    "en" => "Selecting materials and teaching methods that best enhance students' knowledge and skills in a specific field."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 14689,
                "name" => json_encode([
                    "pl" => "Nauczanie wybranego przedmiotu, np. matematyki, języka polskiego, biologii, przedmiotów zawodowych.",
                    "en" => "Teaching a specific subject, such as mathematics, Polish language, biology, or vocational subjects."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 14690,
                "name" => json_encode([
                    "pl" => "Przygotowanie uczniów do egzaminów końcowych, takich jak matura, egzamin zawodowy lub inne egzaminy certyfikujące.",
                    "en" => "Preparing students for final exams, such as the matura, vocational exams, or other certification exams."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 14691,
                "name" => json_encode([
                    "pl" => "Organizowanie zajęć przygotowawczych do egzaminów zewnętrznych, takich jak matura, egzaminy zawodowe.",
                    "en" => "Organizing preparatory classes for external exams, such as the matura and vocational exams."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 14692,
                "name" => json_encode([
                    "pl" => "Przekazywanie strategii egzaminacyjnych, rozwiązywanie przykładowych testów oraz monitorowanie postępów uczniów.",
                    "en" => "Teaching exam strategies, solving sample tests, and monitoring student progress."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 14693,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie sprawdzianów, testów, prac domowych oraz projektów, które oceniają postępy uczniów i ich zrozumienie materiału.",
                    "en" => "Conducting quizzes, tests, homework, and projects to assess students' progress and understanding of the material."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 14694,
                "name" => json_encode([
                    "pl" => "Regularne informowanie uczniów i ich rodziców o wynikach, osiągnięciach i ewentualnych trudnościach.",
                    "en" => "Regularly informing students and their parents about results, achievements, and potential challenges."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 14695,
                "name" => json_encode([
                    "pl" => "Dostosowanie metod nauczania do potrzeb i możliwości uczniów, w tym wsparcie uczniów z trudnościami w nauce lub uczniów szczególnie uzdolnionych.",
                    "en" => "Adapting teaching methods to the needs and abilities of students, including support for those with learning difficulties or exceptional talent."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 14696,
                "name" => json_encode([
                    "pl" => "Tworzenie indywidualnych planów nauki dla uczniów wymagających dodatkowej pomocy.",
                    "en" => "Creating individual learning plans for students who need additional assistance."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 14697,
                "name" => json_encode([
                    "pl" => "Wprowadzanie zagadnień, które rozwijają umiejętność krytycznego myślenia, analizy i interpretacji informacji.",
                    "en" => "Introducing topics that develop critical thinking, analysis, and information interpretation skills."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 14698,
                "name" => json_encode([
                    "pl" => "Zachęcanie uczniów do podejmowania samodzielnych refleksji i tworzenia własnych wniosków na podstawie zdobytej wiedzy.",
                    "en" => "Encouraging students to engage in independent reflection and draw conclusions based on acquired knowledge."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 14699,
                "name" => json_encode([
                    "pl" => "Opieka nad klasą jako wychowawca, organizowanie spotkań wychowawczych oraz indywidualna praca z uczniami w zakresie ich rozwoju społecznego i emocjonalnego.",
                    "en" => "Serving as a homeroom teacher, organizing class meetings, and working individually with students on social and emotional development."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 14700,
                "name" => json_encode([
                    "pl" => "Rozwiązywanie problemów wychowawczych, wspieranie uczniów w budowaniu pozytywnych relacji z rówieśnikami i nauczycielami.",
                    "en" => "Resolving behavioral issues and supporting students in building positive relationships with peers and teachers."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 14701,
                "name" => json_encode([
                    "pl" => "Regularne informowanie rodziców o postępach i zachowaniu uczniów oraz omawianie ewentualnych trudności i problemów.",
                    "en" => "Regularly updating parents on students' progress and behavior and discussing any challenges."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 14702,
                "name" => json_encode([
                    "pl" => "Organizowanie zebrań z rodzicami, konsultacji indywidualnych oraz współpraca w celu wspierania uczniów w nauce i wychowaniu.",
                    "en" => "Organizing parent meetings, individual consultations, and collaborating to support students in learning and development."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 14703,
                "name" => json_encode([
                    "pl" => "Wspieranie uczniów w rozwijaniu umiejętności komunikacyjnych, pracy w grupie oraz radzenia sobie ze stresem i emocjami.",
                    "en" => "Supporting students in developing communication skills, teamwork, and coping with stress and emotions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 14704,
                "name" => json_encode([
                    "pl" => "Uczenie odpowiedzialności, samodyscypliny oraz umiejętności zarządzania czasem.",
                    "en" => "Teaching responsibility, self-discipline, and time management skills."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 14705,
                "name" => json_encode([
                    "pl" => "Przekazywanie wartości społecznych, etycznych i obywatelskich oraz rozwijanie świadomości na temat funkcjonowania społeczeństwa.",
                    "en" => "Imparting social, ethical, and civic values and raising awareness of societal functions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 14706,
                "name" => json_encode([
                    "pl" => "Zachęcanie do uczestnictwa w życiu społecznym i rozwijania odpowiedzialności obywatelskiej.",
                    "en" => "Encouraging participation in social life and fostering civic responsibility."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 14707,
                "name" => json_encode([
                    "pl" => "Prowadzenie dokumentacji ocen, obecności, wyników i postępów uczniów.",
                    "en" => "Keeping records of grades, attendance, results, and student progress."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 14708,
                "name" => json_encode([
                    "pl" => "Przygotowywanie raportów i sprawozdań dotyczących osiągnięć edukacyjnych i wychowawczych klasy.",
                    "en" => "Preparing reports on educational and behavioral achievements of the class."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 14709,
                "name" => json_encode([
                    "pl" => "Diagnoza uczniów z trudnościami edukacyjnymi lub specjalnymi potrzebami oraz współpraca z pedagogami i psychologami szkolnymi.",
                    "en" => "Diagnosing students with learning difficulties or special needs and working with school counselors and psychologists."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 14710,
                "name" => json_encode([
                    "pl" => "Stosowanie odpowiednich metod pracy, które wspierają indywidualne potrzeby uczniów.",
                    "en" => "Using appropriate methods to support individual student needs."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 14711,
                "name" => json_encode([
                    "pl" => "Organizowanie kół zainteresowań, zajęć wyrównawczych lub rozszerzonych zajęć, które rozwijają zainteresowania i umiejętności uczniów.",
                    "en" => "Organizing clubs, remedial classes, or extended classes that foster students' interests and skills."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 14712,
                "name" => json_encode([
                    "pl" => "Przygotowanie uczniów do konkursów przedmiotowych, olimpiad oraz innych form sprawdzania wiedzy.",
                    "en" => "Preparing students for academic competitions, Olympiads, and other knowledge-based assessments."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 14713,
                "name" => json_encode([
                    "pl" => "Współpraca z innymi nauczycielami, wychowawcami i specjalistami, aby wspólnie realizować cele edukacyjne i wychowawcze.",
                    "en" => "Collaborating with other teachers, educators, and specialists to jointly achieve educational and developmental goals."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 14714,
                "name" => json_encode([
                    "pl" => "Udział w radach pedagogicznych, spotkaniach zespołów przedmiotowych oraz spotkaniach wychowawczych.",
                    "en" => "Participating in faculty meetings, subject team meetings, and advisory meetings."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 14715,
                "name" => json_encode([
                    "pl" => "Planowanie i organizacja wyjść edukacyjnych, wycieczek i zajęć poza szkołą, które wzbogacają edukację uczniów.",
                    "en" => "Planning and organizing educational outings, field trips, and off-site activities that enrich student education."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 14716,
                "name" => json_encode([
                    "pl" => "Zapewnienie bezpieczeństwa oraz nadzoru nad uczniami podczas tych wydarzeń.",
                    "en" => "Ensuring safety and supervising students during these events."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 14717,
                "name" => json_encode([
                    "pl" => "Pomoc uczniom w planowaniu dalszej edukacji oraz wyborze kariery zawodowej, np. poprzez organizowanie spotkań z doradcami zawodowymi.",
                    "en" => "Assisting students in planning further education and career choices, e.g., by organizing meetings with career advisors."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 14718,
                "name" => json_encode([
                    "pl" => "Przekazywanie informacji o możliwościach dalszej edukacji, programach stypendialnych, zawodach i kierunkach studiów.",
                    "en" => "Providing information on further education options, scholarship programs, careers, and study fields."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 14719,
                "name" => json_encode([
                    "pl" => "Przekazywanie wiedzy na temat zdrowego stylu życia, zasad higieny, profilaktyki uzależnień oraz zdrowia psychicznego.",
                    "en" => "Teaching about healthy lifestyles, hygiene, addiction prevention, and mental health."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 14720,
                "name" => json_encode([
                    "pl" => "Organizowanie zajęć lub spotkań profilaktycznych, które promują zdrowie fizyczne i psychiczne.",
                    "en" => "Organizing classes or preventive meetings that promote physical and mental health."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 14721,
                "name" => json_encode([
                    "pl" => "Nauczanie technik efektywnego uczenia się, planowania pracy i organizacji czasu.",
                    "en" => "Teaching effective learning techniques, work planning, and time management."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 14722,
                "name" => json_encode([
                    "pl" => "Wspieranie uczniów w rozwijaniu umiejętności niezbędnych do samodzielnego zdobywania wiedzy.",
                    "en" => "Supporting students in developing skills essential for independent learning."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 14723,
                "name" => json_encode([
                    "pl" => "Zachowanie odpowiednich relacji z uczniami, przestrzeganie zasad równości, uczciwości i bezstronności.",
                    "en" => "Maintaining appropriate relationships with students and adhering to principles of equality, fairness, and impartiality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 14724,
                "name" => json_encode([
                    "pl" => "Dbanie o dobro uczniów, ich bezpieczeństwo i wsparcie w nauce i rozwoju.",
                    "en" => "Caring for students' well-being, safety, and support in learning and development."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 14725,
                "name" => json_encode([
                    "pl" => "Udział w szkoleniach, kursach, warsztatach, które poszerzają wiedzę i umiejętności nauczyciela.",
                    "en" => "Participating in training, courses, and workshops that broaden the teacher's knowledge and skills."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 14726,
                "name" => json_encode([
                    "pl" => "Śledzenie nowoczesnych metod dydaktycznych oraz zmian w podstawie programowej, aby na bieżąco dostosowywać metody pracy.",
                    "en" => "Keeping up with modern teaching methods and curriculum changes to continually adapt work methods."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 14727,
                "name" => json_encode([
                    "pl" => "Zachęcanie uczniów do podejmowania wyzwań, rozwijania pasji oraz samodzielności w nauce.",
                    "en" => "Encouraging students to take on challenges, develop passions, and foster independence in learning."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 14728,
                "name" => json_encode([
                    "pl" => "Wspieranie uczniów w dążeniu do osiągnięcia ich indywidualnych celów edukacyjnych i osobistych.",
                    "en" => "Supporting students in achieving their individual educational and personal goals."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 14729,
                "name" => json_encode([
                    "pl" => "Opracowywanie i przygotowanie materiałów pomocniczych, np. prezentacji, kart pracy, testów i ćwiczeń.",
                    "en" => "Creating and preparing supplementary materials, such as presentations, worksheets, tests, and exercises."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 14730,
                "name" => json_encode([
                    "pl" => "Korzystanie z nowoczesnych narzędzi i technologii, które ułatwiają przekazywanie wiedzy i aktywizują uczniów.",
                    "en" => "Using modern tools and technology to facilitate knowledge sharing and engage students."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 14731,
                "name" => json_encode([
                    "pl" => "Nauczanie bezpiecznego i świadomego korzystania z internetu oraz narzędzi cyfrowych.",
                    "en" => "Teaching safe and responsible use of the internet and digital tools."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 14732,
                "name" => json_encode([
                    "pl" => "Wprowadzanie technologii informacyjno-komunikacyjnych do zajęć, aby rozwijać umiejętności cyfrowe uczniów.",
                    "en" => "Incorporating ICT into lessons to develop students' digital skills."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 14733,
                "name" => json_encode([
                    "pl" => "Organizowanie spotkań z osobami z różnych dziedzin zawodowych, które mogą inspirować uczniów i rozwijać ich zainteresowania.",
                    "en" => "Organizing meetings with professionals from various fields to inspire students and foster their interests."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 14734,
                "name" => json_encode([
                    "pl" => "Współpraca z doradcami zawodowymi i przedstawicielami uczelni wyższych, aby wspierać uczniów w wyborze przyszłej ścieżki edukacyjnej.",
                    "en" => "Collaborating with career counselors and university representatives to support students in choosing their future educational paths."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $nauczyciel_przedmiotu_w_szkole_podstawowej = [
            [
                "id" => 14735,
                "name" => json_encode([
                    "pl" => "Przygotowanie planów zajęć zgodnych z podstawą programową, uwzględniających cele i zadania edukacyjne dla wybranego przedmiotu.",
                    "en" => "Preparing lesson plans aligned with the core curriculum, addressing educational objectives for the selected subject."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 14736,
                "name" => json_encode([
                    "pl" => "Dostosowanie programu do poziomu wiedzy i możliwości dzieci, z uwzględnieniem ich indywidualnych potrzeb.",
                    "en" => "Adapting the program to children's knowledge level and abilities, considering their individual needs."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 14737,
                "name" => json_encode([
                    "pl" => "Nauczanie konkretnych przedmiotów, takich jak język polski, matematyka, przyroda, historia, plastyka, muzyka czy informatyka.",
                    "en" => "Teaching specific subjects, such as Polish language, mathematics, nature studies, history, art, music, or computer science."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 14738,
                "name" => json_encode([
                    "pl" => "Przekazywanie wiedzy i rozwijanie umiejętności uczniów, stosując różnorodne metody dydaktyczne, aby zwiększyć efektywność nauki.",
                    "en" => "Delivering knowledge and developing students' skills using diverse teaching methods to enhance learning effectiveness."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 14739,
                "name" => json_encode([
                    "pl" => "Dostosowanie metod i materiałów edukacyjnych do indywidualnych potrzeb, możliwości i stylów uczenia się uczniów.",
                    "en" => "Adapting educational methods and materials to the individual needs, abilities, and learning styles of students."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 14740,
                "name" => json_encode([
                    "pl" => "Tworzenie dodatkowych planów nauki dla uczniów z trudnościami edukacyjnymi oraz wspieranie uczniów uzdolnionych w rozwijaniu ich talentów.",
                    "en" => "Creating additional learning plans for students with educational difficulties and supporting talented students in developing their skills."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 14741,
                "name" => json_encode([
                    "pl" => "Organizowanie ćwiczeń, zadań i testów, które przygotowują uczniów do oceniania, sprawdzianów oraz egzaminów końcowych.",
                    "en" => "Organizing exercises, assignments, and tests to prepare students for assessments, exams, and final evaluations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 14742,
                "name" => json_encode([
                    "pl" => "Pomoc uczniom w zdobywaniu umiejętności rozwiązywania testów oraz opracowanie strategii egzaminacyjnych.",
                    "en" => "Assisting students in developing test-taking skills and creating exam strategies."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 14743,
                "name" => json_encode([
                    "pl" => "Regularne ocenianie prac domowych, testów, prac klasowych i projektów, aby monitorować postępy uczniów.",
                    "en" => "Regularly assessing homework, tests, classwork, and projects to monitor student progress."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 14744,
                "name" => json_encode([
                    "pl" => "Prowadzenie dokumentacji ocen i przygotowywanie raportów o wynikach uczniów, co pozwala na bieżąco śledzić ich postępy.",
                    "en" => "Keeping grade records and preparing student performance reports to track progress in real time."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 14745,
                "name" => json_encode([
                    "pl" => "Kształtowanie umiejętności pracy zespołowej, współpracy oraz rozwiązywania konfliktów.",
                    "en" => "Fostering teamwork, cooperation, and conflict-resolution skills."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 14746,
                "name" => json_encode([
                    "pl" => "Uczenie uczniów zasad komunikacji i odpowiednich form wyrażania swoich opinii i emocji.",
                    "en" => "Teaching students communication principles and appropriate ways to express opinions and emotions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 14747,
                "name" => json_encode([
                    "pl" => "Wprowadzanie dodatkowych treści i materiałów, które mogą zainteresować uczniów oraz rozwijać ich pasje i ciekawość poznawczą.",
                    "en" => "Introducing additional content and materials that may engage students and foster their passions and curiosity."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 14748,
                "name" => json_encode([
                    "pl" => "Organizowanie kół zainteresowań, projektów tematycznych i zajęć pozalekcyjnych, które wspierają rozwój talentów.",
                    "en" => "Organizing clubs, themed projects, and extracurricular activities that support talent development."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 14749,
                "name" => json_encode([
                    "pl" => "Nauczanie dzieci zasad zdrowego trybu życia, higieny, dbania o siebie i innych.",
                    "en" => "Teaching children healthy lifestyle habits, hygiene, and how to care for themselves and others."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 14750,
                "name" => json_encode([
                    "pl" => "Promowanie odpowiedzialności ekologicznej, w tym segregacji śmieci, oszczędzania zasobów i dbałości o środowisko naturalne.",
                    "en" => "Promoting ecological responsibility, including waste separation, resource conservation, and environmental care."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 14751,
                "name" => json_encode([
                    "pl" => "Wspieranie uczniów w radzeniu sobie z emocjami, rozwiązywaniu problemów oraz w budowaniu pewności siebie.",
                    "en" => "Supporting students in managing emotions, solving problems, and building self-confidence."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 14752,
                "name" => json_encode([
                    "pl" => "Współpraca z psychologiem i pedagogiem szkolnym w przypadku dzieci potrzebujących wsparcia emocjonalnego.",
                    "en" => "Collaborating with the school psychologist and pedagogue for children needing emotional support."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 14753,
                "name" => json_encode([
                    "pl" => "Prowadzenie dzienników, ewidencji ocen, frekwencji oraz innych wymaganych dokumentów dotyczących przebiegu zajęć.",
                    "en" => "Keeping attendance, grade records, and other required documentation related to the classes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 14754,
                "name" => json_encode([
                    "pl" => "Sporządzanie raportów i analiz, które odzwierciedlają postępy uczniów oraz efekty nauczania.",
                    "en" => "Preparing reports and analyses reflecting student progress and teaching outcomes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 14755,
                "name" => json_encode([
                    "pl" => "Informowanie rodziców o postępach, osiągnięciach, ewentualnych trudnościach uczniów oraz udzielanie wskazówek wspierających edukację dzieci w domu.",
                    "en" => "Updating parents on students' progress, achievements, and challenges and providing guidance to support home education."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 14756,
                "name" => json_encode([
                    "pl" => "Organizowanie zebrań, spotkań indywidualnych oraz konsultacji dla rodziców.",
                    "en" => "Organizing parent meetings, individual consultations, and discussions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 14757,
                "name" => json_encode([
                    "pl" => "Wprowadzanie aktywności, które umożliwiają uczniom zdobywanie praktycznych umiejętności, np. eksperymentów, projektów artystycznych, pracy zespołowej.",
                    "en" => "Introducing activities that enable students to gain practical skills, such as experiments, art projects, and teamwork."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 14758,
                "name" => json_encode([
                    "pl" => "Zachęcanie do kreatywnego podejścia oraz pracy zespołowej, które rozwijają umiejętności organizacyjne i interpersonalne.",
                    "en" => "Encouraging creative approaches and teamwork, which develop organizational and interpersonal skills."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 14759,
                "name" => json_encode([
                    "pl" => "Zapewnienie atmosfery, w której uczniowie czują się bezpieczni, akceptowani i zmotywowani do nauki.",
                    "en" => "Creating an environment where students feel safe, accepted, and motivated to learn."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 14760,
                "name" => json_encode([
                    "pl" => "Rozwiązywanie konfliktów i problemów między uczniami oraz dbanie o poszanowanie zasad i wzajemny szacunek.",
                    "en" => "Resolving conflicts and issues among students and ensuring respect for rules and mutual respect."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 14761,
                "name" => json_encode([
                    "pl" => "Organizowanie zajęć plastycznych, muzycznych, teatralnych, które wspierają twórcze myślenie i wyobraźnię dzieci.",
                    "en" => "Organizing art, music, and theater activities that foster creative thinking and imagination."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 14762,
                "name" => json_encode([
                    "pl" => "Tworzenie projektów i prac zespołowych, które rozwijają zdolności manualne i artystyczne uczniów.",
                    "en" => "Creating projects and group work that develop students' manual and artistic skills."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 14763,
                "name" => json_encode([
                    "pl" => "Nauczanie bezpiecznego korzystania z internetu oraz rozwijanie umiejętności cyfrowych, takich jak obsługa komputera, korzystanie z aplikacji edukacyjnych.",
                    "en" => "Teaching safe internet use and developing digital skills, such as computer use and educational apps."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 14764,
                "name" => json_encode([
                    "pl" => "Wykorzystanie nowoczesnych technologii podczas zajęć, aby zwiększyć zaangażowanie uczniów i wzbogacić proces nauczania.",
                    "en" => "Using modern technology in class to increase student engagement and enrich the learning process."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 14765,
                "name" => json_encode([
                    "pl" => "Organizowanie wyjść do muzeów, teatrów, parków, instytucji edukacyjnych, które wzbogacają edukację uczniów.",
                    "en" => "Organizing visits to museums, theaters, parks, and educational institutions to enrich students' education."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 14766,
                "name" => json_encode([
                    "pl" => "Zapewnienie bezpieczeństwa uczniów podczas wycieczek oraz dbanie o organizację tych wydarzeń.",
                    "en" => "Ensuring student safety during trips and managing the organization of these events."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 14767,
                "name" => json_encode([
                    "pl" => "Zachęcanie uczniów do podejmowania wyzwań, rozwijania pasji, samodzielności i zaangażowania w naukę.",
                    "en" => "Encouraging students to take on challenges, pursue passions, and engage independently in learning."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 14768,
                "name" => json_encode([
                    "pl" => "Stosowanie różnych technik motywacyjnych, które wspierają pozytywny stosunek do nauki.",
                    "en" => "Applying various motivational techniques to foster a positive attitude towards learning."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 14769,
                "name" => json_encode([
                    "pl" => "Wprowadzanie uczniów w zasady samodzielnej pracy i odpowiedzialności za własne działania.",
                    "en" => "Introducing students to the principles of independent work and responsibility for their actions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 14770,
                "name" => json_encode([
                    "pl" => "Nauczanie zarządzania czasem oraz rozwijanie umiejętności organizacyjnych.",
                    "en" => "Teaching time management and developing organizational skills."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 14771,
                "name" => json_encode([
                    "pl" => "Nauczanie uczniów analizy i interpretacji informacji, rozwiązywania problemów oraz wyciągania wniosków.",
                    "en" => "Teaching students to analyze and interpret information, solve problems, and draw conclusions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 14772,
                "name" => json_encode([
                    "pl" => "Wprowadzanie ćwiczeń, które rozwijają umiejętności logicznego myślenia, analizy i syntezy informacji.",
                    "en" => "Introducing exercises that develop logical thinking, analysis, and synthesis of information."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 14773,
                "name" => json_encode([
                    "pl" => "Dbanie o dobro uczniów, ich rozwój i bezpieczeństwo, przestrzeganie zasad uczciwości i równości.",
                    "en" => "Ensuring student well-being, development, and safety, adhering to principles of fairness and equality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 14774,
                "name" => json_encode([
                    "pl" => "Budowanie zaufania i szacunku w relacji z uczniami oraz ich rodzicami.",
                    "en" => "Building trust and respect in relationships with students and their parents."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 14775,
                "name" => json_encode([
                    "pl" => "Udział w kursach, szkoleniach i warsztatach, aby poszerzać wiedzę na temat pedagogiki i nowych metod nauczania.",
                    "en" => "Participating in courses, training, and workshops to broaden knowledge on pedagogy and new teaching methods."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 14776,
                "name" => json_encode([
                    "pl" => "Śledzenie aktualnych badań oraz trendów w edukacji, aby dostosowywać metody pracy do zmieniających się potrzeb uczniów.",
                    "en" => "Keeping up with current research and trends in education to adapt teaching methods to students' changing needs."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 14777,
                "name" => json_encode([
                    "pl" => "Uczenie szacunku do innych, odpowiedzialności społecznej, dbania o środowisko i zaangażowania w życie społeczne.",
                    "en" => "Teaching respect for others, social responsibility, environmental care, and social engagement."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 14778,
                "name" => json_encode([
                    "pl" => "Rozwijanie postaw prospołecznych oraz świadomości obywatelskiej wśród uczniów.",
                    "en" => "Developing pro-social attitudes and civic awareness among students."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 14779,
                "name" => json_encode([
                    "pl" => "Pomoc uczniom w odkrywaniu ich talentów, predyspozycji i zainteresowań.",
                    "en" => "Helping students discover their talents, aptitudes, and interests."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 14780,
                "name" => json_encode([
                    "pl" => "Doradztwo dotyczące dalszego kształcenia oraz rozwijanie umiejętności przydatnych w życiu i dalszej edukacji.",
                    "en" => "Advising on further education and developing skills useful in life and future education."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 14781,
                "name" => json_encode([
                    "pl" => "Wspieranie uczniów w efektywnym uczeniu się, organizacji pracy i planowaniu.",
                    "en" => "Supporting students in effective learning, work organization, and planning."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 14782,
                "name" => json_encode([
                    "pl" => "Uczenie technik uczenia się i samodzielności, które pomogą uczniom w osiąganiu lepszych wyników.",
                    "en" => "Teaching learning techniques and independence to help students achieve better results."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $lektorzy_jezykow_obcych = [
            [
                "id" => 14783,
                "name" => json_encode([
                    "pl" => "Tworzenie programów zgodnych z poziomem znajomości języka i celami nauczania, uwzględniającymi potrzeby uczniów.",
                    "en" => "Creating programs aligned with language proficiency levels and teaching objectives, tailored to students' needs."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 14784,
                "name" => json_encode([
                    "pl" => "Przygotowanie materiałów dydaktycznych i planów lekcji, które rozwijają umiejętności mówienia, słuchania, pisania i czytania.",
                    "en" => "Preparing educational materials and lesson plans that develop speaking, listening, writing, and reading skills."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 14785,
                "name" => json_encode([
                    "pl" => "Nauczanie języka obcego na różnych poziomach zaawansowania, dostosowując metody pracy do wieku i umiejętności uczniów.",
                    "en" => "Teaching foreign languages at various proficiency levels, adapting methods to students' ages and skill levels."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 14786,
                "name" => json_encode([
                    "pl" => "Wprowadzanie nowych zagadnień językowych, takich jak gramatyka, słownictwo, idiomy, konstrukcje językowe i wymowa.",
                    "en" => "Introducing new language topics, including grammar, vocabulary, idioms, language structures, and pronunciation."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 14787,
                "name" => json_encode([
                    "pl" => "Dostosowanie metod i materiałów do indywidualnych potrzeb, stylu uczenia się i celów uczniów, np. do nauki języka ogólnego, biznesowego lub przygotowania do egzaminu.",
                    "en" => "Adapting methods and materials to individual needs, learning styles, and goals, such as general, business, or exam preparation."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 14788,
                "name" => json_encode([
                    "pl" => "Tworzenie indywidualnych planów nauki dla uczniów wymagających dodatkowej pomocy lub szczególnego wsparcia.",
                    "en" => "Creating individual learning plans for students needing additional assistance or specific support."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 14789,
                "name" => json_encode([
                    "pl" => "Wprowadzanie ćwiczeń praktycznych, które rozwijają umiejętność płynnej i swobodnej komunikacji w języku obcym.",
                    "en" => "Introducing practical exercises that develop fluent and natural communication skills in the foreign language."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 14790,
                "name" => json_encode([
                    "pl" => "Organizowanie ćwiczeń konwersacyjnych, które pomagają uczniom przezwyciężać bariery językowe i rozwijać umiejętność interakcji.",
                    "en" => "Organizing conversational exercises that help students overcome language barriers and improve interaction skills."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 14791,
                "name" => json_encode([
                    "pl" => "Nauczanie zasad gramatyki oraz ich zastosowania w mowie i piśmie, aby uczniowie zdobywali biegłość językową.",
                    "en" => "Teaching grammar rules and their application in speaking and writing for language proficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 14792,
                "name" => json_encode([
                    "pl" => "Organizowanie ćwiczeń gramatycznych, które pomagają utrwalać strukturę języka i poprawność wypowiedzi.",
                    "en" => "Organizing grammar exercises that reinforce language structure and speech accuracy."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 14793,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie ćwiczeń słuchowych, takich jak odsłuchiwanie nagrań, dialogów, piosenek czy podcastów w języku obcym.",
                    "en" => "Conducting listening exercises, such as listening to recordings, dialogues, songs, or podcasts in the foreign language."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 14794,
                "name" => json_encode([
                    "pl" => "Uczenie rozpoznawania różnych akcentów, tempa mowy i intonacji, aby uczniowie lepiej rozumieli język mówiony.",
                    "en" => "Teaching students to recognize different accents, speech rates, and intonation to improve spoken language comprehension."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 14795,
                "name" => json_encode([
                    "pl" => "Prowadzenie ćwiczeń z zakresu pisania, które obejmują różne formy wypowiedzi pisemnej, np. listy, e-maile, eseje, opisy.",
                    "en" => "Conducting writing exercises covering various written forms, such as letters, emails, essays, and descriptions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 14796,
                "name" => json_encode([
                    "pl" => "Korekta prac pisemnych, dbanie o poprawność gramatyczną, stylistyczną i zgodność z normami języka.",
                    "en" => "Correcting written work, ensuring grammatical, stylistic accuracy, and language standards."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 14797,
                "name" => json_encode([
                    "pl" => "Organizowanie zajęć przygotowujących do egzaminów certyfikujących, takich jak TOEFL, IELTS, FCE, DELF, Goethe-Zertifikat.",
                    "en" => "Organizing preparatory classes for certification exams such as TOEFL, IELTS, FCE, DELF, Goethe-Zertifikat."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 14798,
                "name" => json_encode([
                    "pl" => "Przekazywanie strategii egzaminacyjnych, omawianie typowych zadań egzaminacyjnych i przeprowadzanie próbnych testów.",
                    "en" => "Teaching exam strategies, discussing typical tasks, and conducting mock tests."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 14799,
                "name" => json_encode([
                    "pl" => "Regularne ocenianie postępów uczniów poprzez testy, sprawdziany, prace domowe i ćwiczenia ustne.",
                    "en" => "Regularly assessing student progress through tests, quizzes, homework, and oral exercises."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 14800,
                "name" => json_encode([
                    "pl" => "Udzielanie informacji zwrotnej, która pomaga uczniom zrozumieć ich mocne strony oraz obszary wymagające poprawy.",
                    "en" => "Providing feedback that helps students understand their strengths and areas needing improvement."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 14801,
                "name" => json_encode([
                    "pl" => "Nauczanie prawidłowej wymowy, akcentowania, rytmu i intonacji, które są kluczowe w swobodnej komunikacji.",
                    "en" => "Teaching correct pronunciation, accent, rhythm, and intonation, essential for fluent communication."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 14802,
                "name" => json_encode([
                    "pl" => "Korygowanie błędów fonetycznych oraz wprowadzanie ćwiczeń fonetycznych, które pomagają w naturalnym brzmieniu języka.",
                    "en" => "Correcting phonetic errors and introducing phonetic exercises to aid natural language sound."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 14803,
                "name" => json_encode([
                    "pl" => "Zapewnienie atmosfery, w której uczniowie czują się komfortowo i chętnie angażują się w aktywności językowe.",
                    "en" => "Creating a comfortable atmosphere where students eagerly engage in language activities."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 14804,
                "name" => json_encode([
                    "pl" => "Zachęcanie do aktywnego uczestnictwa oraz wspieranie uczniów w pokonywaniu obaw związanych z nauką języka.",
                    "en" => "Encouraging active participation and supporting students in overcoming language learning anxieties."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 14805,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie ćwiczeń, które rozwijają umiejętność rozumienia tekstu pisanego, analizowania treści i rozpoznawania słów kluczowych.",
                    "en" => "Conducting exercises to develop reading comprehension, content analysis, and keyword recognition."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 14806,
                "name" => json_encode([
                    "pl" => "Wprowadzanie różnorodnych materiałów do czytania, takich jak artykuły, opowiadania, dialogi, które poszerzają zasób słownictwa i poprawiają zrozumienie.",
                    "en" => "Introducing diverse reading materials, such as articles, stories, and dialogues, to expand vocabulary and comprehension."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 14807,
                "name" => json_encode([
                    "pl" => "Opracowanie i dobór materiałów, takich jak karty pracy, ćwiczenia, testy, które wspierają naukę i utrwalają materiał.",
                    "en" => "Preparing and selecting materials like worksheets, exercises, and tests to support learning and reinforce material."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 14808,
                "name" => json_encode([
                    "pl" => "Korzystanie z multimediów, gier językowych, filmów oraz aplikacji, które uatrakcyjniają proces nauczania.",
                    "en" => "Using multimedia, language games, films, and apps to enhance the teaching process."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 14809,
                "name" => json_encode([
                    "pl" => "Zachęcanie uczniów do regularnej nauki i podejmowania wyzwań językowych, które rozwijają ich umiejętności.",
                    "en" => "Encouraging students to study regularly and take on language challenges to develop their skills."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 14810,
                "name" => json_encode([
                    "pl" => "Używanie technik motywacyjnych, takich jak pochwały, informacja zwrotna, nagradzanie postępów, aby uczniowie czuli satysfakcję z nauki.",
                    "en" => "Using motivational techniques like praise, feedback, and progress rewards to foster learning satisfaction."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 14811,
                "name" => json_encode([
                    "pl" => "Regularne informowanie rodziców o postępach dzieci oraz omawianie ewentualnych trudności i potrzeb w nauce języka.",
                    "en" => "Regularly updating parents on children's progress and discussing any language learning difficulties and needs."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 14812,
                "name" => json_encode([
                    "pl" => "Udzielanie wskazówek, jak rodzice mogą wspierać naukę języka obcego w domu.",
                    "en" => "Providing guidance on how parents can support foreign language learning at home."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 14813,
                "name" => json_encode([
                    "pl" => "Organizowanie zajęć konwersacyjnych, które umożliwiają praktyczne wykorzystanie języka i rozwijają płynność mowy.",
                    "en" => "Organizing conversation classes for practical language use and fluency development."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 14814,
                "name" => json_encode([
                    "pl" => "Wprowadzanie sytuacji symulacyjnych, które pomagają uczniom przygotować się do używania języka w realnych kontekstach.",
                    "en" => "Introducing simulated situations to prepare students for real-life language use."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 14815,
                "name" => json_encode([
                    "pl" => "Prowadzenie ewidencji postępów, ocen, obecności oraz innych wymaganych dokumentów dotyczących procesu nauczania.",
                    "en" => "Keeping records of progress, grades, attendance, and other required documents related to the teaching process."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 14816,
                "name" => json_encode([
                    "pl" => "Dokumentowanie rezultatów nauczania i przygotowywanie raportów dotyczących postępów uczniów.",
                    "en" => "Documenting teaching results and preparing reports on student progress."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 14817,
                "name" => json_encode([
                    "pl" => "Przekazywanie informacji na temat kultury, tradycji, zwyczajów i realiów życia w krajach, w których mówi się danym językiem.",
                    "en" => "Sharing information about the culture, traditions, customs, and life realities in the countries where the language is spoken."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 14818,
                "name" => json_encode([
                    "pl" => "Organizowanie zajęć tematycznych, które poszerzają wiedzę uczniów o kulturze i historii krajów języka docelowego.",
                    "en" => "Organizing themed classes that expand students' knowledge of the culture and history of the target language countries."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $nauczyciel_przedmiotow_zawodowych_artystycznych = [
            [
                "id" => 14819,
                "name" => json_encode([
                    "pl" => "Tworzenie programów zgodnych z podstawą programową oraz dostosowanie ich do poziomu zaawansowania i indywidualnych potrzeb uczniów.",
                    "en" => "Creating curriculum-compliant programs, tailored to students' skill levels and individual needs."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 14820,
                "name" => json_encode([
                    "pl" => "Uwzględnianie specyfiki i wymagań poszczególnych przedmiotów artystycznych oraz standardów branżowych.",
                    "en" => "Considering the specifics and requirements of each artistic subject and industry standards."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 14821,
                "name" => json_encode([
                    "pl" => "Nauczanie podstaw i technik danego przedmiotu artystycznego, np. rysunku, malarstwa, rzeźby, fotografii, projektowania, muzyki, tańca, aktorstwa.",
                    "en" => "Teaching the basics and techniques of an artistic subject, such as drawing, painting, sculpture, photography, design, music, dance, or acting."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 14822,
                "name" => json_encode([
                    "pl" => "Organizowanie zajęć, które umożliwiają uczniom zdobycie umiejętności praktycznych oraz rozwijają ich kreatywność i wrażliwość artystyczną.",
                    "en" => "Organizing classes that allow students to gain practical skills and develop creativity and artistic sensitivity."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 14823,
                "name" => json_encode([
                    "pl" => "Nauczanie technik i narzędzi charakterystycznych dla danej dziedziny sztuki, np. różnych rodzajów farb, narzędzi rzeźbiarskich, instrumentów muzycznych.",
                    "en" => "Teaching techniques and tools specific to a particular art field, such as different types of paints, sculpting tools, musical instruments."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 14824,
                "name" => json_encode([
                    "pl" => "Przekazywanie wiedzy na temat sposobów pracy z materiałami oraz technik wyrazu artystycznego.",
                    "en" => "Sharing knowledge on working with materials and artistic expression techniques."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 14825,
                "name" => json_encode([
                    "pl" => "Zachęcanie uczniów do poszukiwania własnego stylu i formy wyrazu, wspieranie ich w rozwijaniu indywidualnych cech twórczych.",
                    "en" => "Encouraging students to find their own style and form of expression, supporting their creative development."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 14826,
                "name" => json_encode([
                    "pl" => "Dbanie o rozwój osobowości artystycznej uczniów, promowanie oryginalności i odwagi twórczej.",
                    "en" => "Fostering students' artistic development, promoting originality and creative courage."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 14827,
                "name" => json_encode([
                    "pl" => "Organizowanie zajęć przygotowujących do egzaminów końcowych, przeglądów lub konkursów, które sprawdzają umiejętności techniczne i artystyczne.",
                    "en" => "Organizing preparatory classes for final exams, reviews, or competitions that assess technical and artistic skills."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 14828,
                "name" => json_encode([
                    "pl" => "Pomoc w przygotowaniu prac, projektów, portfolio czy repertuaru wymaganego na egzaminach zewnętrznych.",
                    "en" => "Assisting in preparing work, projects, portfolios, or repertoires required for external exams."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 14829,
                "name" => json_encode([
                    "pl" => "Regularne ocenianie postępów, ocena prac uczniów pod kątem ich jakości artystycznej, techniki wykonania oraz rozwoju indywidualnego stylu.",
                    "en" => "Regularly assessing progress, evaluating student work for artistic quality, technique, and personal style development."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 14830,
                "name" => json_encode([
                    "pl" => "Udzielanie informacji zwrotnej, która motywuje uczniów do dalszej pracy i rozwija ich umiejętności.",
                    "en" => "Providing feedback that motivates students to continue their work and develop their skills."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 14831,
                "name" => json_encode([
                    "pl" => "Organizowanie ćwiczeń, które rozwijają kreatywność, wyobraźnię i zdolności improwizacyjne, np. zadania koncepcyjne, projekty tematyczne.",
                    "en" => "Organizing exercises that foster creativity, imagination, and improvisational skills, such as conceptual tasks and thematic projects."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 14832,
                "name" => json_encode([
                    "pl" => "Stosowanie różnych technik, które wspierają swobodę wyrażania siebie oraz indywidualny sposób postrzegania świata.",
                    "en" => "Using techniques that support self-expression and individual perspectives."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 14833,
                "name" => json_encode([
                    "pl" => "Przygotowanie uczniów do wystaw, pokazów, koncertów, przedstawień, które prezentują ich umiejętności i dorobek artystyczny.",
                    "en" => "Preparing students for exhibitions, shows, concerts, and performances that showcase their skills and artistic achievements."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 14834,
                "name" => json_encode([
                    "pl" => "Koordynacja przygotowań do wydarzeń artystycznych, takich jak aranżacja prac, przygotowanie scenografii, organizacja przestrzeni wystawowej.",
                    "en" => "Coordinating preparations for artistic events, including work arrangement, set design, and exhibit space organization."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 14835,
                "name" => json_encode([
                    "pl" => "Pomoc w przygotowywaniu portfolio lub dokumentacji dorobku artystycznego, które są niezbędne podczas aplikacji do uczelni artystycznych lub na konkursy.",
                    "en" => "Assisting with portfolio preparation and documentation of artistic achievements for art school applications or competitions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 14836,
                "name" => json_encode([
                    "pl" => "Doradztwo w zakresie prezentacji prac i selekcji najlepszych dzieł, które oddają umiejętności i styl ucznia.",
                    "en" => "Advising on work presentation and selecting the best pieces to showcase the student's skills and style."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 14837,
                "name" => json_encode([
                    "pl" => "Nauczanie podstaw historii i teorii sztuki, literatury, muzyki czy teatru, aby uczniowie zrozumieli kontekst kulturowy i artystyczny swojej dziedziny.",
                    "en" => "Teaching art history and theory, literature, music, and theater fundamentals to help students understand their field's cultural context."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 14838,
                "name" => json_encode([
                    "pl" => "Analiza stylów, epok, twórców i technik, co pozwala uczniom na poszerzenie wiedzy i inspirację do własnych działań twórczych.",
                    "en" => "Analyzing styles, periods, artists, and techniques to broaden students' knowledge and inspire creative work."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 14839,
                "name" => json_encode([
                    "pl" => "Wspieranie uczniów w budowaniu pewności siebie, rozwijaniu zdolności radzenia sobie ze stresem oraz wyrażania emocji poprzez sztukę.",
                    "en" => "Supporting students in building self-confidence, managing stress, and expressing emotions through art."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 14840,
                "name" => json_encode([
                    "pl" => "Zachęcanie do refleksji nad własną twórczością oraz udzielanie wsparcia emocjonalnego w sytuacjach trudności twórczych.",
                    "en" => "Encouraging reflection on personal work and providing emotional support during creative challenges."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 14841,
                "name" => json_encode([
                    "pl" => "Nauczanie umiejętności związanych z użyciem nowoczesnych technologii, np. programów graficznych, montażowych, oświetleniowych, nagraniowych.",
                    "en" => "Teaching skills related to modern technology, such as graphic design, editing, lighting, and recording software."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 14842,
                "name" => json_encode([
                    "pl" => "Przekazywanie wiedzy na temat nowych narzędzi i materiałów wykorzystywanych w danej dziedzinie artystycznej.",
                    "en" => "Sharing knowledge about new tools and materials used in a specific artistic field."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 14843,
                "name" => json_encode([
                    "pl" => "Informowanie rodziców o postępach, osiągnięciach i problemach uczniów oraz udzielanie wskazówek dotyczących ich rozwoju artystycznego.",
                    "en" => "Informing parents about students' progress, achievements, and issues, and providing guidance on artistic development."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 14844,
                "name" => json_encode([
                    "pl" => "Organizowanie spotkań z rodzicami, podczas których omawiane są talenty, pasje oraz możliwości dalszego kształcenia uczniów.",
                    "en" => "Organizing parent meetings to discuss talents, passions, and further education opportunities for students."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 14845,
                "name" => json_encode([
                    "pl" => "Organizowanie wyjść do galerii, muzeów, teatrów, koncertów, które poszerzają wiedzę uczniów o sztuce i kulturze.",
                    "en" => "Organizing trips to galleries, museums, theaters, and concerts to broaden students' knowledge of art and culture."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 14846,
                "name" => json_encode([
                    "pl" => "Dbanie o inspirację i edukację uczniów poprzez kontakt z dziełami sztuki oraz uczestnictwo w wydarzeniach artystycznych.",
                    "en" => "Ensuring student inspiration and education through exposure to art and participation in artistic events."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 14847,
                "name" => json_encode([
                    "pl" => "Zachęcanie do samodzielnej pracy twórczej i rozwijania zainteresowań artystycznych także poza szkołą.",
                    "en" => "Encouraging independent creative work and the development of artistic interests beyond school."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 14848,
                "name" => json_encode([
                    "pl" => "Używanie technik motywacyjnych, takich jak pochwały, wyróżnienia, prezentowanie osiągnięć uczniów, aby zwiększać ich zaangażowanie i pasję do sztuki.",
                    "en" => "Using motivational techniques, such as praise, recognition, and showcasing student achievements, to increase engagement and passion for art."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 14849,
                "name" => json_encode([
                    "pl" => "Przekazywanie praktycznych umiejętności i wiedzy związanej z pracą w zawodach artystycznych, takich jak tworzenie portfolio, autopromocja, networking.",
                    "en" => "Teaching practical skills and knowledge related to working in artistic professions, such as portfolio creation, self-promotion, and networking."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 14850,
                "name" => json_encode([
                    "pl" => "Edukacja w zakresie wymagań rynku pracy i oczekiwań stawianych artystom, projektantom, muzykom, aktorom czy filmowcom.",
                    "en" => "Providing education on labor market requirements and expectations for artists, designers, musicians, actors, and filmmakers."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 14851,
                "name" => json_encode([
                    "pl" => "Dbanie o respektowanie zasad etyki zawodowej i promowanie wartości takich jak oryginalność, szacunek do praw autorskich i odpowiedzialność za swoją twórczość.",
                    "en" => "Promoting professional ethics and values such as originality, respect for copyright, and responsibility for one's work."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 14852,
                "name" => json_encode([
                    "pl" => "Przekazywanie wiedzy na temat ochrony praw autorskich, etyki w sztuce oraz znaczenia integralności artystycznej.",
                    "en" => "Teaching about copyright protection, ethics in art, and the importance of artistic integrity."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 14853,
                "name" => json_encode([
                    "pl" => "Udział w kursach, szkoleniach, warsztatach i konferencjach artystycznych, które poszerzają wiedzę o nowoczesnych technikach i trendach.",
                    "en" => "Participating in courses, workshops, and art conferences to expand knowledge of modern techniques and trends."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 14854,
                "name" => json_encode([
                    "pl" => "Śledzenie aktualnych nurtów i osiągnięć artystycznych oraz wdrażanie nowych technik do pracy z uczniami.",
                    "en" => "Following current art trends and achievements, and incorporating new techniques into student work."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 14855,
                "name" => json_encode([
                    "pl" => "Pomoc uczniom w przygotowaniach do udziału w konkursach i przeglądach, np. przez doradztwo artystyczne, wsparcie techniczne.",
                    "en" => "Assisting students in preparing for competitions and reviews through artistic advice and technical support."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 14856,
                "name" => json_encode([
                    "pl" => "Motywowanie uczniów do udziału w konkursach, które rozwijają ich umiejętności i promują ich twórczość.",
                    "en" => "Encouraging students to participate in competitions that enhance their skills and promote their work."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 14857,
                "name" => json_encode([
                    "pl" => "Nawiązywanie kontaktów z artystami, galeriami, instytucjami kultury i organizacjami, aby umożliwić uczniom kontakt z praktykami branżowymi.",
                    "en" => "Establishing contacts with artists, galleries, cultural institutions, and organizations to provide students with industry exposure."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 14858,
                "name" => json_encode([
                    "pl" => "Organizowanie warsztatów, pokazów, wykładów z udziałem zaproszonych gości, którzy inspirują i edukują uczniów.",
                    "en" => "Organizing workshops, shows, and lectures with guest speakers who inspire and educate students."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 14859,
                "name" => json_encode([
                    "pl" => "Dbanie o pracownię, wyposażenie oraz dostępność materiałów niezbędnych do prowadzenia zajęć praktycznych.",
                    "en" => "Maintaining the studio, equipment, and access to materials necessary for practical lessons."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 14860,
                "name" => json_encode([
                    "pl" => "Zarządzanie zasobami, w tym zakup i konserwacja materiałów, narzędzi i sprzętu artystycznego.",
                    "en" => "Managing resources, including purchasing and maintaining materials, tools, and art equipment."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 14861,
                "name" => json_encode([
                    "pl" => "Pomoc w przygotowaniu portfolio, dokumentacji prac oraz doradztwo w zakresie wymagań rekrutacyjnych na uczelnie artystyczne.",
                    "en" => "Assisting in portfolio preparation, work documentation, and advising on art school application requirements."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 14862,
                "name" => json_encode([
                    "pl" => "Przekazywanie informacji o kierunkach i specjalnościach na wyższych uczelniach, które mogą być dalszym etapem kształcenia artystycznego.",
                    "en" => "Providing information on programs and specializations at higher education institutions for further artistic education."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $nauczyciel_przedmiotow_teoretycznych_zawodowych = [
            [
                "id" => 14863,
                "name" => json_encode([
                    "pl" => "Tworzenie programów dydaktycznych zgodnych z podstawą programową oraz specyfiką zawodu, dostosowanych do poziomu uczniów.",
                    "en" => "Creating educational programs compliant with the curriculum and specific to the profession, tailored to student levels."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 14864,
                "name" => json_encode([
                    "pl" => "Przygotowanie planów zajęć, które umożliwiają uczniom zdobycie wiedzy teoretycznej niezbędnej w danym zawodzie.",
                    "en" => "Preparing lesson plans that allow students to acquire essential theoretical knowledge for a given profession."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 14865,
                "name" => json_encode([
                    "pl" => "Nauczanie przedmiotów teoretycznych związanych z określonym zawodem, takich jak mechanika, budownictwo, ekonomia, elektryka, gastronomia, logistyka.",
                    "en" => "Teaching theoretical subjects related to specific professions, such as mechanics, construction, economics, electrical work, gastronomy, and logistics."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 14866,
                "name" => json_encode([
                    "pl" => "Przekazywanie wiedzy teoretycznej, która stanowi fundament do praktycznej nauki zawodu.",
                    "en" => "Conveying theoretical knowledge as a foundation for practical vocational training."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 14867,
                "name" => json_encode([
                    "pl" => "Dostosowanie metod i materiałów dydaktycznych do indywidualnych potrzeb uczniów, uwzględniając ich poziom wiedzy i możliwości.",
                    "en" => "Adapting teaching methods and materials to students' individual needs, considering their knowledge level and abilities."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 14868,
                "name" => json_encode([
                    "pl" => "Tworzenie planów nauki dla uczniów wymagających dodatkowej pomocy lub tych, którzy wyróżniają się wysokim potencjałem.",
                    "en" => "Developing learning plans for students needing additional support or those with high potential."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 14869,
                "name" => json_encode([
                    "pl" => "Organizowanie zajęć przygotowujących do egzaminów zawodowych, które sprawdzają wiedzę i umiejętności teoretyczne związane z zawodem.",
                    "en" => "Organizing preparatory classes for vocational exams that assess theoretical knowledge and skills related to the profession."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 14870,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie próbnych egzaminów, omawianie wymagań i standardów egzaminacyjnych oraz kształtowanie strategii egzaminacyjnych.",
                    "en" => "Conducting mock exams, discussing exam requirements and standards, and developing exam strategies."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 14871,
                "name" => json_encode([
                    "pl" => "Regularne przeprowadzanie testów, sprawdzianów, prac kontrolnych, które pozwalają monitorować postępy i poziom zrozumienia materiału przez uczniów.",
                    "en" => "Regularly conducting tests, quizzes, and assessments to monitor student progress and understanding of the material."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 14872,
                "name" => json_encode([
                    "pl" => "Udzielanie informacji zwrotnej na temat mocnych stron i obszarów do poprawy, aby wspierać rozwój zawodowy uczniów.",
                    "en" => "Providing feedback on strengths and areas for improvement to support students' professional development."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 14873,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie ćwiczeń i zadań, które uczą analizy, planowania i rozwiązywania problemów teoretycznych związanych z danym zawodem.",
                    "en" => "Conducting exercises and tasks that teach analysis, planning, and problem-solving related to theoretical aspects of the profession."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 14874,
                "name" => json_encode([
                    "pl" => "Wspieranie uczniów w rozwijaniu umiejętności niezbędnych do podejmowania decyzji i rozwiązywania problemów zawodowych.",
                    "en" => "Supporting students in developing skills essential for decision-making and professional problem-solving."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 14875,
                "name" => json_encode([
                    "pl" => "Nauczanie teoretycznych aspektów, które przygotowują uczniów do pracy w środowisku zawodowym, takich jak zasady BHP, standardy branżowe, obowiązki zawodowe.",
                    "en" => "Teaching theoretical aspects that prepare students for the workplace, such as health and safety regulations, industry standards, and professional duties."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 14876,
                "name" => json_encode([
                    "pl" => "Omawianie przykładów i studiów przypadków, które pozwalają uczniom lepiej zrozumieć specyfikę zawodu.",
                    "en" => "Discussing examples and case studies to help students better understand the specifics of the profession."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 14877,
                "name" => json_encode([
                    "pl" => "Opracowywanie i dostosowywanie materiałów, takich jak podręczniki, karty pracy, prezentacje, które wspierają nauczanie i utrwalają wiedzę.",
                    "en" => "Developing and adapting materials, such as textbooks, worksheets, and presentations, that support teaching and reinforce knowledge."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 14878,
                "name" => json_encode([
                    "pl" => "Wykorzystywanie multimediów, symulacji komputerowych, modeli, które ułatwiają zrozumienie teoretycznych zagadnień.",
                    "en" => "Using multimedia, computer simulations, and models to facilitate understanding of theoretical concepts."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 14879,
                "name" => json_encode([
                    "pl" => "Współdziałanie z nauczycielami prowadzącymi zajęcia praktyczne, aby zapewnić spójność między wiedzą teoretyczną a praktyczną.",
                    "en" => "Collaborating with practical course teachers to ensure consistency between theoretical and practical knowledge."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 14880,
                "name" => json_encode([
                    "pl" => "Wzajemne informowanie o postępach i potrzebach uczniów, aby lepiej wspierać ich rozwój zawodowy.",
                    "en" => "Mutually informing about students' progress and needs to better support their professional development."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 14881,
                "name" => json_encode([
                    "pl" => "Nauczanie teoretycznych podstaw technologii i narzędzi wykorzystywanych w danym zawodzie.",
                    "en" => "Teaching the theoretical foundations of technology and tools used in the profession."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 14882,
                "name" => json_encode([
                    "pl" => "Przekazywanie wiedzy na temat zasad funkcjonowania, budowy oraz zastosowania różnych narzędzi i urządzeń.",
                    "en" => "Conveying knowledge about the operation, construction, and applications of various tools and devices."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 14883,
                "name" => json_encode([
                    "pl" => "Wprowadzanie projektów, które angażują uczniów w rozwiązywanie problemów teoretycznych i rozwijają ich umiejętności analityczne oraz myślenie techniczne.",
                    "en" => "Introducing projects that engage students in solving theoretical problems and developing analytical and technical thinking skills."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 14884,
                "name" => json_encode([
                    "pl" => "Tworzenie zadań projektowych, które odzwierciedlają realne wyzwania zawodowe i pomagają uczniom w praktycznym zastosowaniu wiedzy.",
                    "en" => "Creating project tasks that reflect real professional challenges and help students apply their knowledge practically."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 14885,
                "name" => json_encode([
                    "pl" => "Zapewnienie atmosfery, która sprzyja nauce, gdzie uczniowie czują się komfortowo i zmotywowani do zadawania pytań.",
                    "en" => "Providing a learning-friendly atmosphere where students feel comfortable and motivated to ask questions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 14886,
                "name" => json_encode([
                    "pl" => "Dbanie o kulturę pracy i wzajemny szacunek w klasie, co sprzyja skutecznemu nauczaniu.",
                    "en" => "Maintaining a respectful work culture in the classroom to support effective teaching."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 14887,
                "name" => json_encode([
                    "pl" => "Nauczanie zarządzania czasem oraz organizacji pracy, które są kluczowe w efektywnym wykonywaniu obowiązków zawodowych.",
                    "en" => "Teaching time management and work organization, essential for effective professional duties."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 14888,
                "name" => json_encode([
                    "pl" => "Wprowadzanie ćwiczeń, które uczą planowania zadań, priorytetyzacji i odpowiedzialności.",
                    "en" => "Introducing exercises that teach task planning, prioritization, and responsibility."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 14889,
                "name" => json_encode([
                    "pl" => "Informowanie rodziców o postępach uczniów, ich osiągnięciach, trudności oraz możliwościach rozwoju zawodowego.",
                    "en" => "Informing parents about students' progress, achievements, difficulties, and career development opportunities."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 14890,
                "name" => json_encode([
                    "pl" => "Organizowanie spotkań, które pozwalają na omawianie indywidualnych potrzeb i ścieżki edukacyjnej uczniów.",
                    "en" => "Organizing meetings to discuss students' individual needs and educational paths."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 14891,
                "name" => json_encode([
                    "pl" => "Nauczanie zasad BHP, które są kluczowe dla bezpiecznego wykonywania zawodu oraz zapewnienia ochrony zdrowia.",
                    "en" => "Teaching occupational health and safety rules essential for safe professional practice and health protection."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 14892,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie ćwiczeń i symulacji, które uczą bezpiecznych zachowań w środowisku pracy.",
                    "en" => "Conducting exercises and simulations that teach safe behaviors in the workplace environment."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 14893,
                "name" => json_encode([
                    "pl" => "Zachęcanie uczniów do pogłębiania wiedzy teoretycznej oraz do samodzielnego rozwoju zawodowego.",
                    "en" => "Encouraging students to deepen theoretical knowledge and pursue self-directed career development."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 14894,
                "name" => json_encode([
                    "pl" => "Używanie technik motywacyjnych, takich jak pochwały, wyróżnienia, które zwiększają zaangażowanie i zainteresowanie przedmiotem.",
                    "en" => "Using motivational techniques, such as praise and recognition, to boost engagement and interest in the subject."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 14895,
                "name" => json_encode([
                    "pl" => "Przekazywanie informacji o możliwych ścieżkach kariery, specjalizacjach i możliwościach dalszego rozwoju zawodowego.",
                    "en" => "Providing information on career paths, specializations, and further professional development opportunities."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 14896,
                "name" => json_encode([
                    "pl" => "Wspieranie uczniów w świadomym podejmowaniu decyzji zawodowych oraz w rozwijaniu kompetencji przydatnych na rynku pracy.",
                    "en" => "Supporting students in making informed career decisions and developing competencies valuable in the job market."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 14897,
                "name" => json_encode([
                    "pl" => "Przekazywanie wiedzy o etyce zawodowej, odpowiedzialności zawodowej, rzetelności i znaczeniu przestrzegania standardów.",
                    "en" => "Conveying knowledge about professional ethics, responsibility, integrity, and the importance of upholding standards."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 14898,
                "name" => json_encode([
                    "pl" => "Wskazywanie zasad uczciwości, szacunku i profesjonalizmu, które są niezbędne w każdym zawodzie.",
                    "en" => "Highlighting the principles of honesty, respect, and professionalism essential in any profession."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 14899,
                "name" => json_encode([
                    "pl" => "Udział w kursach, szkoleniach, warsztatach, które pozwalają na poszerzanie wiedzy o nowoczesnych technologiach i metodach nauczania.",
                    "en" => "Participating in courses, training, and workshops to broaden knowledge of modern technologies and teaching methods."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 14900,
                "name" => json_encode([
                    "pl" => "Śledzenie nowości w danej branży, aby przekazywana wiedza była aktualna i dostosowana do wymagań rynku pracy.",
                    "en" => "Keeping up with industry developments to ensure knowledge transfer is current and aligned with market demands."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 14901,
                "name" => json_encode([
                    "pl" => "Nawiązywanie kontaktów z firmami i instytucjami, aby uczniowie mieli możliwość poznania realiów pracy w branży.",
                    "en" => "Building connections with companies and institutions to give students exposure to real-world industry experiences."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 14902,
                "name" => json_encode([
                    "pl" => "Organizowanie wizyt studyjnych, spotkań z profesjonalistami, które pozwalają uczniom na poszerzenie wiedzy o rynku pracy.",
                    "en" => "Organizing study visits and professional meetings to broaden students' knowledge of the labor market."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 14903,
                "name" => json_encode([
                    "pl" => "Nauczanie zasad pracy zespołowej i komunikacji, które są kluczowe w wielu zawodach.",
                    "en" => "Teaching teamwork and communication principles essential in many professions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 14904,
                "name" => json_encode([
                    "pl" => "Wprowadzanie ćwiczeń grupowych, które rozwijają umiejętności współpracy i efektywnego komunikowania się.",
                    "en" => "Introducing group exercises that enhance collaboration and effective communication skills."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 14905,
                "name" => json_encode([
                    "pl" => "Przygotowywanie materiałów, które umożliwiają uczniom samodzielne uzupełnianie wiedzy i przygotowanie do zajęć.",
                    "en" => "Preparing materials that allow students to supplement their knowledge and prepare independently for classes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 14906,
                "name" => json_encode([
                    "pl" => "Korzystanie z platform e-learningowych i zasobów online, aby uczniowie mieli dostęp do materiałów w dogodnym czasie.",
                    "en" => "Using e-learning platforms and online resources to provide students with access to materials at their convenience."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 14907,
                "name" => json_encode([
                    "pl" => "Prowadzenie dzienników, ewidencji ocen, raportów dotyczących wyników i postępów uczniów.",
                    "en" => "Maintaining logs, grade records, and reports on student results and progress."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 14908,
                "name" => json_encode([
                    "pl" => "Dokumentowanie rezultatów nauczania i przygotowywanie sprawozdań dotyczących osiągnięć edukacyjnych uczniów.",
                    "en" => "Documenting teaching outcomes and preparing reports on students' educational achievements."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 14909,
                "name" => json_encode([
                    "pl" => "Organizowanie kół zainteresowań i zajęć dodatkowych, które pozwalają uczniom rozwijać pasję i zainteresowania zawodowe.",
                    "en" => "Organizing clubs and extra classes that allow students to pursue their vocational passions and interests."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 14910,
                "name" => json_encode([
                    "pl" => "Zachęcanie uczniów do udziału w dodatkowych projektach, które wzbogacają ich wiedzę i przygotowanie zawodowe.",
                    "en" => "Encouraging students to participate in additional projects that enrich their knowledge and professional preparation."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $nauczyciel_praktycznej_nauki_zawodu = [
            [
                "id" => 14911,
                "name" => json_encode([
                    "pl" => "Tworzenie programów nauczania, które zgodnie z podstawą programową obejmują wszystkie umiejętności i kompetencje wymagane w danym zawodzie.",
                    "en" => "Creating educational programs that align with the curriculum and encompass all skills and competencies required in the profession."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 14912,
                "name" => json_encode([
                    "pl" => "Przygotowanie planów zajęć praktycznych, dostosowanych do poziomu zaawansowania uczniów i specyfiki zawodu.",
                    "en" => "Preparing practical lesson plans tailored to the students' skill levels and the specifics of the profession."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 14913,
                "name" => json_encode([
                    "pl" => "Organizowanie zajęć praktycznych, podczas których uczniowie zdobywają umiejętności związane z wykonywaniem zadań zawodowych, takich jak obsługa maszyn, narzędzi, urządzeń i wykonywanie prac manualnych.",
                    "en" => "Organizing practical sessions where students acquire skills related to vocational tasks, such as operating machines, tools, devices, and performing manual work."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 14914,
                "name" => json_encode([
                    "pl" => "Demonstracja technik i metod pracy, które są wymagane w danej profesji.",
                    "en" => "Demonstrating work techniques and methods required in the profession."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 14915,
                "name" => json_encode([
                    "pl" => "Dostosowanie zadań praktycznych do umiejętności i tempa pracy poszczególnych uczniów, uwzględniając ich indywidualne potrzeby.",
                    "en" => "Adapting practical tasks to the skills and work pace of individual students, considering their specific needs."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 14916,
                "name" => json_encode([
                    "pl" => "Tworzenie indywidualnych planów rozwoju dla uczniów, którzy mają trudności lub wymagają dodatkowego wsparcia.",
                    "en" => "Creating individual development plans for students who face challenges or require additional support."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 14917,
                "name" => json_encode([
                    "pl" => "Przestrzeganie zasad BHP i wdrażanie ich podczas zajęć, aby zapewnić uczniom bezpieczne warunki do nauki.",
                    "en" => "Enforcing health and safety rules during lessons to ensure a safe learning environment for students."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 14918,
                "name" => json_encode([
                    "pl" => "Monitorowanie poprawności korzystania z maszyn, narzędzi i urządzeń, aby zapobiegać wypadkom i kontuzjom.",
                    "en" => "Monitoring proper use of machines, tools, and equipment to prevent accidents and injuries."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 14919,
                "name" => json_encode([
                    "pl" => "Nauczanie praktycznych umiejętności, które są kluczowe w danym zawodzie, takich jak spawanie, szycie, montaż, naprawa, gotowanie, obróbka materiałów.",
                    "en" => "Teaching essential practical skills in the profession, such as welding, sewing, assembly, repair, cooking, and material processing."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 14920,
                "name" => json_encode([
                    "pl" => "Uczenie obsługi specjalistycznego sprzętu i narzędzi oraz przekazywanie technik, które są powszechnie stosowane w branży.",
                    "en" => "Teaching the operation of specialized equipment and tools and conveying commonly used industry techniques."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 14921,
                "name" => json_encode([
                    "pl" => "Regularna ocena umiejętności uczniów na podstawie ich wyników podczas zajęć praktycznych, np. ocena jakości wykonanych prac, dokładności, przestrzegania terminów.",
                    "en" => "Regularly assessing students' skills based on their performance in practical lessons, such as work quality, accuracy, and adherence to deadlines."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 14922,
                "name" => json_encode([
                    "pl" => "Udzielanie informacji zwrotnej, aby pomóc uczniom w doskonaleniu umiejętności i wskazywanie obszarów do poprawy.",
                    "en" => "Providing feedback to help students improve their skills and identify areas for development."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 14923,
                "name" => json_encode([
                    "pl" => "Uczenie uczniów planowania pracy, organizowania zadań i zarządzania czasem, co jest kluczowe w wielu zawodach.",
                    "en" => "Teaching students to plan work, organize tasks, and manage time, which is crucial in many professions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 14924,
                "name" => json_encode([
                    "pl" => "Przekazywanie zasad efektywnej pracy i odpowiedzialności za powierzony sprzęt oraz zadania.",
                    "en" => "Conveying principles of efficient work and responsibility for assigned equipment and tasks."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 14925,
                "name" => json_encode([
                    "pl" => "Wdrażanie zasad pracy zawodowej, takich jak punktualność, dbałość o jakość pracy, odpowiedzialność za swoje działania.",
                    "en" => "Instilling professional principles, such as punctuality, attention to work quality, and accountability for one's actions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 14926,
                "name" => json_encode([
                    "pl" => "Kształtowanie nawyków zawodowych, które są istotne w profesjonalnym środowisku pracy.",
                    "en" => "Developing professional habits essential in a professional work environment."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 14927,
                "name" => json_encode([
                    "pl" => "Organizowanie ćwiczeń, które przygotowują uczniów do egzaminów praktycznych, zarówno wewnętrznych, jak i zewnętrznych.",
                    "en" => "Organizing exercises that prepare students for both internal and external practical exams."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 14928,
                "name" => json_encode([
                    "pl" => "Przekazywanie informacji o standardach egzaminacyjnych oraz omawianie wymagań związanych z egzaminami zawodowymi.",
                    "en" => "Providing information on exam standards and discussing requirements related to vocational exams."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 14929,
                "name" => json_encode([
                    "pl" => "Nauczanie zasad użytkowania, czyszczenia, konserwacji oraz przechowywania narzędzi i maszyn, aby zapewnić ich trwałość i bezpieczeństwo.",
                    "en" => "Teaching the principles of use, cleaning, maintenance, and storage of tools and machines to ensure durability and safety."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 14930,
                "name" => json_encode([
                    "pl" => "Przekazywanie wiedzy na temat zasad działania i budowy podstawowych narzędzi stosowanych w zawodzie.",
                    "en" => "Conveying knowledge about the principles of operation and construction of basic tools used in the profession."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 14931,
                "name" => json_encode([
                    "pl" => "Organizowanie zadań praktycznych, które odzwierciedlają rzeczywiste sytuacje zawodowe, pozwalając uczniom na zdobycie doświadczenia i zrozumienie realiów pracy w danym zawodzie.",
                    "en" => "Organizing practical tasks that reflect real work situations, allowing students to gain experience and understand the realities of the profession."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 14932,
                "name" => json_encode([
                    "pl" => "Tworzenie projektów, które angażują uczniów w cały proces pracy zawodowej, od planowania po realizację i ocenę jakości.",
                    "en" => "Creating projects that engage students in the entire professional work process, from planning to execution and quality assessment."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 14933,
                "name" => json_encode([
                    "pl" => "Zachęcanie do podejmowania wyzwań, rozwijania swoich umiejętności oraz angażowania się w dodatkowe projekty.",
                    "en" => "Encouraging students to take on challenges, develop their skills, and participate in additional projects."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 14934,
                "name" => json_encode([
                    "pl" => "Stosowanie technik motywacyjnych, które zwiększają zaangażowanie uczniów i pomagają budować ich pewność siebie.",
                    "en" => "Using motivational techniques that enhance student engagement and help build their confidence."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 14935,
                "name" => json_encode([
                    "pl" => "Nauczanie standardów, norm oraz wymagań, które są stosowane w danym zawodzie, np. norm jakościowych, standardów produkcji, przepisów sanitarnych.",
                    "en" => "Teaching standards, norms, and requirements applied in the profession, such as quality standards, production norms, and sanitary regulations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 14936,
                "name" => json_encode([
                    "pl" => "Przekazywanie wiedzy o nowych technologiach, metodach pracy i trendach w branży.",
                    "en" => "Providing knowledge about new technologies, work methods, and industry trends."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 14937,
                "name" => json_encode([
                    "pl" => "Wprowadzanie pracy zespołowej, aby uczniowie mogli uczyć się współpracy, komunikacji i współdziałania.",
                    "en" => "Introducing teamwork to help students learn collaboration, communication, and cooperation."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 14938,
                "name" => json_encode([
                    "pl" => "Organizowanie zadań grupowych, które wymagają podziału obowiązków i odpowiedzialności, co przygotowuje do pracy zespołowej.",
                    "en" => "Organizing group tasks that require division of duties and responsibility, preparing students for teamwork."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 14939,
                "name" => json_encode([
                    "pl" => "Współdziałanie z nauczycielami teoretycznymi, aby zapewnić spójność między teorią a praktyką.",
                    "en" => "Collaborating with theoretical teachers to ensure consistency between theory and practice."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 14940,
                "name" => json_encode([
                    "pl" => "Wzajemne przekazywanie informacji o postępach uczniów i realizowanych zagadnieniach, aby lepiej wspierać ich edukację zawodową.",
                    "en" => "Mutually sharing information about students' progress and covered topics to better support their vocational education."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 14941,
                "name" => json_encode([
                    "pl" => "Regularne informowanie rodziców o postępach uczniów, ich osiągnięciach, problemach oraz możliwościach dalszego rozwoju zawodowego.",
                    "en" => "Regularly informing parents about students' progress, achievements, challenges, and future vocational development opportunities."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 14942,
                "name" => json_encode([
                    "pl" => "Organizowanie spotkań, aby omówić indywidualne potrzeby i ścieżkę edukacyjną uczniów.",
                    "en" => "Organizing meetings to discuss students' individual needs and educational paths."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 14943,
                "name" => json_encode([
                    "pl" => "Dbanie o odpowiednie przygotowanie warsztatu lub pracowni, zapewnienie dostępności narzędzi i materiałów do pracy.",
                    "en" => "Ensuring the proper preparation of workshops or labs and the availability of tools and materials for work."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 14944,
                "name" => json_encode([
                    "pl" => "Zarządzanie zasobami pracowni, w tym dbanie o wyposażenie i stan techniczny maszyn oraz narzędzi.",
                    "en" => "Managing workshop resources, including maintaining equipment and the technical condition of machines and tools."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 14945,
                "name" => json_encode([
                    "pl" => "Nauczanie odpowiedzialności, samodzielności i umiejętności podejmowania decyzji, które są istotne w życiu zawodowym.",
                    "en" => "Teaching responsibility, independence, and decision-making skills essential for professional life."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 14946,
                "name" => json_encode([
                    "pl" => "Kształtowanie umiejętności niezbędnych do podejmowania wyzwań zawodowych oraz radzenia sobie w sytuacjach trudnych.",
                    "en" => "Developing skills necessary for taking on vocational challenges and handling difficult situations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 14947,
                "name" => json_encode([
                    "pl" => "Przekazywanie informacji o wymaganiach rynku pracy oraz możliwościach rozwoju zawodowego w danym sektorze.",
                    "en" => "Providing information on labor market requirements and career development opportunities in the sector."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 14948,
                "name" => json_encode([
                    "pl" => "Pomoc w wyborze ścieżki zawodowej oraz omówienie ścieżek kariery, jakie uczniowie mogą realizować po ukończeniu szkoły.",
                    "en" => "Assisting in career path selection and discussing career options available to students after graduation."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 14949,
                "name" => json_encode([
                    "pl" => "Wdrażanie zasad etyki pracy, takich jak uczciwość, odpowiedzialność, poszanowanie własności intelektualnej i przestrzeganie przepisów zawodowych.",
                    "en" => "Implementing work ethics principles, such as honesty, responsibility, intellectual property respect, and compliance with professional regulations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 14950,
                "name" => json_encode([
                    "pl" => "Przekazywanie zasad poszanowania prywatności i bezpieczeństwa danych, szczególnie w zawodach związanych z technologią.",
                    "en" => "Conveying principles of privacy and data security, especially in technology-related professions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 14951,
                "name" => json_encode([
                    "pl" => "Organizowanie dodatkowych zajęć, które pozwalają uczniom rozwijać swoje umiejętności oraz zdobywać praktyczne doświadczenie.",
                    "en" => "Organizing extra classes that enable students to enhance their skills and gain practical experience."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 14952,
                "name" => json_encode([
                    "pl" => "Współpraca z pracodawcami i firmami, aby uczniowie mogli odbywać praktyki zawodowe w rzeczywistym środowisku pracy.",
                    "en" => "Collaborating with employers and companies to allow students to undertake vocational internships in a real work environment."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 14953,
                "name" => json_encode([
                    "pl" => "Nauczanie obsługi nowoczesnych urządzeń, maszyn, programów komputerowych stosowanych w zawodzie.",
                    "en" => "Teaching the use of modern devices, machines, and software programs used in the profession."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 14954,
                "name" => json_encode([
                    "pl" => "Wdrażanie nowych technologii do pracy z uczniami, aby lepiej przygotować ich do pracy w cyfrowym środowisku.",
                    "en" => "Incorporating new technologies into student training to better prepare them for work in a digital environment."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 14955,
                "name" => json_encode([
                    "pl" => "Prowadzenie ewidencji ocen, obecności, dokumentowanie wykonanych prac i projektów, które pomagają śledzić rozwój uczniów.",
                    "en" => "Keeping records of grades, attendance, and documenting completed works and projects to track students' progress."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 14956,
                "name" => json_encode([
                    "pl" => "Sporządzanie raportów dotyczących wyników nauczania i przygotowanie uczniów do dalszych etapów kształcenia zawodowego.",
                    "en" => "Preparing reports on teaching outcomes and students' readiness for further stages of vocational education."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 14957,
                "name" => json_encode([
                    "pl" => "Udział w kursach, szkoleniach, warsztatach, które pozwalają na poszerzenie wiedzy o nowoczesnych technikach i standardach pracy.",
                    "en" => "Participating in courses, training sessions, and workshops that expand knowledge of modern techniques and work standards."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 14958,
                "name" => json_encode([
                    "pl" => "Śledzenie zmian i nowości w branży, aby dostosowywać nauczanie do aktualnych trendów rynkowych i technologicznych.",
                    "en" => "Keeping up with industry changes and innovations to adapt teaching to current market and technological trends."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]

        ];
        $instruktor_praktycznej_nauki_zawodu = [
            [
                "id" => 14959,
                "name" => json_encode([
                    "pl" => "Opracowanie planów zajęć praktycznych zgodnych z wymaganiami programowymi i specyfiką zawodu.",
                    "en" => "Developing practical lesson plans in accordance with curriculum requirements and job specifics."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 14960,
                "name" => json_encode([
                    "pl" => "Przygotowanie harmonogramu zadań, który uwzględnia zakres umiejętności i kompetencji wymaganych w danym zawodzie.",
                    "en" => "Preparing a task schedule that includes the range of skills and competencies required in the profession."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 14961,
                "name" => json_encode([
                    "pl" => "Bezpośrednie nauczanie umiejętności praktycznych poprzez instruktaż, pokazy oraz ćwiczenia, które pozwalają na opanowanie niezbędnych technik.",
                    "en" => "Directly teaching practical skills through instruction, demonstrations, and exercises that allow mastering essential techniques."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 14962,
                "name" => json_encode([
                    "pl" => "Prowadzenie zajęć w warunkach realnych, czyli bezpośrednio w środowisku pracy, co pozwala na zdobycie doświadczenia zbliżonego do warunków zawodowych.",
                    "en" => "Conducting classes in real conditions, directly in the work environment, to gain experience similar to actual working conditions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 14963,
                "name" => json_encode([
                    "pl" => "Prezentowanie poprawnej obsługi narzędzi i maszyn stosowanych w danej branży, takich jak np. tokarki, maszyny stolarskie, urządzenia gastronomiczne, sprzęt spawalniczy.",
                    "en" => "Demonstrating correct operation of tools and machines used in the field, such as lathes, woodworking machines, catering equipment, welding tools."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 14964,
                "name" => json_encode([
                    "pl" => "Zapewnienie uczniom instrukcji obsługi sprzętu krok po kroku oraz monitorowanie poprawności ich pracy.",
                    "en" => "Providing students with step-by-step equipment operation instructions and monitoring the correctness of their work."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 14965,
                "name" => json_encode([
                    "pl" => "Przestrzeganie i wdrażanie zasad BHP podczas zajęć praktycznych, aby zapewnić bezpieczne warunki pracy dla uczniów.",
                    "en" => "Observing and implementing health and safety (BHP) rules during practical classes to ensure safe working conditions for students."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 14966,
                "name" => json_encode([
                    "pl" => "Stały nadzór nad uczniami i reagowanie na sytuacje potencjalnie niebezpieczne, aby zapobiegać wypadkom i kontuzjom.",
                    "en" => "Maintaining constant supervision over students and responding to potentially dangerous situations to prevent accidents and injuries."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 14967,
                "name" => json_encode([
                    "pl" => "Dostosowanie zakresu i tempa nauczania do poziomu umiejętności poszczególnych uczniów, ich potrzeb i predyspozycji.",
                    "en" => "Adjusting the scope and pace of instruction to the skill levels, needs, and predispositions of individual students."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 14968,
                "name" => json_encode([
                    "pl" => "Udzielanie dodatkowego wsparcia uczniom, którzy mają trudności z opanowaniem poszczególnych umiejętności.",
                    "en" => "Providing additional support to students struggling to master specific skills."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 14969,
                "name" => json_encode([
                    "pl" => "Monitorowanie postępów uczniów, ocena jakości wykonywanych prac oraz sprawdzanie poprawności wykonania zadań.",
                    "en" => "Monitoring student progress, assessing the quality of work, and verifying task completion accuracy."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 14970,
                "name" => json_encode([
                    "pl" => "Udzielanie konstruktywnej informacji zwrotnej, która wskazuje mocne strony uczniów oraz obszary do dalszej pracy.",
                    "en" => "Providing constructive feedback that highlights students' strengths and areas for further improvement."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 14971,
                "name" => json_encode([
                    "pl" => "Nauczanie uczniów, jak planować pracę, organizować zadania i współpracować w grupie, co jest kluczowe w wielu zawodach.",
                    "en" => "Teaching students how to plan work, organize tasks, and collaborate in groups, which is essential in many professions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 14972,
                "name" => json_encode([
                    "pl" => "Organizowanie zadań zespołowych, które uczą współpracy, komunikacji i odpowiedzialności za realizowane projekty.",
                    "en" => "Organizing team tasks that teach collaboration, communication, and responsibility for project execution."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 14973,
                "name" => json_encode([
                    "pl" => "Organizowanie ćwiczeń, które pozwalają uczniom przygotować się do egzaminów praktycznych, sprawdzających ich kompetencje zawodowe.",
                    "en" => "Organizing exercises that help students prepare for practical exams testing their vocational skills."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 14974,
                "name" => json_encode([
                    "pl" => "Przekazywanie wymagań egzaminacyjnych oraz omawianie standardów, które uczniowie muszą spełnić, aby zdać egzamin.",
                    "en" => "Conveying exam requirements and discussing standards students must meet to pass."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 14975,
                "name" => json_encode([
                    "pl" => "Nauczanie zasad jakości i norm zawodowych obowiązujących w danej branży, takich jak dokładność, precyzja, estetyka wykonania.",
                    "en" => "Teaching quality principles and professional standards in the industry, such as accuracy, precision, and aesthetics."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 14976,
                "name" => json_encode([
                    "pl" => "Kształtowanie umiejętności przestrzegania standardów, które są kluczowe dla wykonywania wysokiej jakości prac.",
                    "en" => "Developing skills to adhere to standards critical to performing high-quality work."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 14977,
                "name" => json_encode([
                    "pl" => "Nauczanie uczniów zasad użytkowania, czyszczenia i konserwacji sprzętu, aby zapewnić jego trwałość i niezawodność.",
                    "en" => "Teaching students equipment usage, cleaning, and maintenance to ensure durability and reliability."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 14978,
                "name" => json_encode([
                    "pl" => "Wdrażanie zasad odpowiedniego użytkowania i przechowywania narzędzi i urządzeń stosowanych podczas zajęć praktycznych.",
                    "en" => "Implementing principles of proper tool and equipment use and storage during practical classes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 14979,
                "name" => json_encode([
                    "pl" => "Zachęcanie uczniów do podejmowania wyzwań, rozwijania swoich umiejętności oraz do aktywnego angażowania się w zajęcia.",
                    "en" => "Encouraging students to take on challenges, develop their skills, and actively engage in classes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 14980,
                "name" => json_encode([
                    "pl" => "Stosowanie technik motywacyjnych, które zwiększają zaangażowanie uczniów i budują ich pewność siebie.",
                    "en" => "Using motivational techniques to increase student engagement and build their confidence."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 14981,
                "name" => json_encode([
                    "pl" => "Kształtowanie nawyków zawodowych, takich jak punktualność, odpowiedzialność za swoje działania, dbanie o jakość i rzetelność wykonywanej pracy.",
                    "en" => "Cultivating professional habits like punctuality, accountability, quality care, and reliability in work performance."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 14982,
                "name" => json_encode([
                    "pl" => "Nauczanie etyki pracy oraz zasad panujących w danym zawodzie, takich jak profesjonalizm, dokładność i niezawodność.",
                    "en" => "Teaching work ethics and principles in the profession, such as professionalism, accuracy, and reliability."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 14983,
                "name" => json_encode([
                    "pl" => "Informowanie uczniów o najnowszych rozwiązaniach technologicznych, narzędziach i metodach pracy stosowanych w danej branży.",
                    "en" => "Informing students about the latest technological solutions, tools, and work methods used in the industry."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 14984,
                "name" => json_encode([
                    "pl" => "Przygotowanie uczniów do pracy z nowoczesnym sprzętem i technologiami, które mogą napotkać w przyszłym środowisku pracy.",
                    "en" => "Preparing students to work with modern equipment and technologies they may encounter in future workplaces."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 14985,
                "name" => json_encode([
                    "pl" => "Koordynacja pracy z nauczycielami teoretycznymi, aby zapewnić spójność między teorią a praktyką.",
                    "en" => "Coordinating work with theoretical teachers to ensure consistency between theory and practice."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 14986,
                "name" => json_encode([
                    "pl" => "Konsultowanie się z innymi nauczycielami na temat postępów i potrzeb uczniów, co umożliwia kompleksowe wsparcie ich rozwoju zawodowego.",
                    "en" => "Consulting with other teachers on student progress and needs, enabling comprehensive support for their vocational development."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 14987,
                "name" => json_encode([
                    "pl" => "Nawiązywanie kontaktów z pracodawcami i instytucjami branżowymi, aby umożliwić uczniom kontakt z praktykami i realiami branży.",
                    "en" => "Building connections with employers and industry institutions to provide students with exposure to professionals and industry realities."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 14988,
                "name" => json_encode([
                    "pl" => "Organizowanie wizyt studyjnych, staży, praktyk, które pozwalają uczniom poznać różne środowiska pracy.",
                    "en" => "Organizing study visits, internships, and placements that allow students to experience various work environments."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 14989,
                "name" => json_encode([
                    "pl" => "Nauczanie organizacji stanowiska pracy, zarządzania przestrzenią roboczą i odpowiedniego wykorzystywania czasu.",
                    "en" => "Teaching workspace organization, managing work areas, and effective time use."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 14990,
                "name" => json_encode([
                    "pl" => "Uczenie technik organizacyjnych i zasad, które wspierają efektywność pracy oraz pozwalają na sprawne wykonanie zadań zawodowych.",
                    "en" => "Teaching organizational techniques and principles that support work efficiency and allow for smooth task execution."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 14991,
                "name" => json_encode([
                    "pl" => "Kształtowanie etycznych postaw wśród uczniów, takich jak uczciwość, odpowiedzialność, rzetelność oraz poszanowanie własności intelektualnej.",
                    "en" => "Fostering ethical attitudes in students, such as honesty, responsibility, reliability, and respect for intellectual property."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 14992,
                "name" => json_encode([
                    "pl" => "Przekazywanie wiedzy o zasadach obowiązujących w zawodzie, w tym o normach i przepisach branżowych.",
                    "en" => "Conveying knowledge about the principles in the profession, including industry norms and regulations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 14993,
                "name" => json_encode([
                    "pl" => "Rozwijanie kompetencji miękkich, takich jak komunikacja, asertywność, rozwiązywanie problemów i radzenie sobie ze stresem.",
                    "en" => "Developing soft skills such as communication, assertiveness, problem-solving, and stress management."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 14994,
                "name" => json_encode([
                    "pl" => "Wsparcie uczniów w budowaniu umiejętności radzenia sobie w środowisku zawodowym i pracy w zespole.",
                    "en" => "Supporting students in building skills for coping in a professional environment and working in a team."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 14995,
                "name" => json_encode([
                    "pl" => "Dbanie o odpowiednie przygotowanie warsztatu lub pracowni, zapewnienie dostępności narzędzi, materiałów i wyposażenia do zajęć praktycznych.",
                    "en" => "Ensuring proper preparation of the workshop or lab and availability of tools, materials, and equipment for practical classes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 14996,
                "name" => json_encode([
                    "pl" => "Zarządzanie stanem technicznym i konserwacją sprzętu oraz przestrzeganie zasad bezpieczeństwa i porządku w pracowni.",
                    "en" => "Managing the technical condition and maintenance of equipment and ensuring safety and order in the workshop."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 14997,
                "name" => json_encode([
                    "pl" => "Prowadzenie ewidencji ocen, obecności oraz dokumentacji dotyczącej wyników i postępów uczniów podczas zajęć praktycznych.",
                    "en" => "Maintaining records of grades, attendance, and documentation on student outcomes and progress during practical classes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 14998,
                "name" => json_encode([
                    "pl" => "Przygotowywanie raportów dotyczących efektów nauczania i monitorowanie osiągnięć uczniów.",
                    "en" => "Preparing reports on teaching outcomes and monitoring student achievements."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 14999,
                "name" => json_encode([
                    "pl" => "Uczenie uczniów podejmowania własnych decyzji, inicjatywy i samodzielnego rozwiązywania problemów zawodowych.",
                    "en" => "Teaching students to make decisions, take initiative, and solve vocational problems independently."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15000,
                "name" => json_encode([
                    "pl" => "Stymulowanie do samodzielności i kreatywności w rozwiązywaniu zadań praktycznych.",
                    "en" => "Encouraging independence and creativity in solving practical tasks."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15001,
                "name" => json_encode([
                    "pl" => "Przekazywanie informacji o wymaganiach rynku pracy, możliwościach rozwoju zawodowego i ścieżkach kariery.",
                    "en" => "Providing information on labor market requirements, career development opportunities, and career paths."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15002,
                "name" => json_encode([
                    "pl" => "Wsparcie uczniów w przygotowaniach do wejścia na rynek pracy, takich jak nauka budowania portfolio, autoprezentacji, oraz pisania CV.",
                    "en" => "Supporting students in preparing to enter the job market, including portfolio building, self-presentation, and CV writing."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15003,
                "name" => json_encode([
                    "pl" => "Udział w kursach, szkoleniach, warsztatach i konferencjach branżowych, aby poszerzać wiedzę o nowych metodach i technologiach.",
                    "en" => "Participating in courses, training, workshops, and industry conferences to broaden knowledge of new methods and technologies."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15004,
                "name" => json_encode([
                    "pl" => "Śledzenie nowości w branży, aby zapewniać uczniom aktualną wiedzę i umiejętności zgodne z wymaganiami rynku pracy.",
                    "en" => "Keeping up with industry trends to provide students with current knowledge and skills aligned with labor market demands."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15005,
                "name" => json_encode([
                    "pl" => "Pomoc w organizacji praktyk zawodowych, które umożliwiają uczniom zdobycie doświadczenia i kontaktu z pracodawcami.",
                    "en" => "Assisting in organizing vocational internships, allowing students to gain experience and connect with employers."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15006,
                "name" => json_encode([
                    "pl" => "Monitorowanie postępów uczniów podczas praktyk oraz współpraca z pracodawcami w celu zapewnienia wysokiej jakości nauki zawodu.",
                    "en" => "Monitoring student progress during internships and collaborating with employers to ensure high-quality vocational training."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $specjalista_pracy_z_spe = [
            [
                "id" => 15007,
                "name" => json_encode([
                    "pl" => "Współpraca z psychologami, pedagogami oraz innymi specjalistami w celu rozpoznania potrzeb uczniów.",
                    "en" => "Collaboration with psychologists, pedagogues, and other specialists to identify student needs."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15008,
                "name" => json_encode([
                    "pl" => "Analiza wyników badań, obserwacja zachowań uczniów i współpraca z rodziną w celu pełnego zrozumienia trudności i możliwości ucznia.",
                    "en" => "Analyzing research results, observing student behaviors, and collaborating with families to fully understand each student's challenges and potential."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15009,
                "name" => json_encode([
                    "pl" => "Opracowanie dostosowanego programu nauczania, który uwzględnia potrzeby rozwojowe, możliwości i cele edukacyjne ucznia.",
                    "en" => "Creating a tailored educational program that considers the student's developmental needs, abilities, and educational goals."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15010,
                "name" => json_encode([
                    "pl" => "Regularna ocena i modyfikacja IPET, aby program odpowiadał bieżącym potrzebom i postępom ucznia.",
                    "en" => "Regular assessment and modification of the IPET to align with the student's current needs and progress."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15011,
                "name" => json_encode([
                    "pl" => "Wybór metod dydaktycznych dostosowanych do możliwości ucznia, takich jak nauczanie multisensoryczne, nauczanie przez zabawę, ćwiczenia z wykorzystaniem technologii asystujących.",
                    "en" => "Choosing teaching methods tailored to the student's abilities, such as multisensory learning, play-based learning, and exercises using assistive technology."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15012,
                "name" => json_encode([
                    "pl" => "Dopasowanie tempa pracy do indywidualnych możliwości ucznia, aby zminimalizować stres i zwiększyć efektywność nauki.",
                    "en" => "Adjusting the pace of work to the student's individual abilities to minimize stress and enhance learning efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15013,
                "name" => json_encode([
                    "pl" => "Nauczanie umiejętności funkcjonalnych, takich jak czytanie, pisanie, liczenie, rozpoznawanie liter, cyfr czy kształtów.",
                    "en" => "Teaching functional skills such as reading, writing, counting, and recognizing letters, numbers, or shapes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15014,
                "name" => json_encode([
                    "pl" => "Kształtowanie umiejętności społecznych i komunikacyjnych, takich jak nawiązywanie kontaktu, praca w grupie, rozwiązywanie konfliktów.",
                    "en" => "Developing social and communication skills, such as initiating contact, teamwork, and conflict resolution."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15015,
                "name" => json_encode([
                    "pl" => "Wdrażanie metod komunikacji wspomagającej, takich jak Makaton, komunikatory obrazkowe (PECS), tablety, aplikacje edukacyjne, aby umożliwić uczniom wyrażanie myśli i emocji.",
                    "en" => "Implementing assistive communication methods like Makaton, picture exchange communication (PECS), tablets, and educational apps to enable students to express thoughts and emotions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15016,
                "name" => json_encode([
                    "pl" => "Nauczanie podstaw języka migowego lub innych technik komunikacji wspomagającej, jeśli uczeń tego potrzebuje.",
                    "en" => "Teaching basic sign language or other assistive communication techniques, if needed by the student."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15017,
                "name" => json_encode([
                    "pl" => "Wspieranie uczniów w rozwoju umiejętności emocjonalnych, takich jak rozpoznawanie i wyrażanie uczuć, radzenie sobie ze stresem i frustracją.",
                    "en" => "Supporting students in developing emotional skills, such as recognizing and expressing feelings and coping with stress and frustration."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15018,
                "name" => json_encode([
                    "pl" => "Nauczanie umiejętności społecznych, które pomagają uczniom budować relacje z rówieśnikami i rozwiązywać problemy interpersonalne.",
                    "en" => "Teaching social skills that help students build relationships with peers and solve interpersonal problems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15019,
                "name" => json_encode([
                    "pl" => "Zapewnienie uczniom poczucia bezpieczeństwa i akceptacji, aby mogli efektywnie uczyć się i rozwijać.",
                    "en" => "Ensuring a sense of safety and acceptance for students, enabling effective learning and growth."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15020,
                "name" => json_encode([
                    "pl" => "Dbanie o przestrzeń nauki, która minimalizuje rozpraszające bodźce, a jednocześnie zapewnia komfort pracy i nauki.",
                    "en" => "Maintaining a learning environment that minimizes distractions and provides comfort for work and study."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15021,
                "name" => json_encode([
                    "pl" => "Regularne ocenianie postępów ucznia w realizacji indywidualnych celów edukacyjnych, terapeutycznych i społecznych.",
                    "en" => "Regularly assessing student progress toward individual educational, therapeutic, and social goals."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15022,
                "name" => json_encode([
                    "pl" => "Prowadzenie dokumentacji, raportów, zapisów dotyczących wyników i postępów uczniów, aby móc dostosować dalsze działania edukacyjne.",
                    "en" => "Keeping documentation, reports, and records on student outcomes and progress to adapt future educational activities."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15023,
                "name" => json_encode([
                    "pl" => "Wprowadzenie ćwiczeń, które wspierają rozwój dużej i małej motoryki oraz koordynacji ruchowej, takich jak ćwiczenia manualne, terapia zajęciowa.",
                    "en" => "Implementing exercises supporting gross and fine motor skills and motor coordination, like manual exercises and occupational therapy."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15024,
                "name" => json_encode([
                    "pl" => "Organizowanie aktywności, które pomagają w opanowaniu umiejętności ruchowych, niezbędnych do codziennych czynności.",
                    "en" => "Organizing activities that help master motor skills essential for daily tasks."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15025,
                "name" => json_encode([
                    "pl" => "Regularne informowanie rodziców o postępach dziecka, udzielanie porad i wskazówek dotyczących wspierania rozwoju w domu.",
                    "en" => "Regularly informing parents about the child's progress, offering advice, and providing guidance on supporting development at home."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15026,
                "name" => json_encode([
                    "pl" => "Organizowanie spotkań i konsultacji, aby omawiać potrzeby ucznia, jego trudności oraz proponowane rozwiązania.",
                    "en" => "Organizing meetings and consultations to discuss the student's needs, challenges, and proposed solutions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15027,
                "name" => json_encode([
                    "pl" => "Współpraca z psychologami, logopedami, terapeutami oraz innymi specjalistami, którzy wspierają rozwój dziecka.",
                    "en" => "Collaboration with psychologists, speech therapists, therapists, and other specialists who support child development."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15028,
                "name" => json_encode([
                    "pl" => "Organizowanie spotkań zespołu specjalistów, aby dostosować podejście i metody pracy do zmieniających się potrzeb ucznia.",
                    "en" => "Organizing specialist team meetings to adapt approaches and methods to the changing needs of the student."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15029,
                "name" => json_encode([
                    "pl" => "Opracowywanie lub adaptowanie materiałów dydaktycznych, które odpowiadają możliwościom poznawczym ucznia, np. materiały obrazkowe, karty pracy.",
                    "en" => "Creating or adapting educational materials suited to the student's cognitive abilities, such as picture materials and worksheets."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15030,
                "name" => json_encode([
                    "pl" => "Korzystanie z narzędzi multimedialnych, interaktywnych ćwiczeń, które wzbogacają proces nauczania i ułatwiają przyswajanie wiedzy.",
                    "en" => "Using multimedia tools and interactive exercises to enrich the teaching process and facilitate knowledge acquisition."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15031,
                "name" => json_encode([
                    "pl" => "Nauczanie umiejętności codziennego funkcjonowania, takich jak ubieranie się, przygotowywanie posiłków, higiena osobista.",
                    "en" => "Teaching daily functioning skills, such as dressing, meal preparation, and personal hygiene."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15032,
                "name" => json_encode([
                    "pl" => "Wdrażanie technik, które rozwijają niezależność ucznia i umiejętność radzenia sobie w różnych sytuacjach życiowych.",
                    "en" => "Implementing techniques that foster student independence and problem-solving skills in various life situations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15033,
                "name" => json_encode([
                    "pl" => "Zachęcanie do podejmowania wyzwań, rozwijania nowych umiejętności oraz do pozytywnego nastawienia do nauki.",
                    "en" => "Encouraging students to take on challenges, develop new skills, and maintain a positive attitude toward learning."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15034,
                "name" => json_encode([
                    "pl" => "Uwzględnianie indywidualnych zainteresowań ucznia w procesie nauczania, co pomaga w zwiększeniu jego motywacji i zaangażowania.",
                    "en" => "Incorporating the student's individual interests into the teaching process to increase motivation and engagement."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15035,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie ćwiczeń sensorycznych, które pomagają uczniom w przetwarzaniu bodźców i regulowaniu reakcji na otoczenie.",
                    "en" => "Conducting sensory exercises that help students process stimuli and regulate their responses to the environment."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15036,
                "name" => json_encode([
                    "pl" => "Wspieranie uczniów w rozwijaniu umiejętności i kompetencji potrzebnych do kontynuacji nauki lub podjęcia pracy zawodowej.",
                    "en" => "Supporting students in developing skills and competencies needed for further education or vocational work."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15037,
                "name" => json_encode([
                    "pl" => "Uczenie podstawowych zasad funkcjonowania w społeczeństwie, które będą potrzebne w przyszłym życiu zawodowym i społecznym.",
                    "en" => "Teaching fundamental principles of functioning in society, which are necessary for future professional and social life."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15038,
                "name" => json_encode([
                    "pl" => "Praca nad integracją uczniów z różnorodnymi potrzebami, dbanie o wzajemne zrozumienie i akceptację wśród rówieśników.",
                    "en" => "Working on integrating students with diverse needs, fostering mutual understanding and acceptance among peers."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15039,
                "name" => json_encode([
                    "pl" => "Kształtowanie pozytywnych postaw w klasie, aby uczniowie czuli się komfortowo i akceptowani.",
                    "en" => "Fostering positive attitudes in the classroom to ensure students feel comfortable and accepted."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15040,
                "name" => json_encode([
                    "pl" => "Nauczanie technik radzenia sobie z trudnymi emocjami, takich jak stres, frustracja, lęk, oraz wspieranie uczniów w rozwoju emocjonalnym.",
                    "en" => "Teaching techniques for managing difficult emotions, such as stress, frustration, and anxiety, and supporting emotional development."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15041,
                "name" => json_encode([
                    "pl" => "Wdrażanie ćwiczeń relaksacyjnych i technik, które pomagają uczniom w regulacji emocji i zwiększają ich odporność psychiczną.",
                    "en" => "Implementing relaxation exercises and techniques that help students regulate emotions and increase psychological resilience."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15042,
                "name" => json_encode([
                    "pl" => "Stałe rozwijanie wiedzy o nowych metodach i technikach wspierania uczniów ze SPE, aby skutecznie dostosowywać nauczanie do potrzeb uczniów.",
                    "en" => "Continually expanding knowledge of new methods and techniques to support students with special educational needs, effectively adapting teaching to their needs."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15043,
                "name" => json_encode([
                    "pl" => "Udział w kursach, konferencjach, warsztatach dotyczących pracy z uczniami o specjalnych potrzebach, aby poszerzać kompetencje zawodowe.",
                    "en" => "Participating in courses, conferences, and workshops on working with students with special needs to broaden professional skills."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15044,
                "name" => json_encode([
                    "pl" => "Stosowanie ćwiczeń, które rozwijają umiejętności poznawcze, takie jak pamięć, koncentracja, logiczne myślenie, rozwiązywanie problemów.",
                    "en" => "Using exercises that develop cognitive skills, such as memory, concentration, logical thinking, and problem-solving."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15045,
                "name" => json_encode([
                    "pl" => "Wykorzystywanie zadań i gier edukacyjnych, które wspierają rozwój poznawczy i motywują do nauki.",
                    "en" => "Utilizing tasks and educational games that support cognitive development and motivate students to learn."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15046,
                "name" => json_encode([
                    "pl" => "Dokumentowanie postępów, wyzwań, wniosków z obserwacji oraz sporządzanie raportów dotyczących pracy z uczniem.",
                    "en" => "Documenting student progress, challenges, observations, and preparing reports on the work with the student."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15047,
                "name" => json_encode([
                    "pl" => "Regularna aktualizacja dokumentacji związanej z IPET oraz współpraca z zespołem specjalistów w zakresie dostosowań i rozwoju ucznia.",
                    "en" => "Regularly updating documentation related to the IPET and collaborating with a team of specialists for student adaptations and development."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15048,
                "name" => json_encode([
                    "pl" => "Pomoc w nawiązywaniu relacji z rówieśnikami i w adaptacji do środowiska szkolnego, co wspiera pełne uczestnictwo ucznia w życiu szkoły.",
                    "en" => "Assisting in building peer relationships and adapting to the school environment, supporting full participation in school life."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15049,
                "name" => json_encode([
                    "pl" => "Praca nad budowaniem poczucia przynależności oraz akceptacji w grupie rówieśniczej.",
                    "en" => "Working on fostering a sense of belonging and acceptance within the peer group."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]

        ];
        $pedagog_szkolny = [
            [
                "id" => 15050,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie wywiadów, rozmów indywidualnych oraz obserwacji, aby identyfikować potrzeby, trudności i problemy uczniów.",
                    "en" => "Conducting interviews, individual conversations, and observations to identify student needs, difficulties, and problems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15051,
                "name" => json_encode([
                    "pl" => "Współpraca z nauczycielami i rodzicami w celu rozpoznania sytuacji problemowych oraz wspierania uczniów z trudnościami.",
                    "en" => "Collaboration with teachers and parents to identify problem situations and support students with difficulties."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15052,
                "name" => json_encode([
                    "pl" => "Udzielanie pomocy uczniom w radzeniu sobie ze stresem, lękiem, problemami emocjonalnymi i innymi trudnościami, które wpływają na ich funkcjonowanie w szkole.",
                    "en" => "Providing help to students in coping with stress, anxiety, emotional problems, and other difficulties affecting their functioning in school."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15053,
                "name" => json_encode([
                    "pl" => "Prowadzenie indywidualnych rozmów z uczniami, pomaganie w rozwiązywaniu problemów osobistych i w rozwijaniu odporności emocjonalnej.",
                    "en" => "Conducting individual conversations with students, helping them solve personal problems and develop emotional resilience."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15054,
                "name" => json_encode([
                    "pl" => "Wsparcie uczniów w wyborze ścieżki edukacyjnej i zawodowej, pomoc w rozpoznaniu ich zainteresowań, mocnych stron i predyspozycji.",
                    "en" => "Supporting students in choosing their educational and career paths, helping them recognize their interests, strengths, and aptitudes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15055,
                "name" => json_encode([
                    "pl" => "Organizowanie warsztatów i spotkań dotyczących wyboru szkoły, kierunków studiów oraz przygotowania do podjęcia pracy zawodowej.",
                    "en" => "Organizing workshops and meetings regarding school choice, fields of study, and preparation for entering the workforce."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15056,
                "name" => json_encode([
                    "pl" => "Organizowanie spotkań z rodzicami w celu omawiania postępów, trudności i potrzeb uczniów.",
                    "en" => "Organizing meetings with parents to discuss students' progress, difficulties, and needs."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15057,
                "name" => json_encode([
                    "pl" => "Udzielanie wsparcia i porad rodzicom w zakresie rozwoju emocjonalnego i społecznego ich dzieci, pomoc w rozwiązywaniu problemów wychowawczych.",
                    "en" => "Providing support and advice to parents on the emotional and social development of their children, assisting with parenting issues."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15058,
                "name" => json_encode([
                    "pl" => "Wspieranie wychowawców i nauczycieli w rozwiązywaniu problemów wychowawczych, organizowanie spotkań zespołów wychowawczych.",
                    "en" => "Supporting class teachers and educators in resolving behavioral issues, organizing meetings of educational teams."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15059,
                "name" => json_encode([
                    "pl" => "Konsultowanie się z nauczycielami na temat metod pracy z uczniami o specjalnych potrzebach edukacyjnych oraz w sytuacjach trudnych.",
                    "en" => "Consulting with teachers on methods of working with students with special educational needs and in difficult situations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15060,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie wywiadów, rozmów indywidualnych oraz obserwacji, aby identyfikować potrzeby, trudności i problemy uczniów.",
                    "en" => "Conducting interviews, individual conversations, and observations to identify student needs, difficulties, and problems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15061,
                "name" => json_encode([
                    "pl" => "Współpraca z nauczycielami i rodzicami w celu rozpoznania sytuacji problemowych oraz wspierania uczniów z trudnościami.",
                    "en" => "Collaboration with teachers and parents to identify problem situations and support students with difficulties."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15062,
                "name" => json_encode([
                    "pl" => "Udzielanie pomocy uczniom w radzeniu sobie ze stresem, lękiem, problemami emocjonalnymi i innymi trudnościami, które wpływają na ich funkcjonowanie w szkole.",
                    "en" => "Providing help to students in coping with stress, anxiety, emotional problems, and other difficulties affecting their functioning in school."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15063,
                "name" => json_encode([
                    "pl" => "Prowadzenie indywidualnych rozmów z uczniami, pomaganie w rozwiązywaniu problemów osobistych i w rozwijaniu odporności emocjonalnej.",
                    "en" => "Conducting individual conversations with students, helping them solve personal problems and develop emotional resilience."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15064,
                "name" => json_encode([
                    "pl" => "Wsparcie uczniów w wyborze ścieżki edukacyjnej i zawodowej, pomoc w rozpoznaniu ich zainteresowań, mocnych stron i predyspozycji.",
                    "en" => "Supporting students in choosing their educational and career paths, helping them recognize their interests, strengths, and aptitudes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15065,
                "name" => json_encode([
                    "pl" => "Organizowanie warsztatów i spotkań dotyczących wyboru szkoły, kierunków studiów oraz przygotowania do podjęcia pracy zawodowej.",
                    "en" => "Organizing workshops and meetings regarding school choice, fields of study, and preparation for entering the workforce."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15066,
                "name" => json_encode([
                    "pl" => "Organizowanie spotkań z rodzicami w celu omawiania postępów, trudności i potrzeb uczniów.",
                    "en" => "Organizing meetings with parents to discuss students' progress, difficulties, and needs."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15067,
                "name" => json_encode([
                    "pl" => "Udzielanie wsparcia i porad rodzicom w zakresie rozwoju emocjonalnego i społecznego ich dzieci, pomoc w rozwiązywaniu problemów wychowawczych.",
                    "en" => "Providing support and advice to parents on the emotional and social development of their children, assisting with parenting issues."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15068,
                "name" => json_encode([
                    "pl" => "Wspieranie wychowawców i nauczycieli w rozwiązywaniu problemów wychowawczych, organizowanie spotkań zespołów wychowawczych.",
                    "en" => "Supporting class teachers and educators in resolving behavioral issues, organizing meetings of educational teams."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15069,
                "name" => json_encode([
                    "pl" => "Konsultowanie się z nauczycielami na temat metod pracy z uczniami o specjalnych potrzebach edukacyjnych oraz w sytuacjach trudnych.",
                    "en" => "Consulting with teachers on methods of working with students with special educational needs and in difficult situations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15070,
                "name" => json_encode([
                    "pl" => "Opracowywanie i wdrażanie programów profilaktycznych dotyczących przemocy, uzależnień, agresji, zachowań ryzykownych oraz promocji zdrowia psychicznego.",
                    "en" => "Developing and implementing preventive programs regarding violence, addiction, aggression, risky behaviors, and promoting mental health."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15071,
                "name" => json_encode([
                    "pl" => "Organizowanie warsztatów i zajęć profilaktycznych, które wspierają uczniów w radzeniu sobie z trudnymi sytuacjami i w podejmowaniu odpowiedzialnych decyzji.",
                    "en" => "Organizing workshops and preventive activities that support students in dealing with difficult situations and making responsible decisions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15072,
                "name" => json_encode([
                    "pl" => "Podejmowanie działań interwencyjnych w przypadkach sytuacji kryzysowych, takich jak przemoc rówieśnicza, problemy rodzinne, sytuacje zagrażające zdrowiu lub życiu ucznia.",
                    "en" => "Taking intervention actions in crisis situations, such as peer violence, family problems, situations threatening the student's health or life."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15073,
                "name" => json_encode([
                    "pl" => "Organizowanie wsparcia psychologicznego oraz współpraca z odpowiednimi instytucjami, np. policją, sądami, ośrodkami pomocy społecznej.",
                    "en" => "Organizing psychological support and collaborating with relevant institutions, such as the police, courts, and social welfare centers."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15074,
                "name" => json_encode([
                    "pl" => "Pomoc uczniom z niepełnosprawnościami, zaburzeniami emocjonalnymi, trudnościami w nauce i innymi specjalnymi potrzebami w adaptacji i integracji w szkole.",
                    "en" => "Helping students with disabilities, emotional disorders, learning difficulties, and other special needs with adaptation and integration in school."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15075,
                "name" => json_encode([
                    "pl" => "Współpraca z nauczycielami w dostosowywaniu metod pracy do potrzeb uczniów ze SPE.",
                    "en" => "Collaboration with teachers to adjust working methods to the needs of students with special educational needs (SEN)."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15076,
                "name" => json_encode([
                    "pl" => "Organizowanie zajęć, które rozwijają umiejętności komunikacyjne, radzenia sobie z konfliktami, współpracy i pracy w zespole.",
                    "en" => "Organizing activities that develop communication skills, conflict resolution, cooperation, and teamwork."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15077,
                "name" => json_encode([
                    "pl" => "Nauczanie uczniów odpowiedzialności, empatii, radzenia sobie z emocjami i podejmowania konstruktywnych działań.",
                    "en" => "Teaching students responsibility, empathy, emotional regulation, and taking constructive actions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15078,
                "name" => json_encode([
                    "pl" => "Nawiązywanie kontaktów i współpraca z instytucjami wspierającymi, takimi jak poradnie psychologiczno-pedagogiczne, ośrodki pomocy społecznej, policja.",
                    "en" => "Establishing contacts and collaborating with supporting institutions, such as psychological-pedagogical counseling centers, social welfare centers, and the police."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],



            [
                "id" => 15079,
                "name" => json_encode([
                    "pl" => "Organizowanie wspólnych działań, które wspierają wychowanie i bezpieczeństwo uczniów.",
                    "en" => "Organizing joint actions that support student upbringing and safety."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15080,
                "name" => json_encode([
                    "pl" => "Dokumentowanie działań podejmowanych w celu wsparcia uczniów, ich postępów i trudności oraz sporządzanie raportów dla dyrekcji i instytucji współpracujących.",
                    "en" => "Documenting actions taken to support students, their progress, and difficulties, and preparing reports for the management and collaborating institutions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15081,
                "name" => json_encode([
                    "pl" => "Prowadzenie dokumentacji związanej z indywidualnymi przypadkami, która jest niezbędna do planowania dalszych działań.",
                    "en" => "Maintaining documentation related to individual cases, necessary for planning further actions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15082,
                "name" => json_encode([
                    "pl" => "Udzielanie pomocy uczniom w sytuacjach, gdy ich prawa są naruszane, np. w sytuacjach przemocy, dyskryminacji lub nierównego traktowania.",
                    "en" => "Providing assistance to students when their rights are violated, e.g., in cases of violence, discrimination, or unequal treatment."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15083,
                "name" => json_encode([
                    "pl" => "Informowanie uczniów o ich prawach oraz promowanie postaw szacunku i odpowiedzialności wśród całej społeczności szkolnej.",
                    "en" => "Informing students about their rights and promoting attitudes of respect and responsibility within the entire school community."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15084,
                "name" => json_encode([
                    "pl" => "Organizowanie programów, które promują zdrowie psychiczne, uczą radzenia sobie ze stresem, regulacji emocji i budowania odporności psychicznej.",
                    "en" => "Organizing programs that promote mental health, teach stress management, emotional regulation, and building mental resilience."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15085,
                "name" => json_encode([
                    "pl" => "Wspieranie uczniów w rozwoju pozytywnego podejścia do siebie i otoczenia.",
                    "en" => "Supporting students in developing a positive attitude toward themselves and their surroundings."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15086,
                "name" => json_encode([
                    "pl" => "Organizowanie zajęć profilaktycznych dotyczących uzależnień od substancji psychoaktywnych, uzależnień behawioralnych oraz wpływu mediów na zdrowie psychiczne.",
                    "en" => "Organizing preventive activities concerning addiction to psychoactive substances, behavioral addictions, and the influence of media on mental health."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15087,
                "name" => json_encode([
                    "pl" => "Uświadamianie uczniów o zagrożeniach związanych z uzależnieniami oraz promowanie zdrowego stylu życia.",
                    "en" => "Raising awareness among students about the dangers of addiction and promoting a healthy lifestyle."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15088,
                "name" => json_encode([
                    "pl" => "Diagnozowanie przypadków przemocy, agresji, mobbingu oraz podejmowanie działań mających na celu ich wyeliminowanie.",
                    "en" => "Diagnosing cases of violence, aggression, bullying, and taking actions to eliminate them."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15089,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie zajęć wychowawczych, które uczą radzenia sobie z agresją oraz rozwiązywania konfliktów w sposób konstruktywny.",
                    "en" => "Conducting educational classes that teach how to deal with aggression and resolve conflicts constructively."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15090,
                "name" => json_encode([
                    "pl" => "Nauczanie uczniów technik radzenia sobie z napięciem, stresem i trudnymi emocjami.",
                    "en" => "Teaching students techniques for managing tension, stress, and difficult emotions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15091,
                "name" => json_encode([
                    "pl" => "Organizowanie warsztatów relaksacyjnych oraz zajęć z zakresu samoregulacji, które wspierają zdrowie emocjonalne uczniów.",
                    "en" => "Organizing relaxation workshops and self-regulation activities that support students' emotional health."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15092,
                "name" => json_encode([
                    "pl" => "Stałe rozwijanie kompetencji zawodowych poprzez udział w kursach, szkoleniach i konferencjach dotyczących pracy z dziećmi i młodzieżą.",
                    "en" => "Constantly developing professional competencies through participation in courses, training, and conferences related to working with children and youth."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15093,
                "name" => json_encode([
                    "pl" => "Śledzenie najnowszych badań i trendów w dziedzinie pedagogiki, psychologii oraz profilaktyki szkolnej.",
                    "en" => "Monitoring the latest research and trends in pedagogy, psychology, and school prevention."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15094,
                "name" => json_encode([
                    "pl" => "Sporządzanie opinii o uczniach na potrzeby poradni psychologiczno-pedagogicznych, sądów, ośrodków pomocy społecznej.",
                    "en" => "Preparing opinions about students for the needs of psychological-pedagogical counseling, courts, and social welfare centers."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15095,
                "name" => json_encode([
                    "pl" => "Dokumentowanie postępów ucznia oraz rekomendacji dotyczących dalszego wsparcia.",
                    "en" => "Documenting students' progress and recommendations for further support."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15096,
                "name" => json_encode([
                    "pl" => "Planowanie i prowadzenie zajęć wyrównawczych, które wspierają uczniów w pokonywaniu trudności edukacyjnych i społecznych.",
                    "en" => "Planning and conducting remedial classes that support students in overcoming educational and social difficulties."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15097,
                "name" => json_encode([
                    "pl" => "Dostosowanie form i metod pracy do indywidualnych potrzeb uczniów ze specjalnymi potrzebami edukacyjnymi.",
                    "en" => "Adapting forms and methods of work to the individual needs of students with special educational needs."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15098,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie spotkań, na których omawiane są problemy i potrzeby uczniów, strategie wsparcia oraz plany działania.",
                    "en" => "Conducting meetings to discuss students' issues, needs, support strategies, and action plans."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15099,
                "name" => json_encode([
                    "pl" => "Współpraca z rodzicami i nauczycielami w celu budowania spójnego środowiska wsparcia dla dziecka.",
                    "en" => "Collaborating with parents and teachers to build a cohesive support environment for the child."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15100,
                "name" => json_encode([
                    "pl" => "Prowadzenie zajęć, które rozwijają umiejętności komunikacji, empatii, asertywności i pracy w grupie.",
                    "en" => "Conducting classes that develop communication, empathy, assertiveness, and teamwork skills."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15101,
                "name" => json_encode([
                    "pl" => "Wspieranie uczniów w budowaniu pozytywnych relacji z rówieśnikami oraz rozwijaniu umiejętności społecznych.",
                    "en" => "Supporting students in building positive relationships with peers and developing social skills."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15102,
                "name" => json_encode([
                    "pl" => "Prowadzenie warsztatów tematycznych, które wspierają rozwój osobisty uczniów, uczą odpowiedzialności oraz zdrowego podejścia do życia.",
                    "en" => "Conducting thematic workshops that support students' personal development, teach responsibility, and promote a healthy approach to life."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15103,
                "name" => json_encode([
                    "pl" => "Organizowanie zajęć z zakresu profilaktyki, które zwiększają świadomość uczniów na temat zdrowia psychicznego, relacji międzyludzkich i odpowiedzialności społecznej.",
                    "en" => "Organizing preventive classes that increase students' awareness about mental health, interpersonal relationships, and social responsibility."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15104,
                "name" => json_encode([
                    "pl" => "Wdrażanie działań promujących tolerancję, akceptację różnorodności oraz budowanie społeczności szkolnej opartej na wzajemnym szacunku.",
                    "en" => "Implementing activities promoting tolerance, acceptance of diversity, and building a school community based on mutual respect."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15105,
                "name" => json_encode([
                    "pl" => "Organizowanie inicjatyw, które wspierają integrację uczniów o różnych pochodzeniach, kulturach i umiejętnościach.",
                    "en" => "Organizing initiatives that support the integration of students from different backgrounds, cultures, and skills."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15106,
                "name" => json_encode([
                    "pl" => "Dbanie o poufność informacji związanych z uczniami i ich sytuacjami osobistymi.",
                    "en" => "Ensuring confidentiality of information related to students and their personal situations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15107,
                "name" => json_encode([
                    "pl" => "Przestrzeganie zasad etyki zawodowej, działanie w najlepszym interesie uczniów oraz dbanie o ich dobro.",
                    "en" => "Adhering to professional ethics, acting in the best interest of students, and ensuring their well-being."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]


        ];
        $nauczyciel_specjalista_terapii_pedagogicznej = [
            [
                "id" => 15108,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie szczegółowej diagnozy pedagogicznej, aby określić trudności uczniów, takie jak dysleksja, dysgrafia, dyskalkulia czy zaburzenia koncentracji.",
                    "en" => "Conducting detailed pedagogical diagnosis to identify students' difficulties, such as dyslexia, dysgraphia, dyscalculia, or concentration disorders."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15109,
                "name" => json_encode([
                    "pl" => "Współpraca z psychologami, logopedami, pedagogami i rodzicami w celu pełnego rozpoznania sytuacji ucznia.",
                    "en" => "Collaboration with psychologists, speech therapists, pedagogues, and parents to fully diagnose the student's situation."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15110,
                "name" => json_encode([
                    "pl" => "Opracowywanie indywidualnych programów terapii dostosowanych do specyficznych trudności i potrzeb ucznia, które wspierają jego rozwój edukacyjny i emocjonalny.",
                    "en" => "Developing individual therapy programs tailored to the specific difficulties and needs of the student, supporting their educational and emotional development."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15111,
                "name" => json_encode([
                    "pl" => "Regularna ewaluacja i modyfikacja programów terapeutycznych w zależności od postępów ucznia.",
                    "en" => "Regular evaluation and modification of therapeutic programs based on the student's progress."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15112,
                "name" => json_encode([
                    "pl" => "Realizowanie indywidualnych lub grupowych zajęć terapeutycznych, które pomagają uczniom przezwyciężać trudności w nauce i rozwijać ich potencjał.",
                    "en" => "Conducting individual or group therapeutic sessions to help students overcome learning difficulties and develop their potential."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15113,
                "name" => json_encode([
                    "pl" => "Wykorzystanie specjalistycznych metod i technik terapeutycznych, takich jak ćwiczenia pamięciowe, zabawy sensoryczne, techniki usprawniające koncentrację i percepcję wzrokowo-słuchową.",
                    "en" => "Using specialized therapeutic methods and techniques, such as memory exercises, sensory play, techniques improving concentration, and visual-auditory perception."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15114,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie ćwiczeń, które wspierają rozwój umiejętności szkolnych, takich jak czytanie ze zrozumieniem, poprawne pisanie i umiejętności matematyczne.",
                    "en" => "Conducting exercises that support the development of school skills, such as reading comprehension, correct writing, and mathematical skills."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15115,
                "name" => json_encode([
                    "pl" => "Korygowanie błędów i trudności, które występują w trakcie wykonywania zadań szkolnych, oraz wzmacnianie poprawnych nawyków.",
                    "en" => "Correcting errors and difficulties that occur during school tasks, and reinforcing correct habits."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15116,
                "name" => json_encode([
                    "pl" => "Prowadzenie ćwiczeń, które rozwijają umiejętności poznawcze, takie jak pamięć, logiczne myślenie, koncentracja oraz rozwiązywanie problemów.",
                    "en" => "Conducting exercises that develop cognitive skills such as memory, logical thinking, concentration, and problem-solving."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15117,
                "name" => json_encode([
                    "pl" => "Wykorzystywanie zadań dostosowanych do indywidualnych możliwości uczniów, które pozwalają na stopniowy rozwój umiejętności poznawczych.",
                    "en" => "Using tasks tailored to the individual abilities of students, allowing for the gradual development of cognitive skills."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15118,
                "name" => json_encode([
                    "pl" => "Dostosowywanie metod i form pracy do specyficznych potrzeb ucznia, takich jak tempo pracy, ilość powtórzeń, sposób prezentacji materiału.",
                    "en" => "Adapting methods and forms of work to the specific needs of the student, such as work pace, repetition frequency, and material presentation."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15119,
                "name" => json_encode([
                    "pl" => "Korzystanie z alternatywnych technik i narzędzi, które ułatwiają przyswajanie wiedzy i pomagają w pokonywaniu barier edukacyjnych.",
                    "en" => "Using alternative techniques and tools that facilitate knowledge acquisition and help overcome educational barriers."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15120,
                "name" => json_encode([
                    "pl" => "Systematyczne dokumentowanie postępów uczniów, prowadzenie arkuszy obserwacji, notatek z zajęć terapeutycznych oraz raportów dla rodziców i nauczycieli.",
                    "en" => "Systematically documenting student progress, maintaining observation sheets, notes from therapeutic sessions, and reports for parents and teachers."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15121,
                "name" => json_encode([
                    "pl" => "Regularne analizowanie wyników terapii oraz aktualizowanie programów terapeutycznych w zależności od efektów pracy z uczniem.",
                    "en" => "Regularly analyzing therapy results and updating therapeutic programs based on the effects of working with the student."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15122,
                "name" => json_encode([
                    "pl" => "Konsultacje z nauczycielami i specjalistami (np. psychologami, logopedami), aby dostosować działania terapeutyczne do programu nauczania i potrzeb ucznia.",
                    "en" => "Consultations with teachers and specialists (e.g., psychologists, speech therapists) to adjust therapeutic actions to the curriculum and student needs."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15123,
                "name" => json_encode([
                    "pl" => "Informowanie rodziców o postępach ich dziecka, udzielanie porad i wskazówek, które mogą pomóc w pracy z dzieckiem w domu.",
                    "en" => "Informing parents about their child's progress, providing advice and tips that may help in working with the child at home."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15124,
                "name" => json_encode([
                    "pl" => "Wspieranie ucznia w budowaniu pozytywnego obrazu siebie, poczucia własnej wartości oraz radzenia sobie z emocjami.",
                    "en" => "Supporting the student in building a positive self-image, self-esteem, and coping with emotions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15125,
                "name" => json_encode([
                    "pl" => "Nauczanie ucznia umiejętności społecznych, takich jak współpraca, komunikacja i asertywność, które pomagają w funkcjonowaniu w grupie.",
                    "en" => "Teaching the student social skills, such as cooperation, communication, and assertiveness, that help in functioning within a group."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15126,
                "name" => json_encode([
                    "pl" => "Wdrażanie ćwiczeń sensorycznych, które wspierają uczniów z trudnościami sensorycznymi, pomagając im lepiej funkcjonować w środowisku szkolnym.",
                    "en" => "Implementing sensory exercises that support students with sensory difficulties, helping them function better in the school environment."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15127,
                "name" => json_encode([
                    "pl" => "Stosowanie narzędzi i technik, które pomagają uczniom regulować reakcje na bodźce zmysłowe i integrują ich doświadczenia sensoryczne.",
                    "en" => "Using tools and techniques that help students regulate responses to sensory stimuli and integrate their sensory experiences."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15128,
                "name" => json_encode([
                    "pl" => "Prowadzenie ćwiczeń, które wspierają rozwój małej i dużej motoryki, takich jak ćwiczenia manualne, grafomotoryczne oraz zabawy ruchowe.",
                    "en" => "Conducting exercises that support the development of fine and gross motor skills, such as manual, graphomotor, and movement games."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15129,
                "name" => json_encode([
                    "pl" => "Wykorzystanie narzędzi, które rozwijają sprawność manualną, poprawiają koordynację i precyzję ruchów.",
                    "en" => "Using tools that develop manual dexterity, improve coordination, and precision of movements."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15130,
                "name" => json_encode([
                    "pl" => "Wdrażanie ćwiczeń poprawiających zdolność koncentracji i utrzymywania uwagi na zadaniach, takich jak gry logiczne, zadania pamięciowe.",
                    "en" => "Implementing exercises that improve concentration and the ability to maintain attention on tasks, such as logic games, memory tasks."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15131,
                "name" => json_encode([
                    "pl" => "Stosowanie technik usprawniających samokontrolę i zdolność do skupienia się na zadaniu przez dłuższy czas.",
                    "en" => "Using techniques that improve self-control and the ability to focus on a task for a longer period."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15132,
                "name" => json_encode([
                    "pl" => "Zachęcanie uczniów do podejmowania wysiłku w pracy nad swoimi trudnościami oraz wspieranie ich w przezwyciężaniu lęku przed niepowodzeniami.",
                    "en" => "Encouraging students to make an effort in working on their difficulties and supporting them in overcoming the fear of failure."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15133,
                "name" => json_encode([
                    "pl" => "Budowanie poczucia sukcesu i pozytywnego nastawienia do nauki poprzez regularne udzielanie pochwał i konstruktywnej informacji zwrotnej.",
                    "en" => "Building a sense of success and a positive attitude towards learning through regular praise and constructive feedback."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15134,
                "name" => json_encode([
                    "pl" => "Nauczanie uczniów technik radzenia sobie ze stresem, frustracją i innymi trudnymi emocjami, które mogą towarzyszyć trudnościom w nauce.",
                    "en" => "Teaching students techniques for coping with stress, frustration, and other difficult emotions that may accompany learning difficulties."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15135,
                "name" => json_encode([
                    "pl" => "Pomoc uczniom w rozwijaniu odporności psychicznej oraz w budowaniu umiejętności samoregulacji emocjonalnej.",
                    "en" => "Helping students develop mental resilience and build emotional self-regulation skills."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15136,
                "name" => json_encode([
                    "pl" => "Praca nad integracją ucznia w środowisku klasy oraz rozwijanie umiejętności społecznych, które ułatwiają współpracę z rówieśnikami.",
                    "en" => "Working on integrating the student into the class environment and developing social skills that facilitate cooperation with peers."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15137,
                "name" => json_encode([
                    "pl" => "Wspieranie ucznia w rozumieniu i przestrzeganiu zasad panujących w klasie oraz w budowaniu pozytywnych relacji z nauczycielami i kolegami.",
                    "en" => "Supporting the student in understanding and following classroom rules, as well as building positive relationships with teachers and peers."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15138,
                "name" => json_encode([
                    "pl" => "Nauczanie uczniów skutecznych metod nauki, takich jak robienie notatek, organizowanie materiału oraz planowanie czasu na naukę.",
                    "en" => "Teaching students effective learning methods, such as note-taking, organizing material, and planning study time."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15139,
                "name" => json_encode([
                    "pl" => "Wdrażanie technik, które wspierają samodzielność i organizację pracy, aby uczniowie mogli lepiej radzić sobie z wymaganiami szkolnymi.",
                    "en" => "Implementing techniques that support independence and work organization, so that students can better cope with school demands."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15140,
                "name" => json_encode([
                    "pl" => "Praca z uczniami z zaburzeniami rozwojowymi, takimi jak autyzm, ADHD, zaburzenia przetwarzania sensorycznego, w celu dostosowania metod pracy i programów terapeutycznych do ich potrzeb.",
                    "en" => "Working with students with developmental disorders, such as autism, ADHD, sensory processing disorders, to adjust work methods and therapeutic programs to their needs."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15141,
                "name" => json_encode([
                    "pl" => "Stosowanie specjalistycznych technik, które pomagają uczniom z zaburzeniami w funkcjonowaniu w środowisku szkolnym.",
                    "en" => "Using specialized techniques that help students with disorders function better in the school environment."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15142,
                "name" => json_encode([
                    "pl" => "Przygotowanie lub adaptacja materiałów dydaktycznych, które odpowiadają możliwościom i poziomowi rozwoju ucznia.",
                    "en" => "Preparing or adapting teaching materials that match the student's abilities and developmental level."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15143,
                "name" => json_encode([
                    "pl" => "Korzystanie z narzędzi multimedialnych, interaktywnych ćwiczeń, które wzbogacają proces terapeutyczny i ułatwiają uczniom przyswajanie wiedzy.",
                    "en" => "Using multimedia tools, interactive exercises that enrich the therapeutic process and facilitate knowledge acquisition for students."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15144,
                "name" => json_encode([
                    "pl" => "Wspieranie uczniów w rozwijaniu umiejętności potrzebnych na dalszych etapach edukacji, takich jak samodzielność, wytrwałość i elastyczność w uczeniu się.",
                    "en" => "Supporting students in developing skills needed for further stages of education, such as independence, perseverance, and flexibility in learning."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15145,
                "name" => json_encode([
                    "pl" => "Pomoc uczniom w rozwoju umiejętności, które pozwolą im odnosić sukcesy w szkole i radzić sobie z nowymi wyzwaniami.",
                    "en" => "Helping students develop skills that will allow them to succeed in school and cope with new challenges."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15146,
                "name" => json_encode([
                    "pl" => "Organizowanie spotkań z rodzicami, udzielanie porad oraz przedstawianie technik wspierających dziecko w domu.",
                    "en" => "Organizing meetings with parents, providing advice, and presenting techniques to support the child at home."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15147,
                "name" => json_encode([
                    "pl" => "Informowanie rodziców o postępach dziecka oraz udzielanie wskazówek dotyczących pracy nad trudnościami edukacyjnymi i rozwojowymi w codziennym życiu.",
                    "en" => "Informing parents about the child's progress and providing guidance on working through educational and developmental difficulties in daily life."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15148,
                "name" => json_encode([
                    "pl" => "Zachowanie poufności i przestrzeganie zasad etyki w pracy z uczniami, rodzicami i nauczycielami.",
                    "en" => "Maintaining confidentiality and adhering to ethical principles while working with students, parents, and teachers."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15149,
                "name" => json_encode([
                    "pl" => "Praca na rzecz dobra ucznia, dbając o jego rozwój edukacyjny i emocjonalny w atmosferze akceptacji i wsparcia.",
                    "en" => "Working for the well-being of the student, taking care of their educational and emotional development in an atmosphere of acceptance and support."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15150,
                "name" => json_encode([
                    "pl" => "Stałe rozwijanie kompetencji zawodowych poprzez udział w kursach, warsztatach i konferencjach dotyczących terapii pedagogicznej.",
                    "en" => "Constantly developing professional competencies by attending courses, workshops, and conferences related to pedagogical therapy."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15151,
                "name" => json_encode([
                    "pl" => "Śledzenie nowości w dziedzinie pedagogiki specjalnej, psychologii oraz terapii, aby skutecznie wspierać uczniów w ich rozwoju.",
                    "en" => "Tracking new developments in the fields of special education, psychology, and therapy to effectively support students in their development."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15152,
                "name" => json_encode([
                    "pl" => "Współpraca z poradniami psychologiczno-pedagogicznymi, ośrodkami wsparcia oraz innymi instytucjami, które mogą pomóc uczniowi i jego rodzinie.",
                    "en" => "Collaboration with psychological-pedagogical counseling centers, support centers, and other institutions that can assist the student and their family."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15153,
                "name" => json_encode([
                    "pl" => "Konsultowanie przypadków i dostosowywanie działań terapeutycznych do zaleceń specjalistów.",
                    "en" => "Consulting cases and adjusting therapeutic actions to specialists' recommendations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15154,
                "name" => json_encode([
                    "pl" => "Organizowanie zajęć terapeutycznych w małych grupach, które pozwalają uczniom rozwijać umiejętności w środowisku rówieśniczym.",
                    "en" => "Organizing therapeutic sessions in small groups, allowing students to develop skills in a peer environment."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15155,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie ćwiczeń grupowych, które rozwijają kompetencje społeczne, uczą współpracy i wzmacniają integrację.",
                    "en" => "Conducting group exercises that develop social skills, teach cooperation, and strengthen integration."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]

        ];
        $PEDAGOG_ANIMACJI_KULTURALNEJ = [
            [
                "id" => 15156,
                "name" => json_encode([
                    "pl" => "Analiza zainteresowań, potrzeb i preferencji grupy docelowej (dzieci, młodzież, dorośli, seniorzy) w celu dopasowania programu animacyjnego do ich oczekiwań.",
                    "en" => "Analyzing the interests, needs, and preferences of the target group (children, youth, adults, seniors) to tailor the animation program to their expectations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15157,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie konsultacji i ankiet w lokalnej społeczności, aby określić zainteresowania i potrzeby kulturalne.",
                    "en" => "Conducting consultations and surveys in the local community to determine cultural interests and needs."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15158,
                "name" => json_encode([
                    "pl" => "Opracowywanie programów i planów zajęć, warsztatów, wydarzeń artystycznych i kulturalnych dostosowanych do danej grupy odbiorców.",
                    "en" => "Developing programs and plans for activities, workshops, artistic and cultural events tailored to the specific target group."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15159,
                "name" => json_encode([
                    "pl" => "Dostosowanie programów do możliwości i oczekiwań uczestników, uwzględniając różne formy artystyczne, takie jak teatr, muzyka, taniec, sztuki wizualne.",
                    "en" => "Adapting programs to the participants' abilities and expectations, considering various artistic forms such as theater, music, dance, visual arts."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15160,
                "name" => json_encode([
                    "pl" => "Prowadzenie warsztatów z zakresu różnych form sztuki i aktywności kulturalnej, np. warsztatów teatralnych, plastycznych, tanecznych, muzycznych.",
                    "en" => "Conducting workshops in various forms of art and cultural activities, e.g., theater, visual arts, dance, music workshops."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15161,
                "name" => json_encode([
                    "pl" => "Angażowanie uczestników w zajęcia praktyczne, które rozwijają ich umiejętności artystyczne i kreatywność.",
                    "en" => "Engaging participants in practical activities that develop their artistic skills and creativity."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15162,
                "name" => json_encode([
                    "pl" => "Organizowanie wydarzeń kulturalnych, takich jak koncerty, spektakle, wystawy, które mają na celu popularyzację kultury i sztuki.",
                    "en" => "Organizing cultural events such as concerts, performances, and exhibitions aimed at popularizing culture and art."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15163,
                "name" => json_encode([
                    "pl" => "Współpraca z lokalnymi instytucjami kultury, galeriami, teatrami, aby wzbogacić ofertę kulturalną dla społeczności.",
                    "en" => "Collaborating with local cultural institutions, galleries, theaters to enrich the cultural offer for the community."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15164,
                "name" => json_encode([
                    "pl" => "Motywowanie uczestników do twórczego wyrażania siebie, wspieranie ich w odkrywaniu i rozwijaniu talentów artystycznych.",
                    "en" => "Motivating participants to express themselves creatively, supporting them in discovering and developing their artistic talents."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15165,
                "name" => json_encode([
                    "pl" => "Budowanie środowiska, które sprzyja kreatywności, inspiruje do eksperymentowania i wyrażania własnych pomysłów.",
                    "en" => "Creating an environment that fosters creativity, inspires experimentation, and encourages self-expression of ideas."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15166,
                "name" => json_encode([
                    "pl" => "Prowadzenie zajęć edukacyjnych, które wprowadzają uczestników w historię i teorię sztuki oraz uczą rozumienia różnych form artystycznych.",
                    "en" => "Conducting educational activities that introduce participants to the history and theory of art and teach the understanding of various artistic forms."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15167,
                "name" => json_encode([
                    "pl" => "Organizowanie wykładów, prelekcji, spotkań z artystami, które wzbogacają wiedzę o kulturze i sztuce.",
                    "en" => "Organizing lectures, talks, meetings with artists that enrich knowledge about culture and art."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15168,
                "name" => json_encode([
                    "pl" => "Organizowanie projektów i wydarzeń, które sprzyjają integracji grup społecznych, np. dzieci, młodzieży, seniorów, osób z niepełnosprawnościami.",
                    "en" => "Organizing projects and events that promote the integration of social groups, such as children, youth, seniors, and people with disabilities."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15169,
                "name" => json_encode([
                    "pl" => "Tworzenie przestrzeni, gdzie uczestnicy mogą budować relacje, rozwijać umiejętności społeczne i uczestniczyć w życiu społeczności.",
                    "en" => "Creating spaces where participants can build relationships, develop social skills, and engage in community life."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15170,
                "name" => json_encode([
                    "pl" => "Tworzenie koncepcji projektów artystycznych oraz prowadzenie ich realizacji od etapu planowania do wdrożenia.",
                    "en" => "Creating concepts for artistic projects and managing their execution from planning to implementation."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15171,
                "name" => json_encode([
                    "pl" => "Udział w przygotowaniu scenariuszy, scenografii, rekwizytów, choreografii i oprawy muzycznej dla wydarzeń artystycznych.",
                    "en" => "Participating in the preparation of scripts, scenery, props, choreography, and musical arrangements for artistic events."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15172,
                "name" => json_encode([
                    "pl" => "Organizacja i aranżacja przestrzeni, która sprzyja kreatywności i komfortowi uczestników zajęć.",
                    "en" => "Organizing and arranging spaces that foster creativity and comfort for participants."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15173,
                "name" => json_encode([
                    "pl" => "Zapewnienie odpowiednich materiałów i narzędzi niezbędnych do prowadzenia zajęć, takich jak przybory artystyczne, instrumenty muzyczne, sprzęt multimedialny.",
                    "en" => "Providing necessary materials and tools for conducting sessions, such as art supplies, musical instruments, multimedia equipment."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15174,
                "name" => json_encode([
                    "pl" => "Nawiązywanie współpracy z artystami, muzykami, plastykami, tancerzami oraz innymi animatorami kultury, aby wzbogacić ofertę edukacyjno-artystyczną.",
                    "en" => "Establishing cooperation with artists, musicians, visual artists, dancers, and other cultural animators to enrich the educational and artistic offer."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15175,
                "name" => json_encode([
                    "pl" => "Zapraszanie gości specjalnych na warsztaty i wydarzenia, aby inspirować uczestników i wprowadzać ich w świat sztuki.",
                    "en" => "Inviting special guests to workshops and events to inspire participants and introduce them to the world of art."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15176,
                "name" => json_encode([
                    "pl" => "Organizowanie wyjść do teatrów, muzeów, galerii, na koncerty i inne wydarzenia kulturalne, które wzbogacają doświadczenia uczestników.",
                    "en" => "Organizing trips to theaters, museums, galleries, concerts, and other cultural events that enrich participants' experiences."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15177,
                "name" => json_encode([
                    "pl" => "Organizacja wyjazdów, które umożliwiają uczestnikom poznanie różnych ośrodków kulturalnych i rozwijają ich wrażliwość artystyczną.",
                    "en" => "Organizing trips that allow participants to explore various cultural centers and develop their artistic sensitivity."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15178,
                "name" => json_encode([
                    "pl" => "Organizowanie wystaw, koncertów, pokazów, które prezentują efekty pracy twórczej uczestników.",
                    "en" => "Organizing exhibitions, concerts, and performances that showcase the creative work of participants."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15179,
                "name" => json_encode([
                    "pl" => "Zachęcanie uczestników do dzielenia się swoją twórczością z publicznością, co wspiera ich pewność siebie i motywuje do dalszej pracy.",
                    "en" => "Encouraging participants to share their creative work with the audience, which supports their self-confidence and motivates them to continue."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15180,
                "name" => json_encode([
                    "pl" => "Prowadzenie działań promocyjnych, takich jak tworzenie plakatów, ulotek, komunikatów w mediach społecznościowych, aby zwiększyć zasięg wydarzeń.",
                    "en" => "Conducting promotional activities such as creating posters, flyers, and social media posts to increase the reach of events."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15181,
                "name" => json_encode([
                    "pl" => "Współpraca z mediami lokalnymi i portalami informacyjnymi, aby przyciągnąć uczestników i promować wydarzenia kulturalne.",
                    "en" => "Collaborating with local media and news portals to attract participants and promote cultural events."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15182,
                "name" => json_encode([
                    "pl" => "Pisanie wniosków o dotacje, granty oraz pozyskiwanie sponsorów, aby finansować projekty i wydarzenia artystyczne.",
                    "en" => "Writing grant proposals and securing sponsors to fund artistic projects and events."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15183,
                "name" => json_encode([
                    "pl" => "Współpraca z organizacjami pozarządowymi, fundacjami i instytucjami, które mogą wspierać działania kulturalne.",
                    "en" => "Collaborating with non-governmental organizations, foundations, and institutions that can support cultural activities."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15184,
                "name" => json_encode([
                    "pl" => "Tworzenie i prowadzenie zajęć dostosowanych do osób z różnymi niepełnosprawnościami, w tym sensorycznymi, intelektualnymi, ruchowymi.",
                    "en" => "Creating and leading classes adapted for people with various disabilities, including sensory, intellectual, and physical disabilities."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15185,
                "name" => json_encode([
                    "pl" => "Organizowanie działań, które wspierają integrację uczestników o różnych możliwościach i potrzebach, rozwijając umiejętności społeczne i budując relacje.",
                    "en" => "Organizing activities that support the integration of participants with different abilities and needs, developing social skills and building relationships."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15186,
                "name" => json_encode([
                    "pl" => "Opracowywanie scenariuszy zajęć, kart pracy, materiałów edukacyjnych i pomocy dydaktycznych wykorzystywanych podczas warsztatów.",
                    "en" => "Developing lesson plans, worksheets, educational materials, and teaching aids used during workshops."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15187,
                "name" => json_encode([
                    "pl" => "Tworzenie narzędzi, które wspierają proces animacji, takich jak filmy instruktażowe, przewodniki po zajęciach i poradniki.",
                    "en" => "Creating tools that support the animation process, such as instructional videos, lesson guides, and handbooks."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15188,
                "name" => json_encode([
                    "pl" => "Zarządzanie harmonogramem wydarzeń, organizacja działań w ramach poszczególnych projektów, dbanie o logistykę i zasoby.",
                    "en" => "Managing event schedules, organizing activities within individual projects, taking care of logistics and resources."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15189,
                "name" => json_encode([
                    "pl" => "Planowanie budżetów projektów, monitorowanie kosztów i zapewnienie, że projekty realizowane są zgodnie z założeniami finansowymi.",
                    "en" => "Planning project budgets, monitoring costs, and ensuring that projects are carried out according to financial assumptions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15190,
                "name" => json_encode([
                    "pl" => "Dokumentowanie przebiegu zajęć, warsztatów i projektów, sporządzanie raportów i ewaluacji projektów kulturalnych.",
                    "en" => "Documenting the progress of classes, workshops, and projects, preparing reports and evaluations for cultural projects."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15191,
                "name" => json_encode([
                    "pl" => "Gromadzenie opinii uczestników, materiałów wizualnych oraz wyników, które służą do analizy efektywności działań.",
                    "en" => "Collecting participant feedback, visual materials, and outcomes, which serve for the analysis of the effectiveness of actions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15192,
                "name" => json_encode([
                    "pl" => "Organizowanie zajęć i wydarzeń, które promują różnorodność kulturową, uczą tolerancji i szacunku dla innych kultur.",
                    "en" => "Organizing activities and events that promote cultural diversity, teach tolerance, and respect for other cultures."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15193,
                "name" => json_encode([
                    "pl" => "Prowadzenie warsztatów dotyczących tradycji, obyczajów i kultur innych narodów, wspierających dialog międzykulturowy.",
                    "en" => "Conducting workshops on traditions, customs, and cultures of other nations, supporting intercultural dialogue."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15194,
                "name" => json_encode([
                    "pl" => "Stałe doskonalenie swoich kompetencji poprzez udział w kursach, warsztatach i konferencjach dotyczących animacji kulturalnej.",
                    "en" => "Constantly improving your skills by attending courses, workshops, and conferences related to cultural animation."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15195,
                "name" => json_encode([
                    "pl" => "Śledzenie trendów w dziedzinie kultury i edukacji artystycznej, aby wprowadzać nowe metody pracy i wzbogacać ofertę programową.",
                    "en" => "Tracking trends in culture and artistic education to introduce new working methods and enrich the program offer."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15196,
                "name" => json_encode([
                    "pl" => "Pomaganie uczestnikom w odkrywaniu własnej tożsamości kulturowej i w wyrażaniu jej poprzez różnorodne formy artystyczne.",
                    "en" => "Helping participants discover their cultural identity and express it through various artistic forms."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15197,
                "name" => json_encode([
                    "pl" => "Inspirowanie do twórczej ekspresji poprzez działania, które nawiązują do kultury lokalnej, tradycji i wartości wspólnoty.",
                    "en" => "Inspiring creative expression through actions that refer to local culture, traditions, and community values."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15198,
                "name" => json_encode([
                    "pl" => "Organizowanie spotkań i warsztatów, które sprzyjają budowaniu relacji między uczestnikami, integracji oraz wzmacnianiu poczucia przynależności.",
                    "en" => "Organizing meetings and workshops that foster building relationships between participants, integration, and strengthening the sense of belonging."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15199,
                "name" => json_encode([
                    "pl" => "Tworzenie przestrzeni do wymiany doświadczeń, współpracy i wspólnego działania, co sprzyja budowaniu więzi społecznych.",
                    "en" => "Creating spaces for exchanging experiences, cooperation, and joint actions, which foster building social bonds."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15200,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie ewaluacji projektów kulturalnych w celu oceny efektywności, satysfakcji uczestników i osiągnięcia zamierzonych celów.",
                    "en" => "Conducting evaluations of cultural projects to assess effectiveness, participant satisfaction, and the achievement of intended goals."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15201,
                "name" => json_encode([
                    "pl" => "Wyciąganie wniosków z przeprowadzonych działań i wykorzystywanie ich do usprawniania przyszłych projektów.",
                    "en" => "Drawing conclusions from conducted activities and using them to improve future projects."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15202,
                "name" => json_encode([
                    "pl" => "Zapewnienie atmosfery szacunku i akceptacji dla wszystkich uczestników zajęć, niezależnie od ich pochodzenia, wieku czy zdolności.",
                    "en" => "Ensuring an atmosphere of respect and acceptance for all participants in activities, regardless of their background, age, or abilities."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15203,
                "name" => json_encode([
                    "pl" => "Wspieranie uczestników w rozwoju, dbając o ich bezpieczeństwo emocjonalne, godność i komfort podczas zajęć.",
                    "en" => "Supporting participants in their development, ensuring their emotional safety, dignity, and comfort during activities."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]

        ];
        $ANDRAGOG = [
            [
                "id" => 15204,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie wywiadów, ankiet oraz analiz potrzeb dorosłych uczestników, aby poznać ich oczekiwania, cele edukacyjne i preferencje.",
                    "en" => "Conducting interviews, surveys, and needs analysis for adult participants to understand their expectations, educational goals, and preferences."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15205,
                "name" => json_encode([
                    "pl" => "Analiza motywacji, celów zawodowych i osobistych uczestników, co umożliwia dostosowanie programów edukacyjnych do ich potrzeb.",
                    "en" => "Analyzing participants' motivation, career, and personal goals to adjust educational programs to their needs."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15206,
                "name" => json_encode([
                    "pl" => "Opracowywanie programów nauczania, które uwzględniają potrzeby, tempo i styl uczenia się osób dorosłych.",
                    "en" => "Developing teaching programs that take into account the needs, pace, and learning styles of adult learners."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15207,
                "name" => json_encode([
                    "pl" => "Dostosowywanie treści i metod dydaktycznych do doświadczeń, wiedzy i oczekiwań dorosłych uczestników.",
                    "en" => "Adapting content and teaching methods to the experiences, knowledge, and expectations of adult participants."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15208,
                "name" => json_encode([
                    "pl" => "Prowadzenie wykładów, warsztatów, seminariów i kursów rozwijających kompetencje osobiste, zawodowe i społeczne.",
                    "en" => "Conducting lectures, workshops, seminars, and courses that develop personal, professional, and social skills."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15209,
                "name" => json_encode([
                    "pl" => "Stosowanie różnorodnych metod nauczania (np. dyskusje, case study, gry symulacyjne), które aktywizują i angażują dorosłych w proces uczenia się.",
                    "en" => "Using various teaching methods (e.g., discussions, case studies, role-playing games) that activate and engage adults in the learning process."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15210,
                "name" => json_encode([
                    "pl" => "Wspieranie dorosłych w rozwijaniu kompetencji samokształcenia, aby mogli zdobywać wiedzę i rozwijać umiejętności poza formalnym systemem edukacji.",
                    "en" => "Supporting adults in developing self-directed learning skills so they can acquire knowledge and develop skills outside the formal education system."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15211,
                "name" => json_encode([
                    "pl" => "Nauczanie technik uczenia się, organizacji czasu i zarządzania wiedzą, które zwiększają efektywność samodzielnego rozwoju.",
                    "en" => "Teaching learning techniques, time management, and knowledge management to increase the effectiveness of self-development."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15212,
                "name" => json_encode([
                    "pl" => "Inspirowanie uczestników do podejmowania nowych wyzwań, rozwijania swoich zainteresowań i doskonalenia kompetencji zawodowych.",
                    "en" => "Inspiring participants to take on new challenges, develop their interests, and enhance their professional skills."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15213,
                "name" => json_encode([
                    "pl" => "Stosowanie metod motywacyjnych, takich jak informacja zwrotna, wyznaczanie celów, które wspierają zaangażowanie dorosłych w proces edukacji.",
                    "en" => "Using motivational methods such as feedback and goal setting to support adult participants' engagement in the educational process."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15214,
                "name" => json_encode([
                    "pl" => "Wybór i dostosowanie metod nauczania, które odpowiadają doświadczeniom życiowym, stylom uczenia się oraz indywidualnym preferencjom dorosłych.",
                    "en" => "Selecting and adjusting teaching methods that align with adults' life experiences, learning styles, and individual preferences."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15215,
                "name" => json_encode([
                    "pl" => "Uwzględnianie różnic w tempie uczenia się, poziomie wiedzy i możliwościach fizycznych uczestników.",
                    "en" => "Considering differences in learning pace, knowledge levels, and physical abilities of participants."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15216,
                "name" => json_encode([
                    "pl" => "Udzielanie porad dotyczących ścieżki kariery, planowania rozwoju zawodowego oraz zdobywania nowych kwalifikacji.",
                    "en" => "Providing career advice, planning professional development, and acquiring new qualifications."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15217,
                "name" => json_encode([
                    "pl" => "Pomoc w identyfikacji mocnych stron i obszarów do rozwoju, aby uczestnicy mogli podejmować świadome decyzje zawodowe.",
                    "en" => "Helping participants identify their strengths and areas for development so they can make informed career decisions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15218,
                "name" => json_encode([
                    "pl" => "Prowadzenie zajęć i warsztatów, które rozwijają kompetencje społeczne, takie jak komunikacja, współpraca, rozwiązywanie konfliktów.",
                    "en" => "Conducting classes and workshops that develop social skills such as communication, collaboration, and conflict resolution."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15219,
                "name" => json_encode([
                    "pl" => "Wdrażanie ćwiczeń grupowych, które wspierają integrację, budowanie relacji oraz rozwijają umiejętność pracy zespołowej.",
                    "en" => "Implementing group exercises that support integration, relationship building, and teamwork skills development."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15220,
                "name" => json_encode([
                    "pl" => "Organizowanie praktycznych warsztatów, które umożliwiają uczestnikom zdobycie konkretnych umiejętności, np. w zakresie technologii, zarządzania czasem, przedsiębiorczości.",
                    "en" => "Organizing practical workshops that allow participants to gain specific skills, e.g., in technology, time management, entrepreneurship."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15221,
                "name" => json_encode([
                    "pl" => "Tworzenie sytuacji, które pozwalają dorosłym na praktyczne zastosowanie zdobywanej wiedzy.",
                    "en" => "Creating situations that allow adults to practically apply the knowledge they acquire."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15222,
                "name" => json_encode([
                    "pl" => "Zachęcanie dorosłych do ciągłego zdobywania wiedzy i rozwijania swoich kompetencji na każdym etapie życia.",
                    "en" => "Encouraging adults to continuously acquire knowledge and develop their skills at every stage of life."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15223,
                "name" => json_encode([
                    "pl" => "Organizowanie spotkań i wydarzeń, które promują ideę lifelong learning, inspirują do nauki oraz pokazują korzyści płynące z edukacji.",
                    "en" => "Organizing meetings and events that promote the idea of lifelong learning, inspire learning, and show the benefits of education."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15224,
                "name" => json_encode([
                    "pl" => "Nauczanie podstawowych umiejętności cyfrowych, takich jak obsługa komputera, korzystanie z internetu, pracy z aplikacjami, co jest kluczowe we współczesnym świecie.",
                    "en" => "Teaching basic digital skills such as computer operation, using the internet, and working with applications, which is crucial in today's world."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15225,
                "name" => json_encode([
                    "pl" => "Organizowanie warsztatów, które pomagają dorosłym w adaptacji do cyfrowych technologii oraz rozwijają ich kompetencje cyfrowe.",
                    "en" => "Organizing workshops that help adults adapt to digital technologies and develop their digital skills."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15226,
                "name" => json_encode([
                    "pl" => "Tworzenie materiałów dydaktycznych, takich jak skrypty, prezentacje, ćwiczenia, które ułatwiają dorosłym przyswajanie wiedzy.",
                    "en" => "Creating teaching materials such as scripts, presentations, and exercises that facilitate adults' learning."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15227,
                "name" => json_encode([
                    "pl" => "Dobór odpowiednich narzędzi i zasobów, które wspierają proces nauki oraz dostosowanie ich do specyfiki grupy.",
                    "en" => "Selecting appropriate tools and resources that support the learning process and adapting them to the group's characteristics."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15228,
                "name" => json_encode([
                    "pl" => "Monitorowanie postępów uczestników, prowadzenie testów, ćwiczeń, które pozwalają ocenić poziom opanowania materiału.",
                    "en" => "Monitoring participants' progress, conducting tests and exercises that allow assessing their mastery of the material."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15229,
                "name" => json_encode([
                    "pl" => "Udzielanie informacji zwrotnej, aby wspierać dorosłych w osiąganiu zamierzonych celów edukacyjnych i zawodowych.",
                    "en" => "Providing feedback to support adults in achieving their educational and professional goals."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15230,
                "name" => json_encode([
                    "pl" => "Tworzenie grup wsparcia dla dorosłych uczestników, które pozwalają na dzielenie się doświadczeniami, problemami oraz wspólne poszukiwanie rozwiązań.",
                    "en" => "Creating support groups for adult participants, which allow them to share experiences, problems, and work together to find solutions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15231,
                "name" => json_encode([
                    "pl" => "Moderowanie spotkań grup samopomocy, które umożliwiają dorosłym wzajemne wsparcie i dzielenie się wiedzą.",
                    "en" => "Moderating self-help group meetings that allow adults to provide mutual support and share knowledge."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15232,
                "name" => json_encode([
                    "pl" => "Wspieranie dorosłych w procesie autorefleksji oraz samooceny, aby mogli lepiej rozumieć swoje potrzeby, cele i osiągnięcia.",
                    "en" => "Supporting adults in the process of self-reflection and self-assessment so they can better understand their needs, goals, and achievements."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15233,
                "name" => json_encode([
                    "pl" => "Wdrażanie technik, które pomagają uczestnikom ocenić swoje umiejętności i wyznaczyć kierunki dalszego rozwoju.",
                    "en" => "Implementing techniques that help participants assess their skills and set directions for further development."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15234,
                "name" => json_encode([
                    "pl" => "Współpraca z ośrodkami szkoleniowymi, instytucjami kultury, bibliotekami i innymi placówkami wspierającymi edukację dorosłych.",
                    "en" => "Collaborating with training centers, cultural institutions, libraries, and other facilities supporting adult education."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15235,
                "name" => json_encode([
                    "pl" => "Organizowanie wspólnych projektów edukacyjnych i kulturalnych, które wzbogacają ofertę edukacyjną i sprzyjają integracji społecznej.",
                    "en" => "Organizing joint educational and cultural projects that enrich the educational offer and promote social integration."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15236,
                "name" => json_encode([
                    "pl" => "Organizowanie zajęć, które wspierają rozumienie różnorodności kulturowej oraz uczą tolerancji i szacunku wobec innych kultur.",
                    "en" => "Organizing activities that support understanding of cultural diversity and teach tolerance and respect for other cultures."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15237,
                "name" => json_encode([
                    "pl" => "Wspieranie uczestników w nabywaniu kompetencji międzykulturowych, które są istotne w zróżnicowanym społeczeństwie.",
                    "en" => "Supporting participants in acquiring intercultural competencies that are important in a diverse society."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15238,
                "name" => json_encode([
                    "pl" => "Stałe doskonalenie swoich kompetencji zawodowych poprzez uczestnictwo w szkoleniach, kursach i konferencjach związanych z edukacją dorosłych.",
                    "en" => "Constantly improving professional competencies by participating in training, courses, and conferences related to adult education."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15239,
                "name" => json_encode([
                    "pl" => "Śledzenie nowych trendów i metod w andragogice, aby zapewnić wysoką jakość nauczania.",
                    "en" => "Tracking new trends and methods in andragogy to ensure high-quality teaching."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15240,
                "name" => json_encode([
                    "pl" => "Dokumentowanie efektów zajęć, wypełnianie arkuszy obserwacyjnych i prowadzenie zapisów dotyczących uczestnictwa dorosłych w zajęciach.",
                    "en" => "Documenting the outcomes of activities, filling in observation sheets, and keeping records of adult participants' involvement."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15241,
                "name" => json_encode([
                    "pl" => "Sporządzanie raportów i analiz, które pozwalają na ocenę efektywności prowadzonych działań.",
                    "en" => "Preparing reports and analyses that allow the assessment of the effectiveness of conducted actions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15242,
                "name" => json_encode([
                    "pl" => "Organizowanie i aranżowanie sali dydaktycznej, która jest komfortowa i sprzyja koncentracji oraz interakcji między uczestnikami.",
                    "en" => "Organizing and arranging the classroom in a way that is comfortable and conducive to concentration and interaction between participants."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15243,
                "name" => json_encode([
                    "pl" => "Zapewnienie odpowiednich narzędzi, materiałów i technologii wspierających proces nauczania.",
                    "en" => "Providing the necessary tools, materials, and technology to support the teaching process."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15244,
                "name" => json_encode([
                    "pl" => "Nauczanie technik krytycznej analizy informacji, rozwiązywania problemów oraz umiejętności podejmowania decyzji.",
                    "en" => "Teaching techniques for critical analysis of information, problem-solving, and decision-making skills."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15245,
                "name" => json_encode([
                    "pl" => "Zachęcanie uczestników do samodzielnego myślenia, oceny sytuacji oraz refleksji nad prezentowanymi informacjami.",
                    "en" => "Encouraging participants to think independently, evaluate situations, and reflect on the presented information."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15246,
                "name" => json_encode([
                    "pl" => "Prowadzenie warsztatów z zakresu radzenia sobie ze stresem, rozwiązywania konfliktów oraz zarządzania emocjami.",
                    "en" => "Conducting workshops on stress management, conflict resolution, and emotional regulation."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15247,
                "name" => json_encode([
                    "pl" => "Wspieranie uczestników w rozwijaniu odporności psychicznej i umiejętności samoregulacji.",
                    "en" => "Supporting participants in developing mental resilience and self-regulation skills."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15248,
                "name" => json_encode([
                    "pl" => "Pomoc dorosłym w przystosowywaniu się do zmieniających się warunków na rynku pracy, trendów społecznych i technologicznych.",
                    "en" => "Helping adults adapt to changing conditions in the job market, social trends, and technological advancements."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15249,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie zajęć z zakresu doskonalenia zawodowego, które przygotowują uczestników do nowych wyzwań.",
                    "en" => "Conducting professional development sessions that prepare participants for new challenges."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15250,
                "name" => json_encode([
                    "pl" => "Dbanie o dobro uczestników, respektowanie ich prywatności oraz przestrzeganie zasad etyki zawodowej w pracy edukacyjnej.",
                    "en" => "Ensuring the well-being of participants, respecting their privacy, and adhering to professional ethics in educational work."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15251,
                "name" => json_encode([
                    "pl" => "Budowanie atmosfery zaufania i otwartości, która wspiera uczestników w rozwoju osobistym i zawodowym.",
                    "en" => "Building an atmosphere of trust and openness that supports participants in personal and professional development."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15252,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie oceny efektywności metod nauczania i programów edukacyjnych w celu ich optymalizacji.",
                    "en" => "Evaluating the effectiveness of teaching methods and educational programs to optimize them."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15253,
                "name" => json_encode([
                    "pl" => "Organizowanie wydarzeń, które promują współpracę, wymianę wiedzy i doświadczeń między uczestnikami.",
                    "en" => "Organizing events that promote collaboration, knowledge sharing, and exchange of experiences among participants."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15254,
                "name" => json_encode([
                    "pl" => "Dostosowanie materiałów edukacyjnych do różnych grup wiekowych i poziomów doświadczenia uczestników.",
                    "en" => "Adapting educational materials to different age groups and levels of participants' experience."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15255,
                "name" => json_encode([
                    "pl" => "Zarządzanie i nadzorowanie procesów edukacyjnych w różnych formach, takich jak e-learning, nauczanie stacjonarne, kursy online.",
                    "en" => "Managing and overseeing educational processes in various formats such as e-learning, in-person teaching, and online courses."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15256,
                "name" => json_encode([
                    "pl" => "Udzielanie wsparcia dorosłym uczestnikom w opracowywaniu indywidualnych planów rozwoju zawodowego i osobistego.",
                    "en" => "Providing support to adult participants in developing individual professional and personal development plans."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]

        ];
        $PEDAGOG_SPECJALNY =[
            [
                "id" => 15257,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie diagnozy funkcjonalnej, aby zrozumieć potrzeby edukacyjne i możliwości ucznia, z uwzględnieniem jego trudności i mocnych stron.",
                    "en" => "Conducting functional assessments to understand the educational needs and abilities of the student, considering their difficulties and strengths."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15258,
                "name" => json_encode([
                    "pl" => "Współpraca z psychologami, terapeutami, lekarzami i rodzicami w celu kompleksowego poznania sytuacji ucznia.",
                    "en" => "Collaborating with psychologists, therapists, doctors, and parents to fully understand the student's situation."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15259,
                "name" => json_encode([
                    "pl" => "Opracowywanie indywidualnych planów dostosowanych do możliwości ucznia, obejmujących cele edukacyjne, rozwojowe i terapeutyczne.",
                    "en" => "Developing individualized plans tailored to the student's abilities, covering educational, developmental, and therapeutic goals."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15260,
                "name" => json_encode([
                    "pl" => "Regularna ocena i modyfikacja IPET w zależności od postępów i zmieniających się potrzeb ucznia.",
                    "en" => "Regular assessment and modification of the Individual Educational and Therapeutic Program (IPET) based on the student's progress and changing needs."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15261,
                "name" => json_encode([
                    "pl" => "Wybór i modyfikacja metod dydaktycznych, które odpowiadają indywidualnym potrzebom, ograniczeniom i stylowi uczenia się ucznia.",
                    "en" => "Choosing and modifying teaching methods that suit the student's individual needs, limitations, and learning style."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15262,
                "name" => json_encode([
                    "pl" => "Stosowanie różnorodnych pomocy dydaktycznych, technologii wspierających i materiałów dostosowanych do specyficznych potrzeb ucznia.",
                    "en" => "Using various teaching aids, assistive technologies, and materials tailored to the specific needs of the student."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15263,
                "name" => json_encode([
                    "pl" => "Realizowanie zajęć indywidualnych i grupowych, które wspierają rozwój poznawczy, społeczny, emocjonalny i ruchowy ucznia.",
                    "en" => "Conducting individual and group sessions that support the student's cognitive, social, emotional, and motor development."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15264,
                "name" => json_encode([
                    "pl" => "Prowadzenie ćwiczeń specjalistycznych, takich jak trening umiejętności społecznych, rozwijanie zdolności manualnych, ćwiczenia koncentracji i pamięci.",
                    "en" => "Conducting specialized exercises such as social skills training, developing manual skills, concentration, and memory exercises."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15265,
                "name" => json_encode([
                    "pl" => "Wdrażanie systemów komunikacji wspomagającej, takich jak piktogramy, język migowy, tablice komunikacyjne, aby umożliwić uczniom wyrażanie myśli i potrzeb.",
                    "en" => "Implementing augmentative communication systems, such as pictograms, sign language, and communication boards, to allow students to express their thoughts and needs."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15266,
                "name" => json_encode([
                    "pl" => "Nauczanie uczniów metod komunikacji alternatywnej, które wspierają ich samodzielność w porozumiewaniu się z otoczeniem.",
                    "en" => "Teaching students alternative communication methods that support their independence in communicating with others."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15267,
                "name" => json_encode([
                    "pl" => "Prowadzenie ćwiczeń, które pomagają uczniowi w rozumieniu i wyrażaniu emocji, budowaniu poczucia własnej wartości i radzeniu sobie ze stresem.",
                    "en" => "Conducting exercises that help the student understand and express emotions, build self-esteem, and cope with stress."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15268,
                "name" => json_encode([
                    "pl" => "Nauczanie umiejętności społecznych, takich jak współpraca, komunikacja, rozwiązywanie konfliktów, które są niezbędne do funkcjonowania w grupie.",
                    "en" => "Teaching social skills such as cooperation, communication, and conflict resolution, which are essential for functioning in a group."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15269,
                "name" => json_encode([
                    "pl" => "Nauczanie podstawowych umiejętności życiowych, takich jak ubieranie się, higiena, przygotowywanie posiłków, które zwiększają samodzielność ucznia.",
                    "en" => "Teaching basic life skills such as dressing, hygiene, meal preparation, which increase the student's independence."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15270,
                "name" => json_encode([
                    "pl" => "Wdrażanie ćwiczeń, które pozwalają uczniowi stopniowo nabywać umiejętności potrzebne w codziennym życiu.",
                    "en" => "Implementing exercises that allow the student to gradually acquire skills needed for daily life."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15271,
                "name" => json_encode([
                    "pl" => "Prowadzenie ćwiczeń motorycznych dostosowanych do możliwości ucznia, które rozwijają koordynację, sprawność ruchową i zdolności manualne.",
                    "en" => "Conducting motor exercises adapted to the student's abilities, which develop coordination, physical fitness, and manual skills."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15272,
                "name" => json_encode([
                    "pl" => "Stosowanie ćwiczeń rozwijających małą i dużą motorykę, które są dostosowane do potrzeb uczniów z zaburzeniami ruchowymi.",
                    "en" => "Using exercises that develop fine and gross motor skills, adapted to the needs of students with motor disorders."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15273,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie ćwiczeń sensorycznych, które pomagają uczniom w przetwarzaniu bodźców i regulowaniu reakcji na otoczenie.",
                    "en" => "Conducting sensory exercises that help students process stimuli and regulate their responses to the environment."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15274,
                "name" => json_encode([
                    "pl" => "Stosowanie technik integracji sensorycznej, które wspierają uczniów z nadwrażliwością lub niedowrażliwością sensoryczną.",
                    "en" => "Applying sensory integration techniques to support students with sensory hypersensitivity or hyposensitivity."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15275,
                "name" => json_encode([
                    "pl" => "Dokumentowanie postępów ucznia, prowadzenie notatek z zajęć, raportów i obserwacji dotyczących rozwoju oraz działań terapeutycznych.",
                    "en" => "Documenting the student's progress, keeping notes from classes, reports, and observations related to development and therapeutic activities."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15276,
                "name" => json_encode([
                    "pl" => "Systematyczne analizowanie wyników terapii oraz dostosowywanie planów pracy do aktualnych potrzeb ucznia.",
                    "en" => "Systematically analyzing therapy results and adjusting work plans to the student's current needs."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15277,
                "name" => json_encode([
                    "pl" => "Regularne spotkania z rodzicami, aby omawiać postępy ucznia, udzielać wskazówek dotyczących pracy z dzieckiem w domu.",
                    "en" => "Regular meetings with parents to discuss the student's progress and provide guidance on working with the child at home."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15278,
                "name" => json_encode([
                    "pl" => "Wsparcie rodziców w rozumieniu trudności dziecka, edukowanie ich na temat metod wspierających rozwój w środowisku domowym.",
                    "en" => "Supporting parents in understanding the child's difficulties, educating them about methods to support development in the home environment."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15279,
                "name" => json_encode([
                    "pl" => "Praca w zespole interdyscyplinarnym (psychologowie, logopedzi, terapeuci), aby kompleksowo wspierać rozwój ucznia.",
                    "en" => "Working in an interdisciplinary team (psychologists, speech therapists, therapists) to comprehensively support the student's development."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15280,
                "name" => json_encode([
                    "pl" => "Udział w spotkaniach zespołu ds. pomocy psychologiczno-pedagogicznej, aby opracować spójne podejście terapeutyczne.",
                    "en" => "Participating in meetings of the psychological-pedagogical support team to develop a cohesive therapeutic approach."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15281,
                "name" => json_encode([
                    "pl" => "Opracowywanie specjalnych materiałów edukacyjnych, które są dostosowane do poziomu rozwoju, umiejętności i możliwości ucznia.",
                    "en" => "Developing special educational materials tailored to the student's level of development, skills, and abilities."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15282,
                "name" => json_encode([
                    "pl" => "Korzystanie z narzędzi multimedialnych, interaktywnych pomocy, które wzbogacają proces dydaktyczny i pomagają uczniowi w przyswajaniu wiedzy.",
                    "en" => "Using multimedia tools, interactive aids that enrich the teaching process and help the student absorb knowledge."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15283,
                "name" => json_encode([
                    "pl" => "Organizowanie wspólnych zajęć z uczniami pełnosprawnymi, które sprzyjają integracji i rozwijają umiejętności społeczne.",
                    "en" => "Organizing joint activities with fully-abled students to promote integration and develop social skills."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15284,
                "name" => json_encode([
                    "pl" => "Wspieranie ucznia w budowaniu relacji z rówieśnikami, co pomaga w rozwijaniu umiejętności interpersonalnych.",
                    "en" => "Supporting the student in building relationships with peers, helping develop interpersonal skills."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15285,
                "name" => json_encode([
                    "pl" => "Organizowanie zajęć edukacyjnych dla rówieśników, które rozwijają zrozumienie i akceptację dla uczniów z niepełnosprawnościami.",
                    "en" => "Organizing educational activities for peers that promote understanding and acceptance of students with disabilities."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15286,
                "name" => json_encode([
                    "pl" => "Tworzenie atmosfery akceptacji, która sprzyja włączaniu uczniów ze specjalnymi potrzebami w życie społeczności szkolnej.",
                    "en" => "Creating an atmosphere of acceptance that fosters the inclusion of students with special needs in the school community."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15287,
                "name" => json_encode([
                    "pl" => "Nauczanie podstawowych umiejętności poznawczych, takich jak koncentracja, pamięć, logiczne myślenie, które wspierają rozwój edukacyjny ucznia.",
                    "en" => "Teaching basic cognitive skills such as concentration, memory, and logical thinking that support the student's educational development."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15288,
                "name" => json_encode([
                    "pl" => "Prowadzenie ćwiczeń z zakresu czytania, pisania, liczenia, które dostosowane są do możliwości intelektualnych ucznia.",
                    "en" => "Conducting exercises in reading, writing, and arithmetic tailored to the student's intellectual abilities."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15289,
                "name" => json_encode([
                    "pl" => "Pomoc uczniowi w nauce regulacji emocji, rozpoznawania uczuć oraz radzenia sobie w trudnych sytuacjach emocjonalnych.",
                    "en" => "Helping the student learn emotional regulation, recognizing feelings, and coping with difficult emotional situations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15290,
                "name" => json_encode([
                    "pl" => "Prowadzenie zajęć, które wspierają ucznia w rozwijaniu umiejętności radzenia sobie ze stresem i budowaniu odporności psychicznej.",
                    "en" => "Conducting sessions that help the student develop stress management skills and build mental resilience."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15291,
                "name" => json_encode([
                    "pl" => "Realizowanie programów terapeutycznych indywidualnie lub w małych grupach, które rozwijają umiejętności społeczne, komunikacyjne, poznawcze i emocjonalne.",
                    "en" => "Implementing therapeutic programs individually or in small groups that develop social, communication, cognitive, and emotional skills."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15292,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie ćwiczeń, które wspierają rozwój grupowy oraz uczą współpracy i interakcji z innymi.",
                    "en" => "Conducting exercises that support group development and teach cooperation and interaction with others."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15293,
                "name" => json_encode([
                    "pl" => "Praca nad rozwojem umiejętności, które są istotne dla przyszłej pracy zawodowej i samodzielności życiowej ucznia.",
                    "en" => "Working on the development of skills that are essential for the student's future professional work and life independence."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15294,
                "name" => json_encode([
                    "pl" => "Nauczanie podstawowych kompetencji, takich jak planowanie, organizacja pracy, dbanie o porządek, które są przydatne w życiu codziennym i zawodowym.",
                    "en" => "Teaching basic competencies such as planning, work organization, and maintaining order, which are useful in daily life and professional work."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15295,
                "name" => json_encode([
                    "pl" => "Nauczanie obsługi podstawowych narzędzi cyfrowych, takich jak komputery, tablety, oprogramowanie wspierające naukę i rozwój.",
                    "en" => "Teaching the use of basic digital tools such as computers, tablets, and educational software that support learning and development."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15296,
                "name" => json_encode([
                    "pl" => "Korzystanie z technologii wspierających, które pomagają uczniom z trudnościami w nauce i komunikacji.",
                    "en" => "Using assistive technologies that help students with learning and communication difficulties."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15297,
                "name" => json_encode([
                    "pl" => "Stałe doskonalenie swoich umiejętności poprzez udział w kursach, szkoleniach i konferencjach związanych z pedagogiką specjalną.",
                    "en" => "Continuously improving skills by participating in courses, training, and conferences related to special education."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15298,
                "name" => json_encode([
                    "pl" => "Śledzenie nowoczesnych metod i technik pracy z uczniami o specjalnych potrzebach, aby zapewnić skuteczną pomoc.",
                    "en" => "Tracking modern methods and techniques of working with students with special needs to provide effective support."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15299,
                "name" => json_encode([
                    "pl" => "Organizowanie zajęć, które uczą akceptacji i zrozumienia różnorodności kulturowej, religijnej, etnicznej.",
                    "en" => "Organizing activities that teach acceptance and understanding of cultural, religious, and ethnic diversity."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15300,
                "name" => json_encode([
                    "pl" => "Promowanie postaw tolerancji wśród uczniów oraz ich rodziców, które wspierają budowanie otwartego środowiska edukacyjnego.",
                    "en" => "Promoting tolerance among students and their parents to support the creation of an open educational environment."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15301,
                "name" => json_encode([
                    "pl" => "Aranżacja przestrzeni, która jest bezpieczna, dostosowana do potrzeb ucznia i sprzyja koncentracji oraz komfortowi pracy.",
                    "en" => "Arranging a space that is safe, adapted to the student's needs, and conducive to concentration and work comfort."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15302,
                "name" => json_encode([
                    "pl" => "Dostosowanie sali dydaktycznej, sprzętu i pomocy edukacyjnych do wymagań uczniów z niepełnosprawnościami.",
                    "en" => "Adapting the classroom, equipment, and educational aids to the requirements of students with disabilities."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15303,
                "name" => json_encode([
                    "pl" => "Dbanie o dobro uczniów, zachowanie poufności informacji dotyczących ich sytuacji oraz przestrzeganie zasad etyki zawodowej.",
                    "en" => "Ensuring the well-being of students, maintaining confidentiality regarding their situations, and adhering to professional ethics."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15304,
                "name" => json_encode([
                    "pl" => "Budowanie zaufania i relacji opartej na szacunku, aby wspierać ucznia i jego rodzinę w sposób odpowiedzialny i profesjonalny.",
                    "en" => "Building trust and relationships based on respect to support the student and their family in a responsible and professional manner."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $PEDAGOG_MEDIÓW=[
            [
                "id" => 15305,
                "name" => json_encode([
                    "pl" => "Organizowanie lekcji i warsztatów, które wprowadzają uczestników w świat mediów, pomagając im zrozumieć ich rolę we współczesnym społeczeństwie.",
                    "en" => "Organizing lessons and workshops that introduce participants to the world of media, helping them understand their role in contemporary society."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15306,
                "name" => json_encode([
                    "pl" => "Nauczanie podstawowych pojęć związanych z mediami, takich jak komunikacja masowa, propaganda, fake news, wpływ reklamy i social media.",
                    "en" => "Teaching basic media concepts such as mass communication, propaganda, fake news, the influence of advertising, and social media."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15307,
                "name" => json_encode([
                    "pl" => "Nauczanie analizy treści medialnych, rozpoznawania manipulacji, propagandy i przekazów o charakterze perswazyjnym.",
                    "en" => "Teaching media content analysis, recognizing manipulation, propaganda, and persuasive messages."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15308,
                "name" => json_encode([
                    "pl" => "Pomoc w rozwijaniu umiejętności krytycznej oceny informacji i identyfikowania wiarygodnych źródeł.",
                    "en" => "Helping to develop critical information evaluation skills and identifying reliable sources."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15309,
                "name" => json_encode([
                    "pl" => "Tłumaczenie mechanizmów wpływu mediów na kształtowanie opinii, norm społecznych oraz zachowań.",
                    "en" => "Explaining the mechanisms of media influence on shaping opinions, social norms, and behaviors."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15310,
                "name" => json_encode([
                    "pl" => "Organizowanie dyskusji na temat roli mediów w polityce, kulturze, ekonomii i społeczeństwie, co pomaga uczestnikom lepiej zrozumieć ich wpływ.",
                    "en" => "Organizing discussions about the role of media in politics, culture, economics, and society to help participants better understand their impact."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15311,
                "name" => json_encode([
                    "pl" => "Nauczanie zasad bezpieczeństwa cyfrowego, takich jak ochrona danych osobowych, prywatność, unikanie zagrożeń internetowych (phishing, cyberbullying).",
                    "en" => "Teaching digital security principles, such as personal data protection, privacy, and avoiding internet threats (phishing, cyberbullying)."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15312,
                "name" => json_encode([
                    "pl" => "Przekazywanie wiedzy na temat ochrony tożsamości cyfrowej i radzenia sobie z negatywnymi zjawiskami w sieci.",
                    "en" => "Providing knowledge about digital identity protection and dealing with negative phenomena online."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15313,
                "name" => json_encode([
                    "pl" => "Nauczanie podstawowych umiejętności cyfrowych, takich jak obsługa komputerów, aplikacji, wyszukiwanie informacji w internecie, korzystanie z mediów społecznościowych.",
                    "en" => "Teaching basic digital skills such as operating computers, applications, searching for information on the internet, and using social media."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15314,
                "name" => json_encode([
                    "pl" => "Organizowanie warsztatów, które rozwijają kompetencje cyfrowe, co umożliwia uczestnikom pełne korzystanie z technologii.",
                    "en" => "Organizing workshops that develop digital competencies, enabling participants to fully utilize technology."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15315,
                "name" => json_encode([
                    "pl" => "Nauczanie metod weryfikacji informacji, identyfikowania źródeł o niskiej wiarygodności i odróżniania prawdziwych wiadomości od fałszywych.",
                    "en" => "Teaching methods for verifying information, identifying low-credibility sources, and distinguishing real news from fake news."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15316,
                "name" => json_encode([
                    "pl" => "Przekazywanie narzędzi i metod, które pomagają w rozpoznawaniu dezinformacji i zapobiegają jej dalszemu rozprzestrzenianiu.",
                    "en" => "Providing tools and methods that help recognize misinformation and prevent its further spread."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15317,
                "name" => json_encode([
                    "pl" => "Prowadzenie projektów, które umożliwiają uczestnikom tworzenie własnych treści medialnych (np. filmów, podcastów, blogów), co pozwala lepiej zrozumieć procesy produkcji medialnej.",
                    "en" => "Leading projects that allow participants to create their own media content (e.g., films, podcasts, blogs), helping them better understand media production processes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15318,
                "name" => json_encode([
                    "pl" => "Wspieranie uczestników w realizacji projektów medialnych, które rozwijają umiejętności komunikacji, pracy zespołowej i kreatywności.",
                    "en" => "Supporting participants in executing media projects that develop communication, teamwork, and creativity skills."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15319,
                "name" => json_encode([
                    "pl" => "Wprowadzenie uczestników w podstawy analizy wizualnej, rozpoznawania symboliki i ukrytych znaczeń w przekazach medialnych.",
                    "en" => "Introducing participants to the basics of visual analysis, recognizing symbolism, and hidden meanings in media messages."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15320,
                "name" => json_encode([
                    "pl" => "Nauczanie interpretacji obrazów, reklam, filmów, które często komunikują treści w sposób niebezpośredni.",
                    "en" => "Teaching the interpretation of images, advertisements, films, which often communicate content in an indirect way."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15321,
                "name" => json_encode([
                    "pl" => "Wspieranie uczestników w odpowiedzialnym korzystaniu z mediów, w tym poszanowania praw autorskich, świadomego udostępniania treści oraz przestrzegania zasad etyki.",
                    "en" => "Supporting participants in responsibly using media, including respecting copyrights, consciously sharing content, and adhering to ethical guidelines."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15322,
                "name" => json_encode([
                    "pl" => "Przekazywanie wiedzy o konsekwencjach udostępniania nieprawdziwych lub szkodliwych treści.",
                    "en" => "Providing knowledge about the consequences of sharing false or harmful content."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15323,
                "name" => json_encode([
                    "pl" => "Uczenie zasad ochrony prywatności, szczególnie w kontekście mediów społecznościowych i platform internetowych.",
                    "en" => "Teaching privacy protection principles, especially in the context of social media and online platforms."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15324,
                "name" => json_encode([
                    "pl" => "Wyjaśnianie zagadnień związanych z politykami prywatności, zbieraniem danych i odpowiedzialnym zarządzaniem informacjami osobistymi.",
                    "en" => "Explaining issues related to privacy policies, data collection, and responsible management of personal information."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15325,
                "name" => json_encode([
                    "pl" => "Uczenie uczestników efektywnego wyszukiwania informacji, oceny ich wiarygodności i odpowiedniego korzystania ze źródeł.",
                    "en" => "Teaching participants effective methods of information searching, evaluating their credibility, and properly using sources."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15326,
                "name" => json_encode([
                    "pl" => "Przekazywanie umiejętności filtrowania i analizowania dużych ilości informacji, co jest kluczowe w epoce nadmiaru danych.",
                    "en" => "Teaching the skills of filtering and analyzing large amounts of information, which is crucial in the age of information overload."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15327,
                "name" => json_encode([
                    "pl" => "Organizowanie debat na temat odpowiedzialności mediów, granic wolności słowa, cenzury i etycznych dylematów dziennikarzy.",
                    "en" => "Organizing debates on media responsibility, the limits of freedom of speech, censorship, and ethical dilemmas faced by journalists."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15328,
                "name" => json_encode([
                    "pl" => "Pomoc uczestnikom w rozumieniu, jakie dylematy etyczne stoją przed twórcami mediów i jak one wpływają na odbiorców.",
                    "en" => "Helping participants understand the ethical dilemmas faced by media creators and how they impact audiences."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15329,
                "name" => json_encode([
                    "pl" => "Nauczanie uczestników podstawowych umiejętności tworzenia i edytowania treści multimedialnych, takich jak filmy, grafiki, podcasty, strony internetowe.",
                    "en" => "Teaching participants basic skills in creating and editing multimedia content, such as videos, graphics, podcasts, and websites."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15330,
                "name" => json_encode([
                    "pl" => "Organizowanie zajęć, które uczą technik produkcji i edycji, aby uczestnicy mogli aktywnie i świadomie tworzyć przekazy medialne.",
                    "en" => "Organizing classes that teach production and editing techniques, enabling participants to actively and consciously create media messages."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15331,
                "name" => json_encode([
                    "pl" => "Nauczanie zasad odpowiedzialnego korzystania z mediów społecznościowych, takich jak kulturalne komentowanie, świadome udostępnianie treści.",
                    "en" => "Teaching the principles of responsible use of social media, such as respectful commenting and conscious content sharing."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15332,
                "name" => json_encode([
                    "pl" => "Uświadamianie uczestników o wpływie social media na samoocenę, relacje międzyludzkie i zdrowie psychiczne.",
                    "en" => "Raising awareness among participants about the impact of social media on self-esteem, interpersonal relationships, and mental health."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15333,
                "name" => json_encode([
                    "pl" => "Organizowanie kampanii informacyjnych na temat odpowiedzialnego korzystania z mediów, które podnoszą świadomość społeczną na temat ich wpływu.",
                    "en" => "Organizing informational campaigns about responsible media usage that raise social awareness of their impact."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15334,
                "name" => json_encode([
                    "pl" => "Tworzenie materiałów promujących edukację medialną, które pomagają uczestnikom i ich rodzinom świadomie korzystać z treści medialnych.",
                    "en" => "Creating materials that promote media literacy to help participants and their families consciously engage with media content."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15335,
                "name" => json_encode([
                    "pl" => "Udzielanie porad i wskazówek dla rodziców na temat wspierania dzieci w odpowiedzialnym korzystaniu z mediów i unikania zagrożeń.",
                    "en" => "Providing advice and tips for parents on supporting children in responsibly using media and avoiding risks."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15336,
                "name" => json_encode([
                    "pl" => "Organizowanie spotkań i warsztatów, które pomagają rodzicom zrozumieć świat mediów cyfrowych i wspierać rozwój kompetencji medialnych ich dzieci.",
                    "en" => "Organizing meetings and workshops that help parents understand the world of digital media and support the development of their children's media literacy."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15337,
                "name" => json_encode([
                    "pl" => "Edukowanie uczestników na temat zjawiska cyberprzemocy, skutków hejtu oraz metod radzenia sobie z takimi sytuacjami.",
                    "en" => "Educating participants about cyberbullying, the effects of hate speech, and methods for dealing with such situations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15338,
                "name" => json_encode([
                    "pl" => "Przekazywanie narzędzi, które pomagają w identyfikowaniu cyberprzemocy, zgłaszaniu incydentów i wspieraniu osób dotkniętych hejtowaniem.",
                    "en" => "Providing tools that help identify cyberbullying, report incidents, and support individuals affected by hate speech."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15339,
                "name" => json_encode([
                    "pl" => "Nauczanie analizy treści audiowizualnych, takich jak filmy, seriale, reklamy, aby uczestnicy rozumieli techniki narracyjne, manipulacje i przekazy ukryte.",
                    "en" => "Teaching the analysis of audiovisual content such as films, TV shows, and advertisements, so participants understand narrative techniques, manipulation, and hidden messages."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15340,
                "name" => json_encode([
                    "pl" => "Wprowadzenie uczestników w zagadnienia związane z produkcją i edycją materiałów audiowizualnych.",
                    "en" => "Introducing participants to issues related to the production and editing of audiovisual materials."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15341,
                "name" => json_encode([
                    "pl" => "Nauczanie zasad analizy reklam, rozpoznawania technik perswazyjnych oraz zrozumienia, jak reklamy wpływają na zachowania konsumenckie.",
                    "en" => "Teaching the principles of ad analysis, recognizing persuasive techniques, and understanding how ads influence consumer behavior."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15342,
                "name" => json_encode([
                    "pl" => "Wdrażanie ćwiczeń, które pomagają uczestnikom zrozumieć, jak reklama wpływa na ich decyzje i postrzeganie rzeczywistości.",
                    "en" => "Implementing exercises that help participants understand how advertising affects their decisions and perception of reality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15343,
                "name" => json_encode([
                    "pl" => "Nauczanie analizy filmowej, rozpoznawania stylów, gatunków, symboliki oraz roli filmu jako narzędzia komunikacji.",
                    "en" => "Teaching film analysis, recognizing styles, genres, symbolism, and the role of film as a communication tool."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15344,
                "name" => json_encode([
                    "pl" => "Organizowanie przeglądów filmowych, dyskusji o filmach, które pomagają uczestnikom rozwijać krytyczne spojrzenie na kino.",
                    "en" => "Organizing film screenings and discussions that help participants develop a critical perspective on cinema."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15345,
                "name" => json_encode([
                    "pl" => "Dokumentowanie efektów pracy, postępów uczestników oraz przeprowadzanie ewaluacji skuteczności działań edukacyjnych.",
                    "en" => "Documenting the outcomes of work, participants' progress, and conducting evaluations of the effectiveness of educational activities."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15346,
                "name" => json_encode([
                    "pl" => "Opracowywanie raportów i analiz, które pozwalają na udoskonalenie programów edukacji medialnej.",
                    "en" => "Developing reports and analyses that allow for the improvement of media literacy programs."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15347,
                "name" => json_encode([
                    "pl" => "Nawiązywanie kontaktów z instytucjami, takimi jak biblioteki, domy kultury, szkoły, które mogą wspierać działania z zakresu edukacji medialnej.",
                    "en" => "Establishing contacts with institutions such as libraries, cultural centers, and schools that can support media literacy activities."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15348,
                "name" => json_encode([
                    "pl" => "Organizowanie wspólnych projektów, warsztatów, wystaw, które promują edukację medialną w społeczności lokalnej.",
                    "en" => "Organizing joint projects, workshops, and exhibitions that promote media literacy in the local community."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15349,
                "name" => json_encode([
                    "pl" => "Przygotowanie i adaptacja materiałów edukacyjnych, takich jak prezentacje, karty pracy, ćwiczenia praktyczne dostosowane do wieku i poziomu wiedzy uczestników.",
                    "en" => "Preparing and adapting educational materials, such as presentations, worksheets, and practical exercises tailored to the age and knowledge level of participants."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15350,
                "name" => json_encode([
                    "pl" => "Wdrażanie interaktywnych narzędzi, takich jak quizy, aplikacje edukacyjne, które angażują uczestników i ułatwiają przyswajanie wiedzy.",
                    "en" => "Implementing interactive tools, such as quizzes and educational apps, that engage participants and facilitate knowledge acquisition."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15351,
                "name" => json_encode([
                    "pl" => "Przekazywanie wartości związanych z odpowiedzialnością za słowo, zrozumieniem wpływu treści na odbiorców i znaczeniem uczciwości w przekazie medialnym.",
                    "en" => "Conveying values related to responsibility for words, understanding the impact of content on audiences, and the importance of integrity in media messages."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15352,
                "name" => json_encode([
                    "pl" => "Promowanie postawy świadomego odbiorcy i twórcy, który respektuje etyczne zasady funkcjonowania w świecie mediów.",
                    "en" => "Promoting the attitude of an aware consumer and creator who respects the ethical principles of functioning in the world of media."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $WYCHOWAWCA_W_PLACÓWKACH_OŚWIATOWYCH = [
            [
                "id" => 15353,
                "name" => json_encode([
                    "pl" => "Dbanie o bezpieczeństwo fizyczne i psychiczne dzieci i młodzieży podczas ich pobytu w placówce.",
                    "en" => "Ensuring the physical and psychological safety of children and adolescents during their stay in the institution."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15354,
                "name" => json_encode([
                    "pl" => "Monitorowanie zachowań podopiecznych, aby zapobiegać sytuacjom ryzykownym, konfliktom oraz stosowaniu przemocy.",
                    "en" => "Monitoring the behavior of the wards to prevent risky situations, conflicts, and the use of violence."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15355,
                "name" => json_encode([
                    "pl" => "Tworzenie planów zajęć dostosowanych do wieku, potrzeb i możliwości podopiecznych, które wspierają ich rozwój emocjonalny, społeczny i intelektualny.",
                    "en" => "Creating activity plans tailored to the age, needs, and capabilities of the wards, which support their emotional, social, and intellectual development."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15356,
                "name" => json_encode([
                    "pl" => "Organizowanie warsztatów, gier, zabaw, które uczą współpracy, odpowiedzialności i umiejętności komunikacyjnych.",
                    "en" => "Organizing workshops, games, and activities that teach cooperation, responsibility, and communication skills."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15357,
                "name" => json_encode([
                    "pl" => "Dopasowanie metod pracy do indywidualnych potrzeb każdego podopiecznego, uwzględniając jego trudności, zainteresowania, możliwości i cele rozwojowe.",
                    "en" => "Adjusting the methods of work to the individual needs of each ward, taking into account their difficulties, interests, abilities, and developmental goals."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15358,
                "name" => json_encode([
                    "pl" => "Tworzenie planów wsparcia, które odpowiadają na specyficzne potrzeby emocjonalne, edukacyjne lub społeczne dziecka.",
                    "en" => "Creating support plans that address the specific emotional, educational, or social needs of the child."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15359,
                "name" => json_encode([
                    "pl" => "Pomoc dzieciom i młodzieży w rozpoznawaniu i wyrażaniu emocji, rozwijanie umiejętności radzenia sobie ze stresem oraz budowania zdrowych relacji.",
                    "en" => "Helping children and adolescents recognize and express emotions, developing stress management skills, and building healthy relationships."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15360,
                "name" => json_encode([
                    "pl" => "Prowadzenie zajęć, które uczą asertywności, rozwiązywania konfliktów i empatii.",
                    "en" => "Conducting classes that teach assertiveness, conflict resolution, and empathy."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15361,
                "name" => json_encode([
                    "pl" => "Regularne spotkania z rodzicami lub opiekunami w celu omawiania postępów, trudności i potrzeb dziecka.",
                    "en" => "Regular meetings with parents or guardians to discuss the child's progress, difficulties, and needs."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15362,
                "name" => json_encode([
                    "pl" => "Informowanie rodziców o metodach wspierania rozwoju dziecka oraz udzielanie wskazówek dotyczących pracy nad jego rozwojem w środowisku domowym.",
                    "en" => "Informing parents about methods of supporting the child's development and providing guidance on working with their development at home."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15363,
                "name" => json_encode([
                    "pl" => "Konsultacje z psychologami, pedagogami, terapeutami, pracownikami socjalnymi w celu opracowania spójnego planu wsparcia dla podopiecznego.",
                    "en" => "Consultations with psychologists, educators, therapists, and social workers to develop a consistent support plan for the ward."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15364,
                "name" => json_encode([
                    "pl" => "Udział w spotkaniach zespołów ds. pomocy psychologiczno-pedagogicznej w celu omówienia bieżących potrzeb i postępów podopiecznych.",
                    "en" => "Participation in meetings of psychological-pedagogical support teams to discuss current needs and progress of the wards."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15365,
                "name" => json_encode([
                    "pl" => "Organizowanie zajęć, które wspierają dzieci i młodzież w rozwijaniu umiejętności szkolnych, pomoc w odrabianiu lekcji, wyjaśnianie trudniejszych zagadnień.",
                    "en" => "Organizing activities that support children and adolescents in developing school skills, helping with homework, and explaining difficult topics."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15366,
                "name" => json_encode([
                    "pl" => "Monitorowanie postępów edukacyjnych i współpraca ze szkołą, aby zapewnić spójność działań wychowawczych i edukacyjnych.",
                    "en" => "Monitoring educational progress and collaborating with the school to ensure consistency of educational and upbringing activities."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15367,
                "name" => json_encode([
                    "pl" => "Prowadzenie zajęć wychowawczych, które uczą zasad życia społecznego, szacunku dla innych, odpowiedzialności oraz uczciwości.",
                    "en" => "Conducting educational activities that teach the principles of social life, respect for others, responsibility, and honesty."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15368,
                "name" => json_encode([
                    "pl" => "Rozwijanie u dzieci postaw obywatelskich, zachęcanie do angażowania się w inicjatywy społeczne i działania na rzecz wspólnoty.",
                    "en" => "Developing civic attitudes in children, encouraging them to engage in social initiatives and actions for the community."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15369,
                "name" => json_encode([
                    "pl" => "Planowanie zajęć sportowych, rekreacyjnych, kulturalnych, które rozwijają zainteresowania, uczą pracy zespołowej i zdrowej rywalizacji.",
                    "en" => "Planning sports, recreational, and cultural activities that develop interests, teach teamwork, and healthy competition."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15370,
                "name" => json_encode([
                    "pl" => "Wspieranie dzieci i młodzieży w rozwijaniu pasji, organizowanie wycieczek, spacerów, udziału w wydarzeniach kulturalnych.",
                    "en" => "Supporting children and adolescents in developing their passions, organizing trips, walks, and participation in cultural events."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15371,
                "name" => json_encode([
                    "pl" => "Budowanie relacji opartej na zaufaniu, wsparciu, akceptacji, aby podopieczni czuli się bezpiecznie i swobodnie wyrażali swoje emocje i potrzeby.",
                    "en" => "Building a relationship based on trust, support, and acceptance, so that the wards feel safe and freely express their emotions and needs."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15372,
                "name" => json_encode([
                    "pl" => "Wspieranie dzieci w przezwyciężaniu trudności, budowanie poczucia własnej wartości oraz wiary we własne możliwości.",
                    "en" => "Supporting children in overcoming difficulties, building self-esteem, and belief in their own abilities."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15373,
                "name" => json_encode([
                    "pl" => "Nauczanie umiejętności samoobsługi, takich jak gotowanie, sprzątanie, organizacja przestrzeni, które zwiększają samodzielność podopiecznych.",
                    "en" => "Teaching self-care skills such as cooking, cleaning, and organizing space, which increase the independence of the wards."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15374,
                "name" => json_encode([
                    "pl" => "Pomoc w rozwijaniu umiejętności zarządzania czasem, podejmowania decyzji, rozwiązywania problemów.",
                    "en" => "Helping in developing time management skills, decision-making, and problem-solving."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15375,
                "name" => json_encode([
                    "pl" => "Systematyczne dokumentowanie działań wychowawczych, prowadzenie notatek dotyczących postępów, trudności i zachowań podopiecznych.",
                    "en" => "Systematic documentation of educational activities, taking notes on the progress, difficulties, and behavior of the wards."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15376,
                "name" => json_encode([
                    "pl" => "Sporządzanie raportów dla dyrekcji i instytucji współpracujących, aby monitorować rozwój dzieci i młodzieży.",
                    "en" => "Preparing reports for the management and cooperating institutions to monitor the development of children and adolescents."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15377,
                "name" => json_encode([
                    "pl" => "Nauczanie dzieci technik radzenia sobie ze stresem, lękiem, gniewem, które są niezbędne do regulacji emocjonalnej.",
                    "en" => "Teaching children techniques for coping with stress, anxiety, and anger, which are essential for emotional regulation."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15378,
                "name" => json_encode([
                    "pl" => "Prowadzenie ćwiczeń relaksacyjnych oraz zajęć, które wspierają rozwój odporności psychicznej.",
                    "en" => "Conducting relaxation exercises and activities that support the development of mental resilience."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15379,
                "name" => json_encode([
                    "pl" => "Przekazywanie wiedzy na temat zdrowego odżywiania, aktywności fizycznej, dbania o higienę i zdrowie psychiczne.",
                    "en" => "Passing on knowledge about healthy nutrition, physical activity, hygiene, and mental health."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15380,
                "name" => json_encode([
                    "pl" => "Organizowanie zajęć, które promują zdrowy styl życia, np. zajęć sportowych, warsztatów kulinarnych.",
                    "en" => "Organizing activities that promote a healthy lifestyle, e.g. sports activities, culinary workshops."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15381,
                "name" => json_encode([
                    "pl" => "Pomoc dzieciom i młodzieży w adaptacji do nowych sytuacji życiowych, takich jak zmiana szkoły, przejście do nowej grupy wychowawczej.",
                    "en" => "Helping children and adolescents adapt to new life situations, such as changing schools, moving to a new educational group."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15382,
                "name" => json_encode([
                    "pl" => "Wspieranie podopiecznych w procesie zmiany, aby ułatwić im przystosowanie się do nowych warunków.",
                    "en" => "Supporting wards in the process of change to help them adapt to new conditions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15383,
                "name" => json_encode([
                    "pl" => "Prowadzenie zajęć, które budują więzi między dziećmi i młodzieżą, sprzyjają wzajemnemu poznawaniu się i integracji.",
                    "en" => "Conducting activities that build bonds between children and adolescents, promoting mutual acquaintance and integration."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15384,
                "name" => json_encode([
                    "pl" => "Tworzenie atmosfery współpracy, organizowanie gier i zabaw, które uczą współpracy i budowania relacji.",
                    "en" => "Creating an atmosphere of cooperation, organizing games and activities that teach collaboration and building relationships."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15385,
                "name" => json_encode([
                    "pl" => "Prowadzenie zajęć, które uczą szacunku dla innych kultur, wartości oraz akceptacji różnorodności.",
                    "en" => "Conducting activities that teach respect for other cultures, values, and acceptance of diversity."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15386,
                "name" => json_encode([
                    "pl" => "Rozwijanie postaw tolerancji, otwartości i empatii, aby dzieci i młodzież rozumiały znaczenie różnorodności.",
                    "en" => "Developing attitudes of tolerance, openness, and empathy so that children and adolescents understand the importance of diversity."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15387,
                "name" => json_encode([
                    "pl" => "Prowadzenie działań profilaktycznych, które zapobiegają przemocy i agresji, takie jak zajęcia na temat asertywności, radzenia sobie z trudnymi emocjami.",
                    "en" => "Conducting preventive actions to prevent violence and aggression, such as assertiveness classes and dealing with difficult emotions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15388,
                "name" => json_encode([
                    "pl" => "Mediacja i wsparcie w rozwiązywaniu konfliktów między podopiecznymi, aby rozwijać umiejętność konstruktywnego radzenia sobie z problemami.",
                    "en" => "Mediation and support in resolving conflicts between wards to develop the ability to constructively deal with problems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15389,
                "name" => json_encode([
                    "pl" => "Kształtowanie postaw etycznych, uczciwości, szacunku dla innych oraz odpowiedzialności za własne działania.",
                    "en" => "Shaping ethical attitudes, honesty, respect for others, and responsibility for one's actions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15390,
                "name" => json_encode([
                    "pl" => "Prowadzenie rozmów na temat wartości moralnych, zasad społecznych i postaw odpowiedzialnych wobec innych.",
                    "en" => "Conducting discussions on moral values, social principles, and responsible attitudes towards others."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15391,
                "name" => json_encode([
                    "pl" => "Organizowanie warsztatów dotyczących zagrożeń, takich jak uzależnienia, przemoc, cyberprzemoc, które uczą dzieci radzenia sobie w trudnych sytuacjach.",
                    "en" => "Organizing workshops on threats such as addiction, violence, cyberbullying, teaching children how to cope with difficult situations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15392,
                "name" => json_encode([
                    "pl" => "Uświadamianie dzieci i młodzieży o zagrożeniach oraz sposobach ich unikania.",
                    "en" => "Raising awareness among children and adolescents about threats and ways to avoid them."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15393,
                "name" => json_encode([
                    "pl" => "Wspieranie dzieci z trudnościami emocjonalnymi i społecznymi oraz organizowanie specjalistycznej pomocy psychologicznej i pedagogicznej.",
                    "en" => "Supporting children with emotional and social difficulties and organizing specialized psychological and educational assistance."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15394,
                "name" => json_encode([
                    "pl" => "Monitorowanie sytuacji emocjonalnej podopiecznych, organizowanie pomocy zewnętrznej, gdy jest to potrzebne.",
                    "en" => "Monitoring the emotional situation of the wards and organizing external help when needed."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15395,
                "name" => json_encode([
                    "pl" => "Zachęcanie podopiecznych do odkrywania swoich zainteresowań, rozwijania pasji i talentów poprzez udział w zajęciach dodatkowych.",
                    "en" => "Encouraging wards to explore their interests, develop passions and talents through participation in extracurricular activities."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15396,
                "name" => json_encode([
                    "pl" => "Organizowanie zajęć pozalekcyjnych, takich jak zajęcia artystyczne, sportowe, które wspierają rozwój zainteresowań.",
                    "en" => "Organizing extracurricular activities such as artistic and sports activities that support the development of interests."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15397,
                "name" => json_encode([
                    "pl" => "Nauczanie umiejętności przydatnych w dorosłym życiu, takich jak planowanie budżetu, organizacja czasu, rozwiązywanie problemów.",
                    "en" => "Teaching skills useful in adult life, such as budget planning, time management, and problem-solving."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15398,
                "name" => json_encode([
                    "pl" => "Przygotowywanie dzieci i młodzieży do samodzielnego funkcjonowania w życiu dorosłym.",
                    "en" => "Preparing children and adolescents for independent functioning in adult life."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15399,
                "name" => json_encode([
                    "pl" => "Udział w szkoleniach, warsztatach, kursach, które rozwijają wiedzę i umiejętności wychowawcze oraz pozwalają na bieżąco reagować na potrzeby dzieci.",
                    "en" => "Participation in training, workshops, and courses that develop educational knowledge and skills and allow for ongoing response to the needs of children."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15400,
                "name" => json_encode([
                    "pl" => "Aktualizowanie wiedzy z zakresu pedagogiki, psychologii i opieki nad dziećmi w celu zapewnienia wysokiej jakości pracy wychowawczej.",
                    "en" => "Updating knowledge in the fields of pedagogy, psychology, and child care to ensure high-quality educational work."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]


        ];
        $animator_czasu_wolnego_mlodziezy = [
            [
                "id" => 15401,
                "name" => json_encode([
                    "pl" => "Planowanie i prowadzenie zajęć i warsztatów dostosowanych do zainteresowań i potrzeb młodzieży, takich jak zajęcia artystyczne, sportowe, edukacyjne czy kulturalne.",
                    "en" => "Planning and conducting activities and workshops tailored to the interests and needs of youth, such as artistic, sports, educational, or cultural activities."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15402,
                "name" => json_encode([
                    "pl" => "Tworzenie programu, który angażuje młodzież i wspiera rozwijanie ich pasji i umiejętności.",
                    "en" => "Creating a program that engages young people and supports the development of their passions and skills."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15403,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie zajęć, które pomagają młodym ludziom rozwijać umiejętności społeczne, budować relacje oraz radzić sobie z emocjami.",
                    "en" => "Conducting activities that help young people develop social skills, build relationships, and manage emotions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15404,
                "name" => json_encode([
                    "pl" => "Organizowanie dyskusji na tematy ważne dla młodzieży, takie jak tożsamość, samoakceptacja, relacje interpersonalne.",
                    "en" => "Organizing discussions on topics important to youth, such as identity, self-acceptance, and interpersonal relationships."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15405,
                "name" => json_encode([
                    "pl" => "Prowadzenie zajęć, które uczą skutecznej komunikacji, współpracy, rozwiązywania konfliktów i asertywności.",
                    "en" => "Conducting activities that teach effective communication, cooperation, conflict resolution, and assertiveness."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15406,
                "name" => json_encode([
                    "pl" => "Tworzenie sytuacji sprzyjających integracji i budowaniu więzi między młodymi ludźmi.",
                    "en" => "Creating situations that foster integration and bond-building among young people."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15407,
                "name" => json_encode([
                    "pl" => "Prowadzenie zajęć sportowych, wycieczek, gier zespołowych, które promują zdrowy styl życia i zachęcają do aktywności fizycznej.",
                    "en" => "Conducting sports activities, trips, and team games that promote a healthy lifestyle and encourage physical activity."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15408,
                "name" => json_encode([
                    "pl" => "Organizacja imprez sportowych, zawodów, które pozwalają młodzieży na rozwijanie umiejętności fizycznych i rywalizację w duchu fair play.",
                    "en" => "Organizing sports events and competitions that allow youth to develop physical skills and compete in the spirit of fair play."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15409,
                "name" => json_encode([
                    "pl" => "Uświadamianie młodzieży na temat znaczenia zdrowego odżywiania, aktywności fizycznej, dbania o zdrowie psychiczne.",
                    "en" => "Raising awareness among youth about the importance of healthy eating, physical activity, and mental health care."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15410,
                "name" => json_encode([
                    "pl" => "Organizowanie warsztatów i spotkań z dietetykami, psychologami, aby zwiększyć świadomość na temat zdrowego stylu życia.",
                    "en" => "Organizing workshops and meetings with dietitians and psychologists to raise awareness about a healthy lifestyle."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15411,
                "name" => json_encode([
                    "pl" => "Prowadzenie zajęć, które pomagają młodym ludziom odkrywać swoje mocne strony, zainteresowania oraz budować poczucie własnej wartości.",
                    "en" => "Conducting activities that help young people discover their strengths, interests, and build self-esteem."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15412,
                "name" => json_encode([
                    "pl" => "Organizacja warsztatów na temat wyznaczania celów, zarządzania czasem i radzenia sobie ze stresem.",
                    "en" => "Organizing workshops on goal setting, time management, and stress coping."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15413,
                "name" => json_encode([
                    "pl" => "Planowanie koncertów, spektakli, pokazów talentów, wystaw i innych wydarzeń kulturalnych, które angażują młodzież i rozwijają ich zainteresowania artystyczne.",
                    "en" => "Planning concerts, shows, talent showcases, exhibitions, and other cultural events that engage youth and develop their artistic interests."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15414,
                "name" => json_encode([
                    "pl" => "Wspieranie młodzieży w tworzeniu własnych projektów artystycznych, które umożliwiają im wyrażenie siebie.",
                    "en" => "Supporting youth in creating their own artistic projects, allowing them to express themselves."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15415,
                "name" => json_encode([
                    "pl" => "Zapewnienie bezpiecznej przestrzeni, w której młodzież czuje się swobodnie, akceptowana i może wyrażać swoje opinie.",
                    "en" => "Providing a safe space where young people feel free, accepted, and can express their opinions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15416,
                "name" => json_encode([
                    "pl" => "Zapobieganie agresji, dyskryminacji i konfliktom w grupie oraz tworzenie atmosfery wzajemnego szacunku.",
                    "en" => "Preventing aggression, discrimination, and conflicts within the group while fostering an atmosphere of mutual respect."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15417,
                "name" => json_encode([
                    "pl" => "Organizowanie zajęć integracyjnych, które sprzyjają nawiązywaniu nowych przyjaźni i budowaniu pozytywnych relacji między uczestnikami.",
                    "en" => "Organizing integration activities that encourage forming new friendships and building positive relationships among participants."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15418,
                "name" => json_encode([
                    "pl" => "Wdrażanie gier zespołowych i ćwiczeń, które rozwijają umiejętności współpracy i wzajemnego wsparcia.",
                    "en" => "Implementing team games and exercises that develop teamwork and mutual support skills."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15419,
                "name" => json_encode([
                    "pl" => "Organizowanie zajęć z zakresu profilaktyki uzależnień, cyberprzemocy, zdrowia psychicznego, które pomagają młodzieży unikać zachowań ryzykownych.",
                    "en" => "Organizing activities on addiction prevention, cyberbullying, and mental health to help youth avoid risky behaviors."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15420,
                "name" => json_encode([
                    "pl" => "Edukowanie młodzieży na temat zagrożeń i przeciwdziałanie negatywnym zjawiskom, takim jak przemoc, dyskryminacja, presja grupy.",
                    "en" => "Educating youth about risks and counteracting negative phenomena such as violence, discrimination, and peer pressure."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15421,
                "name" => json_encode([
                    "pl" => "Wspieranie młodzieży z różnych środowisk społecznych, etnicznych i kulturowych, aby każdy czuł się akceptowany i miał równy dostęp do działań.",
                    "en" => "Supporting youth from various social, ethnic, and cultural backgrounds to ensure everyone feels accepted and has equal access to activities."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15422,
                "name" => json_encode([
                    "pl" => "Prowadzenie zajęć promujących tolerancję, otwartość oraz integrację młodzieży o różnych potrzebach.",
                    "en" => "Conducting activities promoting tolerance, openness, and integration of youth with diverse needs."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15423,
                "name" => json_encode([
                    "pl" => "Rozpoznawanie zainteresowań i talentów młodych ludzi oraz pomaganie im w ich rozwijaniu poprzez organizację odpowiednich zajęć.",
                    "en" => "Identifying the interests and talents of young people and helping them develop these through tailored activities."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15424,
                "name" => json_encode([
                    "pl" => "Zachęcanie do odkrywania nowych pasji i uczestnictwa w zajęciach, które mogą rozwijać ich talenty.",
                    "en" => "Encouraging the discovery of new passions and participation in activities that can nurture their talents."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15425,
                "name" => json_encode([
                    "pl" => "Proponowanie aktywności, które angażują młodzież w twórczy sposób i uczą spędzania czasu wolnego w sposób pozytywny i rozwijający.",
                    "en" => "Proposing activities that creatively engage youth and teach them to spend their free time in a positive and enriching way."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15426,
                "name" => json_encode([
                    "pl" => "Planowanie zajęć, które pomagają młodzieży unikać nudy i angażują ich w wartościowe formy spędzania czasu.",
                    "en" => "Planning activities that help youth avoid boredom and engage them in meaningful ways to spend their time."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15427,
                "name" => json_encode([
                    "pl" => "Udzielanie wsparcia w wyborze ścieżki edukacyjnej i zawodowej, organizowanie spotkań z doradcami zawodowymi.",
                    "en" => "Providing support in choosing educational and career paths and organizing meetings with career counselors."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15428,
                "name" => json_encode([
                    "pl" => "Prowadzenie warsztatów z zakresu pisania CV, przygotowywania się do rozmów kwalifikacyjnych, rozwijania umiejętności przydatnych na rynku pracy.",
                    "en" => "Conducting workshops on CV writing, interview preparation, and developing skills useful in the job market."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15429,
                "name" => json_encode([
                    "pl" => "Dokumentowanie działań, prowadzenie zapisów dotyczących uczestników oraz sporządzanie raportów z efektów pracy.",
                    "en" => "Documenting activities, maintaining records on participants, and preparing reports on work outcomes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15430,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie ewaluacji działań, aby monitorować efektywność programów i lepiej dostosować ofertę do potrzeb młodzieży.",
                    "en" => "Conducting evaluations of activities to monitor program effectiveness and better tailor offerings to youth needs."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15431,
                "name" => json_encode([
                    "pl" => "Organizowanie dyskusji na tematy ważne dla młodzieży, takie jak tożsamość, równość, wartości, relacje rodzinne i społeczne.",
                    "en" => "Organizing discussions on important youth topics such as identity, equality, values, family, and social relationships."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15432,
                "name" => json_encode([
                    "pl" => "Wspieranie młodzieży w wyrażaniu swoich opinii, nauka szacunku do różnych punktów widzenia i rozwijanie umiejętności dialogu.",
                    "en" => "Supporting youth in expressing their opinions, teaching respect for different viewpoints, and developing dialogue skills."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15433,
                "name" => json_encode([
                    "pl" => "Regularny kontakt z rodzicami w celu informowania ich o postępach młodzieży oraz konsultowania działań wychowawczych.",
                    "en" => "Maintaining regular contact with parents to inform them about youth progress and consult on educational activities."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15434,
                "name" => json_encode([
                    "pl" => "Udzielanie wsparcia i porad rodzicom na temat wspierania rozwoju młodzieży w domu.",
                    "en" => "Providing support and advice to parents on fostering youth development at home."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15435,
                "name" => json_encode([
                    "pl" => "Edukowanie młodzieży na temat bezpiecznego korzystania z internetu, ochrony prywatności i radzenia sobie z cyberprzemocą.",
                    "en" => "Educating youth about safe internet use, privacy protection, and dealing with cyberbullying."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15436,
                "name" => json_encode([
                    "pl" => "Organizowanie zajęć dotyczących odpowiedzialnego korzystania z mediów społecznościowych oraz unikania zagrożeń online.",
                    "en" => "Organizing activities on responsible use of social media and avoiding online risks."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15437,
                "name" => json_encode([
                    "pl" => "Prowadzenie zajęć, które rozwijają wartości takie jak uczciwość, szacunek, odpowiedzialność, troska o innych i środowisko.",
                    "en" => "Conducting activities that foster values such as honesty, respect, responsibility, care for others, and the environment."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15438,
                "name" => json_encode([
                    "pl" => "Budowanie u młodzieży postaw odpowiedzialnych obywateli, którzy angażują się w życie społeczne i dbają o dobro wspólne.",
                    "en" => "Building responsible citizen attitudes in youth who engage in social life and care for the common good."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15439,
                "name" => json_encode([
                    "pl" => "Planowanie i organizowanie wyjazdów oraz obozów, które sprzyjają integracji, uczą samodzielności i rozwijają umiejętności społeczne.",
                    "en" => "Planning and organizing trips and camps that foster integration, teach independence, and develop social skills."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15440,
                "name" => json_encode([
                    "pl" => "Przygotowanie i prowadzenie zajęć w terenie, które pozwalają młodzieży na zdobywanie nowych doświadczeń.",
                    "en" => "Preparing and conducting field activities that allow youth to gain new experiences."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15441,
                "name" => json_encode([
                    "pl" => "Zachęcanie młodzieży do samorozwoju, wyznaczania celów osobistych i zawodowych oraz dążenia do ich realizacji.",
                    "en" => "Encouraging youth to pursue self-development, set personal and professional goals, and work toward achieving them."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15442,
                "name" => json_encode([
                    "pl" => "Prowadzenie zajęć, które rozwijają umiejętności samooceny, motywacji wewnętrznej i budują poczucie własnej wartości.",
                    "en" => "Conducting activities that develop self-assessment skills, intrinsic motivation, and build self-esteem."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15443,
                "name" => json_encode([
                    "pl" => "Nawiązywanie kontaktów z lokalnymi organizacjami, instytucjami kultury, sportu, edukacji, aby wzbogacić ofertę programową dla młodzieży.",
                    "en" => "Establishing contacts with local organizations, cultural institutions, sports, and education sectors to enrich the program offering for youth."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15444,
                "name" => json_encode([
                    "pl" => "Organizowanie wspólnych projektów i wydarzeń, które wspierają integrację społeczną i rozwój młodzieży.",
                    "en" => "Organizing joint projects and events that support social integration and youth development."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15445,
                "name" => json_encode([
                    "pl" => "Wspieranie młodzieży z grup zagrożonych wykluczeniem, zapewnienie im dostępu do wartościowych zajęć i działań wspierających rozwój.",
                    "en" => "Supporting youth from marginalized groups by providing access to valuable activities and developmental opportunities."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15446,
                "name" => json_encode([
                    "pl" => "Tworzenie programów, które umożliwiają aktywny udział wszystkim uczestnikom, niezależnie od ich sytuacji życiowej.",
                    "en" => "Creating programs that enable active participation for all participants, regardless of their life circumstances."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15447,
                "name" => json_encode([
                    "pl" => "Organizowanie zajęć, które angażują młodzież w działania twórcze, takie jak pisanie, tworzenie sztuki, muzyki, filmów, co wspiera rozwój kreatywności.",
                    "en" => "Organizing activities that engage youth in creative endeavors such as writing, creating art, music, and films, fostering creativity."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15448,
                "name" => json_encode([
                    "pl" => "Wdrażanie metod, które rozwijają wyobraźnię i uczą młodzież twórczego podejścia do problemów.",
                    "en" => "Implementing methods that develop imagination and teach youth creative approaches to problem-solving."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
        ];
        $NAUCZYCIEL_MUZYKI_W_PLACÓWKACH_POZASZKOLNYCH= [
            [
                "id" => 15449,
                "name" => json_encode([
                    "pl" => "Nauczanie gry na wybranym instrumencie (fortepianie, gitarze, skrzypcach, flecie itp.), dostosowanie poziomu nauki do indywidualnych umiejętności ucznia.",
                    "en" => "Teaching selected instruments (piano, guitar, violin, flute, etc.), adjusting the learning level to the student's individual abilities."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15450,
                "name" => json_encode([
                    "pl" => "Organizowanie ćwiczeń rozwijających technikę gry, sprawność manualną, czytanie nut oraz interpretację utworów.",
                    "en" => "Organizing exercises to improve playing technique, manual dexterity, note reading, and interpretation of pieces."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15451,
                "name" => json_encode([
                    "pl" => "Prowadzenie zajęć z emisji głosu, rozwijanie umiejętności wokalnych oraz technik śpiewu.",
                    "en" => "Conducting voice emission classes, developing vocal skills, and singing techniques."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15452,
                "name" => json_encode([
                    "pl" => "Nauczanie poprawnej postawy, oddechu, artykulacji, dykcji i ekspresji wokalnej, dostosowanych do wieku i poziomu zaawansowania uczniów.",
                    "en" => "Teaching proper posture, breathing, articulation, diction, and vocal expression tailored to the student's age and proficiency level."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15453,
                "name" => json_encode([
                    "pl" => "Opracowywanie indywidualnych programów nauczania dostosowanych do poziomu umiejętności i potrzeb ucznia.",
                    "en" => "Developing individual teaching programs tailored to the student's skill level and needs."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15454,
                "name" => json_encode([
                    "pl" => "Przygotowywanie materiałów edukacyjnych, w tym nut, ćwiczeń, nagrań, które ułatwiają naukę i wspierają rozwój muzyczny ucznia.",
                    "en" => "Preparing educational materials, including sheet music, exercises, and recordings, to facilitate learning and support the student's musical development."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15455,
                "name" => json_encode([
                    "pl" => "Wprowadzenie uczniów w różne style i gatunki muzyczne, rozwijanie ich wrażliwości na muzykę klasyczną, jazzową, popularną i inne.",
                    "en" => "Introducing students to various musical styles and genres, enhancing their sensitivity to classical, jazz, popular music, and more."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15456,
                "name" => json_encode([
                    "pl" => "Uczenie rozumienia wartości artystycznej utworów oraz kształtowanie estetyki muzycznej.",
                    "en" => "Teaching understanding of the artistic value of works and shaping musical aesthetics."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15457,
                "name" => json_encode([
                    "pl" => "Organizowanie prób, dobór repertuaru i przygotowanie uczniów do publicznych występów, koncertów, konkursów czy przeglądów.",
                    "en" => "Organizing rehearsals, selecting repertoire, and preparing students for public performances, concerts, competitions, or showcases."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15458,
                "name" => json_encode([
                    "pl" => "Wsparcie uczniów w zakresie radzenia sobie z tremą i presją występów publicznych oraz rozwijanie pewności siebie na scenie.",
                    "en" => "Supporting students in coping with stage fright and public performance pressure, while building their confidence on stage."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15459,
                "name" => json_encode([
                    "pl" => "Nauczanie teorii muzyki, w tym zasad notacji, rytmiki, harmonii, historii muzyki i form muzycznych.",
                    "en" => "Teaching music theory, including notation, rhythmics, harmony, music history, and musical forms."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15460,
                "name" => json_encode([
                    "pl" => "Przekazywanie podstawowych zasad teoretycznych w sposób przystępny i zrozumiały, dostosowany do poziomu uczniów.",
                    "en" => "Delivering fundamental theoretical principles in an accessible and understandable way, tailored to the student's level."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15461,
                "name" => json_encode([
                    "pl" => "Organizowanie ćwiczeń słuchowych, które pomagają uczniom w rozpoznawaniu dźwięków, interwałów, rytmów i harmonii.",
                    "en" => "Organizing ear-training exercises to help students recognize sounds, intervals, rhythms, and harmonies."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15462,
                "name" => json_encode([
                    "pl" => "Rozwijanie wyobraźni muzycznej, co umożliwia uczniom interpretację utworów oraz świadome podejście do muzyki.",
                    "en" => "Developing musical imagination, enabling students to interpret pieces and adopt a conscious approach to music."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15463,
                "name" => json_encode([
                    "pl" => "Zachęcanie uczniów do uczestniczenia w koncertach, spektaklach, festiwalach i innych wydarzeniach muzycznych.",
                    "en" => "Encouraging students to attend concerts, performances, festivals, and other musical events."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15464,
                "name" => json_encode([
                    "pl" => "Informowanie o możliwościach rozwijania zainteresowań muzycznych, takich jak konkursy, warsztaty muzyczne, przeglądy.",
                    "en" => "Providing information about opportunities to develop musical interests, such as competitions, music workshops, and showcases."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15465,
                "name" => json_encode([
                    "pl" => "Organizowanie zespołów instrumentalnych, orkiestr, chórów lub zespołów wokalnych, które uczą współpracy, harmonii i wspólnego wykonywania muzyki.",
                    "en" => "Organizing instrumental ensembles, orchestras, choirs, or vocal groups to teach cooperation, harmony, and collaborative music-making."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15466,
                "name" => json_encode([
                    "pl" => "Przygotowanie zespołów do występów publicznych oraz rozwijanie umiejętności zespołowych, takich jak synchronizacja, balans dźwięku i interpretacja.",
                    "en" => "Preparing ensembles for public performances and developing group skills such as synchronization, sound balance, and interpretation."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15467,
                "name" => json_encode([
                    "pl" => "Planowanie i organizacja koncertów, recitali, przeglądów, które umożliwiają uczniom prezentację swoich umiejętności i postępów.",
                    "en" => "Planning and organizing concerts, recitals, and showcases that allow students to present their skills and progress."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15468,
                "name" => json_encode([
                    "pl" => "Dbanie o oprawę organizacyjną wydarzeń, współpraca z innymi nauczycielami oraz promocja wydarzeń w społeczności lokalnej.",
                    "en" => "Managing the organizational framework of events, collaborating with other teachers, and promoting events within the local community."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15469,
                "name" => json_encode([
                    "pl" => "Regularne ocenianie postępów uczniów, prowadzenie zapisów, udzielanie konstruktywnej informacji zwrotnej dotyczącej ich pracy i zaangażowania.",
                    "en" => "Regularly assessing students' progress, maintaining records, and providing constructive feedback on their work and engagement."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15470,
                "name" => json_encode([
                    "pl" => "Ustalanie z uczniem celów rozwojowych i dostosowywanie planu nauki w zależności od jego postępów.",
                    "en" => "Setting developmental goals with students and adjusting the learning plan based on their progress."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15471,
                "name" => json_encode([
                    "pl" => "Nauczanie podstaw improwizacji oraz swobodnego posługiwania się materiałem muzycznym, co rozwija kreatywność uczniów.",
                    "en" => "Teaching the basics of improvisation and free handling of musical material to develop students' creativity."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15472,
                "name" => json_encode([
                    "pl" => "Wprowadzenie do improwizacji w różnych stylach muzycznych, takich jak jazz, blues, muzyka ludowa, co poszerza zakres umiejętności muzycznych.",
                    "en" => "Introducing improvisation in various musical styles, such as jazz, blues, and folk music, to broaden musical skills."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15473,
                "name" => json_encode([
                    "pl" => "Informowanie rodziców o postępach dziecka, udzielanie wskazówek dotyczących dalszego rozwoju muzycznego.",
                    "en" => "Informing parents about their child's progress and providing guidance on further musical development."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15474,
                "name" => json_encode([
                    "pl" => "Organizowanie spotkań i konsultacji z rodzicami, szczególnie w zakresie przygotowań do występów i konkursów.",
                    "en" => "Organizing meetings and consultations with parents, especially regarding preparations for performances and competitions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15475,
                "name" => json_encode([
                    "pl" => "Inspirowanie uczniów do pracy nad własnym rozwojem muzycznym, zachęcanie do samodzielnych ćwiczeń i rozwijania zainteresowań.",
                    "en" => "Inspiring students to work on their own musical development, encouraging self-practice and exploring interests."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15476,
                "name" => json_encode([
                    "pl" => "Udzielanie wskazówek dotyczących ścieżek kariery muzycznej, wyboru szkół muzycznych lub kontynuowania nauki w szkołach artystycznych.",
                    "en" => "Providing guidance on musical career paths, choosing music schools, or continuing education in arts institutions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15477,
                "name" => json_encode([
                    "pl" => "Pomoc uczniom w radzeniu sobie ze stresem związanym z występami publicznymi oraz nauka technik relaksacyjnych.",
                    "en" => "Helping students manage stress related to public performances and teaching relaxation techniques."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15478,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie ćwiczeń oddechowych i relaksacyjnych, które pomagają uczniom w budowaniu pewności siebie na scenie.",
                    "en" => "Conducting breathing and relaxation exercises to help students build confidence on stage."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15479,
                "name" => json_encode([
                    "pl" => "Współpraca z innymi nauczycielami muzyki, organizacjami kulturalnymi, instytucjami edukacyjnymi w celu organizowania wspólnych projektów artystycznych.",
                    "en" => "Collaborating with other music teachers, cultural organizations, and educational institutions to organize joint artistic projects."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15480,
                "name" => json_encode([
                    "pl" => "Współpraca z lokalnymi instytucjami w celu organizacji wydarzeń muzycznych, festiwali, przeglądów.",
                    "en" => "Collaborating with local institutions to organize musical events, festivals, and reviews."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15481,
                "name" => json_encode([
                    "pl" => "Przekazywanie wartości związanych z odpowiedzialnością artystyczną, szacunkiem dla własnych i cudzych talentów oraz prawami autorskimi.",
                    "en" => "Conveying values related to artistic responsibility, respect for one's own and others' talents, and copyright laws."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15482,
                "name" => json_encode([
                    "pl" => "Uczenie etycznych postaw wobec pracy artystycznej, szacunku do twórczości innych artystów oraz odpowiedzialności za swoje działania jako muzyka.",
                    "en" => "Teaching ethical attitudes towards artistic work, respect for other artists' creations, and responsibility for one's actions as a musician."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15483,
                "name" => json_encode([
                    "pl" => "Systematyczne prowadzenie dokumentacji zajęć, ewidencjonowanie obecności i postępów uczniów.",
                    "en" => "Systematically maintaining class records, tracking attendance, and documenting students' progress."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15484,
                "name" => json_encode([
                    "pl" => "Przygotowywanie raportów, ocen i dokumentacji, które są potrzebne do monitorowania pracy z uczniem i oceny jego osiągnięć.",
                    "en" => "Preparing reports, evaluations, and documentation necessary for monitoring students' work and assessing their achievements."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15485,
                "name" => json_encode([
                    "pl" => "Nauczanie podstaw pracy z technologiami muzycznymi, takimi jak programy do edycji dźwięku, syntezatory, efekty dźwiękowe.",
                    "en" => "Teaching the basics of working with music technologies, such as sound editing programs, synthesizers, and sound effects."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15486,
                "name" => json_encode([
                    "pl" => "Organizowanie zajęć, które wprowadzają uczniów do tworzenia i edytowania muzyki za pomocą nowoczesnych narzędzi technologicznych.",
                    "en" => "Organizing classes introducing students to creating and editing music with modern technological tools."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15487,
                "name" => json_encode([
                    "pl" => "Uczenie odpowiedniego zachowania na scenie, postawy, interakcji z publicznością, co jest kluczowe dla profesjonalnych występów.",
                    "en" => "Teaching proper stage behavior, posture, and audience interaction, which are crucial for professional performances."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15488,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie prób generalnych oraz ćwiczeń scenicznych, które pomagają uczniom poczuć się pewnie i swobodnie w sytuacjach publicznych.",
                    "en" => "Conducting dress rehearsals and stage exercises to help students feel confident and comfortable in public situations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15489,
                "name" => json_encode([
                    "pl" => "Zachęcanie uczniów do samodzielnego poszukiwania rozwiązań muzycznych, kreatywnego interpretowania utworów oraz tworzenia własnych aranżacji.",
                    "en" => "Encouraging students to independently seek musical solutions, creatively interpret compositions, and create their own arrangements."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15490,
                "name" => json_encode([
                    "pl" => "Prowadzenie zajęć, które rozwijają indywidualne podejście do muzyki i uczą samodzielności w pracy artystycznej.",
                    "en" => "Conducting classes that develop an individual approach to music and teach independence in artistic work."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15491,
                "name" => json_encode([
                    "pl" => "Wprowadzenie uczniów w różnorodne tradycje muzyczne i kultury, rozwijanie otwartości na różnorodność dźwiękową świata.",
                    "en" => "Introducing students to diverse musical traditions and cultures, fostering openness to the world's sonic diversity."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15492,
                "name" => json_encode([
                    "pl" => "Nauczanie muzyki ludowej, etnicznej, tradycyjnej, co pozwala uczniom poznać szerokie spektrum muzyczne i zwiększyć ich zrozumienie dla odmiennych kultur.",
                    "en" => "Teaching folk, ethnic, and traditional music, allowing students to explore a wide musical spectrum and enhance their understanding of different cultures."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15493,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie ćwiczeń rytmicznych, które uczą utrzymywania stałego tempa i pomagają w rozwijaniu precyzji rytmicznej.",
                    "en" => "Conducting rhythmic exercises that teach maintaining a steady tempo and help develop rhythmic precision."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15494,
                "name" => json_encode([
                    "pl" => "Nauczanie pracy z metronomem, rozwijanie zdolności synchronizacji oraz rozumienia struktury rytmicznej utworów.",
                    "en" => "Teaching the use of a metronome, developing synchronization skills, and understanding the rhythmic structure of compositions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15495,
                "name" => json_encode([
                    "pl" => "Wprowadzenie podstaw kompozycji, nauczanie zasad tworzenia melodii, harmonii, rytmu, co pozwala uczniom tworzyć własne utwory.",
                    "en" => "Introducing the basics of composition, teaching principles of melody, harmony, and rhythm creation, enabling students to create their own pieces."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15496,
                "name" => json_encode([
                    "pl" => "Wspieranie kreatywności uczniów poprzez zadania kompozytorskie, które rozwijają ich zdolności twórcze i zrozumienie struktury muzycznej.",
                    "en" => "Supporting students' creativity through compositional tasks that enhance their creative abilities and understanding of musical structure."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $NAUCZYCIEL_SZTUKI_W_PLACÓWKACH_POZASZKOLNYCH=[
            [
                "id" => 15497,
                "name" => json_encode([
                    "pl" => "Nauczanie podstaw rysunku, malarstwa, rzeźby, grafiki, projektowania i innych form plastycznych, dostosowanych do poziomu i potrzeb uczniów.",
                    "en" => "Teaching the basics of drawing, painting, sculpture, graphics, design, and other plastic arts, tailored to the students' level and needs."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15498,
                "name" => json_encode([
                    "pl" => "Przekazywanie wiedzy technicznej i praktycznej na temat różnych narzędzi, technik i materiałów wykorzystywanych w sztuce.",
                    "en" => "Providing technical and practical knowledge about various tools, techniques, and materials used in the arts."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15499,
                "name" => json_encode([
                    "pl" => "Organizowanie ćwiczeń, które rozwijają precyzję ruchów, koordynację manualną oraz wyobraźnię przestrzenną.",
                    "en" => "Organizing exercises that develop movement precision, manual coordination, and spatial imagination."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15500,
                "name" => json_encode([
                    "pl" => "Zachęcanie uczestników do eksperymentowania z różnorodnymi technikami i formami artystycznymi.",
                    "en" => "Encouraging participants to experiment with various artistic techniques and forms."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15501,
                "name" => json_encode([
                    "pl" => "Nauczanie zasad kompozycji, proporcji, perspektywy, światłocienia oraz rozwijanie umiejętności uważnego obserwowania otoczenia.",
                    "en" => "Teaching the principles of composition, proportion, perspective, chiaroscuro, and developing skills in careful observation of the surroundings."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15502,
                "name" => json_encode([
                    "pl" => "Wspieranie uczestników w rozwijaniu indywidualnego stylu i podejścia artystycznego.",
                    "en" => "Supporting participants in developing their individual style and artistic approach."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15503,
                "name" => json_encode([
                    "pl" => "Opracowywanie planów zajęć i programów, które dostosowane są do wieku, poziomu i zainteresowań uczestników.",
                    "en" => "Developing lesson plans and programs tailored to the age, level, and interests of the participants."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15504,
                "name" => json_encode([
                    "pl" => "Przygotowywanie materiałów dydaktycznych, wzorców prac, przykładów i inspiracji, które wspierają proces twórczy.",
                    "en" => "Preparing educational materials, work samples, examples, and inspiration to support the creative process."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15505,
                "name" => json_encode([
                    "pl" => "Zachęcanie uczestników do twórczego myślenia, eksperymentowania oraz wyrażania swoich emocji i myśli poprzez sztukę.",
                    "en" => "Encouraging participants to think creatively, experiment, and express their emotions and thoughts through art."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15506,
                "name" => json_encode([
                    "pl" => "Wspieranie swobodnej ekspresji, inspirowanie do szukania nowych form wyrazu i rozwijania oryginalnych pomysłów.",
                    "en" => "Supporting free expression, inspiring the search for new forms of expression, and developing original ideas."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15507,
                "name" => json_encode([
                    "pl" => "Wprowadzenie uczniów do różnych technik i materiałów, takich jak malarstwo akrylowe, akwarela, węgiel, tusz, gips, glina, i inne.",
                    "en" => "Introducing students to various techniques and materials, such as acrylic painting, watercolor, charcoal, ink, plaster, clay, and others."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15508,
                "name" => json_encode([
                    "pl" => "Uczenie zasad posługiwania się różnymi narzędziami, np. pędzlami, ołówkami, dłutami, sztalugami.",
                    "en" => "Teaching the use of various tools, such as brushes, pencils, chisels, easels."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15509,
                "name" => json_encode([
                    "pl" => "Wprowadzenie podstawowej wiedzy o historii sztuki, stylach, nurtach i technikach, aby uczestnicy rozumieli kontekst swojej pracy.",
                    "en" => "Introducing basic knowledge of art history, styles, movements, and techniques, so participants understand the context of their work."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15510,
                "name" => json_encode([
                    "pl" => "Prowadzenie zajęć z teorii sztuki, omawianie słynnych dzieł i artystów, co inspiruje i pogłębia wiedzę uczniów.",
                    "en" => "Conducting lessons in art theory, discussing famous works and artists, which inspires and deepens students' knowledge."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15511,
                "name" => json_encode([
                    "pl" => "Organizowanie prób, wybór prac i wsparcie uczestników w przygotowaniach do prezentacji swoich dzieł na wystawach lub przeglądach artystycznych.",
                    "en" => "Organizing rehearsals, selecting works, and supporting participants in preparing their works for exhibitions or art reviews."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15512,
                "name" => json_encode([
                    "pl" => "Pomoc w aranżacji wystawy oraz wsparcie uczniów w rozwoju umiejętności prezentacji swojej pracy publicznie.",
                    "en" => "Assisting in exhibition arrangements and supporting students in developing skills for presenting their work publicly."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15513,
                "name" => json_encode([
                    "pl" => "Nauczanie rysunku od podstaw do zaawansowanych technik, takich jak portret, martwa natura, pejzaż, figura ludzka.",
                    "en" => "Teaching drawing from the basics to advanced techniques, such as portrait, still life, landscape, and the human figure."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15514,
                "name" => json_encode([
                    "pl" => "Organizowanie ćwiczeń, które uczą korzystania z różnych materiałów malarskich i sposobów pracy w różnych technikach.",
                    "en" => "Organizing exercises that teach the use of various painting materials and methods of working in different techniques."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15515,
                "name" => json_encode([
                    "pl" => "Rozpoznawanie talentów uczestników oraz dostosowywanie programu do ich indywidualnych zainteresowań i mocnych stron.",
                    "en" => "Recognizing participants' talents and adjusting the program to their individual interests and strengths."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15516,
                "name" => json_encode([
                    "pl" => "Wspieranie uczniów w rozwijaniu ich pasji oraz pomaganie im w wyrażaniu swoich unikalnych cech poprzez sztukę.",
                    "en" => "Supporting students in developing their passions and helping them express their unique qualities through art."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15517,
                "name" => json_encode([
                    "pl" => "Nauczanie technik rzeźby, modelowania w glinie, gipsie, papier-mâché oraz innych materiałach.",
                    "en" => "Teaching sculpture techniques, modeling in clay, plaster, paper-mâché, and other materials."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [

                "id" => 15518,
                "name" => json_encode([
                    "pl" => "Prowadzenie zajęć z zakresu tworzenia instalacji, form przestrzennych i innych technik trójwymiarowych.",
                    "en" => "Conducting lessons on creating installations, spatial forms, and other three-dimensional techniques."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [

                "id" => 15519,
                "name" => json_encode([
                    "pl" => "Regularne ocenianie postępów, udzielanie konstruktywnej informacji zwrotnej, co pomaga uczniom w rozwoju ich umiejętności.",
                    "en" => "Regularly assessing progress, providing constructive feedback, which helps students in developing their skills."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [

                "id" => 15520,
                "name" => json_encode([
                    "pl" => "Wspieranie uczestników w rozwijaniu samooceny i krytycznego podejścia do własnej twórczości.",
                    "en" => "Supporting participants in developing self-assessment and a critical approach to their own work."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [

                "id" => 15521,
                "name" => json_encode([
                    "pl" => "Zachęcanie uczestników do odwiedzania galerii, muzeów, wystaw i innych wydarzeń artystycznych.",
                    "en" => "Encouraging participants to visit galleries, museums, exhibitions, and other artistic events."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [

                "id" => 15522,
                "name" => json_encode([
                    "pl" => "Organizowanie wyjść kulturalnych i udziału w wydarzeniach artystycznych, co wzbogaca wiedzę i inspiruje do dalszej pracy.",
                    "en" => "Organizing cultural outings and participation in artistic events, which enriches knowledge and inspires further work."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [

                "id" => 15523,
                "name" => json_encode([
                    "pl" => "Budowanie przyjaznego środowiska, w którym uczestnicy czują się swobodnie i mogą wyrażać swoje myśli i uczucia poprzez sztukę.",
                    "en" => "Building a friendly environment where participants feel comfortable and can express their thoughts and feelings through art."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [

                "id" => 15524,
                "name" => json_encode([
                    "pl" => "Tworzenie przestrzeni sprzyjającej kreatywności i otwartości, gdzie uczniowie mogą eksperymentować bez obawy o ocenę.",
                    "en" => "Creating a space conducive to creativity and openness, where students can experiment without fear of judgment."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [

                "id" => 15525,
                "name" => json_encode([
                    "pl" => "Informowanie rodziców o postępach ich dzieci, organizowanie spotkań, aby omawiać potrzeby rozwojowe i zainteresowania.",
                    "en" => "Informing parents about their children's progress, organizing meetings to discuss developmental needs and interests."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [

                "id" => 15526,
                "name" => json_encode([
                    "pl" => "Zapraszanie rodziców na wystawy i pokazy prac, aby wspierać rozwój artystyczny młodych uczestników.",
                    "en" => "Inviting parents to exhibitions and work presentations to support the artistic development of young participants."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [

                "id" => 15527,
                "name" => json_encode([
                    "pl" => "Zachęcanie do wyrażania emocji i myśli poprzez tworzenie artystyczne, co sprzyja rozwojowi emocjonalnemu uczestników.",
                    "en" => "Encouraging expression of emotions and thoughts through artistic creation, which fosters emotional development of participants."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [

                "id" => 15528,
                "name" => json_encode([
                    "pl" => "Prowadzenie zajęć terapeutycznych, które pomagają w radzeniu sobie ze stresem i wspierają rozwój osobisty.",
                    "en" => "Conducting therapeutic sessions that help manage stress and support personal development."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [

                "id" => 15529,
                "name" => json_encode([
                    "pl" => "Dokumentowanie postępów, zapisów z zajęć, prowadzenie notatek na temat prac uczestników oraz tworzenie raportów.",
                    "en" => "Documenting progress, lesson records, taking notes about participants' works, and creating reports."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [

                "id" => 15530,
                "name" => json_encode([
                    "pl" => "Archiwizowanie prac uczestników, prowadzenie dokumentacji fotograficznej lub cyfrowej.",
                    "en" => "Archiving participants' works, maintaining photographic or digital documentation."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [

                "id" => 15531,
                "name" => json_encode([
                    "pl" => "Nauczanie zasad kompozycji, balansu, rytmu i harmonii w obrazie, co pozwala uczestnikom na świadome tworzenie swoich dzieł.",
                    "en" => "Teaching the principles of composition, balance, rhythm, and harmony in images, which allows participants to consciously create their works."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [

                "id" => 15532,
                "name" => json_encode([
                    "pl" => "Organizowanie ćwiczeń kompozycyjnych, które uczą planowania przestrzeni i dobierania elementów w sposób estetyczny.",
                    "en" => "Organizing compositional exercises that teach space planning and selecting elements aesthetically."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [

                "id" => 15533,
                "name" => json_encode([
                    "pl" => "Uczenie uczestników analizy prac artystycznych, interpretacji i krytycznej oceny różnych form sztuki.",
                    "en" => "Teaching participants to analyze artworks, interpret, and critically assess different forms of art."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [

                "id" => 15534,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie dyskusji na temat prac innych artystów oraz wspieranie refleksji nad własną twórczością.",
                    "en" => "Conducting discussions about the works of other artists and supporting reflection on one's own creative work."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [

                "id" => 15535,
                "name" => json_encode([
                    "pl" => "Nauczanie technik graficznych, takich jak linoryt, monotypia, serigrafia, oraz podstaw projektowania graficznego.",
                    "en" => "Teaching graphic techniques such as linocut, monotype, screen printing, and the basics of graphic design."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [

                "id" => 15536,
                "name" => json_encode([
                    "pl" => "Organizowanie zajęć z grafiki komputerowej i edycji cyfrowej, które wprowadzają uczestników do nowoczesnych technologii.",
                    "en" => "Organizing sessions on computer graphics and digital editing, introducing participants to modern technologies."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [

                "id" => 15537,
                "name" => json_encode([
                    "pl" => "Organizowanie plenerów malarskich, rysunkowych, wyjazdów do miejsc inspirujących artystycznie, co pozwala uczestnikom rozwijać umiejętności w naturalnym środowisku.",
                    "en" => "Organizing painting and drawing plein air sessions, trips to artistically inspiring places, allowing participants to develop their skills in a natural environment."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15538,
                "name" => json_encode([
                    "pl" => "Wspieranie uczestników w nauce pracy w plenerze, co rozwija ich umiejętności obserwacyjne i zdolność oddawania rzeczywistości w sztuce.",
                    "en" => "Supporting participants in learning to work outdoors, which enhances their observational skills and ability to capture reality in art."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [

                "id" => 15539,
                "name" => json_encode([
                    "pl" => "Przekazywanie wartości związanych z etyką artystyczną, szacunkiem dla pracy innych artystów, prawami autorskimi i odpowiedzialnym korzystaniem z inspiracji.",
                    "en" => "Conveying values related to artistic ethics, respect for the work of other artists, copyright laws, and responsible use of inspiration."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [

                "id" => 15540,
                "name" => json_encode([
                    "pl" => "Edukowanie o odpowiedzialności społecznej artysty oraz znaczeniu szacunku dla różnorodnych form wyrazu.",
                    "en" => "Educating about the social responsibility of artists and the importance of respecting diverse forms of expression."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [

                "id" => 15541,
                "name" => json_encode([
                    "pl" => "Współpraca z galeriami, muzeami, domami kultury, fundacjami, aby wspólnie organizować projekty artystyczne i edukacyjne.",
                    "en" => "Collaborating with galleries, museums, cultural centers, foundations to organize joint artistic and educational projects."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [

                "id" => 15542,
                "name" => json_encode([
                    "pl" => "Nawiązywanie kontaktów z lokalnymi instytucjami w celu wzbogacania doświadczeń artystycznych uczestników.",
                    "en" => "Establishing contacts with local institutions to enrich participants' artistic experiences."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [

                "id" => 15543,
                "name" => json_encode([
                    "pl" => "Udział w szkoleniach, kursach, warsztatach i konferencjach, aby stale rozwijać swoje umiejętności i być na bieżąco z trendami w edukacji artystycznej.",
                    "en" => "Participating in training, courses, workshops, and conferences to constantly develop one's skills and stay up-to-date with trends in art education."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [

                "id" => 15544,
                "name" => json_encode([
                    "pl" => "Poszerzanie wiedzy z zakresu sztuki, pedagogiki oraz nowych technik, aby zapewniać uczestnikom najwyższy poziom edukacji.",
                    "en" => "Expanding knowledge in art, pedagogy, and new techniques to provide participants with the highest level of education."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [

                "id" => 15545,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie dyskusji na temat prac innych artystów oraz wspieranie refleksji nad własną twórczością.",
                    "en" => "Conducting discussions about the works of other artists and supporting reflection on one's own creative work."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [

                "id" => 15546,
                "name" => json_encode([
                    "pl" => "Nauczanie technik graficznych, takich jak linoryt, monotypia, serigrafia, oraz podstaw projektowania graficznego.",
                    "en" => "Teaching graphic techniques such as linocut, monotype, screen printing, and the basics of graphic design."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [

                "id" => 15547,
                "name" => json_encode([
                    "pl" => "Organizowanie zajęć z grafiki komputerowej i edycji cyfrowej, które wprowadzają uczestników do nowoczesnych technologii.",
                    "en" => "Organizing sessions on computer graphics and digital editing, introducing participants to modern technologies."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [

                "id" => 15548,
                "name" => json_encode([
                    "pl" => "Organizowanie plenerów malarskich, rysunkowych, wyjazdów do miejsc inspirujących artystycznie, co pozwala uczestnikom rozwijać umiejętności w naturalnym środowisku.",
                    "en" => "Organizing painting and drawing plein air sessions, trips to artistically inspiring places, allowing participants to develop their skills in a natural environment."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [

                "id" => 15549,
                "name" => json_encode([
                    "pl" => "Wspieranie uczestników w nauce pracy w plenerze, co rozwija ich umiejętności obserwacyjne i zdolność oddawania rzeczywistości w sztuce.",
                    "en" => "Supporting participants in learning to work outdoors, which enhances their observational skills and ability to capture reality in art."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [

                "id" => 15550,
                "name" => json_encode([
                    "pl" => "Przekazywanie wartości związanych z etyką artystyczną, szacunkiem dla pracy innych artystów, prawami autorskimi i odpowiedzialnym korzystaniem z inspiracji.",
                    "en" => "Conveying values related to artistic ethics, respect for the work of other artists, copyright laws, and responsible use of inspiration."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [

                "id" => 15551,
                "name" => json_encode([
                    "pl" => "Edukowanie o odpowiedzialności społecznej artysty oraz znaczeniu szacunku dla różnorodnych form wyrazu.",
                    "en" => "Educating about the social responsibility of artists and the importance of respecting diverse forms of expression."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [

                "id" => 15552,
                "name" => json_encode([
                    "pl" => "Współpraca z galeriami, muzeami, domami kultury, fundacjami, aby wspólnie organizować projekty artystyczne i edukacyjne.",
                    "en" => "Collaborating with galleries, museums, cultural centers, foundations to organize joint artistic and educational projects."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [

                "id" => 15553,
                "name" => json_encode([
                    "pl" => "Nawiązywanie kontaktów z lokalnymi instytucjami w celu wzbogacania doświadczeń artystycznych uczestników.",
                    "en" => "Establishing contacts with local institutions to enrich participants' artistic experiences."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [

                "id" => 15554,
                "name" => json_encode([
                    "pl" => "Udział w szkoleniach, kursach, warsztatach i konferencjach, aby stale rozwijać swoje umiejętności i być na bieżąco z trendami w edukacji artystycznej.",
                    "en" => "Participating in training, courses, workshops, and conferences to constantly develop one's skills and stay up-to-date with trends in art education."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [

                "id" => 15555,
                "name" => json_encode([
                    "pl" => "Poszerzanie wiedzy z zakresu sztuki, pedagogiki oraz nowych technik, aby zapewniać uczestnikom najwyższy poziom edukacji.",
                    "en" => "Expanding knowledge in art, pedagogy, and new techniques to provide participants with the highest level of education."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]

        ];
        $NAUCZYCIEL_W_PLACÓWKACH_POZASZKOLNYCH = [
            [
                "id" => 15556,
                "name" => json_encode([
                    "pl" => "Opracowywanie programów zajęć dostosowanych do wieku, zainteresowań i umiejętności uczestników.",
                    "en" => "Developing lesson plans tailored to the age, interests, and skills of the participants."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [

                "id" => 15557,
                "name" => json_encode([
                    "pl" => "Planowanie różnorodnych zajęć, takich jak warsztaty artystyczne, zajęcia sportowe, kursy językowe, zajęcia edukacyjne czy rozwijające umiejętności społeczne.",
                    "en" => "Planning various activities such as art workshops, sports classes, language courses, educational activities, or those developing social skills."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [

                "id" => 15558,
                "name" => json_encode([
                    "pl" => "Prowadzenie zajęć zgodnie z opracowanym programem, nauczanie konkretnych umiejętności związanych z tematyką zajęć (np. muzyka, plastyka, teatr, sport).",
                    "en" => "Conducting classes according to the developed program, teaching specific skills related to the subject of the classes (e.g. music, art, theater, sports)."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [

                "id" => 15559,
                "name" => json_encode([
                    "pl" => "Stosowanie różnych metod i form nauczania, aby zajęcia były ciekawe i angażujące dla uczestników.",
                    "en" => "Using various teaching methods and forms to make the classes interesting and engaging for the participants."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [

                "id" => 15560,
                "name" => json_encode([
                    "pl" => "Uwzględnianie indywidualnych potrzeb, możliwości i preferencji uczestników, szczególnie dzieci i młodzieży o różnych poziomach zaawansowania.",
                    "en" => "Taking into account the individual needs, abilities, and preferences of participants, especially children and youth of varying levels of proficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [

                "id" => 15561,
                "name" => json_encode([
                    "pl" => "Modyfikowanie zajęć w taki sposób, aby wspierać rozwój każdego uczestnika.",
                    "en" => "Modifying activities in a way that supports the development of each participant."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [

                "id" => 15562,
                "name" => json_encode([
                    "pl" => "Zachęcanie uczestników do twórczego myślenia, wyrażania siebie oraz samodzielnego podejmowania decyzji w zakresie realizowanych działań.",
                    "en" => "Encouraging participants to think creatively, express themselves, and make independent decisions regarding the activities being conducted."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [

                "id" => 15563,
                "name" => json_encode([
                    "pl" => "Wdrażanie ćwiczeń i projektów, które rozwijają kreatywność oraz umiejętność samodzielnej pracy.",
                    "en" => "Implementing exercises and projects that develop creativity and the ability to work independently."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [

                "id" => 15564,
                "name" => json_encode([
                    "pl" => "Zapewnienie atmosfery wsparcia i akceptacji, budowanie relacji opartych na zaufaniu, które sprzyjają wyrażaniu emocji.",
                    "en" => "Providing a supportive and accepting atmosphere, building relationships based on trust that encourage the expression of emotions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [

                "id" => 15565,
                "name" => json_encode([
                    "pl" => "Pomoc w rozwiązywaniu problemów emocjonalnych i społecznych, zachęcanie do współpracy i budowania pozytywnych relacji w grupie.",
                    "en" => "Assisting in resolving emotional and social problems, encouraging cooperation and building positive relationships within the group."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [

                "id" => 15566,
                "name" => json_encode([
                    "pl" => "Przygotowywanie uczestników do udziału w wydarzeniach, takich jak wystawy, koncerty, przeglądy, turnieje, pokazy.",
                    "en" => "Preparing participants for events such as exhibitions, concerts, reviews, tournaments, and performances."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [

                "id" => 15567,
                "name" => json_encode([
                    "pl" => "Organizacja prób i spotkań przygotowujących uczestników do występów, dbanie o oprawę organizacyjną wydarzeń.",
                    "en" => "Organizing rehearsals and meetings preparing participants for performances, taking care of the organizational aspects of the events."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [

                "id" => 15568,
                "name" => json_encode([
                    "pl" => "Nauczanie wartości takich jak szacunek, odpowiedzialność, empatia, uczciwość i współpraca.",
                    "en" => "Teaching values such as respect, responsibility, empathy, honesty, and cooperation."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [

                "id" => 15569,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie zajęć, które rozwijają umiejętności społeczne oraz postawy obywatelskie i prospołeczne.",
                    "en" => "Conducting classes that develop social skills and civic and pro-social attitudes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15570,
                "name" => json_encode([
                    "pl" => "Pomoc w odkrywaniu i rozwijaniu zainteresowań, poprzez zajęcia dostosowane do indywidualnych pasji uczestników.",
                    "en" => "Helping to discover and develop interests through activities tailored to the participants' individual passions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15571,
                "name" => json_encode([
                    "pl" => "Inspirowanie do poszerzania wiedzy i zdobywania nowych umiejętności zgodnych z zainteresowaniami uczestników.",
                    "en" => "Inspiring participants to expand their knowledge and acquire new skills aligned with their interests."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15572,
                "name" => json_encode([
                    "pl" => "Organizowanie zajęć, które uczą szacunku dla innych kultur, promują tolerancję, zrozumienie i otwartość.",
                    "en" => "Organizing activities that teach respect for other cultures, promote tolerance, understanding, and openness."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15573,
                "name" => json_encode([
                    "pl" => "Dbałość o rozwój intelektualny i emocjonalny uczestników, stwarzanie warunków do efektywnej nauki i samodzielnego myślenia.",
                    "en" => "Taking care of the intellectual and emotional development of participants, creating conditions for effective learning and independent thinking."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15574,
                "name" => json_encode([
                    "pl" => "Prowadzenie zajęć, które uczą odpowiedzialności za siebie i innych, oraz jak współdziałać w zespole.",
                    "en" => "Conducting classes that teach responsibility for oneself and others, and how to collaborate in a team."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $SPECJALISTA_DO_SPRAW_ZARZĄDZANIA_W_OŚWIACIE = [
            [
                "id" => 15575,
                "name" => json_encode([
                    "pl" => "Opracowywanie planów krótko- i długoterminowych dla placówki oświatowej, zgodnych z jej celami i misją.",
                    "en" => "Developing short- and long-term plans for the educational institution, aligned with its goals and mission."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15576,
                "name" => json_encode([
                    "pl" => "Tworzenie planów operacyjnych, które uwzględniają rozwój placówki, harmonogramy działań i cele edukacyjne.",
                    "en" => "Creating operational plans that account for the institution's development, activity schedules, and educational goals."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15577,
                "name" => json_encode([
                    "pl" => "Rekrutacja, zatrudnianie oraz nadzór nad pracą personelu, w tym nauczycieli, pracowników administracyjnych i obsługi.",
                    "en" => "Recruitment, hiring, and supervision of staff, including teachers, administrative employees, and support personnel."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15578,
                "name" => json_encode([
                    "pl" => "Planowanie szkoleń i rozwoju zawodowego dla pracowników, motywowanie zespołu oraz ocena ich wyników.",
                    "en" => "Planning training and professional development for employees, motivating the team, and evaluating their performance."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15579,
                "name" => json_encode([
                    "pl" => "Nadzór nad prowadzeniem dokumentacji administracyjnej placówki, takiej jak arkusze organizacyjne, ewidencja uczniów, sprawy kadrowe.",
                    "en" => "Supervising the administration of institutional documentation, such as organizational charts, student records, and personnel matters."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15580,
                "name" => json_encode([
                    "pl" => "Dbanie o sprawny obieg dokumentów i przestrzeganie obowiązujących procedur.",
                    "en" => "Ensuring the smooth circulation of documents and adherence to applicable procedures."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15581,
                "name" => json_encode([
                    "pl" => "Opracowywanie budżetu rocznego placówki, planowanie wydatków, monitorowanie wydatkowania środków.",
                    "en" => "Developing the institution's annual budget, planning expenses, and monitoring the allocation of funds."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15582,
                "name" => json_encode([
                    "pl" => "Pozyskiwanie funduszy z różnych źródeł (dotacje, granty, sponsorzy) oraz odpowiedzialne gospodarowanie finansami.",
                    "en" => "Securing funds from various sources (grants, sponsorships) and managing finances responsibly."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15583,
                "name" => json_encode([
                    "pl" => "Śledzenie zmian w prawie oświatowym i wprowadzanie odpowiednich działań, aby placówka spełniała wymogi prawne i regulacyjne.",
                    "en" => "Tracking changes in educational law and implementing appropriate actions to ensure compliance with legal and regulatory requirements."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15584,
                "name" => json_encode([
                    "pl" => "Nadzór nad wdrażaniem i przestrzeganiem procedur związanych z bezpieczeństwem i higieną pracy.",
                    "en" => "Supervision of the implementation and adherence to procedures related to occupational safety and hygiene."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15585,
                "name" => json_encode([
                    "pl" => "Nadzór nad stanem technicznym budynków, pomieszczeń oraz wyposażenia placówki.",
                    "en" => "Supervision of the technical condition of buildings, rooms, and equipment within the institution."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15586,
                "name" => json_encode([
                    "pl" => "Organizowanie konserwacji, napraw, zakupów sprzętu oraz dbanie o estetykę i funkcjonalność przestrzeni szkolnej.",
                    "en" => "Organizing maintenance, repairs, equipment purchases, and ensuring the aesthetic and functional quality of the school environment."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15587,
                "name" => json_encode([
                    "pl" => "Tworzenie i nadzorowanie zespołów zadaniowych, które realizują projekty edukacyjne, społeczne lub modernizacyjne w placówce.",
                    "en" => "Creating and supervising task teams that carry out educational, social, or modernization projects within the institution."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15588,
                "name" => json_encode([
                    "pl" => "Wsparcie pracy zespołów, organizowanie spotkań, wyznaczanie zadań i monitorowanie postępów.",
                    "en" => "Supporting team work, organizing meetings, assigning tasks, and monitoring progress."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15589,
                "name" => json_encode([
                    "pl" => "Ustalanie harmonogramów zajęć, uroczystości, egzaminów i innych wydarzeń, które mają miejsce w placówce.",
                    "en" => "Setting schedules for classes, ceremonies, exams, and other events taking place within the institution."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15590,
                "name" => json_encode([
                    "pl" => "Koordynacja terminów z innymi placówkami, instytucjami i rodzicami, aby zapewnić płynność działań.",
                    "en" => "Coordinating schedules with other institutions, organizations, and parents to ensure smooth operations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15591,
                "name" => json_encode([
                    "pl" => "Monitorowanie jakości nauczania, analiza wyników edukacyjnych uczniów oraz wdrażanie działań naprawczych, gdy jest to potrzebne.",
                    "en" => "Monitoring teaching quality, analyzing student educational outcomes, and implementing corrective actions when needed."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15592,
                "name" => json_encode([
                    "pl" => "Współpraca z dyrekcją i nauczycielami w zakresie rozwoju oferty edukacyjnej i podnoszenia standardów nauczania.",
                    "en" => "Collaborating with the school management and teachers on developing the educational offer and raising teaching standards."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15593,
                "name" => json_encode([
                    "pl" => "Opracowywanie strategii promocyjnych, współpraca z mediami, prowadzenie działań PR i marketingowych.",
                    "en" => "Developing promotional strategies, collaborating with media, and conducting PR and marketing activities."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15594,
                "name" => json_encode([
                    "pl" => "Organizowanie dni otwartych, targów edukacyjnych, spotkań z rodzicami oraz współpraca ze społecznością lokalną.",
                    "en" => "Organizing open days, educational fairs, parent meetings, and collaborating with the local community."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15595,
                "name" => json_encode([
                    "pl" => "Pisanie wniosków o granty, dotacje oraz pozyskiwanie sponsorów na projekty edukacyjne i rozwojowe placówki.",
                    "en" => "Writing grant applications, obtaining sponsorships, and securing funding for educational and developmental projects."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15596,
                "name" => json_encode([
                    "pl" => "Zarządzanie funduszami projektowymi, przygotowywanie raportów i dokumentacji dla instytucji finansujących.",
                    "en" => "Managing project funds, preparing reports, and documentation for funding institutions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15597,
                "name" => json_encode([
                    "pl" => "Opracowywanie wewnętrznych polityk i regulaminów, takich jak polityka antymobbingowa, bezpieczeństwa, antydyskryminacyjna.",
                    "en" => "Developing internal policies and regulations, such as anti-bullying, safety, and anti-discrimination policies."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15598,
                "name" => json_encode([
                    "pl" => "Utrzymywanie procedur zgodnych z obowiązującymi przepisami i wymaganiami administracyjnymi.",
                    "en" => "Maintaining procedures in compliance with current regulations and administrative requirements."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15599,
                "name" => json_encode([
                    "pl" => "Gromadzenie danych dotyczących wyników placówki, frekwencji, wyników egzaminów, efektywności programów i projektów.",
                    "en" => "Collecting data on the institution's results, attendance, exam scores, and the effectiveness of programs and projects."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15600,
                "name" => json_encode([
                    "pl" => "Przygotowywanie raportów dla dyrekcji, organów prowadzących oraz innych zainteresowanych instytucji.",
                    "en" => "Preparing reports for the management, supervising bodies, and other relevant institutions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15601,
                "name" => json_encode([
                    "pl" => "Organizowanie spotkań, warsztatów oraz konsultacji z rodzicami, aby budować dobre relacje i wspierać ich zaangażowanie.",
                    "en" => "Organizing meetings, workshops, and consultations with parents to build good relationships and support their engagement."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15602,
                "name" => json_encode([
                    "pl" => "Współpraca z lokalnymi instytucjami, organizacjami pozarządowymi, urzędami oraz firmami.",
                    "en" => "Cooperating with local institutions, non-governmental organizations, authorities, and businesses."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15603,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie regularnych kontroli BHP, dbanie o przestrzeganie przepisów bezpieczeństwa oraz organizowanie szkoleń dla pracowników.",
                    "en" => "Conducting regular health and safety inspections, ensuring compliance with safety regulations, and organizing training for staff."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15604,
                "name" => json_encode([
                    "pl" => "Wdrażanie procedur dotyczących bezpieczeństwa przeciwpożarowego, ewakuacji oraz planów działania w sytuacjach kryzysowych.",
                    "en" => "Implementing fire safety, evacuation procedures, and emergency response plans."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15605,
                "name" => json_encode([
                    "pl" => "Planowanie szkoleń, warsztatów oraz kursów dla nauczycieli i personelu administracyjnego.",
                    "en" => "Planning training sessions, workshops, and courses for teachers and administrative staff."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15606,
                "name" => json_encode([
                    "pl" => "Monitorowanie postępów w rozwoju zawodowym pracowników, wspieranie ich awansu i podnoszenia kwalifikacji.",
                    "en" => "Monitoring professional development progress of employees, supporting their promotion and qualifications improvement."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15607,
                "name" => json_encode([
                    "pl" => "Organizowanie i nadzorowanie procesów rekrutacyjnych uczniów, przygotowanie dokumentacji, prowadzenie rozmów z rodzicami.",
                    "en" => "Organizing and overseeing student recruitment processes, preparing documentation, and conducting discussions with parents."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15608,
                "name" => json_encode([
                    "pl" => "Wspieranie uczniów i rodziców podczas procesu rekrutacyjnego, udzielanie informacji oraz wyjaśnianie wymagań placówki.",
                    "en" => "Supporting students and parents during the recruitment process, providing information, and clarifying the institution's requirements."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15609,
                "name" => json_encode([
                    "pl" => "Planowanie, wdrażanie oraz monitorowanie projektów, które wspierają rozwój uczniów, innowacje edukacyjne oraz modernizację placówki.",
                    "en" => "Planning, implementing, and monitoring projects that support student development, educational innovations, and institution modernization."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15610,
                "name" => json_encode([
                    "pl" => "Nadzór nad realizacją projektów zgodnie z założeniami, budżetem i harmonogramem.",
                    "en" => "Supervising the implementation of projects in accordance with the assumptions, budget, and schedule."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15611,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie analiz efektywności działań placówki, identyfikowanie mocnych i słabych stron oraz wdrażanie działań usprawniających.",
                    "en" => "Conducting efficiency analysis of the institution's activities, identifying strengths and weaknesses, and implementing improvement actions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15612,
                "name" => json_encode([
                    "pl" => "Przygotowywanie raportów ewaluacyjnych na potrzeby dyrekcji, rady pedagogicznej oraz instytucji nadzorujących.",
                    "en" => "Preparing evaluation reports for the management, pedagogical council, and supervising institutions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15613,
                "name" => json_encode([
                    "pl" => "Planowanie zakupu sprzętu komputerowego, oprogramowania, nowoczesnych narzędzi edukacyjnych.",
                    "en" => "Planning the purchase of computer equipment, software, and modern educational tools."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15614,
                "name" => json_encode([
                    "pl" => "Nadzór nad stanem technicznym sprzętu i technologii, organizacja szkoleń dla pracowników z zakresu ich obsługi.",
                    "en" => "Supervising the technical condition of equipment and technology, organizing training for staff on their operation."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15615,
                "name" => json_encode([
                    "pl" => "Współpraca z dyrekcją i nauczycielami w zakresie wprowadzania nowych programów, zajęć dodatkowych i innowacji pedagogicznych.",
                    "en" => "Collaborating with the management and teachers on the implementation of new programs, extracurricular activities, and educational innovations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15616,
                "name" => json_encode([
                    "pl" => "Analizowanie potrzeb uczniów oraz rodziców, aby dostosować ofertę edukacyjną do ich oczekiwań i wymagań rynkowych.",
                    "en" => "Analyzing the needs of students and parents to adjust the educational offer to their expectations and market requirements."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15617,
                "name" => json_encode([
                    "pl" => "Wdrażanie wartości, misji i wizji placówki oraz budowanie przyjaznej kultury pracy.",
                    "en" => "Implementing the institution's values, mission, and vision, and fostering a positive work culture."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15618,
                "name" => json_encode([
                    "pl" => "Organizowanie spotkań integracyjnych dla pracowników, tworzenie pozytywnej atmosfery i motywowanie zespołu.",
                    "en" => "Organizing integration meetings for employees, creating a positive atmosphere, and motivating the team."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15619,
                "name" => json_encode([
                    "pl" => "Kontakt z kuratorium oświaty, urzędami oraz instytucjami, które nadzorują lub wspierają placówkę.",
                    "en" => "Maintaining contact with the education board, authorities, and institutions that oversee or support the institution."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15620,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie audytów, kontroli oraz przygotowywanie wymaganych dokumentów i raportów.",
                    "en" => "Conducting audits, inspections, and preparing required documents and reports."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15621,
                "name" => json_encode([
                    "pl" => "Wdrażanie zasad etyki zawodowej, promowanie uczciwości, równości i poszanowania praw w placówce.",
                    "en" => "Implementing professional ethics principles, promoting honesty, equality, and respect for rights within the institution."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15622,
                "name" => json_encode([
                    "pl" => "Realizowanie działań, które wzmacniają odpowiedzialność społeczną placówki, takie jak wolontariat, wsparcie lokalnych inicjatyw, współpraca z organizacjami.",
                    "en" => "Implementing actions that strengthen the institution's social responsibility, such as volunteering, supporting local initiatives, and collaborating with organizations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $WYKŁADOWCA_NA_KURSACH = [
            [
                "id" => 15623,
                "name" => json_encode([
                    "pl" => "Opracowanie planu kursu oraz szczegółowych programów zajęć dostosowanych do poziomu wiedzy uczestników i celów kursu.",
                    "en" => "Developing the course plan and detailed lesson programs tailored to the knowledge level of participants and course objectives."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15624,
                "name" => json_encode([
                    "pl" => "Przygotowanie materiałów edukacyjnych, takich jak prezentacje, ćwiczenia, case studies, zestawy zadań oraz materiały dodatkowe.",
                    "en" => "Preparing educational materials such as presentations, exercises, case studies, sets of tasks, and additional materials."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15625,
                "name" => json_encode([
                    "pl" => "Przekazywanie wiedzy teoretycznej podczas wykładów i zajęć oraz prowadzenie zajęć praktycznych, które umożliwiają nabycie umiejętności praktycznych.",
                    "en" => "Delivering theoretical knowledge during lectures and classes, and conducting practical lessons that allow participants to acquire practical skills."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15626,
                "name" => json_encode([
                    "pl" => "Używanie różnych metod dydaktycznych, takich jak prezentacje multimedialne, ćwiczenia grupowe, symulacje, praca na przykładach, aby angażować uczestników.",
                    "en" => "Using various teaching methods such as multimedia presentations, group exercises, simulations, and case studies to engage participants."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15627,
                "name" => json_encode([
                    "pl" => "Dostosowanie treści i sposobu prowadzenia zajęć do poziomu wiedzy oraz oczekiwań uczestników, tak aby kurs był jak najbardziej efektywny.",
                    "en" => "Adapting the content and teaching methods to the knowledge level and expectations of participants to make the course as effective as possible."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15628,
                "name" => json_encode([
                    "pl" => "Uwzględnienie indywidualnych potrzeb uczestników i udzielanie dodatkowego wsparcia osobom, które tego potrzebują.",
                    "en" => "Considering the individual needs of participants and providing additional support to those who need it."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15629,
                "name" => json_encode([
                    "pl" => "Opracowanie testów, quizów, ćwiczeń i zadań kontrolnych, które pozwalają ocenić poziom opanowania materiału przez uczestników.",
                    "en" => "Developing tests, quizzes, exercises, and control tasks that allow evaluating the participants' level of material mastery."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15630,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie testów i egzaminów końcowych, które oceniają postępy oraz zdobyte przez uczestników umiejętności.",
                    "en" => "Conducting final tests and exams that assess participants' progress and the skills they have acquired."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15631,
                "name" => json_encode([
                    "pl" => "Regularne monitorowanie postępów uczestników, udzielanie im konstruktywnej informacji zwrotnej dotyczącej ich wyników i zaangażowania.",
                    "en" => "Regularly monitoring participants' progress, providing constructive feedback on their performance and engagement."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15632,
                "name" => json_encode([
                    "pl" => "Wskazywanie obszarów do poprawy oraz proponowanie rozwiązań, które pomagają w lepszym przyswajaniu materiału.",
                    "en" => "Identifying areas for improvement and proposing solutions that help better assimilate the material."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15633,
                "name" => json_encode([
                    "pl" => "Prowadzenie ćwiczeń, symulacji, case studies i projektów, które pozwalają uczestnikom zdobyć konkretne umiejętności i wykorzystać zdobytą wiedzę w praktyce.",
                    "en" => "Conducting exercises, simulations, case studies, and projects that allow participants to acquire specific skills and apply the knowledge gained in practice."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15634,
                "name" => json_encode([
                    "pl" => "Tworzenie sytuacji edukacyjnych zbliżonych do rzeczywistych wyzwań zawodowych, aby uczestnicy zdobywali doświadczenie.",
                    "en" => "Creating educational situations that resemble real-world professional challenges so that participants gain experience."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15635,
                "name" => json_encode([
                    "pl" => "Prowadzenie zajęć, które sprzyjają współpracy uczestników, komunikacji i budowaniu zespołu (jeśli kurs wymaga pracy grupowej).",
                    "en" => "Conducting lessons that promote cooperation, communication, and team building among participants (if the course requires group work)."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15636,
                "name" => json_encode([
                    "pl" => "Moderowanie dyskusji, wspieranie pracy w grupach, rozwiązywanie konfliktów i dbanie o dobrą atmosferę w grupie.",
                    "en" => "Moderating discussions, supporting group work, resolving conflicts, and maintaining a positive atmosphere within the group."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15637,
                "name" => json_encode([
                    "pl" => "Budowanie relacji opartej na wzajemnym szacunku i zaufaniu, wspieranie uczestników w ich procesie uczenia się.",
                    "en" => "Building relationships based on mutual respect and trust, supporting participants in their learning process."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15638,
                "name" => json_encode([
                    "pl" => "Dbanie o atmosferę otwartości, gdzie uczestnicy mogą swobodnie zadawać pytania i wyrażać swoje opinie.",
                    "en" => "Maintaining an open atmosphere where participants can freely ask questions and express their opinions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15639,
                "name" => json_encode([
                    "pl" => "Korzystanie z technologii i narzędzi edukacyjnych, takich jak platformy e-learningowe, aplikacje do prowadzenia quizów, tablice interaktywne, programy do wideokonferencji.",
                    "en" => "Using technology and educational tools such as e-learning platforms, quiz apps, interactive whiteboards, video conferencing programs."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15640,
                "name" => json_encode([
                    "pl" => "Przygotowanie multimedialnych prezentacji i materiałów online, które ułatwiają uczestnikom przyswajanie wiedzy.",
                    "en" => "Preparing multimedia presentations and online materials that help participants assimilate knowledge."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15641,
                "name" => json_encode([
                    "pl" => "Prowadzenie dokumentacji związanej z kursem, w tym list obecności, ocen, notatek dotyczących postępów uczestników.",
                    "en" => "Maintaining course-related documentation, including attendance lists, grades, and notes on participants' progress."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15642,
                "name" => json_encode([
                    "pl" => "Przygotowywanie raportów końcowych oraz analiz efektywności kursu na potrzeby organizatora lub instytucji zlecającej kurs.",
                    "en" => "Preparing final reports and analyzing the effectiveness of the course for the course organizer or commissioning institution."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15643,
                "name" => json_encode([
                    "pl" => "Udzielanie porad i wskazówek dotyczących możliwości wykorzystania zdobytej wiedzy w praktyce zawodowej.",
                    "en" => "Providing advice and guidance on how to apply the acquired knowledge in professional practice."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15644,
                "name" => json_encode([
                    "pl" => "Pomoc uczestnikom w opracowaniu ścieżki rozwoju zawodowego w oparciu o umiejętności zdobyte podczas kursu.",
                    "en" => "Helping participants develop a career development path based on the skills acquired during the course."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15645,
                "name" => json_encode([
                    "pl" => "Oferowanie dodatkowych zajęć lub indywidualnych konsultacji dla uczestników, którzy potrzebują dodatkowego wsparcia.",
                    "en" => "Offering additional classes or individual consultations to participants who need extra support."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15646,
                "name" => json_encode([
                    "pl" => "Pomoc w rozwiązywaniu trudniejszych zadań, odpowiadanie na pytania oraz wyjaśnianie materiału w bardziej szczegółowy sposób.",
                    "en" => "Assisting with solving more difficult tasks, answering questions, and explaining the material in more detail."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15647,
                "name" => json_encode([
                    "pl" => "Motywowanie uczestników do aktywnego udziału w zajęciach i regularnego przyswajania wiedzy.",
                    "en" => "Motivating participants to actively participate in classes and regularly absorb knowledge."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15648,
                "name" => json_encode([
                    "pl" => "Stosowanie metod, które zwiększają zaangażowanie uczestników, takich jak gry dydaktyczne, nagrody za osiągnięcia, wyzwania zespołowe.",
                    "en" => "Using methods that increase participant engagement, such as educational games, achievement rewards, and team challenges."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15649,
                "name" => json_encode([
                    "pl" => "Przygotowanie uczestników do egzaminów końcowych lub certyfikacji, które potwierdzają zdobyte umiejętności.",
                    "en" => "Preparing participants for final exams or certification that confirms the skills they have acquired."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15650,
                "name" => json_encode([
                    "pl" => "Organizacja egzaminów, ocenianie wyników oraz przygotowanie zaświadczeń lub certyfikatów potwierdzających ukończenie kursu.",
                    "en" => "Organizing exams, assessing results, and preparing certificates or diplomas confirming course completion."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15651,
                "name" => json_encode([
                    "pl" => "Prowadzenie zajęć, które rozwijają umiejętności analityczne, rozwiązywania problemów oraz krytycznego myślenia.",
                    "en" => "Conducting classes that develop analytical skills, problem-solving, and critical thinking."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15652,
                "name" => json_encode([
                    "pl" => "Stosowanie case studies, analizy przykładów oraz dyskusji, które zachęcają do refleksji i krytycznego spojrzenia na zagadnienia.",
                    "en" => "Using case studies, example analysis, and discussions that encourage reflection and critical examination of issues."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15653,
                "name" => json_encode([
                    "pl" => "Dbanie o komfort uczestników oraz przyjazną atmosferę, w której mogą swobodnie wyrażać opinie i zadawać pytania.",
                    "en" => "Ensuring the comfort of participants and maintaining a friendly atmosphere where they can freely express opinions and ask questions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15654,
                "name" => json_encode([
                    "pl" => "Wprowadzanie zasad organizacyjnych, które sprzyjają skupieniu i efektywności pracy podczas zajęć.",
                    "en" => "Introducing organizational rules that foster focus and efficiency during class."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15655,
                "name" => json_encode([
                    "pl" => "Analiza skuteczności programu, zbieranie opinii od uczestników oraz ocena, które elementy kursu należy poprawić.",
                    "en" => "Analyzing the effectiveness of the program, gathering feedback from participants, and assessing which elements of the course need improvement."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15656,
                "name" => json_encode([
                    "pl" => "Praca nad udoskonalaniem programu na podstawie wyników i informacji zwrotnej, aby zwiększać jakość kursu.",
                    "en" => "Working on improving the program based on feedback and results to enhance the quality of the course."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15657,
                "name" => json_encode([
                    "pl" => "Dbanie o etyczne podejście do pracy, szanowanie prywatności uczestników, przestrzeganie zasad etyki zawodowej.",
                    "en" => "Ensuring an ethical approach to work, respecting participants' privacy, and adhering to professional ethics."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15658,
                "name" => json_encode([
                    "pl" => "Zapewnienie, że wszystkie dane osobowe i informacje dotyczące uczestników są chronione i wykorzystywane zgodnie z przepisami.",
                    "en" => "Ensuring that all personal data and information related to participants are protected and used in accordance with regulations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15659,
                "name" => json_encode([
                    "pl" => "Dbanie o to, aby każdy uczestnik miał równe szanse na uczestnictwo w zajęciach i rozwój, bez względu na poziom wiedzy, możliwości czy specjalne potrzeby.",
                    "en" => "Ensuring that each participant has equal opportunities to participate in classes and develop, regardless of their knowledge level, abilities, or special needs."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15660,
                "name" => json_encode([
                    "pl" => "Dostosowanie zajęć i materiałów, aby były dostępne i zrozumiałe dla każdego uczestnika, w tym osób o specjalnych potrzebach.",
                    "en" => "Adapting classes and materials to ensure they are accessible and understandable for all participants, including those with special needs."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15661,
                "name" => json_encode([
                    "pl" => "Udział w kursach, szkoleniach i konferencjach, które pozwalają na rozwijanie kompetencji i podnoszenie kwalifikacji zawodowych.",
                    "en" => "Participating in courses, training, and conferences that allow for skill development and career qualifications enhancement."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15662,
                "name" => json_encode([
                    "pl" => "Aktualizowanie wiedzy i umiejętności w danej dziedzinie, aby być na bieżąco z najnowszymi trendami i metodami nauczania.",
                    "en" => "Updating knowledge and skills in the field to stay up to date with the latest trends and teaching methods."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15663,
                "name" => json_encode([
                    "pl" => "Prowadzenie zajęć, które rozwijają umiejętności interpersonalne, takie jak komunikacja, praca w grupie, zarządzanie czasem.",
                    "en" => "Conducting classes that develop interpersonal skills, such as communication, teamwork, and time management."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15664,
                "name" => json_encode([
                    "pl" => "Stworzenie warunków do pracy zespołowej, dzięki czemu uczestnicy uczą się współpracy i wzajemnego wsparcia.",
                    "en" => "Creating conditions for teamwork, so that participants learn collaboration and mutual support."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15665,
                "name" => json_encode([
                    "pl" => "Opracowywanie zadań domowych, projektów, które umożliwiają uczestnikom samodzielne utrwalanie wiedzy i rozwijanie umiejętności poza zajęciami.",
                    "en" => "Developing homework assignments and projects that allow participants to independently consolidate knowledge and develop skills outside of class."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15666,
                "name" => json_encode([
                    "pl" => "Ocena zadań domowych i projektów, udzielanie informacji zwrotnej oraz wskazówek do dalszej pracy.",
                    "en" => "Evaluating homework and projects, providing feedback, and offering guidance for further work."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15667,
                "name" => json_encode([
                    "pl" => "Prowadzenie zajęć w formie online, korzystanie z platform e-learningowych, tworzenie interaktywnych materiałów, takich jak filmy, testy, quizy.",
                    "en" => "Conducting classes in an online format, using e-learning platforms, creating interactive materials such as videos, tests, and quizzes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15668,
                "name" => json_encode([
                    "pl" => "Wspieranie uczestników w korzystaniu z narzędzi internetowych, które usprawniają proces nauczania i dostęp do wiedzy.",
                    "en" => "Supporting participants in using online tools that enhance the learning process and access to knowledge."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15669,
                "name" => json_encode([
                    "pl" => "Pomoc uczestnikom w identyfikacji ich celów edukacyjnych i zawodowych oraz dostosowywanie treści kursu, aby wspierać ich rozwój.",
                    "en" => "Helping participants identify their educational and career goals and adjusting the course content to support their development."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15670,
                "name" => json_encode([
                    "pl" => "Wskazywanie dodatkowych źródeł wiedzy i inspiracji, które mogą być przydatne do dalszego rozwoju.",
                    "en" => "Pointing out additional sources of knowledge and inspiration that may be useful for further development."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $KOREPETYTOR =[
            [
                "id" => 15671,
                "name" => json_encode([
                    "pl" => "Przeprowadzenie wstępnej oceny wiedzy ucznia, aby zidentyfikować mocne i słabe strony.",
                    "en" => "Conducting an initial assessment of the student's knowledge to identify strengths and weaknesses."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15672,
                "name" => json_encode([
                    "pl" => "Określenie poziomu zaawansowania ucznia oraz dopasowanie zakresu materiału do jego indywidualnych potrzeb.",
                    "en" => "Determining the student's level of proficiency and adjusting the material to their individual needs."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15673,
                "name" => json_encode([
                    "pl" => "Opracowanie programu nauczania i harmonogramu zajęć, które uwzględniają cele edukacyjne ucznia.",
                    "en" => "Developing a curriculum and class schedule that considers the student's educational goals."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15674,
                "name" => json_encode([
                    "pl" => "Dostosowanie planu nauki do terminów egzaminów, prac klasowych lub innych wymagań szkolnych.",
                    "en" => "Adjusting the learning plan to exam dates, class assignments, or other school requirements."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15675,
                "name" => json_encode([
                    "pl" => "Wytłumaczenie w prosty i zrozumiały sposób zagadnień, które sprawiają uczniowi trudność.",
                    "en" => "Explaining difficult topics in a simple and understandable way."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15676,
                "name" => json_encode([
                    "pl" => "Wykorzystywanie przykładów, ćwiczeń i analogii, które pomagają uczniowi lepiej zrozumieć materiał.",
                    "en" => "Using examples, exercises, and analogies to help the student better understand the material."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15677,
                "name" => json_encode([
                    "pl" => "Wspieranie ucznia w wykonywaniu prac domowych, wyjaśnianie, jak rozwiązywać zadania i poprawianie błędów.",
                    "en" => "Supporting the student in completing homework, explaining how to solve tasks, and correcting mistakes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15678,
                "name" => json_encode([
                    "pl" => "Zachęcanie do samodzielnego rozwiązywania problemów oraz wspieranie ucznia w rozwijaniu umiejętności rozwiązywania zadań.",
                    "en" => "Encouraging independent problem-solving and supporting the student in developing task-solving skills."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15679,
                "name" => json_encode([
                    "pl" => "Tworzenie materiałów i testów przygotowujących do sprawdzianów, egzaminów lub konkursów.",
                    "en" => "Creating materials and tests to prepare for quizzes, exams, or competitions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15680,
                "name" => json_encode([
                    "pl" => "Pomoc w opracowywaniu strategii egzaminacyjnych, takich jak zarządzanie czasem i radzenie sobie ze stresem.",
                    "en" => "Helping to develop exam strategies, such as time management and coping with stress."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15681,
                "name" => json_encode([
                    "pl" => "Regularna ocena postępów ucznia, analiza wyników zadań i testów.",
                    "en" => "Regularly assessing the student's progress, analyzing task and test results."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15682,
                "name" => json_encode([
                    "pl" => "Udzielanie uczniowi informacji zwrotnej na temat jego postępów, wskazywanie mocnych stron oraz obszarów do poprawy.",
                    "en" => "Providing feedback on the student's progress, pointing out strengths and areas for improvement."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15683,
                "name" => json_encode([
                    "pl" => "Wybór technik i metod nauczania, które odpowiadają indywidualnym preferencjom i stylowi nauki ucznia (np. wzrokowy, słuchowy, kinestetyczny).",
                    "en" => "Choosing teaching techniques and methods that match the student's individual preferences and learning style (e.g., visual, auditory, kinesthetic)."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15684,
                "name" => json_encode([
                    "pl" => "Elastyczne dostosowywanie tempa zajęć, aby uczniowie mogli w pełni przyswajać materiał.",
                    "en" => "Flexibly adjusting the pace of lessons to allow students to fully absorb the material."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15685,
                "name" => json_encode([
                    "pl" => "Nauczanie ucznia technik efektywnego uczenia się, takich jak notowanie, tworzenie map myśli, zarządzanie czasem.",
                    "en" => "Teaching the student techniques for effective learning, such as note-taking, creating mind maps, time management."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15686,
                "name" => json_encode([
                    "pl" => "Wzmacnianie motywacji i samodzielności, aby uczeń mógł kontynuować naukę bez stałego wsparcia.",
                    "en" => "Strengthening motivation and independence so that the student can continue learning without constant support."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15687,
                "name" => json_encode([
                    "pl" => "Przygotowywanie arkuszy ćwiczeń, testów, prezentacji oraz innych materiałów, które pomagają w utrwaleniu wiedzy.",
                    "en" => "Preparing worksheets, tests, presentations, and other materials that help reinforce knowledge."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15688,
                "name" => json_encode([
                    "pl" => "Dostosowanie materiałów do indywidualnych potrzeb ucznia oraz do specyficznych wymagań programu szkolnego.",
                    "en" => "Adjusting materials to the student's individual needs and specific school program requirements."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15689,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie ćwiczeń, które uczą analizy problemów, wyciągania wniosków oraz stosowania zdobytej wiedzy w praktyce.",
                    "en" => "Conducting exercises that teach problem analysis, drawing conclusions, and applying acquired knowledge in practice."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15690,
                "name" => json_encode([
                    "pl" => "Zachęcanie ucznia do logicznego myślenia, rozwiązywania problemów krok po kroku oraz samodzielnego szukania rozwiązań.",
                    "en" => "Encouraging the student to think logically, solve problems step by step, and independently search for solutions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15691,
                "name" => json_encode([
                    "pl" => "Ustalanie priorytetów związanych z nauką, np. przygotowanie do nadchodzących lekcji, sprawdzianów i prac domowych.",
                    "en" => "Setting learning priorities, such as preparing for upcoming lessons, quizzes, and homework."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15692,
                "name" => json_encode([
                    "pl" => "Upewnianie się, że uczeń jest dobrze przygotowany do omawianych na bieżąco tematów w szkole.",
                    "en" => "Ensuring the student is well-prepared for the topics currently discussed in school."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15693,
                "name" => json_encode([
                    "pl" => "Pomoc w rozwijaniu umiejętności radzenia sobie ze stresem, zwłaszcza przed egzaminami i testami.",
                    "en" => "Helping to develop stress management skills, especially before exams and tests."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15694,
                "name" => json_encode([
                    "pl" => "Wdrażanie technik relaksacyjnych i wskazówek, które pomagają uczniowi zachować spokój i koncentrację.",
                    "en" => "Implementing relaxation techniques and tips to help the student stay calm and focused."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15695,
                "name" => json_encode([
                    "pl" => "Zapewnienie atmosfery akceptacji i zrozumienia, aby uczeń czuł się komfortowo i mógł swobodnie zadawać pytania.",
                    "en" => "Providing an atmosphere of acceptance and understanding, so the student feels comfortable and can ask questions freely."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15696,
                "name" => json_encode([
                    "pl" => "Budowanie relacji opartej na wzajemnym szacunku i wsparciu, co sprzyja efektywnej nauce.",
                    "en" => "Building a relationship based on mutual respect and support, fostering effective learning."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15697,
                "name" => json_encode([
                    "pl" => "Zwracanie uwagi na zainteresowania ucznia i dostosowywanie materiału, aby nauka była bardziej angażująca i inspirująca.",
                    "en" => "Paying attention to the student's interests and adjusting the material to make learning more engaging and inspiring."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15698,
                "name" => json_encode([
                    "pl" => "Zachęcanie ucznia do rozwijania pasji związanych z danym przedmiotem oraz poszerzanie jego wiedzy w obszarach, które go interesują.",
                    "en" => "Encouraging the student to develop passions related to the subject and expanding their knowledge in areas that interest them."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15699,
                "name" => json_encode([
                    "pl" => "Pomoc w rozwijaniu wiedzy na poziomie zaawansowanym, dostosowanym do wymagań konkursów i olimpiad.",
                    "en" => "Helping to develop advanced knowledge tailored to the requirements of competitions and olympiads."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15700,
                "name" => json_encode([
                    "pl" => "Organizowanie specjalnych zajęć przygotowujących, tworzenie zestawów ćwiczeń i prowadzenie symulacji konkursowych.",
                    "en" => "Organizing special preparation classes, creating exercise sets, and conducting competition simulations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15701,
                "name" => json_encode([
                    "pl" => "Pomoc uczniowi w wyznaczaniu krótkoterminowych i długoterminowych celów edukacyjnych, dostosowanych do jego możliwości.",
                    "en" => "Helping the student set short-term and long-term educational goals, adapted to their abilities."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15702,
                "name" => json_encode([
                    "pl" => "Wspieranie ucznia w realizacji ustalonych celów oraz regularne sprawdzanie postępów w ich osiąganiu.",
                    "en" => "Supporting the student in achieving set goals and regularly checking progress in their accomplishment."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15703,
                "name" => json_encode([
                    "pl" => "Rozwijanie umiejętności komunikacyjnych ucznia poprzez wspólne omawianie zagadnień i zadawanie pytań.",
                    "en" => "Developing the student's communication skills through joint discussion of issues and asking questions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15704,
                "name" => json_encode([
                    "pl" => "Nauczanie ucznia wyrażania własnych myśli, argumentacji oraz słuchania innych.",
                    "en" => "Teaching the student to express their own thoughts, arguments, and listen to others."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15705,
                "name" => json_encode([
                    "pl" => "Wdrażanie zasad organizacji czasu, tworzenia harmonogramów nauki oraz rozwijanie umiejętności zarządzania zadaniami.",
                    "en" => "Implementing time management principles, creating study schedules, and developing task management skills."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15706,
                "name" => json_encode([
                    "pl" => "Wspieranie ucznia w odpowiedzialnym podejściu do nauki i organizowaniu swojej pracy.",
                    "en" => "Supporting the student in taking a responsible approach to learning and organizing their work."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15707,
                "name" => json_encode([
                    "pl" => "Ustalanie stałego harmonogramu zajęć i dbanie o regularność spotkań, co sprzyja efektywności nauki.",
                    "en" => "Establishing a regular schedule for sessions and ensuring consistency, which promotes learning efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15708,
                "name" => json_encode([
                    "pl" => "Przypominanie uczniowi o potrzebie systematycznego przyswajania materiału i rozwiązywania zadań.",
                    "en" => "Reminding the student of the need for systematic learning and solving tasks."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15709,
                "name" => json_encode([
                    "pl" => "Wzmacnianie pewności siebie ucznia poprzez udzielanie pozytywnej informacji zwrotnej i motywowanie do podejmowania wyzwań.",
                    "en" => "Strengthening the student's self-confidence by providing positive feedback and motivating them to take on challenges."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15710,
                "name" => json_encode([
                    "pl" => "Praca nad zwiększaniem wiary w swoje umiejętności i zachęcanie do samodzielnego rozwiązywania problemów.",
                    "en" => "Working on increasing confidence in one's abilities and encouraging independent problem solving."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15711,
                "name" => json_encode([
                    "pl" => "Nauczanie technik notowania, podkreślania najważniejszych informacji oraz tworzenia czytelnych notatek.",
                    "en" => "Teaching note-taking techniques, highlighting key information, and creating clear notes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15712,
                "name" => json_encode([
                    "pl" => "Przekazywanie wskazówek na temat skutecznych metod zapamiętywania, takich jak powtarzanie, korzystanie z map myśli.",
                    "en" => "Providing tips on effective memorization methods, such as repetition and using mind maps."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15713,
                "name" => json_encode([
                    "pl" => "Prowadzenie zapisów dotyczących postępów ucznia, zadań realizowanych na zajęciach, testów i wyników oceniania.",
                    "en" => "Maintaining records of the student's progress, tasks completed in class, tests, and grading results."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15714,
                "name" => json_encode([
                    "pl" => "Regularne analizowanie zapisów i przedstawianie ich rodzicom lub opiekunom (w przypadku uczniów niepełnoletnich).",
                    "en" => "Regularly analyzing records and presenting them to parents or guardians (for minor students)."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15715,
                "name" => json_encode([
                    "pl" => "Informowanie rodziców o postępach ucznia, omawianie jego potrzeb i uzgodnień dotyczących dalszej pracy.",
                    "en" => "Informing parents about the student's progress, discussing their needs, and agreeing on further work."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15716,
                "name" => json_encode([
                    "pl" => "Zapewnienie wsparcia w zakresie metod, które rodzice mogą wdrażać, aby wspomagać rozwój edukacyjny ucznia.",
                    "en" => "Providing support regarding methods that parents can implement to aid the student's educational development."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15717,
                "name" => json_encode([
                    "pl" => "Uczestnictwo w kursach, szkoleniach i konferencjach, które pozwalają na podnoszenie kwalifikacji zawodowych.",
                    "en" => "Participating in courses, training, and conferences that help enhance professional qualifications."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15718,
                "name" => json_encode([
                    "pl" => "Aktualizowanie wiedzy i metod nauczania, aby efektywniej wspierać ucznia w osiąganiu jego celów.",
                    "en" => "Updating knowledge and teaching methods to more effectively support the student in achieving their goals."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $NAUCZYCIEL_DOMOWY =[
            [
                "id" => 15719,
                "name" => json_encode([
                    "pl" => "Tworzenie indywidualnego programu nauczania dostosowanego do wieku, poziomu wiedzy i celów ucznia.",
                    "en" => "Creating an individualized curriculum tailored to the student's age, knowledge level, and goals."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15720,
                "name" => json_encode([
                    "pl" => "Uwzględnienie preferencji edukacyjnych, mocnych stron i obszarów do rozwoju, aby program był w pełni dopasowany do ucznia.",
                    "en" => "Considering the student's educational preferences, strengths, and areas for development to fully tailor the program."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15721,
                "name" => json_encode([
                    "pl" => "Realizacja treści zgodnych z podstawą programową lub wymaganiami edukacyjnymi, które są niezbędne do ukończenia danej klasy czy poziomu nauczania.",
                    "en" => "Implementing content in line with the curriculum or educational requirements necessary to complete a given grade or level."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15722,
                "name" => json_encode([
                    "pl" => "Wdrażanie dodatkowych tematów i materiałów, które poszerzają wiedzę ucznia w interesujących go dziedzinach.",
                    "en" => "Introducing additional topics and materials that expand the student's knowledge in areas of interest."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15723,
                "name" => json_encode([
                    "pl" => "Organizowanie lekcji i zajęć edukacyjnych z różnych przedmiotów, takich jak matematyka, języki, nauki przyrodnicze, humanistyczne.",
                    "en" => "Organizing lessons and educational activities in various subjects such as mathematics, languages, natural sciences, and humanities."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15724,
                "name" => json_encode([
                    "pl" => "Przygotowanie planu codziennych zajęć, które uwzględniają rytm i tempo pracy ucznia, a także czas na odpoczynek.",
                    "en" => "Preparing a daily schedule that takes into account the student's work rhythm and pace, as well as time for rest."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15725,
                "name" => json_encode([
                    "pl" => "Tłumaczenie materiału, który jest dla ucznia trudny do zrozumienia, oraz wyrównywanie ewentualnych zaległości edukacyjnych.",
                    "en" => "Explaining material that is difficult for the student to understand, and addressing any educational gaps."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15726,
                "name" => json_encode([
                    "pl" => "Organizowanie dodatkowych ćwiczeń, które ułatwiają zrozumienie i przyswajanie materiału.",
                    "en" => "Organizing additional exercises that facilitate understanding and retention of the material."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15727,
                "name" => json_encode([
                    "pl" => "Korzystanie z metod dostosowanych do stylu uczenia się ucznia (np. wizualnego, słuchowego, kinestetycznego).",
                    "en" => "Using methods tailored to the student's learning style (e.g., visual, auditory, kinesthetic)."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15728,
                "name" => json_encode([
                    "pl" => "Wykorzystywanie technik, które wspierają koncentrację i efektywność nauki, takich jak gry edukacyjne, zadania praktyczne, ćwiczenia interaktywne.",
                    "en" => "Using techniques that support concentration and learning effectiveness, such as educational games, practical tasks, and interactive exercises."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15729,
                "name" => json_encode([
                    "pl" => "Pomoc uczniowi w rozwijaniu umiejętności samodzielnego przyswajania wiedzy, organizowania czasu oraz tworzenia planu nauki.",
                    "en" => "Helping the student develop skills in independently acquiring knowledge, organizing time, and creating a study plan."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15730,
                "name" => json_encode([
                    "pl" => "Nauczanie technik notowania, robienia map myśli, organizacji pracy, aby uczeń mógł uczyć się bardziej niezależnie.",
                    "en" => "Teaching note-taking techniques, mind mapping, and work organization so that the student can learn more independently."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15731,
                "name" => json_encode([
                    "pl" => "Opracowywanie materiałów do nauki, testów próbnych oraz przeprowadzanie symulacji egzaminów.",
                    "en" => "Developing learning materials, practice tests, and conducting exam simulations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15732,
                "name" => json_encode([
                    "pl" => "Pomoc w budowaniu strategii egzaminacyjnych, radzeniu sobie ze stresem oraz planowaniu nauki w czasie.",
                    "en" => "Helping build exam strategies, cope with stress, and plan study time effectively."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15733,
                "name" => json_encode([
                    "pl" => "Regularna ocena postępów ucznia poprzez testy, zadania kontrolne, obserwacje i analiza pracy.",
                    "en" => "Regularly assessing the student's progress through tests, assignments, observations, and work analysis."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15734,
                "name" => json_encode([
                    "pl" => "Informowanie rodziców o postępach, sukcesach i trudnościach ucznia oraz wspólne ustalanie strategii dalszej pracy.",
                    "en" => "Informing parents about the student's progress, successes, and difficulties, and collaboratively establishing strategies for further work."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15735,
                "name" => json_encode([
                    "pl" => "Wzmacnianie wiary w siebie i swoje możliwości poprzez pozytywne podejście, docenianie postępów i konstruktywną informację zwrotną.",
                    "en" => "Strengthening self-confidence and abilities through a positive approach, recognizing progress, and providing constructive feedback."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15736,
                "name" => json_encode([
                    "pl" => "Motywowanie ucznia do nauki i wspieranie jego zaangażowania poprzez dostosowanie zajęć do jego zainteresowań.",
                    "en" => "Motivating the student to learn and supporting their engagement by tailoring lessons to their interests."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15737,
                "name" => json_encode([
                    "pl" => "Wdrażanie zadań, które uczą analizowania problemów, wyciągania wniosków i podejmowania decyzji.",
                    "en" => "Introducing tasks that teach problem analysis, drawing conclusions, and decision-making."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15738,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie ćwiczeń na podstawie studiów przypadków, symulacji i przykładów z życia codziennego.",
                    "en" => "Conducting exercises based on case studies, simulations, and real-life examples."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15739,
                "name" => json_encode([
                    "pl" => "Identyfikowanie zainteresowań ucznia i włączanie ich do programu zajęć, aby uczynić naukę bardziej angażującą.",
                    "en" => "Identifying the student's interests and incorporating them into the lesson plan to make learning more engaging."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15740,
                "name" => json_encode([
                    "pl" => "Zachęcanie ucznia do rozwijania pasji, poszerzania wiedzy w obszarach, które go fascynują.",
                    "en" => "Encouraging the student to develop passions and expand knowledge in areas that fascinate them."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15741,
                "name" => json_encode([
                    "pl" => "Tworzenie materiałów pomocniczych, takich jak karty pracy, prezentacje, zadania do samodzielnej pracy.",
                    "en" => "Creating supportive materials such as worksheets, presentations, and independent work tasks."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15742,
                "name" => json_encode([
                    "pl" => "Przygotowanie narzędzi i pomocy, które wspierają proces nauczania (np. multimedialne zasoby, plansze edukacyjne, modele).",
                    "en" => "Preparing tools and aids that support the teaching process (e.g., multimedia resources, educational boards, models)."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15743,
                "name" => json_encode([
                    "pl" => "Uczenie odpowiedzialności za własną naukę, rozwijanie umiejętności planowania i realizacji ustalonych zadań.",
                    "en" => "Teaching responsibility for one's own learning, developing planning skills and task execution."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15744,
                "name" => json_encode([
                    "pl" => "Zachęcanie ucznia do regularnego, systematycznego podejścia do nauki oraz do samodzielnego rozwiązywania problemów.",
                    "en" => "Encouraging the student to adopt a regular, systematic approach to learning and to solve problems independently."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15745,
                "name" => json_encode([
                    "pl" => "Praca nad rozwijaniem umiejętności komunikacyjnych, umiejętności pracy w zespole (jeśli nauczanie obejmuje więcej niż jednego ucznia).",
                    "en" => "Working on developing communication skills and teamwork abilities (if teaching involves more than one student)."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15746,
                "name" => json_encode([
                    "pl" => "Zachęcanie do wyrażania własnych opinii, argumentowania oraz słuchania innych.",
                    "en" => "Encouraging the expression of one's opinions, reasoning, and listening to others."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15747,
                "name" => json_encode([
                    "pl" => "Budowanie pozytywnej, przyjaznej relacji z uczniem, co sprzyja poczuciu bezpieczeństwa i otwartości na naukę.",
                    "en" => "Building a positive, friendly relationship with the student, fostering a sense of safety and openness to learning."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15748,
                "name" => json_encode([
                    "pl" => "Zapewnienie uczniowi wsparcia emocjonalnego, co pozwala mu czuć się swobodnie i zwiększa motywację do pracy.",
                    "en" => "Providing emotional support to the student, allowing them to feel comfortable and increasing their motivation to work."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15749,
                "name" => json_encode([
                    "pl" => "Wspieranie ucznia w przygotowaniach do konkursów i olimpiad przedmiotowych, poszerzanie zakresu wiedzy.",
                    "en" => "Supporting the student in preparing for subject competitions and olympiads, expanding their knowledge base."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15750,
                "name" => json_encode([
                    "pl" => "Tworzenie indywidualnych planów nauki, które odpowiadają wymaganiom konkursowym i egzaminacyjnym.",
                    "en" => "Creating individualized study plans that meet the requirements for competitions and exams."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15751,
                "name" => json_encode([
                    "pl" => "Nauczanie technik relaksacyjnych i sposobów radzenia sobie z tremą, szczególnie przed testami i egzaminami.",
                    "en" => "Teaching relaxation techniques and ways to cope with nerves, especially before tests and exams."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15752,
                "name" => json_encode([
                    "pl" => "Wspieranie ucznia w zrozumieniu i zarządzaniu emocjami związanymi z nauką.",
                    "en" => "Supporting the student in understanding and managing emotions related to learning."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15753,
                "name" => json_encode([
                    "pl" => "Organizowanie zajęć w terenie, które poszerzają wiedzę i umożliwiają zdobycie nowych doświadczeń (np. lekcje w muzeum, w przyrodzie).",
                    "en" => "Organizing field trips that broaden knowledge and provide new experiences (e.g., lessons at museums, in nature)."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15754,
                "name" => json_encode([
                    "pl" => "Korzystanie z okazji edukacyjnych dostępnych w środowisku lokalnym, aby uczynić naukę ciekawszą i bardziej interaktywną.",
                    "en" => "Utilizing educational opportunities available in the local environment to make learning more interesting and interactive."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15755,
                "name" => json_encode([
                    "pl" => "Regularne spotkania i rozmowy z rodzicami, aby omawiać postępy, potrzeby i cele ucznia.",
                    "en" => "Regular meetings and discussions with parents to discuss the student's progress, needs, and goals."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15756,
                "name" => json_encode([
                    "pl" => "Udzielanie wskazówek rodzicom na temat wspierania nauki w domu, jak również wspólne ustalanie kierunku pracy.",
                    "en" => "Providing guidance to parents on supporting learning at home, as well as jointly determining the direction of work."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15757,
                "name" => json_encode([
                    "pl" => "Systematyczne zapisywanie wyników testów, prac kontrolnych oraz notatek dotyczących postępów i trudności ucznia.",
                    "en" => "Systematically recording test results, control work, and notes on the student's progress and difficulties."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15758,
                "name" => json_encode([
                    "pl" => "Przygotowywanie raportów okresowych oraz dokumentacji potrzebnej do oceny procesu nauczania.",
                    "en" => "Preparing periodic reports and documentation required to assess the teaching process."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15759,
                "name" => json_encode([
                    "pl" => "Praca nad rozwijaniem empatii, samoświadomości i umiejętności radzenia sobie z emocjami.",
                    "en" => "Working on developing empathy, self-awareness, and emotional regulation skills."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15760,
                "name" => json_encode([
                    "pl" => "Organizowanie ćwiczeń, które wspierają rozwój kompetencji miękkich, takich jak współpraca i odpowiedzialność.",
                    "en" => "Organizing exercises that support the development of soft skills, such as collaboration and responsibility."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15761,
                "name" => json_encode([
                    "pl" => "Wspieranie ucznia w przygotowaniach do wyzwań, które czekają go na kolejnych poziomach edukacji (np. przejście do szkoły średniej).",
                    "en" => "Supporting the student in preparing for challenges awaiting them at higher educational levels (e.g., transition to high school)."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15762,
                "name" => json_encode([
                    "pl" => "Pomoc w rozwijaniu umiejętności i nawyków potrzebnych na wyższym poziomie nauczania.",
                    "en" => "Helping to develop skills and habits necessary for higher education levels."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15763,
                "name" => json_encode([
                    "pl" => "Organizowanie zajęć w formie projektów, które uczą planowania, realizacji zadań oraz analizy wyników.",
                    "en" => "Organizing project-based lessons that teach planning, task execution, and results analysis."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15764,
                "name" => json_encode([
                    "pl" => "Zachęcanie ucznia do podejmowania długoterminowych projektów, które rozwijają umiejętności badawcze i organizacyjne.",
                    "en" => "Encouraging the student to undertake long-term projects that develop research and organizational skills."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15765,
                "name" => json_encode([
                    "pl" => "Uczestnictwo w szkoleniach, kursach i konferencjach, które pozwalają na rozwijanie wiedzy i umiejętności dydaktycznych.",
                    "en" => "Participating in trainings, courses, and conferences to develop knowledge and teaching skills."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15766,
                "name" => json_encode([
                    "pl" => "Aktualizowanie wiedzy zgodnie z najnowszymi metodami nauczania, aby efektywnie wspierać rozwój ucznia.",
                    "en" => "Updating knowledge in line with the latest teaching methods to effectively support the student's development."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $TRENER_OSOBISTY = [
            [
                "id" => 15767,
                "name" => json_encode([
                    "pl" => "Rozmowa z klientem w celu poznania jego oczekiwań, celów treningowych, poziomu zaawansowania oraz ewentualnych problemów zdrowotnych.",
                    "en" => "Conversation with the client to understand their expectations, training goals, level of advancement, and any health issues."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15768,
                "name" => json_encode([
                    "pl" => "Zbieranie informacji na temat stylu życia, nawyków żywieniowych, poziomu aktywności oraz dostępnego czasu na treningi.",
                    "en" => "Gathering information about lifestyle, eating habits, activity level, and available time for workouts."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15769,
                "name" => json_encode([
                    "pl" => "Tworzenie planu treningowego dopasowanego do celów, możliwości i stanu zdrowia klienta.",
                    "en" => "Creating a workout plan tailored to the client's goals, abilities, and health condition."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15770,
                "name" => json_encode([
                    "pl" => "Uwzględnienie stopniowego zwiększania intensywności, różnorodności ćwiczeń oraz czasu na regenerację.",
                    "en" => "Considering gradual increases in intensity, exercise variety, and recovery time."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15771,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie testów sprawnościowych, które pozwalają określić poziom kondycji fizycznej, siły, elastyczności i wytrzymałości.",
                    "en" => "Conducting fitness tests to determine physical conditioning, strength, flexibility, and endurance levels."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15772,
                "name" => json_encode([
                    "pl" => "Analiza wyników testów i dostosowanie planu treningowego w oparciu o uzyskane informacje.",
                    "en" => "Analyzing test results and adjusting the training plan based on the gathered data."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15773,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie indywidualnych sesji treningowych z klientem, które obejmują ćwiczenia siłowe, cardio, rozciągające lub funkcjonalne.",
                    "en" => "Conducting individual training sessions with the client, including strength, cardio, stretching, or functional exercises."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15774,
                "name" => json_encode([
                    "pl" => "Demonstrowanie prawidłowej techniki wykonywania ćwiczeń oraz korygowanie ewentualnych błędów.",
                    "en" => "Demonstrating proper exercise technique and correcting any errors."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15775,
                "name" => json_encode([
                    "pl" => "Wspieranie klienta w dążeniu do celów poprzez stałe motywowanie, budowanie jego pewności siebie i wyznaczanie wyzwań.",
                    "en" => "Supporting the client in achieving their goals through constant motivation, building their self-confidence, and setting challenges."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15776,
                "name" => json_encode([
                    "pl" => "Utrzymywanie pozytywnego nastawienia i pomaganie klientowi w pokonywaniu trudności oraz momentów zwątpienia.",
                    "en" => "Maintaining a positive attitude and helping the client overcome difficulties and moments of doubt."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15777,
                "name" => json_encode([
                    "pl" => "Monitorowanie postępów klienta, prowadzenie notatek dotyczących wyników oraz analiza osiąganych rezultatów.",
                    "en" => "Monitoring the client's progress, keeping notes on results, and analyzing achieved outcomes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15778,
                "name" => json_encode([
                    "pl" => "Wprowadzanie modyfikacji do planu treningowego w zależności od postępów i zmieniających się potrzeb.",
                    "en" => "Introducing modifications to the training plan based on progress and changing needs."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15779,
                "name" => json_encode([
                    "pl" => "Nauczanie zasad bezpieczeństwa podczas ćwiczeń oraz dbanie o to, aby klient znał prawidłową technikę wykonywania ćwiczeń.",
                    "en" => "Teaching safety rules during exercises and ensuring the client knows the correct exercise techniques."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15780,
                "name" => json_encode([
                    "pl" => "Informowanie o ryzykach związanych z nieprawidłowym wykonaniem ćwiczeń oraz zachęcanie do dbania o własne bezpieczeństwo.",
                    "en" => "Informing about risks associated with improper exercise execution and encouraging self-care for safety."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15781,
                "name" => json_encode([
                    "pl" => "Pomoc klientowi w wyznaczaniu celów, które są mierzalne, osiągalne i dostosowane do jego indywidualnych możliwości.",
                    "en" => "Helping the client set measurable, achievable, and personalized goals."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15782,
                "name" => json_encode([
                    "pl" => "Określanie etapów, dzięki którym klient stopniowo osiąga swoje cele, co pomaga w budowaniu długoterminowego zaangażowania.",
                    "en" => "Defining stages that allow the client to gradually reach their goals, helping build long-term commitment."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15783,
                "name" => json_encode([
                    "pl" => "Uwzględnienie problemów zdrowotnych, kontuzji, schorzeń oraz innych ograniczeń w planowaniu treningów.",
                    "en" => "Considering health problems, injuries, ailments, and other limitations when planning workouts."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15784,
                "name" => json_encode([
                    "pl" => "Wprowadzanie modyfikacji do ćwiczeń w razie potrzeby, aby zapewnić bezpieczny i skuteczny trening.",
                    "en" => "Modifying exercises when necessary to ensure safe and effective training."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15785,
                "name" => json_encode([
                    "pl" => "Zalecanie ćwiczeń do wykonania w domu lub na siłowni w zależności od preferencji klienta.",
                    "en" => "Recommending exercises to be done at home or in the gym based on the client's preferences."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15786,
                "name" => json_encode([
                    "pl" => "Wyjaśnienie techniki i sposobu wykonywania ćwiczeń, aby klient mógł samodzielnie ćwiczyć bez ryzyka kontuzji.",
                    "en" => "Explaining the technique and method of performing exercises so that the client can exercise independently without risk of injury."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15787,
                "name" => json_encode([
                    "pl" => "Informowanie klienta o podstawach zdrowego odżywiania, regeneracji oraz zarządzania stresem.",
                    "en" => "Informing the client about the basics of healthy eating, recovery, and stress management."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15788,
                "name" => json_encode([
                    "pl" => "Doradzanie w kwestii nawyków, które mogą wspierać realizację celów, takich jak odpowiedni sen, nawodnienie czy unikanie używek.",
                    "en" => "Advising on habits that can support goal achievement, such as proper sleep, hydration, and avoiding substances."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15789,
                "name" => json_encode([
                    "pl" => "Pomoc w radzeniu sobie z trudnościami psychicznymi związanymi z osiąganiem celów treningowych, np. z brakiem motywacji czy stresem.",
                    "en" => "Helping with psychological difficulties related to achieving fitness goals, such as lack of motivation or stress."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15790,
                "name" => json_encode([
                    "pl" => "Udzielanie wsparcia emocjonalnego i budowanie pozytywnego nastawienia do pracy nad własnym ciałem i zdrowiem.",
                    "en" => "Providing emotional support and building a positive attitude towards working on one's body and health."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15791,
                "name" => json_encode([
                    "pl" => "Urozmaicanie planu treningowego poprzez wprowadzanie nowych ćwiczeń i metod treningowych, aby zapobiec monotonii.",
                    "en" => "Diversifying the workout plan by introducing new exercises and training methods to prevent monotony."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15792,
                "name" => json_encode([
                    "pl" => "Dobór różnorodnych ćwiczeń, które wspierają różne grupy mięśniowe i umożliwiają rozwój wielu umiejętności.",
                    "en" => "Selecting various exercises that target different muscle groups and allow the development of multiple skills."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15793,
                "name" => json_encode([
                    "pl" => "Obserwacja klienta podczas wykonywania ćwiczeń, korygowanie błędów technicznych i dbanie o właściwą postawę ciała.",
                    "en" => "Observing the client during exercises, correcting technical errors, and ensuring proper posture."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15794,
                "name" => json_encode([
                    "pl" => "Wskazywanie, jak zmieniać technikę ćwiczeń, aby optymalizować efekty i unikać obciążenia stawów czy kręgosłupa.",
                    "en" => "Indicating how to change exercise technique to optimize results and avoid joint or spine strain."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15795,
                "name" => json_encode([
                    "pl" => "Stopniowe zwiększanie obciążenia, intensywności lub czasu ćwiczeń, aby umożliwić rozwój i poprawę wyników klienta.",
                    "en" => "Gradually increasing the load, intensity, or duration of exercises to allow for development and improved results."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15796,
                "name" => json_encode([
                    "pl" => "Dopasowanie poziomu trudności ćwiczeń do kondycji i postępów klienta, aby trening był efektywny, ale bezpieczny.",
                    "en" => "Adjusting the difficulty level of exercises to the client's condition and progress, ensuring the workout is effective but safe."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15797,
                "name" => json_encode([
                    "pl" => "Informowanie o roli regeneracji i odpoczynku w procesie treningowym, doradzanie w zakresie technik relaksacyjnych.",
                    "en" => "Informing about the role of recovery and rest in the training process, advising on relaxation techniques."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15798,
                "name" => json_encode([
                    "pl" => "Podkreślanie znaczenia snu, odpoczynku i regeneracji mięśniowej w kontekście osiągania lepszych wyników.",
                    "en" => "Emphasizing the importance of sleep, rest, and muscle recovery in achieving better results."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15799,
                "name" => json_encode([
                    "pl" => "Pomoc w przygotowaniu fizycznym do zawodów, wyścigów, biegów lub innych wydarzeń, w których klient planuje wziąć udział.",
                    "en" => "Assisting in physical preparation for competitions, races, runs, or other events the client plans to participate in."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15800,
                "name" => json_encode([
                    "pl" => "Opracowanie specjalistycznych planów treningowych, które uwzględniają wymagania konkretnej dyscypliny.",
                    "en" => "Developing specialized training plans that consider the specific requirements of a particular discipline."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15801,
                "name" => json_encode([
                    "pl" => "Prowadzenie notatek dotyczących postępów, wyników testów oraz obciążeń stosowanych w treningach.",
                    "en" => "Keeping notes on progress, test results, and loads used in training."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15802,
                "name" => json_encode([
                    "pl" => "Regularna analiza dokumentacji, która pozwala na ocenę postępów i dopasowanie planu treningowego do aktualnych potrzeb.",
                    "en" => "Regular analysis of documentation to assess progress and adjust the training plan according to current needs."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15803,
                "name" => json_encode([
                    "pl" => "Dbanie o zaufanie klienta, przestrzeganie zasad poufności i zachowanie profesjonalizmu we współpracy.",
                    "en" => "Maintaining the client's trust, adhering to confidentiality principles, and keeping professionalism in collaboration."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15804,
                "name" => json_encode([
                    "pl" => "Zachowanie poufności informacji na temat zdrowia, wyników i osobistych danych klienta.",
                    "en" => "Maintaining confidentiality of health, results, and personal information about the client."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15805,
                "name" => json_encode([
                    "pl" => "Dbanie o bezpieczeństwo klienta, stosowanie sprzętu zgodnie z zasadami, dbanie o czystość i porządek w miejscu treningu.",
                    "en" => "Ensuring the client's safety, using equipment according to rules, and maintaining cleanliness and order in the training space."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15806,
                "name" => json_encode([
                    "pl" => "Wprowadzanie zasad bezpieczeństwa oraz reagowanie w sytuacjach awaryjnych lub w razie urazu.",
                    "en" => "Implementing safety rules and responding to emergencies or injuries."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15807,
                "name" => json_encode([
                    "pl" => "Współpraca z dietetykiem, fizjoterapeutą lub lekarzem w celu wsparcia zdrowia i kondycji klienta.",
                    "en" => "Cooperating with a nutritionist, physiotherapist, or doctor to support the client's health and fitness."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15808,
                "name" => json_encode([
                    "pl" => "Konsultowanie programu z innymi specjalistami, szczególnie gdy klient wymaga rehabilitacji lub szczególnej diety.",
                    "en" => "Consulting the program with other specialists, especially when the client requires rehabilitation or a special diet."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15809,
                "name" => json_encode([
                    "pl" => "Nauczanie zasad poprawnej postawy, ergonomii ruchów i prawidłowych nawyków, które wspierają zdrowie i zapobiegają urazom.",
                    "en" => "Teaching principles of correct posture, movement ergonomics, and proper habits that support health and prevent injuries."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15810,
                "name" => json_encode([
                    "pl" => "Dbanie, aby klient znał zasady bezpiecznego podnoszenia ciężarów oraz innych ruchów wykonywanych w życiu codziennym.",
                    "en" => "Ensuring that the client understands the principles of safe weight lifting and other movements performed in daily life."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15811,
                "name" => json_encode([
                    "pl" => "Prowadzenie treningów grupowych, takich jak zajęcia fitness, zajęcia obwodowe, jeśli klient preferuje trening w grupie.",
                    "en" => "Conducting group training sessions, such as fitness classes or circuit training, if the client prefers group training."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15812,
                "name" => json_encode([
                    "pl" => "Organizacja zajęć w taki sposób, aby każdy uczestnik miał możliwość korzystania z indywidualnych wskazówek.",
                    "en" => "Organizing classes in a way that allows each participant to benefit from individual guidance."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15813,
                "name" => json_encode([
                    "pl" => "Udział w szkoleniach, kursach i konferencjach, aby poszerzać wiedzę o najnowsze metody treningowe i techniki motywacyjne.",
                    "en" => "Participating in training, courses, and conferences to expand knowledge of the latest training methods and motivational techniques."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15814,
                "name" => json_encode([
                    "pl" => "Regularne aktualizowanie wiedzy na temat fitnessu, zdrowia i żywienia, aby dostarczać klientowi wartościowych informacji.",
                    "en" => "Regularly updating knowledge about fitness, health, and nutrition to provide the client with valuable information."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $NAUCZYCIEL_KONSULTANT = [
            [
                "id" => 15815,
                "name" => json_encode([
                    "pl" => "Udzielanie porad i wskazówek nauczycielom dotyczących metod nauczania, strategii dydaktycznych oraz planowania zajęć.",
                    "en" => "Providing advice and guidance to teachers on teaching methods, didactic strategies, and lesson planning."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15816,
                "name" => json_encode([
                    "pl" => "Pomoc w rozwijaniu materiałów dydaktycznych i wspieranie nauczycieli w dostosowaniu treści do indywidualnych potrzeb uczniów.",
                    "en" => "Assisting in developing educational materials and supporting teachers in tailoring content to the individual needs of students."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15817,
                "name" => json_encode([
                    "pl" => "Prowadzenie szkoleń, warsztatów i seminariów dla nauczycieli i pracowników edukacyjnych w zakresie nowoczesnych metod nauczania, technologii edukacyjnych oraz organizacji pracy.",
                    "en" => "Conducting training sessions, workshops, and seminars for teachers and educational staff on modern teaching methods, educational technologies, and work organization."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15818,
                "name" => json_encode([
                    "pl" => "Tworzenie programów szkoleń i materiałów edukacyjnych dostosowanych do specyficznych potrzeb placówek oświatowych.",
                    "en" => "Developing training programs and educational materials tailored to the specific needs of educational institutions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15819,
                "name" => json_encode([
                    "pl" => "Pomoc w rozwiązywaniu problemów związanych z realizacją programu nauczania, organizacją zajęć oraz adaptacją metod nauczania.",
                    "en" => "Assisting in solving problems related to curriculum implementation, class organization, and adapting teaching methods."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15820,
                "name" => json_encode([
                    "pl" => "Wsparcie nauczycieli w radzeniu sobie z trudnymi sytuacjami edukacyjnymi oraz indywidualnym podejściu do uczniów z różnymi potrzebami.",
                    "en" => "Supporting teachers in dealing with challenging educational situations and adopting an individualized approach to students with different needs."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15821,
                "name" => json_encode([
                    "pl" => "Promowanie nowoczesnych narzędzi i technologii, które wspierają proces nauczania i ułatwiają pracę nauczycieli.",
                    "en" => "Promoting modern tools and technologies that support the teaching process and make teachers' work easier."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15822,
                "name" => json_encode([
                    "pl" => "Szkolenie nauczycieli w zakresie obsługi nowych technologii, platform edukacyjnych oraz aplikacji, które można wykorzystać w nauczaniu.",
                    "en" => "Training teachers in the use of new technologies, educational platforms, and apps that can be used in teaching."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15823,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie ankiet, wywiadów oraz analiz, które pozwalają na zidentyfikowanie obszarów wymagających wsparcia i rozwoju.",
                    "en" => "Conducting surveys, interviews, and analyses to identify areas that require support and development."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15824,
                "name" => json_encode([
                    "pl" => "Tworzenie planu działań rozwojowych na podstawie zidentyfikowanych potrzeb.",
                    "en" => "Creating a development action plan based on identified needs."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15825,
                "name" => json_encode([
                    "pl" => "Ocena efektywności wprowadzanych programów dydaktycznych i innowacji edukacyjnych, analiza wyników oraz wprowadzanie usprawnień.",
                    "en" => "Evaluating the effectiveness of implemented teaching programs and educational innovations, analyzing results, and making improvements."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15826,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie ewaluacji wdrażanych metod oraz dostarczanie informacji zwrotnej nauczycielom i dyrektorom placówek.",
                    "en" => "Conducting evaluations of implemented methods and providing feedback to teachers and school principals."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15827,
                "name" => json_encode([
                    "pl" => "Tworzenie podręczników, skryptów, planów lekcji oraz materiałów dydaktycznych, które wspierają nauczycieli w codziennej pracy.",
                    "en" => "Creating textbooks, scripts, lesson plans, and teaching materials that support teachers in their daily work."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15828,
                "name" => json_encode([
                    "pl" => "Udostępnianie zasobów w formie cyfrowej i drukowanej oraz wspieranie nauczycieli w korzystaniu z nich w pracy z uczniami.",
                    "en" => "Making resources available in digital and printed form and supporting teachers in using them in work with students."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15829,
                "name" => json_encode([
                    "pl" => "Organizowanie indywidualnych sesji konsultacyjnych dla nauczycieli, którzy potrzebują wsparcia w konkretnej dziedzinie.",
                    "en" => "Organizing individual consultation sessions for teachers who need support in a specific area."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15830,
                "name" => json_encode([
                    "pl" => "Praca z zespołami nauczycieli w celu opracowania rozwiązań wspólnych problemów oraz wspierania rozwoju kompetencji zawodowych.",
                    "en" => "Working with teacher teams to develop solutions to common problems and support the development of professional competencies."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15831,
                "name" => json_encode([
                    "pl" => "Współpraca z dyrekcją placówek oświatowych oraz władzami edukacyjnymi w zakresie planowania szkoleń, wdrażania programów edukacyjnych i innowacji.",
                    "en" => "Collaboration with school management and educational authorities in planning training, implementing educational programs, and innovations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15832,
                "name" => json_encode([
                    "pl" => "Przekazywanie informacji na temat zmian w prawie oświatowym, nowych wytycznych oraz standardów edukacyjnych.",
                    "en" => "Providing information on changes in educational law, new guidelines, and educational standards."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15833,
                "name" => json_encode([
                    "pl" => "Doradztwo w zakresie dostosowywania programów nauczania do wymagań prawa oświatowego oraz wytycznych edukacyjnych.",
                    "en" => "Consulting on adapting curricula to the requirements of educational law and educational guidelines."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15834,
                "name" => json_encode([
                    "pl" => "Wdrażanie nowych wytycznych i standardów, które umożliwiają dostosowanie programu nauczania do aktualnych wymagań.",
                    "en" => "Implementing new guidelines and standards that enable the curriculum to be adapted to current requirements."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15835,
                "name" => json_encode([
                    "pl" => "Przekazywanie wiedzy i umiejętności związanych z indywidualnym podejściem do uczniów, szczególnie tych o specjalnych potrzebach edukacyjnych.",
                    "en" => "Providing knowledge and skills related to individualized approaches to students, especially those with special educational needs."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15836,
                "name" => json_encode([
                    "pl" => "Wsparcie nauczycieli w dostosowywaniu metod pracy do różnych stylów uczenia się oraz wspieranie uczniów w nauce poprzez różnorodne techniki dydaktyczne.",
                    "en" => "Supporting teachers in adapting work methods to different learning styles and assisting students in learning through various teaching techniques."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15837,
                "name" => json_encode([
                    "pl" => "Wspieranie nauczycieli w organizacji pracy zespołów przedmiotowych i wychowawczych, planowaniu spotkań i realizacji zadań.",
                    "en" => "Supporting teachers in organizing the work of subject and advisory teams, planning meetings, and executing tasks."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15838,
                "name" => json_encode([
                    "pl" => "Moderowanie spotkań zespołów nauczycielskich, aby sprzyjały wymianie doświadczeń i wspólnemu rozwiązywaniu problemów.",
                    "en" => "Moderating teacher team meetings to foster the exchange of experiences and joint problem-solving."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15839,
                "name" => json_encode([
                    "pl" => "Tworzenie sieci nauczycieli, które umożliwiają dzielenie się wiedzą i doświadczeniem oraz wspólny rozwój zawodowy.",
                    "en" => "Creating networks of teachers that allow the sharing of knowledge and experience and collective professional development."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15840,
                "name" => json_encode([
                    "pl" => "Organizacja grup roboczych i platform internetowych do wymiany materiałów dydaktycznych, pomysłów i innowacji.",
                    "en" => "Organizing working groups and online platforms for exchanging teaching materials, ideas, and innovations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15841,
                "name" => json_encode([
                    "pl" => "Przekazywanie sprawdzonych metod nauczania, przykładów dobrych praktyk oraz rozwiązań, które wspierają efektywność pracy nauczycieli.",
                    "en" => "Sharing proven teaching methods, examples of good practices, and solutions that enhance teachers' work effectiveness."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15842,
                "name" => json_encode([
                    "pl" => "Organizacja spotkań i konferencji, które umożliwiają wymianę doświadczeń między nauczycielami z różnych placówek.",
                    "en" => "Organizing meetings and conferences that facilitate the exchange of experiences between teachers from different institutions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15843,
                "name" => json_encode([
                    "pl" => "Doradzanie nauczycielom w zakresie skutecznych metod oceniania postępów uczniów oraz przeprowadzania ewaluacji.",
                    "en" => "Advising teachers on effective methods of assessing student progress and conducting evaluations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15844,
                "name" => json_encode([
                    "pl" => "Udzielanie informacji o alternatywnych formach oceniania i technikach, które umożliwiają obiektywną ocenę umiejętności uczniów.",
                    "en" => "Providing information on alternative forms of assessment and techniques that allow for an objective evaluation of students' skills."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15845,
                "name" => json_encode([
                    "pl" => "Opracowywanie raportów dotyczących efektywności wdrażanych programów szkoleniowych i dydaktycznych.",
                    "en" => "Developing reports on the effectiveness of implemented training and educational programs."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15846,
                "name" => json_encode([
                    "pl" => "Przygotowywanie dokumentacji potrzebnej do oceny postępów i potrzeb szkoleniowych w placówkach.",
                    "en" => "Preparing the documentation needed to assess progress and training needs in educational institutions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15847,
                "name" => json_encode([
                    "pl" => "Informowanie nauczycieli i kadry zarządzającej o zmianach w przepisach prawa oświatowego oraz aktualizowanie procedur zgodnie z nowymi wymogami.",
                    "en" => "Informing teachers and management staff about changes in educational law and updating procedures according to new requirements."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15848,
                "name" => json_encode([
                    "pl" => "Organizowanie szkoleń, które ułatwiają nauczycielom adaptację do zmian prawnych.",
                    "en" => "Organizing training that helps teachers adapt to legal changes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15849,
                "name" => json_encode([
                    "pl" => "Promowanie postaw i działań, które sprzyjają budowaniu pozytywnej atmosfery pracy oraz współpracy między nauczycielami.",
                    "en" => "Promoting attitudes and actions that foster a positive work atmosphere and cooperation among teachers."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15850,
                "name" => json_encode([
                    "pl" => "Organizowanie warsztatów i spotkań, które wspierają rozwój umiejętności interpersonalnych oraz kompetencji miękkich nauczycieli.",
                    "en" => "Organizing workshops and meetings that support the development of interpersonal skills and soft skills of teachers."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15851,
                "name" => json_encode([
                    "pl" => "Tworzenie programów rozwojowych, które są dopasowane do różnorodnych potrzeb nauczycieli, np. początkujących, doświadczonych, specjalistów.",
                    "en" => "Creating development programs tailored to the diverse needs of teachers, e.g., beginners, experienced, specialists."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15852,
                "name" => json_encode([
                    "pl" => "Uwzględnianie specyficznych wymagań nauczycieli z różnych poziomów nauczania i przedmiotów.",
                    "en" => "Taking into account the specific requirements of teachers from different levels of teaching and subjects."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15853,
                "name" => json_encode([
                    "pl" => "Pomoc w opracowywaniu programów wychowawczych i profilaktycznych oraz wspieranie nauczycieli w ich realizacji.",
                    "en" => "Assisting in developing educational and preventive programs and supporting teachers in their implementation."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15854,
                "name" => json_encode([
                    "pl" => "Szkolenie nauczycieli w zakresie działań profilaktycznych, takich jak przeciwdziałanie agresji, profilaktyka uzależnień.",
                    "en" => "Training teachers in preventive activities such as preventing aggression, addiction prevention."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15855,
                "name" => json_encode([
                    "pl" => "Zachęcanie nauczycieli do ciągłego podnoszenia kwalifikacji i uczestnictwa w kursach doskonalących.",
                    "en" => "Encouraging teachers to continuously improve their qualifications and participate in professional development courses."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15856,
                "name" => json_encode([
                    "pl" => "Tworzenie programów rozwojowych i systemów nagradzania, które wspierają chęć nauczycieli do rozwoju.",
                    "en" => "Creating development programs and reward systems that support teachers' desire to grow."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15857,
                "name" => json_encode([
                    "pl" => "Pomoc nauczycielom zmagającym się z wypaleniem zawodowym, trudnościami wychowawczymi lub problemami adaptacyjnymi.",
                    "en" => "Helping teachers who are dealing with professional burnout, behavioral difficulties, or adaptation problems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15858,
                "name" => json_encode([
                    "pl" => "Doradztwo w zakresie technik radzenia sobie ze stresem oraz rozwiązywania konfliktów w pracy zawodowej.",
                    "en" => "Advising on stress management techniques and conflict resolution in professional work."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15859,
                "name" => json_encode([
                    "pl" => "Budowanie relacji z instytucjami, które oferują szkolenia, warsztaty i kursy dla nauczycieli.",
                    "en" => "Building relationships with institutions that offer training, workshops, and courses for teachers."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15860,
                "name" => json_encode([
                    "pl" => "Organizowanie wspólnych projektów i konferencji, które sprzyjają wymianie doświadczeń.",
                    "en" => "Organizing joint projects and conferences that foster the exchange of experiences."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15861,
                "name" => json_encode([
                    "pl" => "Regularne uczestnictwo w szkoleniach, kursach i konferencjach, aby być na bieżąco z nowościami w edukacji.",
                    "en" => "Regular participation in training, courses, and conferences to stay up-to-date with the latest trends in education."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15862,
                "name" => json_encode([
                    "pl" => "Aktualizowanie wiedzy i umiejętności, aby móc oferować nauczycielom najlepsze wsparcie i inspirację.",
                    "en" => "Updating knowledge and skills to offer teachers the best support and inspiration."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $INSTRUKTORZY_NAUKI_JAZDY = [
            [
                "id" => 15863,
                "name" => json_encode([
                    "pl" => "Określenie poziomu zaawansowania kursanta, jego doświadczenia i wiedzy na temat jazdy samochodem.",
                    "en" => "Determining the learner's level of advancement, experience, and knowledge of driving a car."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15864,
                "name" => json_encode([
                    "pl" => "Zaplanowanie indywidualnego podejścia do kursanta, szczególnie jeśli jest to osoba początkująca lub mająca trudności z nauką.",
                    "en" => "Planning an individual approach to the learner, especially if they are a beginner or have difficulties with learning."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15865,
                "name" => json_encode([
                    "pl" => "Przygotowanie programu nauki dostosowanego do potrzeb i tempa kursanta, który obejmuje zarówno teorię, jak i praktykę.",
                    "en" => "Preparing a learning program tailored to the learner's needs and pace, including both theory and practice."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15866,
                "name" => json_encode([
                    "pl" => "Uwzględnienie kolejnych etapów nauki, od podstawowych manewrów po bardziej zaawansowane sytuacje drogowe.",
                    "en" => "Considering the subsequent stages of learning, from basic maneuvers to more advanced road situations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15867,
                "name" => json_encode([
                    "pl" => "Nauczanie kursantów przepisów ruchu drogowego, znaków drogowych, zasad pierwszeństwa, bezpieczeństwa na drodze.",
                    "en" => "Teaching learners road traffic regulations, road signs, right-of-way rules, and road safety."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15868,
                "name" => json_encode([
                    "pl" => "Przekazywanie wiedzy dotyczącej praw i obowiązków kierowcy oraz sytuacji szczególnych na drodze.",
                    "en" => "Providing knowledge about the rights and duties of the driver and special situations on the road."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15869,
                "name" => json_encode([
                    "pl" => "Nauka podstawowych czynności związanych z obsługą samochodu, takich jak regulacja fotela, lusterek, używanie pasów bezpieczeństwa.",
                    "en" => "Teaching basic car handling tasks, such as adjusting the seat, mirrors, and using seat belts."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15870,
                "name" => json_encode([
                    "pl" => "Wyjaśnianie funkcji poszczególnych elementów pojazdu, jak kontrolki, pedały, skrzynia biegów, hamulec ręczny itp.",
                    "en" => "Explaining the functions of various vehicle components, such as indicators, pedals, gearbox, handbrake, etc."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15871,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie zajęć praktycznych w ruchu drogowym oraz na placu manewrowym, które uczą kursanta podstawowych umiejętności jazdy.",
                    "en" => "Conducting practical lessons in road traffic and on a maneuvering area, teaching the learner basic driving skills."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15872,
                "name" => json_encode([
                    "pl" => "Stopniowe wprowadzanie bardziej zaawansowanych manewrów, takich jak parkowanie, zawracanie, zmiana pasa ruchu, włączanie się do ruchu.",
                    "en" => "Gradually introducing more advanced maneuvers, such as parking, turning around, lane changes, merging into traffic."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15873,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie zajęć, które uczą kursanta podstawowych manewrów, jak ruszanie, zatrzymywanie się, skręcanie, parkowanie.",
                    "en" => "Conducting lessons that teach the learner basic maneuvers, such as starting, stopping, turning, parking."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15874,
                "name" => json_encode([
                    "pl" => "Wprowadzenie bardziej złożonych manewrów, takich jak jazda po rondzie, zmiana pasów na autostradzie, wyprzedzanie.",
                    "en" => "Introducing more complex maneuvers, such as driving on roundabouts, lane changes on highways, overtaking."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15875,
                "name" => json_encode([
                    "pl" => "Regularna ocena umiejętności kursanta, śledzenie jego postępów oraz wskazywanie obszarów, które wymagają poprawy.",
                    "en" => "Regular assessment of the learner's skills, tracking their progress, and identifying areas for improvement."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15876,
                "name" => json_encode([
                    "pl" => "Udzielanie kursantowi konstruktywnej informacji zwrotnej, co pomaga mu w lepszym opanowaniu jazdy i przepisów.",
                    "en" => "Providing constructive feedback to the learner, which helps them better master driving and the rules."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15877,
                "name" => json_encode([
                    "pl" => "Zwracanie uwagi na błędy popełniane przez kursanta oraz nauczanie go, jak je korygować.",
                    "en" => "Pointing out mistakes made by the learner and teaching them how to correct them."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15878,
                "name" => json_encode([
                    "pl" => "Demonstrowanie prawidłowych technik jazdy, które pozwalają na bezpieczne i płynne prowadzenie pojazdu.",
                    "en" => "Demonstrating correct driving techniques that allow for safe and smooth vehicle operation."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15879,
                "name" => json_encode([
                    "pl" => "Wzmacnianie postaw odpowiedzialności na drodze, ucząc kursanta zasad przewidywania, ograniczonego zaufania oraz zachowania dystansu.",
                    "en" => "Strengthening road responsibility attitudes by teaching the learner principles of anticipation, limited trust, and maintaining distance."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15880,
                "name" => json_encode([
                    "pl" => "Przekazywanie wiedzy na temat zachowań defensywnych, które pomagają unikać zagrożeń na drodze.",
                    "en" => "Providing knowledge about defensive behaviors that help avoid road hazards."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15881,
                "name" => json_encode([
                    "pl" => "Opracowanie planu przygotowania do egzaminu, obejmującego wszystkie wymagane manewry i zasady.",
                    "en" => "Developing a preparation plan for the exam, covering all required maneuvers and rules."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15882,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie symulacji egzaminu praktycznego, aby kursant mógł ocenić swoje umiejętności i przygotować się na stres związany z egzaminem.",
                    "en" => "Conducting a practical exam simulation to allow the learner to assess their skills and prepare for the stress of the exam."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15883,
                "name" => json_encode([
                    "pl" => "Nauczanie kursanta podstawowych zasad bezpieczeństwa, takich jak zasady korzystania z pasów, zachowanie szczególnej ostrożności na przejściach dla pieszych, dostosowanie prędkości do warunków drogowych.",
                    "en" => "Teaching the learner basic safety principles, such as the use of seat belts, extra caution at pedestrian crossings, adjusting speed to road conditions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15884,
                "name" => json_encode([
                    "pl" => "Informowanie o ryzykach związanych z nadmierną prędkością, prowadzeniem pod wpływem emocji lub zmęczenia oraz o skutkach nieodpowiedzialnej jazdy.",
                    "en" => "Informing about the risks associated with excessive speed, driving under emotional stress or fatigue, and the consequences of reckless driving."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15885,
                "name" => json_encode([
                    "pl" => "Nauczanie kursanta podstawowych zasad pierwszej pomocy, które mogą być przydatne w sytuacjach awaryjnych.",
                    "en" => "Teaching the learner basic first aid principles that can be useful in emergency situations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15886,
                "name" => json_encode([
                    "pl" => "Zapewnienie wiedzy na temat postępowania w razie wypadku, udzielania pomocy poszkodowanym oraz wezwań odpowiednich służb.",
                    "en" => "Providing knowledge on how to act in case of an accident, giving first aid to the injured, and calling the appropriate services."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15887,
                "name" => json_encode([
                    "pl" => "Uczenie kursanta technik, które zmniejszają zużycie paliwa oraz wpływają na zmniejszenie emisji, takich jak płynna jazda, przewidywanie ruchu.",
                    "en" => "Teaching the learner techniques that reduce fuel consumption and emissions, such as smooth driving and anticipating traffic flow."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15888,
                "name" => json_encode([
                    "pl" => "Informowanie kursanta o korzyściach płynących z ekologicznej jazdy oraz wpływie oszczędnej jazdy na środowisko i finanse.",
                    "en" => "Informing the learner about the benefits of eco-driving and the impact of fuel-efficient driving on the environment and finances."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15889,
                "name" => json_encode([
                    "pl" => "Wspieranie kursanta poprzez motywowanie do pracy nad swoimi umiejętnościami oraz budowanie jego pewności siebie za kierownicą.",
                    "en" => "Supporting the learner by motivating them to work on their skills and building their confidence behind the wheel."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15890,
                "name" => json_encode([
                    "pl" => "Zachęcanie do regularnych ćwiczeń oraz wyjaśnianie, że popełnianie błędów jest częścią procesu nauki.",
                    "en" => "Encouraging regular practice and explaining that making mistakes is part of the learning process."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15891,
                "name" => json_encode([
                    "pl" => "Rozpoznawanie indywidualnych trudności kursanta i dostosowywanie metod nauczania do jego stylu i tempa nauki.",
                    "en" => "Recognizing the learner's individual difficulties and adjusting teaching methods to their style and pace of learning."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15892,
                "name" => json_encode([
                    "pl" => "Dostosowanie podejścia do kursantów, którzy mają lęk przed jazdą lub inne ograniczenia psychiczne lub fizyczne.",
                    "en" => "Adapting the approach for learners who have driving anxiety or other psychological or physical limitations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15893,
                "name" => json_encode([
                    "pl" => "Dbanie o bezpieczeństwo kursanta i innych uczestników ruchu drogowego podczas zajęć praktycznych.",
                    "en" => "Ensuring the safety of the learner and other road users during practical lessons."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15894,
                "name" => json_encode([
                    "pl" => "Reagowanie w sytuacjach awaryjnych, przejmowanie kontroli nad pojazdem, jeśli zajdzie taka potrzeba, oraz dbanie o stan techniczny pojazdu szkoleniowego.",
                    "en" => "Responding to emergency situations, taking control of the vehicle if necessary, and ensuring the technical condition of the training vehicle."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15895,
                "name" => json_encode([
                    "pl" => "Przekazywanie wartości związanych z odpowiedzialnością za siebie i innych uczestników ruchu drogowego.",
                    "en" => "Passing on values related to responsibility for oneself and other road users."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15896,
                "name" => json_encode([
                    "pl" => "Nauka odpowiedniego zachowania w sytuacjach stresowych i niebezpiecznych, co pomaga w budowaniu odpowiedzialności jako kierowcy.",
                    "en" => "Teaching the appropriate behavior in stressful and dangerous situations, helping to build responsibility as a driver."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15897,
                "name" => json_encode([
                    "pl" => "Regularne sprawdzanie pojazdu przed każdą lekcją, aby zapewnić, że jest sprawny i bezpieczny.",
                    "en" => "Regularly checking the vehicle before each lesson to ensure it is in good working order and safe."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15898,
                "name" => json_encode([
                    "pl" => "Dbanie o stan techniczny pojazdu oraz jego estetykę, co wpływa na komfort i bezpieczeństwo kursanta.",
                    "en" => "Maintaining the technical condition and appearance of the vehicle, which affects the learner's comfort and safety."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15899,
                "name" => json_encode([
                    "pl" => "Regularne aktualizowanie wiedzy o zmianach w przepisach ruchu drogowego oraz przekazywanie tej wiedzy kursantom.",
                    "en" => "Regularly updating knowledge about changes in road traffic regulations and passing that knowledge on to learners."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15900,
                "name" => json_encode([
                    "pl" => "Pomoc kursantom w zrozumieniu obowiązujących przepisów oraz ich interpretacji, aby mogli je stosować w praktyce.",
                    "en" => "Helping learners understand the applicable regulations and their interpretation so that they can apply them in practice."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15901,
                "name" => json_encode([
                    "pl" => "Prowadzenie ewidencji postępów kursanta, wypełnianie niezbędnych dokumentów, takich jak dziennik jazd.",
                    "en" => "Keeping track of the learner's progress, filling in necessary documents such as the driving log."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [

                "id" => 15902,
                "name" => json_encode([
                    "pl" => "Przygotowanie dokumentacji potrzebnej do zgłoszenia kursanta na egzamin państwowy.",
                    "en" => "Preparing the documentation needed to register the learner for the state exam."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [

                "id" => 15903,
                "name" => json_encode([
                    "pl" => "Nauczanie kursanta przewidywania sytuacji na drodze, analizy zachowań innych kierowców oraz podejmowania decyzji.",
                    "en" => "Teaching the learner to anticipate road situations, analyze the behavior of other drivers, and make decisions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [

                "id" => 15904,
                "name" => json_encode([
                    "pl" => "Wdrażanie umiejętności szybkiego reagowania na zmieniające się warunki oraz podejmowania decyzji w oparciu o analizę sytuacji.",
                    "en" => "Instilling the ability to respond quickly to changing conditions and make decisions based on situational analysis."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [

                "id" => 15905,
                "name" => json_encode([
                    "pl" => "Organizowanie terminów egzaminów oraz współpraca z ośrodkami egzaminacyjnymi w celu zgłoszenia kursantów na egzamin praktyczny i teoretyczny.",
                    "en" => "Organizing exam dates and cooperating with examination centers to register learners for both practical and theoretical exams."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [

                "id" => 15906,
                "name" => json_encode([
                    "pl" => "Informowanie kursanta o wymaganiach egzaminacyjnych oraz procedurach egzaminacyjnych.",
                    "en" => "Informing the learner about the exam requirements and procedures."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [

                "id" => 15907,
                "name" => json_encode([
                    "pl" => "Regularne uczestnictwo w szkoleniach i kursach, aby aktualizować swoją wiedzę z zakresu przepisów ruchu drogowego, technik nauczania i technik jazdy.",
                    "en" => "Regularly participating in training and courses to update their knowledge of road traffic regulations, teaching techniques, and driving techniques."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [

                "id" => 15908,
                "name" => json_encode([
                    "pl" => "Dbanie o rozwój osobisty, aby móc oferować kursantom najlepszą jakość nauczania.",
                    "en" => "Taking care of personal development to provide learners with the best quality of teaching."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [

                "id" => 15909,
                "name" => json_encode([
                    "pl" => "Traktowanie kursanta z szacunkiem, cierpliwością i empatią, dbanie o pozytywną atmosferę podczas zajęć.",
                    "en" => "Treating the learner with respect, patience, and empathy, fostering a positive atmosphere during lessons."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [

                "id" => 15910,
                "name" => json_encode([
                    "pl" => "Stosowanie zasad etyki zawodowej, dbałość o bezpieczeństwo kursanta oraz zachowanie dyskrecji i profesjonalizmu.",
                    "en" => "Adhering to professional ethics, ensuring the learner's safety, and maintaining discretion and professionalism."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]

        ];
        $egzaminatorzy = [
            [
                "id" => 15911,
                "name" => json_encode([
                    "pl" => "Organizowanie i nadzorowanie egzaminów teoretycznych, które sprawdzają znajomość przepisów ruchu drogowego, znaków drogowych oraz zasad bezpieczeństwa.",
                    "en" => "Organizing and overseeing theoretical exams that check knowledge of traffic regulations, road signs, and safety rules."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [

                "id" => 15912,
                "name" => json_encode([
                    "pl" => "Ocena wyników egzaminów teoretycznych zgodnie z wytycznymi i przepisami, w tym sprawdzanie, czy kandydat osiągnął wymagany poziom wiedzy.",
                    "en" => "Evaluating theoretical exam results according to guidelines and regulations, including checking whether the candidate has reached the required level of knowledge."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [

                "id" => 15913,
                "name" => json_encode([
                    "pl" => "Prowadzenie egzaminów praktycznych, które obejmują manewry na placu (np. ruszanie na wzniesieniu, parkowanie) oraz jazdę w ruchu miejskim.",
                    "en" => "Conducting practical exams that include maneuvers in the yard (e.g., hill starts, parking) and driving in urban traffic."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [

                "id" => 15914,
                "name" => json_encode([
                    "pl" => "Sprawdzanie, czy kandydat na kierowcę potrafi wykonywać podstawowe manewry i zachowywać się zgodnie z przepisami w różnych sytuacjach drogowych.",
                    "en" => "Checking whether the candidate can perform basic maneuvers and behave according to the rules in various traffic situations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [

                "id" => 15915,
                "name" => json_encode([
                    "pl" => "Ocenianie umiejętności prowadzenia pojazdu, takich jak kontrola nad pojazdem, płynność jazdy, obserwacja drogi, podejmowanie decyzji i reakcje na sytuacje na drodze.",
                    "en" => "Assessing driving skills such as vehicle control, smooth driving, road observation, decision-making, and reactions to traffic situations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [

                "id" => 15916,
                "name" => json_encode([
                    "pl" => "Przestrzeganie obiektywnych kryteriów oceniania, które są określone przez przepisy, aby każdy kandydat był oceniany sprawiedliwie.",
                    "en" => "Adhering to objective grading criteria defined by regulations to ensure that every candidate is evaluated fairly."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [

                "id" => 15917,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie egzaminów zgodnie z obowiązującymi przepisami prawa, wytycznymi oraz zasadami bezpieczeństwa.",
                    "en" => "Conducting exams in accordance with applicable laws, guidelines, and safety regulations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [

                "id" => 15918,
                "name" => json_encode([
                    "pl" => "Śledzenie zmian w przepisach dotyczących egzaminowania kierowców oraz dostosowywanie do nich procedur egzaminacyjnych.",
                    "en" => "Monitoring changes in regulations regarding driver exams and adapting exam procedures accordingly."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [

                "id" => 15919,
                "name" => json_encode([
                    "pl" => "Dbając o bezpieczeństwo egzaminowanego oraz innych uczestników ruchu, podejmowanie decyzji o zakończeniu egzaminu w przypadku niebezpiecznych sytuacji.",
                    "en" => "Ensuring the safety of the candidate and other road users, making the decision to terminate the exam in case of dangerous situations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [

                "id" => 15920,
                "name" => json_encode([
                    "pl" => "Reagowanie w sytuacjach awaryjnych i natychmiastowe przejęcie kontroli nad pojazdem, jeśli jest to konieczne.",
                    "en" => "Responding to emergency situations and immediately taking control of the vehicle if necessary."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [

                "id" => 15921,
                "name" => json_encode([
                    "pl" => "Informowanie kandydata o przebiegu egzaminu, zasadach oceniania oraz sposobie komunikacji podczas egzaminu praktycznego.",
                    "en" => "Informing the candidate about the progress of the exam, grading rules, and communication methods during the practical exam."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [

                "id" => 15922,
                "name" => json_encode([
                    "pl" => "Przekazywanie instrukcji dotyczących zadań, które kandydat ma wykonać, oraz przypominanie o obowiązujących zasadach bezpieczeństwa.",
                    "en" => "Providing instructions for tasks the candidate must complete and reminding them of safety rules."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [

                "id" => 15923,
                "name" => json_encode([
                    "pl" => "Prowadzenie dokumentacji z przebiegu egzaminu, notowanie wszystkich błędów oraz pozytywnych aspektów jazdy kandydata.",
                    "en" => "Keeping records of the exam, noting all mistakes and positive aspects of the candidate's driving."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [

                "id" => 15924,
                "name" => json_encode([
                    "pl" => "Sporządzanie raportu z egzaminu oraz wypełnianie dokumentów niezbędnych do potwierdzenia wyniku egzaminu.",
                    "en" => "Creating an exam report and filling out necessary documents to confirm the exam result."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [

                "id" => 15925,
                "name" => json_encode([
                    "pl" => "Przekazywanie kandydatowi wyniku egzaminu oraz wyjaśnianie ewentualnych błędów i powodów niezdania egzaminu, zgodnie z obowiązującymi procedurami.",
                    "en" => "Providing the candidate with the exam result and explaining any mistakes and reasons for failing the exam, according to procedures."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [

                "id" => 15926,
                "name" => json_encode([
                    "pl" => "Zachowanie uprzejmości i profesjonalizmu w kontaktach z kandydatem, niezależnie od wyniku egzaminu.",
                    "en" => "Maintaining courtesy and professionalism in interactions with the candidate, regardless of the exam result."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [

                "id" => 15927,
                "name" => json_encode([
                    "pl" => "Ocenianie każdego kandydata w sposób bezstronny, obiektywny i sprawiedliwy, bez wpływu emocji lub uprzedzeń.",
                    "en" => "Evaluating each candidate in an impartial, objective, and fair manner, without the influence of emotions or biases."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [

                "id" => 15928,
                "name" => json_encode([
                    "pl" => "Stosowanie zasad etyki zawodowej, unikanie konfliktu interesów oraz dbałość o uczciwość w ocenianiu.",
                    "en" => "Applying professional ethics, avoiding conflicts of interest, and ensuring fairness in evaluation."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [

                "id" => 15929,
                "name" => json_encode([
                    "pl" => "Sprawdzenie, czy pojazd egzaminacyjny jest w pełni sprawny i bezpieczny do przeprowadzenia egzaminu.",
                    "en" => "Checking whether the exam vehicle is fully functional and safe for conducting the exam."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [

                "id" => 15930,
                "name" => json_encode([
                    "pl" => "Upewnienie się, że wszystkie elementy pojazdu, takie jak hamulce, lusterka, światła i pasy bezpieczeństwa, są sprawne.",
                    "en" => "Ensuring that all vehicle components, such as brakes, mirrors, lights, and seat belts, are functional."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [

                "id" => 15931,
                "name" => json_encode([
                    "pl" => "W razie konieczności, szybkie przejęcie kontroli nad pojazdem i zabezpieczenie sytuacji, aby zapobiec ewentualnemu wypadkowi.",
                    "en" => "If necessary, quickly taking control of the vehicle and securing the situation to prevent an accident."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [

                "id" => 15932,
                "name" => json_encode([
                    "pl" => "Decyzja o przerwaniu egzaminu, jeśli kandydat stwarza zagrożenie dla siebie lub innych uczestników ruchu.",
                    "en" => "Deciding to terminate the exam if the candidate poses a threat to themselves or other road users."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [


                "id" => 15933,
                "name" => json_encode([
                    "pl" => "Zapewnienie spokojnej i przyjaznej atmosfery przed i podczas egzaminu, co pomaga kandydatowi zachować koncentrację i opanowanie.",
                    "en" => "Ensuring a calm and friendly atmosphere before and during the exam, helping the candidate stay focused and composed."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [

                "id" => 15934,
                "name" => json_encode([
                    "pl" => "Wykazywanie cierpliwości oraz profesjonalizmu, aby kandydat mógł skupić się na wykonywaniu zadań.",
                    "en" => "Displaying patience and professionalism to allow the candidate to focus on completing tasks."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [

                "id" => 15935,
                "name" => json_encode([
                    "pl" => "Przestrzeganie zasad poufności dotyczących wyników egzaminu oraz danych osobowych kandydata.",
                    "en" => "Adhering to confidentiality rules regarding exam results and the candidate's personal data."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [

                "id" => 15936,
                "name" => json_encode([
                    "pl" => "Przekazywanie wyników wyłącznie kandydatowi oraz stosowanie się do przepisów ochrony danych osobowych.",
                    "en" => "Providing results only to the candidate and complying with data protection regulations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [

                "id" => 15937,
                "name" => json_encode([
                    "pl" => "Udział w szkoleniach i kursach doskonalących dla egzaminatorów, aby utrzymywać wysokie standardy pracy.",
                    "en" => "Participating in training and advanced courses for examiners to maintain high work standards."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [

                "id" => 15938,
                "name" => json_encode([
                    "pl" => "Aktualizowanie wiedzy na temat przepisów ruchu drogowego oraz technik oceniania.",
                    "en" => "Updating knowledge of traffic regulations and grading techniques."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [

                "id" => 15939,
                "name" => json_encode([
                    "pl" => "Przygotowywanie raportów i analiz dotyczących przebiegu egzaminów, wyników oraz ewentualnych problemów.",
                    "en" => "Preparing reports and analyses about the course of exams, results, and any potential issues."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [

                "id" => 15940,
                "name" => json_encode([
                    "pl" => "Przekazywanie informacji do organów nadzorujących w celu doskonalenia systemu egzaminacyjnego.",
                    "en" => "Providing information to supervisory bodies to improve the exam system."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [

                "id" => 15941,
                "name" => json_encode([
                    "pl" => "Udzielanie informacji i wskazówek instruktorom oraz dyrektorom ośrodków szkolenia kierowców, jeśli kandydaci regularnie popełniają te same błędy.",
                    "en" => "Providing information and guidance to instructors and driving school directors if candidates regularly make the same mistakes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [

                "id" => 15942,
                "name" => json_encode([
                    "pl" => "Współpraca przy analizie wyników egzaminów oraz wskazywanie obszarów wymagających poprawy w programach szkoleniowych.",
                    "en" => "Collaborating in the analysis of exam results and identifying areas that need improvement in training programs."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [

                "id" => 15943,
                "name" => json_encode([
                    "pl" => "Informowanie ośrodków szkolenia oraz kandydatów o aktualizacjach w przepisach egzaminacyjnych oraz zmianach w procedurach egzaminacyjnych.",
                    "en" => "Informing driving schools and candidates about updates in exam regulations and changes in exam procedures."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [

                "id" => 15944,
                "name" => json_encode([
                    "pl" => "Dostosowywanie metod oceniania do nowych wymagań prawnych.",
                    "en" => "Adjusting grading methods to meet new legal requirements."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [

                "id" => 15945,
                "name" => json_encode([
                    "pl" => "Dbanie o odpowiednią prezentację i postawę zawodową, które budują zaufanie i autorytet.",
                    "en" => "Ensuring a proper presentation and professional attitude, which build trust and authority."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [

                "id" => 15946,
                "name" => json_encode([
                    "pl" => "Przyjmowanie stanowczej, ale uprzejmej postawy, co wpływa na atmosferę egzaminu.",
                    "en" => "Adopting a firm but polite stance, which influences the atmosphere of the exam."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [

                "id" => 15947,
                "name" => json_encode([
                    "pl" => "Wyjaśnianie kandydata poszczególnych etapów egzaminu, zadania do wykonania i zasad oceniania.",
                    "en" => "Explaining to the candidate the different stages of the exam, the tasks to perform, and the evaluation criteria."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [

                "id" => 15948,
                "name" => json_encode([
                    "pl" => "Udzielanie klarownych wskazówek, aby kandydat wiedział, co ma zrobić i na co zwracać uwagę.",
                    "en" => "Providing clear instructions so the candidate knows what to do and what to focus on."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [

                "id" => 15949,
                "name" => json_encode([
                    "pl" => "Zbieranie informacji o typowych błędach popełnianych przez zdających oraz przekazywanie tych informacji ośrodkom szkoleniowym.",
                    "en" => "Gathering information about typical mistakes made by candidates and providing this feedback to driving schools."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [

                "id" => 15950,
                "name" => json_encode([
                    "pl" => "Współpraca z innymi egzaminatorami w celu poprawy jakości egzaminów i standardów oceny.",
                    "en" => "Collaborating with other examiners to improve the quality of exams and evaluation standards."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [

                "id" => 15951,
                "name" => json_encode([
                    "pl" => "Udzielanie konstruktywnej informacji zwrotnej po zakończonym egzaminie, która pozwala kandydatowi zrozumieć, co wymaga poprawy.",
                    "en" => "Providing constructive feedback after the exam, allowing the candidate to understand what needs improvement."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [

                "id" => 15952,
                "name" => json_encode([
                    "pl" => "Wyjaśnianie powodów niezdania egzaminu w sposób rzeczowy i uprzejmy, z zachowaniem profesjonalizmu.",
                    "en" => "Explaining the reasons for failing the exam in a factual and polite manner, maintaining professionalism."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [

                "id" => 15953,
                "name" => json_encode([
                    "pl" => "Zapewnienie, że wszystkie materiały i narzędzia potrzebne do przeprowadzenia egzaminu są dostępne i sprawne.",
                    "en" => "Ensuring that all materials and tools needed to conduct the exam are available and functional."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [

                "id" => 15954,
                "name" => json_encode([
                    "pl" => "Regularne sprawdzanie wyposażenia oraz informowanie odpowiednich osób w przypadku potrzeby naprawy lub uzupełnienia zasobów.",
                    "en" => "Regularly checking the equipment and informing the relevant people if repairs or resource replenishment are needed."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [

                "id" => 15955,
                "name" => json_encode([
                    "pl" => "Dbanie o obiektywizm, bezstronność i sprawiedliwość w ocenianiu każdego kandydata.",
                    "en" => "Maintaining objectivity, impartiality, and fairness when assessing each candidate."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [

                "id" => 15956,
                "name" => json_encode([
                    "pl" => "Unikanie sytuacji, które mogłyby podważyć wiarygodność egzaminu, takich jak konflikty interesów.",
                    "en" => "Avoiding situations that could undermine the credibility of the exam, such as conflicts of interest."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [

                "id" => 15957,
                "name" => json_encode([
                    "pl" => "Współpraca z urzędami oraz instytucjami nadzorującymi egzaminatorów, aby wspólnie poprawiać jakość egzaminów.",
                    "en" => "Cooperating with authorities and institutions overseeing examiners to improve the quality of exams."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [

                "id" => 15958,
                "name" => json_encode([
                    "pl" => "Przekazywanie informacji na temat problemów, postulatów czy ewentualnych sugestii, które mogłyby usprawnić przebieg egzaminów.",
                    "en" => "Providing information about problems, proposals, or suggestions that could improve the exam process."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]

        ];
        $asystent_nauczyciela = [
            [
                "id" => 15959,
                "name" => json_encode([
                    "pl" => "Pomoc w przygotowaniu materiałów edukacyjnych, takich jak karty pracy, pomoce dydaktyczne oraz przygotowanie sali do zajęć.",
                    "en" => "Assisting in preparing educational materials, such as worksheets, teaching aids, and preparing the classroom for lessons."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [

                "id" => 15960,
                "name" => json_encode([
                    "pl" => "Organizacja przestrzeni klasy, aby była dostosowana do planowanych aktywności i potrzeb uczniów.",
                    "en" => "Organizing the classroom space to be adapted to planned activities and students' needs."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [

                "id" => 15961,
                "name" => json_encode([
                    "pl" => "Wsparcie nauczyciela w realizacji programu nauczania poprzez pomoc uczniom podczas lekcji, wyjaśnianie zadań i ćwiczeń.",
                    "en" => "Supporting the teacher in delivering the curriculum by assisting students during lessons, explaining tasks and exercises."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [

                "id" => 15962,
                "name" => json_encode([
                    "pl" => "Udzielanie dodatkowych wyjaśnień uczniom, którzy potrzebują więcej czasu na zrozumienie materiału.",
                    "en" => "Providing additional explanations to students who need more time to understand the material."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [

                "id" => 15963,
                "name" => json_encode([
                    "pl" => "Praca indywidualna z uczniami, którzy mają trudności w nauce lub wymagają specjalnego podejścia.",
                    "en" => "Individual work with students who have learning difficulties or require special approaches."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15964,
                "name" => json_encode([
                    "pl" => "Dostosowywanie metod pracy do potrzeb uczniów o specjalnych wymaganiach, np. dzieci z autyzmem, trudnościami w koncentracji, problemami emocjonalnymi.",
                    "en" => "Adapting teaching methods to the needs of students with special requirements, e.g. children with autism, concentration difficulties, emotional problems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [

                "id" => 15965,
                "name" => json_encode([
                    "pl" => "Czuwanie nad bezpieczeństwem uczniów podczas zajęć, przerw oraz podczas wyjść i wycieczek szkolnych.",
                    "en" => "Ensuring the safety of students during lessons, breaks, and during school outings and trips."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [

                "id" => 15966,
                "name" => json_encode([
                    "pl" => "Wspieranie nauczyciela w monitorowaniu zachowania uczniów, zapobieganie konfliktom i reagowanie na sytuacje kryzysowe.",
                    "en" => "Supporting the teacher in monitoring student behavior, preventing conflicts, and responding to crisis situations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [

                "id" => 15967,
                "name" => json_encode([
                    "pl" => "Wspieranie nauczyciela w organizacji wycieczek szkolnych, przygotowywanie listy uczestników, zgód rodziców i innych dokumentów.",
                    "en" => "Assisting the teacher in organizing school trips, preparing participant lists, parent consent forms, and other documents."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [

                "id" => 15968,
                "name" => json_encode([
                    "pl" => "Opieka nad uczniami podczas wyjść i wycieczek oraz pomoc w organizacji zajęć integracyjnych i specjalnych wydarzeń szkolnych.",
                    "en" => "Supervising students during outings and trips and assisting in organizing integrative activities and special school events."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15969,
                "name" => json_encode([
                    "pl" => "Pomoc uczniom w odrabianiu prac domowych, realizacji ćwiczeń i projektów, szczególnie dzieciom, które mają trudności w nauce.",
                    "en" => "Assisting students with homework, exercises, and projects, especially those with learning difficulties."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15970,
                "name" => json_encode([
                    "pl" => "Praca indywidualna z uczniami, którzy wymagają dodatkowej uwagi, w celu wzmocnienia ich umiejętności i zrozumienia materiału.",
                    "en" => "One-on-one work with students who require additional attention to strengthen their skills and understanding of the material."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15971,
                "name" => json_encode([
                    "pl" => "Wspieranie nauczyciela w organizacji zajęć plastycznych, muzycznych i ruchowych poprzez przygotowywanie materiałów i pomoc dzieciom.",
                    "en" => "Assisting the teacher in organizing arts, music, and physical activities by preparing materials and helping children."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15972,
                "name" => json_encode([
                    "pl" => "Zachęcanie uczniów do aktywności, wspieranie ich w realizacji zadań twórczych oraz dbanie o porządek po zajęciach.",
                    "en" => "Encouraging students to be active, supporting them in creative tasks, and maintaining order after activities."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15973,
                "name" => json_encode([
                    "pl" => "Pomoc w kształtowaniu odpowiednich zachowań i rozwijaniu umiejętności społecznych u uczniów, takich jak współpraca, empatia, komunikacja.",
                    "en" => "Helping shape appropriate behaviors and developing social skills in students, such as cooperation, empathy, and communication."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15974,
                "name" => json_encode([
                    "pl" => "Wzmacnianie pozytywnego klimatu w klasie poprzez wsparcie działań wychowawczych nauczyciela.",
                    "en" => "Strengthening the positive classroom atmosphere by supporting the teacher's educational activities."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15975,
                "name" => json_encode([
                    "pl" => "Pomoc uczniom, którzy przeżywają trudne chwile, rozmawianie z nimi, wysłuchanie ich i wsparcie emocjonalne.",
                    "en" => "Helping students who are going through difficult times, talking to them, listening, and providing emotional support."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15976,
                "name" => json_encode([
                    "pl" => "Rozpoznawanie sygnałów stresu, frustracji lub smutku u uczniów i przekazywanie tych informacji nauczycielowi.",
                    "en" => "Recognizing signs of stress, frustration, or sadness in students and communicating this information to the teacher."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15977,
                "name" => json_encode([
                    "pl" => "Tworzenie i przygotowanie pomocy dydaktycznych, np. kart pracy, materiałów wizualnych, które ułatwiają naukę.",
                    "en" => "Creating and preparing teaching aids, such as worksheets and visual materials, to facilitate learning."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15978,
                "name" => json_encode([
                    "pl" => "Dostosowywanie materiałów do potrzeb uczniów oraz przygotowywanie narzędzi edukacyjnych, które angażują i wspierają rozwój dzieci.",
                    "en" => "Adapting materials to the needs of students and preparing educational tools that engage and support children's development."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15979,
                "name" => json_encode([
                    "pl" => "Pomoc uczniom w dbaniu o porządek w klasie, w tym sprzątanie po zajęciach i dbanie o właściwe przechowywanie materiałów.",
                    "en" => "Assisting students in maintaining order in the classroom, including cleaning up after lessons and ensuring materials are properly stored."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15980,
                "name" => json_encode([
                    "pl" => "Organizacja przestrzeni w klasie, aby była przyjazna i funkcjonalna, co sprzyja efektywnej nauce.",
                    "en" => "Organizing classroom space to be friendly and functional, promoting effective learning."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15981,
                "name" => json_encode([
                    "pl" => "Zachęcanie uczniów do podejmowania samodzielnych działań, takich jak organizacja swoich przyborów, dbanie o własne miejsce pracy.",
                    "en" => "Encouraging students to take independent actions, such as organizing their supplies and taking care of their workspace."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15982,
                "name" => json_encode([
                    "pl" => "Udzielanie wskazówek, które pomagają uczniom radzić sobie samodzielnie w codziennych sytuacjach szkolnych.",
                    "en" => "Providing guidance to help students handle everyday school situations independently."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15983,
                "name" => json_encode([
                    "pl" => "Pomoc nauczycielowi w prowadzeniu dokumentacji dotyczącej postępów uczniów, zapisów z zajęć oraz ewidencji obecności.",
                    "en" => "Assisting the teacher in maintaining records of students' progress, class notes, and attendance records."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15984,
                "name" => json_encode([
                    "pl" => "Wsparcie w przygotowywaniu arkuszy ocen, raportów oraz dokumentów wymaganych przez placówkę.",
                    "en" => "Supporting in preparing grade sheets, reports, and documents required by the institution."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15985,
                "name" => json_encode([
                    "pl" => "Wspieranie nauczyciela podczas zebrań z rodzicami, przygotowanie materiałów informacyjnych oraz udzielanie informacji o postępach uczniów.",
                    "en" => "Supporting the teacher during parent meetings, preparing informational materials, and providing updates on students' progress."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15986,
                "name" => json_encode([
                    "pl" => "Pomoc w organizowaniu spotkań, informowanie rodziców o potrzebach dziecka oraz przekazywanie uwag dotyczących jego funkcjonowania w klasie.",
                    "en" => "Helping organize meetings, informing parents about the child's needs, and providing feedback on their functioning in class."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15987,
                "name" => json_encode([
                    "pl" => "Wspieranie nauczyciela w zarządzaniu zachowaniem uczniów, stosowanie zasad ustalonych przez nauczyciela i placówkę.",
                    "en" => "Supporting the teacher in managing student behavior, applying the rules established by the teacher and the institution."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15988,
                "name" => json_encode([
                    "pl" => "Pomoc w rozwiązywaniu konfliktów, wyjaśnianie konsekwencji nieodpowiednich zachowań oraz zachęcanie do przestrzegania zasad.",
                    "en" => "Assisting in conflict resolution, explaining the consequences of inappropriate behavior, and encouraging adherence to rules."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15989,
                "name" => json_encode([
                    "pl" => "Wspieranie nauczyciela w budowaniu atmosfery sprzyjającej nauce, gdzie uczniowie czują się bezpieczni i zmotywowani do nauki.",
                    "en" => "Supporting the teacher in building a learning-friendly atmosphere where students feel safe and motivated to learn."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15990,
                "name" => json_encode([
                    "pl" => "Zachęcanie uczniów do współpracy, wzajemnej pomocy oraz pozytywnego nastawienia do pracy i kolegów z klasy.",
                    "en" => "Encouraging students to collaborate, help each other, and maintain a positive attitude toward work and classmates."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15991,
                "name" => json_encode([
                    "pl" => "Wsparcie dzieci, szczególnie młodszych, w czynnościach samoobsługowych, takich jak wiązanie butów, zakładanie kurtek, dbanie o higienę osobistą.",
                    "en" => "Supporting younger children in self-care activities, such as tying shoelaces, putting on jackets, and maintaining personal hygiene."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15992,
                "name" => json_encode([
                    "pl" => "Nauczanie dzieci zasad higieny i samodzielności, aby radziły sobie z codziennymi zadaniami.",
                    "en" => "Teaching children hygiene and independence rules to help them handle everyday tasks."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15993,
                "name" => json_encode([
                    "pl" => "Opieka nad uczniami podczas przerw obiadowych, pomoc w spożywaniu posiłków oraz dbanie o kulturę spożywania posiłków.",
                    "en" => "Supervising students during lunch breaks, assisting with meals, and ensuring proper meal etiquette."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15994,
                "name" => json_encode([
                    "pl" => "Wspieranie dzieci, które mogą mieć trudności z samodzielnym jedzeniem, oraz nadzorowanie bezpieczeństwa podczas przerw.",
                    "en" => "Supporting children who may have difficulties eating independently, and ensuring safety during breaks."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15995,
                "name" => json_encode([
                    "pl" => "Koordynowanie działań z innymi nauczycielami i pracownikami szkoły w celu zapewnienia spójności w procesie wychowawczo-dydaktycznym.",
                    "en" => "Coordinating activities with other teachers and school staff to ensure consistency in the educational and developmental process."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15996,
                "name" => json_encode([
                    "pl" => "Dbanie o dobrą komunikację między nauczycielem prowadzącym a innymi pracownikami szkoły.",
                    "en" => "Ensuring good communication between the lead teacher and other school staff."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15997,
                "name" => json_encode([
                    "pl" => "Informowanie nauczyciela o postępach, problemach i potrzebach uczniów, które zostały zaobserwowane podczas zajęć.",
                    "en" => "Informing the teacher about students' progress, problems, and needs observed during lessons."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15998,
                "name" => json_encode([
                    "pl" => "Pomoc w identyfikacji uczniów potrzebujących wsparcia oraz dzielenie się obserwacjami dotyczącymi zachowań i rozwoju dzieci.",
                    "en" => "Helping identify students in need of support and sharing observations regarding behavior and development."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 15999,
                "name" => json_encode([
                    "pl" => "Wsparcie w prowadzeniu zajęć dodatkowych, takich jak kółka zainteresowań, zajęcia sportowe, językowe, plastyczne.",
                    "en" => "Supporting extracurricular activities, such as interest clubs, sports, language, and art lessons."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16000,
                "name" => json_encode([
                    "pl" => "Pomoc w organizacji zajęć pozalekcyjnych oraz dbanie o bezpieczeństwo i zaangażowanie uczniów.",
                    "en" => "Assisting with the organization of extracurricular activities and ensuring student safety and engagement."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16001,
                "name" => json_encode([
                    "pl" => "Zachęcanie do współpracy podczas zadań grupowych, dbanie o zaangażowanie wszystkich uczestników oraz pomoc w rozwiązywaniu problemów grupowych.",
                    "en" => "Encouraging collaboration during group tasks, ensuring all participants are engaged, and helping to solve group problems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16002,
                "name" => json_encode([
                    "pl" => "Wdrażanie zasad pracy zespołowej i wzmacnianie umiejętności komunikacyjnych uczniów.",
                    "en" => "Implementing teamwork principles and strengthening students' communication skills."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16003,
                "name" => json_encode([
                    "pl" => "Przypominanie uczniom o zasadach dobrego zachowania, takich jak szacunek dla innych, dbałość o czystość i porządek, kultura osobista.",
                    "en" => "Reminding students of good behavior rules, such as respect for others, cleanliness, and personal culture."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16004,
                "name" => json_encode([
                    "pl" => "Nauczanie dzieci podstawowych zasad etykiety szkolnej i wzmacnianie pozytywnych wzorców zachowań.",
                    "en" => "Teaching children basic school etiquette principles and reinforcing positive behavior patterns."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16005,
                "name" => json_encode([
                    "pl" => "Uczestnictwo w szkoleniach i kursach doskonalących, aby zwiększać swoje kwalifikacje i skuteczniej wspierać nauczyciela oraz uczniów.",
                    "en" => "Participating in training and development courses to enhance qualifications and support the teacher and students more effectively."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16006,
                "name" => json_encode([
                    "pl" => "Aktualizowanie wiedzy pedagogicznej, aby jak najlepiej odpowiadać na potrzeby dzieci i wspierać proces edukacyjny.",
                    "en" => "Updating pedagogical knowledge to better address children's needs and support the educational process."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $asystent_nauczyciela_przedszkola = [
            [
                "id" => 16007,
                "name" => json_encode([
                    "pl" => "Pomoc w przygotowaniu materiałów dydaktycznych, zabawek, pomocy naukowych oraz organizacja przestrzeni do zajęć.",
                    "en" => "Assisting in preparing educational materials, toys, teaching aids, and organizing the space for lessons."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16008,
                "name" => json_encode([
                    "pl" => "Wsparcie nauczyciela w prowadzeniu zajęć, angażowanie dzieci oraz wyjaśnianie poleceń.",
                    "en" => "Supporting the teacher in conducting lessons, engaging children, and explaining instructions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16009,
                "name" => json_encode([
                    "pl" => "Nadzorowanie dzieci podczas zajęć, zabawy i odpoczynku, zapewniając, że przedszkolaki są bezpieczne i pod opieką.",
                    "en" => "Supervising children during lessons, playtime, and rest, ensuring that preschoolers are safe and supervised."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16010,
                "name" => json_encode([
                    "pl" => "Reagowanie na wszelkie sytuacje potencjalnie niebezpieczne oraz zapobieganie wypadkom i urazom.",
                    "en" => "Responding to any potentially dangerous situations and preventing accidents and injuries."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16011,
                "name" => json_encode([
                    "pl" => "Wspieranie dzieci w takich czynnościach jak mycie rąk, ubieranie, korzystanie z toalety, zapinanie guzików, wiązanie butów.",
                    "en" => "Supporting children in activities such as washing hands, dressing, using the toilet, buttoning shirts, and tying shoelaces."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16012,
                "name" => json_encode([
                    "pl" => "Nauka zasad higieny osobistej i samodzielności w codziennych obowiązkach.",
                    "en" => "Teaching personal hygiene principles and independence in daily tasks."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16013,
                "name" => json_encode([
                    "pl" => "Pomoc dzieciom w przyswajaniu zasad obowiązujących w przedszkolu, takich jak porządek, poszanowanie dla innych i kultura osobista.",
                    "en" => "Helping children learn the rules of the preschool, such as order, respect for others, and personal culture."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16014,
                "name" => json_encode([
                    "pl" => "Wspieranie w nawykach porządkowych, takich jak odkładanie zabawek na miejsce czy dbanie o czystość.",
                    "en" => "Supporting habits of tidiness, such as putting toys away and maintaining cleanliness."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16015,
                "name" => json_encode([
                    "pl" => "Zachęcanie do wspólnej zabawy i pracy, aby budować relacje między dziećmi oraz wzmacniać umiejętności społeczne.",
                    "en" => "Encouraging joint play and work to build relationships between children and strengthen social skills."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16016,
                "name" => json_encode([
                    "pl" => "Wspieranie w rozwijaniu umiejętności współpracy, dzielenia się i komunikacji.",
                    "en" => "Supporting the development of cooperation, sharing, and communication skills."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16017,
                "name" => json_encode([
                    "pl" => "Pomoc dzieciom w wyrażaniu swoich emocji, potrzeb i uczuć, a także nauka radzenia sobie ze stresem i frustracją.",
                    "en" => "Helping children express their emotions, needs, and feelings, and teaching them how to cope with stress and frustration."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16018,
                "name" => json_encode([
                    "pl" => "Wspieranie w budowaniu pewności siebie oraz pomaganie w rozwiązywaniu konfliktów z innymi dziećmi.",
                    "en" => "Supporting the development of self-confidence and helping resolve conflicts with other children."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16019,
                "name" => json_encode([
                    "pl" => "Pomoc dzieciom podczas posiłków, np. serwowanie jedzenia, podawanie sztućców oraz zachęcanie do samodzielnego spożywania posiłków.",
                    "en" => "Helping children during meals, such as serving food, handing out utensils, and encouraging independent eating."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16020,
                "name" => json_encode([
                    "pl" => "Uczenie zasad kultury przy stole, jak spokojne siedzenie i kulturalne zachowanie podczas posiłku.",
                    "en" => "Teaching table manners, such as sitting quietly and behaving politely during meals."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16021,
                "name" => json_encode([
                    "pl" => "Pomoc dzieciom w przygotowaniu się do odpoczynku, rozkładanie leżaków, przykrywanie kocami oraz dbanie o komfort dzieci podczas snu.",
                    "en" => "Helping children prepare for rest, setting up cots, covering with blankets, and ensuring children's comfort during sleep."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16022,
                "name" => json_encode([
                    "pl" => "Utrzymywanie spokojnej atmosfery, aby dzieci mogły bezpiecznie i komfortowo odpocząć.",
                    "en" => "Maintaining a calm atmosphere to ensure children can rest safely and comfortably."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16023,
                "name" => json_encode([
                    "pl" => "Wspieranie nauczyciela w organizowaniu zajęć ruchowych, gimnastycznych, zabaw na świeżym powietrzu i w sali.",
                    "en" => "Assisting the teacher in organizing physical activities, gym lessons, and outdoor and indoor games."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16024,
                "name" => json_encode([
                    "pl" => "Zachęcanie do aktywności fizycznej oraz dbanie o bezpieczeństwo podczas zabaw i gier.",
                    "en" => "Encouraging physical activity and ensuring safety during games and activities."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16025,
                "name" => json_encode([
                    "pl" => "Przygotowanie materiałów do zajęć plastycznych, takich jak farby, kredki, papier, nożyczki, kleje, oraz dbanie o porządek po zajęciach.",
                    "en" => "Preparing materials for arts and crafts, such as paints, crayons, paper, scissors, glue, and ensuring tidiness after the activities."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16026,
                "name" => json_encode([
                    "pl" => "Pomoc dzieciom w realizacji projektów plastycznych i manualnych, rozwijając ich kreatywność i umiejętności manualne.",
                    "en" => "Helping children with art and craft projects, developing their creativity and manual skills."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16027,
                "name" => json_encode([
                    "pl" => "Wsparcie indywidualne dla dzieci o specjalnych potrzebach edukacyjnych, takich jak dzieci z autyzmem, trudnościami w rozwoju lub problemami emocjonalnymi.",
                    "en" => "Providing individual support for children with special educational needs, such as children with autism, developmental difficulties, or emotional issues."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16028,
                "name" => json_encode([
                    "pl" => "Dostosowanie podejścia do potrzeb poszczególnych dzieci oraz współpraca z nauczycielem w realizacji indywidualnych planów wsparcia.",
                    "en" => "Adapting the approach to the needs of individual children and cooperating with the teacher to implement individual support plans."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16029,
                "name" => json_encode([
                    "pl" => "Pomoc w prowadzeniu ewidencji obecności, notowanie obserwacji dotyczących rozwoju i zachowań dzieci.",
                    "en" => "Assisting in keeping attendance records and noting observations on children's development and behavior."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16030,
                "name" => json_encode([
                    "pl" => "Wspieranie nauczyciela w przygotowywaniu raportów, sprawozdań i innych dokumentów dotyczących dzieci.",
                    "en" => "Supporting the teacher in preparing reports, documentation, and other documents related to the children."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16031,
                "name" => json_encode([
                    "pl" => "Pomoc w utrzymaniu czystości w sali, w tym dezynfekcja powierzchni, sprzątanie po zajęciach plastycznych i posiłkach.",
                    "en" => "Assisting in maintaining cleanliness in the classroom, including disinfecting surfaces and cleaning up after arts and crafts or meals."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16032,
                "name" => json_encode([
                    "pl" => "Regularne kontrolowanie stanu zabawek, pomocy dydaktycznych i materiałów, aby były bezpieczne i czyste.",
                    "en" => "Regularly checking the condition of toys, teaching aids, and materials to ensure they are safe and clean."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16033,
                "name" => json_encode([
                    "pl" => "Wsparcie w przygotowaniu i organizacji uroczystości, takich jak Dzień Babci i Dziadka, Dzień Rodziny, święta przedszkolne.",
                    "en" => "Assisting in the preparation and organization of events such as Grandparents' Day, Family Day, and preschool holidays."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16034,
                "name" => json_encode([
                    "pl" => "Przygotowanie dekoracji, materiałów i pomaganie dzieciom w przygotowaniach do występów i prezentacji.",
                    "en" => "Preparing decorations, materials, and assisting children with preparations for performances and presentations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16035,
                "name" => json_encode([
                    "pl" => "Pomoc nowym dzieciom w adaptacji do życia przedszkolnego, w tym wsparcie emocjonalne, pokazanie rutyn i zapoznanie z innymi dziećmi.",
                    "en" => "Assisting new children in adapting to preschool life, including emotional support, showing routines, and introducing them to other children."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16036,
                "name" => json_encode([
                    "pl" => "Wspieranie rodziców i dzieci w pierwszych tygodniach w przedszkolu, aby proces adaptacji przebiegał jak najłagodniej.",
                    "en" => "Supporting parents and children in the first weeks at preschool to ensure a smooth adaptation process."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16037,
                "name" => json_encode([
                    "pl" => "Obserwowanie dzieci w czasie zajęć i zabawy oraz informowanie nauczyciela o zaobserwowanych postępach, trudnościach lub niepokojących zachowaniach.",
                    "en" => "Observing children during activities and playtime and informing the teacher about observed progress, difficulties, or concerning behaviors."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16038,
                "name" => json_encode([
                    "pl" => "Wspieranie nauczyciela w planowaniu dalszej pracy z dzieckiem, w oparciu o zebrane obserwacje.",
                    "en" => "Supporting the teacher in planning further work with the child based on collected observations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16039,
                "name" => json_encode([
                    "pl" => "Tworzenie atmosfery zaufania i akceptacji, w której dzieci czują się bezpieczne i chętnie zwracają się o pomoc.",
                    "en" => "Creating an atmosphere of trust and acceptance in which children feel safe and are eager to seek help."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16040,
                "name" => json_encode([
                    "pl" => "Współpraca z rodzicami, informowanie ich o bieżących potrzebach dziecka oraz pomoc w rozwiązywaniu drobnych trudności.",
                    "en" => "Collaborating with parents, informing them about the child's current needs, and assisting in solving minor difficulties."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16041,
                "name" => json_encode([
                    "pl" => "Zachęcanie dzieci do podejmowania samodzielnych działań, takich jak dbanie o swoje rzeczy, porządkowanie swojego miejsca.",
                    "en" => "Encouraging children to take independent actions, such as taking care of their belongings and tidying their space."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16042,
                "name" => json_encode([
                    "pl" => "Wdrażanie dzieci w codzienne obowiązki i nauka zasad samodzielności, które przyczyniają się do ich rozwoju.",
                    "en" => "Introducing children to daily responsibilities and teaching independence principles that contribute to their development."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16043,
                "name" => json_encode([
                    "pl" => "Pomoc w kształtowaniu pozytywnych postaw i wartości, takich jak współpraca, szacunek dla innych, odpowiedzialność.",
                    "en" => "Helping to shape positive attitudes and values, such as cooperation, respect for others, and responsibility."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16044,
                "name" => json_encode([
                    "pl" => "Wspieranie działań wychowawczych nauczyciela, wzmacnianie pozytywnych zachowań oraz pomoc w rozwiązywaniu konfliktów.",
                    "en" => "Supporting the teacher's educational activities, reinforcing positive behaviors, and assisting in resolving conflicts."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16045,
                "name" => json_encode([
                    "pl" => "Zapewnienie dzieciom poczucia bezpieczeństwa i akceptacji, co sprzyja rozwijaniu ich ciekawości i chęci do nauki.",
                    "en" => "Ensuring children feel safe and accepted, which fosters their curiosity and desire to learn."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16046,
                "name" => json_encode([
                    "pl" => "Zachęcanie do zabawy, współpracy i odkrywania nowych rzeczy w atmosferze akceptacji i pozytywnego wsparcia.",
                    "en" => "Encouraging play, cooperation, and discovering new things in an atmosphere of acceptance and positive support."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16047,
                "name" => json_encode([
                    "pl" => "Nauczanie podstawowych zasad kultury osobistej, jak mówienie „proszę”, „dziękuję”, cierpliwe czekanie na swoją kolej.",
                    "en" => "Teaching basic principles of good manners, such as saying 'please', 'thank you', and waiting patiently for one's turn."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16048,
                "name" => json_encode([
                    "pl" => "Wzmacnianie odpowiednich wzorców zachowań, co ułatwia dzieciom funkcjonowanie w grupie.",
                    "en" => "Reinforcing appropriate behavior patterns to facilitate children's functioning within the group."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16049,
                "name" => json_encode([
                    "pl" => "Wspieranie nauczyciela w organizowaniu zajęć ruchowych, spacerów oraz zabaw na placu zabaw.",
                    "en" => "Supporting the teacher in organizing physical activities, walks, and playground games."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16050,
                "name" => json_encode([
                    "pl" => "Czuwanie nad bezpieczeństwem dzieci podczas aktywności na świeżym powietrzu, zapewniając, że wszystkie dzieci uczestniczą w zajęciach.",
                    "en" => "Monitoring children's safety during outdoor activities, ensuring all children are involved in the activities."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16051,
                "name" => json_encode([
                    "pl" => "Przekazywanie informacji od nauczyciela do rodziców, dotyczących potrzeb dziecka, jego postępów i ewentualnych problemów.",
                    "en" => "Conveying information from the teacher to parents about the child's needs, progress, and any potential issues."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16052,
                "name" => json_encode([
                    "pl" => "Pomoc w organizowaniu spotkań, zebrań oraz przygotowywaniu materiałów informacyjnych dla rodziców.",
                    "en" => "Assisting in organizing meetings, conferences, and preparing informational materials for parents."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16053,
                "name" => json_encode([
                    "pl" => "Uczestnictwo w szkoleniach i kursach doskonalących, które umożliwiają lepsze wsparcie dzieci i nauczyciela.",
                    "en" => "Participating in training and development courses that enhance the ability to support children and the teacher."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16054,
                "name" => json_encode([
                    "pl" => "Aktualizowanie wiedzy na temat metod pracy z dziećmi, rozwoju psychofizycznego i nowych narzędzi dydaktycznych.",
                    "en" => "Updating knowledge on methods of working with children, their psychophysical development, and new educational tools."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];

        DB::table('detail_projects')->insert(array_merge(
            $specjalista_ds_wychowania_malego_dziecka,
            $nauczyciel_edukacji_wczesnoszkolnej,
            $nauczyciele_szkol_ponadpodstawowych,
            $nauczyciel_przedmiotu_w_szkole_podstawowej,
            $lektorzy_jezykow_obcych,
            $nauczyciel_przedmiotow_zawodowych_artystycznych,
            $nauczyciel_przedmiotow_teoretycznych_zawodowych,
            $nauczyciel_praktycznej_nauki_zawodu,
            $instruktor_praktycznej_nauki_zawodu,
            $specjalista_pracy_z_spe,
            $pedagog_szkolny,
            $nauczyciel_specjalista_terapii_pedagogicznej,
            $PEDAGOG_ANIMACJI_KULTURALNEJ,
            $ANDRAGOG,
            $PEDAGOG_SPECJALNY,
            $PEDAGOG_MEDIÓW,
            $WYCHOWAWCA_W_PLACÓWKACH_OŚWIATOWYCH,
            $animator_czasu_wolnego_mlodziezy,
            $NAUCZYCIEL_MUZYKI_W_PLACÓWKACH_POZASZKOLNYCH,
            $NAUCZYCIEL_SZTUKI_W_PLACÓWKACH_POZASZKOLNYCH,
            $NAUCZYCIEL_W_PLACÓWKACH_POZASZKOLNYCH,
            $SPECJALISTA_DO_SPRAW_ZARZĄDZANIA_W_OŚWIACIE,
            $WYKŁADOWCA_NA_KURSACH,
            $KOREPETYTOR,
            $NAUCZYCIEL_DOMOWY,
            $TRENER_OSOBISTY,
            $NAUCZYCIEL_KONSULTANT,
            $INSTRUKTORZY_NAUKI_JAZDY,
            $egzaminatorzy,
            $asystent_nauczyciela,
            $asystent_nauczyciela_przedszkola
        ));

        Category::whereId('561')->first()->detailprojects()->attach(collect($specjalista_ds_wychowania_malego_dziecka)->pluck('id')->toArray());
        Category::whereId('563')->first()->detailprojects()->attach(collect($nauczyciel_edukacji_wczesnoszkolnej)->pluck('id')->toArray());
        Category::whereId('565')->first()->detailprojects()->attach(collect($nauczyciele_szkol_ponadpodstawowych)->pluck('id')->toArray());
        Category::whereId('568')->first()->detailprojects()->attach(collect($nauczyciel_przedmiotu_w_szkole_podstawowej)->pluck('id')->toArray());
        Category::whereId('570')->first()->detailprojects()->attach(collect($lektorzy_jezykow_obcych)->pluck('id')->toArray());
        Category::whereId('572')->first()->detailprojects()->attach(collect($nauczyciel_przedmiotow_zawodowych_artystycznych)->pluck('id')->toArray());
        Category::whereId('573')->first()->detailprojects()->attach(collect($nauczyciel_przedmiotow_teoretycznych_zawodowych)->pluck('id')->toArray());
        Category::whereId('576')->first()->detailprojects()->attach(collect($nauczyciel_praktycznej_nauki_zawodu)->pluck('id')->toArray());
        Category::whereId('577')->first()->detailprojects()->attach(collect($instruktor_praktycznej_nauki_zawodu)->pluck('id')->toArray());
        Category::whereId('579')->first()->detailprojects()->attach(collect($specjalista_pracy_z_spe)->pluck('id')->toArray());
        Category::whereId('582')->first()->detailprojects()->attach(collect($pedagog_szkolny)->pluck('id')->toArray());
        Category::whereId('583')->first()->detailprojects()->attach(collect($nauczyciel_specjalista_terapii_pedagogicznej)->pluck('id')->toArray());
        Category::whereId('584')->first()->detailprojects()->attach(collect($PEDAGOG_ANIMACJI_KULTURALNEJ)->pluck('id')->toArray());
        Category::whereId('585')->first()->detailprojects()->attach(collect($ANDRAGOG)->pluck('id')->toArray());
        Category::whereId('586')->first()->detailprojects()->attach(collect($PEDAGOG_SPECJALNY)->pluck('id')->toArray());
        Category::whereId('587')->first()->detailprojects()->attach(collect($PEDAGOG_MEDIÓW)->pluck('id')->toArray());
        Category::whereId('589')->first()->detailprojects()->attach(collect($WYCHOWAWCA_W_PLACÓWKACH_OŚWIATOWYCH)->pluck('id')->toArray());
        Category::whereId('590')->first()->detailprojects()->attach(collect($animator_czasu_wolnego_mlodziezy)->pluck('id')->toArray());
        Category::whereId('598')->first()->detailprojects()->attach(collect($NAUCZYCIEL_MUZYKI_W_PLACÓWKACH_POZASZKOLNYCH)->pluck('id')->toArray());
        Category::whereId('599')->first()->detailprojects()->attach(collect($NAUCZYCIEL_SZTUKI_W_PLACÓWKACH_POZASZKOLNYCH)->pluck('id')->toArray());
        Category::whereId('600')->first()->detailprojects()->attach(collect($NAUCZYCIEL_W_PLACÓWKACH_POZASZKOLNYCH)->pluck('id')->toArray());
        Category::whereId('608')->first()->detailprojects()->attach(collect($SPECJALISTA_DO_SPRAW_ZARZĄDZANIA_W_OŚWIACIE)->pluck('id')->toArray());
        Category::whereId('609')->first()->detailprojects()->attach(collect($WYKŁADOWCA_NA_KURSACH)->pluck('id')->toArray());
        Category::whereId('610')->first()->detailprojects()->attach(collect($KOREPETYTOR)->pluck('id')->toArray());
        Category::whereId('611')->first()->detailprojects()->attach(collect($NAUCZYCIEL_DOMOWY)->pluck('id')->toArray());
        Category::whereId('612')->first()->detailprojects()->attach(collect($TRENER_OSOBISTY)->pluck('id')->toArray());
        Category::whereId('614')->first()->detailprojects()->attach(collect($NAUCZYCIEL_KONSULTANT)->pluck('id')->toArray());
        Category::whereId('616')->first()->detailprojects()->attach(collect($INSTRUKTORZY_NAUKI_JAZDY)->pluck('id')->toArray());
        Category::whereId('620')->first()->detailprojects()->attach(collect($egzaminatorzy)->pluck('id')->toArray());
        Category::whereId('624')->first()->detailprojects()->attach(collect($asystent_nauczyciela)->pluck('id')->toArray());
        Category::whereId('625')->first()->detailprojects()->attach(collect($asystent_nauczyciela_przedszkola)->pluck('id')->toArray());
    }
}
