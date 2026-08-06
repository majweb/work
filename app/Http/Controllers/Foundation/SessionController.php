<?php

namespace App\Http\Controllers\Foundation;

use App\Http\Controllers\Controller;
use App\Models\Foundation;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Inertia\Response;

class SessionController extends Controller
{
    public function showLogin(): Response
    {
        return Inertia::render('Foundation/Auth/Login');
    }

    public function login(Request $request): RedirectResponse
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'registration_code' => 'required',
        ]);

        $foundation = Foundation::where('email', $credentials['email'])
            ->where('registration_code', $credentials['registration_code'])
            ->first();

        if ($foundation) {
            session(['foundation_auth_id' => $foundation->id]);

            return redirect()->route('foundation.dashboard');
        }

        return back()->withErrors(['email' => 'Nieprawidłowy e-mail lub kod rejestracyjny.']);
    }

    public function logout(): RedirectResponse
    {
        session()->forget('foundation_auth_id');

        return redirect()->route('foundation.login');
    }
}
