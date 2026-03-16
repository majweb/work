<?php

namespace App\Services;

use App\Models\PointHistory;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class PointService
{
    /**
     * Zmniejsza liczbę punktów użytkownika (firmy) i zapisuje w historii.
     */
    public function decrement(User $user, int $points, string $actionName): void
    {
        DB::transaction(function () use ($user, $points, $actionName) {
            $firm = $user->firm;

            if (!$firm) {
                throw new \Exception("Użytkownik nie posiada przypisanej firmy.");
            }

            $firm->decrement('points', $points);
            $firm->refresh();

            PointHistory::create([
                'user_id' => $user->id,
                'type' => 'usage', // zużycie
                'action_name' => $actionName,
                'points' => $points,
                'balance_after' => $firm->points,
            ]);
        });
    }

    /**
     * Zwiększa liczbę punktów użytkownika (firmy) i zapisuje w historii.
     */
    public function increment(User $user, int $points, string $actionName): void
    {
        DB::transaction(function () use ($user, $points, $actionName) {
            $firm = $user->firm;

            if (!$firm) {
                throw new \Exception("Użytkownik nie posiada przypisanej firmy.");
            }

            $firm->increment('points', $points);
            $firm->refresh();

            PointHistory::create([
                'user_id' => $user->id,
                'type' => 'purchase', // zakup / dodanie
                'action_name' => $actionName,
                'points' => $points,
                'balance_after' => $firm->points,
            ]);
        });
    }
    /**
     * Ustawia konkretną liczbę punktów dla użytkownika i zapisuje w historii.
     */
    public function set(User $user, int $points, string $actionName): void
    {
        DB::transaction(function () use ($user, $points, $actionName) {
            $firm = $user->firm;

            if (!$firm) {
                throw new \Exception("Użytkownik nie posiada przypisanej firmy.");
            }

            $firm->update(['points' => $points]);
            $firm->refresh();

            PointHistory::create([
                'user_id' => $user->id,
                'type' => 'set',
                'action_name' => $actionName,
                'points' => $points,
                'balance_after' => $firm->points,
            ]);
        });
    }
}
