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
        $firm = Auth::user()->firm;
        $firmData = $request->firmData();

        $data = [
            'nip' => $firmData['nip'],
            'description' => $firmData['description'],
            'regon' => $firmData['regon'],
            'street' => $firmData['street'],
            'number' => $firmData['number'],
            'city' => $firmData['city'],
            'postal' => $firmData['postal'],
            'country' => $firmData['countryJson']['name'],
            'countryJson' => $firmData['countryJson'],
            'contact_phone' => $firmData['contact_phone'],
            'invoice_same' => $firmData['invoice_same'] ? 1 : 0,
            'name_invoice' => $firmData['invoice_same'] ? Auth::user()->name : $firmData['name_invoice'],
            'nip_invoice' => $firmData['invoice_same'] ? $firmData['nip'] : $firmData['nip_invoice'],
            'regon_invoice' => $firmData['invoice_same'] ? $firmData['regon'] : $firmData['regon_invoice'],
            'street_invoice' => $firmData['invoice_same'] ? $firmData['street'] : $firmData['street_invoice'],
            'number_invoice' => $firmData['invoice_same'] ? $firmData['number'] : $firmData['number_invoice'],
            'city_invoice' => $firmData['invoice_same'] ? $firmData['city'] : $firmData['city_invoice'],
            'postal_invoice' => $firmData['invoice_same'] ? $firmData['postal'] : $firmData['postal_invoice'],
            'country_invoice' => $firmData['invoice_same'] ? $firmData['countryJson']['name'] : $firmData['countryInvoiceJson']['name'],
            'countryInvoiceJson' => $firmData['invoice_same'] ? $firmData['countryJson'] : $firmData['countryInvoiceJson'],
        ];

        $firm->update($data);

        session()->flash('flash.banner', __('translate.dataUpdated'));
        session()->flash('flash.bannerStyle', 'success');

        return redirect()->back();

    }
}
