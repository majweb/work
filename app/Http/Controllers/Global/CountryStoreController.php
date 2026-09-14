<?php

namespace App\Http\Controllers\Global;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class CountryStoreController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request): RedirectResponse
    {
        $request->validate([
            'country_code' => ['required', 'string', 'max:5'],
        ]);

        session()->put('selected_country', $request->country_code);

        return back();
    }
}
