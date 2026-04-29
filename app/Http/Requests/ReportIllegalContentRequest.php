<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ReportIllegalContentRequest extends FormRequest
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
            'scope' => ['required', 'string', 'in:illegal,copyright,other'],
            'signaling_entity' => ['required', 'boolean'],
            'email' => ['required', 'email', 'max:255'],
            'name' => ['required', 'string', 'max:255'],
            'company_name' => ['nullable', 'string', 'max:255'],
            'links' => ['required', 'string'],
            'details' => ['required', 'string','max:500'],
            'legal_provision' => ['nullable', 'string'],
            'additional_info' => ['nullable', 'string'],
            'declaration' => ['required', 'accepted'],
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
            'scope' => __('illegalForm.attributes.scope'),
            'signaling_entity' => __('illegalForm.attributes.signaling_entity'),
            'email' => __('illegalForm.attributes.email'),
            'name' => __('illegalForm.attributes.name'),
            'company_name' => __('illegalForm.attributes.company_name'),
            'links' => __('illegalForm.attributes.links'),
            'details' => __('illegalForm.attributes.details'),
            'legal_provision' => __('illegalForm.attributes.legal_provision'),
            'additional_info' => __('illegalForm.attributes.additional_info'),
            'declaration' => __('illegalForm.attributes.declaration'),
        ];
    }
}
