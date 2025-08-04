<?php

namespace App\Policies;

use App\Models\CandidateQuestion;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class CandidateQuestionPolicy
{
    use HandlesAuthorization;

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
    public function view(User $user, CandidateQuestion $candidateQuestion): bool
    {
        return $user->id === $candidateQuestion->created_by_id;
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return $user->hasRole('firm');
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, CandidateQuestion $candidateQuestion): bool
    {
        return $user->id === $candidateQuestion->created_by_id;
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, CandidateQuestion $candidateQuestion): bool
    {
        return $user->id === $candidateQuestion->created_by_id;
    }
}
