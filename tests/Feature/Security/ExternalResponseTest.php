<?php

namespace Tests\Feature\Security;

use App\Models\Aplication;
use App\Models\CvVideo;
use App\Models\ExternalResponse;
use App\Models\Firm;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Spatie\Permission\Models\Role;
use Tests\Concerns\CreatesProjects;
use Tests\TestCase;

class ExternalResponseTest extends TestCase
{
    use CreatesProjects;
    use RefreshDatabase;

    private User $firmA;

    private User $firmB;

    private Aplication $appA;

    private Aplication $appB;

    private ExternalResponse $invite;

    protected function setUp(): void
    {
        parent::setUp();
        foreach (['firm', 'admin'] as $role) {
            Role::firstOrCreate(['name' => $role]);
        }

        $this->firmA = User::factory()->create();
        $this->firmA->assignRole('firm');
        $this->firmB = User::factory()->create();
        $this->firmB->assignRole('firm');

        $this->appA = $this->createAplication($this->firmA);
        $this->appB = $this->createAplication($this->firmB);

        // Firma A wysłała zaproszenie obejmujące tylko swoją aplikację
        $this->invite = ExternalResponse::create([
            'email' => 'partner@example.com',
            'token' => (string) Str::uuid(),
            'aplication_ids' => [$this->appA->id],
            'sender_id' => $this->firmA->id,
        ]);
    }

    private function inviteQuery(array $extra = []): array
    {
        return array_merge(['email' => $this->invite->email, 'token' => $this->invite->token], $extra);
    }

    public function test_view_shows_only_invited_aplications_even_if_url_is_tampered(): void
    {
        $this->get(route('external.response', $this->inviteQuery(['aplications' => $this->appB->id])))
            ->assertOk()
            ->assertInertia(fn ($page) => $page
                ->component('External/Response')
                ->has('getApps', 1)
                ->where('getApps.0.id', $this->appA->id));
    }

    public function test_legacy_invite_without_aplication_ids_is_rejected(): void
    {
        $legacy = ExternalResponse::create(['email' => 'old@example.com', 'token' => (string) Str::uuid()]);

        $this->get(route('external.response', ['email' => $legacy->email, 'token' => $legacy->token, 'aplications' => $this->appB->id]))
            ->assertRedirect(route('aplications.index'));
    }

    public function test_answer_requires_valid_token_for_that_aplication(): void
    {
        // Bez tokenu
        $this->post(route('external.answer'), ['application' => $this->appB->id, 'decision' => 'no'])
            ->assertSessionHasErrors(['email', 'token']);

        // Ważny token, ale aplikacja spoza zaproszenia
        $this->post(route('external.answer'), $this->inviteQuery(['application' => $this->appB->id, 'decision' => 'no']))
            ->assertForbidden();

        $this->assertNull($this->appB->fresh()->status);
    }

    public function test_answer_with_valid_token_updates_status(): void
    {
        $this->post(route('external.answer'), $this->inviteQuery(['application' => $this->appA->id, 'decision' => 'yes']))
            ->assertRedirect();

        $this->assertSame('yes', $this->appA->fresh()->status);
    }

    public function test_send_external_stores_only_senders_own_aplications(): void
    {
        Mail::fake();
        Firm::factory()->create(['user_id' => $this->firmA->id, 'points' => config('getPoints.SendToExternalFirm')]);

        $this->actingAs($this->firmA)->post(route('send.external'), [
            'externalFirms' => [['email' => 'nowy@example.com']],
            'apps' => [$this->appA->id, $this->appB->id],
        ]);

        $sent = ExternalResponse::where('email', 'nowy@example.com')->firstOrFail();
        $this->assertSame([$this->appA->id], array_map('intval', $sent->aplication_ids));
    }

    public function test_recording_download_requires_access(): void
    {
        Storage::fake();
        Storage::put('videos/a.webm', 'nagranie');
        CvVideo::create([
            'project_id' => $this->appA->project_id,
            'user_id' => $this->firmA->id,
            'file_path' => 'videos/a.webm',
            'aplication_id' => $this->appA->id,
        ]);

        // Gość bez zaproszenia i obca firma - brak dostępu
        $this->get(route('cv_audio.download', $this->appA))->assertForbidden();
        $this->actingAs($this->firmB)->get(route('cv_audio.download', $this->appA))->assertForbidden();

        // Właściciel aplikacji
        $this->actingAs($this->firmA)->get(route('cv_audio.download', $this->appA))->assertOk();
    }

    public function test_recording_download_with_valid_invite(): void
    {
        Storage::fake();
        Storage::put('videos/a.webm', 'nagranie');
        CvVideo::create([
            'project_id' => $this->appA->project_id,
            'user_id' => $this->firmA->id,
            'file_path' => 'videos/a.webm',
            'aplication_id' => $this->appA->id,
        ]);

        $this->get(route('cv_audio.download', array_merge(['aplication' => $this->appA->id], $this->inviteQuery())))->assertOk();
        // Zaproszenie nie obejmuje aplikacji firmy B
        $this->get(route('cv_audio.download', array_merge(['aplication' => $this->appB->id], $this->inviteQuery())))->assertForbidden();
    }
}
