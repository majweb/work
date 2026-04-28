<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    "accepted" => "Polje :attribute mora biti prihvaćeno.",
    "accepted_if" => "Polje :attribute mora biti prihvaćeno kada :other ima vrijednost :value.",
    "active_url" => "Polje :attribute nije važeći URL.",
    "after" => "Polje :attribute mora biti datum nakon :date.",
    "after_or_equal" => "Polje :attribute mora biti datum koji nije raniji od :date.",
    "alpha" => "Polje :attribute može sadržavati samo slova.",
    "alpha_dash" => "Polje :attribute može sadržavati samo slova, brojeve, crtice i donje crtice.",
    "alpha_num" => "Polje :attribute može sadržavati samo slova i brojeve.",
    "array" => "Polje :attribute mora biti niz.",
    "ascii" => "Polje :attribute smije sadržavati samo jednobajtne alfanumeričke znakove i simbole.",
    "attached" => "Polje :attribute je već zakačeno.",
    "before" => "Polje :attribute mora biti datum prije :date.",
    "before_or_equal" => "Polje :attribute mora biti datum koji nije kasniji od :date.",
    "between.array" => "Polje :attribute mora imati između :min i :max stavki.",
    "between.file" => "Polje :attribute mora imati između :min i :max kilobajta.",
    "between.numeric" => "Polje :attribute mora imati vrijednost između :min i :max.",
    "between.string" => "Polje :attribute mora imati između :min i :max znakova.",
    "boolean" => "Polje :attribute mora biti tačno ili netačno.",
    "can" => "Polje :attribute sadrži neovlaštenu vrijednost.",
    "confirmed" => "Potvrda polja :attribute se ne podudara.",
    "contains" => "Polje :attribute ne sadrži potrebnu vrijednost.",
    "current_password" => "Lozinka je netačna.",
    "date" => "Polje :attribute nije važeći datum.",
    "date_equals" => "Polje :attribute mora biti datum jednak :date.",
    "date_format" => "Polje :attribute ne odgovara formatu :format.",
    "decimal" => "Polje :attribute mora imati :decimal decimalnih mjesta.",
    "declined" => "Polje :attribute mora biti odbijeno.",
    "declined_if" => "Polje :attribute mora biti odbijeno kada :other ima vrijednost :value.",
    "different" => "Polja :attribute i :other moraju se razlikovati.",
    "digits" => "Polje :attribute mora imati :digits cifara.",
    "digits_between" => "Polje :attribute mora imati između :min i :max cifara.",
    "dimensions" => "Polje :attribute ima neispravne dimenzije slike.",
    "distinct" => "Polje :attribute ima dupliranu vrijednost.",
    "doesnt_end_with" => "Polje :attribute ne smije završavati jednom od sljedećih vrijednosti: :values.",
    "doesnt_start_with" => "Polje :attribute ne smije počinjati jednom od sljedećih vrijednosti: :values.",
    "email" => "Polje :attribute mora biti važeća e-mail adresa.",
    "ends_with" => "Polje :attribute mora završavati jednom od sljedećih vrijednosti: :values.",
    "enum" => "Odabrana vrijednost polja :attribute nije ispravna.",
    "exists" => "Odabrano polje :attribute nije ispravno.",
    "extensions" => "Polje :attribute mora imati jednu od sljedećih ekstenzija: :values.",
    "failed" => "Pogrešan login ili lozinka.",
    "file" => "Polje :attribute mora biti datoteka.",
    "filled" => "Polje :attribute mora biti popunjeno.",
    "gt.array" => "Polje :attribute mora imati više od :value stavki.",
    "gt.file" => "Polje :attribute mora biti veće od :value kilobajta.",
    "gt.numeric" => "Polje :attribute mora biti veće od :value.",
    "gt.string" => "Polje :attribute mora biti duže od :value znakova.",
    "gte.array" => "Polje :attribute mora imati :value ili više stavki.",
    "gte.file" => "Polje :attribute mora biti veće ili jednako :value kilobajta.",
    "gte.numeric" => "Polje :attribute mora biti veće ili jednako :value.",
    "gte.string" => "Polje :attribute mora biti duže ili jednako :value znakova.",
    "hex_color" => "Polje :attribute mora biti važeća heksadecimalna boja.",
    "image" => "Polje :attribute mora biti slika.",
    "in" => "Odabrani element :attribute nije ispravan.",
    "in_array" => "Polje :attribute ne postoji u :other.",
    "integer" => "Polje :attribute mora biti cijeli broj.",
    "ip" => "Polje :attribute mora biti važeća IP adresa.",
    "ipv4" => "Polje :attribute mora biti važeća IPv4 adresa.",
    "ipv6" => "Polje :attribute mora biti važeća IPv6 adresa.",
    "json" => "Polje :attribute mora biti ispravan JSON string.",
    "list" => "Polje :attribute mora biti lista.",
    "lowercase" => "Polje :attribute mora biti napisano malim slovima.",
    "lt.array" => "Polje :attribute mora imati manje od :value stavki.",
    "lt.file" => "Polje :attribute mora biti manje od :value kilobajta.",
    "lt.numeric" => "Polje :attribute mora biti manje od :value.",
    "lt.string" => "Polje :attribute mora biti kraće od :value znakova.",
    "lte.array" => "Polje :attribute ne smije imati više od :value stavki.",
    "lte.file" => "Polje :attribute mora biti manje ili jednako :value kilobajta.",
    "lte.numeric" => "Polje :attribute mora biti manje ili jednako :value.",
    "lte.string" => "Polje :attribute mora biti kraće ili jednako :value znakova.",
    "mac_address" => "Polje :attribute mora biti važeća MAC adresa.",
    "max.array" => "Polje :attribute ne smije imati više od :max stavki.",
    "max.file" => "Polje :attribute ne smije biti veće od :max kilobajta.",
    "max.numeric" => "Polje :attribute ne smije biti veće od :max.",
    "max.string" => "Polje :attribute ne smije biti duže od :max znakova.",
    "max_digits" => "Polje :attribute ne smije imati više od :max cifara.",
    "mimes" => "Polje :attribute mora biti datoteka tipa: :values.",
    "mimetypes" => "Polje :attribute mora biti datoteka tipa: :values.",
    "min.array" => "Polje :attribute mora imati najmanje :min stavki.",
    "min.file" => "Polje :attribute mora imati najmanje :min kilobajta.",
    "min.numeric" => "Polje :attribute ne smije biti manje od :min.",
    "min.string" => "Polje :attribute mora imati najmanje :min znakova.",
    "min_digits" => "Polje :attribute mora imati najmanje :min cifara.",
    "missing" => "Polje :attribute mora nedostajati.",
    "missing_if" => "Polje :attribute mora nedostajati kada :other ima vrijednost :value.",
    "missing_unless" => "Polje :attribute mora nedostajati osim ako :other nije :value.",
    "missing_with" => "Polje :attribute mora nedostajati kada je prisutna vrijednost :values.",
    "missing_with_all" => "Polje :attribute mora nedostajati kada su prisutne vrijednosti :values.",
    "multiple_of" => "Polje :attribute mora biti djeljivo sa :value.",
    "next" => "Sljedeća &raquo;",
    "not_in" => "Odabrani :attribute nije ispravan.",
    "not_regex" => "Format polja :attribute nije ispravan.",
    "numeric" => "Polje :attribute mora biti broj.",
    "password" => "Lozinka je netačna.",
    "password.letters" => "Polje :attribute mora sadržavati najmanje jedno slovo.",
    "password.mixed" => "Polje :attribute mora sadržavati najmanje jedno veliko i jedno malo slovo.",
    "password.numbers" => "Polje :attribute mora sadržavati najmanje jedan broj.",
    "password.symbols" => "Polje :attribute mora sadržavati najmanje jedan simbol.",
    "password.uncompromised" => "Navedeni :attribute se pojavio u curenju podataka. Molimo odaberite drugu vrijednost za :attribute.",
    "present" => "Polje :attribute mora biti prisutno.",
    "present_if" => "Polje :attribute mora biti prisutno kada :other ima vrijednost :value.",
    "present_unless" => "Polje :attribute mora biti prisutno osim ako :other nema vrijednost :value.",
    "present_with" => "Polje :attribute mora biti prisutno kada je :values naveden/a.",
    "present_with_all" => "Polje :attribute mora biti prisutno kada su :values navedeni.",
    "previous" => "&laquo; Prethodna",
    "prohibited" => "Polje :attribute je zabranjeno.",
    "prohibited_if" => "Polje :attribute je zabranjeno kada je :other :value.",
    "prohibited_unless" => "Polje :attribute je zabranjeno osim ako :other nije u :values.",
    "prohibits" => "Polje :attribute zabranjuje prisustvo polja :other.",
    "regex" => "Format polja :attribute nije ispravan.",
    "relatable" => "Polje :attribute se ne može povezati sa ovim resursom.",
    "required" => "Polje :attribute je obavezno.",
    "required_array_keys" => "Polje :attribute mora sadržavati vrijednosti za: :values.",
    "required_if" => "Polje :attribute je obavezno kada :other ima vrijednost :value.",
    "required_if_accepted" => "Ovo polje je obavezno kada je :other prihvaćeno.",
    "required_if_declined" => "Polje :attribute je obavezno kada je :other odbijeno.",
    "required_unless" => "Polje :attribute je obavezno osim ako se :other ne nalazi u :values.",
    "required_with" => "Polje :attribute je obavezno kada je prisutna vrijednost :values.",
    "required_with_all" => "Polje :attribute je obavezno kada su prisutne sve vrijednosti :values.",
    "required_without" => "Polje :attribute je obavezno kada vrijednost :values nije prisutna.",
    "required_without_all" => "Polje :attribute je obavezno kada nijedna od vrijednosti :values nije prisutna.",
    "reset" => "Lozinka je resetovana!",
    "same" => "Polja :attribute i :other se moraju podudarati.",
    "sent" => "Podsjetnik za lozinku je poslan!",
    "size.array" => "Polje :attribute mora sadržavati :size stavki.",
    "size.file" => "Polje :attribute mora imati :size kilobajta.",
    "size.numeric" => "Polje :attribute mora biti :size.",
    "size.string" => "Polje :attribute mora imati :size znakova.",
    "starts_with" => "Polje :attribute mora početi jednom od sljedećih vrijednosti: :values.",
    "string" => "Polje :attribute mora biti string.",
    "throttle" => "Previše neuspješnih pokušaja prijave. Molimo pokušajte ponovo za :seconds sekundi.",
    "throttled" => "Molimo sačekajte prije ponovnog pokušaja.",
    "timezone" => "Polje :attribute mora biti važeća vremenska zona.",
    "token" => "Token za resetovanje lozinke nije ispravan.",
    "ulid" => "Polje :attribute mora biti važeći ULID identifikator.",
    "unique" => "Takav :attribute već postoji.",
    "uploaded" => "Prijenos datoteke :attribute nije uspio.",
    "uppercase" => "Polje :attribute mora biti napisano velikim slovima.",
    "url" => "Format polja :attribute nije ispravan.",
    "user" => "Korisnik sa tom e-mail adresom nije pronađen.",
    "uuid" => "Polje :attribute mora biti važeći UUID identifikator.",

    'total_upload_size_too_high' => 'Maksimalna dozvoljena ukupna veličina je :max',
    'total_upload_size_too_low' => 'Minimalna dozvoljena ukupna veličina je :min',

    'file_too_big' => 'Ova datoteka je prevelika. Maksimalna dozvoljena veličina je :max',
    'file_too_small' => 'Ova datoteka je premala. Mora biti najmanje :min',

    'incorrect_dimensions' => [
        'width' => 'Širina slike mora biti :width piksela',
        'height' => 'Visina slike mora biti :height piksela',
        'both' => 'Dimenzije slike moraju biti :width x :height piksela',
    ],

    'width_not_between' => 'Širina slike mora biti između :min i :max piksela',
    'height_not_between' => 'Visina slike mora biti između :min i :max piksela',

    'max_items' => 'Možete prenijeti najviše :max stavku|Možete prenijeti najviše :max stavke|Možete prenijeti najviše :max stavki',
    'min_items' => 'Morate prenijeti najmanje :min stavku|Morate prenijeti najmanje :min stavke|Morate prenijeti najmanje :min stavki',

    'extension' => 'Datoteka mora biti tipa :extensions',
    'mime' => 'Datoteka mora imati mime tip :mimes',
    'type' => 'Morate prenijeti datoteku tipa :values',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'sections.*.fields.title' => [
            'required' => 'Naslov sekcije je obavezan',
            'max' => 'Naslov sekcije može sadržavati maksimalno 100 znakova',
            'distinct' => 'Naslov sekcije već postoji',
        ],
        'sections.*.fields.description' => [
            'required' => 'Sadržaj sekcije je obavezan',
            'max' => 'Sadržaj sekcije može sadržavati maksimalno 2000 znakova',
        ],
        'experiences.*.employer' => [
            'max' => 'Naziv poslodavca može sadržavati maksimalno 100 znakova',
        ],
        'experiences.*.city' => [
            'max' => 'Naziv grada može sadržavati maksimalno 100 znakova',
        ],
        'educations.*.school' => [
            'max' => 'Naziv škole može sadržavati maksimalno 100 znakova',
        ],
        'educations.*.city' => [
            'max' => 'Naziv grada može sadržavati maksimalno 100 znakova',
        ],
        'educations.*.specialization' => [
            'max' => 'Naziv specijalizacije može sadržavati maksimalno 100 znakova',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap our attribute placeholder
    | with something more reader friendly such as "E-Mail Address" instead
    | of "email". This simply helps us make our message more expressive.
    |
    */

    'attributes' => [
        'email'    => 'e-mail adresa',
        'password' => 'lozinka',
        'name'     => 'naziv',
        'message'  => 'poruka',
        'agree'    => 'saglasnost',
        'captcha'  => 'kod',
        'subject'  => 'tema',
    ],

];
