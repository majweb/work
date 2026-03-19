<?php

namespace Tests\Unit;

use App\Models\Category;
use App\Models\Country;
use App\Models\SearchStatistic;
use App\Services\SearchStatisticService;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class SearchStatisticServiceTest extends TestCase
{
    use RefreshDatabase;

    public function test_it_logs_search_data_in_polish(): void
    {
        // Przygotowanie danych
        $country = Country::create([
            'name' => ['pl' => 'Niemcy', 'en' => 'Germany'],
            'countryCode' => 'DE',
            'continent' => ['pl' => 'Europa', 'en' => 'Europe'],
            'lang' => 'de',
        ]);

        $category = Category::create([
            'title' => ['pl' => 'Inżynieria', 'en' => 'Engineering'],
        ]);

        $service = new SearchStatisticService;
        $service->log([
            'country' => $country->id,
            'city' => 'Berlin',
            'category' => $category->id,
        ]);

        $this->assertDatabaseHas('search_statistics', [
            'country' => 'Niemcy',
            'city' => 'Berlin',
            'category' => 'Inżynieria',
        ]);
    }

    public function test_it_handles_null_values(): void
    {
        $service = new SearchStatisticService;
        $service->log([
            'city' => 'Kraków',
        ]);

        $this->assertDatabaseHas('search_statistics', [
            'country' => null,
            'city' => 'Kraków',
            'category' => null,
        ]);
    }

    public function test_it_does_not_save_empty_logs(): void
    {
        $service = new SearchStatisticService;
        $service->log([]);

        $this->assertEquals(0, SearchStatistic::count());
    }

    public function test_it_no_longer_rate_limits_in_controller(): void
    {
        // Przygotowanie strony wymaganej przez kontroler
        \App\Models\Page::create([
            'id' => 12,
            'title' => ['pl' => 'Projekty'],
            'image' => ['pl' => 'img.jpg'],
            'description' => ['pl' => 'desc'],
            'keywords' => ['pl' => 'key'],
        ]);

        $ip = '127.0.0.1';

        // Wykonujemy 5 żądań
        for ($i = 0; $i < 5; $i++) {
            $this->call('GET', route('front.projects'), ['city' => 'Warszawa'], [], [], ['REMOTE_ADDR' => $ip]);
        }

        // Teraz powinno zapisać wszystkie 5 rekordów, bo usunęliśmy limit
        $this->assertEquals(5, SearchStatistic::count());
    }
}
