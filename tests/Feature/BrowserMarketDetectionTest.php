<?php

namespace Tests\Feature;

use App\Models\Country;
use App\Services\BrowserMarketDetector;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Tests\TestCase;

class BrowserMarketDetectionTest extends TestCase
{
    use RefreshDatabase;

    protected function setUp(): void
    {
        parent::setUp();

        foreach ([
            'pl' => 'pl', 'sa' => 'ar', 'eg' => 'ar', 'ar' => 'es', 'at' => 'de', 'de' => 'de', 'ch' => 'de',
            'ua' => 'uk', 'us' => 'en', 'gb' => 'en', 'rs' => 'sr', 'sr' => 'nl', 'et' => 'am', 'ee' => 'et',
            'cy' => '["el","tr"]', 'gr' => 'el', 'it' => 'it',
        ] as $code => $lang) {
            Country::create(['countryCode' => $code, 'lang' => $lang, 'name' => ['pl' => $code], 'continent' => ['pl' => 'Europa']]);
        }
    }

    private function detect(?string $acceptLanguage): string
    {
        $request = Request::create('/', 'GET');
        // Request::create dokleja domyślne "en-us" - ustawiamy nagłówek jawnie albo go usuwamy
        $acceptLanguage
            ? $request->headers->set('Accept-Language', $acceptLanguage)
            : $request->headers->remove('Accept-Language');

        return app(BrowserMarketDetector::class)->detect($request);
    }

    public function test_region_from_browser_decides_market(): void
    {
        $this->assertSame('sa', $this->detect('ar-SA'));
        $this->assertSame('at', $this->detect('de-AT'));
        $this->assertSame('us', $this->detect('en-US,en;q=0.9'));
        $this->assertSame('ua', $this->detect('uk-UA'));
    }

    public function test_language_without_region_maps_to_country_of_that_language(): void
    {
        // Pułapki: kod języka = kod innego kraju
        $this->assertSame('sa', $this->detect('ar'));   // nie Argentyna
        $this->assertSame('rs', $this->detect('sr'));   // nie Surinam
        $this->assertSame('ee', $this->detect('et'));   // estoński, nie Etiopia

        $this->assertSame('ua', $this->detect('uk'));
        $this->assertSame('gr', $this->detect('el'));
        $this->assertSame('de', $this->detect('de'));
        $this->assertSame('gb', $this->detect('en'));
        $this->assertSame('it', $this->detect('it'));
        $this->assertSame('pl', $this->detect('pl-PL,pl;q=0.9,en;q=0.8'));
    }

    public function test_unknown_region_falls_back_to_language_and_then_default(): void
    {
        $this->assertSame('gb', $this->detect('en-XX'));
        $this->assertSame('pl', $this->detect('xx'));
        $this->assertSame('pl', $this->detect(null));
        // Drugi język z listy przeglądarki, gdy pierwszego nie znamy
        $this->assertSame('de', $this->detect('xx,de;q=0.8'));
    }

    public function test_first_visit_sets_detected_market_without_changing_language(): void
    {
        Route::middleware('web')->get('/__locale', fn () => app()->getLocale());

        $locale = $this->get('/__locale', ['Accept-Language' => 'ar-SA,ar;q=0.9'])->getContent();

        $this->assertSame('ar', $locale);
        $this->assertSame('sa', session('selected_country'));
    }
}
