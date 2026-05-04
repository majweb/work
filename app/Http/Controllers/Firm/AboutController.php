<?php

namespace App\Http\Controllers\Firm;

use App\Http\Controllers\Controller;
use App\Http\Requests\FirmAboutRequest;
use App\Models\TemporaryFile;
use App\Services\CrmService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class AboutController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(FirmAboutRequest $request, \App\Services\PointService $pointService)
    {
        $firm = auth()->user()->firm;

        if ($request->hasFile('video')) {

            // Koszt utworzenia kandydata
            $cost = config('getPoints.AddVideoToProfile', 1000);

            // Sprawdź czy firma ma wystarczającą liczbę punktów
            $firm = auth()->user()->firm;

            if ($firm->points < $cost) {
                session()->flash('flash.banner', __('translate.noPoints'));
                session()->flash('flash.bannerStyle', 'danger');
                return back();
            }

            $file = $request->video;
            $folder = 'videos';
            if (!file_exists(storage_path('app/public/' . $folder))) {
                mkdir(storage_path('app/public/' . $folder), 0777, true);
            }
            if(Auth::user()->firm && Auth::user()->firm->video && Storage::disk('public')->exists(Auth::user()->firm->video)){
                Storage::disk('public')->delete(Auth::user()->firm->video);
            }
            $extension = $file->extension();
            $path = $file->storeAs($folder, Str::slug(Auth::user()->name).'-'.time().'-video.'.$extension,'public');

            $pointService->decrement($firm->user, $cost, 'AddVideoToProfile');

        }

        // ------------------- ZDJĘCIA -------------------
        if ($request->has('photo') && is_array($request->photo)) {
            foreach ($request->photo as $photo) {
                // Jeśli przesłany URL → nie ruszamy
                if (isset($photo['source']) && str_starts_with($photo['source'], 'http')) {
                    continue;
                }

                // Nowe zdjęcie z tymczasowego folderu
                $folderName = $photo; // Filepond przesyła sam folder
                $temporaryFile = TemporaryFile::where('folder', $folderName)->first();

                if (!$temporaryFile) continue;

                $filePath = 'temps/' . $folderName . '/' . $temporaryFile->filename;

                if (!Storage::disk('public')->exists($filePath)) continue;

                // 🔑 Dodaj każde zdjęcie do kolekcji
                $firm->addMediaFromDisk($filePath, 'public')
                    ->usingName(basename($filePath))
                    ->usingFileName(basename($filePath))
                    ->toMediaCollection('firms_images');

                // Usuń tymczasowy folder i rekord
                Storage::disk('public')->deleteDirectory('temps/' . $folderName);
                $temporaryFile->delete();
            }
        }
        $updateData = $request->aboutData();

        if ($request->hasFile('video') && isset($path)) {
            $updateData['video'] = $path;
        }

        Auth::user()->firm->update($updateData);

        if (config('services.crm.url') && config('services.crm.key')) {
            try {
                app(CrmService::class)->syncUser(Auth::user(), $updateData);
            } catch (\Exception $e) {
                \Log::error('CRM Sync Error: ' . $e->getMessage());
            }
        }

        session()->flash('flash.banner', __('translate.dataUpdated'));
        session()->flash('flash.bannerStyle', 'success');
        return redirect()->back();
    }
}
