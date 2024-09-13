<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <meta inertia property="og:title" content="Strona główna - work4global" />
        <meta inertia property="og:description" content="tu bedzie opis" />
        <meta inertia property="og:image" content="https://abctest.pl/images/logo.png" />
        <meta inertia property="og:url" content="https://abctest.pl" />


        <!-- Scripts -->
        @routes
        @vite(['resources/js/app.js', "resources/js/Pages/{$page['component']}.vue"])
        @inertiaHead
        @mediaLibraryStyles
        @mediaLibraryScripts
    </head>
    <body class="font-sans antialiased">
        @inertia
    </body>
</html>
