<?php

namespace App\Jobs;

use App\Models\ArticleTranslation;
use App\Services\Articles\ArticleTranslationService;
use App\Services\Articles\ArticleTranslator;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Log;
use Throwable;

/**
 * Tłumaczy artykuł admina na jeden język i zapisuje wersję (szkic) dla rynków tego języka.
 * Błąd zapisuje się przy tłumaczeniu; ponowienie uruchamia admin.
 */
class TranslateArticle implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    // Bez automatycznych powtórzeń - każda próba kosztuje; ponawia admin
    public int $tries = 1;

    // Języki o rzadkich alfabetach tłumaczone po sekcjach potrafią trwać kilka minut
    public int $timeout = 1800;

    public bool $deleteWhenMissingModels = true;

    public function __construct(public ArticleTranslation $translation) {}

    public function handle(ArticleTranslator $translator, ArticleTranslationService $service): void
    {
        $translation = $this->translation;
        $source = $translation->source;

        if (! $source) {
            return;
        }

        // Przejęcie tłumaczenia tylko raz - po wznowieniu w kolejce mogą być dwa zadania tego samego języka
        $claimed = ArticleTranslation::whereKey($translation->id)
            ->where('status', ArticleTranslation::STATUS_PENDING)
            ->update(['status' => ArticleTranslation::STATUS_TRANSLATING, 'updated_at' => now()]);

        if (! $claimed) {
            return;
        }

        $translation->refresh();

        try {
            $result = $translator->translate($source->only(array_merge(ArticleTranslator::FIELDS, ['content'])), $translation->locale);
            $service->saveVersion($translation, $result);
        } catch (Throwable $e) {
            Log::error("Artykuł #{$source->id} ({$translation->locale}): ".$e->getMessage());
            $translation->update([
                'status' => ArticleTranslation::STATUS_FAILED,
                'error' => self::errorMessage($e),
            ]);
        }
    }

    /**
     * Komunikat dla admina - brak środków na koncie OpenAI opisany wprost.
     */
    public static function errorMessage(Throwable $e): string
    {
        $message = $e->getMessage();

        if (preg_match('/insufficient_quota|exceeded your current quota|billing/i', $message)) {
            return 'Brak środków na koncie OpenAI - doładuj konto i kliknij „Wznów nieukończone”.';
        }

        return mb_substr($message, 0, 1000);
    }
}
