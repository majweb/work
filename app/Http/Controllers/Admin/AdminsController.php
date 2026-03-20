<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Inertia\Inertia;
use Inertia\Response;

class AdminsController extends Controller
{
    public function index(Request $request): Response
    {
        $query = User::role('admin')->with('roles');

        if ($request->filled('search')) {
            $query->where(function ($q) use ($request) {
                $q->where('name', 'like', '%' . $request->search . '%')
                    ->orWhere('email', 'like', '%' . $request->search . '%');
            });
        }

        if ($request->filled('role')) {
            if ($request->role === 'admin-sub') {
                $query->role('admin-sub');
            } elseif ($request->role === 'admin') {
                $query->whereDoesntHave('roles', function ($q) {
                    $q->where('name', 'admin-sub');
                });
            }
        }

        $sort = $request->get('sort', 'created_at');
        $direction = $request->get('direction', 'desc');

        $query->orderBy($sort, $direction);

        return Inertia::render('Admin/Users/Admins/Index', [
            'users' => $query->paginate(20)->withQueryString(),
            'filters' => $request->only(['search', 'sort', 'direction', 'role']),
        ]);
    }

    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
            'is_subadmin' => 'boolean',
        ]);

        $user = User::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'password' => Hash::make($validated['password']),
        ]);

        $user->assignRole('admin');

        if ($request->boolean('is_subadmin')) {
            $user->assignRole('admin-sub');
        }

        session()->flash('flash.banner', 'Administrator został dodany.');
        session()->flash('flash.bannerStyle', 'success');

        return back();
    }

    public function toggleSubAdmin(User $user): RedirectResponse
    {
        if (!$user->hasRole('admin')) {
            abort(403, 'Użytkownik nie jest administratorem.');
        }

        if ($user->hasRole('admin-sub')) {
            $user->removeRole('admin-sub');
            $message = 'Rola admin-sub została usunięta.';
        } else {
            // Logika: musi zostać co najmniej jeden admin bez roli admin-sub
            $adminsWithoutSub = User::role('admin')
                ->whereDoesntHave('roles', function ($q) {
                    $q->where('name', 'admin-sub');
                })->count();

            if ($adminsWithoutSub <= 1) {
                session()->flash('flash.banner', 'Nie można nadać roli admin-sub. Musi pozostać przynajmniej jeden administrator główny.');
                session()->flash('flash.bannerStyle', 'danger');

                return back();
            }

            $user->assignRole('admin-sub');
            $message = 'Rola admin-sub została dodana.';
        }

        session()->flash('flash.banner', $message);
        session()->flash('flash.bannerStyle', 'success');

        return back();
    }

    public function destroy(User $user): RedirectResponse
    {
        if (!$user->hasRole('admin-sub')) {
            session()->flash('flash.banner', 'Można usuwać tylko administratorów z rolą admin-sub.');
            session()->flash('flash.bannerStyle', 'danger');

            return back();
        }

        $user->delete();

        session()->flash('flash.banner', 'Administrator został usunięty.');
        session()->flash('flash.bannerStyle', 'success');

        return back();
    }
}
