<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Project;
use App\Models\SearchStatistic;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Inertia\Inertia;
use Inertia\Response;

class SearchStatisticsController extends Controller
{
    public function index(Request $request): Response
    {
        $query = SearchStatistic::query();

        $filters = $request->only(['date_from', 'date_to', 'category', 'position']);

        if ($request->filled('date_from')) {
            $query->whereDate('created_at', '>=', $request->date_from);
        }

        if ($request->filled('date_to')) {
            $query->whereDate('created_at', '<=', $request->date_to);
        }

        if ($request->filled('category')) {
            $query->where('category', $request->category);
        }

        if ($request->filled('position')) {
            $query->where('position', $request->position);
        }

        $statistics = (clone $query)
            ->select('country', 'city', 'category', 'category_sub', 'profession', 'position')
            ->selectRaw('count(*) as search_count')
            ->selectRaw('max(created_at) as last_searched_at')
            ->groupBy('country', 'city', 'category', 'category_sub', 'profession', 'position')
            ->orderByDesc('last_searched_at')
            ->paginate(20)
            ->withQueryString();

        $totalActiveProjects = Project::query()->active()->count();

        $statistics->getCollection()->transform(function ($stat) use ($totalActiveProjects) {
            $stat->active_projects_count = $this->countActiveProjects($stat);
            $stat->percentage_of_total = $totalActiveProjects > 0
                ? round(($stat->active_projects_count / $totalActiveProjects) * 100, 2)
                : 0;

            return $stat;
        });

        // Dane do wykresów (uwzględniając filtry)
        $topCountries = (clone $query)
            ->select('country')
            ->selectRaw('count(*) as count')
            ->whereNotNull('country')
            ->groupBy('country')
            ->orderByDesc('count')
            ->limit(5)
            ->get();

        $topCategories = (clone $query)
            ->select('category')
            ->selectRaw('count(*) as count')
            ->whereNotNull('category')
            ->groupBy('category')
            ->orderByDesc('count')
            ->limit(5)
            ->get();

        // Dane do wykresu trendu
        $trendQuery = (clone $query);
        if (! $request->filled('date_from')) {
            $trendQuery->whereDate('created_at', '>=', now()->subDays(30));
        }

        $trends = $trendQuery
            ->select(DB::raw('DATE(created_at) as date'), DB::raw('count(*) as count'))
            ->groupBy('date')
            ->orderBy('date')
            ->get();

        // Pobieramy dostępne branże i stanowiska ze statystyk (żeby nie szukać w całej bazie kategorii)
        $availableCategories = SearchStatistic::whereNotNull('category')->where('category', '!=', '')->distinct()->pluck('category')->sort()->values();
        $availablePositions = SearchStatistic::whereNotNull('position')->where('position', '!=', '')->distinct()->pluck('position')->sort()->values();

        return Inertia::render('Admin/Settings/SearchStatistics', [
            'statistics' => $statistics,
            'totalActiveProjects' => $totalActiveProjects,
            'filters' => $filters,
            'availableCategories' => $availableCategories,
            'availablePositions' => $availablePositions,
            'charts' => [
                'countries' => [
                    'labels' => $topCountries->pluck('country')->toArray(),
                    'series' => $topCountries->pluck('count')->toArray(),
                ],
                'categories' => [
                    'labels' => $topCategories->pluck('category')->toArray(),
                    'series' => $topCategories->pluck('count')->toArray(),
                ],
                'trends' => [
                    'labels' => $trends->pluck('date')->toArray(),
                    'series' => [
                        [
                            'name' => 'Wyszukiwania',
                            'data' => $trends->pluck('count')->toArray(),
                        ],
                    ],
                ],
            ],
        ]);
    }

    protected function countActiveProjects($stat): int
    {
        $query = Project::query()->active();

        if ($stat->country) {
            // W FrontController filtrowanie po kraju:
            // $query->whereJsonContains('countryWork', ['value' => (int) request('country')]);
            // Ale my mamy nazwę. Więc musimy znaleźć ID kraju po nazwie.
            $country = \App\Models\Country::where('name->pl', $stat->country)->first();
            if ($country) {
                $query->whereJsonContains('countryWork', ['value' => $country->id]);
            } else {
                return 0;
            }
        }

        if ($stat->city) {
            $query->where('cityWork', 'like', '%'.$stat->city.'%');
        }

        if ($stat->category) {
            $category = \App\Models\Category::where('title->pl', $stat->category)->first();
            if ($category) {
                $query->whereJsonContains('category', ['value' => $category->id]);
            } else {
                return 0;
            }
        }

        if ($stat->category_sub) {
            $subCategory = \App\Models\Category::where('title->pl', $stat->category_sub)->first();
            if ($subCategory) {
                $query->whereJsonContains('categorySub', ['value' => $subCategory->id]);
            } else {
                return 0;
            }
        }

        if ($stat->profession) {
            $profession = \App\Models\Category::where('title->pl', $stat->profession)->first();
            if ($profession) {
                $query->whereJsonContains('profession', ['value' => $profession->id]);
            } else {
                return 0;
            }
        }

        // position też jest w SearchStatisticService pobierane jako getCategoryName
        if ($stat->position) {
            $position = \App\Models\Category::where('title->pl', $stat->position)->first();
            if ($position) {
                $query->whereJsonContains('position', ['value' => $position->id]);
            } else {
                return 0;
            }
        }

        return $query->count();
    }
}
