<?php

namespace App\Http\Controllers;

use App\Events\AplicationMakeEvent;
use App\Http\Requests\AplicationRequest;
use App\Http\Resources\BannerResource;
use App\Http\Resources\CategoryWithArticlesResource;
use App\Http\Resources\FrontArticleResource;
use App\Http\Resources\FrontUserResource;
use App\Http\Resources\MultiselectWithoutDetailResource;
use App\Http\Resources\NewestArticleArticlesPageResource;
use App\Models\Agreement;
use App\Models\Aplication;
use App\Models\Banner;
use App\Models\Candidate;
use App\Models\Article;
use App\Models\Category;
use App\Models\Country;
use App\Models\CvClassic;
use App\Models\LangLevel;
use App\Models\LevelEducation;
use App\Models\Project;
use App\Models\TemporaryFile;
use App\Models\User;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\View;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\DB;


class FrontController extends Controller
{
    public function articles()
    {
        // Najnowszy artykuł — zabezpieczenie przed brakiem rekordów
        $latestArticle = Article::active()
            ->with('user:id,name') // Pobieramy autora
            ->lang()
            ->latest()
            ->first();

        $newest = $latestArticle
            ? new NewestArticleArticlesPageResource($latestArticle)
            : null;

        // 3 najnowsze artykuły
        $most3Articles = NewestArticleArticlesPageResource::collection(
            Article::active()->lang()->limit(3)->get()
        );

        // Bannery
        $banners = BannerResource::collection(
            Banner::withActiveBanner()->get()
        );

        // Wszystkie unikalne kategorie z JSON
        $categories = Article::active()
            ->lang()
            ->select(
                DB::raw('DISTINCT JSON_UNQUOTE(JSON_EXTRACT(category, "$.value")) as value'),
                DB::raw('JSON_UNQUOTE(JSON_EXTRACT(category, "$.name")) as name')
            )
            ->get();

        // Grupa artykułów po kategoriach
        $recentArticles = Article::active()->lang()->latest()->get();

        $grouped = $recentArticles
            ->map(function($article, $index) {
                $article->index = $index; // dodajemy index do artykułu
                $article->category = collect($article->category ?? []);
                return $article;
            })
            ->flatMap(function($article) {
                $categories = $article->category;
                if (isset($categories['value'])) {
                    $categories = [$categories];
                }

                return collect($categories)->map(fn($cat) => [
                    'value' => $cat['value'],
                    'name' => $cat['name'],
                    'article' => $article,
                ]);
            })
            ->groupBy('value')
            ->map(fn($items) => [
                'name' => $items->first()['name'],
                'value' => $items->first()['value'],
                'articles' => $items->pluck('article')->take(3),
            ])
            ->values();

        return inertia()->render('Front/Articles', [
            'banners' => $banners,
            'newest' => $newest,
            'categories' => $categories,
            'most3Articles' => $most3Articles,
            'grouped' => CategoryWithArticlesResource::collection($grouped),
        ]);
    }

    public function groupArticles($category)
    {
        $articles = Article::active()
        ->with('user:id,name')
        ->lang()
        ->whereJsonContains('category', ['value' => (int) $category])
        ->latest()
        ->get();

        // Pobranie nazwy kategorii z pierwszego artykułu (jeśli istnieje)
        $categoryName = optional($articles->first())->category['name'] ?? 'Nieznana kategoria';

        // Podział na sekcje 2,3,2,3...
        $sectionPattern = [2,3]; // wzór sekcji
        $sections = [];
        $index = 0;

        while ($index < $articles->count()) {
            foreach ($sectionPattern as $count) {
                $section = $articles->slice($index, $count)->values();
                if ($section->isNotEmpty()) {
                    // Zastosuj Resource do pojedynczych artykułów w sekcji
                    $sections[] = NewestArticleArticlesPageResource::collection($section);
                }
                $index += $count;
                if ($index >= $articles->count()) break;
            }
        }


        return inertia()->render('Front/ArticlesGroup', [
            'category' => $category,
            'categoryName' => $categoryName,
            'sections' => $sections, // każda sekcja już ma Resource
        ]);
    }

    public function projects()
    {
        $countryCode = getLocalBrowserLang();
        $projects = Project::orderByRaw("JSON_SEARCH(country, 'one', ?, NULL, '$[*].countryCode') IS NULL ASC", [$countryCode])
            ->featured() // dodaje flagę is_featured
            ->with('user.changeProducts')
            ->paginate(20)->withQueryString();

        return inertia()->render('Front/Projects', [
            'projects' => $projects,
        ]);
    }

    public function SingleArticle(Article $article)
    {
        $article->load(['comments' => function ($query) {
            $query->with(['user', 'replies' => function ($q) {
                $q->with('user', 'replies')
                    ->where('show', true); // tylko widoczne odpowiedzi
            }])
                ->whereNull('parent_id')
                ->where('show', true); // tylko widoczne główne komentarze
        }]);

        // Wszystkie unikalne kategorie
        $categories = Article::active()
            ->lang()
            ->select(
                DB::raw('DISTINCT JSON_UNQUOTE(JSON_EXTRACT(category, "$.value")) as value'),
                DB::raw('JSON_UNQUOTE(JSON_EXTRACT(category, "$.name")) as name')
            )
            ->get();

        // Wszystkie artykuły oprócz aktualnego
        $recentArticles = Article::active()
            ->lang()
            ->where('id', '!=', $article->id)
            ->latest()
            ->get()
            ->map(fn($a) => new NewestArticleArticlesPageResource($a));

        $sections = [];
        $catIndex = 0;
        $artIndex = 0;

        while ($catIndex < $categories->count() || $artIndex < $recentArticles->count()) {
            $sectionCategories = $categories->slice($catIndex, 4)->values();
            $sectionArticles   = $recentArticles->slice($artIndex, 3)->values();

            $sections[] = [
                'categories' => $sectionCategories,
                'articles' => $sectionArticles,
            ];

            $catIndex += 4;
            $artIndex += 3;
        }

        $allOtherArticles = $recentArticles;

        $article->load('user.firm');

        return inertia()->render('Front/SingleArticle', [
            'article' => new FrontArticleResource($article),
            'sidebarSections' => $sections,
            'allOtherArticles' => $allOtherArticles,
        ]);
    }
    public function SingleFirm(User $user)
    {
        $user->load('firm');
        return inertia()->render('Front/SingleFirm', [
            'firm' => new FrontUserResource($user),
        ]);
    }

    public function SingleProject(Project $project)
    {
        $locale = getLocalBrowserLang();
        $image = Country::firstWhere('countryCode', $locale)?->active_image_url;

        return inertia()->render('Front/SingleProject', [
            'project' => $project,
            'image' => $image,
        ]);
    }

    public function Contact()
    {
        return inertia()->render('Front/Contact');
    }

    public function Privacy()
    {
        return inertia()->render('Front/Privacy');
    }

    public function Terms()
    {
        return inertia()->render('Front/Terms');
    }

    public function Firms()
    {
        $firms = User::role('firm')->with(['firm' => function($query) {
            $query->select('id', 'user_id', 'nip', 'regon', 'street', 'city', 'postal', 'country', 'description', 'www',
                           'count_workers', 'video', 'opinion_google', 'opinion_facebook', 'opinion_trust', 'points');
        }])->paginate(10)->withQueryString();

        return inertia()->render('Front/Firms',compact('firms'));
    }

    public function applyView(Project $project)
    {
        if(auth()->check() && !auth()->user()->hasRole('worker')){
            session()->flash('flash.banner', __('translate.applyViewBlocked'));
            session()->flash('flash.bannerStyle', 'danger');
            return to_route('front.projects.single',$project);
        }

        if(auth()->check() && auth()->user()->hasRole('worker')){
            $project->load(['questions' => function($query) {
                $query->whereNotNull('accepted');
            }]);
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
        $professionCv = $project->categorySub['value'];

        if(auth()->check() && auth()->user()->hasRole('worker')) {
            $existsCv = Aplication::where('aplication_user_id',auth()->id())->whereNotNull('pathCv')->whereHas('project', function ($query) use ($project, $professionCv) {
                $query->whereJsonContains('categorySub->value', $professionCv);
            })->first();
        }


        return inertia()->render('Front/Apply', [
            'project' => $project,
            'agreements' => $agreements,
            'levelEducations' => $levelEducations,
            'langLevels' => $langLevels,
            'professionCv' => $existsCv,
        ]);
    }

    public function nextStep(AplicationRequest $request, Project $project)
    {
        return to_route('front.projects.applyView',$project);
    }
    public function makeAplication(AplicationRequest $request, Project $project)
    {
        $user = $request->user();
        $key = 'make-aplication:' .$project->id.'-'. ($user?->id ?? $request->ip());

        $executed = RateLimiter::attempt(
            $key,
            $maxAttempts = 1,
            function () use ($request,$project) {

                if(isset($request->aplicationData()['isSelected'])){
                    $pathExist = Aplication::where('id',$request->aplicationData()['isSelected'])->pluck('pathCv')->first();
                }

                $aplication = Aplication::create([
                    'user_id'=>$project->user_id,
                    'recruiter_id'=>$project->recruiter_id,
                    'project_id'=>$project->id,
                    'pathCv'=>$pathExist ?? NULL,
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
                    if($request->aplicationData()['templateCv'] && $request->aplicationData()['cv'] == 1 && !$request->aplicationData()['isSelected']){
                        $previousLocale = App::getLocale();
                        $this->changeLangToGenerate(request()->get('cvLang'));

                        $viewName = "cvTemplates.{$request->aplicationData()['templateCv']}";
                        if (!View::exists($viewName)) {
                            abort(404, "Szablon PDF nie istnieje.");
                        }
                        $media = $cvClassic->getFirstMedia('aplications_cvClassic_photo');
                        $imageUrl = $media
                            ? $media->getPath()
                            : public_path('storage/cv/'.$request->aplicationData()['templateCv'].'/custom-avatar.png');

                        $pdf = Pdf::loadView($viewName, ['data' => request()->all(),'image'=>$imageUrl]);
                        $fileName = 'cv_' . time() . '.pdf';
                        $filePath = 'pdf/' . $fileName;
                        Storage::disk('public')->put($filePath, $pdf->output());
                        $aplication->update([
                            'pathCv'=>isset($filePath) ? Storage::url($filePath) : NULL,
                        ]);
                        App::setLocale($previousLocale);

                    }
                }
                session()->forget('captcha_text');
                AplicationMakeEvent::dispatch($aplication,auth()->user(),$request->aplicationData()['cv']);
            },
            $decaySeconds = 60 * 60 * 24
        );

        if (! $executed) {
            throw ValidationException::withMessages([
                'application' => [__('CvRate')],
            ]);
        }
        session()->flash('flash.banner', __('translate.makeAplicationNotRegister'));
        session()->flash('flash.bannerStyle', 'success');
        return to_route('front.projects.single',$project);
    }

    private function changeLangToGenerate($cvLang)
    {
        $lang = $cvLang;
        if (is_array($lang)) {
            $lang = isset($lang[0]) ? $lang[0]['value'] : $lang['value'];
        }
        $unsupportedLanguages = ['am', 'ps', 'bn', 'dz', 'zh', 'ka', 'ja', 'km', 'ko', 'dv', 'th'];

        if (in_array($lang, $unsupportedLanguages)) {
            $lang = 'en';
        }
        App::setLocale($lang);
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
        $previousLocale = App::getLocale();
        $this->changeLangToGenerate(request()->get('cvLang'));
        $viewName = "cvTemplates.{$templateId}";
        if (!View::exists($viewName)) {
            abort(404, "Szablon PDF nie istnieje.");
        }
        $cvClassic = CvClassic::where('worker_id',auth()->user()->id)->first();
        if($cvClassic){
            $media = $cvClassic->getFirstMedia('aplications_cvClassic_photo');
            $imageUrl = $media
                ? $media->getPath()
                : public_path('storage/cv/'.$templateId.'/custom-avatar.png');
        } else {
                $imageUrl = public_path('storage/cv/'.$templateId.'/custom-avatar.png');
        }
        $pdf = Pdf::loadView($viewName, ['data' => request()->all(),'image'=>$imageUrl]);
        $fileName = 'cv_' . time() . '.pdf';
        $filePath = 'pdfGenerateTemporary/' . $fileName;
        Storage::disk('public')->put($filePath, $pdf->output());
        $url = Storage::url($filePath); // Generuje URL publiczny
        App::setLocale($previousLocale);
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
