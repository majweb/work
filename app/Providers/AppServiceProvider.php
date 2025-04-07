<?php

namespace App\Providers;

use App\Models\Aplication;
use App\Models\Project;
use App\Models\User;
use Illuminate\Auth\Notifications\VerifyEmail;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\ServiceProvider;
use Inertia\Inertia;
use Spatie\Permission\Models\Permission;

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

        if (request()->is('logged/*') || request()->is('projects/apply/*') || request()->is('user/profile')) {
            Config::set('inertia.ssr.enabled', false);
        }

        Inertia::share([
            'auth.user.firm' => function () {
                return Auth::user() && Auth::user()->hasRole('firm')  ? Auth::user()->firm : null;
            },
            'auth.user.workerDetail' => function () {
                return Auth::user() && Auth::user()->hasRole('worker')  ? Auth::user()->workerDetail : null;
            }
        ]);

        JsonResource::withoutWrapping();

        VerifyEmail::toMailUsing(function (object $notifiable, string $url) {
            return (new MailMessage)
                ->subject(__('translate.emailVerifySubject'))
                ->line(__('translate.emailVerifyLine'))
                ->action(__('translate.emailVerifySubject'), $url);
        });

        Gate::define('project-recruiter', function (User $user, Project $project) {
            $data = collect($project->other_recruits)->pluck('value');
            return $user->id === $project->recruiter_id || $data->contains($user->id);
        });

        Gate::define('aplication-recruiter', function (User $user, Aplication $aplication) {
            $aplication->load('project');
            $data = collect($aplication->project->other_recruits)->pluck('value');
            return $user->id === $aplication->recruiter_id || $data->contains($user->id);
        });

    }
}
