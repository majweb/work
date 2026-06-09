<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreArticleRequest;
use App\Http\Requests\UpdateArticleRequest;
use App\Http\Resources\FrontArticleResource;
use App\Models\Article;
use App\Models\TemporaryFile;
use App\Models\User;
use App\Services\DictionaryService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Storage;

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
            $q->latest('id');
        });

        return inertia()->render('Admin/Articles-Accept/Index', [
            'articles' => $query->with(['user:id,name,profile_photo_path'])->paginate(10)->withQueryString(),
            'filters' => request()->only(['field', 'direction', 'all'])
        ]);
    }

    public function create(DictionaryService $dictionaryService)
    {
        Gate::authorize('admin', User::class);

        return inertia()->render('Admin/Articles-Accept/Create', [
            'categories' => $dictionaryService->getCategories(),
        ]);
    }

    public function store(StoreArticleRequest $request)
    {
        Gate::authorize('admin', User::class);

        $article = auth()->user()->articles()->create([
            'title' => $request->articleData()['title'],
            'active' => $request->articleData()['active'],
            'content' => $request->articleData()['content'],
            'lang' => $request->articleData()['lang'],
            'meta_title' => $request->articleData()['meta_title'],
            'meta_description' => $request->articleData()['meta_description'],
            'short_description' => $request->articleData()['short_description'],
            'alt' => $request->articleData()['alt'],
            'meta_keywords' => $request->articleData()['meta_keywords'],
            'category' => $request->articleData()['category'],
            'active_admin' => true, // Automatycznie zatwierdzony przez admina
        ]);

        $folder = $request['photo'][0];
        $temporaryFile = TemporaryFile::where('folder', $folder)->first();

        if ($temporaryFile) {
            $filePath = 'temps/'.$folder.'/'.$temporaryFile->filename;

            if (Storage::disk('public')->exists($filePath)) {
                $article->addMediaFromDisk($filePath, 'public')
                    ->usingName(basename($filePath))
                    ->usingFileName(basename($filePath))
                    ->toMediaCollection('articles_images');

                Storage::disk('public')->deleteDirectory('temps/'.$folder);
                $temporaryFile->delete();
            }
        } else {
            session()->flash('flash.banner', __('translate.cannotAddArticle'));
            session()->flash('flash.bannerStyle', 'danger');

            return redirect()->back();
        }

        session()->flash('flash.banner', __('translate.addedArticle') ?? 'Artykuł został dodany');
        session()->flash('flash.bannerStyle', 'success');

        return redirect()->route('admin.articles-accepts.index');
    }

    public function show(Article $article)
    {
        Gate::authorize('admin', User::class);
        $article->load([
            'user:id,name,profile_photo_path',
            'media',
            'comments' => function ($q) {
                $q->latest('created_at');
            },
        ]);

        return inertia()->render('Admin/Articles-Accept/Show', [
            'article' => $article,
        ]);
    }

    public function edit(Article $article, DictionaryService $dictionaryService)
    {
        Gate::authorize('admin', User::class);

        return inertia()->render('Admin/Articles-Accept/Edit', [
            'article' => FrontArticleResource::make($article)->resolve(),
            'categories' => $dictionaryService->getCategories()
        ]);
    }

    public function update(UpdateArticleRequest $request, Article $article)
    {
        Gate::authorize('admin', User::class);

        $article->update([
            'title' => $request->articleData()['title'],
            'content' => $request->articleData()['content'],
            'active' => $request->articleData()['active'],
            'lang' => $request->articleData()['lang'],
            'meta_title' => $request->articleData()['meta_title'],
            'meta_description' => $request->articleData()['meta_description'],
            'short_description' => $request->articleData()['short_description'],
            'alt' => $request->articleData()['alt'],
            'meta_keywords' => $request->articleData()['meta_keywords'],
            'category' => $request->articleData()['category'],
        ]);

        $photo = $request['photo'][0];

        // Sprawdź, czy przesłano nowe zdjęcie (folder) czy istniejące (URL/Media object)
        if (isset($photo['original_url'])) {
            // Zdjęcie już istnieje → nie ruszamy
            $filePath = null;
        } else {
            // Nowe zdjęcie → folder z tymczasowego uploadu
            $folder = $photo;
            $temporaryFile = TemporaryFile::where('folder', $folder)->first();

            if ($temporaryFile) {
                $filePath = 'temps/'.$folder.'/'.$temporaryFile->filename;
                if (!Storage::disk('public')->exists($filePath)) {
                    $filePath = null;
                }
            } else {
                $filePath = null;
            }
        }

        if ($filePath) {
            $article->clearMediaCollection('articles_images');
            $article->addMediaFromDisk($filePath, 'public')
                ->usingName(basename($filePath))
                ->usingFileName(basename($filePath))
                ->toMediaCollection('articles_images');

            Storage::disk('public')->deleteDirectory('temps/' . $folder);
            $temporaryFile->delete();
        }

        session()->flash('flash.banner', __('translate.updateArticle') ?? 'Artykuł został zaktualizowany');
        session()->flash('flash.bannerStyle', 'success');

        return redirect()->route('admin.articles-accepts.index');
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
