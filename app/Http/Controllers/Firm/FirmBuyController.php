<?php

namespace App\Http\Controllers\Firm;

use App\Http\Controllers\Controller;
use App\Http\Requests\FirmBuyRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FirmBuyController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(FirmBuyRequest $request)
    {
        Auth::user()->firm()->update([
            'currency'=>$request->currencyData()['currency'],
        ]);
        session()->flash('flash.banner', __('translate.dataUpdated'));
        session()->flash('flash.bannerStyle', 'success');
        return redirect()->back();
    }
}
