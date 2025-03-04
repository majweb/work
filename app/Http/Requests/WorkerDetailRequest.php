<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class WorkerDetailRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return request()->user()->hasRole('worker');
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'surname' => ['required', 'string', 'max:60'],
            'contact_phone'=>['required','numeric','digits between:1,30'],
        ];
    }

    public function workerData(){
        return $this->validated();
    }
    public function attributes(): array
    {
        return [
            'surname' => strtolower(__('translate.surname')),
            'contact_phone' => strtolower(__('translate.phone')),
        ];
    }


}
