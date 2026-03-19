<?php

namespace App\Http\Controllers\Firm;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreArticleRequest;
use App\Http\Requests\UpdateArticleRequest;
use App\Http\Resources\FrontArticleResource;
use App\Http\Resources\MultiselectResource;
use App\Models\Article;

use App\Models\Category;
use App\Models\ChangeProduct;
use App\Services\DictionaryService;
use App\Models\Comment;
use App\Models\Product;
use App\Models\TemporaryFile;
use App\Models\User;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Storage;


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
            'field' => ['in:id'],
        ]);

        $query = Article::query()->where('user_id', auth()->user()->id);

        $query->when(request()->has(['field', 'direction']), function ($q) {
            $q->orderBy(request('field'), request('direction'));
        });

        $product = Product::find(10);
        $check = ChangeProduct::where(['user_id' => auth()->id(), 'product_id' => 10])->isCurrent()->first();

        return inertia()->render('Buy/Article/Index', [
            'articles' => $query->paginate(5)->withQueryString(),
            'filters' => request()->only(['field', 'direction']),
            'product' => $product,
            'check' => $check,
        ]);
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create(DictionaryService $dictionaryService)
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
        return inertia()->render('Buy/Article/Create',[
            'categories' => $dictionaryService->getCategories(),
        ]);
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
                        'active' => $request->articleData()['active'],
                        'content' => $request->articleData()['content'],
                        'lang' => $request->articleData()['lang'],
                        'meta_title' => $request->articleData()['meta_title'],
                        'meta_description' => $request->articleData()['meta_description'],
                        'short_description' => $request->articleData()['short_description'],
                        'alt' => $request->articleData()['alt'],
                        'meta_keywords' => $request->articleData()['meta_keywords'],
                        'category' => $request->articleData()['category'],
                    ]);
                    $folder =$request['photo'][0]; // bo tutaj przychodzi sam folder string
                    $temporaryFile = TemporaryFile::where('folder', $folder)->first();

                    if (!$temporaryFile) {
                        return redirect()->back()->with('error', 'Nie znaleziono przesłanego zdjęcia.');
                    }

                    $filePath = 'temps/'.$folder.'/'.$temporaryFile->filename;

                    if (!Storage::disk('public')->exists($filePath)) {
                        return redirect()->back()->with('error', 'Nie znaleziono pliku tymczasowego.');
                    }
                    if ($filePath) {
                        $article->addMediaFromDisk($filePath, 'public')
                            ->usingName(basename($filePath))
                            ->usingFileName(basename($filePath))
                            ->toMediaCollection('articles_images');
                        Storage::disk('public')->deleteDirectory('temps/' . $folder);
                        $temporaryFile->delete();
                    }

                    session()->flash('flash.banner', __('translate.addedArticle'));
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
    public function edit(Article $article, DictionaryService $dictionaryService)
    {
        Gate::authorize('update',auth()->user());

        $article->load(['comments' => function ($query) {
            $query->with(['user', 'replies' => function ($q) {
                $q->with('user', 'replies')->orderBy('show', 'asc');   // niewidoczne najpierw

            }])
                ->whereNull('parent_id')
                ->orderBy('show', 'asc');
        }]);

        return inertia()->render('Buy/Article/Edit',[
            'article' => new FrontArticleResource($article),
            'categories' => $dictionaryService->getCategories()
        ]);
    }

    public function toggleCommentVisibility($commentId)
    {
        // Możesz dodać autoryzację np. tylko właściciel artykułu lub admin
        $comment = Comment::findOrFail($commentId);

        // Sprawdzenie, czy użytkownik ma prawo do edycji komentarza
        if ($comment->article->user_id !== auth()->id()) {
            abort(403, 'Nie masz uprawnień do zmiany widoczności komentarza.');
        }

        // Odwrócenie statusu show
        $comment->show = !$comment->show;
        $comment->save();

        // Zwracamy nowy status w JSON
        return response()->json([
            'id' => $comment->id,
            'show' => $comment->show
        ]);
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

        // 🔑 Sprawdź, czy przesłano nowe zdjęcie (folder) czy istniejące (URL)
        if (isset($photo['source']) && str_starts_with($photo['source'], 'http')) {
            // 📌 Zdjęcie już istnieje → nie ruszamy TemporaryFile
            $filePath = null;
        } else {
            // 📌 Nowe zdjęcie → folder z tymczasowego uploadu
            $folder = $photo; // bo tutaj przychodzi sam folder string
            $temporaryFile = TemporaryFile::where('folder', $folder)->first();

            if (!$temporaryFile) {
                return redirect()->back()->with('error', 'Nie znaleziono przesłanego zdjęcia.');
            }

            $filePath = 'temps/'.$folder.'/'.$temporaryFile->filename;

            if (!Storage::disk('public')->exists($filePath)) {
                return redirect()->back()->with('error', 'Nie znaleziono pliku tymczasowego.');
            }
        }

        if ($filePath) {
            // Usuń stare media
            $article->clearMediaCollection('articles_images');

            // Dodaj nowe
            $article->addMediaFromDisk($filePath, 'public')
                ->usingName(basename($filePath))
                ->usingFileName(basename($filePath))
                ->toMediaCollection('articles_images');

            // Usuń tymczasowy folder i rekord
            Storage::disk('public')->deleteDirectory('temps/' . $folder);
            $temporaryFile->delete();
        }

        session()->flash('flash.banner', __('translate.updateArticle'));
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
        session()->flash('flash.banner', __('translate.deleteArticle'));
        session()->flash('flash.bannerStyle', 'success');
        return to_route('articles.index');
    }
}
