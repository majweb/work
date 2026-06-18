<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ImpersonateController extends Controller
{
    /**
     * Rozpoczęcie impersonacji użytkownika.
     */
    public function take(User $user, Request $request): RedirectResponse
    {
        // 1. Zabezpieczenie: Tylko admin może impersonować
        if (! Auth::user()->hasRole('admin')) {
            abort(403);
        }

        // 2. Nie można impersonować samego siebie
        if (Auth::id() === $user->id) {
            return back()->with('flash.banner', 'Nie możesz impersonować samego siebie.');
        }

        // 3. Zapisujemy ID admina przed zmianą użytkownika
        $adminId = Auth::id();

        // 4. Logujemy się jako nowy użytkownik przez guard 'web'
        // To jest silnik sesji, na którym opiera się Sanctum w Twoim projekcie
        Auth::guard('web')->login($user);

        // 5. REGENERUJEMY SESJĘ - Standard bezpieczeństwa po zalogowaniu
        $request->session()->regenerate();

        // 6. AKTUALIZUJEMY HASHE - To jest klucz do uniknięcia wylogowania przez auth:sanctum i auth_session
        $hash = $user->getAuthPassword();
        $sessionKey = Auth::guard('web')->getName(); // Zazwyczaj "login_web_..."

        // Musimy ustawić wszystkie możliwe klucze, których szukają middleware
        $request->session()->put([
            'impersonate' => $adminId,
            'password_hash_web' => $hash,
            'password_hash_sanctum' => $hash,
            'password_hash_auth' => $hash, // Uniwersalny klucz dla wielu wersji Laravela
            'password_hash_' . $sessionKey => $hash, // Specyficzny klucz używany przez AuthenticateSession
        ]);

        // 7. Powiadamiamy bieżące żądanie o zmianie użytkownika
        Auth::setUser($user);

        $request->session()->save();

        return redirect()->route('dashboard')->with('flash.banner', "Zalogowano jako {$user->name}");
    }

    /**
     * Powrót do konta administratora.
     */
    public function stop(Request $request)
    {
        if (! $request->session()->has('impersonate')) {
            return redirect()->route('dashboard');
        }

        $adminId = $request->session()->get('impersonate');
        // Wymuszamy świeżą instancję użytkownika z bazy, aby uniknąć problemów z uprawnieniami
        $admin = User::where('id', $adminId)->first();

        if ($admin) {
            // Czyścimy cache uprawnień Spatie, aby zapobiec błędom 403
            if (class_exists(\Spatie\Permission\PermissionRegistrar::class)) {
                app(\Spatie\Permission\PermissionRegistrar::class)->forgetCachedPermissions();
            }

            // Czyścimy obecnego użytkownika, aby zapobiec konfliktom ról
            Auth::guard('web')->logout();
            $request->session()->invalidate();
            $request->session()->regenerateToken();

            // Logujemy admina ponownie
            Auth::guard('web')->login($admin);

            // Ustawienie haseł dla admina, aby powrót był stabilny
            $hash = $admin->getAuthPassword();
            $sessionKey = Auth::guard('web')->getName();

            $request->session()->put([
                'password_hash_web' => $hash,
                'password_hash_sanctum' => $hash,
                'password_hash_auth' => $hash,
                'password_hash_' . $sessionKey => $hash,
            ]);

            // Odświeżamy uprawnienia/role w bieżącej instancji
            $admin->unsetRelation('roles')->unsetRelation('permissions');
            Auth::setUser($admin);
            $request->session()->save();

            return redirect()->route('admin.firms.index')->with('flash.banner', 'Powrócono do konta administratora.');
        }

        // W razie błędu
        Auth::guard('web')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('login');
    }
}
