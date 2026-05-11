<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use Sentry\Laravel\Integration;
use Inertia\Inertia;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Http\Request;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        api: __DIR__.'/../routes/api.php',
        commands: __DIR__.'/../routes/console.php',
        channels: __DIR__.'/../routes/channels.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        $middleware->preventRequestsDuringMaintenance(except: [
            'logged/*',
            'login',
            'logout',
        ]);
        $middleware->validateCsrfTokens(['buy/webhook', 'stripe/webhook']);
        $middleware->web(append: [
            \App\Http\Middleware\SetLanguage::class,
            \App\Http\Middleware\HandleInertiaRequests::class,
            \Illuminate\Http\Middleware\AddLinkHeadersForPreloadedAssets::class,
        ]);
        $middleware->alias([
            'auth.internal' => \App\Http\Middleware\VerifyInternalApiKey::class,
            'role' => \Spatie\Permission\Middleware\RoleMiddleware::class,
            'permission' => \Spatie\Permission\Middleware\PermissionMiddleware::class,
            'role_or_permission' => \Spatie\Permission\Middleware\RoleOrPermissionMiddleware::class,
            'only_direct_permission' => \App\Http\Middleware\OnlyDirectPermissions::class,

        ]);
        //
    })
//    ->withSchedule(function (Schedule $schedule) {
//        $schedule->command('media-library:delete-old-temporary-uploads')->daily();
//    })
    ->withExceptions(function (Exceptions $exceptions) {
        Integration::handles($exceptions);
        $exceptions->respond(function (Response $response, Throwable $exception, Request $request) {
            if ( !app()->environment(['local', 'testing']) && in_array($response->getStatusCode(), [500, 503, 404, 403])) {
                return Inertia::render('Error', [
                    'status' => $response->getStatusCode(),
                    'translations' => cache()->rememberForever('translations.'.app()->getLocale(), function () {
                        return collect(\Illuminate\Support\Facades\File::allFiles(base_path('lang/'.app()->getLocale())))
                            ->flatMap(function ($file) {
                                return \Illuminate\Support\Arr::dot(
                                    \Illuminate\Support\Facades\File::getRequire($file->getRealPath()),
                                    $file->getBasename('.'.$file->getExtension()).'.'
                                );
                            });
                    }),
                ])
                    ->toResponse($request)
                    ->setStatusCode($response->getStatusCode());
            } elseif ($response->getStatusCode() === 419) {
                return back()->with([
                    'message' => 'The page expired, please try again.',
                ]);
            }

            return $response;
        });
    })->create();
