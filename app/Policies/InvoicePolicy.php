<?php

namespace App\Policies;

use App\Models\Invoice;
use App\Models\User;

class InvoicePolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        return $user->hasRole('firm');
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, Invoice $invoice): bool
    {
        return $user->hasRole('firm') && $invoice->order->user_id == $user->id;
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Invoice $invoice): bool
    {
        return $user->hasRole('firm') && $invoice->order->user_id == $user->id;

    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Invoice $invoice): bool
    {
        return $user->hasRole('firm') && $invoice->order->user_id == $user->id;

    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, Invoice $invoice): bool
    {
        return $user->hasRole('firm') && $invoice->order->user_id == $user->id;

    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, Invoice $invoice): bool
    {
        return $user->hasRole('firm') && $invoice->order->user_id == $user->id;

    }
}
