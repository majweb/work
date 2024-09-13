<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @inertiaHead
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Fonts -->

        <meta property="fb:app_id" content="1234567890" />
        <meta property="og:type" content="article" />
        <meta property="og:url" content="https://abctest.pl" />
        <meta property="og:title" content="Strona główna - work4global" />
        <meta property="og:image" content="https://abctest.pl/images/test.jpg" />
        <meta property="og:description" content="pis" />
        <title>ss i tata</title>
        <meta name=keywords content="portal pracy, szukam pracy, praca za granicą, porady zdrowotne, przepisy kulinarne, darmowe lekcje niemieckiego"/>
        <meta name=description content="Opsi - Work" />

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
