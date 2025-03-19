<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Validator;
use Spatie\MediaLibraryPro\Rules\Concerns\ValidatesMedia;
use Illuminate\Validation\Rule;

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
                    $isCvAndStep2 = request()->cv == 1 && request()->step == 2 && request()->cvStandardType == 2;
                    if ($isCvAndStep2) {
                        if (empty($value)) {
                            return $fail(__('translate.inertiaDateApply'));
                        }
                        // Sprawdzanie formatu daty: dd-MM-yyyy
                        $date = \DateTime::createFromFormat('d-m-Y', $value);

                        // Jeśli data nie pasuje do formatu, zwróć błąd
                        if (!$date || $date->format('d-m-Y') !== $value) {
                            return $fail(__('translate.inertiaDateFormatApply'));
                        }

                        // Sprawdzanie, czy data nie jest starsza niż 120 lat
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
                    $isCvAndStep2 = request()->cv == 1 && request()->step == 2 && request()->cvStandardType == 2;
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
                    $isCvAndStep2 = request()->cv == 1 && request()->step == 2 && request()->cvStandardType == 2;
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
            'cvStandardType' => [
                function ($attribute, $value, $fail) {
                    $isCvAndStep2 = request()->cv == 1 && request()->step == 2;
                    if ($isCvAndStep2) {
                        if (empty($value)) {
                            return $fail(__('translate.inertiaCvStandardType'));
                        }
                        if ($value != 1 && $value != 2) {
                            return $fail(__('translate.inertiaInvalidValue')); // Komunikat o błędzie
                        }
                    }
                },
                'in:1,2'
            ],
            'photo' => ['nullable',
                $this
                    ->validateSingleMedia()
                    ->extension(['jpg','png','jpeg'])
                    ->widthBetween(300,1024)
                    ->heightBetween(300,1024)
                    ->maxItemSizeInKb(2000)
            ],
            'cvFile' => [
            function ($attribute, $value, $fail) {
                $isCvAndStep2 = request()->cv == 1 && request()->step == 2 && request()->cvStandardType == 1;
                if ($isCvAndStep2) {
                    if (empty($value)) {
                        return $fail(__('translate.fileCvRequired'));
                    }
                }
            },
                $this
                    ->validateSingleMedia()
                    ->extension(['pdf','txt','xls','doc','docx'])
                    ->maxItemSizeInKb(3000)
            ],
            'experiences' => [
                function ($attribute, $value, $fail) {
                $isCvAndStep2 = request()->cv == 1 && request()->step == 2 && request()->cvStandardType == 2;
                if ($isCvAndStep2) {
                    if (empty($value)) {
                        return $fail(__('translate.experiencesRequired'));
                    }
                    if ($isCvAndStep2) {
                        if (!is_array($value) || count($value) < 1) {
                            $fail(__('translate.experiencesRequired'));
                        }
                    }
                    }
                },
                ],
            'experiences.*.employer'=>[function ($attribute, $value, $fail) {
                $isCvAndStep2 = request()->cv == 1 && request()->step == 2 && request()->cvStandardType == 2;
                if ($isCvAndStep2) {
                    if (empty($value)) {
                        return $fail(__('translate.experiencesEmployerRequired'));
                    }

                    if (!preg_match('/^[\pL0-9\s\'\"-]+$/u', $value)) {
                        return $fail(__('translate.experiencesEmployerChars'));
                    }
                }
            },'string','max:100'],
            'experiences.*.position'=>[
                function ($attribute, $value, $fail) {
                $isCvAndStep2 = request()->cv == 1 && request()->step == 2 && request()->cvStandardType == 2;
                if ($isCvAndStep2) {
                    if (empty($value)) {
                        return $fail(__('translate.experiencesPositionRequired'));
                    }
                }
            }],
            'experiences.*.start'=>[
                function ($attribute, $value, $fail) {
                    $isCvAndStep2 = request()->cv == 1 && request()->step == 2 && request()->cvStandardType == 2;
                    if ($isCvAndStep2) {
                        if (empty($value)) {
                            return $fail(__('translate.experiencesDateRequired'));
                        }
                        if (!isset($value['year'], $value['month']) || !is_numeric($value['year']) || !is_numeric($value['month'])) {
                            return $fail(__('translate.invalidDateFormat'));
                        }
                    }
                }, 'array',
            ],
            'experiences.*.isCurrent'=>[
                'boolean'
            ],
            'experiences.*.end'=>[
                function ($attribute, $value, $fail) {
                    $index = explode('.', $attribute)[1];  // Uzyskujemy numer indeksu z nazwy atrybutu
                    $isCurrent = request()->input("experiences.$index.isCurrent");

                    // Sprawdzamy, czy spełnione są warunki dla `cv` i `step`
                    $isCvAndStep2 = request()->cv == 1 && request()->step == 2 && request()->cvStandardType == 2;

                    if ($isCvAndStep2) {
                        if ($isCurrent == true) {
                            return;
                        }
                        if (empty($value)) {
                            return $fail(__('translate.experiencesDateRequired'));
                        }

//
                        if (!isset($value['year'], $value['month']) || !is_numeric($value['year']) || !is_numeric($value['month'])) {
                            return $fail(__('translate.invalidDateFormat'));
                        }

                        $startDate = request()->input("experiences.$index.start");
                        if (!isset($startDate['year'], $startDate['month']) || !is_numeric($startDate['year']) || !is_numeric($startDate['month'])) {
                            return $fail(__('translate.invalidDateFormat'));
                        }
                        $startFormatted = sprintf('%04d-%02d', $startDate['year'], $startDate['month'] + 1);
                        $endFormatted = sprintf('%04d-%02d', $value['year'], $value['month'] + 1);

                        if (!preg_match('/^\d{4}-\d{2}$/', $endFormatted)) {
                            return $fail(__('translate.invalidDateFormat'));
                        }

                        if ($endFormatted < $startFormatted) {
                            return $fail(__('translate.dateAfterStartRequired'));
                        }
//
                    }
                }],
            'experiences.*.city' => ['max:100',
                function ($attribute, $value, $fail) {
                    $isCvAndStep2 = request()->cv == 1 && request()->step == 2 && request()->cvStandardType == 2;
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
            'educations' => [
                function ($attribute, $value, $fail) {
                    $isCvAndStep2 = request()->cv == 1 && request()->step == 2 && request()->cvStandardType == 2;
                    if ($isCvAndStep2) {
                        if (empty($value)) {
                            return $fail(__('translate.educationsRequired'));
                        }
                        if ($isCvAndStep2) {
                            if (!is_array($value) || count($value) < 1) {
                                $fail(__('translate.educationsRequired'));
                            }
                        }
                    }
                },
            ],
            'educations.*.school'=>[function ($attribute, $value, $fail) {
                $isCvAndStep2 = request()->cv == 1 && request()->step == 2 && request()->cvStandardType == 2;
                if ($isCvAndStep2) {
                    if (empty($value)) {
                        return $fail(__('translate.educationsSchoolRequired'));
                    }

                    if (!preg_match('/^[\pL0-9\s\'\"-]+$/u', $value)) {
                        return $fail(__('translate.experiencesEmployerChars'));
                    }
                }
            },'string','max:100'],
            'educations.*.level'=>[
                function ($attribute, $value, $fail) {
                    $isCvAndStep2 = request()->cv == 1 && request()->step == 2 && request()->cvStandardType == 2;
                    if ($isCvAndStep2) {
                        if (empty($value)) {
                            return $fail(__('translate.educationsSchoolLevelRequired'));
                        }
                    }
                }],
            'educations.*.specialization' => ['max:100',
                function ($attribute, $value, $fail) {
                    $isCvAndStep2 = request()->cv == 1 && request()->step == 2 && request()->cvStandardType == 2;
                    if ($isCvAndStep2) {
                        if (empty($value)) {
                            return $fail(__('translate.experiencesSpecializationRequired'));
                        }
                        if (!preg_match('/^[\pL0-9\s\'\"-]+$/u', $value)) {
                            return $fail(__('translate.experiencesEmployerChars'));
                        }
                    }
                }
            ],
            'educations.*.finish'=>[
                function ($attribute, $value, $fail) {
                    $isCvAndStep2 = request()->cv == 1 && request()->step == 2 && request()->cvStandardType == 2;
                    if ($isCvAndStep2) {
                        if (empty($value)) {
                            return $fail(__('translate.experiencesDateRequired'));
                        }

                        if (!is_int($value)) {
                            return $fail(__('translate.invalidYearFormat'));
                        }
                    }
                },
            ],
            'educations.*.city' => ['max:100',
                function ($attribute, $value, $fail) {
                    $isCvAndStep2 = request()->cv == 1 && request()->step == 2 && request()->cvStandardType == 2;
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
            'courses' => [
                function ($attribute, $value, $fail) {
                    $isCvAndStep2 = request()->cv == 1 && request()->step == 2 && request()->cvStandardType == 2;
                    if ($isCvAndStep2) {
                        if (empty($value)) {
                            return $fail(__('translate.coursesRequired'));
                        }
                        if ($isCvAndStep2) {
                            if (!is_array($value) || count($value) < 1) {
                                $fail(__('translate.coursesRequired'));
                            }
                        }
                    }
                },
            ],
            'courses.*.name'=>[function ($attribute, $value, $fail) {
                $isCvAndStep2 = request()->cv == 1 && request()->step == 2 && request()->cvStandardType == 2;
                if ($isCvAndStep2) {
                    if (empty($value)) {
                        return $fail(__('translate.coursesNameRequired'));
                    }

                    if (!preg_match('/^[\pL0-9\s\'\"-]+$/u', $value)) {
                        return $fail(__('translate.experiencesEmployerChars'));
                    }
                }
            },'string','max:100'],
            'courses.*.organizator'=>[function ($attribute, $value, $fail) {
                $isCvAndStep2 = request()->cv == 1 && request()->step == 2 && request()->cvStandardType == 2;
                if ($isCvAndStep2) {
                    if (empty($value)) {
                        return $fail(__('translate.coursesOrganizatorRequired'));
                    }

                    if (!preg_match('/^[\pL0-9\s\'\"-]+$/u', $value)) {
                        return $fail(__('translate.experiencesEmployerChars'));
                    }
                }
            },'string','max:100'],
            'courses.*.date'=>[
                function ($attribute, $value, $fail) {
                    $isCvAndStep2 = request()->cv == 1 && request()->step == 2 && request()->cvStandardType == 2;
                    if ($isCvAndStep2) {
                        if (empty($value)) {
                            return $fail(__('translate.experiencesDateRequired'));
                        }
                        if (!isset($value['year'], $value['month']) || !is_numeric($value['year']) || !is_numeric($value['month'])) {
                            return $fail(__('translate.invalidDateFormat'));
                        }
                    }
                }, 'array',
            ],
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
