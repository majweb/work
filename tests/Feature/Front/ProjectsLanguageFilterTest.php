<?php

namespace Tests\Feature\Front;

use App\Models\Page;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Spatie\Permission\Models\Role;
use Tests\Concerns\CreatesProjects;
use Tests\TestCase;

/**
 * Filtr języka na publicznej liście ofert: opcje tylko z ofert wybranego rynku.
 */
class ProjectsLanguageFilterTest extends TestCase
{
    use CreatesProjects;
    use RefreshDatabase;

    private User $firm;

    protected function setUp(): void
    {
        parent::setUp();

        Role::findOrCreate('firm', 'web');
        $this->firm = User::factory()->create();
        $this->firm->assignRole('firm');

        Page::forceCreate(['id' => 12, 'name' => 'projects', 'title' => ['pl' => 'Oferty']]);
    }

    private function lang(string $code, string $label, array $allLabels = []): array
    {
        return ['name' => ['label' => $label, 'value' => $code, 'allLabels' => $allLabels], 'level' => ['id' => 3]];
    }

    private function market(string $countryCode): array
    {
        return [['name' => strtoupper($countryCode), 'value' => 1, 'countryCode' => $countryCode]];
    }

    public function test_languages_come_only_from_offers_of_selected_market(): void
    {
        $english = $this->createProject($this->firm, [
            'country' => $this->market('pl'),
            'langs' => [$this->lang('en', 'Angielski', ['pl' => 'Angielski', 'en' => 'English'])],
        ]);
        $this->createProject($this->firm, [
            'country' => $this->market('pl'),
            'langs' => [$this->lang('de', 'Niemiecki'), $this->lang('en', 'Angielski')],
        ]);
        $this->createProject($this->firm, ['country' => $this->market('pl')]);
        // Inny rynek i nieaktywna oferta - ich języki nie trafiają do filtra
        $this->createProject($this->firm, ['country' => $this->market('de'), 'langs' => [$this->lang('fr', 'Francuski')]]);
        $this->createProject($this->firm, ['country' => $this->market('pl'), 'is_active' => false, 'langs' => [$this->lang('uk', 'Ukraiński')]]);

        $this->withSession(['selected_country' => 'pl'])
            ->get(route('front.projects'))
            ->assertOk()
            ->assertInertia(fn ($page) => $page
                // Nazwa w języku strony (allLabels), bez tłumaczenia - nazwa z oferty
                ->where('projectLanguages', [
                    ['value' => 'en', 'name' => 'English'],
                    ['value' => 'de', 'name' => 'Niemiecki'],
                ])
                ->where('languageFront', null)
                ->where('projects.total', 3));

        $this->withSession(['selected_country' => 'pl'])
            ->get(route('front.projects', ['language' => 'en']))
            ->assertInertia(fn ($page) => $page
                ->where('languageFront', ['value' => 'en', 'name' => 'English'])
                ->where('projects.total', 2));

        $this->withSession(['selected_country' => 'pl'])
            ->get(route('front.projects', ['language' => 'de']))
            ->assertInertia(fn ($page) => $page->where('projects.total', 1)
                ->where('projects.data.0.id', fn ($id) => $id !== $english->id));
    }

    public function test_language_from_another_market_is_ignored(): void
    {
        $this->createProject($this->firm, ['country' => $this->market('pl'), 'langs' => [$this->lang('en', 'Angielski')]]);
        $this->createProject($this->firm, ['country' => $this->market('pl')]);
        $this->createProject($this->firm, ['country' => $this->market('de'), 'langs' => [$this->lang('fr', 'Francuski')]]);

        $this->withSession(['selected_country' => 'pl'])
            ->get(route('front.projects', ['language' => 'fr']))
            ->assertInertia(fn ($page) => $page
                ->where('languageFront', null)
                ->where('projects.total', 2));
    }
}
