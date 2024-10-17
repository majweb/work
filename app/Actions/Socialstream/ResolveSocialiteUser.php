<?php

namespace App\Actions\Socialstream;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use JoelButcher\Socialstream\Contracts\ResolvesSocialiteUsers;
use JoelButcher\Socialstream\Providers;
use JoelButcher\Socialstream\Socialstream;
use Laravel\Socialite\Contracts\User;
use Laravel\Socialite\Facades\Socialite;

class ResolveSocialiteUser implements ResolvesSocialiteUsers
{
    /**
     * Resolve the user for a given provider.
     */
    public function resolve(string $provider): User
    {
        try {
            $socialiteDriver = Socialite::driver($provider);
            $user = match ($provider) {
                Providers::google() => $socialiteDriver->stateless()->user(),
                Providers::linkedinOpenId() => $socialiteDriver->stateless()->user(),
                default => $socialiteDriver->stateless()->user(),
            };
        } catch (Exception $e) {
            session()->flash('flash.banner', __('Unable to log you in. Please try again.'));
            return redirect('/login');
        }
        if (Socialstream::generatesMissingEmails()) {
            $user->email = $user->getEmail() ?? ("{$user->id}@{$provider}".config('app.domain'));
        }
        return $user;
    }
}
