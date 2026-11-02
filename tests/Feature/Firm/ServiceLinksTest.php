<?php

namespace Tests\Feature\Firm;

use App\Http\Resources\FrontUserResource;
use App\Models\Firm;
use App\Models\User;
use App\Rules\ServiceLink;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Spatie\Permission\Models\Role;
use Tests\TestCase;

/**
 * Linki do opinii i sociali na wizytówce firmy tylko z właściwych serwisów.
 */
class ServiceLinksTest extends TestCase
{
    use RefreshDatabase;

    private User $firm;

    protected function setUp(): void
    {
        parent::setUp();

        Role::findOrCreate('firm', 'web');
        $this->firm = User::factory()->create();
        $this->firm->assignRole('firm');
        Firm::factory()->create(['user_id' => $this->firm->id]);
    }

    private function save(array $links)
    {
        return $this->actingAs($this->firm)->put(route('firm.update.about.form'), array_merge([
            'www' => 'https://firma.pl',
        ], $links));
    }

    public function test_links_from_proper_services_are_saved(): void
    {
        $google = 'https://www.google.com/maps/place/Firma/@50.1,18.5,17z/data='.str_repeat('x', 300);

        $this->save([
            'opinion_google' => $google,
            'opinion_trust' => 'https://pl.trustpilot.com/review/firma.pl',
            'opinion_facebook' => 'https://m.facebook.com/firma/reviews',
        ])->assertSessionHasNoErrors();

        $firm = $this->firm->firm->fresh();
        $this->assertSame($google, $firm->opinion_google);
        $this->assertSame('https://pl.trustpilot.com/review/firma.pl', $firm->opinion_trust);
        $this->assertSame('https://m.facebook.com/firma/reviews', $firm->opinion_facebook);
    }

    public function test_links_to_other_sites_are_rejected(): void
    {
        $this->save([
            'opinion_google' => 'https://konkurencja.pl/opinie',
            'opinion_trust' => 'https://www.google.com/maps/place/Firma',
            'opinion_facebook' => 'https://www.facebook.com.evil.pl/firma',
        ])->assertSessionHasErrors([
            'opinion_google' => __('serviceLinks.invalid_google'),
            'opinion_trust' => __('serviceLinks.invalid_trustpilot'),
            'opinion_facebook' => __('serviceLinks.invalid_facebook'),
        ]);
    }

    public function test_domain_matching(): void
    {
        foreach ([
            'https://www.google.pl/maps/place/Firma', 'https://maps.app.goo.gl/AbC123', 'https://g.page/r/abc/review',
            'https://www.google.co.uk/search?q=firma', 'https://share.google/abc',
        ] as $url) {
            $this->assertTrue(ServiceLink::matches('google', $url), $url);
        }
        foreach (['https://www.google.com@evil.pl/', 'https://google.evil.pl/', 'https://notgoogle.com/', 'ftp://www.google.com/'] as $url) {
            $this->assertFalse(ServiceLink::matches('google', $url), $url);
        }
        $this->assertTrue(ServiceLink::matches('trustpilot', 'https://www.trustpilot.com/review/firma.pl'));
        $this->assertFalse(ServiceLink::matches('trustpilot', 'https://trustpilot.com.pl/review'));
        $this->assertTrue(ServiceLink::matches('facebook', 'https://fb.com/firma'));
        $this->assertFalse(ServiceLink::matches('facebook', 'https://fakefacebook.com/firma'));
    }

    public function test_social_links_must_match_their_service(): void
    {
        $this->save([
            'social_facebook' => 'https://www.facebook.com/firma',
            'social_x' => 'https://twitter.com/firma',
            'social_instagram' => 'https://www.instagram.com/firma',
            'social_linkedin' => 'https://pl.linkedin.com/company/firma',
            'social_tiktok' => 'https://www.tiktok.com/@firma',
        ])->assertSessionHasNoErrors();

        $this->save([
            'social_facebook' => 'https://firma.pl',
            'social_google' => 'https://bing.com/firma',
            'social_x' => 'https://www.facebook.com/firma',
            'social_instagram' => 'https://instagram.evil.pl/firma',
            'social_linkedin' => 'https://firma.pl/linkedin',
            'social_tiktok' => 'https://tiktok.firma.pl',
        ])->assertSessionHasErrors([
            'social_facebook' => __('serviceLinks.invalid_facebook'),
            'social_google' => __('serviceLinks.invalid_google'),
            'social_x' => __('serviceLinks.invalid_x'),
            'social_instagram' => __('serviceLinks.invalid_instagram'),
            'social_linkedin' => __('serviceLinks.invalid_linkedin'),
            'social_tiktok' => __('serviceLinks.invalid_tiktok'),
        ]);

        $this->assertSame('https://twitter.com/firma', $this->firm->firm->fresh()->social_x);
    }

    public function test_old_links_to_other_sites_are_hidden_on_public_profile(): void
    {
        $this->firm->firm->update([
            'opinion_google' => 'https://konkurencja.pl',
            'opinion_trust' => 'https://www.trustpilot.com/review/firma.pl',
            'opinion_facebook' => null,
            'social_instagram' => 'https://konkurencja.pl/instagram',
            'social_linkedin' => 'https://www.linkedin.com/company/firma',
        ]);

        $data = (new FrontUserResource($this->firm->fresh('firm')))->resolve();

        $this->assertNull($data['opinion_google']);
        $this->assertSame('https://www.trustpilot.com/review/firma.pl', $data['opinion_trust']);
        $this->assertNull($data['opinion_facebook']);
        $this->assertNull($data['social_instagram']);
        $this->assertSame('https://www.linkedin.com/company/firma', $data['social_linkedin']);
    }
}
