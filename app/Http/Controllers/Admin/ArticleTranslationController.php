<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\ArticleTranslation;
use App\Models\User;
use App\Services\Articles\ArticleTranslationService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

/**
 * Wersje językowe artykułu admina: publikacja szkiców, ponawianie tłumaczeń, rynki wersji.
 */
class ArticleTranslationController extends Controller
{
    public function __construct(private ArticleTranslationService $translations) {}

    /**
     * Stan tłumaczeń - odpytywany na stronie artykułu, gdy tłumaczenia trwają.
     */
    public function status(Article $article, ArticleAcceptController $articles): JsonResponse
    {
        Gate::authorize('admin', User::class);

        return response()->json($articles->translationsData($article));
    }

    public function publishAll(Article $article): RedirectResponse
    {
        Gate::authorize('admin', User::class);

        $count = $this->translations->publishAll($article);

        return back()->with(['flash.banner' => "Opublikowano wersje językowe: {$count}.", 'flash.bannerStyle' => 'success']);
    }

    /**
     * Publikacja albo wycofanie do szkicu jednej wersji.
     */
    public function togglePublish(Article $article, ArticleTranslation $translation): RedirectResponse
    {
        $this->authorizeTranslation($article, $translation);
        abort_unless($translation->article, 404);

        $translation->article->update(['active' => ! $translation->article->active]);

        return back()->with([
            'flash.banner' => $translation->article->active ? 'Wersja opublikowana.' : 'Wersja wycofana do szkicu.',
            'flash.bannerStyle' => 'success',
        ]);
    }

    /**
     * Ponowienie po błędzie albo ponowne tłumaczenie jednego języka (także poprawionego ręcznie).
     */
    public function retry(Article $article, ArticleTranslation $translation): RedirectResponse
    {
        $this->authorizeTranslation($article, $translation);

        $this->translations->retranslate($article, [$translation->locale], includeEdited: true);

        return back()->with(['flash.banner' => 'Tłumaczenie ponownie w kolejce.', 'flash.bannerStyle' => 'success']);
    }

    /**
     * Ponowne tłumaczenie wszystkich języków po zmianie oryginału. Wersje poprawione ręcznie
     * tylko po zaznaczeniu "także poprawione".
     */
    public function retranslateAll(Request $request, Article $article): RedirectResponse
    {
        Gate::authorize('admin', User::class);

        $count = $this->translations->retranslate($article, null, $request->boolean('include_edited'));

        return back()->with(['flash.banner' => "Ponowne tłumaczenie: {$count} języków w kolejce.", 'flash.bannerStyle' => 'success']);
    }

    public function removeMarket(Article $article, ArticleTranslation $translation, string $country): RedirectResponse
    {
        $this->authorizeTranslation($article, $translation);

        $this->translations->removeMarket($translation, strtolower($country));

        return back()->with(['flash.banner' => 'Rynek został usunięty z wersji językowej.', 'flash.bannerStyle' => 'success']);
    }

    private function authorizeTranslation(Article $article, ArticleTranslation $translation): void
    {
        Gate::authorize('admin', User::class);
        abort_unless($translation->source_article_id === $article->id, 404);
    }
}
