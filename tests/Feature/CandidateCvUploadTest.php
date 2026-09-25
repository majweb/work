<?php

namespace Tests\Feature;

use App\Models\Candidate;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Http\UploadedFile;
use Spatie\Permission\Models\Role;
use Tests\TestCase;

class CandidateCvUploadTest extends TestCase
{
    use RefreshDatabase;

    private User $firm;

    private Candidate $candidate;

    protected function setUp(): void
    {
        parent::setUp();
        Role::firstOrCreate(['name' => 'firm']);

        $this->firm = User::factory()->create();
        $this->firm->assignRole('firm');
        $this->candidate = Candidate::forceCreate([
            'name' => 'Jan',
            'surname' => 'Kowalski',
            'email' => 'jan@example.com',
            'phone' => '123456789',
            'created_by_id' => $this->firm->id,
        ]);
    }

    protected function tearDown(): void
    {
        // saveCv czyta plik z prawdziwego dysku (storage_path), więc sprzątamy po teście
        $this->candidate->clearMediaCollection('candidate_cv_files');
        parent::tearDown();
    }

    public function test_pdf_cv_is_uploaded_and_attached_to_candidate(): void
    {
        $folder = $this->post(route('temporary.upload'), [
            'cvFile' => UploadedFile::fake()->create('cv.pdf', 200, 'application/pdf'),
        ])->assertOk()->getContent();

        $this->actingAs($this->firm)
            ->post(route('candidate-cv.save', $this->candidate), ['cvFile' => [$folder]])
            ->assertRedirect(route('candidates.show', $this->candidate));

        $media = $this->candidate->fresh()->getFirstMedia('candidate_cv_files');
        $this->assertNotNull($media);
        $this->assertSame('cv.pdf', $media->file_name);
    }

    public function test_image_and_too_large_files_are_rejected_as_cv(): void
    {
        $this->post(route('temporary.upload'), [
            'cvFile' => UploadedFile::fake()->image('cv.png'),
        ])->assertStatus(422)->assertJsonStructure(['error' => ['cvFile']]);

        // Limit serwera: 5000 KB (zgodnie z informacją na stronie kandydata)
        $this->post(route('temporary.upload'), [
            'cvFile' => UploadedFile::fake()->create('cv.pdf', 6000, 'application/pdf'),
        ])->assertStatus(422);
    }
}
