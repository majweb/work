<?php

namespace App\Providers;

use App\Models\Aplication;
use App\Models\CandidateQuestion;
use App\Models\ChangeProduct;
use App\Models\Comment;
use App\Models\CvClassic;
use App\Models\ExternalCompany;
use App\Models\Project;
use App\Models\Tag;
use App\Models\User;
use App\Notifications\ResetPasswordNotification;
use App\Observers\ChangeProductObserver;
use App\Observers\CvClassicObserver;
use App\Observers\projectObserver;
use App\Policies\CandidateQuestionPolicy;
use App\Policies\CommentPolicy;
use App\Policies\ExternalCompanyPolicy;
use App\Policies\TagPolicy;
use Illuminate\Auth\Notifications\VerifyEmail;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\ServiceProvider;
use Inertia\Inertia;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->singleton(\App\Services\ApplicationFilterService::class);
        $this->app->singleton(\App\Services\ApplicationStatusService::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Http::macro('crm', function () {
            return Http::withHeaders([
                'X-API-KEY' => config('services.crm.key'),
            ])->baseUrl(config('services.crm.url'));
        });

        Gate::define('super-admin-only', function (User $user) {
            return $user->hasRole('admin') && ! $user->hasRole('admin-sub');
        });

        //        observer
        Project::observe(ProjectObserver::class);
        ChangeProduct::observe(ChangeProductObserver::class);
        CvClassic::observe(CvClassicObserver::class);

        Gate::policy(CandidateQuestion::class, CandidateQuestionPolicy::class);
        Gate::policy(ExternalCompany::class, ExternalCompanyPolicy::class);
        Gate::policy(Comment::class, CommentPolicy::class);
        Gate::policy(Tag::class, TagPolicy::class);

        if (
            str_contains(request()->getHost(), 'crm.work4you.global') ||
            request()->is('logged/*') ||
            request()->is('projects/apply/*') ||
            request()->is('projects/apply') ||
            request()->is('user/profile')
        ) {
            Config::set('inertia.ssr.enabled', false);
        }

        Inertia::share([
            'auth.user.firm' => function () {
                return Auth::user() && Auth::user()->hasRole('firm') ? Auth::user()->firm : null;
            },
            'auth.user.workerDetail' => function () {
                return Auth::user() && Auth::user()->hasRole('worker') ? Auth::user()->workerDetail : null;
            },
            'auth.user.firm.media' => function () {
                return Auth::user() && Auth::user()->hasRole('firm') ? Auth::user()->firm->media : null;
            },
        ]);

        JsonResource::withoutWrapping();

        VerifyEmail::toMailUsing(function (object $notifiable, string $url) {
            return (new MailMessage)
                ->subject(__('translate.emailVerifySubject'))
                ->line(__('translate.emailVerifyLine'))
                ->action(__('translate.emailVerifySubject'), $url);
        });

        ResetPasswordNotification::toMailUsing(function ($notifiable, $token) {
            $url = url(route('password.reset', [
                'token' => $token,
                'email' => $notifiable->getEmailForPasswordReset(),
            ], false));

            return (new MailMessage)
                ->subject(__('translate.resetTitle'))
                ->line(__('translate.resetEmailText'))
                ->action(__('translate.resetPassword'), $url)
                ->line(__('translate.resetEmailExpire', ['count' => config('auth.passwords.'.config('auth.defaults.passwords').'.expire')]))
                ->line(__('translate.resetEmailRequest'));
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

        Gate::define('admin', function (User $user) {
            return $user->hasRole('admin');
        });
    }
}
