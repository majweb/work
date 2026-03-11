<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Inertia\Inertia;
use Inertia\Response;

class CurrencyController extends Controller
{
    public function index(Request $request): Response
    {
        $search = $request->search;

        $currencies = config('currencyShorts');

        $currencies = collect($currencies);

        if ($search) {
            $search = strtolower($search);
            $currencies = $currencies->filter(function ($currency) use ($search) {
                return str_contains(strtolower($currency['name']), $search) ||
                       str_contains(strtolower($currency['code']), $search) ||
                       str_contains(strtolower($currency['value']), $search);
            });
        }

        return Inertia::render('Admin/Currencies/Index', [
            'currencies' => $currencies->values()->all(),
            'filters' => $request->only(['search']),
        ]);
    }

    public function create(): Response
    {
        return Inertia::render('Admin/Currencies/Create');
    }

    public function store(Request $request): RedirectResponse
    {
        $currencies = config('currencyShorts');

        $validated = $request->validate([
            'name' => [
                'required',
                'string',
                'max:10',
                function ($attribute, $value, $fail) use ($currencies) {
                    if (collect($currencies)->where('name', strtoupper($value))->first()) {
                        $fail('Ta waluta już istnieje (skrót musi być unikalny).');
                    }
                },
            ],
            'code' => 'required|string|max:255',
            'value' => [
                'required',
                'string',
                'max:10',
                function ($attribute, $value, $fail) use ($currencies) {
                    if (collect($currencies)->where('value', $value)->first()) {
                        $fail('Ten symbol waluty jest już używany.');
                    }
                },
            ],
        ], [
            'name.required' => 'Pole skrót (np. USD) jest wymagane.',
            'code.required' => 'Pole nazwa (np. Dolar) jest wymagane.',
            'value.required' => 'Pole symbol (np. $) jest wymagane.',
        ]);

        $currencies[] = [
            'name' => strtoupper($validated['name']),
            'code' => $validated['code'],
            'value' => $validated['value'],
        ];

        $this->saveToConfig($currencies);

        return redirect()->route('admin.currencies.index')->with('flash.banner', 'Waluta została dodana.');
    }

    public function edit(string $name): Response
    {
        $currencies = config('currencyShorts');
        $currency = collect($currencies)->firstWhere('name', $name);

        if (!$currency) {
            abort(404);
        }

        return Inertia::render('Admin/Currencies/Edit', [
            'currency' => $currency,
        ]);
    }

    public function update(Request $request, string $name): RedirectResponse
    {
        $currencies = config('currencyShorts');

        $validated = $request->validate([
            'name' => [
                'required',
                'string',
                'max:10',
                function ($attribute, $value, $fail) use ($currencies, $name) {
                    if (strtoupper($value) !== strtoupper($name) && collect($currencies)->where('name', strtoupper($value))->first()) {
                        $fail('Ta waluta już istnieje (skrót musi być unikalny).');
                    }
                },
            ],
            'code' => 'required|string|max:255',
            'value' => [
                'required',
                'string',
                'max:10',
                function ($attribute, $value, $fail) use ($currencies, $name) {
                    $existing = collect($currencies)->where('value', $value)->first();
                    if ($existing && $existing['name'] !== $name) {
                        $fail('Ten symbol waluty jest już używany.');
                    }
                },
            ],
        ], [
            'name.required' => 'Pole skrót (np. USD) jest wymagane.',
            'code.required' => 'Pole nazwa (np. Dolar) jest wymagane.',
            'value.required' => 'Pole symbol (np. $) jest wymagane.',
        ]);

        $found = false;

        foreach ($currencies as &$currency) {
            if ($currency['name'] === $name) {
                $currency['name'] = strtoupper($validated['name']);
                $currency['code'] = $validated['code'];
                $currency['value'] = $validated['value'];
                $found = true;
                break;
            }
        }

        if (!$found) {
            abort(404);
        }

        $this->saveToConfig($currencies);

        return redirect()->route('admin.currencies.index')->with('flash.banner', 'Waluta została zaktualizowana.');
    }

    public function destroy(string $name): RedirectResponse
    {
        $currencies = config('currencyShorts');
        $filtered = array_filter($currencies, function ($currency) use ($name) {
            return $currency['name'] !== $name;
        });

        if (count($currencies) === count($filtered)) {
            abort(404);
        }

        $this->saveToConfig(array_values($filtered));

        return redirect()->route('admin.currencies.index')->with('flash.banner', 'Waluta została usunięta.');
    }

    protected function saveToConfig(array $currencies): void
    {
        $content = "<?php\nreturn " . var_export($currencies, true) . ";\n";
        // Convert array() to [] for modern style
        $content = str_replace(['array (', ')'], ['[', ']'], $content);

        File::put(config_path('currencyShorts.php'), $content);
    }
}
