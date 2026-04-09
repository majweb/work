<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class UpdateAgreementRequest extends FormRequest
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
            'is_required' => 'required|boolean',
            'parent_id' => 'nullable|exists:agreements,id',
        ];

        $langs = config('langsShorts');
        $hasAnyHelpText = false;

        // Sprawdzamy, czy przesłano help_text i czy zawiera jakiekolwiek niepuste wartości
        if ($this->has('help_text') && is_array($this->input('help_text'))) {
            foreach ($this->input('help_text') as $value) {
                if (! is_null($value) && trim((string) $value) !== '') {
                    $hasAnyHelpText = true;
                    break;
                }
            }
        }

        foreach ($langs as $lang) {
            $rules['description.'.$lang] = 'required|string';

            if ($this->filled('parent_id')) {
                $rules['help_text.'.$lang] = 'nullable';
            } else {
                // Jeśli jakikolwiek help_text jest wypełniony, wszystkie stają się wymagane.
                // Jeśli wszystkie są puste, wszystkie są nullable.
                $rules['help_text.'.$lang] = ($hasAnyHelpText ? 'required|string' : 'nullable');
            }
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
            'is_required' => 'wymagalność',
            'parent_id' => 'zgoda nadrzędna',
        ];

        foreach (config('langsShorts') as $lang) {
            $attributes['description.'.$lang] = 'treść zgody ('.strtoupper($lang).')';
            $attributes['help_text.'.$lang] = 'tekst pomocniczy ('.strtoupper($lang).')';
        }

        return $attributes;
    }
}
