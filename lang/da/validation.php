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

    "accepted" => "Feltet :attribute skal accepteres.",
    "accepted_if" => "Feltet :attribute skal accepteres, når :other er :value.",
    "active_url" => "Feltet :attribute er ikke en gyldig URL.",
    "after" => "Feltet :attribute skal være en dato efter :date.",
    "after_or_equal" => "Feltet :attribute skal være en dato efter eller lig med :date.",
    "alpha" => "Feltet :attribute må kun indeholde bogstaver.",
    "alpha_dash" => "Feltet :attribute må kun indeholde bogstaver, tal, bindestreger og understregninger.",
    "alpha_num" => "Feltet :attribute må kun indeholde bogstaver og tal.",
    "array" => "Feltet :attribute skal være en liste (array).",
    "ascii" => "Feltet :attribute må kun indeholde alfanumeriske tegn og symboler (enkel-byte).",
    "attached" => "Feltet :attribute er allerede tilknyttet.",
    "before" => "Feltet :attribute skal være en dato før :date.",
    "before_or_equal" => "Feltet :attribute skal være en dato før eller lig med :date.",
    "between.array" => "Feltet :attribute skal indeholde mellem :min - :max elementer.",
    "between.file" => "Feltet :attribute skal være mellem :min - :max kilobytes.",
    "between.numeric" => "Feltet :attribute skal være mellem :min - :max.",
    "between.string" => "Feltet :attribute skal være mellem :min - :max tegn.",
    "boolean" => "Feltet :attribute skal være sandt eller falsk.",
    "can" => "Feltet :attribute indeholder en ikke-autoriseret værdi.",
    "confirmed" => "Bekræftelsen af feltet :attribute stemmer ikke overens.",
    "contains" => "Feltet :attribute mangler et påkrævet element.",
    "current_password" => "Adgangskoden er forkert.",
    "date" => "Feltet :attribute er ikke en gyldig dato.",
    "date_equals" => "Feltet :attribute skal være en dato lig med :date.",
    "date_format" => "Feltet :attribute matcher ikke formatet :format.",
    "decimal" => "Feltet :attribute skal have :decimal decimaler.",
    "declined" => "Feltet :attribute skal afvises.",
    "declined_if" => "Feltet :attribute skal afvises, når :other er :value.",
    "different" => "Feltet :attribute og :other skal være forskellige.",
    "digits" => "Feltet :attribute skal være på :digits cifre.",
    "digits_between" => "Feltet :attribute skal være mellem :min og :max cifre.",
    "dimensions" => "Feltet :attribute har ugyldige billedmål.",
    "distinct" => "Feltet :attribute har en dubletværdi.",
    "doesnt_end_with" => "Feltet :attribute må ikke slutte med en af følgende værdier: :values.",
    "doesnt_start_with" => "Feltet :attribute må ikke starte med en af følgende værdier: :values.",
    "email" => "Feltet :attribute skal være en gyldig e-mailadresse.",
    "ends_with" => "Feltet :attribute skal slutte med en af følgende værdier: :values.",
    "enum" => "Den valgte værdi for :attribute er ugyldig.",
    "exists" => "Det valgte felt :attribute er ugyldigt.",
    "extensions" => "Feltet :attribute skal have en af følgende filendelser: :values.",
    "failed" => "Forkert brugernavn eller adgangskode.",
    "file" => "Feltet :attribute skal være en fil.",
    "filled" => "Feltet :attribute skal udfyldes.",
    "gt.array" => "Feltet :attribute skal have mere end :value elementer.",
    "gt.file" => "Feltet :attribute skal være større end :value kilobyte.",
    "gt.numeric" => "Feltet :attribute skal være større end :value.",
    "gt.string" => "Feltet :attribute skal være længere end :value tegn.",
    "gte.array" => "Feltet :attribute skal have :value elementer eller mere.",
    "gte.file" => "Feltet :attribute skal være større end eller lig med :value kilobyte.",
    "gte.numeric" => "Feltet :attribute skal være større end eller lig med :value.",
    "gte.string" => "Feltet :attribute skal være længere end eller lig med :value tegn.",
    "hex_color" => "Feltet :attribute skal være en gyldig hex-farve.",
    "image" => "Feltet :attribute skal være et billede.",
    "in" => "Det valgte element :attribute er ugyldigt.",
    "in_array" => "Feltet :attribute findes ikke i :other.",
    "integer" => "Feltet :attribute skal være et heltal.",
    "ip" => "Feltet :attribute skal være en gyldig IP-adresse.",
    "ipv4" => "Feltet :attribute skal være en gyldig IPv4-adresse.",
    "ipv6" => "Feltet :attribute skal være en gyldig IPv6-adresse.",
    "json" => "Feltet :attribute skal være en gyldig JSON-streng.",
    "list" => "Feltet :attribute skal være en liste.",
    "lowercase" => "Feltet :attribute skal være med små bogstaver.",
    "lt.array" => "Feltet :attribute skal have mindre end :value elementer.",
    "lt.file" => "Feltet :attribute skal være mindre end :value kilobyte.",
    "lt.numeric" => "Feltet :attribute skal være mindre end :value.",
    "lt.string" => "Feltet :attribute skal være kortere end :value tegn.",
    "lte.array" => "Feltet :attribute må ikke have mere end :value elementer.",
    "lte.file" => "Feltet :attribute skal være mindre end eller lig med :value kilobyte.",
    "lte.numeric" => "Feltet :attribute skal være mindre end eller lig med :value.",
    "lte.string" => "Feltet :attribute skal være kortere end eller lig med :value tegn.",
    "mac_address" => "Feltet :attribute skal være en gyldig MAC-adresse.",
    "max.array" => "Feltet :attribute må ikke have mere end :max elementer.",
    "max.file" => "Feltet :attribute må ikke være større end :max kilobyte.",
    "max.numeric" => "Feltet :attribute må ikke være større end :max.",
    "max.string" => "Feltet :attribute må ikke være længere end :max tegn.",
    "max_digits" => "Feltet :attribute må ikke have mere end :max cifre.",
    "mimes" => "Feltet :attribute skal være en fil af typen: :values.",
    "mimetypes" => "Feltet :attribute skal være en fil af typen: :values.",
    "min.array" => "Feltet :attribute skal have mindst :min elementer.",
    "min.file" => "Feltet :attribute skal mindst være :min kilobyte.",
    "min.numeric" => "Feltet :attribute skal mindst være :min.",
    "min.string" => "Feltet :attribute skal mindst have :min tegn.",
    "min_digits" => "Feltet :attribute skal have mindst :min cifre.",
    "missing" => "Feltet :attribute skal mangle.",
    "missing_if" => "Feltet :attribute skal mangle, når :other er :value.",
    "missing_unless" => "Feltet :attribute skal mangle, medmindre :other er :value.",
    "missing_with" => "Feltet :attribute skal mangle, når :values er til stede.",
    "missing_with_all" => "Feltet :attribute skal mangle, når :values er til stede.",
    "multiple_of" => "Feltet :attribute skal være et multiplum af :value.",
    "next" => "Næste &raquo;",
    "not_in" => "Den valgte :attribute er ugyldig.",
    "not_regex" => "Formatet for :attribute er ugyldigt.",
    "numeric" => "Feltet :attribute skal være et tal.",
    "password" => "Adgangskoden er forkert.",
    "password.letters" => "Feltet :attribute skal indeholde mindst ét bogstav.",
    "password.mixed" => "Feltet :attribute skal indeholde mindst ét stort og ét lille bogstav.",
    "password.numbers" => "Feltet :attribute skal indeholde mindst ét tal.",
    "password.symbols" => "Feltet :attribute skal indeholde mindst ét symbol.",
    "password.uncompromised" => "Den angivne :attribute er optrådt i et datalæk. Vælg venligst en anden :attribute.",
    "present" => "Feltet :attribute skal være til stede.",
    "present_if" => "Feltet :attribute skal være til stede, når :other er :value.",
    "present_unless" => "Feltet :attribute skal være til stede, medmindre :other er :value.",
    "present_with" => "Feltet :attribute skal være til stede, når :values er til stede.",
    "present_with_all" => "Feltet :attribute skal være til stede, når :values er til stede.",
    "previous" => "&laquo; Forrige",
    "prohibited" => "Feltet :attribute er forbudt.",
    "prohibited_if" => "Feltet :attribute er forbudt, når :other er :value.",
    "prohibited_unless" => "Feltet :attribute er forbudt, medmindre :other er i :values.",
    "prohibits" => "Feltet :attribute forhindrer :other i at være til stede.",
    "regex" => "Formatet for :attribute er ugyldigt.",
    "relatable" => "Dette felt :attribute kan ikke relateres til denne ressource.",
    "required" => "Feltet :attribute er påkrævet.",
    "required_array_keys" => "Feltet :attribute skal indeholde poster for: :values.",
    "required_if" => "Feltet :attribute er påkrævet, når :other er :value.",
    "required_if_accepted" => "Feltet :attribute er påkrævet, når :other accepteres.",
    "required_if_declined" => "Feltet :attribute er påkrævet, når :other afvises.",
    "required_unless" => "Feltet :attribute er påkrævet, medmindre :other findes i :values.",
    "required_with" => "Feltet :attribute er påkrævet, når :values er til stede.",
    "required_with_all" => "Feltet :attribute er påkrævet, når alle :values er til stede.",
    "required_without" => "Feltet :attribute er påkrævet, når :values ikke er til stede.",
    "required_without_all" => "Feltet :attribute er påkrævet, når ingen af :values er til stede.",
    "reset" => "Adgangskoden er blevet nulstillet!",
    "same" => "Feltet :attribute og :other skal være ens.",
    "sent" => "Vi har sendt dig en e-mail til nulstilling af adgangskode!",
    "size.array" => "Feltet :attribute skal indeholde :size elementer.",
    "size.file" => "Feltet :attribute skal fylde :size kilobyte.",
    "size.numeric" => "Feltet :attribute skal være :size.",
    "size.string" => "Feltet :attribute skal have :size tegn.",
    "starts_with" => "Feltet :attribute skal starte med en af følgende værdier: :values.",
    "string" => "Feltet :attribute skal være en streng.",
    "throttle" => "For mange loginforsøg. Prøv igen om :seconds sekunder.",
    "throttled" => "Vent venligst før du prøver igen.",
    "timezone" => "Feltet :attribute skal være en gyldig tidszone.",
    "token" => "Koden til nulstilling af adgangskode er ugyldig.",
    "ulid" => "Feltet :attribute skal være en gyldig ULID.",
    "unique" => ":attribute er allerede i brug.",
    "uploaded" => "Feltet :attribute kunne ikke uploades.",
    "uppercase" => "Feltet :attribute skal være med store bogstaver.",
    "url" => "Formatet for :attribute er ugyldigt.",
    "user" => "Vi kan ikke finde en bruger med den e-mailadresse.",
    "uuid" => "Feltet :attribute skal være en gyldig UUID.",

    'total_upload_size_too_high' => 'Den maksimale tilladte samlede størrelse er :max',
    'total_upload_size_too_low' => 'Den mindste tilladte samlede størrelse er :min',

    'file_too_big' => 'Denne fil er for stor. Maksimal tilladt størrelse er :max',
    'file_too_small' => 'Denne fil er for lille. Den skal mindst være :min',

    'incorrect_dimensions' => [
        'width' => 'Billedets bredde skal være :width pixels',
        'height' => 'Billedets højde skal være :height pixels',
        'both' => 'Billedets dimensioner skal være :width x :height pixels',
    ],

    'width_not_between' => 'Billedets bredde skal være mellem :min og :max pixels',
    'height_not_between' => 'Billedets højde skal være mellem :min og :max pixels',

    'max_items' => 'Du må kun uploade :max element|Du må kun uploade :max elementer',
    'min_items' => 'Du skal uploade mindst :min element|Du skal uploade mindst :min elementer',

    'extension' => 'Filen skal være af typen :extensions',
    'mime' => 'Filen skal have mime-typen :mimes',
    'type' => 'Du skal uploade en fil af typen :values',

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
            'required' => 'Sektionstitel er påkrævet',
            'max' => 'Sektionstitel må højst indeholde 100 tegn',
            'distinct' => 'Sektionstitlen eksisterer allerede',
        ],
        'sections.*.fields.description' => [
            'required' => 'Sektionsindhold er påkrævet',
            'max' => 'Sektionsindhold må højst indeholde 2000 tegn',
        ],
        'experiences.*.employer' => [
            'max' => 'Arbejdsgiverens navn må højst indeholde 100 tegn',
        ],
        'experiences.*.city' => [
            'max' => 'Byens navn må højst indeholde 100 tegn',
        ],
        'educations.*.school' => [
            'max' => 'Skolens navn må højst indeholde 100 tegn',
        ],
        'educations.*.city' => [
            'max' => 'Byens navn må højst indeholde 100 tegn',
        ],
        'educations.*.specialization' => [
            'max' => 'Specialiseringens navn må højst indeholde 100 tegn',
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
        'email' => 'e-mailadresse',
        'password' => 'adgangskode',
        'name' => 'navn',
        'message' => 'besked',
        'agree' => 'samtykke',
        'captcha' => 'kode',
        'subject' => 'emne',
    ],

];

