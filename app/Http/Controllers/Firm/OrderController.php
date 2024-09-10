<?php

namespace App\Http\Controllers\Firm;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Storage;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        Gate::authorize('view', [User::class, Order::class]);

        request()->validate([
            'direction' => ['in:asc,desc'],
            'field' => ['in:id,paid_date']
        ]);

        $query = Order::query()->withCount('orderProducts')->where('user_id', auth()->user()->id);

        $query->when(request()->has(['field', 'direction']), function ($q) {
            $q->orderBy(request('field'), request('direction'));
        });
        $query->when(request()->has('payment_type'), function ($q) {
            if (request()->get('payment_type') != 'all') {
                $q->where('payment_type', request()->get('payment_type'));
            }
        });

        $query->when(request()->has('paid_date'), function ($q) {
            if (request()->get('paid_date') != 'paid-all') {
                if (request()->get('paid_date') == 'pay') {
                    $q->whereNotNull('paid_date');
                } elseif (request()->get('paid_date') == 'unpay') {
                    $q->whereNull('paid_date');
                }
            }
        });

        return inertia()->render('Order/Index', [
            'orders' => $query->paginate(5)->withQueryString(),
            'filters' => request()->only(['field', 'direction', 'paid_date', 'payment_type'])
        ]);
    }

    public function downloadPDF(Order $order)
    {
        Gate::authorize('view', $order);

        $existFile = Storage::disk('orders')->exists($order->pdf);
        if ($existFile) {
            return response()->download(storage_path('app/orders/' . $order->pdf));
        } else {
            abort(404);
        }
    }
}
