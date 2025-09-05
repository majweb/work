<?php

namespace App\Http\Controllers\Global;

use App\Http\Controllers\Controller;
use App\Models\Aplication;
use App\Models\ExternalResponse;
use Illuminate\Http\Request;

class ExternalResponseController extends Controller
{
    // GET /external/response
    public function showResponseView(Request $request)
    {
        $email = $request->query('email');
        $token = $request->query('token');
        $aplications = $request->query('aplications'); // np. "1,2,3"

        // Sprawdzenie, czy istnieje rekord z tym tokenem i emailem
        $responseExists = ExternalResponse::where([
            'email' => $email,
            'token' => $token
        ])->exists();

        if (!$responseExists) {
            session()->flash('flash.banner', __('translate.badLinkExternalResponse'));
            session()->flash('flash.bannerStyle', 'danger');
            return redirect()->route('aplications.index');
        }

        // Pobranie aplikacji
        $appsIds = explode(',', $aplications);
        $apps = Aplication::with(['project', 'cvAudio', 'cvVideo', 'candidate.media'])
            ->whereIn('id', $appsIds)
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
            'application' => 'required|exists:aplications,id',
            'decision' => 'required|in:yes,no',
        ]);
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
}
