<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Lang\Lang;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Inertia\Inertia;
use Inertia\Response;
use App\Http\Resources\LanguageResource;
use Illuminate\Support\Facades\Validator;

class LanguageController extends Controller
{
    public function index(Request $request): Response
    {
        $search = $request->search;
        $languages = collect(LanguageResource::collection(Lang::cases())->toArray(request()));

        if ($search) {
            $search = strtolower($search);
            $languages = $languages->filter(function ($lang) use ($search) {
                return str_contains(strtolower($lang['value']), $search) ||
                       str_contains(strtolower($lang['label']), $search);
            });
        }

        $languages = $languages->sortBy('value')->values();

        return Inertia::render('Admin/Languages/Index', [
            'languages' => $languages,
            'filters' => $request->only(['search']),
        ]);
    }

    public function create(): Response
    {
        return Inertia::render('Admin/Languages/Create', [
            'availableLocales' => config('langsShorts'),
        ]);
    }

    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'code' => [
                'required',
                'string',
                'size:2',
                function ($attribute, $value, $fail) {
                    $code = strtolower($value);
                    if (collect(Lang::cases())->pluck('value')->contains($code)) {
                        $fail('Ten kod języka już istnieje w systemie.');
                    }
                },
            ],
            'labels' => 'required|array',
            'labels.*' => 'required|string|min:1',
        ], [
            'code.required' => 'Kod języka jest wymagany.',
            'code.size' => 'Kod języka musi mieć dokładnie 2 znaki.',
            'labels.required' => 'Etykiety są wymagane.',
            'labels.*.required' => 'Nazwa języka we wszystkich tłumaczeniach jest wymagana.',
        ]);

        $value = strtolower($validated['code']);

        $code = strtoupper($validated['code']);
        $labels = $validated['labels'];

        $this->addToEnum($code, $value, $labels);

        return redirect()->route('admin.languages.index')->with('flash.banner', 'Język został dodany.');
    }

    public function edit(string $langValue): Response
    {
        $lang = Lang::tryFrom($langValue);

        if (!$lang) {
            abort(404, 'Język nie istnieje.');
        }

        // Wyciągamy etykiety dla tego języka z Enuma
        $labels = $this->getLabelsForLang($lang);

        return Inertia::render('Admin/Languages/Edit', [
            'language' => [
                'code' => strtoupper($lang->name),
                'value' => $lang->value,
                'labels' => $labels,
            ],
            'availableLocales' => config('langsShorts'),
        ]);
    }

    public function update(Request $request, string $langValue): RedirectResponse
    {
        $lang = Lang::tryFrom($langValue);

        if (!$lang) {
            return redirect()->route('admin.languages.index')->with('flash.banner', 'Język nie istnieje.');
        }

        $validated = $request->validate([
            'labels' => 'required|array',
            'labels.*' => 'required|string|min:1',
        ], [
            'labels.required' => 'Etykiety są wymagane.',
            'labels.*.required' => 'Nazwa języka we wszystkich tłumaczeniach jest wymagana.',
        ]);

        $code = strtoupper($lang->name);

        $this->updateInEnum($code, $lang->value, $validated['labels']);

        return redirect()->route('admin.languages.index')->with('flash.banner', 'Język został zaktualizowany.');
    }

    public function destroy(string $langValue): RedirectResponse
    {
        $lang = Lang::tryFrom($langValue);

        if (!$lang) {
            return redirect()->route('admin.languages.index')->with('flash.banner', 'Język nie istnieje lub został już usunięty.');
        }

        $code = strtoupper($lang->name);

        $this->removeFromEnum($code, $langValue);

        return redirect()->route('admin.languages.index')->with('flash.banner', 'Język został usunięty.');
    }

    private function getLabelsForLang(Lang $lang): array
    {
        $content = File::get(app_path('Lang/Lang.php'));
        $labels = [];

        foreach (config('langsShorts') as $locale) {
            // Wzór namierzający konkretną etykietę w konkretnym locale
            // 'locale' => [ ... 'value' => 'etykieta' ... ]
            // negative lookahead (?!'[^']*'\s*=>\s*\[) zapewnia, że nie wyjdziemy poza bieżący blok locale
            $pattern = "/'{$locale}'\s*=>\s*\[(?:(?!'[^']*'\s*=>\s*\[).)*'{$lang->value}'\s*=>\s*['\"]([^'\"]*)['\"]/s";
            if (preg_match($pattern, $content, $matches)) {
                $labels[$locale] = $matches[1];
            } else {
                $labels[$locale] = '';
            }
        }

        return $labels;
    }

    private function addToEnum(string $code, string $value, array $labels): void
    {
        $path = app_path('Lang/Lang.php');
        $content = File::get($path);

        // 1. Dodaj case
        $caseLine = "    case {$code} = '{$value}';\n";
        $content = preg_replace('/(case [A-Z]{2} = \'[a-z]{2}\';)/', "$caseLine$1", $content, 1);

        // 2. Dodaj etykiety w metodzie label()
        foreach ($labels as $locale => $label) {
            $pattern = "/('{$locale}'\s*=>\s*\[)/";
            // Dodajemy na początku tablicy dla danego locale, aby mieć pewność że nie wyjdziemy poza zakres
            $newLabel = "'{$value}' => '{$label}',";
            if ($locale === 'en' && str_contains($label, "'")) {
                $newLabel = "'{$value}' => \"{$label}\",";
            }
            $replacement = "$1\n                $newLabel";
            $content = preg_replace($pattern, $replacement, $content);
        }

        // 3. Dodaj do bloku match
        $matchLine = "            self::{$code} => \$array[app()->getLocale()]['{$value}'],\n";
        $content = preg_replace('/(            self::[A-Z]{2} => \$array\[app\(\)->getLocale\(\)\]\[\'[a-z]{2}\'\],)/', "$matchLine$1", $content, 1);

        File::put($path, $content);
    }

    private function updateInEnum(string $code, string $value, array $labels): void
    {
        $path = app_path('Lang/Lang.php');
        $content = File::get($path);

        foreach ($labels as $locale => $label) {
            // Wzór namierzający konkretną etykietę w konkretnym locale
            // 'locale' => [ ... 'value' => 'etykieta' ... ]
            // negative lookahead (?!'[^']*'\s*=>\s*\[) zapewnia, że operujemy tylko wewnątrz bloku locale
            $pattern = "/('{$locale}'\s*=>\s*\[(?:(?!'[^']*'\s*=>\s*\[).)*)'{$value}'\s*=>\s*['\"][^'\"]*['\"]/s";

            // Sprawdzamy, czy blok i klucz istnieją
            if (preg_match($pattern, $content)) {
                // Zachowujemy oryginalny cudzysłów (pojedynczy lub podwójny), jeśli to możliwe
                // Ale dla uproszczenia i spójności wymuszamy pojedyncze cudzysłowy, chyba że to blok 'en' który bywa problematyczny
                // Jednak najbezpieczniej jest użyć tego co pasuje do regexa
                $replacement = "$1'{$value}' => '{$label}'";
                if ($locale === 'en' && str_contains($label, "'")) {
                    $replacement = "$1'{$value}' => \"{$label}\"";
                }
                $content = preg_replace($pattern, $replacement, $content);
            } else {
                // Jeśli klucz nie istnieje w bloku danego locale, to go dodajemy na początku bloku
                $pattern = "/('{$locale}'\s*=>\s*\[)/";
                $newLabel = "'{$value}' => '{$label}',";
                if ($locale === 'en' && str_contains($label, "'")) {
                    $newLabel = "'{$value}' => \"{$label}\",";
                }
                $replacement = "$1\n                $newLabel";
                $content = preg_replace($pattern, $replacement, $content);
            }
        }

        File::put($path, $content);
    }

    private function removeFromEnum(string $code, string $value): void
    {
        $path = app_path('Lang/Lang.php');
        $content = File::get($path);

        // 1. Usuń z bloku match
        $matchPattern = "/\s*self::{$code}\s*=>\s*\\\$array\[app\(\)->getLocale\(\)\]\['{$value}'\],?\n?/";
        $content = preg_replace($matchPattern, "\n", $content);

        // 2. Usuń etykiety z tablicy $array
        // Poprawiony regex, aby nie usuwał etykiet z innych tablic jeśli mają ten sam klucz (choć tu to mało prawdopodobne, ale dla bezpieczeństwa)
        // Szukamy wewnątrz bloków 'locale' => [ ... ]
        foreach (config('langsShorts') as $locale) {
            $pattern = "/('{$locale}'\s*=>\s*\[(?:(?!'[^']*'\s*=>\s*\[).)*)\s*'{$value}'\s*=>\s*['\"][^'\"]*['\"],?\n?/s";
            $content = preg_replace($pattern, "$1", $content);
        }

        // 3. Usuń case
        $casePattern = "/\s*case {$code} = '{$value}';\n?/";
        $content = preg_replace($casePattern, "\n", $content);

        // 4. Sprzątanie pustych linii (usuwamy nadmiarowe \n\n powstałe przez usunięcie wpisu)
        $content = preg_replace("/\n{3,}/", "\n\n", $content);

        File::put($path, $content);
    }
}
