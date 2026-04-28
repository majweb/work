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

    "accepted"=>"El camp :attribute ha de ser acceptat.",
    "accepted_if"=>"El camp :attribute ha de ser acceptat quan :other tingui el valor :value.",
    "active_url"=>"El camp :attribute no és una URL vàlida.",
    "after"=>"El camp :attribute ha de ser una data posterior a :date.",
    "after_or_equal"=>"El camp :attribute ha de ser una data igual o posterior a :date.",
    "alpha"=>"El camp :attribute només pot contenir lletres.",
    "alpha_dash"=>"El camp :attribute només pot contenir lletres, números i guions.",
    "alpha_num"=>"El camp :attribute només pot contenir lletres i números.",
    "array"=>"El camp :attribute ha de ser un array.",
    "ascii"=>"El camp :attribute només pot contenir caràcters alfanumèrics d’un byte i símbols.",
    "attached"=>"El camp :attribute ja està adjuntat.",
    "before"=>"El camp :attribute ha de ser una data anterior a :date.",
    "before_or_equal"=>"El camp :attribute ha de ser una data igual o anterior a :date.",
    "between.array"=>"El camp :attribute ha de tenir entre :min i :max elements.",
    "between.file"=>"El camp :attribute ha d’estar entre :min i :max kilobytes.",
    "between.numeric"=>"El camp :attribute ha d’estar entre :min i :max.",
    "between.string"=>"El camp :attribute ha de tenir entre :min i :max caràcters.",
    "boolean"=>"El camp :attribute ha de ser cert o fals.",
    "can"=>"El camp :attribute conté un valor no autoritzat.",
    "confirmed"=>"La confirmació de :attribute no coincideix.",
    "contains"=>"El camp :attribute no conté el valor requerit.",
    "current_password"=>"La contrasenya no és correcta.",
    "date"=>"El camp :attribute no és una data vàlida.",
    "date_equals"=>"El camp :attribute ha de ser una data igual a :date.",
    "date_format"=>"El camp :attribute no coincideix amb el format :format.",
    "decimal"=>"El camp :attribute ha de tenir :decimal decimals.",
    "declined"=>"El camp :attribute ha de ser rebutjat.",
    "declined_if"=>"El camp :attribute ha de ser rebutjat quan :other tingui el valor :value.",
    "different"=>"Els camps :attribute i :other han de ser diferents.",
    "digits"=>"El camp :attribute ha de tenir :digits dígits.",
    "digits_between"=>"El camp :attribute ha de tenir entre :min i :max dígits.",
    "dimensions"=>"El camp :attribute té dimensions no vàlides.",
    "distinct"=>"El camp :attribute conté valors duplicats.",
    "doesnt_end_with"=>"El camp :attribute no pot acabar amb cap dels següents valors: :values.",
    "doesnt_start_with"=>"El camp :attribute no pot començar amb cap dels següents valors: :values.",
    "email"=> "El camp :attribute no és un correu electrònic vàlid.",
    "ends_with"=>"El camp :attribute ha d’acabar amb un dels següents valors: :values.",
    "enum"=> "El camp :attribute té un valor no vàlid.",
    "exists"=> "El camp seleccionat :attribute no és vàlid.",
    "extensions"=> "El camp :attribute ha de tenir una de les següents extensions: :values.",
    "failed"=>"Credencials incorrectes.",
    "file"=>"El camp :attribute ha de ser un fitxer.",
    "filled"=>"El camp :attribute ha d’estar omplert.",
    "gt.array"=>"El camp :attribute ha de tenir més de :value elements.",
    "gt.file"=>"El camp :attribute ha de ser més gran que :value kilobytes.",
    "gt.numeric"=>"El camp :attribute ha de ser més gran que :value.",
    "gt.string"=>"El camp :attribute ha de tenir més de :value caràcters.",
    "gte.array"=>"El camp :attribute ha de tenir :value o més elements.",
    "gte.file"=>"El camp :attribute ha de ser més gran o igual a :value kilobytes.",
    "gte.numeric"=>"El camp :attribute ha de ser més gran o igual a :value.",
    "gte.string"=>"El camp :attribute ha de tenir :value o més caràcters.",
    "hex_color"=>"El camp :attribute ha de ser un color hexadecimal vàlid.",
    "image"=>"El camp :attribute ha de ser una imatge.",
    "in"=>"El valor seleccionat de :attribute no és vàlid.",
    "in_array"=>"El camp :attribute no existeix a :other.",
    "integer"=>"El camp :attribute ha de ser un enter.",
    "ip"=>"El camp :attribute ha de ser una adreça IP vàlida.",
    "ipv4"=>"El camp :attribute ha de ser una adreça IPv4 vàlida.",
    "ipv6"=>"El camp :attribute ha de ser una adreça IPv6 vàlida.",
    "json"=>"El camp :attribute ha de ser una cadena JSON vàlida.",
    "list"=>"El camp :attribute ha de ser una llista.",
    "lowercase"=>":Attribute ha d’estar en minúscules.",
    "lt.array"=>"El camp :attribute ha de tenir menys de :value elements.",
    "lt.file"=>"El camp :attribute ha de ser més petit que :value kilobytes.",
    "lt.numeric"=>"El camp :attribute ha de ser més petit que :value.",
    "lt.string"=>"El camp :attribute ha de tenir menys de :value caràcters.",
    "lte.array"=>"El camp :attribute ha de tenir :value o menys elements.",
    "lte.file"=>"El camp :attribute ha de ser més petit o igual a :value kilobytes.",
    "lte.numeric"=>"El camp :attribute ha de ser més petit o igual a :value.",
    "lte.string"=>"El camp :attribute ha de tenir :value o menys caràcters.",
    "mac_address"=>"El camp :attribute ha de ser una adreça MAC vàlida.",
    "max.array"=>"El camp :attribute no pot tenir més de :max elements.",
    "max.file"=>"El camp :attribute no pot ser més gran que :max kilobytes.",
    "max.numeric"=>"El camp :attribute no pot ser més gran que :max.",
    "max.string"=>"El camp :attribute no pot tenir més de :max caràcters.",
    "max_digits"=>"El camp :attribute no pot tenir més de :max dígits.",
    "mimes"=>"El camp :attribute ha de ser un fitxer de tipus :values.",
    "mimetypes"=>"El camp :attribute ha de ser un fitxer de tipus :values.",
    "min.array"=>"El camp :attribute ha de tenir almenys :min elements.",
    "min.file"=>"El camp :attribute ha de tenir almenys :min kilobytes.",
    "min.numeric"=>"El camp :attribute ha de ser com a mínim :min.",
    "min.string"=>"El camp :attribute ha de tenir almenys :min caràcters.",
    "min_digits"=>"El camp :attribute ha de tenir almenys :min dígits.",
    "missing"=>"El camp :attribute no ha d’estar present.",
    "missing_if"=>"El camp :attribute no ha d’estar present quan :other és :value.",
    "missing_unless"=>"El camp :attribute no ha d’estar present excepte si :other és :value.",
    "missing_with"=>"El camp :attribute no ha d’estar present quan :values és present.",
    "missing_with_all"=>"El camp :attribute no ha d’estar present quan :values són presents.",
    "multiple_of"=>"El camp :attribute ha de ser múltiple de :value",
    "next"=>"Següent &raquo;",
    "not_in"=>"El valor seleccionat de :attribute no és vàlid.",
    "not_regex"=>"El format del camp :attribute no és vàlid.",
    "numeric"=>"El camp :attribute ha de ser numèric.",
    "password"=>"La contrasenya no és correcta.",
    "password.letters"=>"El camp :attribute ha de contenir almenys una lletra.",
    "password.mixed"=>"El camp :attribute ha de contenir almenys una majúscula i una minúscula.",
    "password.numbers"=>"El camp :attribute ha de contenir almenys un número.",
    "password.symbols"=>"El camp :attribute ha de contenir almenys un símbol.",
    "password.uncompromised"=>"El :attribute proporcionat ha aparegut en una filtració de dades. Trieu un altre valor.",
    "present"=>"El camp :attribute ha d’estar present.",
    "present_if"=>"El camp :attribute ha d’estar present quan :other és :value.",
    "present_unless"=>"El camp :attribute ha d’estar present excepte si :other és :value.",
    "present_with"=>"El camp :attribute ha d’estar present quan :values és present.",
    "present_with_all"=>"El camp :attribute ha d’estar present quan :values són presents.",
    "previous"=>"&laquo; Anterior",
    "prohibited"=>"El camp :attribute està prohibit.",
    "prohibited_if"=>"El camp :attribute està prohibit quan :other és :value.",
    "prohibited_unless"=>"El camp :attribute està prohibit excepte si :other és dins de :values.",
    "prohibits"=>"El camp :attribute impedeix la presència de :other.",
    "regex"=>"El format del camp :attribute no és vàlid.",
    "relatable"=>"El camp :attribute no es pot associar amb aquest recurs.",
    "required"=>"El camp :attribute és obligatori.",
    "required_array_keys"=>"El camp :attribute ha de contenir els valors: :values.",
    "required_if"=>"El camp :attribute és obligatori quan :other és :value.",
    "required_if_accepted"=>"Aquest camp és obligatori quan :other és acceptat.",
    "required_if_declined"=>"El camp :attribute és obligatori quan :other és rebutjat.",
    "required_unless"=>"El camp :attribute és obligatori excepte si :other és dins de :values.",
    "required_with"=>"El camp :attribute és obligatori quan :values és present.",
    "required_with_all"=>"El camp :attribute és obligatori quan tots els valors :values són presents.",
    "required_without"=>"El camp :attribute és obligatori quan :values no és present.",
    "required_without_all"=>"El camp :attribute és obligatori quan cap dels valors :values és present.",
    "reset"=>"La contrasenya s’ha restablert!",
    "same"=>"Els camps :attribute i :other han de coincidir.",
    "sent"=>"S’ha enviat el recordatori de contrasenya!",
    "size.array"=>"El camp :attribute ha de contenir :size elements.",
    "size.file"=>"El camp :attribute ha de tenir :size kilobytes.",
    "size.numeric"=>"El camp :attribute ha de ser :size.",
    "size.string"=>"El camp :attribute ha de tenir :size caràcters.",
    "starts_with"=>"El camp :attribute ha de començar amb un dels següents valors: :values.",
    "string"=>"El camp :attribute ha de ser una cadena de text.",
    "throttle"=>"Massa intents fallits. Torna-ho a provar en :seconds segons.",
    "throttled"=>"Si us plau, espera abans de tornar-ho a intentar.",
    "timezone"=>"El camp :attribute ha de ser una zona horària vàlida.",
    "token"=>"El token de restabliment de contrasenya no és vàlid.",
    "ulid"=>"El camp :attribute ha de ser un ULID vàlid.",
    "unique"=>"Aquest :attribute ja existeix.",
    "uploaded"=>"No s’ha pogut pujar el fitxer :attribute.",
    "uppercase"=>":Attribute ha d’estar en majúscules.",
    "url"=>"El format del camp :attribute no és vàlid.",
    "user"=>"No s’ha trobat cap usuari amb aquest correu electrònic.",
    "uuid"=>"El camp :attribute ha de ser un UUID vàlid.",

    'total_upload_size_too_high' => 'La mida total màxima permesa és :max',
    'total_upload_size_too_low' => 'La mida total mínima permesa és :min',

    'file_too_big' => 'Aquest fitxer és massa gran. Mida màxima: :max',
    'file_too_small' => 'Aquest fitxer és massa petit. Ha de ser com a mínim :min',

    'incorrect_dimensions' => [
        'width' => 'L’amplada de la imatge ha de ser de :width píxels',
        'height' => 'L’alçada de la imatge ha de ser de :height píxels',
        'both' => 'Les dimensions de la imatge han de ser :width x :height píxels',
    ],

    'width_not_between' => 'L’amplada de la imatge ha d’estar entre :min i :max píxels',
    'height_not_between' => 'L’alçada de la imatge ha d’estar entre :min i :max píxels',

    'max_items' => 'Només pots pujar :max element|Només pots pujar :max elements',
    'min_items' => 'Has de pujar almenys :min element|Has de pujar almenys :min elements',

    'extension' => 'El fitxer ha de ser del tipus :extensions',
    'mime' => 'El fitxer ha de tenir el tipus MIME :mimes',
    'type' => 'Has de pujar un fitxer del tipus :values',

    /*
   |--------------------------------------------------------------------------
    | Custom Validation Language Lines
   |--------------------------------------------------------------------------
    */

    'custom' => [
        'sections.*.fields.title' => [
            'required' => 'El títol de la secció és obligatori',
            'max' => 'El títol de la secció ha de tenir com a màxim 100 caràcters',
            'distinct' => 'Aquest títol de secció ja existeix',
        ],
        'sections.*.fields.description' => [
            'required' => 'El contingut de la secció és obligatori',
            'max' => 'La descripció de la secció ha de tenir com a màxim 2000 caràcters',
        ],
        'experiences.*.employer' => [
            'max' => 'El nom de l’empresa ha de tenir com a màxim 100 caràcters',
        ],
        'experiences.*.city' => [
            'max' => 'El nom de la ciutat ha de tenir com a màxim 100 caràcters',
        ],
        'educations.*.school' => [
            'max' => 'El nom de l’escola ha de tenir com a màxim 100 caràcters',
        ],
        'educations.*.city' => [
            'max' => 'El nom de la ciutat ha de tenir com a màxim 100 caràcters',
        ],
        'educations.*.specialization' => [
            'max' => 'El nom de l’especialització ha de tenir com a màxim 100 caràcters',
        ],
    ],

    /*
   |--------------------------------------------------------------------------
    | Custom Validation Attributes
   |--------------------------------------------------------------------------
    */

    'attributes' => [
        'email'    => 'correu electrònic',
        'password' => 'contrasenya',
        'name'     => 'nom',
        'message'  => 'missatge',
        'agree'    => 'consentiment',
        'captcha'  => 'codi',
        'subject'  => 'assumpte',
    ],

];
