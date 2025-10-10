<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoryImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = Category::whereNull('parent_id')->get();

        foreach ($categories as $category) {
            $categoryFolder = public_path("/images/seeds/categories/{$category->id}");

            // Dodajemy 5 plików
            for ($i = 1; $i <= 5; $i++) {
                $filePath = "{$categoryFolder}/{$i}.jpg";

                if (file_exists($filePath)) {
                    $category->addMedia($filePath)
                        ->preservingOriginal()
                        ->toMediaCollection('images_category');
                } else {
                    echo "Brak pliku: {$filePath}\n";
                }
            }
        }

        echo "Dodano zdjęcia do wszystkich kategorii nadrzędnych.\n";
    }
}
