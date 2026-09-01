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

    protected function getCountryName(int|string|null $id): ?string
    {
        if (! $id) {
            return null;
        }

        $country = Country::find((int) $id);

        return $country ? $country->getTranslation('name', 'pl') : null;
    }

    protected function getCategoryName(int|string|null $id): ?string
    {
        if (! $id) {
            return null;
        }

        if (is_string($id) && str_contains($id, ',')) {
            $ids = explode(',', $id);
            $names = [];
            foreach ($ids as $singleId) {
                $category = Category::find((int) $singleId);
                if ($category) {
                    $names[] = $category->getTranslation('title', 'pl');
                }
            }
            return ! empty($names) ? implode(', ', $names) : null;
        }

        $category = Category::find((int) $id);

        return $category ? $category->getTranslation('title', 'pl') : null;
    }
}
