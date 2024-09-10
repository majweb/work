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
            $rulePhone = ['required','numeric',Rule::unique('users', 'recruiter_phone')->ignore(request()->user()->id)];
            $ruleEmail = ['required', 'string', 'email', 'max:255', Rule::unique('users', 'email')->ignore(request()->user()->id)];
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
            'permissions' => ['required','array','min:1'],
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
            'name' => strtolower(__('auth.name')),
            'recruiter_phone' => strtolower(__('auth.phone')),
            'email' => strtolower(__('auth.email')),
            'password' => strtolower(__('auth.password')),
            'permissions' => strtolower(__('auth.permissions')),
        ];
    }

}
