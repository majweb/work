<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use App\Models\TemporaryFile;
use App\Models\User;
use App\Services\DictionaryService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Storage;

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

        // Domyślnie pokazujemy te, które wymagają akceptacji (active_admin = 0) i nasze banery Work4you
        if (request('all') !== 'true') {
            $query->where(fn ($q) => $q->where('active_admin', false)->orWhereNull('user_id'));
        }

        $query->when(request()->has(['field', 'direction']), function ($q) {
            $q->orderBy(request('field'), request('direction'));
        }, function ($q) {
            $q->latest('id');
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

    /**
     * Formularz baneru Work4you - dodawany przez admina, bez firmy i bez pakietu.
     */
    public function create(DictionaryService $dictionaryService)
    {
        Gate::authorize('admin', User::class);

        return inertia()->render('Admin/Banners-Accept/Form', [
            'banner' => null,
            'countries' => $dictionaryService->getCountries(app()->getLocale()),
        ]);
    }

    public function store(Request $request)
    {
        Gate::authorize('admin', User::class);

        $validated = $this->validateOwnBanner($request);

        $banner = Banner::create([
            'user_id' => null,
            'url' => $validated['url'],
            'lang' => $validated['lang'],
            'active' => $validated['active'] ?? true,
            'active_admin' => true,
        ]);

        if (! $this->attachPhoto($banner, $validated['photo'][0])) {
            $banner->delete();

            return back()->withErrors(['photo' => 'Nie znaleziono przesłanej grafiki - dodaj ją ponownie.']);
        }

        session()->flash('flash.banner', 'Baner Work4you został dodany');
        session()->flash('flash.bannerStyle', 'success');

        return redirect()->route('admin.banners-accepts.index');
    }

    public function edit(Banner $banner, DictionaryService $dictionaryService)
    {
        Gate::authorize('admin', User::class);
        abort_unless($banner->isOwn(), 404);

        return inertia()->render('Admin/Banners-Accept/Form', [
            'banner' => $banner->load('media'),
            'countries' => $dictionaryService->getCountries(app()->getLocale()),
        ]);
    }

    public function update(Request $request, Banner $banner)
    {
        Gate::authorize('admin', User::class);
        abort_unless($banner->isOwn(), 404);

        $validated = $this->validateOwnBanner($request);

        $banner->update([
            'url' => $validated['url'],
            'lang' => $validated['lang'],
            'active' => $validated['active'] ?? true,
        ]);

        if (! $this->attachPhoto($banner, $validated['photo'][0])) {
            return back()->withErrors(['photo' => 'Nie znaleziono przesłanej grafiki - dodaj ją ponownie.']);
        }

        session()->flash('flash.banner', 'Baner Work4you został zapisany');
        session()->flash('flash.bannerStyle', 'success');

        return redirect()->route('admin.banners-accepts.index');
    }

    private function validateOwnBanner(Request $request): array
    {
        return $request->validate([
            'lang' => ['required', 'array', 'min:1'],
            'url' => ['required', 'string', 'url'],
            'photo' => ['required', 'array', 'min:1'],
            'active' => ['boolean'],
        ], [], [
            'lang' => 'rynki',
            'url' => 'link',
            'photo' => 'grafika',
        ]);
    }

    /**
     * Grafika z tymczasowego uploadu (folder) - istniejąca grafika ({source: URL}) zostaje bez zmian.
     */
    private function attachPhoto(Banner $banner, mixed $photo): bool
    {
        if (is_array($photo)) {
            return $banner->hasMedia('banners_images');
        }

        $temporaryFile = is_string($photo) ? TemporaryFile::where('folder', $photo)->first() : null;
        $filePath = $temporaryFile ? 'temps/'.$photo.'/'.$temporaryFile->filename : null;

        if (! $filePath || ! Storage::disk('public')->exists($filePath)) {
            return false;
        }

        $banner->clearMediaCollection('banners_images');
        $banner->addMediaFromDisk($filePath, 'public')
            ->usingName($temporaryFile->filename)
            ->usingFileName($temporaryFile->filename)
            ->toMediaCollection('banners_images');

        Storage::disk('public')->deleteDirectory('temps/'.$photo);
        $temporaryFile->delete();

        return true;
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
