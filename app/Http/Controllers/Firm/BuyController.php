<?php

namespace App\Http\Controllers\Firm;

use App\Http\Controllers\Controller;
use App\Http\Resources\BuyResource;
use App\Lang\Lang;
use App\Models\Banner;
use App\Models\ChangeProduct;
use App\Models\Foundation;
use App\Models\PremiumCertificateHistory;
use App\Models\Product;
use App\Models\TemporaryFile;
use App\Models\Transaction;
use App\Models\User;
use App\Notifications\SendRequestBannerAdminNotification;
use App\Services\BuyHelper;
use App\Services\DictionaryService;
use App\Services\Helper;
use Exception;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use Inertia\Inertia;
use Przelewy24\Exceptions\Przelewy24Exception;
use Przelewy24\Przelewy24;
use Stripe\Checkout\Session as StripeSession;
use Stripe\Stripe;
use Stripe\Webhook;

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
            if (request()->get('product_type') != 'all') {
                $q->where('product_type', request()->get('product_type'));
            }
        });

        return inertia()->render('Buy/Index', [
            'products' => BuyResource::collection($query->get()),
            'filters' => request()->only(['product_type']),
            'countCart' => $countCart,
        ]);
    }

    public function detail()
    {
        $cartItems = Cart::content();
        $total = Cart::subtotal();
        $countCart = Cart::content()->count();
        $countryCode = getLocalBrowserLang();
        $foundations = Foundation::where('country', $countryCode)->get();
        $existoundation = auth()->user()->foundation;

        return inertia()->render('Buy/Detail', [
            'total' => $total,
            'cartItems' => $cartItems,
            'countCart' => $countCart,
            'foundations' => $foundations,
            'existoundation' => $existoundation ?? null,
        ]);
    }

    public function p50(Request $request)
    {
        $cert50 = ChangeProduct::where(['user_id' => auth()->id(), 'product_id' => 12])->isCurrent()->first();

        // Jeśli użytkownik nie ma aktywnego certyfikatu 50/50, przekierowujemy na dashboard
        // ALE w nowym designie chcemy pokazać opis i możliwość zakupu/wymiany, więc może nie powinniśmy blokować?
        // Issue mówi "wymień punkty z logged/buy".
        // Jeśli jednak cert50 jest wymagany do "Generuj", to zostawmy logikę, ale dodajmy historię.

        $query = PremiumCertificateHistory::where('firm_id', auth()->user()->id);

        if ($request->filled('from')) {
            $query->whereDate('generated_at', '>=', $request->from);
        }

        if ($request->filled('to')) {
            $query->whereDate('generated_at', '<=', $request->to);
        }

        $histories = $query
            ->orderByDesc('generated_at')
            ->paginate(10)
            ->withQueryString();

        $totalAmount = $query->sum('amount');

        $firm = auth()->user()->firm;
        $product = Product::find(12); // Załóżmy że 12 to Certyfikat 50/50

        return inertia()->render('Buy/50', [
            'cert50' => $cert50,
            'histories' => $histories,
            'filters' => $request->only(['from', 'to']),
            'totalAmount' => $totalAmount,
            'points' => $firm->points,
            'product' => $product,
            'levelNames' => collect(config('premium.level_names'))->mapWithKeys(function ($translationKey, $level) {
                return [$level => __($translationKey)];
            }),
        ]);
    }

    public function banners(DictionaryService $dictionaryService)
    {
        $check = ChangeProduct::where(['user_id' => auth()->id(), 'product_id' => 8])->isCurrent()->first();

        $banner = Banner::where('user_id', auth()->id())->with('media')->first();
        $countries = $dictionaryService->getCountries(app()->getLocale());
        $product = Product::find(8);

        return inertia()->render('Buy/Banner', compact('banner', 'countries', 'product', 'check'));
    }

    public function bannersStore(Request $request)
    {
        $check = ChangeProduct::where(['user_id' => auth()->id(), 'product_id' => 8])->isCurrent()->first();

        if (! $check) {
            session()->flash('flash.banner', __('translate.forbidden'));
            session()->flash('flash.bannerStyle', 'danger');

            return redirect()->back();
        }

        $validated = $request->validate([
            'lang' => ['required', 'array', 'min:1'],
            'url' => ['required', 'string', 'url'],
            'photo' => ['required', 'array'],
            'active' => ['boolean'],
        ], [], [
            'lang' => __('translate.language'),
            'photo' => __('translate.banner'),
        ]);

        $photo = $validated['photo'][0];

        // 🔑 Sprawdź, czy przesłano nowe zdjęcie (folder) czy istniejące (URL)
        if (isset($photo['source']) && str_starts_with($photo['source'], 'http')) {
            // 📌 Zdjęcie już istnieje → nie ruszamy TemporaryFile
            $filePath = null;
        } else {
            // 📌 Nowe zdjęcie → folder z tymczasowego uploadu
            $folder = $photo; // bo tutaj przychodzi sam folder string
            $temporaryFile = TemporaryFile::where('folder', $folder)->first();

            if (! $temporaryFile) {
                return redirect()->back()->with('error', 'Nie znaleziono przesłanego zdjęcia.');
            }

            $filePath = 'temps/'.$folder.'/'.$temporaryFile->filename;

            if (! Storage::disk('public')->exists($filePath)) {
                return redirect()->back()->with('error', 'Nie znaleziono pliku tymczasowego.');
            }
        }

        // 🔑 Jeśli baner już istnieje (dla user_id + lang), to zaktualizuj
        $banner = Banner::updateOrCreate(
            [
                'user_id' => auth()->id(), // 🔑 tylko po user_id
            ],
            [
                'url' => $validated['url'],   // aktualizacja
                'lang' => $validated['lang'],  // aktualizacja
                'active' => $validated['active'],  // aktualizacja
            ]
        );

        if ($filePath) {
            // Usuń stare media
            $banner->clearMediaCollection('banners_images');

            // Dodaj nowe
            $banner->addMediaFromDisk($filePath, 'public')
                ->usingName(basename($filePath))
                ->usingFileName(basename($filePath))
                ->toMediaCollection('banners_images');

            // Usuń tymczasowy folder i rekord
            Storage::disk('public')->deleteDirectory('temps/'.$folder);
            $temporaryFile->delete();
        }
        session()->flash('flash.banner', __('translate.updatedBanner'));
        session()->flash('flash.bannerStyle', 'success');

        return back();
    }

    public function featuredEmployer()
    {
        $product = Product::find(9);
        $check = ChangeProduct::where(['user_id' => auth()->id(), 'product_id' => 9])
            ->isCurrent()
            ->first();

        return inertia()->render('Buy/FeaturedEmployer', [
            'product' => $product,
            'check' => $check,
        ]);
    }

    public function socialMedia()
    {
        $product = Product::find(11);
        $check = ChangeProduct::where(['user_id' => auth()->id(), 'product_id' => 11])
            ->isCurrent()
            ->first();

        return inertia()->render('Buy/SocialMediaPromotion', [
            'product' => $product,
            'check' => $check,
        ]);
    }

    public function reservedProject(\App\Services\PointService $pointService)
    {
        $executed = RateLimiter::attempt(
            'daily-action:'.auth()->id(), // unikalny klucz dla użytkownika
            $perMinute = 1,                 // tylko 1 wykonanie
            function () use ($pointService) {
                $cost = config('getPoints.sendReservedProject', 4000);

                // Sprawdź czy firma ma wystarczającą liczbę punktów
                $firm = auth()->user()->firm;

                if ($firm->points < $cost) {
                    session()->flash('flash.banner', __('translate.noPoints'));
                    session()->flash('flash.bannerStyle', 'danger');

                    return back();
                }

                $admins = User::role('admin')->get();
                $lang = app()->getLocale();
                $admins->each(function ($admin) use ($lang) {
                    $admin->notify((new SendRequestBannerAdminNotification(auth()->user()))->locale($lang));
                });

                $pointService->decrement($firm->user, $cost, 'sendReservedProject');

                session()->flash('flash.banner', __('translate.sendReservedProject'));
                session()->flash('flash.bannerStyle', 'success');

                return back();
            },
            $decaySeconds = 86400           // reset limitu po 24h
        );

        if (! $executed) {
            session()->flash('flash.banner', __('translate.noReservedMore'));
            session()->flash('flash.bannerStyle', 'danger');

            return back();
        }
    }

    public function generate50(BuyHelper $buyHelper)
    {
        $cert50 = ChangeProduct::where(['user_id' => auth()->id(), 'product_id' => 12])->isCurrent()->first();
        if (! $cert50) {
            session()->flash('flash.banner', __('translate.forbidden'));
            session()->flash('flash.bannerStyle', 'danger');

            return redirect()->route('dashboard');
        }
        $buyHelper->generate50Pdf($cert50);
    }

    public function downloadPDF()
    {
        $cert50 = ChangeProduct::where(['user_id' => auth()->id(), 'product_id' => 12])->isCurrent()->first();
        if (! $cert50) {
            session()->flash('flash.banner', __('translate.forbidden'));
            session()->flash('flash.bannerStyle', 'danger');

            return redirect()->route('dashboard');
        }
        $existFile = Storage::disk('local')->exists($cert50->certificate_pdf);
        if ($existFile) {
            return response()->download(storage_path('app/'.$cert50->certificate_pdf));
        } else {
            abort(404);
        }
    }

    public function addFoundation()
    {
        $foundation = request()->foundation;
        if ($foundation) {
            // Jeśli mamy tablicę z 'id' albo 'value', wybierz pierwsze dostępne
            $foundationId = $foundation['id'] ?? $foundation['value'] ?? null;

            if ($foundationId) {
                Session::put('foundation', $foundationId);
            }
        }
    }

    public function detailRemoveFromCart($id)
    {
        Cart::remove($id);

        return back();
    }

    public function detailIncrementCart($id, $gty)
    {
        Cart::update($id, ++$gty);

        return back();
    }

    public function detailDecrementCart($id, $qty)
    {
        Cart::update($id, --$qty);

        return back();
    }

    public function changeToPoints(Product $product, $points, BuyHelper $buyHelper): RedirectResponse
    {
        $buyHelper->createFromPoints($points, $product);
        session()->flash('flash.banner', __('translate.exchangeSuccess').'.');
        session()->flash('flash.bannerStyle', 'success');

        return back();
    }

    public function makeOrder(BuyHelper $buyHelper, \App\Services\PointService $pointService)
    {
        $cartItems = Cart::content();

        if (! Session::has('foundation') || $cartItems->isEmpty()) {
            session()->flash('flash.banner', 'Zakup niemożliwy – brak fundacji albo koszyk pusty!');
            session()->flash('flash.bannerStyle', 'danger');

            return back();
        }

        try {
            DB::transaction(function () use ($buyHelper, $cartItems, $pointService) {
                $totalPoints = $cartItems->sum(function ($item) {
                    return $item->options->points ?? 0;
                });

                $subtotal = Cart::subtotal();
                $amount = (float) str_replace(',', '', $subtotal);

                $transaction = Transaction::create([
                    'status' => 'paid',
                    'price' => $amount,
                    'session_id' => uniqid().'-'.time(),
                    'credits' => $totalPoints,
                    'user_id' => auth()->id(),
                ]);

                $pointService->increment(auth()->user(), $transaction->credits, 'Purchase: Points');
                $buyHelper->generateInvoiceAndPdf($cartItems, $amount, Session::get('foundation'));

                Cart::destroy();
                Session::forget('foundation');
            });

            session()->flash('flash.banner', __('translate.orderPay'));
            session()->flash('flash.bannerStyle', 'success');

            return to_route('buy.successView');
        } catch (Exception $e) {
            Log::error('Order process failed: '.$e->getMessage());
            session()->flash('flash.banner', 'Wystąpił błąd podczas procesowania zamówienia: '.$e->getMessage());
            session()->flash('flash.bannerStyle', 'danger');

            return back();
        }
    }

    public function stripeCheckout()
    {
        $cartItems = Cart::content();

        if (! Session::has('foundation') || $cartItems->isEmpty()) {
            session()->flash('flash.banner', 'Zakup niemożliwy – brak fundacji albo koszyk pusty!');
            session()->flash('flash.bannerStyle', 'danger');

            return back();
        }

        $subtotal = Cart::subtotal();
        $amount = (float) str_replace(',', '', $subtotal);
        $totalPoints = $cartItems->sum(function ($item) {
            return $item->options->points ?? 0;
        });

        Stripe::setApiKey(config('services.stripe.secret'));

        try {
            $checkoutSession = StripeSession::create([
                'payment_method_types' => ['card'],
                'line_items' => [[
                    'price_data' => [
                        'currency' => 'usd',
                        'product_data' => [
                            'name' => __('translate.stripeProductName'),
                        ],
                        'unit_amount' => (int) ($amount * 100),
                    ],
                    'quantity' => 1,
                ]],
                'mode' => 'payment',
                'success_url' => route('buy.successView'),
                'cancel_url' => route('buy.detail'),
                'metadata' => [
                    'user_id' => auth()->id(),
                    'credits' => $totalPoints,
                    'foundation_id' => Session::get('foundation')->id ?? null,
                ],
            ]);

            Transaction::create([
                'status' => 'pending',
                'price' => $amount,
                'session_id' => $checkoutSession->id,
                'credits' => $totalPoints,
                'user_id' => auth()->id(),
            ]);

            return Inertia::location($checkoutSession->url);
        } catch (Exception $e) {
            Log::error('Stripe checkout error: '.$e->getMessage());
            session()->flash('flash.banner', 'Błąd Stripe: '.$e->getMessage());
            session()->flash('flash.bannerStyle', 'danger');

            return back();
        }
    }

    public function stripeWebhook(Request $request, BuyHelper $buyHelper, \App\Services\PointService $pointService)
    {
        Stripe::setApiKey(config('services.stripe.secret'));
        $endpoint_secret = config('services.stripe.webhook');

        $payload = $request->getContent();
        $sig_header = $request->header('Stripe-Signature');
        $event = null;

        try {
            $event = Webhook::constructEvent(
                $payload, $sig_header, $endpoint_secret
            );
        } catch (\UnexpectedValueException $e) {
            return response()->json(['error' => 'Invalid payload'], 400);
        } catch (\Stripe\Exception\SignatureVerificationException $e) {
            return response()->json(['error' => 'Invalid signature'], 400);
        }

        if ($event->type === 'checkout.session.completed') {
            $session = $event->data->object;

            $transaction = Transaction::where('session_id', $session->id)->first();

            if ($transaction && $transaction->status === 'pending') {
                DB::transaction(function () use ($transaction, $session, $pointService) {
                    $transaction->update(['status' => 'paid']);

                    $user = User::find($session->metadata->user_id);
                    $pointService->increment($user, (int) $session->metadata->credits, 'Purchase: Points (Stripe)');

                    $foundation = Foundation::find($session->metadata->foundation_id);

                    // Ponieważ Cart::content() jest pusty w webhooku, musimy obsłużyć generowanie faktury inaczej
                    // lub zapisać dane koszyka w metadanych/bazie danych przed płatnością.
                    // Na ten moment symulujemy lub logujemy potrzebę.
                    Log::info('Stripe Payment Success for Transaction: '.$transaction->id);
                });
            }
        }

        return response()->json(['status' => 'success']);
    }

    public function webhook(Request $request, BuyHelper $buyHelper, \App\Services\PointService $pointService)
    {
        $webhook = $this->przelewy24->handleWebhook(
            $request->post()
        );

        $transaction = Transaction::where('session_id', $webhook->sessionId())->first();
        $isSignValid = $webhook->isSignValid(
            sessionId: $transaction->session_id,
            amount: $transaction->price * 100,
            originAmount: $transaction->price * 100,
            orderId: $webhook->orderId(),
            methodId: $webhook->methodId(),
            statement: $webhook->statement(),
        );
        if (! $isSignValid) {
            session()->flash('flash.banner', 'Błąd płatności.Spróbuj jeszcze raz.');
            session()->flash('flash.bannerStyle', 'danger');

            return to_route('buy.paymentView');
        }
        try {
            $this->przelewy24->transactions()->verify(
                $transaction->session_id,
                $webhook->orderId(),
                $transaction->price * 100,
            );
            $user = User::where('id', $transaction->user_id)->with('firm')->first();

            if ($user && $transaction) {
                if ($transaction->status === 'pending') {
                    $transaction->status = 'paid';
                    $transaction->save();
                    $pointService->increment($user, $transaction->credits, 'Purchase: Points (webhook)');
                }
            }
        } catch (Przelewy24Exception $exception) {
            session()->flash('flash.banner', 'Błąd płatności.Spróbuj jeszcze raz.');
            session()->flash('flash.bannerStyle', 'danger');

            return to_route('buy.paymentView');
        }

        return response()->noContent();
    }

    public function successView()
    {
        return inertia()->render('Buy/Success', [
            'auth' => [
                'user' => auth()->user()->load('firm'),
            ],
        ]);
    }

    /**
     * Store the newly created resource in storage.
     */
    public function store(Product $product)
    {
        if ($product->exists) {
            Cart::add($product->id, $product->name, 1, $product->price, '0', ['points' => $product->points]);
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
