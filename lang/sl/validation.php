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

    "accepted"=>":attribute polje mora biti sprejeto.",
    "accepted_if"=>":attribute polje mora biti sprejeto, ko :other ima vrednost :value.",
    "active_url"=>":attribute polje ni veljaven URL naslov.",
    "after"=>":attribute polje mora biti datum po :date.",
    "after_or_equal"=>":attribute polje mora biti datum, ki ni pred :date.",
    "alpha"=>":attribute polje lahko vsebuje samo črke.",
    "alpha_dash"=>":attribute polje lahko vsebuje samo črke, številke in pomišljaje.",
    "alpha_num"=>":attribute polje lahko vsebuje samo črke in številke.",
    "array"=>":attribute polje mora biti matrika.",
    "ascii"=>":attribute polje lahko vsebuje samo enobajtne alfanumerične znake in simbole.",
    "attached"=>":attribute polje je že priloženo.",
    "before"=>":attribute polje mora biti datum pred :date.",
    "before_or_equal"=>":attribute polje mora biti datum, ki ni za :date.",
    "between.array"=>":attribute polje mora imeti med :min in :max elementov.",
    "between.file"=>":attribute polje mora biti med :min in :max kilobajti.",
    "between.numeric"=>":attribute polje mora biti med :min in :max.",
    "between.string"=>":attribute polje mora imeti med :min in :max znakov.",
    "boolean"=>":attribute polje mora biti resnično ali neresnično.",
    "can"=>":attribute polje vsebuje nepooblaščeno vrednost.",
    "confirmed"=>":attribute polje se ne ujema s potrditvijo.",
    "contains"=>":attribute polje ne vsebuje zahtevanega elementa.",
    "current_password"=>"Geslo je napačno.",
    "date"=>":attribute polje ni veljaven datum.",
    "date_equals"=>":attribute polje mora biti datum enak :date.",
    "date_format"=>":attribute polje ni v formatu :format.",
    "decimal"=>":attribute polje mora imeti :decimal decimalnih mest.",
    "declined"=>":attribute polje mora biti zavrnjeno.",
    "declined_if"=>":attribute polje mora biti zavrnjeno, ko :other ima vrednost :value.",
    "different"=>":attribute in :other se morajo razlikovati.",
    "digits"=>":attribute polje mora imeti :digits številk.",
    "digits_between"=>":attribute polje mora imeti med :min in :max številk.",
    "dimensions"=>":attribute polje ima napačne dimenzije slike.",
    "distinct"=>":attribute polje ima podvojene vrednosti.",
    "doesnt_end_with"=>":attribute polje se ne sme končati z eno od naslednjih vrednosti: :values.",
    "doesnt_start_with"=> ":attribute polje se ne sme začeti z eno od naslednjih vrednosti: :values.",
    "email"=> ":attribute polje mora biti veljaven e-poštni naslov.",
    "ends_with"=>":attribute polje se mora končati z eno od naslednjih vrednosti: :values.",
    "enum"=> ":attribute polje ima napačno vrednost.",
    "exists"=> "Izbrano :attribute polje je neveljavno.",
    "extensions"=> ":attribute polje mora imeti eno od naslednjih končnic: :values.",
    "failed"=>"Napačno uporabniško ime ali geslo.",
    "file"=>":attribute polje mora biti datoteka.",
    "filled"=>":attribute polje mora biti izpolnjeno.",
    "gt.array"=>":attribute polje mora imeti več kot :value elementov.",
    "gt.file"=>":attribute polje mora biti večje od :value kilobajtov.",
    "gt.numeric"=>":attribute polje mora biti večje od :value.",
    "gt.string"=>":attribute polje mora biti daljše od :value znakov.",
    "gte.array"=>":attribute polje mora imeti :value ali več elementov.",
    "gte.file"=>":attribute polje mora biti večje ali enako :value kilobajtom.",
    "gte.numeric"=>":attribute polje mora biti večje ali enako :value.",
    "gte.string"=>":attribute polje mora biti daljše ali enako :value znakov.",
    "hex_color"=>":attribute polje mora biti veljavna šestnajstiška barva.",
    "image"=>":attribute polje mora biti slika.",
    "in"=>"Izbrano :attribute polje je neveljavno.",
    "in_array"=>":attribute polje ne obstaja v :other.",
    "integer"=>":attribute polje mora biti celo število.",
    "ip"=>":attribute polje mora biti veljaven IP naslov.",
    "ipv4"=>":attribute polje mora biti veljaven IPv4 naslov.",
    "ipv6"=>":attribute polje mora biti veljaven IPv6 naslov.",
    "json"=>":attribute polje mora biti veljaven JSON niz.",
    "list"=>":attribute polje mora biti seznam.",
    "lowercase"=>":Attribute mora biti napisan z malimi črkami.",
    "lt.array"=>":attribute polje mora imeti manj kot :value elementov.",
    "lt.file"=>":attribute polje mora biti manjše od :value kilobajtov.",
    "lt.numeric"=>":attribute polje mora biti manjše od :value.",
    "lt.string"=>":attribute polje mora biti krajše od :value znakov.",
    "lte.array"=>":attribute polje mora imeti :value ali manj elementov.",
    "lte.file"=>":attribute polje mora biti manjše ali enako :value kilobajtom.",
    "lte.numeric"=>":attribute polje mora biti manjše ali enako :value.",
    "lte.string"=>":attribute polje mora biti krajše ali enako :value znakov.",
    "mac_address"=>":attribute polje mora biti veljaven MAC naslov.",
    "max.array"=>":attribute polje ne sme imeti več kot :max elementov.",
    "max.file"=>":attribute polje ne sme biti večje od :max kilobajtov.",
    "max.numeric"=>":attribute polje ne sme biti večje od :max.",
    "max.string"=>":attribute polje ne sme biti daljše od :max znakov.",
    "max_digits"=>":attribute polje ne sme imeti več kot :max številk.",
    "mimes"=>":attribute polje mora biti datoteka tipa :values.",
    "mimetypes"=>":attribute polje mora biti datoteka tipa :values.",
    "min.array"=>":attribute polje mora imeti vsaj :min elementov.",
    "min.file"=>":attribute polje mora biti vsaj :min kilobajtov.",
    "min.numeric"=>":attribute polje ne sme biti manjše od :min.",
    "min.string"=>":attribute polje mora imeti vsaj :min znakov.",
    "min_digits"=>":attribute polje mora imeti vsaj :min številk.",
    "missing"=>":attribute polje mora manjkati.",
    "missing_if"=>"Če je :other :value, mora :attribute polje manjkati.",
    "missing_unless"=>":attribute polje mora manjkati, razen če je :other :value.",
    "missing_with"=>"Če je prisotna vrednost :values, mora :attribute polje manjkati.",
    "missing_with_all"=>"Če je prisotno :values, mora :attribute polje manjkati.",
    "multiple_of"=>":attribute polje mora biti večkratnik vrednosti :value.",
    "next"=>"Naslednja &raquo;",
    "not_in"=>"Izbrani :attribute je neveljaven.",
    "not_regex"=>"Oblika :attribute polja je neveljavna.",
    "numeric"=>":attribute polje mora biti število.",
    "password"=>"Geslo je napačno.",
    "password.letters"=>":attribute polje mora vsebovati vsaj eno črko.",
    "password.mixed"=>":attribute polje mora vsebovati vsaj eno veliko in eno malo črko.",
    "password.numbers"=>":attribute polje mora vsebovati vsaj eno številko.",
    "password.symbols"=>":attribute polje mora vsebovati vsaj en simbol.",
    "password.uncompromised"=>"Podani :attribute se je pojavil v uhajanju podatkov. Prosimo, izberite drugo vrednost za :attribute.",
    "present"=>":attribute polje mora biti prisotno.",
    "present_if"=>":attribute polje mora biti prisotno, če ima :other vrednost :value.",
    "present_unless"=>":attribute polje mora biti prisotno, razen če ima :other vrednost :value.",
    "present_with"=>":attribute polje mora biti prisotno, ko je podana vrednost :values.",
    "present_with_all"=>":attribute polje mora biti prisotno, ko so podane vrednosti :values.",
    "previous"=>"&laquo; Prejšnja",
    "prohibited"=>":attribute polje je prepovedano.",
    "prohibited_if"=>":attribute polje je prepovedano, ko je :other :value.",
    "prohibited_unless"=>":attribute polje je prepovedano, razen če je :other v :values.",
    "prohibits"=>":attribute polje izključuje prisotnost :other.",
    "regex"=>"Oblika :attribute polja je neveljavna.",
    "relatable"=>":attribute polje ne more biti povezano s tem virom.",
    "required"=>":attribute polje je obvezno.",
    "required_array_keys"=>":attribute polje mora vsebovati vrednosti: :values.",
    "required_if"=>":attribute polje je obvezno, ko :other ima vrednost :value.",
    "required_if_accepted"=>"To polje je obvezno, ko je :other sprejeto.",
    "required_if_declined"=>":attribute polje je obvezno, ko je :other zavrnjeno.",
    "required_unless"=>":attribute polje je obvezno, razen če je :other v :values.",
    "required_with"=>":attribute polje je obvezno, ko je prisotna vrednost :values.",
    "required_with_all"=>":attribute polje je obvezno, ko so prisotne vse vrednosti :values.",
    "required_without"=>":attribute polje je obvezno, ko vrednost :values ni prisotna.",
    "required_without_all"=>":attribute polje je obvezno, ko nobena od vrednosti :values ni prisotna.",
    "reset"=>"Vaše geslo je bilo ponastavljeno!",
    "same"=>":attribute in :other se morata ujemati.",
    "sent"=>"Opomnik za geslo je bil poslan!",
    "size.array"=>":attribute polje mora vsebovati :size elementov.",
    "size.file"=>":attribute polje mora biti veliko :size kilobajtov.",
    "size.numeric"=>":attribute polje mora biti :size.",
    "size.string"=>":attribute polje mora imeti :size znakov.",
    "starts_with"=>":attribute polje se mora začeti z eno od naslednjih vrednosti: :values.",
    "string"=>":attribute polje mora biti niz.",
    "throttle"=>"Preveč neuspešnih poskusov prijave. Prosimo, poskusite znak čez :seconds sekund.",
    "throttled"=>"Prosimo, počakajte, preden poskusite znova.",
    "timezone"=>":attribute polje mora biti veljavno časovno območje.",
    "token"=>"Žeton za ponastavitev gesla je neveljaven.",
    "ulid"=>":attribute polje mora biti veljaven ULID.",
    "unique"=>":attribute je že zaseden.",
    "uploaded"=>"Nalaganje datoteke :attribute ni uspelo.",
    "uppercase"=>":Attribute mora biti napisan z velikimi črkami.",
    "url"=>"Oblika :attribute polja je neveljavna.",
    "user"=>"Ne moremo najti uporabnika s tem e-poštnim naslovom.",
    "uuid"=>":attribute polje mora biti veljaven UUID.",

    'total_upload_size_too_high' => 'Največja dovoljena skupna velikost je :max',
    'total_upload_size_too_low' => 'Najmanjša dovoljena skupna velikost je :min',

    'file_too_big' => 'Ta datoteka je prevelika. Največja dovoljena velikost je :max',
    'file_too_small' => 'Ta datoteka je premajhna. Najmanjša velikost je :min',

    'incorrect_dimensions' => [
        'width' => 'Širina slike mora biti :width pikslov',
        'height' => 'Višina slike mora biti :height pikslov',
        'both' => 'Dimenzije slike morajo biti :width x :height pikslov',
    ],

    'width_not_between' => 'Širina slike mora biti med :min in :max piksli',
    'height_not_between' => 'Višina slike mora biti med :min in :max piksli',

    'max_items' => 'Naložite lahko največ :max element',
    'min_items' => 'Naložiti morate vsaj :min element',

    'extension' => 'Datoteka mora biti tipa :extensions',
    'mime' => 'Datoteka mora imeti MIME tip :mimes',
    'type' => 'Naložiti morate datoteko tipa :values',

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
            'required' => 'Naslov razdelka je obvezen',
            'max' => 'Naslov razdelka lahko vsebuje največ 100 znakov',
            'distinct' => 'Naslov razdelka že obstaja',
        ],
        'sections.*.fields.description' => [
            'required' => 'Vsebina razdelka je obvezna',
            'max' => 'Vsebina razdelka lahko vsebuje največ 2000 znakov',
        ],
        'experiences.*.employer' => [
            'max' => 'Ime delodajalca lahko vsebuje največ 100 znakov',
        ],
        'experiences.*.city' => [
            'max' => 'Ime mesta lahko vsebuje največ 100 znakov',
        ],
        'educations.*.school' => [
            'max' => 'Ime šole lahko vsebuje največ 100 znakov',
        ],
        'educations.*.city' => [
            'max' => 'Ime mesta lahko vsebuje največ 100 znakov',
        ],
        'educations.*.specialization' => [
            'max' => 'Ime specializacije lahko vsebuje največ 100 znakov',
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
        'email'    => 'e-poštni naslov',
        'password' => 'geslo',
        'name'     => 'ime',
        'message'     => 'sporočilo',
        'agree'     => 'soglasje',
        'captcha'     => 'koda',
        'subject'     => 'zadeva',
    ],

];
