<?php

namespace App\Http\Controllers\Global;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Lang\Lang;

class LanguageStoreController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        session()->put('language', Lang::tryFrom($request->language)?->value ?? config('app.locale'));

        return back();
    }
}
