<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\DetailProject;
use App\Services\DictionaryService;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Inertia\Response;

class DetailProjectController extends Controller
{
    public function index(Request $request): Response
    {
        $locale = app()->getLocale();
        $query = DetailProject::query();

        if ($request->search) {
            $search = mb_strtolower($request->search, 'UTF-8');
            $query->where(function ($q) use ($search, $locale) {
                $q->whereRaw("LOWER(JSON_EXTRACT(name, '$.\"{$locale}\"')) like ?", ["%{$search}%"])
                    ->orWhereRaw("LOWER(JSON_EXTRACT(name, '$.pl')) like ?", ["%{$search}%"]);
            });
        }

        $detailProjects = $query->with('categories')
            ->orderBy('id', 'desc')
            ->paginate(50)
            ->withQueryString();

        $unassignedCount = DetailProject::whereDoesntHave('categories')->count();

        return Inertia::render('Admin/DetailProjects/Index', [
            'detailProjects' => $detailProjects,
            'filters' => $request->only(['search']),
            'unassignedCount' => $unassignedCount,
        ]);
    }

    public function create(): Response
    {
        $categories = Category::whereDoesntHave('children')->get()->map(fn ($c) => [
            'id' => $c->id,
            'title' => $c->getTranslations('title'),
        ]);

        return Inertia::render('Admin/DetailProjects/Create', [
            'categories' => $categories,
            'languages' => config('langsShorts'),
        ]);
    }

    public function store(Request $request, DictionaryService $dictionaryService): RedirectResponse
    {
        $languages = config('langsShorts');
        $rules = [
            'categories' => 'required|array',
            'categories.*' => 'exists:categories,id',
        ];
        $messages = [
            'categories.required' => 'Wybierz przynajmniej jedną kategorię.',
        ];

        foreach ($languages as $lang) {
            $rules["name.{$lang}"] = 'required|string|max:255';
            $messages["name.{$lang}.required"] = 'Nazwa w języku '.strtoupper($lang).' jest wymagana.';
        }

        $validated = $request->validate($rules, $messages);

        $detailProject = DetailProject::create([
            'name' => $validated['name'],
        ]);

        $detailProject->categories()->sync($request->categories);

        $dictionaryService->clearCategories();

        return redirect()->route('admin.detail-projects.index')->with('flash.banner', 'Obowiązek został dodany.');
    }

    public function edit(DetailProject $detailProject): Response
    {
        $categories = Category::whereDoesntHave('children')->get()->map(fn ($c) => [
            'id' => $c->id,
            'title' => $c->getTranslations('title'),
        ]);

        return Inertia::render('Admin/DetailProjects/Edit', [
            'detailProject' => [
                'id' => $detailProject->id,
                'name' => $detailProject->getTranslations('name'),
                'category_ids' => $detailProject->categories->pluck('id')->toArray(),
            ],
            'categories' => $categories,
            'languages' => config('langsShorts'),
        ]);
    }

    public function update(Request $request, DetailProject $detailProject, DictionaryService $dictionaryService): RedirectResponse
    {
        $languages = config('langsShorts');
        $rules = [
            'categories' => 'required|array',
            'categories.*' => 'exists:categories,id',
        ];
        $messages = [
            'categories.required' => 'Wybierz przynajmniej jedną kategorię.',
        ];

        foreach ($languages as $lang) {
            $rules["name.{$lang}"] = 'required|string|max:255';
            $messages["name.{$lang}.required"] = 'Nazwa w języku '.strtoupper($lang).' jest wymagana.';
        }

        $validated = $request->validate($rules, $messages);

        $detailProject->update([
            'name' => $validated['name'],
        ]);

        $detailProject->categories()->sync($request->categories);

        $dictionaryService->clearCategories();

        return redirect()->route('admin.detail-projects.index')->with('flash.banner', 'Obowiązek został zaktualizowany.');
    }

    public function destroy(DetailProject $detailProject, DictionaryService $dictionaryService): RedirectResponse
    {
        $detailProject->delete();

        $dictionaryService->clearCategories();

        return back()->with('flash.banner', 'Obowiązek został usunięty.');
    }

    public function cleanupUnassigned(DictionaryService $dictionaryService): RedirectResponse
    {
        $count = DetailProject::whereDoesntHave('categories')->count();

        if ($count > 0) {
            DetailProject::whereDoesntHave('categories')->delete();
            $dictionaryService->clearCategories();

            return back()->with('flash.banner', "Usunięto {$count} nieprzypisanych obowiązków.");
        }

        return back()->with('flash.banner', 'Nie znaleziono nieprzypisanych obowiązków do usunięcia.');
    }
}
