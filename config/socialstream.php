<?php

use JoelButcher\Socialstream\Features;
use JoelButcher\Socialstream\Providers;

return [
    'guard' => 'web', // used if Fortify is not installed
    'middleware' => ['web'],
    'prompt' =>  "Or Login",
    'providers' => [
        Providers::github(label: 'Github'),
        Providers::google(label: 'Google'),
        Providers::facebook(label: 'Facebook'),
        Providers::linkedinOpenId(label: 'Linkedin'),
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
