<?php

use JoelButcher\Socialstream\Features;
use JoelButcher\Socialstream\Providers;

return [
    'guard' => 'web', // used if Fortify is not installed
    'middleware' => ['web'],
    'prompt' => 'Or Login Via',
    'providers' => [
        Providers::github(label: 'Continue with GitHub'),
        Providers::google(label: 'Continue with Google'),
        Providers::facebook(label: 'Continue with Facebook'),
        Providers::linkedinOpenId(label: 'Continue with Linkedin'),

    ],
    'features' => [
        // Features::generateMissingEmails(),
        Features::createAccountOnFirstLogin(),
//         Features::globalLogin(),
        Features::authExistingUnlinkedUsers(),
        Features::rememberSession(),
        Features::providerAvatars(),
        Features::refreshOAuthTokens(),
    ],
    'home' => '/logged/dashboard',
    'redirects' => [
        'login' => '/logged/dashboard',
        'register' => '/logged/dashboard',
        'login-failed' => '/login',
        'registration-failed' => '/register',
        'provider-linked' => '/user/profile',
        'provider-link-failed' => '/user/profile',
    ]
];
