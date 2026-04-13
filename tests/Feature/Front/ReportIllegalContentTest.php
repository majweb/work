<?php

namespace Tests\Feature\Front;

use App\Mail\ReportIllegalContentMail;
use App\Models\Page;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Mail;
use Tests\TestCase;

class ReportIllegalContentTest extends TestCase
{
    use RefreshDatabase;

    public function test_report_illegal_content_form_validation(): void
    {
        $response = $this->post(route('front.owner.post'), []);

        $response->assertSessionHasErrors(['scope', 'signaling_entity', 'email', 'name', 'links', 'details', 'declaration']);
    }

    public function test_report_illegal_content_is_sent(): void
    {
        Mail::fake();

        $data = [
            'scope' => 'illegal',
            'signaling_entity' => true,
            'email' => 'test@example.com',
            'name' => 'Jan Kowalski',
            'company_name' => 'Firma Testowa',
            'links' => 'https://example.com/bad-content',
            'details' => 'To jest nielegalne treści.',
            'legal_provision' => 'Art. 123',
            'additional_info' => 'Brak',
            'declaration' => true,
        ];

        $response = $this->post(route('front.owner.post'), $data);

        $response->assertRedirect();
        $response->assertSessionHasNoErrors();

        Mail::assertSent(ReportIllegalContentMail::class, function ($mail) use ($data) {
            $rendered = $mail->render();

            return $mail->hasTo('dsa@work4you.global') &&
                   $mail->data['email'] === $data['email'] &&
                   $mail->data['name'] === $data['name'] &&
                   $mail->data['scope'] === $data['scope'] &&
                   str_contains($rendered, 'nielegalne treści/ treści niezgodne z regulaminem serwisu');
        });
    }

    public function test_rate_limiting_works(): void
    {
        $data = [
            'scope' => 'other',
            'signaling_entity' => false,
            'email' => 'test@example.com',
            'name' => 'Jan Kowalski',
            'links' => 'https://example.com',
            'details' => 'Szczegóły',
            'declaration' => true,
        ];

        // Send 5 requests (allowed)
        for ($i = 0; $i < 5; $i++) {
            $this->post(route('front.owner.post'), $data)->assertSessionHasNoErrors();
        }

        // 6th request should fail due to rate limiting
        $response = $this->post(route('front.owner.post'), $data);
        $response->assertSessionHasErrors('email');
    }
}
