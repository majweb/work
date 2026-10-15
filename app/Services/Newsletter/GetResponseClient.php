<?php

namespace App\Services\Newsletter;

use Illuminate\Http\Client\PendingRequest;
use Illuminate\Http\Client\Response;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Http;
use RuntimeException;

/**
 * Połączenie z API GetResponse v3 (https://apireference.getresponse.com).
 * Listy kontaktów (w GetResponse: "campaigns") są osobne dla każdego języka.
 */
class GetResponseClient
{
    public function isConfigured(): bool
    {
        return filled(config('services.getresponse.api_key'));
    }

    /**
     * Id listy dla języka; lista jest tworzona, jeśli jeszcze nie istnieje.
     */
    public function listIdForLocale(string $locale): string
    {
        $name = config('services.getresponse.list_prefix').strtolower($locale);

        return Cache::rememberForever("getresponse_list_{$name}", function () use ($name, $locale) {
            $id = $this->findListId($name) ?? $this->createList($name, $locale);

            // Zapis bez potwierdzania mailem: GetResponse domyślnie wymaga potwierdzenia (double opt-in)
            // dla kontaktów dodanych przez API - kontakt czekałby na kliknięcie w link i nie trafiał na listę.
            // Ustawiamy to także dla list utworzonych wcześniej.
            $response = $this->request()->post("campaigns/{$id}", ['optinTypes' => ['api' => 'single']]);
            $this->ensureSuccessful($response, 'Nie udało się ustawić zapisu bez potwierdzania dla listy '.$name);

            return $id;
        });
    }

    protected function createList(string $name, string $locale): string
    {
        $payload = ['name' => $name, 'languageCode' => $locale, 'optinTypes' => ['api' => 'single']];
        $response = $this->request()->post('campaigns', $payload);

        // Nie każdy kod języka portalu jest obsługiwany przez GetResponse - wtedy lista bez języka
        if ($response->status() === 400) {
            unset($payload['languageCode']);
            $response = $this->request()->post('campaigns', $payload);
        }

        // 409: lista o tej nazwie już istnieje (np. utworzona równolegle) albo nazwa jest zajęta
        // po usuniętej liście - GetResponse nie pozwala użyć nazwy listy drugi raz, nawet po usunięciu
        if ($response->status() === 409) {
            return $this->findListId($name) ?? $this->fail(
                "Nazwa listy {$name} jest zajęta w GetResponse (np. po usuniętej liście - nazw nie da się użyć ponownie). "
                .'Ustaw inny GETRESPONSE_LIST_PREFIX',
                $response
            );
        }

        $this->ensureSuccessful($response, 'Nie udało się utworzyć listy '.$name);

        return $response->json('campaignId');
    }

    /**
     * Dodaje kontakt do listy. Kontakt, który już jest na liście, nie jest błędem.
     */
    public function addContact(string $email, string $listId, ?string $ipAddress = null): void
    {
        $payload = array_filter([
            'email' => $email,
            'campaign' => ['campaignId' => $listId],
            'ipAddress' => $ipAddress,
        ]);

        $response = $this->request()->post('contacts', $payload);

        if ($response->status() === 409) {
            return;
        }

        $this->ensureSuccessful($response, 'Nie udało się dodać kontaktu do GetResponse');
    }

    /**
     * Tworzy szkic newslettera. Typ "draft" jest konieczny - bez niego GetResponse od razu kolejkuje wysyłkę.
     *
     * @return string id utworzonego szkicu
     */
    public function createDraft(string $listId, string $name, string $subject, string $html): string
    {
        $response = $this->request()->post('newsletters', [
            'type' => 'draft',
            'name' => mb_substr($name, 0, 128),
            'subject' => $subject,
            'fromField' => ['fromFieldId' => $this->fromFieldId()],
            'campaign' => ['campaignId' => $listId],
            'content' => ['html' => $html],
            'sendSettings' => ['selectedCampaigns' => [$listId]],
        ]);

        $this->ensureSuccessful($response, 'Nie udało się utworzyć szkicu w GetResponse');

        return (string) $response->json('newsletterId');
    }

    protected function fromFieldId(): string
    {
        if ($configured = config('services.getresponse.from_field_id')) {
            return $configured;
        }

        return Cache::remember('getresponse_from_field_id', now()->addDay(), function () {
            $response = $this->request()->get('from-fields', ['query' => ['isDefault' => 'true']]);
            $this->ensureSuccessful($response, 'Nie udało się pobrać adresu nadawcy z GetResponse');

            return $response->json('0.fromFieldId')
                ?? throw new RuntimeException('Brak domyślnego adresu nadawcy w GetResponse. Ustaw GETRESPONSE_FROM_FIELD_ID.');
        });
    }

    protected function findListId(string $name): ?string
    {
        $response = $this->request()->get('campaigns', ['query' => ['name' => $name]]);
        $this->ensureSuccessful($response, 'Nie udało się pobrać list z GetResponse');

        // query[name] wyszukuje fragment nazwy - wybieramy dokładne dopasowanie
        return collect($response->json())->firstWhere('name', $name)['campaignId'] ?? null;
    }

    protected function request(): PendingRequest
    {
        if (! $this->isConfigured()) {
            throw new RuntimeException('Brak klucza GETRESPONSE_API_KEY.');
        }

        return Http::baseUrl(rtrim(config('services.getresponse.base_url'), '/').'/')
            ->withHeaders(['X-Auth-Token' => 'api-key '.config('services.getresponse.api_key')])
            ->acceptJson()
            ->asJson()
            ->timeout(30);
    }

    protected function ensureSuccessful(Response $response, string $message): void
    {
        if (! $response->successful()) {
            $this->fail($message, $response);
        }
    }

    protected function fail(string $message, Response $response): never
    {
        throw new RuntimeException($message.' (HTTP '.$response->status().'): '.mb_substr($response->body(), 0, 500));
    }
}
