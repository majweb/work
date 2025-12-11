<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\PartnerRequest;
use App\Http\Requests\StoreFoundationRequest;
use App\Http\Resources\MultiselectResource;
use App\Http\Resources\MultiselectWithoutDetailResource;
use App\Models\Category;
use App\Models\Foundation;
use App\Models\FoundationCategory;
use App\Models\Partner;
use App\Models\TemporaryFile;
use App\Services\GeocodeService;
use App\Services\Helper;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Storage;

class FoundationController extends Controller
{
    public function index()
    {
            $foundations = Foundation::withCount('orders')
                ->with('media')
                ->paginate(20)
                ->through(fn ($p) => [
                    'id'    => $p->id,
                    'name'  => $p->name,
                    'link'  => $p->www,
                    'active'=> $p->active,
                    'orders_count'=> $p->orders_count,
                    'logo'  => $p->getFirstMediaUrl('foundation_logo'),
            ]);

        return inertia('Admin/Foundations/Index',
        [
            'foundations'=>$foundations
        ]);
    }

    public function create()
    {
        $categories = Cache::rememberForever('categoriesFoundations', function() {
            return MultiselectWithoutDetailResource::collection(FoundationCategory::whereNull('parent_id')->get());
        });

        $countries = (new Helper())->makeCountriesToSelect();

        return inertia('Admin/Foundations/Create',
        [
            'categories'=>$categories,
            'countries'=>$countries
        ]);
    }

    public function toggle(Foundation $foundation)
    {
        $foundation->active = !$foundation->active;
        $foundation->save();

        return back()->with('success', 'Status updated');
    }

    public function getChildsCategory($parent)
    {
        return MultiselectResource::collection(FoundationCategory::where('parent_id',$parent)->get());
    }


    public function store(StoreFoundationRequest $request)
    {
        // Walidacja
        $data = $request->validated();
        /*
        |--------------------------------------------------------------------------
        | 3. Zapis fundacji do bazy
        |--------------------------------------------------------------------------
        */

        $foundation = Foundation::create([
            'name' => $data['name'],
            'www' => $data['www'] ?? null,
            'facebook_url' => $data['facebook_url'] ?? null,
            'instagram_url' => $data['instagram_url'] ?? null,
            'linkedin_url' => $data['linkedin_url'] ?? null,
            'x_url' => $data['x_url'] ?? null,
            'tiktok_url' => $data['tiktok_url'] ?? null,
            'phone' => $data['phone'] ?? null,
            'email' => $data['email'] ?? null,
            'description' => $data['description'] ?? null,

            'address_street' => $data['address_street'] ?? null,
            'address_city' => $data['address_city'] ?? null,
            'address_country' => $data['address_country'] ?? null,
            'country' => $data['country'] ?? null,

            'category_id' => $data['category_id'] ?? null,
            'subcategory_id' => $data['subcategory_id'] ?? null,

            'year_of_foundation' => $data['year_of_foundation'] ?? null,
            'worker_count' => $data['worker_count'] ?? null,
            'benefit_organization' => $data['benefit_organization'] ?? false,

            'latitude' => $data['latitude'],
            'longitude' => $data['longitude'],

            'iban' => $data['iban'],   // max długość IBAN
            'swift' => $data['swift'],  // max długość SWIFT/BIC
            'krs' => $data['krs'],    // max długość KRS

            'active' => $data['active'] ?? true,
        ]);


        /*
        |--------------------------------------------------------------------------
        | 4. Upload LOGO (jeśli dodano)
        |--------------------------------------------------------------------------
        */

        if ($request->photo) {
            $folders = $request->photo;
            $temporaryFiles = TemporaryFile::whereIn('folder', $folders)->get();
            foreach ($temporaryFiles as $file) {
                // Dodaj plik do kolekcji mediów kandydata
                $foundation->addMedia(storage_path('app/public/temps/' . $file->folder . '/' . $file->filename))->toMediaCollection('foundation_logo');
//                // Usuń tymczasowy folder i wpis
                Storage::disk('public')->deleteDirectory('temps/' . $file->folder);
                $file->delete();
            }
        }
        if ($request->banner) {
            $folders = $request->banner;
            $temporaryFiles = TemporaryFile::whereIn('folder', $folders)->get();
            foreach ($temporaryFiles as $file) {
                // Dodaj plik do kolekcji mediów kandydata
                $foundation->addMedia(storage_path('app/public/temps/' . $file->folder . '/' . $file->filename))->toMediaCollection('foundation_banner');
//                // Usuń tymczasowy folder i wpis
                Storage::disk('public')->deleteDirectory('temps/' . $file->folder);
                $file->delete();
            }
        }
        session()->flash('flash.banner', 'Fundacja została dodana pomyślnie.');
        session()->flash('flash.bannerStyle', 'success');
        return redirect()->route('admin.foundations.index');
    }


    public function destroy(Foundation $foundation)
    {
        if($foundation->orders->count() <= 0)
        {
            $foundation->delete();
            $foundation->clearMediaCollection('foundation_logo');
            session()->flash('flash.banner', 'Fundacja usunięto');
            session()->flash('flash.bannerStyle', 'success');
            return redirect()->route('admin.foundations.index');
        } else {
            session()->flash('flash.banner', 'Istnieje zamówienie z przypisaną fundacją.');
            session()->flash('flash.bannerStyle', 'danger');
            return redirect()->route('admin.foundations.index');
        }
    }

    public function edit(Foundation $foundation)
    {
        $categories = Cache::rememberForever('categoriesFoundations', function() {
            return MultiselectWithoutDetailResource::collection(FoundationCategory::whereNull('parent_id')->get());
        });
        $countries = (new Helper())->makeCountriesToSelect();

        return inertia('Admin/Foundations/Edit', [
            'categories' => $categories,
            'countries' => $countries,
            'foundation' => [
                'id' => $foundation->id,
                'name' => $foundation->name,
                'www' => $foundation->www,
                'facebook_url' => $foundation->facebook_url,
                'instagram_url' => $foundation->instagram_url,
                'linkedin_url' => $foundation->linkedin_url,
                'x_url' => $foundation->x_url,
                'tiktok_url' => $foundation->tiktok_url,
                'phone' => $foundation->phone,
                'email' => $foundation->email,
                'description' => $foundation->description,

                'address_street'  => $foundation->address_street,
                'address_city'    => $foundation->address_city,
                'address_country' => $foundation->address_country,
                'country'         => $foundation->country,

                'latitude'  => $foundation->latitude,
                'longitude' => $foundation->longitude,

                // 👇 TO JEST KLUCZ
                'category_id' => $foundation->category_id,

                'subcategory_id' => $foundation->subcategory_id,

                'active' => (bool) $foundation->active,

                'iban'  => $foundation->iban,
                'swift' => $foundation->swift,
                'krs'   => $foundation->krs,

                'year_of_foundation' => $foundation->year_of_foundation,
                'worker_count'       => $foundation->worker_count,
                'benefit_organization' => (bool) $foundation->benefit_organization,
                'orders_count'=> $foundation->orders_count,
                'photo'  => $foundation->getFirstMediaUrl('foundation_logo'),
                'banner'  => $foundation->getFirstMediaUrl('foundation_banner'),
            ],
        ]);
    }


    public function update(StoreFoundationRequest $request, Foundation $foundation)
    {
        $foundation->update($request->validated());
        // Obsługa zdjęć przesłanych tymczasowo
        if ($request->photo) {
            $photo = $request->photo[0];
            // Jeśli zdjęcie to URL, pomijamy aktualizację mediów
            if (!(isset($photo['source']) && str_starts_with($photo['source'], 'http'))) {
                // Czyścimy istniejącą kolekcję mediów
                $foundation->clearMediaCollection('foundation_logo');

                $folders = $request->photo; // Tablica folderów tymczasowych
                $temporaryFiles = TemporaryFile::whereIn('folder', $folders)->get();

                foreach ($temporaryFiles as $file) {
                    // Dodaj plik do kolekcji mediów partnera
                    $foundation->addMedia(storage_path('app/public/temps/' . $file->folder . '/' . $file->filename))
                        ->toMediaCollection('foundation_logo');

                    // Usuń tymczasowy folder i wpis w DB
                    Storage::disk('public')->deleteDirectory('temps/' . $file->folder);
                    $file->delete();
                }
            }
        }
        if ($request->banner) {
            $banner = $request->banner[0];
            // Jeśli zdjęcie to URL, pomijamy aktualizację mediów
            if (!(isset($banner['source']) && str_starts_with($banner['source'], 'http'))) {
                // Czyścimy istniejącą kolekcję mediów
                $foundation->clearMediaCollection('foundation_banner');

                $folders = $request->banner; // Tablica folderów tymczasowych
                $temporaryFiles = TemporaryFile::whereIn('folder', $folders)->get();

                foreach ($temporaryFiles as $file) {
                    // Dodaj plik do kolekcji mediów partnera
                    $foundation->addMedia(storage_path('app/public/temps/' . $file->folder . '/' . $file->filename))
                        ->toMediaCollection('foundation_banner');

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
}
