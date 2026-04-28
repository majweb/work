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

    "accepted" => "The :attribute must be accepted.",
    "accepted_if" => "The :attribute must be accepted when :other is :value.",
    "active_url" => "The :attribute is not a valid URL.",
    "after" => "The :attribute must be a date after :date.",
    "after_or_equal" => "The :attribute must be a date not earlier than :date.",
    "alpha" => "The :attribute may only contain letters.",
    "alpha_dash" => "The :attribute may only contain letters, numbers, dashes, and underscores.",
    "alpha_num" => "The :attribute may only contain letters and numbers.",
    "array" => "The :attribute must be an array.",
    "ascii" => "The :attribute may only contain single-byte alphanumeric characters and symbols.",
    "attached" => "The :attribute is already attached.",
    "before" => "The :attribute must be a date before :date.",
    "before_or_equal" => "The :attribute must be a date not later than :date.",
    "between.array" => "The :attribute must have between :min - :max items.",
    "between.file" => "The :attribute must be between :min - :max kilobytes.",
    "between.numeric" => "The :attribute must be between :min - :max.",
    "between.string" => "The :attribute must be between :min - :max characters.",
    "boolean" => "The :attribute field must be true or false.",
    "can" => "The :attribute field contains an unauthorized value.",
    "confirmed" => "The :attribute confirmation does not match.",
    "contains" => "The :attribute field is missing a required value.",
    "current_password" => "The password is incorrect.",
    "date" => "The :attribute is not a valid date.",
    "date_equals" => "The :attribute must be a date equal to :date.",
    "date_format" => "The :attribute does not match the format :format.",
    "decimal" => "The :attribute must have :decimal decimal places.",
    "declined" => "The :attribute must be declined.",
    "declined_if" => "The :attribute must be declined when :other is :value.",
    "different" => "The :attribute and :other must be different.",
    "digits" => "The :attribute must be :digits digits.",
    "digits_between" => "The :attribute must be between :min and :max digits.",
    "dimensions" => "The :attribute has invalid image dimensions.",
    "distinct" => "The :attribute field has a duplicate value.",
    "doesnt_end_with" => "The :attribute may not end with one of the following: :values.",
    "doesnt_start_with" => "The :attribute may not start with one of the following: :values.",
    "email" => "The :attribute must be a valid email address.",
    "ends_with" => "The :attribute must end with one of the following: :values.",
    "enum" => "The selected :attribute is invalid.",
    "exists" => "The selected :attribute is invalid.",
    "extensions" => "The :attribute must have one of the following extensions: :values.",
    "failed" => "Invalid login or password.",
    "file" => "The :attribute must be a file.",
    "filled" => "The :attribute field must be filled.",
    "gt.array" => "The :attribute must have more than :value items.",
    "gt.file" => "The :attribute must be greater than :value kilobytes.",
    "gt.numeric" => "The :attribute must be greater than :value.",
    "gt.string" => "The :attribute must be longer than :value characters.",
    "gte.array" => "The :attribute must have :value items or more.",
    "gte.file" => "The :attribute must be greater than or equal to :value kilobytes.",
    "gte.numeric" => "The :attribute must be greater than or equal to :value.",
    "gte.string" => "The :attribute must be longer than or equal to :value characters.",
    "hex_color" => "The :attribute must be a valid hexadecimal color.",
    "image" => "The :attribute must be an image.",
    "in" => "The selected :attribute is invalid.",
    "in_array" => "The :attribute field does not exist in :other.",
    "integer" => "The :attribute must be an integer.",
    "ip" => "The :attribute must be a valid IP address.",
    "ipv4" => "The :attribute must be a valid IPv4 address.",
    "ipv6" => "The :attribute must be a valid IPv6 address.",
    "json" => "The :attribute must be a valid JSON string.",
    "list" => "The :attribute field must be a list.",
    "lowercase" => "The :attribute must be lowercase.",
    "lt.array" => "The :attribute must have less than :value items.",
    "lt.file" => "The :attribute must be less than :value kilobytes.",
    "lt.numeric" => "The :attribute must be less than :value.",
    "lt.string" => "The :attribute must be shorter than :value characters.",
    "lte.array" => "The :attribute must not have more than :value items.",
    "lte.file" => "The :attribute must be less than or equal to :value kilobytes.",
    "lte.numeric" => "The :attribute must be less than or equal to :value.",
    "lte.string" => "The :attribute must be shorter than or equal to :value characters.",
    "mac_address" => "The :attribute must be a valid MAC address.",
    "max.array" => "The :attribute may not have more than :max items.",
    "max.file" => "The :attribute may not be greater than :max kilobytes.",
    "max.numeric" => "The :attribute may not be greater than :max.",
    "max.string" => "The :attribute may not be longer than :max characters.",
    "max_digits" => "The :attribute may not have more than :max digits.",
    "mimes" => "The :attribute must be a file of type: :values.",
    "mimetypes" => "The :attribute must be a file of type: :values.",
    "min.array" => "The :attribute must have at least :min items.",
    "min.file" => "The :attribute must be at least :min kilobytes.",
    "min.numeric" => "The :attribute must be at least :min.",
    "min.string" => "The :attribute must be at least :min characters.",
    "min_digits" => "The :attribute must have at least :min digits.",
    "missing" => "The :attribute field must be missing.",
    "missing_if" => "The :attribute field must be missing when :other is :value.",
    "missing_unless" => "The :attribute field must be missing unless :other is :value.",
    "missing_with" => "The :attribute field must be missing when :values is present.",
    "missing_with_all" => "The :attribute field must be missing when :values are present.",
    "multiple_of" => "The :attribute must be a multiple of :value.",
    "next" => "Next &raquo;",
    "not_in" => "The selected :attribute is invalid.",
    "not_regex" => "The :attribute format is invalid.",
    "numeric" => "The :attribute must be a number.",
    "password" => "The password is incorrect.",
    "password.letters" => "The :attribute must contain at least one letter.",
    "password.mixed" => "The :attribute must contain at least one uppercase and one lowercase letter.",
    "password.numbers" => "The :attribute must contain at least one number.",
    "password.symbols" => "The :attribute must contain at least one symbol.",
    "password.uncompromised" => "The given :attribute has appeared in a data leak. Please choose a different :attribute.",
    "present" => "The :attribute field must be present.",
    "present_if" => "The :attribute field must be present when :other is :value.",
    "present_unless" => "The :attribute field must be present unless :other is :value.",
    "present_with" => "The :attribute field must be present when :values is present.",
    "present_with_all" => "The :attribute field must be present when :values are present.",
    "previous" => "&laquo; Previous",
    "prohibited" => "The :attribute field is prohibited.",
    "prohibited_if" => "The :attribute field is prohibited when :other is :value.",
    "prohibited_unless" => "The :attribute field is prohibited unless :other is in :values.",
    "prohibits" => "The :attribute field prohibits :other from being present.",
    "regex" => "The :attribute format is invalid.",
    "relatable" => "The :attribute may not be associated with this resource.",
    "required" => "The :attribute field is required.",
    "required_array_keys" => "The :attribute field must contain entries for: :values.",
    "required_if" => "The :attribute field is required when :other is :value.",
    "required_if_accepted" => "The :attribute field is required when :other is accepted.",
    "required_if_declined" => "The :attribute field is required when :other is declined.",
    "required_unless" => "The :attribute field is required unless :other is in :values.",
    "required_with" => "The :attribute field is required when :values is present.",
    "required_with_all" => "The :attribute field is required when :values are present.",
    "required_without" => "The :attribute field is required when :values is not present.",
    "required_without_all" => "The :attribute field is required when none of :values are present.",
    "reset" => "Your password has been reset!",
    "same" => "The :attribute and :other must match.",
    "sent" => "We have emailed your password reset link!",
    "size.array" => "The :attribute must contain :size items.",
    "size.file" => "The :attribute must be :size kilobytes.",
    "size.numeric" => "The :attribute must be :size.",
    "size.string" => "The :attribute must be :size characters.",
    "starts_with" => "The :attribute must start with one of the following: :values.",
    "string" => "The :attribute must be a string.",
    "throttle" => "Too many login attempts. Please try again in :seconds seconds.",
    "throttled" => "Please wait before trying again.",
    "timezone" => "The :attribute must be a valid timezone.",
    "token" => "This password reset token is invalid.",
    "ulid" => "The :attribute must be a valid ULID.",
    "unique" => "The :attribute has already been taken.",
    "uploaded" => "The :attribute failed to upload.",
    "uppercase" => "The :attribute must be uppercase.",
    "url" => "The :attribute format is invalid.",
    "user" => "We can't find a user with that email address.",
    "uuid" => "The :attribute must be a valid UUID.",

    'total_upload_size_too_high' => 'The maximum allowed size in total is :max',
    'total_upload_size_too_low' => 'The minimum allowed size in total is :min',

    'file_too_big' => 'This file is too big. Max allowed size :max',
    'file_too_small' => 'This file is too small. It should at least be :min',

    'incorrect_dimensions' => [
        'width' => 'Image width must be :width pixels',
        'height' => 'Image height must be :height pixels',
        'both' => 'Image dimensions must be :width x :height pixels',
    ],

    'width_not_between' => 'Image width must be between :min and :max pixels',
    'height_not_between' => 'Image height must be between :min and :max pixels',

    'max_items' => 'You may only upload :max item|You may only upload :max items',
    'min_items' => 'You must upload at least :min item|You must upload at least :min items',

    'extension' => 'File must be of type :extensions',
    'mime' => 'File must have mime type :mimes',
    'type' => 'You must upload a file of type :values',

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
            'required' => 'Section title is required',
            'max' => 'Section title must not exceed 100 characters',
            'distinct' => 'Section title already exists',
        ],
        'sections.*.fields.description' => [
            'required' => 'Section content is required',
            'max' => 'Section title must not exceed 2000 characters',
        ],
        'experiences.*.employer' => [
            'max' => 'Employer name must not exceed 100 characters',
        ],
        'experiences.*.city' => [
            'max' => 'City name must not exceed 100 characters',
        ],
        'educations.*.school' => [
            'max' => 'School name must not exceed 100 characters',
        ],
        'educations.*.city' => [
            'max' => 'City name must not exceed 100 characters',
        ],
        'educations.*.specialization' => [
            'max' => 'Specialization name must not exceed 100 characters',
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
        'email'    => 'email address',
        'password' => 'password',
        'name'     => 'name',
        'message'  => 'message',
        'agree'    => 'agreement',
        'captcha'  => 'code',
        'subject'  => 'subject',
    ],

];
