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
//        dd(request()->all());
        return [
            'name' => 'required|string|max:50|regex:/^[\pL\s\'"-]+$/u',
            'surname' => 'required|string|max:50|regex:/^[\pL\s\'"-]+$/u',
            'email' => 'required|email',
            'phone' => 'required|string|max:20|regex:/^\+?\d[\d\s]*$/',
            'captcha' => 'required|max:6',
            'cv' => 'nullable|in:1,2,3,4',
            'step' => 'required|in:1,2',
            'agreements' => 'required|array|size:3',
                 'file' => $this
                ->validateMultipleMedia()
                ->maxItems(5)
                ->extension(['pdf','txt','xls','doc','docx'])
                ->maxItemSizeInKb(3000),
            'birthday' => [
                function ($attribute, $value, $fail) {
                    $isCvAndStep2 = request()->cv == 1 && request()->step == 2;
                    if ($isCvAndStep2) {
                        if (empty($value)) {
                            return $fail(__('translate.inertiaDateApply'));
                        }

                        if (!preg_match('/^\d{4}-\d{2}-\d{2}$/', $value)) {
                            return $fail(__('translate.inertiaDateFormatApply'));
                        }

                        $date = \DateTime::createFromFormat('Y-m-d', $value);
                        if (!$date) {
                            return $fail(__('translate.inertiaDateFormatApply'));
                        }

                        $now = new \DateTime();
                        $minDate = (clone $now)->modify('-120 years');
                        if ($date < $minDate) {
                            return $fail(__('translate.inertiaDateFormatApply120'));
                        }
                    }
                }
                ],
            'city' => ['max:100',
                function ($attribute, $value, $fail) {
                    $isCvAndStep2 = request()->cv == 1 && request()->step == 2;
                    if ($isCvAndStep2) {
                        if (empty($value)) {
                            return $fail(__('translate.inertiaCityRequired'));
                        }
                        if (!preg_match('/^[\pL\s\']+$/u', $value)) {
                            return $fail(__('translate.inertiaCityLetters'));
                        }
                    }
                }
            ],
            'postal' => [
                function ($attribute, $value, $fail) {
                    $isCvAndStep2 = request()->cv == 1 && request()->step == 2;
                    if ($isCvAndStep2) {
                        if (empty($value)) {
                            return $fail(__('translate.inertiaPostalCodeRequired'));
                        }
                        if (!preg_match('/^([A-Za-z0-9]{5})|([A-Za-z0-9]{2,4}\s?[A-Za-z0-9]{1,3})$/', $value)) {
                            return $fail(__('translate.inertiaPostalCodeFormat'));
                        }
                    }
                },
            ],
            'photo' => ['nullable',
                $this
                    ->validateSingleMedia()
                    ->extension(['jpg','png','jpeg'])
                    ->widthBetween(2000,3000)
                    ->heightBetween(2000,3000)
                    ->maxItemSizeInKb(2000)
            ]
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
            'file' => strtolower(__('translate.file.singular')),
            'captcha' => strtolower(__('translate.captcha')),
            'agreements' => strtolower(__('translate.agreements')),
            'birthday' => strtolower(__('translate.birthdayDate')),
            'city' => strtolower(__('translate.City')),

        ];
    }

    public function messages(): array
    {
        return [
            'name.regex' => __('translate.aplyValidationNameRegex'),
            'surname.regex' => __('translate.aplyValidationNameRegex'),
            'agreements.required' => __('translate.agreementsRequired'),
            'agreements.size' => __('translate.agreementsSize'),
            'phone.regex' => __('translate.applyPhone'),
        ];
    }



}
