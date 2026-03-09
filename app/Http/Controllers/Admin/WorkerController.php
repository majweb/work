<?php

namespace App\Http\Controllers\Admin;

use App\Exports\WorkersExport;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Inertia\Response;
use Maatwebsite\Excel\Facades\Excel;
use Symfony\Component\HttpFoundation\BinaryFileResponse;

class WorkerController extends Controller
{
    public function index(Request $request): Response
    {
        $query = $this->buildQuery($request);

        return Inertia::render('Admin/Users/Workers/Index', [
            'users' => $query->paginate(20)->withQueryString(),
            'filters' => $request->only(['search', 'status', 'sort', 'direction']),
            'stats' => [
                'total' => User::role('worker')->count(),
                'active' => User::role('worker')->whereNull('user_blocked')->count(),
                'blocked' => User::role('worker')->whereNotNull('user_blocked')->count(),
                'unverified' => User::role('worker')->whereNull('email_verified_at')->count(),
            ],
        ]);
    }

    public static function buildQuery(Request $request)
    {
        $query = User::role('worker')->with('workerDetail');

        if ($request->filled('search')) {
            $query->where(function ($q) use ($request) {
                $q->where('name', 'like', '%'.$request->search.'%')
                    ->orWhere('email', 'like', '%'.$request->search.'%')
                    ->orWhereHas('workerDetail', function ($sq) use ($request) {
                        $sq->where('surname', 'like', '%'.$request->search.'%');
                    });
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
        return Inertia::render('Admin/Users/Workers/Edit', [
            'user' => $user->load('workerDetail'),
        ]);
    }

    public function update(Request $request, User $user): RedirectResponse
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'surname' => 'required|string|max:60',
            'email' => 'required|email|max:255|unique:users,email,'.$user->id,
            'contact_phone' => 'required|numeric|digits between:1,30',
        ], [], [
            'name' => 'imię',
            'surname' => 'nazwisko',
            'email' => 'email',
            'contact_phone' => 'telefon kontaktowy',
        ]);
        $user->update([
            'name' => $validated['name'],
            'email' => $validated['email'],
        ]);

        $user->workerDetail()->updateOrCreate(
            ['user_id' => $user->id],
            [
                'surname' => $validated['surname'],
                'contact_phone' => $validated['contact_phone'],
            ]
        );

        session()->flash('flash.banner', 'Dane pracownika zostały zaktualizowane.');
        session()->flash('flash.bannerStyle', 'success');

        return back();
    }

    public function toggleBlock(User $user): RedirectResponse
    {
        if ($user->user_blocked) {
            $user->update(['user_blocked' => null]);
            $message = 'Użytkownik został odblokowany.';
        } else {
            $user->update(['user_blocked' => now()]);
            $message = 'Użytkownik został zablokowany.';
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
        return Excel::download(new WorkersExport($request), 'pracownicy_'.now()->format('Y_m_d_H_i').'.csv', \Maatwebsite\Excel\Excel::CSV);
    }
}
