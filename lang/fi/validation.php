<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Seuraavat kielirivit sisältävät oletusvirheilmoitukset, joita
    | validaattoriluokka käyttää. Joillakin näistä säännöistä on useita versioita,
    | kuten kokosäännöt. Voit vapaasti muokata näitä viestejä täällä.
    |
    */

    "accepted" => "Kenttä :attribute on hyväksyttävä.",
    "accepted_if" => "Kenttä :attribute on hyväksyttävä, kun :other on :value.",
    "active_url" => "Kenttä :attribute ei ole kelvollinen URL-osoite.",
    "after" => "Kentän :attribute on oltava päivämäärä päivämäärän :date jälkeen.",
    "after_or_equal" => "Kentän :attribute on oltava päivämäärä, joka on sama tai myöhempi kuin :date.",
    "alpha" => "Kenttä :attribute saa sisältää vain kirjaimia.",
    "alpha_dash" => "Kenttä :attribute saa sisältää vain kirjaimia, numeroita, viivoja ja alaviivoja.",
    "alpha_num" => "Kenttä :attribute saa sisältää vain kirjaimia ja numeroita.",
    "array" => "Kentän :attribute on oltava taulukko.",
    "ascii" => "Kenttä :attribute saa sisältää vain yksitavuisia aakkosnumeerisia merkkejä ja symboleja.",
    "attached" => "Kenttä :attribute on jo liitetty.",
    "before" => "Kentän :attribute on oltava päivämäärä ennen päivämäärää :date.",
    "before_or_equal" => "Kentän :attribute on oltava päivämäärä, joka on sama tai aikaisempi kuin :date.",
    "between.array" => "Kentän :attribute on oltava :min - :max elementtiä.",
    "between.file" => "Kentän :attribute on oltava :min - :max kilotavua.",
    "between.numeric" => "Kentän :attribute on oltava välillä :min - :max.",
    "between.string" => "Kentän :attribute on oltava :min - :max merkkiä pitkä.",
    "boolean" => "Kentän :attribute on oltava tosi tai epätosi.",
    "can" => "Kenttä :attribute sisältää luvattoman arvon.",
    "confirmed" => "Kentän :attribute vahvistus ei täsmää.",
    "contains" => "Kentästä :attribute puuttuu vaadittu arvo.",
    "current_password" => "Salasana on virheellinen.",
    "date" => "Kenttä :attribute ei ole kelvollinen päivämäärä.",
    "date_equals" => "Kentän :attribute on oltava sama päivämäärä kuin :date.",
    "date_format" => "Kenttä :attribute ei vastaa muotoa :format.",
    "decimal" => "Kentässä :attribute on oltava :decimal desimaalia.",
    "declined" => "Kenttä :attribute on hylättävä.",
    "declined_if" => "Kenttä :attribute on hylättävä, kun :other on :value.",
    "different" => "Kentän :attribute ja :other on oltava erilaisia.",
    "digits" => "Kentän :attribute on oltava :digits numeroa.",
    "digits_between" => "Kentän :attribute on oltava :min - :max numeroa.",
    "dimensions" => "Kentän :attribute kuvalla on virheelliset mitat.",
    "distinct" => "Kentällä :attribute on kaksoisarvo.",
    "doesnt_end_with" => "Kenttä :attribute ei saa päättyä johonkin seuraavista: :values.",
    "doesnt_start_with" => "Kenttä :attribute ei saa alkaa johonkin seuraavista: :values.",
    "email" => "Kentän :attribute on oltava kelvollinen sähköpostiosoite.",
    "ends_with" => "Kentän :attribute on päätyttävä johonkin seuraavista: :values.",
    "enum" => "Valittu :attribute on virheellinen.",
    "exists" => "Valittu kenttä :attribute on virheellinen.",
    "extensions" => "Kentän :attribute on oltava jokin seuraavista tiedostopäätteistä: :values.",
    "failed" => "Virheellinen sähköpostiosoite tai salasana.",
    "file" => "Kentän :attribute on oltava tiedosto.",
    "filled" => "Kenttä :attribute on pakollinen.",
    "gt.array" => "Kentässä :attribute on oltava enemmän kuin :value elementtiä.",
    "gt.file" => "Kentän :attribute on oltava suurempi kuin :value kilotavua.",
    "gt.numeric" => "Kentän :attribute on oltava suurempi kuin :value.",
    "gt.string" => "Kentän :attribute on oltava pidempi kuin :value merkkiä.",
    "gte.array" => "Kentässä :attribute on oltava vähintään :value elementtiä.",
    "gte.file" => "Kentän :attribute on oltava vähintään :value kilotavua.",
    "gte.numeric" => "Kentän :attribute on oltava vähintään :value.",
    "gte.string" => "Kentän :attribute on oltava vähintään :value merkkiä.",
    "hex_color" => "Kentän :attribute on oltava kelvollinen heksadesimaaliväri.",
    "image" => "Kentän :attribute on oltava kuva.",
    "in" => "Valittu kenttä :attribute on virheellinen.",
    "in_array" => "Kenttää :attribute ei löydy kentästä :other.",
    "integer" => "Kentän :attribute on oltava kokonaisluku.",
    "ip" => "Kentän :attribute on oltava kelvollinen IP-osoite.",
    "ipv4" => "Kentän :attribute on oltava kelvollinen IPv4-osoite.",
    "ipv6" => "Kentän :attribute on oltava kelvollinen IPv6-osoite.",
    "json" => "Kentän :attribute on oltava kelvollinen JSON-merkkijono.",
    "list" => "Kentän :attribute on oltava lista.",
    "lowercase" => "Kentän :attribute on oltava pienillä kirjaimilla.",
    "lt.array" => "Kentässä :attribute on oltava vähemmän kuin :value elementtiä.",
    "lt.file" => "Kentän :attribute on oltava pienempi kuin :value kilotavua.",
    "lt.numeric" => "Kentän :attribute on oltava pienempi kuin :value.",
    "lt.string" => "Kentän :attribute on oltava lyhyempi kuin :value merkkiä.",
    "lte.array" => "Kentässä :attribute ei saa olla enempää kuin :value elementtiä.",
    "lte.file" => "Kentän :attribute on oltava enintään :value kilotavua.",
    "lte.numeric" => "Kentän :attribute on oltava enintään :value.",
    "lte.string" => "Kentän :attribute on oltava enintään :value merkkiä.",
    "mac_address" => "Kentän :attribute on oltava kelvollinen MAC-osoite.",
    "max.array" => "Kentässä :attribute ei saa olla enempää kuin :max elementtiä.",
    "max.file" => "Kenttä :attribute ei saa olla suurempi kuin :max kilotavua.",
    "max.numeric" => "Kenttä :attribute ei saa olla suurempi kuin :max.",
    "max.string" => "Kenttä :attribute ei saa olla pidempi kuin :max merkkiä.",
    "max_digits" => "Kentässä :attribute ei saa olla enempää kuin :max numeroa.",
    "mimes" => "Kentän :attribute on oltava tiedostotyyppiä: :values.",
    "mimetypes" => "Kentän :attribute on oltava tiedostotyyppiä: :values.",
    "min.array" => "Kentässä :attribute on oltava vähintään :min elementtiä.",
    "min.file" => "Kentän :attribute on oltava vähintään :min kilotavua.",
    "min.numeric" => "Kentän :attribute on oltava vähintään :min.",
    "min.string" => "Kentän :attribute on oltava vähintään :min merkkiä.",
    "min_digits" => "Kentässä :attribute on oltava vähintään :min numeroa.",
    "missing" => "Kentän :attribute on puututtava.",
    "missing_if" => "Kentän :attribute on puututtava, kun :other on :value.",
    "missing_unless" => "Kentän :attribute on puututtava, ellei :other ole :value.",
    "missing_with" => "Kentän :attribute on puututtava, kun :values on läsnä.",
    "missing_with_all" => "Kentän :attribute on puututtava, kun :values ovat läsnä.",
    "multiple_of" => "Kentän :attribute on oltava luvun :value kerrannainen.",
    "next" => "Seuraava &raquo;",
    "not_in" => "Valittu :attribute on virheellinen.",
    "not_regex" => "Kentän :attribute muoto on virheellinen.",
    "numeric" => "Kentän :attribute on oltava numero.",
    "password" => "Salasana on virheellinen.",
    "password.letters" => "Kentän :attribute on sisällettävä vähintään yksi kirjain.",
    "password.mixed" => "Kentän :attribute on sisällettävä vähintään yksi iso ja yksi pieni kirjain.",
    "password.numbers" => "Kentän :attribute on sisällettävä vähintään yksi numero.",
    "password.symbols" => "Kentän :attribute on sisällettävä vähintään yksi symboli.",
    "password.uncompromised" => "Annettu :attribute on paljastunut tietovuodossa. Valitse toinen :attribute.",
    "present" => "Kentän :attribute on oltava läsnä.",
    "present_if" => "Kentän :attribute on oltava läsnä, kun :other on :value.",
    "present_unless" => "Kentän :attribute on oltava läsnä, ellei :other ole :value.",
    "present_with" => "Kentän :attribute on oltava läsnä, kun :values on annettu.",
    "present_with_all" => "Kentän :attribute on oltava läsnä, kun :values on annettu.",
    "previous" => "&laquo; Edellinen",
    "prohibited" => "Kenttä :attribute on kielletty.",
    "prohibited_if" => "Kenttä :attribute on kielletty, kun :other on :value.",
    "prohibited_unless" => "Kenttä :attribute on kielletty, ellei :other ole :values.",
    "prohibits" => "Kenttä :attribute estää kentän :other läsnäolon.",
    "regex" => "Kentän :attribute muoto on virheellinen.",
    "relatable" => "Kenttää :attribute ei voi yhdistää tähän resurssiin.",
    "required" => "Kenttä :attribute on pakollinen.",
    "required_array_keys" => "Kentän :attribute on sisällettävä arvot: :values.",
    "required_if" => "Kenttä :attribute on pakollinen, kun :other on :value.",
    "required_if_accepted" => "Tämä kenttä on pakollinen, kun :other on hyväksytty.",
    "required_if_declined" => "Kenttä :attribute on pakollinen, kun :other on hylätty.",
    "required_unless" => "Kenttä :attribute on pakollinen, ellei :other ole :values.",
    "required_with" => "Kenttä :attribute on pakollinen, kun :values on läsnä.",
    "required_with_all" => "Kenttä :attribute on pakollinen, kun kaikki :values ovat läsnä.",
    "required_without" => "Kenttä :attribute on pakollinen, kun :values ei ole läsnä.",
    "required_without_all" => "Kenttä :attribute on pakollinen, kun mikään :values ei ole läsnä.",
    "reset" => "Salasana on nollattu!",
    "same" => "Kenttien :attribute ja :other on oltava samat.",
    "sent" => "Salasanan palautuslinkki on lähetetty!",
    "size.array" => "Kentän :attribute on sisällettävä :size elementtiä.",
    "size.file" => "Kentän :attribute on oltava :size kilotavua.",
    "size.numeric" => "Kentän :attribute on oltava :size.",
    "size.string" => "Kentän :attribute on oltava :size merkkiä pitkä.",
    "starts_with" => "Kentän :attribute on alettava jollakin seuraavista: :values.",
    "string" => "Kentän :attribute on oltava merkkijono.",
    "throttle" => "Liian monta kirjautumisyritystä. Yritä uudelleen :seconds sekunnin kuluttua.",
    "throttled" => "Odota hetki ennen kuin yrität uudelleen.",
    "timezone" => "Kentän :attribute on oltava kelvollinen aikavyöhyke.",
    "token" => "Salasanan palautustunnus on virheellinen.",
    "ulid" => "Kentän :attribute on oltava kelvollinen ULID.",
    "unique" => "Tämä :attribute on jo käytössä.",
    "uploaded" => "Kentän :attribute lataaminen epäonnistui.",
    "uppercase" => "Kentän :attribute on oltava isoilla kirjaimilla.",
    "url" => "Kentän :attribute muoto on virheellinen.",
    "user" => "Sähköpostiosoitteella ei löydy käyttäjää.",
    "uuid" => "Kentän :attribute on oltava kelvollinen UUID.",

    'total_upload_size_too_high' => 'Suurin sallittu kokonaiskoko on :max',
    'total_upload_size_too_low' => 'Pienin sallittu kokonaiskoko on :min',

    'file_too_big' => 'Tämä tiedosto on liian suuri. Suurin sallittu koko on :max',
    'file_too_small' => 'Tämä tiedosto on liian pieni. Sen on oltava vähintään :min',

    'incorrect_dimensions' => [
        'width' => 'Kuvan leveyden on oltava :width pikseliä',
        'height' => 'Kuvan korkeuden on oltava :height pikseliä',
        'both' => 'Kuvan mittojen on oltava :width x :height pikseliä',
    ],

    'width_not_between' => 'Kuvan leveyden on oltava :min - :max pikseliä',
    'height_not_between' => 'Kuvan korkeuden on oltava :min - :max pikseliä',

    'max_items' => 'Voit ladata enintään :max kohteen|Voit ladata enintään :max kohdetta',
    'min_items' => 'Sinun on ladattava vähintään :min kohde|Sinun on ladattava vähintään :min kohdetta',

    'extension' => 'Tiedoston on oltava tyyppiä :extensions',
    'mime' => 'Tiedostolla on oltava MIME-tyyppi :mimes',
    'type' => 'Sinun on ladattava tyyppiä :values oleva tiedosto',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Täällä voit määrittää mukautettuja validointiviestejä attribuuteille
    | käyttämällä nimeämiskäytäntöä "attribute.rule". Tämä nopeuttaa
    | tietyn mukautetun kielirivin määrittämistä tietylle attribuuttisäännölle.
    |
    */

    'custom' => [
        'sections.*.fields.title' => [
            'required' => 'Osion otsikko on pakollinen',
            'max' => 'Osion otsikko saa olla enintään 100 merkkiä',
            'distinct' => 'Osion otsikko on jo olemassa',
        ],
        'sections.*.fields.description' => [
            'required' => 'Osion sisältö on pakollinen',
            'max' => 'Osion sisältö saa olla enintään 2000 merkkiä',
        ],
        'experiences.*.employer' => [
            'max' => 'Työnantajan nimi saa olla enintään 100 merkkiä',
        ],
        'experiences.*.city' => [
            'max' => 'Kaupungin nimi saa olla enintään 100 merkkiä',
        ],
        'educations.*.school' => [
            'max' => 'Koulun nimi saa olla enintään 100 merkkiä',
        ],
        'educations.*.city' => [
            'max' => 'Kaupungin nimi saa olla enintään 100 merkkiä',
        ],
        'educations.*.specialization' => [
            'max' => 'Erikoistumisen nimi saa olla enintään 100 merkkiä',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | Seuraavia kielirivejä käytetään korvaamaan attribuuttien paikkamerkit
    | jollakin lukijaystävällisemmällä, kuten "Sähköpostiosoite" sanan
    | "email" sijaan. Tämä auttaa tekemään viesteistämme selkeämpiä.
    |
    */

    'attributes' => [
        'email'    => 'sähköpostiosoite',
        'password' => 'salasana',
        'name'     => 'nimi',
        'message'  => 'viesti',
        'agree'    => 'suostumus',
        'captcha'  => 'koodi',
        'subject'  => 'aihe',
    ],

];
