<?php

namespace App\Http\Controllers\Admin;

use App\Exports\RecruitsExport;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Inertia\Response;
use Maatwebsite\Excel\Facades\Excel;
use Symfony\Component\HttpFoundation\BinaryFileResponse;

class RecruitController extends Controller
{
    public function index(Request $request): Response
    {
        $query = $this->buildQuery($request);

        return Inertia::render('Admin/Users/Recruits/Index', [
            'users' => $query->paginate(20)->withQueryString(),
            'filters' => $request->only(['search', 'status', 'sort', 'direction']),
            'stats' => [
                'total' => User::role('recruit')->count(),
                'active' => User::role('recruit')->whereNull('user_blocked')->count(),
                'blocked' => User::role('recruit')->whereNotNull('user_blocked')->count(),
                'unverified' => User::role('recruit')->whereNull('email_verified_at')->count(),
            ],
        ]);
    }

    public static function buildQuery(Request $request)
    {
        $query = User::role('recruit')->with(['user.firm', 'roles'])->withCount(['projectsRecruits', 'applicationsRecruits']);

        if ($request->filled('search')) {
            $query->where(function ($q) use ($request) {
                $q->where('name', 'like', '%'.$request->search.'%')
                    ->orWhere('email', 'like', '%'.$request->search.'%');
            });
        }

        if ($request->filled('status')) {
            if ($request->status === 'blocked') {
                $query->whereNotNull('user_blocked');
            } elseif ($request->status === 'active') {
                $query->whereNull('user_blocked');
            } elseif ($request->status === 'verified') {
                $query->whereNotNull('email_verified_at');
            } elseif ($request->status === 'unverified') {
                $query->whereNull('email_verified_at');
            }
        }

        $sort = $request->get('sort', 'created_at');
        $direction = $request->get('direction', 'desc');

        if ($sort && $direction && is_string($sort) && ! str_contains($sort, 'function')) {
            $query->orderBy($sort, $direction);
        } else {
            $query->orderBy('created_at', 'desc');
        }

        return $query;
    }

    public function edit(User $user): Response
    {
        return Inertia::render('Admin/Users/Recruits/Edit', [
            'user' => $user->load(['user.firm', 'roles'])->loadCount(['projectsRecruits', 'applicationsRecruits']),
        ]);
    }

    public function update(Request $request, User $user): RedirectResponse
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:users,email,'.$user->id,
        ], [], [
            'name' => 'imię i nazwisko',
            'email' => 'email',
        ]);

        $user->update($validated);

        session()->flash('flash.banner', 'Dane rekrutera zostały zaktualizowane.');
        session()->flash('flash.bannerStyle', 'success');

        return back();
    }

    public function toggleBlock(User $user): RedirectResponse
    {
        if ($user->user_blocked) {
            $user->update(['user_blocked' => null]);
            $message = 'Rekruter został odblokowany.';
        } else {
            $user->update(['user_blocked' => now()]);
            $message = 'Rekruter został zablokowany.';
        }

        session()->flash('flash.banner', $message);
        session()->flash('flash.bannerStyle', 'success');

        return back();
    }

    public function verifyEmail(User $user): RedirectResponse
    {
        $user->update(['email_verified_at' => now()]);

        session()->flash('flash.banner', 'Email został zweryfikowany.');
        session()->flash('flash.bannerStyle', 'success');

        return back();
    }

    public function export(Request $request): BinaryFileResponse
    {
        return Excel::download(new RecruitsExport($request), 'rekruterzy_'.now()->format('Y_m_d_H_i').'.csv', \Maatwebsite\Excel\Excel::CSV);
    }
}
