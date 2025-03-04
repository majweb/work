<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Validator;
use Spatie\MediaLibraryPro\Rules\Concerns\ValidatesMedia;

class AplicationRequest extends FormRequest
{
    use ValidatesMedia;

    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return !request()->user() || (request()->user() && request()->user()->hasRole('worker'));

    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|string|max:255',
            'surname' => 'required|string|max:255',
            'email' => 'required|email',
            'phone' => 'required|string|max:20',
            'captcha' => 'required|max:6',
            'agreements' => 'required|array|size:3',
                 'file' => $this
                ->validateMultipleMedia()
                ->maxItems(5)
                ->extension(['pdf','txt','xls','doc','docx'])
                ->maxItemSizeInKb(3000)
                     ->attribute('name', 'required')

        ];
    }

    public function after(): array
    {
        return [
            function (Validator $validator) {
                $data = $validator->getData();
                $sessionCaptcha = session('captcha_text');
                if ($sessionCaptcha !== $data['captcha'] ) {
                    $validator->errors()->add(
                        'captcha',
                        __('translate.capchaError')
                    );
                }
            }
        ];
    }

    public function aplicationData(){
        return $this->validated();
    }

    public function attributes(): array
    {
        return [
            'name' => strtolower(__('translate.name')),
            'surname' => strtolower(__('translate.surname')),
            'phone' => strtolower(__('translate.phone')),
            'email' => strtolower(__('translate.email')),
            'file' => strtolower(__('translate.file')),
            'captcha' => strtolower(__('translate.captcha')),
            'agreements' => strtolower(__('translate.agreements'))
        ];
    }

    public function messages(): array
    {
        return [
            'agreements.required' => __('translate.agreementsRequired'),
            'agreements.size' => __('translate.agreementsSize'),
        ];
    }



}
