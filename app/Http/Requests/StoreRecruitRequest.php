<?php

namespace App\Http\Requests;

use App\Actions\Fortify\PasswordValidationRules;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules\Password;

class StoreRecruitRequest extends FormRequest
{
    use PasswordValidationRules;

    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return request()->user()->hasRole('firm');
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        if(request()->isMethod('post')){
            $ruleId = ['nullable'];
            $rulePassword = $this->passwordRules();
            $rulePhone = ['required','numeric',Rule::unique('users', 'recruiter_phone')];
            $ruleEmail = ['required', 'string', 'email', 'max:255', Rule::unique('users', 'email')];
        } elseif (request()->isMethod('put')){
            $ruleId = ['required'];
            $rulePassword = ['nullable', 'string', Password::default(), 'confirmed'];
            $rulePhone=['required','numeric',Rule::unique('users', 'recruiter_phone')->ignore(request()->id)];
            $ruleEmail = ['required', 'string', 'email', 'max:255', Rule::unique('users', 'email')->ignore(request()->id)];
        }
        return [
            'name' => ['required', 'string', 'max:255'],
            'id' => $ruleId,
            'user_blocked' => ['nullable'],
            'recruiter_from_firm_id' => ['required'],
            'recruiter_phone' => $rulePhone,
            'email' => $ruleEmail,
            'password' => $rulePassword,
            'color' => ['required','string'],
            'photo' => ['nullable', 'mimes:jpg,jpeg,png', 'max:1024'],
        ];
    }

    protected function prepareForValidation(): void
    {
        $this->merge([
            'recruiter_from_firm_id' => Auth::user()->id
        ]);
    }
    public function userData(){
        return $this->validated();
    }

    public function attributes(): array
    {
        return [
            'name' => strtolower(__('translate.name')),
            'recruiter_phone' => strtolower(__('translate.phone')),
            'email' => strtolower(__('translate.email')),
            'password' => strtolower(__('translate.password')),
        ];
    }

}
