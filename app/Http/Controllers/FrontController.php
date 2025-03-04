<?php

namespace App\Http\Controllers;

use App\Http\Requests\AplicationRequest;
use App\Http\Resources\FrontArticleResource;
use App\Models\Agreement;
use App\Models\Aplication;
use App\Models\Article;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Mews\Captcha\Facades\Captcha;
use Illuminate\Support\Facades\Response;
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

        $agreements = Agreement::where('type','Apply without register')->get(['description','id']);  // Pobranie zgód z bazy danych
        return inertia()->render('Front/SingleProject', [
            'project' => $project,
            'agreements' => $agreements,
        ]);
    }

    public function makeAplication(AplicationRequest $request, Project $project)
    {
//        if (Auth::check() && Auth::user()->hasRole('worker')) {
//            // Użytkownik jest zalogowany i ma rolę "worker"
//        } else {
//
//        }
        $aplication = Aplication::create([
            'user_id'=>$project->user_id,
            'recruiter_id'=>$project->recruiter_id,
            'name'=>$request->aplicationData()['name'],
            'surname'=>$request->aplicationData()['surname'],
            'phone'=>$request->aplicationData()['phone'],
            'email'=>$request->aplicationData()['email']
        ]);
        if(is_array($request->aplicationData()['file']) && count($request->aplicationData()['file']) && $aplication){
            $aplication
            ->addFromMediaLibraryRequest($request->aplicationData()['file'])
            ->toMediaCollection('aplications_media');
        }
        session()->forget('captcha_text');


        session()->flash('flash.banner', __('translate.makeAplicationNotRegister'));
        session()->flash('flash.bannerStyle', 'success');
    }

    public function generateCaptcha()
    {
        $captchaText = Str::random(6);
        session(['captcha_text' => $captchaText]);
        return response()->json(['captchaText' => $captchaText]);
    }

    public function resetSessionCapcha()
    {
        if(session()->has('captcha_text')){
        session()->forget('captcha_text');
        }
    }
}
