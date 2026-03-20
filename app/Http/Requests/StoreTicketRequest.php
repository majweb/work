<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreTicketRequest extends FormRequest
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
            'type' => ['required', 'in:question,tech_problem,new_feature'],
            'subject' => ['required', 'string', 'max:255'],
            'content' => ['required', 'string', 'max:500'],
            'captcha' => ['required', 'string'],
            'agreements' => [
                'nullable',
                function ($attribute, $value, $fail) {
                    $count = \App\Models\Agreement::where('type', 'tickets')->where('is_active', true)->count();
                    $valueCount = is_array($value) ? count($value) : 0;

                    if ($count > 0 && $valueCount !== $count) {
                        $fail(__('translate.agreements_required_all'));
                    }
                },
            ],
        ];
    }

    /**
     * Get custom attributes for validator errors.
     *
     * @return array<string, string>
     */
    public function attributes(): array
    {
        return [
            'type' => strtolower(__('translate.support_type')),
            'subject' => strtolower(__('translate.support_subject')),
            'content' => strtolower(__('translate.support_content')),
            'captcha' => strtolower(__('translate.rewrite_code')),
            'agreements' => strtolower(__('translate.agreements')),
        ];
    }
}
