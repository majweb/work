<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\UpdateActiveServiceRequest;
use App\Models\ChangeProduct;
use App\Models\Product;
use Carbon\Carbon;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Inertia\Inertia;
use Inertia\Response;
use Symfony\Component\HttpFoundation\StreamedResponse;

class ActiveServiceController extends Controller
{
    public function index(Request $request): Response
    {
        $query = ChangeProduct::with(['user', 'product']);

        // Filter by Service (Product)
        if ($request->filled('service')) {
            $query->where('product_id', $request->service);
        }

        // Filter by Date (Start and End range)
        if ($request->filled('date_from')) {
            $query->where('start', '>=', $request->date_from);
        }

        if ($request->filled('date_to')) {
            $query->where('end', '<=', $request->date_to);
        }

        // Filter by Status (Current, Expired, Future)
        if ($request->filled('status')) {
            $now = Carbon::now();
            if ($request->status === 'active') {
                $query->where('start', '<=', $now)
                    ->where('end', '>=', $now);
            } elseif ($request->status === 'expired') {
                $query->where('end', '<', $now);
            } elseif ($request->status === 'future') {
                $query->where('start', '>', $now);
            }
        }

        $activeServices = $query->latest()
            ->paginate(20)
            ->withQueryString();

        $statsQuery = clone $query->getQuery();
        $totals = $statsQuery->selectRaw('SUM(qty) as total_remaining, SUM(total_qty) as total_initial')->first();

        $activeServices->through(function ($item) {
                $user = $item->user;
                $firm = null;

                if ($user) {
                    if ($user->firm) {
                        $firm = $user->firm;
                    } elseif ($user->recruiter_from_firm_id) {
                        $parentUser = \App\Models\User::with('firm')->find($user->recruiter_from_firm_id);
                        $firm = $parentUser?->firm;
                    }
                }

                return [
                    'id' => $item->id,
                    'user_name' => $firm?->name ?? $user?->name ?? 'N/A',
                    'firm_logo_url' => $firm?->getFirstMediaUrl('firms_images', 'preview') ?: $firm?->getFirstMediaUrl('firms_images'),
                    'product_name' => $item->product?->getTranslation('name', 'pl') ?? 'N/A',
                    'product_type' => $item->product?->product_type->value ?? 'N/A',
                    'start' => $item->start?->format('Y-m-d') ?? '-',
                    'end' => $item->end?->format('Y-m-d') ?? '-',
                    'qty' => $item->qty,
                    'total_qty' => $item->total_qty,
                    'certificate_pdf' => $item->certificate_pdf,
                    'is_active' => $item->start?->isPast() && $item->end?->isFuture(),
                ];
            });

        $products = Product::whereHas('chageProduct')
            ->get()
            ->map(fn ($product) => [
                'id' => $product->id,
                'name' => $product->getTranslation('name', 'pl'),
            ]);

        return Inertia::render('Admin/Marketing/ActiveServices/Index', [
            'activeServices' => $activeServices,
            'filters' => $request->only(['service', 'date_from', 'date_to', 'status']),
            'products' => $products,
            'stats' => [
                'total_initial' => (int) ($totals->total_initial ?? 0),
                'total_remaining' => (int) ($totals->total_remaining ?? 0),
                'total_used' => (int) (($totals->total_initial ?? 0) - ($totals->total_remaining ?? 0)),
            ]
        ]);
    }

    public function edit(ChangeProduct $activeService): Response
    {
        $activeService->load(['user', 'product']);

        return Inertia::render('Admin/Marketing/ActiveServices/Edit', [
            'activeService' => [
                'id' => $activeService->id,
                'user_name' => $activeService->user?->name ?? 'N/A',
                'product_name' => $activeService->product?->getTranslation('name', 'pl') ?? 'N/A',
                'product_type' => $activeService->product?->product_type->value ?? 'N/A',
                'start' => $activeService->start?->format('Y-m-d'),
                'end' => $activeService->end?->format('Y-m-d'),
                'qty' => $activeService->qty,
                'total_qty' => $activeService->total_qty,
                'certificate_pdf' => $activeService->certificate_pdf,
            ]
        ]);
    }

    public function update(UpdateActiveServiceRequest $request, ChangeProduct $activeService): RedirectResponse
    {
        $activeService->update($request->validated());

        return redirect()->route('admin.active-services.index')
            ->with('flash.banner', 'Usługa została zaktualizowana.');
    }

    public function downloadPdf(ChangeProduct $activeService): StreamedResponse
    {
        if (!$activeService->certificate_pdf || !Storage::disk('local')->exists($activeService->certificate_pdf)) {
            abort(404, 'Plik nie istnieje');
        }

        return Storage::disk('local')->download($activeService->certificate_pdf);
    }
}
