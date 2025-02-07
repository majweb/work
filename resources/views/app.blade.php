<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title inertia>{{ config('app.name', 'Work') }}</title>
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net" />
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <link rel="apple-touch-icon" sizes="180x180" href="{{asset('/images/apple-touch-icon.png')}}" />
        <link rel="icon" type="image/png" sizes="32x32" href="{{asset('/images/favicon-32x32.png')}}" />
        <link rel="icon" type="image/png" sizes="16x16" href="{{asset('/images/favicon-16x16.png')}}" />
        <link rel="manifest" href="{{asset('/images/site.webmanifest')}}" />
        <link rel="mask-icon" href="{{asset('/images/safari-pinned-tab.svg')}}" color="#00A0E3B2" />
        <meta name="msapplication-TileColor" content="#00A0E3B2" />
        <meta name="theme-color" content="#00A0E3B2" />
        <meta name=mobile-web-app-capable content="yes" />
        <meta name=msapplication-navbutton-color content="#00A0E3B2" />
        <meta name=apple-mobile-web-app-status-bar-style content="#00A0E3B2" />
        <meta property="fb:app_id" content="1234567890" />
        <!-- Scripts -->
        @routes
        @inertiaHead
        @vite(['resources/js/app.js', "resources/js/Pages/{$page['component']}.vue"])
    </head>
    <body class="font-sans antialiased">
        @inertia
        @mediaLibraryStyles
        @mediaLibraryScripts
{{--        <script defer src="https://maps.googleapis.com/maps/api/js?key={{env('GOOGLE_MAPS_API')}}&libraries=places"></script>--}}
    </body>
</html>
