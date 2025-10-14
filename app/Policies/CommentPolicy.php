<?php

namespace App\Policies;

use App\Models\Comment;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class CommentPolicy
{
    /**
     * Determine whether the user can delete the comment.
     */
    public function delete(User $user, Comment $comment): bool
    {
        // Użytkownik może usunąć komentarz jeśli:
        // 1. Jest autorem komentarza
        // 2. Jest administratorem (zakładając, że mamy pole is_admin w modelu User)
        // 3. Jest właścicielem artykułu, do którego został dodany komentarz
        return $user->id === $comment->user_id ||
            $user->hasRole('admin') ||
            $user->id === $comment->article->user_id;
    }

    /**
     * Determine whether the user can update the comment.
     */
    public function update(User $user, Comment $comment): bool
    {
        // Tylko autor komentarza może go edytować
        return $user->id === $comment->user_id;
    }

}
