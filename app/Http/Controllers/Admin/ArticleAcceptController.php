<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreArticleRequest;
use App\Http\Requests\UpdateArticleRequest;
use App\Http\Resources\FrontArticleResource;
use App\Models\Article;
use App\Models\ArticleTranslation;
use App\Models\Country;
use App\Models\Newsletter;
use App\Models\TemporaryFile;
use App\Models\User;
use App\Services\Articles\ArticleTranslationService;
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

        // Wersje językowe są widoczne w szczegółach oryginału - lista pokazuje tylko oryginały
        $query = Article::query()->whereNull('source_article_id')->withCount([
            'translations',
            'translations as translations_done_count' => fn ($q) => $q->where('status', ArticleTranslation::STATUS_DONE),
        ]);

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
            'articles' => $query->with(['user:id,name,profile_photo_path'])->paginate(10)->through(fn($article) => [
                'id' => $article->id,
                'title' => $article->title,
                'slug' => $article->slug,
                'created_at' => $article->created_at,
                'user' => [
                    'id' => $article->user->id ?? null,
                    'name' => $article->user->name ?? null,
                    'profile_photo_path' => $article->user->profile_photo_path ?? null,
                ],
                'active_admin' => $article->active_admin,
                'translations_count' => $article->translations_count,
                'translations_done_count' => $article->translations_done_count,
            ])->withQueryString(),
            'filters' => request()->only(['field', 'direction', 'all'])
        ]);
    }

    public function create(DictionaryService $dictionaryService)
    {
        Gate::authorize('admin', User::class);

        return inertia()->render('Admin/Articles-Accept/Create', [
            'categories' => $dictionaryService->getCategories(),
            'countries' => $dictionaryService->getCountries(app()->getLocale()),
            ...$this->marketProps(),
        ]);
    }

    public function store(StoreArticleRequest $request, ArticleTranslationService $translations)
    {
        Gate::authorize('admin', User::class);

        $article = auth()->user()->articles()->create([
            'title' => $request->articleData()['title'],
            'active' => $request->articleData()['active'],
            'content' => $request->articleData()['content'],
            'country_code' => $request->articleData()['country_code'],
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

        // Tłumaczenie na wybrane rynki - szkice wersji językowych powstają w tle
        if ($countries = $request->validated('translate_countries')) {
            $result = $translations->addMarkets($article, $countries);
            session()->flash('flash.banner', "Artykuł został dodany. Tłumaczenie na {$result['languages']} języków trwa w tle - szkice pojawią się w szczegółach artykułu.");
            session()->flash('flash.bannerStyle', 'success');

            return redirect()->route('admin.articles-accepts.show', $article->id);
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
            'source',
            'comments' => function ($q) {
                $q->latest('created_at');
            },
        ]);

        return inertia()->render('Admin/Articles-Accept/Show', [
            'article' => [
                'id' => $article->id,
                'slug' => $article->slug,
                'title' => $article->title,
                'content' => $article->content,
                'country_code' => $article->country_code,
                'country_name' => \App\Models\Country::where('countryCode', $article->country_code)->first()?->getTranslation('name', app()->getLocale()),
                'active' => $article->active,
                'active_admin' => $article->active_admin,
                'user' => $article->user,
                'media' => $article->media,
                'comments' => $article->comments,
                'meta_title' => $article->meta_title,
                'meta_description' => $article->meta_description,
                'short_description' => $article->short_description,
                'alt' => $article->alt,
                'meta_keywords' => $article->meta_keywords,
                'category' => $article->category,
                'created_at' => $article->created_at,
                'locale' => $article->locale,
                'source' => $article->source ? ['id' => $article->source->id, 'title' => $article->source->title] : null,
            ],
            'translations' => $article->isVersion() ? null : $this->translationsData($article),
        ]);
    }

    public function edit(Article $article, DictionaryService $dictionaryService)
    {
        Gate::authorize('admin', User::class);

        return inertia()->render('Admin/Articles-Accept/Edit', [
            'article' => [
                'id' => $article->id,
                'slug' => $article->slug,
                'title' => $article->title,
                'content' => $article->content,
                'country_code' => $article->country_code,
                'country_name' => \App\Models\Country::where('countryCode', $article->country_code)->first()?->getTranslation('name', app()->getLocale()),
                'active' => $article->active,
                'photo' => $article->getFirstMedia('articles_images'),
                'meta_title' => $article->meta_title,
                'meta_description' => $article->meta_description,
                'short_description' => $article->short_description,
                'alt' => $article->alt,
                'meta_keywords' => $article->meta_keywords,
                'category' => $article->category,
                // Wersja językowa: zdjęcie i rynki pochodzą z oryginału i tłumaczenia
                'is_version' => $article->isVersion(),
                'locale' => $article->locale,
                'source_id' => $article->source_article_id,
                // Rynki już obsłużone: przetłumaczone wersje i dodatkowe rynki oryginału
                'translated_countries' => $article->isVersion() ? [] : $article->translations()->pluck('countries')->flatten()
                    ->merge($article->countries ?? [])->unique()->values(),
            ],
            'categories' => $dictionaryService->getCategories(),
            'countries' => $dictionaryService->getCountries(app()->getLocale()),
            ...($article->isVersion() ? ['languageNames' => Newsletter::languageNames()] : $this->marketProps()),
        ]);
    }

    public function update(UpdateArticleRequest $request, Article $article, ArticleTranslationService $translations)
    {
        Gate::authorize('admin', User::class);

        if ($article->isVersion()) {
            return $this->updateVersion($request, $article);
        }

        $article->update([
            'title' => $request->articleData()['title'],
            'content' => $request->articleData()['content'],
            'active' => $request->articleData()['active'],
            'country_code' => $request->articleData()['country_code'],
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

        // Nowe rynki do tłumaczenia (języki już przetłumaczone dostają tylko nowe kraje)
        if ($countries = $request->validated('translate_countries')) {
            $result = $translations->addMarkets($article, $countries);
            session()->flash('flash.banner', "Artykuł został zaktualizowany. Nowe tłumaczenia: {$result['queued']} - trwają w tle.");
            session()->flash('flash.bannerStyle', 'success');

            return redirect()->route('admin.articles-accepts.show', $article->id);
        }

        session()->flash('flash.banner', __('translate.updateArticle') ?? 'Artykuł został zaktualizowany');
        session()->flash('flash.bannerStyle', 'success');

        return redirect()->route('admin.articles-accepts.index');
    }

    /**
     * Ręczna poprawka wersji językowej: tylko teksty (zdjęcie, kategoria i rynki pochodzą z oryginału).
     */
    private function updateVersion(UpdateArticleRequest $request, Article $article)
    {
        $data = $request->articleData();

        $article->update([
            'title' => $data['title'],
            'content' => $data['content'],
            'active' => $data['active'] ?? $article->active,
            'meta_title' => $data['meta_title'] ?? null,
            'meta_description' => $data['meta_description'] ?? null,
            'short_description' => $data['short_description'],
            'alt' => $data['alt'] ?? null,
            'meta_keywords' => $data['meta_keywords'],
        ]);

        // Ponowne tłumaczenie nie nadpisze poprawek bez potwierdzenia
        ArticleTranslation::where('article_id', $article->id)->update(['edited_manually' => true]);

        session()->flash('flash.banner', 'Wersja językowa została zapisana.');
        session()->flash('flash.bannerStyle', 'success');

        return redirect()->route('admin.articles-accepts.show', $article->source_article_id);
    }

    /**
     * Kraje do wyboru rynków tłumaczenia (z językiem) i polskie nazwy języków.
     *
     * @return array<string, mixed>
     */
    private function marketProps(): array
    {
        $languages = Country::languageMap();

        return [
            'markets' => Country::all(['countryCode', 'name'])
                ->map(fn (Country $country) => [
                    'code' => strtolower($country->countryCode),
                    'name' => $country->getTranslation('name', app()->getLocale()) ?: $country->countryCode,
                    'locale' => $languages[strtolower($country->countryCode)][0] ?? null,
                ])
                ->sortBy('name', SORT_NATURAL | SORT_FLAG_CASE)
                ->values(),
            'languageNames' => Newsletter::languageNames(),
        ];
    }

    /**
     * Tłumaczenia oryginału do szczegółów artykułu (odpytywane, gdy trwają).
     *
     * @return array<string, mixed>
     */
    public function translationsData(Article $article): array
    {
        $names = Newsletter::languageNames();
        $countryNames = Country::all(['countryCode', 'name'])
            ->mapWithKeys(fn (Country $c) => [strtolower($c->countryCode) => $c->getTranslation('name', app()->getLocale())]);

        $items = $article->translations()->with('article:id,slug,title,active')->get()
            ->sortBy(fn (ArticleTranslation $t) => $names[$t->locale] ?? $t->locale)
            ->map(fn (ArticleTranslation $t) => [
                'id' => $t->id,
                'locale' => $t->locale,
                'language' => $names[$t->locale] ?? $t->locale,
                'status' => $t->status,
                'error' => $t->error,
                'edited_manually' => $t->edited_manually,
                'cost_usd' => $t->cost_usd,
                'countries' => collect($t->countries)->map(fn ($code) => ['code' => $code, 'name' => $countryNames[$code] ?? $code])->values(),
                'article' => $t->article ? [
                    'id' => $t->article->id,
                    'title' => $t->article->title,
                    'active' => $t->article->active,
                    'url' => route('front.articles.single', $t->article->slug),
                ] : null,
            ])
            ->values();

        $sourceLocale = $article->locale ?: ArticleTranslationService::SOURCE_LOCALE;

        return [
            // Polski oryginał - pierwsza pozycja w panelu wersji językowych
            'source' => [
                'locale' => $sourceLocale,
                'language' => $names[$sourceLocale] ?? $sourceLocale,
                'title' => $article->title,
                'active' => (bool) $article->active,
                'url' => route('front.articles.single', $article->slug),
                'countries' => collect([$article->country_code, ...($article->countries ?? [])])->filter()->map(fn ($code) => strtolower($code))->unique()
                    ->map(fn ($code) => ['code' => strtolower($code), 'name' => $countryNames[strtolower($code)] ?? $code])->values(),
            ],
            'items' => $items,
            'in_progress' => $items->contains(fn ($t) => in_array($t['status'], [ArticleTranslation::STATUS_PENDING, ArticleTranslation::STATUS_TRANSLATING], true)),
            'cost_usd' => round($items->sum('cost_usd'), 2),
            'markets' => $items->sum(fn ($t) => count($t['countries'])),
        ];
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
