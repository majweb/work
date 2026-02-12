<?php

namespace App\Services;

use App\Models\ChangeProduct;
use App\Models\Invoice;
use App\Models\Order;
use App\Models\User;
use App\Notifications\SendRequestSocialAdminNotification;
use Carbon\Carbon;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class BuyHelper
{
    /**
     * @return mixed
     */
    public function lastInvoiceFromMonth()
    {
        return optional(Invoice::where('month',\Carbon\Carbon::now()->format('m'))->where('year',\Carbon\Carbon::now()->format('Y'))->latest()->take(1)->first())->number;
    }

    /**
     * @param $tax
     * @return mixed
     */
    public function createOrder($subtotal,$foundation)
    {
       $order = Auth::user()->orders()->create([
            'payment_type' => 'P24',
            'amount' => $subtotal,
            'paid_date' => Carbon::now(),
            'foundation_id'=>$foundation
        ]);
        return $order;
    }

    /**
     * @param $order
     * @param $products
     * @return string|void
     */
    public function generateOrderPdf($order, $products)
    {
        try{
            $user = Auth::user();

            $pdf = Pdf::loadView('templates.pdf.order', compact(
                'user',
                'order',
                'products',
            ));
            $filename = 'firm/' . Auth::user()->id . '/pdf/orders/order-' . $order->id . '.pdf';

            $order->update([
                'pdf' => $filename
            ]);
            Storage::disk('orders')->put($filename, $pdf->output());
        } catch (Exception $e) {
            Log::info($e->getMessage());
            return $e->getMessage();
        }

    }

    /**
     * @param $order
     * @return string|void
     */
    public function generateInvoiceAndPdf()
    {
        try {
            $user = auth()->user();
            $lastInvoiceFromMonth= (new BuyHelper())->lastInvoiceFromMonth() ?? 0;
            $maskNumber = sprintf("%03d", $lastInvoiceFromMonth + 1);
            $date = Carbon::now();
            $pdf = Pdf::loadView('templates.pdf.invoice',compact('order','maskNumber','date'));
            $filenameInvoice = 'firm/' . $user->id.'/pdf/invoices/'.$maskNumber.'-'.$date->format('m').'-' .(string) $date->format('Y') .'_Work.pdf';
            Storage::disk('invoices')->put($filenameInvoice, $pdf->output());

            $user->invoice()->create([
                'number' => (string) $maskNumber,
                'day' => $date->format('d'),
                'month' => $date->format('m'),
                'year' => $date->format('Y'),
                'pdf' => $filenameInvoice,
                'date_invoice' => $date->format('Y-m-d'),
                'amount' => $order->amount
            ]);
        } catch (Exception $e) {
            Log::info($e->getMessage());
            return $e->getMessage();
        }

    }
    public function generate50Pdf($cert50)
    {
        try {
            $date = now()->timestamp;
            $foundation = Order::where('user_id',auth()->id())->latest()->first()?->foundation;
            if ($foundation) {
                    $pdf = Pdf::loadView('templates.pdf.50',compact('foundation'))->setPaper('a4', 'landscape');
                    $filenameInvoice = 'firm/' . auth()->id().'/pdf/certyficates50/'.$date.'.pdf';

                    // Pobierz ścieżkę do starego pliku, jeśli istnieje
                    $oldFilePath = $cert50->certificate_pdf;

                    // Sprawdź, czy istnieje poprzedni plik i usuń go
                    if ($oldFilePath && Storage::disk('local')->exists($oldFilePath)) {
                        Storage::disk('local')->delete($oldFilePath);
                    }

                    Storage::disk('local')->put($filenameInvoice, $pdf->output());
                    $cert50->update([
                        'certificate_pdf' => $filenameInvoice
                    ]);
                    session()->flash('flash.banner',__('translate.success50Pdf'));
                    session()->flash('flash.bannerStyle', 'success');
                    return redirect()->route('firm.p50');
            } else {
                session()->flash('flash.banner',__('translate.noFundation50Pdf'));
                session()->flash('flash.bannerStyle', 'danger');
                return redirect()->route('firm.p50');            }


        } catch (Exception $e) {
            Log::info($e->getMessage());
            return $e->getMessage();
        }

    }

    /**
     * @param $cartItems
     * @param $order
     * @return string|void
     */
    public function addOrderItemsClearCartResetFundation($cartItems, $order)
    {
        try {
            $elements = [];
            foreach ($cartItems as $item) {
                for ($i = 1; $i <= $item->qty; $i++) {
                    $elements[] = [
                        'order_id' => $order->id,
                        'product_id' => $item->id,
                        'points' => $item->options->points,
                    ];
                }
            }
            $order->orderProducts()->createMany($elements);
            Cart::destroy();
            if (Session::has('foundation')) {
                Session::forget('foundation');
            }
        } catch (Exception $e) {
            Log::info($e->getMessage());
            return $e->getMessage();
        }

    }


    /**
     * @param $points
     * @param $product
     * @return RedirectResponse|string|void
     */
    public function createFromPoints($points, $product)
    {
        try {
            if (Auth::user()->firm->points >= $points) {
                    $now = now();
                    $lastChange = ChangeProduct::where('user_id',Auth::user()->id)->where('product_id',$product->id)->first();
                if($product->id != 10){
//                    różne od artykułu
                    if($product->id == 11 ){
                        $admins=User::role('admin')->get();
                        $lang = app()->getLocale();
                        $admins->each(function ($admin) use ($product,$lang){
                            $admin->notify((new SendRequestSocialAdminNotification($product,Auth::user()))->locale($lang));
                        });
                    }
                    if($lastChange){
                        $end = $lastChange->end->addDays(30);
                        $lastChange->update(['end'=>$end]);
                    } else {
                        $start = $now;
                        $end = $now->clone()->addDays(30);
                        Auth::user()->changeProducts()->create([
                            'product_id' => $product->id,
                            'start' => $start,
                            'end' => $end,
                            'qty' => NULL,
                        ]);
                    }
                } else {
                    if($lastChange){
                        $lastChange->increment('qty',1);
                    } else {
                        Auth::user()->changeProducts()->create([
                            'product_id' => $product->id,
                            'start' => NULL,
                            'end' => NULL,
                            'qty' => 1,
                        ]);
                    }
                }
                Auth::user()->firm()->decrement('points', $points);
            } else {
                session()->flash('flash.banner', 'Brak wystarczajacych punktów');
                session()->flash('flash.bannerStyle', 'danger');
                return back();
            }
        }  catch (Exception $e) {
            Log::info($e->getMessage());
            return $e->getMessage();
        }
    }
}
