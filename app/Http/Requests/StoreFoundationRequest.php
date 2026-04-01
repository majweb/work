<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreFoundationRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => ['required', 'string', 'max:255'],
            'category_id' => ['required', 'array'],
            'subcategory_id' => ['required', 'array'],

            'phone' => ['required', 'string', 'max:50'],
            'email' => ['required', 'email', 'max:255'],
            'www'   => [
                'required',
                'string',
                'max:255',
                'regex:/^https?:\/\/.+$/i' // <- link musi zaczynać się od http:// lub https://
            ],
            'facebook_url' => [
                'nullable',
                'string',
                'max:255',
                'regex:/^https?:\/\/.+$/i'
            ],
            'instagram_url' => [
                'nullable',
                'string',
                'max:255',
                'regex:/^https?:\/\/.+$/i'
            ],
            'linkedin_url' => [
                'nullable',
                'string',
                'max:255',
                'regex:/^https?:\/\/.+$/i'
            ],
            'x_url' => [
                'nullable',
                'string',
                'max:255',
                'regex:/^https?:\/\/.+$/i'
            ],
            'tiktok_url' => [
                'nullable',
                'string',
                'max:255',
                'regex:/^https?:\/\/.+$/i'
            ],
            'description' => ['required', 'string'],

            'address_street' => ['required', 'string', 'max:255'],
            'address_city' => ['required', 'string', 'max:255'],
            'address_country' => ['required', 'array'],
            'address_postcode' => ['required','string', 'max:255'],

            'year_of_foundation' => ['required', 'digits:4', 'integer', 'min:1901', 'max:' . date('Y')],
            'worker_count' => ['required', 'integer', 'min:0'],
            'benefit_organization' => ['boolean'],

            'country' => ['required', 'string', 'max:5'],   // ← to jest ważne

            'latitude' => ['required', 'numeric'],
            'longitude' => ['required', 'numeric'],

            'iban' => ['required'],   // max długość IBAN
            'swift' => ['required'],  // max długość SWIFT/BIC
            'krs' => ['required'],    // max długość KRS

            'active' => ['boolean'],
            'photo'   => ['required','array'],
            'banner'   => ['required','array'],

        ];
    }

    public function messages(): array
    {
        return [
            'www.regex' => __('translate.validation.www_regex'),
            'facebook_url.regex' => __('translate.validation.facebook_url_regex'),
            'instagram_url.regex' => __('translate.validation.instagram_url_regex'),
            'linkedin_url.regex' => __('translate.validation.linkedin_url_regex'),
            'x_url.regex' => __('translate.validation.x_url_regex'),
            'tiktok_url.regex' => __('translate.validation.tiktok_url_regex'),
        ];
    }

    public function attributes(): array
    {
        return [
            'category_id' => __('translate.validation.attributes.category_id'),
            'subcategory_id' => __('translate.validation.attributes.subcategory_id'),
            'year_of_foundation' => __('translate.validation.attributes.year_of_foundation'),
            'worker_count' => __('translate.validation.attributes.worker_count'),
            'annual_turnover' => __('translate.validation.attributes.annual_turnover'),
            'address_street' => __('translate.validation.attributes.address_street'),
            'address_city' => __('translate.validation.attributes.address_city'),
            'address_country' => __('translate.validation.attributes.address_country'),
            'address_postcode' => __('translate.validation.attributes.address_postcode'),
            'phone' => __('translate.validation.attributes.phone'),
            'description' => __('translate.validation.attributes.description'),
            'photo' => __('translate.validation.attributes.photo'),
            'facebook_url' => __('translate.validation.attributes.facebook_url'),
            'instagram_url' => __('translate.validation.attributes.instagram_url'),
            'linkedin_url' => __('translate.validation.attributes.linkedin_url'),
            'x_url' => __('translate.validation.attributes.x_url'),
            'tiktok_url' => __('translate.validation.attributes.tiktok_url'),
        ];
    }
}
