<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class ArticleAcceptController extends Controller
{
    public function index()
    {
        Gate::authorize('admin', User::class);

        request()->validate([
            'direction' => ['in:asc,desc'],
            'field' => ['in:id,title,created_at']
        ]);

        $query = Article::query();

        // Domyślnie pokazujemy te, które wymagają akceptacji (active_admin = 0)
        if (request('all') !== 'true') {
            $query->where('active_admin', false);
        }

        $query->when(request()->has(['field', 'direction']), function ($q) {
            $q->orderBy(request('field'), request('direction'));
        }, function ($q) {
            $q->latest();
        });

        return inertia()->render('Admin/Articles-Accept/Index', [
            'articles' => $query->with(['user:id,name,profile_photo_path'])->paginate(10)->withQueryString(),
            'filters' => request()->only(['field', 'direction', 'all'])
        ]);
    }

    public function show(Article $article)
    {
        Gate::authorize('admin', User::class);
        $article->load(['user:id,name,profile_photo_path']);
        return inertia()->render('Admin/Articles-Accept/Show', [
            'article' => $article->load('media')
        ]);
    }

    public function destroy(Article $article)
    {
        Gate::authorize('admin', User::class);
        $article->delete();
        session()->flash('flash.banner', __('Artykuł został usunięty'));
        session()->flash('flash.bannerStyle', 'success');
        return redirect()->route('admin.articles-accepts.index');
    }

    public function accept(Article $article)
    {
        Gate::authorize('admin', User::class);

        if ($article->active_admin) {
            $article->update(['active_admin' => false]);
            session()->flash('flash.banner', __('translate.articleRejected') ?? 'Artykuł został odrzucony');
        } else {
            $article->update(['active_admin' => true]);
            session()->flash('flash.banner', __('translate.articleAccepted') ?? 'Artykuł został zaakceptowany');
        }

        session()->flash('flash.bannerStyle', 'success');
        return redirect()->back();
    }
}
