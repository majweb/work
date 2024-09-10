<?php

namespace App\Actions\Fortify;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\CreatesNewUsers;
use Laravel\Jetstream\Jetstream;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param  array<string, string>  $input
     */
    public function create(array $input): User
    {

        Validator::make($input, [
            'name' => ['required', 'string', 'max:255'],
            'type' => ['required', 'in:firm,worker'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => $this->passwordRules(),
            'terms' => Jetstream::hasTermsAndPrivacyPolicyFeature() ? ['accepted', 'required'] : '',
        ],[],[
            'name'=>strtolower(__('auth.name')),
            'email'=>strtolower(__('auth.email')),
            'password'=>strtolower(__('auth.password')),
            'terms'=>strtolower(__('auth.terms'))
        ])->validate();

        $user =  User::create([
            'name' => $input['name'],
            'email' => $input['email'],
            'password' => Hash::make($input['password']),
        ]);

        if($input['type'] == 'worker'){
            if($user){
                $user->assignRole('worker');
            }
        } elseif($input['type'] == 'firm'){
            if($user){
                $user->assignRole('firm');
                $user->firm()->create();
            }
        }

        return $user;
    }
}
