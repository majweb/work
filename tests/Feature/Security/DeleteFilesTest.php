<?php

namespace Tests\Feature\Security;

use App\Models\Firm;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Spatie\Permission\Models\Role;
use Tests\TestCase;

class DeleteFilesTest extends TestCase
{
    use RefreshDatabase;

    private User $firmA;

    private Media $media;

    protected function setUp(): void
    {
        parent::setUp();
        Storage::fake('public');
        foreach (['firm', 'admin'] as $role) {
            Role::firstOrCreate(['name' => $role]);
        }

        $this->firmA = User::factory()->create();
        $this->firmA->assignRole('firm');
        $firm = Firm::factory()->create(['user_id' => $this->firmA->id]);

        $this->media = $firm->addMedia(UploadedFile::fake()->image('logo.jpg'))->toMediaCollection('firms_images');
    }

    private function posterSource(): array
    {
        return ['source' => '/storage/'.$this->media->id.'/logo.jpg'];
    }

    public function test_guest_cannot_delete_media(): void
    {
        $this->post(route('temporary.delete.poster'), $this->posterSource())->assertRedirect(route('login'));
        $this->assertNotNull(Media::find($this->media->id));
    }

    public function test_other_firm_cannot_delete_media(): void
    {
        $firmB = User::factory()->create();
        $firmB->assignRole('firm');

        $this->actingAs($firmB)->post(route('temporary.delete.poster'), $this->posterSource())->assertForbidden();
        $this->assertNotNull(Media::find($this->media->id));
    }

    public function test_owner_can_delete_media(): void
    {
        $this->actingAs($this->firmA)->post(route('temporary.delete.poster'), $this->posterSource())->assertOk();
        $this->assertNull(Media::find($this->media->id));
    }

    public function test_delete_pdf_only_removes_pdf_generated_in_this_session(): void
    {
        Storage::disk('public')->put('important/cv.pdf', 'dane kandydata');
        Storage::disk('public')->put('pdfGenerateTemporary/cv_123.pdf', 'podgląd');

        // Dowolna ścieżka - odrzucona
        $this->post(route('front.projects.deletePdf'), ['file' => 'important/cv.pdf'])->assertForbidden();
        // Poprawny format, ale nie z tej sesji - odrzucona
        $this->post(route('front.projects.deletePdf'), ['file' => 'pdfGenerateTemporary/cv_123.pdf'])->assertForbidden();
        Storage::disk('public')->assertExists(['important/cv.pdf', 'pdfGenerateTemporary/cv_123.pdf']);

        // Plik wygenerowany w tej sesji - usunięty
        $this->withSession(['generated_pdfs' => ['pdfGenerateTemporary/cv_123.pdf']])
            ->post(route('front.projects.deletePdf'), ['file' => 'pdfGenerateTemporary/cv_123.pdf'])
            ->assertOk();
        Storage::disk('public')->assertMissing('pdfGenerateTemporary/cv_123.pdf');
    }
}
