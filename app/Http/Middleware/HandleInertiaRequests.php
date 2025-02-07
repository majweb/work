<?php

namespace App\Http\Middleware;

use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use Inertia\Middleware;
use Spatie\Permission\Models\Permission;
use Tighten\Ziggy\Ziggy;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\File;
use App\Lang\Lang;
use App\Http\Resources\LanguageResource;
use Illuminate\Support\Facades\Route;

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
            'roles' => fn () => request()->user() ? request()->user()->getRoleNames(): NULL,
            'permissions' => fn () => request()->user() && request()->user()->hasRole('firm') ? Permission::all()->pluck('name'): NULL,
            'language' => app()->getLocale(),
            'currentCountry'=>substr(request()->server('HTTP_ACCEPT_LANGUAGE', 'en'), 0, 2),
            'languages' => LanguageResource::collection(Lang::cases()),
            'translations' => function () {
                return cache()->rememberForever('translations.' . app()->getLocale(), function () {
                    return collect(File::allFiles(base_path('lang/' . app()->getLocale())))
                        ->flatMap(function ($file) {
                            return Arr::dot(
                                File::getRequire($file->getRealPath()),
                                $file->getBasename('.' . $file->getExtension()) . '.'
                            );
                        });
                });
            },
            'cart' => Cart::content(),
            'canLogin' => Route::has('login'),
            'canRegister' => Route::has('register'),
            'pageUrl' => env('APP_URL'),
            'pageName' => env('APP_NAME'),
            'mapsApi' => env('GOOGLE_MAPS_API'),
            'currencyFromClient' => fn()=> request()->user() && request()->user()->hasRole('recruit')  ? request()->user()->user->firm->currency : null
        ]);
    }
}
