<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class FirmUpdateRequest extends FormRequest
{
    public function authorize(): bool
    {
        return $this->user()->hasRole('firm');
    }

    public function rules(): array
    {
        // ID firmy aktualnie edytowanej
        $firmId = $this->user()->firm->id;

        return [
            'nip' => [
                'required',
                'string',
                Rule::unique('firms', 'nip')->ignore($firmId)
            ],

            'regon' => [
                'required',
                'numeric',
                Rule::unique('firms', 'regon')->ignore($firmId)
            ],

            'description' => ['required', 'string', 'max:1000'],
            'street' => ['required', 'string', 'max:60'],
            'number' => ['required', 'string', 'max:60'],
            'city' => ['required', 'string', 'max:60'],
            'postal' => ['required', 'string', 'max:60'],

            'countryJson' => ['required', 'array'],

            'contact_phone' => [
                'required',
                'array',
                'min:1',
                function($attribute, $val, $fail) {
                    if (count($val) > 3) {
                        $fail('Za dużo elementów');
                    }
                }
            ],

            'contact_phone.*.phone' => ['required', 'numeric', 'digits_between:1,30', 'distinct'],
            'contact_phone.*.desc'  => ['required', 'string', 'distinct', 'max:100'],

            'invoice_same' => ['boolean'],

            'name_invoice' => [
                'required_unless:invoice_same,true',
                'nullable',
                'string',
                'max:100',
                Rule::unique('firms', 'name_invoice')->ignore($firmId)
            ],

            'nip_invoice' => [
                'required_unless:invoice_same,true',
                'nullable',
                'string',
                Rule::unique('firms', 'nip_invoice')->ignore($firmId)
            ],

            'regon_invoice' => [
                'required_unless:invoice_same,true',
                'nullable',
                'numeric',
                Rule::unique('firms', 'regon_invoice')->ignore($firmId)
            ],

            'street_invoice'  => ['required_unless:invoice_same,true', 'nullable', 'string', 'max:60'],
            'number_invoice'  => ['required_unless:invoice_same,true', 'nullable', 'string', 'max:60'],
            'city_invoice'    => ['required_unless:invoice_same,true', 'nullable', 'string', 'max:60'],
            'postal_invoice'  => ['required_unless:invoice_same,true', 'nullable', 'string', 'max:60'],
            'country_invoice' => ['required_unless:invoice_same,true', 'nullable', 'string', 'max:60'],
            'countryInvoiceJson' => ['required_unless:invoice_same,true', 'nullable', 'array'],
        ];
    }

    public function firmData()
    {
        return $this->validated();
    }
}
