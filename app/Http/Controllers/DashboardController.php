<?php

namespace App\Http\Controllers;

use App\Models\Aplication;
use App\Models\Firm;
use App\Models\Foundation;
use App\Models\Invoice;
use App\Models\Project;
use App\Models\ProjectQuestion;
use App\Models\Banner;
use App\Models\Article;
use App\Models\User;
use App\Charts\AdminSparklineChart;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class DashboardController extends Controller
{
    public function __invoke(AdminSparklineChart $sparklineChart)
    {
        $user = Auth::user();
        $countQuestions = ProjectQuestion::whereNull('accepted')->count();
        $countBanners = Banner::where('active_admin', 0)->count();
        $countArticles = Article::where('active_admin', 0)->count();

        // Helper to get stats for periods
        $getPeriodStats = function($model, $days = 7, $sumColumn = null) {
            $current = [];
            $previous = [];

            for ($i = $days - 1; $i >= 0; $i--) {
                $date = Carbon::today()->subDays($i);
                $query = $model::whereDate('created_at', $date);
                $current[] = $sumColumn ? (float) $query->sum($sumColumn) : $query->count();

                $prevDate = Carbon::today()->subDays($i + $days);
                $prevQuery = $model::whereDate('created_at', $prevDate);
                $previous[] = $sumColumn ? (float) $prevQuery->sum($sumColumn) : $prevQuery->count();
            }

            $currentTotal = array_sum($current);
            $previousTotal = array_sum($previous);
            $diff = $currentTotal - $previousTotal;

            return [
                'total' => $currentTotal,
                'diff' => $diff,
                'trend' => $diff >= 0 ? 'up' : 'down'
            ];
        };

        // Dane dla pracownika (worker)
        $lastAplications = Aplication::with('project.user')->where('aplication_user_id',auth()->user()->id)->latest()->first();
        $otherAplications = Aplication::with('project.user')
            ->where('aplication_user_id', auth()->user()->id)
            ->when($lastAplications, function ($query) use ($lastAplications) {
                $query->where('id', '!=', $lastAplications->id);
            })
            ->latest()
            ->take(4)
            ->get();

        // Dane dla rekrutera (recruit)
        $recruitData = [];
        $firmData = [];
        $packages = collect();
        $additionalServices = collect();
        $recruits = collect();
        $projectsCount = 0;
        $aplicationCount = 0;
        $viewCount = 0;

        if ($user->hasRole('recruit')) {
            // Pobierz projekty rekrutera
            $projects = \App\Models\Project::where('recruiter_id', $user->id)
                ->orWhereJsonContains('other_recruits', $user->id)
                ->withCount([
                    'aplications',
                    'aplications as yes_count' => function ($query) {
                        $query->where('status', 'yes');
                    },
                    'aplications as no_count' => function ($query) {
                        $query->where('status', 'no');
                    },
                    'aplications as maybe_count' => function ($query) {
                        $query->where('status', 'maybe');
                    },
                    'aplications as new_count' => function ($query) {
                        $query->whereNull('status');
                    }
                ])
                ->latest()
                ->take(5)
                ->get()
                ->map(function ($project) {
                    $position = is_string($project->position) ? json_decode($project->position, true) : $project->position;
                    $countryWork = is_string($project->countryWork) ? json_decode($project->countryWork, true) : $project->countryWork;
                    return [
                        'id' => $project->id,
                        'position' => $position['allTranslations']['title'][app()->getLocale()] ?? $position['name'] ?? __('translate.projectWithoutTitle'),
                        'city' => $project->cityWork ?? '',
                        'country' => $countryWork['allTranslations'][app()->getLocale()] ?? $countryWork['name'] ?? '',
                        'is_active' => $project->is_active ?? true,
                        'aplications_count' => $project->aplications_count ?? 0,
                        'views_count' => $project->views_count ?? 0,
                        'yes_count' => $project->yes_count ?? 0,
                        'no_count' => $project->no_count ?? 0,
                        'maybe_count' => $project->maybe_count ?? 0,
                        'new_count' => $project->new_count ?? 0,
                        'created_at' => $project->created_at ? \Carbon\Carbon::parse($project->created_at)->format('d.m.Y H:i') : '',
                        'updated_at' => $project->updated_at ? $project->updated_at->toISOString() : '',
                    ];
                });

            // Pobierz ostatnie aplikacje dla projektów rekrutera
            $recruitApplications = Aplication::with(['user','worker', 'project'])
                ->whereHas('project', function ($query) use ($user) {
                    $query->where('recruiter_id', $user->id)
                        ->orWhereJsonContains('other_recruits', $user->id);
                })
                ->latest()
                ->take(5)
                ->get()
                ->map(function ($app) {
                    $userName = $app->worker && $app->worker->exists
                        ? $app->worker->name
                        : trim($app->name . ' ' . $app->surname);
                    $userPhoto = $app->worker?->profile_photo_url;

                    if (!$userPhoto) {
                        $initials = trim(collect(explode(' ', $userName))
                            ->map(fn ($segment) => mb_substr($segment, 0, 1))
                            ->join(' ')
                        );

                        $userPhoto = 'https://ui-avatars.com/api/?name=' . urlencode($initials) . '&color=7F9CF5&background=EBF4FF';
                    }

                    return [
                        'id' => $app->id,
                        'status' => $app->status,
                        'user' => [
                            'name' => $userName,
                            'profile_photo_url' => $userPhoto,
                        ],
                        'position' => $app->project?->position['allTranslations']['title'][app()->getLocale()] ?? __('translate.projectWithoutTitle'),
                        'app_id' => $app->id,
                        'status_changed_at' => \Carbon\Carbon::parse($app->status_changed_at ?? $app->created_at)->format('d.m.Y H:i'),
                        'created_at' => $app->created_at->toISOString(),
                    ];
                });

            // Statystyki aplikacji dla wykresu
            $totalYes = Aplication::whereHas('project', function ($query) use ($user) {
                $query->where('recruiter_id', $user->id)
                    ->orWhereJsonContains('other_recruits', $user->id);
            })->where('status', 'yes')->count();

            $totalNo = Aplication::whereHas('project', function ($query) use ($user) {
                $query->where('recruiter_id', $user->id)
                    ->orWhereJsonContains('other_recruits', $user->id);
            })->where('status', 'no')->count();

            $totalMaybe = Aplication::whereHas('project', function ($query) use ($user) {
                $query->where('recruiter_id', $user->id)
                    ->orWhereJsonContains('other_recruits', $user->id);
            })->where('status', 'maybe')->count();

            $totalNew = Aplication::whereHas('project', function ($query) use ($user) {
                $query->where('recruiter_id', $user->id)
                    ->orWhereJsonContains('other_recruits', $user->id);
            })->whereNull('status')->count();

            $recruitData = [
                'applications' => $recruitApplications,
                'projects' => $projects,
                'data' => [
                    'yes' => $totalYes,
                    'no' => $totalNo,
                    'maybe' => $totalMaybe,
                    'new' => $totalNew,
                ],
            ];
        }
        if ($user->hasRole('firm')) {

            $recruits = User::where('recruiter_from_firm_id',auth()->id())->orWhere('id', auth()->id())->get();
            $activeRecruits = $recruits->whereNull('user_blocked')->count();
            $noRecruits = $recruits->whereNotNull('user_blocked', false)->count();
            $projects = Project::where('user_id', $user->id)
                ->orWhereJsonContains('other_recruits', $user->id)->get();
            $aplicationCount=Aplication::query()
                ->forCurrentRecruiter()->count();

            $projectsCount = $projects->count();
            $viewCount = $projects->sum('views_count');

            $baseQuery = Aplication::where(function ($q) use ($user) {
                $q->whereHas('project', function ($query) use ($user) {
                    $query->where('recruiter_id', $user->id)
                        ->orWhereJsonContains('other_recruits', $user->id);
                })
                    ->orWhere('user_id', auth()->id());
            });
            $totalYes = (clone $baseQuery)->where('status', 'yes')->count();
            $totalNo = (clone $baseQuery)->where('status', 'no')->count();
            $totalMaybe = (clone $baseQuery)->where('status', 'maybe')->count();
            $totalNew = (clone $baseQuery)->whereNull('status')->count();

            $allProducts = \App\Models\Product::where('active', true)
                ->orderBy('points', 'asc')
                ->with('chageProduct')
                ->get();

            $packages = $allProducts->filter(function ($product) {
                return $product->product_type->value === 'Points';
            })->map(function ($product) {
                return [
                    'id' => $product->id,
                    'points' => $product->points,
                    'name' => $product->name,
                    'price' => $product->price,
                    'product_type' => $product->product_type->value,
                ];
            })->values();

            $additionalServices = $allProducts->filter(function ($product) {
                return $product->product_type->value !== 'Points';
            })->map(function ($product) {
                return [
                    'id' => $product->id,
                    'price' => $product->price,
                    'name' => $product->name,
                    'product_type' => $product->product_type->value,
                    'service_type' => $product->getTranslation('type', 'en'),
                    'description' => $product->description ?? null,
                    'icon' => asset('images/price/' . $product->id.'-points.svg'),
                ];
            })->sortBy('price')->values();
            $lastInvoices = Invoice::where('user_id', auth()->id())->latest()->take(3)->get();
            $firm = auth()->user()->firm;
            $firmData = [
                'aplications' => [
                    'yes' => $totalYes,
                    'no' => $totalNo,
                    'maybe' => $totalMaybe,
                    'new' => $totalNew,
                ],
                'recruits' => [
                    'active' => $activeRecruits,
                    'no' => $noRecruits,
                ],
                'lastInvoices' => $lastInvoices,
                'certificate' => [
                    'currentLevel' => $firm->premium_certificate_level,
                    'collectedPoints' => $firm->points,
                    'levelPoints' => config('premium.points_required'),
                    'levelNames' => collect(config('premium.level_names'))->mapWithKeys(function ($translationKey, $level) {
                        return [$level => __($translationKey)];
                    })->all(),
                ]
            ];
        }

        $notifications = $user->notifications()->latest()->take(10)->get();

        $adminData = [];
        if ($user->hasRole('admin')) {
            $firmStats = $getPeriodStats(Firm::class);
            $offerStats = $getPeriodStats(Project::class);
            $appStats = $getPeriodStats(Aplication::class);
            $foundationStats = $getPeriodStats(Foundation::class);
            $salesStats = $getPeriodStats(Invoice::class, 7, 'amount');

            // Dodatkowe zdarzenia/aktywności (przykładowe)
            $recentActivities = collect();

            // Ostatnie firmy
            Firm::latest()->take(2)->get()->each(function($f) use ($recentActivities) {
                $recentActivities->push([
                    'icon' => 'F',
                    'title' => 'Nowa firma: ' . $f->name,
                    'subtitle' => $f->created_at->diffForHumans(),
                ]);
            });

            // Ostatnie oferty
            Project::latest()->take(2)->get()->each(function($p) use ($recentActivities) {
                $recentActivities->push([
                    'icon' => 'P',
                    'title' => 'Nowa oferta: ' . ($p->position['name'] ?? 'Bez nazwy'),
                    'subtitle' => $p->created_at->diffForHumans(),
                ]);
            });

            $adminData = [
                'countQuestions' => $countQuestions,
                'countBanners' => $countBanners,
                'countArticles' => $countArticles,
                'stats' => [
                    'newCompanies' => [
                        'value' => $firmStats['total'],
                        'diff' => $firmStats['diff'],
                        'trend' => $firmStats['trend'],
                    ],
                    'newOffers' => [
                        'value' => $offerStats['total'],
                        'diff' => $offerStats['diff'],
                        'trend' => $offerStats['trend'],
                    ],
                    'newApplications' => [
                        'value' => $appStats['total'],
                        'diff' => $appStats['diff'],
                        'trend' => $appStats['trend'],
                    ],
                    'newFoundations' => [
                        'value' => $foundationStats['total'],
                        'diff' => $foundationStats['diff'],
                        'trend' => $foundationStats['trend'],
                    ],
                    'sales' => [
                        'value' => $salesStats['total'],
                        'diff' => $salesStats['diff'],
                        'trend' => $salesStats['trend'],
                    ],
                ],
                'alerts' => [],
                'queue' => [],
                'events' => $recentActivities->toArray(),
            ];

            if ($countQuestions > 0) {
                $adminData['alerts'][] = [
                    'level' => 'warning',
                    'text' => 'Masz ' . $countQuestions . ' pytań oczekujących na akceptację.',
                ];
            }
            if ($countBanners > 0) {
                $adminData['alerts'][] = [
                    'level' => 'warning',
                    'text' => 'Masz ' . $countBanners . ' banerów oczekujących na akceptację.',
                ];
            }
            if ($countArticles > 0) {
                $adminData['alerts'][] = [
                    'level' => 'warning',
                    'text' => 'Masz ' . $countArticles . ' artykułów oczekujących na akceptację.',
                ];
            }
        }

        return inertia()->render('Dashboard',[
            'chartRecruit' => $user->hasRole('recruit') ? $recruitData : NULL,
            'chartFirm' => $user->hasRole('firm') ? $firmData : NULL,
            'adminData' => $user->hasRole('admin') ? $adminData : NULL,
            'lastAplications'=>$lastAplications,
            'countQuestions'=>$countQuestions,
            'countBanners'=>$countBanners,
            'countArticles'=>$countArticles,
            'otherAplications' => $otherAplications,
            'notifications' => $notifications,
            'packages' => $packages,
            'additionalServices' => $additionalServices,
            'recruitsCount' => $recruits->count(),
            'projectsCount' => $projectsCount,
            'aplicationCount' => $aplicationCount,
            'viewCount' => $viewCount,
        ]);
    }

}
