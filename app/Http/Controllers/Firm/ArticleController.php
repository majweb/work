<?php

namespace App\Http\Controllers\Firm;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreArticleRequest;
use App\Http\Requests\UpdateArticleRequest;
use App\Http\Resources\FrontArticleResource;
use App\Http\Resources\PermissionsResource;
use App\Models\Article;
use App\Models\Category;
use App\Models\ChangeProduct;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Permission;


class ArticleController extends Controller
{
    private function errorArticle()
    {
        session()->flash('flash.banner', 'Brak możliwości dodania artykułu');
        session()->flash('flash.bannerStyle', 'danger');
        return to_route('articles.index');
    }


    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        Gate::authorize('view', [User::class, Article::class]);

        request()->validate([
            'direction' => ['in:asc,desc'],
            'field' => ['in:id']
        ]);

        $query = Article::query()->where('user_id', auth()->user()->id);

        $query->when(request()->has(['field', 'direction']), function ($q) {
            $q->orderBy(request('field'), request('direction'));
        });

        return inertia()->render('Buy/Article/Index', [
            'articles' => $query->paginate(5)->withQueryString(),
            'filters' => request()->only(['field', 'direction'])
        ]);
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        Gate::authorize('create', User::class);

        $articleProduct = auth()->user()->changeProducts()->where('product_id', 10)->first();
        if ($articleProduct) {
            if ($articleProduct->qty <= 0) {
                return $this->errorArticle();
            }
        } else {
            return $this->errorArticle();
        }
        return inertia()->render('Buy/Article/Create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreArticleRequest $request)
    {
        $articleProduct = auth()->user()->changeProducts()->where('product_id', 10)->first();
         if ($articleProduct) {
                if ($articleProduct->qty > 0) {
                    $articleProduct->decrement('qty',1);
                    $article = auth()->user()->articles()->create([
                        'title' => $request->articleData()['title'],
                        'content' => $request->articleData()['content'],
                        'sections' => $request->articleData()['sections'],
                        'lang' => $request->articleData()['lang'],
                    ]);

                    $article
                        ->addFromMediaLibraryRequest($request->baner)
                        ->toMediaCollection('baner');

                    session()->flash('flash.banner', __('auth.addedArticle'));
                    session()->flash('flash.bannerStyle', 'success');
                    return to_route('articles.index');
                } else {
                    return $this->errorArticle();
                }
            } else{
                return $this->errorArticle();
            }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Article $article)
    {
        Gate::authorize('update',auth()->user());
        return inertia()->render('Buy/Article/Edit',['article'=>new FrontArticleResource($article)]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateArticleRequest $request, Article $article)
    {
        Gate::authorize('update',auth()->user());
        $article->update([
            'title' => $request->articleData()['title'],
            'content' => $request->articleData()['content'],
            'sections' => $request->articleData()['sections'],
            'lang' => $request->articleData()['lang'],

        ]);
        $article
            ->syncFromMediaLibraryRequest($request->baner)
            ->toMediaCollection('baner');

        session()->flash('flash.banner', __('auth.updateArticle'));
        session()->flash('flash.bannerStyle', 'success');
        return to_route('articles.index');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Article $article)
    {
        Gate::authorize('delete',$article);
        $article->delete();
        session()->flash('flash.banner', __('auth.deleteArticle'));
        session()->flash('flash.bannerStyle', 'success');
        return to_route('articles.index');
    }
}
