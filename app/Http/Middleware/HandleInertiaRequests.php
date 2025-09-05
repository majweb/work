<?php

namespace App\Http\Middleware;

use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Inertia\Middleware;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
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
            'permissionsCan' => function () {
                return request()->user() ? request()->user()->getPermissionsViaRoles()->map(function(Permission $permission){
                    return [
                        $permission['name'] => in_array($permission['name'], request()->user()->permissions->pluck('name')->toArray())
                    ];
                })->collapse()->all() : null;
            },
            'roles' => fn () => request()->user() ? request()->user()->getRoleNames(): NULL,
            'firmLoginPoints' => fn () => request()->user() && request()->user()->hasRole('firm') ? request()->user()->firm->points: (request()->user() && request()->user()->hasRole('recruit') ? request()->user()->user->firm->points : NULL),
            'exportRequiredPoints' => fn () => config('getPoints.ExportAplications'),
//            'permissionsRecruit' => fn () => request()->user() && request()->user()->hasRole('firm') ? Role::findByName('recruit','web')->permissions()->pluck('name'): NULL,
            'language' => app()->getLocale(),
            'currentCountry'=>getLocalBrowserLang(),
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
            'csrf_token'=>csrf_token(),
            'cart' => Cart::content(),
            'canLogin' => Route::has('login'),
            'canRegister' => Route::has('register'),
            'pageUrl' => env('APP_URL'),
            'pageName' => env('APP_NAME'),
            'unreadNotifications'=>$request->user() ? $request->user()->unreadNotifications()->count() :0,
            'mapsApi' => env('GOOGLE_MAPS_API'),
            'currencyFromClient' => fn()=> (request()->user() && request()->user()->hasRole('recruit') && !request()->user()->hasRole('firm'))  ? request()->user()->user->firm->currency : null
        ]);
    }
}
