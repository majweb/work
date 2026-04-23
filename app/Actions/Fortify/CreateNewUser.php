<?php

namespace App\Actions\Fortify;

use App\Models\Foundation;
use App\Models\User;
use App\Notifications\SystemActivityNotification;
use App\Services\CrmService;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Notification;
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
        $redirectData = Session::pull('foundation_to_register');
        $foundationData = null;
        if ($redirectData) {
            // Wyciągamy ID z formatu --123--
            if (preg_match('/-(\d+)-/', $redirectData, $matches)) {
                $foundationId = (int) ($matches[1] ?? 0);

                if ($foundationId > 0) {
                    $foundation = Foundation::find($foundationId);
                    if ($foundation) {
                        $foundationData = [
                            'name' => $foundation->name,
                            'value' => $foundation->id,
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
            'agreements' => [
                isset($input['agreements']) ? 'array' : 'nullable',
                function ($attribute, $value, $fail) use ($input) {
                    $type = ($input['type'] ?? 'firm') === 'worker' ? 'worker_registration' : 'firm_registration';
                    $requiredAgreements = \App\Models\Agreement::where('type', $type)
                        ->where('is_active', true)
                        ->where('is_required', true)
                        ->pluck('id')
                        ->toArray();

                    $providedAgreements = is_array($value) ? $value : [];

                    foreach ($requiredAgreements as $requiredId) {
                        if (! in_array($requiredId, $providedAgreements)) {
                            $fail(__('translate.agreements_required_all'));
                            break;
                        }
                    }
                },
            ],
        ], [], [
            'name' => strtolower(__('translate.name')),
            'email' => strtolower(__('translate.email')),
            'password' => strtolower(__('translate.password')),
            'terms' => strtolower(__('translate.terms')),
            'agreements' => strtolower(__('translate.agreements')),
        ])->validate();

        $user = User::create([
            'name' => $input['name'],
            'email' => $input['email'],
            'password' => Hash::make($input['password']),
            'foundation' => $foundationData, // ⬅️ tutaj zapis JSON
        ]);

        if ($input['type'] == 'worker') {
            if ($user) {
                $user->assignRole('worker');
                $user->workerDetail()->create();

                $admins = User::role('admin')->get();
                Notification::send($admins, new SystemActivityNotification([
                    'type' => 'user_registered',
                    'user_id' => $user->id,
                    'user_name' => $user->name,
                    'role' => 'worker',
                ]));
            }
        } elseif ($input['type'] == 'firm') {
            if ($user) {
                $user->assignRole('firm', 'recruit');
                $user->firm()->create();

                if (config('premium.welcome_points') > 0) {
                    app(\App\Services\PointService::class)->increment($user, config('premium.welcome_points'), 'Rejestracja - bonus startowy');
                }

                if (config('services.crm.url') && config('services.crm.key')) {
                    try {
                        app(CrmService::class)->syncUser($user);
                    } catch (\Exception $e) {
                        \Log::error('CRM Sync Error: '.$e->getMessage());
                    }
                }

                $admins = User::role('admin')->get();
                Notification::send($admins, new SystemActivityNotification([
                    'type' => 'user_registered',
                    'user_id' => $user->id,
                    'user_name' => $user->name,
                    'role' => 'firm',
                ]));
            }
        }

        return $user;
    }
}
