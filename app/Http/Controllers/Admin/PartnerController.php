<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\PartnerRequest;
use App\Models\Partner;
use App\Models\TemporaryFile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use function Termwind\render;

class PartnerController extends Controller
{
    public function index(Request $request)
    {
        $partners = Partner::orderBy('id', 'desc')
            ->paginate(20)
            ->through(fn ($p) => [
                'id'    => $p->id,
                'name'  => $p->name,
                'link'  => $p->link,
                'active'=> $p->active,
                'logo'  => $p->getFirstMediaUrl('partner_logo'),
            ]);

        return inertia('Admin/Partners/Index', [
            'partners' => $partners,
        ]);
    }

    public function create()
    {
        return inertia('Admin/Partners/Create');
    }

    public function store(PartnerRequest $request)
    {
        $partner = Partner::create($request->validated());
        if ($request->photo) {
            $folders = $request->photo;
            $temporaryFiles = TemporaryFile::whereIn('folder', $folders)->get();
            foreach ($temporaryFiles as $file) {
                // Dodaj plik do kolekcji mediów kandydata
                $partner->addMedia(storage_path('app/public/temps/' . $file->folder . '/' . $file->filename))->toMediaCollection('partner_logo');
//                // Usuń tymczasowy folder i wpis
                Storage::disk('public')->deleteDirectory('temps/' . $file->folder);
                $file->delete();
            }
        }

        return redirect()->route('admin.partners.index')->with('success', 'Partner added successfully');
    }

    public function edit(Partner $partner)
    {
        return inertia('Admin/Partners/Edit', [
            'partner' => [
                'id'     => $partner->id,
                'name'   => $partner->name,
                'link'   => $partner->link,
                'active' => $partner->active,
                'photo'   => $partner->getFirstMediaUrl('partner_logo'),
            ],
        ]);
    }

    public function update(PartnerRequest $request, Partner $partner)
    {
        $partner->update($request->validated());
        // Obsługa zdjęć przesłanych tymczasowo
        if ($request->photo) {
            $photo = $request->photo[0];
            // Jeśli zdjęcie to URL, pomijamy aktualizację mediów
            if (!(isset($photo['source']) && str_starts_with($photo['source'], 'http'))) {
                // Czyścimy istniejącą kolekcję mediów
                $partner->clearMediaCollection('partner_logo');

                $folders = $request->photo; // Tablica folderów tymczasowych
                $temporaryFiles = TemporaryFile::whereIn('folder', $folders)->get();

                foreach ($temporaryFiles as $file) {
                    // Dodaj plik do kolekcji mediów partnera
                    $partner->addMedia(storage_path('app/public/temps/' . $file->folder . '/' . $file->filename))
                        ->toMediaCollection('partner_logo');

                    // Usuń tymczasowy folder i wpis w DB
                    Storage::disk('public')->deleteDirectory('temps/' . $file->folder);
                    $file->delete();
                }
            }
        }
        session()->flash('flash.banner', __('translate.dataUpdated'));
        session()->flash('flash.bannerStyle', 'success');
        return redirect()->back();
    }

    public function destroy(Partner $partner)
    {
        $partner->delete();
        $partner->clearMediaCollection('partner_logo');

        return redirect()->route('admin.partners.index')->with('success', 'Partner deleted');
    }

    public function toggle(Partner $partner)
    {
        $partner->active = !$partner->active;
        $partner->save();

        return back()->with('success', 'Status updated');
    }
}
