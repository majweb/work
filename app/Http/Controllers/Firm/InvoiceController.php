<?php

namespace App\Http\Controllers\Firm;

use App\Events\IncreasePointToDiscount;
use App\Http\Controllers\Controller;
use App\Http\Requests\FirmInvoiceUpdate;
use App\Models\Invoice;
use App\Models\User;
use App\Services\AdminService;
use App\Services\Helper;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Gate;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Storage;

class InvoiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        Gate::authorize('view',[User::class,Invoice::class]);

        request()->validate([
            'direction' => ['in:asc,desc'],
            'field' => ['in:id,day']
        ]);

        $query = Invoice::query()->where('user_id', auth()->id());


        $query->when(request()->has('amount'), function ($q) {
            $q->where('amount',request()->get('amount'));
        });
        $query->when(request()->has(['field', 'direction']), function ($q) {
            $q->orderBy(request('field'), request('direction'));
        });


        return inertia()->render('Invoice/Index',[
            'invoices' => $query->paginate(5)->withQueryString(),
            'filters' => request()->only(['field', 'direction','amount'])
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(FirmInvoiceUpdate $request, Invoice $invoice)
    {
        Gate::authorize('update',$invoice);

        if ($invoice) {
            try {
                $firm = auth()->user();
                $date = $request->invoiceData()['date_invoice'];
                DB::beginTransaction();
                if (isset($firm)) {
                    $firm->update([
                        'nip_invoice' => $request->invoiceData()['nip_invoice'],
                        'name_invoice' => $request->invoiceData()['name_invoice'],
                        'street_invoice' => $request->invoiceData()['street_invoice'],
                        'postal_invoice' => $request->invoiceData()['postal_invoice'],
                        'city_invoice' => $request->invoiceData()['city_invoice'],
                        'country_invoice' => $request->invoiceData()['country_invoice'],
                    ]);
                    $invoice->update([
                        'number' => $request->invoiceData()['number'],
                        'day' => $request->invoiceData()['day'],
                        'month' => $request->invoiceData()['month'],
                        'year' => $request->invoiceData()['year'],
                        'date_invoice' => $request->invoiceData()['date_invoice']
                    ]);
                }

                $GenNumber = (string)$request->invoiceData()['number'] . '/' . $request->invoiceData()['month'] . '/' . $request->invoiceData()['year'];
                $GenNumberFile = (string)$request->invoiceData()['number'] . '-' . $request->invoiceData()['month'] . '-' . $request->invoiceData()['year'];
                $maskNumber = null;

                $testInvoice = false;
                 $pdf = Pdf::loadView('templates.pdf.invoice',
                        compact('maskNumber', 'date', 'testInvoice','GenNumber')
                    );


                $filename = 'firm/' . auth()->id() . '/pdf/invoices/' . $GenNumberFile . '-corections.pdf';
                Storage::disk('invoices')->put($filename, $pdf->output());
                DB::commit();
                return redirect()->back();
            } catch (\Exception $e) {
                DB::rollback();
                abort(500, $e->getMessage());
            }
        }
    }

    /**
     * @param Invoice $invoice
     * @return void
     */
    public function downloadPDF(Invoice $invoice){

        Gate::authorize('view',$invoice);

        $existFile = Storage::disk('invoices')->exists($invoice->pdf);
        if ($existFile) {
            $invoice->update([
                'opened'=> 1
            ]);
            return response()->download(storage_path('app/invoices/' . $invoice->pdf));
        } else{
            abort(404);
        }
    }
}
