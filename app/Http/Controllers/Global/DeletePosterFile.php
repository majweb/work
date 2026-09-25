<?php

namespace App\Http\Controllers\Global;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Banner;
use App\Models\Candidate;
use App\Models\CvClassic;
use App\Models\Firm;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class DeletePosterFile extends Controller
{
    public function __invoke()
    {
        preg_match('/\/storage\/(\d+)\//', (string) request()->source, $matches);
        if (isset($matches[1])) {
            $media = Media::where('id', $matches[1])->first();
            if ($media) {
                abort_unless($this->canDelete(auth()->user(), $media->model), 403);
                $media->delete();
            }
        }
    }

    // Usunąć plik może tylko właściciel modelu, do którego należy, albo admin
    private function canDelete(User $user, ?Model $owner): bool
    {
        if ($user->hasRole('admin')) {
            return true;
        }

        return match (true) {
            $owner instanceof Firm, $owner instanceof Article, $owner instanceof Banner => (int) $owner->user_id === $user->id,
            $owner instanceof CvClassic => (int) $owner->worker_id === $user->id,
            $owner instanceof Candidate => (int) $owner->created_by_id === $user->id,
            default => false,
        };
    }
}
