<?php

namespace App\Http\Controllers;

use App\Mail\ExternalFirmInvitationMail;
use App\Models\Candidate;
use App\Models\ExternalResponse;
use App\Models\TemporaryFile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class CandidateCvController extends Controller
{
    /**
     * Upload tymczasowego pliku CV
     */
    public function uploadCv(Request $request)
    {
        // Walidacja
        $validator = Validator::make($request->all(), [
            'file' => 'required|file|mimes:pdf,doc,docx|max:10240',
            'candidate_id' => 'required|exists:candidates,id'
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        // Zapisz tymczasowy plik
        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $filename = $file->getClientOriginalName();
            $folder = uniqid() . '-' . now()->timestamp;
            $file->storeAs('temp_uploads/' . $folder, $filename,'local');

            TemporaryFile::create([
                'folder' => $folder,
                'filename' => $filename
            ]);

            return response()->json([
                'folder' => $folder,
                'filename' => $filename
            ]);
        }

        return response()->json(['error' => 'Nie znaleziono pliku'], 400);
    }

    /**
     * Zapisz CV kandydata
     */
    public function saveCv(Request $request, Candidate $candidate)
    {
        $validator = Validator::make($request->all(), [
            'cvFile' => 'required|array'
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator);
        }

        // Wyciągnij tylko stringi (foldery z tmp upload)
        $folders = collect($request->cvFile)
            ->filter(fn($file) => is_string($file))
            ->values()
            ->all();

        if (count($folders)) {
            $temporaryFiles = TemporaryFile::whereIn('folder', $folders)->get();

            foreach ($temporaryFiles as $file) {
                // Dodaj plik do kolekcji mediów kandydata
                $candidate->addMedia(storage_path('app/public/temps/' . $file->folder . '/' . $file->filename))
                    ->toMediaCollection('candidate_cv_files');

                // Usuń tymczasowy folder i wpis
                Storage::disk('public')->deleteDirectory('temps/' . $file->folder);
                $file->delete();
            }
        }
        session()->flash('flash.banner', __('translate.cvUploadedSuccessfully'));
        session()->flash('flash.bannerStyle', 'success');
        return redirect()->route('candidates.show',$candidate);

    }

    /**
     * Usuń plik CV kandydata
     */
    public function deleteCv(Candidate $candidate)
    {
        if ($candidate) {
            $candidate->clearMediaCollection('candidate_cv_files');
        }

    }

    public function sendExternal(Request $request)
    {
        $externals = $request->externalFirms; // lista firm do powiadomienia
        $aplications = $request->apps;

        $firm = auth()->user()->firm;
        $cost = config('getPoints.SendToExternalFirm', 1);

        // Ile maksymalnie firm możemy obsłużyć
        $maxCount = floor($firm->points / $cost);

        if ($maxCount <= 0) {
            session()->flash('flash.banner', __('translate.noPoints'));
            session()->flash('flash.bannerStyle', 'danger');
            return redirect()->back();
        }

        //ierze Bmy tylko tyle firm, na ile mamy punkty
        $externalsToSend = array_slice($externals, 0, $maxCount);
        $lang = app()->getLocale();

        foreach ($externalsToSend as $ext) {
            // dla każdej firmy:
            $token = Str::uuid(); // generacja unikalnego tokenu

            // zapis w DB
            ExternalResponse::create([
                'email' => $ext['email'],
                'token' => $token,
            ]);
            Mail::to($ext['email'])->locale($lang)->send(new ExternalFirmInvitationMail($ext['email'],$token, $aplications));
            // Odejmujemy punkty
            $firm->decrement('points', $cost);
        }

        session()->flash('flash.banner', __('translate.sendExternalSuccess'));
        session()->flash('flash.bannerStyle', 'success');

        return back()->with('sender', [
            'id' => now()->timestamp // albo uniqid()
        ]);
    }

    public function sendExternalRecruit(Request $request)
    {

        $externals = $request->externalFirms; // lista firm do powiadomienia
        $aplications = $request->apps;

        $firm = auth()->user()->user->firm;

        $cost = config('getPoints.SendToExternalFirm', 1);

        // Ile maksymalnie firm możemy obsłużyć
        $maxCount = floor($firm->points / $cost);

        if ($maxCount <= 0) {
            session()->flash('flash.banner', __('translate.noPoints'));
            session()->flash('flash.bannerStyle', 'danger');
            return redirect()->back();
        }

        //ierze Bmy tylko tyle firm, na ile mamy punkty
        $externalsToSend = array_slice($externals, 0, $maxCount);
        $lang = app()->getLocale();

        foreach ($externalsToSend as $ext) {
            // dla każdej firmy:
            $token = Str::uuid(); // generacja unikalnego tokenu

            // zapis w DB
            ExternalResponse::create([
                'email' => $ext['email'],
                'token' => $token,
            ]);
            Mail::to($ext['email'])->locale($lang)->send(new ExternalFirmInvitationMail($ext['email'],$token, $aplications));
            // Odejmujemy punkty
            $firm->decrement('points', $cost);
        }

        return back()->with('sender', [
            'id' => now()->timestamp // albo uniqid()
        ]);
    }
}
