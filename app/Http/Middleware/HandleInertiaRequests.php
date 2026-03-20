<?php

namespace App\Http\Middleware;

use App\Http\Resources\LanguageResource;
use App\Lang\Lang;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Route;
use Inertia\Middleware;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Tighten\Ziggy\Ziggy;

class HandleInertiaRequests extends Middleware
{
    /**
     * The root template that is loaded on the first page visit.
     *
     * @var string
     */
    protected $rootView = 'app';

    /**
     * Determine the current asset version.
     */
    public function version(Request $request): ?string
    {
        return parent::version($request);
    }

    /**
     * Define the props that are shared by default.
     *
     * @return array<string, mixed>
     */
    public function share(Request $request): array
    {
        return array_merge(parent::share($request), [
            'ziggy' => fn () => [
                ...(new Ziggy)->toArray(),
                'location' => $request->url(),
            ],
            'permissionsCan' => function () {
                return request()->user() ? request()->user()->getPermissionsViaRoles()->map(function (Permission $permission) {
                    return [
                        $permission['name'] => in_array($permission['name'], request()->user()->permissions->pluck('name')->toArray()),
                    ];
                })->collapse()->all() : null;
            },
            'roles' => fn () => request()->user() ? request()->user()->getRoleNames() : null,
            'firmLoginPoints' => fn () => request()->user() && request()->user()->hasRole('firm') ? request()->user()->firm->points : (request()->user() && request()->user()->hasRole('recruit') ? request()->user()->user->firm->points : null),
            'exportRequiredPoints' => fn () => config('getPoints.ExportAplications'),
            //            'permissionsRecruit' => fn () => request()->user() && request()->user()->hasRole('firm') ? Role::findByName('recruit','web')->permissions()->pluck('name'): NULL,
            'language' => app()->getLocale(),
            'currentCountry' => getLocalBrowserLang(),
            'languages' => LanguageResource::collection(Lang::cases()),
            'translations' => function () {
                return cache()->rememberForever('translations.'.app()->getLocale(), function () {
                    return collect(File::allFiles(base_path('lang/'.app()->getLocale())))
                        ->flatMap(function ($file) {
                            return Arr::dot(
                                File::getRequire($file->getRealPath()),
                                $file->getBasename('.'.$file->getExtension()).'.'
                            );
                        });
                });
            },
            'sender' => session()->pull('sender') ?? null,
            'csrf_token' => csrf_token(),
            'cart' => Cart::content(),
            'canLogin' => Route::has('login'),
            'canRegister' => Route::has('register'),
            'pageUrl' => env('APP_URL'),
            'pageName' => env('APP_NAME'),
            'unreadNotifications' => $request->user() ? $request->user()->unreadNotifications()->count() : 0,
            'unreadTicketsCount' => $request->user() && $request->user()->hasRole('admin') ? \App\Models\Ticket::where('is_read', false)->count() : 0,
            'mapsApi' => env('GOOGLE_MAPS_API'),
            'mapboxToken' => config('services.mapbox.token'),
            'currencyFromClient' => fn () => (request()->user() && request()->user()->hasRole('recruit') && ! request()->user()->hasRole('firm')) ? request()->user()->user->firm->currency : null,
            'integrations' => fn () => \App\Models\Integration::all()->keyBy('name'),
            'registrationAgreements' => fn () => [
                'firm' => \App\Models\Agreement::where('type', 'firm_registration')->where('is_active', true)->get(['id', 'description']),
                'worker' => \App\Models\Agreement::where('type', 'worker_registration')->where('is_active', true)->get(['id', 'description']),
            ],
            'supportAgreements' => fn () => \App\Models\Agreement::where('type', 'tickets')->where('is_active', true)->get(['id', 'description']),
        ]);
    }
}
