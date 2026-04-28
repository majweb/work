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

    "accepted" => "Pole :attribute musí být přijato.",
    "accepted_if" => "Pole :attribute musí být přijato, pokud :other je :value.",
    "active_url" => "Pole :attribute není platnou adresou URL.",
    "after" => "Pole :attribute musí být datum po :date.",
    "after_or_equal" => "Pole :attribute musí být datum po nebo rovno :date.",
    "alpha" => "Pole :attribute může obsahovat pouze písmena.",
    "alpha_dash" => "Pole :attribute může obsahovat pouze písmena, číslice, pomlčky a podtržítka.",
    "alpha_num" => "Pole :attribute může obsahovat pouze písmena a číslice.",
    "array" => "Pole :attribute musí být polem.",
    "ascii" => "Pole :attribute smí obsahovat pouze jednobytové alfanumerické znaky a symboly.",
    "attached" => "Pole :attribute je již připojeno.",
    "before" => "Pole :attribute musí být datum před :date.",
    "before_or_equal" => "Pole :attribute musí být datum před nebo rovno :date.",
    "between.array" => "Pole :attribute musí obsahovat :min až :max prvků.",
    "between.file" => "Pole :attribute musí mít velikost :min až :max kilobajtů.",
    "between.numeric" => "Pole :attribute musí být v rozsahu od :min do :max.",
    "between.string" => "Pole :attribute musí mít :min až :max znaků.",
    "boolean" => "Pole :attribute musí mít hodnotu pravda nebo nepravda.",
    "can" => "Pole :attribute obsahuje neoprávněnou hodnotu.",
    "confirmed" => "Potvrzení pole :attribute nesouhlasí.",
    "contains" => "Pole :attribute neobsahuje požadovanou hodnotu.",
    "current_password" => "Heslo je nesprávné.",
    "date" => "Pole :attribute není platné datum.",
    "date_equals" => "Pole :attribute musí být datum rovné :date.",
    "date_format" => "Pole :attribute neodpovídá formátu :format.",
    "decimal" => "Pole :attribute musí mít :decimal desetinných míst.",
    "declined" => "Pole :attribute musí být odmítnuto.",
    "declined_if" => "Pole :attribute musí být odmítnuto, pokud :other je :value.",
    "different" => "Pole :attribute a :other se musí lišit.",
    "digits" => "Pole :attribute musí mít :digits číslic.",
    "digits_between" => "Pole :attribute musí mít :min až :max číslic.",
    "dimensions" => "Pole :attribute má neplatné rozměry obrázku.",
    "distinct" => "Pole :attribute má duplicitní hodnotu.",
    "doesnt_end_with" => "Pole :attribute nesmí končit jednou z následujících hodnot: :values.",
    "doesnt_start_with" => "Pole :attribute nesmí začínat jednou z následujících hodnot: :values.",
    "email" => "Pole :attribute musí být platná e-mailová adresa.",
    "ends_with" => "Pole :attribute musí končit jednou z následujících hodnot: :values.",
    "enum" => "Vybraná hodnota v poli :attribute je neplatná.",
    "exists" => "Zvolená hodnota v poli :attribute je neplatná.",
    "extensions" => "Pole :attribute musí mít jednu z následujících přípon: :values.",
    "failed" => "Chybné přihlašovací jméno nebo heslo.",
    "file" => "Pole :attribute musí být soubor.",
    "filled" => "Pole :attribute musí být vyplněno.",
    "gt.array" => "Pole :attribute musí obsahovat více než :value prvků.",
    "gt.file" => "Velikost souboru :attribute musí být větší než :value kilobajtů.",
    "gt.numeric" => "Pole :attribute musí být větší než :value.",
    "gt.string" => "Pole :attribute musí být delší než :value znaků.",
    "gte.array" => "Pole :attribute musí obsahovat :value nebo více prvků.",
    "gte.file" => "Velikost souboru :attribute musí být větší nebo rovna :value kilobajtů.",
    "gte.numeric" => "Pole :attribute musí být větší nebo rovno :value.",
    "gte.string" => "Pole :attribute musí být delší nebo stejně dlouhé jako :value znaků.",
    "hex_color" => "Pole :attribute musí být platná barva v hexadecimálním formátu.",
    "image" => "Pole :attribute musí být obrázek.",
    "in" => "Zvolená hodnota v poli :attribute je neplatná.",
    "in_array" => "Pole :attribute se nenachází v :other.",
    "integer" => "Pole :attribute musí být celé číslo.",
    "ip" => "Pole :attribute musí být platná IP adresa.",
    "ipv4" => "Pole :attribute musí být platná IPv4 adresa.",
    "ipv6" => "Pole :attribute musí být platná IPv6 adresa.",
    "json" => "Pole :attribute musí být platný JSON řetězec.",
    "list" => "Pole :attribute musí být seznam.",
    "lowercase" => "Pole :attribute musí být psáno malými písmeny.",
    "lt.array" => "Pole :attribute musí obsahovat méně než :value prvků.",
    "lt.file" => "Velikost souboru :attribute musí být menší než :value kilobajtů.",
    "lt.numeric" => "Pole :attribute musí být menší než :value.",
    "lt.string" => "Pole :attribute musí být kratší než :value znaků.",
    "lte.array" => "Pole :attribute nesmí obsahovat více než :value prvků.",
    "lte.file" => "Velikost souboru :attribute musí být menší nebo rovna :value kilobajtů.",
    "lte.numeric" => "Pole :attribute musí být menší nebo rovno :value.",
    "lte.string" => "Pole :attribute musí být kratší nebo stejně dlouhé jako :value znaků.",
    "mac_address" => "Pole :attribute musí být platná MAC adresa.",
    "max.array" => "Pole :attribute nesmí obsahovat více než :max prvků.",
    "max.file" => "Soubor v poli :attribute nesmí být větší než :max kilobajtů.",
    "max.numeric" => "Hodnota v poli :attribute nesmí být větší než :max.",
    "max.string" => "Pole :attribute nesmí být delší než :max znaků.",
    "max_digits" => "Pole :attribute nesmí mít více než :max číslic.",
    "mimes" => "Pole :attribute musí být soubor typu: :values.",
    "mimetypes" => "Pole :attribute musí být soubor typu: :values.",
    "min.array" => "Pole :attribute musí obsahovat alespoň :min prvků.",
    "min.file" => "Soubor v poli :attribute musí mít alespoň :min kilobajtů.",
    "min.numeric" => "Hodnota v poli :attribute nesmí být menší než :min.",
    "min.string" => "Pole :attribute musí mít alespoň :min znaků.",
    "min_digits" => "Pole :attribute musí mít alespoň :min číslic.",
    "missing" => "Pole :attribute musí chybět.",
    "missing_if" => "Pole :attribute musí chybět, pokud :other je :value.",
    "missing_unless" => "Pole :attribute musí chybět, pokud :other není :value.",
    "missing_with" => "Pole :attribute musí chybět, pokud je přítomna hodnota :values.",
    "missing_with_all" => "Pole :attribute musí chybět, pokud jsou přítomny hodnoty :values.",
    "multiple_of" => "Pole :attribute musí být násobkem hodnoty :value.",
    "next" => "Další &raquo;",
    "not_in" => "Zvolená hodnota v poli :attribute je neplatná.",
    "not_regex" => "Formát pole :attribute je neplatný.",
    "numeric" => "Pole :attribute musí být číslo.",
    "password" => "Heslo je nesprávné.",
    "password.letters" => "Pole :attribute musí obsahovat alespoň jedno písmeno.",
    "password.mixed" => "Pole :attribute musí obsahovat alespoň jedno velké a jedno malé písmeno.",
    "password.numbers" => "Pole :attribute musí obsahovat alespoň jednu číslici.",
    "password.symbols" => "Pole :attribute musí obsahovat alespoň jeden symbol.",
    "password.uncompromised" => "Zadaná hodnota :attribute se objevila v únicích dat. Prosím zvolte jinou hodnotu :attribute.",
    "present" => "Pole :attribute musí být přítomno.",
    "present_if" => "Pole :attribute musí být přítomno, pokud :other je :value.",
    "present_unless" => "Pole :attribute musí být přítomno, pokud :other není :value.",
    "present_with" => "Pole :attribute musí být přítomno, pokud je zadáno :values.",
    "present_with_all" => "Pole :attribute musí být přítomno, pokud jsou zadány hodnoty :values.",
    "previous" => "&laquo; Předchozí",
    "prohibited" => "Pole :attribute je zakázáno.",
    "prohibited_if" => "Pole :attribute je zakázáno, pokud :other je :value.",
    "prohibited_unless" => "Pole :attribute je zakázáno, pokud :other není v :values.",
    "prohibits" => "Pole :attribute zakazuje přítomnost pole :other.",
    "regex" => "Formát pole :attribute je neplatný.",
    "relatable" => "Pole :attribute nemůže být spojeno s tímto zdrojem.",
    "required" => "Pole :attribute je povinné.",
    "required_array_keys" => "Pole :attribute musí obsahovat klíče pro: :values.",
    "required_if" => "Pole :attribute je povinné, pokud :other je :value.",
    "required_if_accepted" => "Pole :attribute je povinné, pokud je :other přijato.",
    "required_if_declined" => "Pole :attribute je povinné, pokud je :other odmítnuto.",
    "required_unless" => "Pole :attribute je povinné, pokud :other není v :values.",
    "required_with" => "Pole :attribute je povinné, pokud je přítomna hodnota :values.",
    "required_with_all" => "Pole :attribute je povinné, pokud jsou přítomny hodnoty :values.",
    "required_without" => "Pole :attribute je povinné, pokud není přítomna hodnota :values.",
    "required_without_all" => "Pole :attribute je povinné, pokud není přítomna žádná z hodnot :values.",
    "reset" => "Heslo bylo úspěšně resetováno!",
    "same" => "Pole :attribute a :other se musí shodovat.",
    "sent" => "Připomínka hesla byla odeslána!",
    "size.array" => "Pole :attribute musí obsahovat přesně :size prvků.",
    "size.file" => "Soubor v poli :attribute musí mít přesně :size kilobajtů.",
    "size.numeric" => "Pole :attribute musí mít hodnotu :size.",
    "size.string" => "Pole :attribute musí mít délku :size znaků.",
    "starts_with" => "Pole :attribute musí začínat jednou z následujících hodnot: :values.",
    "string" => "Pole :attribute musí být textový řetězec.",
    "throttle" => "Příliš mnoho pokusů o přihlášení. Zkuste to prosím znovu za :seconds sekund.",
    "throttled" => "Počkejte prosím před dalším pokusem.",
    "timezone" => "Pole :attribute musí být platné časové pásmo.",
    "token" => "Token pro resetování hesla je neplatný.",
    "ulid" => "Pole :attribute musí být platné ULID.",
    "unique" => "Tato hodnota :attribute již existuje.",
    "uploaded" => "Soubor :attribute se nepodařilo nahrát.",
    "uppercase" => "Pole :attribute musí být psáno velkými písmeny.",
    "url" => "Formát pole :attribute je neplatný.",
    "user" => "Uživatel s touto e-mailovou adresou nebyl nalezen.",
    "uuid" => "Pole :attribute musí být platné UUID.",

    'total_upload_size_too_high' => 'Maximální povolená celková velikost je :max',
    'total_upload_size_too_low' => 'Minimální povolená celková velikost je :min',

    'file_too_big' => 'Tento soubor je příliš velký. Maximální povolená velikost je :max',
    'file_too_small' => 'Tento soubor je příliš malý. Musí mít alespoň :min',

    'incorrect_dimensions' => [
        'width' => 'Šířka obrázku musí být :width pixelů',
        'height' => 'Výška obrázku musí být :height pixelů',
        'both' => 'Rozměry obrázku musí být :width x :height pixelů',
    ],

    'width_not_between' => 'Šířka obrázku musí být mezi :min a :max pixely',
    'height_not_between' => 'Výška obrázku musí být mezi :min a :max pixely',

    'max_items' => 'Můžete nahrát pouze :max položku|Můžete nahrát pouze :max položky|Můžete nahrát pouze :max položek',
    'min_items' => 'Musíte nahrát alespoň :min položku|Musíte nahrát alespoň :min položky|Musíte nahrát alespoň :min položek',

    'extension' => 'Soubor musí být typu :extensions',
    'mime' => 'Soubor musí mít MIME typ :mimes',
    'type' => 'Musíte nahrát soubor typu :values',

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
            'required' => 'Název sekce je povinný',
            'max' => 'Název sekce může obsahovat maximálně 100 znaků',
            'distinct' => 'Tento název sekce již existuje',
        ],
        'sections.*.fields.description' => [
            'required' => 'Obsah sekce je povinný',
            'max' => 'Obsah sekce může obsahovat maximálně 2000 znaků',
        ],
        'experiences.*.employer' => [
            'max' => 'Název zaměstnavatele může obsahovat maximálně 100 znaků',
        ],
        'experiences.*.city' => [
            'max' => 'Název města může obsahovat maximálně 100 znaků',
        ],
        'educations.*.school' => [
            'max' => 'Název školy může obsahovat maximálně 100 znaků',
        ],
        'educations.*.city' => [
            'max' => 'Název města může obsahovat maximálně 100 znaků',
        ],
        'educations.*.specialization' => [
            'max' => 'Název specializace může obsahovat maximálně 100 znaků',
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
        'email'    => 'e-mailová adresa',
        'password' => 'heslo',
        'name'     => 'název',
        'message'  => 'zpráva',
        'agree'    => 'souhlas',
        'captcha'  => 'kód',
        'subject'  => 'předmět',
    ],

];
