<?php

namespace App\Http\Requests;

use App\Enum\Currency;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules\Enum;

class FirmBuyRequest extends FormRequest
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
            'currency' => ['required', 'string',new Enum(Currency::class)],
        ];
    }
    public function currencyData(){
        return $this->validated();
    }

    public function attributes(): array
    {
        return [
            'currency' => strtolower(__('auth.currency')),
        ];
    }
}
