<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class UpdatePromotionServiceRequest extends FormRequest
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
        $langs = config('langsShorts');

        $rules = [
            'price' => ['required', 'numeric', 'min:0'],
            'active' => ['required', 'boolean'],
        ];

        foreach ($langs as $lang) {
                $rules["name.{$lang}"] = ['required', 'string', 'max:255'];
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
        $langs = config('langsShorts');

        $attributes = [
            'price' => 'koszt',
            'active' => 'status aktywności',
        ];

        foreach ($langs as $lang) {
            $langUpper = strtoupper($lang);
            $attributes["name.{$lang}"] = "nazwa ({$langUpper})";
        }

        return $attributes;
    }
}
