<?php

namespace App\Http\Controllers\Worker;

use App\Http\Controllers\Controller;
use App\Http\Requests\WorkerDetailRequest;
use App\Http\Requests\WorkerUpdateCv;
use App\Http\Resources\MultiselectWithoutDetailResource;
use App\Models\Aplication;
use App\Models\Category;
use App\Models\CvClassic;
use App\Models\LangLevel;
use App\Models\LevelEducation;
use App\Services\DictionaryService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use function Termwind\render;

class WorkerController extends Controller
{
    public function aplications()
    {

        $applications = Aplication::with('project.user')->where('aplication_user_id', auth()->id())
            ->latest()
            ->get()
            ->map(function ($app) {

                // Mapowanie statusów
                switch ($app->status) {
                    case 'yes':
                        $status = 'yes';
                        $label = __('translate.yes');
                        $color = 'blue';
                        $percent = 100;
                        break;

                    case 'no':
                        $status = 'no';
                        $label = __('translate.no');
                        $color = 'red';
                        $percent = 100;
                        break;

                    case 'maybe':
                        $status = 'maybe';
                        $label = __('translate.maybe');
                        $color = 'navy';
                        $percent = 50;
                        break;

                    default: // NULL
                        $status = 'sent';
                        $label = __('translate.sent');
                        $color = 'gray';
                        $percent = 100;
                        break;
                }


                return [
                    'id' => $app->id,
                    'title' => $app->project->position['allTranslations']['title'][app()->getLocale()]
                        ?? $app->project->profession['allTranslations']['title'][app()->getLocale()]
                        ?? $app->project->title[app()->getLocale()]
                        ?? $app->project->title
                        ?? __('translate.projectWithoutTitle'),
                    'company' => $app->project->user->name ?? '—',
                    'department' => $app->project->category['allTranslations']['title'][app()->getLocale()] ?? '—',

                    'date' => optional($app->resolvedDate())->format('d.m.Y'),

                    'status' => $status,
                    'statusLabel' => $label,
                    'statusColor' => $color,
                    'statusPercent' => $percent,
                ];
            });

        // Statystyki pod wykres
        $stats = [
            'yes' => $applications->where('status', 'yes')->count(),
            'no' => $applications->where('status', 'no')->count(),
            'sent' => $applications->where('status', 'sent')->count(),
            'maybe' => $applications->where('status', 'maybe')->count(),
            'total' => $applications->count(),
        ];

        return inertia()->render('Worker/Aplications', [
            'applications' => $applications,
            'stats' => $stats,
        ]);
    }

    public function myCv(DictionaryService $dictionaryService)
    {
        $groupedCvs = auth()->user()
            ->myCvs()
            ->with(['project'])
            ->orderByDesc('created_at')
            ->get()
            ->groupBy(fn ($cv) => $cv->project->category_id);

        $positions =  Category::getCachedWithoutPositionsWithoutDetail();

        return inertia()->render('Worker/MyCv',
        [
            'myCvs' => $groupedCvs->map(fn ($cvs) => $cvs->first())->values(),
            'positions' => $positions,
            'levelEducations' => $dictionaryService->getLevelEducations(),
            'langLevels' => $dictionaryService->getLangLevels(),
        ]);
    }

    public function myCvUpdateCv(WorkerUpdateCv $request, CvClassic $selectedCv)
    {
        $selectedCv->fill([
            'experiences'=>$request->cvData()['experiences'],
            'educations'=>$request->cvData()['educations'],
            'courses'=>$request->cvData()['courses'],
            'langs'=>$request->cvData()['langs'],
            'skills'=>$request->cvData()['skills'],
        ]);
        $selectedCv->save();

        session()->flash('flash.banner', __('translate.updateCv'));
        session()->flash('flash.bannerStyle', 'success');
        return to_route('worker.myCv');
    }

    public function singleAplication(Aplication $aplication)
    {
        $aplication->load([
            'project',
        ]);

        // STATUS (mapowanie jak w liście aplikacji)
        switch ($aplication->status) {
            case 'yes':
                $status = 'yes';
                break;

            case 'no':
                $status = 'no';
                break;

            case 'maybe':
                $status = 'maybe';
                break;

            default:
                $status = 'sent';
                break;
        }

        $video = $aplication->project
            ->video()
            ->where('user_id', auth()->id())
            ->whereNotNull('aplication_id')
            ->where('aplication_id',$aplication->id)
            ->first();

        $audio = $aplication->project
            ->audio()
            ->where('user_id', auth()->id())
            ->whereNotNull('aplication_id')
            ->where('aplication_id',$aplication->id)
            ->first();

        if ($video) {
            $applicationType = 'video';
        } elseif ($audio) {
            $applicationType = 'audio';
        } else {
            $applicationType = 'classic';
        }

        $messages = [];

// zawsze wysłano
        $messages[] = [
            'key' => 'sent',
            'message' => __('translate.Mail-sent-line'),
        ];

// reszta zależnie od statusu
        switch ($aplication->status) {
            case 'maybe':
                $messages[] = ['key' => 'maybe', 'message' => __('translate.Mail-processing-line')];
                break;
            case 'yes':
                $messages[] = ['key' => 'yes', 'message' => __('translate.Mail-accepted-line')];
                break;
            case 'no':
                $messages[] = ['key' => 'no', 'message' => __('translate.Mail-rejected-line')];
                break;
        }

        return inertia()->render('Worker/SingleAplication', [
            'application' => [
                // 🔹 PODSTAWOWE
                'id' => $aplication->id,
                'status' => $status,
                'date' => optional($aplication->resolvedDate())->format('d.m.Y'),
                'statusDates' => $aplication->statusDates(),
                'statusMessages' => $messages,
                // 🔹 HEADER
                'title' => $aplication->project->position['allTranslations']['title'][app()->getLocale()]
                    ?? $aplication->project->profession['allTranslations']['title'][app()->getLocale()]
                    ?? $aplication->project->title[app()->getLocale()]
                    ?? $aplication->project->title
                    ?? __('translate.projectWithoutTitle'),
                'company' => $aplication->project->user->name ?? '—',
                'category' => $aplication->project->category['allTranslations']['title'][app()->getLocale()] ?? '—',

                // 🔹 WYNAGRODZENIE
                'basicSalaryFrom' => $aplication->project->basicSalaryFrom,
                'basicSalaryTo' => $aplication->project->basicSalaryTo,
                'currency' => $aplication->project->currency,
                'project' => $aplication->project->id,

                // 🔹 SZCZEGÓŁY
                'workingMode' => $aplication->project->workingMode,
                'typeOfContract' => $aplication->project->typeOfContract,
                'workLoad' => $aplication->project->workLoad,
                'detailprojects' => $aplication->project->detailprojects,
                'type'=>$applicationType,

                // 🔹 LOKALIZACJA
                'location' => trim(implode(', ', array_filter([
                    $aplication->project->streetWork,
                    $aplication->project->streetWorkNumber,
                    $aplication->project->cityWork,
                    optional($aplication->project->countryWork)->name,
                ]))),
            ],
        ]);
    }
}
