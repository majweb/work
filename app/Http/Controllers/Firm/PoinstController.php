<?php

namespace App\Http\Controllers\Firm;

use App\Http\Controllers\Controller;
use App\Http\Resources\PointsResource;
use App\Services\MessengerService;
use Illuminate\Support\Facades\Auth;

class PoinstController extends Controller
{
    public function index()
    {
        return inertia()->render('Points/Index', [
            'products' => PointsResource::collection(Auth::user()->changeProducts()->with('product')->paginate(10)->withQueryString()),
            // Cennik z pozycją odczytania wiadomości (cena domyślna, dopóki admin jej nie zmieni)
            'pointCosts' => config('getPoints') + [MessengerService::UNLOCK_ACTION => app(MessengerService::class)->unlockPrice()],
        ]);
    }
}
