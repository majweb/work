<?php

namespace Tests\Feature;

use App\Models\Article;
use App\Models\Country;
use App\Models\Firm;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Route;
use Spatie\Permission\Models\Role;
use Tests\TestCase;

/**
 * Artykuł należy do jednego rynku (kraju), jak baner, i pokazuje się tylko na tym rynku.
 */
class ArticlesByMarketTest extends TestCase
{
    use RefreshDatabase;

    private User $firm;

    protected function setUp(): void
    {
        parent::setUp();

        foreach (['pl' => 'pl', 'cz' => 'cs', 'at' => 'de', 'de' => 'de'] as $code => $lang) {
            Country::create(['countryCode' => $code, 'lang' => $lang, 'name' => ['pl' => strtoupper($code)], 'continent' => ['pl' => 'Europa']]);
        }

        Role::firstOrCreate(['name' => 'firm']);
        $this->firm = User::factory()->create();
        $this->firm->assignRole('firm');

        foreach (['pl', 'pl', 'cz', 'de'] as $i => $country) {
            Article::forceCreate([
                'user_id' => $this->firm->id,
                'title' => "Artykuł {$i} {$country}",
                'content' => 'Treść',
                'country_code' => $country,
                'category' => [],
                'active' => 1,
                'active_admin' => 1,
            ]);
        }

        // Trasa testowa: kraje artykułów widocznych dla bieżącego rynku
        Route::middleware('web')->get('/__articles', fn () => Article::active()->lang()->pluck('country_code')->unique()->sort()->values());
    }

    private function articleCountries(string $market, array $session = []): array
    {
        return $this->withSession(['selected_country' => $market] + $session)
            ->get('/__articles', ['Accept-Language' => 'pl-PL'])
            ->json();
    }

    public function test_articles_are_shown_only_on_their_market(): void
    {
        $this->assertSame(['pl'], $this->articleCountries('pl'));
        $this->assertSame(['cz'], $this->articleCountries('cz'));
        // Austria mówi po niemiecku, ale artykuł niemiecki jest przypisany do rynku Niemcy
        $this->assertSame([], $this->articleCountries('at'));
    }

    public function test_portal_language_does_not_change_articles_of_market(): void
    {
        $this->assertSame(['cz'], $this->articleCountries('cz', ['language' => 'en']));
    }

    public function test_article_form_requires_existing_country(): void
    {
        Firm::factory()->create(['user_id' => $this->firm->id]);

        $this->actingAs($this->firm)
            ->post(route('articles.store'), ['country_code' => 'xx'])
            ->assertSessionHasErrors('country_code');

        $this->actingAs($this->firm)
            ->post(route('articles.store'), ['country_code' => 'cz'])
            ->assertSessionDoesntHaveErrors('country_code');
    }
}
