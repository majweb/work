<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FirmInvoiceUpdate extends FormRequest
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
            'nip_invoice' => 'required|string',
            'name_invoice' => 'required|string',
            'street_invoice' => 'required|string',
            'postal_invoice' => 'required|string',
            'city_invoice' => 'required|string',
            'country_invoice' => 'required|string',
            'date_invoice' => 'required|date_format:Y-m-d',
            'number' => 'required|numeric',
            'day' => 'required|numeric',
            'month' => 'required|numeric',
            'year' => 'required|numeric'
        ];
    }
    public function invoiceData(){
        return $this->validated();
    }

    public function attributes(): array
    {
        return [
            'nip_invoice' => strtolower(__('auth.nip')),
            'name_invoice' => strtolower(__('auth.name')),
            'street_invoice' => strtolower(__('auth.Street')),
            'postal_invoice' => strtolower(__('auth.Postal')),
            'city_invoice' => strtolower(__('auth.City')),
            'country_invoice' => strtolower(__('auth.Country')),
            'dateInvoice' => strtolower(__('auth.dateInvoice')),
            'number' => strtolower(__('auth.Number')),
            'day' => strtolower(__('auth.day')),
            'month' => strtolower(__('auth.month')),
            'year' => strtolower(__('auth.year')),
        ];
    }
}