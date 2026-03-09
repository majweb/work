<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class FirmUpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        $userId = $this->route('user')->id;
        $firmId = $this->route('user')->firm?->id;

        return [
            'name' => ['required', 'string', 'max:255'],
            'email' => [
                'required',
                'string',
                'email',
                'max:255',
                Rule::unique('users', 'email')->ignore($userId),
            ],
            'details.nip' => [
                'required',
                'string',
                'max:20',
                Rule::unique('firms', 'nip')->ignore($firmId),
            ],
            'details.regon' => [
                'required',
                'numeric',
                'digits_between:1,20',
                Rule::unique('firms', 'regon')->ignore($firmId),
            ],
            'details.description' => ['required', 'string', 'max:1000'],
            'details.street' => ['required', 'string', 'max:60'],
            'details.number' => ['required', 'string', 'max:60'],
            'details.city' => ['required', 'string', 'max:60'],
            'details.postal' => ['required', 'string', 'max:60'],
            'details.countryJson' => ['required', 'array'],

            'details.invoice_same' => ['boolean'],

            'details.name_invoice' => [
                'required_unless:details.invoice_same,true',
                'nullable',
                'string',
                'max:100',
                Rule::unique('firms', 'name_invoice')->ignore($firmId),
            ],

            'details.nip_invoice' => [
                'required_unless:details.invoice_same,true',
                'nullable',
                'string',
                'max:20',
                Rule::unique('firms', 'nip_invoice')->ignore($firmId),
            ],

            'details.regon_invoice' => [
                'required_unless:details.invoice_same,true',
                'nullable',
                'numeric',
                'digits_between:1,20',
                Rule::unique('firms', 'regon_invoice')->ignore($firmId),
            ],

            'details.street_invoice' => ['required_unless:details.invoice_same,true', 'nullable', 'string', 'max:60'],
            'details.number_invoice' => ['required_unless:details.invoice_same,true', 'nullable', 'string', 'max:60'],
            'details.city_invoice' => ['required_unless:details.invoice_same,true', 'nullable', 'string', 'max:60'],
            'details.postal_invoice' => ['required_unless:details.invoice_same,true', 'nullable', 'string', 'max:60'],
            'details.countryInvoiceJson' => ['required_unless:details.invoice_same,true', 'nullable', 'array'],

            'details.www' => ['required', 'string', 'url:http,https', 'max:255'],
            'details.count_workers' => ['nullable', 'integer', 'digits_between:1,5'],
            'details.annual_turnover' => ['nullable', 'string', 'max:50'],
            'details.extra_description' => ['nullable', 'string', 'max:2000'],
        ];
    }

    public function attributes(): array
    {
        return [
            'name' => strtolower(__('translate.name')),
            'email' => strtolower(__('translate.email')),
            'details.nip' => strtolower(__('translate.nip')),
            'details.regon' => strtolower(__('translate.regon')),
            'details.description' => strtolower(__('translate.description')),
            'details.street' => strtolower(__('translate.Street')),
            'details.number' => strtolower(__('translate.Number')),
            'details.city' => strtolower(__('translate.City')),
            'details.postal' => strtolower(__('translate.Postal')),
            'details.countryJson' => strtolower(__('translate.Country')),
            'details.www' => strtolower(__('translate.www')),
            'details.count_workers' => strtolower(__('translate.count_workers')),
            'details.annual_turnover' => strtolower(__('translate.annual_turnover')),
            'details.extra_description' => strtolower(__('translate.extra_description')),
            'details.name_invoice' => strtolower(__('translate.name')),
            'details.nip_invoice' => strtolower(__('translate.nip')),
            'details.regon_invoice' => strtolower(__('translate.regon')),
            'details.street_invoice' => strtolower(__('translate.Street')),
            'details.number_invoice' => strtolower(__('translate.Number')),
            'details.city_invoice' => strtolower(__('translate.City')),
            'details.postal_invoice' => strtolower(__('translate.Postal')),
            'details.countryInvoiceJson' => strtolower(__('translate.Country')),
        ];
    }
}
