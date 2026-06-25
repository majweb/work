<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategoryImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Usuwamy wszystkie media z kolekcji 'images_category' dla wszystkich kategorii
        Category::all()->each(function (Category $category) {
            $category->clearMediaCollection('images_category');
        });

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
