<?php

namespace App\Policies;

use App\Models\ExternalCompany;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class ExternalCompanyPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        return $user->hasAnyRole(['firm', 'recruit']);
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, ExternalCompany $externalCompany): bool
    {
        return $user->hasAnyRole(['firm', 'recruit']) && ($user->recruiter_from_firm_id ?? $user->id) === $externalCompany->user_id;
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return $user->hasAnyRole(['firm', 'recruit']);
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, ExternalCompany $externalCompany): bool
    {
        return $user->hasAnyRole(['firm', 'recruit']) && ($user->recruiter_from_firm_id ?? $user->id) === $externalCompany->user_id;
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, ExternalCompany $externalCompany): bool
    {
        return $user->hasAnyRole(['firm', 'recruit']) && ($user->recruiter_from_firm_id ?? $user->id) === $externalCompany->user_id;
    }
}
