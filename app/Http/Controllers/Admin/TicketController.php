<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Ticket;
use App\Exports\TicketsExport;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Inertia\Response;
use Maatwebsite\Excel\Facades\Excel;
use Symfony\Component\HttpFoundation\BinaryFileResponse;
use Illuminate\Http\RedirectResponse;

class TicketController extends Controller
{
    public function index(Request $request): Response
    {
        $query = Ticket::with('user');

        if ($request->filled('subject')) {
            $query->where('subject', 'like', '%' . $request->subject . '%');
        }

        if ($request->filled('type')) {
            $query->where('type', $request->type);
        }

        if ($request->filled('user')) {
            $query->whereHas('user', function ($q) use ($request) {
                $q->where('name', 'like', '%' . $request->user . '%');
            });
        }

        if ($request->filled('is_read')) {
            $query->where('is_read', $request->is_read === 'yes');
        }

        $tickets = $query->latest()->paginate(20)->withQueryString();

        return Inertia::render('Admin/Tickets/Index', [
            'tickets' => $tickets,
            'filters' => $request->only(['subject', 'type', 'user', 'is_read']),
            'unreadCount' => Ticket::where('is_read', false)->count(),
        ]);
    }

    public function markAsRead(Ticket $ticket): RedirectResponse
    {
        $ticket->update(['is_read' => true]);

        return back();
    }

    public function export(Request $request): BinaryFileResponse
    {
        return Excel::download(
            new TicketsExport($request->only(['subject', 'type', 'user', 'is_read'])),
            'tickets_' . now()->format('Y_m_d_H_i') . '.csv',
            \Maatwebsite\Excel\Excel::CSV
        );
    }
}
