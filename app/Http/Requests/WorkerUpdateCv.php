<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class WorkerUpdateCv extends FormRequest
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
            'experiences' => [
                function ($attribute, $value, $fail) {
                        if (empty($value)) {
                            return $fail(__('translate.experiencesRequired'));
                        }
                            if (!is_array($value) || count($value) < 1) {
                                $fail(__('translate.experiencesRequired'));
                            }
                },
                'array','between:1,5'=>function($attribute, $val, $fail){
                    if(count($val) > 5){
                        $fail(__('translate.toMuchElements'));
                    }
                }],
            'experiences.*.employer'=>[function ($attribute, $value, $fail) {
                    if (empty($value)) {
                        return $fail(__('translate.experiencesEmployerRequired'));
                    }

                    if (!preg_match('/^[\pL0-9\s\'\"-]+$/u', $value)) {
                        return $fail(__('translate.experiencesEmployerChars'));
                    }
            },'string','max:100'],
            'experiences.*.position'=>[
                function ($attribute, $value, $fail) {
                        if (empty($value)) {
                            return $fail(__('translate.experiencesPositionRequired'));
                        }
                }],
            'experiences.*.start'=>[
                function ($attribute, $value, $fail) {
                        if (empty($value)) {
                            return $fail(__('translate.experiencesDateRequired'));
                        }
                        if (!isset($value['year'], $value['month']) || !is_numeric($value['year']) || !is_numeric($value['month'])) {
                            return $fail(__('translate.invalidDateFormat'));
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
                }],
            'experiences.*.city' => ['max:100',
                function ($attribute, $value, $fail) {
                        if (empty($value)) {
                            return $fail(__('translate.inertiaCityRequired'));
                        }
                        if (!preg_match('/^[\pL\s\']+$/u', $value)) {
                            return $fail(__('translate.inertiaCityLetters'));
                        }

                }
            ],
            'educations' => [
                function ($attribute, $value, $fail) {
                        if (empty($value)) {
                            return $fail(__('translate.educationsRequired'));
                        }
                            if (!is_array($value) || count($value) < 1) {
                                $fail(__('translate.educationsRequired'));
                            }
                },
                'array','between:1,5'=>function($attribute, $val, $fail){
                    if(count($val) > 5){
                        $fail(__('translate.toMuchElements'));
                    }
                }],
            'educations.*.school'=>[function ($attribute, $value, $fail) {
                    if (empty($value)) {
                        return $fail(__('translate.educationsSchoolRequired'));
                    }

                    if (!preg_match('/^[\pL0-9\s\'\"-]+$/u', $value)) {
                        return $fail(__('translate.experiencesEmployerChars'));
                    }

            },'string','max:100'],
            'educations.*.level'=>[
                function ($attribute, $value, $fail) {
                        if (empty($value)) {
                            return $fail(__('translate.educationsSchoolLevelRequired'));
                        }

                }],
            'educations.*.specialization' => ['max:100',
                function ($attribute, $value, $fail) {
                        if (empty($value)) {
                            return $fail(__('translate.experiencesSpecializationRequired'));
                        }
                        if (!preg_match('/^[\pL0-9\s\'\"-]+$/u', $value)) {
                            return $fail(__('translate.experiencesEmployerChars'));
                        }

                }
            ],
            'educations.*.finish'=>[
                function ($attribute, $value, $fail) {
                        if (empty($value)) {
                            return $fail(__('translate.experiencesDateRequired'));
                        }

                        if (!is_int($value)) {
                            return $fail(__('translate.invalidYearFormat'));
                        }
                },
            ],
            'educations.*.city' => ['max:100',
                function ($attribute, $value, $fail) {
                        if (empty($value)) {
                            return $fail(__('translate.inertiaCityRequired'));
                        }
                        if (!preg_match('/^[\pL\s\']+$/u', $value)) {
                            return $fail(__('translate.inertiaCityLetters'));
                        }

                }
            ],
            'courses' => [
                function ($attribute, $value, $fail) {
                        if (empty($value)) {
                            return $fail(__('translate.coursesRequired'));
                        }

                            if (!is_array($value) || count($value) < 1) {
                                $fail(__('translate.coursesRequired'));
                            }
                },
                'array','between:1,5'=>function($attribute, $val, $fail){
                    if(count($val) > 5){
                        $fail(__('translate.toMuchElements'));
                    }
                }],
            'courses.*.name'=>[function ($attribute, $value, $fail) {
                    if (empty($value)) {
                        return $fail(__('translate.coursesNameRequired'));
                    }

                    if (!preg_match('/^[\pL0-9\s\'\"-]+$/u', $value)) {
                        return $fail(__('translate.experiencesEmployerChars'));
                    }

            },'string','max:100'],
            'courses.*.organizator'=>[function ($attribute, $value, $fail) {
                    if (empty($value)) {
                        return $fail(__('translate.coursesOrganizatorRequired'));
                    }

                    if (!preg_match('/^[\pL0-9\s\'\"-]+$/u', $value)) {
                        return $fail(__('translate.experiencesEmployerChars'));
                    }

            },'string','max:100'],
            'courses.*.date'=>[
                function ($attribute, $value, $fail) {
                        if (empty($value)) {
                            return $fail(__('translate.experiencesDateRequired'));
                        }
                        if (!isset($value['year'], $value['month']) || !is_numeric($value['year']) || !is_numeric($value['month'])) {
                            return $fail(__('translate.invalidDateFormat'));
                        }

                }, 'array',
            ],
            'langs' => [
                function ($attribute, $value, $fail) {
                        if (empty($value)) {
                            return $fail(__('translate.langsRequired'));
                        }
                            if (!is_array($value) || count($value) < 1) {
                                $fail(__('translate.langsRequired'));
                            }


                },
                'array','between:1,5'=>function($attribute, $val, $fail){
                    if(count($val) > 5){
                        $fail(__('translate.toMuchElements'));
                    }
                }],
            'langs.*.name'=>[function ($attribute, $value, $fail) {
                    if (empty($value)) {
                        return $fail(__('translate.langsNameRequired'));
                    }
                    $index = explode('.', $attribute)[1];
                    $names = collect(request()->input('langs'))->pluck('name.value');  // zakładając, że name ma 'value'
                    $currentName = $names[$index];
                    if ($names->filter(function ($item) use ($currentName) {
                            return $item == $currentName;
                        })->count() > 1) {
                        return $fail(__('translate.levelUnique')); // komunikat o błędzie
                    }
            }],
            'langs.*.level'=>[function ($attribute, $value, $fail) {
                    if (empty($value)) {
                        return $fail(__('translate.langsLevelRequired'));
                    }
            }],
            'skills' => ['nullable'],
        ];
    }

    public function cvData(){
        return $this->validated();
    }
}
