<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Fonts -->
        <meta property="og:image" content="https://abctest.pl/images/test.jpg"  />
        <meta property="og:url" content="https://abctest.pl"  />
        <meta property="og:type" content="website" />

        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
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
