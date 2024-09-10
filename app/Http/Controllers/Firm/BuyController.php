<?php

namespace App\Http\Controllers\Firm;

use App\Http\Controllers\Controller;
use App\Http\Resources\BuyResource;
use App\Models\Product;
use App\Order;
use App\Services\BuyHelper;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BuyController extends Controller
{
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

        return inertia()->render('Buy/Detail',[
            'total'=>$total,
            'cartItems'=>$cartItems,
            'countCart'=>$countCart,
        ]);
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
        $subtotal = Cart::subtotal();
        DB::transaction(function () use ($cartItems,$subtotal,$buyHelper){
            $order = $buyHelper->createOrder($subtotal);
            $buyHelper->generateOrderPdf($order,$cartItems);
            $buyHelper->addOrderItemsAndClearCartwithUpdatePoints($cartItems,$order);
            $buyHelper->generateInvoiceAndPdf($order);

            session()->flash('flash.banner', 'dodano punkty');
            session()->flash('flash.bannerStyle', 'success');
        }, 3);

            return to_route('buy.successView');
    }

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
        Cart::add($product->id, $product->trans_name[app()->getLocale()], 1, $product->price,'0', ['points' => $product->points]);
            session()->flash('flash.banner', __('auth.addedToCart'));
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
