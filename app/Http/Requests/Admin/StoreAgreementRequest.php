<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class StoreAgreementRequest extends FormRequest
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
        $rules = [
            'type' => 'required|string',
            'is_active' => 'required|boolean',
        ];

        foreach (config('langsShorts') as $lang) {
            $rules['description.' . $lang] = 'required|string';
        }

        return $rules;
    }

    /**
     * Get custom attributes for validator errors.
     *
     * @return array<string, string>
     */
    public function attributes(): array
    {
        $attributes = [
            'type' => 'typ formularza',
            'is_active' => 'status aktywności',
        ];

        foreach (config('langsShorts') as $lang) {
            $attributes['description.' . $lang] = 'treść zgody (' . strtoupper($lang) . ')';
        }

        return $attributes;
    }
}
