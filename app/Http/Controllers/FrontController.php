<?php

namespace App\Http\Controllers;

use App\Http\Resources\FrontArticleResource;
use App\Models\Article;

class FrontController extends Controller
{
    public function articles()
    {
        $articles = Article::active()->lang()->paginate(10)->withQueryString();

        return inertia()->render('Front/Articles', [
            'articles' => $articles,
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
