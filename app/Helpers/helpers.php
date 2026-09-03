<?php
if (!function_exists('getLocalBrowserLang')) {
    function getLocalBrowserLang()
    {
        $lang = substr(request()->server('HTTP_ACCEPT_LANGUAGE', 'pl'), 0, 2);
        $map = [
            'en' => 'gb',
            'uk' => 'ua', // Wyjątek: użytkownik chce 'uk' dla języka ukraińskiego
            'be' => 'by',
            'el' => 'gr',
            'ja' => 'jp',
            'ko' => 'kr',
            'zh' => 'cn',
            'sq' => 'al',
            'hy' => 'am',
            'da' => 'dk',
            'et' => 'ee',
            'sv' => 'se',
            'sl' => 'si',
        ];
        return $map[$lang] ?? $lang;
    }
}


if (!function_exists('getLocalBrowserLangWithout')) {
    function getLocalBrowserLangWithout()
    {
        return substr(request()->server('HTTP_ACCEPT_LANGUAGE', 'pl'), 0, 2);
    }
}
