<?php

namespace App\Http\Controllers\Firm;

use App\Http\Controllers\Controller;
use App\Http\Resources\BuyResource;
use App\Models\Foundation;
use App\Models\Product;
use App\Models\Transaction;
use App\Services\BuyHelper;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Session;
use Przelewy24\Exceptions\Przelewy24Exception;
use Przelewy24\Przelewy24;
class BuyController extends Controller
{
    public function __construct(
        private readonly Przelewy24 $przelewy24,
    ) {}
    /**
     * Show the form for creating the resource.
     */
    public function index()
    {
        $query = Product::query()->active();
        $countCart = Cart::content()->count();

        $query->when(request()->has('product_type'), function ($q) {
            if(request()->get('product_type') != 'all'){
            $q->where('product_type',request()->get('product_type'));
            }
        });
        return inertia()->render('Buy/Index',[
            'products' => BuyResource::collection($query->paginate(10)->withQueryString()),
            'filters' => request()->only(['product_type']),
            'countCart' => $countCart,
        ]);
    }

    public function paymentView()
    {
        $cartItems = Cart::content();
        $subtotal = Cart::subtotal();
        $countCart = Cart::content()->count();
        return inertia()->render('Buy/Payment',[
            'cartItems' => $cartItems,
            'withTax' => $subtotal,
            'countCart' => $countCart,
        ]);
    }

    public function detail()
    {
        $cartItems = Cart::content();
        $total = Cart::subtotal();
        $countCart = Cart::content()->count();
        $countryCode = getLocalBrowserLang();
        $foundations = Foundation::where('country',$countryCode)->get();
        return inertia()->render('Buy/Detail',[
            'total'=>$total,
            'cartItems'=>$cartItems,
            'countCart'=>$countCart,
            'foundations'=>$foundations,
        ]);
    }

    public function addFoundation()
    {
        $foundation = request()->foundation;
        if ($foundation){
            Session::put('foundation', $foundation['id']);
        }
    }

    public function detailRemoveFromCart($id)
    {
        Cart::remove($id);
        return back();
    }

    public function detailIncrementCart($id,$gty)
    {
        Cart::update($id,++$gty);
        return back();
    }
    public function detailDecrementCart($id,$qty)
    {
        Cart::update($id,--$qty);
        return back();
    }

    public function changeToPoints(Product $product,$points)
    {
        (new BuyHelper())->createFromPoints($points,$product);
        return back();
    }




    public function makeOrder(BuyHelper $buyHelper)
    {
        $cartItems = Cart::content();
        $totalPoints = Cart::content()->sum(function ($item) {
            return $item->options->points ?? 0;
        });


        if (Session::has('foundation') && $cartItems->count() > 0) {
            $foundation = Session::get('foundation');

            $sessionId = uniqid() . '-' . time();
            $subtotal = Cart::subtotal();

            $register = $this->przelewy24->transactions()->register(
                sessionId: $sessionId,
                amount: (float) str_replace(',', '', $subtotal) * 100,
                description: "Kredyty za {$subtotal}",
                email: request()->user()->email,
                urlReturn: route('buy.successView'),
                urlStatus: route('front.buy.webhook'),
            );
            $order = $buyHelper->createOrder($subtotal, $foundation);
            $buyHelper->generateOrderPdf($order, $cartItems);
            $buyHelper->addOrderItemsClearCartResetFundation($cartItems, $order);

            Transaction::create([
                'status' => 'pending',
                'price' => str_replace(',', '', $subtotal),
                'session_id' => $sessionId,
                'credits' => $totalPoints,
                'user_id' => request()->user()->id,
                'order_id' => $order->id,
            ]);

            return redirect(
                $register->gatewayUrl()
            );
        } else {
            session()->flash('flash.banner', "Zakup niemożliwy – brak fundacji albo koszyk pusty!.");
            session()->flash('flash.bannerStyle', 'danger');
            return back();
        }

    }

    public function webhook(Request $request,BuyHelper $buyHelper)
    {
        Log::info('Weszłem');

        $webhook = $this->przelewy24->handleWebhook(
            $request->post()
        );

        $transaction = Transaction::where('session_id', $webhook->sessionId())->first();
        $isSignValid = $webhook->isSignValid(
            sessionId: $transaction->session_id,
            amount: $transaction->price * 100,
            originAmount: $transaction->price,
            orderId: $webhook->orderId(),
            methodId: $webhook->methodId(),
            statement: $webhook->statement(),
        );

        if (!$isSignValid) {
            session()->flash('flash.banner', "Błąd płatności.Spróbuj jeszcze raz.");
            session()->flash('flash.bannerStyle', 'danger');
            return to_route('buy.paymentView');
        }
        try {
            $this->przelewy24->transactions()->verify(
                $transaction->session_id,
                $webhook->orderId(),
                $transaction->price,
            );
            $user = User::where('id',$transaction->user_id)->with('firm')->first();
            $order = Order::where('id',$transaction->order_id)->first();

            if($user && $transaction && $order){
                if($transaction->status === 'pending'){
                    $transaction->status = 'paid';
                    $transaction->save();
                    $buyHelper->generateInvoiceAndPdf($order);
                    $user->firm()->increment('points', $transaction->credits);
//                    Mail::to(env('MAIL_ADMIN'))->queue(new NewBuy($transaction->user,$transaction));
                }
            }
        } catch (Przelewy24Exception) {
            session()->flash('flash.banner', "Błąd płatności.Spróbuj jeszcze raz.");
            session()->flash('flash.bannerStyle', 'danger');
            return to_route('firm.buyCredits.index');
        }
        return response()->noContent();
    }


//        if (Session::has('foundation')) {
//            $foundation = Session::get('foundation');
//        }
//        $cartItems = Cart::content();
//        $subtotal = Cart::subtotal();
//        DB::transaction(function () use ($cartItems,$subtotal,$buyHelper,$foundation){
//            $order = $buyHelper->createOrder($subtotal,$foundation);
//            $buyHelper->generateOrderPdf($order,$cartItems);
//            $buyHelper->addOrderItemsAndClearCartwithUpdatePoints($cartItems,$order);
//            $buyHelper->generateInvoiceAndPdf($order);
//
//            session()->flash('flash.banner', 'dodano punkty');
//            session()->flash('flash.bannerStyle', 'success');
//        }, 3);
//            return to_route('buy.successView');
//    }

    public function successView()
    {
        return inertia()->render('Buy/Success');
    }

    /**
     * Store the newly created resource in storage.
     */
    public function store(Product $product)
    {
        if($product->exists){
        Cart::add($product->id, $product->name, 1, $product->price,'0', ['points' => $product->points]);
            session()->flash('flash.banner', __('translate.addedToCart'));
            session()->flash('flash.bannerStyle', 'success');
        return back();
        }
    }

    /**
     * Display the resource.
     */
    public function show()
    {
        //
    }

    /**
     * Show the form for editing the resource.
     */
    public function edit()
    {
        //
    }

    /**
     * Update the resource in storage.
     */
    public function update(Request $request)
    {
        //
    }

    /**
     * Remove the resource from storage.
     */
    public function destroy(): never
    {
        abort(404);
    }
}
