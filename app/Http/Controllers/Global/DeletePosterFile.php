<?php

namespace App\Http\Controllers\Global;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class DeletePosterFile extends Controller
{
    public function __invoke()
    {
        preg_match('/\/storage\/(\d+)\//', request()->source, $matches);
        if (isset($matches[1])) {
            $folder = $matches[1];
            $media = Media::where('id', $folder)->first();
            if ($media) {
                $media->delete();
            }
        }
    }
}
