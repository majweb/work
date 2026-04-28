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

    "accepted"=>":attribute pole musí byť akceptované.",
    "accepted_if"=>":attribute pole musí byť akceptované, keď :other má hodnotu :value.",
    "active_url"=>":attribute pole nie je platná URL adresa.",
    "after"=>":attribute pole musí byť dátum po :date.",
    "after_or_equal"=>":attribute pole musí byť dátum, ktorý nie je skorší ako :date.",
    "alpha"=>":attribute pole môže obsahovať iba písmená.",
    "alpha_dash"=>":attribute pole môže obsahovať iba písmená, číslice a pomlčky.",
    "alpha_num"=>":attribute pole môže obsahovať iba písmená a číslice.",
    "array"=>":attribute pole musí byť pole.",
    "ascii"=>":attribute pole môže obsahovať iba jednobajtové alfanumerické znaky a symboly.",
    "attached"=>":attribute pole je už pripojené.",
    "before"=>":attribute pole musí byť dátum pred :date.",
    "before_or_equal"=>":attribute pole musí byť dátum, ktorý nie je po :date.",
    "between.array"=>":attribute pole musí mať :min - :max prvkov.",
    "between.file"=>":attribute pole musí byť medzi :min - :max kilobajtami.",
    "between.numeric"=>":attribute pole musí byť medzi :min - :max.",
    "between.string"=>":attribute pole musí mať medzi :min - :max znakmi.",
    "boolean"=>":attribute pole musí byť pravdivé alebo nepravdivé.",
    "can"=>":attribute pole obsahuje neoprávnenú hodnotu.",
    "confirmed"=>":attribute pole sa nezhoduje s potvrdením.",
    "contains"=>":attribute pole neobsahuje požadovaný prvok.",
    "current_password"=>"Heslo je nesprávne.",
    "date"=>":attribute pole nie je platný dátum.",
    "date_equals"=>":attribute pole musí byť dátum rovný :date.",
    "date_format"=>":attribute pole nie je vo formáte :format.",
    "decimal"=>":attribute pole musí mať :decimal desatinných miest.",
    "declined"=>":attribute pole musí byť odmietnuté.",
    "declined_if"=>":attribute pole musí byť odmietnuté, keď :other má hodnotu :value.",
    "different"=>":attribute a :other sa musia líšiť.",
    "digits"=>":attribute pole musí mať :digits číslic.",
    "digits_between"=>":attribute pole musí mať medzi :min a :max číslicami.",
    "dimensions"=>":attribute pole má nesprávne rozmery obrázka.",
    "distinct"=>":attribute pole má duplicitné hodnoty.",
    "doesnt_end_with"=>":attribute pole nesmie končiť jednou z nasledujúcich hodnôt: :values.",
    "doesnt_start_with"=> ":attribute pole nesmie začínať jednou z nasledujúcich hodnôt: :values.",
    "email"=> ":attribute pole musí byť platná e-mailová adresa.",
    "ends_with"=>":attribute pole musí končiť jednou z nasledujúcich hodnôt: :values.",
    "enum"=> ":attribute pole má nesprávnu hodnotu.",
    "exists"=> "Vybrané :attribute pole je neplatné.",
    "extensions"=> ":attribute pole musí mať jednu z nasledujúcich prípon: :values.",
    "failed"=>"Nesprávne prihlasovacie meno alebo heslo.",
    "file"=>":attribute pole musí byť súbor.",
    "filled"=>":attribute pole musí byť vyplnené.",
    "gt.array"=>":attribute pole musí mať viac ako :value prvkov.",
    "gt.file"=>":attribute pole musí byť väčšie ako :value kilobajtov.",
    "gt.numeric"=>":attribute pole musí byť väčšie ako :value.",
    "gt.string"=>":attribute pole musí byť dlhšie ako :value znakov.",
    "gte.array"=>":attribute pole musí mať :value alebo viac prvkov.",
    "gte.file"=>":attribute pole musí byť väčšie alebo rovné :value kilobajtom.",
    "gte.numeric"=>":attribute pole musí byť väčšie alebo rovné :value.",
    "gte.string"=>":attribute pole musí byť dlhšie alebo rovné :value znakom.",
    "hex_color"=>":attribute pole musí byť platná hexadecimálna farba.",
    "image"=>":attribute pole musí byť obrázok.",
    "in"=>"Vybrané :attribute pole je neplatné.",
    "in_array"=>":attribute pole sa nenachádza v :other.",
    "integer"=>":attribute pole musí byť celé číslo.",
    "ip"=>":attribute pole musí byť platná IP adresa.",
    "ipv4"=>":attribute pole musí byť platná IPv4 adresa.",
    "ipv6"=>":attribute pole musí byť platná IPv6 adresa.",
    "json"=>":attribute pole musí byť platný JSON reťazec.",
    "list"=>":attribute pole musí byť zoznam.",
    "lowercase"=>":Attribute musí byť napísané malými písmenami.",
    "lt.array"=>":attribute pole musí mať menej ako :value prvkov.",
    "lt.file"=>":attribute pole musí byť menšie ako :value kilobajtov.",
    "lt.numeric"=>":attribute pole musí byť menšie ako :value.",
    "lt.string"=>":attribute pole musí byť kratšie ako :value znakov.",
    "lte.array"=>":attribute pole musí mať :value alebo menej prvkov.",
    "lte.file"=>":attribute pole musí byť menšie alebo rovné :value kilobajtom.",
    "lte.numeric"=>":attribute pole musí byť menšie alebo rovné :value.",
    "lte.string"=>":attribute pole musí byť kratšie alebo rovné :value znakom.",
    "mac_address"=>":attribute pole musí byť platná MAC adresa.",
    "max.array"=>":attribute pole nesmie mať viac ako :max prvkov.",
    "max.file"=>":attribute pole nesmie byť väčšie ako :max kilobajtov.",
    "max.numeric"=>":attribute pole nesmie byť väčšie ako :max.",
    "max.string"=>":attribute pole nesmie byť dlhšie ako :max znakov.",
    "max_digits"=>":attribute pole nesmie mať viac ako :max číslic.",
    "mimes"=>":attribute pole musí byť súbor typu :values.",
    "mimetypes"=>":attribute pole musí byť súbor typu :values.",
    "min.array"=>":attribute pole musí mať aspoň :min prvkov.",
    "min.file"=>":attribute pole musí byť aspoň :min kilobajtov.",
    "min.numeric"=>":attribute pole nesmie byť menšie ako :min.",
    "min.string"=>":attribute pole musí mať aspoň :min znakov.",
    "min_digits"=>":attribute pole musí mať aspoň :min číslic.",
    "missing"=>":attribute pole musí chýbať.",
    "missing_if"=>"Ak je :other :value, :attribute pole musí chýbať.",
    "missing_unless"=>":attribute pole musí chýbať, pokiaľ :other nie je :value.",
    "missing_with"=>"Ak je prítomná hodnota :values, :attribute pole musí chýbať.",
    "missing_with_all"=>"Ak je prítomné :values, :attribute pole musí chýbať.",
    "multiple_of"=>":attribute pole musí byť násobkom :value.",
    "next"=>"Ďalšia &raquo;",
    "not_in"=>"Vybrané :attribute pole je neplatné.",
    "not_regex"=>"Formát :attribute poľa je neplatný.",
    "numeric"=>":attribute pole musí byť číslo.",
    "password"=>"Heslo je nesprávne.",
    "password.letters"=>":attribute pole musí obsahovať aspoň jedno písmeno.",
    "password.mixed"=>":attribute pole musí obsahovať aspoň jedno veľké a jedno malé písmeno.",
    "password.numbers"=>":attribute pole musí obsahovať aspoň jedno číslo.",
    "password.symbols"=>":attribute pole musí obsahovať aspoň jeden symbol.",
    "password.uncompromised"=>"Daný :attribute sa objavil pri úniku údajov. Vyberte prosím inú hodnotu pre :attribute.",
    "present"=>":attribute pole musí byť prítomné.",
    "present_if"=>":attribute pole musí byť prítomné, ak :other má hodnotu :value.",
    "present_unless"=>":attribute pole musí byť prítomné, pokiaľ :other nemá hodnotu :value.",
    "present_with"=>":attribute pole musí byť prítomné, keď je :values uvedené.",
    "present_with_all"=>":attribute pole musí byť prítomné, keď sú :values uvedené.",
    "previous"=>"&laquo; Predchádzajúca",
    "prohibited"=>":attribute pole je zakázané.",
    "prohibited_if"=>":attribute pole je zakázané, keď :other je :value.",
    "prohibited_unless"=>":attribute pole je zakázané, pokiaľ :other nie je v :values.",
    "prohibits"=>":attribute pole vylučuje prítomnosť :other.",
    "regex"=>"Formát :attribute poľa je neplatný.",
    "relatable"=>":attribute pole nemôže byť spojené s týmto zdrojom.",
    "required"=>":attribute pole je povinné.",
    "required_array_keys"=>":attribute pole musí obsahovať hodnoty: :values.",
    "required_if"=>":attribute pole je povinné, keď :other má hodnotu :value.",
    "required_if_accepted"=>"Toto pole je povinné, keď je :other akceptované.",
    "required_if_declined"=>":attribute pole je povinné, keď je :other odmietnuté.",
    "required_unless"=>":attribute pole je povinné, pokiaľ :other nie je v :values.",
    "required_with"=>":attribute pole je povinné, keď je prítomná hodnota :values.",
    "required_with_all"=>":attribute pole je povinné, keď sú prítomné všetky hodnoty :values.",
    "required_without"=>":attribute pole je povinné, keď hodnota :values nie je prítomná.",
    "required_without_all"=>":attribute pole je povinné, keď žiadna z hodnôt :values nie je prítomná.",
    "reset"=>"Vaše heslo bolo obnovené!",
    "same"=>":attribute a :other sa musia zhodovať.",
    "sent"=>"Pripomienka hesla bola odoslaná!",
    "size.array"=>":attribute pole musí obsahovať :size prvkov.",
    "size.file"=>":attribute pole musí mať :size kilobajtov.",
    "size.numeric"=>":attribute pole musí byť :size.",
    "size.string"=>":attribute pole musí mať :size znakov.",
    "starts_with"=>":attribute pole musí začínať jednou z nasledujúcich hodnôt: :values.",
    "string"=>":attribute pole musí byť reťazec.",
    "throttle"=>"Príliš veľa neúspešných pokusov o prihlásenie. Skúste to znova o :seconds sekúnd.",
    "throttled"=>"Počkajte prosím pred ďalším pokusom.",
    "timezone"=>":attribute pole musí byť platné časové pásmo.",
    "token"=>"Token na obnovenie hesla je neplatný.",
    "ulid"=>":attribute pole musí byť platný ULID identifikátor.",
    "unique"=>":attribute už existuje.",
    "uploaded"=>"Nahrávanie súboru :attribute zlyhalo.",
    "uppercase"=>":Attribute musí byť napísané veľkými písmenami.",
    "url"=>"Formát :attribute poľa je neplatný.",
    "user"=>"Nenašli sme používateľa s touto e-mailovou adresou.",
    "uuid"=>":attribute pole musí byť platný UUID identifikátor.",

    'total_upload_size_too_high' => 'Maximálna povolená celková veľkosť je :max',
    'total_upload_size_too_low' => 'Minimálna povolená celková veľkosť je :min',

    'file_too_big' => 'Tento súbor je príliš veľký. Maximálna povolená veľkosť je :max',
    'file_too_small' => 'Tento súbor je príliš malý. Mal by mať aspoň :min',

    'incorrect_dimensions' => [
        'width' => 'Šírka obrázka musí byť :width pixelov',
        'height' => 'Výška obrázka musí byť :height pixelov',
        'both' => 'Rozmery obrázka musia byť :width x :height pixelov',
    ],

    'width_not_between' => 'Šírka obrázka musí byť medzi :min a :max pixelmi',
    'height_not_between' => 'Výška obrázka musí byť medzi :min a :max pixelmi',

    'max_items' => 'Môžete nahrať iba :max položku|Môžete nahrať iba :max položiek',
    'min_items' => 'Musíte nahrať aspoň :min položku|Musíte nahrať aspoň :min položiek',

    'extension' => 'Súbor musí byť typu :extensions',
    'mime' => 'Súbor musí mať MIME typ :mimes',
    'type' => 'Musíte nahrať súbor typu :values',

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
            'required' => 'Názov sekcie je povinný',
            'max' => 'Názov sekcie môže mať maximálne 100 znakov',
            'distinct' => 'Názov sekcie už existuje',
        ],
        'sections.*.fields.description' => [
            'required' => 'Obsah sekcie je povinný',
            'max' => 'Obsah sekcie môže mať maximálne 2000 znakov',
        ],
        'experiences.*.employer' => [
            'max' => 'Názov zamestnávateľa môže mať maximálne 100 znakov',
        ],
        'experiences.*.city' => [
            'max' => 'Názov mesta môže mať maximálne 100 znakov',
        ],
        'educations.*.school' => [
            'max' => 'Názov školy môže mať maximálne 100 znakov',
        ],
        'educations.*.city' => [
            'max' => 'Názov mesta môže mať maximálne 100 znakov',
        ],
        'educations.*.specialization' => [
            'max' => 'Názov špecializácie môže mať maximálne 100 znakov',
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
        'name'     => 'názov',
        'message'     => 'správa',
        'agree'     => 'súhlas',
        'captcha'     => 'kód',
        'subject'     => 'predmet',
    ],

];
