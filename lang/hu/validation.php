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

    "accepted" => "A(z) :attribute mezőt el kell fogadni.",
    "accepted_if" => "A(z) :attribute mezőt el kell fogadni, ha a(z) :other értéke :value.",
    "active_url" => "A(z) :attribute mező nem érvényes URL-cím.",
    "after" => "A(z) :attribute mezőnek :date utáni dátumnak kell lennie.",
    "after_or_equal" => "A(z) :attribute mezőnek :date dátumnál későbbinek vagy egyenlőnek kell lennie.",
    "alpha" => "A(z) :attribute mező csak betűket tartalmazhat.",
    "alpha_dash" => "A(z) :attribute mező csak betűket, számokat és kötőjeleket tartalmazhat.",
    "alpha_num" => "A(z) :attribute mező csak betűket és számokat tartalmazhat.",
    "array" => "A(z) :attribute mezőnek tömbnek kell lennie.",
    "ascii" => "A(z) :attribute mező csak egybájtos alfanumerikus karaktereket és szimbólumokat tartalmazhat.",
    "attached" => "A(z) :attribute mező már csatolva van.",
    "before" => "A(z) :attribute mezőnek :date előtti dátumnak kell lennie.",
    "before_or_equal" => "A(z) :attribute mezőnek :date dátumnál korábbinak vagy egyenlőnek kell lennie.",
    "between.array" => "A(z) :attribute mezőnek :min - :max elemet kell tartalmaznia.",
    "between.file" => "A(z) :attribute mező méretének :min - :max kilobájt között kell lennie.",
    "between.numeric" => "A(z) :attribute mező értékének :min - :max között kell lennie.",
    "between.string" => "A(z) :attribute mezőnek :min - :max karakter között kell lennie.",
    "boolean" => "A(z) :attribute mezőnek igaznak vagy hamisnak kell lennie.",
    "can" => "A(z) :attribute mező nem engedélyezett értéket tartalmaz.",
    "confirmed" => "A(z) :attribute mező megerősítése nem egyezik.",
    "contains" => "A(z) :attribute mező nem tartalmazza a kötelező elemet.",
    "current_password" => "A jelszó helytelen.",
    "date" => "A(z) :attribute mező nem érvényes dátum.",
    "date_equals" => "A(z) :attribute mezőnek :date-dal egyenlő dátumnak kell lennie.",
    "date_format" => "A(z) :attribute mező nem egyezik a(z) :format formátummal.",
    "decimal" => "A(z) :attribute mezőnek :decimal tizedesjegyből kell állnia.",
    "declined" => "A(z) :attribute mezőt el kell utasítani.",
    "declined_if" => "A(z) :attribute mezőt el kell utasítani, ha a(z) :other értéke :value.",
    "different" => "A(z) :attribute és :other mezőknek eltérőnek kell lenniük.",
    "digits" => "A(z) :attribute mezőnek :digits számjegyből kell állnia.",
    "digits_between" => "A(z) :attribute mező számjegyeinek száma :min és :max között kell legyen.",
    "dimensions" => "A(z) :attribute mező méretei nem megfelelőek.",
    "distinct" => "A(z) :attribute mező ismétlődő értékeket tartalmaz.",
    "doesnt_end_with" => "A(z) :attribute mező nem végződhet a következő értékek egyikével: :values.",
    "doesnt_start_with" => "A(z) :attribute mező nem kezdődhet a következő értékek egyikével: :values.",
    "email" => "A(z) :attribute mező nem érvényes e-mail cím.",
    "ends_with" => "A(z) :attribute mező a következő értékek egyikével kell végződjön: :values.",
    "enum" => "A(z) :attribute mező értéke érvénytelen.",
    "exists" => "A kiválasztott :attribute érvénytelen.",
    "extensions" => "A(z) :attribute mezőnek a következő kiterjesztések egyikével kell rendelkeznie: :values.",
    "failed" => "Hibás bejelentkezési név vagy jelszó.",
    "file" => "A(z) :attribute mezőnek fájlnak kell lennie.",
    "filled" => "A(z) :attribute mezőt ki kell tölteni.",
    "gt.array" => "A(z) :attribute mezőnek több mint :value elemet kell tartalmaznia.",
    "gt.file" => "A(z) :attribute mező méretének nagyobbnak kell lennie :value kilobájt nál.",
    "gt.numeric" => "A(z) :attribute mező értékének nagyobbnak kell lennie :value nál.",
    "gt.string" => "A(z) :attribute mezőnek hosszabbnak kell lennie :value karakternél.",
    "gte.array" => "A(z) :attribute mezőnek :value vagy több elemet kell tartalmaznia.",
    "gte.file" => "A(z) :attribute mező méretének nagyobbnak vagy egyenlőnek kell lennie :value kilobájttal.",
    "gte.numeric" => "A(z) :attribute mező értékének nagyobbnak vagy egyenlőnek kell lennie :value nál.",
    "gte.string" => "A(z) :attribute mezőnek hosszabbnak vagy egyenlőnek kell lennie :value karakternél.",
    "hex_color" => "A(z) :attribute mezőnek érvényes hexadecimális színnek kell lennie.",
    "image" => "A(z) :attribute mezőnek képnek kell lennie.",
    "in" => "A kiválasztott :attribute érvénytelen.",
    "in_array" => "A(z) :attribute mező nem található a(z) :other mezőben.",
    "integer" => "A(z) :attribute mezőnek egész számnak kell lennie.",
    "ip" => "A(z) :attribute mezőnek érvényes IP-címnek kell lennie.",
    "ipv4" => "A(z) :attribute mezőnek érvényes IPv4-címnek kell lennie.",
    "ipv6" => "A(z) :attribute mezőnek érvényes IPv6-címnek kell lennie.",
    "json" => "A(z) :attribute mezőnek érvényes JSON sztringnek kell lennie.",
    "list" => "A(z) :attribute mezőnek listának kell lennie.",
    "lowercase" => "A(z) :attribute mezőnek kisbetűsnek kell lennie.",
    "lt.array" => "A(z) :attribute mezőnek kevesebb mint :value elemet kell tartalmaznia.",
    "lt.file" => "A(z) :attribute mező méretének kisebbnek kell lennie :value kilobájt nál.",
    "lt.numeric" => "A(z) :attribute mező értékének kisebbnek kell lennie :value nál.",
    "lt.string" => "A(z) :attribute mezőnek rövidebbnek kell lennie :value karakternél.",
    "lte.array" => "A(z) :attribute mezőnek :value vagy kevesebb elemet kell tartalmaznia.",
    "lte.file" => "A(z) :attribute mező méretének kisebbnek vagy egyenlőnek kell lennie :value kilobájttal.",
    "lte.numeric" => "A(z) :attribute mező értékének kisebbnek vagy egyenlőnek kell lennie :value nál.",
    "lte.string" => "A(z) :attribute mezőnek rövidebbnek vagy egyenlőnek kell lennie :value karakternél.",
    "mac_address" => "A(z) :attribute mezőnek érvényes MAC-címnek kell lennie.",
    "max.array" => "A(z) :attribute mező nem tartalmazhat több mint :max elemet.",
    "max.file" => "A(z) :attribute mező nem lehet nagyobb :max kilobájt nál.",
    "max.numeric" => "A(z) :attribute mező nem lehet nagyobb :max nál.",
    "max.string" => "A(z) :attribute mező nem lehet hosszabb :max karakternél.",
    "max_digits" => "A(z) :attribute mező nem tartalmazhat több mint :max számjegyet.",
    "mimes" => "A(z) :attribute mezőnek a következő típusú fájlnak kell lennie: :values.",
    "mimetypes" => "A(z) :attribute mezőnek a következő típusú fájlnak kell lennie: :values.",
    "min.array" => "A(z) :attribute mezőnek legalább :min elemet kell tartalmaznia.",
    "min.file" => "A(z) :attribute mezőnek legalább :min kilobájt méretűnek kell lennie.",
    "min.numeric" => "A(z) :attribute mező értékének legalább :min kell lennie.",
    "min.string" => "A(z) :attribute mezőnek legalább :min karakterből kell állnia.",
    "min_digits" => "A(z) :attribute mezőnek legalább :min számjegyből kell állnia.",
    "missing" => "A(z) :attribute mezőnek hiányoznia kell.",
    "missing_if" => "Ha a(z) :other értéke :value, akkor a(z) :attribute mezőnek hiányoznia kell.",
    "missing_unless" => "A(z) :attribute mezőnek hiányoznia kell, kivéve, ha a(z) :other értéke :value.",
    "missing_with" => "Ha a(z) :values érték jelen van, akkor a(z) :attribute mezőnek hiányoznia kell.",
    "missing_with_all" => "Ha a(z) :values értékek jelen vannak, akkor a(z) :attribute mezőnek hiányoznia kell.",
    "multiple_of" => "A(z) :attribute mezőnek a(z) :value többszörösének kell lennie.",
    "next" => "Következő &raquo;",
    "not_in" => "A kiválasztott :attribute érvénytelen.",
    "not_regex" => "A(z) :attribute mező formátuma érvénytelen.",
    "numeric" => "A(z) :attribute mezőnek számnak kell lennie.",
    "password" => "A jelszó helytelen.",
    "password.letters" => "A(z) :attribute mezőnek legalább egy betűt kell tartalmaznia.",
    "password.mixed" => "A(z) :attribute mezőnek legalább egy nagy- és egy kisbetűt kell tartalmaznia.",
    "password.numbers" => "A(z) :attribute mezőnek legalább egy számot kell tartalmaznia.",
    "password.symbols" => "A(z) :attribute mezőnek legalább egy szimbólumot kell tartalmaznia.",
    "password.uncompromised" => "A megadott :attribute szerepel egy adatszivárgásban. Kérjük, válasszon másik :attribute értéket.",
    "present" => "A(z) :attribute mezőnek jelen kell lennie.",
    "present_if" => "A(z) :attribute mezőnek jelen kell lennie, ha a(z) :other értéke :value.",
    "present_unless" => "A(z) :attribute mezőnek jelen kell lennie, kivéve, ha a(z) :other értéke :value.",
    "present_with" => "A(z) :attribute mezőnek jelen kell lennie, ha a(z) :values érték meg van adva.",
    "present_with_all" => "A(z) :attribute mezőnek jelen kell lennie, ha a(z) :values értékek meg vannak adva.",
    "previous" => "&laquo; Előző",
    "prohibited" => "A(z) :attribute mező tilos.",
    "prohibited_if" => "A(z) :attribute mező tilos, ha a(z) :other értéke :value.",
    "prohibited_unless" => "A(z) :attribute mező tilos, kivéve, ha a(z) :other értéke :values.",
    "prohibits" => "A(z) :attribute mező kizárja a(z) :other jelenlétét.",
    "regex" => "A(z) :attribute mező formátuma érvénytelen.",
    "relatable" => "A(z) :attribute mező nem hozható kapcsolatba ezzel az erőforrással.",
    "required" => "A(z) :attribute mező kitöltése kötelező.",
    "required_array_keys" => "A(z) :attribute mezőnek tartalmaznia kell a következő értékeket: :values.",
    "required_if" => "A(z) :attribute mező kitöltése kötelező, ha a(z) :other értéke :value.",
    "required_if_accepted" => "A(z) :attribute mező kitöltése kötelező, ha a(z) :other el van fogadva.",
    "required_if_declined" => "A(z) :attribute mező kitöltése kötelező, ha a(z) :other el van utasítva.",
    "required_unless" => "A(z) :attribute mező kitöltése kötelező, kivéve, ha a(z) :other értéke :values.",
    "required_with" => "A(z) :attribute mező kitöltése kötelező, ha a(z) :values érték jelen van.",
    "required_with_all" => "A(z) :attribute mező kitöltése kötelező, ha a(z) :values értékek mind jelen vannak.",
    "required_without" => "A(z) :attribute mező kitöltése kötelező, ha a(z) :values érték nem jelen van.",
    "required_without_all" => "A(z) :attribute mező kitöltése kötelező, ha a(z) :values értékek egyike sem jelen van.",
    "reset" => "A jelszó visszaállítása megtörtént!",
    "same" => "A(z) :attribute és :other mezőknek egyeznie kell.",
    "sent" => "A jelszó-emlékeztető elküldésre került!",
    "size.array" => "A(z) :attribute mezőnek :size elemet kell tartalmaznia.",
    "size.file" => "A(z) :attribute mező méretének :size kilobájt kell lennie.",
    "size.numeric" => "A(z) :attribute mező értékének :size kell lennie.",
    "size.string" => "A(z) :attribute mezőnek :size karakterből kell állnia.",
    "starts_with" => "A(z) :attribute mező a következő értékek egyikével kell kezdődjön: :values.",
    "string" => "A(z) :attribute mezőnek sztringnek kell lennie.",
    "throttle" => "Túl sok sikertelen bejelentkezési kísérlet. Kérjük, próbálja újra :seconds másodperc múlva.",
    "throttled" => "Kérjük, várjon, mielőtt újra próbálkozna.",
    "timezone" => "A(z) :attribute mezőnek érvényes időzónának kell lennie.",
    "token" => "A jelszó visszaállításához tartozó token érvénytelen.",
    "ulid" => "A(z) :attribute mezőnek érvényes ULID-nek kell lennie.",
    "unique" => "A(z) :attribute már foglalt.",
    "uploaded" => "A(z) :attribute fájlt nem sikerült feltölteni.",
    "uppercase" => "A(z) :attribute mezőnek nagybetűsnek kell lennie.",
    "url" => "A(z) :attribute mező formátuma érvénytelen.",
    "user" => "Nem található felhasználó a megadott e-mail címmel.",
    "uuid" => "A(z) :attribute mezőnek érvényes UUID-nek kell lennie.",

    'total_upload_size_too_high' => 'A megengedett maximális összméret :max',
    'total_upload_size_too_low' => 'A megengedett minimális összméret :min',

    'file_too_big' => 'Ez a fájl túl nagy. A megengedett maximális méret :max',
    'file_too_small' => 'Ez a fájl túl kicsi. A minimális méret legalább :min',

    'incorrect_dimensions' => [
        'width' => 'A kép szélességének :width pixelnek kell lennie',
        'height' => 'A kép magasságának :height pixelnek kell lennie',
        'both' => 'A kép méreteinek :width x :height pixelnek kell lennie',
    ],

    'width_not_between' => 'A kép szélességének :min és :max pixel között kell lennie',
    'height_not_between' => 'A kép magasságának :min és :max pixel között kell lennie',

    'max_items' => 'Csak :max elemet tölthet fel',
    'min_items' => 'Legalább :min elemet fel kell töltenie',

    'extension' => 'A fájlnak :extensions típusúnak kell lennie',
    'mime' => 'A fájl MIME típusának :mimes kell lennie',
    'type' => 'Fel kell töltenie egy :values típusú fájlt',

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
            'required' => 'A szakasz címe kötelező',
            'max' => 'A szakasz címe legfeljebb 100 karaktert tartalmazhat',
            'distinct' => 'A szakasz címe már létezik',
        ],
        'sections.*.fields.description' => [
            'required' => 'A szakasz tartalma kötelező',
            'max' => 'A szakasz címe legfeljebb 2000 karaktert tartalmazhat',
        ],
        'experiences.*.employer' => [
            'max' => 'A munkáltató neve legfeljebb 100 karaktert tartalmazhat',
        ],
        'experiences.*.city' => [
            'max' => 'A város neve legfeljebb 100 karaktert tartalmazhat',
        ],
        'educations.*.school' => [
            'max' => 'Az iskola neve legfeljebb 100 karaktert tartalmazhat',
        ],
        'educations.*.city' => [
            'max' => 'A város neve legfeljebb 100 karaktert tartalmazhat',
        ],
        'educations.*.specialization' => [
            'max' => 'A specializáció neve legfeljebb 100 karaktert tartalmazhat',
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
        'email'    => 'e-mail cím',
        'password' => 'jelszó',
        'name'     => 'név',
        'message'     => 'üzenet',
        'agree'     => 'hozzájárulás',
        'captcha'     => 'kód',
        'subject'     => 'tárgy',
    ],

];

