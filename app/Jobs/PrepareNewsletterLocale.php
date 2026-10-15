<?php

namespace App\Jobs;

use App\Models\NewsletterCampaignLocale;
use App\Services\Newsletter\GetResponseClient;
use App\Services\Newsletter\NewsletterRenderer;
use App\Services\Newsletter\NewsletterTranslator;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Log;
use Throwable;

/**
 * Jedna wersja językowa wysyłki: tłumaczenie (OpenAI) -> HTML z szablonu -> szkic w GetResponse.
 * Błąd zapisuje się przy wersji językowej; ponowienie uruchamia się z panelu admina.
 */
class PrepareNewsletterLocale implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    // Bez automatycznych powtórzeń - powtórzenie po częściowym sukcesie mogłoby utworzyć drugi szkic
    public int $tries = 1;

    public int $timeout = 300;

    public function __construct(public NewsletterCampaignLocale $campaignLocale) {}

    public function handle(NewsletterTranslator $translator, NewsletterRenderer $renderer, GetResponseClient $getResponse): void
    {
        $item = $this->campaignLocale;
        $campaign = $item->campaign;

        // Szkic już istnieje (np. podwójne kliknięcie "ponów") - nie tworzymy drugiego
        if ($item->getresponse_newsletter_id) {
            return;
        }

        $item->update(['status' => NewsletterCampaignLocale::STATUS_TRANSLATING, 'error' => null]);

        try {
            $texts = $item->translated ?: $translator->translate($renderer->sourceTexts($campaign), $item->locale);
            $item->update(['translated' => $texts]);

            $html = $renderer->render($campaign, $item->locale, $texts);
            $listId = $getResponse->listIdForLocale($item->locale);
            $draftId = $getResponse->createDraft(
                $listId,
                "#{$campaign->id} {$item->locale} - {$campaign->subject}",
                $texts['subject'] ?? $campaign->subject,
                $html
            );

            $item->update([
                'status' => NewsletterCampaignLocale::STATUS_DRAFT_CREATED,
                'getresponse_newsletter_id' => $draftId,
            ]);
        } catch (Throwable $e) {
            Log::error("Newsletter #{$campaign->id} ({$item->locale}): ".$e->getMessage());

            $item->update([
                'status' => NewsletterCampaignLocale::STATUS_FAILED,
                'error' => mb_substr($e->getMessage(), 0, 2000),
            ]);
        }
    }
}
