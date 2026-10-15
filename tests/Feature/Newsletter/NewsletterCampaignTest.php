<?php

namespace Tests\Feature\Newsletter;

use App\Models\Country;
use App\Models\Newsletter;
use App\Models\NewsletterCampaign;
use App\Models\NewsletterCampaignLocale;
use App\Models\User;
use App\Services\Newsletter\NewsletterRenderer;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Http\Client\Request;
use Illuminate\Support\Facades\Http;
use OpenAI\Laravel\Facades\OpenAI;
use OpenAI\Responses\Chat\CreateResponse;
use Spatie\Permission\Models\Role;
use Tests\Concerns\CreatesProjects;
use Tests\TestCase;

class NewsletterCampaignTest extends TestCase
{
    use CreatesProjects;
    use RefreshDatabase;

    private User $admin;

    protected function setUp(): void
    {
        parent::setUp();
        foreach (['admin', 'admin-sub', 'firm'] as $role) {
            Role::firstOrCreate(['name' => $role]);
        }
        $this->admin = User::factory()->create();
        $this->admin->assignRole('admin');

        config([
            'services.getresponse.api_key' => 'test-key',
            'services.getresponse.base_url' => 'https://gr.test/v3',
            'services.getresponse.from_field_id' => 'FROM1',
            'services.getresponse.list_prefix' => 'w4y_',
        ]);
    }

    private function fakeGetResponse(): void
    {
        $lists = 0;
        Http::fake([
            'gr.test/v3/campaigns*' => function (Request $request) use (&$lists) {
                if ($request->method() === 'GET') {
                    return Http::response([]);
                }

                // POST campaigns/{id} - zmiana ustawień istniejącej listy
                return str_ends_with(parse_url($request->url(), PHP_URL_PATH), '/campaigns')
                    ? Http::response(['campaignId' => 'LIST'.(++$lists), 'name' => $request['name']], 201)
                    : Http::response(['campaignId' => basename(parse_url($request->url(), PHP_URL_PATH))]);
            },
            'gr.test/v3/contacts' => Http::response(null, 202),
            'gr.test/v3/newsletters' => Http::response(['newsletterId' => 'NL1'], 201),
        ]);
    }

    private function fakeTranslation(array $overrides = []): void
    {
        $translated = $overrides + [
            'subject' => 'Neue Jobs in Deutschland',
            'title' => 'Neue Jobs',
            'content' => '<p>Hallo!</p>',
            'cta_text' => 'Alle Angebote ansehen',
            'offers_heading' => 'Empfohlene Angebote',
            'offer_button' => 'Ansehen',
            'footer_reason' => 'Sie erhalten diese Nachricht, weil Sie den Newsletter abonniert haben.',
            'unsubscribe_text' => 'Abmelden',
        ];

        OpenAI::fake([CreateResponse::fake(['choices' => [['message' => ['content' => json_encode($translated)]]]])]);
    }

    private function campaignPayload(array $overrides = []): array
    {
        return $overrides + [
            'subject' => 'Nowe oferty pracy w Niemczech',
            'title' => 'Nowe oferty',
            'content' => '<p>Dzień dobry!</p>',
            'cta_text' => 'Zobacz wszystkie oferty',
            'cta_url' => 'https://work4you.global/projects',
        ];
    }

    public function test_subscribing_stores_language_and_consent(): void
    {
        $this->post(route('newsletter.store'), ['email' => 'jan@example.com', 'agreements' => []])->assertRedirect();

        $subscriber = Newsletter::where('email', 'jan@example.com')->firstOrFail();
        $this->assertContains($subscriber->locale, config('langsShorts'));
        $this->assertNotNull($subscriber->ip_address);
        $this->assertArrayHasKey('accepted_at', $subscriber->consents);
    }

    public function test_language_for_existing_subscribers_comes_from_country(): void
    {
        Country::create(['lang' => 'cs', 'countryCode' => 'cz', 'name' => ['pl' => 'Czechy'], 'continent' => ['pl' => 'Europa']]);
        Country::create(['lang' => '["el","tr"]', 'countryCode' => 'cy', 'name' => ['pl' => 'Cypr'], 'continent' => ['pl' => 'Europa']]);

        $this->assertSame('cs', Newsletter::localeForCountryCode('cz'));
        $this->assertSame('el', Newsletter::localeForCountryCode('cy'));
        $this->assertSame('de', Newsletter::localeForCountryCode('de'));
        $this->assertSame('en', Newsletter::localeForCountryCode('xx'));
    }

    public function test_sync_command_adds_new_subscribers_to_language_lists(): void
    {
        $this->fakeGetResponse();
        Newsletter::create(['email' => 'a@example.com', 'country_code' => 'pl', 'locale' => 'pl']);
        Newsletter::create(['email' => 'b@example.com', 'country_code' => 'de', 'locale' => 'de']);

        $this->artisan('newsletter:sync-getresponse')->assertSuccessful();

        $this->assertSame(0, Newsletter::whereNull('getresponse_synced_at')->count());
        Http::assertSent(fn (Request $r) => $r->url() === 'https://gr.test/v3/campaigns' && $r->method() === 'POST' && $r['name'] === 'w4y_de'
            && $r['optinTypes']['api'] === 'single');
        // Lista (także istniejąca) ma zapis przez API bez potwierdzania mailem
        Http::assertSent(fn (Request $r) => preg_match('#/campaigns/LIST\d+$#', $r->url()) && $r['optinTypes'] === ['api' => 'single']);
        Http::assertSent(fn (Request $r) => str_ends_with($r->url(), '/contacts') && $r['email'] === 'b@example.com' && $r->hasHeader('X-Auth-Token', 'api-key test-key'));
    }

    public function test_campaign_creates_translated_drafts_only(): void
    {
        $this->fakeGetResponse();
        $this->fakeTranslation();
        Newsletter::create(['email' => 'a@example.com', 'country_code' => 'pl', 'locale' => 'pl']);
        Newsletter::create(['email' => 'b@example.com', 'country_code' => 'de', 'locale' => 'de']);

        $this->actingAs($this->admin)->post(route('admin.newsletter-campaigns.store'), $this->campaignPayload())->assertRedirect();

        $campaign = NewsletterCampaign::firstOrFail();
        $this->assertSame(
            ['de' => NewsletterCampaignLocale::STATUS_DRAFT_CREATED, 'pl' => NewsletterCampaignLocale::STATUS_DRAFT_CREATED],
            $campaign->locales()->orderBy('locale')->pluck('status', 'locale')->all()
        );

        $drafts = Http::recorded(fn (Request $r) => str_ends_with($r->url(), '/newsletters'));
        $this->assertCount(2, $drafts);
        foreach ($drafts as [$request]) {
            // Każdy newsletter musi być szkicem - inaczej GetResponse od razu by go wysłał
            $this->assertSame('draft', $request['type']);
            $this->assertStringContainsString('href="[[remove]]"', $request['content']['html']);
            $this->assertStringNotContainsString('{{', $request['content']['html']);
        }

        $german = collect($drafts)->first(fn ($pair) => $pair[0]['subject'] === 'Neue Jobs in Deutschland');
        $this->assertNotNull($german, 'Niemiecki szkic powinien mieć przetłumaczony temat');
        $this->assertStringContainsString('lang="de"', $german[0]['content']['html']);

        // Polski nie jest tłumaczony - jedno zapytanie do OpenAI (dla niemieckiego)
        OpenAI::assertSent(\OpenAI\Resources\Chat::class, fn ($method, $params) => str_contains($params['messages'][0]['content'], 'German'));
    }

    public function test_failed_translation_is_reported_and_can_be_retried(): void
    {
        $this->fakeGetResponse();
        // Odpowiedź bez wymaganych pól = błąd tłumaczenia
        OpenAI::fake([CreateResponse::fake(['choices' => [['message' => ['content' => '{"subject":"tylko temat"}']]]])]);
        Newsletter::create(['email' => 'b@example.com', 'country_code' => 'de', 'locale' => 'de']);

        $this->actingAs($this->admin)->post(route('admin.newsletter-campaigns.store'), $this->campaignPayload());

        $locale = NewsletterCampaignLocale::firstOrFail();
        $this->assertSame(NewsletterCampaignLocale::STATUS_FAILED, $locale->status);
        $this->assertStringContainsString('brak pól', $locale->error);

        $this->fakeTranslation();
        $this->actingAs($this->admin)->post(route('admin.newsletter-campaigns.retry', [$locale->newsletter_campaign_id, $locale->id]));

        $this->assertSame(NewsletterCampaignLocale::STATUS_DRAFT_CREATED, $locale->fresh()->status);
    }

    public function test_campaign_requires_getresponse_key(): void
    {
        config(['services.getresponse.api_key' => null]);
        Newsletter::create(['email' => 'a@example.com', 'country_code' => 'pl', 'locale' => 'pl']);

        $this->actingAs($this->admin)
            ->post(route('admin.newsletter-campaigns.store'), $this->campaignPayload())
            ->assertSessionHasErrors('subject');

        $this->assertSame(0, NewsletterCampaign::count());
    }

    public function test_access_for_admins_and_sub_admins_only(): void
    {
        $subAdmin = User::factory()->create();
        $subAdmin->syncRoles(['admin', 'admin-sub']);
        $firm = User::factory()->create();
        $firm->assignRole('firm');

        $this->actingAs($subAdmin)->get(route('admin.newsletter-campaigns.index'))->assertOk();
        $this->actingAs($firm)->get(route('admin.newsletter-campaigns.index'))->assertForbidden();
    }

    public function test_admin_pages_and_preview_render(): void
    {
        $this->fakeGetResponse();
        $this->fakeTranslation();
        Newsletter::create(['email' => 'a@example.com', 'country_code' => 'pl', 'locale' => 'pl']);
        $this->actingAs($this->admin)->post(route('admin.newsletter-campaigns.store'), $this->campaignPayload());
        $campaign = NewsletterCampaign::firstOrFail();
        $locale = $campaign->locales()->firstOrFail();

        $this->actingAs($this->admin)->get(route('admin.newsletter-campaigns.index'))
            ->assertInertia(fn ($page) => $page->component('Admin/NewsletterCampaigns/Index')->has('campaigns.data', 1)->where('audience.0.locale', 'pl'));
        $this->actingAs($this->admin)->get(route('admin.newsletter-campaigns.create'))
            ->assertInertia(fn ($page) => $page->component('Admin/NewsletterCampaigns/Create')->where('getResponseConfigured', true));
        $this->actingAs($this->admin)->get(route('admin.newsletter-campaigns.show', $campaign))
            ->assertInertia(fn ($page) => $page->component('Admin/NewsletterCampaigns/Show')->where('languageNames.pl', 'Polski'));

        $this->actingAs($this->admin)->post(route('admin.newsletter-campaigns.preview'), ['title' => 'Podgląd testowy'])
            ->assertOk()->assertSee('Podgląd testowy', false);
        $this->actingAs($this->admin)->get(route('admin.newsletter-campaigns.locale-preview', [$campaign, $locale]))
            ->assertOk()->assertSee('Nowe oferty pracy w Niemczech', false);
    }

    public function test_renderer_handles_offers_rtl_and_missing_button(): void
    {
        $project = $this->createProject($this->admin, [
            'position' => ['name' => 'Magazynier', 'allTranslations' => ['title' => ['pl' => 'Magazynier', 'ar' => 'أمين مستودع']]],
            'countryWork' => ['name' => 'Niemcy', 'countryCode' => 'de', 'allTranslations' => ['pl' => 'Niemcy', 'ar' => 'ألمانيا']],
            'cityWork' => 'Monachium',
            'basicSalaryFrom' => 2800,
            'currency' => ['name' => 'EUR'],
            'salary_type' => 'brutto',
        ]);
        $campaign = new NewsletterCampaign($this->campaignPayload(['cta_text' => null, 'cta_url' => null, 'offer_ids' => [$project->id]]));
        $renderer = app(NewsletterRenderer::class);

        $html = $renderer->render($campaign, 'ar', $renderer->sourceTexts($campaign));

        $this->assertStringContainsString('dir="rtl"', $html);
        $this->assertStringContainsString('أمين مستودع', $html);
        $this->assertStringContainsString('2 800 EUR', $html);
        $this->assertStringNotContainsString('<!-- Główny przycisk -->', $html);
        $this->assertStringNotContainsString('{{', $html);
    }
}
