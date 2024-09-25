<?php

namespace App\Providers;

use App\Actions\Socialstream\CreateConnectedAccount;
use App\Actions\Socialstream\CreateUserFromProvider;
use App\Actions\Socialstream\GenerateRedirectForProvider;
use App\Actions\Socialstream\HandleInvalidState;
use App\Actions\Socialstream\ResolveSocialiteUser;
use App\Actions\Socialstream\UpdateConnectedAccount;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\ServiceProvider;
use JoelButcher\Socialstream\Auth\SocialstreamUserProvider;
use JoelButcher\Socialstream\Concerns\ConfirmsFilament;
use JoelButcher\Socialstream\Socialstream;
use Laravel\Fortify\Fortify;

class SocialstreamServiceProvider extends ServiceProvider
{
    use ConfirmsFilament;

    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        $this->configureAuth();

        Socialstream::resolvesSocialiteUsersUsing(ResolveSocialiteUser::class);
        Socialstream::createUsersFromProviderUsing(CreateUserFromProvider::class);
        Socialstream::createConnectedAccountsUsing(CreateConnectedAccount::class);
        Socialstream::updateConnectedAccountsUsing(UpdateConnectedAccount::class);
        Socialstream::handlesInvalidStateUsing(HandleInvalidState::class);
        Socialstream::generatesProvidersRedirectsUsing(GenerateRedirectForProvider::class);
    }

    private function configureAuth(): void
    {
        Auth::provider('eloquent', fn ($app, array $config) => new SocialstreamUserProvider(
            hasher: $app['hash'],
            model: $config['model']
        ));
    }

}
