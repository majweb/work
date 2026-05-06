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

        return Inertia::render('Admin/Settings/Banners', [
            'banners' => AdminBanner::latest()->get()->map(function ($banner) {
                return [
                    'id' => $banner->id,
                    'title' => $banner->title,
                    'is_active' => $banner->is_active,
                    'image_url' => $banner->getFirstMediaUrl('images'),
                    'preview_url' => $banner->getFirstMediaUrl('images', 'preview'),
                ];
            }),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Gate::authorize('admin', User::class);

        $request->validate([
            'title' => 'nullable|string|max:255',
            'image' => 'required|image|max:5120',
            'is_active' => 'boolean',
        ], [], [
            'title' => 'tytuł',
            'image' => 'grafika',
            'is_active' => 'aktywny',
        ]);

        $banner = AdminBanner::create($request->only('title', 'is_active'));

        if ($request->hasFile('image')) {
            $banner->addMediaFromRequest('image')->toMediaCollection('images');
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

        $request->validate([
            'title' => 'nullable|string|max:255',
            'image' => 'nullable|image|max:5120',
            'is_active' => 'boolean',
        ], [], [
            'title' => 'tytuł',
            'image' => 'grafika',
            'is_active' => 'aktywny',
        ]);

        $adminBanner->update($request->only('title', 'is_active'));

        if ($request->hasFile('image')) {
            $adminBanner->clearMediaCollection('images');
            $adminBanner->addMediaFromRequest('image')->toMediaCollection('images');
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
