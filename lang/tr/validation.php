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

    "accepted"=>":attribute alanı kabul edilmelidir.",
    "accepted_if"=>":attribute alanı, :other değeri :value olduğunda kabul edilmelidir.",
    "active_url"=>":attribute alanı geçerli bir URL adresi değildir.",
    "after"=>":attribute alanı :date tarihinden sonraki bir tarih olmalıdır.",
    "after_or_equal"=>":attribute alanı :date tarihinden daha erken bir tarih olmamalıdır.",
    "alpha"=>":attribute alanı yalnızca harf içerebilir.",
    "alpha_dash"=>":attribute alanı yalnızca harf, rakam ve kısa çizgi içerebilir.",
    "alpha_num"=>":attribute alanı yalnızca harf ve rakam içerebilir.",
    "array"=>":attribute alanı dizi olmalıdır.",
    "ascii"=>":attribute alanı yalnızca tek baytlık alfasayısal karakterleri ve sembolleri içerebilir.",
    "attached"=>":attribute alanı zaten eklenmiş.",
    "before"=>":attribute alanı :date tarihinden önceki bir tarih olmalıdır.",
    "before_or_equal"=>":attribute alanı :date tarihinden daha sonraki bir tarih olmamalıdır.",
    "between.array"=>":attribute alanı :min - :max arasında öğe içermelidir.",
    "between.file"=>":attribute alanı :min - :max kilobayt arasında olmalıdır.",
    "between.numeric"=>":attribute alanı :min - :max arasında olmalıdır.",
    "between.string"=>":attribute alanı :min - :max karakter arasında olmalıdır.",
    "boolean"=>":attribute alanı doğru veya yanlış mantıksal değerine sahip olmalıdır.",
    "can"=>":attribute alanı yetkisiz bir değer içeriyor.",
    "confirmed"=>":attribute alanı doğrulaması eşleşmiyor.",
    "contains"=>":attribute alanı gerekli öğeyi içermiyor.",
    "current_password"=>"Şifre yanlış.",
    "date"=>":attribute alanı geçerli bir tarih değildir.",
    "date_equals"=>":attribute alanı :date tarihine eşit olmalıdır.",
    "date_format"=>":attribute alanı :format biçiminde değildir.",
    "decimal"=>":attribute alanında :decimal ondalık basamak bulunmalıdır.",
    "declined"=>":attribute alanı reddedilmelidir.",
    "declined_if"=>":attribute alanı, :other değeri :value olduğunda reddedilmelidir.",
    "different"=>":attribute ve :other alanları birbirinden farklı olmalıdır.",
    "digits"=>":attribute alanı :digits basamaktan oluşmalıdır.",
    "digits_between"=>":attribute alanı :min ile :max arasında basamaktan oluşmalıdır.",
    "dimensions"=>":attribute alanının boyutları geçersiz.",
    "distinct"=>":attribute alanı yinelenen değerlere sahip.",
    "doesnt_end_with"=>":attribute alanı şu değerlerden biriyle bitmemelidir: :values.",
    "doesnt_start_with"=> ":attribute alanı şu değerlerden biriyle başlamamalıdır: :values.",
    "email"=> ":attribute alanı geçerli bir e-posta adresi değildir.",
    "ends_with"=>":attribute alanı şu değerlerden biriyle bitmelidir: :values.",
    "enum"=> ":attribute alanı geçersiz bir değere sahip.",
    "exists"=> "Seçilen :attribute alanı geçersiz.",
    "extensions"=> ":attribute alanı şu uzantılardan birine sahip olmalıdır: :values.",
    "failed"=>"Yanlış kullanıcı adı veya şifre.",
    "file"=>":attribute alanı dosya olmalıdır.",
    "filled"=>":attribute alanı doldurulmalıdır.",
    "gt.array"=>":attribute alanı :value değerinden daha fazla öğe içermelidir.",
    "gt.file"=>":attribute alanı :value kilobayttan büyük olmalıdır.",
    "gt.numeric"=>":attribute alanı :value değerinden büyük olmalıdır.",
    "gt.string"=>":attribute alanı :value karakterden daha uzun olmalıdır.",
    "gte.array"=>":attribute alanı :value veya daha fazla öğe içermelidir.",
    "gte.file"=>":attribute alanı :value kilobayta eşit veya ondan büyük olmalıdır.",
    "gte.numeric"=>":attribute alanı :value değerine eşit veya ondan büyük olmalıdır.",
    "gte.string"=>":attribute alanı :value karaktere eşit veya ondan daha uzun olmalıdır.",
    "hex_color"=>":attribute alanı geçerli bir onaltılık renk kodu olmalıdır.",
    "image"=>":attribute alanı resim olmalıdır.",
    "in"=>"Seçilen :attribute öğesi geçersiz.",
    "in_array"=>":attribute alanı :other içinde bulunmuyor.",
    "integer"=>":attribute alanı tam sayı olmalıdır.",
    "ip"=>":attribute alanı geçerli bir IP adresi olmalıdır.",
    "ipv4"=>":attribute alanı geçerli bir IPv4 adresi olmalıdır.",
    "ipv6"=>":attribute alanı geçerli bir IPv6 adresi olmalıdır.",
    "json"=>":attribute alanı geçerli bir JSON dizesi olmalıdır.",
    "list"=>":attribute alanı bir liste olmalıdır.",
    "lowercase"=>":Attribute küçük harflerle yazılmalıdır.",
    "lt.array"=>":attribute alanı :value değerinden daha az öğe içermelidir.",
    "lt.file"=>":attribute alanı :value kilobayttan küçük olmalıdır.",
    "lt.numeric"=>":attribute alanı :value değerinden küçük olmalıdır.",
    "lt.string"=>":attribute alanı :value karakterden daha kısa olmalıdır.",
    "lte.array"=>":attribute alanı :value veya daha az öğe içermelidir.",
    "lte.file"=>":attribute alanı :value kilobayta eşit veya ondan küçük olmalıdır.",
    "lte.numeric"=>":attribute alanı :value değerine eşit veya ondan küçük olmalıdır.",
    "lte.string"=>":attribute alanı :value karaktere eşit veya ondan daha kısa olmalıdır.",
    "mac_address"=>":attribute alanı geçerli bir MAC adresi olmalıdır.",
    "max.array"=>":attribute alanı :max değerinden daha fazla öğe içermemelidir.",
    "max.file"=>":attribute alanı :max kilobayttan büyük olmamalıdır.",
    "max.numeric"=>":attribute alanı :max değerinden büyük olmamalıdır.",
    "max.string"=>":attribute alanı :max karakterden daha uzun olmamalıdır.",
    "max_digits"=>":attribute alanı :max değerinden daha fazla basamak içermemelidir.",
    "mimes"=>":attribute alanı :values türünde bir dosya olmalıdır.",
    "mimetypes"=>":attribute alanı :values türünde bir dosya olmalıdır.",
    "min.array"=>":attribute alanı en az :min öğe içermelidir.",
    "min.file"=>":attribute alanı en az :min kilobayt olmalıdır.",
    "min.numeric"=>":attribute alanı :min değerinden küçük olmamalıdır.",
    "min.string"=>":attribute alanı en az :min karakter içermelidir.",
    "min_digits"=>":attribute alanı en az :min basamak içermelidir.",
    "missing"=>":attribute alanı eksik olmalıdır.",
    "missing_if"=>":other :value olduğunda, :attribute alanı eksik olmalıdır.",
    "missing_unless"=>":other :value değilse, :attribute alanı eksik olmalıdır.",
    "missing_with"=>":values değeri mevcut olduğunda, :attribute alanı eksik olmalıdır.",
    "missing_with_all"=>":values mevcut olduğunda, :attribute alanı eksik olmalıdır.",
    "multiple_of"=>":attribute alanı :value değerinin katı olmalıdır.",
    "next"=>"Sonraki &raquo;",
    "not_in"=>"Seçilen :attribute geçersiz.",
    "not_regex"=>":attribute alanının biçimi geçersiz.",
    "numeric"=>":attribute alanı sayı olmalıdır.",
    "password"=>"Şifre yanlış.",
    "password.letters"=>":attribute alanı en az bir harf içermelidir.",
    "password.mixed"=>":attribute alanı en az bir büyük ve bir küçük harf içermelidir.",
    "password.numbers"=>":attribute alanı en az bir sayı içermelidir.",
    "password.symbols"=>":attribute alanı en az bir sembol içermelidir.",
    "password.uncompromised"=>"Verilen :attribute bir veri sızıntısında ortaya çıktı. Lütfen :attribute için başka bir değer seçin.",
    "present"=>":attribute alanı mevcut olmalıdır.",
    "present_if"=>":other :value değerine sahip olduğunda, :attribute alanı mevcut olmalıdır.",
    "present_unless"=>":other :value değerine sahip değilse, :attribute alanı mevcut olmalıdır.",
    "present_with"=>":values verildiğinde, :attribute alanı mevcut olmalıdır.",
    "present_with_all"=>":values verildiğinde, :attribute alanı mevcut olmalıdır.",
    "previous"=>"&laquo; Önceki",
    "prohibited"=>":attribute alanı yasaktır.",
    "prohibited_if"=>":other :value olduğunda, :attribute alanı yasaktır.",
    "prohibited_unless"=>":other :values içinde değilse, :attribute alanı yasaktır.",
    "prohibits"=>":attribute alanı :other alanının bulunmasını engeller.",
    "regex"=>":attribute alanının biçimi geçersiz.",
    "relatable"=>":attribute alanı bu kaynakla ilişkilendirilemez.",
    "required"=>":attribute alanı zorunludur.",
    "required_array_keys"=>":attribute alanı şu değerleri içermelidir: :values.",
    "required_if"=>":other :value değerine sahip olduğunda, :attribute alanı zorunludur.",
    "required_if_accepted"=>":other kabul edildiğinde bu alan zorunludur.",
    "required_if_declined"=>":other reddedildiğinde, :attribute alanı zorunludur.",
    "required_unless"=>":other :values içinde değilse, :attribute alanı zorunludur.",
    "required_with"=>":values değeri mevcut olduğunda, :attribute alanı zorunludur.",
    "required_with_all"=>":values değerlerinin tümü mevcut olduğunda, :attribute alanı zorunludur.",
    "required_without"=>":values değeri mevcut olmadığında, :attribute alanı zorunludur.",
    "required_without_all"=>":values değerlerinin hiçbiri mevcut olmadığında, :attribute alanı zorunludur.",
    "reset"=>"Şifreniz sıfırlandı!",
    "same"=>":attribute ve :other alanları aynı olmalıdır.",
    "sent"=>"Şifre hatırlatma e-postası gönderildi!",
    "size.array"=>":attribute alanı :size öğe içermelidir.",
    "size.file"=>":attribute alanı :size kilobayt olmalıdır.",
    "size.numeric"=>":attribute alanı :size olmalıdır.",
    "size.string"=>":attribute alanı :size karakter içermelidir.",
    "starts_with"=>":attribute alanı şu değerlerden biriyle başlamalıdır: :values.",
    "string"=>":attribute alanı bir dize olmalıdır.",
    "throttle"=>"Çok fazla başarısız giriş denemesi. Lütfen :seconds saniye sonra tekrar deneyin.",
    "throttled"=>"Tekrar denemeden önce lütfen bekleyin.",
    "timezone"=>":attribute alanı geçerli bir saat dilimi olmalıdır.",
    "token"=>"Şifre sıfırlama jetonu geçersiz.",
    "ulid"=>":attribute alanı geçerli bir ULID tanımlayıcısı olmalıdır.",
    "unique"=>"Bu :attribute zaten mevcut.",
    "uploaded"=>":attribute dosyası yüklenemedi.",
    "uppercase"=>":Attribute büyük harflerle yazılmalıdır.",
    "url"=>":attribute alanının biçimi geçersiz.",
    "user"=>"Bu e-posta adresine sahip bir kullanıcı bulunamadı.",
    "uuid"=>":attribute alanı geçerli bir UUID tanımlayıcısı olmalıdır.",

    'total_upload_size_too_high' => 'Toplamda izin verilen maksimum boyut :max',
    'total_upload_size_too_low' => 'Toplamda izin verilen minimum boyut :min',

    'file_too_big' => 'Bu dosya çok büyük. İzin verilen maksimum boyut :max',
    'file_too_small' => 'Bu dosya çok küçük. En az :min olmalıdır',

    'incorrect_dimensions' => [
        'width' => 'Resim genişliği :width piksel olmalıdır',
        'height' => 'Resim yüksekliği :height piksel olmalıdır',
        'both' => 'Resim boyutları :width x :height piksel olmalıdır',
    ],

    'width_not_between' => 'Resim genişliği :min ile :max piksel arasında olmalıdır',
    'height_not_between' => 'Resim yüksekliği :min ile :max piksel arasında olmalıdır',

    'max_items' => 'En fazla :max öğe yükleyebilirsiniz',
    'min_items' => 'En az :min öğe yüklemelisiniz',

    'extension' => 'Dosya :extensions türünde olmalıdır',
    'mime' => 'Dosya :mimes mime türüne sahip olmalıdır',
    'type' => ':values türünde bir dosya yüklemelisiniz',

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
            'required' => 'Bölüm başlığı zorunludur',
            'max' => 'Bölüm başlığı en fazla 100 karakter içermelidir',
            'distinct' => 'Bölüm başlığı zaten mevcut',
        ],
        'sections.*.fields.description' => [
            'required' => 'Bölüm içeriği zorunludur',
            'max' => 'Bölüm içeriği en fazla 2000 karakter içermelidir',
        ],
        'experiences.*.employer' => [
            'max' => 'İşveren adı en fazla 100 karakter içermelidir',
        ],
        'experiences.*.city' => [
            'max' => 'Şehir adı en fazla 100 karakter içermelidir',
        ],
        'educations.*.school' => [
            'max' => 'Okul adı en fazla 100 karakter içermelidir',
        ],
        'educations.*.city' => [
            'max' => 'Şehir adı en fazla 100 karakter içermelidir',
        ],
        'educations.*.specialization' => [
            'max' => 'Uzmanlık adı en fazla 100 karakter içermelidir',
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
        'email'    => 'e-posta adresi',
        'password' => 'şifre',
        'name'     => 'adı',
        'message'     => 'mesaj',
        'agree'     => 'onay',
        'captcha'     => 'kod',
        'subject'     => 'konu',
    ],

];
