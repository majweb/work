<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Sljedeći jezični redci sadrže zadane poruke o pogreškama koje koristi
    | klasa validatora. Neka od ovih pravila imaju više verzija,
    | poput pravila o veličini. Slobodno prilagodite svaku od ovih poruka ovdje.
    |
    */

    "accepted" => "Polje :attribute mora biti prihvaćeno.",
    "accepted_if" => "Polje :attribute mora biti prihvaćeno kada :other ima vrijednost :value.",
    "active_url" => "Polje :attribute nije ispravan URL.",
    "after" => "Polje :attribute mora biti datum nakon :date.",
    "after_or_equal" => "Polje :attribute mora biti datum ne raniji od :date.",
    "alpha" => "Polje :attribute može sadržavati samo slova.",
    "alpha_dash" => "Polje :attribute može sadržavati samo slova, brojeve, crtice i podvlake.",
    "alpha_num" => "Polje :attribute može sadržavati samo slova i brojeve.",
    "array" => "Polje :attribute mora biti niz.",
    "ascii" => "Polje :attribute smije sadržavati samo jednobajtne alfanumeričke znakove i simbole.",
    "attached" => "Polje :attribute je već priloženo.",
    "before" => "Polje :attribute mora biti datum prije :date.",
    "before_or_equal" => "Polje :attribute mora biti datum ne kasniji od :date.",
    "between.array" => "Polje :attribute mora imati između :min - :max elemenata.",
    "between.file" => "Polje :attribute mora biti unutar granica :min - :max kilobajta.",
    "between.numeric" => "Polje :attribute mora biti unutar granica :min - :max.",
    "between.string" => "Polje :attribute mora imati između :min - :max znakova.",
    "boolean" => "Polje :attribute mora imati logičku vrijednost istina ili laž.",
    "can" => "Polje :attribute sadrži neovlaštenu vrijednost.",
    "confirmed" => "Potvrda polja :attribute se ne podudara.",
    "contains" => "Polju :attribute nedostaje tražena stavka.",
    "current_password" => "Lozinka je neispravna.",
    "date" => "Polje :attribute nije ispravan datum.",
    "date_equals" => "Polje :attribute mora biti datum jednak :date.",
    "date_format" => "Polje :attribute nije u formatu :format.",
    "decimal" => "Polje :attribute mora imati :decimal decimalnih mjesta.",
    "declined" => "Polje :attribute mora biti odbijeno.",
    "declined_if" => "Polje :attribute mora biti odbijeno kada :other ima vrijednost :value.",
    "different" => "Polja :attribute i :other moraju se razlikovati.",
    "digits" => "Polje :attribute mora imati :digits znamenki.",
    "digits_between" => "Polje :attribute mora imati između :min i :max znamenki.",
    "dimensions" => "Polje :attribute ima neispravne dimenzije.",
    "distinct" => "Polje :attribute ima duplicirane vrijednosti.",
    "doesnt_end_with" => "Polje :attribute ne smije završavati jednom od sljedećih vrijednosti: :values.",
    "doesnt_start_with" => "Polje :attribute ne smije počinjati jednom od sljedećih vrijednosti: :values.",
    "email" => "Polje :attribute nije ispravna e-mail adresa.",
    "ends_with" => "Polje :attribute mora završavati jednom od sljedećih vrijednosti: :values.",
    "enum" => "Odabrana vrijednost za :attribute je neispravna.",
    "exists" => "Odabrano polje :attribute je neispravno.",
    "extensions" => "Polje :attribute mora imati jednu od sljedećih ekstenzija: :values.",
    "failed" => "Pogrešna prijava ili lozinka.",
    "file" => "Polje :attribute mora biti datoteka.",
    "filled" => "Polje :attribute mora biti popunjeno.",
    "gt.array" => "Polje :attribute mora imati više od :value elemenata.",
    "gt.file" => "Polje :attribute mora biti veće od :value kilobajta.",
    "gt.numeric" => "Polje :attribute mora biti veće od :value.",
    "gt.string" => "Polje :attribute mora biti duže od :value znakova.",
    "gte.array" => "Polje :attribute mora imati :value ili više elemenata.",
    "gte.file" => "Polje :attribute mora biti veće ili jednako :value kilobajta.",
    "gte.numeric" => "Polje :attribute mora biti veće ili jednako :value.",
    "gte.string" => "Polje :attribute mora biti duže ili jednako :value znakova.",
    "hex_color" => "Polje :attribute mora sadržavati ispravnu boju u heksadecimalnom formatu.",
    "image" => "Polje :attribute mora biti slika.",
    "in" => "Odabrani element :attribute je neispravan.",
    "in_array" => "Polje :attribute ne postoji u :other.",
    "integer" => "Polje :attribute mora biti cijeli broj.",
    "ip" => "Polje :attribute mora biti ispravna IP adresa.",
    "ipv4" => "Polje :attribute mora biti ispravna IPv4 adresa.",
    "ipv6" => "Polje :attribute mora biti ispravna IPv6 adresa.",
    "json" => "Polje :attribute mora biti ispravan JSON niz.",
    "list" => "Polje :attribute mora biti lista.",
    "lowercase" => "Polje :attribute mora biti napisano malim slovima.",
    "lt.array" => "Polje :attribute mora imati manje od :value elemenata.",
    "lt.file" => "Polje :attribute mora biti manje od :value kilobajta.",
    "lt.numeric" => "Polje :attribute mora biti manje od :value.",
    "lt.string" => "Polje :attribute mora biti kraće od :value znakova.",
    "lte.array" => "Polje :attribute mora imati :value ili manje elemenata.",
    "lte.file" => "Polje :attribute mora biti manje ili jednako :value kilobajta.",
    "lte.numeric" => "Polje :attribute mora biti manje ili jednako :value.",
    "lte.string" => "Polje :attribute mora biti kraće ili jednako :value znakova.",
    "mac_address" => "Polje :attribute mora biti ispravna MAC adresa.",
    "max.array" => "Polje :attribute ne smije imati više od :max elemenata.",
    "max.file" => "Polje :attribute ne smije biti veće od :max kilobajta.",
    "max.numeric" => "Polje :attribute ne smije biti veće od :max.",
    "max.string" => "Polje :attribute ne smije biti duže od :max znakova.",
    "max_digits" => "Polje :attribute ne smije imati više od :max znamenki.",
    "mimes" => "Polje :attribute mora biti datoteka tipa: :values.",
    "mimetypes" => "Polje :attribute mora biti datoteka tipa: :values.",
    "min.array" => "Polje :attribute mora imati barem :min elemenata.",
    "min.file" => "Polje :attribute mora imati barem :min kilobajta.",
    "min.numeric" => "Polje :attribute ne smije biti manje od :min.",
    "min.string" => "Polje :attribute mora imati barem :min znakova.",
    "min_digits" => "Polje :attribute mora imati barem :min znamenki.",
    "missing" => "Polje :attribute mora nedostajati.",
    "missing_if" => "Ako :other ima vrijednost :value, polje :attribute mora nedostajati.",
    "missing_unless" => "Polje :attribute mora nedostajati, osim ako :other ima vrijednost :value.",
    "missing_with" => "Ako postoji vrijednost :values, polje :attribute mora nedostajati.",
    "missing_with_all" => "Ako postoji :values, polje :attribute mora nedostajati.",
    "multiple_of" => "Polje :attribute mora biti višekratnik vrijednosti :value.",
    "next" => "Sljedeća &raquo;",
    "not_in" => "Odabrani :attribute je neispravan.",
    "not_regex" => "Format polja :attribute je neispravan.",
    "numeric" => "Polje :attribute mora biti broj.",
    "password" => "Lozinka je neispravna.",
    "password.letters" => "Polje :attribute mora sadržavati barem jedno slovo.",
    "password.mixed" => "Polje :attribute mora sadržavati barem jedno veliko i jedno malo slovo.",
    "password.numbers" => "Polje :attribute mora sadržavati barem jedan broj.",
    "password.symbols" => "Polje :attribute mora sadržavati barem jedan simbol.",
    "password.uncompromised" => "Navedeni :attribute pojavio se u curenju podataka. Molimo odaberite drugu vrijednost za :attribute.",
    "present" => "Polje :attribute mora biti prisutno.",
    "present_if" => "Polje :attribute mora biti prisutno ako :other ima vrijednost :value.",
    "present_unless" => "Polje :attribute mora biti prisutno, osim ako :other ima vrijednost :value.",
    "present_with" => "Polje :attribute mora biti prisutno kada je navedeno :values.",
    "present_with_all" => "Polje :attribute mora biti prisutno kada su navedeni :values.",
    "previous" => "&laquo; Prethodna",
    "prohibited" => "Polje :attribute je zabranjeno.",
    "prohibited_if" => "Polje :attribute je zabranjeno kada :other ima vrijednost :value.",
    "prohibited_unless" => "Polje :attribute je zabranjeno, osim ako je :other među :values.",
    "prohibits" => "Polje :attribute isključuje prisutnost :other.",
    "regex" => "Format polja :attribute je neispravan.",
    "relatable" => "Polje :attribute ne može biti povezano s ovim resursom.",
    "required" => "Polje :attribute je obvezno.",
    "required_array_keys" => "Polje :attribute mora sadržavati vrijednosti: :values.",
    "required_if" => "Polje :attribute je obvezno kada :other ima vrijednost :value.",
    "required_if_accepted" => "Ovo polje je obvezno kada je :other prihvaćeno.",
    "required_if_declined" => "Polje :attribute je obvezno kada je :other odbijeno.",
    "required_unless" => "Polje :attribute je obvezno ako se :other ne nalazi u :values.",
    "required_with" => "Polje :attribute je obvezno kada je vrijednost :values prisutna.",
    "required_with_all" => "Polje :attribute je obvezno kada su sve vrijednosti :values prisutne.",
    "required_without" => "Polje :attribute je obvezno kada vrijednost :values nije prisutna.",
    "required_without_all" => "Polje :attribute je obvezno kada nijedna od vrijednosti :values nije prisutna.",
    "reset" => "Lozinka je ponovno postavljena!",
    "same" => "Polja :attribute i :other moraju biti ista.",
    "sent" => "Podsjetnik za lozinku je poslan!",
    "size.array" => "Polje :attribute mora sadržavati :size elemenata.",
    "size.file" => "Polje :attribute mora imati :size kilobajta.",
    "size.numeric" => "Polje :attribute mora imati veličinu :size.",
    "size.string" => "Polje :attribute mora imati :size znakova.",
    "starts_with" => "Polje :attribute mora počinjati jednom od sljedećih vrijednosti: :values.",
    "string" => "Polje :attribute mora biti tekstualni niz.",
    "throttle" => "Previše neuspjelih pokušaja prijave. Molimo pokušajte ponovno za :seconds sekundi.",
    "throttled" => "Molimo pričekajte prije ponovnog pokušaja.",
    "timezone" => "Polje :attribute mora biti ispravna vremenska zona.",
    "token" => "Token za ponovno postavljanje lozinke je neispravan.",
    "ulid" => "Polje :attribute mora biti ispravan ULID.",
    "unique" => "Ovaj :attribute već postoji.",
    "uploaded" => "Prijenos datoteke :attribute nije uspio.",
    "uppercase" => "Polje :attribute mora biti napisano velikim slovima.",
    "url" => "Format polja :attribute je neispravan.",
    "user" => "Korisnik s tom e-mail adresom nije pronađen.",
    "uuid" => "Polje :attribute mora biti ispravan UUID.",

    'total_upload_size_too_high' => 'Maksimalna dopuštena ukupna veličina je :max.',
    'total_upload_size_too_low' => 'Minimalna dopuštena ukupna veličina je :min.',

    'file_too_big' => 'Ova datoteka je prevelika. Maksimalna dopuštena veličina je :max.',
    'file_too_small' => 'Ova datoteka je premala. Mora biti barem :min.',

    'incorrect_dimensions' => [
        'width' => 'Širina slike mora biti :width piksela.',
        'height' => 'Visina slike mora biti :height piksela.',
        'both' => 'Dimenzije slike moraju biti :width x :height piksela.',
    ],

    'width_not_between' => 'Širina slike mora biti između :min i :max piksela.',
    'height_not_between' => 'Visina slike mora biti između :min i :max piksela.',

    'max_items' => 'Možete prenijeti najviše :max stavku|Možete prenijeti najviše :max stavke|Možete prenijeti najviše :max stavki',
    'min_items' => 'Morate prenijeti barem :min stavku|Morate prenijeti barem :min stavke|Morate prenijeti barem :min stavki',

    'extension' => 'Datoteka mora biti tipa :extensions.',
    'mime' => 'Datoteka mora imati mime tip :mimes.',
    'type' => 'Morate prenijeti datoteku tipa :values.',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Ovdje možete odrediti prilagođene poruke validacije za atribute koristeći
    | konvenciju "attribute.rule" za imenovanje redaka. To omogućuje brzo
    | određivanje specifičnog prilagođenog retka za određeno pravilo atributa.
    |
    */

    'custom' => [
        'sections.*.fields.title' => [
            'required' => 'Naslov sekcije je obvezan.',
            'max' => 'Naslov sekcije smije imati najviše 100 znakova.',
            'distinct' => 'Naslov sekcije već postoji.',
        ],
        'sections.*.fields.description' => [
            'required' => 'Sadržaj sekcije je obvezan.',
            'max' => 'Sadržaj sekcije smije imati najviše 2000 znakova.',
        ],
        'experiences.*.employer' => [
            'max' => 'Naziv poslodavca smije imati najviše 100 znakova.',
        ],
        'experiences.*.city' => [
            'max' => 'Naziv grada smije imati najviše 100 znakova.',
        ],
        'educations.*.school' => [
            'max' => 'Naziv škole smije imati najviše 100 znakova.',
        ],
        'educations.*.city' => [
            'max' => 'Naziv grada smije imati najviše 100 znakova.',
        ],
        'educations.*.specialization' => [
            'max' => 'Naziv specijalizacije smije imati najviše 100 znakova.',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | Sljedeći jezični redci koriste se za zamjenu našeg rezerviranog mjesta
    | atributa nečim čitljivijim, kao što je "E-Mail adresa" umjesto
    | "email". To nam jednostavno pomaže da naše poruke učinimo izražajnijima.
    |
    */

    'attributes' => [
        'email'    => 'e-mail adresa',
        'password' => 'lozinka',
        'name'     => 'naziv',
        'message'  => 'poruka',
        'agree'    => 'suglasnost',
        'captcha'  => 'kod',
        'subject'  => 'predmet',
    ],

];

