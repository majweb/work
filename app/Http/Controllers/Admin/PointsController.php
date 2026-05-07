<?php

namespace App\Http\Controllers\Admin;

use App\Enum\ProductType;
use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Inertia\Response;

class PointsController extends Controller
{
    public function index(): Response
    {
        // Use require to bypass config cache in case it's on
        $pointsConfig = require config_path('getPoints.php');

        $operations = collect($pointsConfig)
            ->reject(fn ($value, $key) => str_ends_with($key, '_default'))
            ->map(function ($value, $key) use ($pointsConfig) {
                return [
                    'id' => $key,
                    'name' => $this->getOperationName($key),
                    'points' => $value,
                    'default_points' => $pointsConfig[$key.'_default'] ?? $value,
                    'category' => $this->getOperationCategory($key),
                ];
            })->values();

        $products = Product::query()
            ->where('product_type', ProductType::POINTS)
            ->get()
            ->map(function (Product $product) {
                return [
                    'id' => $product->id,
                    'name' => $product->getTranslation('name', 'pl'),
                    'points' => $product->points,
                    'price' => $product->price,
                    'active' => $product->active,
                ];
            });

        return Inertia::render('Admin/Marketing/Points/Index', [
            'operations' => $operations,
            'products' => $products,
        ]);
    }

    public function edit(Product $point): Response
    {
        return Inertia::render('Admin/Marketing/Points/Edit', [
            'product' => [
                'id' => $point->id,
                'name' => $point->getTranslations('name'),
                'points' => $point->points,
            ],
            'langs' => config('langsShorts'),
        ]);
    }

    public function update(Request $request, Product $point): RedirectResponse
    {
        $validated = $request->validate([
            'points' => ['nullable', 'integer', 'min:0'],
            'price' => ['nullable', 'numeric', 'min:0'],
            'active' => ['nullable', 'boolean'],
        ]);

        $point->update($validated);

        // Ensure we're using fresh data after update
        $point->refresh();

        return back()->with('flash.banner', 'Produkt został zaktualizowany.');
    }

    public function updateOperation(Request $request, string $key): RedirectResponse
    {
        $validated = $request->validate([
            'points' => ['required', 'integer', 'min:0'],
        ]);

        $pointsConfig = require config_path('getPoints.php');

        if (! array_key_exists($key, $pointsConfig)) {
            return back()->with('error', 'Nie znaleziono klucza '.$key.' w pliku konfiguracyjnym.');
        }

        $pointsConfig[$key] = $validated['points'];

        $path = config_path('getPoints.php');
        $content = "<?php\n\nreturn ".var_export($pointsConfig, true).";\n";

        file_put_contents($path, $content);

        // Opcache can cache required files, so invalidate it if possible
        if (function_exists('opcache_invalidate')) {
            opcache_invalidate($path, true);
        }

        return back()->with('flash.banner', 'Liczba punktów dla operacji została zaktualizowana.');
    }

    public function restoreOperation(string $key): RedirectResponse
    {
        $pointsConfig = require config_path('getPoints.php');

        if (! array_key_exists($key.'_default', $pointsConfig)) {
            return back()->with('error', 'Nie znaleziono domyślnej wartości dla '.$key);
        }

        $pointsConfig[$key] = $pointsConfig[$key.'_default'];

        $path = config_path('getPoints.php');
        $content = "<?php\n\nreturn ".var_export($pointsConfig, true).";\n";

        file_put_contents($path, $content);

        if (function_exists('opcache_invalidate')) {
            opcache_invalidate($path, true);
        }

        return back()->with('flash.banner', 'Przywrócono domyślną liczbę punktów.');
    }

    public function toggle(Product $product): RedirectResponse
    {
        $product->active = ! $product->active;
        $product->save();

        return back()->with('success', 'Status produktu został zmieniony.');
    }

    private function getOperationName(string $key): string
    {
        $names = [
            'OpenAppWithPdf' => 'Odczytanie CV klasycznego',
            'OpenAppWithAudio' => 'Odczytanie CV audio',
            'OpenAppWithVideo' => 'Odczytanie CV wideo',
            'OpenAppWithNoAuth' => 'Odczytanie CV bez autoryzacji',
            'ExportAplications' => 'Eksport danych do arkusza kalk.',
            'UnlockQuestions' => 'Dodatkowe pytania do aplikacji',
            'CreateCandidate' => 'Dodanie kandydata do bazy',
            'CreateExternalFirm' => 'Dodanie firmy zew. do odbiorców',
            'SendToExternalFirm' => 'Wysyłka paczki CV do firmy zew.',
            'AddVideoToProfile' => 'Dodanie filmu do wizytówki',
            'sendReservedProject' => 'Projekt baneru',
        ];

        return $names[$key] ?? $key;
    }

    private function getOperationCategory(string $key): string
    {
        $categories = [
            'OpenAppWithPdf' => 'operacje z CV i bazą danych',
            'OpenAppWithAudio' => 'operacje z CV i bazą danych',
            'OpenAppWithVideo' => 'operacje z CV i bazą danych',
            'OpenAppWithNoAuth' => 'operacje z CV i bazą danych',
            'ExportAplications' => 'operacje z CV i bazą danych',
            'UnlockQuestions' => 'operacje z CV i bazą danych',
            'CreateCandidate' => 'operacje z CV i bazą danych',
            'CreateExternalFirm' => 'operacje z CV i bazą danych',
            'SendToExternalFirm' => 'operacje z CV i bazą danych',
            'AddVideoToProfile' => 'usługi dodatkowe',
            'sendReservedProject' => 'usługi dodatkowe',
        ];

        return $categories[$key] ?? 'inne';
    }
}
