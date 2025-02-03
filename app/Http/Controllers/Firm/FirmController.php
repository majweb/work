<?php

namespace App\Http\Controllers\Firm;

use App\Http\Controllers\Controller;
use App\Http\Requests\FirmUpdateRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FirmController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(FirmUpdateRequest $request)
    {
        Auth::user()->firm()->update([
            'nip'=>$request->firmData()['nip'],
            'description'=>$request->firmData()['description'],
            'regon'=>$request->firmData()['regon'],
            'street'=>$request->firmData()['street'],
            'number'=>$request->firmData()['number'],
            'city'=>$request->firmData()['city'],
            'postal'=>$request->firmData()['postal'],
            'country'=>$request->firmData()['country'],
            'contact_phone'=>$request->firmData()['contact_phone'],
            'invoice_same'=>$request->firmData()['invoice_same'] ? 1 : 0,
            'name_invoice'=>$request->firmData()['invoice_same'] ? Auth::user()->name : $request->firmData()['name_invoice'],
            'nip_invoice'=>$request->firmData()['invoice_same'] ? $request->firmData()['nip'] : $request->firmData()['nip_invoice'],
            'regon_invoice'=>$request->firmData()['invoice_same'] ? $request->firmData()['regon'] : $request->firmData()['regon_invoice'],
            'street_invoice'=>$request->firmData()['invoice_same'] ? $request->firmData()['street'] : $request->firmData()['street_invoice'],
            'number_invoice'=>$request->firmData()['invoice_same'] ? $request->firmData()['number'] : $request->firmData()['number_invoice'],
            'city_invoice'=>$request->firmData()['invoice_same'] ? $request->firmData()['city'] : $request->firmData()['city_invoice'],
            'postal_invoice'=>$request->firmData()['invoice_same'] ? $request->firmData()['postal'] : $request->firmData()['postal_invoice'],
            'country_invoice'=>$request->firmData()['invoice_same'] ? $request->firmData()['country'] : $request->firmData()['country_invoice'],
        ]);
        session()->flash('flash.banner', __('translate.dataUpdated'));
        session()->flash('flash.bannerStyle', 'success');

        return redirect()->back();

    }
}
