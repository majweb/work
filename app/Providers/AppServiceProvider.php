<?php

namespace App\Providers;

use App\Models\Project;
use App\Models\User;
use Illuminate\Auth\Notifications\VerifyEmail;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\ServiceProvider;
use Inertia\Inertia;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {



        Inertia::share([
            'auth.user.firm' => function () {
                return Auth::user() && Auth::user()->hasRole('firm')  ? Auth::user()->firm : null;
            }
        ]);

        JsonResource::withoutWrapping();

        VerifyEmail::toMailUsing(function (object $notifiable, string $url) {
            return (new MailMessage)
                ->subject(__('auth.emailVerifySubject'))
                ->line(__('auth.emailVerifyLine'))
                ->action(__('auth.emailVerifySubject'), $url);
        });

        Gate::define('project-recruiter', function (User $user, Project $project) {
            return $user->id === $project->recruiter_id;
        });

    }
}
