<?php

namespace App\Services;

use App\Models\ContactBlock;
use App\Models\Conversation;
use App\Models\Firm;
use App\Models\Message;
use App\Models\Project;
use App\Models\User;
use App\Notifications\ConversationAcceptedNotification;
use App\Notifications\NewMessageNotification;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Notifications\DatabaseNotification;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Notification;

/**
 * Reguły wiadomości: rozmowy pracownika z pracodawcą (firmą albo rekruterem, z akceptacją kontaktu)
 * i pracodawcy z administracją serwisu (wspólna skrzynka adminów, bez akceptacji).
 * Blokady, jednostronne usuwanie, "pisze...", odczytanie i powiadomienia - bez WebSocketów (odpytywanie).
 */
class MessengerService
{
    public const STATE_GUEST = 'guest';

    public const STATE_NOT_WORKER = 'not_worker';

    public const STATE_UNVERIFIED = 'unverified';

    public const STATE_EMPLOYER_UNAVAILABLE = 'employer_unavailable';

    public const STATE_EMPLOYER_OFFLINE = 'employer_offline';

    public const STATE_BLOCKED = 'blocked';

    public const STATE_PENDING = 'pending';

    public const STATE_CONVERSATION_EXISTS = 'conversation_exists';

    public const STATE_AVAILABLE = 'available';

    public const BLOCK_24H = '24h';

    public const BLOCK_PERMANENT = 'permanent';

    /**
     * Jak długo po ostatnim sygnale z klawiatury pokazujemy "pisze...".
     */
    public const TYPING_TTL_SECONDS = 6;

    /**
     * Najczęściej jeden e-mail do odbiorcy na rozmowę w tym oknie czasowym.
     */
    public const MAIL_COOLDOWN_MINUTES = 30;

    /**
     * Odczytanie wiadomości od nowego kandydata - pozycja w cenniku punktów (config/getPoints.php,
     * zmieniana w panelu admina). Do czasu pierwszej zmiany w panelu obowiązuje cena domyślna.
     */
    public const UNLOCK_ACTION = 'OpenMessage';

    public const UNLOCK_POINTS_DEFAULT = 120;

    /**
     * Aktywny pracownik: zweryfikowany e-mail i konto niezablokowane.
     */
    public function isActiveWorker(User $user): bool
    {
        return $user->isMessengerWorker()
            && $user->hasVerifiedEmail()
            && $user->user_blocked === null;
    }

    /**
     * Pracodawca może przyjmować wiadomości: konto firmy lub rekrutera niezablokowane
     * (u rekrutera także konto jego firmy).
     */
    public function isAvailableEmployer(User $employer): bool
    {
        if (! $employer->isMessengerEmployer() || $employer->user_blocked !== null) {
            return false;
        }

        return ! $employer->isRecruiter() || ($employer->user && $employer->user->user_blocked === null);
    }

    /**
     * Do kogo pisze pracownik z widoku oferty: oferta rekrutera - do rekrutera, oferta firmy - do firmy.
     * Rekruter oferty to główny rekruter (recruiter_id), o ile nadal należy do firmy oferty.
     */
    public function employerForProject(Project $project): ?User
    {
        $recruiter = $project->recruiter_id && $project->recruiter_id !== $project->user_id
            ? User::find($project->recruiter_id)
            : null;

        if ($recruiter && $recruiter->isRecruiter() && $recruiter->recruiter_from_firm_id === $project->user_id) {
            return $recruiter;
        }

        // Świeże konto z bazy - oferta bywa wczytana z cache razem z nieaktualną aktywnością firmy
        return User::find($project->user_id);
    }

    public function conversationBetween(User $employer, User $worker): ?Conversation
    {
        return Conversation::where('employer_id', $employer->id)
            ->where('type', Conversation::TYPE_WORKER)
            ->where('worker_id', $worker->id)
            ->first();
    }

    /**
     * Rozmowa pracodawcy z administracją - jedna na konto, wspólna dla wszystkich adminów.
     */
    public function adminConversationFor(User $employer): ?Conversation
    {
        return Conversation::where('employer_id', $employer->id)
            ->where('type', Conversation::TYPE_ADMIN)
            ->first();
    }

    /**
     * Powód odmowy napisania przez admina do firmy/rekrutera lub null. Admin pisze także
     * do kont, które wyłączyły przyjmowanie wiadomości.
     */
    public function adminStartDeniedReason(User $admin, User $employer): ?string
    {
        if (! $admin->isMessengerAdmin()) {
            return __('messenger.denied.adminOnly');
        }

        if (! $employer->isMessengerEmployer()) {
            return __('messenger.denied.notEmployer');
        }

        if ($this->isBlockedByAdministration($employer)) {
            return __('messenger.denied.unblockFirst');
        }

        return null;
    }

    /**
     * Rozmowa z administracją nie wymaga akceptacji.
     */
    public function startAdminConversation(User $admin, User $employer, string $body): Conversation
    {
        return DB::transaction(function () use ($admin, $employer, $body) {
            $conversation = Conversation::where('employer_id', $employer->id)
                ->where('type', Conversation::TYPE_ADMIN)
                ->lockForUpdate()
                ->first()
                ?? Conversation::create([
                    'type' => Conversation::TYPE_ADMIN,
                    'employer_id' => $employer->id,
                    'admin_id' => $admin->id,
                    'status' => Conversation::STATUS_ACCEPTED,
                    'accepted_at' => now(),
                ]);

            $this->sendMessage($conversation, $admin, $body);

            return $conversation;
        });
    }

    /**
     * Stan przycisku "Napisz wiadomość" na stronie oferty i firmy.
     *
     * @return array<string, mixed>
     */
    public function contactStateFor(?User $viewer, User $employer, ?Project $project = null): array
    {
        $conversation = $viewer?->isMessengerWorker() ? $this->conversationBetween($employer, $viewer) : null;

        $state = match (true) {
            $viewer === null => self::STATE_GUEST,
            ! $viewer->isMessengerWorker() => self::STATE_NOT_WORKER,
            ! $this->isActiveWorker($viewer) => self::STATE_UNVERIFIED,
            $this->isBlockedBetween($viewer, $employer) => self::STATE_BLOCKED,
            (bool) $conversation?->isPending() => self::STATE_PENDING,
            $conversation !== null => self::STATE_CONVERSATION_EXISTS,
            ! $this->isAvailableEmployer($employer) => self::STATE_EMPLOYER_UNAVAILABLE,
            ! $employer->messenger_online => self::STATE_EMPLOYER_OFFLINE,
            default => self::STATE_AVAILABLE,
        };

        return [
            'state' => $state,
            'employer_id' => $employer->id,
            'employer_name' => $employer->messengerName(),
            'is_recruiter' => $employer->isRecruiter(),
            'project_id' => $project?->id,
            'project_title' => $project ? $this->projectTitle($project) : null,
            'conversation_id' => $conversation?->id,
            'is_online' => $employer->isOnline(),
            'last_seen_at' => $employer->last_seen_at?->toIso8601String(),
            'reply_hours' => $employer->messenger_reply_hours,
        ];
    }

    /**
     * Powód odmowy założenia rozmowy lub null, gdy pracownik może napisać.
     */
    public function startDeniedReason(User $worker, User $employer): ?string
    {
        if (! $worker->isMessengerWorker()) {
            return __('messenger.denied.workersOnly');
        }

        if (! $this->isActiveWorker($worker)) {
            return __('messenger.denied.verifyEmail');
        }

        if (! $this->isAvailableEmployer($employer)) {
            return __('messenger.denied.employerUnavailable');
        }

        if (! $employer->messenger_online) {
            return __('messenger.denied.employerOffline');
        }

        if ($this->isBlockedBetween($worker, $employer)) {
            return __('messenger.denied.blocked');
        }

        if ($this->conversationBetween($employer, $worker)?->isPending()) {
            return __('messenger.denied.waitingForAcceptance');
        }

        return null;
    }

    /**
     * Powód odmowy wysłania wiadomości w istniejącej rozmowie lub null.
     */
    public function replyDeniedReason(Conversation $conversation, User $sender): ?string
    {
        if (! $conversation->hasParticipant($sender)) {
            return __('messenger.denied.notParticipant');
        }

        if ($this->isConversationBlocked($conversation)) {
            return __('messenger.denied.blocked');
        }

        if ($conversation->isWithAdmin()) {
            if ($conversation->isEmployer($sender) && $sender->user_blocked !== null) {
                return __('messenger.denied.accountInactive');
            }

            return null;
        }

        if ($conversation->isEmployer($sender)) {
            if ($conversation->isPending()) {
                return __('messenger.denied.acceptFirst');
            }

            if (! $this->isAvailableEmployer($sender)) {
                return __('messenger.denied.accountInactive');
            }

            return null;
        }

        if ($conversation->isPending()) {
            return __('messenger.denied.waitingForAcceptance');
        }

        return $this->startDeniedReason($sender, $conversation->employer);
    }

    /**
     * Pierwsza wiadomość pracownika. Gdy rozmowa już istnieje (np. zaakceptowana albo
     * usunięta przez pracownika), wiadomość trafia do niej zamiast tworzyć nową.
     */
    public function startConversation(User $worker, User $employer, string $body, ?Project $project = null): Conversation
    {
        return DB::transaction(function () use ($worker, $employer, $body, $project) {
            $conversation = Conversation::firstOrCreate(
                ['employer_id' => $employer->id, 'worker_id' => $worker->id],
                ['type' => Conversation::TYPE_WORKER, 'project_id' => $project?->id, 'status' => Conversation::STATUS_PENDING],
            );

            $this->sendMessage($conversation, $worker, $body, $project);

            return $conversation;
        });
    }

    public function sendMessage(Conversation $conversation, User $sender, string $body, ?Project $project = null): Message
    {
        $message = DB::transaction(function () use ($conversation, $sender, $body, $project) {
            $message = $conversation->messages()->create([
                'sender_id' => $sender->id,
                'project_id' => $project?->id,
                'body' => $body,
            ]);

            $conversation->update(['last_message_at' => $message->created_at]);

            return $message;
        });

        $this->clearTyping($conversation, $sender);
        $this->notifyRecipient($conversation, $message);

        return $message;
    }

    public function unlockPrice(): int
    {
        return (int) config('getPoints.'.self::UNLOCK_ACTION, self::UNLOCK_POINTS_DEFAULT);
    }

    /**
     * Firma, z której konta schodzą punkty: dla rekrutera - jego firma.
     */
    public function employerFirm(User $employer, bool $lockForUpdate = false): ?Firm
    {
        $firmUserId = $employer->isRecruiter() ? $employer->recruiter_from_firm_id : $employer->id;

        // Zawsze świeży stan punktów z bazy (przy pobieraniu - z blokadą wiersza)
        return Firm::where('user_id', $firmUserId)->when($lockForUpdate, fn ($q) => $q->lockForUpdate())->first();
    }

    /**
     * Odczytanie wiadomości od kandydata: pobiera punkty z konta firmy raz za rozmowę.
     *
     * @return bool false - za mało punktów na koncie firmy
     */
    public function unlock(Conversation $conversation, User $employer): bool
    {
        return DB::transaction(function () use ($conversation, $employer) {
            // Blokada wiersza - podwójne kliknięcie nie pobierze punktów dwa razy
            $fresh = Conversation::whereKey($conversation->id)->lockForUpdate()->first();
            if ($fresh->unlocked_at !== null) {
                return true;
            }

            $firm = $this->employerFirm($employer, lockForUpdate: true);
            $price = $this->unlockPrice();

            if (! $firm || $firm->points < $price) {
                return false;
            }

            if ($price > 0) {
                app(PointService::class)->decrement($firm->user, $price, self::UNLOCK_ACTION);
            }

            $fresh->update(['unlocked_at' => now(), 'unlocked_by_id' => $employer->id, 'unlock_points' => $price]);
            $conversation->setRawAttributes($fresh->getAttributes(), true);

            return true;
        });
    }

    public function accept(Conversation $conversation): void
    {
        $conversation->update([
            'status' => Conversation::STATUS_ACCEPTED,
            'accepted_at' => now(),
        ]);

        $conversation->worker?->notify(new ConversationAcceptedNotification($conversation));
    }

    /**
     * Jednostronne usunięcie - rozmowa znika tylko u użytkownika, wiadomości zostają w archiwum.
     */
    public function deleteFor(Conversation $conversation, User $user): void
    {
        // Po stronie administracji usunięcie ukrywa rozmowę wszystkim adminom (wspólna skrzynka).
        $column = $conversation->isEmployer($user) ? 'employer_deleted_at' : 'participant_deleted_at';

        $conversation->update([$column => now()]);

        // Ukryte wiadomości nie powinny zawyżać licznika nieprzeczytanych.
        $this->markAsRead($conversation, $user);
    }

    public function block(User $blocker, User $blocked, string $duration): ContactBlock
    {
        return ContactBlock::updateOrCreate(
            ['blocker_id' => $blocker->id, 'blocked_id' => $blocked->id],
            ['blocked_until' => $duration === self::BLOCK_24H ? now()->addDay() : null],
        );
    }

    public function unblock(User $blocker, User $blocked): void
    {
        ContactBlock::where('blocker_id', $blocker->id)
            ->where('blocked_id', $blocked->id)
            ->delete();
    }

    public function activeBlockBy(User $blocker, User $blocked): ?ContactBlock
    {
        return ContactBlock::active()
            ->where('blocker_id', $blocker->id)
            ->where('blocked_id', $blocked->id)
            ->first();
    }

    /**
     * Blokada w rozmowie: z pracownikiem - między parą użytkowników; z administracją -
     * nałożona przez dowolnego admina na pracodawcę (pracodawca nie może blokować administracji).
     */
    public function isConversationBlocked(Conversation $conversation): bool
    {
        return $conversation->isWithAdmin()
            ? $this->isBlockedByAdministration($conversation->employer)
            : $this->isBlockedBetween($conversation->employer, $conversation->worker);
    }

    /**
     * Aktywna blokada nałożona przez stronę użytkownika - do pokazania paska "Odblokuj".
     */
    public function activeBlockFor(Conversation $conversation, User $viewer): ?ContactBlock
    {
        if (! $conversation->isWithAdmin()) {
            return $this->activeBlockBy($viewer, $conversation->otherParticipant($viewer));
        }

        return $viewer->isMessengerAdmin() ? $this->administrationBlocks($conversation->employer)->first() : null;
    }

    /**
     * Zdejmuje blokadę strony użytkownika - w skrzynce administracji blokady wszystkich adminów.
     */
    public function unblockInConversation(Conversation $conversation, User $user): void
    {
        if ($conversation->isWithAdmin()) {
            $this->administrationBlocks($conversation->employer)->delete();

            return;
        }

        $this->unblock($user, $conversation->otherParticipant($user));
    }

    public function isBlockedByAdministration(User $employer): bool
    {
        return $this->administrationBlocks($employer)->exists();
    }

    private function administrationBlocks(User $employer): Builder
    {
        return ContactBlock::active()
            ->where('blocked_id', $employer->id)
            ->whereIn('blocker_id', User::role('admin')->select('users.id'));
    }

    public function isBlockedBetween(User $first, User $second): bool
    {
        return ContactBlock::active()
            ->where(fn ($query) => $query
                ->where(fn ($q) => $q->where('blocker_id', $first->id)->where('blocked_id', $second->id))
                ->orWhere(fn ($q) => $q->where('blocker_id', $second->id)->where('blocked_id', $first->id)))
            ->exists();
    }

    /**
     * Znacznik "pisze..." trzymamy chwilę w cache. Front odświeża go w trakcie pisania,
     * a druga strona odczytuje go odpytywaniem - bez WebSocketów.
     */
    public function markTyping(Conversation $conversation, User $user): void
    {
        Cache::put($this->typingKey($conversation, $conversation->isEmployer($user)), true, now()->addSeconds(self::TYPING_TTL_SECONDS));
    }

    public function clearTyping(Conversation $conversation, User $user): void
    {
        Cache::forget($this->typingKey($conversation, $conversation->isEmployer($user)));
    }

    /**
     * Czy pisze druga strona rozmowy względem oglądającego.
     */
    public function isOtherSideTyping(Conversation $conversation, User $viewer): bool
    {
        return Cache::has($this->typingKey($conversation, ! $conversation->isEmployer($viewer)));
    }

    /**
     * Klucz per strona rozmowy, bo w skrzynce administracji pisać może dowolny admin.
     */
    private function typingKey(Conversation $conversation, bool $employerSide): string
    {
        $side = $employerSide ? 'employer' : 'participant';

        return "messenger:typing:{$conversation->id}:{$side}";
    }

    /**
     * Oznacza jako przeczytane wiadomości drugiej strony. Admin czytający skrzynkę nie
     * oznacza wiadomości innych adminów - to pracodawca ma je przeczytać.
     */
    public function markAsRead(Conversation $conversation, User $reader): void
    {
        // Zablokowanej wiadomości pracodawca jeszcze nie przeczytał - pracownik nie zobaczy "Przeczytano"
        if ($conversation->isLockedFor($reader)) {
            return;
        }

        $conversation->messages()
            ->where('sender_id', $conversation->isEmployer($reader) ? '!=' : '=', $conversation->employer_id)
            ->whereNull('read_at')
            ->update(['read_at' => now()]);
    }

    /**
     * Otwarcie rozmowy oznacza jako przeczytane powiadomienia w dzwonku, które do niej prowadzą -
     * w skrzynce administracji u wszystkich adminów.
     */
    public function markNotificationsAsRead(Conversation $conversation, User $user): void
    {
        if ($conversation->isLockedFor($user)) {
            return;
        }

        $query = $user->isMessengerAdmin() && $conversation->isWithAdmin()
            ? DatabaseNotification::where('notifiable_type', $user->getMorphClass())
                ->whereIn('notifiable_id', User::role('admin')->select('users.id'))
                ->whereNull('read_at')
            : $user->unreadNotifications();

        $query->whereIn('type', [NewMessageNotification::class, ConversationAcceptedNotification::class])
            ->where('data->conversation_id', $conversation->id)
            ->update(['read_at' => now()]);
    }

    public function unreadCountFor(User $user): int
    {
        $isAdmin = $user->isMessengerAdmin();

        return Message::whereNull('read_at')
            ->when(! $isAdmin, fn ($query) => $query->where('sender_id', '!=', $user->id))
            ->whereHas('conversation', fn ($query) => $query
                ->visibleFor($user)
                // Admin widzi tylko skrzynkę administracji - liczą się wiadomości pracodawcy
                ->when($isAdmin, fn ($q) => $q->whereColumn('conversations.employer_id', 'messages.sender_id')))
            ->count();
    }

    /**
     * Krótki tytuł oferty w wiadomościach: stanowisko w języku strony i miasto ("Magazynier – Rybnik").
     */
    public function projectTitle(Project $project): string
    {
        $locale = app()->getLocale();
        $position = $project->position ?: $project->profession;
        $title = $position['allTranslations']['title'][$locale]
            ?? $position['allTranslations']['title']['pl']
            ?? $position['name']
            ?? null;

        if (! $title) {
            $title = is_array($project->title)
                ? ($project->title[$locale] ?? $project->title['pl'] ?? reset($project->title) ?: '')
                : (string) $project->title;
        }

        return $project->cityWork ? "{$title} – {$project->cityWork}" : (string) $title;
    }

    /**
     * Powiadomienie wysyłamy tylko przy pierwszej nieprzeczytanej wiadomości w rozmowie,
     * żeby seria wiadomości nie zasypała odbiorcy.
     */
    private function notifyRecipient(Conversation $conversation, Message $message): void
    {
        $sentByEmployer = $message->sender_id === $conversation->employer_id;

        $hasEarlierUnread = $conversation->messages()
            ->where('id', '!=', $message->id)
            ->where('sender_id', $sentByEmployer ? '=' : '!=', $conversation->employer_id)
            ->whereNull('read_at')
            ->exists();

        if ($hasEarlierUnread) {
            return;
        }

        if ($sentByEmployer && $conversation->isWithAdmin()) {
            // Administracja widzi wiadomości w panelu - bez maili do wszystkich adminów
            Notification::send(User::role('admin')->get(), new NewMessageNotification($message, false));

            return;
        }

        $recipient = $sentByEmployer ? $conversation->worker : $conversation->employer;

        $recipient?->notify(new NewMessageNotification($message, $this->shouldEmail($conversation, $recipient)));
    }

    /**
     * E-mail tylko wtedy, gdy odbiorcy nie ma teraz w serwisie (wiadomości widzi w panelu i dzwonku)
     * i najwyżej raz na MAIL_COOLDOWN_MINUTES na rozmowę - przy żywej wymianie wiadomości
     * odbiorca nie dostaje maila po każdej z nich.
     */
    private function shouldEmail(Conversation $conversation, User $recipient): bool
    {
        if ($recipient->isOnline()) {
            return false;
        }

        // Cache::add jest atomowe - zwraca false, gdy mail z tej rozmowy już niedawno wyszedł.
        return Cache::add(
            "messenger:mail:{$conversation->id}:{$recipient->id}",
            true,
            now()->addMinutes(self::MAIL_COOLDOWN_MINUTES),
        );
    }
}
