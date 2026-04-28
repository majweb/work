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

    "accepted"=>":attribute polje mora biti prihvaćeno.",
    "accepted_if"=>":attribute polje mora biti prihvaćeno kada :other ima vrednost :value.",
    "active_url"=>":attribute polje nije validan URL.",
    "after"=>":attribute polje mora biti datum nakon :date.",
    "after_or_equal"=>":attribute polje mora biti datum koji nije pre :date.",
    "alpha"=>":attribute polje može sadržati samo slova.",
    "alpha_dash"=>":attribute polje može sadržati samo slova, brojeve i crtice.",
    "alpha_num"=>":attribute polje može sadržati samo slova i brojeve.",
    "array"=>":attribute polje mora biti niz.",
    "ascii"=>":attribute polje može sadržati samo jednobajtne alfanumeričke znake i simbole.",
    "attached"=>":attribute polje je već prikačeno.",
    "before"=>":attribute polje mora biti datum pre :date.",
    "before_or_equal"=>":attribute polje mora biti datum koji nije posle :date.",
    "between.array"=>":attribute polje mora imati između :min i :max elemenata.",
    "between.file"=>":attribute polje mora biti između :min i :max kilobajta.",
    "between.numeric"=>":attribute polje mora biti između :min i :max.",
    "between.string"=>":attribute polje mora imati između :min i :max znakova.",
    "boolean"=>":attribute polje mora biti tačno ili netačno.",
    "can"=>":attribute polje sadrži neovlašćenu vrednost.",
    "confirmed"=>":attribute polje se ne poklapa sa potvrdom.",
    "contains"=>":attribute polje ne sadrži traženi element.",
    "current_password"=>"Lozinka je netačna.",
    "date"=>":attribute polje nije validan datum.",
    "date_equals"=>":attribute polje mora biti datum jednak :date.",
    "date_format"=>":attribute polje ne odgovara formatu :format.",
    "decimal"=>":attribute polje mora imati :decimal decimalnih mesta.",
    "declined"=>":attribute polje mora biti odbijeno.",
    "declined_if"=>":attribute polje mora biti odbijeno kada :other ima vrednost :value.",
    "different"=>":attribute i :other moraju biti različiti.",
    "digits"=>":attribute polje mora imati :digits cifara.",
    "digits_between"=>":attribute polje mora imati između :min i :max cifara.",
    "dimensions"=>":attribute polje ima neispravne dimenzije slike.",
    "distinct"=>":attribute polje ima duplikate vrednosti.",
    "doesnt_end_with"=>":attribute polje ne sme da se završava sa jednom od sledećih vrednosti: :values.",
    "doesnt_start_with"=> ":attribute polje ne sme da počinje sa jednom od sledećih vrednosti: :values.",
    "email"=> ":attribute polje mora biti validna e-mail adresa.",
    "ends_with"=>":attribute polje mora da se završava sa jednom od sledećih vrednosti: :values.",
    "enum"=> ":attribute polje ima neispravnu vrednost.",
    "exists"=> "Izabrano :attribute polje je neispravno.",
    "extensions"=> ":attribute polje mora imati jedan od sledećih ekstenzija: :values.",
    "failed"=>"Pogrešno korisničko ime ili lozinka.",
    "file"=>":attribute polje mora biti fajl.",
    "filled"=>":attribute polje mora biti popunjeno.",
    "gt.array"=>":attribute polje mora imati više od :value elemenata.",
    "gt.file"=>":attribute polje mora biti veće od :value kilobajta.",
    "gt.numeric"=>":attribute polje mora biti veće od :value.",
    "gt.string"=>":attribute polje mora biti duže od :value znakova.",
    "gte.array"=>":attribute polje mora imati :value ili više elemenata.",
    "gte.file"=>":attribute polje mora biti veće ili jednako :value kilobajta.",
    "gte.numeric"=>":attribute polje mora biti veće ili jednako :value.",
    "gte.string"=>":attribute polje mora biti duže ili jednako :value znakova.",
    "hex_color"=>":attribute polje mora biti validna heksadecimalna boja.",
    "image"=>":attribute polje mora biti slika.",
    "in"=>"Izabrano :attribute polje je neispravno.",
    "in_array"=>":attribute polje ne postoji u :other.",
    "integer"=>":attribute polje mora biti ceo broj.",
    "ip"=>":attribute polje mora biti validna IP adresa.",
    "ipv4"=>":attribute polje mora biti validna IPv4 adresa.",
    "ipv6"=>":attribute polje mora biti validna IPv6 adresa.",
    "json"=>":attribute polje mora biti validan JSON string.",
    "list"=>":attribute polje mora biti lista.",
    "lowercase"=>":Attribute mora biti napisan malim slovima.",
    "lt.array"=>":attribute polje mora imati manje od :value elemenata.",
    "lt.file"=>":attribute polje mora biti manje od :value kilobajta.",
    "lt.numeric"=>":attribute polje mora biti manje od :value.",
    "lt.string"=>":attribute polje mora biti kraće od :value znakova.",
    "lte.array"=>":attribute polje mora imati :value ili manje elemenata.",
    "lte.file"=>":attribute polje mora biti manje ili jednako :value kilobajta.",
    "lte.numeric"=>":attribute polje mora biti manje ili jednako :value.",
    "lte.string"=>":attribute polje mora biti kraće ili jednako :value znakova.",
    "mac_address"=>":attribute polje mora biti validna MAC adresa.",
    "max.array"=>":attribute polje ne sme imati više od :max elemenata.",
    "max.file"=>":attribute polje ne sme biti veće od :max kilobajta.",
    "max.numeric"=>":attribute polje ne sme biti veće od :max.",
    "max.string"=>":attribute polje ne sme biti duže od :max znakova.",
    "max_digits"=>":attribute polje ne sme imati više od :max cifara.",
    "mimes"=>":attribute polje mora biti fajl tipa :values.",
    "mimetypes"=>":attribute polje mora biti fajl tipa :values.",
    "min.array"=>":attribute polje mora imati najmanje :min elemenata.",
    "min.file"=>":attribute polje mora biti najmanje :min kilobajta.",
    "min.numeric"=>":attribute polje ne sme biti manje od :min.",
    "min.string"=>":attribute polje mora imati najmanje :min znakova.",
    "min_digits"=>":attribute polje mora imati najmanje :min cifara.",
    "missing"=>":attribute polje mora nedostajati.",
    "missing_if"=>"Ako je :other :value, :attribute polje mora nedostajati.",
    "missing_unless"=>":attribute polje mora nedostajati, osim ako :other nije :value.",
    "missing_with"=>"Ako je prisutna vrednost :values, :attribute polje mora nedostajati.",
    "missing_with_all"=>"Ako je prisutno :values, :attribute polje mora nedostajati.",
    "multiple_of"=>":attribute polje mora biti višekratnik :value.",
    "next"=>"Sledeća &raquo;",
    "not_in"=>"Izabrani :attribute je neispravan.",
    "not_regex"=>"Format :attribute polja je neispravan.",
    "numeric"=>":attribute polje mora biti broj.",
    "password"=>"Lozinka je netačna.",
    "password.letters"=>":attribute polje mora sadržati najmanje jedno slovo.",
    "password.mixed"=>":attribute polje mora sadržati najmanje jedno veliko i jedno malo slovo.",
    "password.numbers"=>":attribute polje mora sadržati najmanje jedan broj.",
    "password.symbols"=>":attribute polje mora sadržati najmanje jedan simbol.",
    "password.uncompromised"=>"Dati :attribute se pojavio u curenju podataka. Izaberite drugu vrednost za :attribute.",
    "present"=>":attribute polje mora biti prisutno.",
    "present_if"=>":attribute polje mora biti prisutno ako :other ima vrednost :value.",
    "present_unless"=>":attribute polje mora biti prisutno, osim ako :other ima vrednost :value.",
    "present_with"=>":attribute polje mora biti prisutno kada je :values navedeno.",
    "present_with_all"=>":attribute polje mora biti prisutno kada su :values navedeni.",
    "previous"=>"&laquo; Prethodna",
    "prohibited"=>":attribute polje je zabranjeno.",
    "prohibited_if"=>":attribute polje je zabranjeno kada je :other :value.",
    "prohibited_unless"=>":attribute polje je zabranjeno, osim ako :other nije u :values.",
    "prohibits"=>":attribute polje isključuje prisustvo :other.",
    "regex"=>"Format :attribute polja je neispravan.",
    "relatable"=>":attribute polje ne može biti povezano sa ovim resursom.",
    "required"=>":attribute polje je obavezno.",
    "required_array_keys"=>":attribute polje mora sadržati vrednosti: :values.",
    "required_if"=>":attribute polje je obavezno kada :other ima vrednost :value.",
    "required_if_accepted"=>"Ovo polje je obavezno kada je :other prihvaćeno.",
    "required_if_declined"=>":attribute polje je obavezno kada je :other odbijeno.",
    "required_unless"=>":attribute polje je obavezno, osim ako :other nije u :values.",
    "required_with"=>":attribute polje je obavezno kada je vrednost :values prisutna.",
    "required_with_all"=>":attribute polje je obavezno kada su sve vrednosti :values prisutne.",
    "required_without"=>":attribute polje je obavezno kada vrednost :values nije prisutna.",
    "required_without_all"=>":attribute polje je obavezno kada nijedna od vrednosti :values nije prisutna.",
    "reset"=>"Vaša lozinka je resetovana!",
    "same"=>":attribute i :other moraju biti isti.",
    "sent"=>"Podsetnik za lozinku je poslat!",
    "size.array"=>":attribute polje mora sadržati :size elemenata.",
    "size.file"=>":attribute polje mora imati :size kilobajta.",
    "size.numeric"=>":attribute polje mora biti :size.",
    "size.string"=>":attribute polje mora imati :size znakova.",
    "starts_with"=>":attribute polje mora početi sa jednom od sledećih vrednosti: :values.",
    "string"=>":attribute polje mora biti string.",
    "throttle"=>"Previše neuspešnih pokušaja prijave. Pokušajte ponovo za :seconds sekundi.",
    "throttled"=>"Sačekajte pre nego što pokušate ponovo.",
    "timezone"=>":attribute polje mora biti validna vremenska zona.",
    "token"=>"Token za resetovanje lozinke nije važeći.",
    "ulid"=>":attribute polje mora biti validan ULID identifikator.",
    "unique"=>":attribute već postoji.",
    "uploaded"=>"Otpremanje fajla :attribute nije uspelo.",
    "uppercase"=>":Attribute mora biti napisan velikim slovima.",
    "url"=>"Format :attribute polja je neispravan.",
    "user"=>"Nije pronađen korisnik sa tom e-mail adresom.",
    "uuid"=>":attribute polje mora biti validan UUID identifikator.",

    'total_upload_size_too_high' => 'Maksimalna dozvoljena ukupna veličina je :max',
    'total_upload_size_too_low' => 'Minimalna dozvoljena ukupna veličina je :min',

    'file_too_big' => 'Ovaj fajl je prevelik. Maksimalna dozvoljena veličina je :max',
    'file_too_small' => 'Ovaj fajl je premali. Treba da bude najmanje :min',

    'incorrect_dimensions' => [
        'width' => 'Širina slike mora biti :width piksela',
        'height' => 'Visina slike mora biti :height piksela',
        'both' => 'Dimenzije slike moraju biti :width x :height piksela',
    ],

    'width_not_between' => 'Širina slike mora biti između :min i :max piksela',
    'height_not_between' => 'Visina slike mora biti između :min i :max piksela',

    'max_items' => 'Možete otpremiti najviše :max stavku|Možete otpremiti najviše :max stavki',
    'min_items' => 'Morate otpremiti najmanje :min stavku|Morate otpremiti najmanje :min stavki',

    'extension' => 'Fajl mora biti tipa :extensions',
    'mime' => 'Fajl mora imati MIME tip :mimes',
    'type' => 'Morate otpremiti fajl tipa :values',

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
            'max' => 'Naslov sekcije može imati najviše 100 znakova',
            'distinct' => 'Naslov sekcije već postoji',
        ],
        'sections.*.fields.description' => [
            'required' => 'Sadržaj sekcije je obavezan',
            'max' => 'Sadržaj sekcije može imati najviše 2000 znakova',
        ],
        'experiences.*.employer' => [
            'max' => 'Naziv poslodavca može imati najviše 100 znakova',
        ],
        'experiences.*.city' => [
            'max' => 'Naziv grada može imati najviše 100 znakova',
        ],
        'educations.*.school' => [
            'max' => 'Naziv škole može imati najviše 100 znakova',
        ],
        'educations.*.city' => [
            'max' => 'Naziv grada može imati najviše 100 znakova',
        ],
        'educations.*.specialization' => [
            'max' => 'Naziv specijalizacije može imati najviše 100 znakova',
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
        'message'     => 'poruka',
        'agree'     => 'saglasnost',
        'captcha'     => 'kod',
        'subject'     => 'tema',
    ],

];
