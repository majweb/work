<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Invoice;
use App\Models\InvoiceCorrection;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Inertia\Inertia;
use Inertia\Response;

class InvoiceController extends Controller
{
    public function index(Request $request): Response
    {
        $query = Invoice::query()->with(['user.firm', 'corrections']);

        if ($request->filled('number')) {
            $query->where('number', 'like', '%'.$request->number.'%');
        }

        if ($request->filled('firm')) {
            $query->whereHas('user.firm', function ($q) use ($request) {
                $q->where('name_invoice', 'like', '%'.$request->firm.'%');
            });
        }

        $invoices = $query->latest()->paginate(10)->withQueryString();

        return Inertia::render('Admin/Finance/Invoices/Index', [
            'invoices' => $invoices,
            'filters' => $request->only(['number', 'firm']),
        ]);
    }

    public function createCorrection(Invoice $invoice): Response|\Illuminate\Http\RedirectResponse
    {
        if ($invoice->date_invoice->format('Y-m') !== now()->format('Y-m')) {
            return redirect()->route('admin.finance.invoices.index')->with('error', 'Korekta jest możliwa tylko dla faktur wystawionych w obecnym miesiącu.');
        }

        $invoice->load('user.firm');

        return Inertia::render('Admin/Finance/Invoices/Correction', [
            'invoice' => $invoice,
        ]);
    }

    public function storeCorrection(Request $request, Invoice $invoice)
    {
        if ($invoice->date_invoice->format('Y-m') !== now()->format('Y-m')) {
            return redirect()->route('admin.finance.invoices.index')->with('error', 'Korekta jest możliwa tylko dla faktur wystawionych w obecnym miesiącu.');
        }

        $request->validate([
            'number' => 'required|string',
            'date_correction' => 'required|date',
            'date_invoice' => 'required|date',
            'amount' => 'required|string',
            'reason' => 'nullable|string',
            'name_invoice' => 'required|string',
            'nip_invoice' => 'required|string',
            'street_invoice' => 'required|string',
            'postal_invoice' => 'required|string',
            'city_invoice' => 'required|string',
            'country_invoice' => 'required|string',
        ], [], [
            'number' => 'numer korekty',
            'date_correction' => 'data wystawienia korekty',
            'date_invoice' => 'data faktury',
            'amount' => 'kwota',
            'reason' => 'przyczyna',
            'name_invoice' => 'nazwa nabywcy',
            'nip_invoice' => 'NIP',
            'street_invoice' => 'ulica',
            'postal_invoice' => 'kod pocztowy',
            'city_invoice' => 'miasto',
            'country_invoice' => 'kraj',
        ]);

        try {
            DB::beginTransaction();

            $genNumberFile = str_replace('/', '-', $request->number);
            $filename = 'firm/'.$invoice->user_id.'/pdf/corrections/'.$genNumberFile.'.pdf';

            $correction = $invoice->corrections()->create([
                'number' => $request->number,
                'date_correction' => $request->date_correction,
                'date_invoice' => $request->date_invoice,
                'amount' => $request->amount,
                'reason' => $request->reason,
                'pdf' => $filename,
                'name_invoice' => $request->name_invoice,
                'nip_invoice' => $request->nip_invoice,
                'street_invoice' => $request->street_invoice,
                'postal_invoice' => $request->postal_invoice,
                'city_invoice' => $request->city_invoice,
                'country_invoice' => $request->country_invoice,
            ]);

            // Generowanie PDF (używamy dedykowanego widoku dla korekty)
            $pdf = Pdf::loadView('templates.pdf.invoice_correction', [
                'correction' => $correction,
                'invoice' => $invoice,
            ]);

            Storage::disk('invoices')->put($filename, $pdf->output());

            // Wysłanie maila
            $lang = $invoice->user->firm->countryJson['countryCode'] ?? 'en';
            \Illuminate\Support\Facades\Mail::to($invoice->user->email)
                ->locale($lang)
                ->send(new \App\Mail\InvoiceCorrectionMail($correction));

            DB::commit();

            return redirect()->route('admin.finance.invoices.index')->with('flash.banner', 'Korekta została wystawiona.');
        } catch (\Exception $e) {
            DB::rollBack();

            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }

    public function downloadCorrection(InvoiceCorrection $correction)
    {
        $existFile = Storage::disk('invoices')->exists($correction->pdf);
        if ($existFile) {
            return response()->download(storage_path('app/invoices/'.$correction->pdf));
        } else {
            abort(404);
        }
    }

    public function destroyCorrection(InvoiceCorrection $correction)
    {
        if ($correction->date_correction->format('Y-m') !== now()->format('Y-m')) {
            return redirect()->back()->with('error', 'Można usuwać tylko korekty wystawione w obecnym miesiącu.');
        }

        try {
            DB::beginTransaction();

            // Usuwanie pliku PDF
            if (Storage::disk('invoices')->exists($correction->pdf)) {
                Storage::disk('invoices')->delete($correction->pdf);
            }

            $correction->delete();

            DB::commit();

            return redirect()->back()->with('flash.banner', 'Korekta została usunięta.');
        } catch (\Exception $e) {
            DB::rollBack();

            return redirect()->back()->withErrors(['error' => 'Wystąpił błąd podczas usuwania korekty: '.$e->getMessage()]);
        }
    }
}
