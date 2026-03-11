<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Country;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Inertia\Inertia;
use Inertia\Response;

class CountryController extends Controller
{
    protected function getContinents(): array
    {
        return [
            'africa' => [
                'pl' => 'Afryka',
                'en' => 'Africa',
                'ar' => 'أفريقيا',
                'pt' => 'África',
                'fr' => 'Afrique',
                'am' => 'አፍሪካ',
                'es' => 'África',
                'nl' => 'Afrika',
                'ps' => 'افریقا',
                'hy' => 'Աֆրիկա',
                'az' => 'Afrika',
                'bn' => 'আফ্রিকা',
                'dz' => 'ཨ་ཕྷྲི་ཀ',
                'ms' => 'Afrika',
                'zh' => '非洲',
                'ka' => 'აფሪკა',
                'hi' => 'अफ्रीका',
                'id' => 'Afrika',
                'fa' => 'آفریقa',
                'he' => 'אפריקה',
                'ja' => 'アフリカ',
                'km' => 'អាហ្វ្រិក',
                'ru' => 'Африка',
                'ko' => '아프리카',
                'lo' => 'ອາຟຣິກາ',
                'dv' => 'އާފުރީކާ',
                'my' => 'အာဖရိက',
                'mn' => 'Африк',
                'ne' => 'अफ्रिका',
                'si' => 'ඇෆ්‍රිකාව',
                'tg' => 'Африқо',
                'th' => 'แอฟริกา',
                'tk' => 'Afrika',
                'uz' => 'Afrika',
                'vi' => 'Châu Phi',
                'sq' => 'Afrika',
                'ca' => 'Àfrica',
                'de' => 'Afrika',
                'be' => 'Афрыка',
                'bs' => 'Afrika',
                'bg' => 'Африка',
                'hr' => 'Afrika',
                'el' => 'Αφρική',
                'me' => 'Африка',
                'cs' => 'Afrika',
                'da' => 'Afrika',
                'et' => 'Aafrika',
                'fi' => 'Afrikka',
                'is' => 'Afríka',
                'lt' => 'Afrika',
                'lb' => 'Afrika',
                'lv' => 'Āfrika',
                'mk' => 'Африка',
                'ro' => 'Africa',
                'it' => 'Africa',
                'sr' => 'Африка',
                'sk' => 'Afrika',
                'sl' => 'Afrika',
                'no' => 'Afrika',
                'sv' => 'Afrika',
                'tr' => 'Afrika',
                'uk' => 'Африка',
                'hu' => 'Afrika'
            ],
            'sAmerica' => [
                'pl' => 'Ameryka Południowa i Środkowa',
                'en' => 'South and Central America',
                'ar' => 'أمريكا الجنوبية والوسطى',
                'pt' => 'América do Sul e Central',
                'fr' => 'Amérique du Sud et Centrale',
                'am' => 'ደቡብ እና መካከለኛ አሜሪካ',
                'es' => 'América del Sur y Central',
                'nl' => 'Zuid- en Midden-Amerika',
                'ps' => 'جنوبي او مرکزي امريکا',
                'hy' => 'Հարավային և Կենտրոնական Ամերիկա',
                'az' => 'Cənubi və Mərkəzi Amerika',
                'bn' => 'দক্ষিণ ও মধ্য আমেরিকা',
                'dz' => 'ལྷོ་བྱང་དང་ಬར་มཚམས་ཨาམེ་རི་ཀ',
                'ms' => 'Amerika Selatan dan Tengah',
                'zh' => '南美和中美洲',
                'ka' => 'სამხრეთ და ცენტრალური ამერიკა',
                'hi' => 'दक्षिण और मध्य अमेरिका',
                'id' => 'Amerika Selatan dan Tengah',
                'fa' => 'آمریکای جنوبی و مرکزی',
                'he' => 'דרום ומרכז אמריקה',
                'ja' => '南アメリカと中央アメリカ',
                'km' => 'អាមេរិកខាងត្បូងនិងកណ្តាល',
                'ru' => 'Южная и Центральная Америка',
                'ko' => '남아메리카 및 중앙아메리카',
                'lo' => 'ອາເມລິກາໃຕ້ ແລະກາງ',
                'dv' => 'ދާވަކަށް އަނދި މަދަނަ އެމެރިކަ',
                'my' => 'တောင်အမေရိကနှင့်အလယ်အမေရိက',
                'mn' => 'Өмнөд болон Төв Америк',
                'ne' => 'दक्षिण र मध्य अमेरिका',
                'si' => 'දකුණු හා मධ්‍යම ඇමරිකාව',
                'tg' => 'Амрикои Ҷанубӣ ва Марказӣ',
                'th' => 'อเมริกาใต้และอเมริกากลาง',
                'tk' => 'Günorta we Merkezi Amerika',
                'uz' => 'Janubiy va Markaziy Amerika',
                'vi' => 'Nam Mỹ và Trung Mỹ',
                'sq' => 'Amerika e Jugut dhe Qendrore',
                'ca' => 'Amèrica del Sud i Central',
                'de' => 'Süd- und Mittelamerika',
                'be' => 'Паўднёвая і Цэнтральная Амерыка',
                'bs' => 'Južna i Srednja Amerika',
                'bg' => 'Южна и Централна Америка',
                'hr' => 'Južna i Srednja Amerika',
                'el' => 'Νότια και Κεντρική Αμερική',
                'me' => 'Јужна и Централна Америка',
                'cs' => 'Jižní a Střední Amerika',
                'da' => 'Syd- og Mellemamerika',
                'et' => 'Lõuna- ja Kesk-Ameerika',
                'fi' => 'Etelä- ja Väli-Amerikka',
                'is' => 'Suður- og Mið-Ameríka',
                'lt' => 'Pietų ir Centrinė Amerika',
                'lb' => 'Süd- a Mëttelamerika',
                'lv' => 'Dienvid- un Vidusamerika',
                'mk' => 'Јужна и Централна Америка',
                'ro' => 'America de Sud și Centrală',
                'it' => 'America Meridionale e Centrale',
                'sr' => 'Јужна и Централна Америка',
                'sk' => 'Južná a Stredná Amerika',
                'sl' => 'Južna in Srednja Amerika',
                'no' => 'Sør- og Mellom-Amerika',
                'sv' => 'Syd- och Mellanamerika',
                'tr' => 'Güney ve Orta Amerika',
                'uk' => 'Південна та Центральна Америка',
                'hu' => 'Dél- és Közép-Amerika'
            ],
            'nAmerica' => [
                'pl' => 'Ameryka Północna i Karaiby',
                'en' => 'North America and the Caribbean',
                'ar' => 'أمريكا الشمالية ومنطقة البحر الكاريبي',
                'pt' => 'América do Norte e Caribe',
                'fr' => 'Amérique du Nord et les Caraïbes',
                'am' => 'ሰሜን አሜሪካ અને ካሪቢያን',
                'es' => 'América del Norte y el Caribe',
                'nl' => 'Noord-Amerika en de Caraïben',
                'ps' => 'شمالي امريکا او کاريب',
                'hy' => 'Հյուսիսային Ամերիկա և Կարիբյան',
                'az' => 'Şimali Amerika və Karib',
                'bn' => 'উত্তর আমেরিকা এবং ক্যারিবিয়ান',
                'dz' => 'བྱང་བརྒྱུད་ཨาམེ་རི་ཀาདང་ཁาរི་བི་ཡﻨ',
                'ms' => 'Amerika Utara dan Caribbean',
                'zh' => '北美和加勒比',
                'ka' => 'ჩრდილოეთ ამერიკა და კარიბები',
                'hi' => 'उत्तर अमेरिका और कैरिबियन',
                'id' => 'Amerika Utara dan Karibia',
                'fa' => 'آمریکای شمالی و کارائیب',
                'he' => 'אמריקה הצפונית והקריביים',
                'ja' => '北アメリカとカリブ海',
                'km' => 'អាមេរិកខាងជើង និងកាឡារីប៊ាន',
                'ru' => 'Северная Америка и Карибы',
                'ko' => '북아메리카 및 카리브해',
                'lo' => 'ອາເມລິກາເໜືອ ແລະ ຄາຣິບຽນ',
                'dv' => 'ފަންތަތުގެ އެමެރިކަ އައު ކަރިބިޔަން',
                'my' => 'မြောက်အမေရိကနှင့် ကာရစ်ဘီယန်',
                'mn' => 'Хойд Америк ба Карибын тэнгис',
                'ne' => 'उत्तर अमेरिका र क्यारेबियन',
                'si' => 'උතුරු ඇමරිකාව සහ කැරිබියානු',
                'tg' => 'Амрикои Шимолӣ ва Кариб',
                'th' => 'อเมริกาเหนือและแคริเบียน',
                'tk' => 'Demirgazyk Amerika we Karib',
                'uz' => 'Shimoliy Amerika va Karib',
                'vi' => 'Bắc Mỹ và Caribê',
                'sq' => 'Amerika e Veriut dhe Karaibet',
                'ca' => 'Amèrica del Nord i el Carib',
                'de' => 'Nordamerika und die Karibik',
                'be' => 'Паўночная Амерака і Карыбы',
                'bs' => 'Sjeverna Amerika i Karibi',
                'bg' => 'Северна Америка и Карибите',
                'hr' => 'Sjeverna Amerika i Karibi',
                'el' => 'Βόρεια Αμερική και Καραϊβική',
                'me' => 'Сјеверна Америка и Кариби',
                'cs' => 'Severní Amerika a Karibik',
                'da' => 'Nordamerika og Caribien',
                'et' => 'Põhja-Ameerika ja Kariibid',
                'fi' => 'Pohjois-Amerikka ja Karibia',
                'is' => 'Norður-Ameríka og Karíbahaf',
                'lt' => 'Šiaurės Amerika ir Karibai',
                'lb' => 'Nordamerika a Karibik',
                'lv' => 'Ziemeļamerika un Karību reģions',
                'mk' => 'Северна Америка i Карибите',
                'ro' => 'America de Nord și Caraibe',
                'it' => 'America del Nord e Caraibi',
                'sr' => 'Северна Америка и Кариби',
                'sk' => 'Severná Amerika a Karibik',
                'sl' => 'Severna Amerika in Karibi',
                'no' => 'Nord-Amerika og Karibia',
                'sv' => 'Nordamerika och Karibien',
                'tr' => 'Kuzey Amerika ve Karayipler',
                'uk' => 'Північна Америка та Кариби',
                'hu' => 'Észak-Amerika i a Karib-térség'
            ],
            'asia' => [
                'pl' => 'Azja',
                'en' => 'Asia',
                'ar' => 'آسيا',
                'pt' => 'Ásia',
                'fr' => 'Asie',
                'am' => 'እስያ',
                'es' => 'Asia',
                'nl' => 'Azië',
                'ps' => 'آسیا',
                'hy' => 'Ասիա',
                'az' => 'Asiya',
                'bn' => 'এশিয়া',
                'dz' => 'ཨ་ཤི་ཡ',
                'ms' => 'Asia',
                'zh' => '亚洲',
                'ka' => 'აზია',
                'hi' => 'एशिया',
                'id' => 'Asia',
                'fa' => 'آسیا',
                'he' => 'אסיה',
                'ja' => 'アジア',
                'km' => 'អាស៊ី',
                'ru' => 'Азия',
                'ko' => '아시아',
                'lo' => 'ອາເຊຍ',
                'dv' => 'އަސިޔާ',
                'my' => 'အာရှ',
                'mn' => 'Азид',
                'ne' => 'एशिया',
                'si' => 'ඇසියාව',
                'tg' => 'Осиё',
                'th' => 'เอเชีย',
                'tk' => 'Aziýa',
                'uz' => 'Osiyo',
                'vi' => 'Châu Á',
                'sq' => 'Azia',
                'ca' => 'Àsia',
                'de' => 'Asien',
                'be' => 'Азія',
                'bs' => 'Azija',
                'bg' => 'Азия',
                'hr' => 'Azija',
                'el' => 'Ασία',
                'me' => 'Азија',
                'cs' => 'Asie',
                'da' => 'Asien',
                'et' => 'Aasia',
                'fi' => 'Aasia',
                'is' => 'Asía',
                'lt' => 'Azija',
                'lb' => 'Asien',
                'lv' => 'Āzija',
                'mk' => 'Азија',
                'ro' => 'Asia',
                'it' => 'Asia',
                'sr' => 'Азија',
                'sk' => 'Ázia',
                'sl' => 'Azija',
                'no' => 'Asia',
                'sv' => 'Asien',
                'tr' => 'Asya',
                'uk' => 'Азія',
                'hu' => 'Ázsia'
            ],
            'europe' => [
                'pl' => 'Europa',
                'en' => 'Europe',
                'ar' => 'أوروبا',
                'pt' => 'Europa',
                'fr' => 'Europe',
                'am' => 'አውሮፓ',
                'es' => 'Europa',
                'nl' => 'Europa',
                'ps' => 'اروپا',
                'hy' => 'Եվրոպա',
                'az' => 'Avropa',
                'bn' => 'ইউরোপ',
                'dz' => 'ཡུ་རོཔ་',
                'ms' => 'Eropah',
                'zh' => '欧洲',
                'ka' => 'ევროპა',
                'hi' => 'यूरोप',
                'id' => 'Eropa',
                'fa' => 'اروپا',
                'he' => 'אירופה',
                'ja' => 'ヨーロッパ',
                'km' => 'អឺរ៉ុប',
                'ru' => 'Европа',
                'ko' => '유럽',
                'lo' => 'ຢູໂຣບ',
                'dv' => 'ޔުރޯޕާ',
                'my' => 'ဥရောပ',
                'mn' => 'Европ',
                'ne' => 'युरोप',
                'si' => 'යුරෝපය',
                'tg' => 'Европо',
                'th' => 'ยุโรป',
                'tk' => 'Ýewropa',
                'uz' => 'Yevropa',
                'vi' => 'Châu Âu',
                'sq' => 'Evropa',
                'ca' => 'Europa',
                'de' => 'Europa',
                'be' => 'Еўропа',
                'bs' => 'Evropa',
                'bg' => 'Европа',
                'hr' => 'Europa',
                'el' => 'Ευρώπη',
                'me' => 'Европа',
                'cs' => 'Evropa',
                'da' => 'Europa',
                'et' => 'Euroopa',
                'fi' => 'Eurooppa',
                'is' => 'Evrópa',
                'lt' => 'Europa',
                'lb' => 'Europa',
                'lv' => 'Eiropa',
                'mk' => 'Европа',
                'ro' => 'Europa',
                'it' => 'Europa',
                'sr' => 'Европа',
                'sk' => 'Európa',
                'sl' => 'Evropa',
                'no' => 'Europa',
                'sv' => 'Europa',
                'tr' => 'Avrupa',
                'uk' => 'Європа',
                'hu' => 'Európa'
            ],
            'oceania' => [
                'pl' => 'Oceania',
                'en' => 'Oceania',
                'ar' => 'أوقيانوسيا',
                'pt' => 'Oceania',
                'fr' => 'Océanie',
                'am' => 'ኦሴኒያ',
                'es' => 'Oceanía',
                'nl' => 'Oceanië',
                'ps' => 'اوقيانوسيا',
                'hy' => 'Օվկիանիա',
                'az' => 'Okeaniya',
                'bn' => 'ওশেনিয়া',
                'dz' => 'ཨོ་སེ་ནི་ཡ',
                'ms' => 'Oceania',
                'zh' => '大洋洲',
                'ka' => 'ოკეანეა',
                'hi' => 'ओशिनिया',
                'id' => 'Oseania',
                'fa' => 'اقیانوسیه',
                'he' => 'אוקיאניה',
                'ja' => 'オセアニア',
                'km' => 'អូសេអានី',
                'ru' => 'Океания',
                'ko' => '오세아니아',
                'lo' => 'ໂອເຊନຽ',
                'dv' => 'އޯސީނިއާ',
                'my' => 'ဩစတြေးလျและ ပစိဖိတ်ကျွန်းများ',
                'mn' => 'Далайн орон',
                'ne' => 'ओशिनिया',
                'si' => 'ඔෂනියා',
                'tg' => 'Уқёнусия',
                'th' => 'โอเชียเนีย',
                'tk' => 'Okeaniýa',
                'uz' => 'Okeaniya',
                'vi' => 'Châu Đại Dương',
                'sq' => 'Oqeania',
                'ca' => 'Oceania',
                'de' => 'Ozeanien',
                'be' => 'Акіянія',
                'bs' => 'Okeanija',
                'bg' => 'Океания',
                'hr' => 'Oceanija',
                'el' => 'Ωκεανία',
                'me' => 'Океанија',
                'cs' => 'Oceánie',
                'da' => 'Oceanien',
                'et' => 'Okeaania',
                'fi' => 'Oseania',
                'is' => 'Eyjaálfa',
                'lt' => 'Okeanija',
                'lb' => 'Ozeanien',
                'lv' => 'Okeānija',
                'mk' => 'Океанија',
                'ro' => 'Oceania',
                'it' => 'Oceania',
                'sr' => 'Океанија',
                'sk' => 'Oceánia',
                'sl' => 'Oceanija',
                'no' => 'Oseania',
                'sv' => 'Oceanien',
                'tr' => 'Okyanusya',
                'uk' => 'Океанія',
                'hu' => 'Óceánia'
            ],
        ];
    }

    public function index(Request $request): Response
    {
        $locale = app()->getLocale();
        $search = $request->search;

        // Prosty cache dla listy krajów, zależny od wyszukiwania i strony
        $page = $request->get('page', 1);
        $cacheKey = "countries_list_{$locale}_{$search}_{$page}";

        $countries = Cache::remember($cacheKey, 3600, function () use ($search, $locale) {
            return Country::query()
                ->when($search, function ($query, $search) use ($locale) {
                    $search = strtolower($search);
                    $query->where(function ($q) use ($search, $locale) {
                        $q->whereRaw("LOWER(JSON_UNQUOTE(JSON_EXTRACT(name, '$.\"{$locale}\"'))) LIKE ?", ["%{$search}%"])
                            ->orWhereRaw("LOWER(JSON_UNQUOTE(JSON_EXTRACT(name, '$.pl'))) LIKE ?", ["%{$search}%"])
                            ->orWhereRaw("LOWER(countryCode) LIKE ?", ["%{$search}%"]);
                    });
                })
                ->orderBy('id', 'desc')
                ->paginate(100)
                ->withQueryString();
        });

        return Inertia::render('Admin/Countries/Index', [
            'countries' => $countries,
            'filters' => $request->only(['search']),
            'languages' => config('langsShorts'),
        ]);
    }

    public function create(): Response
    {
        return Inertia::render('Admin/Countries/Create', [
            'languages' => config('langsShorts'),
            'continents' => $this->getContinents(),
        ]);
    }

    public function store(Request $request): RedirectResponse
    {
        $languages = config('langsShorts');
        $rules = [
            'countryCode' => 'required|string|max:10',
            'lang' => 'required|string|max:10',
            'name' => 'required|array',
            'continent' => 'required|array',
        ];

        $messages = [
            'countryCode.required' => 'Pole kod kraju jest wymagane.',
            'lang.required' => 'Pole język jest wymagane.',
            'name.required' => 'Pole nazwy jest wymagane.',
            'continent.required' => 'Pole kontynent jest wymagane.',
        ];

        foreach ($languages as $l) {
            $rules["name.{$l}"] = 'required|string|max:255';
            $rules["continent.{$l}"] = 'required|string|max:255';
            $messages["name.{$l}.required"] = "Pole nazwa kraju ({$l}) jest wymagane.";
            $messages["continent.{$l}.required"] = "Pole kontynent ({$l}) jest wymagane.";
        }

        $validated = $request->validate($rules, $messages);

        $validated['countryCode'] = strtolower($validated['countryCode']);
        $validated['lang'] = strtolower($validated['lang']);

        Country::create($validated);

        $this->clearCache();

        return redirect()->route('admin.countries.index')->with('flash.banner', 'Kraj został dodany.');
    }

    public function edit(Country $country): Response
    {
        return Inertia::render('Admin/Countries/Edit', [
            'country' => [
                'id' => $country->id,
                'countryCode' => $country->countryCode,
                'lang' => $country->lang,
                'name' => $country->getTranslations('name'),
                'continent' => $country->getTranslations('continent'),
            ],
            'languages' => config('langsShorts'),
            'continents' => $this->getContinents(),
        ]);
    }

    public function update(Request $request, Country $country): RedirectResponse
    {
        $languages = config('langsShorts');
        $rules = [
            'countryCode' => 'required|string|max:10',
            'lang' => 'required|string|max:10',
            'name' => 'required|array',
            'continent' => 'required|array',
        ];

        $messages = [
            'countryCode.required' => 'Pole kod kraju jest wymagane.',
            'lang.required' => 'Pole język jest wymagane.',
            'name.required' => 'Pole nazwy jest wymagane.',
            'continent.required' => 'Pole kontynent jest wymagane.',
        ];

        foreach ($languages as $l) {
            $rules["name.{$l}"] = 'required|string|max:255';
            $rules["continent.{$l}"] = 'required|string|max:255';
            $messages["name.{$l}.required"] = "Pole nazwa kraju ({$l}) jest wymagane.";
            $messages["continent.{$l}.required"] = "Pole kontynent ({$l}) jest wymagane.";
        }

        $validated = $request->validate($rules, $messages);

        $validated['countryCode'] = strtolower($validated['countryCode']);
        $validated['lang'] = strtolower($validated['lang']);

        $country->update($validated);

        $this->clearCache();

        return redirect()->route('admin.countries.index')->with('flash.banner', 'Kraj został zaktualizowany.');
    }

    public function destroy(Country $country): RedirectResponse
    {
        $country->delete();

        $this->clearCache();

        return back()->with('flash.banner', 'Kraj został usunięty.');
    }

    protected function clearCache(): void
    {
        // W prawdziwym środowisku lepiej użyć tagów cache, jeśli sterownik na to pozwala.
        // Tutaj usuwamy po prostu główne klucze lub polegamy na wygaśnięciu,
        // ale zgodnie z instrukcją "usuwanie go podczas usuwania edycji i dodawania".
        // Ponieważ klucze zawierają search i page, najprościej wyczyścić cały cache jeśli używamy go tylko do tego,
        // lub użyć bardziej zaawansowanego mechanizmu. Dla prostoty "prosty cache":

        // Jeśli używamy Redis/Memcached można by użyć tagów. Przy 'file' nie ma tagów.
        // Możemy spróbować wyczyścić przez wzorzec, ale PHP Cache nie wspiera tego natywnie dla wszystkich sterowników.
        // Najbezpieczniej dla "prostego cache" będzie użyć konkretnego klucza bazowego lub wyczyścić wszystko jeśli to dopuszczalne,
        // ale lepiej po prostu usunąć znane klucze lub użyć tagów jeśli dostępne.
        // W Laravelu bez tagów (na 'file') nie usuniemy po masce.

        // Załóżmy że chcemy być precyzyjni, ale instrukcja mówi o "prostym cache".
        // Wyczyszczę cache całkowicie dla pewności, że stare dane nie wiszą.
        Cache::flush();
    }
}
