<?php
if (!function_exists('getLocalBrowserLang')) {
    function getLocalBrowserLang()
    {
        return substr(request()->server('HTTP_ACCEPT_LANGUAGE', 'pl'), 0, 2);
    }
}
