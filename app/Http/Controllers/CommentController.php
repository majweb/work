<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\RateLimiter;

class CommentController extends Controller
{
    public function store(Request $request)
    {
        // Limit 5 komentarzy na godzinę (możesz zmienić)
        $key = 'comment:'.auth()->id();
        $maxAttempts = 5;
        $decaySeconds = 3600; // 1 godzina

        if (RateLimiter::tooManyAttempts($key, $maxAttempts)) {
            $seconds = RateLimiter::availableIn($key);
            $minutes = ceil($seconds / 60);

            session()->flash('flash.banner', __("Możesz dodać kolejny komentarz za {$minutes} min."));
            session()->flash('flash.bannerStyle', 'danger');
            return back();
        }

        RateLimiter::hit($key, $decaySeconds);

        // Walidacja danych
        $validated = $request->validate([
            'content' => 'required|string',
            'article_id' => 'required|exists:articles,id',
            'parent_id' => 'nullable|exists:comments,id'
        ]);

        // Tworzenie komentarza
        $comment = Comment::create([
            'content' => $validated['content'],
            'article_id' => $validated['article_id'],
            'parent_id' => $validated['parent_id'] ?? null,
            'user_id' => auth()->id(),
        ]);

        session()->flash('flash.banner', __('Komentarz dodany pomyślnie!'));
        session()->flash('flash.bannerStyle', 'success');

        return back();
    }

    public function destroy(Comment $comment)
    {
        $this->authorize('delete', $comment);
        $comment->delete();
        return back();
    }

}
