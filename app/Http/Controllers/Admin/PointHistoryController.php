<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PointHistory;
use App\Models\User;
use App\Exports\PointHistoryExport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Inertia\Response;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\DB;
use Symfony\Component\HttpFoundation\BinaryFileResponse;

class PointHistoryController extends Controller
{
    public function index(Request $request): Response
    {
        $query = PointHistory::query()->with('user.firm');

        $selectedUser = null;
        if ($request->filled('user_id')) {
            $query->where('user_id', $request->user_id);
            $selectedUser = User::with('firm')->find($request->user_id);
        }

        if ($request->filled('firm')) {
            $query->whereHas('user', function ($q) use ($request) {
                $q->where('name', 'like', '%' . $request->firm . '%')
                    ->orWhereHas('firm', function ($q2) use ($request) {
                        $q2->where('name', 'like', '%' . $request->firm . '%');
                    });
            });
        }

        if ($request->filled('type')) {
            $query->where('type', $request->type);
        }

        if ($request->filled('action_name')) {
            $search = $request->action_name;
            $query->where('action_name', 'like', $search . '%');
        }

        $histories = $query->latest()->paginate(10)->withQueryString();

        $stats = [
            'total_purchased' => PointHistory::where('type', 'purchase')->sum('points'),
            'total_used' => abs(PointHistory::where('type', 'usage')->sum('points')),
            'active_firms_count' => User::role('firm')->whereHas('pointHistories')->count(),
        ];

        $availableActions = PointHistory::query()
            ->select('action_name')
            ->get()
            ->map(function ($item) {
                $parts = explode(':', $item->action_name);
                return trim($parts[0]);
            })
            ->unique()
            ->map(function ($action) {
                return [
                    'id' => $action,
                    'name' => PointHistory::translateActionName($action),
                ];
            })
            ->sortBy('name', SORT_NATURAL | SORT_FLAG_CASE)
            ->values();

        return Inertia::render('Admin/Finance/Points/Index', [
            'histories' => $histories,
            'filters' => $request->all(['firm', 'type', 'action_name', 'user_id']),
            'stats' => $stats,
            'availableActions' => $availableActions,
            'selectedUser' => $selectedUser ? [
                'id' => $selectedUser->id,
                'name' => $selectedUser->firm?->name ?? $selectedUser->name,
                'has_history' => $selectedUser->pointHistories()->exists(),
            ] : null,
        ]);
    }

    public function clearHistory(int $userId): RedirectResponse
    {
        PointHistory::where('user_id', $userId)->delete();

        return redirect()->back()->with('message', 'Historia punktów została wyczyszczona.');
    }

    public function export(Request $request)
    {
        $query = PointHistory::query()->with('user.firm');

        if ($request->filled('user_id')) {
            $query->where('user_id', $request->user_id);
        }

        if ($request->filled('firm')) {
            $query->whereHas('user', function ($q) use ($request) {
                $q->where('name', 'like', '%' . $request->firm . '%')
                    ->orWhereHas('firm', function ($q2) use ($request) {
                        $q2->where('name', 'like', '%' . $request->firm . '%');
                    });
            });
        }

        if ($request->filled('type')) {
            $query->where('type', $request->type);
        }

        if ($request->filled('action_name')) {
            $search = $request->action_name;
            $query->where('action_name', 'like', $search . '%');
        }

        $data = $query->latest()->get();

        return Excel::download(
            new PointHistoryExport($data),
            'kredyty_' . now()->format('Y-m-d') . '.xlsx'
        );
    }
}
