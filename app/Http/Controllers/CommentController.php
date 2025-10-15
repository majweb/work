<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Comment;
use App\Notifications\CommentPostedNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\RateLimiter;

class CommentController extends Controller
{
    public function store(Request $request)
    {

        // Limit 5 komentarzy na godzinę (możesz zmienić)
        $key = 'comment:' . auth()->id();
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

        $validated = $request->validate([
            'content' => 'required|string|min:2|max:1000',
            'article_id' => 'required|exists:articles,id',
            'parent_id' => 'nullable|exists:comments,id'
        ], [
            'content.required' => __('comments.content_required'),
            'content.min' => __('comments.content_min'),
            'content.max' => __('comments.content_max'),
            'article_id.required' => __('comments.article_required'),
            'article_id.exists' => __('comments.article_exists'),
            'parent_id.exists' => __('comments.parent_exists'),
        ]);

        $article = Article::with('user')->find($validated['article_id']);

        if (!$article) {
            abort(404, __('Artykuł nie został znaleziony.'));
        }

        $whichFirm = $article->user;

        // Tworzenie komentarza
        $comment = Comment::create([
            'content' => $validated['content'],
            'article_id' => $validated['article_id'],
            'parent_id' => $validated['parent_id'] ?? null,
            'user_id' => auth()->id(),
        ]);
        if ($whichFirm) {
            $lang = app()->getLocale();
            $whichFirm->notify((new CommentPostedNotification($comment))->locale($lang));
        }

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
