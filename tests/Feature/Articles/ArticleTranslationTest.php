<?php

namespace Tests\Feature\Articles;

use App\Models\Article;
use App\Models\ArticleTranslation;
use App\Models\Country;
use App\Models\User;
use App\Services\Articles\ArticleTranslationService;
use Illuminate\Foundation\Testing\RefreshDatabase;
use OpenAI\Laravel\Facades\OpenAI;
use OpenAI\Responses\Chat\CreateResponse;
use Spatie\Permission\Models\Role;
use Tests\TestCase;

/**
 * Tłumaczenie artykułów admina na rynki: jedna wersja na język, szkice, publikacja, rynki wersji.
 */
class ArticleTranslationTest extends TestCase
{
    use RefreshDatabase;

    private User $admin;

    private Article $source;

    protected function setUp(): void
    {
        parent::setUp();

        foreach (['pl' => 'pl', 'de' => 'de', 'at' => 'de', 'ch' => 'de', 'us' => 'en', 'gb' => 'en', 'th' => 'th', 'cy' => '["el","tr"]'] as $code => $lang) {
            Country::create(['countryCode' => $code, 'lang' => $lang, 'name' => ['pl' => strtoupper($code)], 'continent' => ['pl' => 'Europa']]);
        }

        Role::firstOrCreate(['name' => 'admin']);
        $this->admin = User::factory()->create();
        $this->admin->assignRole('admin');

        $this->source = Article::forceCreate([
            'user_id' => $this->admin->id,
            'title' => 'Pierwszy dzień w nowej pracy',
            'content' => '<p>Wstęp</p><h2>Przed pracą</h2><p>Sprawdź dojazd.</p><h2>Pierwszy dzień</h2><p>Zadawaj pytania.</p>',
            'short_description' => 'Jak się przygotować',
            'meta_title' => 'Pierwszy dzień w pracy',
            'meta_description' => 'Poradnik',
            'meta_keywords' => 'pierwszy dzień',
            'alt' => 'Zdjęcie',
            'country_code' => 'pl',
            'category' => ['value' => 1, 'name' => 'Poradniki'],
            'active' => 1,
            'active_admin' => 1,
        ]);
    }

    /**
     * Odpowiedź OpenAI z tłumaczeniem podanych pól (wartość = "[język] pole").
     */
    private function fakeTranslations(array $locales, array $keys = ['title', 'short_description', 'meta_title', 'meta_description', 'meta_keywords', 'alt', 'content']): void
    {
        OpenAI::fake(array_map(fn ($locale) => CreateResponse::fake([
            'choices' => [['message' => ['content' => json_encode(array_combine($keys, array_map(fn ($key) => $key === 'content' ? "<p>[{$locale}] treść</p>" : "[{$locale}] {$key}", $keys)))]]],
            'usage' => ['prompt_tokens' => 2000, 'completion_tokens' => 2500, 'total_tokens' => 4500],
        ]), $locales));
    }

    private function service(): ArticleTranslationService
    {
        return app(ArticleTranslationService::class);
    }

    public function test_markets_are_grouped_by_language_without_source_market(): void
    {
        $groups = $this->service()->groupByLocale($this->source, ['PL', 'de', 'at', 'us', 'cy']);

        $this->assertSame(['de' => ['de', 'at'], 'en' => ['us'], 'el' => ['cy']], $groups->all());
    }

    public function test_country_of_source_language_gets_the_original_without_translation(): void
    {
        // Oryginał po polsku z rynkiem głównym w Austrii - Polska dostaje oryginał, Niemcy tłumaczenie
        $this->source->update(['country_code' => 'at']);
        $this->fakeTranslations(['de']);

        $result = $this->service()->addMarkets($this->source, ['pl', 'de']);

        $this->assertSame(['languages' => 1, 'queued' => 1], $result);
        $this->assertEqualsCanonicalizing(['at', 'pl'], $this->source->fresh()->countries);
        session(['selected_country' => 'pl']);
        $this->assertTrue(Article::active()->lang()->whereKey($this->source->id)->exists());
    }

    public function test_one_draft_version_per_language_assigned_to_all_its_markets(): void
    {
        $this->fakeTranslations(['de', 'en']);

        $result = $this->service()->addMarkets($this->source, ['de', 'at', 'ch', 'us']);

        $this->assertSame(['languages' => 2, 'queued' => 2], $result);
        $german = Article::where('source_article_id', $this->source->id)->where('locale', 'de')->firstOrFail();
        $this->assertSame('[de] title', $german->title);
        $this->assertSame('<p>[de] treść</p>', $german->content);
        $this->assertEquals($this->source->category, $german->category);
        $this->assertFalse($german->active, 'Wersja jest szkicem');
        $this->assertEqualsCanonicalizing(['de', 'at', 'ch'], $german->countries);
        $this->assertSame('de', $german->country_code);
        $this->assertSame(2, Article::where('source_article_id', $this->source->id)->count());

        $translation = ArticleTranslation::where('locale', 'de')->firstOrFail();
        $this->assertSame(ArticleTranslation::STATUS_DONE, $translation->status);
        $this->assertSame(2000, $translation->prompt_tokens);
        $this->assertSame(0.029, $translation->cost_usd);
    }

    public function test_published_version_is_shown_on_each_of_its_markets(): void
    {
        $this->fakeTranslations(['de']);
        $this->service()->addMarkets($this->source, ['de', 'at']);
        $german = Article::where('locale', 'de')->firstOrFail();

        // Szkic nie jest widoczny na rynku
        $this->assertSame(0, $this->articlesOn('at'));

        $this->service()->publishAll($this->source);
        $this->assertTrue($german->fresh()->active);
        $this->assertSame(1, $this->articlesOn('at'));
        $this->assertSame(1, $this->articlesOn('de'));
        $this->assertSame(0, $this->articlesOn('ch'));
    }

    private function articlesOn(string $market): int
    {
        session(['selected_country' => $market]);

        return Article::active()->lang()->where('source_article_id', $this->source->id)->count();
    }

    public function test_new_market_of_translated_language_is_added_without_new_translation(): void
    {
        $this->fakeTranslations(['de']);
        $this->service()->addMarkets($this->source, ['de']);

        // Bez nowych odpowiedzi OpenAI - kolejne wywołanie zakończyłoby się błędem
        OpenAI::fake([]);
        $result = $this->service()->addMarkets($this->source, ['ch']);

        $this->assertSame(0, $result['queued']);
        $this->assertEqualsCanonicalizing(['de', 'ch'], Article::where('locale', 'de')->firstOrFail()->countries);
    }

    public function test_rare_scripts_are_translated_section_by_section(): void
    {
        // Thai: najpierw pola artykułu, potem każda z 3 sekcji treści osobno
        OpenAI::fake([
            CreateResponse::fake(['choices' => [['message' => ['content' => json_encode([
                'title' => 'ไทย', 'short_description' => 'ไทย', 'meta_title' => 'ไทย', 'meta_description' => 'ไทย', 'meta_keywords' => 'ไทย', 'alt' => 'ไทย',
            ])]]]]),
            ...array_map(fn ($i) => CreateResponse::fake(['choices' => [['message' => ['content' => json_encode(['content' => "<p>ส่วน {$i}</p>"])]]]]), [1, 2, 3]),
        ]);

        $this->service()->addMarkets($this->source, ['th']);

        $thai = Article::where('locale', 'th')->firstOrFail();
        $this->assertSame('<p>ส่วน 1</p><p>ส่วน 2</p><p>ส่วน 3</p>', $thai->content);
        // Adres z pisma bez łacinki: artykul-{oryginał}-{język}
        $this->assertSame("artykul-{$this->source->id}-th", $thai->slug);
    }

    public function test_failed_translation_can_be_retried(): void
    {
        OpenAI::fake([CreateResponse::fake(['choices' => [['message' => ['content' => '{"title":"tylko tytuł"}']]]])]);
        $this->service()->addMarkets($this->source, ['de']);

        $translation = ArticleTranslation::firstOrFail();
        $this->assertSame(ArticleTranslation::STATUS_FAILED, $translation->status);
        $this->assertStringContainsString('brak pól', $translation->error);
        $this->assertSame(0, Article::where('source_article_id', $this->source->id)->count());

        $this->fakeTranslations(['de']);
        $this->actingAs($this->admin)->post(route('admin.articles-accepts.translations.retry', [$this->source->id, $translation->id]))->assertRedirect();

        $this->assertSame(ArticleTranslation::STATUS_DONE, $translation->fresh()->status);
    }

    public function test_draft_is_hidden_publicly_but_admin_can_preview(): void
    {
        $this->fakeTranslations(['de']);
        $this->service()->addMarkets($this->source, ['de']);
        $german = Article::where('locale', 'de')->firstOrFail();

        $this->get(route('front.articles.single', $german->slug))->assertNotFound();
        $this->actingAs($this->admin)->get(route('front.articles.single', $german->slug))->assertOk();

        $this->service()->publishAll($this->source);
        auth()->logout();
        $this->get(route('front.articles.single', $german->slug))
            ->assertOk()
            ->assertInertia(fn ($page) => $page->has('alternates', 2));
    }

    public function test_manual_edit_is_protected_from_retranslation(): void
    {
        $this->fakeTranslations(['de', 'en']);
        $this->service()->addMarkets($this->source, ['de', 'us']);
        $german = Article::where('locale', 'de')->firstOrFail();

        $this->actingAs($this->admin)->put(route('admin.articles-accepts.update', $german->id), [
            'title' => 'Poprawiony tytuł',
            'content' => '<p>Poprawiona treść</p>',
            'category' => ['value' => 1],
            'short_description' => 'Opis',
            'meta_keywords' => 'frazy',
            'active' => false,
        ])->assertRedirect(route('admin.articles-accepts.show', $this->source->id));

        $this->assertSame('Poprawiony tytuł', $german->fresh()->title);
        $this->assertTrue(ArticleTranslation::where('locale', 'de')->first()->edited_manually);

        // Ponowne tłumaczenie bez potwierdzenia pomija poprawioną wersję
        $this->fakeTranslations(['en']);
        $this->assertSame(1, $this->service()->retranslate($this->source->fresh()));
        $this->assertSame('Poprawiony tytuł', $german->fresh()->title);
    }

    public function test_admin_list_shows_only_originals_and_markets_can_be_removed(): void
    {
        $this->fakeTranslations(['de']);
        $this->service()->addMarkets($this->source, ['de', 'at']);
        $translation = ArticleTranslation::firstOrFail();

        $this->actingAs($this->admin)->get(route('admin.articles-accepts.index', ['all' => 'true']))
            ->assertOk()
            ->assertInertia(fn ($page) => $page->has('articles.data', 1)->where('articles.data.0.translations_done_count', 1));

        $this->actingAs($this->admin)->delete(route('admin.articles-accepts.translations.remove-market', [$this->source->id, $translation->id, 'de']));
        $this->assertSame(['at'], $translation->fresh()->countries);
        // Usunięty rynek główny - głównym zostaje kolejny
        $version = Article::where('source_article_id', $this->source->id)->firstOrFail();
        $this->assertSame(['at'], $version->countries);
        $this->assertSame('at', $version->country_code);

        // Ostatni rynek - wersja i tłumaczenie znikają
        $this->actingAs($this->admin)->delete(route('admin.articles-accepts.translations.remove-market', [$this->source->id, $translation->id, 'at']));
        $this->assertSame(0, ArticleTranslation::count());
        $this->assertSame(0, Article::where('source_article_id', $this->source->id)->count());
    }

    public function test_only_admin_manages_translations(): void
    {
        $user = User::factory()->create();
        $this->fakeTranslations(['de']);
        $this->service()->addMarkets($this->source, ['de']);

        $this->actingAs($user)->post(route('admin.articles-accepts.translations.publish-all', $this->source->id))->assertForbidden();
        $this->assertFalse(Article::where('locale', 'de')->first()->active);
    }
}
