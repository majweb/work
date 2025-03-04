<?php

namespace App\Providers;

use App\Actions\Fortify\CreateNewUser;
use App\Actions\Fortify\ResetUserPassword;
use App\Actions\Fortify\UpdateUserPassword;
use App\Actions\Fortify\UpdateUserProfileInformation;
use App\Http\Response\CustomLoginResponse;
use App\Models\User;
use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Str;
use JoelButcher\Socialstream\Contracts\ResolvesSocialiteUsers;
use JoelButcher\Socialstream\Socialstream;
use Laravel\Fortify\Fortify;
use Illuminate\Validation\ValidationException;
use Laravel\Fortify\Contracts\LoginResponse;
use Illuminate\Support\Facades\Session;

class FortifyServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->singleton(LoginResponse::class, CustomLoginResponse::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Fortify::loginView(function (Request $request) {
            if ($request->has('projectToRedirect')) {
                Session::put('redirect_project_after_login',$request->query('projectToRedirect'));
            }
            return inertia('Auth/Login');
        });
        Fortify::authenticateUsing(function (Request $request) {
            $user = null;
            $provider = $request->route('provider');

            // 1a. Attempt the resolve the user via socialstream
            if ($provider) {
                $socialUser = app(ResolvesSocialiteUsers::class)
                    ->resolve($provider);


                $connectedAccount = Socialstream::$connectedAccountModel::where('email', $socialUser->getEmail())->first();

                if (! $connectedAccount) {
                    throw ValidationException::withMessages([
                        Fortify::username() => [__('translate.failed')],
                    ]);
                }

                $user = $connectedAccount->user;
            }

            // 1b. Attempt to resolve the user if email present in request (i.e. from login form).
            if (! $user && $request->has('email')) {
                $user = User::where('email', $request->email)->first();
            }

            // 2. Check if the resolved user is blocked and handle
            if($user && !is_null($user->user_blocked)) {
                throw ValidationException::withMessages([
                    Fortify::username() => [__('translate.user_blocked')],
                ]);
            }

            // 3. User is not blocked, log in if from Socialstream route
            if ($provider) {
                return $user;
            }

            // 4. User hasn't set a password, so must login using an OAuth provider
            if ($user && is_null($user->password)) {
                throw ValidationException::withMessages([
                    Fortify::username() => [__('translate.onlySocial')],
                ]);
            }

            // 5. Verify the password if the user has logged in via a form
            return Hash::check($request->password, $user?->password) ? $user : null;

        });
        Fortify::createUsersUsing(CreateNewUser::class);
        Fortify::updateUserProfileInformationUsing(UpdateUserProfileInformation::class);
        Fortify::updateUserPasswordsUsing(UpdateUserPassword::class);
        Fortify::resetUserPasswordsUsing(ResetUserPassword::class);

        RateLimiter::for('login', function (Request $request) {
            $throttleKey = Str::transliterate(Str::lower($request->input(Fortify::username())).'|'.$request->ip());

            return Limit::perMinute(5)->by($throttleKey);
        });

        RateLimiter::for('two-factor', function (Request $request) {
            return Limit::perMinute(5)->by($request->session()->get('login.id'));
        });
    }
}
