<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Sljedeći jezički redovi sadrže zadane poruke o greškama koje koristi
    | klasa validatora. Neka od ovih pravila imaju više verzija,
    | poput pravila o veličini. Slobodno prilagodite svaku od ovih poruka ovdje.
    |
    */

    "accepted" => "Polje :attribute mora biti prihvaćeno.",
    "accepted_if" => "Polje :attribute mora biti prihvaćeno kada :other ima vrijednost :value.",
    "active_url" => "Polje :attribute nije ispravan URL.",
    "after" => "Polje :attribute mora biti datum nakon :date.",
    "after_or_equal" => "Polje :attribute mora biti datum ne raniji od :date.",
    "alpha" => "Polje :attribute može sadržati samo slova.",
    "alpha_dash" => "Polje :attribute može sadržati samo slova, brojeve, crtice i podvlačenja.",
    "alpha_num" => "Polje :attribute može sadržati samo slova i brojeve.",
    "array" => "Polje :attribute mora biti niz.",
    "ascii" => "Polje :attribute smije sadržati samo jednobajtne alfanumeričke znakove i simbole.",
    "attached" => "Polje :attribute je već priloženo.",
    "before" => "Polje :attribute mora biti datum prije :date.",
    "before_or_equal" => "Polje :attribute mora biti datum ne kasniji od :date.",
    "between.array" => "Polje :attribute mora imati između :min - :max elemenata.",
    "between.file" => "Polje :attribute mora biti između :min - :max kilobajta.",
    "between.numeric" => "Polje :attribute mora biti između :min - :max.",
    "between.string" => "Polje :attribute mora imati između :min - :max karaktera.",
    "boolean" => "Polje :attribute mora imati logičku vrijednost tačno ili netačno.",
    "can" => "Polje :attribute sadrži neovlašćenu vrijednost.",
    "confirmed" => "Potvrda polja :attribute se ne podudara.",
    "contains" => "Polju :attribute nedostaje tražena stavka.",
    "current_password" => "Lozinka je neispravna.",
    "date" => "Polje :attribute nije ispravan datum.",
    "date_equals" => "Polje :attribute mora biti datum jednak :date.",
    "date_format" => "Polje :attribute ne odgovara formatu :format.",
    "decimal" => "Polje :attribute mora imati :decimal decimalnih mjesta.",
    "declined" => "Polje :attribute mora biti odbijeno.",
    "declined_if" => "Polje :attribute mora biti odbijeno kada :other ima vrijednost :value.",
    "different" => "Polja :attribute i :other moraju se razlikovati.",
    "digits" => "Polje :attribute mora imati :digits cifara.",
    "digits_between" => "Polje :attribute mora imati između :min i :max cifara.",
    "dimensions" => "Polje :attribute ima neispravne dimenzije slike.",
    "distinct" => "Polje :attribute ima duplirane vrijednosti.",
    "doesnt_end_with" => "Polje :attribute ne smije završavati jednom od sljedećih vrijednosti: :values.",
    "doesnt_start_with" => "Polje :attribute ne smije počinjati jednom od sljedećih vrijednosti: :values.",
    "email" => "Polje :attribute mora biti ispravna e-mail adresa.",
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
    "gt.string" => "Polje :attribute mora biti duže od :value karaktera.",
    "gte.array" => "Polje :attribute mora imati :value ili više elemenata.",
    "gte.file" => "Polje :attribute mora biti veće ili jednako :value kilobajta.",
    "gte.numeric" => "Polje :attribute mora biti veće ili jednako :value.",
    "gte.string" => "Polje :attribute mora biti duže ili jednako :value karaktera.",
    "hex_color" => "Polje :attribute mora biti ispravna heksadecimalna boja.",
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
    "lt.string" => "Polje :attribute mora biti kraće od :value karaktera.",
    "lte.array" => "Polje :attribute ne smije imati više od :value elemenata.",
    "lte.file" => "Polje :attribute mora biti manje ili jednako :value kilobajta.",
    "lte.numeric" => "Polje :attribute mora biti manje ili jednako :value.",
    "lte.string" => "Polje :attribute mora biti kraće ili jednako :value karaktera.",
    "mac_address" => "Polje :attribute mora biti ispravna MAC adresa.",
    "max.array" => "Polje :attribute ne smije imati više od :max elemenata.",
    "max.file" => "Polje :attribute ne smije biti veće od :max kilobajta.",
    "max.numeric" => "Polje :attribute ne smije biti veće od :max.",
    "max.string" => "Polje :attribute ne smije biti duže od :max karaktera.",
    "max_digits" => "Polje :attribute ne smije imati više od :max cifara.",
    "mimes" => "Polje :attribute mora biti datoteka tipa: :values.",
    "mimetypes" => "Polje :attribute mora biti datoteka tipa: :values.",
    "min.array" => "Polje :attribute mora imati barem :min elemenata.",
    "min.file" => "Polje :attribute mora imati barem :min kilobajta.",
    "min.numeric" => "Polje :attribute ne smije biti manje od :min.",
    "min.string" => "Polje :attribute mora imati barem :min karaktera.",
    "min_digits" => "Polje :attribute mora imati barem :min cifara.",
    "missing" => "Polje :attribute mora nedostajati.",
    "missing_if" => "Polje :attribute mora nedostajati kada :other ima vrijednost :value.",
    "missing_unless" => "Polje :attribute mora nedostajati, osim ako :other ima vrijednost :value.",
    "missing_with" => "Polje :attribute mora nedostajati kada je vrijednost :values prisutna.",
    "missing_with_all" => "Polje :attribute mora nedostajati kada su vrijednosti :values prisutne.",
    "multiple_of" => "Polje :attribute mora biti djeljivo sa :value.",
    "next" => "Sljedeća &raquo;",
    "not_in" => "Odabrani :attribute je neispravan.",
    "not_regex" => "Format polja :attribute je neispravan.",
    "numeric" => "Polje :attribute mora biti broj.",
    "password" => "Lozinka je neispravna.",
    "password.letters" => "Polje :attribute mora sadržati barem jedno slovo.",
    "password.mixed" => "Polje :attribute mora sadržati barem jedno veliko i jedno malo slovo.",
    "password.numbers" => "Polje :attribute mora sadržati barem jedan broj.",
    "password.symbols" => "Polje :attribute mora sadržati barem jedan simbol.",
    "password.uncompromised" => "Navedeni :attribute se pojavio u curenju podataka. Molimo odaberite drugu vrijednost.",
    "present" => "Polje :attribute mora biti prisutno.",
    "present_if" => "Polje :attribute mora biti prisutno kada :other ima vrijednost :value.",
    "present_unless" => "Polje :attribute mora biti prisutno, osim ako :other ima vrijednost :value.",
    "present_with" => "Polje :attribute mora biti prisutno kada je navedeno :values.",
    "present_with_all" => "Polje :attribute mora biti prisutno kada su navedene vrijednosti :values.",
    "previous" => "&laquo; Prethodna",
    "prohibited" => "Polje :attribute je zabranjeno.",
    "prohibited_if" => "Polje :attribute je zabranjeno kada :other ima vrijednost :value.",
    "prohibited_unless" => "Polje :attribute je zabranjeno, osim ako je :other u :values.",
    "prohibits" => "Polje :attribute isključuje prisustvo :other.",
    "regex" => "Format polja :attribute je neispravan.",
    "relatable" => "Polje :attribute ne može biti povezano sa ovim resursom.",
    "required" => "Polje :attribute je obavezno.",
    "required_array_keys" => "Polje :attribute mora sadržati ključeve za: :values.",
    "required_if" => "Polje :attribute je obavezno kada :other ima vrijednost :value.",
    "required_if_accepted" => "Polje :attribute je obavezno kada je :other prihvaćeno.",
    "required_if_declined" => "Polje :attribute je obavezno kada je :other odbijeno.",
    "required_unless" => "Polje :attribute je obavezno, osim ako se :other nalazi u :values.",
    "required_with" => "Polje :attribute je obavezno kada je vrijednost :values prisutna.",
    "required_with_all" => "Polje :attribute je obavezno kada su sve vrijednosti :values prisutne.",
    "required_without" => "Polje :attribute je obavezno kada vrijednost :values nije prisutna.",
    "required_without_all" => "Polje :attribute je obavezno kada nijedna od vrijednosti :values nije prisutna.",
    "reset" => "Lozinka je resetovana!",
    "same" => "Polja :attribute i :other moraju se podudarati.",
    "sent" => "Link za resetovanje lozinke je poslat!",
    "size.array" => "Polje :attribute mora sadržati :size elemenata.",
    "size.file" => "Polje :attribute mora biti :size kilobajta.",
    "size.numeric" => "Polje :attribute mora imati veličinu :size.",
    "size.string" => "Polje :attribute mora imati :size karaktera.",
    "starts_with" => "Polje :attribute mora počinjati jednom od sljedećih vrijednosti: :values.",
    "string" => "Polje :attribute mora biti tekst.",
    "throttle" => "Previše neuspješnih pokušaja prijave. Molimo pokušajte ponovo za :seconds sekundi.",
    "throttled" => "Molimo sačekajte prije ponovnog pokušaja.",
    "timezone" => "Polje :attribute mora biti ispravna vremenska zona.",
    "token" => "Token za resetovanje lozinke je neispravan.",
    "ulid" => "Polje :attribute mora biti ispravan ULID.",
    "unique" => "Ova vrijednost za :attribute već postoji.",
    "uploaded" => "Greška pri slanju datoteke :attribute.",
    "uppercase" => "Polje :attribute mora biti napisano velikim slovima.",
    "url" => "Format polja :attribute je neispravan.",
    "user" => "Korisnik sa tom e-mail adresom nije pronađen.",
    "uuid" => "Polje :attribute mora biti ispravan UUID.",

    'total_upload_size_too_high' => 'Maksimalna dozvoljena ukupna veličina je :max.',
    'total_upload_size_too_low' => 'Minimalna dozvoljena ukupna veličina je :min.',

    'file_too_big' => 'Ova datoteka je prevelika. Maksimalna dozvoljena veličina je :max.',
    'file_too_small' => 'Ova datoteka je premala. Mora imati barem :min.',

    'incorrect_dimensions' => [
        'width' => 'Širina slike mora biti :width piksela.',
        'height' => 'Visina slike mora biti :height piksela.',
        'both' => 'Dimenzije slike moraju biti :width x :height piksela.',
    ],

    'width_not_between' => 'Širina slike mora biti između :min i :max piksela.',
    'height_not_between' => 'Visina slike mora biti između :min i :max piksela.',

    'max_items' => 'Možete poslati najviše :max stavku|Možete poslati najviše :max stavke|Možete poslati najviše :max stavki',
    'min_items' => 'Morate poslati barem :min stavku|Morate poslati barem :min stavke|Morate poslati barem :min stavki',

    'extension' => 'Datoteka mora biti tipa :extensions.',
    'mime' => 'Datoteka mora imati mime tip :mimes.',
    'type' => 'Morate poslati datoteku tipa :values.',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Ovdje možete unijeti prilagođene poruke za atribute koristeći konvenciju
    | "attribute.rule" za imenovanje redova. To omogućava brzo definisanje
    | specifične poruke za određeno pravilo.
    |
    */

    'custom' => [
        'sections.*.fields.title' => [
            'required' => 'Naslov sekcije je obavezan.',
            'max' => 'Naslov sekcije može imati najviše 100 karaktera.',
            'distinct' => 'Naslov sekcije već postoji.',
        ],
        'sections.*.fields.description' => [
            'required' => 'Sadržaj sekcije je obavezan.',
            'max' => 'Opis sekcije može imati najviše 2000 karaktera.',
        ],
        'experiences.*.employer' => [
            'max' => 'Naziv poslodavca može imati najviše 100 karaktera.',
        ],
        'experiences.*.city' => [
            'max' => 'Naziv grada može imati najviše 100 karaktera.',
        ],
        'educations.*.school' => [
            'max' => 'Naziv škole može imati najviše 100 karaktera.',
        ],
        'educations.*.city' => [
            'max' => 'Naziv grada može imati najviše 100 karaktera.',
        ],
        'educations.*.specialization' => [
            'max' => 'Naziv specijalizacije može imati najviše 100 karaktera.',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | Sljedeći jezički redovi se koriste za zamjenu našeg rezervisanog mjesta
    | za atribut nečim čitljivijim, kao što je "E-mail adresa".
    |
    */

    'attributes' => [
        'email'    => 'e-mail adresa',
        'password' => 'lozinka',
        'name'     => 'ime/naziv',
        'message'  => 'poruka',
        'agree'    => 'saglasnost',
        'captcha'  => 'kod',
        'subject'  => 'tema',
    ],

];
