<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Jobs\PrepareNewsletterLocale;
use App\Models\Newsletter;
use App\Models\NewsletterCampaign;
use App\Models\NewsletterCampaignLocale;
use App\Models\Project;
use App\Services\Newsletter\GetResponseClient;
use App\Services\Newsletter\NewsletterRenderer;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response as HttpResponse;
use Illuminate\Validation\ValidationException;
use Inertia\Inertia;
use Inertia\Response;
use Symfony\Component\HttpFoundation\BinaryFileResponse;

/**
 * Przygotowanie wysyłek newslettera: treść po polsku -> tłumaczenia -> szkice w GetResponse.
 */
class NewsletterCampaignController extends Controller
{
    /**
     * Instrukcja wysyłki newslettera dla adminów (PDF).
     */
    public function guide(): BinaryFileResponse
    {
        return response()->download(resource_path('newsletter/instrukcja.pdf'), 'Instrukcja - jak wyslac newsletter.pdf');
    }

    public function index(GetResponseClient $getResponse): Response
    {
        $campaigns = NewsletterCampaign::with(['author:id,name', 'locales:id,newsletter_campaign_id,locale,status,recipients_count'])
            ->latest()
            ->paginate(15);

        return Inertia::render('Admin/NewsletterCampaigns/Index', [
            'campaigns' => $campaigns,
            'audience' => $this->audience(),
            'languageNames' => Newsletter::languageNames(),
            'getResponseConfigured' => $getResponse->isConfigured(),
        ]);
    }

    public function create(GetResponseClient $getResponse): Response
    {
        return Inertia::render('Admin/NewsletterCampaigns/Create', [
            'audience' => $this->audience(),
            'languageNames' => Newsletter::languageNames(),
            'getResponseConfigured' => $getResponse->isConfigured(),
        ]);
    }

    public function store(Request $request, GetResponseClient $getResponse): RedirectResponse
    {
        $data = $this->validated($request);

        if (! $getResponse->isConfigured()) {
            throw ValidationException::withMessages(['subject' => 'Brak połączenia z GetResponse (GETRESPONSE_API_KEY). Szkiców nie da się utworzyć.']);
        }

        $audience = $this->audience();
        if ($audience->isEmpty()) {
            throw ValidationException::withMessages(['subject' => 'Brak subskrybentów newslettera.']);
        }

        $campaign = NewsletterCampaign::create($data + ['created_by' => $request->user()->id]);

        foreach ($audience as $row) {
            $item = $campaign->locales()->create([
                'locale' => $row['locale'],
                'recipients_count' => $row['count'],
                'status' => NewsletterCampaignLocale::STATUS_PENDING,
            ]);
            PrepareNewsletterLocale::dispatch($item);
        }

        session()->flash('flash.banner', 'Wysyłka zapisana. Tłumaczenia i szkice w GetResponse przygotowują się w tle.');
        session()->flash('flash.bannerStyle', 'success');

        return to_route('admin.newsletter-campaigns.show', $campaign);
    }

    public function show(NewsletterCampaign $newsletterCampaign): Response
    {
        $newsletterCampaign->load(['author:id,name', 'locales' => fn ($q) => $q->orderByDesc('recipients_count')]);

        return Inertia::render('Admin/NewsletterCampaigns/Show', [
            'campaign' => $newsletterCampaign,
            'languageNames' => Newsletter::languageNames(),
        ]);
    }

    /**
     * Podgląd wersji polskiej w szablonie (HTML do ramki podglądu).
     */
    public function preview(Request $request, NewsletterRenderer $renderer): HttpResponse
    {
        $campaign = new NewsletterCampaign($this->validated($request, preview: true));

        return response($renderer->render($campaign, 'pl', $renderer->sourceTexts($campaign)));
    }

    /**
     * Podgląd zapisanej wersji językowej (po tłumaczeniu).
     */
    public function previewLocale(NewsletterCampaign $newsletterCampaign, NewsletterCampaignLocale $locale, NewsletterRenderer $renderer): HttpResponse
    {
        abort_unless($locale->newsletter_campaign_id === $newsletterCampaign->id && $locale->translated, 404);

        return response($renderer->render($newsletterCampaign, $locale->locale, $locale->translated));
    }

    public function retry(NewsletterCampaign $newsletterCampaign, NewsletterCampaignLocale $locale): RedirectResponse
    {
        abort_unless($locale->newsletter_campaign_id === $newsletterCampaign->id, 404);

        if ($locale->status === NewsletterCampaignLocale::STATUS_FAILED) {
            $locale->update(['status' => NewsletterCampaignLocale::STATUS_PENDING, 'error' => null]);
            PrepareNewsletterLocale::dispatch($locale);
        }

        return back();
    }

    /**
     * Wyszukiwarka aktywnych ofert do sekcji "Polecane oferty".
     */
    public function offers(Request $request, NewsletterRenderer $renderer): JsonResponse
    {
        $search = trim((string) $request->query('q'));

        $projects = Project::active()
            ->when($search !== '', function ($query) use ($search) {
                $query->where(function ($q) use ($search) {
                    $q->where('id', (int) $search)
                        ->orWhere('title->pl', 'like', "%{$search}%")
                        ->orWhere('cityWork', 'like', "%{$search}%");
                });
            })
            ->latest()
            ->limit(20)
            ->get();

        return response()->json($projects->map(fn (Project $project) => ['id' => $project->id] + $renderer->offerData($project, 'pl'))->values());
    }

    /**
     * Subskrybenci według języka - dla każdego języka powstaje osobny szkic.
     */
    protected function audience()
    {
        return Newsletter::whereNotNull('locale')
            ->selectRaw('locale, count(*) as count')
            ->groupBy('locale')
            ->orderByDesc('count')
            ->get()
            ->map(fn ($row) => ['locale' => $row->locale, 'count' => (int) $row->count]);
    }

    protected function validated(Request $request, bool $preview = false): array
    {
        return $request->validate([
            'subject' => [$preview ? 'nullable' : 'required', 'string', 'max:150'],
            'preheader' => ['nullable', 'string', 'max:200'],
            'title' => [$preview ? 'nullable' : 'required', 'string', 'max:150'],
            'intro' => ['nullable', 'string', 'max:500'],
            'content' => [$preview ? 'nullable' : 'required', 'string', 'max:50000'],
            'cta_text' => ['nullable', 'required_with:cta_url', 'string', 'max:60'],
            'cta_url' => ['nullable', 'required_with:cta_text', 'url', 'max:500'],
            'offer_ids' => ['nullable', 'array', 'max:6'],
            'offer_ids.*' => ['integer', 'exists:projects,id'],
        ], [], [
            'subject' => 'temat',
            'title' => 'nagłówek',
            'content' => 'treść',
            'cta_text' => 'tekst przycisku',
            'cta_url' => 'adres przycisku',
            'offer_ids' => 'polecane oferty',
        ]);
    }
}
