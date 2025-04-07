<?php

namespace App\Http\Controllers;

use App\Events\AplicationMakeEvent;
use App\Http\Requests\AplicationRequest;
use App\Http\Resources\FrontArticleResource;
use App\Http\Resources\MultiselectResource;
use App\Http\Resources\MultiselectWithoutDetailResource;
use App\Models\Agreement;
use App\Models\Aplication;
use App\Models\Article;
use App\Models\Category;
use App\Models\CvClassic;
use App\Models\LangLevel;
use App\Models\LevelEducation;
use App\Models\Project;
use App\Models\TemporaryFile;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Inertia\Inertia;
use Mews\Captcha\Facades\Captcha;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\View;
use Spatie\Browsershot\Browsershot;


class FrontController extends Controller
{
    public function articles()
    {

        $articles = Article::active()->lang()->paginate(10)->withQueryString();
        return inertia()->render('Front/Articles', [
            'articles' => $articles,
        ]);
    }

    public function projects()
    {
        $countryCode = getLocalBrowserLang();
        $projects = Project::orderByRaw("JSON_SEARCH(country, 'one', ?, NULL, '$[*].countryCode') IS NULL ASC", [$countryCode])->paginate(20)->withQueryString();

        return inertia()->render('Front/Projects', [
            'projects' => $projects,
        ]);
    }

    public function SingleArticle(Article $article)
    {
        $article->load('user.firm');
        return inertia()->render('Front/SingleArticle', [
            'article' => new FrontArticleResource($article),
        ]);
    }

    public function SingleProject(Project $project)
    {
        return inertia()->render('Front/SingleProject', [
            'project' => $project,
        ]);
    }

    public function applyView(Project $project)
    {
        if(auth()->check() && !auth()->user()->hasRole('worker')){
            session()->flash('flash.banner', __('translate.applyViewBlocked'));
            session()->flash('flash.bannerStyle', 'danger');
            return to_route('front.projects.single',$project);
        }

        if(auth()->check() && auth()->user()->hasRole('worker')){
            if (CvClassic::where('worker_id', auth()->id())->where('project_id', $project->id)->exists()) {
                $project->load([
                    'cvClassics' => function ($query) use ($project) {
                        $query->where('worker_id', auth()->id())
                            ->where('project_id', $project->id);
                    },'cvClassics.media' => function ($query) {
                        $query->where('collection_name', 'aplications_cvClassic_photo');
                    },
                ]);
            }
        }

        $agreements = Agreement::where('type','Apply without register')->get(['description','id']);
        $levelEducations=  Cache::rememberForever('levelEducations', function() {
            return MultiselectWithoutDetailResource::collection(LevelEducation::get());
        });
        $langLevels=  Cache::rememberForever('langLevels', function() {
            return MultiselectWithoutDetailResource::collection(LangLevel::get());
        });
        return inertia()->render('Front/Apply', [
            'project' => $project,
            'agreements' => $agreements,
            'levelEducations' => $levelEducations,
            'langLevels' => $langLevels,
        ]);
    }

    public function nextStep(AplicationRequest $request, Project $project)
    {
        return to_route('front.projects.applyView',$project);
    }
    public function makeAplication(AplicationRequest $request, Project $project)
    {
//        dd($request->aplicationData(),'kkkk',$request->aplicationData()['cvStandardType']);

        $aplication = Aplication::create([
            'user_id'=>$project->user_id,
            'recruiter_id'=>$project->recruiter_id,
            'project_id'=>$project->id,
            'name'=>$request->aplicationData()['name'],
            'surname'=>$request->aplicationData()['surname'],
            'phone'=>$request->aplicationData()['phone'],
            'email'=>$request->aplicationData()['email'],
            'aplication_user_id'=>auth()->check() && auth()->user()->hasRole('worker') ? auth()->user()->id : NULL,
        ]);
        if(is_array($request->aplicationData()['files']) && count($request->aplicationData()['files']) && $aplication){
            $temporaryFiles = TemporaryFile::whereIn('folder',$request->aplicationData()['files'])->get();
            if($temporaryFiles->count()){
                foreach ($temporaryFiles as $file){
                    $aplication->addMedia(storage_path('app/public/temps/'.$file->folder.'/'.$file->filename))
                        ->toMediaCollection('aplications_media');
                    rmdir(storage_path('app/public/temps/'.$file->folder));
                    $file->delete();
                }
            }
        }

        if(isset($request->aplicationData()['cvStandardType']) && $request->aplicationData()['cvStandardType'] == 1){
            //CV file
            if(is_array($request->aplicationData()['cvFile']) && count($request->aplicationData()['cvFile']) && $aplication){
                $temporaryFiles = TemporaryFile::whereIn('folder',$request->aplicationData()['cvFile'])->get();
                if($temporaryFiles->count()){
                    foreach ($temporaryFiles as $file){
                        $aplication->addMedia(storage_path('app/public/temps/'.$file->folder.'/'.$file->filename))
                            ->toMediaCollection('aplications_cvFile');
                        rmdir(storage_path('app/public/temps/'.$file->folder));
                        $file->delete();
                    }
                }
            }

        }
        if(isset($request->aplicationData()['cvStandardType']) && $request->aplicationData()['cvStandardType'] == 2){
            //CV generator
            $cvClassic = CvClassic::firstOrNew(
                ['worker_id' => auth()->id(), 'project_id' => $project->id]
            );

            $cvClassic->fill([
                'aplication_id'=>$aplication->id,
                'birthday'=>$request->aplicationData()['birthday'],
                'city'=>$request->aplicationData()['city'],
                'postal'=>$request->aplicationData()['postal'],
                'cvStandardType'=>$request->aplicationData()['cvStandardType'],
                'experiences'=>$request->aplicationData()['experiences'],
                'educations'=>$request->aplicationData()['educations'],
                'courses'=>$request->aplicationData()['courses'],
                'langs'=>$request->aplicationData()['langs'],
                'skills'=>$request->aplicationData()['skills'],
            ]);
            $cvClassic->save();
                if(isset($request->aplicationData()['photo']) && is_array($request->aplicationData()['photo']) && count($request->aplicationData()['photo']) && $cvClassic){
                $array = array_filter($request->aplicationData()['photo'], fn($item) => !(is_array($item) && array_key_exists('source', $item)));
                $array = array_values($array);
                $temporaryFiles = TemporaryFile::whereIn('folder',$array)->get();
                if($temporaryFiles->count()){
                    foreach ($temporaryFiles as $file){
                        $cvClassic->addMedia(storage_path('app/public/temps/'.$file->folder.'/'.$file->filename))
                            ->toMediaCollection('aplications_cvClassic_photo');
                        rmdir(storage_path('app/public/temps/'.$file->folder));
                        $file->delete();
                    }
                }
            }
        }
        session()->forget('captcha_text');

        AplicationMakeEvent::dispatch($aplication,auth()->user());
        session()->flash('flash.banner', __('translate.makeAplicationNotRegister'));
        session()->flash('flash.bannerStyle', 'success');
        return to_route('front.projects.single',$project);
    }

    public function generateCaptcha()
    {
        $captchaText = Str::random(6);
        session(['captcha_text' => $captchaText]);
        return response()->json(['captchaText' => $captchaText]);
    }

    public function getChildsCategoryWitoutDetail()
    {
        return Cache::rememberForever('categoriesWithoutDetail', function() {
            return MultiselectWithoutDetailResource::collection(Category::whereNotNull('parent_id')->get());
        });
    }

    public function generatePdf($templateId)
    {
//        dd(request()->all());
//        $viewName = "cvTemplates.{$templateId}";
//        if (!View::exists($viewName)) {
//            abort(404, "Szablon PDF nie istnieje.");
//        }
//        $pdf = Pdf::loadView($viewName, ['data' => request()->all()]);
//
//
//
//        $fileName = 'cv_' . time() . '.pdf';
//        $filePath = 'pdf/' . $fileName;
//        Storage::disk('public')->put($filePath, $pdf->output());
//        return response()->json([
//            'message' => 'Plik PDF został zapisany!',
//            'url' => Storage::url($filePath) // Generuje publiczny URL do pobrania pliku
//        ]);
        $viewName = "cvTemplates.{$templateId}";
        if (!View::exists($viewName)) {
            abort(404, "Szablon PDF nie istnieje.");
        }

        $pdf = Pdf::loadView($viewName, ['data' => request()->all()]);

        $fileName = 'cv_' . time() . '.pdf';
        $filePath = 'pdfGenerateTemporary/' . $fileName;
        Storage::disk('public')->put($filePath, $pdf->output());
        $url = Storage::url($filePath); // Generuje URL publiczny

        return response()->json([
            'message' => 'Plik PDF został zapisany!',
            'url' => $url, // Zwróć URL do pliku
            'deleteUrl' => $filePath, // Zwróć URL do usunięcia pliku
        ]);

    }

    public function deletePdf()
    {
        $filePath = request()->get('file');
        if($filePath){
            if (Storage::disk('public')->exists($filePath)) {
                Storage::disk('public')->delete($filePath);
            }

            return response()->json(['message' => 'Plik został usunięty.']);
        }
    }
}
