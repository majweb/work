<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Page;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Inertia\Inertia;
use Inertia\Response;

class PageController extends Controller
{
    public function index(Request $request): Response
    {
        $pages = Page::query()
            ->when($request->search, function ($query, $search) {
                $query->where('title', 'like', "%{$search}%");
            })
            ->orderBy('id', 'asc')
            ->paginate(20)
            ->withQueryString();

        return Inertia::render('Admin/CMS/Index', [
            'pages' => $pages,
            'filters' => $request->only(['search']),
        ]);
    }

    public function edit(Page $page): Response
    {
        $contentLanguages = config('langsShorts');
        $seoLanguages = \App\Models\Country::pluck('countryCode')->unique()->toArray();
        $images = [];
        $languages = config('langsShorts');
        foreach ($languages as $l) {
            $imageValue = $page->getTranslation('image', $l, false);
            if ($imageValue && ! str_starts_with($imageValue, 'http')) {
                $images[$l] = Storage::url($imageValue);
            } else {
                $images[$l] = $imageValue;
            }
        }
        return Inertia::render('Admin/CMS/Edit', [
            'page' => [
                'id' => $page->id,
                'title' => $page->getTranslations('title'),
                'description' => $page->getTranslations('description'),
                'keywords' => $page->getTranslations('keywords'),
                'image' => $page->getTranslations('image'),
                'imageUrl' => $images,
                'content' => $page->getTranslations('content'),
            ],
            'seoLanguages' => $seoLanguages,
            'contentLanguages' => $contentLanguages,
        ]);
    }

    public function update(Request $request, Page $page): RedirectResponse
    {
        $seoLanguages = \App\Models\Country::pluck('countryCode')->unique()->toArray();
        $contentLanguages = config('langsShorts');

        $rules = [
            'title' => 'required|array',
            'description' => 'required|array',
            'keywords' => 'required|array',
            'image_file' => 'nullable|array',
        ];

        foreach ($seoLanguages as $l) {
            $rules["title.{$l}"] = 'required|string|max:255';
            $rules["description.{$l}"] = 'required|string';
            $rules["keywords.{$l}"] = 'required|string';

            if (!in_array($page->id, [9, 8, 16])) {
                $rules["image_file.{$l}"] = [
                    $page->getTranslation('image', $l, false) ? 'nullable' : 'required',
                    'image',
                    'max:5120',
                ];
            }
        }

        if (in_array($page->id, [2, 3])) {
            $rules['content'] = 'required|array';
            foreach ($contentLanguages as $l) {
                $rules["content.{$l}"] = 'required|string';
            }
        }

        if (in_array($page->id, [8, 9, 16])) {
            unset($rules['title']);
            foreach ($seoLanguages as $l) {
                unset($rules["title.{$l}"]);
            }
        }

        if (in_array($page->id, [9, 16])) {
            unset($rules['description'], $rules['keywords']);
            foreach ($seoLanguages as $l) {
                unset($rules["description.{$l}"], $rules["keywords.{$l}"]);
            }
        }

        $attributes = [];
        foreach ($seoLanguages as $l) {
            $attributes["title.{$l}"] = "Tytuł ({$l})";
            $attributes["description.{$l}"] = "Opis ({$l})";
            $attributes["keywords.{$l}"] = "Słowa kluczowe ({$l})";
            $attributes["image_file.{$l}"] = "Obrazek ({$l})";
        }

        if (in_array($page->id, [2, 3])) {
            foreach ($contentLanguages as $l) {
                $attributes["content.{$l}"] = "Treść strony ({$l})";
            }
        }

        $request->validate($rules, [], $attributes);

        // Zapisywanie pól SEO (Tytuł, Opis, Słowa kluczowe) dla wszystkich języków z tabeli countries
        if (!in_array($page->id, [8, 9, 16])) {
            foreach ($seoLanguages as $l) {
                $page->setTranslation('title', $l, $request->input("title.{$l}"));
            }
        }

        if (!in_array($page->id, [9, 16])) {
            foreach ($seoLanguages as $l) {
                $page->setTranslation('description', $l, $request->input("description.{$l}"));
                $page->setTranslation('keywords', $l, $request->input("keywords.{$l}"));
            }
        }

        // Zapisywanie obrazków dla wszystkich języków z tabeli countries
        if (!in_array($page->id, [9, 8, 16]) && $request->hasFile('image_file')) {
            foreach ($request->file('image_file') as $lang => $file) {
                if ($file) {
                    $oldPath = $page->getTranslation('image', $lang, false);
                    if ($oldPath && ! str_starts_with($oldPath, 'http') && $oldPath !== 'pages/front_fb.jpg' && Storage::disk('public')->exists($oldPath)) {
                        Storage::disk('public')->delete($oldPath);
                    }

                    $extension = $file->getClientOriginalExtension();
                    $filename = "{$lang}_".time().".{$extension}";
                    $path = $file->storeAs("pages/{$page->id}", $filename, 'public');
                    $page->setTranslation('image', $lang, $path);
                }
            }
        }

        // Zapisywanie treści (content) dla stron 2 i 3 (langsShorts)
        if (in_array($page->id, [2, 3])) {
            foreach ($contentLanguages as $l) {
                $page->setTranslation('content', $l, $request->input("content.{$l}"));
            }
        }

        $page->save();

        return redirect()->route('admin.cms.index')->with('flash.banner', 'Strona została zaktualizowana.');
    }
}
