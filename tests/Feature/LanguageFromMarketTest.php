<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Route;
use Tests\TestCase;

/**
 * Język portalu ustawia tylko przełącznik języka albo przeglądarka - wybór rynku go nie zmienia.
 */
class LanguageFromMarketTest extends TestCase
{
    use RefreshDatabase;

    protected function setUp(): void
    {
        parent::setUp();

        // Trasa testowa: zwraca język strony ustawiony przez SetLanguage (grupa "web")
        Route::middleware('web')->get('/__locale', fn () => app()->getLocale());
    }

    private function locale(array $session = [], ?string $browser = null): string
    {
        $headers = $browser ? ['Accept-Language' => $browser] : [];

        return $this->withSession($session)->get('/__locale', $headers)->getContent();
    }

    public function test_changing_market_does_not_change_portal_language(): void
    {
        // Włochy (it) wcześniej przełączały na włoski, Albania (al) zostawała po polsku
        foreach (['it', 'al', 'cz', 'de'] as $market) {
            $this->flushSession();
            $this->post(route('front.country.store'), ['country_code' => $market], ['Accept-Language' => 'pl-PL'])->assertRedirect();

            $this->assertSame($market, session('selected_country'));
            $this->assertSame('pl', $this->get('/__locale', ['Accept-Language' => 'pl-PL'])->getContent(), "Rynek {$market} zmienił język");
        }
    }

    public function test_browser_language_is_used_when_language_was_not_chosen(): void
    {
        // Arabski, a nie hiszpański - "ar" to też kod Argentyny
        $this->assertSame('ar', $this->locale([], 'ar-SA'));
        // Ukraiński - wcześniej przeglądarka "uk" zamieniała się na kraj "ua" i portal był po polsku
        $this->flushSession();
        $this->assertSame('uk', $this->locale([], 'uk-UA'));
        $this->assertSame('ua', session('selected_country'));
    }

    public function test_language_chosen_manually_is_kept_regardless_of_market(): void
    {
        $this->assertSame('en', $this->locale(['language' => 'en', 'selected_country' => 'it'], 'pl-PL'));
    }

    public function test_unsupported_browser_language_falls_back_to_default(): void
    {
        $this->assertSame(config('app.locale'), $this->locale([], 'xx-XX'));
    }
}
