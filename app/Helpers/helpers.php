<?php

if (! function_exists('getLocalBrowserLang')) {
    /**
     * Rynek wykryty z przeglądarki. Mimo nazwy zwraca kod KRAJU z tabeli countries
     * (np. ar-SA -> sa, de-AT -> at, uk -> ua), a nie kod języka.
     */
    function getLocalBrowserLang()
    {
        return app(\App\Services\BrowserMarketDetector::class)->detect(request());
    }
}

if (! function_exists('getLocalBrowserLangWithout')) {
    function getLocalBrowserLangWithout()
    {
        return substr(request()->server('HTTP_ACCEPT_LANGUAGE', 'pl'), 0, 2);
    }
}

if (! function_exists('getSelectedCountry')) {
    function getSelectedCountry()
    {
        return session('selected_country');
    }
}
