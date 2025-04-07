<?php

namespace App\Http\Controllers\Global;

use App\Http\Controllers\Controller;
use App\Models\TemporaryFile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

class DeleteTemporaryFileController extends Controller
{
    public function __invoke()
    {
        Log::info('Delete request data:', ['raw' => request()->getContent(), 'parsed' => request()->all()]);

        $temporaryImage = TemporaryFile::where('folder',request()->getContent())->first();
        if($temporaryImage){
            Storage::deleteDirectory('temps/'.$temporaryImage->folder);
            $temporaryImage->delete();
        }
        return request()->getContent();
    }
}
