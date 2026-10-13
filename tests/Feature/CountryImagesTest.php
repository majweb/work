<?php

namespace Tests\Feature;

use App\Models\Country;
use Database\Seeders\CountryImagesSeeder;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Tests\TestCase;

class CountryImagesTest extends TestCase
{
    use RefreshDatabase;

    // Testowy kod kraju, którego nie ma wśród prawdziwych folderów ze zdjęciami
    private const CODE = 'zz';

    private Country $country;

    protected function setUp(): void
    {
        parent::setUp();
        Storage::fake('public');

        $this->country = Country::create([
            'lang' => self::CODE,
            'countryCode' => self::CODE,
            'name' => ['pl' => 'Testlandia'],
            'continent' => ['pl' => 'Europa'],
        ]);
    }

    protected function tearDown(): void
    {
        File::deleteDirectory($this->sourceDir());
        parent::tearDown();
    }

    private function sourceDir(): string
    {
        return public_path('images/seeds/countries/'.self::CODE);
    }

    private function putSourceImages(string $folder, int $count): void
    {
        File::ensureDirectoryExists($this->sourceDir()."/{$folder}");
        for ($i = 1; $i <= $count; $i++) {
            // Plik tymczasowy istnieje tylko, dopóki żyje obiekt UploadedFile, więc trzymamy go w zmiennej
            $image = UploadedFile::fake()->image("{$i}.jpg", 40, 30);
            File::copy($image->getPathname(), $this->sourceDir()."/{$folder}/{$i}.jpg");
        }
    }

    private function mediaCount(string $collection): int
    {
        return $this->country->fresh()->getMedia($collection)->count();
    }

    public function test_seeder_reloads_images_from_folders_without_duplicates(): void
    {
        $this->putSourceImages('desktop', 1);
        $this->putSourceImages('mobile', 2);

        $this->seed(CountryImagesSeeder::class);
        $oldIds = $this->country->fresh()->getMedia('countries_images_desktop')->pluck('id');

        // Nowe grafiki w folderze: 5 zamiast 1
        $this->putSourceImages('desktop', 5);
        $this->seed(CountryImagesSeeder::class);

        $desktop = $this->country->fresh()->getMedia('countries_images_desktop');
        $this->assertSame(5, $desktop->count());
        $this->assertEmpty($desktop->pluck('id')->intersect($oldIds), 'Stare zdjęcia powinny zostać usunięte');
        // Ponowne uruchomienie nie dubluje zdjęć
        $this->assertSame(2, $this->mediaCount('countries_images_mobile'));
    }

    public function test_seeder_keeps_collection_without_source_files(): void
    {
        $this->putSourceImages('mobile', 2);
        $this->seed(CountryImagesSeeder::class);
        File::deleteDirectory($this->sourceDir().'/mobile');

        $this->seed(CountryImagesSeeder::class);

        $this->assertSame(2, $this->mediaCount('countries_images_mobile'));
    }

    public function test_command_replaces_existing_images(): void
    {
        $this->putSourceImages('desktop', 3);
        $this->seed(CountryImagesSeeder::class);
        $oldIds = $this->country->fresh()->getMedia('countries_images_desktop')->pluck('id');

        // Nowy zestaw: 5 zdjęć zamiast 3
        $this->putSourceImages('desktop', 5);

        $this->artisan('countries:refresh-images', ['codes' => [self::CODE], '--force' => true])
            ->assertSuccessful();

        $media = $this->country->fresh()->getMedia('countries_images_desktop');
        $this->assertSame(5, $media->count());
        $this->assertEmpty($media->pluck('id')->intersect($oldIds), 'Stare zdjęcia powinny zostać usunięte');
    }

    public function test_command_keeps_collection_without_source_files(): void
    {
        $this->putSourceImages('mobile', 2);
        $this->seed(CountryImagesSeeder::class);
        File::deleteDirectory($this->sourceDir().'/mobile');

        $this->artisan('countries:refresh-images', ['codes' => [self::CODE], '--force' => true])
            ->assertSuccessful();

        // Brak nowych plików = obecne zdjęcia zostają
        $this->assertSame(2, $this->mediaCount('countries_images_mobile'));
    }

    public function test_command_changes_nothing_when_not_confirmed(): void
    {
        $this->putSourceImages('desktop', 2);
        $this->seed(CountryImagesSeeder::class);
        $this->putSourceImages('desktop', 4);

        $this->artisan('countries:refresh-images', ['codes' => [self::CODE]])
            ->expectsConfirmation('Usunąć obecne zdjęcia z kolekcji oznaczonych „podmiana” i wgrać nowe?', 'no')
            ->assertSuccessful();

        $this->assertSame(2, $this->mediaCount('countries_images_desktop'));
    }

    public function test_market_image_is_chosen_by_country_code_not_language(): void
    {
        // Kraj z setUp (pierwszy w tabeli) ma język równy kodowi wybranego rynku - stary kod szukał po `lang`
        // i trafiał w niego, jak Austria (lang=de) na rynku niemieckim
        $this->country->update(['lang' => 'yy']);
        $this->country->addMedia(UploadedFile::fake()->image('zly.jpg'))->toMediaCollection('countries_images_desktop');

        $market = Country::create([
            'lang' => 'yy-lang',
            'countryCode' => 'yy',
            'name' => ['pl' => 'Rynek testowy'],
            'continent' => ['pl' => 'Europa'],
        ]);
        $expected = $market->addMedia(UploadedFile::fake()->image('dobry.jpg'))->toMediaCollection('countries_images_desktop');

        session()->put('selected_country', 'yy');

        $this->assertStringContainsString("/storage/{$expected->id}/", Country::getRandomImageFromBrowserLocale());
    }

    public function test_command_requires_codes_or_all_option(): void
    {
        $this->artisan('countries:refresh-images')->assertFailed();
        $this->artisan('countries:refresh-images', ['codes' => ['xx'], '--force' => true])->assertFailed();
    }
}
