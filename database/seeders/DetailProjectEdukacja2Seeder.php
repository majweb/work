<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class DetailProjectEdukacja2Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Schema::disableForeignKeyConstraints();

        $NAUCZYCIEL_PRZEDMIOTU_W_SZKOLE_PONADPODSTAWOWEJ = [

            ["id" => 21571,

                "name" => json_encode([
                    "pl" => "Prowadzenie zajęć dydaktycznych w wybranym przedmiocie zgodnie z podstawą programową.",
                    "en" => "Conducting classes in the chosen subject according to the curriculum."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 21572,

                "name" => json_encode([
                    "pl" => "Opracowywanie planów lekcji i materiałów dydaktycznych.",
                    "en" => "Developing lesson plans and teaching materials."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 21573,

                "name" => json_encode([
                    "pl" => "Ocenianie uczniów poprzez testy, zadania domowe i inne formy sprawdzania wiedzy.",
                    "en" => "Assessing students through tests, homework, and other forms of knowledge evaluation."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 21574,

                "name" => json_encode([
                    "pl" => "Wspieranie uczniów w ich rozwoju edukacyjnym i społecznym.",
                    "en" => "Supporting students in their educational and social development."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 21575,

                "name" => json_encode([
                    "pl" => "Współpraca z rodzicami i opiekunami w celu omówienia postępów uczniów.",
                    "en" => "Collaborating with parents and guardians to discuss students' progress."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 21576,

                "name" => json_encode([
                    "pl" => "Udział w radach pedagogicznych i projektach szkolnych.",
                    "en" => "Participating in teaching councils and school projects."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $POZOSTALI_NAUCZYCIELE_SZKÓŁ_PONADPODSTAWOWYCH = [

            ["id" => 21577,

                "name" => json_encode([
                    "pl" => "Prowadzenie zajęć z różnych przedmiotów nieobjętych kształceniem zawodowym.",
                    "en" => "Conducting classes in various non-vocational subjects."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 21578,

                "name" => json_encode([
                    "pl" => "Dostosowywanie metod nauczania do indywidualnych potrzeb uczniów.",
                    "en" => "Adapting teaching methods to individual student needs."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 21579,

                "name" => json_encode([
                    "pl" => "Udział w organizacji wydarzeń szkolnych i inicjatyw edukacyjnych.",
                    "en" => "Participating in organizing school events and educational initiatives."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 21580,

                "name" => json_encode([
                    "pl" => "Prowadzenie zajęć wyrównawczych dla uczniów potrzebujących dodatkowego wsparcia.",
                    "en" => "Conducting remedial classes for students needing additional support."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 21581,

                "name" => json_encode([
                    "pl" => "Rozwijanie materiałów edukacyjnych i innowacyjnych metod nauczania.",
                    "en" => "Developing educational materials and innovative teaching methods."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 21582,

                "name" => json_encode([
                    "pl" => "Ewaluacja i dokumentacja wyników nauczania uczniów.",
                    "en" => "Evaluating and documenting students' learning outcomes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $POZOSTALI_NAUCZYCIELE_SZKÓŁ_PODSTAWOWYCH = [

            ["id" => 21583,

                "name" => json_encode([
                    "pl" => "Prowadzenie zajęć dydaktycznych w zakresie edukacji podstawowej.",
                    "en" => "Conducting educational activities in primary education."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 21584,

                "name" => json_encode([
                    "pl" => "Przygotowywanie lekcji zgodnie z podstawą programową.",
                    "en" => "Preparing lessons in accordance with the curriculum."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 21585,

                "name" => json_encode([
                    "pl" => "Ocenianie postępów uczniów i prowadzenie dokumentacji.",
                    "en" => "Assessing student progress and maintaining documentation."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 21586,

                "name" => json_encode([
                    "pl" => "Wspieranie uczniów w trudnych sytuacjach edukacyjnych i społecznych.",
                    "en" => "Supporting students in difficult educational and social situations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 21587,

                "name" => json_encode([
                    "pl" => "Współpraca z rodzicami w zakresie rozwoju uczniów.",
                    "en" => "Collaborating with parents on student development."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 21588,

                "name" => json_encode([
                    "pl" => "Organizowanie zajęć pozalekcyjnych i wycieczek szkolnych.",
                    "en" => "Organizing extracurricular activities and school trips."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $POZOSTALI_NAUCZYCIELE_KSZTAŁCENIA_ZAWODOWEGO = [

            ["id" => 21589,

                "name" => json_encode([
                    "pl" => "Prowadzenie zajęć teoretycznych i praktycznych w wybranych zawodach.",
                    "en" => "Conducting theoretical and practical classes in selected professions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 21590,

                "name" => json_encode([
                    "pl" => "Opracowywanie programów nauczania w oparciu o potrzeby rynku pracy.",
                    "en" => "Developing curricula based on labor market needs."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 21591,

                "name" => json_encode([
                    "pl" => "Organizacja praktyk zawodowych dla uczniów.",
                    "en" => "Organizing professional internships for students."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 21592,

                "name" => json_encode([
                    "pl" => "Monitorowanie postępów uczniów w zakresie zdobywania umiejętności zawodowych.",
                    "en" => "Monitoring students' progress in acquiring vocational skills."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 21593,

                "name" => json_encode([
                    "pl" => "Współpraca z pracodawcami w celu dostosowania kształcenia do wymagań rynku.",
                    "en" => "Collaborating with employers to adapt education to market demands."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 21594,

                "name" => json_encode([
                    "pl" => "Ewaluacja wyników nauczania i wprowadzanie innowacji w procesie kształcenia.",
                    "en" => "Evaluating teaching outcomes and introducing innovations in the educational process."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $PEDAGOG = [

            ["id" => 21595,

                "name" => json_encode([
                    "pl" => "Wspieranie uczniów w rozwoju osobistym, społecznym i emocjonalnym.",
                    "en" => "Supporting students in their personal, social, and emotional development."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 21596,

                "name" => json_encode([
                    "pl" => "Diagnozowanie problemów edukacyjnych i wychowawczych.",
                    "en" => "Diagnosing educational and upbringing problems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 21597,

                "name" => json_encode([
                    "pl" => "Prowadzenie indywidualnych i grupowych zajęć terapeutycznych.",
                    "en" => "Conducting individual and group therapeutic sessions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 21598,

                "name" => json_encode([
                    "pl" => "Współpraca z rodzicami, nauczycielami i specjalistami w celu wspierania ucznia.",
                    "en" => "Collaborating with parents, teachers, and specialists to support students."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 21599,

                "name" => json_encode([
                    "pl" => "Edukowanie uczniów w zakresie radzenia sobie z problemami i stresem.",
                    "en" => "Educating students on coping with problems and stress."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 21600,

                "name" => json_encode([
                    "pl" => "Prowadzenie dokumentacji dotyczącej pracy pedagogicznej.",
                    "en" => "Maintaining documentation related to pedagogical work."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $EWALUATOR_PROGRAMÓW_EDUKACJI = [

            ["id" => 21601,

                "name" => json_encode([
                    "pl" => "Przeprowadzanie oceny skuteczności programów edukacyjnych.",
                    "en" => "Evaluating the effectiveness of educational programs."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 21602,

                "name" => json_encode([
                    "pl" => "Analiza wyników uczniów i wpływu programów na ich osiągnięcia.",
                    "en" => "Analyzing student outcomes and the impact of programs on their achievements."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 21603,

                "name" => json_encode([
                    "pl" => "Rekomendowanie zmian i ulepszeń w programach edukacyjnych.",
                    "en" => "Recommending changes and improvements in educational programs."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 21604,

                "name" => json_encode([
                    "pl" => "Przygotowywanie raportów na podstawie zebranych danych ewaluacyjnych.",
                    "en" => "Preparing reports based on collected evaluation data."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 21605,

                "name" => json_encode([
                    "pl" => "Prowadzenie konsultacji z nauczycielami i dyrektorami szkół w celu poprawy programów.",
                    "en" => "Conducting consultations with teachers and school principals to improve programs."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 21606,

                "name" => json_encode([
                    "pl" => "Monitorowanie wdrażania rekomendacji w szkołach i instytucjach edukacyjnych.",
                    "en" => "Monitoring the implementation of recommendations in schools and educational institutions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $METODYK_EDUKACJI_NA_ODLEGŁOŚĆ = [

            ["id" => 21607,

                "name" => json_encode([
                    "pl" => "Opracowywanie metod nauczania w systemach edukacji zdalnej.",
                    "en" => "Developing teaching methods for distance education systems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 21608,

                "name" => json_encode([
                    "pl" => "Tworzenie materiałów dydaktycznych dostosowanych do formy online.",
                    "en" => "Creating teaching materials tailored for online formats."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 21609,

                "name" => json_encode([
                    "pl" => "Szkolenie nauczycieli w zakresie wykorzystania technologii w edukacji zdalnej.",
                    "en" => "Training teachers in the use of technology for distance education."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 21610,

                "name" => json_encode([
                    "pl" => "Monitorowanie i ocena efektywności nauczania zdalnego.",
                    "en" => "Monitoring and evaluating the effectiveness of distance teaching."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 21611,

                "name" => json_encode([
                    "pl" => "Doradzanie w wyborze platform i narzędzi do nauki zdalnej.",
                    "en" => "Advising on the selection of platforms and tools for remote learning."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 21612,

                "name" => json_encode([
                    "pl" => "Tworzenie standardów jakości w edukacji na odległość.",
                    "en" => "Establishing quality standards in distance education."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $METODYK_TECHNOLOGII_INFORMACYJNYCH_I_KOMUNIKACYJNYCH = [

            ["id" => 21613,

                "name" => json_encode([
                    "pl" => "Opracowywanie metod dydaktycznych z wykorzystaniem technologii informacyjnych.",
                    "en" => "Developing teaching methods utilizing information technologies."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 21614,

                "name" => json_encode([
                    "pl" => "Szkolenie nauczycieli w zakresie efektywnego wykorzystania ICT w edukacji.",
                    "en" => "Training teachers on the effective use of ICT in education."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 21615,

                "name" => json_encode([
                    "pl" => "Tworzenie materiałów edukacyjnych wykorzystujących multimedia.",
                    "en" => "Creating educational materials utilizing multimedia."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 21616,

                "name" => json_encode([
                    "pl" => "Doradztwo w zakresie integracji technologii z tradycyjnym nauczaniem.",
                    "en" => "Providing advice on integrating technology with traditional teaching."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 21617,

                "name" => json_encode([
                    "pl" => "Monitorowanie trendów i innowacji w technologii edukacyjnej.",
                    "en" => "Monitoring trends and innovations in educational technology."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 21618,

                "name" => json_encode([
                    "pl" => "Ustalanie standardów i wymagań dotyczących zastosowania ICT w szkołach.",
                    "en" => "Establishing standards and requirements for the use of ICT in schools."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $NAUCZYCIEL_DORADCA_METODYCZNY = [

            ["id" => 21619,

                "name" => json_encode([
                    "pl" => "Wspieranie nauczycieli w doskonaleniu ich metod dydaktycznych.",
                    "en" => "Supporting teachers in improving their teaching methods."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 21620,

                "name" => json_encode([
                    "pl" => "Organizowanie szkoleń i warsztatów metodycznych dla nauczycieli.",
                    "en" => "Organizing methodological training sessions and workshops for teachers."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 21621,

                "name" => json_encode([
                    "pl" => "Pomoc w opracowywaniu planów nauczania i programów edukacyjnych.",
                    "en" => "Assisting in developing teaching plans and educational programs."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 21622,

                "name" => json_encode([
                    "pl" => "Monitorowanie i ocena wdrażania nowych metod nauczania.",
                    "en" => "Monitoring and evaluating the implementation of new teaching methods."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 21623,

                "name" => json_encode([
                    "pl" => "Doradzanie nauczycielom w rozwiązywaniu problemów dydaktycznych.",
                    "en" => "Advising teachers on solving didactic problems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 21624,

                "name" => json_encode([
                    "pl" => "Promowanie innowacyjnych metod i narzędzi dydaktycznych.",
                    "en" => "Promoting innovative methods and teaching tools."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $WIZYTATOR = [

            ["id" => 21625,

                "name" => json_encode([
                    "pl" => "Kontrola jakości kształcenia w szkołach i placówkach edukacyjnych.",
                    "en" => "Monitoring the quality of education in schools and educational institutions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 21626,

                "name" => json_encode([
                    "pl" => "Ocena realizacji podstawy programowej i programów edukacyjnych.",
                    "en" => "Evaluating the implementation of the curriculum and educational programs."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 21627,

                "name" => json_encode([
                    "pl" => "Przeprowadzanie wizyt w szkołach i sporządzanie raportów.",
                    "en" => "Conducting school visits and preparing reports."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 21628,

                "name" => json_encode([
                    "pl" => "Rekomendowanie działań naprawczych w przypadku stwierdzonych nieprawidłowości.",
                    "en" => "Recommending corrective actions in case of identified irregularities."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 21629,

                "name" => json_encode([
                    "pl" => "Współpraca z dyrektorami szkół w celu podnoszenia standardów edukacyjnych.",
                    "en" => "Collaborating with school principals to raise educational standards."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 21630,

                "name" => json_encode([
                    "pl" => "Monitorowanie przestrzegania przepisów prawa oświatowego.",
                    "en" => "Monitoring compliance with educational laws and regulations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $POZOSTALI_WIZYTATORZY_I_SPECJALIŚCI_METOD_NAUCZANIA = [

            ["id" => 21631,

                "name" => json_encode([
                    "pl" => "Przeprowadzanie ewaluacji metod nauczania w różnych typach szkół.",
                    "en" => "Conducting evaluations of teaching methods in various types of schools."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 21632,

                "name" => json_encode([
                    "pl" => "Doradzanie nauczycielom i dyrektorom w zakresie wdrażania nowych metod dydaktycznych.",
                    "en" => "Advising teachers and principals on implementing new teaching methods."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 21633,

                "name" => json_encode([
                    "pl" => "Organizacja szkoleń dla kadry pedagogicznej.",
                    "en" => "Organizing training sessions for teaching staff."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 21634,

                "name" => json_encode([
                    "pl" => "Tworzenie raportów i analiz dotyczących efektywności metod nauczania.",
                    "en" => "Preparing reports and analyses on the effectiveness of teaching methods."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 21635,

                "name" => json_encode([
                    "pl" => "Prowadzenie badań nad nowoczesnymi technologiami w edukacji.",
                    "en" => "Conducting research on modern technologies in education."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 21636,

                "name" => json_encode([
                    "pl" => "Współpraca z jednostkami samorządowymi i ministerstwem edukacji w zakresie rozwoju dydaktyki.",
                    "en" => "Collaborating with local authorities and the ministry of education on didactic development."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $POZOSTALI_NAUCZYCIELE_SZTUKI_W_PLACÓWKACH_POZASZKOLNYCH = [

            ["id" => 21637,

                "name" => json_encode([
                    "pl" => "Prowadzenie zajęć artystycznych, takich jak malarstwo, rzeźba, muzyka czy teatr, dla dzieci i dorosłych.",
                    "en" => "Conducting artistic activities such as painting, sculpture, music, or theater for children and adults."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 21638,

                "name" => json_encode([
                    "pl" => "Tworzenie indywidualnych programów zajęć dla uczestników o różnym poziomie zaawansowania.",
                    "en" => "Developing individual lesson programs for participants of varying skill levels."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 21639,

                "name" => json_encode([
                    "pl" => "Organizacja wystaw, pokazów i przedstawień artystycznych.",
                    "en" => "Organizing exhibitions, shows, and artistic performances."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 21640,

                "name" => json_encode([
                    "pl" => "Wspieranie uczestników w rozwijaniu ich kreatywności i umiejętności artystycznych.",
                    "en" => "Supporting participants in developing their creativity and artistic skills."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 21641,

                "name" => json_encode([
                    "pl" => "Zapewnienie odpowiednich materiałów i narzędzi do zajęć artystycznych.",
                    "en" => "Providing appropriate materials and tools for artistic activities."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 21642,

                "name" => json_encode([
                    "pl" => "Organizowanie warsztatów i zajęć plenerowych.",
                    "en" => "Organizing workshops and outdoor classes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $NAUCZYCIEL_TECHNOLOGII_INFORMATYCZNYCH_W_PLACÓWKACH_POZASZKOLNYCH = [

            ["id" => 21643,

                "name" => json_encode([
                    "pl" => "Prowadzenie kursów z zakresu podstawowych i zaawansowanych technologii informatycznych.",
                    "en" => "Conducting courses in basic and advanced information technologies."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 21644,

                "name" => json_encode([
                    "pl" => "Opracowywanie programów nauczania dopasowanych do potrzeb uczestników.",
                    "en" => "Developing curricula tailored to participants' needs."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 21645,

                "name" => json_encode([
                    "pl" => "Prowadzenie zajęć z zakresu programowania, obsługi systemów i narzędzi IT.",
                    "en" => "Teaching programming, system operation, and IT tools."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 21646,

                "name" => json_encode([
                    "pl" => "Doradzanie uczestnikom w wyborze sprzętu i oprogramowania.",
                    "en" => "Advising participants on hardware and software selection."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 21647,

                "name" => json_encode([
                    "pl" => "Prowadzenie warsztatów z zakresu bezpieczeństwa informatycznego.",
                    "en" => "Conducting workshops on IT security."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 21648,

                "name" => json_encode([
                    "pl" => "Monitorowanie postępów uczestników i dostosowywanie programu zajęć.",
                    "en" => "Monitoring participants' progress and adjusting the lesson plan."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $POZOSTALI_INSTRUKTORZY_TECHNOLOGII_INFORMATYCZNYCH = [

            ["id" => 21649,

                "name" => json_encode([
                    "pl" => "Prowadzenie szkoleń z obsługi programów komputerowych i narzędzi biurowych.",
                    "en" => "Conducting training on using computer programs and office tools."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 21650,

                "name" => json_encode([
                    "pl" => "Opracowywanie kursów z zakresu technologii chmurowych i zarządzania danymi.",
                    "en" => "Developing courses on cloud technologies and data management."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 21651,

                "name" => json_encode([
                    "pl" => "Wspieranie uczestników w nauce programowania i tworzenia aplikacji.",
                    "en" => "Supporting participants in learning programming and application development."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 21652,

                "name" => json_encode([
                    "pl" => "Organizacja warsztatów praktycznych z zakresu technologii informacyjnych.",
                    "en" => "Organizing practical workshops on information technologies."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 21653,

                "name" => json_encode([
                    "pl" => "Doradzanie w zakresie wyboru technologii wspierających pracę i naukę.",
                    "en" => "Advising on selecting technologies to support work and learning."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 21654,

                "name" => json_encode([
                    "pl" => "Monitorowanie rozwoju technologii i wdrażanie ich w programy szkoleniowe.",
                    "en" => "Monitoring technological developments and incorporating them into training programs."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $DYDAKTYK_MULTIMEDIALNY = [

            ["id" => 21655,

                "name" => json_encode([
                    "pl" => "Opracowywanie materiałów dydaktycznych w formie multimedialnej.",
                    "en" => "Developing multimedia teaching materials."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 21656,

                "name" => json_encode([
                    "pl" => "Tworzenie interaktywnych prezentacji, filmów edukacyjnych i symulacji.",
                    "en" => "Creating interactive presentations, educational videos, and simulations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 21657,

                "name" => json_encode([
                    "pl" => "Wdrażanie nowoczesnych technologii w proces dydaktyczny.",
                    "en" => "Implementing modern technologies into the teaching process."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 21658,

                "name" => json_encode([
                    "pl" => "Projektowanie platform e-learningowych i narzędzi edukacyjnych.",
                    "en" => "Designing e-learning platforms and educational tools."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 21659,

                "name" => json_encode([
                    "pl" => "Szkolenie nauczycieli w zakresie wykorzystania multimediów w edukacji.",
                    "en" => "Training teachers in using multimedia in education."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 21660,

                "name" => json_encode([
                    "pl" => "Ewaluacja skuteczności wykorzystania multimediów w nauczaniu.",
                    "en" => "Evaluating the effectiveness of multimedia in teaching."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $EGZAMINATOR_ONLINE = [

            ["id" => 21661,

                "name" => json_encode([
                    "pl" => "Przygotowywanie i przeprowadzanie egzaminów zdalnych.",
                    "en" => "Preparing and conducting remote exams."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 21662,

                "name" => json_encode([
                    "pl" => "Opracowywanie pytań egzaminacyjnych w formie cyfrowej.",
                    "en" => "Developing digital exam questions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 21663,

                "name" => json_encode([
                    "pl" => "Monitorowanie i ocenianie odpowiedzi uczestników online.",
                    "en" => "Monitoring and evaluating participants' online responses."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 21664,

                "name" => json_encode([
                    "pl" => "Zapewnienie przestrzegania zasad uczciwości akademickiej podczas egzaminów.",
                    "en" => "Ensuring adherence to academic honesty principles during exams."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 21665,

                "name" => json_encode([
                    "pl" => "Wdrażanie technologii do weryfikacji tożsamości i nadzoru egzaminacyjnego.",
                    "en" => "Implementing technologies for identity verification and exam supervision."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 21666,

                "name" => json_encode([
                    "pl" => "Przygotowywanie raportów z wyników egzaminów i sugestii dotyczących ich poprawy.",
                    "en" => "Preparing reports on exam results and suggestions for improvement."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $NAUCZYCIEL_NAUCZANIA_NA_ODLEGŁOŚĆ = [

            ["id" => 21667,

                "name" => json_encode([
                    "pl" => "Prowadzenie zajęć edukacyjnych w formie zdalnej z wykorzystaniem platform e-learningowych.",
                    "en" => "Conducting educational classes remotely using e-learning platforms."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 21668,

                "name" => json_encode([
                    "pl" => "Opracowywanie i udostępnianie materiałów dydaktycznych online.",
                    "en" => "Developing and sharing online teaching materials."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 21669,

                "name" => json_encode([
                    "pl" => "Monitorowanie postępów uczniów i udzielanie indywidualnych konsultacji online.",
                    "en" => "Monitoring students' progress and providing individual online consultations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 21670,

                "name" => json_encode([
                    "pl" => "Wykorzystanie interaktywnych narzędzi edukacyjnych w celu zwiększenia zaangażowania uczniów.",
                    "en" => "Using interactive educational tools to increase student engagement."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 21671,

                "name" => json_encode([
                    "pl" => "Prowadzenie zajęć na żywo oraz przygotowywanie nagrań wideo.",
                    "en" => "Hosting live classes and preparing video recordings."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 21672,

                "name" => json_encode([
                    "pl" => "Udział w szkoleniach z zakresu nowoczesnych metod nauczania zdalnego.",
                    "en" => "Participating in training on modern remote teaching methods."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $POZOSTALI_SPECJALIŚCI_NAUCZANIA_I_WYCHOWANIA_GDZIE_INDZIEJ_NIESKLASYFIKOWANI = [

            ["id" => 21673,

                "name" => json_encode([
                    "pl" => "Opracowywanie innowacyjnych metod nauczania dostosowanych do specyficznych potrzeb uczniów.",
                    "en" => "Developing innovative teaching methods tailored to specific student needs."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 21674,

                "name" => json_encode([
                    "pl" => "Prowadzenie zajęć dydaktycznych i wychowawczych w nietypowych formach edukacji.",
                    "en" => "Conducting educational and developmental activities in unconventional educational forms."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 21675,

                "name" => json_encode([
                    "pl" => "Współpraca z instytucjami edukacyjnymi i społecznymi w celu wsparcia uczniów.",
                    "en" => "Collaborating with educational and social institutions to support students."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 21676,

                "name" => json_encode([
                    "pl" => "Diagnozowanie problemów edukacyjnych i wychowawczych oraz proponowanie rozwiązań.",
                    "en" => "Diagnosing educational and developmental problems and proposing solutions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 21677,

                "name" => json_encode([
                    "pl" => "Tworzenie i prowadzenie programów edukacyjnych dla grup zagrożonych wykluczeniem.",
                    "en" => "Creating and implementing educational programs for groups at risk of exclusion."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 21678,

                "name" => json_encode([
                    "pl" => "Prowadzenie szkoleń dla nauczycieli i opiekunów w zakresie nowoczesnych metod wychowawczych.",
                    "en" => "Conducting training for teachers and caregivers on modern developmental methods."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $INSTRUKTOR_TECHNIKI_JAZDY = [

            ["id" => 21679,

                "name" => json_encode([
                    "pl" => "Prowadzenie zaawansowanych szkoleń z techniki jazdy dla kierowców.",
                    "en" => "Conducting advanced driving technique training for drivers."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 21680,

                "name" => json_encode([
                    "pl" => "Przygotowywanie kierowców do jazdy w trudnych warunkach drogowych.",
                    "en" => "Preparing drivers for challenging road conditions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 21681,

                "name" => json_encode([
                    "pl" => "Organizacja szkoleń doskonalących z zakresu jazdy defensywnej i ekonomicznej.",
                    "en" => "Organizing improvement courses on defensive and economic driving."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 21682,

                "name" => json_encode([
                    "pl" => "Prowadzenie zajęć praktycznych na specjalistycznych torach szkoleniowych.",
                    "en" => "Conducting practical classes on specialized training tracks."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 21683,

                "name" => json_encode([
                    "pl" => "Edukacja w zakresie zasad bezpieczeństwa i radzenia sobie w sytuacjach awaryjnych.",
                    "en" => "Educating on safety principles and emergency handling."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 21684,

                "name" => json_encode([
                    "pl" => "Monitorowanie postępów uczestników i dostosowywanie programu szkoleniowego.",
                    "en" => "Monitoring participants' progress and adapting the training program."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $INSTRUKTOR_NAUKI_JAZDY = [

            ["id" => 21685,

                "name" => json_encode([
                    "pl" => "Prowadzenie teoretycznych i praktycznych zajęć przygotowujących do egzaminu na prawo jazdy.",
                    "en" => "Conducting theoretical and practical lessons preparing for the driving license exam."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 21686,

                "name" => json_encode([
                    "pl" => "Nauczanie zasad ruchu drogowego i odpowiedzialnego zachowania na drodze.",
                    "en" => "Teaching traffic regulations and responsible behavior on the road."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 21687,

                "name" => json_encode([
                    "pl" => "Prowadzenie zajęć praktycznych na placu manewrowym i w ruchu miejskim.",
                    "en" => "Conducting practical lessons on a maneuvering area and in city traffic."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 21688,

                "name" => json_encode([
                    "pl" => "Monitorowanie postępów kursantów i dostosowywanie planu zajęć.",
                    "en" => "Monitoring trainees' progress and adjusting the lesson plan."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 21689,

                "name" => json_encode([
                    "pl" => "Edukacja w zakresie ekologicznej i bezpiecznej jazdy.",
                    "en" => "Educating on eco-friendly and safe driving."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 21690,

                "name" => json_encode([
                    "pl" => "Przygotowanie kursantów do egzaminów teoretycznych i praktycznych.",
                    "en" => "Preparing trainees for theoretical and practical exams."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $POZOSTALI_INSTRUKTORZY_NAUKI_JAZDY = [

            ["id" => 21691,

                "name" => json_encode([
                    "pl" => "Prowadzenie szkoleń dla kierowców w zakresie jazdy w trudnych warunkach.",
                    "en" => "Conducting driver training in challenging driving conditions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 21692,

                "name" => json_encode([
                    "pl" => "Organizacja szkoleń z jazdy ekonomicznej i ekologicznej.",
                    "en" => "Organizing training in economical and eco-friendly driving."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 21693,

                "name" => json_encode([
                    "pl" => "Przygotowywanie kierowców do obsługi specjalistycznych pojazdów.",
                    "en" => "Preparing drivers to operate specialized vehicles."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 21694,

                "name" => json_encode([
                    "pl" => "Prowadzenie szkoleń z techniki jazdy dla osób z ograniczeniami ruchowymi.",
                    "en" => "Conducting driving technique training for people with mobility limitations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 21695,

                "name" => json_encode([
                    "pl" => "Szkolenie kierowców w zakresie jazdy nocnej i w warunkach zimowych.",
                    "en" => "Training drivers in night and winter driving."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 21696,

                "name" => json_encode([
                    "pl" => "Monitorowanie i ocena umiejętności kierowców podczas szkolenia.",
                    "en" => "Monitoring and evaluating drivers' skills during training."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $ASYSTENT_NAUCZYCIELA_DZIECKA_CUDZOZIEMCA = [

            ["id" => 21697,

                "name" => json_encode([
                    "pl" => "Wspieranie dziecka cudzoziemca w adaptacji do nowego środowiska szkolnego.",
                    "en" => "Supporting foreign children in adapting to a new school environment."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 21698,

                "name" => json_encode([
                    "pl" => "Pomoc w nauce języka polskiego jako obcego.",
                    "en" => "Assisting in learning Polish as a foreign language."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 21699,

                "name" => json_encode([
                    "pl" => "Współpraca z nauczycielami w zakresie dostosowania materiałów dydaktycznych.",
                    "en" => "Collaborating with teachers to adapt educational materials."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 21700,

                "name" => json_encode([
                    "pl" => "Budowanie pozytywnych relacji między dziećmi cudzoziemskimi a ich rówieśnikami.",
                    "en" => "Fostering positive relationships between foreign children and their peers."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 21701,

                "name" => json_encode([
                    "pl" => "Prowadzenie indywidualnych i grupowych zajęć wspierających naukę.",
                    "en" => "Conducting individual and group lessons to support learning."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 21702,

                "name" => json_encode([
                    "pl" => "Wspieranie rodziców cudzoziemców w komunikacji ze szkołą.",
                    "en" => "Supporting foreign parents in communicating with the school."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $ASYSTENT_EDUKACJI_ROMSKIEJ = [

            ["id" => 21703,

                "name" => json_encode([
                    "pl" => "Wspieranie dzieci romskich w nauce i integracji w środowisku szkolnym.",
                    "en" => "Supporting Roma children in learning and integrating into the school environment."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 21704,

                "name" => json_encode([
                    "pl" => "Promowanie kultury romskiej wśród społeczności szkolnej.",
                    "en" => "Promoting Roma culture within the school community."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 21705,

                "name" => json_encode([
                    "pl" => "Prowadzenie działań na rzecz budowania tolerancji i zrozumienia kulturowego.",
                    "en" => "Conducting activities to foster tolerance and cultural understanding."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 21706,

                "name" => json_encode([
                    "pl" => "Wspieranie nauczycieli w pracy z uczniami romskimi.",
                    "en" => "Assisting teachers in working with Roma students."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 21707,

                "name" => json_encode([
                    "pl" => "Prowadzenie konsultacji z rodzicami dzieci romskich w zakresie edukacji.",
                    "en" => "Consulting with Roma parents on educational matters."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 21708,

                "name" => json_encode([
                    "pl" => "Organizowanie warsztatów edukacyjnych dotyczących współpracy międzykulturowej.",
                    "en" => "Organizing educational workshops on intercultural collaboration."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];


        DB::table('detail_projects')->insert(array_merge(
            $NAUCZYCIEL_PRZEDMIOTU_W_SZKOLE_PONADPODSTAWOWEJ,
            $POZOSTALI_NAUCZYCIELE_SZKÓŁ_PONADPODSTAWOWYCH,
            $POZOSTALI_NAUCZYCIELE_SZKÓŁ_PODSTAWOWYCH,
            $POZOSTALI_NAUCZYCIELE_KSZTAŁCENIA_ZAWODOWEGO,
            $PEDAGOG,
            $EWALUATOR_PROGRAMÓW_EDUKACJI,
            $METODYK_EDUKACJI_NA_ODLEGŁOŚĆ,
            $METODYK_TECHNOLOGII_INFORMACYJNYCH_I_KOMUNIKACYJNYCH,
            $NAUCZYCIEL_DORADCA_METODYCZNY,
            $WIZYTATOR,
            $POZOSTALI_WIZYTATORZY_I_SPECJALIŚCI_METOD_NAUCZANIA,
            $POZOSTALI_NAUCZYCIELE_SZTUKI_W_PLACÓWKACH_POZASZKOLNYCH,
            $NAUCZYCIEL_TECHNOLOGII_INFORMATYCZNYCH_W_PLACÓWKACH_POZASZKOLNYCH,
            $POZOSTALI_INSTRUKTORZY_TECHNOLOGII_INFORMATYCZNYCH,
            $DYDAKTYK_MULTIMEDIALNY,
            $EGZAMINATOR_ONLINE,
            $NAUCZYCIEL_NAUCZANIA_NA_ODLEGŁOŚĆ,
            $POZOSTALI_SPECJALIŚCI_NAUCZANIA_I_WYCHOWANIA_GDZIE_INDZIEJ_NIESKLASYFIKOWANI,
            $INSTRUKTOR_TECHNIKI_JAZDY,
            $INSTRUKTOR_NAUKI_JAZDY,
            $POZOSTALI_INSTRUKTORZY_NAUKI_JAZDY,
            $ASYSTENT_NAUCZYCIELA_DZIECKA_CUDZOZIEMCA,
            $ASYSTENT_EDUKACJI_ROMSKIEJ
        ));

        Category::whereId('566')->first()->detailprojects()->attach(collect($NAUCZYCIEL_PRZEDMIOTU_W_SZKOLE_PONADPODSTAWOWEJ)->pluck('id')->toArray());
        Category::whereId('567')->first()->detailprojects()->attach(collect($POZOSTALI_NAUCZYCIELE_SZKÓŁ_PONADPODSTAWOWYCH)->pluck('id')->toArray());
        Category::whereId('569')->first()->detailprojects()->attach(collect($POZOSTALI_NAUCZYCIELE_SZKÓŁ_PODSTAWOWYCH)->pluck('id')->toArray());
        Category::whereId('574')->first()->detailprojects()->attach(collect($POZOSTALI_NAUCZYCIELE_KSZTAŁCENIA_ZAWODOWEGO)->pluck('id')->toArray());
        Category::whereId('581')->first()->detailprojects()->attach(collect($PEDAGOG)->pluck('id')->toArray());

        Category::whereId('592')->first()->detailprojects()->attach(collect($EWALUATOR_PROGRAMÓW_EDUKACJI)->pluck('id')->toArray());
        Category::whereId('593')->first()->detailprojects()->attach(collect($METODYK_EDUKACJI_NA_ODLEGŁOŚĆ)->pluck('id')->toArray());
        Category::whereId('594')->first()->detailprojects()->attach(collect($METODYK_TECHNOLOGII_INFORMACYJNYCH_I_KOMUNIKACYJNYCH)->pluck('id')->toArray());
        Category::whereId('595')->first()->detailprojects()->attach(collect($NAUCZYCIEL_DORADCA_METODYCZNY)->pluck('id')->toArray());
        Category::whereId('596')->first()->detailprojects()->attach(collect($WIZYTATOR)->pluck('id')->toArray());
        Category::whereId('597')->first()->detailprojects()->attach(collect($POZOSTALI_WIZYTATORZY_I_SPECJALIŚCI_METOD_NAUCZANIA)->pluck('id')->toArray());
        Category::whereId('600')->first()->detailprojects()->attach(collect($POZOSTALI_NAUCZYCIELE_SZTUKI_W_PLACÓWKACH_POZASZKOLNYCH)->pluck('id')->toArray());
        Category::whereId('602')->first()->detailprojects()->attach(collect($NAUCZYCIEL_TECHNOLOGII_INFORMATYCZNYCH_W_PLACÓWKACH_POZASZKOLNYCH)->pluck('id')->toArray());
        Category::whereId('603')->first()->detailprojects()->attach(collect($POZOSTALI_INSTRUKTORZY_TECHNOLOGII_INFORMATYCZNYCH)->pluck('id')->toArray());
        Category::whereId('604')->first()->detailprojects()->attach(collect($DYDAKTYK_MULTIMEDIALNY)->pluck('id')->toArray());
        Category::whereId('605')->first()->detailprojects()->attach(collect($EGZAMINATOR_ONLINE)->pluck('id')->toArray());
        Category::whereId('606')->first()->detailprojects()->attach(collect($NAUCZYCIEL_NAUCZANIA_NA_ODLEGŁOŚĆ)->pluck('id')->toArray());
        Category::whereId('613')->first()->detailprojects()->attach(collect($POZOSTALI_SPECJALIŚCI_NAUCZANIA_I_WYCHOWANIA_GDZIE_INDZIEJ_NIESKLASYFIKOWANI)->pluck('id')->toArray());
        Category::whereId('617')->first()->detailprojects()->attach(collect($INSTRUKTOR_TECHNIKI_JAZDY)->pluck('id')->toArray());
        Category::whereId('618')->first()->detailprojects()->attach(collect($INSTRUKTOR_NAUKI_JAZDY)->pluck('id')->toArray());
        Category::whereId('619')->first()->detailprojects()->attach(collect($POZOSTALI_INSTRUKTORZY_NAUKI_JAZDY)->pluck('id')->toArray());
        Category::whereId('622')->first()->detailprojects()->attach(collect($ASYSTENT_NAUCZYCIELA_DZIECKA_CUDZOZIEMCA)->pluck('id')->toArray());
        Category::whereId('623')->first()->detailprojects()->attach(collect($ASYSTENT_EDUKACJI_ROMSKIEJ)->pluck('id')->toArray());

    }
}
