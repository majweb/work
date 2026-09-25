<?php

namespace Tests\Feature\Security;

use App\Models\Article;
use App\Models\Candidate;
use App\Models\CandidateEvidence;
use App\Models\CvClassic;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Spatie\Permission\Models\Role;
use Tests\Concerns\CreatesProjects;
use Tests\TestCase;

class OwnershipChecksTest extends TestCase
{
    use CreatesProjects;
    use RefreshDatabase;

    private User $firmA;

    private User $firmB;

    protected function setUp(): void
    {
        parent::setUp();
        foreach (['firm', 'recruit', 'worker', 'admin'] as $role) {
            Role::firstOrCreate(['name' => $role]);
        }

        $this->firmA = User::factory()->create();
        $this->firmA->assignRole('firm');
        $this->firmB = User::factory()->create();
        $this->firmB->assignRole('firm');
    }

    private function worker(): User
    {
        $worker = User::factory()->create();
        $worker->assignRole('worker');

        return $worker;
    }

    private function cvOf(User $worker): CvClassic
    {
        return CvClassic::forceCreate([
            'worker_id' => $worker->id,
            'project_id' => $this->createProject($this->firmA)->id,
            'birthday' => '1990-01-01',
            'city' => 'Rybnik',
            'postal' => '44-200',
            'cvStandardType' => 1,
            'experiences' => '[]',
            'educations' => '[]',
            'courses' => '[]',
            'langs' => '[]',
            'skills' => '[]',
        ]);
    }

    private function candidateOf(User $firm): Candidate
    {
        return Candidate::forceCreate([
            'name' => 'Jan',
            'surname' => 'Kowalski',
            'email' => 'jan'.$firm->id.'@example.com',
            'phone' => '123456789',
            'created_by_id' => $firm->id,
        ]);
    }

    public function test_firm_cannot_edit_other_firms_article_but_can_edit_own(): void
    {
        $article = Article::forceCreate([
            'user_id' => $this->firmA->id,
            'title' => 'Artykuł',
            'content' => 'Treść',
            'lang' => 'pl',
            'category' => [],
        ]);

        $this->actingAs($this->firmB)->get(route('articles.edit', $article))->assertForbidden();
        $this->actingAs($this->firmB)->put(route('articles.update', $article), [])->assertForbidden();

        // Właściciel przechodzi autoryzację (wcześniejsza zmiana UserPolicy nie może blokować edycji artykułów)
        \App\Models\Firm::factory()->create(['user_id' => $this->firmA->id]);
        $this->actingAs($this->firmA)->get(route('articles.edit', $article))->assertOk();
    }

    public function test_worker_cannot_modify_other_workers_cv(): void
    {
        $owner = $this->worker();
        $cv = $this->cvOf($owner);
        $attacker = $this->worker();

        $this->actingAs($attacker)->put(route('worker.myCvUpdateCv', $cv), [])->assertForbidden();
        $this->actingAs($attacker)->put(route('worker.myCvUpdateBasic', $cv), [])->assertForbidden();

        $this->assertSame('Rybnik', $cv->fresh()->city);
    }

    public function test_worker_cannot_view_other_workers_aplication(): void
    {
        $aplication = $this->createAplication($this->firmA, ['aplication_user_id' => $this->worker()->id]);

        $this->actingAs($this->worker())->get(route('worker.singleAplication', $aplication))->assertForbidden();
    }

    public function test_firm_cannot_touch_other_firms_candidate(): void
    {
        $candidate = $this->candidateOf($this->firmA);
        $evidence = CandidateEvidence::forceCreate([
            'candidate_id' => $candidate->id,
            'external_company' => [],
            'position' => [],
            'salary' => 1000,
            'date_of_hire' => '2026-01-01',
            'country' => [],
        ]);

        $this->actingAs($this->firmB)->post(route('candidates.evidence.store', $candidate), [])->assertForbidden();
        $this->actingAs($this->firmB)->put(route('candidates.evidence.update', [$candidate, $evidence]), [])->assertForbidden();
        $this->actingAs($this->firmB)->delete(route('candidates.evidence.delete', [$candidate, $evidence]))->assertForbidden();
        $this->actingAs($this->firmB)->post(route('candidate-cv.save', $candidate), ['cvFile' => []])->assertForbidden();
        $this->actingAs($this->firmB)->delete(route('candidate-cv.delete', $candidate))->assertForbidden();
        $this->actingAs($this->firmB)->post(route('candidate.unlock-questions', $candidate))->assertForbidden();

        $this->assertNotNull($evidence->fresh());

        // Autor kandydata ma dostęp
        $this->actingAs($this->firmA)->delete(route('candidates.evidence.delete', [$candidate, $evidence]))->assertRedirect();
        $this->assertNull($evidence->fresh());
    }

    public function test_only_project_recruiters_can_duplicate_project(): void
    {
        $project = $this->createProject($this->firmA);

        $this->actingAs($this->worker())->post(route('project-recruits.duplicate', $project))->assertForbidden();
        $this->assertSame(1, \App\Models\Project::count());
    }

    public function test_firm_cannot_reassign_other_firms_aplication_or_use_foreign_recruiter(): void
    {
        $aplication = $this->createAplication($this->firmA);

        $this->actingAs($this->firmB)
            ->post(route('firm.changeRecruitApp', $aplication), ['recruit' => ['value' => $this->firmB->id]])
            ->assertForbidden();

        // Właściciel nie może przypisać użytkownika spoza swojej firmy
        $this->actingAs($this->firmA)
            ->post(route('firm.changeRecruitApp', $aplication), ['recruit' => ['value' => $this->firmB->id]])
            ->assertForbidden();

        // Własny rekruter - OK
        $recruit = User::factory()->create(['recruiter_from_firm_id' => $this->firmA->id]);
        $this->actingAs($this->firmA)
            ->post(route('firm.changeRecruitApp', $aplication), ['recruit' => ['value' => $recruit->id]])
            ->assertRedirect();
        $this->assertSame($recruit->id, (int) $aplication->fresh()->opened_by_user_id);
    }

    public function test_admin_job_offers_sort_direction_is_whitelisted(): void
    {
        $admin = User::factory()->create();
        $admin->assignRole('admin');
        $this->createProject($this->firmA);

        $this->actingAs($admin)
            ->get(route('admin.job-offers.index', ['sort' => 'title', 'direction' => 'desc, (SELECT SLEEP(0))']))
            ->assertOk();
    }

    public function test_test_email_endpoint_is_removed(): void
    {
        $this->get('/test-email?email=someone@example.com')->assertNotFound();
    }
}
