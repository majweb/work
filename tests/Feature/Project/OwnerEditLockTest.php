<?php

namespace Tests\Feature\Project;

use App\Models\ExternalCompany;
use App\Models\Firm;
use App\Models\Project;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;
use Tests\Concerns\CreatesProjects;
use Tests\TestCase;

/**
 * Blokada edycji ogłoszenia: firma/rekruter edytuje tylko przez 24h od publikacji (pierwszej aktywacji),
 * a pracodawcy, stanowiska, stawki i miejsca pracy nie zmienia nigdy. Admin edytuje zawsze.
 */
class OwnerEditLockTest extends TestCase
{
    use CreatesProjects;
    use RefreshDatabase;

    private User $firm;

    private User $recruiter;

    protected function setUp(): void
    {
        parent::setUp();

        foreach (['firm', 'recruit', 'worker', 'admin'] as $role) {
            Role::findOrCreate($role, 'web');
        }

        // Konto firmy ma też rolę rekrutera (jak przy rejestracji)
        $this->firm = User::factory()->create(['profile_photo_path' => 'profile-photos/logo.png']);
        $this->firm->assignRole('firm', 'recruit');
        Firm::factory()->create([
            'user_id' => $this->firm->id,
            'number' => '1',
            'description' => 'Opis firmy',
            'points' => 1000,
        ]);

        $this->recruiter = User::factory()->create(['recruiter_from_firm_id' => $this->firm->id]);
        $this->recruiter->assignRole('recruit');
    }

    private function project(array $overrides = []): Project
    {
        return $this->createProject($this->firm, array_merge([
            'recruiter_id' => $this->recruiter->id,
            'basicSalaryFrom' => 5000,
            'basicSalaryTo' => 6000,
            'lat' => 50.1,
            'lng' => 18.5,
            'profession' => ['value' => 3, 'name' => 'Kierowca', 'allTranslations' => ['title' => ['pl' => 'Kierowca']]],
        ], $overrides));
    }

    private function dictionary(string $table, string $column = 'name', ?int $id = null): int
    {
        return DB::table($table)->insertGetId(array_filter(['id' => $id]) + [$column => json_encode(['pl' => 'Test']), 'created_at' => now(), 'updated_at' => now()]);
    }

    /**
     * Kompletny formularz edycji (StoreProject) - jak wysyła go Edit.vue.
     */
    private function payload(array $overrides = []): array
    {
        $item = fn (int $id, string $key = 'id') => [$key => $id, 'name' => 'Test', 'allTranslations' => ['pl' => 'Test']];

        return array_merge([
            'category' => ['value' => 1, 'name' => 'Transport'],
            'categorySub' => ['value' => 2, 'name' => 'Kierowcy'],
            'profession' => ['value' => 3, 'name' => 'Kierowca', 'allTranslations' => ['title' => ['pl' => 'Kierowca']]],
            'position' => null,
            'detailProjects' => [$this->dictionary('detail_projects')],
            'workingMode' => [$item($this->dictionary('working_modes', 'title'), 'value')],
            'workLoad' => $item($this->dictionary('work_loads'), 'value'),
            // Walidacja przyjmuje tylko 1 lub 2, a ogłoszenie ma klucz obcy do zmian pracy
            'shiftWork' => DB::table('shift_works')->where('id', 1)->exists() ? 1 : $this->dictionary('shift_works', id: 1),
            'workNight' => 1,
            'payoutMode' => $item($this->dictionary('payout_modes')),
            'currency' => ['name' => 'PLN', 'value' => 'PLN'],
            'typeOfContract' => [$item($this->dictionary('type_of_contracts'))],
            'paySystem' => [$item($this->dictionary('pay_systems'))],
            'days' => [$item($this->dictionary('days'))],
            'offer' => [$item($this->dictionary('offers'))],
            'wait' => [$item($this->dictionary('waits'))],
            'experience' => $item($this->dictionary('experiences'), 'value'),
            'welcome' => [$item($this->dictionary('welcomes'))],
            'workingPlace' => $item($this->dictionary('working_places'), 'value'),
            'country' => [['name' => 'Polska', 'value' => 165, 'countryCode' => 'pl']],
            'basicSalaryFrom' => 5000,
            'basicSalaryTo' => 6000,
            'salary_type' => 'brutto',
            'salaryPeriod' => null,
            'bonusSalaryFrom' => null,
            'bonusSalaryTo' => null,
            'hoursFrom' => null,
            'hoursTo' => null,
            'education' => null,
            'inclusive_recruitment' => false,
            'disability_friendly' => false,
            'countryWork' => ['value' => 165, 'name' => 'Polska', 'countryCode' => 'pl'],
            'streetWork' => 'Dworek',
            'streetWorkNumber' => '1',
            'postalWork' => '44-200',
            'cityWork' => 'Rybnik',
            'lat' => 50.1,
            'lng' => 18.5,
            // CV klasyczne (id 1) - typy 2 i 3 wymagają pytań do kandydata
            'cv' => [$item($this->dictionary('cv_types', id: 1))],
            'kraz' => null,
            'langs' => [],
            'questions' => [],
            'external_company_id' => null,
            'is_active' => true,
        ], $overrides);
    }

    public function test_publication_date_is_set_on_first_activation_only(): void
    {
        $active = $this->project();
        $this->assertNotNull($active->published_at);

        $draft = $this->project(['is_active' => false]);
        $this->assertNull($draft->published_at);

        $this->travel(3)->days();
        $this->actingAs($this->firm)->post(route('projects.toggle-active', $draft));
        $publishedAt = $draft->fresh()->published_at;
        $this->assertTrue($publishedAt->isToday());

        // Wyłączenie i ponowne włączenie nie przesuwa daty publikacji
        $this->travel(2)->days();
        $this->actingAs($this->firm)->post(route('projects.toggle-active', $draft));
        $this->actingAs($this->firm)->post(route('projects.toggle-active', $draft));
        $this->assertTrue($draft->fresh()->is_active);
        $this->assertEquals($publishedAt->timestamp, $draft->fresh()->published_at->timestamp);
    }

    public function test_firm_and_recruiter_can_edit_only_within_24_hours(): void
    {
        $project = $this->project();
        // Ogłoszenie dodane przez firmę - firma jest jego rekruterem
        $firmOwn = $this->project(['recruiter_id' => $this->firm->id]);

        $this->actingAs($this->firm)->get(route('projects.edit', $project))->assertOk()
            ->assertInertia(fn ($page) => $page->where('editState.can_edit', true));
        $this->actingAs($this->recruiter)->get(route('project-recruits.edit', $project))->assertOk();

        $this->travel(25)->hours();

        $this->actingAs($this->firm)->get(route('projects.edit', $project))
            ->assertRedirect(route('projects.index'))
            ->assertSessionHas('flash.bannerStyle', 'danger');
        // Firma ma też rolę rekrutera - ścieżka rekrutera jest zablokowana tak samo
        $this->actingAs($this->firm)->get(route('project-recruits.edit', $firmOwn))
            ->assertRedirect(route('project-recruits.index'));
        $this->actingAs($this->recruiter)->get(route('project-recruits.edit', $project))
            ->assertRedirect(route('project-recruits.index'));

        $this->actingAs($this->recruiter)
            ->put(route('project-recruits.update', $project), $this->payload(['kraz' => 123]))
            ->assertRedirect(route('project-recruits.index'));
        $this->assertNull($project->fresh()->kraz);

        $this->actingAs($this->firm)->get(route('projects.index'))
            ->assertInertia(fn ($page) => $page->where('projects.data', fn ($rows) => collect($rows)->every(fn ($row) => $row['edit_state']['can_edit'] === false)));
    }

    public function test_unpublished_offer_can_be_edited_without_time_limit(): void
    {
        $draft = $this->project(['is_active' => false]);
        $this->travel(10)->days();

        $this->actingAs($this->recruiter)->get(route('project-recruits.edit', $draft))->assertOk()
            ->assertInertia(fn ($page) => $page->where('editState.published', false));
    }

    public function test_employer_position_salary_and_location_never_change(): void
    {
        $company = ExternalCompany::forceCreate(['user_id' => $this->firm->id, 'name' => 'Klient', 'created_at' => now(), 'updated_at' => now()]);
        $project = $this->project(['external_company_id' => $company->id]);

        $this->actingAs($this->recruiter)->put(route('project-recruits.update', $project), $this->payload([
            // Pola zablokowane - zmiana ignorowana
            'external_company_id' => null,
            'profession' => ['value' => 99, 'name' => 'Prezes', 'allTranslations' => ['title' => ['pl' => 'Prezes']]],
            'basicSalaryFrom' => 99000,
            'basicSalaryTo' => 99999,
            'countryWork' => ['value' => 1, 'name' => 'Niemcy', 'countryCode' => 'de'],
            'cityWork' => 'Berlin',
            'streetWork' => 'Unter den Linden',
            'lat' => 52.5,
            'lng' => 13.4,
            // Pola edytowalne w ciągu 24h
            'kraz' => 123,
            'salary_type' => 'netto',
        ]))->assertRedirect(route('project-recruits.index'));

        $project->refresh();
        $this->assertSame($company->id, $project->external_company_id);
        $this->assertSame($this->firm->id, $project->user_id);
        $this->assertSame('Kierowca', $project->profession['name']);
        $this->assertEquals(5000, $project->basicSalaryFrom);
        $this->assertEquals(6000, $project->basicSalaryTo);
        $this->assertSame('pl', $project->countryWork['countryCode']);
        $this->assertSame('Rybnik', $project->cityWork);
        $this->assertSame('Dworek', $project->streetWork);
        $this->assertEquals(50.1, $project->lat);
        // Tytuł liczony z zablokowanych pól
        $this->assertStringContainsString('Kierowca', $project->title['pl']);
        $this->assertStringContainsString('Rybnik', $project->title['pl']);
        $this->assertStringContainsString('5000', $project->title['pl']);

        $this->assertEquals(123, $project->kraz);
        $this->assertSame('netto', $project->salary_type);
    }

    public function test_duplicate_is_draft_with_new_24_hours_after_publication(): void
    {
        $project = $this->project();
        $this->travel(5)->days();

        $this->actingAs($this->firm)->post(route('projects.duplicate', $project))
            ->assertSessionHas('flash.banner', __('projectLock.duplicatedAsDraft'));

        $copy = Project::latest('id')->first();
        $this->assertNotSame($project->id, $copy->id);
        $this->assertFalse($copy->is_active);
        $this->assertNull($copy->published_at);
        $this->assertTrue($copy->isEditableByOwner());
        $this->assertFalse($project->fresh()->isEditableByOwner());

        // Publikacja kopii uruchamia nowe 24h
        $this->actingAs($this->firm)->post(route('projects.toggle-active', $copy));
        $this->assertTrue($copy->fresh()->published_at->isToday());
        $this->assertTrue($copy->fresh()->isEditableByOwner());
    }

    public function test_draft_can_change_salary_and_location_before_publication(): void
    {
        $draft = $this->project(['is_active' => false]);

        $this->actingAs($this->recruiter)->put(route('project-recruits.update', $draft), $this->payload([
            'basicSalaryFrom' => 7000,
            'basicSalaryTo' => 8000,
            'cityWork' => 'Gliwice',
            'streetWork' => 'Zwycięstwa',
            'lat' => 50.3,
            'lng' => 18.7,
            'is_active' => false,
        ]))->assertRedirect(route('project-recruits.index'));

        $draft->refresh();
        $this->assertEquals(7000, $draft->basicSalaryFrom);
        $this->assertEquals(8000, $draft->basicSalaryTo);
        $this->assertSame('Gliwice', $draft->cityWork);
        $this->assertStringContainsString('Gliwice', $draft->title['pl']);
        $this->assertNull($draft->published_at);
    }

    public function test_admin_can_always_edit(): void
    {
        $admin = User::factory()->create();
        $admin->assignRole('admin');
        $project = $this->project();
        $this->travel(30)->days();

        $this->actingAs($admin)->get(route('admin.job-offers.edit', $project))->assertOk();
    }

    public function test_only_admin_downloads_edit_guide(): void
    {
        $admin = User::factory()->create();
        $admin->assignRole('admin');

        $this->actingAs($admin)->get(route('admin.job-offers.guide'))->assertOk()->assertDownload();
        $this->actingAs($this->firm)->get(route('admin.job-offers.guide'))->assertForbidden();
    }
}
