<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class BannerAcceptController extends Controller
{
    public function index()
    {
        Gate::authorize('admin', User::class);

        request()->validate([
            'direction' => ['in:asc,desc'],
            'field' => ['in:id,user_id,created_at']
        ]);

        $query = Banner::query();

        // Domyślnie pokazujemy te, które wymagają akceptacji (active_admin = 0)
        if (request('all') !== 'true') {
            $query->where('active_admin', false);
        }

        $query->when(request()->has(['field', 'direction']), function ($q) {
            $q->orderBy(request('field'), request('direction'));
        }, function ($q) {
            $q->latest();
        });

        return inertia()->render('Admin/Banners-Accept/Index', [
            'banners' => $query->with(['user:id,name,profile_photo_path'])->paginate(10)->withQueryString(),
            'filters' => request()->only(['field', 'direction', 'all'])
        ]);
    }

    public function show(Banner $banner)
    {
        Gate::authorize('admin', User::class);
        $banner->load(['user:id,name,profile_photo_path']);
        return inertia()->render('Admin/Banners-Accept/Show', [
            'banner' => $banner->load('media')
        ]);
    }

    public function destroy(Banner $banner)
    {
        Gate::authorize('admin', User::class);
        $banner->delete();
        session()->flash('flash.banner', __('Baner został usunięty'));
        session()->flash('flash.bannerStyle', 'success');
        return redirect()->route('admin.banners-accepts.index');
    }

    public function accept(Banner $banner)
    {
        Gate::authorize('admin', User::class);

        if ($banner->active_admin) {
            $banner->update(['active_admin' => false]);
            session()->flash('flash.banner', __('translate.bannerRejected') ?? 'Baner został odrzucony');
        } else {
            $banner->update(['active_admin' => true]);
            session()->flash('flash.banner', __('translate.bannerAccepted') ?? 'Baner został zaakceptowany');
        }

        session()->flash('flash.bannerStyle', 'success');
        return redirect()->back();
    }
}
