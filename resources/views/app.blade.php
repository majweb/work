<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @inertiaHead
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title inertia>{{ config('app.name', 'Laravel') }}</title>
        <meta inertia property="fb:app_id" content="1234567890" />
        <meta inertia property="og:type" content="article" />
        <meta inertia property="og:url" content="https://abctest.pl" />
        <meta inertia property="og:title" content="Strona główna - work4global" />
        <meta inertia property="og:image" content="https://abctest.pl/images/test.jpg" />
        <meta inertia property="og:description" content="pis" />
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @routes
        @vite(['resources/js/app.js', "resources/js/Pages/{$page['component']}.vue"])
        @mediaLibraryStyles
        @mediaLibraryScripts
    </head>
    <body class="font-sans antialiased">
        @inertia
    </body>
</html>
