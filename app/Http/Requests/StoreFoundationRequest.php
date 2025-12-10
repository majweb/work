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
            'description' => ['required', 'string'],

            'address_street' => ['required', 'string', 'max:255'],
            'address_city' => ['required', 'string', 'max:255'],
            'address_country' => ['required', 'array'],


            'year_of_foundation' => ['required', 'digits:4', 'integer', 'min:1901', 'max:' . date('Y')],
            'worker_count' => ['required', 'integer', 'min:0'],
            'annual_turnover' => ['required', 'numeric', 'min:0'],

            'country' => ['required', 'string', 'max:5'],   // ← to jest ważne

            'latitude' => ['required', 'numeric'],
            'longitude' => ['required', 'numeric'],

            'iban' => ['required'],   // max długość IBAN
            'swift' => ['required'],  // max długość SWIFT/BIC
            'krs' => ['required'],    // max długość KRS

            'active' => ['boolean'],
            'photo'   => ['required','array'],

        ];
    }

    public function messages(): array
    {
        return [
            'www.regex' => 'Link musi zaczynać się od http:// lub https://',
        ];
    }

    public function attributes(): array
    {
        return [
            'category_id' =>'kategoria',
            'subcategory_id' =>'podkategoria',
            'year_of_foundation' =>'rok załozenia',
            'worker_count' =>'ilość pracowników',
            'annual_turnover' =>'roczne obroty',
            'address_street' =>'ulica automplete',
            'address_city' =>'miasto automplete',
            'address_country' =>'kraj automplete',
            'phone' =>'telefon',
            'description' =>'opis',
            'photo' =>'logo',
        ];
    }
}
