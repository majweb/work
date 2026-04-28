<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Järgmised read sisaldavad vaikimisi veateateid, mida kasutab
    | valideerija klass. Mõnel neist reeglitest on mitu versiooni,
    | näiteks suuruse reeglid. Võid neid teateid siin vabalt muuta.
    |
    */

    "accepted" => "Väli :attribute peab olema aktsepteeritud.",
    "accepted_if" => "Väli :attribute peab olema aktsepteeritud, kui :other on :value.",
    "active_url" => "Väli :attribute ei ole korrektne URL.",
    "after" => "Väli :attribute peab olema kuupäev pärast :date.",
    "after_or_equal" => "Väli :attribute peab olema kuupäev mitte enne :date.",
    "alpha" => "Väli :attribute tohib sisaldada ainult tähti.",
    "alpha_dash" => "Väli :attribute tohib sisaldada ainult tähti, numbreid, kriipse ja alakriipse.",
    "alpha_num" => "Väli :attribute tohib sisaldada ainult tähti ja numbreid.",
    "array" => "Väli :attribute peab olema massiiv.",
    "ascii" => "Väli :attribute tohib sisaldada ainult ühebaidiseid alfanumeerilisi märke ja sümboleid.",
    "attached" => "Väli :attribute on juba lisatud.",
    "before" => "Väli :attribute peab olema kuupäev enne :date.",
    "before_or_equal" => "Väli :attribute peab olema kuupäev mitte pärast :date.",
    "between.array" => "Väli :attribute peab sisaldama :min kuni :max elementi.",
    "between.file" => "Väli :attribute peab olema vahemikus :min kuni :max kilobaiti.",
    "between.numeric" => "Väli :attribute peab olema vahemikus :min kuni :max.",
    "between.string" => "Väli :attribute peab olema vahemikus :min kuni :max märki.",
    "boolean" => "Väli :attribute peab olema tõene või väär.",
    "can" => "Väli :attribute sisaldab volitamata väärtust.",
    "confirmed" => "Välja :attribute kinnitus ei klapi.",
    "contains" => "Väljast :attribute puudub nõutav element.",
    "current_password" => "Parool on vale.",
    "date" => "Väli :attribute ei ole korrektne kuupäev.",
    "date_equals" => "Väli :attribute peab olema kuupäev, mis on võrdne :date.",
    "date_format" => "Väli :attribute ei vasta formaadile :format.",
    "decimal" => "Väljal :attribute peab olema :decimal komakohta.",
    "declined" => "Väli :attribute peab olema tagasi lükatud.",
    "declined_if" => "Väli :attribute peab olema tagasi lükatud, kui :other on :value.",
    "different" => "Väljad :attribute ja :other peavad olema erinevad.",
    "digits" => "Väli :attribute peab olema :digits numbrit pikk.",
    "digits_between" => "Väli :attribute peab olema :min kuni :max numbrit pikk.",
    "dimensions" => "Väljal :attribute on vigased pildi mõõtmed.",
    "distinct" => "Väljal :attribute on duubeldav väärtus.",
    "doesnt_end_with" => "Väli :attribute ei tohi lõppeda ühega järgmistest väärtustest: :values.",
    "doesnt_start_with" => "Väli :attribute ei tohi alata ühega järgmistest väärtustest: :values.",
    "email" => "Väli :attribute peab olema korrektne e-posti aadress.",
    "ends_with" => "Väli :attribute peab lõppema ühega järgmistest väärtustest: :values.",
    "enum" => "Valitud :attribute on vigane.",
    "exists" => "Valitud väli :attribute on vigane.",
    "extensions" => "Väljal :attribute peab olema üks järgmistest laienditest: :values.",
    "failed" => "Vale kasutajatunnus või parool.",
    "file" => "Väli :attribute peab olema fail.",
    "filled" => "Väli :attribute peab olema täidetud.",
    "gt.array" => "Väljal :attribute peab olema rohkem kui :value elementi.",
    "gt.file" => "Väli :attribute peab olema suurem kui :value kilobaiti.",
    "gt.numeric" => "Väli :attribute peab olema suurem kui :value.",
    "gt.string" => "Väli :attribute peab olema pikem kui :value märki.",
    "gte.array" => "Väljal :attribute peab olema :value või rohkem elementi.",
    "gte.file" => "Väli :attribute peab olema suurem või võrdne :value kilobaidiga.",
    "gte.numeric" => "Väli :attribute peab olema suurem või võrdne :value-ga.",
    "gte.string" => "Väli :attribute peab olema pikem või võrdne :value märgiga.",
    "hex_color" => "Väli :attribute peab olema korrektne kuueteistkümnendsüsteemis värvikood.",
    "image" => "Väli :attribute peab olema pilt.",
    "in" => "Valitud element :attribute on vigane.",
    "in_array" => "Välja :attribute väärtust ei eksisteeri :other sees.",
    "integer" => "Väli :attribute peab olema täisarv.",
    "ip" => "Väli :attribute peab olema korrektne IP-aadress.",
    "ipv4" => "Väli :attribute peab olema korrektne IPv4-aadress.",
    "ipv6" => "Väli :attribute peab olema korrektne IPv6-aadress.",
    "json" => "Väli :attribute peab olema korrektne JSON-string.",
    "list" => "Väli :attribute peab olema loend.",
    "lowercase" => "Väli :attribute peab olema väiketähtedes.",
    "lt.array" => "Väljal :attribute peab olema vähem kui :value elementi.",
    "lt.file" => "Väli :attribute peab olema väiksem kui :value kilobaiti.",
    "lt.numeric" => "Väli :attribute peab olema väiksem kui :value.",
    "lt.string" => "Väli :attribute peab olema lühem kui :value märki.",
    "lte.array" => "Väljal :attribute ei tohi olla rohkem kui :value elementi.",
    "lte.file" => "Väli :attribute peab olema väiksem või võrdne :value kilobaidiga.",
    "lte.numeric" => "Väli :attribute peab olema väiksem või võrdne :value-ga.",
    "lte.string" => "Väli :attribute peab olema lühem või võrdne :value märgiga.",
    "mac_address" => "Väli :attribute peab olema korrektne MAC-aadress.",
    "max.array" => "Väli :attribute ei tohi sisaldada rohkem kui :max elementi.",
    "max.file" => "Väli :attribute ei tohi olla suurem kui :max kilobaiti.",
    "max.numeric" => "Väli :attribute ei tohi olla suurem kui :max.",
    "max.string" => "Väli :attribute ei tohi olla pikem kui :max märki.",
    "max_digits" => "Väljal :attribute ei tohi olla rohkem kui :max numbrit.",
    "mimes" => "Väli :attribute peab olema :values tüüpi fail.",
    "mimetypes" => "Väli :attribute peab olema :values tüüpi fail.",
    "min.array" => "Väljal :attribute peab olema vähemalt :min elementi.",
    "min.file" => "Väli :attribute peab olema vähemalt :min kilobaiti.",
    "min.numeric" => "Väli :attribute peab olema vähemalt :min.",
    "min.string" => "Väljal :attribute peab olema vähemalt :min märki.",
    "min_digits" => "Väljal :attribute peab olema vähemalt :min numbrit.",
    "missing" => "Väli :attribute peab puuduma.",
    "missing_if" => "Väli :attribute peab puuduma, kui :other on :value.",
    "missing_unless" => "Väli :attribute peab puuduma, välja arvatud juhul, kui :other on :value.",
    "missing_with" => "Väli :attribute peab puuduma, kui :values on olemas.",
    "missing_with_all" => "Väli :attribute peab puuduma, kui :values on olemas.",
    "multiple_of" => "Väli :attribute peab olema väärtuse :value kordne.",
    "next" => "Järgmine &raquo;",
    "not_in" => "Valitud :attribute on vigane.",
    "not_regex" => "Välja :attribute vorming on vigane.",
    "numeric" => "Väli :attribute peab olema number.",
    "password" => "Parool on vale.",
    "password.letters" => "Väli :attribute peab sisaldama vähemalt ühte tähte.",
    "password.mixed" => "Väli :attribute peab sisaldama vähemalt ühte suur- ja ühte väiketähte.",
    "password.numbers" => "Väli :attribute peab sisaldama vähemalt ühte numbrit.",
    "password.symbols" => "Väli :attribute peab sisaldama vähemalt ühte sümbolit.",
    "password.uncompromised" => "Esitatud :attribute on lekkinud andmebaasidesse. Palun vali muu :attribute.",
    "present" => "Väli :attribute peab olema esitatud.",
    "present_if" => "Väli :attribute peab olema esitatud, kui :other on :value.",
    "present_unless" => "Väli :attribute peab olema esitatud, välja arvatud juhul, kui :other on :value.",
    "present_with" => "Väli :attribute peab olema esitatud, kui :values on esitatud.",
    "present_with_all" => "Väli :attribute peab olema esitatud, kui :values on esitatud.",
    "previous" => "&laquo; Eelmine",
    "prohibited" => "Väli :attribute on keelatud.",
    "prohibited_if" => "Väli :attribute on keelatud, kui :other on :value.",
    "prohibited_unless" => "Väli :attribute on keelatud, välja arvatud juhul, kui :other on väärtuste :values sees.",
    "prohibits" => "Väli :attribute keelab välja :other esinemise.",
    "regex" => "Välja :attribute vorming on vigane.",
    "relatable" => "Seda välja :attribute ei saa seostada selle ressursiga.",
    "required" => "Väli :attribute on kohustuslik.",
    "required_array_keys" => "Väli :attribute peab sisaldama väärtusi: :values.",
    "required_if" => "Väli :attribute on kohustuslik, kui :other on :value.",
    "required_if_accepted" => "See väli on kohustuslik, kui :other on aktsepteeritud.",
    "required_if_declined" => "Väli :attribute on kohustuslik, kui :other on tagasi lükatud.",
    "required_unless" => "Väli :attribute on kohustuslik, välja arvatud juhul, kui :other on väärtuste :values sees.",
    "required_with" => "Väli :attribute on kohustuslik, kui väärtus :values on olemas.",
    "required_with_all" => "Väli :attribute on kohustuslik, kui kõik väärtused :values on olemas.",
    "required_without" => "Väli :attribute on kohustuslik, kui väärtust :values ei ole olemas.",
    "required_without_all" => "Väli :attribute on kohustuslik, kui ühtegi väärtustest :values ei ole olemas.",
    "reset" => "Parool on lähtestatud!",
    "same" => "Väljad :attribute ja :other peavad klappima.",
    "sent" => "Parooli meeldetuletus on saadetud!",
    "size.array" => "Väli :attribute peab sisaldama :size elementi.",
    "size.file" => "Väli :attribute peab olema :size kilobaiti.",
    "size.numeric" => "Välja :attribute suurus peab olema :size.",
    "size.string" => "Väli :attribute peab sisaldama :size märki.",
    "starts_with" => "Väli :attribute peab algama ühega järgmistest väärtustest: :values.",
    "string" => "Väli :attribute peab olema string.",
    "throttle" => "Liiga palju sisselogimiskatseid. Palun proovi uuesti :seconds sekundi pärast.",
    "throttled" => "Palun oota enne uut katset.",
    "timezone" => "Väli :attribute peab olema kehtiv ajavöönd.",
    "token" => "Parooli lähtestamise tunnus on vigane.",
    "ulid" => "Väli :attribute peab olema kehtiv ULID.",
    "unique" => "See :attribute on juba võetud.",
    "uploaded" => "Faili :attribute üleslaadimine ebaõnnestus.",
    "uppercase" => "Väli :attribute peab olema suurtähtedes.",
    "url" => "Välja :attribute vorming on vigane.",
    "user" => "Selle e-posti aadressiga kasutajat ei leitud.",
    "uuid" => "Väli :attribute peab olema kehtiv UUID.",

    'total_upload_size_too_high' => 'Maksimaalne lubatud kogusuurus on :max',
    'total_upload_size_too_low' => 'Minimaalne lubatud kogusuurus on :min',

    'file_too_big' => 'See fail on liiga suur. Maksimaalne lubatud suurus on :max',
    'file_too_small' => 'See fail on liiga väike. See peaks olema vähemalt :min',

    'incorrect_dimensions' => [
        'width' => 'Pildi laius peab olema :width pikslit',
        'height' => 'Pildi kõrgus peab olema :height pikslit',
        'both' => 'Pildi mõõtmed peavad olema :width x :height pikslit',
    ],

    'width_not_between' => 'Pildi laius peab olema vahemikus :min kuni :max pikslit',
    'height_not_between' => 'Pildi kõrgus peab olema vahemikus :min kuni :max pikslit',

    'max_items' => 'Saad üles laadida maksimaalselt :max elemendi|Saad üles laadida maksimaalselt :max elementi',
    'min_items' => 'Sa pead üles laadima vähemalt :min elemendi|Sa pead üles laadima vähemalt :min elementi',

    'extension' => 'Faili tüüp peab olema :extensions',
    'mime' => 'Faili MIME-tüüp peab olema :mimes',
    'type' => 'Sa pead üles laadima faili tüübiga :values',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Siin saad määrata kohandatud valideerimisteated atribuutidele, kasutades
    | konventsiooni "attribute.rule". See võimaldab kiiresti määrata
    | konkreetse keeleraja antud atribuudi reegli jaoks.
    |
    */

    'custom' => [
        'sections.*.fields.title' => [
            'required' => 'Sektsiooni pealkiri on kohustuslik',
            'max' => 'Sektsiooni pealkiri tohib olla maksimaalselt 100 märki',
            'distinct' => 'Sektsiooni pealkiri on juba olemas',
        ],
        'sections.*.fields.description' => [
            'required' => 'Sektsiooni sisu on kohustuslik',
            'max' => 'Sektsiooni pealkiri tohib olla maksimaalselt 2000 märki',
        ],
        'experiences.*.employer' => [
            'max' => 'Tööandja nimi tohib olla maksimaalselt 100 märki',
        ],
        'experiences.*.city' => [
            'max' => 'Linna nimi tohib olla maksimaalselt 100 märki',
        ],
        'educations.*.school' => [
            'max' => 'Kooli nimi tohib olla maksimaalselt 100 märki',
        ],
        'educations.*.city' => [
            'max' => 'Linna nimi tohib olla maksimaalselt 100 märki',
        ],
        'educations.*.specialization' => [
            'max' => 'Eriala nimi tohib olla maksimaalselt 100 märki',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | Järgmisi ridu kasutatakse atribuudi asendamiseks loetavama nimega,
    | näiteks "email" asemel "E-posti aadress". See aitab sõnumeid
    | selgemaks muuta.
    |
    */

    'attributes' => [
        'email'    => 'e-posti aadress',
        'password' => 'parool',
        'name'     => 'nimi',
        'message'  => 'sõnum',
        'agree'    => 'nõusolek',
        'captcha'  => 'kood',
        'subject'  => 'teema',
    ],

];
