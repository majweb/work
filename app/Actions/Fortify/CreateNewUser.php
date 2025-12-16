<?php

namespace App\Actions\Fortify;

use App\Models\Foundation;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
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
        $redirectData =   Session::pull('foundation_to_register');
        $foundationData = null;
        if ($redirectData) {
            // Wyciągamy ID z formatu --123--
            if (preg_match('/-(\d+)-/', $redirectData, $matches)) {
                $foundationId = $matches[1] ?? null;

                if ($foundationId) {
                    $foundation = Foundation::find($foundationId);
                    if ($foundation) {
                        $foundationData = [
                            'name' => $foundation->name,
                            'value' => $foundation->id
                        ];
                    }
                }
            }





        }
        Validator::make($input, [
            'name' => ['required', 'string', 'max:255'],
            'type' => ['required', 'in:firm,worker'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => $this->passwordRules(),
            'terms' => Jetstream::hasTermsAndPrivacyPolicyFeature() ? ['accepted', 'required'] : '',
        ],[],[
            'name'=>strtolower(__('translate.name')),
            'email'=>strtolower(__('translate.email')),
            'password'=>strtolower(__('translate.password')),
            'terms'=>strtolower(__('translate.terms'))
        ])->validate();

        $user =  User::create([
            'name' => $input['name'],
            'email' => $input['email'],
            'password' => Hash::make($input['password']),
            'foundation' => $foundationData, // ⬅️ tutaj zapis JSON
        ]);

        if($input['type'] == 'worker'){
            if($user){
                $user->assignRole('worker');
                $user->workerDetail()->create();
            }
        } elseif($input['type'] == 'firm'){
            if($user){
                $user->assignRole('firm','recruit');
                $user->firm()->create();
            }
        }

        return $user;
    }
}
