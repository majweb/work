<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Wymagane punkty dla poziomów certyfikatu premium
    |--------------------------------------------------------------------------
    |
    | Określa liczbę punktów wymaganych dla każdego poziomu certyfikatu:
    | 1 - Brązowy
    | 2 - Srebrny
    | 3 - Złoty
    | 4 - Diamentowy
    |
    */
    'points_required' => [
        1 => 40000,   // Brązowy
        2 => 60000,  // Srebrny
        3 => 100000,  // Złoty
        4 => 160000   // Diamentowy
    ],

    'amount' => [
        1 => 410,   // Brązowy
        2 => 580,  // Srebrny
        3 => 900,  // Złoty
        4 => 1360   // Diamentowy
    ],

    /*
    |--------------------------------------------------------------------------
    | Nazwy poziomów certyfikatu
    |--------------------------------------------------------------------------
    |
    | Określa klucze tłumaczeń dla każdego poziomu certyfikatu
    |
    */
    'level_names' => [
        0 => 'premium.certificates.levels.none',
        1 => 'premium.certificates.levels.bronze',
        2 => 'premium.certificates.levels.silver',
        3 => 'premium.certificates.levels.gold',
        4 => 'premium.certificates.levels.diamond'
    ],

    /*
    |--------------------------------------------------------------------------
    | Kolory poziomów certyfikatu
    |--------------------------------------------------------------------------
    |
    | Określa kolory używane do wizualizacji poziomów certyfikatu
    |
    */
    'level_colors' => [
        1 => '#aa8f75', // Brązowy (Bronze)
        2 => '#c6c6c6', // Srebrny (Silver)
        3 => '#ddc890', // Złoty (Gold)
        4 => '#c8bdbc'  // Diamentowy (Diamond)
    ],
];
