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

    "accepted"=>"Kolom :attribute harus disetujui.",
    "accepted_if"=>"Kolom :attribute harus disetujui ketika :other bernilai :value.",
    "active_url"=>"Kolom :attribute bukan URL yang valid.",
    "after"=>"Kolom :attribute harus berupa tanggal setelah :date.",
    "after_or_equal"=>"Kolom :attribute harus berupa tanggal yang sama atau setelah :date.",
    "alpha"=>"Kolom :attribute hanya boleh berisi huruf.",
    "alpha_dash"=>"Kolom :attribute hanya boleh berisi huruf, angka, dan tanda hubung.",
    "alpha_num"=>"Kolom :attribute hanya boleh berisi huruf dan angka.",
    "array"=>"Kolom :attribute harus berupa array.",
    "ascii"=>"Kolom :attribute hanya boleh berisi karakter alfanumerik satu byte dan simbol.",
    "attached"=>"Kolom :attribute sudah dilampirkan.",
    "before"=>"Kolom :attribute harus berupa tanggal sebelum :date.",
    "before_or_equal"=>"Kolom :attribute harus berupa tanggal yang sama atau sebelum :date.",
    "between.array"=>"Kolom :attribute harus memiliki antara :min hingga :max elemen.",
    "between.file"=>"Kolom :attribute harus berukuran antara :min hingga :max kilobyte.",
    "between.numeric"=>"Kolom :attribute harus bernilai antara :min hingga :max.",
    "between.string"=>"Kolom :attribute harus memiliki antara :min hingga :max karakter.",
    "boolean"=>"Kolom :attribute harus bernilai benar atau salah.",
    "can"=>"Kolom :attribute mengandung nilai yang tidak diizinkan.",
    "confirmed"=>"Konfirmasi :attribute tidak cocok.",
    "contains"=>"Kolom :attribute tidak mengandung nilai yang dibutuhkan.",
    "current_password"=>"Kata sandi tidak valid.",
    "date"=>"Kolom :attribute bukan tanggal yang valid.",
    "date_equals"=>"Kolom :attribute harus sama dengan tanggal :date.",
    "date_format"=>"Kolom :attribute tidak sesuai dengan format :format.",
    "decimal"=>"Kolom :attribute harus memiliki :decimal angka desimal.",
    "declined"=>"Kolom :attribute harus ditolak.",
    "declined_if"=>"Kolom :attribute harus ditolak ketika :other bernilai :value.",
    "different"=>"Kolom :attribute dan :other harus berbeda.",
    "digits"=>"Kolom :attribute harus terdiri dari :digits digit.",
    "digits_between"=>"Kolom :attribute harus terdiri dari :min hingga :max digit.",
    "dimensions"=>"Kolom :attribute memiliki dimensi yang tidak valid.",
    "distinct"=>"Kolom :attribute memiliki nilai duplikat.",
    "doesnt_end_with"=>"Kolom :attribute tidak boleh diakhiri dengan salah satu dari nilai berikut: :values.",
    "doesnt_start_with"=>"Kolom :attribute tidak boleh diawali dengan salah satu dari nilai berikut: :values.",
    "email"=> "Kolom :attribute bukan alamat email yang valid.",
    "ends_with"=>"Kolom :attribute harus diakhiri dengan salah satu dari nilai berikut: :values.",
    "enum"=> "Kolom :attribute memiliki nilai yang tidak valid.",
    "exists"=> "Kolom yang dipilih :attribute tidak valid.",
    "extensions"=> "Kolom :attribute harus memiliki salah satu ekstensi berikut: :values.",
    "failed"=>"Email atau kata sandi salah.",
    "file"=>"Kolom :attribute harus berupa file.",
    "filled"=>"Kolom :attribute harus diisi.",
    "gt.array"=>"Kolom :attribute harus memiliki lebih dari :value elemen.",
    "gt.file"=>"Kolom :attribute harus lebih besar dari :value kilobyte.",
    "gt.numeric"=>"Kolom :attribute harus lebih besar dari :value.",
    "gt.string"=>"Kolom :attribute harus lebih panjang dari :value karakter.",
    "gte.array"=>"Kolom :attribute harus memiliki :value atau lebih elemen.",
    "gte.file"=>"Kolom :attribute harus lebih besar atau sama dengan :value kilobyte.",
    "gte.numeric"=>"Kolom :attribute harus lebih besar atau sama dengan :value.",
    "gte.string"=>"Kolom :attribute harus memiliki :value atau lebih karakter.",
    "hex_color"=>"Kolom :attribute harus berupa warna heksadesimal yang valid.",
    "image"=>"Kolom :attribute harus berupa gambar.",
    "in"=>"Nilai yang dipilih untuk :attribute tidak valid.",
    "in_array"=>"Kolom :attribute tidak terdapat dalam :other.",
    "integer"=>"Kolom :attribute harus berupa bilangan bulat.",
    "ip"=>"Kolom :attribute harus berupa alamat IP yang valid.",
    "ipv4"=>"Kolom :attribute harus berupa alamat IPv4 yang valid.",
    "ipv6"=>"Kolom :attribute harus berupa alamat IPv6 yang valid.",
    "json"=>"Kolom :attribute harus berupa string JSON yang valid.",
    "list"=>"Kolom :attribute harus berupa daftar.",
    "lowercase"=>":Attribute harus menggunakan huruf kecil.",
    "lt.array"=>"Kolom :attribute harus memiliki kurang dari :value elemen.",
    "lt.file"=>"Kolom :attribute harus lebih kecil dari :value kilobyte.",
    "lt.numeric"=>"Kolom :attribute harus lebih kecil dari :value.",
    "lt.string"=>"Kolom :attribute harus lebih pendek dari :value karakter.",
    "lte.array"=>"Kolom :attribute harus memiliki :value atau kurang elemen.",
    "lte.file"=>"Kolom :attribute harus lebih kecil atau sama dengan :value kilobyte.",
    "lte.numeric"=>"Kolom :attribute harus lebih kecil atau sama dengan :value.",
    "lte.string"=>"Kolom :attribute harus memiliki :value atau kurang karakter.",
    "mac_address"=>"Kolom :attribute harus berupa alamat MAC yang valid.",
    "max.array"=>"Kolom :attribute tidak boleh memiliki lebih dari :max elemen.",
    "max.file"=>"Kolom :attribute tidak boleh lebih besar dari :max kilobyte.",
    "max.numeric"=>"Kolom :attribute tidak boleh lebih besar dari :max.",
    "max.string"=>"Kolom :attribute tidak boleh lebih panjang dari :max karakter.",
    "max_digits"=>"Kolom :attribute tidak boleh memiliki lebih dari :max digit.",
    "mimes"=>"Kolom :attribute harus berupa file dengan tipe :values.",
    "mimetypes"=>"Kolom :attribute harus berupa file dengan tipe :values.",
    "min.array"=>"Kolom :attribute harus memiliki setidaknya :min elemen.",
    "min.file"=>"Kolom :attribute harus berukuran setidaknya :min kilobyte.",
    "min.numeric"=>"Kolom :attribute harus minimal :min.",
    "min.string"=>"Kolom :attribute harus memiliki setidaknya :min karakter.",
    "min_digits"=>"Kolom :attribute harus memiliki setidaknya :min digit.",
    "missing"=>"Kolom :attribute harus tidak ada.",
    "missing_if"=>"Kolom :attribute harus tidak ada ketika :other bernilai :value.",
    "missing_unless"=>"Kolom :attribute harus tidak ada kecuali :other bernilai :value.",
    "missing_with"=>"Kolom :attribute harus tidak ada ketika :values ada.",
    "missing_with_all"=>"Kolom :attribute harus tidak ada ketika :values ada.",
    "multiple_of"=>"Kolom :attribute harus merupakan kelipatan dari :value",
    "next"=>"Berikutnya &raquo;",
    "not_in"=>"Nilai yang dipilih untuk :attribute tidak valid.",
    "not_regex"=>"Format kolom :attribute tidak valid.",
    "numeric"=>"Kolom :attribute harus berupa angka.",
    "password"=>"Kata sandi tidak valid.",
    "password.letters"=>"Kolom :attribute harus mengandung setidaknya satu huruf.",
    "password.mixed"=>"Kolom :attribute harus mengandung huruf besar dan kecil.",
    "password.numbers"=>"Kolom :attribute harus mengandung setidaknya satu angka.",
    "password.symbols"=>"Kolom :attribute harus mengandung setidaknya satu simbol.",
    "password.uncompromised"=>"Nilai :attribute telah ditemukan dalam kebocoran data. Silakan gunakan nilai lain.",
    "present"=>"Kolom :attribute harus ada.",
    "present_if"=>"Kolom :attribute harus ada ketika :other bernilai :value.",
    "present_unless"=>"Kolom :attribute harus ada kecuali :other bernilai :value.",
    "present_with"=>"Kolom :attribute harus ada ketika :values ada.",
    "present_with_all"=>"Kolom :attribute harus ada ketika :values ada.",
    "previous"=>"&laquo; Sebelumnya",
    "prohibited"=>"Kolom :attribute dilarang.",
    "prohibited_if"=>"Kolom :attribute dilarang ketika :other bernilai :value.",
    "prohibited_unless"=>"Kolom :attribute dilarang kecuali :other ada dalam :values.",
    "prohibits"=>"Kolom :attribute melarang keberadaan :other.",
    "regex"=>"Format kolom :attribute tidak valid.",
    "relatable"=>"Kolom :attribute tidak dapat dikaitkan dengan sumber ini.",
    "required"=>"Kolom :attribute wajib diisi.",
    "required_array_keys"=>"Kolom :attribute harus mengandung nilai: :values.",
    "required_if"=>"Kolom :attribute wajib diisi ketika :other bernilai :value.",
    "required_if_accepted"=>"Kolom ini wajib diisi ketika :other disetujui.",
    "required_if_declined"=>"Kolom :attribute wajib diisi ketika :other ditolak.",
    "required_unless"=>"Kolom :attribute wajib diisi kecuali :other ada dalam :values.",
    "required_with"=>"Kolom :attribute wajib diisi ketika :values ada.",
    "required_with_all"=>"Kolom :attribute wajib diisi ketika semua nilai :values ada.",
    "required_without"=>"Kolom :attribute wajib diisi ketika :values tidak ada.",
    "required_without_all"=>"Kolom :attribute wajib diisi ketika tidak ada satupun :values.",
    "reset"=>"Kata sandi berhasil direset!",
    "same"=>"Kolom :attribute dan :other harus sama.",
    "sent"=>"Pengingat kata sandi telah dikirim!",
    "size.array"=>"Kolom :attribute harus memiliki :size elemen.",
    "size.file"=>"Kolom :attribute harus berukuran :size kilobyte.",
    "size.numeric"=>"Kolom :attribute harus bernilai :size.",
    "size.string"=>"Kolom :attribute harus memiliki :size karakter.",
    "starts_with"=>"Kolom :attribute harus diawali dengan salah satu nilai berikut: :values.",
    "string"=>"Kolom :attribute harus berupa teks.",
    "throttle"=>"Terlalu banyak percobaan gagal. Silakan coba lagi dalam :seconds detik.",
    "throttled"=>"Harap tunggu sebelum mencoba lagi.",
    "timezone"=>"Kolom :attribute harus berupa zona waktu yang valid.",
    "token"=>"Token reset kata sandi tidak valid.",
    "ulid"=>"Kolom :attribute harus berupa ULID yang valid.",
    "unique"=>"Nilai :attribute sudah digunakan.",
    "uploaded"=>"Gagal mengunggah file :attribute.",
    "uppercase"=>":Attribute harus menggunakan huruf besar.",
    "url"=>"Format kolom :attribute tidak valid.",
    "user"=>"Kami tidak menemukan pengguna dengan email tersebut.",
    "uuid"=>"Kolom :attribute harus berupa UUID yang valid.",

    'total_upload_size_too_high' => 'Ukuran total maksimum yang diperbolehkan adalah :max',
    'total_upload_size_too_low' => 'Ukuran total minimum yang diperbolehkan adalah :min',

    'file_too_big' => 'File ini terlalu besar. Ukuran maksimum: :max',
    'file_too_small' => 'File ini terlalu kecil. Minimal harus :min',

    'incorrect_dimensions' => [
        'width' => 'Lebar gambar harus :width piksel',
        'height' => 'Tinggi gambar harus :height piksel',
        'both' => 'Dimensi gambar harus :width x :height piksel',
    ],

    'width_not_between' => 'Lebar gambar harus antara :min dan :max piksel',
    'height_not_between' => 'Tinggi gambar harus antara :min dan :max piksel',

    'max_items' => 'Anda hanya dapat mengunggah :max item|Anda hanya dapat mengunggah :max item',
    'min_items' => 'Anda harus mengunggah setidaknya :min item|Anda harus mengunggah setidaknya :min item',

    'extension' => 'File harus bertipe :extensions',
    'mime' => 'File harus memiliki tipe mime :mimes',
    'type' => 'Anda harus mengunggah file bertipe :values',

    /*
   |--------------------------------------------------------------------------
    | Custom Validation Language Lines
   |--------------------------------------------------------------------------
    */

    'custom' => [
        'sections.*.fields.title' => [
            'required' => 'Judul bagian wajib diisi',
            'max' => 'Judul bagian maksimal 100 karakter',
            'distinct' => 'Judul bagian sudah ada',
        ],
        'sections.*.fields.description' => [
            'required' => 'Isi bagian wajib diisi',
            'max' => 'Deskripsi bagian maksimal 2000 karakter',
        ],
        'experiences.*.employer' => [
            'max' => 'Nama perusahaan maksimal 100 karakter',
        ],
        'experiences.*.city' => [
            'max' => 'Nama kota maksimal 100 karakter',
        ],
        'educations.*.school' => [
            'max' => 'Nama sekolah maksimal 100 karakter',
        ],
        'educations.*.city' => [
            'max' => 'Nama kota maksimal 100 karakter',
        ],
        'educations.*.specialization' => [
            'max' => 'Nama jurusan maksimal 100 karakter',
        ],
    ],

    /*
   |--------------------------------------------------------------------------
    | Custom Validation Attributes
   |--------------------------------------------------------------------------
    */

    'attributes' => [
        'email'    => 'email',
        'password' => 'kata sandi',
        'name'     => 'nama',
        'message'  => 'pesan',
        'agree'    => 'persetujuan',
        'captcha'  => 'kode',
        'subject'  => 'subjek',
    ],

];
