<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\IpEmailBlock;
use Illuminate\Http\RedirectResponse;
use Inertia\Inertia;
use Inertia\Response;

class IpEmailBlockController extends Controller
{
    public function index(Request $request): Response
    {
        $query = IpEmailBlock::query();

        if ($request->filled('search')) {
            $query->where('value', 'like', '%' . $request->search . '%')
                  ->orWhere('reason', 'like', '%' . $request->search . '%');
        }

        if ($request->filled('type')) {
            $query->where('type', $request->type);
        }

        $blocks = $query->latest()->paginate(20)->withQueryString();

        return Inertia::render('Admin/Security/IpEmailBlock/Index', [
            'blocks' => $blocks,
            'filters' => $request->only(['search', 'type']),
        ]);
    }

    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'value' => 'required|string|unique:ip_email_blocks,value|max:255',
            'type' => 'required|in:ip,email',
            'reason' => 'nullable|string|max:255',
        ]);

        IpEmailBlock::create($validated);

        return back()->with('flash.banner', 'Blokada została dodana pomyślnie.');
    }

    public function destroy(IpEmailBlock $ipEmailBlock): RedirectResponse
    {
        $ipEmailBlock->delete();

        return back()->with('flash.banner', 'Blokada została usunięta.');
    }
}
