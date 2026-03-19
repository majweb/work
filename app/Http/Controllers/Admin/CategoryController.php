<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Services\DictionaryService;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Inertia\Response;

class CategoryController extends Controller
{
    public function index(Request $request): Response
    {
        $locale = app()->getLocale();

        $categories = Category::doesntHave('children')
            ->with(['parent.parent.parent'])
            ->when($request->search, function ($query, $search) use ($locale) {
                $query->where(function ($q) use ($search, $locale) {
                    $q->where('title->' . $locale, 'like', "%{$search}%")
                        ->orWhere('title->pl', 'like', "%{$search}%");
                });
            })
            ->orderBy('id', 'desc')
            ->paginate(100)
            ->withQueryString();

        $categories->getCollection()->transform(function ($category) {
            $depth = 0;
            $parent = $category->parent;
            while ($parent) {
                $depth++;
                $parent = $parent->parent;
            }
            $category->depth = $depth;
            return $category;
        });

        return Inertia::render('Admin/Categories/Index', [
            'categories' => $categories,
            'filters' => $request->only(['search']),
            'languages' => config('langsShorts'),
        ]);
    }

    public function create(): Response
    {
        $allCategories = Category::with('parent', 'parent.parent', 'parent.parent.parent')->get()->map(function ($category) {
            $depth = 0;
            $parent = $category->parent;
            while ($parent) {
                $depth++;
                $parent = $parent->parent;
            }
            return [
                'id' => $category->id,
                'title' => $category->getTranslations('title'),
                'depth' => $depth,
                'parent_id' => $category->parent_id,
            ];
        });

        return Inertia::render('Admin/Categories/Create', [
            'allCategories' => $allCategories,
            'languages' => config('langsShorts'),
        ]);
    }

    public function store(Request $request, DictionaryService $dictionaryService): RedirectResponse
    {
        $languages = config('langsShorts');
        $titleRules = [];
        foreach ($languages as $lang) {
            $titleRules["title.{$lang}"] = 'required|string|max:255';
        }

        $validated = $request->validate(array_merge([
            'title' => 'required|array',
            'name' => 'required|string|max:255',
            'parent_id' => 'nullable|exists:categories,id',
        ], $titleRules), [
            'name.required' => 'Pole nazwa (slug) jest wymagane.',
            'parent_id.exists' => 'Wybrana kategoria nadrzędna nie istnieje.',
        ]);

        Category::create([
            'name' => $validated['name'],
            'title' => $validated['title'],
            'parent_id' => $validated['parent_id'],
        ]);

        $dictionaryService->clearCategories();

        return redirect()->route('admin.categories.index')->with('success', 'Kategoria została dodana.');
    }

    public function edit(Category $category): Response
    {
        $allCategories = Category::with('parent', 'parent.parent', 'parent.parent.parent')
            ->where('id', '!=', $category->id)
            ->get()->map(function ($cat) {
            $depth = 0;
            $parent = $cat->parent;
            while ($parent) {
                $depth++;
                $parent = $parent->parent;
            }
            return [
                'id' => $cat->id,
                'title' => $cat->getTranslations('title'),
                'depth' => $depth,
                'parent_id' => $cat->parent_id,
            ];
        });

        return Inertia::render('Admin/Categories/Edit', [
            'category' => [
                'id' => $category->id,
                'name' => $category->name,
                'title' => $category->getTranslations('title'),
                'parent_id' => $category->parent_id,
            ],
            'allCategories' => $allCategories,
            'languages' => config('langsShorts'),
        ]);
    }

    public function update(Request $request, Category $category, DictionaryService $dictionaryService): RedirectResponse
    {
        $languages = config('langsShorts');
        $titleRules = [];
        foreach ($languages as $lang) {
            $titleRules["title.{$lang}"] = 'required|string|max:255';
        }

        $validated = $request->validate(array_merge([
            'title' => 'required|array',
            'name' => 'required|string|max:255',
            'parent_id' => 'nullable|exists:categories,id',
        ], $titleRules));

        $category->update([
            'name' => $validated['name'],
            'title' => $validated['title'],
            'parent_id' => $validated['parent_id'],
        ]);

        $dictionaryService->clearCategories();

        return redirect()->route('admin.categories.index')->with('success', 'Kategoria została zaktualizowana.');
    }

    public function destroy(Category $category, DictionaryService $dictionaryService): RedirectResponse
    {
        $category->delete();

        $dictionaryService->clearCategories();

        return back()->with('success', 'Kategoria została usunięta.');
    }

}
