<?php

namespace App\Http\Controllers;

use App\Http\Requests\SendMessageRequest;
use App\Http\Requests\StartConversationRequest;
use App\Models\Conversation;
use App\Models\Message;
use App\Models\Project;
use App\Models\User;
use App\Services\MessengerService;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response as HttpResponse;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;
use Inertia\Inertia;
use Inertia\Response;

/**
 * Wiadomości pracownik - pracodawca (firma albo rekruter) oraz pracodawca - administracja.
 * Jeden widok dla wszystkich ról; aktualizacja przez odpytywanie (bez WebSocketów).
 */
class MessengerController extends Controller
{
    use AuthorizesRequests;

    public function __construct(private MessengerService $messenger) {}

    public function index(Request $request): Response
    {
        return $this->render($request);
    }

    public function show(Request $request, Conversation $conversation): Response
    {
        $this->authorize('view', $conversation);

        // Podgląd firmy nie oznacza wiadomości jako przeczytanych - to rekruter ma je przeczytać
        if ($conversation->hasParticipant($request->user())) {
            $this->messenger->markAsRead($conversation, $request->user());
            $this->messenger->markNotificationsAsRead($conversation, $request->user());
        }

        return $this->render($request, $conversation);
    }

    /**
     * Licznik nieprzeczytanych do ikony wiadomości w menu - odpytywany co kilkanaście sekund.
     */
    public function unreadCount(Request $request): JsonResponse
    {
        return response()->json([
            'unread_count' => $this->messenger->unreadCountFor($request->user()),
            'notifications_count' => $request->user()->unreadNotifications()->count(),
        ]);
    }

    /**
     * "Napisz wiadomość" dla niezalogowanych: zapamiętuje stronę oferty lub firmy i kieruje
     * do logowania/rejestracji. Po zalogowaniu wraca na tę stronę (redirect()->intended),
     * a ?contact=1 od razu otwiera okno wiadomości.
     */
    public function contact(Request $request, User $employer): RedirectResponse
    {
        abort_unless($employer->isMessengerEmployer(), 404);

        $project = $request->filled('project') ? $this->projectOf($employer, $request->integer('project')) : null;

        $target = $project
            ? route('front.projects.single', $project)
            : route('front.firms.single', $employer->employerFirmUser() ?? $employer);

        $target .= '?contact=1';

        if ($request->user()) {
            return redirect()->to($target);
        }

        redirect()->setIntendedUrl($target);

        return redirect()->route($request->boolean('register') ? 'register' : 'login');
    }

    public function store(StartConversationRequest $request): RedirectResponse
    {
        $worker = $request->user();
        $employer = User::findOrFail($request->integer('employer_id'));

        if ($reason = $this->messenger->startDeniedReason($worker, $employer)) {
            return $this->backWithBanner($reason, 'danger');
        }

        // Ofertę przypinamy tylko wtedy, gdy należy do firmy pracodawcy
        $project = $request->filled('project_id') ? $this->projectOf($employer, $request->integer('project_id')) : null;

        $conversation = $this->messenger->startConversation($worker, $employer, $request->string('body')->trim(), $project);

        return to_route('messages.show', $conversation)->with([
            'flash.banner' => __('messenger.sent'),
            'flash.bannerStyle' => 'success',
        ]);
    }

    public function reply(SendMessageRequest $request, Conversation $conversation): RedirectResponse
    {
        if ($reason = $this->messenger->replyDeniedReason($conversation, $request->user())) {
            return $this->backWithBanner($reason, 'danger');
        }

        $project = $request->filled('project_id') && ! $conversation->isWithAdmin()
            ? $this->projectOf($conversation->employer, $request->integer('project_id'))
            : null;

        $this->messenger->sendMessage($conversation, $request->user(), $request->string('body')->trim(), $project);

        return to_route('messages.show', $conversation);
    }

    /**
     * Sygnał "pisze..." wysyłany z pola odpowiedzi (fetch, bez przeładowania strony).
     */
    public function typing(Request $request, Conversation $conversation): HttpResponse
    {
        $this->authorize('view', $conversation);

        if ($this->messenger->replyDeniedReason($conversation, $request->user()) === null) {
            $this->messenger->markTyping($conversation, $request->user());
        }

        return response()->noContent();
    }

    public function accept(Conversation $conversation): RedirectResponse
    {
        $this->authorize('accept', $conversation);

        $this->messenger->accept($conversation);

        return $this->backWithBanner(__('messenger.accepted'));
    }

    public function destroy(Request $request, Conversation $conversation): RedirectResponse
    {
        $this->authorize('delete', $conversation);

        $this->messenger->deleteFor($conversation, $request->user());

        return to_route('messages.index')->with([
            'flash.banner' => __('messenger.deleted'),
            'flash.bannerStyle' => 'success',
        ]);
    }

    public function block(Request $request, Conversation $conversation): RedirectResponse
    {
        $this->authorize('block', $conversation);

        $validated = $request->validate([
            'duration' => ['required', Rule::in([MessengerService::BLOCK_24H, MessengerService::BLOCK_PERMANENT])],
        ]);

        $user = $request->user();
        // Admin blokuje pracodawcę; pracodawca w rozmowie z administracją nie ma tej opcji (polityka)
        $this->messenger->block($user, $conversation->otherParticipant($user), $validated['duration']);

        return $this->backWithBanner($validated['duration'] === MessengerService::BLOCK_24H
            ? __('messenger.blocked24h')
            : __('messenger.blockedPermanent'));
    }

    public function unblock(Request $request, Conversation $conversation): RedirectResponse
    {
        $this->authorize('block', $conversation);

        $this->messenger->unblockInConversation($conversation, $request->user());

        return $this->backWithBanner(__('messenger.unblocked'));
    }

    /**
     * Firma/rekruter: przyjmowanie nowych wiadomości od pracowników i godziny odpowiedzi.
     */
    public function updateSettings(Request $request): RedirectResponse
    {
        abort_unless($request->user()->isMessengerEmployer(), 403);

        $validated = $request->validate([
            'messenger_online' => ['required', 'boolean'],
            'messenger_reply_hours' => ['nullable', 'string', 'max:255'],
        ], [], [
            'messenger_reply_hours' => __('messenger.replyHours'),
        ]);

        $request->user()->update($validated);

        return $this->backWithBanner(__('messenger.settingsSaved'));
    }

    /**
     * Admin zakłada (albo kontynuuje) rozmowę administracji z firmą lub rekruterem - bez akceptacji.
     */
    public function storeAdmin(Request $request): RedirectResponse
    {
        abort_unless($request->user()->isMessengerAdmin(), 403);

        $validated = $request->validate([
            'employer_id' => ['required', 'integer', 'exists:users,id'],
            'body' => ['required', 'string', 'max:5000'],
        ], [], [
            'body' => __('messenger.messageAttribute'),
        ]);

        $employer = User::findOrFail($validated['employer_id']);

        if ($reason = $this->messenger->adminStartDeniedReason($request->user(), $employer)) {
            return $this->backWithBanner($reason, 'danger');
        }

        $conversation = $this->messenger->startAdminConversation($request->user(), $employer, trim($validated['body']));

        return to_route('messages.show', $conversation)->with([
            'flash.banner' => __('messenger.sent'),
            'flash.bannerStyle' => 'success',
        ]);
    }

    private function render(Request $request, ?Conversation $activeConversation = null): Response
    {
        $user = $request->user();

        abort_unless($user->isMessengerWorker() || $user->isMessengerEmployer() || $user->isMessengerAdmin(), 403);

        $view = $this->listView($request, $user, $activeConversation);

        // Propsy jako closure - częste odpytywanie o "pisze..." (only: ['typing'])
        // nie przelicza wtedy listy rozmów ani wiadomości.
        return Inertia::render('Messages/Index', [
            'conversations' => fn () => $view === 'recruiters' ? $this->recruiterConversationsFor($user) : $this->conversationsFor($user),
            // Firma: zakładki "Moje rozmowy" i "Rozmowy rekruterów" (podgląd, tylko odczyt)
            'canOversee' => $user->hasRole('firm') && $user->recruits()->exists(),
            'view' => $view,
            'activeConversation' => fn () => $activeConversation ? $this->conversationDetails($activeConversation, $user) : null,
            'typing' => fn () => $activeConversation !== null
                && $this->messenger->isOtherSideTyping($activeConversation, $user),
            // Lista firm i rekruterów dla admina ładowana dopiero po otwarciu okna "Napisz do firmy"
            'employers' => Inertia::lazy(fn () => $user->isMessengerAdmin() ? $this->employersForAdmin($request) : []),
            'isAdmin' => $user->isMessengerAdmin(),
            'isEmployer' => $user->isMessengerEmployer(),
            'settings' => $user->isMessengerEmployer() ? [
                'messenger_online' => (bool) $user->messenger_online,
                'messenger_reply_hours' => $user->messenger_reply_hours,
            ] : null,
            'prefillProject' => fn () => $this->prefillProject($request, $activeConversation),
        ]);
    }

    /**
     * Odpytywanie otwartego widoku wiadomości (co kilka sekund, axios - nie przerywa wysyłania
     * formularzy jak wizyta Inertii). Otwarta rozmowa jest przy tym oznaczana jako przeczytana.
     */
    public function poll(Request $request): JsonResponse
    {
        $user = $request->user();
        $conversation = $request->filled('conversation') ? Conversation::find($request->integer('conversation')) : null;

        if (! $conversation || ! $user->can('view', $conversation)) {
            $conversation = null;
        } elseif ($conversation->hasParticipant($user)) {
            $this->messenger->markAsRead($conversation, $user);
            $this->messenger->markNotificationsAsRead($conversation, $user);
        }

        $view = $this->listView($request, $user, $conversation);

        return response()->json([
            'conversations' => $view === 'recruiters' ? $this->recruiterConversationsFor($user) : $this->conversationsFor($user),
            'activeConversation' => $conversation ? $this->conversationDetails($conversation, $user) : null,
            'unread_count' => $this->messenger->unreadCountFor($user),
        ]);
    }

    /**
     * Czy druga strona pisze - odpytywane co 2 s przy otwartej rozmowie.
     */
    public function typingState(Request $request, Conversation $conversation): JsonResponse
    {
        $this->authorize('view', $conversation);

        // W podglądzie firmy nie pokazujemy "pisze..."
        $typing = $conversation->hasParticipant($request->user())
            && $this->messenger->isOtherSideTyping($conversation, $request->user());

        return response()->json(['typing' => $typing]);
    }

    /**
     * @return \Illuminate\Support\Collection<int, array<string, mixed>>
     */
    private function conversationsFor(User $user)
    {
        return Conversation::visibleFor($user)
            ->with(['employer.user', 'worker', 'project', 'latestMessage'])
            ->withCount(['messages as unread_count' => fn ($query) => $query
                ->whereNull('read_at')
                ->when(
                    $user->isMessengerAdmin(),
                    // Admin widzi tylko skrzynkę administracji - liczą się wiadomości pracodawcy
                    fn ($q) => $q->whereColumn('messages.sender_id', 'conversations.employer_id'),
                    fn ($q) => $q->where('sender_id', '!=', $user->id),
                )])
            ->orderByDesc('last_message_at')
            ->get()
            ->map(fn (Conversation $conversation) => $this->conversationSummary($conversation, $user));
    }

    /**
     * Firma: lista własnych rozmów albo rozmów jej rekruterów (?view=recruiters).
     * Otwarta rozmowa rekrutera zawsze pokazuje listę rekruterów.
     */
    private function listView(Request $request, User $user, ?Conversation $conversation): string
    {
        if (! $user->hasRole('firm')) {
            return 'mine';
        }

        if ($conversation) {
            return $conversation->hasParticipant($user) ? 'mine' : 'recruiters';
        }

        return $request->query('view') === 'recruiters' ? 'recruiters' : 'mine';
    }

    /**
     * Rozmowy rekruterów firmy z pracownikami (podgląd firmy).
     *
     * @return \Illuminate\Support\Collection<int, array<string, mixed>>
     */
    private function recruiterConversationsFor(User $firm)
    {
        return Conversation::ofFirmRecruiters($firm)
            ->with(['employer.user', 'worker', 'project', 'latestMessage'])
            ->orderByDesc('last_message_at')
            ->get()
            ->map(fn (Conversation $conversation) => $this->conversationSummary($conversation, $firm));
    }

    /**
     * Przejście do rozmowy z oferty (?project=ID) - podpowiadamy w polu odpowiedzi, której oferty dotyczy.
     *
     * @return array<string, mixed>|null
     */
    private function prefillProject(Request $request, ?Conversation $conversation): ?array
    {
        if (! $conversation || $conversation->isWithAdmin() || ! $request->filled('project')) {
            return null;
        }

        $project = $this->projectOf($conversation->employer, $request->integer('project'));

        return $project ? $this->projectData($project) : null;
    }

    /**
     * @return array<string, mixed>
     */
    private function conversationSummary(Conversation $conversation, User $user): array
    {
        $latest = $conversation->latestMessage;
        $oversight = $this->isOversight($conversation, $user);

        return [
            'id' => $conversation->id,
            'status' => $conversation->status,
            'type' => $conversation->type,
            'is_employer' => $conversation->isEmployer($user) || $oversight,
            'participant' => $oversight ? $this->participant($conversation->worker) : $this->participantFor($conversation, $user),
            // Podgląd firmy: który rekruter prowadzi rozmowę
            'recruiter_name' => $oversight ? $conversation->employer->name : null,
            'project_title' => $conversation->project ? $this->messenger->projectTitle($conversation->project) : null,
            'last_message' => $latest ? [
                'body' => Str::limit($latest->body, 80),
                'is_mine' => $oversight ? $latest->sender_id === $conversation->employer_id : $conversation->isSameSide($user, $latest->sender_id),
                'created_at' => $latest->created_at->toIso8601String(),
            ] : null,
            'unread_count' => $oversight ? 0 : (int) $conversation->unread_count,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    private function conversationDetails(Conversation $conversation, User $user): array
    {
        $conversation->loadMissing(['employer.user', 'worker', 'project']);
        $oversight = $this->isOversight($conversation, $user);
        $blockByMe = $oversight ? null : $this->messenger->activeBlockFor($conversation, $user);
        $replyDeniedReason = $oversight
            ? __('messenger.oversightReadOnly', ['name' => $conversation->employer->name])
            : $this->messenger->replyDeniedReason($conversation, $user);
        // W skrzynce administracji admin widzi, który z adminów napisał daną wiadomość
        $showAuthors = $conversation->isWithAdmin() && $user->isMessengerAdmin();

        return [
            'id' => $conversation->id,
            'type' => $conversation->type,
            'status' => $conversation->status,
            'is_employer' => $conversation->isEmployer($user) || $oversight,
            // Podgląd firmy: rozmowa rekrutera, tylko odczyt (wiadomości rekrutera po prawej)
            'oversight' => $oversight,
            // Firma ogląda swojego rekrutera - samo imię, bez nazwy firmy
            'recruiter' => $oversight ? ['name' => $conversation->employer->name] + $this->participant($conversation->employer) : null,
            'participant' => $oversight ? $this->participant($conversation->worker) : $this->participantFor($conversation, $user),
            'project' => $conversation->project ? $this->projectData($conversation->project) : null,
            'messages' => ($oversight ? $conversation->messages() : $conversation->visibleMessagesFor($user))
                ->with(['project', 'sender'])
                ->oldest()
                ->get()
                ->map(fn (Message $message) => [
                    'id' => $message->id,
                    'body' => $message->body,
                    'is_mine' => $oversight ? $message->sender_id === $conversation->employer_id : $conversation->isSameSide($user, $message->sender_id),
                    'author' => $showAuthors && $message->sender_id !== $conversation->employer_id
                        ? $message->sender?->name
                        : null,
                    'project' => $message->project ? $this->projectData($message->project) : null,
                    'read_at' => $message->read_at?->toIso8601String(),
                    'created_at' => $message->created_at->toIso8601String(),
                ]),
            'can_accept' => $user->can('accept', $conversation),
            'can_block' => $user->can('block', $conversation),
            'can_delete' => $user->can('delete', $conversation),
            'can_reply' => $replyDeniedReason === null,
            'reply_denied_reason' => $replyDeniedReason,
            'blocked_by_me' => $blockByMe ? [
                'until' => $blockByMe->blocked_until?->toIso8601String(),
            ] : null,
        ];
    }

    /**
     * Firma ogląda rozmowę swojego rekrutera, nie będąc jej uczestnikiem.
     */
    private function isOversight(Conversation $conversation, User $user): bool
    {
        return ! $conversation->hasParticipant($user) && $conversation->isOverseenBy($user);
    }

    /**
     * Druga strona rozmowy. Pracodawca rozmawiający z administracją widzi "Administrację",
     * online, gdy którykolwiek admin jest aktywny.
     *
     * @return array<string, mixed>
     */
    private function participantFor(Conversation $conversation, User $user): array
    {
        $other = $conversation->otherParticipant($user);

        if ($other !== null) {
            return $this->participant($other);
        }

        $lastSeenAdmin = User::role('admin')->whereNotNull('last_seen_at')->orderByDesc('last_seen_at')->first();

        return [
            'id' => 0,
            'name' => __('messenger.administration'),
            'avatar' => asset('images/mail.png'),
            'role' => 'admin',
            'is_online' => (bool) $lastSeenAdmin?->isOnline(),
            'last_seen_at' => $lastSeenAdmin?->last_seen_at?->toIso8601String(),
            'accepts_messages' => null,
            'reply_hours' => null,
            'profile_url' => null,
        ];
    }

    /**
     * Firmy i rekruterzy, do których admin może napisać - z wyszukiwaniem po nazwie lub e-mailu.
     *
     * @return array<int, array<string, mixed>>
     */
    private function employersForAdmin(Request $request): array
    {
        $search = trim((string) $request->query('employer_search'));

        $employers = User::role(['firm', 'recruit'])
            ->with('user')
            ->when($search !== '', fn ($query) => $query->where(fn ($q) => $q
                ->where('email', 'like', "%{$search}%")
                ->orWhere('name', 'like', "%{$search}%")))
            ->orderByDesc('last_seen_at')
            ->limit(30)
            ->get()
            ->filter(fn (User $employer) => $employer->isMessengerEmployer());

        $conversationIds = Conversation::where('type', Conversation::TYPE_ADMIN)
            ->whereIn('employer_id', $employers->pluck('id'))
            ->pluck('id', 'employer_id');

        return $employers->map(fn (User $employer) => [
            ...$this->participant($employer),
            'email' => $employer->email,
            'conversation_id' => $conversationIds[$employer->id] ?? null,
        ])->values()->all();
    }

    /**
     * @return array<string, mixed>
     */
    private function participant(User $participant): array
    {
        $isEmployer = $participant->isMessengerEmployer();
        $firm = $isEmployer ? $participant->employerFirmUser() : null;

        return [
            'id' => $participant->id,
            'name' => $participant->messengerName(),
            'avatar' => $participant->profile_photo_url,
            'role' => $isEmployer ? ($participant->isRecruiter() ? 'recruiter' : 'firm') : 'worker',
            'is_online' => $participant->isOnline(),
            'last_seen_at' => $participant->last_seen_at?->toIso8601String(),
            // Tylko pracodawca ma przełącznik przyjmowania wiadomości
            'accepts_messages' => $isEmployer ? (bool) $participant->messenger_online : null,
            'reply_hours' => $isEmployer ? $participant->messenger_reply_hours : null,
            'profile_url' => $firm ? route('front.firms.single', $firm, false) : null,
        ];
    }

    /**
     * Oferta firmy, do której należy pracodawca (konto firmy albo jej rekruter).
     */
    private function projectOf(User $employer, int $projectId): ?Project
    {
        $firm = $employer->employerFirmUser();

        return $firm ? Project::where('user_id', $firm->id)->find($projectId) : null;
    }

    /**
     * @return array<string, mixed>
     */
    private function projectData(Project $project): array
    {
        return [
            'id' => $project->id,
            'title' => $this->messenger->projectTitle($project),
            'url' => route('front.projects.single', $project, false),
        ];
    }

    private function backWithBanner(string $message, string $style = 'success'): RedirectResponse
    {
        return back()->with([
            'flash.banner' => $message,
            'flash.bannerStyle' => $style,
        ]);
    }
}
