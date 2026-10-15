<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Jobs\SyncNewsletterSubscriber;
use App\Models\Newsletter;
use App\Services\Newsletter\GetResponseClient;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Inertia\Inertia;
use Inertia\Response;
use Throwable;

/**
 * Listy newslettera (jedna na język) i ich kontakty: zapisani w portalu porównani z tym, co jest w GetResponse.
 */
class NewsletterListController extends Controller
{
    public function index(GetResponseClient $getResponse): Response
    {
        $local = Newsletter::whereNotNull('locale')
            ->selectRaw('locale, count(*) as total, sum(getresponse_synced_at is null) as pending')
            ->groupBy('locale')
            ->get()
            ->keyBy('locale');

        $remote = [];
        $error = null;

        if ($getResponse->isConfigured()) {
            try {
                $remote = $getResponse->newsletterLists();
                foreach ($remote as $locale => $list) {
                    $remote[$locale]['contacts'] = $getResponse->contactsCount($list['id']);
                }
            } catch (Throwable $e) {
                $error = $e->getMessage();
            }
        }

        $lists = collect($local->keys())->merge(array_keys($remote))->unique()
            ->map(fn ($locale) => [
                'locale' => $locale,
                'list_name' => $remote[$locale]['name'] ?? null,
                'subscribers' => (int) ($local[$locale]->total ?? 0),
                'pending' => (int) ($local[$locale]->pending ?? 0),
                'contacts' => $remote[$locale]['contacts'] ?? null,
            ])
            ->sortByDesc('subscribers')
            ->values();

        return Inertia::render('Admin/NewsletterCampaigns/Lists', [
            'lists' => $lists,
            'languageNames' => Newsletter::languageNames(),
            'getResponseConfigured' => $getResponse->isConfigured(),
            'getResponseError' => $error,
        ]);
    }

    public function show(Request $request, string $locale, GetResponseClient $getResponse): Response
    {
        $listName = config('services.getresponse.list_prefix').$locale;
        $remoteEmails = null;
        $error = null;

        if ($getResponse->isConfigured()) {
            if ($request->boolean('refresh')) {
                Cache::forget("getresponse_contacts_{$listName}");
            }

            try {
                // Lista kontaktów z GetResponse na kilka minut - przy dużych listach to kilka zapytań do API
                $remoteEmails = Cache::remember("getresponse_contacts_{$listName}", now()->addMinutes(5), function () use ($getResponse, $locale) {
                    $list = $getResponse->newsletterLists()[$locale] ?? null;

                    return $list ? $getResponse->contactEmails($list['id']) : [];
                });
            } catch (Throwable $e) {
                $error = $e->getMessage();
            }
        }

        $subscribers = Newsletter::where('locale', $locale)
            ->when($request->filled('search'), fn ($q) => $q->where('email', 'like', '%'.$request->search.'%'))
            ->latest('id')
            ->paginate(25, ['id', 'email', 'country_code', 'created_at', 'getresponse_synced_at'])
            ->withQueryString()
            ->through(fn (Newsletter $subscriber) => [
                'id' => $subscriber->id,
                'email' => $subscriber->email,
                'country_code' => $subscriber->country_code,
                'created_at' => $subscriber->created_at,
                'synced_at' => $subscriber->getresponse_synced_at,
                'status' => $this->status($subscriber, $remoteEmails),
            ]);

        // Kontakty na liście w GetResponse, których nie ma wśród zapisanych w portalu (np. dodane ręcznie)
        $onlyInGetResponse = [];
        if ($remoteEmails) {
            $portalEmails = Newsletter::where('locale', $locale)->pluck('email')->map(fn ($email) => mb_strtolower($email))->flip();
            $onlyInGetResponse = collect($remoteEmails)
                ->reject(fn ($createdOn, $email) => $portalEmails->has($email))
                ->map(fn ($createdOn, $email) => ['email' => $email, 'created_at' => $createdOn])
                ->values()
                ->take(200);
        }

        return Inertia::render('Admin/NewsletterCampaigns/ListContacts', [
            'locale' => $locale,
            'languageName' => Newsletter::languageNames()[$locale] ?? $locale,
            'listName' => $listName,
            'subscribers' => $subscribers,
            'pendingCount' => Newsletter::where('locale', $locale)->whereNull('getresponse_synced_at')->count(),
            'contactsCount' => $remoteEmails === null ? null : count($remoteEmails),
            'onlyInGetResponse' => $onlyInGetResponse,
            'filters' => $request->only('search'),
            'getResponseConfigured' => $getResponse->isConfigured(),
            'getResponseError' => $error,
        ]);
    }

    /**
     * Przenosi do GetResponse subskrybentów tego języka, którzy jeszcze tam nie trafili.
     */
    public function sync(string $locale, GetResponseClient $getResponse): RedirectResponse
    {
        if (! $getResponse->isConfigured()) {
            return back()->with(['flash.banner' => 'Brak połączenia z GetResponse (GETRESPONSE_API_KEY).', 'flash.bannerStyle' => 'danger']);
        }

        $pending = Newsletter::where('locale', $locale)->whereNull('getresponse_synced_at')->get();
        $pending->each(fn (Newsletter $subscriber) => SyncNewsletterSubscriber::dispatch($subscriber));
        Cache::forget('getresponse_contacts_'.config('services.getresponse.list_prefix').$locale);

        return back()->with([
            'flash.banner' => "Przenoszenie do GetResponse: {$pending->count()}. Kontakty pojawią się na liście w ciągu kilku minut.",
            'flash.bannerStyle' => 'success',
        ]);
    }

    /**
     * Usuwa subskrybenta z portalu i jego kontakt z list newslettera w GetResponse.
     * Gdy GetResponse nie odpowiada, subskrybent zostaje - żeby nie został kontakt, o którym portal już nie wie.
     */
    public function destroy(Newsletter $subscriber, GetResponseClient $getResponse): RedirectResponse
    {
        $removed = 0;

        if ($getResponse->isConfigured()) {
            try {
                $removed = $getResponse->deleteContact($subscriber->email);
            } catch (Throwable $e) {
                return back()->with([
                    'flash.banner' => "Nie usunięto {$subscriber->email}: GetResponse nie odpowiada. Spróbuj ponownie za chwilę.",
                    'flash.bannerStyle' => 'danger',
                ]);
            }

            if ($subscriber->locale) {
                Cache::forget('getresponse_contacts_'.config('services.getresponse.list_prefix').$subscriber->locale);
            }
        }

        $subscriber->delete();

        return back()->with([
            'flash.banner' => $removed
                ? "Usunięto {$subscriber->email} z portalu i z GetResponse."
                : "Usunięto {$subscriber->email} z portalu. W GetResponse nie było go na liście newslettera.",
            'flash.bannerStyle' => 'success',
        ]);
    }

    /**
     * Gdzie jest subskrybent: na liście w GetResponse, czeka na przeniesienie albo został przeniesiony, ale go tam nie ma
     * (adres odrzucony przez GetResponse, wypisany z newslettera lub usunięty z listy).
     */
    protected function status(Newsletter $subscriber, ?array $remoteEmails): string
    {
        if (! $subscriber->getresponse_synced_at) {
            return 'pending';
        }

        if ($remoteEmails === null) {
            return 'synced';
        }

        return array_key_exists(mb_strtolower($subscriber->email), $remoteEmails) ? 'on_list' : 'missing';
    }
}
