<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Services\DictionaryService;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Inertia\Response;

class IndustryController extends Controller
{
    public function index(Request $request): Response
    {
        $locale = app()->getLocale();

        $query = Category::query();

        if ($request->search) {
            $search = $request->search;
            $query->where(function ($q) use ($search, $locale) {
                $q->where('title->' . $locale, 'like', "%{$search}%")
                    ->orWhere('title->pl', 'like', "%{$search}%")
                    ->orWhere('name', 'like', "%{$search}%");
            });
        }

        $industries = $query->whereNull('parent_id')
            ->with(['children' => function ($query) {
                $query->orderBy('id', 'desc')->with('children');
            }])
            ->orderBy('id', 'desc')
            ->paginate(50)
            ->withQueryString();

        return Inertia::render('Admin/Industries/Index', [
            'industries' => $industries,
            'filters' => $request->only(['search']),
            'languages' => config('langsShorts'),
        ]);
    }

    public function create(): Response
    {
        $mainIndustries = Category::whereNull('parent_id')->get()->map(function ($category) {
            return [
                'id' => $category->id,
                'title' => $category->getTranslations('title'),
            ];
        });

        return Inertia::render('Admin/Industries/Create', [
            'mainIndustries' => $mainIndustries,
            'languages' => config('langsShorts'),
        ]);
    }

    public function store(Request $request, DictionaryService $dictionaryService): RedirectResponse
    {
        $languages = config('langsShorts');
        $titleRules = [];
        $titleMessages = [];
        foreach ($languages as $lang) {
            $langUpper = strtoupper($lang);
            $titleRules["title.{$lang}"] = 'required|string|max:255';
            $titleMessages["title.{$lang}.required"] = "Pole nazwa ({$langUpper}) jest wymagane.";
        }

        $validated = $request->validate(array_merge([
            'title' => 'required|array',
            'name' => 'required|string|max:255|unique:categories,name',
            'parent_id' => 'nullable|exists:categories,id',
        ], $titleRules), array_merge([
            'name.required' => 'Pole klucz systemowy jest wymagane.',
            'name.unique' => 'Ten klucz systemowy jest już zajęty.',
            'parent_id.exists' => 'Wybrana kategoria nadrzędna nie istnieje.',
        ], $titleMessages));

        Category::create([
            'name' => $validated['name'],
            'title' => $validated['title'],
            'parent_id' => $validated['parent_id'],
        ]);

        $dictionaryService->clearCategories();

        return redirect()->route('admin.industries.index')->with('flash.banner', 'Branża/podbranża została dodana.');
    }

    public function edit(int $id): Response
    {
        $industry = Category::findOrFail($id);

        $mainIndustries = Category::whereNull('parent_id')
            ->where('id', '!=', $industry->id)
            ->get()->map(function ($cat) {
                return [
                    'id' => $cat->id,
                    'title' => $cat->getTranslations('title'),
                ];
            });

        return Inertia::render('Admin/Industries/Edit', [
            'industry' => [
                'id' => $industry->id,
                'name' => $industry->name,
                'title' => $industry->getTranslations('title'),
                'parent_id' => $industry->parent_id,
            ],
            'mainIndustries' => $mainIndustries,
            'languages' => config('langsShorts'),
        ]);
    }

    public function update(Request $request, int $id, DictionaryService $dictionaryService): RedirectResponse
    {
        $industry = Category::findOrFail($id);
        $languages = config('langsShorts');
        $titleRules = [];
        $titleMessages = [];
        foreach ($languages as $lang) {
            $langUpper = strtoupper($lang);
            $titleRules["title.{$lang}"] = 'required|string|max:255';
            $titleMessages["title.{$lang}.required"] = "Pole nazwa ({$langUpper}) jest wymagane.";
        }

        $validated = $request->validate(array_merge([
            'title' => 'required|array',
            'name' => "required|string|max:255|unique:categories,name,{$industry->id}",
            'parent_id' => 'nullable|exists:categories,id',
        ], $titleRules), array_merge([
            'name.required' => 'Pole klucz systemowy jest wymagane.',
            'name.unique' => 'Ten klucz systemowy jest już zajęty.',
            'parent_id.exists' => 'Wybrana kategoria nadrzędna nie istnieje.',
        ], $titleMessages));

        $industry->update([
            'name' => $validated['name'],
            'title' => $validated['title'],
            'parent_id' => $validated['parent_id'],
        ]);

        $dictionaryService->clearCategories();

        return redirect()->route('admin.industries.index')->with('flash.banner', 'Branża/podbranża została zaktualizowana.');
    }

    public function destroy(int $id, DictionaryService $dictionaryService): RedirectResponse
    {
        $industry = Category::findOrFail($id);
        $industry->delete();

        $dictionaryService->clearCategories();

        return back()->with('flash.banner', 'Branża/podbranża została usunięta.');
    }
}
