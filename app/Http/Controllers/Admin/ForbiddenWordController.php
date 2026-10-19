<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ForbiddenWord;
use App\Services\ForbiddenWordFilter;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Inertia\Inertia;
use Inertia\Response;

/**
 * Zakazane słowa w wiadomościach pracownik - pracodawca. Wiadomość z takim słowem
 * nie zostaje wysłana; administracja pisze bez filtra.
 */
class ForbiddenWordController extends Controller
{
    public function index(Request $request): Response
    {
        $words = ForbiddenWord::query()
            ->when($request->filled('search'), fn ($query) => $query->where('word', 'like', '%'.$request->string('search').'%'))
            ->when($request->input('filter') === 'inactive', fn ($query) => $query->where('is_active', false))
            ->when($request->input('filter') === 'active', fn ($query) => $query->where('is_active', true))
            ->orderBy('word')
            ->paginate(100)
            ->withQueryString();

        return Inertia::render('Admin/ForbiddenWords/Index', [
            'words' => $words,
            'filters' => $request->only(['search', 'filter']),
            'totals' => [
                'all' => ForbiddenWord::count(),
                'active' => ForbiddenWord::where('is_active', true)->count(),
            ],
        ]);
    }

    /**
     * Dodanie jednego lub wielu słów naraz (każde w nowej linii albo po przecinku).
     */
    public function store(Request $request): RedirectResponse
    {
        $data = $request->validate([
            'words' => ['required', 'string', 'max:5000'],
            'note' => ['nullable', 'string', 'max:255'],
        ], [], ['words' => 'słowa', 'note' => 'notatka']);

        $existing = ForbiddenWord::pluck('word')->map(fn (string $word) => $this->key($word))->flip();
        $added = 0;

        foreach (preg_split('/[\r\n,;]+/', $data['words']) ?: [] as $raw) {
            $word = $this->clean($raw);

            if ($word === '' || ForbiddenWordFilter::patternFor($word) === null || $existing->has($this->key($word))) {
                continue;
            }

            ForbiddenWord::create(['word' => $word, 'note' => $data['note'] ?? null]);
            $existing->put($this->key($word), true);
            $added++;
        }

        return back()->with([
            'flash.banner' => $added > 0 ? 'Dodano słów: '.$added.'.' : 'Nic nie dodano - te słowa są już na liście.',
            'flash.bannerStyle' => $added > 0 ? 'success' : 'danger',
        ]);
    }

    public function update(Request $request, ForbiddenWord $forbiddenWord): RedirectResponse
    {
        $data = $request->validate([
            'word' => ['sometimes', 'required', 'string', 'max:100'],
            'is_active' => ['sometimes', 'boolean'],
            'note' => ['sometimes', 'nullable', 'string', 'max:255'],
        ], [], ['word' => 'słowo', 'note' => 'notatka']);

        if (array_key_exists('word', $data)) {
            $data['word'] = $this->clean($data['word']);

            $duplicate = ForbiddenWord::query()
                ->whereKeyNot($forbiddenWord->id)
                ->pluck('word')
                ->contains(fn (string $word) => $this->key($word) === $this->key($data['word']));

            if ($data['word'] === '' || ForbiddenWordFilter::patternFor($data['word']) === null || $duplicate) {
                return back()->withErrors(['word' => $duplicate ? 'To słowo jest już na liście.' : 'Wpisz słowo z liter.']);
            }
        }

        $forbiddenWord->update($data);

        return back()->with(['flash.banner' => 'Zapisano.', 'flash.bannerStyle' => 'success']);
    }

    public function destroy(ForbiddenWord $forbiddenWord): RedirectResponse
    {
        $forbiddenWord->delete();

        return back()->with(['flash.banner' => 'Słowo zostało usunięte z listy.', 'flash.bannerStyle' => 'success']);
    }

    /**
     * Podgląd: które słowa z listy zablokowałyby podany tekst.
     */
    public function check(Request $request, ForbiddenWordFilter $filter): JsonResponse
    {
        $data = $request->validate(['text' => ['required', 'string', 'max:5000']]);

        return response()->json(['matches' => $filter->allMatches($data['text'])]);
    }

    /** Wpis z panelu: bez zbędnych spacji, gwiazdka tylko na końcu. */
    private function clean(string $word): string
    {
        $word = Str::squish(mb_strtolower($word));
        $stem = str_ends_with($word, '*');

        return trim(str_replace('*', '', $word)).($stem ? '*' : '');
    }

    /** Klucz porównania duplikatów: "Jebać" = "jebac". */
    private function key(string $word): string
    {
        return ForbiddenWordFilter::normalizeWord($word).(str_ends_with($word, '*') ? '*' : '');
    }
}
