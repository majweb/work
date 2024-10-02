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
//        dd(request()->all());
        return [
            'category' => ['required', 'array', 'max:100'],
            'categorySub' => ['required', 'array', 'max:100'],
            'profession' => ['required', 'array', 'max:100'],
            'position' => ['nullable', 'array', 'max:100'],
            'workingMode' => ['required', 'array', 'min:1','exists:App\Models\WorkingMode,id'],
            'workLoad' => ['required','exists:App\Models\WorkLoad,id'],
            'shiftWork' => ['required','exists:App\Models\ShiftWork,id'],
            'workNight' => ['required','in:1,2'],
            'payoutMode' => ['required','exists:App\Models\PayoutMode,id'],
            'typeOfContract' => ['required', 'array', 'min:1','exists:App\Models\TypeOfContract,id'],
            'paySystem' => ['required', 'array', 'min:1','exists:App\Models\PaySystem,id'],
            'days' => ['required', 'array', 'min:1','exists:App\Models\Day,id'],
            'offer' => ['required', 'array', 'min:1','exists:App\Models\Offer,id'],
            'wait' => ['required', 'array', 'min:1','exists:App\Models\Wait,id'],
            'experience' => ['required', 'array', 'min:1','exists:App\Models\Experience,id'],
            'welcome' => ['required', 'array', 'min:1','exists:App\Models\Welcome,id'],
            'education' => ['nullable','exists:App\Models\Education,id'],
            'workingPlace' => ['required', 'array', 'min:1'],
            'workingPlace.value' => ['required','exists:App\Models\WorkingPlace,id'],
            'workingPlace.name' => ['required'],
            'country' => ['required', 'array', 'min:1'],
            'basicSalaryFrom' => ['required', 'numeric','between:1,99999.99','lt:basicSalaryTo'],
            'basicSalaryTo' => ['required', 'numeric','between:1,99999.99','gt:basicSalaryFrom'],
            'bonusSalaryFrom' => ['required', 'numeric','between:1,99999.99','lt:bonusSalaryTo'],
            'hoursFrom' => ['required', 'date_format:H:i','before:hoursTo'],
            'hoursTo' => ['required', 'date_format:H:i','after:hoursFrom'],
            'bonusSalaryTo' => ['required', 'numeric','between:1,99999.99','gt:bonusSalaryFrom'],
            'title' => ['required', 'integer', 'exists:App\Models\Title,id'],
        ];
    }

    public function projectData(){
        return $this->validated();
    }

    public function attributes(): array
    {
        return [
            'title' => strtolower(__('auth.title')),
            'category' => strtolower(__('auth.category')),
            'categorySub' => strtolower(__('auth.subcategory')),
            'profession' => strtolower(__('auth.profession')),
            'position' => strtolower(__('auth.position')),
            'basicSalaryFrom' => strtolower(__('auth.basicSalaryFrom')),
            'basicSalaryTo' => strtolower(__('auth.basicSalaryTo')),
            'bonusSalaryFrom' => strtolower(__('auth.bonusSalaryFrom')),
            'bonusSalaryTo' => strtolower(__('auth.bonusSalaryTo')),
            'hoursFrom' => strtolower(__('auth.hoursFrom')),
            'hoursTo' => strtolower(__('auth.hoursTo')),
            'days' => strtolower(__('auth.dayWork')),
            'payoutMode' => strtolower(__('auth.payoutModes')),
            'paySystem' => strtolower(__('auth.paySystem')),
            'workNight' => strtolower(__('auth.workNight')),
            'shiftWork' => strtolower(__('auth.shiftWorks')),
            'offer' => strtolower(__('auth.offer')),
            'wait' => strtolower(__('auth.wait')),
            'experience' => strtolower(__('auth.experience')),
            'welcome' => strtolower(__('auth.welcome')),
            'typeOfContract' => strtolower(__('auth.typesOfContract')),
            'workLoad' => strtolower(__('auth.workLoads')),
            'workingPlace' => strtolower(__('auth.workingPlace')),
            'country' => strtolower(__('auth.Country')),
            'workingMode' => strtolower(__('auth.workingMode')),
            'education' => strtolower(__('auth.education')),
        ];
    }
}
