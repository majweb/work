<?php

namespace App\Services;

use App\Models\Category;
use App\Models\Country;
use App\Models\SearchStatistic;

class SearchStatisticService
{
    public function log(array $data): void
    {
        $payload = [
            'country' => $this->getCountryName($data['country'] ?? null),
            'city' => $data['city'] ?? null,
            'category' => $this->getCategoryName($data['category'] ?? null),
            'category_sub' => $this->getCategoryName($data['categorySub'] ?? null),
            'profession' => $this->getCategoryName($data['profession'] ?? null),
            'position' => $this->getCategoryName($data['position'] ?? null),
        ];

        // Zapisujemy tylko jeśli cokolwiek zostało wysłane
        if (collect($payload)->filter()->isNotEmpty()) {
            SearchStatistic::create($payload);
        }
    }

    protected function getCountryName(?int $id): ?string
    {
        if (! $id) {
            return null;
        }

        $country = Country::find($id);

        return $country ? $country->getTranslation('name', 'pl') : null;
    }

    protected function getCategoryName(?int $id): ?string
    {
        if (! $id) {
            return null;
        }

        $category = Category::find($id);

        return $category ? $category->getTranslation('title', 'pl') : null;
    }
}
