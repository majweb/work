<?php

namespace App\Http\Controllers\Firm;

use App\Http\Controllers\Controller;
use App\Http\Resources\PointsResource;
use App\Models\ChangeProduct;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PoinstController extends Controller
{
    public function index()
    {
        return inertia()->render('Points/Index', [
            'products' => PointsResource::collection(Auth::user()->changeProducts()->with('product')->paginate(10)->withQueryString()),
            'pointCosts' => config('getPoints')
        ]);
    }

}
