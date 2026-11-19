<?php

namespace Tests\Feature\Newsletter;

use App\Actions\Fortify\CreateNewUser;
use App\Jobs\SyncNewsletterSubscriber;
use App\Models\Agreement;
use App\Models\Newsletter;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Notification;
use Illuminate\Support\Facades\Queue;
use Spatie\Permission\Models\Role;
use Tests\TestCase;

/**
 * Zgoda marketingowa przy rejestracji (oznaczona w adminie "Zapisuje do newslettera") zapisuje
 * do GetResponse tak jak formularz w stopce.
 */
class RegistrationNewsletterTest extends TestCase
{
    use RefreshDatabase;

    private Agreement $marketing;

    private Agreement $marketingEmail;

    private Agreement $terms;

    protected function setUp(): void
    {
        parent::setUp();

        foreach (['firm', 'recruit', 'worker', 'admin'] as $role) {
            Role::findOrCreate($role, 'web');
        }
        config(['premium.welcome_points' => 0, 'services.crm.url' => null]);
        Notification::fake();
        Queue::fake();

        $agreement = fn (array $attributes) => Agreement::create(array_merge([
            'type' => 'worker_registration', 'is_active' => true, 'is_required' => false,
            'title' => ['pl' => 'Zgoda'], 'description' => ['pl' => 'Opis'],
        ], $attributes));

        $this->terms = $agreement(['is_required' => true, 'title' => ['pl' => 'Regulamin']]);
        // Rodzic "Chcę otrzymywać informacje marketingowe" i podpunkt "na mój adres e-mail" - zapisuje do newslettera
        $this->marketing = $agreement(['title' => ['pl' => 'Chcę otrzymywać informacje marketingowe od work4you.global']]);
        $this->marketingEmail = $agreement(['parent_id' => $this->marketing->id, 'subscribes_newsletter' => true, 'title' => ['pl' => 'na mój adres e-mail']]);
    }

    private function register(array $agreementIds, string $email = 'pracownik@example.com', string $type = 'worker'): User
    {
        return app(CreateNewUser::class)->create([
            'name' => 'Jan Kowalski',
            'type' => $type,
            'email' => $email,
            'password' => 'Haslo123!Haslo',
            'password_confirmation' => 'Haslo123!Haslo',
            'agreements' => array_map('strval', $agreementIds),
        ]);
    }

    public function test_worker_with_marketing_consent_is_subscribed_to_getresponse(): void
    {
        $this->register([$this->terms->id, $this->marketing->id, $this->marketingEmail->id]);

        $subscriber = Newsletter::sole();
        $this->assertSame('pracownik@example.com', $subscriber->email);
        $this->assertSame([$this->terms->id, $this->marketing->id, $this->marketingEmail->id], $subscriber->consents['agreement_ids']);
        $this->assertNotNull($subscriber->consents['accepted_at']);
        $this->assertSame(app()->getLocale(), $subscriber->locale);
        Queue::assertPushed(SyncNewsletterSubscriber::class, fn ($job) => $job->subscriber->is($subscriber));
    }

    public function test_without_marketing_consent_nothing_goes_to_getresponse(): void
    {
        $this->register([$this->terms->id, $this->marketing->id]);

        $this->assertSame(0, Newsletter::count());
        Queue::assertNotPushed(SyncNewsletterSubscriber::class);
    }

    public function test_already_subscribed_email_is_not_duplicated(): void
    {
        Newsletter::create(['email' => 'pracownik@example.com', 'country_code' => 'pl', 'locale' => 'pl']);

        $this->register([$this->terms->id, $this->marketingEmail->id]);

        $this->assertSame(1, Newsletter::count());
        Queue::assertNotPushed(SyncNewsletterSubscriber::class);
    }

    public function test_inactive_agreement_and_firm_registration_do_not_subscribe(): void
    {
        $this->marketingEmail->update(['is_active' => false]);
        $this->register([$this->terms->id, $this->marketingEmail->id]);

        // Firm to nie dotyczy - nawet zgoda rejestracji firmy oznaczona w bazie jako newsletter nie zapisuje
        $this->marketingEmail->update(['is_active' => true]);
        $firmConsent = Agreement::create(['type' => 'firm_registration', 'is_active' => true, 'is_required' => false, 'subscribes_newsletter' => true, 'title' => ['pl' => 'Marketing'], 'description' => ['pl' => 'Opis']]);
        $this->register([$this->marketingEmail->id, $firmConsent->id], 'firma@example.com', 'firm');

        $this->assertSame(0, Newsletter::count());
    }

    public function test_marketing_email_consent_is_marked_by_default(): void
    {
        Agreement::query()->update(['subscribes_newsletter' => false]);
        $firmMarketing = Agreement::create(['type' => 'firm_registration', 'is_active' => true, 'is_required' => false, 'title' => ['pl' => 'Chcę otrzymywać informacje marketingowe od work4you.global'], 'description' => ['pl' => 'Opis']]);
        // Zgoda marketingowa partnerów (jak #36 -> #37 na produkcji) - nie zapisuje do naszego newslettera
        $partners = Agreement::create(['type' => 'worker_registration', 'is_active' => true, 'is_required' => false, 'title' => ['pl' => 'Chcę otrzymywać informacje marketingowe od partnerów work4you.global'], 'description' => ['pl' => 'Od partnerów handlowych']]);
        $partnersEmail = Agreement::create(['type' => 'worker_registration', 'parent_id' => $partners->id, 'is_active' => true, 'is_required' => false, 'title' => ['pl' => ''], 'description' => ['pl' => 'na mój adres e-mail']]);

        $this->assertSame([$this->marketingEmail->id], Agreement::markWorkerMarketingConsentAsNewsletter());

        $this->assertTrue($this->marketingEmail->fresh()->subscribes_newsletter);
        $this->assertFalse($this->marketing->fresh()->subscribes_newsletter);
        $this->assertFalse($this->terms->fresh()->subscribes_newsletter);
        $this->assertFalse($firmMarketing->fresh()->subscribes_newsletter);
        $this->assertFalse($partnersEmail->fresh()->subscribes_newsletter);

        // Zgoda bez podpunktów - oznaczana sama
        $this->marketingEmail->delete();
        Agreement::query()->update(['subscribes_newsletter' => false]);
        $this->assertSame([$this->marketing->id], Agreement::markWorkerMarketingConsentAsNewsletter());
    }

    /**
     * Formularz zgody w adminie wymaga tytułu i opisu we wszystkich językach.
     */
    private function allLanguages(): array
    {
        $langs = config('langsShorts');

        return [
            'title' => array_fill_keys($langs, 'Chcę otrzymywać informacje marketingowe'),
            'description' => array_fill_keys($langs, 'Opis'),
            'help_text' => array_fill_keys($langs, ''),
        ];
    }

    public function test_admin_marks_agreement_as_newsletter_consent(): void
    {
        $admin = User::factory()->create();
        $admin->assignRole('admin');

        $this->actingAs($admin)->put(route('admin.agreements.update', $this->marketing), [
            'type' => 'worker_registration', 'is_active' => true, 'is_required' => false, 'subscribes_newsletter' => true,
            ...$this->allLanguages(),
        ])->assertRedirect(route('admin.agreements.index'));

        $this->assertTrue($this->marketing->fresh()->subscribes_newsletter);

        // Zgoda innego typu nie może zapisywać do newslettera
        $this->actingAs($admin)->put(route('admin.agreements.update', $this->marketing), [
            'type' => 'firm_registration', 'is_active' => true, 'is_required' => false, 'subscribes_newsletter' => true,
            ...$this->allLanguages(),
        ]);

        $this->assertFalse($this->marketing->fresh()->subscribes_newsletter);
    }
}
