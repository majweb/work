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

    "accepted"=>"필드 :attribute 는 반드시 동의해야 합니다.",
    "accepted_if"=>"필드 :attribute 는 :other 값이 :value 일 때 반드시 동의해야 합니다.",
    "active_url"=>"필드 :attribute 는 유효한 URL이 아닙니다.",
    "after"=>"필드 :attribute 는 :date 이후 날짜여야 합니다.",
    "after_or_equal"=>"필드 :attribute 는 :date 와 같거나 이후 날짜여야 합니다.",
    "alpha"=>"필드 :attribute 는 문자만 포함할 수 있습니다.",
    "alpha_dash"=>"필드 :attribute 는 문자, 숫자 및 하이픈만 포함할 수 있습니다.",
    "alpha_num"=>"필드 :attribute 는 문자와 숫자만 포함할 수 있습니다.",
    "array"=>"필드 :attribute 는 배열이어야 합니다.",
    "ascii"=>"필드 :attribute 는 ASCII 문자와 기호만 포함할 수 있습니다.",
    "attached"=>"필드 :attribute 는 이미 첨부되어 있습니다.",
    "before"=>"필드 :attribute 는 :date 이전 날짜여야 합니다.",
    "before_or_equal"=>"필드 :attribute 는 :date 와 같거나 이전 날짜여야 합니다.",
    "between.array"=>"필드 :attribute 는 :min 에서 :max 개의 요소를 가져야 합니다.",
    "between.file"=>"필드 :attribute 는 :min 에서 :max 킬로바이트 사이여야 합니다.",
    "between.numeric"=>"필드 :attribute 는 :min 과 :max 사이여야 합니다.",
    "between.string"=>"필드 :attribute 는 :min 에서 :max 자 사이여야 합니다.",
    "boolean"=>"필드 :attribute 는 참 또는 거짓이어야 합니다.",
    "can"=>"필드 :attribute 에 허용되지 않은 값이 포함되어 있습니다.",
    "confirmed"=>"필드 :attribute 확인이 일치하지 않습니다.",
    "contains"=>"필드 :attribute 에 필요한 값이 포함되어 있지 않습니다.",
    "current_password"=>"비밀번호가 올바르지 않습니다.",
    "date"=>"필드 :attribute 는 유효한 날짜가 아닙니다.",
    "date_equals"=>"필드 :attribute 는 :date 와 동일한 날짜여야 합니다.",
    "date_format"=>"필드 :attribute 는 :format 형식과 일치하지 않습니다.",
    "decimal"=>"필드 :attribute 는 소수점 :decimal 자리여야 합니다.",
    "declined"=>"필드 :attribute 는 거부되어야 합니다.",
    "declined_if"=>"필드 :attribute 는 :other 값이 :value 일 때 거부되어야 합니다.",
    "different"=>"필드 :attribute 와 :other 는 서로 달라야 합니다.",
    "digits"=>"필드 :attribute 는 :digits 자리 숫자여야 합니다.",
    "digits_between"=>"필드 :attribute 는 :min 에서 :max 자리 숫자여야 합니다.",
    "dimensions"=>"필드 :attribute 의 크기가 올바르지 않습니다.",
    "distinct"=>"필드 :attribute 에 중복된 값이 있습니다.",
    "doesnt_end_with"=>"필드 :attribute 는 다음 값으로 끝날 수 없습니다: :values.",
    "doesnt_start_with"=>"필드 :attribute 는 다음 값으로 시작할 수 없습니다: :values.",
    "email"=> "필드 :attribute 는 유효한 이메일 주소가 아닙니다.",
    "ends_with"=>"필드 :attribute 는 다음 값 중 하나로 끝나야 합니다: :values.",
    "enum"=> "필드 :attribute 값이 올바르지 않습니다.",
    "exists"=> "선택된 :attribute 값이 올바르지 않습니다.",
    "extensions"=> "필드 :attribute 는 다음 확장자 중 하나여야 합니다: :values.",
    "failed"=>"로그인 정보가 올바르지 않습니다.",
    "file"=>"필드 :attribute 는 파일이어야 합니다.",
    "filled"=>"필드 :attribute 는 반드시 입력되어야 합니다.",
    "gt.array"=>"필드 :attribute 는 :value 보다 많은 요소를 가져야 합니다.",
    "gt.file"=>"필드 :attribute 는 :value 킬로바이트보다 커야 합니다.",
    "gt.numeric"=>"필드 :attribute 는 :value 보다 커야 합니다.",
    "gt.string"=>"필드 :attribute 는 :value 자보다 길어야 합니다.",
    "gte.array"=>"필드 :attribute 는 :value 개 이상의 요소를 가져야 합니다.",
    "gte.file"=>"필드 :attribute 는 :value 킬로바이트 이상이어야 합니다.",
    "gte.numeric"=>"필드 :attribute 는 :value 이상이어야 합니다.",
    "gte.string"=>"필드 :attribute 는 :value 자 이상이어야 합니다.",
    "hex_color"=>"필드 :attribute 는 유효한 16진수 색상이어야 합니다.",
    "image"=>"필드 :attribute 는 이미지여야 합니다.",
    "in"=>"선택된 :attribute 값이 올바르지 않습니다.",
    "in_array"=>"필드 :attribute 는 :other 안에 존재하지 않습니다.",
    "integer"=>"필드 :attribute 는 정수여야 합니다.",
    "ip"=>"필드 :attribute 는 유효한 IP 주소여야 합니다.",
    "ipv4"=>"필드 :attribute 는 유효한 IPv4 주소여야 합니다.",
    "ipv6"=>"필드 :attribute 는 유효한 IPv6 주소여야 합니다.",
    "json"=>"필드 :attribute 는 유효한 JSON 문자열이어야 합니다.",
    "list"=>"필드 :attribute 는 리스트여야 합니다.",
    "lowercase"=>":Attribute 는 소문자로 작성해야 합니다.",
    "lt.array"=>"필드 :attribute 는 :value 보다 적은 요소를 가져야 합니다.",
    "lt.file"=>"필드 :attribute 는 :value 킬로바이트보다 작아야 합니다.",
    "lt.numeric"=>"필드 :attribute 는 :value 보다 작아야 합니다.",
    "lt.string"=>"필드 :attribute 는 :value 자보다 짧아야 합니다.",
    "lte.array"=>"필드 :attribute 는 :value 개 이하의 요소를 가져야 합니다.",
    "lte.file"=>"필드 :attribute 는 :value 킬로바이트 이하이어야 합니다.",
    "lte.numeric"=>"필드 :attribute 는 :value 이하이어야 합니다.",
    "lte.string"=>"필드 :attribute 는 :value 자 이하이어야 합니다.",
    "mac_address"=>"필드 :attribute 는 유효한 MAC 주소여야 합니다.",
    "max.array"=>"필드 :attribute 는 :max 개를 초과할 수 없습니다.",
    "max.file"=>"필드 :attribute 는 :max 킬로바이트를 초과할 수 없습니다.",
    "max.numeric"=>"필드 :attribute 는 :max 를 초과할 수 없습니다.",
    "max.string"=>"필드 :attribute 는 :max 자를 초과할 수 없습니다.",
    "max_digits"=>"필드 :attribute 는 :max 자리 수를 초과할 수 없습니다.",
    "mimes"=>"필드 :attribute 는 :values 형식의 파일이어야 합니다.",
    "mimetypes"=>"필드 :attribute 는 :values 형식의 파일이어야 합니다.",
    "min.array"=>"필드 :attribute 는 최소 :min 개의 요소를 가져야 합니다.",
    "min.file"=>"필드 :attribute 는 최소 :min 킬로바이트여야 합니다.",
    "min.numeric"=>"필드 :attribute 는 최소 :min 이어야 합니다.",
    "min.string"=>"필드 :attribute 는 최소 :min 자여야 합니다.",
    "min_digits"=>"필드 :attribute 는 최소 :min 자리여야 합니다.",
    "missing"=>"필드 :attribute 는 존재하지 않아야 합니다.",
    "missing_if"=>"필드 :attribute 는 :other 값이 :value 일 때 존재하지 않아야 합니다.",
    "missing_unless"=>"필드 :attribute 는 :other 값이 :value 가 아닌 경우 존재하지 않아야 합니다.",
    "missing_with"=>"필드 :attribute 는 :values 가 존재할 때 존재하지 않아야 합니다.",
    "missing_with_all"=>"필드 :attribute 는 :values 가 모두 존재할 때 존재하지 않아야 합니다.",
    "multiple_of"=>"필드 :attribute 는 :value 의 배수여야 합니다",
    "next"=>"다음 &raquo;",
    "not_in"=>"선택된 :attribute 값이 올바르지 않습니다.",
    "not_regex"=>"필드 :attribute 형식이 올바르지 않습니다.",
    "numeric"=>"필드 :attribute 는 숫자여야 합니다.",
    "password"=>"비밀번호가 올바르지 않습니다.",
    "password.letters"=>"필드 :attribute 는 최소 하나의 문자를 포함해야 합니다.",
    "password.mixed"=>"필드 :attribute 는 대문자와 소문자를 모두 포함해야 합니다.",
    "password.numbers"=>"필드 :attribute 는 최소 하나의 숫자를 포함해야 합니다.",
    "password.symbols"=>"필드 :attribute 는 최소 하나의 기호를 포함해야 합니다.",
    "password.uncompromised"=>"입력한 :attribute 값이 데이터 유출에서 발견되었습니다. 다른 값을 사용하세요.",
    "present"=>"필드 :attribute 는 존재해야 합니다.",
    "present_if"=>"필드 :attribute 는 :other 값이 :value 일 때 존재해야 합니다.",
    "present_unless"=>"필드 :attribute 는 :other 값이 :value 가 아닌 경우 존재해야 합니다.",
    "present_with"=>"필드 :attribute 는 :values 가 존재할 때 존재해야 합니다.",
    "present_with_all"=>"필드 :attribute 는 :values 가 모두 존재할 때 존재해야 합니다.",
    "previous"=>"&laquo; 이전",
    "prohibited"=>"필드 :attribute 는 금지되어 있습니다.",
    "prohibited_if"=>"필드 :attribute 는 :other 값이 :value 일 때 금지됩니다.",
    "prohibited_unless"=>"필드 :attribute 는 :other 가 :values 에 포함되지 않는 한 금지됩니다.",
    "prohibits"=>"필드 :attribute 는 :other 의 존재를 금지합니다.",
    "regex"=>"필드 :attribute 형식이 올바르지 않습니다.",
    "relatable"=>"필드 :attribute 는 이 리소스와 연결할 수 없습니다.",
    "required"=>"필드 :attribute 는 필수입니다.",
    "required_array_keys"=>"필드 :attribute 는 다음 값을 포함해야 합니다: :values.",
    "required_if"=>"필드 :attribute 는 :other 값이 :value 일 때 필수입니다.",
    "required_if_accepted"=>"이 필드는 :other 가 승인되었을 때 필수입니다.",
    "required_if_declined"=>"필드 :attribute 는 :other 가 거부되었을 때 필수입니다.",
    "required_unless"=>"필드 :attribute 는 :other 가 :values 에 포함되지 않는 한 필수입니다.",
    "required_with"=>"필드 :attribute 는 :values 가 존재할 때 필수입니다.",
    "required_with_all"=>"필드 :attribute 는 모든 :values 가 존재할 때 필수입니다.",
    "required_without"=>"필드 :attribute 는 :values 가 존재하지 않을 때 필수입니다.",
    "required_without_all"=>"필드 :attribute 는 :values 가 모두 존재하지 않을 때 필수입니다.",
    "reset"=>"비밀번호가 재설정되었습니다!",
    "same"=>"필드 :attribute 와 :other 는 동일해야 합니다.",
    "sent"=>"비밀번호 재설정 링크가 전송되었습니다!",
    "size.array"=>"필드 :attribute 는 :size 개의 요소를 가져야 합니다.",
    "size.file"=>"필드 :attribute 는 :size 킬로바이트여야 합니다.",
    "size.numeric"=>"필드 :attribute 는 :size 이어야 합니다.",
    "size.string"=>"필드 :attribute 는 :size 자여야 합니다.",
    "starts_with"=>"필드 :attribute 는 다음 값 중 하나로 시작해야 합니다: :values.",
    "string"=>"필드 :attribute 는 문자열이어야 합니다.",
    "throttle"=>"로그인 시도가 너무 많습니다. :seconds 초 후 다시 시도하세요.",
    "throttled"=>"다시 시도하기 전에 잠시 기다려 주세요.",
    "timezone"=>"필드 :attribute 는 유효한 시간대여야 합니다.",
    "token"=>"비밀번호 재설정 토큰이 올바르지 않습니다.",
    "ulid"=>"필드 :attribute 는 유효한 ULID여야 합니다.",
    "unique"=>"이 :attribute 는 이미 사용 중입니다.",
    "uploaded"=>"파일 :attribute 업로드에 실패했습니다.",
    "uppercase"=>":Attribute 는 대문자로 작성해야 합니다.",
    "url"=>"필드 :attribute 형식이 올바르지 않습니다.",
    "user"=>"해당 이메일을 가진 사용자를 찾을 수 없습니다.",
    "uuid"=>"필드 :attribute 는 유효한 UUID여야 합니다.",

    'total_upload_size_too_high' => '전체 최대 허용 크기는 :max 입니다',
    'total_upload_size_too_low' => '전체 최소 허용 크기는 :min 입니다',

    'file_too_big' => '파일이 너무 큽니다. 최대 크기: :max',
    'file_too_small' => '파일이 너무 작습니다. 최소 크기: :min',

    'incorrect_dimensions' => [
        'width' => '이미지 너비는 :width 픽셀이어야 합니다',
        'height' => '이미지 높이는 :height 픽셀이어야 합니다',
        'both' => '이미지 크기는 :width x :height 픽셀이어야 합니다',
    ],

    'width_not_between' => '이미지 너비는 :min 과 :max 픽셀 사이여야 합니다',
    'height_not_between' => '이미지 높이는 :min 과 :max 픽셀 사이여야 합니다',

    'max_items' => ':max 개까지만 업로드할 수 있습니다|:max 개까지만 업로드할 수 있습니다',
    'min_items' => '최소 :min 개 이상 업로드해야 합니다|최소 :min 개 이상 업로드해야 합니다',

    'extension' => '파일은 :extensions 형식이어야 합니다',
    'mime' => '파일은 MIME 타입 :mimes 이어야 합니다',
    'type' => ':values 형식의 파일을 업로드해야 합니다',

    /*
   |--------------------------------------------------------------------------
    | Custom Validation Language Lines
   |--------------------------------------------------------------------------
    */

    'custom' => [
        'sections.*.fields.title' => [
            'required' => '섹션 제목은 필수입니다',
            'max' => '섹션 제목은 최대 100자까지 가능합니다',
            'distinct' => '이 섹션 제목은 이미 존재합니다',
        ],
        'sections.*.fields.description' => [
            'required' => '섹션 내용은 필수입니다',
            'max' => '섹션 설명은 최대 2000자까지 가능합니다',
        ],
        'experiences.*.employer' => [
            'max' => '회사명은 최대 100자까지 가능합니다',
        ],
        'experiences.*.city' => [
            'max' => '도시명은 최대 100자까지 가능합니다',
        ],
        'educations.*.school' => [
            'max' => '학교명은 최대 100자까지 가능합니다',
        ],
        'educations.*.city' => [
            'max' => '도시명은 최대 100자까지 가능합니다',
        ],
        'educations.*.specialization' => [
            'max' => '전공명은 최대 100자까지 가능합니다',
        ],
    ],

    /*
   |--------------------------------------------------------------------------
    | Custom Validation Attributes
   |--------------------------------------------------------------------------
    */

    'attributes' => [
        'email'    => '이메일 주소',
        'password' => '비밀번호',
        'name'     => '이름',
        'message'  => '메시지',
        'agree'    => '동의',
        'captcha'  => '코드',
        'subject'  => '제목',
    ],

];
