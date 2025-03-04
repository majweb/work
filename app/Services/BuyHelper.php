<?php

namespace App\Services;

use App\Models\ChangeProduct;
use App\Models\Invoice;
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
    public function generateInvoiceAndPdf($order)
    {
        try {
            $lastInvoiceFromMonth= (new BuyHelper())->lastInvoiceFromMonth() ?? 0;
            $maskNumber = sprintf("%03d", $lastInvoiceFromMonth + 1);
            $date = Carbon::now();
            $pdf = Pdf::loadView('templates.pdf.invoice',compact('order','maskNumber','date'));
            $filenameInvoice = 'firm/' . $order->user_id.'/pdf/invoices/'.$maskNumber.'-'.$date->format('m').'-' .(string) $date->format('Y') .'.pdf';
            Storage::disk('invoices')->put($filenameInvoice, $pdf->output());

            $order->invoice()->create([
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
            if (Auth::user()->firm->points > $points) {
                    $now = now();
                    $lastChange = ChangeProduct::where('user_id',Auth::user()->id)->where('product_id',$product->id)->first();
                if($product->id != 10){
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
