<?php

namespace App\Http\Requests\Recruit;

use Illuminate\Foundation\Http\FormRequest;

class StoreProject extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return request()->user()->hasRole('recruit');
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'category' => ['required', 'array', 'max:100'],
            'categorySub' => ['required', 'array', 'max:100'],
            'profession' => ['required', 'array', 'max:100'],
            'position' => ['nullable', 'array', 'max:100'],
            'detailProjects' => ['required', 'array', 'min:1'],
            'workingMode' => ['required','array','min:1'],
            'workingMode.*.id' => ['required','exists:App\Models\WorkingMode,id'],
            'workingMode.*.title' => ['required'],
            'workingMode.*.allTranslations' => ['required'],
            'workLoad' => ['required','array'],
            'workLoad.id' => ['required','exists:App\Models\WorkLoad,id'],
            'workLoad.name' => ['required'],
            'workLoad.allTranslations' => ['required'],
            'shiftWork' => ['required','exists:App\Models\ShiftWork,id'],
            'workNight' => ['required','in:1,2'],
            'payoutMode' => ['required','array'],
            'payoutMode.id' => ['required','exists:App\Models\PayoutMode,id'],
            'payoutMode.name' => ['required'],
            'currency' => ['required'],
            'payoutMode.allTranslations' => ['required'],
            'typeOfContract' => ['required', 'array', 'min:1',],
            'typeOfContract.*.id' => ['required','exists:App\Models\TypeOfContract,id'],
            'typeOfContract.*.name' => ['required'],
            'typeOfContract.*.allTranslations' => ['required'],
            'paySystem' => ['required', 'array', 'min:1',],
            'paySystem.*.id' => ['required','exists:App\Models\PaySystem,id'],
            'paySystem.*.name' => ['required'],
            'paySystem.*.allTranslations' => ['required'],
            'days' => ['required', 'array', 'min:1',],
            'days.*.id' => ['required','exists:App\Models\Day,id'],
            'days.*.name' => ['required'],
            'days.*.allTranslations' => ['required'],
            'offer' => ['required', 'array', 'min:1',],
            'offer.*.id' => ['required','exists:App\Models\Offer,id'],
            'offer.*.name' => ['required'],
            'offer.*.allTranslations' => ['required'],
            'wait' => ['required', 'array', 'min:1',],
            'wait.*.id' => ['required','exists:App\Models\Wait,id'],
            'wait.*.name' => ['required'],
            'wait.*.allTranslations' => ['required'],
            'experience' => ['required', 'array', 'min:1',],
            'experience.*.id' => ['required','exists:App\Models\Experience,id'],
            'experience.*.name' => ['required'],
            'experience.*.allTranslations' => ['required'],
            'welcome' => ['required', 'array', 'min:1',],
            'welcome.*.id' => ['required','exists:App\Models\Welcome,id'],
            'welcome.*.name' => ['required'],
            'welcome.*.allTranslations' => ['required'],
            'education' => ['nullable','exists:App\Models\Education,id'],
            'workingPlace' => ['required', 'array', 'min:1'],
            'workingPlace.value' => ['required','exists:App\Models\WorkingPlace,id'],
            'workingPlace.name' => ['required'],
            'workingPlace.allTranslations' => ['required'],
            'country' => ['required', 'array', 'min:1'],
            'basicSalaryFrom' => ['required', 'numeric','between:1,99999.99'],
            'basicSalaryTo' => ['nullable', 'numeric','between:1,99999.99','gt:basicSalaryFrom'],
            'bonusSalaryFrom' => ['required', 'numeric','between:1,99999.99'],
            'hoursFrom' => ['required', 'date_format:H:i','before:hoursTo'],
            'hoursTo' => ['required', 'date_format:H:i','after:hoursFrom'],
            'bonusSalaryTo' => ['nullable', 'numeric','between:1,99999.99','gt:bonusSalaryFrom'],
            'title' => ['nullable'],
            'countryWork' => ['required', 'array'],
            'streetWork' => ['required', 'string', 'max:100'],
            'streetWorkNumber' => ['required', 'string', 'max:100'],
            'postalWork' => ['required', 'string', 'max:100'],
            'cityWork' => ['required', 'string', 'max:100'],
        ];
    }

    public function projectData(){
        return $this->validated();
    }

    public function attributes(): array
    {
        return [
            'title' => strtolower(__('translate.title')),
            'category' => strtolower(__('translate.category')),
            'categorySub' => strtolower(__('translate.subcategory')),
            'profession' => strtolower(__('translate.profession')),
            'position' => strtolower(__('translate.position')),
            'basicSalaryFrom' => strtolower(__('translate.basicSalaryFrom')),
            'basicSalaryTo' => strtolower(__('translate.basicSalaryTo')),
            'bonusSalaryFrom' => strtolower(__('translate.bonusSalaryFrom')),
            'bonusSalaryTo' => strtolower(__('translate.bonusSalaryTo')),
            'hoursFrom' => strtolower(__('translate.hoursFrom')),
            'hoursTo' => strtolower(__('translate.hoursTo')),
            'days' => strtolower(__('translate.dayWork')),
            'payoutMode' => strtolower(__('translate.payoutModes')),
            'paySystem' => strtolower(__('translate.paySystem')),
            'workNight' => strtolower(__('translate.workNight')),
            'shiftWork' => strtolower(__('translate.shiftWorks')),
            'offer' => strtolower(__('translate.offer')),
            'wait' => strtolower(__('translate.wait')),
            'experience' => strtolower(__('translate.experience')),
            'welcome' => strtolower(__('translate.welcome')),
            'typeOfContract' => strtolower(__('translate.typesOfContract')),
            'workLoad' => strtolower(__('translate.workLoads')),
            'workingPlace' => strtolower(__('translate.workingPlace')),
            'country' => strtolower(__('translate.Country')),
            'workingMode' => strtolower(__('translate.workingMode')),
            'education' => strtolower(__('translate.education')),
            'countryWork' => strtolower(__('translate.Country')),
            'streetWork' => strtolower(__('translate.Street')),
            'postalWork' => strtolower(__('translate.Postal')),
            'cityWork' => strtolower(__('translate.City')),
            'streetWorkNumber' => strtolower(__('translate.City')),
            'detailProjects' => strtolower(__('translate.detailProjects')),
        ];
    }
}
