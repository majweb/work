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
        $projects = Project::paginate(10)->withQueryString();

        $data = [
                'title'=>[
                    'pl'=>'tytuł',
                    'en'=>'title',
                ],
                'mother'=>[
                    'pl'=>'mama',
                    'en'=>'mother',
                ]
        ];

        return inertia()->render('Front/Projects', [
            'projects' => $projects,
            'data' => $data,
        ]);
    }

    public function SingleArticle(Article $article)
    {
        $article->load('user.firm');
        return inertia()->render('Front/SingleArticle', [
            'article' => new FrontArticleResource($article),
        ]);
    }
}
