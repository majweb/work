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
        $languages = config('langsShorts');
        $images = [];

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
            ],
            'languages' => $languages,
        ]);
    }

    public function update(Request $request, Page $page): RedirectResponse
    {
        $languages = config('langsShorts');
        $rules = [
            'title' => 'required|array',
            'description' => 'required|array',
            'keywords' => 'required|array',
            'image_file' => 'nullable|array',
        ];

        foreach ($languages as $l) {
            $rules["title.{$l}"] = 'required|string|max:255';
            $rules["description.{$l}"] = 'required|string';
            $rules["keywords.{$l}"] = 'required|string';

            if ($page->id !== 9 && $page->id !== 8 && $page->id !== 16) {
                $rules["image_file.{$l}"] = [
                    $page->getTranslation('image', $l, false) ? 'nullable' : 'required',
                    'image',
                    'max:5120',
                ];
            }
        }

        if ($page->id === 8 || $page->id === 9 || $page->id === 16) {
            unset($rules['title']);
            foreach ($languages as $l) {
                unset($rules["title.{$l}"]);
            }
        }

        if ($page->id === 9 || $page->id === 16) {
            unset($rules['description'], $rules['keywords']);
            foreach ($languages as $l) {
                unset($rules["description.{$l}"], $rules["keywords.{$l}"]);
            }
        }

        $validated = $request->validate($rules);

        $imageData = $page->getTranslations('image') ?? [];

        if ($page->id !== 9 && $page->id !== 8 && $page->id !== 16 && $request->hasFile('image_file')) {
            foreach ($request->file('image_file') as $lang => $file) {
                if ($file) {
                    $oldPath = $page->getTranslation('image', $lang, false);
                    if ($oldPath && $oldPath !== 'pages/front_fb.jpg' && Storage::disk('public')->exists($oldPath)) {
                        Storage::disk('public')->delete($oldPath);
                    }

                    $extension = $file->getClientOriginalExtension();
                    $filename = "{$lang}.{$extension}";
                    $path = $file->storeAs("pages/{$page->id}", $filename, 'public');
                    $imageData[$lang] = $path;
                }
            }
        }

        $page->update([
            'title' => ($page->id === 8 || $page->id === 9 || $page->id === 16) ? $page->getTranslations('title') : $validated['title'],
            'description' => ($page->id === 9 || $page->id === 16) ? $page->getTranslations('description') : $validated['description'],
            'keywords' => ($page->id === 9 || $page->id === 16) ? $page->getTranslations('keywords') : $validated['keywords'],
            'image' => $imageData,
        ]);

        return redirect()->route('admin.cms.index')->with('flash.banner', 'Strona została zaktualizowana.');
    }
}
