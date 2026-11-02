<?php

namespace Tests\Feature\Admin;

use App\Models\Banner;
use App\Models\TemporaryFile;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Spatie\Permission\Models\Role;
use Tests\TestCase;

/**
 * Banery Work4you dodawane przez admina: bez firmy i pakietu, losowane na równi z banerami firm.
 */
class OwnBannerTest extends TestCase
{
    use RefreshDatabase;

    private User $admin;

    protected function setUp(): void
    {
        parent::setUp();

        Storage::fake('public');
        foreach (['admin', 'firm'] as $role) {
            Role::findOrCreate($role, 'web');
        }
        $this->admin = User::factory()->create();
        $this->admin->assignRole('admin');
    }

    private function uploadedFolder(): string
    {
        $folder = 'banner-test-'.uniqid();
        UploadedFile::fake()->image('baner.jpg', 1200, 300)->storeAs('temps/'.$folder, 'baner.jpg', 'public');
        TemporaryFile::create(['folder' => $folder, 'filename' => 'baner.jpg']);

        return $folder;
    }

    private function market(string $countryCode): array
    {
        return ['name' => strtoupper($countryCode), 'value' => 1, 'countryCode' => $countryCode];
    }

    public function test_admin_adds_own_banner_without_firm_and_acceptance(): void
    {
        $folder = $this->uploadedFolder();

        $this->actingAs($this->admin)->post(route('admin.banners-accepts.store'), [
            'lang' => [$this->market('pl')],
            'url' => 'https://work4you.global/kampania',
            'photo' => [$folder],
            'active' => true,
        ])->assertRedirect(route('admin.banners-accepts.index'));

        $banner = Banner::sole();
        $this->assertNull($banner->user_id);
        $this->assertTrue($banner->active_admin);
        $this->assertTrue($banner->active);
        $this->assertNotEmpty($banner->getFirstMediaUrl('banners_images'));
        $this->assertDatabaseMissing('temporary_files', ['folder' => $folder]);

        // Na liście do akceptacji widać też nasze banery
        $this->actingAs($this->admin)->get(route('admin.banners-accepts.index'))
            ->assertInertia(fn ($page) => $page->where('banners.data.0.id', $banner->id));
    }

    public function test_admin_edits_own_banner_and_keeps_image(): void
    {
        $this->actingAs($this->admin)->post(route('admin.banners-accepts.store'), [
            'lang' => [$this->market('pl')],
            'url' => 'https://work4you.global/a',
            'photo' => [$this->uploadedFolder()],
        ]);
        $banner = Banner::sole();
        $image = $banner->getFirstMediaUrl('banners_images');

        $this->actingAs($this->admin)->put(route('admin.banners-accepts.update', $banner), [
            'lang' => [$this->market('de')],
            'url' => 'https://work4you.global/b',
            'photo' => [['source' => $image]],
            'active' => false,
        ])->assertRedirect(route('admin.banners-accepts.index'));

        $banner->refresh();
        $this->assertSame('https://work4you.global/b', $banner->url);
        $this->assertSame('de', $banner->lang[0]['countryCode']);
        $this->assertFalse($banner->active);
        $this->assertSame($image, $banner->getFirstMediaUrl('banners_images'));
    }

    public function test_firm_banner_cannot_be_edited_as_own(): void
    {
        $firm = User::factory()->create();
        $banner = Banner::create(['user_id' => $firm->id, 'url' => 'https://firma.pl', 'lang' => [$this->market('pl')], 'active' => true, 'active_admin' => false]);

        $this->actingAs($this->admin)->get(route('admin.banners-accepts.edit', $banner))->assertNotFound();
        $this->actingAs($this->admin)->put(route('admin.banners-accepts.update', $banner), [
            'lang' => [$this->market('pl')], 'url' => 'https://inny.pl', 'photo' => ['x'],
        ])->assertNotFound();
    }

    public function test_only_admin_can_add_banner(): void
    {
        $firm = User::factory()->create();
        $firm->assignRole('firm');

        $this->actingAs($firm)->post(route('admin.banners-accepts.store'), [
            'lang' => [$this->market('pl')], 'url' => 'https://work4you.global', 'photo' => [$this->uploadedFolder()],
        ]);
        $this->assertSame(0, Banner::count());
    }

    public function test_admin_uploads_banner_image_up_to_20_mb(): void
    {
        $image = fn (int $kb) => UploadedFile::fake()->image('baner.jpg', 1000, 200)->size($kb);

        $this->actingAs($this->admin)->post(route('temporary.upload'), ['adminBanner' => $image(15000)])->assertOk();
        $this->actingAs($this->admin)->post(route('temporary.upload'), ['adminBanner' => $image(21000)])
            ->assertStatus(422)->assertJsonStructure(['error' => ['adminBanner']]);

        // Firma (i zwykłe pole photo) - dalej 2 MB
        $firm = User::factory()->create();
        $firm->assignRole('firm');
        $this->actingAs($firm)->post(route('temporary.upload'), ['adminBanner' => $image(15000)])->assertStatus(400);
        $this->actingAs($this->admin)->post(route('temporary.upload'), ['photo' => $image(15000)])->assertStatus(422);
    }

    public function test_own_banner_is_shown_on_its_markets_without_package(): void
    {
        $own = Banner::create(['user_id' => null, 'url' => 'https://work4you.global', 'lang' => [$this->market('pl')], 'active' => true, 'active_admin' => true]);
        Banner::create(['user_id' => null, 'url' => 'https://work4you.global/de', 'lang' => [$this->market('de')], 'active' => true, 'active_admin' => true]);
        Banner::create(['user_id' => null, 'url' => 'https://work4you.global/off', 'lang' => [$this->market('pl')], 'active' => false, 'active_admin' => true]);
        // Firma bez opłaconego pakietu - jej baner się nie wyświetla
        $firm = User::factory()->create();
        Banner::create(['user_id' => $firm->id, 'url' => 'https://firma.pl', 'lang' => [$this->market('pl')], 'active' => true, 'active_admin' => true]);

        session(['selected_country' => 'pl']);
        $this->assertSame([$own->id], Banner::withActiveBanner()->pluck('id')->all());
    }
}
