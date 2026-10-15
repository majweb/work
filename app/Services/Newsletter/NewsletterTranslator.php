<?php

namespace App\Services\Newsletter;

use App\Lang\Lang;
use OpenAI\Laravel\Facades\OpenAI;
use RuntimeException;

/**
 * Tłumaczy teksty newslettera z polskiego przez OpenAI. Wszystkie pola jednej wersji językowej
 * idą w jednym zapytaniu jako JSON, a odpowiedź musi mieć dokładnie te same klucze.
 */
class NewsletterTranslator
{
    /**
     * @param  array<string, string>  $texts  klucz => tekst po polsku (pole "content" może zawierać HTML)
     * @return array<string, string>
     */
    public function translate(array $texts, string $locale): array
    {
        if ($locale === 'pl') {
            return $texts;
        }

        $language = $this->languageName($locale);

        $response = OpenAI::chat()->create([
            'model' => config('services.newsletter.translation_model'),
            'response_format' => ['type' => 'json_object'],
            'max_completion_tokens' => 16000,
            'messages' => [
                [
                    'role' => 'system',
                    'content' => "You translate the newsletter of Work4you.global, an international job portal, from Polish into {$language} (language code: {$locale}).\n"
                        ."You receive a JSON object. Return a JSON object with exactly the same keys, where every value is translated into {$language}.\n"
                        .'Keep all HTML tags, attributes and URLs exactly as they are and translate only the visible text. '
                        .'Leave placeholders such as [[remove]] or {{...}} untouched. Keep numbers, salaries, currencies and company names unchanged. '
                        .'Use natural, friendly language suitable for job seekers. Do not add or remove information.',
                ],
                ['role' => 'user', 'content' => json_encode($texts, JSON_UNESCAPED_UNICODE)],
            ],
        ]);

        $translated = json_decode((string) $response->choices[0]->message->content, true);

        if (! is_array($translated)) {
            throw new RuntimeException("Tłumaczenie na {$locale}: odpowiedź nie jest poprawnym JSON-em.");
        }

        $missing = array_diff(array_keys($texts), array_keys($translated));
        if ($missing) {
            throw new RuntimeException("Tłumaczenie na {$locale}: brak pól ".implode(', ', $missing).'.');
        }

        return array_map(fn ($value) => (string) $value, array_intersect_key($translated, $texts));
    }

    /**
     * Angielska nazwa języka dla modelu (np. "Czech"), z enumu języków portalu.
     */
    protected function languageName(string $locale): string
    {
        $lang = Lang::tryFrom($locale);
        if (! $lang) {
            return $locale;
        }

        $previous = app()->getLocale();
        app()->setLocale('en');
        $name = $lang->label();
        app()->setLocale($previous);

        return $name;
    }
}
