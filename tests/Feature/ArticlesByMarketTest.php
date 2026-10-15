<?php

namespace Tests\Feature;

use App\Models\Article;
use App\Models\Country;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Route;
use Tests\TestCase;

class ArticlesByMarketTest extends TestCase
{
    use RefreshDatabase;

    protected function setUp(): void
    {
        parent::setUp();

        foreach (['pl' => 'pl', 'cz' => 'cs', 'at' => 'de', 'de' => 'de', 'al' => 'sq', 'ch' => '["de","fr"]'] as $code => $lang) {
            Country::create(['countryCode' => $code, 'lang' => $lang, 'name' => ['pl' => $code], 'continent' => ['pl' => 'Europa']]);
        }

        $author = User::factory()->create();
        foreach (['pl', 'pl', 'cs', 'de', 'fr'] as $i => $lang) {
            Article::forceCreate([
                'user_id' => $author->id,
                'title' => "Artykuł {$i} {$lang}",
                'content' => 'Treść',
                'lang' => $lang,
                'category' => [],
                'active' => 1,
                'active_admin' => 1,
            ]);
        }

        // Trasa testowa: języki artykułów widocznych dla bieżącego rynku
        Route::middleware('web')->get('/__articles', fn () => Article::active()->lang()->pluck('lang')->unique()->sort()->values());
    }

    private function articleLanguages(string $market): array
    {
        return $this->withSession(['selected_country' => $market])
            ->get('/__articles', ['Accept-Language' => 'pl-PL'])
            ->json();
    }

    public function test_articles_follow_language_of_selected_market(): void
    {
        $this->assertSame(['cs'], $this->articleLanguages('cz'));
        $this->assertSame(['de'], $this->articleLanguages('at'));
        $this->assertSame(['pl'], $this->articleLanguages('pl'));
        // Kraj wielojęzyczny: artykuły we wszystkich jego językach
        $this->assertSame(['de', 'fr'], $this->articleLanguages('ch'));
    }

    public function test_market_without_articles_in_its_language_shows_none(): void
    {
        // Albania (sq) nie ma artykułów - bez zapasu na inne języki, strona pokazuje komunikat o braku
        $languages = $this->withSession(['selected_country' => 'al'])->get('/__articles', ['Accept-Language' => 'pl-PL'])->json();

        $this->assertSame([], $languages);
    }

    public function test_portal_language_does_not_change_articles_of_market(): void
    {
        $languages = $this->withSession(['selected_country' => 'cz', 'language' => 'en'])
            ->get('/__articles')
            ->json();

        $this->assertSame(['cs'], $languages);
    }
}
