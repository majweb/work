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
        $temporaryImage = TemporaryFile::where('folder',request()->getContent())->first();
        if($temporaryImage){
            Storage::deleteDirectory('temps/'.$temporaryImage->folder);
            Storage::disk('local')->deleteDirectory('temp_uploads/'.$temporaryImage->folder);
            $temporaryImage->delete();
        }
        return request()->getContent();
    }
}
