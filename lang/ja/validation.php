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

    "accepted"=>"項目 :attribute は承認される必要があります。",
    "accepted_if"=>"項目 :attribute は :other が :value の場合に承認される必要があります。",
    "active_url"=>"項目 :attribute は有効なURLではありません。",
    "after"=>"項目 :attribute は :date 以降の日付である必要があります。",
    "after_or_equal"=>"項目 :attribute は :date 以降または同日である必要があります。",
    "alpha"=>"項目 :attribute は英字のみ使用できます。",
    "alpha_dash"=>"項目 :attribute は英字・数字・ハイフンのみ使用できます。",
    "alpha_num"=>"項目 :attribute は英字と数字のみ使用できます。",
    "array"=>"項目 :attribute は配列である必要があります。",
    "ascii"=>"項目 :attribute は1バイトの英数字および記号のみ使用できます。",
    "attached"=>"項目 :attribute はすでに添付されています。",
    "before"=>"項目 :attribute は :date より前の日付である必要があります。",
    "before_or_equal"=>"項目 :attribute は :date 以前または同日である必要があります。",
    "between.array"=>"項目 :attribute は :min から :max 個の要素を持つ必要があります。",
    "between.file"=>"項目 :attribute は :min から :max キロバイトの間である必要があります。",
    "between.numeric"=>"項目 :attribute は :min から :max の範囲である必要があります。",
    "between.string"=>"項目 :attribute は :min から :max 文字である必要があります。",
    "boolean"=>"項目 :attribute は真または偽である必要があります。",
    "can"=>"項目 :attribute に許可されていない値が含まれています。",
    "confirmed"=>"項目 :attribute の確認が一致しません。",
    "contains"=>"項目 :attribute に必要な値が含まれていません。",
    "current_password"=>"パスワードが正しくありません。",
    "date"=>"項目 :attribute は有効な日付ではありません。",
    "date_equals"=>"項目 :attribute は :date と同じ日付である必要があります。",
    "date_format"=>"項目 :attribute は形式 :format に一致しません。",
    "decimal"=>"項目 :attribute は小数点以下 :decimal 桁である必要があります。",
    "declined"=>"項目 :attribute は拒否される必要があります。",
    "declined_if"=>"項目 :attribute は :other が :value の場合に拒否される必要があります。",
    "different"=>"項目 :attribute と :other は異なる必要があります。",
    "digits"=>"項目 :attribute は :digits 桁である必要があります。",
    "digits_between"=>"項目 :attribute は :min から :max 桁である必要があります。",
    "dimensions"=>"項目 :attribute の寸法が無効です。",
    "distinct"=>"項目 :attribute に重複した値があります。",
    "doesnt_end_with"=>"項目 :attribute は次のいずれかで終わってはいけません: :values。",
    "doesnt_start_with"=>"項目 :attribute は次のいずれかで始まってはいけません: :values。",
    "email"=> "項目 :attribute は有効なメールアドレスではありません。",
    "ends_with"=>"項目 :attribute は次のいずれかで終わる必要があります: :values。",
    "enum"=> "項目 :attribute の値が無効です。",
    "exists"=> "選択された項目 :attribute は無効です。",
    "extensions"=> "項目 :attribute は次のいずれかの拡張子である必要があります: :values。",
    "failed"=>"ログイン情報が正しくありません。",
    "file"=>"項目 :attribute はファイルである必要があります。",
    "filled"=>"項目 :attribute は入力必須です。",
    "gt.array"=>"項目 :attribute は :value より多くの要素を持つ必要があります。",
    "gt.file"=>"項目 :attribute は :value キロバイトより大きい必要があります。",
    "gt.numeric"=>"項目 :attribute は :value より大きい必要があります。",
    "gt.string"=>"項目 :attribute は :value 文字より長い必要があります。",
    "gte.array"=>"項目 :attribute は :value 個以上の要素を持つ必要があります。",
    "gte.file"=>"項目 :attribute は :value キロバイト以上である必要があります。",
    "gte.numeric"=>"項目 :attribute は :value 以上である必要があります。",
    "gte.string"=>"項目 :attribute は :value 文字以上である必要があります。",
    "hex_color"=>"項目 :attribute は有効な16進カラーコードである必要があります。",
    "image"=>"項目 :attribute は画像である必要があります。",
    "in"=>"選択された :attribute は無効です。",
    "in_array"=>"項目 :attribute は :other に存在しません。",
    "integer"=>"項目 :attribute は整数である必要があります。",
    "ip"=>"項目 :attribute は有効なIPアドレスである必要があります。",
    "ipv4"=>"項目 :attribute は有効なIPv4アドレスである必要があります。",
    "ipv6"=>"項目 :attribute は有効なIPv6アドレスである必要があります。",
    "json"=>"項目 :attribute は有効なJSON文字列である必要があります。",
    "list"=>"項目 :attribute はリストである必要があります。",
    "lowercase"=>":Attribute は小文字で入力してください。",
    "lt.array"=>"項目 :attribute は :value 未満の要素である必要があります。",
    "lt.file"=>"項目 :attribute は :value キロバイト未満である必要があります。",
    "lt.numeric"=>"項目 :attribute は :value 未満である必要があります。",
    "lt.string"=>"項目 :attribute は :value 文字未満である必要があります。",
    "lte.array"=>"項目 :attribute は :value 以下の要素である必要があります。",
    "lte.file"=>"項目 :attribute は :value キロバイト以下である必要があります。",
    "lte.numeric"=>"項目 :attribute は :value 以下である必要があります。",
    "lte.string"=>"項目 :attribute は :value 文字以下である必要があります。",
    "mac_address"=>"項目 :attribute は有効なMACアドレスである必要があります。",
    "max.array"=>"項目 :attribute は :max 個を超えてはいけません。",
    "max.file"=>"項目 :attribute は :max キロバイトを超えてはいけません。",
    "max.numeric"=>"項目 :attribute は :max を超えてはいけません。",
    "max.string"=>"項目 :attribute は :max 文字を超えてはいけません。",
    "max_digits"=>"項目 :attribute は :max 桁を超えてはいけません。",
    "mimes"=>"項目 :attribute は :values タイプのファイルである必要があります。",
    "mimetypes"=>"項目 :attribute は :values タイプのファイルである必要があります。",
    "min.array"=>"項目 :attribute は少なくとも :min 個の要素を持つ必要があります。",
    "min.file"=>"項目 :attribute は少なくとも :min キロバイトである必要があります。",
    "min.numeric"=>"項目 :attribute は :min 以上である必要があります。",
    "min.string"=>"項目 :attribute は少なくとも :min 文字である必要があります。",
    "min_digits"=>"項目 :attribute は少なくとも :min 桁である必要があります。",
    "missing"=>"項目 :attribute は存在してはいけません。",
    "missing_if"=>"項目 :attribute は :other が :value の場合に存在してはいけません。",
    "missing_unless"=>"項目 :attribute は :other が :value でない限り存在してはいけません。",
    "missing_with"=>"項目 :attribute は :values が存在する場合に存在してはいけません。",
    "missing_with_all"=>"項目 :attribute は :values がすべて存在する場合に存在してはいけません。",
    "multiple_of"=>"項目 :attribute は :value の倍数である必要があります",
    "next"=>"次へ &raquo;",
    "not_in"=>"選択された :attribute は無効です。",
    "not_regex"=>"項目 :attribute の形式が無効です。",
    "numeric"=>"項目 :attribute は数値である必要があります。",
    "password"=>"パスワードが正しくありません。",
    "password.letters"=>"項目 :attribute には少なくとも1つの文字を含める必要があります。",
    "password.mixed"=>"項目 :attribute には大文字と小文字の両方を含める必要があります。",
    "password.numbers"=>"項目 :attribute には少なくとも1つの数字を含める必要があります。",
    "password.symbols"=>"項目 :attribute には少なくとも1つの記号を含める必要があります。",
    "password.uncompromised"=>"指定された :attribute はデータ漏洩で検出されました。別の値を使用してください。",
    "present"=>"項目 :attribute は存在する必要があります。",
    "present_if"=>"項目 :attribute は :other が :value の場合に存在する必要があります。",
    "present_unless"=>"項目 :attribute は :other が :value でない限り存在する必要があります。",
    "present_with"=>"項目 :attribute は :values が存在する場合に存在する必要があります。",
    "present_with_all"=>"項目 :attribute は :values がすべて存在する場合に存在する必要があります。",
    "previous"=>"&laquo; 前へ",
    "prohibited"=>"項目 :attribute は禁止されています。",
    "prohibited_if"=>"項目 :attribute は :other が :value の場合に禁止されています。",
    "prohibited_unless"=>"項目 :attribute は :other が :values に含まれていない限り禁止されています。",
    "prohibits"=>"項目 :attribute は :other の存在を禁止します。",
    "regex"=>"項目 :attribute の形式が無効です。",
    "relatable"=>"項目 :attribute はこのリソースと関連付けることができません。",
    "required"=>"項目 :attribute は必須です。",
    "required_array_keys"=>"項目 :attribute は次の値を含める必要があります: :values。",
    "required_if"=>"項目 :attribute は :other が :value の場合に必須です。",
    "required_if_accepted"=>"この項目は :other が承認されている場合に必須です。",
    "required_if_declined"=>"項目 :attribute は :other が拒否されている場合に必須です。",
    "required_unless"=>"項目 :attribute は :other が :values に含まれていない場合に必須です。",
    "required_with"=>"項目 :attribute は :values が存在する場合に必須です。",
    "required_with_all"=>"項目 :attribute はすべての :values が存在する場合に必須です。",
    "required_without"=>"項目 :attribute は :values が存在しない場合に必須です。",
    "required_without_all"=>"項目 :attribute は :values がすべて存在しない場合に必須です。",
    "reset"=>"パスワードがリセットされました！",
    "same"=>"項目 :attribute と :other は一致する必要があります。",
    "sent"=>"パスワードリマインダーが送信されました！",
    "size.array"=>"項目 :attribute は :size 個の要素を含む必要があります。",
    "size.file"=>"項目 :attribute は :size キロバイトである必要があります。",
    "size.numeric"=>"項目 :attribute は :size である必要があります。",
    "size.string"=>"項目 :attribute は :size 文字である必要があります。",
    "starts_with"=>"項目 :attribute は次のいずれかで始まる必要があります: :values。",
    "string"=>"項目 :attribute は文字列である必要があります。",
    "throttle"=>"ログイン試行回数が多すぎます。:seconds 秒後に再試行してください。",
    "throttled"=>"再試行する前にしばらくお待ちください。",
    "timezone"=>"項目 :attribute は有効なタイムゾーンである必要があります。",
    "token"=>"パスワードリセットトークンが無効です。",
    "ulid"=>"項目 :attribute は有効なULIDである必要があります。",
    "unique"=>"この :attribute はすでに存在します。",
    "uploaded"=>"ファイル :attribute のアップロードに失敗しました。",
    "uppercase"=>":Attribute は大文字で入力してください。",
    "url"=>"項目 :attribute の形式が無効です。",
    "user"=>"そのメールアドレスのユーザーは見つかりませんでした。",
    "uuid"=>"項目 :attribute は有効なUUIDである必要があります。",

    'total_upload_size_too_high' => '合計サイズの上限は :max です',
    'total_upload_size_too_low' => '合計サイズの下限は :min です',

    'file_too_big' => 'ファイルサイズが大きすぎます。最大 :max',
    'file_too_small' => 'ファイルサイズが小さすぎます。少なくとも :min 必要です',

    'incorrect_dimensions' => [
        'width' => '画像の幅は :width ピクセルである必要があります',
        'height' => '画像の高さは :height ピクセルである必要があります',
        'both' => '画像サイズは :width x :height ピクセルである必要があります',
    ],

    'width_not_between' => '画像の幅は :min から :max ピクセルの間である必要があります',
    'height_not_between' => '画像の高さは :min から :max ピクセルの間である必要があります',

    'max_items' => ':max 件までアップロードできます|:max 件までアップロードできます',
    'min_items' => '少なくとも :min 件アップロードする必要があります|少なくとも :min 件アップロードする必要があります',

    'extension' => 'ファイルは :extensions タイプである必要があります',
    'mime' => 'ファイルは MIME タイプ :mimes である必要があります',
    'type' => ':values タイプのファイルをアップロードしてください',

    /*
   |--------------------------------------------------------------------------
    | Custom Validation Language Lines
   |--------------------------------------------------------------------------
    */

    'custom' => [
        'sections.*.fields.title' => [
            'required' => 'セクションタイトルは必須です',
            'max' => 'セクションタイトルは最大100文字までです',
            'distinct' => 'このセクションタイトルはすでに存在します',
        ],
        'sections.*.fields.description' => [
            'required' => 'セクション内容は必須です',
            'max' => 'セクション説明は最大2000文字までです',
        ],
        'experiences.*.employer' => [
            'max' => '会社名は最大100文字までです',
        ],
        'experiences.*.city' => [
            'max' => '都市名は最大100文字までです',
        ],
        'educations.*.school' => [
            'max' => '学校名は最大100文字までです',
        ],
        'educations.*.city' => [
            'max' => '都市名は最大100文字までです',
        ],
        'educations.*.specialization' => [
            'max' => '専攻名は最大100文字までです',
        ],
    ],

    /*
   |--------------------------------------------------------------------------
    | Custom Validation Attributes
   |--------------------------------------------------------------------------
    */

    'attributes' => [
        'email'    => 'メールアドレス',
        'password' => 'パスワード',
        'name'     => '名前',
        'message'  => 'メッセージ',
        'agree'    => '同意',
        'captcha'  => 'コード',
        'subject'  => '件名',
    ],

];
