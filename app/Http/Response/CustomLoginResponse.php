<?php

namespace App\Http\Response;

use Laravel\Fortify\Contracts\LoginResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CustomLoginResponse implements LoginResponse
{
    public function toResponse($request)
    {
        $redirectData = Session::pull('redirect_project_after_login');
        if ($redirectData) {
            return redirect()->intended(route('front.projects.single', $redirectData));
        }
        return redirect()->intended(route('dashboard'));
    }
}
