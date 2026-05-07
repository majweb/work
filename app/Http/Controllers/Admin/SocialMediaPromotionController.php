<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ChangeProduct;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Inertia\Response;

class SocialMediaPromotionController extends Controller
{
    /**
     * Display a listing of social media promotions.
     */
    public function index(Request $request): Response
    {
        $promotions = ChangeProduct::query()
            ->where('product_id', 11) // ID for Social Media Promotion
            ->where('qty', '>', 0)
            ->with(['user.firm'])
            ->latest()
            ->paginate(20)
            ->withQueryString()
            ->through(function ($item) {
                $user = $item->user;
                $firm = null;

                if ($user) {
                    // If user has a direct firm record
                    if ($user->firm) {
                        $firm = $user->firm;
                    }
                    // If user is a recruiter, get firm from their parent user
                    elseif ($user->recruiter_from_firm_id) {
                        $parentUser = \App\Models\User::with('firm')->find($user->recruiter_from_firm_id);
                        $firm = $parentUser?->firm;
                    }
                }

                return [
                    'id' => $item->id,
                    'qty' => $item->qty,
                    'total_qty' => $item->total_qty,
                    'created_at' => $item->created_at,
                    'user' => [
                        'id' => $user?->id,
                        'name' => $user?->name,
                        'email' => $user?->email,
                        'firm' => $firm ? [
                            'id' => $firm->id,
                            'name' => $firm->name ?? $firm->user?->name,
                            'logo_url' => $firm->getFirstMediaUrl('firms_images', 'preview') ?: $firm->getFirstMediaUrl('firms_images'),
                        ] : null,
                    ],
                ];
            });

        return Inertia::render('Admin/Marketing/SocialMedia/Index', [
            'promotions' => $promotions,
            'filters' => $request->only(['search']),
        ]);
    }

    public function decrement(ChangeProduct $changeProduct)
    {
        if ($changeProduct->qty > 0) {
            $changeProduct->decrement('qty', 1);
        }

        return back();
    }
}
