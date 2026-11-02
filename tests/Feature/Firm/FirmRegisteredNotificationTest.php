<?php

namespace Tests\Feature\Firm;

use App\Actions\Fortify\CreateNewUser;
use App\Notifications\FirmRegisteredNotification;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Notifications\AnonymousNotifiable;
use Illuminate\Support\Facades\Notification;
use Spatie\Permission\Models\Role;
use Tests\TestCase;

/**
 * Nowa firma w portalu - e-mail z kolejki do zespołu Work4you (m.koziol@work4you.global).
 */
class FirmRegisteredNotificationTest extends TestCase
{
    use RefreshDatabase;

    protected function setUp(): void
    {
        parent::setUp();

        foreach (['firm', 'recruit', 'worker', 'admin'] as $role) {
            Role::findOrCreate($role, 'web');
        }
        config(['premium.welcome_points' => 0, 'services.crm.url' => null]);
    }

    private function register(string $type, string $email)
    {
        return app(CreateNewUser::class)->create([
            'name' => 'Nowa Firma',
            'type' => $type,
            'email' => $email,
            'password' => 'Haslo123!Haslo',
            'password_confirmation' => 'Haslo123!Haslo',
            'terms' => true,
        ]);
    }

    public function test_marta_gets_email_about_new_firm(): void
    {
        Notification::fake();

        $firm = $this->register('firm', 'nowa@firma.pl');

        Notification::assertSentOnDemand(FirmRegisteredNotification::class, function ($notification, $channels, AnonymousNotifiable $notifiable) use ($firm) {
            $mail = $notification->toMail($notifiable);

            return $notifiable->routes['mail'] === ['m.koziol@work4you.global']
                && $notification->firm->is($firm)
                && str_contains($mail->subject, 'Nowa Firma')
                && in_array('E-mail: nowa@firma.pl', $mail->introLines)
                && $mail->actionUrl === null;
        });
        $this->assertContains(\Illuminate\Contracts\Queue\ShouldQueue::class, class_implements(FirmRegisteredNotification::class));
    }

    public function test_worker_registration_does_not_send_firm_email(): void
    {
        Notification::fake();

        $this->register('worker', 'pracownik@example.com');

        Notification::assertNotSentTo(new AnonymousNotifiable, FirmRegisteredNotification::class);
        Notification::assertSentOnDemandTimes(FirmRegisteredNotification::class, 0);
    }
}
