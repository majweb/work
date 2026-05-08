<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AdminBanner;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Inertia\Inertia;
use Inertia\Response;

class AdminBannerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): Response
    {
        Gate::authorize('admin', User::class);

        $langs = config('langsShorts');

        return Inertia::render('Admin/Settings/Banners', [
            'banners' => AdminBanner::latest()->get()->map(function ($banner) use ($langs) {
                $images = [];
                foreach ($langs as $lang) {
                    $images[$lang] = [
                        'url' => $banner->getFirstMediaUrl('images_' . $lang),
                        'preview' => $banner->getFirstMediaUrl('images_' . $lang, 'preview'),
                    ];
                }

                return [
                    'id' => $banner->id,
                    'title' => $banner->title,
                    'is_active' => $banner->is_active,
                    'images' => $images,
                ];
            }),
            'langs' => $langs,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Gate::authorize('admin', User::class);

        $langs = config('langsShorts');
        $rules = [
            'title' => 'nullable|string|max:255',
            'is_active' => 'boolean',
        ];

        $attributes = [
            'title' => 'tytuł',
            'is_active' => 'aktywny',
        ];

        foreach ($langs as $lang) {
            $rules["images.$lang"] = 'required|image|max:5120';
            $attributes["images.$lang"] = "grafika ($lang)";
        }

        $request->validate($rules, [], $attributes);

        $banner = AdminBanner::create($request->only('title', 'is_active'));

        foreach ($langs as $lang) {
            if ($request->hasFile("images.$lang")) {
                $banner->addMediaFromRequest("images.$lang")->toMediaCollection('images_' . $lang);
            }
        }

        if ($banner->is_active) {
            $this->deactivateOthers($banner->id);
        }

        session()->flash('flash.banner', __('translate.dataUpdated'));
        session()->flash('flash.bannerStyle', 'success');

        return redirect()->back();
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, AdminBanner $adminBanner)
    {
        Gate::authorize('admin', User::class);

        $langs = config('langsShorts');
        $rules = [
            'title' => 'nullable|string|max:255',
            'is_active' => 'boolean',
        ];

        $attributes = [
            'title' => 'tytuł',
            'is_active' => 'aktywny',
        ];

        foreach ($langs as $lang) {
            $hasImage = $adminBanner->hasMedia('images_' . $lang);
            $rules["images.$lang"] = [
                $hasImage ? 'nullable' : 'required',
                'image',
                'max:5120',
            ];
            $attributes["images.$lang"] = "grafika ($lang)";
        }

        $request->validate($rules, [], $attributes);

        $adminBanner->update($request->only('title', 'is_active'));

        foreach ($langs as $lang) {
            if ($request->hasFile("images.$lang")) {
                $adminBanner->clearMediaCollection('images_' . $lang);
                $adminBanner->addMediaFromRequest("images.$lang")->toMediaCollection('images_' . $lang);
            }
        }

        if ($adminBanner->is_active) {
            $this->deactivateOthers($adminBanner->id);
        }

        session()->flash('flash.banner', __('translate.dataUpdated'));
        session()->flash('flash.bannerStyle', 'success');

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(AdminBanner $adminBanner)
    {
        Gate::authorize('admin', User::class);

        $adminBanner->delete();

        session()->flash('flash.banner', __('translate.dataUpdated'));
        session()->flash('flash.bannerStyle', 'success');

        return redirect()->back();
    }

    /**
     * Toggle the active status of a banner.
     */
    public function toggle(AdminBanner $adminBanner)
    {
        Gate::authorize('admin', User::class);

        $adminBanner->update([
            'is_active' => ! $adminBanner->is_active,
        ]);

        if ($adminBanner->is_active) {
            $this->deactivateOthers($adminBanner->id);
        }

        session()->flash('flash.banner', __('translate.dataUpdated'));
        session()->flash('flash.bannerStyle', 'success');

        return redirect()->back();
    }

    /**
     * Deactivate all other banners.
     */
    private function deactivateOthers(int $currentId): void
    {
        AdminBanner::where('id', '!=', $currentId)->update(['is_active' => false]);
    }
}
