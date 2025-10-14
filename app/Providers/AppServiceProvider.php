<?php

namespace App\Providers;

use App\Models\Aplication;
use App\Models\CandidateQuestion;
use App\Models\Comment;
use App\Models\ExternalCompany;
use App\Models\Project;
use App\Models\Tag;
use App\Models\User;
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
        //        observer
        Project::observe(ProjectObserver::class);


        Gate::policy(CandidateQuestion::class, CandidateQuestionPolicy::class);
        Gate::policy(ExternalCompany::class, ExternalCompanyPolicy::class);
        Gate::policy(Comment::class, CommentPolicy::class);
        Gate::policy(Tag::class, TagPolicy::class);


        if (request()->is('logged/*') || request()->is('projects/apply/*') || request()->is('projects/apply') || request()->is('user/profile')) {
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

        Gate::define('admin', function (User $user) {
            return $user->hasRole('admin');
        });

    }
}
