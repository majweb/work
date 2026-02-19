<?php

namespace App\Http\Controllers;

use App\Jobs\MergeVideoChunksJob;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Str;
use App\Models\CvVideo;

class VideoController extends Controller
{
    /**
     * Obsługa przesyłania fragmentów nagrania wideo
     */


    public function upload(Request $request)
    {
        $request->validate([
            'chunk' => 'required|file',
            'upload_id' => 'required|string',
            'chunk_index' => 'required|integer|min:0',
            'total_chunks' => 'required|integer|min:1',
            'project_id' => 'required|integer|exists:projects,id',
        ]);

        $uploadId = $request->upload_id;
        $projectId = $request->project_id;
        $chunkIndex = $request->chunk_index;
        $totalChunks = $request->total_chunks;

        $tempDir = "temp_uploads/{$uploadId}";

        if (!Storage::disk('local')->exists($tempDir)) {
            Storage::disk('local')->makeDirectory($tempDir);
        }

        $chunkFileName = "chunk_{$chunkIndex}";

        Storage::disk('local')->putFileAs($tempDir, $request->file('chunk'), $chunkFileName);

        // Zapamiętaj całkowitą liczbę chunków dla listenera (aby wiedział, ile ich ma być)
        Cache::put("video_upload:{$uploadId}:total_chunks", $totalChunks, now()->addHours(6));
        Cache::put("video_upload:{$uploadId}:project_id", $projectId, now()->addHours(6));

        if (!Storage::disk('local')->exists("{$tempDir}/{$chunkFileName}")) {
            return response()->json(['success' => false, 'message' => 'Chunk not saved'], 500);
        }

        // Jeśli to ostatni chunk, stwórz rekord i dispatch job do scalania (Model Szybki)
        if ($chunkIndex == $totalChunks - 1) {
            $cvVideo = CvVideo::create([
                'temp_session_id' => $uploadId,
                'project_id'      => $projectId,
                'user_id'         => auth()->id(),
                'file_path'       => '', // placeholder, zostanie uzupełnione przez Job
            ]);

            MergeVideoChunksJob::dispatch($uploadId, $totalChunks, (int) $projectId, (int) auth()->id(), $cvVideo->id);
        }

        return response()->json([
            'success' => true,
            'message' => "Chunk {$chunkIndex} uploaded",
        ]);
    }

}
