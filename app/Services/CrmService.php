<?php

namespace App\Services;

use App\Models\User;
use Illuminate\Http\Client\PendingRequest;
use Illuminate\Support\Facades\Http;

class CrmService
{
    /**
     * Zwraca pre-skonfigurowanego klienta HTTP dla CRM.
     */
    public function client(): PendingRequest
    {
        return Http::withHeaders([
            'X-API-KEY' => config('services.crm.key'),
        ])->baseUrl(config('services.crm.url'));
    }

    /**
     * Synchronizuje użytkownika (firmę) z systemem CRM.
     */
    public function syncUser(User $user, array $data = []): \Illuminate\Http\Client\Response
    {
        return $this->client()->post('/portal/sync', array_merge($data, [
            'work_user_id' => $user->id,
            'name' => $user->name,
            'email' => $user->email,
            'type' => 'firm',
        ]));
    }

    /**
     * Pobiera dane użytkownika z CRM (przykład GET).
     */
    public function getUserData(int $id): array
    {
        return $this->client()->get("/portal/user/{$id}")->json();
    }
}
