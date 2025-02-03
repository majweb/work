<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class FirmUpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return request()->user()->hasRole('firm');
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'nip' => ['required', 'string',Rule::unique('firms', 'nip')->ignore(request()->user()->id,'user_id')],
            'description' => ['required', 'string','max:1000'],
            'regon' => ['required', 'numeric',Rule::unique('firms', 'regon')->ignore(request()->user()->id,'user_id')],
            'street' => ['required', 'string', 'max:60'],
            'number' => ['required', 'string', 'max:60'],
            'city' => ['required', 'string', 'max:60'],
            'postal' => ['required', 'string', 'max:60'],
            'country' => ['required', 'string', 'max:60'],
            'contact_phone' => ['required', 'array','min:1','between:1,3'=>function($attribute, $val, $fail){
                    if(count($val) > 3){
                        $fail('Za dużo elemntów');
                    }
            }],
            'contact_phone.*.phone'=>['required','numeric','digits between:1,30','distinct'],
            'contact_phone.*.desc'=>['required','string', 'distinct','max:100'],
            'invoice_same' => ['boolean'],
            'name_invoice' => ['required_if_declined:invoice_same','nullable', 'string', 'max:100',Rule::unique('firms', 'name_invoice')->ignore(request()->user()->id)],
            'nip_invoice' => ['required_if_declined:invoice_same','nullable', 'string',Rule::unique('firms', 'nip_invoice')->ignore(request()->user()->id)],
            'regon_invoice' => ['required_if_declined:invoice_same','nullable', 'numeric',Rule::unique('firms', 'regon_invoice')->ignore(request()->user()->id)],
            'street_invoice' => ['required_if_declined:invoice_same','nullable', 'string', 'max:60'],
            'number_invoice' => ['required_if_declined:invoice_same','nullable', 'string', 'max:60'],
            'city_invoice' => ['required_if_declined:invoice_same','nullable', 'string', 'max:60'],
            'postal_invoice' => ['required_if_declined:invoice_same','nullable', 'string', 'max:60'],
            'country_invoice' => ['required_if_declined:invoice_same','nullable', 'string', 'max:60'],
        ];
    }

    public function firmData(){
        return $this->validated();
    }

    public function attributes(): array
    {
        return [
            'nip' => strtolower(__('translate.nip')),
            'description' => strtolower(__('translate.description')),
            'regon' => strtolower(__('translate.regon')),
            'street' => strtolower(__('translate.Street')),
            'number' => strtolower(__('translate.Number')),
            'city' => strtolower(__('translate.City')),
            'postal' => strtolower(__('translate.Postal')),
            'country' => strtolower(__('translate.Country')),
            'contact_phone' => strtolower(__('translate.phone')),
            'contact_phone.*.phone' => strtolower(__('translate.phone')),
            'contact_phone.*.desc' => strtolower(__('translate.phoneDesc')),
            'name_invoice' => strtolower(__('translate.name')),
            'nip_invoice' => strtolower(__('translate.nip')),
            'regon_invoice' => strtolower(__('translate.regon')),
            'street_invoice' => strtolower(__('translate.Street')),
            'number_invoice' => strtolower(__('translate.Number')),
            'city_invoice' => strtolower(__('translate.City')),
            'postal_invoice' => strtolower(__('translate.Postal')),
            'country_invoice' => strtolower(__('translate.Country')),
        ];
    }
}
