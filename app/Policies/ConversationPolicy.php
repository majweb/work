<?php

namespace App\Policies;

use App\Models\Conversation;
use App\Models\User;

/**
 * Dostęp do rozmowy mają wyłącznie jej uczestnicy. Reguły wysyłania wiadomości
 * (akceptacja, blokady, wyłączone wiadomości) sprawdza MessengerService.
 */
class ConversationPolicy
{
    /**
     * Uczestnik albo firma podglądająca rozmowę swojego rekrutera (tylko odczyt).
     */
    public function view(User $user, Conversation $conversation): bool
    {
        return $conversation->hasParticipant($user) || $conversation->isOverseenBy($user);
    }

    public function accept(User $user, Conversation $conversation): bool
    {
        return $conversation->isEmployer($user) && $conversation->isPending();
    }

    public function delete(User $user, Conversation $conversation): bool
    {
        return $conversation->hasParticipant($user);
    }

    /**
     * Pracodawca nie może blokować administracji - w takiej rozmowie blokuje tylko admin.
     */
    public function block(User $user, Conversation $conversation): bool
    {
        return $conversation->hasParticipant($user)
            && (! $conversation->isWithAdmin() || $user->isMessengerAdmin());
    }
}
