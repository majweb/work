<?php

namespace App\Http\Controllers\Global;

use App\Http\Controllers\Controller;
use App\Models\Aplication;
use App\Models\ExternalResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Storage;

class ExternalResponseController extends Controller
{
    // GET /external/response
    public function showResponseView(Request $request)
    {
        $email = $request->query('email');
        $token = $request->query('token');

        // Aplikacje bierzemy wyłącznie z zaproszenia powiązanego z tokenem - nie z adresu URL.
        // Stare zaproszenia (bez zapisanej listy aplikacji) traktujemy jak nieprawidłowy link.
        $externalResponse = ExternalResponse::findValid($email, $token);

        if (! $externalResponse || empty($externalResponse->aplication_ids)) {
            session()->flash('flash.banner', __('translate.badLinkExternalResponse'));
            session()->flash('flash.bannerStyle', 'danger');
            return redirect()->route('aplications.index');
        }

        // Pobranie aplikacji
        $apps = Aplication::with(['project', 'cvAudio', 'cvVideo', 'candidate.media'])
            ->whereIn('id', $externalResponse->aplication_ids)
//            ->whereNull('status')
            ->get()
            ->map(function ($app) {
                $app->first_cv_url = null;

                if ($app->candidate && $app->candidate->media) {
                    $cv = $app->candidate->media
                        ->where('collection_name', 'candidate_cv_files')
                        ->first();
                    $app->first_cv_url = $cv ? $cv->getUrl() : null;
                }
                if ($app->media) {
                    $cv = $app->media
                        ->where('collection_name', 'aplications_cvFile')
                        ->first();
                    $app->upload_cv_url = $cv ? $cv->getUrl() : null;
                }
                return $app;
            });

        return inertia()->render('External/Response', [
            'email' => $email,
            'token' => $token,
            'getApps' => $apps,
        ]);
    }

    // POST /external/response
    public function storeAnswer(Request $request)
    {
        $data = $request->validate([
            'application' => 'required|integer',
            'decision' => 'required|in:yes,no',
            'email' => 'required|string',
            'token' => 'required|string',
        ]);

        $externalResponse = ExternalResponse::findValid($data['email'], $data['token']);
        abort_unless($externalResponse && $externalResponse->grantsAccessTo((int) $data['application']), 403);

        $app = Aplication::where('id', $data['application'])->first();

        if ($app) {
            $app->update([
                'status' => $data['decision'],
                'status_changed_at' => now(),
            ]);

            // jeśli decyzja to "no" -> ustaw dodatkową kolumnę
            if ($data['decision'] === 'no') {
                $app->update([
                    'whenDeleted' => now(),
                ]);
            }
            return redirect()->back()
                ->with('flash.banner', __('translate.thanksForResponse', [
                    'decision' => $data['decision'] == 'yes' ? __('translate.yes') : __('translate.no'),
                    'application'    => $data['application'],
                ]))
                ->with('flash.bannerStyle', 'success');
        } else {
            return redirect()->back()
                ->with('flash.banner', __('translate.thanksForResponseCheck'))
                ->with('flash.bannerStyle', 'danger');

        }
    }

    // GET /download/cv-audio/{aplication}
    public function downloadRecording(Request $request, Aplication $aplication)
    {
        $user = $request->user();

        $allowed = $user
            ? $user->hasRole('admin') || (int) $aplication->user_id === $user->id || Gate::allows('aplication-recruiter', $aplication)
            : false;

        // Firma zewnętrzna (bez konta) - dostęp tylko przez zaproszenie obejmujące tę aplikację
        if (! $allowed) {
            $externalResponse = ExternalResponse::findValid($request->query('email'), $request->query('token'));
            $allowed = $externalResponse && $externalResponse->grantsAccessTo($aplication->id);
        }

        abort_unless($allowed, 403);

        $recording = $aplication->cvAudio ?? $aplication->cvVideo;
        abort_unless($recording, 404);

        return Storage::download($recording->file_path);
    }
}
