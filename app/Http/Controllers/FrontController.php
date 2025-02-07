<?php

namespace App\Http\Controllers;

use App\Http\Resources\FrontArticleResource;
use App\Models\Article;
use App\Models\Project;

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
        $countryCode = substr(request()->server('HTTP_ACCEPT_LANGUAGE', 'en'), 0, 2);
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
}
