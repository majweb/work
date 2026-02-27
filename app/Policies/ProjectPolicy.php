<?php

namespace App\Policies;

use App\Models\Project;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class ProjectPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        return $user->hasRole('firm') || $user->hasRole('recruit');
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, Project $project): bool
    {
        if ($user->hasRole('firm') && $user->hasRole('recruit')) {
            return $project->user_id == $user->id;
        }

        if ($user->hasRole('recruit')) {
            return $project->recruiter_id == $user->id || (is_array($project->other_recruits) && collect($project->other_recruits)->contains('value', $user->id));
        }

        return $user->hasRole('firm') && $project->user_id == $user->id;
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return false;
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Project $project): bool
    {
        if ($user->hasRole('firm') && $user->hasRole('recruit')) {
            return $project->user_id == $user->id;
        }

        if ($user->hasRole('recruit')) {
            return $project->recruiter_id == $user->id || (is_array($project->other_recruits) && collect($project->other_recruits)->contains('value', $user->id));
        }

        return $user->hasRole('firm') && $project->user_id == $user->id;
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Project $project): bool
    {
        if ($user->hasRole('firm') && $user->hasRole('recruit')) {
            return $project->user_id == $user->id;
        }

        if ($user->hasRole('recruit')) {
            return $project->recruiter_id == $user->id || (is_array($project->other_recruits) && collect($project->other_recruits)->contains('value', $user->id));
        }

        return $user->hasRole('firm') && $project->user_id == $user->id;
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, Project $project): bool
    {
        return false;
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, Project $project): bool
    {
        return false;
    }
}
